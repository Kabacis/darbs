@extends ('layouts.main_layout')

@section ('content')


    <div>
        <h2>{{ $pasparvalde->tag }}</h2>
        <h4>{{ $pasparvalde->title }}</h4>
        <h6>Adrese: {{$pasparvalde->adress}}</h6>
        <h6>Telefons: 29346314</h6>

        <hr>

        <p>Šajā SP pieejamais resursu saraksts:</p>

        @foreach($pasparvalde->resursi as $resursi)
            <ul>
                <li> <strong> {{  $resursi->title }} </strong> </li>
                    {{  $resursi->description }}
            </ul>
        @endforeach

        <hr>

        <p>SP Biedri</p>
        <hr>
        @foreach($pasparvalde->user as $user)
            <ul>
                <li> {{ $user->name }} </li>
                <p>{{ $user->email }}</p>
            </ul>
        @endforeach

        <hr>

        @auth
            @include('formas.pievienot_resursu')
        @endauth

    </div>




@endsection
