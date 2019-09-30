@extends('adminmain')

@section('content')

  @if(session('status'))

                      @php
                        $status = session('status');
                      @endphp

                      
                        <div class="alert alert-success d-inline-block">
                          {{$status}}
                        </div>
                     

                    @endif
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>&nbsp;&nbsp;/
              &nbsp;&nbsp;<li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        
        <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->

            <div class="col-xl-3 col-md-6 mb-4">
              <a style="cursor: pointer; text-decoration: none;" id="my1">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Daily Booking</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $bookings }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a style="cursor: pointer; text-decoration: none;" id="my2">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Avaliable Rooms</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $rooms }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-door-open fa-2x text-gray-300"></i>

                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a style="cursor: pointer; text-decoration: none;" id="my3">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Users</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $users }}</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a style="cursor: pointer; text-decoration: none;" id="my4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          </div>



        <!-- Daily Booking datatable -->
        <div class="container-fluid" id="mycontainer">

          <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daily Booking</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Date</th>
                      <th>Start Time</th>
                      <th>End Time</th>
                      <th>User Name</th>
                      <th>Room Name</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Date</th>
                      <th>Start Time</th>
                      <th>End Time</th>
                      <th>User Name</th>
                      <th>Room Name</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>
                     @php
                                   $j=1;
                                   @endphp
                     @foreach($bs as $b)
                    <tr>
                        <td>{{$j}}</td>
                        <td>{{$b->date}}</td>
                        <td>{{$b->start_time}}</td>
                        <td>{{$b->end_time}}</td>
                        <td>{{$b->user->name}}</td>
                        <td>{{$b->room->name}}</td>
                      
                    </tr>
                    @php
                    $j++;
                    @endphp
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Avaliable Room datatable  -->
        <div class="container-fluid" id="mycontainer1">

          <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Avaliable Rooms</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Room Image</th>
                      <th>Name</th>                      
                      <th>Floor</th>
                      <th>Type Name</th>
                      <th>Building Name</th>
                      <th>Owner Name</th>                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Room Image</th>
                      <th>Name</th>                      
                      <th>Floor</th>
                      <th>Type Name</th>
                      <th>Building Name</th>
                      <th>Owner Name</th>
                    </tr>
                  </tfoot>
                  <tbody>
                     @php
                                   $j=1;
                                   @endphp
                     @foreach($rs as $r)
                    <tr>
                        <td>{{$j}}</td>
                        <td><img src="{{$r->image}}" width="50" height="50"></td>
                        <td>{{$r->name}}</td>                        
                        <td>{{$r->floor}}</td>
                        <td>{{$r->type->name}}</td>
                        <td>{{$r->building->name}}</td>
                        <td>{{$r->owner->name}}</td>
                      
                    </tr>
                    @php
                    $j++;
                    @endphp
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- User datatable  -->
        <div class="container-fluid" id="mycontainer2">

          <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Customer</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Profile</th>
                      <th>Name</th>
                      <th>Email</th>                    
                      <th>Address</th>
                      <th>Phone</th>
                      <th>NRC</th>                                            
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Profile</th>
                      <th>Name</th>
                      <th>Email</th>                    
                      <th>Address</th>
                      <th>Phone</th>
                      <th>NRC</th>   
                    </tr>
                  </tfoot>
                  <tbody>
                     @php
                                   $j=1;
                                   @endphp
                     @foreach($us as $u)
                    <tr>
                        <td>{{$j}}</td>
                        <td><img src="{{$u->date}}" width="50" height="50"></td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->address}}</td>
                        <td>{{$u->phone}}</td>
                        <td>{{$u->nrc}}</td>                      
                    </tr>
                    @php
                    $j++;
                    @endphp
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Daily Booking datatable  -->
        <div class="container-fluid" id="mycontainer3">

          <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daily Booking</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Date</th>
                      <th>Start Time</th>
                      <th>End Time</th>
                      <th>User Name</th>
                      <th>Room Name</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Date</th>
                      <th>Start Time</th>
                      <th>End Time</th>
                      <th>User Name</th>
                      <th>Room Name</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>
                     @php
                                   $j=1;
                                   @endphp
                     @foreach($bs as $b)
                    <tr>
                        <td>{{$j}}</td>
                        <td>{{$b->date}}</td>
                        <td>{{$b->start_time}}</td>
                        <td>{{$b->end_time}}</td>
                        <td>{{$b->user->name}}</td>
                        <td>{{$b->room->name}}</td>
                      
                    </tr>
                    @php
                    $j++;
                    @endphp
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->


      

@endsection

@section('script')

<script type="text/javascript">
$(document).ready(function(){
  $("#mycontainer").show();
  $("#mycontainer1").hide();
  $("#mycontainer2").hide();
  $("#mycontainer3").hide();

  $("#my1").click(function(){
    $("#mycontainer").toggle();

  $("#mycontainer1").hide();
  $("#mycontainer2").hide();
  $("#mycontainer3").hide();
  });

  $("#my2").click(function(){
    $("#mycontainer1").toggle();

  $("#mycontainer").hide();
  $("#mycontainer2").hide();
  $("#mycontainer3").hide();
  });

  $("#my3").click(function(){
    $("#mycontainer2").toggle();

  $("#mycontainer1").hide();
  $("#mycontainer").hide();
  $("#mycontainer3").hide();
  });

  $("#my4").click(function(){
    $("#mycontainer3").toggle();

    $("#mycontainer1").hide();
    $("#mycontainer").hide();
    $("#mycontainer2").hide()
  });

 });


</script>

@endsection