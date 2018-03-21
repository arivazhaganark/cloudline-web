<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'partners';

    use Notifiable, SoftDeletes,Uuids;

    protected $fillable = ['user_id', 'partner_type', 'company_name', 'phone', 'address', 'state', 'years_business', 'no_of_sales', 'no_of_technical', 'annual_revenue', 'sales_territory',
        'current_focus', 'products_offered', 'brands_deal'];
    protected $casts = [
        'current_focus' => 'array',
    ];

    public static $types = ['G' => 'Gold', 'S' => 'Silver', 'E' => 'Express'];
    public static $focuses = ['ED' => 'Education', 'EN' => 'Enterprises', 'G' => 'Government', 'H' => 'Health', 'IR' => 'Infrastructure & Retail', 'M' => 'Media', 'SP' => 'Service Provider'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function customers()
    {
        return $this->hasMany(Customer::class,'created_by','user_id');
    }
    
}
