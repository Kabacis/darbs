@extends('layouts.main_layout')

@section('content')

    @include ('formas.user_search')

    <hr>
    @include('formas.admin_user_delete')
    <hr>
    @include('formas.admin_user_role_change')
    <hr>
    <h3>Resursu pārvaldnieks</h3>
    <hr>
    @include('formas.admin_delete_item')


@endsection


