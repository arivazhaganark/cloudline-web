<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model {

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'contactus';

    use Notifiable,
        SoftDeletes,
        Uuids;

    protected $fillable = ['id', 'name', 'email', 'phone', 'message', 'ip_address'];

}
