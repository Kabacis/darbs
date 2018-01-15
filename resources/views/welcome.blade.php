@extends ('layouts.main_layout')

@section ('content')
    <div class="container">
        <div class="col-sm-8">

            <p>Šī vietne ir paredzēta Studentu pašpārvalžu resursu apkopošanai, veikmīgākai un lētākai pasākumu norsisei.</p>

            @include('formas.resursi_search')
            <br><br>
        </div>

        <div>

            <form action="language" method="post">
                <select name="locale">
                    <option value="en">English</option>
                    <option value="lv">Latvian</option>
                </select>
                {{csrf_field()}}
                <input type="submit" value="Submit">
            </form>

        <br><br><br><br>


        </div>




        <h5>{{ trans('messages.home') }}</h5>

    </div>
    <br>

@endsection
