<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class countrie extends Model
{
    public function posts()
    {
        return $this->hasManyThrough(post::class,userscountrie::class);
    }
}
