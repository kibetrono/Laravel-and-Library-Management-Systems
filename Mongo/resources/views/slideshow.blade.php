<?php?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{asset('css/slideshow.css')}}" type="text/css" rel="stylesheet">
</head>
<body>
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
</body>
</html> 
