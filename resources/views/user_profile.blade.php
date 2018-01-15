@extends ('layouts.main_layout')

@section('content')

<div class="container">

    <div class="col-sm-10">

        Lietotāja <strong> {{ \Illuminate\Support\Facades\Auth::user()->name }}</strong> profils <br><hr>
        Lieotāja epasts:<strong> {{ \Illuminate\Support\Facades\Auth::user()->email }} </strong> <br>
        Lietotāja pārstāvētā pašpārvalde:<strong> {{ \Illuminate\Support\Facades\Auth::user()->pasparvalde->title }}</strong> <br>

        <hr>
    </div>
    @auth

        @include('formas.user_change_name')

        <a href="/delete_acc" class="button">Dzēst savu lietotāju!</a>

    @endauth

</div>

@endsection