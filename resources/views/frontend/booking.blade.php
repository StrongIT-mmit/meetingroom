@extends('welcome')

@section('container')


<!-- Page Content -->


  <!-- Portfolio Item Heading -->
  <h1 class="my-4">Rent Room
    <small>Book Now</small>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="http://placehold.it/750x500" alt="Calendar">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Project Description</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
      <h3 class="my-3">Project Details</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <button type="submit" class="btn btn-outline-secondary float-right">Book Now</button>
    </div>

  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <h3 class="my-4">Room Details</h3>
  <div class="card shadow my-2">
      <div class="card-body">
        <div class="row">
      
          <div class="col-md-3">
            <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
          </div>
          <div class="col-md-9">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat.</p>
            
          </div>
          
        </div>

    </div>
    <div class="card-footer">
            <button class="btn btn-outline-secondary float-right">See More</button>
          </div>
  </div>
  
  <div class="card shadow my-2">
      <div class="card-body">
        <div class="row">
      
          <div class="col-md-3">
            <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
          </div>
          <div class="col-md-9" style="text-align: center;">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat.</p>
            <button class="btn btn-outline-primary">See More</button>
          </div>
        </div>
    </div>
  </div>

  <div class="card shadow my-2">
      <div class="card-body">
        <div class="row">
      
          <div class="col-md-3">
            <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
          </div>
          <div class="col-md-9">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat.</p>
            <button class="btn btn-outline-dark">See More</button>
          </div>
        </div>
    </div>
  </div>

  <div class="card shadow my-2">
      <div class="card-body">
        <div class="row">
      
          <div class="col-md-3">
            <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
          </div>
          <div class="col-md-9">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat.</p>
            <button class="btn btn-outline-success float-right">See More</button>
          </div>
        </div>
    </div>
  </div>

@endsection

@section('script')
<script>



function nextPrev(n) {
 
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