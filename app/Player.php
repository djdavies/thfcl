<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function team()
    {
        return $this->hasOne('App\Team');
    }

    public function image()
    {
        return $this->hasOne('App\Image');
    }

    public function rating()
    {
        return $this->belongsTo('App\Rating');
    }
}
