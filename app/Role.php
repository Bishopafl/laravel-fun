<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	// does inverse of what is in User.php line 46
    public function users() {
    	return $this->belongsToMany('App\User');
    }
}
