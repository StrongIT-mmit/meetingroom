@extends('adminmain')

@section('content')

<div class="row">
          <div class="col-lg-12">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Room List</h1>
            <a href="{{route('room.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add Room</a>
          </div>
            
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-laptop"></i><a href="{{route('adhome')}}">Dashboard</a></li>
              <li class="breadcrumb-item active"><i class="fa fa-laptop"></i> Room List</li>              
            </ol>
          </div>
        </div>
     <div class="row">
     	<div class="col-md-12">
     		<table class="table table-hover">
     			<thead class="thead-dark">
     				<tr>
     					<th>No</th>
              <th>Image</th>
     					<th>Name</th>     					
              <th>Floor</th>
              <th>Room Type</th>
              <th>Building Name</th>
              <th>Owner Name</th>
              <th colspan="3" class="text-center">Action</th>
     				</tr>
     			</thead>
     			<tbody>
     				 @php
                                   $j=1;
                                   @endphp
                                   @foreach($rooms as $room)
                                        <tr>
                                        <td>{{$j}}</td>
                                        <td><img src="{{ $room->image }}" width="50" height="50"></td>
                                        <td>{{ $room->name }}</td>
                                        <td>{{ $room->floor }}</td>
                                        <td>{{($room->type->name)}}</td>
                                        <td>{{($room->building->name)}}</td>
                                        <td>{{($room->owner->name)}}</td>
                                        <td><a href="{{route('room.show',$room->id)}}" class="btn btn-info">Details</a></td>
                                        <td><a href="{{route('room.edit',$room->id)}}" class="btn btn-warning">Edit</a></td>
                                        <td>
                                           <form method="post" action="{{route('room.destroy',$room->id)}}">
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