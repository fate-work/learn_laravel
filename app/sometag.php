<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sometag extends Model
{
    /**
     * Get all of the posts that are assigned this tag.
     */
    public function posts()
    {
        return $this->morphedByMany('App\somepost', 'taggable');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function videos()
    {
        return $this->morphedByMany('App\somevideo', 'taggable');
    }
}
