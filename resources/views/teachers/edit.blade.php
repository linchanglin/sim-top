@extends('layout')
@section('content')
    <h4>更新教师信息</h4>
    <hr>
    <form action="/teachers/{{ $teacher->student_id }}" method="POST">
        <input type="hidden" name="_method" value="PUT">

        @include('teachers.form',['student_id' => $teacher->student_id,'name' => $teacher->name])


    </form>

@stop