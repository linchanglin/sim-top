@extends('layout')
@section('content')
    <h4>新建课程</h4>
    <hr>
    <form action="/courses" method="POST">
        @include('courses.form',['name' => old('name'),'description' => old('description')])

    </form>

@stop