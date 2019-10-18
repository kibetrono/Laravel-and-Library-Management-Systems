<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>
<meta name="" content="">
<link type="text/css" rel="stylesheet" href="styling.css"/>
<link type="text/javascript" href="js/dropdown.js"/>
<script src="js/jquery.js"></script>
<link type="text/css"rel="stylesheet"href="css/bootstrap.min.css"/>
<link  type="text/css" rel="stylesheet" href="/css/font-awesome.min.css"/>
<link type="text/javascript" href="js/bootstrap.js"/>
</head>
<body>


<div class="jumbotron" style="background-color:green;">
    <h2 style="text-align: center;margin:-25px;color:white;font-family:lucida bright; ">modern farm</h2> 
  </div>

<div class="container-fluid">

<style>
	.dropdown:hover>.dropdown-menu{
		display: block;
	}
</style>

<nav class="navbar navbar-inverse">
  
   <div class="navbar-header">
    
    <button type="button"class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
    	<span class="icon-bar"></span>
    	<span class="icon-bar"></span>
    	<span class="icon-bar"></span>
    </button>
  <a class="navbar-brand" href="#"style="font-family:lucida bright">farm tips</a>
    </div>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="nav navbar-nav nav-tabs">
        <li class=""><a href="farming.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">products
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="maize.php">maize</a></li>
            <li><a href="cabbages.php">cabbages</a></li>
            <li><a href="tomatoes.php">Tomatoes</a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Farm inputs
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="fertilizer.php">fertilizer</a></li>
            <li><a href="chemicals.php">chemicals</a></li>
            <li><a href="seeds.php">seeds</a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">services
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="training.php">training</a></li>
            <li><a href="extension.php">extension</a></li>
            <li><a href="consultation.php">consultation</a></li> 
          </ul>
        </li>
        <form class="navbar-form pull-right">
			<div class="form-group">
				<input type="text"class="form-control"/>
				<button type="button"class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
			</div>
		</form>
		<ul class="nav navbar-nav navbar-right" style="padding-right: 20px; padding-top: 15px; padding-bottom: 10px;">
			<a href="login.php"><strong>Logout</strong></a>
		</ul>
        
      </ul>
    </div>
  
</nav>



<div class="row">
		<div class="col-sm-4" style="background-color: black;border-radius: 10px;"id="sidebar">
			<h3 style="text-align: center;background-color: white;padding: 10px;">Agribusiness</h3>
			<ul class="list-unstyled"style="font-size: 20px;">
				<li><a href="#">maize</a><hr/>
				<ul style="list-style-type: none;font-size: 16px;">
					<li><a href="#">land preparation</a></li>
					<li><a href="#">planting</a></li>
					<li><a href="#">weed control</a></li>
					<li><a href="#">harvesting</a></li>
				</ul>
				
				</li>
				<li><a href="#"class="list-unstyled"style="font-size: 20px;">Tomatoes</a><hr/>
				    <ul style="list-style-type: none;font-size: 16px;">
					<li><a href="#">nursery establishment</a></li>
					<li><a href="#">transplantig</a></li>
					<li><a href="#">management</a></li>
					
				</ul>
				</li>
				<li><a href="#"class="list-unstyled"style="font-size: 20px;">cabbages</a><hr/>
				    <ul style="list-style-type: none;font-size: 16px;">
					<li><a href="#">nursery preparation</a></li>
					<li><a href="#">planting</a></li>
					<li><a href="#">Treatment</a></li>
					<li><a href="#">harvesting</a></li>
				</ul>
				</li>
				<li><a href="#">marketing</a></li>
			</ul>
				
				</div>

		

	<div class="col-sm-8">
		
		
		<div class="carousel slide"id="carousel">
				<ul class="carousel-indicators">
					<li data-slide-to="0"data-target="#carousel"class="active"></li>
					<li data-slide-to="1"data-target="#carousel"></li>
					<li data-slide-to="2"data-target="#carousel"></li>
					<li data-slide-to="3"data-target="#carousel"></li>
					<li data-slide-to="4"data-target="#carousel"></li>
					<li data-slide-to="5"data-target="#carousel"></li>
				</ul>
				<div class="carousel-inner">
					<div class="item active">
						<img src="img/burger.jpg" width="100%" height="100%"/>
					</div>
					<div class="item">
						<img src="img/fruits.jpg" width="100%" height="100%"/>
					</div>
					<div class="item">
						<img src="img/snacks2.jpg" width="100%"/>
					</div>
					<div class="item">
						<img src="img/chipo.jpg"/>
					</div>
					<div class="item">
						<img src="img/snacks4.jpg" width="100%" height="100%"/>
					</div>
					<div class="item">
						<img src="img/steve.jpg" width="100%" height="100%"/>
					</div>
				</div>
				<a href="#carousel"data-slide="next"class="right carousel-control"><span class="icon-next"></span></a>
				<a href="#carousel"data-slide="prev"class="left carousel-control"><span class="icon-prev"></span></a>
			</div>
		
	</div>
</div>

</div>





<script type="text/javascript" src="js/dropdown-sub-menu.min.js"></script>
<script src="js/dropdown.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
<script>
	$(document).ready(function() {
		$("#carousel").carousel({interval:4000});
	});
</script>
<script>
	var main=function(){
		$('.dropdown-toggle').click(Function(){
			$('.dropdown-menu').toggle();
		});
	}
	$(document).ready(main);
</script>
<footer class="footer">
	<div class="row">
		<div class="col-sm-4">
			<a href="#" class="well well-sm" data-toggle="tooltip" title="email us">contact us</a>
		</div>
		<div class="col-sm-4">
&copy;2017.All Rights Reserved.
		</div>
		
		<div class="col-sm-4">
			<a href="comment/index.php" class="well well-sm" data-toggle="tooltip" title="write your comment">write/view comments</a>
		</div>
		
	</div>
</footer>

</body>
</html>