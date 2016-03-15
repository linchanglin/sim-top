@extends('layout')
@section('content')
    <h4>新建教师信息</h4>
    <hr>
    <form action="/teachers" method="POST">
        @include('teachers.form',['student_id' => old('student_id'),'name' => old('name')])

    </form>

@stop