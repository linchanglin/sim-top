@extends('layout')
@section('content')
    <h4>新建模块</h4>
    <hr>
    <form action="/modules" method="POST">
        @include('modules.form',['name' => old('name'),'description' => old('description')])

    </form>

@stop