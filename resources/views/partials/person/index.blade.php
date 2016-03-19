@extends('layout')
@section('content')
    <h3>{{ $whose }}管理</h3>
    <hr>
    <div class="text-right" style="margin-bottom: 20px">
        <a href="/{{ $who }}/create" class="btn btn-normal btn-info">添加新{{ $whose }}</a>
    </div>

    <table id="my-table" class="table table-bordered text-center">
        <thead class="dynatable-active-page">
        <tr>
            <th>{{ $whoseId }}</th>
            <th>{{ $whose }}姓名</th>
            <th>创建时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($people as $person)
            <tr>
                <td>{{ $person->student_id }}</td>
                <td>{{ $person->name }}</td>
                <td>{{ $person->created_at }}</td>
                <td>

                    <form class="form-horizontal" method="POST"
                          action="/{{ $who }}/{{ $person->student_id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="DELETE">

                        <a class="btn btn-info" href="/{{ $who }}/{{ $person->student_id }}/edit">编辑</a>
                        <button type="submit" class="btn btn-danger">删除</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop