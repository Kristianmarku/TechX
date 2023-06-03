@extends('layouts.staff.main')
@section('title', 'Edit User')

@section('content')
        <div class="panel-header panel-header-lg">
          @livewire('admin.counters')
        </div>
        <div class="content">
            <div class="row">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <h5 class="title">Edit User</h5>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{ route('update.user.profile', $user->id) }}">
                      @csrf 
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Firstname</label>
                            <input name="firstname" type="text" class="form-control" placeholder="First Name" value="{{ $user->firstname }}" autocomplete="on" />
                             @error('firstname')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Last Name</label>
                            <input name="lastname" type="text" class="form-control" placeholder="Last Name" value="{{ $user->lastname }}" />
                             @error('lastname')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>E-mail address</label>
                            <input name="email" type="text" class="form-control" placeholder="E-mail" value="{{ $user->email }}" />
                             @error('email')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Phone</label>
                            <input name="phone" type="text" class="form-control" placeholder="Phone" value="{{ $user->phone }}" />
                             @error('phone')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>State</label>
                            <input name="state" type="text" class="form-control" placeholder="State" value="{{ $user->address->state }}" />
                            @error('state')
                            <p class="text-danger p-2">{{ $message }}</p>
                          @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Country</label>
                            <input name="country" type="text" class="form-control" placeholder="Country" value="{{ $user->address->country }}" />
                            @error('country')
                            <p class="text-danger p-2">{{ $message }}</p>
                          @enderror
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>City</label>
                            <input name="city" type="text" class="form-control" placeholder="City" value="{{ $user->address->city }}" />
                            @error('city')
                            <p class="text-danger p-2">{{ $message }}</p>
                          @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>First Address</label>
                            <input name="address" type="text" class="form-control" placeholder="First address" value="{{ $user->address->address }}" />
                            @error('address')
                            <p class="text-danger p-2">{{ $message }}</p>
                          @enderror
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Second Address</label>
                            <input name="address_second" type="text" class="form-control" placeholder="Second address" value="{{ $user->address->address_second }}" />
                            @error('address_second')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Zip Code</label>
                            <input name="zip_code" type="text" class="form-control" placeholder="Zip Code" value="{{ $user->address->zip_code }}" />
                            @error('zip_code')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Role</label>
                            <select name="role" class="form-control">
                              <option selected disabled value="{{ $user->role_id }}">{{ $user->role->name }}</option>
                              <option value="1">Admin</option>
                              <option value="2">Manager</option>
                              <option value="3">Customer</option>
                              <option value="4">Support</option>
                            </select>
                            @error('role')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>
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
  
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h5 class="title">Password</h5>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{ route('update.user.password', $user->id) }}">
                      @csrf 
                      <div class="row d-flex flex-column">
                        <div class="col-md-8 pr-1">
                          <div class="form-group">
                            <label for="new_password">New Password</label>
                            <input name="new_password" id="new_password" type="password" class="form-control" placeholder="New Password" />
                            @error('new_password')
                              <p class="text-danger p-2">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
    
                        <div class="col-md-8 pr-1">
                          <div class="form-group">
                            <label for="new_password_confirmation">Confirm Password</label>
                            <input name="new_password_confirmation" id="new_password_confirmation" type="password" class="form-control" placeholder="Confirm Password" />
                          </div>
                        </div>
    
                        <div class="col-md-8 pr-1">
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary mt-4">
                              Change Password
                            </button>
                          </div>
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