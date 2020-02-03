<html>
<head>
<title>WEBGUIDE - News</title>
<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<style>
body {border:0; margin:0; padding:0; background:#F2F5FE url("../design/bg.gif") 0 0 repeat-x; font:70%/160% "verdana",sans-serif; color:#192666; _text-align:center;}

h1, h2, h3, h4, h5 {border:0; margin:15px 0 10px 0; padding:0; font-weight:bold;}
h1 {font-size:260%; line-height:100%; font-family:"georgia",serif; font-weight:normal;}
h2 {font-size:180%; line-height:100%; font-family:"georgia",serif; font-weight:normal;}
h3 {font-size:120%; line-height:100%; font-weight:bold;}
h4 {font-size:120%;}
h5 {font-size:100%;}
form {border:0; margin:0; padding:0;}
fieldset {border:1px solid #ccc; margin:15px 0; padding:10px;}
legend {margin-left:10px; font-size:100%; font-weight:bold; color:#008;}

.clear {clear:both;}
.box:after {content:"."; display:block; line-height:0px; font-size:0px; visibility:hidden; clear:both;}
.noscreen {display:none;}
#main {width:100%; margin:2px 0 auto; _text-align:left;}
/* Header */
#header {position:relative; width:100%; height:100px; margin-top:-15px; padding:0; background:#233C9B url("") 0 0 no-repeat; color:#FFF;}
/* Main menu (tabs) */
#tabs {
    background:#192666; margin:0px; padding:10px 0 0 0; _height:1px;
    border-top-left-radius: 20px;border-top-right-radius: 20px
    }
    #tabs ul {margin:0 10px; padding:0; list-style:none;}
    #tabs ul li {margin:0 5px 0 0; padding:0; float:left;}
    #tabs ul li a {display:block; position:relative; padding:7px 15px; border:0; background:url("../design/tab_link.gif") 0 0 repeat-x; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;}
   
    .tabs {
    background:#192666; margin:0px; padding:10px 0 0 0; _height:1px;
    }
    #tabs ul {margin:0 10px; padding:0; list-style:none;}
    #tabs ul li {margin:0 5px 0 0; padding:0; float:left;}
    #tabs ul li a {display:block; position:relative; padding:7px 15px; border:0; background:url("../design/tab_link.gif") 0 0 repeat-x; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;}
   
    body{
        background:cyan;
    }
</style>
<body>
<!-- Main -->
<div style="" id="main" class="box">

<!-- Main menu (tabs) -->
<div id="tabs" class="noprint">

<h3 class="noscreen">Navigation</h3>
<ul class="box">
    <li><a href="{{url('/')}}"><i class="fas fa-home"></i>Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
    <li><a href="{{url('main')}}"><i class="fas fa-newspaper"></i>News<span class="tab-l"></span><span class="tab-r"></span></a></li>
     <li><a href="{{url('library')}}"><i class="fas fa-book-reader"></i>Library<span class="tab-l"></span><span class="tab-r"></span></a></li>
      <li><a href="News.php">Sports<span class="tab-l"></span><span class="tab-r"></span></a></li>
    <li><a href="ContactUs.php">More<span class="tab-l"></span><span class="tab-r"></span></a></li>
    <li style="float:right;margin-top:-5px;">
    <form style="background-color:black;" action="/search" method="POST" role="search">
   <input   name="q" placeholder="Search for something..."> 
            <button style="color:white" type="submit" class="btn btn-default">
               GO!
            </button>
</form>
    <span class="tab-l"></span><span class="tab-r"></span></li>

</ul>
<hr class="noscreen" />
</div> <!-- /tabs -->
<!-- Page (2 columns) -->

<!---Start ???????????---->
      <!-- Header -->
      <div style=" " id="header">
<!-- Logotyp -->
<!-- <h1 id="logo"><a href="" title=""><strong>JOB PORTAL</strong><span></span></a></h1> -->
<h1  style="padding-top:2%;color: #fff;text-shadow: 0px 0px 4px #000">WEB GUIDE NEWS</h1>
<ul style="margin:0 10px; padding:0; list-style:none;">
<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href="{{url('main')}}"><i class="fas fa-home"></i>Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href=""><i class="fas fa-home"></i>Local<span class="tab-l"></span><span class="tab-r"></span></a></li>
<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href=""><i class="fas fa-home"></i>International<span class="tab-l"></span><span class="tab-r"></span></a></li>
<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href=""><i class="fas fa-home"></i>Bussiness<span class="tab-l"></span><span class="tab-r"></span></a></li>

</ul>
</div>
<hr class="noscreen" />          

<!-- Quick links -->
<div class="noscreen noprint">
    <p><em>Quick links: <a href="#content">content</a>, <a href="#tabs">navigation</a>, <a href="#search">search</a>.</em></p>
    <hr />
</div>
<!-- Search -->
</div> <!-- /header -->
<!---End ???????????---->

<p>In the current technology and world, the internet is flooded with millions of data and information hence  improved techniques and systems has to be build in order to retrieve the correct information using minimum resources. Data and information retrieval in the current systems is time consuming and also involves a lot in term of resources required hence becomes expensive to many of the clients. Clients may fail  to meet the goals by using these systems since they are provided with numerous options to choose from hence can be a tiresome procedure to them.
The retrieval process becomes also a challenge to the illiterate individuals since in order to choose the correct and required option, one has to be at least knowledgeable enough to select from the provided options. The web guide system is  very convenient in improving the existing system which have got more challenges in their tasks of handing back their responses to the clients.
The task of ensuring that users get satisfied with all their request using minimal and short procedure is a major goal and objective of these systems and it should always be rendered to the clients by designing them a quick and a user friendly systems.
The conventional approach of retrieving data and information using existing systems is at some point a tiresome process hence there is a call for convenient systems that isn’t time consuming and also be efficient to ensure clients spend a little to receive whatever they request.
Current systems have become unreliable for they do not render what the users expect as well as minimizing the scope of its users since it becomes a challenge for most individuals who failed or were unlucky to receive knowledge from schools. Systems have to be developed which solves or otherwise minimize these challenges and problems.</p>
</body>
</html>