<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function helo(Request $request){
        return request('name')." AND ".request('age');
    }
}
