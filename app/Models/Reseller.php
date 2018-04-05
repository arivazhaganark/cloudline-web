<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reseller extends Model {

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'resellers';

    use Notifiable,
        SoftDeletes,
        Uuids;

    protected $fillable = ['user_id', 'firm_name', 'address', 'city', 'phone', 'email', 'state', 'fax', 'mobile', 'type', 'years_corp', 'employees_count',
        'capital', 'sales_turnover', 'roc_no', 'gst_no', 'pan_no', 'trade_date', 'place'];
    public static $types = ['sole_proprietor' => 'Sole Proprietor', 'partnership_firm' => 'Partnership Firm', 'private_limited_company' => 'Private Limited Company', 'public_limited_company' => 'Public Limited Company'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function reseller_files() {
        return $this->hasMany(ResellerFile::class);
    }

    public function reseller_contact_details() {
        return $this->hasMany(ResellerContactDetail::class);
    }
    
    public function reseller_bank_details() {
        return $this->hasOne(ResellerBankDetail::class);
    }

    public function reseller_office_details() {
        return $this->hasMany(ResellerOfficeDetail::class);
    }

    public function reseller_trade_details() {
        return $this->hasMany(ResellerTradeDetail::class);
    }

    public function _contactsave($datas) {
        $changes = [];        
        foreach ($datas as $key => $data) {
            $model = ResellerContactDetail::updateOrCreate(['reseller_id' => $this->id, 'type' => $key], $data);
            if (!$model->wasRecentlyCreated) {
                $changes[$key] = $model::$trackchanges;
                $model::$trackchanges = null;
            }
        }
        return $changes;
    }

    public function _officedetailsave($datas) {
        $changes = [];
        foreach ($datas as $key => $data) {
            $model = ResellerOfficeDetail::updateOrCreate(['reseller_id' => $this->id, 'type' => $key], $data);
            if (!$model->wasRecentlyCreated) {
                $changes[$key] = $model::$trackchanges;
                $model::$trackchanges = null;
            }
        }
        return $changes;
    }

    public function _bankdetailsave($data) {
        $changes = [];
        $model = ResellerBankDetail::updateOrCreate(['reseller_id' => $this->id], $data);
        if (!$model->wasRecentlyCreated) {
            $changes = $model::$trackchanges;
            $model::$trackchanges = null;
        }
        return $changes;
    }

    public function _tradedetailsave($datas) {
        $changes = [];
        foreach ($datas as $key => $data) {
            if (!empty($data['firm_name'])) {
                $model = ResellerTradeDetail::updateOrCreate(['reseller_id' => $this->id, 'type' => $key], $data);
                if (!$model->wasRecentlyCreated) {
                    $changes[$key] = $model::$trackchanges;
                    $model::$trackchanges = null;
                }
            }
        }
        return $changes;
    }

    public function _attachment($files) {
        $changes = [];
        if ($files) {
            foreach ($files as $key => $file) {
                $pathToFile = $this->_uploadfile($file);
                $file_name = $file->getClientOriginalName();
                $model = ResellerFile::updateOrCreate(['reseller_id' => $this->id, 'file_type' => $key], ['file_path' => $pathToFile,'file_name'=>$file_name]);
                $changes[$key] = $pathToFile;
                $model::$trackchanges = null;
            }
        }
        return $changes;
    }

    public function _supportdocs($docs) {
        $changes = [];
        if ($docs) {
            foreach ($docs as $key => $files) {
                foreach ($files as $file) {
                    $pathToFile = $this->_uploadfile($file);
                    $file_name = $file->getClientOriginalName();
                    $model = ResellerFile::create(['reseller_id' => $this->id, 'file_type' => $key,'file_path' => $pathToFile,'file_name'=>$file_name]);
                    $changes[$key][] = $pathToFile;
                    $model::$trackchanges = null;
                }
            }
        }
        return $changes;
    }

    public function _uploadfile($file) {
        $path = \Illuminate\Support\Facades\Storage::disk('public')->putFile('uploads', $file);
        
        return $path;
    }

}
