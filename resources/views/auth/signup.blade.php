<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechX - Signup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <img src="{{asset('images/techxLogo.svg')}}" alt="logo">
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="card-body">
                    <p>Create an account and start your shopping journey with us!</p>
                    <div class="row">
                        <input name="firstname" class="@error('firstname') is-invalid @enderror" type="text" placeholder="{{ $errors->has('firstname') ? 'Firstname required!' : 'Firstname' }}" value="{{ old('firstname') }}">
                        <input name="lastname" class="@error('lastname') is-invalid @enderror" type="text" placeholder="{{ $errors->has('lastname') ? 'Lastname required!' : 'Lastname' }}" value="{{ old('lastname') }}">
                    </div>
                    <div class="row">
                        <input name="email" class="@error('email') is-invalid @enderror" type="email" placeholder="{{ $errors->has('email') ? 'Email required!' : 'E-mail' }}" value="{{ old('email') }}">
                        <input name="phone" class="@error('phone') is-invalid @enderror" type="text" placeholder="{{ $errors->has('phone') ? 'Phone required!' : 'Phone' }}" value="{{ old('phone') }}">
                    </div>
                    <div class="row">
                        <input name="address" class="@error('address') is-invalid @enderror" type="text" placeholder="{{ $errors->has('address') ? 'Address required!' : 'Address' }}" value="{{ old('address') }}">
                        <input name="address_second" class="@error('address_second') is-invalid @enderror" type="text" placeholder="{{ $errors->has('address_second') ? 'Second Address required!' : 'Second Address' }}" value="{{ old('address_second') }}">
                    </div>
                    <div class="row">
                        <input name="state" class="@error('state') is-invalid @enderror" type="text" placeholder="{{ $errors->has('state') ? 'State required!' : 'State' }}" value="{{ old('state') }}">
                        <input name="country" class="@error('country') is-invalid @enderror" type="text" placeholder="{{ $errors->has('country') ? 'Country required!' : 'Country' }}" value="{{ old('country') }}">
                    </div>
                    <div class="row">
                        <input name="city" class="@error('city') is-invalid @enderror" type="text" placeholder="{{ $errors->has('city') ? 'City required!' : 'City' }}" value="{{ old('city') }}">
                        <input name="zip_code" class="@error('zip_code') is-invalid @enderror" type="text" placeholder="{{ $errors->has('zip_code') ? 'Zip Code required!' : 'Zip Code' }}" value="{{ old('zip_code') }}">
                    </div>
                    <div class="row">
                        <input name="password" class="@error('password') is-invalid @enderror" type="password" placeholder="{{ $errors->has('password') ? 'Password required!' : 'Password' }}" autocomplete="new-password">
                        <input name="password_confirmation" type="password" placeholder="Confirm Password" autocomplete="new-password">
                    </div>
                    <button type="submit">Signup</button>
                    <div class="card-footer">
                        <a href="{{ route('login') }}">Already have an account? Login here</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>