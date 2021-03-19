<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">

        <script src="/js/main.js"></script>
    </head>
    <body onload="stickyBottom();">

    @yield('content')

    <footer class="">
        <p class="text-muted m-0 text-center p-3">Copyright 2020 Pizza House</p>
    </footer>
    </body>
</html>