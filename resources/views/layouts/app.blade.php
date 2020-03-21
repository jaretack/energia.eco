<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Energia.eco - @yield('title')</title>

    <link href="{{ elixir('css/main.css') }}" rel="stylesheet">
</head>

<body>

@yield('content')

<script src="{{ elixir('js/app.js') }}"></script>
@if(config('app.env') == 'local')
    <script src="http://localhost:35729/livereload.js"></script>
@endif
</body>
</html>
