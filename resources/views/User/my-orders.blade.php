@extends('layouts.user.main')
@section('title', 'My Orders')

@section('content')

<link rel="stylesheet" href="{{ asset('css/my-orders.css') }}">
<link rel="stylesheet" href="{{ asset('css/table.css') }}">

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>My Orders</h3>
          <span class="breadcrumb"><a href="{{ route('home') }}">Home</a>  >  My Orders</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                        <tr>
                            <th>Order ID</th>
                            <th style="text-align: right;">Date Ordered</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                          @forelse($orders as $order)
                            <tr>
                                <td>#{{$order->id}}</td>
                                <td style="text-align: right;">{{ $order->created_at->format('d.m.Y - h:i:s') }} </td>
                                <td>{{ $order->total_amount }}€</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #F96332;">
                              <td colspan="2">
                                <div class="container-abf">
                                  <div class="progresBar-abf">
                                    <div class="progres-text-abf">
                                      <h4>Pending</h4> {{-- 10 --}}
                                      <h4>Verified</h4> {{-- 26 --}}
                                      <h4>Ready to ship</h4> {{-- 50 --}}
                                      <h4>Shipping</h4> {{-- 73 --}}
                                      <h4>Delivered</h4> {{-- 100 --}}
                                    </div>
                                    <progress value="{{
                                        match ($order->status) {
                                            'Pending' => 10,
                                            'Verified' => 26,
                                            'Ready to Ship' => 50,
                                            'Shipping' => 73,
                                            'Delivered' => 100,
                                            default => 0
                                        }
                                      }}" max="100"></progress>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <button class="open-btn">
                                  <a href="{{ route('view.order', $order->id) }}">OPEN</a>
                                </button>
                              </td>
                            </tr>
                          @empty 
                          <tr>
                            <td colspan="5" class="text-danger">No orders available.</td>
                          </tr>
                          @endforelse
                        <tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
@endsection





{{-- 
@extends('layouts.user.main')
@section('title', 'My Orders')

@section('content')

<link rel="stylesheet" href="{{ asset('css/my-orders.css') }}">
<link rel="stylesheet" href="{{ asset('css/table.css') }}">

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>My Orders</h3>
          <span class="breadcrumb"><a href="{{ route('home') }}">Home</a>  >  My Orders</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12">
                @forelse ($orders as $order)
                  <div class="container-abf">
                    <div class="item-abf">
                      @foreach ($order->products as $product)
                        <div class="image-abf">
                          <img src="{{ asset('images/top-game-02.jpg') }}"/>
                        </div>
                        <div class="text-abf">
                          <h3>{{ $product->name }}</h3>
                          <h4>Price: {{ $order->total_amount }}$</h4>
                          <h4>Quantity: {{ $product->pivot->quantity }}</h4>
                        </div>
                        <div class="code-abf">
                          <h3>Product Code:</h3>
                          <h5>{{ $product->code }}</h5>
                        </div>
                        <div class="subtotal-abf">
                          <h3>Total:</h3>
                          <h5>{{ $order->total_amount }}$</h5>
                        </div>
                      @endforeach
                    </div>
                    <div class="progresBar-abf">
                      <div class="progres-text-abf">
                        <h4>Pending</h4>
                        <h4>Verified</h4>
                        <h4>Ready to ship</h4>
                        <h4>Shipping</h4>
                        <h4>Delivered</h4>
                      </div>
                      <progress value="50" max="100"></progress>
                    </div>
                  </div>
                @empty
                  <p>No orders found.</p>
                @endforelse

                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                          <tr>
                              <th>Order ID</th>
                              <th>Product Name</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($orders as $order)
                            @foreach ($order->products as $product)
                              <tr>
                                  <td>{{ $order->id }}</td>
                                  <td>{{ $product->name }}</td>
                                  <td>{{ $order->total_amount }}$</td>
                                  <td>{{ $product->pivot->quantity }}</td>
                                  <td>Ready to ship</td>
                              </tr>
                            @endforeach
                          @empty
                            <tr>
                                <td colspan="5">No orders found.</td>
                            </tr>
                          @endforelse
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
@endsection --}}



