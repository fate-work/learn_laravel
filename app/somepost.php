<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class somepost extends Model
{
    public function sometags()
    {
        return $this->morphToMany('App\sometag','taggable');
    }
}
