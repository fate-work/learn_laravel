<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
   'manypost'=>'App\manypost',
   'video'=>'App\video',
]);
class comment extends Model
{
    public function commantable()
    {
        return $this->morphTo();
    }
}
