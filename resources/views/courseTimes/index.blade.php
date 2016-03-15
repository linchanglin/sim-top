@extends('layout')
@section('content')
    <h3>课时管理</h3>
    <hr>
    <div>
        <div class="pull-right" style="margin-bottom: 20px">
            <a href="/courseTimes/create" class="btn btn-normal btn-info">添加新课时</a>
        </div>
    </div>

    <table class="table table-bordered text-center">
        <tr>
            <th>课时名称</th>
            <th>课时描述</th>
            <th>相关模块</th>
            <th>操作</th>
        </tr>
        @foreach ($courseTimes as $courseTime)
            <tr>
                <td>{{ $courseTime->name }}</td>
                <td>{{ $courseTime->description }}</td>
                <td>{{ $courseTime->created_at }}</td>
                <td>

                    <form class="form-horizontal" method="POST"
                          action="/courseTimes/{{ $courseTime->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="DELETE">

                        <a class="btn btn-info" href="/courseTimes/{{ $courseTime->id }}/edit">管理</a>
                        <button type="submit" class="btn btn-danger">删除</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {!! $courseTimes->links() !!}
    </div>
@stop