@extends('layout')
@section('content')
    <div class="container mt-5">
    <form action="{{ url('historical') }}" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <div class="card-header bg-info text-white">
                        <div class="card-title ">
                            <h4> Inserting more sciences books... </h4>
                        </div>                       
                    </div>

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
                
                            <div class="form-group row" {{ $errors->has('site_title') ? 'has-error' : '' }}>
                                            <label for="site_title" class="col-md-4 col-form-label text-md-right">TITLE</label>
                                            <div class="col-md-6">
                                                <input id="site_title" type="text" class="form-control" name="site_title" >
                                         <span class="text-danger"> {{ $errors->first('site_title') }}</span>

                                            </div>
                                        </div>

                                        <div class="form-group row" {{ $errors->has('site_link') ? 'has-error' : '' }}>
                                            <label for="site_link" class="col-md-4 col-form-label text-md-right">LINK</label>
                                            <div class="col-md-6">
                                                <input id="site_link" type="text" class="form-control" name="site_link" >
                                         <span class="text-danger"> {{ $errors->first('site_link') }}</span>

                                            </div>
                                        </div>


                                        <div class="form-group row" {{ $errors->has('site_keywords') ? 'has-error' : '' }}>
                                            <label for="site_keywords" class="col-md-4 col-form-label text-md-right">KEYWORDS</label>
                                            <div class="col-md-6">
                                                <input id="site_keywords" type="text" class="form-control" name="site_keywords" >
                                         <span class="text-danger"> {{ $errors->first('site_keywords') }}</span>

                                            </div>
                                        </div>

                                        <div class="form-group row" {{ $errors->has('site_description') ? 'has-error' : '' }}>
                                            <label for="site_description" class="col-md-4 col-form-label text-md-right">DESCRIPTION</label>
                                            <div class="col-md-6">
                                                <input id="site_description" type="text" class="form-control" name="site_description" >
                                         <span class="text-danger"> {{ $errors->first('site_description') }}</span>

                                            </div>
                                        </div>

                                     <div class="form-group" {{ $errors->has('filename') ? 'has-error' : '' }}>
                                          <label for="filename"></label>
                                    <input type="file" name="filename" id="filename" class="form-control">
                                    <span class="text-danger"> {{ $errors->first('filename') }}</span>
                                </div>
                             </div>

                    <div class="card-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-md"> Upload </button>
                        </div>
                        {{ csrf_field() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection