@extends('layout')
@section('content')
    <h4>更新课时</h4>
    <hr>
    <form action="/courseTimes/{{ $courseTime->id }}" method="POST">
        <input type="hidden" name="_method" value="PUT">

        @include('courseTimes.form',['name' => $courseTime->name,'description' => $courseTime->description ])

    </form>

@stop
