<?php
?>
<html>
<head>
<title>Dashboard</title>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
<style>
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
color:yellow;
padding-left:10px;
font-size:20px;

}
#visit2 li a{
    color:yellow;  
  }
</style>
<body style="height:auto">
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

</body>
</html>