@extends('welcome')

@section('container')

<div class="main">



<h2>Avaliable <small>Room</small></h2>
<hr>

<div id="myBtnContainer">
  <a href="{{route('a_room')}}" class="btn btn-outline-secondary">Show All</a>
  @foreach($types as $type)
  <a href="/avaliable_room/detail?id={{$type->id}}" class="btn btn-outline-secondary">{{$type->name}}</a>
@endforeach
  
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
@foreach($rooms as $a)

  <div class="column">
    <div class="content">
      <img src="{{$a->image}}" alt="" style="width:100%; padding-bottom: 10px;" id="card">
      <h4>{{$a->name}}</h4>
      <p>{{$a->floor}}</p>
      

      <!-- Modal -->

    </div>
  </div>
  

  <!-- Button trigger modal -->

  



 @endforeach 
 
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

@endsection

@section('script')
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
@endsection