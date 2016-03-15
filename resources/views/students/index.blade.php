@extends('layout')
@section('content')
    <h3>学生管理</h3>
    <hr>
    <div>
        <div class="pull-right" style="margin-bottom: 20px">
            <a href="/students/create" class="btn btn-normal btn-info">添加新学生</a>
        </div>
    </div>

    <table class="table table-bordered text-center">
        <tr>
            <th>学生学号</th>
            <th>学生姓名</th>
            <th>创建时间</th>
            <th>操作</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->student_id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->created_at }}</td>
                <td>

                    <form class="form-horizontal" method="POST"
                          action="/students/{{ $student->student_id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="DELETE">

                        <a class="btn btn-info" href="/students/{{ $student->student_id }}/edit">编辑</a>
                        <button type="submit" class="btn btn-danger">删除</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {!! $students->links() !!}
    </div>
@stop