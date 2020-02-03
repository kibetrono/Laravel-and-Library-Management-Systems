<?php?>
<html>
<style>
.navv  li {
    display:inline-block;float: none;
}


.active {
  background-color: lightblue;
}


}
</style>
    <body style="background-color:lightblue">
    <a href="">HOME</a>
<form style="width:30%;float:right;background-color:lightblue" action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input  type="text" class="form-control" name="q"
            placeholder="Search for books" required> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
    </div>
</form>

@extends('layout')

@section('content')


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
<div class="navv" style="margin:0px;padding:0px;list-style:none;display:inline-block;">{{$allUsers->links()}}</div>
</body>
</html>
