<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //
    protected $fillable=[
    	'name','email','address','phone','profile'
    ];

    public function rooms()
    {
    	return $this->hasMany('App\Room');
    } 
}
