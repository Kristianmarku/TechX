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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&family=Roboto:wght@100;300;400;500;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <img src="{{asset('images/techxLogo.svg')}}" alt="logo">
            </div>
            <form>
                <div class="card-body">
                    <p>Hey, enter your details and start shopping.</p>
                    <input type="text" placeholder="E-mail">
                    <input type="Password" placeholder="Password">
                    <button>Login</button>
                </div>
            </form>
            <div class="card-footer">
                <a href="">Don't have an account? Signup here</a>
            </div>
        </div>
    </div>
</body>
</html>