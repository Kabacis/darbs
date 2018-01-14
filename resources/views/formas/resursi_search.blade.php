<h4>Meklēt resursu</h4>
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="resurss"
               placeholder="Meklēt resursu"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Meklēt</span>
            </button>
        </span>
    </div>
</form>


@if(isset($details))
    <p> Resursi, kuru nosaukumā/aprakstā ir <b> {{ $query }} </b> :</p>
    <h5>Resursi</h5>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Resurss</th>
            <th>Apraksts</th>
            <th>Pašpārvalde</th>
            <th>Adrese</th>
        </tr>
        </thead>
        <tbody>
        @foreach($details as $resurss)
            <tr>
                <td>{{$resurss->title}}</td>
                <td>{{$resurss->description}}</td>
                <td>{{$resurss->pasparvalde->title}}</td>
                <td>{{$resurss->pasparvalde->adress}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
