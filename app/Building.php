<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    //
    protected $fillable = [
    	'name','profile','location','township','city',
    ];

    public function rooms()
    {
    	return $this->hasMany('App\Room');
    } 
}
