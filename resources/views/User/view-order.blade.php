@extends('layouts.user.main')
@section('title', 'My Order')

@section('content')

<link rel="stylesheet" href="{{ asset('css/my-orders.css') }}">
<link rel="stylesheet" href="{{ asset('css/table.css') }}">

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>My Orders</h3>
          <span class="breadcrumb"><a href="{{ route('home') }}">Home</a>  >  My Order #{{ $order->id }}</span>
          <br>
            <span class="breadcrumb">
                <button onclick="confirmDelete({{ $order->id }})" class="open-btn">
                    Delete Order
                </button>
                <form id="deleteForm_{{ $order->id }}" action="{{ route('delete.order', $order->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </span>
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
                @forelse($order->products as $product)
                <a href="{{ route('product.details', $product->id) }}">
                    <div class="container-abf">
                        <div class="item-abf">
                        <div class="image-abf">
                            <img src="{{ asset('storage/cover_images/'. $product->cover_image) }}"/>
                        </div>
                        <div class="text-abf">
                            <h3>{{ $product->name }}</h3>
                            <h4>Quantity: {{ $product->pivot->quantity }}</h4>
                        </div>
                        <div class="code-abf">
                            <h3>Product Code:</h3>
                            <h5>#{{ $product->id }}</h5>
                        </div>
                        <div class="subtotal-abf">
                            <h3>Price:</h3>
                            <h5>{{ $product->price }}€</h5>
                        </div>
                        </div>
                    </div>
                </a>
                @empty
                    <p>
                        No products available
                    </p>
                @endforelse
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
@endsection