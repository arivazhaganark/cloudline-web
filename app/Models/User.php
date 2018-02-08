<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    public $timestamps = true;
    public $incrementing = false;

    use Notifiable, Uuids;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $roles = ['A' => 'Admin','P' => 'Partner'];
    
    public function partners() {
        return $this->hasMany(Partner::class);
    }
    
    public function getIsAdminAttribute() {
        return ($this->role == 'A');
    }
}
