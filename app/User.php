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


    // METHODS
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

    // many to many relationship using pivot tables
    public function roles() {
        return $this->belongsToMany('App\Role');

        // you can customize table names and columns follow format below
        // -----------------------------------------------------------------
        // user_roles => defines a different table name other than in migration name
        // user_id    => this is the foriegn key of user table
        // role_id    => the other foreign key of roles table
        // return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
        // we don't need to customize because we are following naming convention
        // -----------------------------------------------------------------
        // 
        // -----------------------------------------------------------------

    }






}
