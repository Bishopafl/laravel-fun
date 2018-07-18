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

}
