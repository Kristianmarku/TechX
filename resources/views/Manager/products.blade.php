@extends('layouts.staff.main')
@section('title', 'Products')

@section('content')
        <div class="panel-header panel-header-lg">
          @livewire('manager.product-counters')
        </div>
        <div class="content">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-category">Add Products</h5>
                    <h4 class="card-title">New Product</h4>
                  </div>
                  <form action="{{ route('add.product') }}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                      <div class="card-body">
                        <div class="row mb-4">
                          <div class="col-md-4">
                            <label for="name">Product Name</label>
                            <input name="name" class="form-control" type="text" placeholder="Name" />
                            @error('name')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>

                          <div class="col-md-2">
                            <label for="quantity">Quantity</label>
                            <input name="quantity" class="form-control" type="number" placeholder="Quantity" />
                            @error('quantity')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>

                          <div class="col-md-2">
                            <label for="category_id">Category</label>
                            <select class="form-control" name="category_id">
                                <option value="0">Uncategorized</option>
                              @forelse ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                              @empty
                                None available
                              @endforelse
                            </select>
                            @error('category_id')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-4">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" placeholder="Write product information and details" cols="30" rows="10" ></textarea>
                            @error('description')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>

                          <div class="col-md-2">
                            <label for="price">Price</label>
                            <input name="price" type="number" step="any" class="form-control" placeholder="Price" />
                            @error('price')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>

                          <div class="col-md-4">
                            <label for="cover_image">Thumbnail Image</label>
                            <input name="cover_image" type="file" class="form-control border-0" />
                            @error('cover_image')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-4">
                          <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>

          @livewire('manager.products-table')
          
        </div>
      </div>
@endsection
@include('manager.modals.issue-modal')