<?php

namespace App\Traits;

trait TrackableReseller
{
    public $trackchanges = [];

    public static function bootTrackableReseller()
    {
        static::updating(function ($model) {
            $model->trackchanges = $model->getDirty();
        });
    }
}
