@extends ('layouts.main_layout')

@section ('content')
    <div class="container">
        <div class="col-sm-8">

            <p>Šī vietne ir paredzēta Studentu pašpārvalžu resursu apkopošanai, veikmīgākai un lētākai pasākumu norsisei.</p>

            @include('formas.resursi_search')

        </div>
    </div>
    <br>
    @auth
        <a href="/delete_acc">Dzēst savu lietotāju!</a>
    @endauth
@endsection
