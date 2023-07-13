<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatables.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield("extracss")

</head>
<body>
    @include("adminnavbar")

    @yield("content")

    <script src="{{asset("js/jquery.js")}}"></script>
    <script src="{{asset("js/app.js")}}"></script>
    <script src="{{asset("js/bootstrap.js")}}"></script>
    <script src="{{asset("js/datatables.js")}}"></script>

    @yield("extrajs")
</body>
</html>
