<h4>Meklēt lietotāju</h4>
<form action="/search_user" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
               placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
    </div>
</form>


@if(isset($details))
    <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Rezultāti</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Vārds Uzvārds</th>
            <th>Epasts</th>
            <th>Lietotāja ID</th>

        </tr>
        </thead>
        <tbody>
        @foreach($details as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->id}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endif
