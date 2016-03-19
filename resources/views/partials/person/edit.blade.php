@extends('layout')
@section('content')
    <h4>更新{{ $whose }}信息</h4>
    <hr>
    <form action="/{{ $who }}/{{ $person->student_id }}" method="POST">
        <input type="hidden" name="_method" value="PUT">

        @include('partials.person.form',['student_id' => $person->student_id,'name' => $person->name])

    </form>
    <hr>

    <form name='passwordReset' action="/passwordReset/{{ $person->student_id }}" method="POST">
        {{ csrf_field() }}
        <div class="text-center">
            <input type="button" onclick="pleaseConfirm()" class="btn btn-warning btn-q" value="重置密码">
        </div>
    </form>

@stop

@section('scripts')
    <script type="text/javascript">
        function pleaseConfirm(){
            if (confirm('你要提交吗'))
            document.passwordReset.submit()
        }
    </script>
@stop