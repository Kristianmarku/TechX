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
                <form>
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="firstname" id="firstname" placeholder="First Name" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="lastname" id="lastname" placeholder="Last Name" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-mail" required="">
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="phone" id="phone" placeholder="Phone" autocomplete="on" required>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="address" id="address" placeholder="Address 1" autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="address_second" id="address_second" placeholder="Address 2" autocomplete="on" >
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="state" id="state" placeholder="State" autocomplete="on" >
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="country" id="country" placeholder="Country" autocomplete="on" >
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="city" id="city" placeholder="City" autocomplete="on" >
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="zip_code" id="zip_code" placeholder="Zip Code" autocomplete="on" >
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button id="form-submit" class="orange-button">Save Changes</button>
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