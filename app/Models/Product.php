<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model {

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'products';

    use Notifiable,
        SoftDeletes,
        Uuids;

    protected $fillable = ['id', 'title', 'icon', 'description'];

}
