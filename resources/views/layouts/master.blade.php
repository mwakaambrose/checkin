<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Checks</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->

        <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap-theme.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/font-awesome.css')}}">

        <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>

    </head>
    <body>
        @yield('content')
    </body>
</html>
