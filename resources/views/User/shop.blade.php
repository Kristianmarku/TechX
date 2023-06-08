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
    @livewire('user.shop-products')
  </div>
  @endsection