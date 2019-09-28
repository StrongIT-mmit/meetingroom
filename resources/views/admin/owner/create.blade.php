@extends('adminmain')

@section('content')
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Room Entry Form</h1>           
    </div>
    <div class="row">
    	<div class="col-md-6">
            <div class="card shadow bg-light">
                <div class="card-body">
                    
                    <form action="{{route('owner.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Room Name...">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>        
                <div class="form-group">
                    <label for="add">Address:</label>
                    <textarea class="form-control @error('address') is-invalid @enderror" rows="10" placeholder="Write something here..." name="address" id="add"></textarea>
                    
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="number" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pro">Profile Upload:</label>
                    <input type="file" name="img" id="pro" class="form-control @error('img') is-invalid @enderror">
                    @error('img')
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