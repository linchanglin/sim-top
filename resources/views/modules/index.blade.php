@extends('layout')
@section('content')
    <h3>模块管理</h3>
    <hr>
    <div>
        <div class="pull-right" style="margin-bottom: 20px">
            <a href="/modules/create" class="btn btn-normal btn-info">添加新模块</a>
        </div>
    </div>

    <table class="table table-bordered text-center">
        <tr>
            <th>模块名称</th>
            <th>模块描述</th>
            <th>创建时间</th>
            <th>操作</th>
        </tr>
        @foreach($modules as $module)
            <tr>
                <td>{{ $module->name }}</td>
                <td>{{ $module->description }}</td>
                <td>{{ $module->created_at }}</td>
                <td>

                    <form class="form-horizontal" method="POST"
                          action="/modules/{{ $module->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="DELETE">

                        <a class="btn btn-info" href="/modules/{{ $module->id }}/edit">编辑</a>
                        <button type="submit" class="btn btn-danger">删除</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {!! $modules->links() !!}
    </div>
@stop