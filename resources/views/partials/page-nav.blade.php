{{-- Navigation --}}
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        {{-- Brand and toggle get grouped for better mobile display --}}
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#navbar-main">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{ config('blog.name') }}</a>
        </div>

        {{-- Collect the nav links, forms, and other content for toggling --}}
        <div class="collapse navbar-collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


{{--<nav class="navbar navbar-default navbar-fixed-top">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"--}}
                    {{--aria-expanded="false" aria-controls="navbar">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a class="navbar-brand" href="#">课程管理</a>--}}
        {{--</div>--}}
        {{--<div id="navbar" class="collapse navbar-collapse">--}}
            {{--<ul class="nav navbar-nav">--}}
                {{--<li class="active"><a href="/teachers">教师管理</a></li>--}}
                {{--<li><a href="/students">学生管理</a></li>--}}
                {{--<li><a href="/courses">课程管理</a></li>--}}
                {{--<li><a href="/courseTimes">课时管理</a></li>--}}
                {{--<li><a href="/modules">模块管理</a></li>--}}
            {{--</ul>--}}

            {{--@if ($signedIn)--}}
                {{--<p class="navbar-text navbar-right">--}}
                    {{--您好&nbsp;&nbsp;&nbsp;{{ $user->name }}--}}
                    {{--(--}}
                    {{--@if($user->role_id == 1)学员--}}
                    {{--@elseif($user->role_id == 2)教师--}}
                    {{--@elseif($user->role_id == 3)管理员--}}
                    {{--@endif--}}
                    {{--)--}}
                {{--</p>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}