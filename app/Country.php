<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //


    public function posts() {
    	// has many through relationship!
    	// first parameter is the post table, 
    	// second parameter is the user table
    	// they are returning the country_id
    	// relating the two tables
    	return $this->hasManyThrough('App\Post', 'App\User');

    }



}
