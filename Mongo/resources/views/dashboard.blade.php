<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

*{
margin:0px;
padding:0px;
font-family:sans-serif;
}
#sidebar{
position:fixed;
width:200px;
height:100%;
background:#151719;
left:-200px;
transition:all 500ms linear;

}
#sidebar.active{
    left:-70px;
}
.toggle-btn{
position:absolute;
left:210px;
top:20px;

}
.toggle-btn span{
    display:block;
    width:30px;
    height:5px;
    background:#151719;
margin:3px 0px;

}
#sidebar ul li{
    color:rgba(230,230,230,0.9);
    list-style:none;
    padding:15px 10px;
    border-bottom:1px solid rgba(100,100,100,0.3);

}
#sidebar ul li a{
    display:block;
    line-height:45px;
    padding:0px 10px 0px 70px;
    box-sizing:border-box;
    width:-10px;
    height:100%;
    
    border-top:1px solid rgba(250,250,250,0.1);
    border-bottom:1px solid black;
    color:#ffffff;
    transition:0.4s;
}
.con{
			float:left;height:200px;width:250px;padding:5px;margin:5px 10px 10px 5px;background:Purple;

		}
		textarea{
			resize:none;height:190px;width:240px;font-style: italic;font-family: rockwell;color: #ff9999;text-shadow: #000000;
		}
        </style>
    </head>
    <body>
       
        <div class="">

            <div class="content">
         
            <img style="border-radius:100px;max-width:100px;text-align:center;background-color:black;" src="/imgsrc/webguide.jpg">
            <!--<span class="navbar-text"><img style="border-radius:100px;max-width:100px;text-align:center" src="/imgsrc/webguide.jpg">-->


            <div class="contain">
            <div id="sidebar">
<div class="toggle-btn" onclick="toggleSidebar()">
<span></span>
<span></span>
<span></span>
</div>
<ul>
<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
<li>About</li>
<li>Contact</li>
</ul>
</div>
<script src="{{asset('js/dashboard.js')}}" type="text/javascript"></script>

<nav>
<ul class="nav">
<!--<li><img style="border-radius:100px;max-width:40px;text-align:left" src="/imgsrc/webguide.jpg"></li>-->


<!-- child menu -->

<li><a href="#">Home</a></li>
<li><a href="#">Contact Me</a></li>
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


<li class="nav item dropdown">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">More</a>
<ul>
<li><a href="#">Entertainment</a></li>
<li><a href="#">Weather</a></li>

</ul>
</li>

</ul>
<form style="width:30%;float:right;background-color:lightblue" action="/search" method="POST" role="search">
  
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
<div style="width:100%;background:red;margin-left:130px" class="bodyRight">
<p>System analysis is a technique that describes various ways of understanding the problem or system in general and then breaking down into various components. These components helps in understanding how well system works and also finding the best or optimal solution to a specific problem using relevant variables and analysis tools.
This chapter presents various functions and operations performed by the system as well as various interactions both within and outside the system. </p>
</div>
<div style="margin-left:130px" id="Divs">
<div  class="con">
<textarea disabled> sports</textarea>
		</div>
        <div  class="con">
<textarea disabled> sports</textarea>
		</div>
        </div>
    </body>
    
</html>
