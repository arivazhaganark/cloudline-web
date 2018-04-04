<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResellerContactDetail extends Model {

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'reseller_contact_details';

    use Notifiable,
        SoftDeletes,
        Uuids;

    protected $fillable = ['reseller_id', 'name', 'address', 'city', 'mobile','type'];
    
    public function reseller() {
        return $this->belongsTo(Reseller::class);
    }

}
