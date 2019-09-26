@extends('adminmain')

@section('content')
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Category Detail Page</h1>
            <a href="{{route('category.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add Category</a>
          </div>
    <div class="card shadow">
      <div class="card-body">
        <div class="row">
      
        
          <div class="col-md-3">
            
          </div>
          <div class="col-md-9">
            <div class="card-title" style="font-size: 25px; font-weight: bold;">
              <p><i>Name: {{$category->name}}</i></p>
            </div>
           
            

    </div>
      </div>
    </div>
@endsection