<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function teams()
    {
        return $this->hasMany('App\Team');
    }

    public function league()
    {
        return $this->hasOne('App\League');
    }

    public function rating()
    {
        return $this->belongsTo('App\Rating');
    }
}
