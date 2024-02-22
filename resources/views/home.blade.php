@extends('layouts.master')

@section('content')
    <x-front.header></x-front.header>

    <!-- Masonry Cards -->

    <div class="mx-auto max-w-screen-2xl px-10 py-10 sm:px-6 lg:px-8 lg:py-16">
        <div class="w-full md:px-10 py-6 md:px-4 mx-auto mb-10">
            <h2 class="md:text-center text-dark md:px-8 md:px-20 text-2xl md:text-4xl font-semibold mb-4">Rechercher des partenariats entre des villes américaines et les
                municipalités camerounaises, tout en accompagnant leur mise en œuvre</h2>
            <p class="mx-auto text-[#575756] text-lg md:text-2xl md:text-center">Aider au renforcement des capacités des citoyens dans la défense de leurs
                droits et intérêts </p>
        </div>
        <div class="flex flex-col md:flex-row md:px-o items-center gap-4 mb-10">
            <div class="w-full md:w-[1000px]">
               <div class="space-y-4">
                   <div class="w-full flex flex-col md:flex-row gap-2 items-center">
                       <img class="w-full hidden md:block md:h-[300px]" src="{{ asset('assets/images/home/img-mission.png')}}" alt="image section mission">
                       <div class="p-8 rounded-3xl bg-[#F5FAF1] md:h-[300px] flex flex-col justify-center">
                           <h3 class="text-dark font-semibold text-3xl">Notre mission</h3>
                           <p class="leading-7 md:leading-8 text-lg">Œuvrer pour l'amélioration de la qualité de vie, le rapprochement des communautés africaines à travers les secteurs de l'éducation et de l'entrepreneuriat jeune, la réservation de l'environnement, le renforcement de l'economie locale, la promotion de la paix, le développement du potentiel sportif et l'accès aux services de base.</p>
                       </div>
                   </div>
                   <div class="flex flex-col md:flex-row gap-2 items-center">
                       <div class="p-8 rounded-3xl bg-[#EEF6F8] h-[300px] flex flex-col justify-center">
                           <h3 class="text-dark font-semibold text-3xl">Notre vision</h3>
                           <p class="leading-7 md:leading-8 text-lg">Participer à la construction d'une société globale dans laquelle les rapports humains seront privilégiés entre les africains résidant en Afrique et les diasporas africaines à travers le monde.</p>
                       </div>
                       <img class="h-[300px] hidden md:block" src="{{ asset('assets/images/home/img-vision.png')}}" alt="image section mission">
                   </div>
               </div>
            </div>
            <div class="w-full md:w-[452px] relative">
                <img src="{{ asset('assets/images/home/bg-card.jpeg')}}" alt="image" class="rounded-xl">
               <div class="absolute left-10 bottom-8">
                   <x-primary-button href="#" class="w-full">
                       {{ __('Nous soutenir') }}
                   </x-primary-button>
               </div>
            </div>
        </div>

    </div>
    <section class="bg-primaryLight py-20 mt-8 sm:mt-20">
       <div class="px-10 mx-auto max-w-screen-2xl">
           <div class="pb-10 md:px-10">
               <div class="flex flex-col md:flex-row justify-between md:items-center">
                   <div class="max-w-[658px] mb-8 md:mb-0">
                       <h2 class="title-section pb-4">Nos domaines d’activités</h2>
                       <p class="text-2xl">
                           Ils constituent le socle du double but fondateur et guident les diverses activités de l’association dans l’optique de : </p>
                   </div>
                   <x-primary-button href="#">
                       {{ __('Nous soutenir') }}
                   </x-primary-button>
               </div>
           </div>
           <div class="flex md:py-8 card-activity flex-wrap gap-4">
               <x-card.activity title="Education"
                                icon="{{asset('assets/images/icons/icon-education.png')}}"
                                paragraph="Rendre l’éducation accessible pour les couches défavorisées"/>
               <x-card.activity title="Assistance médicale"
                                icon="{{asset('assets/images/icons/icon-medicale.png')}}"
                                paragraph="Apporter une assistance médicale aux nécessiteux sur le continent africain"/>
               <x-card.activity title="Droit de l’homme"
                                icon="{{asset('assets/images/icons/icon-droit.png')}}"
                                paragraph="Aider au renforcement des capacités des citoyens dans la défense de leurs droits et intérêts"/>
               <x-card.activity title="Culture"
                                icon="{{asset('assets/images/icons/icon-culture.png')}}"
                                paragraph="Promouvoir la culture, l’histoire, les valeurs traditionnelles et ancestrales africaines"/>
               <x-card.activity title="Tourisme Africain"
                                icon="{{asset('assets/images/icons/icon-tourism.png')}}"
                                paragraph="Nous organissons des visites guidées du Cameroun à coût réduit. "/>
               <x-card.activity title="Sport & Loisir"
                                icon="{{asset('assets/images/icons/icon-sport.png')}}"
                                paragraph="Promouvoir les activités et infrastructures sportives dans les quartiers défavorisés "/>
           </div>
       </div>
    </section>

    <section class="mx-auto max-w-screen-2xl px-10 sm:px-6 lg:px-8 lg:py-6 sm:mt-20">
        <div class="pb-10">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="w-full md:max-w-[800px] mb-4 md:mb-0">
                    <h2 class="title-section pb-4">Nos services</h2>
                    <p class="mx-auto text-[#575756] text-lg md:text-2xl">ADAP-International entend fortement coopérer avec les collectivités municipales dans les domaines du tourisme, l’encadrement de la jeunesse désœuvrée. </p>
                </div>
                <x-primary-button href="#">
                    {{ __('Nous soutenir') }}
                </x-primary-button>
            </div>
        </div>
        <div class="card-grid-4 space-y-6 md:space-y-0">
            <x-card.services
                title="Tourisme Humanitaire"
                image="{{asset('assets/images/tourisme-volontaire/herve-j.JPG')}}"
                url="{{ route('tourism') }}"
                paragraph="Nous organissons des visites guidées du Cameroun à coût réduit. Mais en contrepartie, le touriste peut nous offrir..."></x-card.services>
            <x-card.services title="Actions sociales"
                             image="{{asset('assets/images/action-social.jpeg')}}"
                             url="{{ route('actions-socials') }}"
                             paragraph="Promouvoir l’alphabétisation et vulgariser les Technologies de l’Information et de la Communication en Afrique"></x-card.services>
            <x-card.services title="Mise en Vitrine de nos C.T.D"
                             image="{{asset('assets/images/elus-cameroun.jpeg')}}"
                             url="#"
                             paragraph="Permettre la presentatiom et mise en avant des actions des élus du Cameroun, des collectivités territoriales décentralisées..."></x-card.services>
            <x-card.services title="Un Sport/Un Métier"
                             image="{{asset('assets/images/adap-sport.jpg')}}"
                             url="#"
                             paragraph="En 2008, lancement du Centre ADAP Inter-Sports en la présence du Délégué des
Sports et des Activités Physiques du ..."></x-card.services>
        </div>
    </section>

    <!-- End Masonry Cards -->
{{--    <x-front.our-missions></x-front.our-missions>--}}

    <!-- Card Section -->
    <div class="max-w-5xl px-10 py-10  lg:px-8 lg:py-16 mx-auto md:mt-20">
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
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
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
            <a class="group group-hover:shadow-2xl flex flex-col cursor-pointer justify-center items-center bg-primary border shadow-sm rounded-xl hover:shadow-md transition "
               href="#">
                <div class="p-4 md:p-5">
                    <div class="flex justify-center items-center">
                        <svg class="mt-1 shrink-0 w-5 h-5 text-gray-800 dark:text-gray-200"
                             xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             viewBox="0 0 16 16">
                            <path
                                d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
                            <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
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
                                d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z"/>
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

    <section class="mx-auto max-w-screen-2xl mb-16 md:mb-0 px-10 sm:px-6 lg:px-8 lg:py-16 sm:my-16">
        <div class="pb-10">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="max-w-[650px] mb-4">
                    <h2 class="title-section pb-3">Notre activité</h2>
                    <p class="text-[#575756] text-lg md:text-2xl">Rechercher des partenariats entre des villes américaines et les municipalités camerounaises, tout en accompagnant leur mise en œuvre.</p>
                </div>
                <x-primary-button href="#">
                    {{ __('Devenir Membre') }}
                </x-primary-button>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-8 justify-between items-center flex-wrap">
            <div class="flex-1">
                <img src="{{asset('assets/images/diaspora-en-action.png')}}" class="w-full bg-cover mb-10" alt="">
                <h3 class="text-2xl font-bold py-4 mt-3 ">Diaspora en action</h3>
                <p class="text-lg">Promouvoir auprès de ceux et celles de la diaspora la culture du retour aux sources afin de contribuer au développement et à la prospérité du continent africain.</p>
            </div>
            <div class="flex-1">
                <img src="{{asset('assets/images/home/adap-international.jpeg')}}" class="w-full object-cover h-[410px] bg-cover rounded-2xl" alt="">

                <h3 class="text-2xl font-bold py-4 mt-3">ADAP-International œuvre à améliorer les conditions de travail dans les hôpitaux.</h3>
                <p class="text-lg">Initiative de collecte et remise de matériels médicaux aux hôpitaux Initiative de collecte et remise de matériels médicaux aux hôpitaux.</p>
            </div>
        </div>

    </section>

    <!-- End Card Section -->
    <section class="bg-cover bg-center bg-no-repeat"
             style="background-image: url('{{ asset('assets/images/bg-action.jpg') }}');">

        <div class="relative z-50 p-8 md:p-12 lg:px-16 lg:py-24 " style=" z-index: 1000;">
            <div class="flex justify-end ">
                <div class="md:p-16 w-full md:max-w-2xl">
                    <h2 class="text-4xl md:text-5xl text-white font-semibold ">Rendons le monde meilleur ensemble</h2>
                    <a href="#"
                       class="mt-8 inline-block rounded bg-primary px-12 py-3 text-sm font-medium text-white transition hover:opacity-75 focus:outline-none focus:ring focus:ring-yellow-400">
                        FAIRE UN DON
                    </a>
                </div>
            </div>
            <div
                class="absolute inset-0 bg-primary/75 sm:bg-transparent sm:bg-gradient-to-r sm:from-green-300/95 sm:to-green-700/25"
                style=" z-index: -1;"
            ></div>
        </div>
    </section>
@endsection
