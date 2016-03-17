<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>课程管理</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/libs.css">
</head>
<body>
@include('partials.page-nav')
<div class="container">
    @yield('content')
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/libs.js"></script>
<script>
    $('#my-table').dynatable();
</script>
@yield('scripts')
@include('flash')
</body>
</html>