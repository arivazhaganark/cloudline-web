<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResellerBankDetail extends Model {

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'reseller_bank_details';

    use Notifiable,
        SoftDeletes,
        Uuids;

    protected $fillable = ['reseller_id', 'bank_name', 'contact_no','ifsc_code', 'address','phone','credit_limit','ac_no','type','amount','collateral'];
    
    public static $collaterals = ['1' => 'No','2' => 'Yes'];

    public function reseller() {
        return $this->belongsTo(Reseller::class);
    }

}
