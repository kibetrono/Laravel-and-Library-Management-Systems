<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

             
                <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
 
 <button class="navbar-toggle" data-toggle="collapse" data-target="#collapse_target">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="collapse_target">
 <a class="navbar-brand"><img src=""></a>
 <span class="navbar-text">WEB GUIDE</span>
 <ul class="navbar-nav">
<li class="nav item ">
<a class="nav-link" href="#">Home</a>
</li>
<li class="nav item dropdown">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">News
    <span class="caret"></span>
</a>
<div class="dropdown-menu" arial-labelledby="dropdown_target">
<ul style="background-color:black;color:white" class="navbar-nav navbar-dark bg-dark ">
<a class="dropdown-item">Breaking News</a>
<!--<div class="dropdown-divider"></div>-->
<a class="dropdown-item">Local News</a>
<a class="dropdown-item">International News</a>
</ul> 
</div>
</li>
<li class="nav item dropdown">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">Library
    <span class="caret"></span>
</a>
<div class="dropdown-menu" arial-labelledby="dropdown_target">
<ul style="background-color:black;color:white" class="navbar-nav navbar-dark bg-dark ">

<a class="dropdown-item">Philosophy</a>
<a class="dropdown-item">Fictions</a> 
<a class="dropdown-item">Poetry</a>

<a class="dropdown-item">Historical books</a>
<!--<div class="dropdown-divider"></div>-->
<a href="{{url('sciences/show/')}}"class="dropdown-item">Sciences</a> 
<a class="dropdown-item">Religious</a>
<a class="dropdown-item">Novels</a>
<a class="dropdown-item"></a>
</ul> 
</div>
</li>
 </ul>
 
 </div>
 <div style="background-color:lightblue" class="search">
 <form action="" method="POST">
<!--<img src="">-->
<input type="text" name="user_query" placeholder="Search for something...">
<button type="submit" name="search">Search</button>
</form> 
</div>
 </nav>
                
            </div>
        </div>
    </body>
</html>
