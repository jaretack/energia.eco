<!DOCTYPE html>
<html lang="pl">
<head>
    <title>@yield('title')</title>
    <meta name="description" content="W Energia.eco wykonujemy dla Ciebie instalacje paneli słonecznych, solarnych. W ofercie posiadamy również folie grzewcze oraz pompy ciepła. Energia eko Kielce">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ elixir('css/main.css') }}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#cc2020">
</head>

<body class="presentation-page">
@include('components.main-navigation')

@yield('content')
<footer class="footer">
    <div class="footer__container container">
        <div class="footer__contact">
            <div>
                <span class="footer__contact-name">telefon:</span>
                <span class="footer__contact-value">788 150 744</span>
            </div>
            <div>
                <span class="footer__contact-name">e-mail:</span>
                <span class="footer__contact-value">kontakt@energia.eco</span>
            </div>
        </div>
        <div class="footer__copyrights">
            2020 © Energia.eco<br>
            Polityka Prywatności
        </div>
        <div class="footer__partners">
            <img class="footer__partners-logo" src="{{ url('/images/partners/kpt.webp') }}" alt="Kielecki Park Technologiczny">
        </div>
    </div>
</footer>

<script src="{{ elixir('js/app.js') }}"></script>
@if(config('app.env') == 'local')
    <script src="http://localhost:35729/livereload.js"></script>
@endif
</body>
</html>
