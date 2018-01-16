<h4>@lang('messages.sr')</h4>
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="resurss"
               placeholder="@lang('messages.sr')"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">@lang('messages.search')</span>
            </button>
        </span>
    </div>
</form>


@if(isset($details))
    <p> @lang('messages.ic') &nbsp;<b> {{ $query }} </b> :</p>
    <h5>@lang('messages.items')</h5>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>@lang('messages.items1')</th>
            <th>@lang('messages.description')</th>
            <th>@lang('messages.council')</th>
            <th>@lang('messages.adress')</th>
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
