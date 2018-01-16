@extends ('layouts.main_layout')

@section ('content')

<div class="col-sm-8 blog-main">

    <p>@lang('messages.sc')</p>
    @foreach($pasparvalde as $pasparvalde)
        @include('spdati')
    @endforeach
</div>

@endsection