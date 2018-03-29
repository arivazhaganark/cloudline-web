<?php

namespace App\Models;

use App\Notifications\MailResetPasswordToken;
use App\Traits\Uuids;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {

    protected $table = 'users';
    public $timestamps = true;
    public $incrementing = false;

    use Notifiable,
        Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public $roles = ['A' => 'Admin', 'P' => 'Partner'];

    public function partner() {
        return $this->hasOne(Partner::class);
    }

    public function getIsAdminAttribute() {
        return ($this->role == 'A');
    }

    public function sendPasswordResetNotification($token) {
        $this->notify(new MailResetPasswordToken($token));
    }

    public function reseller() {
        return $this->hasMany(Reseller::class);
    }

}
