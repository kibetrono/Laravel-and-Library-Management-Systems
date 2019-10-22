

<form style="width:50%;float:right;background-color:lightblue" action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input  type="text" class="form-control" name="q"
            placeholder="Search for books"> <span class="input-group-btn">
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
		<ul class="list_group">
			<img style='border-radius:20px;max-width:100px' src="{{ $usr->filename}}" >
			<a href="{{  $usr->site_link }}">{{  $usr->site_link }}</a>
		</ul>
        </div>
        </div>

	@endforeach

