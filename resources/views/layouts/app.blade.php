<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="images/apple-icon.png" rel="icon" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="preloader"></div>
   @include('partials.header')
   @yield('content')
   @include('partials.footer')
   @include('partials.copyright')
    <script src="{{ asset('js/app.js')}}"></script>
</body>

</html>