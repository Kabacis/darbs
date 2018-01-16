@extends ('layouts.main_layout')

@section ('content')


    <div>
        <h2>{{ $pasparvalde->tag }}</h2>
        <h4>{{ $pasparvalde->title }}</h4>
        <h6>@lang('messages.adress')&nbsp;:&nbsp; {{$pasparvalde->adress}}</h6>
        <h6>@lang('messages.phone'): 26144275</h6>

        <hr>

        <p>@lang('messages.council_items')</p>

        @foreach($pasparvalde->resursi as $resursi)
            <ul>
                 <strong> {{  $resursi->title }} </strong><br>
                    {{  $resursi->description }} <br>
                    Pievienoja: {{ $resursi->user->name }}
                                {{ $resursi->created_at->format('Y-m-d') }}<br>
                <a href="{{ url('/SP/'. $pasparvalde->id.'/'.$resursi->id) }}">@lang('messages.comments')</a>
            </ul>
        @endforeach

        <hr>

        <p>@lang('messages.cm')</p>
        <hr>
        @foreach($pasparvalde->user as $user)
            <ul>
                <li>{{ $user->name }} </li>
                @lang('messages.email'): {{ $user->email }}
            </ul>
        @endforeach

        <hr>

        @auth
            @include('formas.pievienot_resursu')
        @endauth

    </div>




@endsection
