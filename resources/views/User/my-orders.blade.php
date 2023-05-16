@extends('layouts.user.main')
@section('title', 'My Orders')

 <!-- Additional CSS Files -->
 <link rel="stylesheet" href="{{ asset('css/my-orders.css') }}">
 <link rel="stylesheet" href="{{ asset('css/table.css') }}">

@section('content')

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
                {{-- 
                        Add my orders here
                    --}}

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
                            <tr>
                                <td>1</td>
                                <td>100</td>
                                <td>Today</td>
                                <td>Review</td>
                            </tr>
                    
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