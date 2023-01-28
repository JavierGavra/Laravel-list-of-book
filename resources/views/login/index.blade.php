<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('login.css') }}">
    <title>LogIn</title>
</head>
<body>
    <div class="parent clearfix">
    <div class="bg-illustration">
        <img src="https://i.ibb.co/Pcg0Pk1/logo.png" alt="logo">

        <div class="burger-btn">
        <span></span>
        <span></span>
        <span></span>
        </div>

    </div>
    
    <div class="login">
        <div class="container">
        <h1>Login to access to<br />your account</h1>
    
        <div class="login-form">
            <form method="post" action="/login/auth">
            @csrf
            <input name="email" id="email" type="email" placeholder="E-mail Address">
            <input name="password" id="password" type="password" placeholder="Password">

            <div class="remember-form">
                <input type="checkbox">
                <span>Remember me</span>
            </div>
            <div class="forget-pass">
                <a href="#">Forgot Password ?</a>
            </div>

            <button type="submit">Log In</button>

            </form>
        </div>
    
        </div>
        </div>
    </div>
</body>
</html>