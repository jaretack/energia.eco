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

<body>
@include('components.top-bar')
@include('components.main-navigation')

@yield('content')

<section class="process">
    <div class="process__container container">
        <div class="process__item">
            <h3 class="process__item-title">Skontaktuj się z nami</h3>
            <p class="process__item-description">Masz pytania, jesteś zainteresowany? Skontaktuj się z nami pod nr <u><b>788 150 744</b></u> lub zamów bezpłatną wycenę.</p>
            <a class="button button--white scroll-to" href="#contact">Zamów bezpłatną wycenę</a>
        </div>
        <div class="process__item">
            <h3 class="process__item-title">Audyt i dobór rozwiązania</h3>
            <p class="process__item-description">Na podstawie zebranych danych, nasi eksperci przeprowadzą profesjonalny audyt oraz przygotują dla Państwa najlepszą ofertę.</p>
        </div>
        <div class="process__item">
            <h3 class="process__item-title">Montaż oraz formalności</h3>
            <p class="process__item-description">Po podpisaniu umowy wysyłamy do Państwa ekipę montażową oraz załatwiamy wszystkie formalności.</p>
        </div>
    </div>
</section>
<section id="contact" class="contact">
    <h2 class="contact__title">Zamów bezpłatną wycenę</h2>
    <p class="contact__intro">Prześlij nam Twój numer telefonu, a my w ciągu 48 godzin skontaktujemy się z Tobą i zaproponujemy najbardziej opłacalne oraz wydajne rozwiązania energetyczne dla Ciebie.</p>

    <div class="contact__container">
        <div class="contact__person">
            <div class="contact__person-image-container">
                <div class="contact__person-image-border">
                    <img class="contact__person-image" src="{{ url('/images/bartosz-podlewski.webp') }}" alt="">
                </div>
            </div>
            <div class="contact__person-info">
                <address>
                    <h3 class="contact__person-name">Bartosz Podlewski</h3>
                    <h3 class="contact__person-position">Dyrektor Zarządzający</h3>
                        <ul class="contact__list">
                            <li class="contact__item">
                                <span class="contact__item-icon-container">
                                    <svg class="icon icon--height-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M196 448h-72c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12zM320 48v416c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V48C0 21.5 21.5 0 48 0h224c26.5 0 48 21.5 48 48zm-32 0c0-8.8-7.2-16-16-16H48c-8.8 0-16 7.2-16 16v416c0 8.8 7.2 16 16 16h224c8.8 0 16-7.2 16-16V48z"></path></svg>
                                </span>
                                788 150 744
                            </li>
                            <li class="contact__item">
                                <span class="contact__item-icon-container">
                                    <svg class="icon icon--height-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>
                                </span>
                                kontakt@energia.eco
                            </li>
                        </ul>
                </address>
            </div>
        </div>
        <div class="contact__form">
            <div class="input">
                <input id="phone_number" type="input" class="input__field" placeholder="Numer telefonu" name="name" id='name' required aria-required="true">
                <label class="input__label" for="phone_number">Numer telefonu</label>
            </div>
            <button class="button" type="submit">Zamów bezpłatną wycenę</button>
            <label class="checkbox" for="checkbox">Wyrażam zgodę na przetwarzanie moich danych osobowych przez Energia.eco Sp. z o. o. w celu przedstawienia mi oferty przez kontakt telefoniczny. Oświadczam, że zostałem/am poinformowany/a, że przysługuje mi prawo dostępu do moich danych osobowych, ich sprostowania, usunięcia, ograniczenia przetwarzania, przeniesienia danych, wniesienia sprzeciwu wobec przetwarzania, a także wniesienia skargi do Prezesa Urzędu Ochrony Danych Osobowych wobec przetwarzania danych osobowych przez Administratora.
                <input id="checkbox" type="checkbox" aria-required="true">
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
</section>
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

<div class="cookies cookies--close">
    <div class="cookies__container container">
        <p class="cookies__text">W celu świadczenia usług na jak najwyższym poziomie nasza strona internetowa zbiera informacje za pomocą plików cookies. Wyrażenie zgody jest dobrowolne i przyjmuję do wiadomości że w każdym momencie mogę wycofać tą zgodę. Więcej informacji znajdą Państwo w naszej <a class="cookies__link" href="/polityka-prywatnosci">Polityce Prywatności</a>.</p>
        <button class="cookies__button" aria-label="Zamknij">
            <svg class="icon icon--height-30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#ffffff" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"/></svg>
        </button>
    </div>
</div>

<script src="{{ elixir('js/app.js') }}"></script>
@if(config('app.env') == 'local')
    <script src="http://localhost:35729/livereload.js"></script>
@endif
</body>
</html>
