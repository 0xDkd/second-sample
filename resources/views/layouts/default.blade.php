<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>@yield('title','首页') - Laravel Second</title>

    <!-- CSS  -->
    <link href="/themes/metrial/css/materialize.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/material-design-icons/3.0.1/iconfont/material-icons.min.css" rel="stylesheet">
</head>
<body>

@include('layouts._header')

@yield('content')


@include('layouts._footer')

<!--  Scripts-->

<script src="https://cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
<script src="/themes/metrial/js/materialize.js"></script>
<script src="/themes/metrial/js/init.js"></script>

</body>
</html>
