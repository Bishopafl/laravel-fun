<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Goes to post table, and look for column user ID by default
    // if you want to specify different column, add second parameter
    // like: return $this->hasOne('App\Post', 'the_user_id');
    public function post() {
        return $this->hasOne('App\Post');

    }

    // one to many relationships
    public function posts() {

        return $this->hasMany('App\Post');
    }







}
