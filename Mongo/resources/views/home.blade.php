@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                </div>

                @if(Auth::user()->_id=="5dc4469e01a49c4c245bc932")

                <a href="{{url('scienceadd')}}">Science</a>
                @else
            @endif
                
            </div>
        </div>
    </div>
</div>
@endsection
