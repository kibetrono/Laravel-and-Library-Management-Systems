@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                <div class="card-header">Post View</div>

                <div class="card-body">
                   

                    <div class="col-md-4">
                    
                    <ul class="list-group">
                    @if(count($categories)>0)
                        @foreach($categories->all() as $category)
                        <li class="list-group-item"><a href='{{url("category/$category->id")}}'>{{$category->category}}</a></li>
                        @endforeach

                    @else  
                    <p>No Categories</p>
                    @endif
                    
                    </ul>
                    </div>
                    
                    
                    <div class="col-md-4">
                    @if(count($posts)>0)
                    @foreach($posts->all() as $post)
                    <h1><a href="www.google.com ">{{$post ->post_title}}</a></h1>
                    <img src="{{$post ->post_image}}" alt="">
                    <p>{{$post ->post_body}}</p>

                    <ul class="nav nav-pills">
                    <li role="presentation">
                    <a href='{{url("/like/{$post->id}")}}'><span class="fa fa-thumbs-up">Like({{$likeCtr}})</span></a>
                    </li>
                    <li role="presentation">
                    <a href='{{url("/dislike/{$post->id}")}}'><span class="fa fa-thumbs-down">Dislike({{$dislikeCtr}})</span></a>
                    </li>
                    <li role="presentation">
                    <a href='{{url("/comment/{$post->id}")}}'><span class="fa fa-comment-0">Comment</span></a>
                    </li>
                    </ul>
                    
                    @endforeach
                    @else
                    <h4>No Posts available!</h4>
            
                    @endif
                    <form method="POST" action='{{ url("/comment/{$post->id}") }}'' >
                        @csrf
                        <div class="form-group">
                                <textarea id="comment" rows="4" class="form-control" name="comment"  required autofocus></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">
                                    Post Comment
                                </button>
                            </div>
                        </form>
                        <h1>Comments</h1>
                        @if(count($comments)>0)
                        @foreach($comments->all() as $comment)
                          <p>{{$comment->comment}}</p>
                          <p>Posted by: {{$comment->name}}</p>
                          <hr>
                        @endforeach
                    @else
                    <h4>No Posts available!</h4>
            
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
