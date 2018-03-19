<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Customer extends Model {

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'customers';

    use Notifiable,SoftDeletes, Uuids;

    protected $fillable = ['id', 'name', 'company_name', 'email', 'phone', 'status','access_token','plan_name','plan_price','start_date','end_date','admin_comments'];
    
//    public static $statuses = ['0'=>'Un Verified','1'=>'Registered','2'=>'Customer'];
    
    public static $plan_names = ['Enterprise' => 'Enterprise', 'Wellness' => 'Wellness', 'Edu' => 'Edu','Starter'=>'Starter'];
    
    public function scopeRusers($query)
    {
        return $query->where('status', 1);
    }
    
    public function scopeCusers($query)
    {
        return $query->where('status', 2);
    }
    
    public function demorequests()
    {
        return $this->hasMany(DemoRequest::class,'customer_id','id');
    }
}
