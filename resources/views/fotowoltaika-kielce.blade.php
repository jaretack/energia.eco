@extends('layouts.app')

@section('title', 'Fotowoltaika Kielce. Najlepsze instalacje fotowoltaiczne oraz panele fotowoltaiczne w Kielcach')

@section('content')
    <main class="subpage-city">
        <div class="breadcrumbs">
            <div class="container">
                <span class="breadcrumbs__title">Jesteś w:</span>
                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="{{ url("/") }}">
                            <span itemprop="name">Energia.eco</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="{{ url("fotowoltaika") }}">
                            <span itemprop="name">Fotowoltaika</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="name">Fotowoltaika Kielce</span>
                        <meta itemprop="position" content="3"></li>
                </ol>
            </div>
        </div>

        <article>
            <div class="subpage-city__header">
                <img class="subpage-city__header-image" src="{{ url("images/subpages/fotowoltaika/urzad-miasta-kielce.jpeg") }}" alt="Urząd Miasta Kielce">
                <div class="subpage-city__header-container">
                    <div class="subpage-city__header-logos-container">
                        <img class="subpage-city__header-city-logo" src="{{ url("images/herby/herb-wojewodztwa-swietokrzyskiego.png") }}" alt="Herb miasta Kielce">
                        <img class="subpage-city__header-city-logo" src="{{ url("images/herby/herb-miasta-kielce.png") }}" alt="Herb miasta Kielce">
                    </div>
                    <header>
                        <h1 class="subpage-city__header-title">Fotowoltaika Kielce</h1>
                        <p class="subpage-city__header-text">Darmowa energia ze słońca z fotowoltaiką w Kielcach. Wykonujemy instalacje fotowoltaiczne na terenie całego województwa świętokrzyskiego.</p>
                    </header>
                    <div class="subpage__header-buttons">
                        <a class="button" href="{{ url("fotowoltaika") }}">przejdź do oferty fotowoltaiki</a>
                        <a class="button button--blue" href="#">chcę dofinanowanie 5000 zł</a>
                    </div>
                </div>
            </div>

            <div class="intro-background">
                <div class="intro intro-1 container box--red-gradient">
                    <img class="intro__image" src="{{ url("images/subpages/fotowoltaika/fotowoltaika-kielce.jpeg") }}" alt="Fotowoltaika Kielce">
                    <header class="intro__header">
                        <h2 class="intro__title">Czy miasto Kielce chętnie inwestuje w fotowoltaikę?</h2>
                    </header>
                    <p class="intro__text">
                        Jednym z najlepiej i najszybciej rozwijających się Odnwialnych Źródeł Energii jest fotowoltaika. Polska stara się dogonić naszych zachodnich sąsiadów, ale przed nami długa droga. Szacuje się ,że najbliższe lata będą przełomowe w Polsce. Liczne dofinansowania, wsparcia rządowe i pożyczki na preferencyjnych warunkach same sprawiają, że dobra zmiana może szybko nadejść.
                        <br><br>
                        Przedsiębiorcy, rolnicy jak i osoby prywatne widzą w fotowoltaice możliwość zaoszczędzenia. Jest to inwestycja która zwraca się stosunkowo szybko, a przy ciągłych podwyżkach za energię elektryczną staje się niezwykle opłacalna. Instytucje rządowe i inne podmioty również inwestują w całej Polsce, w tym w Kielcach.
                    </p>
                </div>

                <div class="intro intro-2 container">
                    <header class="intro__header">
                        <h2 class="intro__title">Inwestycje w instalacje fotowoltaiczne na terenie miasta Kielce</h2>
                    </header>
                    <p class="intro__text">
                        Każdy kto posiada wystarczające <b>miejsce na swoim dachu lub gruncie</b> do postawienia instalacji fotowoltaicznej. Niezależnie od tego czy korzystasz z energii elektrycznej indywidualnie dla swoich prywatnych celów w gospodarstwie domowym czy prowadzisz biznes i chcesz zwiększyć zyski obniżając rachunki za prąd nawet o 90%!
                    </p>
                </div>
            </div>

            <section class="icons-box">
                <h2 class="icons-box__title">Najlepsze moduły fotowoltaiczne</h2>
                <div class="icons-box__container container box--red-gradient">
                    <div class="icons-box__item box--light p-2">
                        <div class="icons-box__item-icon-container">
                            <svg class="icon icon--height-30 icon--white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 416H32V72c0-4.42-3.58-8-8-8H8c-4.42 0-8 3.58-8 8v360c0 8.84 7.16 16 16 16h488c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8zM98.34 263.03c-3.12 3.12-3.12 8.19 0 11.31l11.31 11.31c3.12 3.12 8.19 3.12 11.31 0l72.69-72.01 84.69 84.69c6.25 6.25 16.38 6.25 22.63 0l93.53-93.53 44.04 44.04c4.95 4.95 11.03 7.16 17 7.16 12.48 0 24.46-9.7 24.46-24.34V112.19c0-8.94-7.25-16.19-16.19-16.19H344.34c-21.64 0-32.47 26.16-17.17 41.46l44.71 44.71-82.22 82.22-84.63-84.63c-6.23-6.23-16.32-6.25-22.57-.05l-84.12 83.32zM362.96 128H448v85.04L362.96 128z"></path></svg>
                        </div>
                        <div>
                            <h3 class="icons-box__item-title">maksymalna wydajność</h3>
                            <p class="icons-box__item-text">Instalacje tworzymy przy użyciu najlepszych podzespołów, posiadamy w ofercie panele fotowoltaiczne z listy TIER-1 Bloomberga.</p>
                        </div>
                    </div>
                    <div class="icons-box__item box--light p-2">
                        <div class="icons-box__item-icon-container">
                            <svg class="icon icon--height-30 icon--white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M415.7 112.3C411.8 67.4 373.9 32 328 32c-17.8 0-34.8 5.3-49.2 15.2C256.3 17.7 221.5 0 184 0 117.8 0 64 53.8 64 120v.4c-38.3 16-64 53.5-64 95.6 0 57.3 46.7 104 104 104h304c57.3 0 104-46.7 104-104 0-54.8-42.6-99.8-96.3-103.7zM408 288H104c-39.7 0-72-32.3-72-72 0-32.3 21.9-60.7 53.3-69.2l13.3-3.6-2-17.2c-.3-2-.6-4-.6-6 0-48.5 39.5-88 88-88 32.2 0 61.8 17.9 77.2 46.8l10.6 19.8L287 82.1C297.9 70.4 312.4 64 328 64c30.9 0 56 25.1 56 56 0 1.6-.3 3.1-.8 6.9l-2.5 20 23.5-2.4c1.2-.2 2.5-.4 3.8-.4 39.7 0 72 32.3 72 72S447.7 288 408 288zm-224.1 82.1c-7.6-4.4-17.4-1.8-21.8 6l-64 112c-4.4 7.7-1.7 17.5 6 21.8 2.5 1.4 5.2 2.1 7.9 2.1 5.5 0 10.9-2.9 13.9-8.1l64-112c4.4-7.6 1.7-17.4-6-21.8zM216 464c-13.3 0-24 10.7-24 24s10.7 24 24 24 24-10.7 24-24-10.7-24-24-24zM87.2 369.7c-7.9-3.9-17.5-.8-21.5 7.2l-16 32c-3.9 7.9-.8 17.5 7.2 21.5 2.3 1.1 4.8 1.7 7.2 1.7 5.8 0 11.5-3.2 14.3-8.8l16-32c3.8-8.1.7-17.7-7.2-21.6zM24 464c-13.3 0-24 10.7-24 24s10.7 24 24 24 24-10.7 24-24-10.7-24-24-24zm447.2-94.3c-7.9-3.9-17.5-.8-21.5 7.2l-16 32c-3.9 7.9-.8 17.5 7.2 21.5 2.3 1.1 4.8 1.7 7.2 1.7 5.8 0 11.5-3.2 14.3-8.8l16-32c3.8-8.1.7-17.7-7.2-21.6zm-192 0c-7.9-3.9-17.5-.8-21.5 7.2l-16 32c-3.9 7.9-.8 17.5 7.2 21.5 2.3 1.1 4.8 1.7 7.2 1.7 5.8 0 11.5-3.2 14.3-8.8l16-32c3.8-8.1.7-17.7-7.2-21.6zM408 464c-13.3 0-24 10.7-24 24s10.7 24 24 24 24-10.7 24-24-10.7-24-24-24zm-32.1-93.9c-7.6-4.4-17.4-1.8-21.8 6l-64 112c-4.4 7.7-1.7 17.5 6 21.8 2.5 1.4 5.2 2.1 7.9 2.1 5.5 0 10.9-2.9 13.9-8.1l64-112c4.4-7.6 1.7-17.4-6-21.8z"></path></svg>
                        </div>
                        <div>
                            <h3 class="icons-box__item-title">wysoka wytrzymałość</h3>
                            <p class="icons-box__item-text">Panele fotowoltaicznez certyfikatem IP67, odporność na: kurz, brud, mgłe solną, amoniak i piasek. Wytrzymują obciążenia mechaniczne 2400 Pa i śniegowe 5400 Pa.</p>
                        </div>
                    </div>
                    <div class="icons-box__item box--light p-2">
                        <div class="icons-box__item-icon-container">
                            <svg class="icon icon--height-30 icon--white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M586.22 26.74C583.65 11.31 570.3 0 554.66 0H85.34C69.7 0 56.35 11.31 53.78 26.74l-53.33 320C-2.81 366.24 12.23 384 32.01 384H224v96h-40c-4.42 0-8 3.58-8 8v16c0 4.42 3.58 8 8 8h272c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8h-40v-96h191.99c19.77 0 34.81-17.76 31.56-37.26l-53.33-320zM578.66 176h-138.6l-14.4-144h129l24 144zm-170.73 0H232.07l14.4-144h147.07l14.39 144zM85.34 32h129l-14.4 144H61.34l24-144zM56.01 208h140.73l-14.4 144H32.01l24-144zM384 480H256v-96h128v96zM214.48 352l14.4-144h182.25l14.4 144H214.48zm243.17 0l-14.4-144h140.74l24 144H457.65z"></path></svg>
                        </div>
                        <div>
                            <h3 class="icons-box__item-title">Ekskluzywny wygląd</h3>
                            <p class="icons-box__item-text">Nasze panele fotowoltaiczne wspaniale komponują się na każdej powierzchni. Całość modułu wykonana jest w kolorze czarnym czyli tzw. full-black.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="who-can">
                <div class="intro container">
                    <header class="intro__header">
                        <h2 class="intro__title">Korzyści płynące z inwestycji w fotowoltaikę?</h2>
                    </header>
                    <p class="intro__text">
                        <strong>Fotowoltaika</strong> jest jednym z najlepszych Odnawialnych Źródeł Energii. Instalacje fotowoltaiczne są bezobsługowe, samoczyszczące i mają długą żywotność o czym świadczy nawet 25 letnia gwarancja na wydajność energii liniowej.
                        <br><br>
                        Fotowoltaika podbija światowe rynki przede wszystkim ze względów finansowych i ekologicznych. Inwestycja w fotowoltaikę zwraca się stosunkowo szybko i pozwala na uniezależnienie się od Zakładów Energetycznych i korzystanie z darmowej energii.
                    </p>
                </div>
            </section>
        </article>
    </main>

    <section class="recommendations">
        @include('components.top-recommendation')
        <div class="container">
            <h2 class="recommendations__title">Inni o nas</h2>
            <ul class="recommendations__list">
                <li class="recommendations__item">
                    <div class="recommendations__item-container">
                        <div class="ratings">
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                        </div>
                        <p class="recommendations__item-description">
                            Profesjonalne podejście do klienta oraz bezproblemowa współpraca. Mogę szczerze polecić tą firmę.
                        </p>
                        <div class="recommendations__item-author-info">
                            <span class="recommendations__item-description-quote-container">
                                <svg class="recommendations__item-description-quote" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M176 32H64C28.7 32 0 60.7 0 96v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56H56c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136H56c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56H64c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216zM448 32H336c-35.3 0-64 28.7-64 64v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56h-16c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136h-16c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56h-96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216z"/></svg>
                            </span>
                            <span class="recommendations__item-author-profession">Polskie Centrum Doradztwa Energetycznego</span>
                            <span class="recommendations__item-author">mgr inż. Armand Naporowski</span>
                            <div class="recommendations__item-awward">
                                <svg class="recommendations__item-awward-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M192 95.95c-52.93 0-96 43.07-96 96s43.07 96 96 96 96-43.07 96-96-43.06-96-96-96zm0 160c-35.29 0-64-28.71-64-64s28.71-64 64-64 64 28.71 64 64-28.71 64-64 64zm175.63 16.38c14.06-14.31 19.59-35.33 14.47-54.86-6.39-24.2-6.39-20.45 0-44.69 5.13-19.52-.41-40.53-14.47-54.86-17.58-17.72-15.57-14.69-21.91-38.59-5.15-19.63-20.37-35.08-39.72-40.34-23.3-6.32-20.62-4.58-37.75-22.22-14.22-14.42-35.12-20.08-54.53-14.82-23.5 6.51-20.1 6.41-43.47 0-19.25-5.31-40.28.4-54.5 14.85-17.3 17.67-14.21 15.77-37.72 22.19-19.37 5.26-34.59 20.71-39.75 40.32-6.36 24.04-4.38 20.87-21.91 38.62C2.31 132.25-3.22 153.27 1.91 172.8c6.39 24.17 6.39 20.42 0 44.69-5.13 19.52.41 40.53 14.47 54.86 17.58 17.72 15.57 14.69 21.91 38.59 2.01 7.64 5.91 14.36 10.62 20.38L1.2 448.7c-4.31 10.57 3.51 22.04 14.79 22.04.55 0-2.91.12 53.32-2.03L105.56 507c3.22 3.4 7.42 5 11.58 5 6.17 0 12.23-3.53 14.86-9.96l52.45-129.03a23.346 23.346 0 0 1 15.11-.01L252 502.04c2.62 6.43 8.69 9.96 14.86 9.96 4.16 0 8.36-1.6 11.58-5l36.25-38.28c56.23 2.15 52.77 2.03 53.32 2.03 11.28 0 19.1-11.47 14.79-22.04l-47.7-117.37c4.71-6.02 8.61-12.74 10.62-20.37 6.36-24.06 4.38-20.89 21.91-38.64zM111.72 466.95c-22.59-23.86-16.56-17.49-29.13-30.77-18.3.7-9.45.36-42.41 1.63l35.55-87.48c.79.26 1.47.75 2.28.97 21.87 5.86 20.46 4.6 31.59 15.91 9.94 10.14 22.79 15.57 35.96 16.5l-33.84 83.24zm232.11-29.15c-32.91-1.26-24.13-.92-42.41-1.62-12.56 13.27-6.54 6.91-29.13 30.77l-33.9-83.4c13.21-.91 26.06-6.21 36.02-16.35 11.41-11.61 9.83-10.19 31.59-15.91.81-.22 1.49-.71 2.28-.96l35.55 87.47zm-29.05-134.99c-2.25 8.58-8.84 15.33-17.22 17.61-23.62 6.25-28.39 6.45-45.97 24.37-8 8.11-20.19 9.61-29.75 3.48-18.13-11.44-41.56-11.45-59.69.02-9.5 6.03-21.75 4.62-29.75-3.52-17.38-17.68-22.12-17.95-45.97-24.36-8.38-2.28-14.97-9.03-17.22-17.62-8.06-30.63-7.53-30.19-30.03-52.87-6.19-6.31-8.63-15.62-6.34-24.31 8.15-30.47 8.2-30.48 0-60.95-2.28-8.69.16-18 6.34-24.3 22.42-22.7 21.94-22.06 30.03-52.91 2.25-8.58 8.84-15.33 17.22-17.59 30.79-8.41 29.68-7.8 52.13-30.62 5.2-5.31 13.82-8.96 23.28-6.41 30.46 8.38 29.85 8.4 60.28 0 8.19-2.27 17.19.19 23.31 6.37 22.29 22.87 21.87 22.44 52.16 30.66 8.34 2.27 14.94 9.02 17.19 17.61 8.06 30.63 7.53 30.19 30.03 52.87 6.19 6.31 8.63 15.62 6.34 24.31-8.19 30.52-8.16 30.54 0 60.95 2.28 8.69-.16 18-6.34 24.3-22.41 22.71-21.94 22.06-30.03 52.91z"/></svg>
                                <span class="recommendations__item-awward-title">Świadectwo Charakterystyki Energetycznej</span>
                            </div>
                        </div>
                    </div>
                    <div class="recommendations__item-image-container">
                        <img src="{{ url('/images/rekomendacje/1.png') }}" class="recommendations__item-image">
                    </div>
                </li>
                <li class="recommendations__item">
                    <div class="recommendations__item-container">
                        <div class="ratings">
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                        </div>
                        <p class="recommendations__item-description">
                            Realizacja wykonana zgodnie z założeniami. Od roku cieszę się darmową energią płynącą z instalacji fotowoltaicznej.
                        </p>
                        <div class="recommendations__item-author-info">
                            <span class="recommendations__item-description-quote-container">
                                <svg class="recommendations__item-description-quote" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M176 32H64C28.7 32 0 60.7 0 96v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56H56c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136H56c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56H64c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216zM448 32H336c-35.3 0-64 28.7-64 64v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56h-16c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136h-16c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56h-96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216z"/></svg>
                            </span>
                            <span class="recommendations__item-author-profession">Zespół muzyczny</span>
                            <span class="recommendations__item-author">Duet We Dwoje</span>
                            <div class="recommendations__item-awward">
                                <svg class="recommendations__item-awward-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M192 95.95c-52.93 0-96 43.07-96 96s43.07 96 96 96 96-43.07 96-96-43.06-96-96-96zm0 160c-35.29 0-64-28.71-64-64s28.71-64 64-64 64 28.71 64 64-28.71 64-64 64zm175.63 16.38c14.06-14.31 19.59-35.33 14.47-54.86-6.39-24.2-6.39-20.45 0-44.69 5.13-19.52-.41-40.53-14.47-54.86-17.58-17.72-15.57-14.69-21.91-38.59-5.15-19.63-20.37-35.08-39.72-40.34-23.3-6.32-20.62-4.58-37.75-22.22-14.22-14.42-35.12-20.08-54.53-14.82-23.5 6.51-20.1 6.41-43.47 0-19.25-5.31-40.28.4-54.5 14.85-17.3 17.67-14.21 15.77-37.72 22.19-19.37 5.26-34.59 20.71-39.75 40.32-6.36 24.04-4.38 20.87-21.91 38.62C2.31 132.25-3.22 153.27 1.91 172.8c6.39 24.17 6.39 20.42 0 44.69-5.13 19.52.41 40.53 14.47 54.86 17.58 17.72 15.57 14.69 21.91 38.59 2.01 7.64 5.91 14.36 10.62 20.38L1.2 448.7c-4.31 10.57 3.51 22.04 14.79 22.04.55 0-2.91.12 53.32-2.03L105.56 507c3.22 3.4 7.42 5 11.58 5 6.17 0 12.23-3.53 14.86-9.96l52.45-129.03a23.346 23.346 0 0 1 15.11-.01L252 502.04c2.62 6.43 8.69 9.96 14.86 9.96 4.16 0 8.36-1.6 11.58-5l36.25-38.28c56.23 2.15 52.77 2.03 53.32 2.03 11.28 0 19.1-11.47 14.79-22.04l-47.7-117.37c4.71-6.02 8.61-12.74 10.62-20.37 6.36-24.06 4.38-20.89 21.91-38.64zM111.72 466.95c-22.59-23.86-16.56-17.49-29.13-30.77-18.3.7-9.45.36-42.41 1.63l35.55-87.48c.79.26 1.47.75 2.28.97 21.87 5.86 20.46 4.6 31.59 15.91 9.94 10.14 22.79 15.57 35.96 16.5l-33.84 83.24zm232.11-29.15c-32.91-1.26-24.13-.92-42.41-1.62-12.56 13.27-6.54 6.91-29.13 30.77l-33.9-83.4c13.21-.91 26.06-6.21 36.02-16.35 11.41-11.61 9.83-10.19 31.59-15.91.81-.22 1.49-.71 2.28-.96l35.55 87.47zm-29.05-134.99c-2.25 8.58-8.84 15.33-17.22 17.61-23.62 6.25-28.39 6.45-45.97 24.37-8 8.11-20.19 9.61-29.75 3.48-18.13-11.44-41.56-11.45-59.69.02-9.5 6.03-21.75 4.62-29.75-3.52-17.38-17.68-22.12-17.95-45.97-24.36-8.38-2.28-14.97-9.03-17.22-17.62-8.06-30.63-7.53-30.19-30.03-52.87-6.19-6.31-8.63-15.62-6.34-24.31 8.15-30.47 8.2-30.48 0-60.95-2.28-8.69.16-18 6.34-24.3 22.42-22.7 21.94-22.06 30.03-52.91 2.25-8.58 8.84-15.33 17.22-17.59 30.79-8.41 29.68-7.8 52.13-30.62 5.2-5.31 13.82-8.96 23.28-6.41 30.46 8.38 29.85 8.4 60.28 0 8.19-2.27 17.19.19 23.31 6.37 22.29 22.87 21.87 22.44 52.16 30.66 8.34 2.27 14.94 9.02 17.19 17.61 8.06 30.63 7.53 30.19 30.03 52.87 6.19 6.31 8.63 15.62 6.34 24.31-8.19 30.52-8.16 30.54 0 60.95 2.28 8.69-.16 18-6.34 24.3-22.41 22.71-21.94 22.06-30.03 52.91z"/></svg>
                                <span class="recommendations__item-awward-title">Zdobywca nagrody blablabla</span>
                            </div>
                        </div>
                    </div>
                    <div class="recommendations__item-image-container">
                        <img src="{{ url('/images/rekomendacje/1.png') }}" class="recommendations__item-image">
                    </div>
                </li>
                <li class="recommendations__item">
                    <div class="recommendations__item-container">
                        <div class="ratings">
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                        </div>
                        <p class="recommendations__item-description">
                            Obsługa klienta i jakość na najwyższym poziomie wyróżniają firmę na tle konkurencji. Szczerze mogę polecić ich usługi.
                        </p>
                        <div class="recommendations__item-author-info">
                            <span class="recommendations__item-description-quote-container">
                                <svg class="recommendations__item-description-quote" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M176 32H64C28.7 32 0 60.7 0 96v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56H56c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136H56c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56H64c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216zM448 32H336c-35.3 0-64 28.7-64 64v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56h-16c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136h-16c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56h-96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216z"/></svg>
                            </span>
                            <span class="recommendations__item-author-profession">Specjalista fizjologii żywienia człowieka</span>
                            <span class="recommendations__item-author">mgr inż. Tobiasz Wilk</span>
                            <div class="recommendations__item-awward">
                                <svg class="recommendations__item-awward-icon recommendations__item-awward-icon--yellow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M370.5 138.9l-50.2-7.3-22.5-45.5c-4-8.1-15.7-8.2-19.7 0l-22.5 45.5-50.2 7.3c-9 1.3-12.6 12.4-6.1 18.8l36.3 35.4-8.6 50c-1.5 8.9 7.9 15.8 16 11.6l44.9-23.6 44.9 23.6c8 4.2 17.5-2.6 16-11.6l-8.6-50 36.3-35.4c6.7-6.4 3-17.5-6-18.8zm-60.3 44.4l5.2 30.6-27.4-14.4-27.5 14.4 5.2-30.6-22.2-21.6 30.7-4.5 13.7-27.8 13.7 27.8 30.7 4.5-22.1 21.6zM448 64V12c0-6.6-5.4-12-12-12H140c-6.6 0-12 5.4-12 12v52H12C5.4 64 0 69.4 0 76v61.6C0 199.7 68.1 272 160.7 285.7c29.4 60.7 73.7 90.3 111.3 96.9V480h-86c-14.4 0-26 11.7-26 26.1 0 3.3 2.7 5.9 6 5.9h244c3.3 0 6-2.6 6-5.9 0-14.4-11.6-26.1-26-26.1h-86v-97.4c37.7-6.6 81.9-36.2 111.3-96.9C508 272 576 199.6 576 137.6V76c0-6.6-5.4-12-12-12H448zM32 137.6V96h96v24c0 51.8 7 94.9 18.5 130.2C77.9 232.5 32 178 32 137.6zM288 352c-72 0-128-104-128-232V32h256v88c0 128-56 232-128 232zm256-214.4c0 40.4-46 94.9-114.5 112.6C441 214.9 448 171.8 448 120V96h96v41.6z"/></svg>
                                <span class="recommendations__item-awward-title">Autor książek o zdrowiu</span>
                            </div>
                        </div>
                    </div>
                    <div class="recommendations__item-image-container">
                        <img src="{{ url('/images/rekomendacje/1.png') }}" class="recommendations__item-image">
                    </div>
                </li>
                {{--                <li class="recommendations__item">--}}
                {{--                    <div class="recommendations__item-container">--}}
                {{--                        <p class="recommendations__item-description">--}}
                {{--                            Realizacja wykonana zgodnie z założeniami. Od roku cieszę się darmową energią płynącą z instalacji fotowoltaicznej.--}}
                {{--                        </p>--}}
                {{--                        <div class="recommendations__item-author-info">--}}
                {{--                                <span class="recommendations__item-description-quote-container">--}}
                {{--                                    <svg class="recommendations__item-description-quote" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M176 32H64C28.7 32 0 60.7 0 96v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56H56c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136H56c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56H64c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216zM448 32H336c-35.3 0-64 28.7-64 64v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56h-16c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136h-16c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56h-96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216z"/></svg>--}}
                {{--                                </span>--}}
                {{--                            <span class="recommendations__item-author">Paweł Kowalski</span>--}}
                {{--                            <span class="recommendations__item-author-profession">Klient indywidualny</span>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="recommendations__item-image-container">--}}
                {{--                        <img src="images/rekomendacje/1.png" class="recommendations__item-image">--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                {{--                <li class="recommendations__item">--}}
                {{--                    <div class="recommendations__item-container">--}}
                {{--                        <p class="recommendations__item-description">--}}

                {{--                        </p>--}}
                {{--                        <div class="recommendations__item-author-info">--}}
                {{--                                <span class="recommendations__item-description-quote-container">--}}
                {{--                                    <svg class="recommendations__item-description-quote" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M176 32H64C28.7 32 0 60.7 0 96v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56H56c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136H56c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56H64c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216zM448 32H336c-35.3 0-64 28.7-64 64v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56h-16c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136h-16c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56h-96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216z"/></svg>--}}
                {{--                                </span>--}}
                {{--                            <span class="recommendations__item-author">Grzegorz Bień</span>--}}
                {{--                            <span class="recommendations__item-author-profession">Projektant wzornictwa przemysłowego</span>--}}
                {{--                            <span class="recommendations__item-awward">--}}
                {{--                                    <svg class="recommendations__item-awward-icon recommendations__item-awward-icon--yellow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M370.5 138.9l-50.2-7.3-22.5-45.5c-4-8.1-15.7-8.2-19.7 0l-22.5 45.5-50.2 7.3c-9 1.3-12.6 12.4-6.1 18.8l36.3 35.4-8.6 50c-1.5 8.9 7.9 15.8 16 11.6l44.9-23.6 44.9 23.6c8 4.2 17.5-2.6 16-11.6l-8.6-50 36.3-35.4c6.7-6.4 3-17.5-6-18.8zm-60.3 44.4l5.2 30.6-27.4-14.4-27.5 14.4 5.2-30.6-22.2-21.6 30.7-4.5 13.7-27.8 13.7 27.8 30.7 4.5-22.1 21.6zM448 64V12c0-6.6-5.4-12-12-12H140c-6.6 0-12 5.4-12 12v52H12C5.4 64 0 69.4 0 76v61.6C0 199.7 68.1 272 160.7 285.7c29.4 60.7 73.7 90.3 111.3 96.9V480h-86c-14.4 0-26 11.7-26 26.1 0 3.3 2.7 5.9 6 5.9h244c3.3 0 6-2.6 6-5.9 0-14.4-11.6-26.1-26-26.1h-86v-97.4c37.7-6.6 81.9-36.2 111.3-96.9C508 272 576 199.6 576 137.6V76c0-6.6-5.4-12-12-12H448zM32 137.6V96h96v24c0 51.8 7 94.9 18.5 130.2C77.9 232.5 32 178 32 137.6zM288 352c-72 0-128-104-128-232V32h256v88c0 128-56 232-128 232zm256-214.4c0 40.4-46 94.9-114.5 112.6C441 214.9 448 171.8 448 120V96h96v41.6z"/></svg>--}}
                {{--                                    <span class="recommendations__item-awward-title">Pierwszy Polak z nagrodą Red Dot Design</span>--}}
                {{--                                </span>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="recommendations__item-image-container">--}}
                {{--                        <img src="images/rekomendacje/1.png" class="recommendations__item-image">--}}
                {{--                    </div>--}}
                {{--                </li>--}}
            </ul>
        </div>
    </section>

    {{--    <h1>Hello, {{ $active_page }}</h1>--}}
    {{--    <p>Home content</p>--}}

    {{--    <a href="{{ url('') }}">home</a>--}}
    {{--    <a href="{{ url('fotowoltaika') }}">fotowoltaika</a>--}}

    {{--    @if ($active_page === 'home')--}}
    {{--        Aktywny home--}}
    {{--    @elseif ($active_page === 'fotowoltaika')--}}
    {{--        Aktywny fotowoltaika--}}
    {{--    @endif--}}
@endsection
