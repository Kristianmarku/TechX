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
                                      <h4>Pending</h4>
                                      <h4>Verified</h4> 
                                      <h4>Ready to ship</h4> 
                                      <h4>Shipping</h4>
                                      <h4>Delivered</h4> 
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
                                <a href="{{ route('view.order', $order->id) }}" class="open-btn">OPEN</a>
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