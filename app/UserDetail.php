<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{

    protected $table = 'users_detail';
    protected $guarded = [];
    public $timestamps = true;

public function user(){
    return $this->belongsTo('App\User','id','user');
}


}
