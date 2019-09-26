<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $types = Type::all();
        return view('admin.type.read',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.type.create');
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
            "name" => 'required|max:191',
            "price" => 'required',
            "num_of_people" => 'required',
            "description" => 'required'
            
        ]);

        

        // Create
        Type::create([
        "name" => request('name') ,
        "price"=> request('price'),
        "num_of_people" => request('num_of_people'),
        "description" => request('description'),
        
        
    ]);

        //Redirect
        return redirect()->route('type.index')->with('status','Successfully Register!');
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
        $type = Type::find($id);
        return view('admin.type.detail',compact('type'));
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
        $type=Category::find($id);
        return view('admin.type.edit',compact('type'));
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
        $request->validate([
            "name" => 'required|max:191',
             "price" => 'required',
            "num_of_people" => 'required',
            "description" => 'required'
            
        ]);


        

        //update
        $type = Type::find($id);

        $type->name = request('name');      
        $type->price = request('price'); 
        $type->num_of_people = request('num_of_people');
        $type->description = request('description'); //input name
        

        $type->save();

        //return redirect
        return redirect()->route('type.index');
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
        $type = Type::find($id);
        $type->delete();

        return redirect()->route('type.index');
    }
}
