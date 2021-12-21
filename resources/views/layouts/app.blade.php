<!doctype html>
<html lang="en"">
<head>
    <link href="/css/style.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{asset('images/Icon.ico')}}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MOB Settlement</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="js/jquery.printPage.js"></script>

</head>
<body class="bg-white">
    <div>
        <label class="mr-2 mt-5 float-right">{{date('Y-m-d')}}</label>
            <a href="{{ url('/') }}">
                <img  src="{{asset('images/logo.png')}}" class="ml-2">
            </a>
        <main class="py-3"">
            @yield('content')
        </main>
            <label class="ml-2 float-left"> Copyright © 2021 San Yu Aung. All Rights Reserved.</label>
    </div>
</body>
</html>
