<?php

namespace App\Models;

use App\Traits\TrackableReseller;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class ResellerFile extends Model {

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'reseller_files';
    public static $trackchanges = null;

    use Notifiable,
        SoftDeletes,
        Uuids,
        TrackableReseller;

    protected $fillable = ['reseller_id','file_type','file_path','file_name'];
    
    public function reseller() {
        return $this->belongsTo(Reseller::class);
    }

}
