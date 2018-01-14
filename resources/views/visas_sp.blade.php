@extends ('layouts.main_layout')

@section ('content')

<div class="col-sm-8 blog-main">

    <p>Mūsu SP</p>
    @foreach($pasparvalde as $pasparvalde)
        @include('spdati')
    @endforeach
</div>

@endsection