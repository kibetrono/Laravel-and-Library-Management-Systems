<!DOCTYPE html PUBLIC "">
<html xmlns="" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="Com 423 Kibet Sang P101/1050G/14" />
    <meta name="copyright" content="Kibet" />
    
    <title>WEBGUIDE - Homepage</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   </head>
    <style type="text/css">

.style1 {
	color: #000066;
	font-weight: bold;
}
.style2 {
	font-size: medium;
	font-weight: bold;
}


* {min-height:1px;}
body {border:0; margin:0; padding:0; background:#F2F5FE url("../design/bg.gif") 0 0 repeat-x; font:70%/160% "verdana",sans-serif; color:#192666; _text-align:center;}

a {color:#192666;}
a:hover {color:#4F6AD7;}

p {border:0; margin:15px 0; padding:0; line-height:30px;}

div {display:block; border:0; margin:0; padding:0;}

h1, h2, h3, h4, h5 {border:0; margin:15px 0 10px 0; padding:0; font-weight:bold;}
h1 {font-size:260%; line-height:100%; font-family:"georgia",serif; font-weight:normal;}
h2 {font-size:180%; line-height:100%; font-family:"georgia",serif; font-weight:normal;}
h3 {font-size:120%; line-height:100%; font-weight:bold;}
h4 {font-size:120%;}
h5 {font-size:100%;}

table {display:table;  margin:15px 0; padding:0; border:1px solid #B7CAF6; font-size:100%;}
tr {display:table-row;}
th, td {display: table-cell; border:1px solid #B7CAF6; margin:0; padding:5px; vertical-align:top; text-align:left;}
th {background:#E7ECFD; text-align:center; color:#192666; font-weight:bold;}

ul, ol {display:block; border:0; margin:15px 0 15px 40px; padding:0;}
ol {list-style-type:decimal;}
li {display:list-item; border:0; margin:0; padding:0; _height:1px;}
ul ul, ul ol, ol ol, ol ul {margin: 0 0 0 20px;}

dl {border:0; margin:15px 0; padding:0;}
dt {border:0; margin:0; padding:0; font-weight:bold;}
dd {border:0; margin:0 0 0 30px; padding:0;}

form {border:0; margin:0; padding:0;}
fieldset {border:1px solid #ccc; margin:15px 0; padding:10px;}
legend {margin-left:10px; font-size:100%; font-weight:bold; color:#008;}

hr {display:block; height:1px; margin:10px 0; padding:0; background:#CCC; border:0 solid #CCC; color:#CCC;}

a, img, span {border:0; margin:0; padding:0;}
abbr, acronym {border-bottom:1px dotted #CCC; cursor:help;}

del, .through {text-decoration:line-through;}
strong, .strong {font-weight:bold;}
cite, em, q, var {font-style:italic;}
code, kbd, samp {font-family:monospace; font-size:110%;}

/* Floating */
.f-left {float:left;}
.f-right {float:right;}

/* Text align */
.t-left {text-align:left;}
.t-center {text-align:center;}
.t-right {text-align:right;}

.va-middle {vertical-align:middle;}

.clear {clear:both;}
.box {min-height:1px; _height:1px;}
.box:after {content:"."; display:block; line-height:0px; font-size:0px; visibility:hidden; clear:both;}

.nom {margin:0;}
.noscreen {display:none;}

/* -----------------...........--------------------------------------------------------------------------------------- */

#main {width:100%; margin:10px 0 auto; _text-align:left;}

/* Header */
#header {position:relative; width:100%; height:100px; margin:0; padding:0; background:#233C9B url("") 0 0 no-repeat; color:#FFF;}

    /* Header - logo */
    #header #logo {position:absolute; top:35px; left:35px; margin:0;}

    #header #logo a {color:#FFF;}
    #header #logo a:hover {color:#B5C4E3; text-decoration:underline;}
    
    /* Header - Search */
    #header #search {position:absolute; top:35px; right:20px;}
    #header #search form {position:relative;}
    #header #search #search-input-out {position:absolute; top:0; right:45px; width:155px; height:28px; margin:0; padding:0; border:0; background:url("../design/search_input.gif") 0 0 no-repeat; font:bold 90%/100% "verdana",sans-serif; color:#192666;}
    #header #search #search-input {width:140px; margin:5px 8px; padding:3px 0; border:0; background:#FFF; font:bold 100%/100% "verdana",sans-serif; color:#192666;}
    #header #search #search-submit {position:absolute; top:0; right:0px;}
    #header #search fieldset {margin:0; padding:0; border:0;}
    #header #search fieldset {width:200px;}
    #header #search legend {display:none;}

/* Main menu (tabs) */
#tabs {background:#192666; margin:0px; padding:10px 0 0 0; _height:1px;
}

    #tabs ul {margin:0 10px; padding:0; list-style:none;}
    #tabs ul li {margin:0 5px 0 0; padding:0; float:left;}
    #tabs ul li a {display:block; position:relative; padding:7px 15px; border:0; background:url("../design/tab_link.gif") 0 0 repeat-x; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;}
    
    /* Main menu (tabs - link) */
    #tabs ul li a span.tab-l, #tabs ul li a:hover span.tab-l {position:absolute; top:0; left:0; _left:-15px; width:8px; height:8px; background:url("../design/tab_link_l.gif") 0 0 no-repeat;}
    #tabs ul li a span.tab-r, #tabs ul li a:hover span.tab-r {position:absolute; top:0; right:0; _right:-1px; width:8px; height:8px; background:url("../design/tab_link_r.gif") 100% 0 no-repeat;}
    
    /* Main menu (tabs - hover) */
    #tabs ul li a:hover {background:url("../design/tab_hover.gif") 0 0 repeat-x; color:#FFF;}
    #tabs ul li a:hover span.tab-l {background:url("../design/tab_hover_l.gif") 0 0 no-repeat;}
    #tabs ul li a:hover span.tab-r {background:url("../design/tab_hover_r.gif") 100% 0 no-repeat;}
    
    /* Main menu (tabs - active) */
    #tabs ul li#active a {background:#FFF; color:#FF9000;}
    #tabs ul li#active a span.tab-l {position:absolute; top:0; left:0; _left:-15px; width:8px; height:8px; background:url("../design/tab_active_l.gif") 0 0 no-repeat;}
    #tabs ul li#active a span.tab-r {position:absolute; top:0; right:0; width:8px; height:8px; background:url("../design/tab_active_r.gif") 100% 0 no-repeat;}

/* Page (2 columns) */
#page {width:100%; min-height:1px; }
#page-in {min-height:1px; padding:10px 0; }

/* Strip */


/* Content */
#content {float:left;width:85%; margin:0; padding:0 0 0 20px;}

    /* Content - article */
    #content .article {clear:both; margin-right:0%; padding:20px; background:lightblue url("../design/content_article_bg.jpg") 0 0 no-repeat;}
    #content .article h2 {margin:0 -20px; padding:10px; background:#DEE5FD url("../design/content_title_bg.gif") 0 0 repeat-y; color:#192666;}
    #content .article h2 span {background:url("../design/ico_list.gif") 0 50% no-repeat; padding-left:25px;}
    
    #content .article p {text-align:justify;}
    #content .info {margin:10px 0; padding-bottom:8px; border-bottom:1px solid #DEE5FD; color:#6685CC;}
    #content .info a {color:#6685CC;}
    #content .info a:hover {color:#FF9000;}
    
    #content .info span.date, #content .info span.cat, #content .info span.user, #content .info span.comments {padding-left:15px;}
    #content .info span.date {background:url("../design/ico_date.gif") 0 50% no-repeat;}
    #content .info span.cat {background:url("../design/ico_cat.gif") 0 50% no-repeat; margin-left:8px;}
    #content .info span.user {background:url("../design/ico_user.gif") 0 50% no-repeat; margin-left:8px;}
    #content .info span.comments {background:url("../design/ico_comments.gif") 0 50% no-repeat; margin-left:8px;}

    /* Content - More */
    #content .btn-more {margin:0 0 15px 0; padding:0; border:0; position:relative;}
    #content .btn-more a {display:block; position:absolute; top:0; right:0; width:67px; _width:95px; height:21px; margin:0; padding:0 0 0 28px; background:url("../design/btn_more.gif") 0 0 no-repeat; color:#FFF; text-decoration:none;}
    #content .btn-more a:hover {background:url("../design/btn_more.gif") -95px 0 no-repeat;}

/* Right column */
#col {float:left; width:200px; margin:0; padding:0; background:#CEDBF9 url("../design/col_bg.gif") 0 0 repeat-y;}
#col-in {padding:20px 10px; background:url("../design/col_top.gif") 0 0 no-repeat;}
#col h3 {padding:13px 15px 14px 15px; margin:0 -10px 15px -10px; background:#A0B9F3 url("../design/col_title_bg.gif") 0 0 repeat-y; color:#192666;}

    /* Right column - About me */
    #col #about-me {margin-bottom:15px; line-height:130%;}
    #col #about-me p {margin:0;}
    #col #about-me #me {float:left; width:54px; height:58px; margin-right:7px;}

    /* Right column - Category */
    #col ul#category {margin:15px 0; padding:0; list-style:none;}
    #col ul#category li {margin:0; padding:0; border-bottom:1px solid #E0E8FA;}
    #col ul#category li a {display:block; padding:3px 0 3px 22px; background:url("../design/ico_archive.gif") 5px 6px no-repeat; text-decoration:none;}
    #col ul#category li a:hover {background-color:#D3DFF8; color:#192666;}
    #col ul#category li#category-active a {background:#E0E8FA url("../design/ico_archive2.gif") 5px 50% no-repeat; font-weight:bold;}
    
    /* Right column - Archive */
    #col ul#archive {margin:15px 0; padding:0; list-style:none;}
    #col ul#archive li {margin:0; padding:0; border-bottom:1px solid #E0E8FA;}
    #col ul#archive li a {display:block; padding:3px 0 3px 22px; background:url("../design/ico_archive.gif") 5px 50% no-repeat; text-decoration:none;}
    #col ul#archive li a:hover {background-color:#D3DFF8; color:#192666;}
    #col ul#archive li#archive-active a {background:#E0E8FA url("../design/ico_archive2.gif") 5px 6px no-repeat; font-weight:bold;}
    
    /* Right column - Links */
    #col ul#links {margin:15px 0; padding:0; list-style:none;}
    #col ul#links li {margin:0; padding:0; border-bottom:1px solid #E0E8FA;}
    #col ul#links li a {display:block; padding:3px 0 3px 22px; background:url("../design/ico_links.gif") 5px 6px no-repeat; text-decoration:none;}
    #col ul#links li a:hover {background-color:#D3DFF8; color:#192666;}


.login input[type="text"]
{
	background-color:#FFFFCC;
	height:22px;
	width:160px;
	border:1px solid black;
	font-size:12px;
	font-weight:bold;
	border-radius:5px 0px 5px 0px;
	color:#003366;
}
.login input[type="text"]:hover
{
	background-color:#003366;
	height:22px;
	width:160px;
	border:1px solid black;
	font-size:12px;
	font-weight:bold;
	border-radius:5px 0px 5px 0px;
	color:#FFFFFF;
}
.login input[type="password"]
{
	background-color:#FFFFCC;
	height:22px;
	width:160px;
	border:1px solid black;
	font-size:12px;
	font-weight:bold;
	border-radius:5px 0px 5px 0px;
}
.login input[type="password"]:hover
{
	background-color:#003366;
	height:22px;
	width:160px;
	border:1px solid black;
	font-size:12px;
	font-weight:bold;
	border-radius:5px 0px 5px 0px;
	color:#FFFFFF;
}
.login input[type="submit"]
{
	background-color:#FFFFCC;
	height:22px;
	width:100px;
	border:1px solid #003366;
	font-size:12px;
	font-weight:bold;
	border-radius:5px 0px 5px 0px;
	color:#003366;
}
.login input[type="submit"]:hover
{
	background-color:#003366;
	height:22px;
	width:100px;
	border:1px solid #003366;
	font-size:12px;
	font-weight:bold;
	border-radius:5px 0px 5px 0px;
	color:#FFFFFF;
}


.column {
  float: left;
  width: 33%;
  background:green;
  color:white;
 padding-left:60px;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  
}

#visit2 li{
  
display:inline;

padding-left:10px;
font-size:20px;

}
#visit2 li a{
    color:yellow;  
  }
    </style>
<body>

<!-- Main -->
<div style="" id="main" class="box">
      <!-- Header -->
      <div style="border-top-left-radius: 20px;border-top-right-radius: 20px " id="header">
<!-- Logotyp -->
<h1 id="logo"><a href="" title=""><img style="margin:-35% 0% 0% -35%;border-radius:100px;max-width:100px;" src="/imgsrc/webguide.jpg">
<span></span></a></h1> 
<h1 align="center" style="padding-top:2%;color: #fff;text-shadow: 0px 0px 4px #000">WEB GUIDE SYSTEM</h1>
<!--<div style="margin-top:-4%;float:right" id="tabs" class="noprint">
<ul class="box">
    <li><a href="{{url('/')}}"><i class="fas fa-home"></i>Home<span class="tab-l"></a></li>
    <li><a href="{{url('/')}}"><i class="fas fa-home"></i>Home<span class="tab-l"></a></li>
    </ul>
    </div>-->
<hr class="noscreen"/>          

<!-- Quick links -->
<div class="noscreen noprint">
    <p><em>Quick links: <a href="#content">content</a>, <a href="#tabs">navigation</a>, <a href="#search">search</a>.</em></p>
    <hr />
</div>

<!-- Search -->


</div> <!-- /header -->
<!-- Main menu (tabs) -->
<div id="tabs" class="noprint">

<h3 class="noscreen">Navigation</h3>
<ul class="box">
    <li><a href="{{url('/')}}"><i class="fas fa-home"></i>Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
    <li><a href="{{url('main')}}"><i class="fas fa-newspaper"></i>News<span class="tab-l"></span><span class="tab-r"></span></a></li>
     <li><a href="{{url('library')}}"><i class="fas fa-book-reader"></i>Library<span class="tab-l"></span><span class="tab-r"></span></a></li>
      <li><a href="{{url('sports')}}"><i class="far fa-whistle"></i>Sports<span class="tab-l"></span><span class="tab-r"></span></a></li>
      <li><a href="{{url('')}}"><i class="fas fa-information"></i>About<span class="tab-l"></span><span class="tab-r"></span></a></li>
      <li><a href="{{url('')}}"><i class="fas fa-question-circle"></i>Help<span class="tab-l"></span><span class="tab-r"></span></a></li>
    <li><a href="{{url('')}}">More <i class="fa fa-caret-down"></i><span class="tab-l"></span><span class="tab-r"></span></a></li>
    <li style="float:right;margin-top:-5px;">
    <form style="" action="/search" method="POST" role="search">
    {{ csrf_field() }}
        <input  style="border-radius:20px" name="q" placeholder="Search for something..."> 
            <button style="color:white" type="submit" class="btn btn-default">
               GO!
            </button>
  
</form>
    <span class="tab-l"></span><span class="tab-r"></span></li>

</ul>

<hr class="noscreen" />
</div> <!-- /tabs -->
<!-- Page (2 columns) -->
    <div style="background:lightblue;width:100%" id="page" class="box">
    <div id="page-in" class="box">
        <!-- Content -->
        <div id="content">

     

            <!-- Article -->
            <div class="article">
                  <h2>WebGuide System Information</h2>
                <!-- <h2><span><a href="#">Message From TSC KE </a></span></h2> -->
               

                <!-- <p> <span class="style2"></span><h1>E-RECRUITMENT SYSTEM</h1></p> -->
				
              <!-- <p align="right"> <img src="design/Daemon-Haunted.png" alt="" width="431" height="117" /></p> -->
              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            <div>
            
            <p>Web Guide system offers an effective interface to its users to effectively and quicky get their query responses in a simple and quicker and cheaper way.Data Flow Diagram is a graphical representation of the "flow" of data through an information system, modelling its process aspects. A DFD is often used as a preliminary step to create an overview of the system, which can later be elaborated. DFDs can also be used for the visualization of data processing. 
A DFD shows what kind of information will be input to and output from the system, where the data will come from and go to, and where the data will be stored. It does not show information about the timing of process or information about whether processes will operate in sequence or in parallel (which is shown on flowchart).
Level 0 DFD.</p>
            </div>
            
            
        </div> <!-- /content -->

        <!-- Right column -->
 
<div id="col" class="noprint">
            <div id="col-in">

                

                <hr class="noscreen" />

                <!-- Category -->
                <h3 ><i class="fa fa-user"></i>Admin Login</h3>
            <div class="login">
            <form method="POST" action="{{ route('login') }}">
                        @csrf
                  <table width="100%" border="0">
                    <tr>
                      <td><label for="email" class="col-md-8 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                      <input style="width:175px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                      </td>  
                    </tr>
                  
                    <tr>
                      <td><label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                      <input style="width:175px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror 
</td>
                    </tr>
                    
                  
                    <tr>
                      <td>
                      <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
         <label class="form-check-label" for="remember"> {{ __('Remember Me') }}</label>
                </td>  
                    </tr>
             
                    <tr>
                      <td><label>
                        <div >
                        <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>   
                                <div > @if (Route::has('password.request'))
                                    <a  style="color:blue" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                                </div>
                      </label>
                      </td>
                    </tr>
                    
                  </table>
      </form>
              </div>
                

          </div> <!-- /col-in -->
</div> <!-- /col -->
 


    </div> <!-- /page-in -->
    </div> <!-- /page -->
    <div class="row">
  <div style="padding-left:20px"class="column">
  <h4>About us</h4>
  <ul id="visit">
  <li><i class="fas fa-address-card"></i>Address:</li>
  <h6>+xx (0) xx-xxxx-xx</h6>
  <li>Have any questions?</li>
  <h6>kibetdavidro@gmail.com</h6>
  <h6><i class="fa fa-phone-plus"></i>+254 728234794</h6>

  
</ul>
  <!-- icons

  -->
  <p style="">&copy; 2019 Kibet</p>

  </div>
  <div class="column">
  <h4>QUICK LINKS</h4>
  <ul>
  <li ><a href="#">Home</a></li>
  <li><a href="#">Contact</a></li>
  <li><a href="#">Resources</a></li>
  <li><a href="#">Latest updates</a></li>
<li><a href=""><i class="fas fa-search-location"></i>Location</a></li>
  <li><a href="#">Terms and conditions</a></li>

  </ul>
  <p>Designed by: Kibet David</p>


</div>
  <div class="column">
  <h4>Contact Us</h4>
<form type="text" action="#">
<input type="text" name="email" placeholder="Your email address">
<textarea style="resize:none;width:270px;height:70px;" placeholder="Message---"></textarea>
<button style="margin:0% 0% 0% 56%;" type="button">Send</button>
</form>
<ul id="visit2">
  <li><a href=""><i class="fab fa-facebook"></i></a></li>
  <li><a href=""><i class="fab fa-google-plus-square"></i></a></li>
  <li><a href=""><i class="fab fa-twitter-square"></i></a></li>
  <li><a href=""><i class="fab fa-youtube"></i></a></li>
  <li><a href=""><i class="fab fa-instagram"></i></a></li>

</ul>
  </div>

</div> 
</div> <!-- /main -->
 <!-- Footer -->
 
 <!-- /footer -->
</body>
</html>
