<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('login.css') }}">
    <title>Register</title>
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
        <h1>Register</h1>
    
        <div class="login-form">
            <form method="post" action="/register/create">
            @csrf
            <input type="name" name="name" id="name" placeholder="Username">
            <input type="email" name="email" id="email"  placeholder="E-mail Address">
            <input type="password" name="password" id="password"  placeholder="Password">

            <button type="submit">Register</button>

            </form>
        </div>
    
        </div>
        </div>
    </div>
</body>
</html>