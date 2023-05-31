@extends('layouts.user.main')
@section('title', 'Product')

@section('content')

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Modern Warfare® II</h3>
          <span class="breadcrumb"><a href="{{ route('home') }}">Home</a>  >  <a href="#">Shop</a>  >  Modern Warfare II</span>
        </div>
      </div>
    </div>
  </div>

  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="{{ asset('images/single-game.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h4>Call of Duty®: Modern Warfare® II</h4>
          <span class="price"><em>$80</em> $62</span>
          <p>Get ready to engage in thrilling and intense combat with Modern Warfare II. With stunning graphics and realistic gameplay, this first-person shooter will keep you on the edge of your seat.</p>
          <form id="qty" action="#">
            <input type="qty" class="form-control" id="1" aria-describedby="quantity" placeholder="1">
            <button type="submit"><i class="fa fa-shopping-bag"></i> ADD TO CART</button>
          </form>
          <ul>
            <li><span>Game ID:</span> COD MMII</li>
            <li><span>Genre:</span> <a href="#">Action</a>, <a href="#">Team</a>, <a href="#">Single</a></li>
            <li><span>Multi-tags:</span> <a href="#">War</a>, <a href="#">Battle</a>, <a href="#">Royal</a></li>
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
                  <p>
                    Take on the role of a highly-trained soldier and battle it out in a variety of challenging missions across multiple locations. Experience the adrenaline-pumping action of multiplayer mode and compete against other players from around the world. With an immersive storyline and cutting-edge technology, Modern Warfare II is the ultimate gaming experience for FPS fans.
                  </p>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                  <p>Modern Warfare II is the ultimate FPS experience. The graphics are stunning, and the realistic gameplay makes you feel like you're actually on the battlefield. The missions are challenging, but incredibly satisfying to complete. And the multiplayer mode is where this game truly shines - it's addictive and competitive, with a wide range of customization options that keep the gameplay fresh and exciting. Overall, Modern Warfare II is a must-have for any FPS fan. 10/10, would highly recommend.</p>
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
              <a href="{{ route('product.details') }}"><img src="{{ asset('images/categories-01.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Strategy</h4>
            <div class="thumb">
              <a href="{{ route('product.details') }}"><img src="{{ asset('images/categories-05.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Simulation</h4>
            <div class="thumb">
              <a href="{{ route('product.details') }}"><img src="{{ asset('images/categories-03.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Sports</h4>
            <div class="thumb">
              <a href="{{ route('product.details') }}"><img src="{{ asset('images/categories-04.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="{{ route('product.details') }}"><img src="{{ asset('images/categories-05.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection