@extends('layout')
@section('content')
    <h4>新建{{ $whose }}信息</h4>
    <hr>
    <form action="/{{ $who }}" method="POST">
        @include('partials.person.form',['student_id' => old('student_id'),'name' => old('name')])

    </form>



@stop