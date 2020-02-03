<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{asset('css/slideshow.css')}}" type="text/css" rel="stylesheet">

        <title>Laravel</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
         
            .top-right {
                position: absolute;
                right: 10px;
                top: 4px;
              
            }
.contain2{
    margin:1% 3%;
    
}
        
    .contain{
    
    height:auto;
    width:auto;
    text-align:center;
    background-color:brown;
}
.nav{
    display:block;
    text-align:center;
}
.nav ul{
    margin:0;
    padding:0px;
    list-style:none;
}
.nav a{
    display:block;
    background-color:#111;
    color:#fff;
    text-decoration:none;
    padding:0.8em 1.8em;
    text-transformation:uppercase;
    font-size:90%;
    letter-spacing:2px;
    text-shadow:0 -1px 0 #000;
    position:relative;
}
.nav{
    vertical-align:top;
    display:inline-block;
    box-shadow:
    1px -1px -1px 1px #000,
    1px -1px -1px 1px #fff,
    0 0 6px 3px #fff;
    border-radius:6px;

}
.nav li{
    position:relative;

}
.nav >li{
    float:left;
    border-bottom:4px #aaa solid;
    margin-right:1px;
}
.nav > li >a{
     margin-bottom:1px;
     box-shadow:inset 0 2em .33em -0.5em #555; 
}
.nav > li:hover,
.nav > li: hover > a{
  border-bottom-color: red;
}
.nav li:hover > a{
    color:red;
}
.nav > li :first-child{
    border-radius:4px 0 0 4px;
}
.nav > li :first-child > a{
    border-radius:4px 0 0 0;
}
.nav > li:last-child{
    border-radius:0 0 4px 0 ; 
    margin-right:0;
}
.nav > li:last-child > a{
    border-radius:0 0 4px 0 ; 
    
}
.nav li li a{
    margin-top:1px;

}
.nav li a:first-child:nth-last-child(2):before{
content:"";
position:absolute;
height:0;
width:0;
border: 5px solid transparent;
top:50px;
right:5px;
}

.nav ul{
    position:absolute;
    white-space:nowrap;
    border-bottom: 5px solid red;
    z-index:1;
    left:-99999em;
  
}
.nav > li:hover >ul{
    left:auto;
    margin-top:5px;
    min-width:100%;
}
.nav > li li:hover >ul{
    left:100%;
    margin-left:1px;
    top:-1px;
}

.body-top{
    background-color:Cyan;
    padding-bottom:1%;
}
.body-middle{
margin-left:5%;
}
*{
			margin:0px auto;
		}
		::select{
			background-color: transparent;
		}

		.con{
			float:left;height:200px;width:250px;padding:5px;margin:5px 10px 10px 5px;background:blue;

		}
		textarea{
			resize:none;height:190px;width:240px;font-style: italic;font-family: rockwell;color: #ff9999;text-shadow: #000000;
		}
        </style>
    </head>
    <body>
        <div class="body-top">
        <div class="">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                    @else
                        <button><a href="{{ route('login') }}">Login</a></button>

                        @if (Route::has('register'))
                           <button> <a href="{{ route('register') }}">Register</a></button>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
              
            <p>Web Guide System</p>
            <!--<span class="navbar-text"><img style="border-radius:100px;max-width:100px;text-align:center" src="/imgsrc/webguide.jpg">-->


            <div class="contain">
<nav>
<ul class="nav">
<!--<li><img style="border-radius:100px;max-width:40px;text-align:left" src="/imgsrc/webguide.jpg"></li>-->

<li><a href="#">Home</a></li>
<!-- child menu -->
<li><a href="#">News</a>
<ul>
<li><a href="#">Breaking News</a></li>
<li><a href="#">Local News</a></li>
<li><a href="#">International News</a></li>

</ul>
</li>

<li><a href="#">Library</a>
<ul>
<li><a href="#">Sciences</a></li>
<li><a href="#">Historical</a></li>
<li><a href="#">Novels</a></li>

</ul>
</li>

<li><a href="#">Sports</a>
<ul>
<li><a href="#">Football</a></li>
<li><a href="#">Athletics</a></li>
<li><a href="#">Rugby</a></li>
<li><a href="#">Cricket</a></li>
<li><a href="#">Others</a>

<ul>
<li><a href="#">Netball</a></li>
<li><a href="#">Hockey</a></li>
<li><a href="#">Basketball</a></li>
<li><a href="#">Hockey</a></li>
<li><a href="#">Golf</a></li>
<li><a href="#">Cycling</a></li>

</ul>
</li>
</ul>
</li>
<li><a href="#">Contact Me</a></li>


<li class="nav item dropdown">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">More</a>
<ul>
<li><a href="#">Entertainment</a></li>
<li><a href="#">Weather</a></li>

</ul>
</li>

</ul>
<form style="width:30%;float:right;background-color:lightblue" action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input style="width:60%"type="text" class="form-control" name="q"
            placeholder="Search for something..."> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">GO!</span>
            </button>
        </span>
    </div>
</form>
</nav>
</div>
<div class="contain2">

<div class="contain3">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="uploads/images/slide1.png" style="width:100%">
  <div style="color:red;" class="text">caption 1</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="uploads/images/slide2.png" style="width:100%">
  <div style="color:red;" class="text">Caption 2</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="uploads/images/slide3.png" style="width:100%">
  <div style="color:red;" class="text">Caption 3</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="uploads/images/slide3.png" style="width:100%">
  <div style="color:red;" class="text">Caption 4</div>
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 

</div>

<script src="{{asset('js/slideshow.js')}}" type="text/javascript"></script>

</div>
</div>
<div class="body-middle">

		<div class="con">
<textarea disabled> politics</textarea>
		</div>
		<div class="con">
<textarea disabled> science and innovation</textarea>
		</div>
		<div class="con">
<textarea disabled> food and nutrition <
	<?php echo ''?>


</textarea>
		</div>
		<div class="con">
<textarea disabled>weather </textarea>
		</div>
		<div class="con">
<textarea disabled> sports</textarea>
		</div>
		<div class="con">
<textarea disabled>news</textarea>
		</div>
		<div class="con">
<textarea disabled onclick="book()">books </textarea>
		</div>
		<div class="con">
		<ul>
		<li><a href="">Home</a></li>
		<li>About</li>
		<li>Contact</li>
		</ul>
		</div>
	
    </div>
    </body>
    
</html>
