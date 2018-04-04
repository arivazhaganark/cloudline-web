<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResellerFile extends Model {

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'reseller_files';

    use Notifiable,
        SoftDeletes,
        Uuids;

    protected $fillable = ['reseller_id','file_type','file_path'];
    
    public function reseller() {
        return $this->belongsTo(Reseller::class);
    }

}
