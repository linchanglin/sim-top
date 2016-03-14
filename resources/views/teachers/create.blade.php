@extends('layout')
@section('content')
    <form action="/teachers" method="POST">
        @include('teachers.form')


    </form>

@stop