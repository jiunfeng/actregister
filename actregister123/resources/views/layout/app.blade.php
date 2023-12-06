<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/colors_fronts.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <title>@hasSection ('title')
        @yield('title')
        @else
        Home
        @endif</title>
</head>

<style>
    div[class|="col"] {
        background-color: #ebdef0;
        border: 0.5px solid purple;
    }

    .container .topbar {}
</style>

<body>
    <div class="container">
        <div class="col topbar"></div>
        <div class="col carousel"></div>
        <div class="col mainbar"></div>
        <div class="col context"></div>
        <div class="col footer"></div>
    </div>

</body>

</html>