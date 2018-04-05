<?php

namespace App\Traits;

trait TrackableReseller
{
    public static function bootTrackableReseller()
    {
        static::updating(function ($model) {
            self::$trackchanges = $model->getDirty();
        });
    }
}
