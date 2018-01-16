@extends ('layouts.main_layout')

@section('content')

<div class="container">

    <div class="col-sm-10">
        <div>

            <img src="/uploads/avatars/{{ \Illuminate\Support\Facades\Auth::user()->avatar}}" class="avatar">

            Lietotāja <strong> {{ \Illuminate\Support\Facades\Auth::user()->name }}</strong> profils <br>

        </div>

        Lieotāja epasts:<strong> {{ \Illuminate\Support\Facades\Auth::user()->email }} </strong> <br>
        Lietotāja pārstāvētā pašpārvalde:<strong> {{ \Illuminate\Support\Facades\Auth::user()->pasparvalde->title }}</strong> <br>


        <br><br>
        @include('formas.pievienot_profila_bildi')
        <hr>
    </div>
    @auth

        @include('formas.user_change_name')

        <a href="/delete_acc" class="button">Dzēst savu lietotāju!</a>

    @endauth


</div>

@endsection