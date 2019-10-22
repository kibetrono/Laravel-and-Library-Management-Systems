<?php
?>
<html>
<title></title>
<head>
@extends('layout')
<style >
</style>
@section('content')
</head>
<body>

 <h1>The images of sciences</h1>
 
 @foreach ($sciences as $science)



  <ul class="list_group">
  <li class="list-group-item"><img style='border-radius:20px;max-width:100px' src="{{ $science->filename}}" > @foreach ($sciences as $science)
  
  <a href="{{$science->site_link}}">{{$science->site_title}}</a>
  
  
 
  
  @endforeach
  
   </li>
</ul>
 
 @endforeach


 <h1>The description of sciences</h1>
 @foreach ($sciences as $science)
  
 {{ substr($science->site_description,0,100)}}
 
 <cite style="float:left">{{date('M j, Y H:i', strtotime($science->updated_at))}} </cite>

 
 @endforeach
 
{{$sciences->links()}}

</body>
</html>
