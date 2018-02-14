<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class DemoRequest extends Model
{
    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'demorequests';
    protected $dates = ['preferred_date','alternate_date'];

    use Notifiable, SoftDeletes,Uuids;

    protected $fillable = ['customer_id', 'location', 'preferred_date', 'alternate_date', 'schedule_time', 'person_incharge'];

}
