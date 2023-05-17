@extends('layouts.staff.main')
@section('title', 'Sales')

@section('content')
        <div class="panel-header panel-header-lg">
          <div class="row ml-3 d-flex flex-wrap">
            <div class="col-md-2">
              <a href="#">
                <div class="card">
                  <div class="card-header text-center">
                    <h3 class="title">Products Onsale</h3>
                  </div>
                  <div class="card-body">
                    <div
                      class="d-flex justify-content-center align-items-center"
                    >
                      <h1>38</h1>
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
                  <div class="row mb-2">
                    <div class="col-md-4">
                      <label for="">Product ID</label>
                      <input type="text" class="form-control" placeholder="#" />
                    </div>

                    <div class="col-md-4">
                      <label for="">Sale Price</label>
                      <input type="text" class="form-control" placeholder="€" />
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-4">
                      <label for="">From</label>
                      <input
                        type="date"
                        name="start_date"
                        class="form-control"
                      />
                    </div>

                    <div class="col-md-4">
                      <label for="">To</label>
                      <input type="date" name="end_date" class="form-control" />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <button class="btn btn-primary">Add Sale</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div class="d-flex">
                    <h4 class="card-title">All Products</h4>
                  </div>
                  <div class="d-flex">
                    <div class="input-group no-border mx-2">
                      <input
                        type="text"
                        value=""
                        class="form-control"
                        placeholder="Search products..."
                      />
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <i class="now-ui-icons ui-1_zoom-bold"></i>
                        </div>
                      </div>
                    </div>

                    <div class="input-group no-border mx-2">
                      <select name="" id="" class="form-control">
                        <option value="">Category #1</option>
                        <option value="">Category #2</option>
                        <option value="">Category #3</option>
                        <option value="">Category #4</option>
                        <option value="">Category #5</option>
                      </select>
                      <div class="input-group-append">
                        <div class="input-group-text"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary">
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Sale Price</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Gaming Mouse</td>
                          <td>Whiteshark gaming mouse</td>
                          <td>32</td>
                          <td>Gaming</td>
                          <td>45.99€</td>
                          <td>35.99€</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Gaming Keyboard</td>
                          <td>Whiteshark gaming keyboard</td>
                          <td>15</td>
                          <td>Gaming</td>
                          <td>95.99€</td>
                          <td>-</td>
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