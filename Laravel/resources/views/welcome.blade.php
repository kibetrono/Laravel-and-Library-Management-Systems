<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Keywords</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->site_title}}</td>
                <td>{{$user->site_link}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

             
    
</div>