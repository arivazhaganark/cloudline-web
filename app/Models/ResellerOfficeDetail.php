<?php

namespace App\Models;

use App\Traits\TrackableReseller;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class ResellerOfficeDetail extends Model {

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'reseller_office_details';

    use Notifiable,
        SoftDeletes,
        Uuids,
        TrackableReseller;

    protected $fillable = ['reseller_id', 'name', 'contact_no', 'email', 'type'];

    public function reseller() {
        return $this->belongsTo(Reseller::class);
    }

}
