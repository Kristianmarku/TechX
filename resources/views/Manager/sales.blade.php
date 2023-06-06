@extends('layouts.staff.main')
@section('title', 'Sales')

@section('content')
        <div class="panel-header panel-header-lg">
          <div class="row ml-3 d-flex flex-wrap">
            <div class="col-md-2">
              <a href="">
                <div class="card">
                  <div class="card-header text-center">
                    <h3 class="title">Products Onsale</h3>
                  </div>
                  <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center" >
                      <h1>{{ $productsOnSale }}</h1>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-category">Product Sales</h5>
                  <h4 class="card-title">New Sale</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('add.sale') }}" method="POST">
                    @csrf 
                    <div class="row mb-2">
                      <div class="col-md-4">
                        <label for="product_id">Product ID <span class="text-danger font-weight-bold">*</span></label>
                        <input name="product_id" type="text" class="form-control" placeholder="#" />
                        @error('product_id')
                          <p class="text-danger p-2">{{ $message }}</p>
                        @enderror 
                      </div>
  
                      <div class="col-md-4">
                        <label for="sale_price">Sale Price <span class="text-danger font-weight-bold">*</span></label>
                        <input name="sale_price" type="number" step="any" class="form-control" placeholder="€" />
                        @error('sale_price')
                          <p class="text-danger p-2">{{ $message }}</p>
                        @enderror 
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-md-4">
                        <label for="start_date">From <span class="text-danger font-weight-bold">*</span></label>
                        <input name="start_date" id="start_date" type="date" class="form-control" />
                        @error('start_date')
                          <p class="text-danger p-2">{{ $message }}</p>
                        @enderror 
                      </div>
  
                      <div class="col-md-4">
                        <label for="end_date">To <span class="text-danger font-weight-bold">*</span></label>
                        <input name="end_date" id="end_date" type="date" class="form-control" />
                        @error('end_date')
                          <p class="text-danger p-2">{{ $message }}</p>
                        @enderror 
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Add Sale</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              @livewire('manager.sales-table')
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="editCategoryModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editCategoryLabel" aria-hidden="true" >
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editCategoryLabel">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="category_name">Name</label>
                      <input name="category_name" type="text" class="form-control" placeholder="Category name" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Category description..." ></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
@include('manager.modals.issue-modal')