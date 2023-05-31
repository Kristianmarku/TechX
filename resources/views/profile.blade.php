@extends('layouts.staff.main')
@section('title', 'Profile')

@section('content')
        <div class="panel-header panel-header-sm"></div>
        <div class="content">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h5 class="title">Edit Profile</h5>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-4 pr-1">
                        <div class="form-group">
                          <label>Firstname</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="First Name"
                          />
                        </div>
                      </div>
                      <div class="col-md-4 pl-1">
                        <div class="form-group">
                          <label>Last Name</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Last Name"
                          />
                        </div>
                      </div>
                      <div class="col-md-4 pl-1">
                        <div class="form-group">
                          <label>E-mail address</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="E-mail"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>State</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="State"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Country</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Country"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>City</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="City"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Address</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="First address"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Address</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Second address"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Zip Code</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="ZIP-code"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <button class="btn btn-primary">Save Changes</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h5 class="title">Password</h5>
                </div>
                <div class="card-body">
                  <div class="row d-flex flex-column">
                    <div class="col-md-8 pr-1">
                      <div class="form-group">
                        <label>New Password</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="New Password"
                        />
                      </div>
                    </div>

                    <div class="col-md-8 pr-1">
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Confirm Password"
                        />
                      </div>
                    </div>

                    <div class="col-md-8 pr-1">
                      <div class="form-group">
                        <button class="btn btn-primary mt-4">
                          Change Password
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection