<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
    	'name','image','floor','type_id',
    ];

    public function type()
    {
    	return $this->belongsTo('App\Type');
    }
}
