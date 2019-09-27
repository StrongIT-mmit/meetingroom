<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    //
    protected $fillable = [
    	'name','location','township','city',
    ];

    public function room()
    {
    	return $this->hasMany('App\Room');
    } 
}
