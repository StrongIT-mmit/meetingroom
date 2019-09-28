<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $owners = Owner::all();
        return view('admin.owner.read',compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.owner.create');
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
             "email" => 'required|unique:owners',            
            "address" => 'required',
            "phone" => 'required',
            
            
            
        ]);

        //if file, upload
        if ($request->hasfile('img')) {
            $img=$request->file('img');
            $upload_path = public_path().'/storage/img/owner/';
            $name=$img->getClientOriginalName();
            $img->move($upload_path,$name);
            $path = '/storage/img/owner/'.$name;
        }else{
            $path="";
        }   

        // Create
        Owner::create([
        "name" => request('name') ,        
        
        
        "email"=> request('email'),
        "address"=> request('address'),
        "phone"=> request('phone'),
        "profile" => $path,
    ]);

        //Redirect
        return redirect()->route('owner.index')->with('status','Successfully Register!');
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
