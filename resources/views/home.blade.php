@extends('layouts.master')

@section('content')
    <x-front.header></x-front.header>

    <!-- Masonry Cards -->

    <div class="max-w-7xl px-4 py-10 sm:px-6 lg:px-8 lg:py-16 mx-auto">
        <div class="flex items-start flex-wrap gap-8">
            <div class="flex-1 rounded-md shadow p-8 h-[365px] bg-gray-50">
                <h2 class="text-3xl font-semibold text-dark mb-4">Votre vision</h2>
                <p class="space-y-6 text-xl leading-9" >
                    Participer á la construction d'une société globale dans laquelle les rapports
                    humains seront privilégiés entre
                    les africains résident en Afrique et les diasporas africaines à travers le monde
                </p>
            </div>
            <div class="flex-1 rounded-md shadow p-8 h-[365px] bg-gray-50">
                <h2 class="text-3xl font-semibold text-dark mb-4">Votre Missoin</h2>
                <p class="space-y-6 text-xl leading-9" >
                    Œuvrer pour l'amélioration de la qualité de vie, le rapprochement des
                    communautés africaines á travers les secteurs de l'education et de
                    l'entrepreneuriat jeune,
                    la préservation de l'environnement, le renforcement de l'economie locale, la
                    promotion de la paix, le developpement du potentiel sportif et l'accès aux
                    services de base
                </p>
            </div>
        </div>
    </div>

    <!-- End Masonry Cards -->
    <x-front.our-missions></x-front.our-missions>

    <!-- Icon Blocks -->
    <div class="max-w-6xl px-4 py-10 sm:px-6 lg:px-8 lg:py-16 mx-auto">
        <div class="grid md:grid-cols-2 gap-6 lg:gap-12">
                <div class="space-y-6 lg:space-y-10">
                    <!-- Icon Block -->
                    <div class="flex">

                        <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>

                        <div class="ml-5 sm:ml-8">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800">
                                Education
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Rendre l’éducation accessible pour les couches défavorisées
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex">

                        <svg id="Layer_1" class="w-10 h-10" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 122.88 112.33">
                            <defs>
                                <style>
                                    .cls-1,
                                    .cls-2 {
                                        fill-rule: evenodd;
                                    }

                                    .cls-2 {
                                        fill: #d8453e;
                                    }
                                </style>
                            </defs>
                            <title>medical</title>
                            <path class="cls-1"
                                d="M15.09,8.48a7.6,7.6,0,0,1-1-3.08c-.07-1.7.8-3.11,2.71-4.31A7.9,7.9,0,0,1,18.3.37,5.67,5.67,0,0,1,25.53,8a6,6,0,0,1-5.38,3.64,6.75,6.75,0,0,1-5.06-3.11Z" />
                            <path class="cls-1"
                                d="M43.57,8.48a7.45,7.45,0,0,0,1-3.08c.07-1.7-.79-3.11-2.71-4.31A7.9,7.9,0,0,0,40.36.37,5.67,5.67,0,0,0,33.13,8a6,6,0,0,0,5.38,3.64,6.75,6.75,0,0,0,5.06-3.11Z" />
                            <path class="cls-1"
                                d="M102.74,4.26a20.14,20.14,0,0,1,4.92,39.67c0,1.37.09,1.24.15,3.46.11,3.85.23,7.94.23,11.31h0c0,25.13-4.4,53.63-40.84,53.63-13.52,0-23.42-6.48-30.35-15.52-8.17-10.66-12-25-12.73-35.91a35.48,35.48,0,0,1-6.4-6A84.69,84.69,0,0,1,9,42.4a4.62,4.62,0,0,1-.24-4.15l-.43-.83C2.47,26-1.36,13.43.46,8c.85-2.57,2.89-4.26,5.91-5.2A28.32,28.32,0,0,1,16,2a3.2,3.2,0,1,1-.33,6.4,22.39,22.39,0,0,0-7.38.53c-1,.31-1.59.67-1.73,1.09C5.25,13.81,8.83,24.34,14,34.5c.21.42.42.83.64,1.24a4.61,4.61,0,0,1,2.36,2,74.84,74.84,0,0,0,7.7,11.11,29.83,29.83,0,0,0,3.93,3.9l.47,0A25.36,25.36,0,0,0,33,49.24a70.59,70.59,0,0,0,8.13-11.36,4.62,4.62,0,0,1,2.34-2c5.42-10,9.34-20.78,8.54-25-.18-1-1-1.59-2.28-2a24.72,24.72,0,0,0-7.43-.81,3.2,3.2,0,0,1,0-6.4,30.17,30.17,0,0,1,9.47,1.14c3.41,1.15,5.85,3.25,6.54,6.9,1,5.5-3,17.68-8.91,28.7a4.65,4.65,0,0,1-.27,4.19,81.46,81.46,0,0,1-9.26,12.88A32.1,32.1,0,0,1,33.43,61c.69,9.32,4,21.28,10.79,30.15C49.51,98.08,57,103,67.19,103c28.18,0,31.57-23.56,31.57-44.33h0c0-4.35-.1-7.81-.19-11.06-.07-2.2-.13-2.84-.17-3.58a20.14,20.14,0,0,1,4.36-39.8Zm0,7.24a12.9,12.9,0,1,1-12.9,12.9,12.89,12.89,0,0,1,12.9-12.9Z" />
                            <path class="cls-2"
                                d="M62.52,50.17h8.14a2.77,2.77,0,0,1,2.76,2.76v9.4h9.4a2.77,2.77,0,0,1,2.76,2.76v8.14A2.77,2.77,0,0,1,82.82,76h-9.4v9.39a2.77,2.77,0,0,1-2.76,2.77H62.52a2.78,2.78,0,0,1-2.77-2.77V76H50.36a2.78,2.78,0,0,1-2.77-2.77V65.09a2.78,2.78,0,0,1,2.77-2.77h9.4V52.93a2.77,2.77,0,0,1,2.76-2.76Z" />
                        </svg>

                        <div class="ml-5 sm:ml-8">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800">
                                Assistance médicale
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Apporter une assistance médicale aux nécessiteux sur le continent africain
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex">
                        <svg class="w-10 h-10" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #000000;
                                }
                            </style>
                            <g>
                                <path class="st0"
                                    d="M264.144,416.889L14.642,205.12L0,222.38l249.532,211.798l0.034,0.03
          		c28.365,23.868,64.366,37.003,101.443,37.01h159.922v-22.638H351.01C319.292,448.581,288.402,437.322,264.144,416.889z" />
                                <path class="st0"
                                    d="M203.394,336.186l56.013,47.136c-2.07-10.412-6.623-21.543-15.617-31.812
          		c-6.968-7.966-21.928-24.401-39.924-44.533C203.397,316.698,203.21,326.524,203.394,336.186z" />
                                <path class="st0"
                                    d="M141.098,205.698c-9.717-8.664-18.354-16.682-25.496-23.824c6.923,10.704,13.333,20.425,22.882,32.494
          		C139.323,211.511,140.198,208.624,141.098,205.698z" />
                                <path class="st0"
                                    d="M194.91,251.657c-14.556-12.107-28.463-23.816-41.054-34.745c-0.893,4.133-1.785,8.371-2.64,12.729
          		c9.852,11.312,22.541,24.874,39.826,42.291C192.187,265.361,193.466,258.587,194.91,251.657z" />
                                <path class="st0"
                                    d="M330.506,424.022c-0.372-18.197-4.4-63.248-33.957-88.205c-27.911-23.568-59.254-49.094-88.812-73.532
          		c-0.912,7.576-1.751,15.587-2.46,23.838c1.938,1.92,3.889,3.841,5.929,5.836c40.044,39.253,71.222,70.09,74.808,113.228
          		C299.34,414.654,314.525,421.052,330.506,424.022z" />
                                <path class="st0"
                                    d="M143.198,285.524l41.136,34.617c0.946-9.032,2.205-19.405,3.886-30.746
          		c-12.943-14.635-26.625-30.327-39.594-45.689C146.277,257.298,144.327,271.497,143.198,285.524z" />
                                <path class="st0"
                                    d="M134.872,227.196c-20.23-24.656-37.018-46.956-43.656-60.473l5.58-6.683c-0.011-0.008-0.022-0.023-0.022-0.023
          		l6.676-8.266c0,0,17.463,16.742,42.478,39.05c4.013-11.837,8.547-23.936,13.682-35.975l9.5,3.586c0,0-5.555,17.357-11.623,42.605
          		c12.654,11.087,26.628,23.028,40.951,34.7c2.686-11.394,5.788-23.043,9.392-34.707l9.35,2.483c0,0-3.616,16.922-7.156,41.533
          		c15.355,12.174,30.777,23.681,45.052,33.132c61.016,40.431,102.772,82.721,107.136,147.785c20.744,0,66.91,0,109.11,0
          		c56.584,0,48.096-56.58,11.315-65.064c-24.809-5.731-56.685-18.895-56.685-18.895c-12.576-4.193-22.867-13.39-28.44-25.421
          		c0,0-1.373-2.902-3.679-7.824l-46.202,13.975c-5.049,1.522-10.378-1.335-11.904-6.376c-1.527-5.048,1.327-10.382,6.375-11.904
          		l43.526-13.165c-3.744-7.966-8.087-17.237-12.662-27.018l-43.172,13.058c-5.04,1.523-10.378-1.327-11.904-6.375
          		c-1.526-5.049,1.331-10.374,6.376-11.904l40.531-12.257c-4.313-9.256-8.607-18.475-12.575-27.041l-40.262,12.174
          		c-5.044,1.53-10.377-1.327-11.904-6.376c-1.522-5.04,1.328-10.373,6.372-11.896l37.715-11.409
          		c-5.404-11.77-9.335-20.485-10.374-23.186c-4.546-11.806-14.511-44.533-37.254-26.328
          		c-37.389,29.922-105.596,21.138-123.204-11.574c-13.202-24.52-5.66-50.924,0-71.672c4.519-16.585-18.869-42.441-35.844-19.81
          		c-12.002,16-113.171,135.806-113.171,135.806l100.457,84.537C127.228,257.77,130.544,243.151,134.872,227.196z" />
                            </g>
                        </svg>
                        <div class="ml-5 sm:ml-8">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 ">
                                Sport & Loisir
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Promouvoir les activités et infrastructures sportives dans les quartiers défavorisés
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                </div>
                <!-- End Col -->

                <div class="space-y-6 lg:space-y-10">
                    <!-- Icon Block -->
                    <div class="flex">
                        <svg fill="#000000" class="w-6 h-6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 457.862 457.862" xml:space="preserve">
                            <path id="XMLID_237_"
                                d="M299.796,330.976c-0.178-1.966-0.621-3.898-1.316-5.745l-25.749-68.372l3.609-23.873l-7.449-0.275
          	                             c-16.839-0.622-28.228-12.729-30.863-20.707l-23.391-70.816l40.018,65.324l0,0v0l0.001,0.002c3.08,5.025,8.59,8.466,14.881,8.698
          	                             c31.29,1.154,53.731,2.035,69.087,2.658c4.97,0.202,9.806-1.633,13.395-5.077c3.589-3.444,5.629-8.204,5.629-13.178
          	                             c0-9.876-7.816-17.981-17.685-18.341l-59.307-2.159l0,0l-36.24-59.156l42.789,41.158l5.008-33.132
          	                             c2.245-14.852-7.975-28.712-22.826-30.957l-47.956-7.249c-2.287-0.346-4.55-0.394-6.751-0.177l8.65-33.851
          	                             c5.243,12.551,16.72,22.141,31.152,24.323c21.985,3.323,42.503-11.805,45.826-33.791c3.324-21.985-11.805-42.502-33.79-45.826
          	                             c-20.386-3.082-39.499,9.706-44.823,29.11c-2.93-4.014-7.221-7.072-12.411-8.398L152.214,6.588
          	                             c-11.864-3.031-23.939,4.128-26.97,15.992l-6.281,24.58c-3.032,11.864,4.128,23.939,15.992,26.97l10.09,2.578
          	                             c-7.911,1.946-14.45,8.191-16.355,16.679l-27.934,124.485c-2.681,11.948,4.831,23.807,16.779,26.488l38.367,8.609
          	                             c5.256,1.179,10.493,0.385,14.941-1.891c0.146,2.184,0.621,4.383,1.462,6.529l27.002,68.866l-53.585,69.861
          	                             c-7.357,9.592-5.546,23.332,4.047,30.69c9.6,7.364,23.339,5.536,30.69-4.047l61.106-79.666c4.668-6.086,5.81-14.171,3.01-21.312
          	                             l-23.029-58.731c-0.416-1.061-0.234-2.264,0.477-3.155c0.711-0.891,1.843-1.335,2.971-1.164c1.142,0.173,2.102,0.949,2.509,2.03
          	                             l28.958,76.896l9.038,100.065c1.087,12.033,11.721,20.918,23.769,19.831c12.04-1.087,20.918-11.729,19.831-23.769L299.796,330.976z" />
                        </svg>
                        <div class="ml-5 sm:ml-8">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800">
                                Tourisme Africain
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Promouvoir le tourisme africain sur une base solidaire
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex">
                        <svg class="w-10 h-10" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 44H44" stroke="#000000" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M8 7.27273C8 7.27273 15 4 24 4C33 4 40 7.27273 40 7.27273V13H8V7.27273Z"
                                fill="#2F88FF" stroke="#000000" stroke-width="4" stroke-linejoin="round" />
                            <path d="M10 13V38" stroke="#000000" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M17 13V38" stroke="#000000" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M24 13V38" stroke="#000000" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M31 13V38" stroke="#000000" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M38 13V38" stroke="#000000" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <rect x="7" y="38" width="34" height="6" stroke="#000000"
                                stroke-width="4" stroke-linejoin="round" />
                        </svg>
                        <div class="ml-5 sm:ml-8">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 ">
                                Culture
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Promouvoir la culture, l’histoire, les valeurs traditionnelles et ancestrales
                                africaines
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-10 h-10">
                            <path
                                d="M21.721 12.752a9.711 9.711 0 00-.945-5.003 12.754 12.754 0 01-4.339 2.708 18.991 18.991 0 01-.214 4.772 17.165 17.165 0 005.498-2.477zM14.634 15.55a17.324 17.324 0 00.332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 00.332 4.647 17.385 17.385 0 005.268 0zM9.772 17.119a18.963 18.963 0 004.456 0A17.182 17.182 0 0112 21.724a17.18 17.18 0 01-2.228-4.605zM7.777 15.23a18.87 18.87 0 01-.214-4.774 12.753 12.753 0 01-4.34-2.708 9.711 9.711 0 00-.944 5.004 17.165 17.165 0 005.498 2.477zM21.356 14.752a9.765 9.765 0 01-7.478 6.817 18.64 18.64 0 001.988-4.718 18.627 18.627 0 005.49-2.098zM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 001.988 4.718 9.765 9.765 0 01-7.478-6.816zM13.878 2.43a9.755 9.755 0 016.116 3.986 11.267 11.267 0 01-3.746 2.504 18.63 18.63 0 00-2.37-6.49zM12 2.276a17.152 17.152 0 012.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0112 2.276zM10.122 2.43a18.629 18.629 0 00-2.37 6.49 11.266 11.266 0 01-3.746-2.504 9.754 9.754 0 016.116-3.985z" />
                        </svg>
                        <div class="ml-5 sm:ml-8">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                                Droit de l'homme
                            </h3>
                            <p class="mt-1 text-gray-600 ">
                                Aider au renforcement des capacités des citoyens dans la défense de leurs
                                droits et intérêts
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                </div>
                <!-- End Col -->
            </div>
    </div>
    <!-- End Icon Blocks -->

    <!-- Features -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-16 mx-auto">
        <!-- Grid -->
        <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
            <div>
                <img class="rounded-xl bg-contain" src="{{ asset('assets/images/association.jpeg') }}"
                    alt="Image Description">
            </div>
            <!-- End Col -->

            <div class="mt-5 sm:mt-10 lg:mt-0">
                <div class="space-y-6 sm:space-y-8">
                    <!-- Title -->
                    <div class="space-y-2 md:space-y-4">
                        <h2 class="font-bold text-3xl lg:text-4xl text-gray-800">
                            Diaspora en action
                        </h2>
                        <p class="text-base font-light text-gray-500 md:text-lg leading-7">Promouvoir auprès de ceux et
                            celles de la diaspora la culture du retour aux sources afin de contribuer au développement et à
                            la prospérité du continent africain.</p>
                    </div>
                    <!-- End Title -->

                    <!-- List -->
                    <ul role="list" class="space-y-2 sm:space-y-4">
                        <li class="flex space-x-3">
                            <!-- Solid Check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16"
                                height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                    fill="currentColor" fill-opacity="0.1" />
                                <path
                                    d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                    fill="currentColor" />
                            </svg>
                            <!-- End Solid Check -->

                            <span class="text-sm sm:text-base text-gray-500">
                                <span class="font-bold">Easy & fast</span> designing
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <!-- Solid Check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16"
                                height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                    fill="currentColor" fill-opacity="0.1" />
                                <path
                                    d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                    fill="currentColor" />
                            </svg>
                            <!-- End Solid Check -->

                            <span class="text-sm sm:text-base text-gray-500">
                                Powerful <span class="font-bold">features</span>
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <!-- Solid Check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16"
                                height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                    fill="currentColor" fill-opacity="0.1" />
                                <path
                                    d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                    fill="currentColor" />
                            </svg>
                            <!-- End Solid Check -->

                            <span class="text-sm sm:text-base text-gray-500">
                                User Experience Design
                            </span>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Features -->

    <!-- Features -->
    <div class="max-w-[85rem] px-4 py-16 sm:px-6 lg:px-8 mx-auto">
        <div class="relative p-6 md:p-16">
            <!-- Grid -->
            <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
                    <h2 class="text-2xl text-gray-800 font-bold sm:text-3xl mb-4">
                        ADAP-International œuvre à améliorer les conditions de travail dans les hôpitaux.
                    </h2>
                    <p class="text-base font-light text-gray-500 md:text-lg leading-7">Initiative de collecte et remise de
                        matériels médicaux aux hôpitaux</p>

                    <!-- Tab Navs -->
                    <nav class="grid gap-4 mt-5 md:mt-10" aria-label="Tabs" role="tablist">
                        <button type="button"
                            class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-left hover:bg-gray-200 p-4 md:p-5 rounded-xl active"
                            id="tabs-with-card-item-1" data-hs-tab="#tabs-with-card-1" aria-controls="tabs-with-card-1"
                            role="tab">
                            <span class="flex">
                                <svg class="flex-shrink-0 mt-2 h-6 w-6 md:w-7 md:h-7 hs-tab-active:text-blue-600 text-gray-800"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                                    <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg>
                                <span class="grow ml-6">
                                    <span
                                        class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800">Advanced
                                        tools</span>
                                    <span
                                        class="block mt-1 text-gray-800 ">Use
                                        Preline thoroughly thought and automated libraries to manage your businesses.</span>
                                </span>
                            </span>
                        </button>

                        <button type="button"
                            class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-left hover:bg-gray-200 p-4 md:p-5 rounded-xl "
                            id="tabs-with-card-item-2" data-hs-tab="#tabs-with-card-2" aria-controls="tabs-with-card-2"
                            role="tab">
                            <span class="flex">
                                <svg class="flex-shrink-0 mt-2 h-6 w-6 md:w-7 md:h-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z" />
                                </svg>
                                <span class="grow ml-6">
                                    <span
                                        class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200">Smart
                                        dashboards</span>
                                    <span
                                        class="block mt-1 text-gray-800">Quickly
                                        Preline sample components, copy-paste codes, and start right off.</span>
                                </span>
                            </span>
                        </button>

                        <button type="button"
                            class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-left hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-slate-900 dark:hover:bg-gray-700"
                            id="tabs-with-card-item-3" data-hs-tab="#tabs-with-card-3" aria-controls="tabs-with-card-3"
                            role="tab">
                            <span class="flex">
                                <svg class="flex-shrink-0 mt-2 h-6 w-6 md:w-7 md:h-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5zM6.374 1 4.168 8.5H7.5a.5.5 0 0 1 .478.647L6.78 13.04 11.478 7H8a.5.5 0 0 1-.474-.658L9.306 1H6.374z" />
                                </svg>
                                <span class="grow ml-6">
                                    <span
                                        class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200">Powerful
                                        features</span>
                                    <span
                                        class="block mt-1 text-gray-800 ">Reduce
                                        time and effort on building modern look design with Preline only.</span>
                                </span>
                            </span>
                        </button>
                    </nav>
                    <!-- End Tab Navs -->
                </div>
                <!-- End Col -->

                <div class="lg:col-span-6">
                    <div class="relative">
                        <!-- Tab Content -->
                        <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
                            <img class="shadow-xl shadow-gray-200 rounded-xl bg-cover h-auto"
                                src="{{ asset('assets/images/association.jpeg') }}" alt="Image Description">
                        </div>
                        <!-- End Tab Content -->

                        <!-- SVG Element -->
                        <div class="hidden absolute top-0 right-0 translate-x-20 md:block lg:translate-x-20">
                            <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor"
                                    stroke-width="10" stroke-linecap="round" />
                                <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor"
                                    stroke-width="10" stroke-linecap="round" />
                                <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor"
                                    stroke-width="10" stroke-linecap="round" />
                            </svg>
                        </div>
                        <!-- End SVG Element -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->

            <!-- Background Color -->
            <div class="absolute inset-0 grid grid-cols-12 w-full h-full">
                <div
                    class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full">
                </div>
            </div>
            <!-- End Background Color -->
        </div>
    </div>
    <!-- End Features -->

    <!-- Card Section -->
    <div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            <!-- Card -->
            <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition "
                href="#">
                <div class="p-4 md:p-5">
                    <div class="flex justify-center items-center">
                        <svg class="mt-1 shrink-0 w-6 h-6 text-gray-800 dark:text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
                        </svg>

                        <div class="grow ml-5">
                            <h3 class="group-hover:text-secondary font-semibold text-gray-800">
                                Nous rejoindre
                            </h3>
                            <p class="text-sm text-gray-500">
                                Pour une belle avanture humanitaire
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="group group-hover:shadow-2xl flex flex-col cursor-pointer justify-center items-center bg-secondary border shadow-sm rounded-xl hover:shadow-md transition "
                href="#">
                <div class="p-4 md:p-5">
                    <div class="flex justify-center items-center">
                        <svg class="mt-1 shrink-0 w-5 h-5 text-gray-800 dark:text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                            <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        </svg>

                        <div class="grow ml-5">
                            <h3 class="text-xl font-semibold text-white">
                                Nous soutenir
                            </h3>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="group flex flex-col justify-center items-center bg-white border shadow-sm rounded-xl hover:shadow-md transition "
                href="#">
                <div class="p-4 md:p-5">
                    <div class="flex justify-center items-center">
                        <svg class="mt-1 shrink-0 w-5 h-5 text-gray-800"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z" />
                        </svg>

                        <div class="grow ml-5">
                            <h3
                                class="group-hover:text-secondary font-semibold text-gray-800 ">
                                Email us
                            </h3>
                            <p class="text-sm text-gray-500">
                                <span class="text-blue-600 font-medium">contact@adap-international.org</span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- Clients -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="sm:w-1/2 xl:w-2/3 mx-auto text-center mb-6">
            <h2 class="text-xl font-semibold md:text-2xl md:leading-tight text-gray-800 ">Dans le cadre de nos missions
                sociales et humanitaire, nous sommes accompagnés par les partenaires au développement</h2>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="my-8 md:my-16 grid grid-cols-3 sm:flex sm:justify-center gap-6 sm:gap-x-12 lg:gap-x-20">
            <a class="flex-shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="w-6 h-6 md:w-10 md:h-10 mx-auto sm:mx-0" width="48" height="55" viewBox="0 0 48 55"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M48 27.3522C48 24.1724 44.0179 21.159 37.9128 19.2902C39.3216 13.0677 38.6955 8.11699 35.9364 6.53199C35.3004 6.1602 34.5569 5.98409 33.7448 5.98409V8.16591C34.1949 8.16591 34.5569 8.25396 34.8602 8.42029C36.1908 9.18344 36.768 12.0893 36.318 15.8267C36.2104 16.7464 36.0342 17.715 35.819 18.7032C33.9013 18.2336 31.8076 17.8716 29.6062 17.6368C28.2854 15.8267 26.9156 14.183 25.5361 12.7448C28.7256 9.78026 31.7195 8.15612 33.7546 8.15612V5.9743C31.064 5.9743 27.5418 7.89196 23.9804 11.2185C20.4191 7.91152 16.8969 6.01344 14.2063 6.01344V8.19526C16.2316 8.19526 19.2352 9.80961 22.4248 12.7546C21.055 14.1928 19.6853 15.8267 18.384 17.6368C16.1729 17.8716 14.0791 18.2336 12.1614 18.713C11.9364 17.7346 11.7701 16.7856 11.6527 15.8756C11.1928 12.1382 11.7603 9.23236 13.0811 8.45942C13.3746 8.28331 13.7562 8.20504 14.2063 8.20504V6.02322C13.3844 6.02322 12.6408 6.19933 11.9951 6.57112C9.24582 8.15612 8.62943 13.097 10.0481 19.3C3.96249 21.1785 0 24.1822 0 27.3522C0 30.532 3.98206 33.5454 10.0872 35.4142C8.67835 41.6368 9.30453 46.5874 12.0636 48.1724C12.6996 48.5442 13.4431 48.7203 14.265 48.7203C16.9556 48.7203 20.4778 46.8027 24.0391 43.4761C27.6005 46.7831 31.1227 48.6812 33.8133 48.6812C34.6351 48.6812 35.3787 48.5051 36.0245 48.1333C38.7737 46.5483 39.3901 41.6074 37.9715 35.4044C44.0375 33.5357 48 30.5222 48 27.3522V27.3522ZM35.2613 20.8263C34.8993 22.0884 34.4492 23.3897 33.9405 24.691C33.5393 23.9083 33.1186 23.1255 32.6588 22.3428C32.2087 21.5601 31.7293 20.797 31.2499 20.0534C32.6392 20.2589 33.9796 20.5132 35.2613 20.8263ZM30.7803 31.2462C30.0171 32.567 29.2344 33.8194 28.4223 34.9837C26.9645 35.1109 25.4872 35.1794 24 35.1794C22.5226 35.1794 21.0453 35.1109 19.5972 34.9935C18.7852 33.8292 17.9927 32.5866 17.2295 31.2756C16.4859 29.9939 15.8108 28.6926 15.1945 27.3816C15.8011 26.0705 16.4859 24.7595 17.2197 23.4778C17.9829 22.1569 18.7656 20.9046 19.5777 19.7403C21.0355 19.6131 22.5128 19.5446 24 19.5446C25.4774 19.5446 26.9547 19.6131 28.4028 19.7305C29.2148 20.8948 30.0073 22.1374 30.7705 23.4484C31.5141 24.7301 32.1892 26.0314 32.8055 27.3424C32.1892 28.6535 31.5141 29.9645 30.7803 31.2462ZM33.9405 29.9743C34.4688 31.2854 34.9189 32.5964 35.2907 33.8683C34.009 34.1814 32.6588 34.4456 31.2597 34.651C31.7391 33.8977 32.2185 33.1247 32.6686 32.3322C33.1186 31.5495 33.5393 30.757 33.9405 29.9743ZM24.0196 40.4138C23.1097 39.4745 22.1998 38.4276 21.2996 37.2829C22.1802 37.322 23.0803 37.3514 23.9902 37.3514C24.9099 37.3514 25.8198 37.3318 26.7102 37.2829C25.8296 38.4276 24.9197 39.4745 24.0196 40.4138ZM16.7403 34.651C15.351 34.4456 14.0106 34.1912 12.7289 33.8781C13.0909 32.616 13.541 31.3147 14.0497 30.0134C14.4509 30.7962 14.8716 31.5789 15.3314 32.3616C15.7913 33.1443 16.2609 33.9074 16.7403 34.651ZM23.9707 14.2907C24.8806 15.2299 25.7905 16.2768 26.6906 17.4215C25.81 17.3824 24.9099 17.353 24 17.353C23.0803 17.353 22.1704 17.3726 21.2801 17.4215C22.1606 16.2768 23.0705 15.2299 23.9707 14.2907ZM16.7305 20.0534C16.2511 20.8068 15.7717 21.5797 15.3216 22.3722C14.8716 23.1549 14.4509 23.9376 14.0497 24.7203C13.5214 23.4093 13.0713 22.0982 12.6996 20.8263C13.9812 20.523 15.3314 20.2589 16.7305 20.0534V20.0534ZM7.87607 32.3029C4.41256 30.8255 2.17203 28.8883 2.17203 27.3522C2.17203 25.8161 4.41256 23.8691 7.87607 22.4015C8.71749 22.0395 9.63718 21.7167 10.5862 21.4134C11.1439 23.331 11.8777 25.3269 12.7876 27.3718C11.8875 29.4068 11.1635 31.393 10.6156 33.3008C9.64696 32.9975 8.72727 32.6649 7.87607 32.3029ZM13.1398 46.2841C11.8092 45.521 11.232 42.6152 11.682 38.8777C11.7896 37.958 11.9658 36.9894 12.181 36.0012C14.0987 36.4708 16.1924 36.8328 18.3938 37.0677C19.7146 38.8777 21.0844 40.5214 22.4639 41.9596C19.2744 44.9242 16.2805 46.5483 14.2454 46.5483C13.8051 46.5385 13.4333 46.4505 13.1398 46.2841V46.2841ZM36.3473 38.8288C36.8072 42.5662 36.2397 45.4721 34.9189 46.245C34.6254 46.4211 34.2438 46.4994 33.7937 46.4994C31.7684 46.4994 28.7648 44.885 25.5752 41.9401C26.945 40.5018 28.3147 38.8679 29.616 37.0579C31.8272 36.8231 33.9209 36.4611 35.8386 35.9816C36.0636 36.9698 36.2397 37.9189 36.3473 38.8288V38.8288ZM40.1141 32.3029C39.2727 32.6649 38.353 32.9878 37.404 33.2911C36.8463 31.3734 36.1125 29.3775 35.2026 27.3326C36.1027 25.2976 36.8267 23.3114 37.3746 21.4036C38.3433 21.7069 39.2629 22.0395 40.1239 22.4015C43.5874 23.8789 45.828 25.8161 45.828 27.3522C45.8182 28.8883 43.5777 30.8353 40.1141 32.3029V32.3029Z"
                        fill="#61DAFB" />
                    <path
                        d="M23.9898 31.8234C26.4592 31.8234 28.4611 29.8216 28.4611 27.3522C28.4611 24.8828 26.4592 22.8809 23.9898 22.8809C21.5204 22.8809 19.5186 24.8828 19.5186 27.3522C19.5186 29.8216 21.5204 31.8234 23.9898 31.8234Z"
                        fill="#61DAFB" />
                </svg>
            </a>

            <a class="flex-shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="w-6 h-6 md:w-10 md:h-10 mx-auto sm:mx-0" width="48" height="42" viewBox="0 0 48 42"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1306_13)">
                        <path d="M38.3964 0H47.9955L23.9977 41.3961L0 0H18.3583L23.9977 9.5991L29.5172 0H38.3964Z"
                            fill="#41B883" />
                        <path d="M0 0L23.9977 41.3961L47.9955 0H38.3964L23.9977 24.8377L9.47911 0H0Z" fill="#41B883" />
                        <path d="M9.479 0L23.9976 24.9576L38.3963 0H29.5171L23.9976 9.5991L18.3582 0H9.479Z"
                            fill="#35495E" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1306_13">
                            <rect width="48" height="41.4336" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>

            <a class="flex-shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="w-6 h-6 md:w-10 md:h-10 mx-auto sm:mx-0" width="48" height="51" viewBox="0 0 48 51"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1314_2)">
                        <path
                            d="M0.0193481 8.53515L23.6078 0.130676L47.8314 8.38572L43.9092 39.5943L23.6078 50.8377L3.62395 39.7437L0.0193481 8.53515Z"
                            fill="#E23237" />
                        <path d="M47.8314 8.38572L23.6078 0.130676V50.8377L43.9092 39.6131L47.8314 8.38572V8.38572Z"
                            fill="#B52E31" />
                        <path
                            d="M23.6451 6.05121L8.94678 38.754L14.4376 38.6606L17.3886 31.2832H30.5742L33.8053 38.754L39.0533 38.8473L23.6451 6.05121ZM23.6826 16.5288L28.6505 26.9129H19.3121L23.6826 16.5288Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1314_2">
                            <rect width="48" height="50.9987" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>

            <a class="flex-shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="w-6 h-6 md:w-10 md:h-10 mx-auto sm:mx-0" width="48" height="48" viewBox="0 0 48 48"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.7298 40.1472C14.695 40.0857 14.6639 40.0221 14.6368 39.9568C14.4497 39.5235 14.3922 39.0453 14.4713 38.58H3.39139L19.8574 9.60244L25.2634 19.1057L26.8305 16.3324L22.1181 8.0309C21.8923 7.60574 21.5635 7.24396 21.1618 6.97863C20.7601 6.71331 20.2983 6.5529 19.8186 6.51208C19.3399 6.53384 18.877 6.68951 18.4824 6.96138C18.0878 7.23325 17.7774 7.6104 17.5865 8.04994L0.905195 37.3791C0.655848 37.7931 0.512082 38.2622 0.486543 38.7448C0.461003 39.2275 0.554474 39.7091 0.758732 40.1472C1.01527 40.5518 1.3799 40.8765 1.81137 41.0846C2.24285 41.2927 2.72396 41.3759 3.20026 41.3248H17.1721C16.6957 41.3766 16.2143 41.2938 15.7827 41.0856C15.351 40.8774 14.9865 40.5523 14.7305 40.1472H14.7298Z"
                        fill="#00C492" />
                    <path
                        d="M46.852 37.3783L33.1438 13.2318C32.919 12.8021 32.5895 12.436 32.1858 12.1672C31.7821 11.8984 31.3173 11.7357 30.8341 11.6939C30.356 11.7146 29.8934 11.8693 29.499 12.1403C29.1046 12.4114 28.7943 12.7878 28.6035 13.2266L26.8306 16.3316L28.408 19.1056L30.8488 14.7843L44.4105 38.5793H39.2535C39.3194 38.9726 39.2823 39.3763 39.1459 39.751C39.1171 39.8338 39.0811 39.914 39.0382 39.9905L38.9943 40.0783C38.7141 40.474 38.3408 40.7946 37.9073 41.0118C37.4738 41.2289 36.9935 41.3359 36.5088 41.3233H44.576C45.0607 41.3363 45.5412 41.2295 45.9747 41.0123C46.4083 40.7951 46.7816 40.4743 47.0614 40.0783C47.2824 39.6537 47.3798 39.1756 47.3428 38.6984C47.3058 38.2211 47.1358 37.7638 46.852 37.3783V37.3783Z"
                        fill="#008776" />
                    <path
                        d="M38.9949 40.0791L39.0389 39.9912C39.0815 39.9147 39.1173 39.8346 39.1458 39.7517C39.2823 39.377 39.3193 38.9734 39.2534 38.5801C39.1773 38.1559 39.025 37.749 38.8038 37.3791L28.4181 19.1057L26.8312 16.3324L25.2538 19.1057L14.8718 37.3791C14.6703 37.7534 14.5348 38.1597 14.4713 38.5801C14.3877 39.0442 14.4403 39.5226 14.6228 39.9575C14.6499 40.0228 14.681 40.0864 14.7159 40.1479C14.9725 40.5524 15.3372 40.8769 15.7686 41.0849C16.2001 41.2928 16.6811 41.3759 17.1574 41.3248H36.4941C36.9811 41.3392 37.4641 41.2331 37.9003 41.0159C38.3364 40.7987 38.7122 40.4772 38.9942 40.0798L38.9949 40.0791ZM26.8305 21.8797L36.3235 38.5793H17.3419L26.8305 21.8797Z"
                        fill="#2D4A5D" />
                </svg>
            </a>

            <a class="flex-shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="w-6 h-6 md:w-10 md:h-10 mx-auto sm:mx-0" width="48" height="48" viewBox="0 0 48 48"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M22.4295 0.0375632C22.3263 0.0469373 21.9982 0.0797466 21.703 0.103182C14.8927 0.717184 8.51362 4.39183 4.47339 10.0397C2.22361 13.18 0.784692 16.7422 0.240995 20.5153C0.0488258 21.8323 0.0253906 22.2213 0.0253906 24.0071C0.0253906 25.7929 0.0488258 26.1819 0.240995 27.4989C1.54399 36.5028 7.95118 44.0676 16.641 46.8705C18.1971 47.372 19.8375 47.7142 21.703 47.9204C22.4295 48.0001 25.5698 48.0001 26.2963 47.9204C29.5163 47.5642 32.2441 46.7674 34.9345 45.3941C35.3469 45.1832 35.4266 45.1269 35.3704 45.08C35.3329 45.0519 33.5752 42.6943 31.4661 39.8446L27.6321 34.6654L22.8279 27.5552C20.1844 23.6462 18.0096 20.4496 17.9908 20.4496C17.9721 20.4449 17.9533 23.604 17.944 27.4615C17.9299 34.2155 17.9252 34.4873 17.8408 34.6467C17.719 34.8764 17.6252 34.9701 17.4284 35.0732C17.2784 35.1482 17.1472 35.1623 16.4394 35.1623H15.6286L15.413 35.0263C15.2723 34.9373 15.1692 34.8201 15.0989 34.6842L15.0005 34.4733L15.0099 25.0757L15.0239 15.6735L15.1692 15.4907C15.2442 15.3923 15.4036 15.2658 15.5161 15.2048C15.7082 15.1111 15.7832 15.1017 16.5941 15.1017C17.5502 15.1017 17.7096 15.1392 17.958 15.4111C18.0283 15.4861 20.6296 19.4044 23.7418 24.1243C26.854 28.8441 31.1099 35.2888 33.2003 38.4526L36.9968 44.2036L37.189 44.077C38.8903 42.9709 40.6902 41.396 42.115 39.7556C45.1475 36.2731 47.102 32.0266 47.7582 27.4989C47.9504 26.1819 47.9738 25.7929 47.9738 24.0071C47.9738 22.2213 47.9504 21.8323 47.7582 20.5153C46.4552 11.5114 40.048 3.94656 31.3583 1.14371C29.8256 0.646879 28.1945 0.304725 26.3666 0.0984947C25.9166 0.0516243 22.8185 6.68575e-05 22.4295 0.0375632V0.0375632ZM32.2441 14.5393C32.4691 14.6518 32.6519 14.8674 32.7175 15.0923C32.755 15.2142 32.7644 17.8202 32.755 23.6931L32.7409 32.1204L31.2552 29.8425L29.7647 27.5646V21.4386C29.7647 17.478 29.7834 15.2517 29.8115 15.1439C29.8865 14.8814 30.0506 14.6752 30.2756 14.5533C30.4677 14.4549 30.538 14.4455 31.2739 14.4455C31.9676 14.4455 32.0894 14.4549 32.2441 14.5393V14.5393Z"
                        fill="currentColor" class="fill-black dark:fill-white" />
                    <path
                        d="M36.7627 44.3067C36.5986 44.4098 36.5471 44.4801 36.6924 44.4004C36.7955 44.3395 36.9642 44.2129 36.9361 44.2083C36.922 44.2083 36.8423 44.2551 36.7627 44.3067ZM36.4393 44.5176C36.3549 44.5832 36.3549 44.5879 36.458 44.5363C36.5142 44.5082 36.5611 44.4754 36.5611 44.466C36.5611 44.4285 36.5377 44.4379 36.4393 44.5176ZM36.2049 44.6582C36.1205 44.7238 36.1205 44.7285 36.2237 44.677C36.2799 44.6488 36.3268 44.616 36.3268 44.6067C36.3268 44.5692 36.3033 44.5785 36.2049 44.6582ZM35.9706 44.7988C35.8862 44.8644 35.8862 44.8691 35.9893 44.8176C36.0455 44.7894 36.0924 44.7566 36.0924 44.7473C36.0924 44.7098 36.069 44.7191 35.9706 44.7988ZM35.6143 44.9863C35.4362 45.08 35.4456 45.1175 35.6237 45.0285C35.7034 44.9863 35.7643 44.9441 35.7643 44.9347C35.7643 44.9019 35.7596 44.9066 35.6143 44.9863Z"
                        fill="currentColor" class="fill-black dark:fill-white" />
                </svg>
            </a>

            <a class="flex-shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="w-6 h-6 md:w-10 md:h-10 mx-auto sm:mx-0" width="48" height="50" viewBox="0 0 48 50"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1314_6)">
                        <path
                            d="M47.8876 11.3229C47.9054 11.3887 47.9145 11.4565 47.9146 11.5246V22.1123C47.9146 22.2481 47.8788 22.3816 47.8107 22.4992C47.7425 22.6168 47.6446 22.7143 47.5267 22.7819L38.6403 27.8982V38.0391C38.6403 38.3151 38.4936 38.5698 38.2543 38.7088L19.7047 49.3871C19.6622 49.4113 19.6159 49.4267 19.5696 49.4431C19.5522 49.4489 19.5358 49.4595 19.5175 49.4643C19.3878 49.4985 19.2515 49.4985 19.1219 49.4643C19.1006 49.4585 19.0813 49.447 19.0611 49.4392C19.0186 49.4238 18.9742 49.4103 18.9337 49.3871L0.387918 38.7088C0.270102 38.6411 0.172209 38.5436 0.104105 38.426C0.0360015 38.3084 9.33506e-05 38.175 0 38.0391L0 6.27612C0 6.20664 0.00964971 6.1391 0.0270192 6.07348C0.032809 6.05128 0.0463186 6.03102 0.0540383 6.00883C0.0685129 5.9683 0.0820225 5.9268 0.103252 5.88917C0.117726 5.86408 0.138956 5.84382 0.156325 5.82066C0.17852 5.78978 0.198784 5.75793 0.224838 5.73091C0.247032 5.70872 0.275982 5.69232 0.301071 5.67302C0.329055 5.64986 0.354144 5.62477 0.385988 5.60643H0.386953L9.66032 0.267251C9.77774 0.199684 9.91084 0.164124 10.0463 0.164124C10.1818 0.164124 10.3149 0.199684 10.4323 0.267251L19.7057 5.60643H19.7076C19.7385 5.62573 19.7645 5.64986 19.7925 5.67205C19.8176 5.69135 19.8456 5.70872 19.8678 5.72995C19.8948 5.75793 19.9141 5.78978 19.9373 5.82066C19.9537 5.84382 19.9759 5.86408 19.9894 5.88917C20.0116 5.92777 20.0241 5.9683 20.0395 6.00883C20.0473 6.03102 20.0608 6.05128 20.0666 6.07444C20.0843 6.1402 20.0934 6.20801 20.0936 6.27612V26.1149L27.8211 21.6655V11.5236C27.8211 11.4561 27.8307 11.3876 27.8481 11.3229C27.8548 11.2998 27.8674 11.2795 27.8751 11.2573C27.8905 11.2168 27.904 11.1753 27.9253 11.1376C27.9398 11.1126 27.961 11.0923 27.9774 11.0691C28.0005 11.0383 28.0198 11.0064 28.0469 10.9794C28.0691 10.9572 28.097 10.9408 28.1221 10.9215C28.1511 10.8983 28.1762 10.8732 28.207 10.8549H28.208L37.4823 5.51573C37.5997 5.44806 37.7328 5.41245 37.8683 5.41245C38.0038 5.41245 38.1369 5.44806 38.2543 5.51573L47.5277 10.8549C47.5605 10.8742 47.5856 10.8983 47.6145 10.9205C47.6387 10.9398 47.6666 10.9572 47.6888 10.9784C47.7159 11.0064 47.7352 11.0383 47.7583 11.0691C47.7757 11.0923 47.7969 11.1126 47.8104 11.1376C47.8326 11.1753 47.8452 11.2168 47.8606 11.2573C47.8693 11.2795 47.8818 11.2998 47.8876 11.3229V11.3229ZM46.3688 21.6655V12.8611L43.1236 14.7293L38.6403 17.3106V26.1149L46.3697 21.6655H46.3688ZM37.0954 37.5923V28.7821L32.6855 31.3007L20.0926 38.4878V47.381L37.0954 37.5923ZM1.54588 7.61261V37.5923L18.5467 47.38V38.4888L9.66514 33.4622L9.66225 33.4603L9.65839 33.4584C9.62847 33.441 9.60339 33.4159 9.5754 33.3947C9.55128 33.3754 9.52329 33.3599 9.50206 33.3387L9.50013 33.3358C9.47504 33.3117 9.45767 33.2818 9.43645 33.2548C9.41715 33.2287 9.39399 33.2065 9.37855 33.1795L9.37758 33.1766C9.36021 33.1477 9.3496 33.1129 9.33705 33.0801C9.32451 33.0512 9.3081 33.0241 9.30038 32.9933V32.9923C9.29073 32.9556 9.2888 32.917 9.28494 32.8794C9.28108 32.8504 9.27336 32.8215 9.27336 32.7925V12.0621L4.79108 9.47982L1.54588 7.61357V7.61261ZM10.0473 1.82857L2.32075 6.27612L10.0453 10.7237L17.7709 6.27516L10.0453 1.82857H10.0473ZM14.0654 29.585L18.5477 27.0047V7.61261L15.3025 9.48079L10.8192 12.0621V31.4541L14.0654 29.585ZM37.8683 7.07705L30.1428 11.5246L37.8683 15.9721L45.5929 11.5236L37.8683 7.07705ZM37.0954 17.3106L32.6121 14.7293L29.3669 12.8611V21.6655L33.8492 24.2458L37.0954 26.1149V17.3106ZM19.3187 37.1513L30.6504 30.6822L36.3147 27.4495L28.595 23.0048L19.7066 28.1221L11.6057 32.7858L19.3187 37.1513Z"
                            fill="#FF2D20" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1314_6">
                            <rect width="48" height="49.6278" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>

            <a class="flex-shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="w-6 h-6 md:w-10 md:h-10 mx-auto sm:mx-0" width="48" height="50"
                    viewBox="0 0 1280 1280" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M815.039 94.6439C824.758 106.709 829.714 122.99 839.626 155.553L1056.17 866.901C976.107 825.368 889.072 795.413 797.281 779.252L656.29 302.798C653.983 295.002 646.822 289.654 638.693 289.654C630.542 289.654 623.368 295.03 621.08 302.853L481.795 779.011C389.579 795.1 302.146 825.109 221.741 866.793L439.347 155.388L439.348 155.388C449.291 122.882 454.262 106.629 463.982 94.5853C472.562 83.9531 483.723 75.6958 496.4 70.6002C510.76 64.8284 527.756 64.8284 561.749 64.8284H717.174C751.212 64.8284 768.23 64.8284 782.603 70.6123C795.292 75.7184 806.459 83.9923 815.039 94.6439Z"
                        fill="url(#paint0_linear_709_11012gh4)" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M840.951 900.754C805.253 931.279 734.002 952.097 651.929 952.097C551.197 952.097 466.767 920.737 444.363 878.561C436.354 902.732 434.558 930.396 434.558 948.068C434.558 948.068 429.281 1034.84 489.636 1095.2C489.636 1063.86 515.042 1038.46 546.381 1038.46C600.097 1038.46 600.036 1085.32 599.987 1123.34C599.986 1124.48 599.984 1125.61 599.984 1126.73C599.984 1184.44 635.255 1233.91 685.416 1254.77C677.924 1239.36 673.721 1222.05 673.721 1203.77C673.721 1148.73 706.034 1128.23 743.588 1104.41L743.588 1104.41C773.469 1085.46 806.668 1064.41 829.548 1022.17C841.486 1000.13 848.265 974.893 848.265 948.068C848.265 931.573 845.702 915.676 840.951 900.754Z"
                        fill="#FF5D01" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M840.951 900.754C805.253 931.279 734.002 952.097 651.929 952.097C551.197 952.097 466.767 920.737 444.363 878.561C436.354 902.732 434.558 930.396 434.558 948.068C434.558 948.068 429.281 1034.84 489.636 1095.2C489.636 1063.86 515.042 1038.46 546.381 1038.46C600.097 1038.46 600.036 1085.32 599.987 1123.34C599.986 1124.48 599.984 1125.61 599.984 1126.73C599.984 1184.44 635.255 1233.91 685.416 1254.77C677.924 1239.36 673.721 1222.05 673.721 1203.77C673.721 1148.73 706.034 1128.23 743.588 1104.41L743.588 1104.41C773.469 1085.46 806.668 1064.41 829.548 1022.17C841.486 1000.13 848.265 974.893 848.265 948.068C848.265 931.573 845.702 915.676 840.951 900.754Z"
                        fill="url(#paint1_linear_709_1103afaw)" />
                    <defs>
                        <linearGradient id="paint0_linear_709_11012gh4" x1="882.997" y1="27.1132" x2="638.955"
                            y2="866.902" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#000014" />
                            <stop offset="1" stop-color="#150426" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_709_1103afaw" x1="1001.68" y1="652.45" x2="790.326"
                            y2="1094.91" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FF1639" />
                            <stop offset="1" stop-color="#FF1639" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </a>

            <a class="flex-shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="w-6 h-6 md:w-10 md:h-10 mx-auto sm:mx-0" fill="none" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 70 70">
                    <mask id="a" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0"
                        y="0" width="70" height="70">
                        <path d="M62 0H8a8 8 0 0 0-8 8v54a8 8 0 0 0 8 8h54a8 8 0 0 0 8-8V8a8 8 0 0 0-8-8Z"
                            fill="#fff" />
                    </mask>
                    <g mask="url(#a)">
                        <path
                            d="M69.8 70H.1V8a8 8 0 0 1 8-8h54a8 8 0 0 1 8 8v61.8l-.3.2Zm-12-24.2-.4-.4c-1.3-1.3-3-1.6-4.7-1.4-1.5 0-2.8.8-4 1.8l-.2-.1c0-.6-.2-1-.7-1.2-.4-.2-.9-.2-1.3 0-.5.4-.6.8-.6 1.3v12.8c0 .7.3 1.2.8 1.4 1 .2 1.8-.4 1.8-1.3v-8.3c0-.8.2-1.5.7-2.1 1.2-1.4 2.7-2 4.5-1.8.8.1 1.6.5 2 1.3.5.7.7 1.5.7 2.3v8.7c0 1 1 1.5 1.9 1 .5-.2.7-.7.7-1.3V49a6.3 6.3 0 0 0-1.2-3.1Zm-16.3-1.3c-.3-.1-.6-.2-1-.1-.6.2-1 .7-1 1.4V55a3 3 0 0 1-2 2.4 5 5 0 0 1-3.2.1 3 3 0 0 1-1.8-1.5c-.3-.5-.5-1-.5-1.7v-8.5c0-.8-.5-1.4-1.2-1.4-.9 0-1.5.5-1.5 1.4v8c0 1 .1 2 .5 2.9.7 1.7 2 2.7 3.7 3.3a8.4 8.4 0 0 0 5.9-.6c1.8-1 2.7-2.7 2.8-4.7v-9c0-.6-.3-1-.7-1.2Z"
                            fill="#EFDA4F" />
                        <path
                            d="M57.8 45.8c.7 1 1 2 1.1 3.1l.1 1.9v7.7c0 .6-.2 1-.7 1.4-.9.4-1.9-.2-2-1.1V50c0-.8-.1-1.6-.6-2.3a2.7 2.7 0 0 0-2-1.3c-1.8-.2-3.3.4-4.5 1.8-.5.6-.7 1.3-.7 2v8.4c0 1-.8 1.5-1.8 1.3-.5-.2-.8-.7-.8-1.4V46c0-.6.1-1 .6-1.3.4-.3.9-.3 1.3-.1a1.3 1.3 0 0 1 .7 1.2c0 .1.2.2.2 0 1.2-1 2.5-1.6 4-1.7 1.8-.2 3.4 0 4.7 1.4l.4.4ZM40.5 44.4l1 .1c.5.2.7.7.7 1.2v9c-.1 2-1 3.6-2.8 4.7a8.4 8.4 0 0 1-5.8.6c-1.8-.6-3.1-1.6-3.8-3.3-.4-1-.5-1.9-.5-2.8v-8.1c0-1 .6-1.5 1.5-1.4.7 0 1.2.6 1.2 1.4v8.5c0 .6.2 1.2.5 1.7a3 3 0 0 0 1.8 1.5 5 5 0 0 0 3.3-.1 3 3 0 0 0 1.9-2.4V45.8c0-.7.4-1.2 1-1.4Z"
                            fill="#000" />
                    </g>
                </svg>
            </a>
        </div>
        <!-- End Grid -->

        <!-- Grid -->
        <div class="grid grid-cols-12 sm:flex sm:justify-center gap-6 sm:gap-x-12 lg:gap-x-20">
            <div class="col-span-6 text-center">
                <h4 class="text-xl md:text-3xl font-semibold text-gray-800 ">
                    250+
                </h4>
                <h4 class="text-sm text-gray-600">
                    Components
                </h4>
            </div>
            <!-- End Col -->

            <div class="col-span-6 text-center">
                <h4 class="text-xl md:text-3xl font-semibold text-gray-800">
                    160+
                </h4>
                <h4 class="text-sm text-gray-600 dark:text-gray-400">
                    Starter Pages & Examples
                </h4>
            </div>
            <!-- End Col -->

            <div class="col-start-4 col-span-6 text-center">
                <h4 class="text-xl md:text-3xl font-semibold text-gray-800">
                    10+
                </h4>
                <h4 class="text-sm text-gray-600 ">
                    Tailwind CSS Plugins
                </h4>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Clients -->
    <!-- End Card Section -->
    <section class="bg-cover  bg-center bg-no-repeat"
        style="background-image: url('{{ asset('assets/images/projet-forage/p-forage-2.jpeg') }}');">

        <div class="relative z-50 p-8 md:p-12 lg:px-16 lg:py-24 " style=" z-index: 1000;">
            <div class="flex justify-end " >
                <div class="p-16 max-w-2xl">
                    <h2 class="text-5xl font-semibold ">Rendons le monde meilleur ensemble</h2>
                    <a href="#"
                        class="mt-8 inline-block rounded bg-secondary px-12 py-3 text-sm font-medium text-white transition hover:opacity-75 focus:outline-none focus:ring focus:ring-yellow-400">
                        FAIRE UN DON
                    </a>
                </div>
            </div>
            <div class="absolute inset-0 bg-primary/75 sm:bg-transparent sm:bg-gradient-to-r sm:from-green-300/95 sm:to-green-700/25" style=" z-index: -1;"
            ></div>
        </div>
    </section>
@endsection
