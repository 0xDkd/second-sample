<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>@yield('title','首页') - Laravel Second</title>

    <!-- CSS  -->
    <link href="https://cdn.bootcss.com/materialize/1.0.0-rc.1/css/materialize.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/material-design-icons/3.0.1/iconfont/material-icons.min.css" rel="stylesheet">
</head>
<body>

@include('layouts._header')

@yield('content')


@include('layouts._footer')

<!--  Scripts-->

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdn.bootcss.com/materialize/1.0.0-rc.1/js/materialize.min.js"></script>
<script src="/js/init.js"></script>

</body>
</html>
