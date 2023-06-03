<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>TechX - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport"/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" referrerpolicy="no-referrer" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/now-ui-dashboard.css?v=1.5.0') }}" rel="stylesheet" />

    @livewireStyles
  </head>
  <body>

    <!-- Toastr Alerts -->
    @if(Session::has('toastr'))
      {!! Session::get('toastr') !!}
    @endif

    <div class="notification">
      <span class="message"></span>
    </div>

    <div class="wrapper">
      <div class="sidebar" data-color="orange">
        <div class="logo">
          <a href="#" class="simple-text logo-mini"><img src="{{ asset('images/techxLogoWhite.svg') }}" alt="logo"></a>
          <a href="#" class="simple-text logo-normal"> TechX</a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
          <ul class="nav">
            <li class="{{ request()->is('home') ? 'active' : '' }}">
              <a href="{{ route('home') }}">
                <i class="now-ui-icons design_app"></i>
                <p>Dashboard</p>
              </a>
            </li>

            @if(Auth::user()->hasRole('Support'))
              <li class="{{ request()->is('issues*') ? 'active' : '' }}">
                <a href="{{ route('issues') }}">
                  <i class="now-ui-icons tech_headphones"></i>
                  <p>Issues</p>
                </a>
              </li>
            @endif 

            @if(Auth::user()->hasRole('Manager'))
            <li class="{{ request()->is('products') ? 'active' : '' }}">
              <a href="{{route('products')}}">
                <i class="now-ui-icons shopping_bag-16"></i>
                <p>Products</p>
              </a>
            </li>

            <li class="{{ request()->is('categories') ? 'active' : '' }}">
              <a href="{{route('categories')}}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p>Categories</p>
              </a>
            </li>

            <li class="{{ request()->is('sales') ? 'active' : '' }}">
              <a href="{{route('sales')}}">
                <i class="now-ui-icons business_money-coins"></i>
                <p>Sales</p>
              </a>
            </li>


            <li class="active-pro">
              <a data-toggle="modal" data-target="#issueModal">
                <i class="now-ui-icons tech_headphones"></i>
                <p>Contact Support</p>
              </a>
            </li>
            @endif 

          </ul>
        </div>
      </div>
      <div class="main-panel" id="main-panel">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent bg-primary navbar-absolute">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <div class="navbar-toggle">
            <button type="button" class="navbar-toggler">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          @if(request()->route()->getName() !== 'home')
            <a href="{{ route('home') }}" class="btn btn-primary">
              <i class="fa-solid fa-arrow-left"></i> 
              Go back
            </a>
          @endif
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation" >
          <form>
            <div class="input-group no-border">
              <input
                type="text"
                value=""
                class="form-control"
                placeholder="Search..."
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <i class="now-ui-icons ui-1_zoom-bold"></i>
                </div>
              </div>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                <i class="now-ui-icons users_single-02"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" >
                <a class="dropdown-item" href="{{route('profile')}}">Profile</a>
                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" type="hidden">
                  @csrf
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->