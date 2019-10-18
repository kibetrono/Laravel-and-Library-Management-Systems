@extends('layout')


@section('content')

 <h1>The images of sciences</h1>
 
 @foreach ($sciences as $science)
  
 <img class="avatar" src="{{ $science->filename}}"> 

 
 @endforeach
 

