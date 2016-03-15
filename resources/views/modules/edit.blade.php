@extends('layout')
@section('content')
    <h4>更新模块</h4>
    <hr>

    <form action="/modules/{{ $module->id }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        @include('modules.form',['name' => $module->name,'description' => $module->description])
    </form>

@stop