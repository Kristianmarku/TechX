@extends('layouts.user.main')
@section('title', 'Contact')

@section('content')

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Profile</h3>
          <span class="breadcrumb"><a href="{{ route('home') }}">Home</a>  >  Profile</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12 mb-4">
                <h3 class="mb-4">Personal Information</h3>
                <form method="POST" action="{{ route("update.profile") }}">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="firstname" placeholder="First Name" value="{{ $user->firstname ?? '-' }}" autocomplete="on">
                          @error('firstname')
                                <div class="error-messages"><p>{{ $message }}</p></div>
                            @enderror
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="lastname" placeholder="Last Name" value="{{ $user->lastname ?? '-' }}" autocomplete="on">
                          @error('lastname')
                                <div class="error-messages"><p>{{ $message }}</p></div>
                            @enderror
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="email" pattern="[^ @]*@[^ @]*" placeholder="E-mail" value="{{ $user->email ?? '-' }}">
                            @error('email')
                                <div class="error-messages"><p>{{ $message }}</p></div>
                            @enderror
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="phone" placeholder="Phone" value="{{ $user->phone ?? '-' }}" autocomplete="on">
                            @error('phone')
                                <div class="error-messages"><p>{{ $message }}</p></div>
                            @enderror
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="address" placeholder="Address 1" value="{{ $user->address->address ?? '-' }}" autocomplete="on">
                          @error('address')
                                <div class="error-messages"><p>{{ $message }}</p></div>
                            @enderror
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="address_second" placeholder="Address 2" value="{{ $user->address->address_second ?? '-' }}" autocomplete="on">
                            @error('address_second')
                                <div class="error-messages"><p>{{ $message }}</p></div>
                            @enderror
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="state" placeholder="State" value="{{ $user->address->state ?? '-' }}" autocomplete="on">
                            @error('state')
                                <div class="error-messages"><p>{{ $message }}</p></div>
                            @enderror
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="country" placeholder="Country" value="{{ $user->address->country ?? '-' }}" autocomplete="on">
                            @error('country')
                                <div class="error-messages"><p>{{ $message }}</p></div>
                            @enderror
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="city" placeholder="City" value="{{ $user->address->city ?? '-' }}" autocomplete="on">
                            @error('city')
                                <div class="error-messages"><p>{{ $message }}</p></div>
                            @enderror
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="zip_code" placeholder="Zip Code" value="{{ $user->address->zip_code ?? '-' }}" autocomplete="on">
                            @error('zip_code')
                                <div class="error-messages"><p>{{ $message }}</p></div>
                            @enderror
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" class="orange-button">Save Changes</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>


              <div class="col-lg-12 mt-4">
                <h3 class="mb-4">Security & Password</h3>
                <form method="POST" action="{{ route("update.password") }}">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input name="new_password" id="new_password" type="password" class="form-control" placeholder="New Password" />
                        @error('new_password')
                          <div class="error-messages"><p>{{ $message }}</p></div>
                        @enderror
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input name="new_password_confirmation" id="new_password_confirmation" type="password" class="form-control" placeholder="Confirm Password" />
                      </fieldset>
                    </div>

                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" class="orange-button">Update Password</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
@endsection