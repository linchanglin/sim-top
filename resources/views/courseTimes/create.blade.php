@extends('layout')
@section('content')
    <h4>新建课时</h4>
    <hr>
    <form action="/courseTimes" method="POST">
        @include('courseTimes.form',['name' => old('name'),'description' => old('description')])

    </form>

@stop

@section('scripts')
    <script type="text/javascript">
        $(".js-example-basic-multiple").select2();
    </script>
@stop