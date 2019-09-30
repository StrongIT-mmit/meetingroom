@extends('welcome')

@section('container')

<div class="main">



<h2>Avaliable <small>Room</small></h2>
<hr>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('nature')"> Nature</button>
  <button class="btn" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn" onclick="filterSelection('people')"> People</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="/w3images/mountains.jpg" alt="" style="width:100%">
      <h4>Mountains</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="/w3images/lights.jpg" alt="" style="width:100%">
      <h4>Lights</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="/w3images/nature.jpg" alt="" style="width:100%">
      <h4>Forest</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
      <img src="/w3images/cars1.jpg" alt="" style="width:100%">
      <h4>Retro</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="/w3images/cars2.jpg" alt="" style="width:100%">
      <h4>Fast</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="/w3images/cars3.jpg" alt="" style="width:100%">
      <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="/w3images/people1.jpg" alt="Car" style="width:100%">
      <h4>Girl</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="/w3images/people2.jpg" alt="Car" style="width:100%">
      <h4>Man</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="/w3images/people3.jpg" alt="Car" style="width:100%">
      <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
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