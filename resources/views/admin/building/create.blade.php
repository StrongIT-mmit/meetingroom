@extends('adminmain')

@section('content')
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Building Entry Form</h1>           
    </div>
    <div class="row">
    	<div class="col-md-6">
            <div class="card shadow bg-light">
                <div class="card-body">
                    
                    <form action="{{route('building.store')}}" method="post" enctype="multipart/form-data">
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
                    <label for="lo">Location:</label>
                    <input type="text" name="location" id="lo" class="form-control @error('location') is-invalid @enderror">
                    @error('location')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>        
                <div class="form-group">
                    <label for="ts">Township:</label>
                    <input type="text" name="township" id="ts" class="form-control @error('township') is-invalid @enderror" placeholder="Enter Room Place...">
                    @error('township')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror" placeholder="Enter Room Place...">
                    @error('city')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                        <input type="submit" class="btn btn-secondary" value="Save">
                    </form>       
                </div>
            </div>
    		
    	</div>
    </div>
@endsection