<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/style.css')}}" rel="stylesheet"> 
    <title>Home Page</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo"><a href="{{ URL::to('/') }}">LOGO</a> </div>
            <div class="user">
            <p class="login"><a href="{{ URL::to('login') }}">Login</a></p>
            <p class="register"><a href="{{ URL::to('register') }}">Register</a></p>
            <p class="login" style="margin-left: 5px"><a href="{{url('admin')}}">Admin</a></p>
            </div>
        </div>
        <div class="overlay-left"></div>
        <div class="content content-left">
            <div class="content-wrap">
            <p class="title-1">SHOP</p>
            <hr class="line"></hr>
            <h1 class="title-2">CORPORATE</h1>
            <p class="text">Liendis id temporibus voluptate? Saepe doloribus enim quo iure aperiam! Dignissimos incid</p>
            <button class="btn-view"><a href="{{url('/product')}}">View Now</a></button>
            </div>
        </div>
        <div class="overlay-right"></div>
        <div class="content content-right">
            <div class="content-wrap">
            <p class="title-1">SHOP</p>
            <hr class="line"></hr>
            <h1 class="title-2">CONSUMER</h1>
            <p class="text">Liendis id temporibus voluptate? Saepe doloribus enim quo iure aperiam! Dignissimos incid</p>
            <button class="btn-view"><a href="{{url('/product')}}">View Now</a></button>
            </div>
        </div>
    </div>
</body>
</html>