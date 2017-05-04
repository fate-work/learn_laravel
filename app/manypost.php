<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manypost extends Model
{
    public function comments()
    {
        return $this->morphMany('App\comment','commantable');
    }
}
