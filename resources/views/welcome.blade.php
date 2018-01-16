@extends ('layouts.main_layout')

@section ('content')
    <div class="container">
        <div class="col-sm-8">

            <p>@lang('messages.apraksts')</p>

            @include('formas.resursi_search')

        </div>


    </div>
    <br>

@endsection
