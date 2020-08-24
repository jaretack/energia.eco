<header class="main-navigation">
    <div class="main-navigation__nav">
        <div class="main-navigation__logo-container" itemtype="http://schema.org/Organization" itemscope="">
            <a class="main-navigation__logo" href="{{ url('') }}" title="Energia.eco" itemprop="url">
                <img class="main-navigation__logo-image" src="{{ url('/images/energia-eko-logo.svg') }}" alt="Energia Eko Kielce" itemprop="logo">
            </a>
        </div>
        <nav class="main-navigation__container" aria-expanded="true" aria-label="Main menu">
            <ul class="main-navigation__list">
                <li class="main-navigation__item">
                    <a class="main-navigation__item-link @if ($active_page == "fotowoltaika")main-navigation__item-link--active @endif" href="#">Fotowoltaika</a>
                </li>
                <li class="main-navigation__item">
                    <a class="main-navigation__item-link @if ($active_page == "farmy-fotowoltaiczne")main-navigation__item-link--active @endif" href="#">Farmy fotowoltaiczne</a>
                </li>
                <li class="main-navigation__item">
                    <a class="main-navigation__item-link @if ($active_page == "folie-grzewcze")main-navigation__item-link--active @endif" href="#">Folie grzewcze</a>
                </li>
                <li class="main-navigation__item">
                    <a class="main-navigation__item-link @if ($active_page == "pompy-ciepla")main-navigation__item-link--active @endif" href="#">Pompy ciepła</a>
                </li>
                <li class="main-navigation__item">
                    <a class="main-navigation__item-link scroll-to" href="{{ url('#contact') }}" role="button">Kontakt</a>
                </li>
            </ul>
        </nav>
        <a class="button scroll-to" href="#contact" role="button">Bezpłatna wycena</a>
        <button class="main-navigation__toggle-button hamburger hamburger--squeeze" type="button" aria-label="Menu">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
        </button>
    </div>
</header>
