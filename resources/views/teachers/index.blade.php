@extends('layout')
@section('content')
    <h3>教师管理</h3>
    <hr>
    <div class="text-right" style="margin-bottom: 20px">
        <a href="/teachers/create" class="btn btn-normal btn-info">添加新教师</a>
    </div>

    <table id="my-table" class="table table-bordered text-center">
        <thead class="dynatable-active-page">
        <tr>
            <th>教师工号</th>
            <th>教师姓名</th>
            <th>创建时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->student_id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->created_at }}</td>
                <td>

                    <form class="form-horizontal" method="POST"
                          action="/teachers/{{ $teacher->student_id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="DELETE">

                        <a class="btn btn-info" href="/teachers/{{ $teacher->student_id }}/edit">编辑</a>
                        <button type="submit" class="btn btn-danger">删除</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop