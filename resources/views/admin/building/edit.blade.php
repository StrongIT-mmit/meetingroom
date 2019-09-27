@extends('adminmain')

@section('content')
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Admin Edit Form</h1>
          </div>
     <div class="row">
    	<div class="col-md-6">
            <div class="card shadow bg-light">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form  method="post" action="{{route('admin.update',$admin->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{$admin->name}}">
                    
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{$admin->email}}">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" value="{{$admin->password}}">
                </div>
                

                        <input type="submit" class="btn btn-secondary" value="Save">
                    </form>       
                </div>
            </div>
    		
    	</div>
    </div>
@endsection