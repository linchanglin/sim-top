@extends('layout')
@section('content')
    <h4>新建课时</h4>
    <hr>
    <form action="/courseTimes" method="POST">
        @include('courseTimes.form',['name' => old('name'),'description' => old('description'),'moduleIds' => []])

    </form>

@stop

