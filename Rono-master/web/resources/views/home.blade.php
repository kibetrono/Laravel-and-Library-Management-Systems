@extends('layouts.app')
<style type="text/css">
#picha{
    border-radius:100%;
    max-width:150px;
}
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(count($errors)>0)
                       @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                       @endforeach
                   @endif
                   @if(session('response'))
                   <div class="alert alert-success">{{session('response')}}</div>
                   @endif
            <div class="card">
                <div class="card-header">
                <div class="row">
                <div class="col-md-4">Dashboard</div>
                <div class="col-md-8">
                <form method="POST" action='{{ url("/search") }}'>
                @csrf
                        <div class="form-group">
                                <input type="text" name="search" placeholder="Search....">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    GO
                                </button>
                                </span>
                            </div>
                </form>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-4">
                    @if(!empty($profile))
                    <img  src="{{$profile->profile_pic}}" id="picha" alt="">
                    @else
                    <img  src="{{url('/uploads/Flag_of_Kenya.svg')}}" id="picha" alt="">
                    @endif

                    @if(!empty($profile))
                    <p id="nammee">{{$profile->name}}</p>
                    @else
                    <p></p>
                    @endif

                    @if(!empty($profile))
                    <p id="desig">{{$profile->designation}}</p>
                    @else
                    <p></p>
                    @endif
                    
                    </div>
                    
                    
                    <div class="col-md-4">
                    @if(count($posts)>0)
                    @foreach($posts->all() as $post)
                    <h1>{{$post ->post_title}}</h1>
                    <img src="{{$post ->post_image}}" alt="">
                    <p>{{substr($post ->post_body,0, 100)}}</p>

                    <ul class="nav nav-pills">
                    <li role="presentation">
                    <a href='{{url("/view/{$post->id}")}}'><span class="fa fa-eye">View</span></a>
                    </li>
                    @if(Auth::id()==1)
                    <li role="presentation">
                    <a href='{{url("/edit/{$post->id}")}}'><span class="fa fa-eye">Edit</span></a>
                    </li>
                    <li role="presentation">
                    <a href='{{url("/delete/{$post->id}")}}'><span class="fa fa-eye">Delete</span></a>
                    </li>
                    </ul>
                    @endif
                    <cite style="float:left">Posted on:{{date('M, Y H:i',strtotime($post ->updated_at))}}</cite>
                    <hr>
                    @endforeach
                    @else
                    <h1>No Posts available!</h1>
                   

                    @endif
                    {{$posts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
