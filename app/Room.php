<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
    	'name','image','floor','type_id','building_id','owner_id',
    ];

    public function type()
    {
    	return $this->belongsTo('App\Type');
    }

    public function building()
    {
    	return $this->belongsTo('App\Building');
    }

    public function owner()
    {
    	return $this->belongsTo('App\Owner');
    } 

    public function booking()
    {
    	return $this->hasMany('App\Booking');
    }
}
