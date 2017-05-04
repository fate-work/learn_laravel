<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usersrole extends Model
{
    public function roles()
    {
        return $this->belongsToMany(role::class)->withTimestamps();
    }
}
