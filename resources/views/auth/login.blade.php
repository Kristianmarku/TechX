<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechX - Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <img src="{{asset('images/techxLogo.svg')}}" alt="logo">
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-body">
                    <p>Hey, enter your details and start shopping.</p>
                    <input name="email" type="text" placeholder="E-mail" value="{{old('email')}}">
                    <input name="password" type="Password" placeholder="Password">
                    @if($errors->any())
                        <p class="error-message">The email or password you entered is incorrect!</p>
                    @endif 
                    <button type="submit">Login</button>
                </div>
            </form>
            <div class="card-footer">
                <a href="{{ route('signup') }}">Don't have an account? Signup here</a>
            </div>
        </div>
    </div>
</body>
</html>