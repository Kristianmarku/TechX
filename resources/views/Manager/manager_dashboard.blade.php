@extends('layouts.staff.main')
@section('title', 'Dashboard')

@section('content')
        <div class="panel-header panel-header-lg">
          <div class="row ml-3 d-flex flex-wrap">
            <div class="col-md-2">
              <a href="#">
                <div class="card">
                  <div class="card-header text-center">
                    <h3 class="title">Today's Sales</h3>
                  </div>
                  <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                      <h1>33</h1>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-2">
              <a href="#">
                <div class="card">
                  <div class="card-header text-center">
                    <h3 class="title">Total Sales</h3>
                  </div>
                  <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                      <h1>233</h1>
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
                  <h5 class="card-category">Orders</h5>
                  <h4 class="card-title">Latest Orders</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary">
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Status</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Kristian</td>
                          <td>Marku</td>
                          <td>19.4.2023</td>
                          <td>$150</td>
                          <td>
                            <p class="badge badge-warning">Pending</p>
                          </td>
                          <!-- Status: Pending, Confirmed, Declined, Cancelled, Completed -->
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
        <div class="modal fade" id="editUserModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editUserLabel" aria-hidden="true" >
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editUserLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="firstname">Firstname</label>
                      <input name="firstname" type="text" class="form-control" placeholder="Firstname" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lastname">Lastname</label>
                      <input name="lastname" type="text" class="form-control" placeholder="Lastname" />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">E-mail</label>
                      <input name="email" type="text" class="form-control" placeholder="E-mail" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lastname">Status</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="activeCheck" value="1"/>
                        <label class="form-check-label" for="activeCheck">
                          Active
                        </label>
                        <br />
                        <input class="form-check-input" type="radio" name="status" id="inActiveCheck" value="0"/>
                        <label class="form-check-label" for="inActiveCheck">
                          Inactive
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
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
