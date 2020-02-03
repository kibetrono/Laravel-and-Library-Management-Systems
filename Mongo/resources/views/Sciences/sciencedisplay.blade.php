<?php?>
<html>
<head>
<title>Sciences</title>
<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>

<style>
.navv  li {
    display:inline-block;float: none;
}


.active {
  background-color: lightblue;
}
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
#header {position:relative; width:100%; height:100px; margin-top:-5px; padding:0; background:#233C9B url("") 0 0 no-repeat; color:#FFF;}
/* Main menu (tabs) */
#tabs {
    background:#192666; margin:0px; padding:10px 0 0 0; _height:1px;
    border-top-left-radius: 20px;border-top-right-radius: 20px
    }
    #tabs ul {margin:0 10px; padding:0; list-style:none;}
    #tabs ul li {margin:0 5px 0 0; padding:0; float:left;}
    #tabs ul li a {display:block; position:relative; padding:7px 15px; border:0; background:url("../design/tab_link.gif") 0 0 repeat-x; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;}
  
</style>
    <body style="background-color:lightblue">
   <!-- Main -->
<div style="" id="main" class="box">

<!-- Main menu (tabs) -->
<div id="tabs" class="noprint">

<h3 class="noscreen">Navigation</h3>
<ul class="box">
    <li><a href="{{url('/')}}"><i class="fas fa-home"></i>Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
    <li><a href="{{url('main')}}"><i class="fas fa-newspaper"></i>News<span class="tab-l"></span><span class="tab-r"></span></a></li>
     <li><a href="{{url('library')}}"><i class="fas fa-book-reader"></i>Library<span class="tab-l"></span><span class="tab-r"></span></a></li>
      <li><a href="{{url('')}}">Sports<span class="tab-l"></span><span class="tab-r"></span></a></li>
    <li><a href="{{url('')}}">More<span class="tab-l"></span><span class="tab-r"></span></a></li>
    <li style="float:right;margin-top:-5px;">
    
<form style="background-color:black;" action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input  style="border-radius:20px;"type="text" class="form-control" name="q"
            placeholder="Search for books" required> <span class="input-group-btn">
            <button style="color:white;" type="submit" class="btn btn-default">
               Search
            </button>
        </span>
    </div>
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
<h1  style="margin-top:5px;padding-top:2%;color:#fff;text-shadow: 0px 0px 4px #000;text-align:center">WEB GUIDE SCIENCE BOOKS</h1>

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




	@foreach($allUsers as $usr)

<div class="row">
<div class="col-md-6">
		<ul style="margin-top:30px" class="list_group">
			<img style='border-radius:20px;max-width:100px' src="{{ $usr->filename}}" >
			<a  href="{{  $usr->site_link }}">{{  $usr->site_title }}</a><br>
            
            {{ substr($usr->site_description,0,200)}} ...
          <br><cite style="float:left">{{date('M j, Y H:i', strtotime($usr->updated_at))}} </cite>

		</ul>

        </div>

        </div>

	@endforeach
{{$allUsers->links()}}
</body>
</html>
