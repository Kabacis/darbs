@extends('layouts.main_layout')

@section('content')

    <p>Šajā SP pieejamais resursu saraksts:</p>

    @foreach($pasparvalde->resursi as $resursi)
        <ul>
            <li> <strong> {{  $resursi->title }} </strong> </li>
            <p>{{  $resursi->description }} </p>
        </ul>
    @endforeach

@endsection