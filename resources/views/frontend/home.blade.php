@extends('welcome')

@section('container')

<<<<<<< HEAD
<div class="jumbotron bg-wheat my-2" style="background-image: url({{asset('img/meetingroom.jpg')}});  background-size: cover; 
    height: 100%;
    width: 100%;">
  <h1 class="text-center"><button class="btn btn-danger">Book Now</button></h1>
  <p class="lead text-center text-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
=======
<div class="jumbotron bg-wheat my-2">
  <h1 class="text-center"><button class="btn btn-success">Book Now</button></h1>
  <p class="lead text-center">This is a simple hero</p>
>>>>>>> origin/wai-hein-mr-branch
</div>

<div class="row">
  <div class="col-md-4">
    <div class="card shadow my-2 mx-1">
      <div class="card-body">
        <p><strong><h3>Class A</h3></strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <img src="http://placehold.it/750x500" class="img-fluid" id="card">
        <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card shadow my-2 mx-1">
      <div class="card-body">
        <p><strong><h3>Class B</h3></strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <img src="http://placehold.it/750x500" class="img-fluid" id="card">
        <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card shadow my-2 mx-1">
      <div class="card-body">
        <p><strong><h3>Class C</h3></strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <img src="http://placehold.it/750x500" class="img-fluid" id="card">
        <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
<script>



function nextPrev() {
 
   helo();


}
function helo(){
  alert('helo');
   $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    var formdata=new FormData();
    formdata.append('name',"aye chan oo");
    formdata.append('age',"23");

    $.ajax({
      url:'{{route('helo')}}',
      data:formdata,
      type:'POST',
      processData: false,
      contentType: false,
      success:function(data){
        console.log(data);
      },
      error:function(error){
        console.log(error);
      }
    });
}


</script>
@endsection