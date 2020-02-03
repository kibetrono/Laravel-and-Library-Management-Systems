<html>
<body style="background:lightblue">
<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    
            @foreach($details as $user)
            <div class="row">
        <div class="col-md-6">
		<ul style="margin-top:30px" class="list_group">
			<img style='border-radius:20px;max-width:100px' src="{{ $user->filename}}" >
			<a  href="{{  $user->site_link }}">{{  $user->site_title }}</a><br>
            
            {{ substr($user->site_description,0,200)}} ...
          <br><cite style="float:left">{{date('M j, Y H:i', strtotime($user->updated_at))}} </cite>

		</ul>

        </div>

        </div>
            <!--<tr>
                <td><a href="{{$user->site_link}}"> {{$user->site_title}}</a></td>
               
            </tr>-->
            @endforeach
    
    @endif


</div>

</body>
</html>