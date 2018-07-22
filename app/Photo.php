<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    // this follows convention for laravel website - check the docs for other polymophic relations
    public function imageable() {
    	return $this->morphTo();
    }
}
