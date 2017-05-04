<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function usersroles()
    {
        return $this->belongsToMany(usersrole::class)->withPivot('created_at');
    }
}
