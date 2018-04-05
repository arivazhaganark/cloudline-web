<?php

namespace App\Models;

use App\Traits\TrackableReseller;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class ResellerBankDetail extends Model {

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'reseller_bank_details';
    public static $trackchanges = [];

    use Notifiable,
        SoftDeletes,
        Uuids,
        TrackableReseller;

    protected $fillable = ['reseller_id', 'bank_name', 'contact_no','ifsc_code', 'address','phone','credit_limit','ac_no','type','amount','collateral'];
    
    public static $collaterals = ['no' => 'No','yes' => 'Yes'];

    public function reseller() {
        return $this->belongsTo(Reseller::class);
    }

}
