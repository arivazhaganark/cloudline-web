<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'products';

    use Notifiable,
        SoftDeletes,
        Uuids;

    protected $fillable = ['id', 'title', 'icon', 'description'];

    public function getIconUrlAttribute()
    {
        if ($this->icon) {
            return Storage::disk('public')->url($this->icon);
        }
    }

}
