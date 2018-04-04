<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResellerTradeDetail extends Model {

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'reseller_trade_details';

    use Notifiable,
        SoftDeletes,
        Uuids;

    protected $fillable = ['reseller_id', 'firm_name', 'address','city', 'phone','state','fax_no'];
    
    public function reseller() {
        return $this->belongsTo(Reseller::class);
    }

}
