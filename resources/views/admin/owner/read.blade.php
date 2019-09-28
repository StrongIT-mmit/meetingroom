@extends('adminmain')

@section('content')

<div class="row">
          <div class="col-lg-12">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Owner List</h1>
            <a href="{{route('owner.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add Owner</a>
          </div>
            
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>&nbsp;&nbsp;/ &nbsp;&nbsp;
              <li><i class="fa fa-laptop"></i>Owner List</li>
            </ol>
          </div>
        </div>
     <div class="row">
     	<div class="col-md-12">
     		<table class="table table-hover">
     			<thead>
     				<tr>
     					<th>No</th>
              <th>Owner Profile</th>
              <th>Name</th>
     					<th>Email</th>     					
              <th>Address</th>
              <th>Phone</th>
              
     				</tr>
     			</thead>
     			<tbody>
     				 @php
                                   $j=1;
                                   @endphp
                                   @foreach($owners as $owner)
                                        <tr>
                                        <td>{{$j}}</td>
                                        <td><img src="{{ $owner->profile }}" width="50" height="50"></td>
                                        <td>{{ $owner->name }}</td>
                                        <td>{{ $owner->email }}</td>
                                        <td>{{ $owner->address }}</td>
                                        <td>{{ $owner->phone }}</td>
                                        
                                        <td><a href="{{route('owner.show',$owner->id)}}" class="btn btn-info">Details</a></td>
                                        <td><a href="{{route('owner.edit',$owner->id)}}" class="btn btn-warning">Edit</a></td>
                                        <td>
                                           <form method="post" action="{{route('owner.destroy',$owner->id)}}">
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