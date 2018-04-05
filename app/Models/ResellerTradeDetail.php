<?php

namespace App\Models;

use App\Traits\TrackableReseller;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class ResellerTradeDetail extends Model {

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'reseller_trade_details';
    public static $trackchanges = [];

    use Notifiable,
        SoftDeletes,
        Uuids,
        TrackableReseller;

    protected $fillable = ['reseller_id', 'firm_name', 'address', 'city', 'phone', 'state', 'fax_no', 'type'];

    public function reseller() {
        return $this->belongsTo(Reseller::class);
    }

}
