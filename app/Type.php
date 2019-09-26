<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    protected $fillable = [
    	'name','price','num_of_people','description',
    ];

    public function room()
    {
    	return $this->hasMany('App\Room');
    }
}
