@extends('adminmain')

@section('content')
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Room Entry Form</h1>           
    </div>
    <ol class="breadcrumb">
              
              <li class="breadcrumb-item"><i class="fa fa-laptop"></i> <a href="{{route('adhome')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><i class="fas fa-door-open"></i><a href="{{route('room.index')}}">Room List</a></li>
              <li class="breadcrumb-item active"><i class="fas fa-plus"></i>Add Room</li>
            </ol>
    <div class="row">
    	<div class="col-md-6">
            <div class="card shadow bg-light">
                <div class="card-body">
                    
                    <form action="{{route('room.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Room Name...">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pro">Image:</label>
                    <input type="file" name="img" id="pro" class="form-control @error('img') is-invalid @enderror">
                    @error('img')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>        
                <div class="form-group">
                    <label for="floor">Floor:</label>
                    <input type="text" name="floor" id="floor" class="form-control @error('floor') is-invalid @enderror" placeholder="Enter Room Place...">
                    @error('floor')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="o">Type</label>
                    <select id="o" class="form-control" name="type_id">
                        @foreach($types as $type)

                       <option value="{{$type->id}}">{{$type->name}}</option>

                       @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="o">Building</label>
                    <select id="o" class="form-control" name="building_id">
                        @foreach($buildings as $building)

                       <option value="{{$building->id}}">{{$building->name}}</option>

                       @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="o">Owner</label>
                    <select id="o" class="form-control" name="owner_id">
                        @foreach($owners as $owner)

                       <option value="{{$owner->id}}">{{$owner->name}}</option>

                       @endforeach
                    </select>
                </div>
                        <input type="submit" class="btn btn-secondary" value="Save">
                    </form>       
                </div>
            </div>
    		
    	</div>
    </div>
@endsection