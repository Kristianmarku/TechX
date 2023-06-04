@extends('layouts.user.main')
@section('title', 'Shop')

@section('content')
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Our Shop</h3>
          <span class="breadcrumb"><a href="{{ route('shop') }}">Home</a> > Our Shop</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Adventure</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Strategy</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Racing</a>
        </li>
      </ul>
      <div class="row trending-box">
        @forelse($products as $pro)
          <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv">
            <div class="item">
              <div class="thumb">
                <a href="{{ route('product.details', $pro->id) }}"><img src="{{ asset('storage/cover_images/'. $pro->cover_image ) }}" alt="Product Image"></a>
                <span class="price">
                  @if($pro->sale_price) <em> {{ $pro->price ?? '-' }}</em> @endif 
                  {{ $pro->sale_price ? $pro->sale_price : $pro->price }}€
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
          <p>No products available</p>
        @endforelse 
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
          <li><a href="#"> &lt; </a></li>
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"> &gt; </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  @endsection