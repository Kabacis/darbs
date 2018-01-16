@extends('layouts.main_layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div>
                <div>
                    @if (session('status'))
                        <div>
                            {{ session('status') }}
                        </div>
                    @endif

                    @lang('messages.ienaca')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
