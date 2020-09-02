@extends('layouts.app-presentation')

@section('title', 'Oferta współpracy')

@section('content')
    <div class="presentation">
        <img class="presentation__logo" src="{{ url('/images/columbus-energy.webp') }}" alt="">
        <h1 class="presentation__title">Oferta współpracy</h1>

        <p class="presentation__intro">
            Dzień dobry,<br><br>
            Energia.eco to balans między naturą a nowoczesnośćią, spójność i harmonia. Budując brand ważne, by nie zaburzyć spójności. Z racji tego, że jesteśmy perfekcjonistami przykładamy dużą wagę do rzeczy, na które inni nawet nie zwracają uwagi. Nie zależy nam na szybkim zarobku, ale rzetelnych zaplanowanych działaniach, które nie od razu, ale w niedalekiej przyszłości będą dawały efekty.
        </p>

        <div class="presentation__about">
            <h2 class="presentation__about-title">Kim jesteśmy?</h2>
            <div class="presentation__about-item">
                <div class="presentation__about-item-info">
                    <div class="presentation__about-item-img-container">
                        <img class="presentation__about-item-img" src="{{ url('/images/bartosz-podlewski-prezentacja.webp') }}" alt="">
                    </div>
                    <h2 class="presentation__about-item-name">Bartosz Podlewski</h2>
                    <span class="presentation__about-item-position">Handlowiec</span>
                </div>
                <p class="presentation__about-item-text">
                    Człowiek ciekawy świata i nowych technologii. Życie uważa za jedną wielką podróż, w której cały czas trzeba eksplorować nowe tereny i możliwości. Bez rozwoju, współpracy i zgody nie ma przyszłości. Doświadczenie głównie w handlu w branżach:
                    ubezpieczeniowej, nieruchomości i fotowoltaicznej. Uważa, że tylko ciężką pracą można osiągnąć sukces, zachowując przy tym balans we wszystkich sferach życia i zdrowy rozsądek. Odpowiedzialność głównie za sprzedaż ,marketing bezpośredni i dalsze budowanie zespołu.
                </p>
            </div>
            <div class="presentation__about-item">
                <div class="presentation__about-item-info">
                    <div class="presentation__about-item-img-container">
                        <img class="presentation__about-item-img" src="{{ url('/images/jaroslaw-zdyb-prezentacja.webp') }}" alt="">
                    </div>
                    <h2 class="presentation__about-item-name">Jarosław Zdyb</h2>
                    <span class="presentation__about-item-position">Full-stack Developer<br>& SEO Specialist</span>
                </div>
                <p class="presentation__about-item-text">
                    Nazywam się Jarosław Zdyb, mam 32 lata i mieszkam w Kielcach. Od około 10 lat zajmuję się programowaniem aplikacji internetowych. Głównie zajmuje się Front-endem i jego optymalizacją pod wyszukiwarki internetowe (tzw. SEO). Wiele lat styczności z programowaniem aplikacji internetowych pozwala mi na pisanie ich zgodnie z najnowszymi standardami oraz trendami. Będę odpowiedzialny za wszelkie działania w internecie czyli pozycjonowanie, reklamę oraz budowanie wizerunku w sieci. Jeżeli wszystko pójdzie zgodnie z planem i będziemy mieli na to odpowiedni budżet zajmę się budową aplikacji dla sprzedawców która przyśpieszy oraz ułatwi proces sprzedaży naszych produktów.
                </p>
            </div>
        </div>

        <div class="presentation__client">
            <h2 class="presentation__client-title">Pozyskiwanie klienta</h2>
            <p class="presentation__client-intro">Dzięki dobrze przemyślanym działaniom opartych na marketingu pośrednim i bezpośrednim, dotrzemy do dużej grupy zainteresowanych. Ciągłe rozszerzanie bazy klientów oraz pozytywne opinie pozwolą na dalszą ekspansję rozwój i zwiększenie sprzedaży. Podejście do każdego zainteresowanego będzie indywidualne, co pozwala spersonalizować ofertę i jak najszybciej zamknąć sprzedaż.</p>
            <div class="presentation__client-container">
                <div class="presentation__client-item">
                    <svg class="icon icon--height-30 icon--green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z"/></svg>
                    <h3 class="presentation__client-item-title">Pozycjonowanie (SEO)</h3>
                    <p class="presentation__client-item-text">Podjęcie odpowiednich kroków, aby wypozycjonować stronę w internecie.</p>
                </div>
                <div class="presentation__client-item">
                    <svg class="icon icon--height-30 icon--green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M101.42 352h16.94c6.81 0 12.88-4.32 15.12-10.75l7.38-21.25h70.29l7.38 21.25A16 16 0 0 0 233.65 352h16.94c11.01 0 18.73-10.85 15.12-21.25L212 176.13A24.004 24.004 0 0 0 189.33 160h-26.66c-10.22 0-19.32 6.47-22.67 16.12L86.31 330.75C82.7 341.15 90.42 352 101.42 352zM176 218.78L194.48 272h-36.96L176 218.78zM352 352c9.93 0 19.4-2.02 28.02-5.68 2.94 3.41 7.13 5.68 11.98 5.68h16c8.84 0 16-7.16 16-16V176c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v36.42c-7.54-2.69-15.54-4.42-24-4.42-39.7 0-72 32.3-72 72s32.3 72 72 72zm0-96c13.23 0 24 10.77 24 24s-10.77 24-24 24-24-10.77-24-24 10.77-24 24-24zM464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zm0 336H48V112h416v288z"/></svg>
                    <h3 class="presentation__client-item-title">Reklama w internecie (SEM)</h3>
                    <p class="presentation__client-item-text">Opracowanie kampanii reklamowej skierowanej głównie na Google, Facebook</p>
                </div>
                <div class="presentation__client-item">
                    <svg class="icon icon--height-30 icon--green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M192 0C85.903 0 0 86.014 0 192c0 71.117 23.991 93.341 151.271 297.424 18.785 30.119 62.694 30.083 81.457 0C360.075 285.234 384 263.103 384 192 384 85.903 297.986 0 192 0zm0 464C64.576 259.686 48 246.788 48 192c0-79.529 64.471-144 144-144s144 64.471 144 144c0 54.553-15.166 65.425-144 272zm-80-272c0-44.183 35.817-80 80-80s80 35.817 80 80-35.817 80-80 80-80-35.817-80-80z"/></svg>
                    <h3 class="presentation__client-item-title">Działania lokalne</h3>
                    <p class="presentation__client-item-text">Liczne działania na okolicznych wsiach i miasteczkach w celu promocji OZE i spółki. Zorganizowane spotkania z lokalnymi społecznościami i promocja na festynach. Mini stoiska przy lokalnych sklepach.
                    </p>
                </div>
            </div>
        </div>

        <div class="presentation__benefits">
            <h2 class="presentation__benefits-title">Korzyści</h2>
            <p class="presentation__benefits-intro">Przerzucenie odpowiedzialności i ciężaru związanego ze sprzedażą i rozwojem firmy na nas w ramach współpracy. Liczne leady, promocja firmy, zwiększona sprzedaż oraz wzorowy kontakt z kontrahentami to główne korzyści dla Państwa firmy. Ocieplenie wizerunku i budowanie Państwa marki poprzez dopracowanie szczegółów na każdym etapie procesowania umowy z klientem.</p>
            <div class="presentation__benefits-container">
                <div class="presentation__benefits-item">
                    <svg class="icon icon--height-30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M117.65 277.65c6.25 6.25 16.38 6.25 22.63 0L192 225.94l84.69 84.69c6.25 6.25 16.38 6.25 22.63 0L409.54 200.4l29.49 29.5c15.12 15.12 40.97 4.41 40.97-16.97V112c0-8.84-7.16-16-16-16H363.07c-21.38 0-32.09 25.85-16.97 40.97l29.5 29.49-87.6 87.6-84.69-84.69c-6.25-6.25-16.38-6.25-22.63 0l-74.34 74.34c-6.25 6.25-6.25 16.38 0 22.63l11.31 11.31zM496 400H48V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16z"/></svg>
                    <h3 class="presentation__benefits-item-title">Zwiększona sprzedaż</h3>
                    <p class="presentation__client-item-text">Dzięki naszym działaniom i ciężkiej pracy będzie widoczny wzrost sprzedaży. Nasz pomysł na promocję OZE skierowany początkowo regionalnie, później na Polskę będzie owocował dobrymi wynikami sprzedażowymi. Działania podejmowane przez nas będą dążyły do zmaksymalizowania zysku i sprzedaży coraz większej ilości Państwa produktów.
                    </p>
                </div>
                <div class="presentation__benefits-item">
                    <svg class="icon icon--height-30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M384 336c-40.6 0-47.6-1.5-72.2 6.8-17.5 5.9-36.3 9.2-55.8 9.2s-38.3-3.3-55.8-9.2c-24.6-8.3-31.5-6.8-72.2-6.8C57.3 336 0 393.3 0 464v16c0 17.7 14.3 32 32 32h448c17.7 0 32-14.3 32-32v-16c0-70.7-57.3-128-128-128zm80 128H48c0-21.4 8.3-41.5 23.4-56.6C86.5 392.3 106.6 384 128 384c41.1 0 41-1.1 56.8 4.2 23 7.8 47 11.8 71.2 11.8 24.2 0 48.2-4 71.2-11.8 15.8-5.4 15.7-4.2 56.8-4.2 44.1 0 80 35.9 80 80zM256 320c88.4 0 160-71.6 160-160S344.4 0 256 0 96 71.6 96 160s71.6 160 160 160zm0-272c61.8 0 112 50.2 112 112s-50.2 112-112 112-112-50.2-112-112S194.2 48 256 48z"/></svg>
                    <h3 class="presentation__benefits-item-title">Dostarczanie leadów</h3>
                    <p class="presentation__benefits-item-text">
                        Poprzez liczne działania marketingowe w sieci po kilku miesiącach będziemy pozyskiwać coraz większą ilość leadów. W przypadku jeżeli pozyskamy leady z terenu na którym nie mamy handlowca możemy wymieniać się leadami bądź przekazywać je do Państwa firmy otrzymując z dopiętej umowy jakąś prowizję.
                    </p>
                </div>
                <div class="presentation__benefits-item">
                    <svg class="icon icon--height-30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 608 512"><path d="M416 320h-64c-17.67 0-32 14.33-32 32v128c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V352c0-17.67-14.33-32-32-32zm-16 144h-32v-96h32v96zm176-272h-64c-17.67 0-32 14.33-32 32v256c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V224c0-17.67-14.33-32-32-32zm-16 272h-32V240h32v224zM256 192h-64c-17.67 0-32 14.33-32 32v256c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V224c0-17.67-14.33-32-32-32zm-16 272h-32V240h32v224zM96 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-96c0-17.67-14.33-32-32-32zM80 464H48v-64h32v64zM64 256c26.51 0 48-21.49 48-48 0-4.27-.74-8.34-1.78-12.28l101.5-101.5C215.66 95.26 219.73 96 224 96c6.15 0 11.97-1.26 17.38-3.37l95.34 76.27c-.35 2.33-.71 4.67-.71 7.1 0 26.51 21.49 48 48 48s48-21.49 48-48c0-2.43-.37-4.76-.71-7.09l95.34-76.27C532.03 94.74 537.85 96 544 96c26.51 0 48-21.49 48-48S570.51 0 544 0s-48 21.49-48 48c0 2.43.37 4.76.71 7.09l-95.34 76.27c-5.4-2.11-11.23-3.37-17.38-3.37s-11.97 1.26-17.38 3.37L271.29 55.1c.35-2.33.71-4.67.71-7.1 0-26.51-21.49-48-48-48s-48 21.49-48 48c0 4.27.74 8.34 1.78 12.28l-101.5 101.5C72.34 160.74 68.27 160 64 160c-26.51 0-48 21.49-48 48s21.49 48 48 48z"/></svg>
                    <h3 class="presentation__benefits-item-title">Zdobywanie rynku</h3>
                    <p class="presentation__benefits-item-text">Wszystkie nasze działania będą dążyły do maksymalizacji zysków. Każdy najmniejszy szczegół chcemy dopracować perfekcyjnie, by budować dobrą ekskluzywną markę. Zbudowanie rozpoznawalności w internecie jak i w lokalnych miejscowościach chcemy przenieść na wyniki sprzedażowe.</p>
                </div>
            </div>
        </div>

        <div class="presentation__we-have">
            <h2 class="presentation__we-have-title">Co już posiadamy?</h2>
            <p class="presentation__we-have-intro">Przychodząc do Państwa przychodzimy z konkretnym pomysłem jak ma funkcjonować nasza sprzedaż. Przygotowaliśmy cały plan sprzedażowy i działania marketingowe, które mamy do zrealizowania. Strona internetowa jest już gotowa. Mamy też polecenia i rekomendację znanych osób z regionu.</p>
            <ul class="presentation__we-have-container">
                <li class="presentation__we-have-item">
                    <div class="presentation__we-have-item-top"><b>strona internetowa</b>&nbsp;(prosta, funkcjonalna, przygotowana pod SEO)</div>
                    <div class="presentation__we-have-item-bottom">
                        <div style="margin-top: 10px; margin-bottom: 10px;">podgląd strony: <a href="http://energiaeco.herokuapp.com" target="_blank">kliknij tutaj, aby zobaczyć</a></div>
                        aktualnie wrzuciłem podgląd na inną domenę, dostępna jest tylko strona główna
                    </div>
                </li>
                <li class="presentation__we-have-item"><b>przyjazna domena internetowa</b>&nbsp;  (<a href="http://energia.eco" target="_blank">energia.eco</a>)</li>
                <li class="presentation__we-have-item"><b>rekomendacje od znanych osób</b>&nbsp;(m.in. od Mariusza Jurasika)</li>
                <li class="presentation__we-have-item"><b>inkubacja w KPT</b>&nbsp;(Kieleckim Parku Technologicznym)</li>
                <li class="presentation__we-have-item"><b>materiały marketingowe</b>&nbsp;(ulotki, plakaty, banery)</li>
                <li class="presentation__we-have-item"><b>doświadczenie w handlu</b>&nbsp;(Bartosz Podlewski)</li>
                <li class="presentation__we-have-item"><b>doświadczenie w IT</b>&nbsp;(Jarosław Zdyb)</li>
            </ul>
        </div>

        <div class="presentation__plan">
            <h2 class="presentation__plan-title">Plan działania</h2>
            <p class="presentation__plan-intro">Krok po kroku chcemy iść do przodu, rozwijając naszą sprzedaż i maksymalizować zysk. Wszystkie działania marketingowe w sieci i w życiu rzeczywistym, które zaplanowaliśmy zbliżą nas tylko do celu i pozwolą trzymać się obranego kursu. Większość detali na, których się skupimy są niezauważalne przez konkurencję.</p>
            <div class="presentation__plan-container">
                <div class="presentation__plan-item">
                    <span class="presentation__plan-number">1</span>
                    <h3 class="presentation__plan-item-title">Pozycjonowanie i reklama (Kielce, województwo świętokrzyskie)</h3>
                    <p class="presentation__plan-item-text">Wypozycjonowanie strony na interesujące nas frazy oraz reklama w internecie głównie nastawione na Kielce oraz  województwo świętokrzyskie.</p>
                </div>
                <div class="presentation__plan-item">
                    <span class="presentation__plan-number">2</span>
                    <h3 class="presentation__plan-item-title">Sprzedaż (Kielce, województwo świętokrzyskie)</h3>
                    <p class="presentation__plan-item-text">Dzięki licznym kontaktom, marketingowi pośredniemu i bezpośredniemu chcemy zmaksymalizować sprzedaż w woj. Świętokrzyskim i zdominować ten rynek. Liczne spotkania z mieszkańcami, festyny i bezpośredni kontakt z potencjalnymi klientami poszerzy zakres działania  jak i pozwoli osiągnąć odpowiednie rezultaty sprzedażowe.</p>
                </div>
                <div class="presentation__plan-item">
                    <span class="presentation__plan-number">3</span>
                    <h3 class="presentation__plan-item-title">Pozycjonowanie i reklama (sąsiednie województwa)</h3>
                    <p class="presentation__plan-item-text">Wypozycjonowanie strony na interesujące nas frazy oraz reklama w internecie głównie nastawione na kolejne województwo sąsiadujące z województwem świętokrzyskim.</p>
                </div>
                <div class="presentation__plan-item">
                    <span class="presentation__plan-number">4</span>
                    <h3 class="presentation__plan-item-title">Rozwój firmy w sąsiednich województwach</h3>
                    <p class="presentation__plan-item-text">Po wielu realizacjach i sprzedażach produktów OZE na terenie województwa świętokrzyskiego naturalną koleją rzeczy jest ekspansja na województwa ościenne. Będziemy bazować na nowych handlowcach, zaprzyjaźnionych handlowcach z innych branż i sami realizować umowy z klientami. Ciągły rozwój i zwiększanie sprzedaży oraz coraz większa ekspansją w celu zdominowania rynku to kolejny krok w przód. Liczne materiały marketingowe takie jak : ulotki, banery, plakaty mają tylko pomóc w dalszej sprzedaży.</p>
                    <div class="presentation__client-container">
                        <div class="presentation__client-item">
                            <svg class="icon icon--height-30 icon--green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M320,32a32,32,0,0,0-64,0v96h64Zm48,128H16A16,16,0,0,0,0,176v32a16,16,0,0,0,16,16H32v32A160.07,160.07,0,0,0,160,412.8V512h64V412.8A160.07,160.07,0,0,0,352,256V224h16a16,16,0,0,0,16-16V176A16,16,0,0,0,368,160ZM128,32a32,32,0,0,0-64,0v96h64Z"></path></svg>
                            <h3 class="presentation__client-item-title">Zatrudnienie handlowców</h3>
                            <p class="presentation__client-item-text">Liczne leady w różnych rejonach Polski, przełożą się na zwiększoną liczbę handlowców i sprzedaż. W każdym województwie będziemy zmuszeni zawierać umowy współpracy. Zbudowana marka i brand pozwolą na łatwiejsze zadomowienie się firmy w różnych rejonach Polski i podjęcie współpracy z większa ilością osób.</p>
                        </div>
                        <div class="presentation__client-item">
                            <svg class="icon icon--height-30 icon--green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M320,32a32,32,0,0,0-64,0v96h64Zm48,128H16A16,16,0,0,0,0,176v32a16,16,0,0,0,16,16H32v32A160.07,160.07,0,0,0,160,412.8V512h64V412.8A160.07,160.07,0,0,0,352,256V224h16a16,16,0,0,0,16-16V176A16,16,0,0,0,368,160ZM128,32a32,32,0,0,0-64,0v96h64Z"></path></svg>
                            <h3 class="presentation__client-item-title">Działania marketingowe</h3>
                            <p class="presentation__client-item-text">Działania lokalne polegające na uczestnictwie w różnych festynach i dożynkach.
                                Bezpośredni kontakt z potencjalnymi klientami na mini stoiskach, kołach gospodyń wiejski lub spotkaniach w gminach. Spotkania z zaprzyjaźnionymi sołtysami w celu polecania potencjalnym klientom. Pełen marketing bezpośredni i pośredni.</p>
                        </div>
                    </div>
                </div>
                <div class="presentation__plan-item">
                    <span class="presentation__plan-number">5</span>
                    <h3 class="presentation__plan-item-title">Budowanie brandu o rozpoznawalności krajowej</h3>
                </div>
            </div>
        </div>

        <div class="presentation__want">
            <h2 class="presentation__want-title">Czego od Państwa oczekujemy?</h2>
            <p class="presentation__want-intro">Oczekujemy długofalowej i stabilnej współpracy w zakresie sprzedawania produktów OZE. Preferencyjnych warunków, które pomogą nam w dalszym rozwoju i konkurowaniu na rynku.
            </p>
            <div class="presentation__want-container">
                <div class="presentation__want-list">
                    <li class="presentation__want-item">wsparcia technicznego</li>
                    <li class="presentation__want-item">preferencyjnych warunków</li>
                    <li class="presentation__want-item">szybkich realizacji naszych klientów</li>
                    <li class="presentation__want-item">kompleksowej obsługi pozyskanych klientów*</li>
                </div>
            </div>
            <p class="presentation__want-text"><span>*</span> interesuje nas sprzedaż produktów tj. instalacje fotowoltaiczne, farmy fotowoltaiczne, pompy ciepła oraz folie grzewcze</p>
        </div>

        <div class="presentation__want">
            <h2 class="presentation__want-title">Podsumowanie</h2>
            <p class="presentation__want-intro">
                Postaraliśmy się w w dużym skrócie przedstawić nasz pomysł. Nie chcemy budować konkurencji dla Państwa firmy, nie posiadamy odpowiedniego budżetu oraz wiedzy technicznej pozwalającej na samodzielny rozwój firmy z branży eko energii. Jesteśmy otwarci na wszelkie propozycję współpracy w tym udziały w spółcę która niebawem powstanie.
                <br><br>
                Jeżeli zainteresowała Was nasza oferta, macie jakieś pytania - zapraszamy do kontaktu w celu rozwiania wątpliwości i być może umówienia spotkania na którym będziemy mogli szerzej przedstawić nasz pomysł oraz siebie.
                <br><br>
                <div class="presentation__signature">
                Z wyrazami szacunku<br>
                Bartosz Podlewski<br>
                Jarosław Zdyb
            </div>
            </p>
        </div>
    </div>
@endsection
