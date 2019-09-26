@extends('adminmain')

@section('content')

<div class="row">
          <div class="col-lg-12">
            <div class="row">
                <div class="col-md-11">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Room</h3>
            
                </div>
                <div class="col-md-1 pt-3">
                    <a href="{{route('room.create')}}" class="btn btn-sm btn-primary shadow-sm"> Add Room</a>
                </div>
            </div>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Room List</li>
            </ol>
          </div>
        </div>
     <div class="row">
     	<div class="col-md-12">
     		<table class="table table-hover">
     			<thead>
     				<tr>
     					<th>No</th>
              <th>Image</th>
     					<th>Name</th>     					
              <th>Floor</th>
              <th>Action</th>
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