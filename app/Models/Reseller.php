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
        return $this->hasMany(ResellerContact::class);
    }

    public function reseller_office_details() {
        return $this->hasMany(ResellerOfficeDetail::class);
    }

    public function reseller_trade_details() {
        return $this->hasMany(ResellerTradeDetail::class);
    }

}
