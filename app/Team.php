<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players()
    {
        return $this->belongsTo('App\Player');
    }

    public function games()
    {
        return $this->belongsTo('App\Game');
    }
    
    public function images()
    {
        return $this->hasOne('App\Image');
    }
}
