@extends('layouts.user.main')
@section('title', 'Home')

@section('content')
  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Welcome to TechX</h6>
            <h2>POWER UP YOUR GAMING!</h2>
            <p>Get the Edge You Need with Our Top-of-the-Line Gaming & Tech Products.</p>
            {{-- <div class="search-input">
              <form id="search" action="#">
                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                <button role="button">Search Now</button>
              </form>
            </div> --}}
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
            @if($latestOnSaleProduct)
            <a href="{{ route('product.details', $latestOnSaleProduct->id) }}">
              <img src="{{ asset('storage/cover_images/' . $latestOnSaleProduct->cover_image) }}" alt="Product Image">
              <span class="price {{ $latestOnSaleProduct->productSale?->sale_price ? 'line-through' : '' }}">{{ $latestOnSaleProduct->price }}€</span>
              @if($latestOnSaleProduct && ($latestOnSaleProduct->productSale && now()->between($latestOnSaleProduct->productSale->start_date, $latestOnSaleProduct->productSale->end_date)))
              <span class="offer">{{ $latestOnSaleProduct->productSale->sale_price }}€</span>
              @endif
            </a>
            @endif 
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="{{ asset('images/featured-01.png') }}" alt="" style="max-width: 44px;">
              </div>
              <h4>Wide Range of Products</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="{{ asset('images/featured-02.png') }}" alt="" style="max-width: 44px;">
              </div>
              <h4>Enhanced User Experience</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="{{ asset('images/featured-03.png') }}" alt="" style="max-width: 44px;">
              </div>
              <h4>Quick and Efficient Support</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="{{ asset('images/featured-04.png') }}" alt="" style="max-width: 44px;">
              </div>
              <h4>Sleek and Intuitive Design</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Trending</h6>
            <h2>Trending Games</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="{{route('shop')}}">View All</a>
          </div>
        </div>
        @forelse($trendingGames as $pro)
        <div class="col-lg-3 align-self-center mb-30 trending-items">
          <div class="item">
            <div class="thumb">
              <a href="{{ route('product.details', $pro->id) }}"><img src="{{ asset('storage/cover_images/'. $pro->cover_image ) }}" alt="Product Image"></a>
              <div class="outOfStock" style="display: {{ $pro->quantity == 0 ? 'block' : 'none' }}"><i class="fa-solid fa-face-frown"></i> Out of Stock</div>
              <span class="price">
                @if ($pro->productSale && now()->between($pro->productSale->start_date, $pro->productSale->end_date))
                  <em>{{ $pro->price ?? '-' }}</em>
                  {{ $pro->productSale->sale_price }}€
                @else
                  {{ $pro->price }}€
                @endif
              </span>
            </div>
            <div class="down-content">
              <span class="category">{{ $pro->category->name }}</span>
              <h4>{{ $pro->name }}</h4>
              <a href="#"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        @empty
        <div class="card">
          <p class="text-danger">No products available</p>
        </div>
        @endforelse  
      </div>
    </div>
  </div>

  <div class="section trending most-played">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>TOP GAMES</h6>
            <h2>Most Played</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="{{route('shop')}}">View All</a>
          </div>
        </div>
        @forelse($trendingGames as $pro)
        <div class="col-lg-3 align-self-center mb-30 trending-items">
          <div class="item">
            <div class="thumb">
              <a href="{{ route('product.details', $pro->id) }}"><img src="{{ asset('storage/cover_images/'. $pro->cover_image ) }}" alt="Product Image"></a>
              <div class="outOfStock" style="display: {{ $pro->quantity == 0 ? 'block' : 'none' }}"><i class="fa-solid fa-face-frown"></i> Out of Stock</div>
              <span class="price">
                @if ($pro->productSale && now()->between($pro->productSale->start_date, $pro->productSale->end_date))
                  <em>{{ $pro->price ?? '-' }}</em>
                  {{ $pro->productSale->sale_price }}€
                @else
                  {{ $pro->price }}€
                @endif
              </span>
            </div>
            <div class="down-content">
              <span class="category">{{ $pro->category->name }}</span>
              <h4>{{ $pro->name }}</h4>
              <a href="#"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        @empty
        <div class="card">
          <p class="text-danger">No products available</p>
        </div>
        @endforelse  
      </div>
    </div>
  </div>

  <div class="section categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Categories</h6>
            <h2>Top Categories</h2>
          </div>
        </div>
        @forelse($topCategories as $cat)
          <div class="col-lg col-sm-6 col-xs-12">
              <div class="item">
                <h4>{{ $cat->name }}</h4>
              </div>
          </div>
        @empty
          <div class="card">
            <p class="text-danger">No categories available</p>
          </div>
        @endforelse
      </div>
    </div>
  </div>
  
  <div class="section cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="shop">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Our Shop</h6>
                  <h2>Go Pre-Order Buy & Get Best <em>Prices</em> For You!</h2>
                </div>
                <p>Shop now and take your gaming experience to the next level!</p>
                <div class="main-button">
                  <a href="{{route('shop')}}">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-2 align-self-end">
          <div class="subscribe">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>NEWSLETTER</h6>
                  <h2>Get Up To $100 Off Just By <em>Subscribing</em> our Newsletter!</h2>
                </div>
                <div class="search-input">
                  <form>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email...">
                    <button>Subscribe Now</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection