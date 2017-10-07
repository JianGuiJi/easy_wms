<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EASY WMS</title>
    <link rel="shortcut icon" href="{{asset('ico/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('css/jq/jquery.mobile-1.4.5.min.css')}}">
    <script src="{{asset('js/jq/jquery-2.1.3.min.js')}}"></script>
    <script src="{{asset('js/jq/jquery.mobile-1.4.5.min.js')}}"></script>
</head>
<body>
<div class="container">
    @yield('content')
</div>

<div data-role="page" id="home">
    @include("layouts.header")

    <div data-role="main" class="ui-content">
        @yield("main")
    </div>

    @include("layouts.footer")
</div>

@yield("otherPage")

</body>
</html>
