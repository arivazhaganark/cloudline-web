<?php

namespace App\Models;

use App\Traits\TrackableReseller;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class ResellerFile extends Model
{

    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'reseller_files';

    use Notifiable,
        SoftDeletes,
        Uuids,
        TrackableReseller;

    protected $fillable = ['reseller_id', 'file_type', 'file_path', 'file_name'];

    public function reseller()
    {
        return $this->belongsTo(Reseller::class);
    }

    public static function uploadFile($file, $data = [], $exists = false)
    {
        $file_name = $file->getClientOriginalName();
        $path = Storage::disk('public')->putFile('uploads', $file);
        $upload_data = ['file_path' => $path, 'file_name' => $file_name];
        if ($exists) {
            self::updateOrCreate($data, $upload_data);
        } else {
            self::create(array_merge($upload_data, $data));
        }
        return $path;
    }

}
