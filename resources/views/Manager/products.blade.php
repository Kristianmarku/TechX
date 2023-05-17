@extends('layouts.staff.main')
@section('title', 'Products')

@section('content')
        <div class="panel-header panel-header-lg">
          <div class="row ml-3 d-flex flex-wrap">
            <div class="col-md-2">
              <a href="#">
                <div class="card">
                  <div class="card-header text-center">
                    <h3 class="title">Total Products</h3>
                  </div>
                  <div class="card-body">
                    <div
                      class="d-flex justify-content-center align-items-center"
                    >
                      <h1>500</h1>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-2">
              <a href="#">
                <div class="card">
                  <div class="card-header text-center">
                    <h3 class="title">Instock Products</h3>
                  </div>
                  <div class="card-body">
                    <div
                      class="d-flex justify-content-center align-items-center"
                    >
                      <h1>381</h1>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-2">
              <a href="#">
                <div class="card">
                  <div class="card-header text-center">
                    <h3 class="title">Sold Out Products</h3>
                  </div>
                  <div class="card-body">
                    <div
                      class="d-flex justify-content-center align-items-center"
                    >
                      <h1>119</h1>
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
                  <h5 class="card-category">Add Products</h5>
                  <h4 class="card-title">New Product</h4>
                </div>
                <div class="card-body">
                  <div class="row mb-4">
                    <div class="col-md-4">
                      <label for="">Product Name</label>
                      <input
                        class="form-control"
                        type="text"
                        placeholder="Name"
                      />
                    </div>

                    <div class="col-md-2">
                      <label for="">Quantity</label>
                      <input
                        class="form-control"
                        type="number"
                        placeholder="Quantity"
                      />
                    </div>

                    <div class="col-md-2">
                      <label for="">Category</label>
                      <select class="form-control" name="" id="">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <label for="">Description</label>
                      <textarea
                        class="form-control"
                        placeholder="Write product information and details"
                        name=""
                        id=""
                        cols="30"
                        rows="10"
                      ></textarea>
                    </div>

                    <div class="col-md-2">
                      <label for="">Price</label>
                      <input
                        type="number"
                        class="form-control"
                        placeholder="Price"
                      />
                    </div>

                    <div class="col-md-4">
                      <label for="">Thumbnail Image</label>
                      <input type="file" class="form-control border-0" />
                    </div>
                  </div>

                  <div class="col-md-4">
                    <button class="btn btn-primary">Add Product</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-category">Products</h5>
                  <h4 class="card-title">All Products</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary">
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Gaming Laptop</td>
                          <td>High performance gaming laptop</td>
                          <td>50</td>
                          <td>Gaming</td>
                          <td>$1,949</td>
                          <td>
                            <button
                              class="btn btn-warning"
                              data-target="#editProductModal"
                              data-toggle="modal"
                            >
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
          id="editProductModal"
          data-backdrop="static"
          data-keyboard="false"
          tabindex="-1"
          aria-labelledby="editProductLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editProductLabel">Edit Product</h5>
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
                <div class="row mb-4">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="product_name">Product Name</label>
                      <input
                        name="product_name"
                        type="text"
                        class="form-control"
                        placeholder="Name"
                      />
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="quantity">Quantity</label>
                      <input
                        name="quantity"
                        type="number"
                        class="form-control"
                        placeholder="Quantity"
                      />
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="price">Price</label>
                      <input
                        name="price"
                        type="number"
                        class="form-control"
                        placeholder="Price"
                      />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <label for="">Description</label>
                    <textarea
                      class="form-control"
                      placeholder="Write product information and details"
                      name=""
                      id=""
                      cols="30"
                      rows="10"
                    ></textarea>
                  </div>

                  <div class="col-md-2">
                    <label for="">Price</label>
                    <input
                      type="number"
                      class="form-control"
                      placeholder="Price"
                    />
                  </div>

                  <div class="col-md-4">
                    <label for="">Thumbnail Image</label>
                    <input type="file" class="form-control border-0" />
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