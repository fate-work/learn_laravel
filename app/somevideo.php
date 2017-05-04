<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class somevideo extends Model
{
    public function sometags()
    {
        return $this->morphToMany('sometag::class','taggable');
    }

}
