@extends('layouts.master')

@section('title', __('home.page-title'))

@section('content')
    <x-front.hero-carousel />

    <!-- Masonry Cards -->

    <div class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="w-full md:px-10 py-6 md:px-4 mx-auto mb-10">
            <h2 class="title-section md:text-center md:px-8 mb-4">{{ __('home.title-0') }}</h2>
            <p class="mx-auto text-gray-600 text-lg md:text-2xl md:text-center">{{ __('home.title-1') }}</p>
        </div>
        <div class="flex flex-col md:flex-row md:px-o items-center gap-4 mb-10">
            <div class="w-full lg:w-2/3">
               <div class="space-y-4">
                   <div class="w-full flex flex-col md:flex-row gap-2 items-center">
                       <img class="w-full hidden md:block md:h-[300px]" src="{{ asset('assets/images/home/img-mission.png')}}" alt="image section mission">
                       <div class="p-8 rounded-3xl bg-primaryLight md:h-[300px] flex flex-col justify-center">
                           <h3 class="text-dark font-semibold text-3xl">{{ __('home.section-0.title') }}</h3>
                           <p class="leading-7 md:leading-8 text-lg">{{ __('home.section-0.text') }}</p>
                       </div>
                   </div>
                   <div class="flex flex-col md:flex-row gap-2 items-center">
                       <div class="p-8 rounded-3xl bg-[#EEF6F8] h-[300px] flex flex-col justify-center">
                           <h3 class="text-dark font-semibold text-3xl">{{ __('home.section-1.title') }}</h3>
                           <p class="leading-7 md:leading-8 text-lg">{{ __('home.section-1.text') }}</p>
                       </div>
                       <img class="h-[300px] hidden md:block" src="{{ asset('assets/images/home/img-vision.png')}}" alt="image section mission">
                   </div>
               </div>
            </div>
            <div class="w-full lg:w-1/3 relative">
                <img src="{{ asset('assets/images/home/bg-card.jpeg')}}" alt="image" class="rounded-xl">
               <div class="absolute left-10 bottom-8">
                   <x-primary-button href="{{ route('contact') }}" class="w-full">
                       {{ __('navbar.button-2') }}
                   </x-primary-button>
               </div>
            </div>
        </div>

    </div>
    <section class="bg-primaryLight py-12 lg:py-16 mt-8 sm:mt-20">
       <div class="px-4 sm:px-6 lg:px-8 mx-auto max-w-screen-2xl">
           <div class="pb-10 md:px-10">
               <div class="flex flex-col md:flex-row justify-between md:items-center">
                   <div class="max-w-2xl mb-8 md:mb-0">
                       <h2 class="title-section pb-4">{{ __('home.section-2.title') }}</h2>
                       <p class="text-2xl">
                           {{ __('home.section-2.subtitle') }}</p>
                   </div>
                   <x-primary-button href="{{ route('contact') }}">
                       {{ __('navbar.button-2') }}
                   </x-primary-button>
               </div>
           </div>
           <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:py-8">
               <x-card.activity title="{{ __('home.activites.act-0.title') }}"
                                icon="{{asset('assets/images/icons/icon-education.png')}}"
                                paragraph="{{ __('home.activites.act-0.text') }}"/>
               <x-card.activity title="{{ __('home.activites.act-1.title') }}"
                                icon="{{asset('assets/images/icons/icon-medicale.png')}}"
                                paragraph="{{ __('home.activites.act-1.text') }}"/>
               <x-card.activity title="{{ __('home.activites.act-2.title') }}"
                                icon="{{asset('assets/images/icons/icon-droit.png')}}"
                                paragraph="{{ __('home.activites.act-2.text') }}"/>
               <x-card.activity title="{{ __('home.activites.act-3.title') }}"
                                icon="{{asset('assets/images/icons/icon-culture.png')}}"
                                paragraph="{{ __('home.activites.act-3.text') }}"/>
               <x-card.activity title="{{ __('home.activites.act-4.title') }}"
                                icon="{{asset('assets/images/icons/icon-tourism.png')}}"
                                paragraph="{{ __('home.activites.act-4.text') }}"/>
               <x-card.activity title="{{ __('home.activites.act-5.title') }}"
                                icon="{{asset('assets/images/icons/icon-sport.png')}}"
                                paragraph="{{ __('home.activites.act-5.text') }}"/>
           </div>
       </div>
    </section>

    <section class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8 py-12 lg:py-16 sm:mt-20">
        <div class="pb-10">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="w-full max-w-3xl mb-4 md:mb-0">
                    <h2 class="title-section pb-4">{{ __('home.section-3.title') }}</h2>
                    <p class="mx-auto text-gray-600 text-lg md:text-2xl">{{ __('home.section-3.subtitle') }}</p>
                </div>
                <x-primary-button href="{{ route('contact') }}">
                    {{ __('navbar.button-2') }}
                </x-primary-button>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3">
            <x-card.services
                title="{{ __('home.services.serv-0.title') }}"
                image="{{asset('assets/images/tourisme-volontaire/herve-j.JPG')}}"
                url="{{ route('tourism') }}"
                paragraph="{{ __('home.services.serv-0.text') }}"></x-card.services>
            <x-card.services title="{{ __('home.services.serv-1.title') }}"
                             image="{{asset('assets/images/action-social.jpeg')}}"
                             url="{{ route('actions-socials') }}"
                             paragraph="{{ __('home.services.serv-1.text') }}"></x-card.services>
            <x-card.services title="{{ __('home.services.serv-2.title') }}"
                             image="{{asset('assets/images/elus-cameroun.jpeg')}}"
                             url="{{ route('Oactions') }}"
                             paragraph="{{ __('home.services.serv-2.text') }}"></x-card.services>
            <x-card.services title="{{ __('home.services.serv-3.title') }}"
                             image="{{asset('assets/images/adap-sport.jpg')}}"
                             url="{{ route('Oactions') }}"
                             paragraph="{{ __('home.services.serv-3.text') }}"></x-card.services>
        </div>
    </section>

    <!-- End Masonry Cards -->
{{--    <x-front.our-missions></x-front.our-missions>--}}

    <!-- Card Section -->
    <div class="max-w-5xl px-4 sm:px-6 lg:px-8 py-12 lg:py-16 mx-auto md:mt-20">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            <!-- Card -->
            <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition "
               href="{{ route('contact') }}">
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
                                {{ __('home.cards.card-0.title') }}
                            </h3>
                            <p class="text-sm text-gray-500">
                                {{ __('home.cards.card-0.text') }}
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="group group-hover:shadow-2xl flex flex-col cursor-pointer justify-center items-center bg-primary border shadow-sm rounded-xl hover:shadow-md transition "
               href="{{ route('contact') }}">
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
                            <h3 class="text-xl font-semibold text-dark">
                                {{ __('home.cards.card-1.title') }}
                            </h3>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="group flex flex-col justify-center items-center bg-white border shadow-sm rounded-xl hover:shadow-md transition "
               href="{{ route('contact') }}">
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
                                {{ __('home.cards.card-2.title') }}
                            </h3>
                            <p class="text-sm text-gray-500">
                                <span class="text-blue-600 font-medium">{{ __('home.cards.card-2.text') }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>

    <section class="mx-auto max-w-screen-2xl mb-16 md:mb-0 px-4 sm:px-6 lg:px-8 py-12 lg:py-16 sm:my-16">
        <div class="pb-10">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="max-w-2xl mb-4">
                    <h2 class="title-section pb-3">{{ __('home.section-4.title') }}</h2>
                    <p class="text-gray-600 text-lg md:text-2xl">{{ __('home.section-4.text') }}</p>
                </div>
                <x-primary-button href="{{ route('contact') }}">
                    {{ __('navbar.button-0') }}
                </x-primary-button>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-8 justify-between items-center flex-wrap">
            <div class="flex-1">
                <img src="{{asset('assets/images/diaspora-en-action.png')}}" class="w-full bg-cover mb-10" alt="{{ __('home.actions.act-0.title') }}">
                <h3 class="text-2xl font-bold py-4 mt-3 ">{{ __('home.actions.act-0.title') }}</h3>
                <p class="text-lg">{{ __('home.actions.act-0.text') }}</p>
            </div>
            <div class="flex-1">
                <img src="{{asset('assets/images/home/adap-international.jpeg')}}" class="w-full object-cover h-[410px] bg-cover rounded-2xl" alt="{{ __('home.actions.act-1.title') }}">

                <h3 class="text-2xl font-bold py-4 mt-3">{{ __('home.actions.act-1.title') }}</h3>
                <p class="text-lg">{{ __('home.actions.act-1.text') }}</p>
            </div>
        </div>

    </section>

    <!-- End Card Section -->
    <section class="bg-cover bg-center bg-no-repeat"
             style="background-image: url('{{ asset('assets/images/bg-action.jpg') }}');">

        <div class="relative z-50 p-8 md:p-12 lg:px-16 lg:py-24 " style=" z-index: 1000;">
            <div class="flex justify-end ">
                <div class="md:p-16 w-full md:max-w-2xl">
                    <h2 class="text-4xl md:text-5xl text-white font-semibold ">{{ __('home.call-to-action') }}</h2>
                    <a href="{{ route('contact') }}"
                       class="mt-8 inline-block rounded bg-primary px-12 py-3 text-sm font-medium text-dark transition hover:opacity-75 focus:outline-none focus:ring focus:ring-yellow-400">
                        {{ __('navbar.button-1') }}
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
