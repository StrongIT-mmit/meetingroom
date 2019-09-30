<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
<li class="nav-item dropdown no-arrow">
      <!-- Sidebar - Brand -->
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
        <span class="mr-2 d-none d-lg-inline text-white-600 small">Valerie Luna</span>
      </a>

      
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('adhome')}}">
          <i class="fa fa-laptop"></i>
          <span>Dashboard</span></a>
      </li>

      @hasrole('admin')
      <!-- Divider -->
      <hr class="sidebar-divider">
      
   
      <!-- Heading -->
      <div class="sidebar-heading">
        Room Description
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link" href="{{route('room.index')}}">
          <i class="fas fa-house-damage"></i>
          <span>Room List</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('type.index')}}">
          <i class="fas fa-bars"></i>
          <span>Room Type List</span></a>
      </li>

       <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Other
      </div>

      <li class="nav-item">
        <a class="nav-link" href="{{route('owner.index')}}">
          <i class="fas fa-user-shield"></i>
          <span>Owner List</span></a>
      </li>

       

      <li class="nav-item">
        <a class="nav-link" href="{{route('building.index')}}">
          <i class="far fa-building"></i>
          <span>Building List</span></a>
      </li>
<<<<<<< HEAD

      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        EMail
      </div>

      <li class="nav-item">
        <a class="nav-link" href="{{route('owner.index')}}">
          <i class="fas fa-user-shield"></i>
          <span>Send Mail</span></a>
      </li>

      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="{{route('owner.index')}}">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

       


     
=======
      @endhasrole
>>>>>>> origin/wai-hein-mr-branch

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

</ul>