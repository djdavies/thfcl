<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function players()
    {
        return $this->belongsTo('App/Player');
    }

    public function teams()
    {
        return $this->belongsTo('App/Team');
    }
}
