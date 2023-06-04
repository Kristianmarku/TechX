@extends('layouts.user.main')
@section('title', 'Product')

@section('content')

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>{{ $product->name }}</h3>
          <span class="breadcrumb"><a href="{{ route('home') }}">Home</a>  >  <a href="{{ route('shop') }}">Shop</a>  >  {{ $product->name }}</span>
        </div>
      </div>
    </div>
  </div>

  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="{{ asset('storage/cover_images/' . $product->cover_image) }}" alt="Product Image">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h4>{{ $product->name }}</h4>
          <span class="price">
             @if($product->sale_price) <em> {{ $product->price ?? '-' }}</em> @endif 
             {{ $product->sale_price ? $product->sale_price : $product->price }}€
          </span>

          <p>{{ $product->description }}</p>
          <form action="#">
            <input type="number" class="form-control" aria-describedby="quantity" placeholder="1">
            <button type="submit"><i class="fa fa-shopping-bag"></i> ADD TO CART</button>
          </form>
          <ul>
            {{-- <li><span>Game ID:</span> COD MMII</li> --}}
            <li><span>Category:</span> <a href="#">{{ $product->category->name }}</a></li>
            {{-- <li><span>Multi-tags:</span> <a href="#">War</a>, <a href="#">Battle</a>, <a href="#">Royal</a></li> --}}
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="sep"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews (3)</button>
                  </li>
                </ul>
              </div>              
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                  <p>{{ $product->description }}</p>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                  <p>The graphics are stunning, and the realistic gameplay makes you feel like you're actually on the battlefield. The missions are challenging, but incredibly satisfying to complete. And the multiplayer mode is where this game truly shines - it's addictive and competitive, with a wide range of customization options that keep the gameplay fresh and exciting. Overall, Modern Warfare II is a must-have for any FPS fan. 10/10, would highly recommend.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section categories related-games">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Action</h6>
            <h2>Related Games</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="{{route('shop')}}">View All</a>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Adventure</h4>
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/categories-01.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Strategy</h4>
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/categories-05.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Simulation</h4>
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/categories-03.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Sports</h4>
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/categories-04.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="#"><img src="{{ asset('images/categories-05.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection