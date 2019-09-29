<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use DB;
use App\Type;

class AvaliableRoomController extends Controller
{
    //
    public function show()
    {
    	$types = Type::all();

    	$rooms = Room::all();
    	return view('frontend.a_room',compact('types','rooms'));
    }

    public function detail(Request $request)
    {
    	$id = $request->id;
    	$types = Type::all();
    	$rooms = DB::table('rooms')->where('type_id',$id)->get();
    	return view('frontend.a_room',compact('rooms','types'));
    }

    
}
