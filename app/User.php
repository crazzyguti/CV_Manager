<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $table = 'users';
    public $timestamps = true;

    protected $guarded = [];

    protected $hidden = array('password');

    public function role()
    {
        return $this->belongsToMany('Role');
    }

    public function attempts()
    {
        return $this->hasMany('Login_attempts');
    }

    public function users_detail()
    {
        return $this->hasMany('users_detail', "user", "id");
    }

}
