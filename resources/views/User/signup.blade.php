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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&family=Roboto:wght@100;300;400;500;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <img src="{{asset('images/techxLogo.svg')}}" alt="logo">
            </div>
            <form>
                <div class="card-body">
                    <p>Create an account and start your shopping journey with us!</p>
                    <div class="row">
                        <input type="text" placeholder="Firstname">
                        <input type="text" placeholder="Lastname">
                    </div>
                    <div class="row">
                        <input type="text" placeholder="E-mail">
                        <input type="text" placeholder="Phone">
                    </div>
                    <div class="row">
                        <input type="text" placeholder="Address 1">
                        <input type="text" placeholder="Address 2">
                    </div>
                    <div class="row">
                        <input type="text" placeholder="State">
                        <input type="text" placeholder="Country">
                    </div>
                    <div class="row">
                        <input type="text" placeholder="City">
                        <input type="text" placeholder="Zip Code">
                    </div>
                    <div class="row">
                        <input type="password" placeholder="Password">
                        <input type="password" placeholder="Confirm Password">
                    </div>
                    <button>Signup</button>
                </div>
            </form>
            <div class="card-footer">
                <a href="register.html">Already have an account? Login here</a>
            </div>
        </div>
    </div>
</body>
</html>