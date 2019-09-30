<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use DB;

class AvaliableRoomController extends Controller
{
    //
    public function show()
    {
    	$rooms = DB::table('rooms')->take(3)->get();

    	dd($rooms);
    	return view('frontend.a_room',compact('rooms'));
    }
}
