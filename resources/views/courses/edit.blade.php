@extends('layout')
@section('content')
    <h4>管理课程</h4>
    <hr>


    <div id="page-container">
        @include('courses.partials.leftpanel')
        <div class="mainpanel">
            <div class="contentpanel">
                <div class="panel-body">


                    <form action="/courses/{{ $course->id }}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        @include('courses.form',['name' => $course->name,'description' => $course->description])
                    </form>

                </div>
            </div>
        </div>
    </div>

@stop