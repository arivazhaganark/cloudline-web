<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResellerOfficeDetail extends Model {

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'reseller_office_details';

    use Notifiable,
        SoftDeletes,
        Uuids;

    protected $fillable = ['reseller_id', 'name', 'contact_no','email', 'type'];

    public function reseller() {
        return $this->belongsTo(Reseller::class);
    }

}
