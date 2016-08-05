<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    public function league()
    {
        return $this->belongsTo('App\Game');
    }
}
