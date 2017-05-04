<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usersmobile extends Model
{
    protected $table='usersmobile';
    public function mobile()
    {
        return $this->hasMany(Mobile::class);
    }
}
