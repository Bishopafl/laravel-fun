<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function posts() {
    	// this is where we define the method for each tag that relates to the post
    	return $this->morphedByMany('App\Post','taggable');
    }

    public function videos() {
    	// this is where we define the method for each tag that relates to the video
    	return $this->morphedByMany('App\Video','taggable');
    }
}
