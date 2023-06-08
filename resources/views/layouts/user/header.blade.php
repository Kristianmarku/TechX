<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>TechX - @yield('title')</title>

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/techxLogoWhite.svg') }}"/>
    <link rel="icon" href="{{ asset('images/techxLogoWhite.svg') }}" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropdown.scss') }}">
    <link rel="stylesheet" href="{{ asset('css/support-button.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    @livewireStyles
  </head>
<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  @auth
    <!-- Support Button -->
    <button class="button-support">
      <i class="fa-solid fa-headset"></i>
    </button>
    <div class="chat-container">
      @livewire('user.issues')
    </div>
  @endauth

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav add-cart">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('shop') }}" class="logo">
                        <img src="{{ asset('images/techxLogoWhite.svg') }}" alt="Logo" style="width: 50px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="{{ route('home') }}" class="{{ request()->is('home') ? 'active' : '' }}">Home</a></li>
                      <li><a href="{{ route('shop') }}" class="{{ request()->is('shop') ? 'active' : '' }}" >Shop</a></li>
                      <li><a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact Us</a></li>
                      
                      
                    @auth
                      <li class="dropdown">
                        <a href="#"><i class="fa-solid fa-user"></i></a>
                        <div class="dropdown-content">
                          <a href="{{ route('customer.profile') }}">Profile</a>
                          <a href="{{ route('myorders') }}">My Orders</a>
                          <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <div style="color: red">
                              <i class="fa fa-power-off"></i> Logout
                            </div>
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" type="hidden">
                            @csrf
                          </form>
                        </div>
                      </li>

                      <li class="dropdown bell-a">
                        @livewire('user.notifications')
                      </li>
                    
                      <li><a id="cart-icon-a"><i class="fa-solid fa-cart-shopping"></i></a></li>
                      @endauth                      

                      @guest
                      <li><a href="{{ route('login') }}">Sign In</a></li>
                      @endguest                       
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

<!-- ***** Cart ***** -->
<div class="cart-a">
  @livewire('user.cart')
</div>