@extends('layouts.staff.main')
@section('title', 'Categories')

@section('content')
        <div class="panel-header panel-header-lg">
          <div class="row ml-3 d-flex flex-wrap">
            <div class="col-md-3">
              <a href="#">
                <div class="card">
                  <div class="card-header text-center">
                    <h3 class="title">Categories</h3>
                  </div>
                  <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                      <h1>{{ $categoriesCount }}</h1>
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
                  <h5 class="card-category">Add Categories</h5>
                  <h4 class="card-title">New Category</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('add.category') }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                      <div class="col-md-4">
                        <label for="name">Name <span class="text-danger font-weight-bold">*</span></label>
                        <input name="name" type="text" class="form-control" placeholder="Category name" value="{{ old('name') }}"/>
                        @error('name')
                          <p class="text-danger p-2">{{ $message }}</p>
                        @enderror 
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <label for="description">Description <span class="text-danger font-weight-bold">*</span></label>
                        <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Category description..." value="{{ old('description') }}"></textarea>
                        @error('description')
                          <p class="text-danger p-2">{{ $message }}</p>
                        @enderror 
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Add Category</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              @livewire('manager.categories-table')
            </div>
          </div>
        </div>
      </div>
@endsection
@include('manager.modals.issue-modal')