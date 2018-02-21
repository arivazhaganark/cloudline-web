<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'settings';

    use Notifiable, SoftDeletes,Uuids;

    protected $fillable = ['name', 'meta_key', 'meta_value'];
    
}
