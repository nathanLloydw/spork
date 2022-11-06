<!doctype html>

<html lang="en" class="overflow-x-hidden">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link type='text/css' href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Title -->
    <title>Spork</title>

</head>

<body>
<div id="app" class="px-4">
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
