<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Type;
use App\Building;
use App\Owner;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $rooms = Room::all();
        return view('admin.room.read',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $buildings = Building::all();
        $owners = Owner::all();
        $types = Type::all();
        return view('admin.room.create',compact('types','buildings','owners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        dd($request);
        $request->validate([
            "name" => 'required|min:5|max:191',
             
            
            "floor" => 'required',
            "type_id" => 'required',
            "building_id" => 'required',

            "owner_id" => 'required',
            
        ]);

        //if file, upload
        if ($request->hasfile('img')) {
            $img=$request->file('img');
            $upload_path = public_path().'/storage/img/room/';
            $name=$img->getClientOriginalName();
            $img->move($upload_path,$name);
            $path = '/storage/img/room/'.$name;
        }else{
            $path="";
        }   

        // Create
        Room::create([
        "name" => request('name') ,        
        "image" => $path,
        
        "floor"=> request('floor'),
        "type_id"=> request('type_id'),
        "building_id"=> request('building_id'),
        "owner_id"=> request('owner_id'),
    ]);

        //Redirect
        return redirect()->route('room.index')->with('status','Successfully Register!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
