<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buildings = Building::all();
        return view('admin.building.read',compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.building.create');
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
         $request->validate([
            "name" => 'required|min:5|max:191',
             "location" => 'required',            
            "township" => 'required',
            "city" => 'required',
            
            
            
        ]);

         //if file, upload
        if ($request->hasfile('img')) {
            $img=$request->file('img');
            $upload_path = public_path().'/storage/img/building/';
            $name=$img->getClientOriginalName();
            $img->move($upload_path,$name);
            $path = '/storage/img/building/'.$name;
        }else{
            $path="";
        }   

        // Create
        Building::create([
        "name" => request('name') ,        
        "profile" => $path,
        
        "location"=> request('location'),
        "township"=> request('township'),
        "city"=> request('city'),
    ]);

        //Redirect
        return redirect()->route('building.index')->with('status','Successfully Register!');
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
