<?php?>
<html>
<head>
<title></title>
<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<style>
body{
    margin:0px;
    padding:0px;
}
.columns{
    min-height:1px;
}
#main-header{
    z-index:999;
    background:#555;
    height:auto;
    top:0;
    position:fixed;
    width:100%;
    border-bottom:1px solid #000;
    box-shadow:0 1px  3px rgba(0,0,0,0.5);
   
}
#content{
    margin-top:70px;
    display:block;
    position:relative;

}
.smenu-title{
  border-bottom:1px solid #ddd;
  color:#aaa;  
  font-size:13px;
  padding:10px 3px;

}
.contents{
    padding:4px 10px 10px 10px;
    min-height:650px;
}
.content-header{
    font-size:20px;
    color:#666;
    text-align:center;
    background:grey;
    margin-left:200px;
}
.content-text{
    margin-left:200px;
margin-top:20px;
color:#999;
text-shadow:0 1px 1px #fff;

}
.smenu-links{
    list-style:none;
    font-size:16px;
    margin-top:10px;
    -webkit-font-smoothing:antialiased;
    -moz-osx-font-smoothing:grayscale;
}
a{
    text-decoration:none;
}
a:hover{
    text-decoration:underline;
}
.side-content{
    position:fixed;

}
.side-content-scroll{
    position:absolute;
    top:auto !important;
    bottom:0;

}

.sidenav{
    position:static;
}
footer{
margin-top:auto;
height:245px;
background-color:#ddd;
padding:30px;
}
.smenu-links li{
    color:rgba(230,230,230,0.9);
    list-style:none;
    padding:10px 10px;
    border-bottom:1px solid cyan;

}
.nav{
    display:block;
    text-align:center;
    margin-left:100px;
}
nav ul{
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
    font-size:90%;
    letter-spacing:1px;
    text-shadow:0 -1px 0 #000;
    position:relative;
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

.nav li:hover > a{
    color:red;
}
.nav li li a{
    margin-top:1px;
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

</style>
<body>
<header id="main-header">
<nav>
<ul class="nav">
<li><a href="#"><i class="fas fa-home"></i>Home</a></li>
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

<li><a href="#">Contact Me</a></li>


</ul>
</nav>

</header>
<div id="content">
<div class="container row">
<aside class="three columns sidenav">
<div class="side-content">
<div class="smenu-title">Web Guide</div>
<ul class="smenu-links">
<li><a href=""><i class="fas fa-home"></i>Home</a></li>
<li><a href="about.php"><i class=""></i>About</a></li>
<li><a href=""><i class="fa fa-car"></i>Contact</a></li>
<li><a href=""><i class=""></i>More</a></li>

</ul>
</div>
</aside>
<div class="eight columns contents">
<div class="content-header">
<img style="border-radius:100px;max-width:100px;text-align:center;background-color:black;" src="/imgsrc/webguide.jpg">

<p>Karatina University</p>
<p>Web guide is a web based system that helps in guidance of clients to search and retrieve data and information from the internet</p>
</div>
<div class="content-text">
System analysis is a technique that describes various ways of understanding the problem or system in general and then breaking down into various components. These components helps in understanding how well system works and also finding the best or optimal solution to a specific problem using relevant variables and analysis tools.
This chapter presents various functions and operations performed by the system as well as various interactions both within and outside the system. 

</div>
</div>
</div>
</div>
<footer id="page-footer">
Copy right @2018
<br>
<br>
Some other links of the day

</footer>
<script>
$function(){
    var $window = $(window);
    var $body = $('body');
    var $windowHeight = $window.height();
    var $sideContent = $('.side-content');
    $window.scroll(function(){
        if($(window).scrollTop() + $('.side-content').height()>=$('.contents').height() + 20){
$('.side-content').addClass('scroll');
        }else{
            $('.side-content').removeClass('scroll');

        }
    });
});
</script>
</body>
</html>