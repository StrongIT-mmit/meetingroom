<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use DB;
<<<<<<< HEAD
use App\Type;
=======
>>>>>>> origin/wai-hein-mr-branch

class AvaliableRoomController extends Controller
{
    //
    public function show()
    {
<<<<<<< HEAD
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


    
=======
    	$rooms = DB::table('rooms')->take(3)->get();

    	dd($rooms);
    	return view('frontend.a_room',compact('rooms'));
    }
>>>>>>> origin/wai-hein-mr-branch
}
