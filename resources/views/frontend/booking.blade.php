@extends('welcome')

@section('container')




<form >
  
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Booking Form:
    <p><select name="" id="" class="form-control">''
      <option>Choose Room</option>
      <option>Novotel - Class A room</option>
      <option>Sky - Class B room</option>
      <option>Root - Class C room</option>
    </select></p>
    <p><input type="date" placeholder="" oninput="this.className = ''" name="lname" class="form-control"></p>
    <p><input type="time" placeholder="Choose Start time..." oninput="this.className = ''" name="lname" class="form-control"></p>
    <p><input type="time" placeholder="Choose End time..." oninput="this.className = ''" name="lname" class="form-control"></p>
  </div>
  <div class="tab">Detail Form:
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
  </div>
  <div class="tab">CheckOut:
    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
  </div>
  <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="helo()">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

@endsection

@section('script')
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  // var x = document.getElementsByClassName("tab");
  // // Exit the function if any field in the current tab is invalid:
  // if (n == 1 && !validateForm()) return false;
  // // Hide the current tab:
  // x[currentTab].style.display = "none";
  // // Increase or decrease the current tab by 1:
  // currentTab = currentTab + n;
  // // if you have reached the end of the form...
  // if (currentTab >= x.length) {
  //   // ... the form gets submitted:
  //   document.getElementById("regForm").submit();
  //   return false;
  // }

   helo();





  // Otherwise, display the correct tab:
  showTab(currentTab);
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

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
@endsection