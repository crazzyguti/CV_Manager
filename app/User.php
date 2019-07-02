<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = ["fname", "lname", "email", "bdate", "phone", "gender", "password", "register_ip", "active", "activation_key"];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
        'activation_key', "active",
        "register_ip",
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsToMany('Role');
    }

    public function attempts()
    {
        return $this->hasMany('Login_attempts');
    }

}
