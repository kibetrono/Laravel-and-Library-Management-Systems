<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>search</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
  <div class="card-body">
  @if(Session::has('fails'))
                                <div class="alert alert-warning">
                                    {{ Session::get('fails') }}
                                    @php
                                        Session::forget('fails');
                                    @endphp
                                </div>
                            @endif 
                             </div>
  </body>
  </html>