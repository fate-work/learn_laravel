<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobile extends Model
{
    protected $table='mobile';
    public function usersmobile()
    {
        return $this->belongsTo(Usersmobile::class);
    }
}
