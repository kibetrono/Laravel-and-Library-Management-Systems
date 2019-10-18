<?php
?>
<html>
<head>
<title>Web Guide</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</head>
<body>





<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

<div style="margin-bottom:0px;" class="jumbotron">
<h1>Web Retrieval Engine</h1>
<p>Google quide for retrieving files and documents</p>

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
<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">LIbrary
    <span class="caret"></span>
</a>
<div class="dropdown-menu" arial-labelledby="dropdown_target">
<ul style="background-color:black;color:white" class="navbar-nav navbar-dark bg-dark ">

<a class="dropdown-item">Philosophy</a>
<a class="dropdown-item">Fictions</a> 
<a class="dropdown-item">Poetry</a>

<a class="dropdown-item">Historical books</a>
<!--<div class="dropdown-divider"></div>-->
<a href="{{url('sciences')}}"class="dropdown-item">Sciences</a> 
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
 <!--<img src="bootsrap-4-navbar-cheat.png" class="img-fluid">-->
</body>
</html>