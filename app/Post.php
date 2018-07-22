<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//FOR routes.php line 135
use Illuminate\Database\Eloquent\SoftDeletes;

// write anything here, it will override the parent
class Post extends Model
{


	use SoftDeletes;


	protected $dates = ['deleted_at'];

    protected $fillable = [
    	// tells the code that it is safe to modify these columns in the database
    	'title',
    	'content'
    ];

    public function user() {
    	// get user for whatever post id you want!
    	return $this->belongsTo('App\User');
    }

    // this can be named whatever you want
    public function photos() {
    	return $this->morphMany('App\Photo', 'imageable');
    }

    public function tags() {
        // want to tag the post
        // refer to tag class and the taggable ID
        return $this->morphToMany('App\Tag', 'taggable');

    }
}
