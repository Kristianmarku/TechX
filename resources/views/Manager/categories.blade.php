@extends('layouts.staff.main')
@section('title', 'Categories')

@section('content')
        <div class="panel-header panel-header-lg">
          <div class="row ml-3 d-flex flex-wrap">
            <div class="col-md-2">
              <a href="#">
                <div class="card">
                  <div class="card-header text-center">
                    <h3 class="title">Total Categories</h3>
                  </div>
                  <div class="card-body">
                    <div
                      class="d-flex justify-content-center align-items-center"
                    >
                      <h1>33</h1>
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
                  <div class="row mb-2">
                    <div class="col-md-4">
                      <label for="">Name</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Category name"
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <label for="">Description</label>
                      <textarea
                        class="form-control"
                        name=""
                        id=""
                        cols="30"
                        rows="10"
                        placeholder="Category description..."
                      ></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <button class="btn btn-primary">Add Category</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-category">Categories</h5>
                  <h4 class="card-title">All Categories</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary">
                        <th>Name</th>
                        <th>Description</th>
                        <th></th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Gaming</td>
                          <td>Tech gaming stuff</td>
                          <td>
                            <button class="btn btn-warning" data-toggle="modal" data-target="#editCategoryModal">
                              Edit
                            </button>
                            <button class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div
          class="modal fade"
          id="editCategoryModal"
          data-backdrop="static"
          data-keyboard="false"
          tabindex="-1"
          aria-labelledby="editCategoryLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editCategoryLabel">
                  Edit Category
                </h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="category_name">Name</label>
                      <input
                        name="category_name"
                        type="text"
                        class="form-control"
                        placeholder="Category name"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea
                        class="form-control"
                        name=""
                        id=""
                        cols="30"
                        rows="10"
                        placeholder="Category description..."
                      ></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Close
                </button>
                <button type="button" class="btn btn-primary">
                  Save Changes
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
@include('manager.modals.issue-modal')