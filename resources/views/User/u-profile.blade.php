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
              <div class="col-lg-12">
                <form method="POST" action="{{ route("update.profile") }}">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="firstname" placeholder="First Name" value="{{ $user->firstname }}" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="lastname" placeholder="Last Name" value="{{ $user->lastname }}" autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="email" pattern="[^ @]*@[^ @]*" placeholder="E-mail" value="{{ $user->email }}" >
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="phone" placeholder="Phone" value="{{ $user->phone }}" autocomplete="on" >
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="address" placeholder="Address 1" value="{{ $user->address->address }}" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="address_second" placeholder="Address 2" value="{{ $user->address->address_second }}" autocomplete="on" >
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="state" placeholder="State" value="{{ $user->address->state }}" autocomplete="on" >
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="country" placeholder="Country" value="{{ $user->address->country }}" autocomplete="on" >
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="city" placeholder="City" value="{{ $user->address->city }}" autocomplete="on" >
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="zip_code" placeholder="Zip Code" value="{{ $user->address->zip_code }}" autocomplete="on" >
                        </fieldset>
                    </div>

                    @if($errors->any())
                      <div class="col-lg-6">
                          <div class="error-messages">
                                @foreach($errors->all() as $error)
                                  <p>{{ $error }}</p>
                                @endforeach
                          </div>
                      </div>
                    @endif

                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" class="orange-button">Save Changes</button>
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