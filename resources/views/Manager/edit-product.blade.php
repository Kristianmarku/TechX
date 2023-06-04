@extends('layouts.staff.main')
@section('title', 'Edit Product')

@section('content')
        <div class="panel-header panel-header-lg">
          @livewire('manager.product-counters')
        </div>
        <div class="content">
            <div class="row">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <h5 class="title">Edit Product</h5>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{ route('update.product', $product->id) }}" enctype="multipart/form-data">
                      @csrf 
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Product Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Product Name" value="{{ $product->name ?? '-' }}" autocomplete="on" />
                            @error('name')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Price</label>
                            <input name="price" type="number" step="any" class="form-control" placeholder="Price" value="{{ $product->price ?? '-' }}" />
                            @error('price')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Quantity</label>
                            <input name="quantity" type="number" class="form-control" placeholder="Quantity" value="{{ $product->quantity ?? '-' }}" autocomplete="on" />
                            @error('quantity')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                    <option selected value="{{ $product->category_id }}">{{ $product->category->name }}</option>
                                @forelse($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @empty
                                @endforelse
                            </select>
                            @error('category_id')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" cols="30" rows="10">{{ $product->description }}</textarea>
                            @error('description')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                            <label>Thumbnail Image</label>
                            <p>Current Image: {{ $product->cover_image }}</p>
                            <input name="cover_image" type="file" class="form-control border-0"/>
                            @error('cover_image')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
@endsection