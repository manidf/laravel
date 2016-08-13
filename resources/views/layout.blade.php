<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        @yield('header')
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">

    </head>
    <body>

        @yield('content')

        @yield('footer')
        <script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>

    </body>
</html>
