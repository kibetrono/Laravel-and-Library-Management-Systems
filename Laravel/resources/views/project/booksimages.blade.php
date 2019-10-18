@extends('layout')
<style type="text/css">
.avatar{
border-radius:100px;
max-width:100px;
}
</style>
@section('content')
<div class="card-body">

<!-- print success message after file upload  -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif
     <div class="panel-body">
     <div class="col-md-6">
     
     </div>
<div class="col-md-6">
@foreach ($sciences as $science)
  
 <li> <img src="../picha/{{ $science->filename}}"> </li>

 
 @endforeach
</div>
    </div>
        </div>