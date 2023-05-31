<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>TechX - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropdown.scss') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

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
                      <li><a href="{{ route('shop') }}" class="{{ request()->is('shop') ? 'active' : '' }}" >Our Shop</a></li>
                      <li><a href="{{ route('product.details') }}" class="{{ request()->is('product*') ? 'active' : '' }}">Product Details</a></li>
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
                        <a href="#"><i class="fa-solid fa-bell"></i></a>
                        <div class="dropdown-content-a">
                            <div class="content-a">
                              <img src="{{ asset('images/single-game.jpg') }}" src="err"></img>
                              <div class="px-2">
                                <h4>COD</h4> <h5> lorem text lorem the lorem pensul ! </h5>
                              </div>
                              <i class="fa-regular fa-eye-slash"></i>
                            </div>
                            <div class="content-a">
                              <img src="{{ asset('images/trending-04.jpg') }}" src="err"></img>
                              <div class="px-2">
                                <h4>COD</h4> <h5> lorem text lorem the lorem pensul ! </h5>
                              </div>
                              <i class="fa-regular fa-eye-slash"></i>
                            </div>
                            <div class="content-a">
                              <img src="{{ asset('images/trending-01.jpg') }}" src="err"></img>
                              <div class="px-2">
                                <h4>COD</h4> <h5> lorem text lorem the lorem pensul ! </h5>
                              </div>
                              <i class="fa-regular fa-eye-slash"></i>
                            </div>
                        </div>
                        <span class="notification-dot"></span>
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
  <div class="container-1-a">
    <div class="cart-title-a">Shopping Cart</div>
    <i id="close-cart-a" class="fa-solid fa-x"></i>
  </div>

      <!-- ***** ITEMS ***** -->

    <div class="item-a">
      <div class="image-a">
        <img src="{{ asset('images/trending-03.jpg') }}" alt="">
      </div>
      
      <div class="text-a">
        <h4>PUBG</h4>
        <h4>1x 49.99$</h4>
      </div>
      <i class="fa-regular fa-circle-xmark"></i>
    </div>

      <!-- ***** ITEMS END ***** -->

  <div class="bottom-buttons-a">
    <div class="subtotal-a">
      <h4>Total</h4>
      <h4>$49.99</h4>
    </div>
    
    <button type="submit">VIEW CART</button>
    <button type="submit">CHECKOUT</button>
  </div>
</div>