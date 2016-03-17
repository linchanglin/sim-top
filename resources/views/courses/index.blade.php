@extends('layout')
@section('content')
    <h3>课程管理</h3>
    <hr>
    <div class="text-right" style="margin-bottom: 20px">
        <a href="/courses/create" class="btn btn-normal btn-info">添加新课程</a>
    </div>

    <table id="my-table" class="table table-bordered text-center">
        <thead class="dynatable-active-page">
        <tr>
            <th>课程名称</th>
            <th>课程描述</th>
            <th>创建时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course->name }}</td>
                <td>{{ $course->description }}</td>
                <td>{{ $course->created_at }}</td>
                <td>

                    <form class="form-horizontal" method="POST"
                          action="/courses/{{ $course->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="DELETE">

                        <a class="btn btn-info" href="/courses/{{ $course->id }}/edit">管理</a>
                        <button type="submit" class="btn btn-danger">删除</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop