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
                    <div class="container-abf">
                      <div class="item-abf">
                        <div class="image-abf">
                          <img src="{{ asset('images/top-game-02.jpg') }}"/>
                        </div>
                        <div class="text-abf">
                          <h3>PUBG</h3>
                          <h4>Price: 49.99$</h4>
                          <h4>Quantity: 1</h4>
                        </div>
                        <div class="code-abf">
                          <h3>Product Code:</h3>
                          <h5>34532</h5>
                        </div>
                        <div class="subtotal-abf">
                          <h3>Total:</h3>
                          <h5>49.99$</h5>
                        </div>
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
                                <td>13</td>
                                <td>PUBG</td>
                                <td>49.99$</td>
                                <td>1</td>
                                <td>Ready to ship</td>
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