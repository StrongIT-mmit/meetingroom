@extends('adminmain')

@section('content')

<div class="row">
          <div class="col-lg-12">
            <div class="row">
                <div class="col-md-11">
                    <h3 class="page-header"><i class="fa fa-laptop"></i>Room Types</h3>
            
                </div>
                <div class="col-md-1 pt-3">
                    <a href="{{route('type.create')}}" class="btn btn-sm btn-primary shadow-sm"> Add Type</a>
                </div>
            </div>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li> &nbsp;&nbsp;/ &nbsp;&nbsp;
              <li><i class="fa fa-laptop"></i>Room Type List</li>
            </ol>
          </div>
        </div>
     <div class="row">
     	<div class="col-md-12">
     		<table class="table table-hover">
     			<thead>
     				<tr>
     					<th>No</th>
     					<th>Name</th>
              <th>Room Price</th>
     					<th>Number of people</th>
              <th>Description</th>
              <th>Action</th>
     				</tr>
     			</thead>
     			<tbody>
     				 @php
                                   $j=1;
                                   @endphp
                                   @foreach($types as $type)
                                        <tr>
                                        <td>{{$j}}</td>
                                        <td>{{ $type->name }}</td>
                                        <td>{{ $type->price }}</td>
                                        <td>{{ $type->num_of_people }}</td>
                                        <td>{{ $type->description }}</td>
                                        
                                        
                                        <td><a href="{{route('type.show',$type->id)}}" class="btn btn-info">Details</a></td>
                                        <td><a href="{{route('type.edit',$type->id)}}" class="btn btn-warning">Edit</a></td>
                                        <td>
                                           <form method="post" action="{{route('type.destroy',$type->id)}}">
                                               @csrf
                                               @method('DELETE')
                                               <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"> Delete</button>
                                           </form>
                                        </td>
                                   </tr>
                                   @php
                                   $j++;
                                   @endphp
                                   @endforeach
     			</tbody>
     		</table>
     	</div>
     </div>

@endsection