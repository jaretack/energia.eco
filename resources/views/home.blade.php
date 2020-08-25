@extends('layouts.app')

@section('title', 'Energia eko czyli panele słoneczne, solarne oraz folie grzewcze dla Twojego domu i firmy. Energia.eco')

@section('content')
<main>
    <section class="header" role="banner">
        <div class="header__container">
            <div class="header__content">
                <h1 class="header__title">Postaw na eko energię korzystaj z darów natury</h1>
                <svg class="header__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="345" height="345" viewBox="0 0 345 345">
                    <defs>
                        <filter id="Ellipse_1" x="90" y="90" width="165" height="165" filterUnits="userSpaceOnUse">
                            <feOffset input="SourceAlpha"/>
                            <feGaussianBlur stdDeviation="15" result="blur"/>
                            <feFlood flood-color="#cc2020" flood-opacity="0.161"/>
                            <feComposite operator="in" in2="blur"/>
                            <feComposite in="SourceGraphic"/>
                        </filter>
                    </defs>
                    <g id="Energia eko" data-name="Header image" transform="translate(-873 -326)">
                        <g id="solar" transform="translate(48)">
                            <g transform="matrix(1, 0, 0, 1, 825, 326)" filter="url(#Ellipse_1)">
                                <circle id="Ellipse_1-2" data-name="Ellipse 1" cx="37.5" cy="37.5" r="37.5" transform="translate(135 135)" fill="#cc2020"/>
                            </g>
                            <g id="solar-panel" transform="translate(979.035 484.001)">
                                <path id="Path_9" data-name="Path 9" d="M34.256,1.566A1.9,1.9,0,0,0,32.373,0H5.061A1.9,1.9,0,0,0,3.177,1.566C-.227,21.63-.033,20.395-.033,20.624A1.9,1.9,0,0,0,1.877,22.5H35.555a1.893,1.893,0,0,0,1.91-1.863c0-.239.2.993-3.209-19.07ZM15.192,3.749h7.051l.572,5.625h-8.2Zm-4.4,15H4.133l1.113-6.562h6.211Zm.957-9.375H5.723l.954-5.625h5.636Zm1.923,9.375.668-6.562H23.1l.668,6.562Zm11.452-15h5.636l.954,5.625H25.69Zm1.527,15-.668-6.562H32.19L33.3,18.749Z" transform="translate(0 0)" fill="#fff" opacity="0.4"/>
                                <path id="Path_10" data-name="Path 10" d="M92.246,86.5l-2.812,0V84.625h-7.5v1.887l-2.812,0a.938.938,0,0,0-.937.938v1.86a.937.937,0,0,0,.938.938l13.125-.015a.937.937,0,0,0,.938-.937v-1.86A.937.937,0,0,0,92.246,86.5ZM89.209,64H82.158l-.572,5.625h8.2Zm9.468,5.625L97.723,64H92.086l.57,5.625Zm-8.609,2.812H81.3L80.631,79h10.1Zm-17.855,0L71.1,79h6.654l.669-6.562ZM79.281,64H73.645l-.954,5.625h6.021Zm19.874,8.437H92.944L93.612,79h6.657Z" transform="translate(-66.967 -60.251)" fill="#fff"/>
                            </g>
                        </g>
                        <g id="plug">
                            <g id="Ellipse_3" data-name="Ellipse 3" transform="translate(873 461)" fill="none" stroke="#cc2020" stroke-width="1">
                                <circle cx="37.5" cy="37.5" r="37.5" stroke="none"/>
                                <circle cx="37.5" cy="37.5" r="37" fill="none"/>
                            </g>
                            <g id="plug-2" data-name="plug" transform="translate(899 484)">
                                <path id="Path_3" data-name="Path 3" d="M77.125,0A1.875,1.875,0,0,0,75.25,1.875v7.5H79v-7.5A1.875,1.875,0,0,0,77.125,0ZM65.875,0A1.875,1.875,0,0,0,64,1.875v7.5h3.75v-7.5A1.875,1.875,0,0,0,65.875,0Z" transform="translate(-60.25)" fill="#cc2020" opacity="0.4"/>
                                <path id="Path_4" data-name="Path 4" d="M22.5,160.938v1.875a.938.938,0,0,1-.937.938h-.937v1.875a9.379,9.379,0,0,1-7.5,9.187v5.813H9.375v-5.812a9.379,9.379,0,0,1-7.5-9.187V163.75H.938A.938.938,0,0,1,0,162.813v-1.875A.938.938,0,0,1,.938,160H21.563A.938.938,0,0,1,22.5,160.938Z" transform="translate(0 -150.625)" fill="#cc2020"/>
                            </g>
                        </g>
                        <g id="heat">
                            <g id="Ellipse_4" data-name="Ellipse 4" transform="translate(1143 461)" fill="none" stroke="#cc2020" stroke-width="1">
                                <circle cx="37.5" cy="37.5" r="37.5" stroke="none"/>
                                <circle cx="37.5" cy="37.5" r="37" fill="none"/>
                            </g>
                            <g id="thermometer-three-quarters" transform="translate(1156 484)">
                                <path id="Path_5" data-name="Path 5" d="M31,16.318V6.563a6.562,6.562,0,1,0-13.125,0v9.756a8.438,8.438,0,1,0,13.125,0ZM24.438,26.25a4.68,4.68,0,0,1-2.812-8.426V6.563a2.813,2.813,0,0,1,5.625,0V17.824a4.68,4.68,0,0,1-2.812,8.426Z" fill="#cc2020" opacity="0.4"/>
                                <path id="Path_6" data-name="Path 6" d="M117.618,142.063a2.813,2.813,0,1,1-3.75-2.643V128.938a.938.938,0,0,1,1.875,0V139.42A2.8,2.8,0,0,1,117.618,142.063Z" transform="translate(-90.368 -120.5)" fill="#cc2020"/>
                            </g>
                        </g>
                        <g id="scroll">
                            <g id="Ellipse_5" data-name="Ellipse 5" transform="translate(1008 326)" fill="none" stroke="#cc2020" stroke-width="1">
                                <circle cx="37.5" cy="37.5" r="37.5" stroke="none"/>
                                <circle cx="37.5" cy="37.5" r="37" fill="none"/>
                            </g>
                            <g id="scroll-2" data-name="scroll" transform="translate(1027 349)">
                                <path id="Path_1" data-name="Path 1" d="M91.184,5.625V22.5H77.121a.937.937,0,0,0-.937.938v1.875a4.688,4.688,0,0,1-9.375,0V3.809A3.809,3.809,0,0,0,63,0H85.559A5.631,5.631,0,0,1,91.184,5.625Z" transform="translate(-59.309 0)" fill="#cc2020" opacity="0.4"/>
                                <path id="Path_2" data-name="Path 2" d="M3.75,0A3.75,3.75,0,0,0,0,3.75V6.562A.937.937,0,0,0,.937,7.5H7.5V3.808A3.809,3.809,0,0,0,3.75,0Zm7.5,30h.938c-.152,0-.3-.008-.449-.022C11.578,29.992,11.415,30,11.25,30Zm25.312-7.5H17.812a.938.938,0,0,0-.937.938v1.875A4.687,4.687,0,0,1,12.187,30h18.75A6.563,6.563,0,0,0,37.5,23.434.938.938,0,0,0,36.562,22.5Z" fill="#cc2020"/>
                            </g>
                        </g>
                        <g id="air">
                            <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(1008 596)" fill="none" stroke="#cc2020" stroke-width="1">
                                <circle cx="37.5" cy="37.5" r="37.5" stroke="none"/>
                                <circle cx="37.5" cy="37.5" r="37" fill="none"/>
                            </g>
                            <g id="air-conditioner" transform="translate(1029 619)">
                                <path id="Path_7" data-name="Path 7" d="M72.906,145.344a2.344,2.344,0,0,1-2.344,2.344H70.2a2.416,2.416,0,0,1-2.419-1.969,2.277,2.277,0,0,1,1.28-2.43.962.962,0,0,0,.566-.857V141.4a.943.943,0,0,0-1.255-.889A5.13,5.13,0,0,0,64.979,146a5.3,5.3,0,0,0,5.319,4.5h.265a5.156,5.156,0,0,0,5.156-5.156V135.5H72.906Zm12.974-6.709a.943.943,0,0,0-1.255.889v1.032a.962.962,0,0,0,.566.857,2.277,2.277,0,0,1,1.28,2.43,2.417,2.417,0,0,1-2.418,1.969h-.365a2.344,2.344,0,0,1-2.344-2.344V135.5H78.531v7.969a5.156,5.156,0,0,0,5.156,5.156h.265a5.3,5.3,0,0,0,5.319-4.5A5.13,5.13,0,0,0,85.88,138.635ZM64,128v1.875H90.25V128Z" transform="translate(-60.25 -120.5)" fill="#cc2020" opacity="0.4"/>
                                <path id="Path_8" data-name="Path 8" d="M31.875,0h-30A1.875,1.875,0,0,0,0,1.875V11.25a1.875,1.875,0,0,0,1.875,1.875h30A1.875,1.875,0,0,0,33.75,11.25V1.875A1.875,1.875,0,0,0,31.875,0ZM30,9.375H3.75V7.5H30Z" fill="#cc2020"/>
                            </g>
                        </g>
                        <g id="lines">
                            <line id="Line_1" data-name="Line 1" x2="40" transform="translate(957.5 498.5)" fill="none" stroke="#cc2020" stroke-width="2"/>
                            <line id="Line_2" data-name="Line 2" x2="40" transform="translate(1093.5 498.5)" fill="none" stroke="#cc2020" stroke-width="2"/>
                            <line id="Line_3" data-name="Line 3" y1="40" transform="translate(1045.5 546.5)" fill="none" stroke="#cc2020" stroke-width="2"/>
                            <line id="Line_4" data-name="Line 4" y1="40" transform="translate(1045.5 410.5)" fill="none" stroke="#cc2020" stroke-width="2"/>
                        </g>
                    </g>
                </svg>

                <p class="header__intro">W czasach których żyjemy i wszechobecnym zanieczyszczeniu środowiska naturalnego ekologiczna energia coraz bardziej zyskuje na popularności. Korzystając z niej dbamy nie tylko o planetę ale również zdrowie nasze, naszych bliskich oraz wszystkich organizmów żywych znajdujących się na naszej planecie.</p>
                <div class="header__buttons-container">
                    <a class="button scroll-to scroll-to" href="#contact">Zamów bezpłatną wycenę</a>
                    <a class="button button--blue scroll-to" href="#contact">Chcę dofinansowanie</a>
                </div>
{{--                <div class="home-calculator">--}}
{{--                    <span class="home-calculator__text">Ile wynosi Twój rachunek za prąd?</span>--}}
{{--                    <input type="text" class="home-calculator__field" value="700">--}}
{{--                    <span class="home-calculator__currency">zł</span>--}}

{{--                    <div class="home-calculator__check-type">--}}
{{--                        <label class="radio-button">--}}
{{--                            <span class="radio-button__title">miesięczny</span>--}}
{{--                            <input type="radio" checked="checked" name="radio">--}}
{{--                            <span class="radio-button__checkmark"></span>--}}
{{--                        </label>--}}
{{--                        <label class="radio-button">--}}
{{--                            <span class="radio-button__title">dwumiesięczny</span>--}}
{{--                            <input type="radio" name="radio">--}}
{{--                            <span class="radio-button__checkmark"></span>--}}
{{--                        </label>--}}
{{--                    </div>--}}

{{--                    <button class="button button--white" type="submit">Sprawdź ile oszczędzisz</button>--}}
{{--                    <div class="home-calculator__invest">--}}
{{--                        <svg class="icon icon--height-30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M432 256c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16zm128-32h-29.5c-11.1-25.3-28.7-46.9-50.5-63.4V96h-16c-30.3 0-57.8 10.1-80.9 26.2.4-3.4.9-6.7.9-10.2C384 50.1 333.9 0 272 0S160 50.1 160 112c0 9.7 1.6 18.9 4 27.9C115 159.7 78 203 67.2 256H56c-14.8 0-26.5-13.5-23.5-28.8C34.7 215.8 45.4 208 57 208h1c3.3 0 6-2.7 6-6v-20c0-3.3-2.7-6-6-6-28.5 0-53.9 20.4-57.5 48.6C-3.9 258.8 22.7 288 56 288h8c0 52.2 25.4 98.1 64 127.3V496c0 8.8 7.2 16 16 16h112c8.8 0 16-7.2 16-16v-48h64v48c0 8.8 7.2 16 16 16h112c8.8 0 16-7.2 16-16v-80.9c11.7-9 22.4-19.3 31.3-31.1H560c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16zM272 32c44.2 0 80 35.8 80 80 0 5.5-.6 10.8-1.6 16H224c-10.1 0-19.9 1.2-29.5 3-1.6-6.1-2.5-12.4-2.5-19 0-44.2 35.8-80 80-80zm272 320h-48.7c-17 22.4-17 24.1-47.3 47.3V480h-80v-64H240v64h-80v-80.7c-64.9-49-64-93.5-64-111.3 0-70.6 57.4-128 128-128h161.7c16.9-13.5 33.2-26.5 62.3-30.8v47.3c39.7 30.1 44 39.3 61.6 79.5H544v96z"/></svg>--}}
{{--                        <p class="text-small">oszczędzisz<br>--}}
{{--                            <b style="font-size: 15px;">125 000 zł!</b>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <section class="eco-energy">
        <h2 class="eco-energy__title">Ekologiczna energia</h2>
        <p class="eco-energy__intro">Eko energia to balans między naturą a nowoczesnością. Korzystasz z ciepłej wody i darmowego ogrzewania jednocześnie dbając o środowisko naszej planety. Zadbaj o przyszłość swoich dzieci, następnych pokoleń, a przede wszystkim popraw stan swoich finansów korzystając z naszych ekologicznych rozwiązań.</p>
        <div class="eco-energy__container container">
            <div class="eco-energy__box">
                <h3 class="eco-energy__box-title">Energia z paneli słonecznych</h3>
                <svg class="icon icon--height-30 icon--green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M320,32a32,32,0,0,0-64,0v96h64Zm48,128H16A16,16,0,0,0,0,176v32a16,16,0,0,0,16,16H32v32A160.07,160.07,0,0,0,160,412.8V512h64V412.8A160.07,160.07,0,0,0,352,256V224h16a16,16,0,0,0,16-16V176A16,16,0,0,0,368,160ZM128,32a32,32,0,0,0-64,0v96h64Z"/></svg>
                <p class="eco-energy__box-text">Wykorzystaj zasoby naturalne naszej planety jednocześnie dbając o jakość powietrza. Ciesz się darmową energią ze słońca wykorzystując moc fotonów konwertowanych w energię elektryczną w wyniku zjawiska fotowoltaicznego. Ogranicz rachunki za prąd do minimum i korzystaj z urządzeń elektrycznych do woli.</p>
            </div>
            <div class="eco-energy__box">
                <h3 class="eco-energy__box-title">Ogrzewanie podłogowe folią grzewczą</h3>
                <svg class="icon icon--height-30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M64,152.25V112A16,16,0,0,0,48,96H16A16,16,0,0,0,0,112v40.25A218.65,218.65,0,0,0,56.48,299,154.12,154.12,0,0,1,96,402.41V464a16,16,0,0,0,16,16h32a16,16,0,0,0,16-16V402.41a218.44,218.44,0,0,0-56.42-146.69A154.3,154.3,0,0,1,64,152.25ZM391.58,255.72A154.3,154.3,0,0,1,352,152.25V112a16,16,0,0,0-16-16H304a16,16,0,0,0-16,16v40.25A218.65,218.65,0,0,0,344.48,299,154.12,154.12,0,0,1,384,402.41V464a16,16,0,0,0,16,16h32a16,16,0,0,0,16-16V402.41A218.44,218.44,0,0,0,391.58,255.72ZM208,152.25V48a16,16,0,0,0-16-16H160a16,16,0,0,0-16,16V152.25A218.65,218.65,0,0,0,200.48,299,154.12,154.12,0,0,1,240,402.41V464a16,16,0,0,0,16,16h32a16,16,0,0,0,16-16V402.41a218.44,218.44,0,0,0-56.42-146.69A154.3,154.3,0,0,1,208,152.25Z"/></svg>
                <p class="eco-energy__box-text">Sprawdzony, skuteczny, bezobsługowy sposób ogrzewania budynków. Nieduże koszta instalacji i zero serwisów sprawia, że folia grzewcza to najlepszy oraz jeden z najtańszych sposobów ogrzewania. Połącz maty grzewcze z instalacją fotowoltaiczną i w jeszcze większym stopniu zadbaj o swoje finanse.</p>
            </div>
            <div class="eco-energy__box">
                <h3 class="eco-energy__box-title">Ogrzewanie za pomocą pompy ciepła</h3>
                <svg class="icon icon--height-30 icon--blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path d="M216,424a40,40,0,0,1-40,40h-6.22c-20,0-38.19-13.88-41.28-33.61-2.88-18.41,6.92-34.22,21.84-41.47,5.73-2.78,9.66-8.25,9.66-14.63V356.67a16.1,16.1,0,0,0-21.42-15.17A87.55,87.55,0,0,0,80.7,435.24C86.26,479.82,126.55,512,171.48,512H176a88,88,0,0,0,88-88V256H216ZM437.42,309.5A16.1,16.1,0,0,0,416,324.67v17.62c0,6.38,3.93,11.85,9.66,14.63,14.92,7.25,24.72,23.06,21.84,41.47C444.41,418.12,426.2,432,406.23,432H400a40,40,0,0,1-40-40V256H312V392a88,88,0,0,0,88,88h4.53c44.92,0,85.21-32.18,90.77-76.76A87.55,87.55,0,0,0,437.42,309.5ZM64,128v32H512V128Z" class="fa-secondary"/><path d="M544,0H32A32,32,0,0,0,0,32V192a32,32,0,0,0,32,32H544a32,32,0,0,0,32-32V32A32,32,0,0,0,544,0ZM512,160H64V128H512Z" class="fa-primary"/></svg>
                <p class="eco-energy__box-text">Ogrzewanie wody i domu pompą ciepła to rozwiązanie płynące z naturalnych zasobów naszej planety. Kompleksowość zastosowania, czyli w zimę ogrzewanie a w lato chłodzenie pomieszczeń oraz ciepła woda. Wykorzystaj energię słońca zakumulowaną w glebie, powietrzu oraz wodzie.</p>
            </div>
        </div>
    </section>
    <section class="eco-energy-benefits">
        <h2 class="eco-energy-benefits__title">Korzyści płynące z eko energii</h2>
        <p class="eco-energy-benefits__intro">Głównie decydujemy się na ekologiczną energię ze względów finansowych, ale warto pamiętać, że decydując się na eko energię poprawiamy jakości życia na naszej planecie. Większość naszych rozwiązań jest bezobsługowa i bezawaryjna oszczędzasz nie tylko pieniądze ale również czas, który możesz spędzić z rodziną.</p>
        <div class="eco-energy-benefits__container container">
            <div class="eco-energy-benefits__box">
                <h3 class="eco-energy-benefits__box-title">Ekologia</h3>
                <svg class="icon icon--height-30 icon--white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M511.56 208.08c-2.31-21.37-14.25-40.99-32.74-53.79-2.9-2.01-5.86-3.97-8.92-5.75 11.79-47.63-7.42-74.79-19.43-86.06-12.19-12.91-39.35-32.1-87.03-20.39-1.75-3.04-3.71-6-5.71-8.9C344.88 14.7 325.27 2.76 303.91.44c-20.99-2.32-41.35 4.58-57.25 19.33-8.36 7.76-13.94 16.88-20.02 26.77-3.03 4.87-5.92 9.81-8.82 14.86-17.59-11.82-36.95-16.28-55.26-12.69-20.14 3.99-37.76 17.6-49.55 38.29-16.53 28.84-14.31 58.55-10.95 84.12-10.32-.94-20.64.48-30.19 4.44-17.9 7.47-31.24 23.2-36.58 43.14-4.08 15.21-4.4 32.64-.94 47.81 2.53 10.88 6.42 20.64 10.23 30.09 2.62 6.56 5.3 13.11 7.17 19.86 2.12 7.64 1.81 12.85 1.34 14.2-12.31 34.06-11.61 66.68 1.03 91.89L7.31 469.39c-9.75 9.75-9.75 25.56 0 35.31 4.87 4.86 11.28 7.3 17.66 7.3s12.78-2.44 17.66-7.3l46.63-46.63c24.9 12.83 57.12 13.43 92.02.79 1.34-.5 6.58-.83 14.22 1.34 6.77 1.88 13.31 4.57 19.89 7.2 9.45 3.77 19.21 7.69 30.09 10.2 6.95 1.61 14.41 2.4 21.86 2.4 8.82 0 17.71-1.12 25.94-3.32 19.99-5.36 35.73-18.72 43.19-36.65 3.93-9.51 5.39-19.78 4.4-30.12 25.72 3.43 55.35 5.58 84.13-10.93 20.74-11.83 34.33-29.45 38.29-49.59 3.62-18.27-.87-37.67-12.66-55.21 5.27-3.05 10.73-6.27 16.68-9.95 8.08-4.97 17.21-10.59 24.95-18.96 14.75-15.89 21.61-36.2 19.3-57.19zm-54.44 24.66c-3.27 3.55-8.92 7.02-16.84 11.9-8.14 5.04-16.53 9.76-25.32 14.72l-36.95 21.14 23.14 28.17c2.84 3.41 5.3 6.38 7.7 9.43 4.3 5.53 9.07 13.83 7.48 22-1.62 8.09-9.11 13.89-15.09 17.32-14.44 8.25-30.75 8.09-54.16 5.01-8.51-1.12-17.03-1.96-26.66-2.92l-66.7-6.98 33.77 48.66c1.09 1.51 1.84 2.46 2.4 3.45 3.46 6.05 4.33 12.25 2.34 17.04-2.21 5.32-7.39 7.69-11.35 8.76-7.64 2.06-17.12 2.28-24.67.5-7.23-1.67-14.9-4.74-22.98-7.98-8.2-3.29-16.43-6.53-24.85-8.87-5.55-1.56-14.19-3.43-23.73-3.43-6.36 0-13.13.84-19.61 3.16-14.01 5.08-26.74 6.99-37.57 6.06L336.5 210.84c9.75-9.75 9.75-25.56 0-35.31-9.75-9.72-25.56-9.72-35.31 0L92.4 384.31c-1-10.96.83-23.71 5.75-37.35 5.52-15.25 2.93-31.97-.22-43.31-2.34-8.45-5.58-16.66-8.89-24.87-3.24-8.11-6.3-15.75-7.98-22.99-1.71-7.56-1.53-17.03.53-24.7 1.06-3.94 3.43-9.1 8.73-11.3 4.83-2.03 11.01-1.15 16.99 2.28 1.03.61 2 1.37 3.55 2.48l48.61 33.97-7.02-67.18c-.94-9.51-1.78-17.96-2.9-26.41-3.09-23.37-3.24-39.72 5.02-54.16 3.43-6 9.2-13.48 17.28-15.07 8.26-1.67 16.5 3.16 22.05 7.48 3.21 2.49 6.36 5.11 9.98 8.15l27.6 22.76 21.02-36.78c5.02-8.9 9.79-17.35 16.06-27.53 3.68-5.97 7.14-11.62 10.7-14.92 7.17-6.63 14.69-7.44 19.46-6.81 7.7.83 14.69 5.25 19.64 12.41 1.81 2.6 3.68 5.24 4.89 8.01 7.77 17.77 28.19 26.89 47.52 21.23 14.13-4.13 33.4-6.5 45.87 6.64 12.16 11.47 9.76 30.73 5.64 44.87-5.64 19.35 3.49 39.79 21.23 47.53 2.84 1.25 5.43 3.09 7.98 4.88 7.2 4.99 11.63 11.96 12.44 19.64.58 4.96-.17 12.33-6.81 19.48z"/></svg>
                <p class="eco-energy-benefits__box-text">Korzystaj z Odnawialnych Źródeł Energiii i ograniczaj emisję CO2 do atmosfery naszej planety. Wspieraj środowisku naturalne zwiększając jakość powietrza oraz realnie wpływając na zdrowie wszystkich organizmów żywych zamieszkujących Ziemię.</p>
            </div>
            <div class="eco-energy-benefits__box">
                <h3 class="eco-energy-benefits__box-title">Oszczędność</h3>
                <svg class="icon icon--height-30 icon--white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M560 224h-29.5c-11.1-25.3-28.7-46.9-50.5-63.4V96h-16c-30.3 0-57.8 10.1-81 26.2.4-3.4 1-6.7 1-10.2C384 50.1 333.9 0 272 0S160 50.1 160 112c0 9.7 1.5 19 3.8 27.9C114.9 159.8 78 203.1 67.2 256H56c-14.8 0-26.5-13.5-23.5-28.8C34.7 215.8 45.4 208 57 208h1c3.3 0 6-2.7 6-6v-20c0-3.3-2.7-6-6-6-28.5 0-53.9 20.4-57.5 48.6C-3.9 258.8 22.7 288 56 288h8c0 52.2 25.4 98.1 64 127.3V496c0 8.8 7.2 16 16 16h112c8.8 0 16-7.2 16-16v-48h64v48c0 8.8 7.2 16 16 16h112c8.8 0 16-7.2 16-16v-80.9c11.7-9 22.4-19.3 31.3-31.1H560c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16zM272 48c35.3 0 64 28.7 64 64 0 5.6-.9 10.9-2.3 16H224c-4.5 0-8.8 1-13.3 1.3-1.6-5.5-2.7-11.3-2.7-17.3 0-35.3 28.7-64 64-64zm256 288h-40.6c-23.5 31.1-19.4 27.9-55.4 55.4V464h-48v-64H224v64h-48v-72.6c-14.6-11-64-39.8-64-103.4 0-61.8 50.2-112 112-112h167.4c9.5-7.6 22.2-19.3 40.6-26.2v34.7c45.4 34.4 44.2 35.2 67.1 87.5H528v64zm-96-80c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16z"/></svg>
                <p class="eco-energy-benefits__box-text">Korzystając z naszych ekologicznych rozwiązań oszczędzasz nie tylko pieniądze ale również czas. Współpracując z nami czynisz inwestycję, która zwraca się już od pierwszego dnia. Podnosisz wartość nieruchomości i sprawiasz, że jest ona ekologiczna i przyjazna środowisku.</p>
            </div>
            <div class="eco-energy-benefits__box">
                <h3 class="eco-energy-benefits__box-title">Niezależność</h3>
                <svg class="icon icon--height-30 icon--white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M570.24 247.41L512 199.52V104a8 8 0 0 0-8-8h-32a8 8 0 0 0-7.95 7.88v56.22L323.87 45a56.06 56.06 0 0 0-71.74 0L5.76 247.41a16 16 0 0 0-2 22.54L14 282.25a16 16 0 0 0 22.53 2L64 261.69V448a32.09 32.09 0 0 0 32 32h128a32.09 32.09 0 0 0 32-32V344h64v104a32.09 32.09 0 0 0 32 32h128a32.07 32.07 0 0 0 32-31.76V261.67l27.53 22.62a16 16 0 0 0 22.53-2L572.29 270a16 16 0 0 0-2.05-22.59zM463.85 432H368V328a32.09 32.09 0 0 0-32-32h-96a32.09 32.09 0 0 0-32 32v104h-96V222.27L288 77.65l176 144.56z"/></svg>
                <p class="eco-energy-benefits__box-text">Uwolnij się od stale rosnących cen energii elektrycznej oraz wzrastających kosztów energii elektrycznej oraz wzrastających kosztów ogrzewania wody i budynku. Bądź ekologiczny, korzystaj z naszych rozwiązań energetycznych na miarę XXI wieku.</p>
            </div>
        </div>
    </section>
    <section class="our-services">
        <h2 class="our-services__title">Nasze usługi</h2>
        <p class="our-services__intro">Zajmujemy się kompleksową obsługą w zakresie projektowaniem, instalacją, dokumentacją oraz pomocą prawną dotyczącą Odnawialnych Źródeł Energii. Nasi wykwalifikowani eksperci pomogą Państwu dobrać optymalne rozwiązania które sprawdzą się zarówno w domu jak i firmie.</p>
        <div class="our-services__container container">
            <div class="our-services__box">
                <h3 class="our-services__box-title">
                    <a href="#" class="our-services__box-title-link">Fotowoltaika</a>
                </h3>
                <img class="our-services__box-image" src="{{ url('/images/services/fotowoltaika.webp') }}" alt="#">
                <div class="our-services__box-icon-container">
                    <svg class="icon icon--height-30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path d="M585.2 26.74A32.42 32.42 0 0 0 553.06 0H86.93a32.42 32.42 0 0 0-32.14 26.74C-3.32 369.16 0 348.08 0 352c0 17.32 14.29 32 32.6 32h574.77c18.23 0 32.51-14.56 32.59-31.79.04-4.08 3.35 16.95-54.76-325.47zM259.83 64h120.33l9.77 96H250.06zm-75.17 256H71.09l19-112h106zM201 160H98.24l16.29-96h96.19zm32.82 160l11.4-112h149.6l11.4 112zM429.27 64h96.19l16.29 96H439zm26.06 256l-11.4-112h106l19 112z" class="fa-secondary"></path><path d="M432 448l-48 .05V416H256v32.21l-48 .05a16 16 0 0 0-16 16V496a16 16 0 0 0 16 16l224-.26a16 16 0 0 0 16-16V464a16 16 0 0 0-16-16zM380.16 64H259.83l-9.77 96h139.87zm161.59 96l-16.29-96h-96.19l9.73 96zm-146.93 48H245.17l-11.4 112h172.45zM90.1 208l-19 112h113.56l11.41-112zM210.72 64h-96.19l-16.29 96H201zM549.9 208h-106l11.4 112h113.61z" class="fa-primary"></path></svg>
                </div>
                <p class="our-services__box-text">Zainwestuj w instalację fotowoltaiczną i przestań się martwić wysokimi rachunkami za prąd. Ciągłe podwyżki za energię elektryczną nie będą już Cię dotyczyć.</p>
                <div class="our-services__box-buttons">
                    <a class="button" href="#">dowiedz się więcej</a>
                    <a class="button button--blue" href="#">Chcę dofinansowanie</a>
                </div>
            </div>
            <div class="our-services__box">
                <h3 class="our-services__box-title">
                    <a href="#" class="our-services__box-title-link">Farmy fotowoltaiczne</a>
                </h3>
                <img class="our-services__box-image" src="{{ url('/images/services/farma-fotowoltaiczna.webp') }}" alt="#">
                <div class="our-services__box-icon-container">
                    <svg class="icon icon--height-30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path d="M585.2 26.74A32.42 32.42 0 0 0 553.06 0H86.93a32.42 32.42 0 0 0-32.14 26.74C-3.32 369.16 0 348.08 0 352c0 17.32 14.29 32 32.6 32h574.77c18.23 0 32.51-14.56 32.59-31.79.04-4.08 3.35 16.95-54.76-325.47zM259.83 64h120.33l9.77 96H250.06zm-75.17 256H71.09l19-112h106zM201 160H98.24l16.29-96h96.19zm32.82 160l11.4-112h149.6l11.4 112zM429.27 64h96.19l16.29 96H439zm26.06 256l-11.4-112h106l19 112z" class="fa-secondary"></path><path d="M432 448l-48 .05V416H256v32.21l-48 .05a16 16 0 0 0-16 16V496a16 16 0 0 0 16 16l224-.26a16 16 0 0 0 16-16V464a16 16 0 0 0-16-16zM380.16 64H259.83l-9.77 96h139.87zm161.59 96l-16.29-96h-96.19l9.73 96zm-146.93 48H245.17l-11.4 112h172.45zM90.1 208l-19 112h113.56l11.41-112zM210.72 64h-96.19l-16.29 96H201zM549.9 208h-106l11.4 112h113.61z" class="fa-primary"></path></svg>
                    <svg class="icon icon--height-30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path d="M585.2 26.74A32.42 32.42 0 0 0 553.06 0H86.93a32.42 32.42 0 0 0-32.14 26.74C-3.32 369.16 0 348.08 0 352c0 17.32 14.29 32 32.6 32h574.77c18.23 0 32.51-14.56 32.59-31.79.04-4.08 3.35 16.95-54.76-325.47zM259.83 64h120.33l9.77 96H250.06zm-75.17 256H71.09l19-112h106zM201 160H98.24l16.29-96h96.19zm32.82 160l11.4-112h149.6l11.4 112zM429.27 64h96.19l16.29 96H439zm26.06 256l-11.4-112h106l19 112z" class="fa-secondary"></path><path d="M432 448l-48 .05V416H256v32.21l-48 .05a16 16 0 0 0-16 16V496a16 16 0 0 0 16 16l224-.26a16 16 0 0 0 16-16V464a16 16 0 0 0-16-16zM380.16 64H259.83l-9.77 96h139.87zm161.59 96l-16.29-96h-96.19l9.73 96zm-146.93 48H245.17l-11.4 112h172.45zM90.1 208l-19 112h113.56l11.41-112zM210.72 64h-96.19l-16.29 96H201zM549.9 208h-106l11.4 112h113.61z" class="fa-primary"></path></svg>
                </div>
                <p class="our-services__box-text">Posiadasz duży kapitał i nie wiesz w co zainwestować. Park solarny to pewna mało ryzykowna inwestycja która przez wiele, wiele lat będzie przynosić Tobie zyski.</p>
                <div class="our-services__box-buttons">
                    <a class="button" href="#">dowiedz się więcej</a>
                </div>
            </div>
            <div class="our-services__box">
                <h3 class="our-services__box-title">
                    <a href="#" class="our-services__box-title-link">Folie grzewcze</a>
                </h3>
                <img class="our-services__box-image" src="{{ url('/images/services/folia-grzewcza.webp') }}" alt="#">
                <div class="our-services__box-icon-container">
                    <svg class="icon icon--height-30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path d="M544 96v288H304a16 16 0 0 0-16 16v32a80 80 0 0 1-160 0V65A65 65 0 0 0 63 0h385a96.1 96.1 0 0 1 96 96z" class="fa-secondary"/><path d="M64 0A64 64 0 0 0 0 64v48a16 16 0 0 0 16 16h112V65A65 65 0 0 0 64 0zm128 512h16c-2.59 0-5.14-.13-7.66-.37-2.75.24-5.53.37-8.34.37zm432-128H304a16 16 0 0 0-16 16v32a80 80 0 0 1-80 80h320a112 112 0 0 0 112-112.06A16 16 0 0 0 624 384z" class="fa-primary"/></svg>
                </div>
                <p class="our-services__box-text">Nie masz już siły, czasu i ochoty na ciągłe dokładanie do pieca? Maty na podczerwień to świetne bezobsługowe rozwiązanie które sprawdzi się również w Twoim domu.</p>
                <div class="our-services__box-buttons">
                    <a class="button" href="#">dowiedz się więcej</a>
                </div>
            </div>
            <div class="our-services__box">
                <h3 class="our-services__box-title">
                    <a href="#" class="our-services__box-title-link">Pompy ciepła</a>
                </h3>
                <img class="our-services__box-image" src="{{ url('/images/services/pompa-ciepla.webp') }}" alt="#">
                <div class="our-services__box-icon-container">
                    <svg class="icon icon--height-30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path d="M216,424a40,40,0,0,1-40,40h-6.22c-20,0-38.19-13.88-41.28-33.61-2.88-18.41,6.92-34.22,21.84-41.47,5.73-2.78,9.66-8.25,9.66-14.63V356.67a16.1,16.1,0,0,0-21.42-15.17A87.55,87.55,0,0,0,80.7,435.24C86.26,479.82,126.55,512,171.48,512H176a88,88,0,0,0,88-88V256H216ZM437.42,309.5A16.1,16.1,0,0,0,416,324.67v17.62c0,6.38,3.93,11.85,9.66,14.63,14.92,7.25,24.72,23.06,21.84,41.47C444.41,418.12,426.2,432,406.23,432H400a40,40,0,0,1-40-40V256H312V392a88,88,0,0,0,88,88h4.53c44.92,0,85.21-32.18,90.77-76.76A87.55,87.55,0,0,0,437.42,309.5ZM64,128v32H512V128Z" class="fa-secondary"/><path d="M544,0H32A32,32,0,0,0,0,32V192a32,32,0,0,0,32,32H544a32,32,0,0,0,32-32V32A32,32,0,0,0,544,0ZM512,160H64V128H512Z" class="fa-primary"/></svg>
                </div>
                <p class="our-services__box-text">Bezobsługowość, ekologia i niskie koszta eksplatacyjne to synonim pomp ciepła. Zainwestuj i ciesz się tanim ogrzewaniem i ciepłą wodą.</p>
                <div class="our-services__box-buttons">
                    <a class="button" href="#">dowiedz się więcej</a>
                </div>
            </div>
        </div>
        <div class="our-services__contact">
            <a class="button button--white scroll-to" href="#contact">Zamów bezpłatną wycenę</a>
            <span class="our-services__contact-text">lub zadzwoń</span> <a class="our-services__contact-number" href="tel:+48788150744">788 150 744</a>
        </div>
    </section>
    <div class="partners">
        <div class="partners__container">
            <ul class="partners__list">
                <li class="partners__item">
                    <img class="partners__item-logo" src="{{ url('/images/partners/identyfikacja-firm.webp') }}" alt="Identyfikacja Firm">
                </li>
                <li class="partners__item">
                    <img class="partners__item-logo" src="{{ url('/images/partners/kpt.webp') }}" alt="Kielecki Park Technologiczny">
                </li>
                <li class="partners__item">
                    <img class="partners__item-logo" src="{{ url('/images//partners/pcde.webp') }}" alt="Polskie Centrum Doradztwa Energetycznego">
                </li>
                <li class="partners__item">
                    <img class="partners__item-logo" src="{{ url('/images/partners/rogy.webp') }}" alt="Rogy">
                </li>
                <li class="partners__item">
                    <img class="partners__item-logo" src="{{ url('/images/partners/wasabi-sushi.webp') }}" alt="Wasabi Sushi">
                </li>
                <li class="partners__item">
                    <img class="partners__item-logo" src="{{ url('/images/partners/top-klima.webp') }}" alt="Top Klima">
                </li>
            </ul>
        </div>
    </div>
    <section class="recommendations">
        @include('components.top-recommendation')
        <div class="recommendations__container container">
            <h2 class="recommendations__title">Inni o nas</h2>
            <div class="recommendations__list">
                <div class="recommendations__item">
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
                        </div>
                    </div>
                    <div class="recommendations__item-image-container">
                        <img src="{{ url('/images/rekomendacje/armand-naporowski.webp') }}" class="recommendations__item-image" alt="Armand Naporowski">
                    </div>
                </div>
                <div class="recommendations__item">
                    <div class="recommendations__item-container">
                        <div class="ratings">
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                        </div>
                        <p class="recommendations__item-description">
                            Jeżeli ktoś twierdzi, że czegoś nie da się zrobić to oni na pewno to wykonają. Solidna firma dużych możliwości dla której nie ma rzeczy niewykonalnych.
                        </p>
                        <div class="recommendations__item-author-info">
                            <span class="recommendations__item-description-quote-container">
                                <svg class="recommendations__item-description-quote" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M176 32H64C28.7 32 0 60.7 0 96v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56H56c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136H56c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56H64c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216zM448 32H336c-35.3 0-64 28.7-64 64v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56h-16c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136h-16c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56h-96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216z"/></svg>
                            </span>
                            <span class="recommendations__item-author-profession">Zespół muzyczny</span>
                            <span class="recommendations__item-author">Duet We Dwoje</span>
                        </div>
                    </div>
                    <div class="recommendations__item-image-container">
                        <img src="{{ url('/images/rekomendacje/we-dwoje.webp') }}" class="recommendations__item-image" alt="Duet We Dwoje">
                    </div>
                </div>
                <div class="recommendations__item">
                    <div class="recommendations__item-container">
                        <div class="ratings">
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                            <span class="ratings__star"></span>
                        </div>
                        <p class="recommendations__item-description">
                            Idealny partner do realizacji każdego projektu biznesowego. Dla nich klient to człowiek i partner a nie tylko cyferka.
                        </p>
                        <div class="recommendations__item-author-info">
                            <span class="recommendations__item-description-quote-container">
                                <svg class="recommendations__item-description-quote" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M176 32H64C28.7 32 0 60.7 0 96v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56H56c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136H56c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56H64c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216zM448 32H336c-35.3 0-64 28.7-64 64v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56h-16c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136h-16c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56h-96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216z"/></svg>
                            </span>
                            <span class="recommendations__item-author-profession">Specjalista fizjologii żywienia człowieka</span>
                            <span class="recommendations__item-author">mgr inż. Tobiasz Wilk</span>
                        </div>
                    </div>
                    <div class="recommendations__item-image-container">
                        <img src="{{ url('/images/rekomendacje/tobiasz-wilk.webp') }}" class="recommendations__item-image" alt="Tobiasz Wilk">
                    </div>
                </div>
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
            </div>
        </div>
    </section>
{{--    <div class="overlay"></div>--}}
{{--    <div class="modal">--}}
{{--        <div class="modal__container">--}}
{{--            <div class="modal__header">--}}
{{--                <h5 class="modal__title">Zamów bezpłatną wycenę</h5>--}}
{{--                <button type="button" class="modal__close"></button>--}}
{{--            </div>--}}
{{--            <div class="modal__content">--}}
{{--                <input class="input" type="phone" placeholder="Podaj numer telefonu" value="">--}}
{{--                <button class="button" type="button" href="#">Zamawiam kontakt</button>--}}
{{--                <div class="modal__terms">--}}
{{--                    <span class="modal__terms-icon"></span>--}}
{{--                    <p>Zapoznałem się z Polityką Prywatności i wyrażam zgodę na kontakt przez PCDE Sp. z o.o. w celu przedstawienia mi oferty handlowej.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</main>
{{--    @if ($active_page === 'home')--}}
{{--        Aktywny home--}}
{{--    @elseif ($active_page === 'fotowoltaika')--}}
{{--        Aktywny fotowoltaika--}}
{{--    @endif--}}
@endsection
