<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Istore {{ isset($title)? ' - '.$title : '' }}</title>
    {{-- <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB --> --}}
    
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!--Main Navigation-->
<header 
id="main-navbar">
  <!-- Sidebar -->
  <nav
       id="sidebarMenu"
       class="collapse d-lg-block sidebar collapse bg-white"
       >
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
           href="{{ route('store.home') }}"
           class="list-group-item list-group-item-action py-2 ripple {{ $current == 1? 'active' : '' }}"
           aria-current="true"
           >
          <i class="fas fa-chart-line fa-fw me-3"></i
            ><span>Dashboard</span>
        </a>
        <a
           href="{{ route('store.products') }}"
           class="list-group-item list-group-item-action py-2 ripple {{ $current == 2? 'active' : '' }}"
           >
          <i class="fas fa-chart-area fa-fw me-3"></i
            ><span>Products</span>
        </a>
        <a
           href="{{ route('store.categorys') }}"
           class="list-group-item list-group-item-action py-2 ripple {{ $current == 3? 'active' : '' }}"
           ><i class="fas fa-list fa-fw me-3"></i
          ><span>Category</span></a
          >
        <a
           href="{{ route('store.orders') }}"
           class="list-group-item list-group-item-action py-2 ripple {{ $current == 4? 'active' : '' }}"
           ><i class="fa fa-truck fa-fw me-3"></i
          ><span>Orders</span></a
          >
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav
       class="navbar navbar-expand-lg navbar-light fixed-top"
       >
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#sidebarMenu"
              aria-controls="sidebarMenu"
              aria-expanded="false"
              aria-label="Toggle navigation"
              >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
      <a class="navbar-brand offset-md-1" href="#">
        Istore
      </a>
      <!-- Search form -->
      <form class="d-none d-md-flex input-group w-auto my-auto offset-md-1">
        <input
               autocomplete="off"
               type="search"
               class="form-control rounded search-input"
               placeholder='Search store/user, product ...'
               style="min-width: 225px"
               />
        <span class="input-group-text border-0"
              ><i class="fas fa-search"></i
          ></span>
      </form>

      <!-- Right links -->
      <ul class="navbar-nav ms-auto d-flex flex-row">
        
        <li class="nav-item" >
          <a
             class="nav-link d-flex align-items-center btn btn-sm shadow-0 mx-2"
             href="/show/{{ Auth::guard('store')->user()->store_id }}"
             role="button"
             >
            Your Store
          </a>
        </li>
        
        <!-- Avatar -->
        <li class="nav-item dropdown">
          <a
             class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
             href="#"
             id="navbarDropdownMenuLink"
             role="button"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
             >
               
             @if (Auth::guard('store')->user()->logo != "")
             <img
             src="{{ asset('storage/images/'.Auth::guard('store')->user()->logo) }}"
             class="rounded-circle"
             height="22"
             alt=""
             loading="lazy"
             />
             @else
             <i class="fas fa-user fa-fw"></i>
             @endif
            
          </a>
          <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
              >
            <li><a class="dropdown-item" href="{{ route('store.profile', Auth::guard('store')->user()->id) }}">Profile</a></li>
            <li><a class="dropdown-item" href="{{ route('store.setting', Auth::guard('store')->user()->id) }}">Settings</a></li>
            <li><a class="dropdown-item" href="{{ route('store.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
              <form action="{{ route('store.logout') }}" id="logout-form" method="post">@csrf</form></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px">
  @yield('content')
</main>
<!--Main layout-->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="{{ asset('chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html>

