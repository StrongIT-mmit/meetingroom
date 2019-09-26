@extends('adminmain')

@section('content')
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Type Entry Form</h1>           
    </div>
    <div class="row">
    	<div class="col-md-6">
            <div class="card shadow bg-light">
                <div class="card-body">
                    
                    <form action="{{route('type.store')}}" method="post">
                    @csrf
                <div class="form-group">
                    <label for="name">Room Type:</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter room type name...">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Enter Room Price...">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group shadow-textarea">
                    <label for="nop">Number of People:</label>
                    <input type="number" name="num_of_people" id="nop" class="form-control z-depth-1 @error('num_of_people') is-invalid @enderror" placeholder="Name" min="0">
                    @error('num_of_people')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="des">Description:</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" rows="10" placeholder="Write something here..." name="description" id="des"></textarea>
                    
                    @error('description')
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