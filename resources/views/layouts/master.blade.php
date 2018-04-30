<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>App Middleware and Policies</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            @include('partials.nav')
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>{{$title?? ''}}</h1>
            @yield('content')
        </div>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>