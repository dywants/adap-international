@extends('layouts.master')

@section('content')
    <section class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('assets/images/tourisme-volontaire/herve-jouan.JPG')}}');">
        <div class="absolute inset-0 bg-white/75 h-[450px] sm:bg-transparent sm:bg-gradient-to-r sm:from-white/95 sm:to-white/25"></div>

        <div class="relative mx-auto h-auto max-w-screen-2xl px-4 py-12 lg:py-16 sm:px-6 lg:flex lg:items-center lg:px-8">
            <div class="max-w-2xl text-center sm:text-left">
                <h1 class="text-3xl font-extrabold sm:text-5xl leading-9">
                    Tourisme et solidarité
                </h1>

                <p class="mt-4 max-w-xl sm:text-xl sm:leading-relaxed">
                    Nous vous faisons une visite guidées du Cameroun à coût réduit.
                </p>
                <div class="flex flex-wrap"><a href="{{ route('contact') }}" class="block w-full mt-4 rounded bg-secondary px-2.5 py-3 text-sm font-medium text-white shadow hover:opacity-75 focus:outline-none focus:ring sm:w-auto">
                        Contactez-nous
                    </a></div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="max-w-screen-2xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h2 class="text-center mb-10 text-3xl font-semibold">Comment ça marche?</h2>
        <!-- Tab Nav -->
        <nav class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-2 sm:gap-4" aria-label="Tabs" role="tablist">
            <button type="button"
                    class="hs-tab-active:bg-gray-100 hs-tab-active:hover:border-transparent text-center md:text-left hover:bg-gray-100 p-3 md:p-5 rounded-xl active"
                    id="tabs-with-card-item-1" data-hs-tab="#tabs-with-card-1" aria-controls="tabs-with-card-1"
                    role="tab">
             <span class="md:flex">
           <svg
            class="hidden md:block flex-shrink-0 md:mt-2 h-6 w-6 hs-tab-active:text-blue-600 text-gray-500 "
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path
              d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
          <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        </svg>
        <span class="md:grow md:ml-5">
          <span
              class="hs-tab-active:text-blue-600 block font-semibold text-gray-800 ">All-in-one workspace</span>
          <span class="hidden lg:block mt-2 text-gray-800 dark:text-gray-200">Create a business, whether you’ve got a fresh idea.</span>
        </span>
      </span>
            </button>

            <button type="button"
                    class="hs-tab-active:bg-gray-100 hs-tab-active:hover:border-transparent text-center md:text-left hover:bg-gray-100 p-3 md:p-5 rounded-xl "
                    id="tabs-with-card-item-2" data-hs-tab="#tabs-with-card-2" aria-controls="tabs-with-card-2"
                    role="tab">
      <span class="md:flex">
        <svg
            class="hidden md:block flex-shrink-0 md:mt-2 h-6 w-6 hs-tab-active:text-blue-600 text-gray-500 "
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
                d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"/>
        </svg>
        <span class="md:grow md:ml-5">
          <span
              class="hs-tab-active:text-blue-600 block font-semibold text-gray-800 ">Automation on a whole new level</span>
          <span class="hidden lg:block mt-2 text-gray-800 dark:text-gray-200">Use automation to scale campaigns profitably and save time doing it.</span>
        </span>
      </span>
            </button>

            <button type="button"
                    class="hs-tab-active:bg-gray-100 hs-tab-active:hover:border-transparent text-center md:text-left hover:bg-gray-100 p-3 md:p-5 rounded-xl dark:hs-tab-active:bg-white/[.05] dark:hover:bg-gray-700"
                    id="tabs-with-card-item-3" data-hs-tab="#tabs-with-card-3" aria-controls="tabs-with-card-3"
                    role="tab">
      <span class="md:flex">
        <svg
            class="hidden md:block flex-shrink-0 md:mt-2 h-6 w-6 hs-tab-active:text-blue-600 text-gray-500 "
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path
              d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5zM6.374 1 4.168 8.5H7.5a.5.5 0 0 1 .478.647L6.78 13.04 11.478 7H8a.5.5 0 0 1-.474-.658L9.306 1H6.374z"/>
        </svg>
        <span class="md:grow md:ml-5">
          <span
              class="hs-tab-active:text-blue-600 block font-semibold text-gray-800 ">Solving problems for every team</span>
          <span class="hidden lg:block mt-2 text-gray-800 dark:text-gray-200">One tool for your company to share knowledge and ship projects.</span>
        </span>
      </span>
            </button>
        </nav>
        <!-- End Tab Nav -->
    </section>
    <!-- End Features -->

    <!-- Features -->
    <section class="max-w-screen-2xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto mb-8">
        <!-- Grid -->
        <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
            <div>
                <img class="rounded-xl" src="{{ asset('assets/images/tourisme-volontaire/p-usa-annie.JPG') }}" alt="Image Description">
            </div>
            <!-- End Col -->

            <div class="mt-5 sm:mt-10 lg:mt-0">
                <div class="space-y-6 sm:space-y-8">
                    <!-- Title -->
                    <div class="space-y-2 md:space-y-4">
                        <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 ">
                            Hervé JOUAN
                        </h2>
                        <p class="text-gray-500">
                            Séances de travail à Paris avec Hervé, qui va visiter le Cameroun a maintes reprises. Il financera la scolarité de 4 enfants de familles démunies à Douala pendant 5 ans.
                        </p>
                    </div>
                    <!-- End Title -->

                    <!-- List -->
                    <ul role="list" class="space-y-2 sm:space-y-4">
                        <li class="flex space-x-3">
                            <!-- Solid Check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-blue-600 " width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"/>
                                <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"/>
                            </svg>
                            <!-- End Solid Check -->

                            <span class="text-sm sm:text-base text-gray-500">Un Tourisme Eco-responsable</span>
                        </li>

                        <li class="flex space-x-3">
                            <!-- Solid Check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-blue-600 " width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"/>
                                <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"/>
                            </svg>
                            <!-- End Solid Check -->

                            <span class="text-sm sm:text-base text-gray-500">Avec un Impact social</span>
                        </li>

                        <li class="flex space-x-3">
                            <!-- Solid Check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-blue-600 " width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"/>
                                <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"/>
                            </svg>
                            <!-- End Solid Check -->

                            <span class="text-sm sm:text-base text-gray-500">Valorisant et soutenant les personnes démunies</span>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </section>
    <!-- End Features -->
    <section class="bg-cover bg-center bg-no-repeat"
             style="background-image: url('{{ asset('assets/images/tourisme-volontaire/herve-j.JPG') }}');">

        <div class="z-50 p-8 md:p-12 lg:px-16 lg:py-24 relative" style="z-index: 1000;">
            <div class="flex ">
                <div class="p-16 max-w-5xl">
                    <h2 class="text-5xl font-semibold">Tu peux faire partie de l'aventure et avoir un reel impact sur le monde</h2>
                    <a href="{{ route('contact') }}" style="z-index: 2000;"
                       class="mt-8 cursor-pointer inline-block rounded bg-secondary px-12 py-3 text-sm font-medium text-white transition hover:opacity-75 focus:outline-none focus:ring focus:ring-yellow-400">
                        Contactez-nous
                    </a>
                </div>
            </div>
            <div class="absolute inset-0 bg-primary/75 sm:bg-transparent sm:bg-gradient-to-r sm:from-green-300/95 sm:to-green-700/25"
                 style="z-index: -1"></div>
        </div>
    </section>
@endsection
