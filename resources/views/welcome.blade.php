<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- BS CSS & JS-->
 <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">

 <style type="text/css">
  #card:hover{
    cursor: pointer;
    transition: 2s;
    transform:scale(1.1);
  }
</style>


</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand text-white" href="#">Hidden brand</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link text-white" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('a_room')}}">Availiable Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-white" href="#" tabindex="-1" aria-disabled="true">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <div class="btn-group">
  <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-user"></i>
  </button>
  <div class="dropdown-menu bg-dark">
    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="dropdown-item-text text-white" style="text-decoration: none!important;">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="dropdown-item-text text-white" style="text-decoration: none!important;">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

  </div>
</div>
       &nbsp;&nbsp; 
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 text-white" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>
</nav>

<div class="container">

    @yield('container')
</div>

@include('footer')

@yield('script')
</body>
</html>