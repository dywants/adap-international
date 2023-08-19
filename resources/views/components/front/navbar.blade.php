<header x-data="{ isOpen: false }" class="shadow-navbar">

    <!-- Announcement Banner -->
    <a class="group block bg-gray-200 p-4 rounded-md text-center transition-all duration-300" href="#">
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
            <p class="mr-2 inline-block text-sm text-gray-800">
                THIS BILINGUAL WEBSITE IS UNDER NEW CONSTRUCTION
            </p>
        </div>
    </a>
    <!-- End Announcement Banner -->

    <div class="mx-auto max-w-screen-2xl">
        <div class="flex items-center justify-between gap-4 px-10 py-2 lg:gap-10">
            <div class="flex lg:w-0 lg:flex-1 ">
                <a href="/" class="py-4">
                    <img src="{{ asset('assets/images/logo/adap-logo.png') }}" class="w-16 h-16 sm:w-28 sm:h-28 object-cover"
                         alt="logo adap-international">
                </a>
            </div>

            <div aria-label="Site Nav" class=" hidden sm:block" :class="{ 'block': isOpen, 'hidden': !isOpen }"
                 x-show.transition="true">
                <div class="hidden sm:block">
                    <div class="grid justify-items-end border-b">
                        <div class="flex gap-2 pb-4">
                            <div class="flex gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                     class="w-4 h-4">
                                    <path fill-rule="evenodd"
                                          d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="text-xs text-gray-400">+1 (713) 592-2074</span>
                            </div>
                            <div class="flex gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                     class="w-4 h-4">
                                    <path
                                        d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"/>
                                    <path
                                        d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"/>
                                </svg>

                                <span class="text-xs text-gray-400">contact@adap-international.org</span>
                            </div>
                        </div>

                        {{--                    <div class="relative">--}}
                        {{--                        <label class="sr-only" for="search"> Search </label>--}}

                        {{--                        <input--}}
                        {{--                            class="h-10 w-full rounded-full border-1 bg-white pl-4 pr-10 text-sm shadow-sm sm:w-56"--}}
                        {{--                            id="search"--}}
                        {{--                            type="search"--}}
                        {{--                            placeholder="Search website..."--}}
                        {{--                        />--}}

                        {{--                        <button--}}
                        {{--                            type="button"--}}
                        {{--                            class="absolute top-1/2 right-1 -translate-y-1/2 rounded-full bg-gray-50 p-2 text-gray-600 transition hover:text-gray-700"--}}
                        {{--                        >--}}
                        {{--                            <span class="sr-only">Search</span>--}}
                        {{--                            <svg--}}
                        {{--                                xmlns="http://www.w3.org/2000/svg"--}}
                        {{--                                class="h-4 w-4"--}}
                        {{--                                fill="none"--}}
                        {{--                                viewBox="0 0 24 24"--}}
                        {{--                                stroke="currentColor"--}}
                        {{--                                stroke-width="2"--}}
                        {{--                            >--}}
                        {{--                                <path--}}
                        {{--                                    stroke-linecap="round"--}}
                        {{--                                    stroke-linejoin="round"--}}
                        {{--                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"--}}
                        {{--                                />--}}
                        {{--                            </svg>--}}
                        {{--                        </button>--}}
                        {{--                    </div>--}}
                    </div>
                </div>

                <div class="mx-auto max-w-screen-xl text-sm font-medium">
                    <div class="flex flex-col items-center sm:flex-row sm:justify-between text-center gap-8  py-4">
                        <div class="space-x-8">
                            <a class="text-dark text-base" @click="isOpen = false" href="{{ route('home') }}">Accueil</a>
                            <a class="text-dark text-base" @click="isOpen = false" href="{{ route('about') }}">Qui sommes-nous </a>
                            <a class="text-dark text-base" @click="isOpen = false" href="{{ route('Oactions') }}">Programmes clés</a>
                            <a class="text-dark text-base" @click="isOpen = false" href="{{ route('tourism') }}">Tourisme Humanitaire</a>
                            <a class="text-dark text-base" @click="isOpen = false" href="{{ route('immigrat') }}">Risky immigration</a>
                            <a class="text-white text-base" @click="isOpen = false" href="{{ route('contact') }}">Contact</a>
                        </div>
                        <div class="">
                            <x-secondary-button href="#" class="ml-3">
                                {{ __('Devenir Membre') }}
                            </x-secondary-button>
                            <x-primary-button href="#" class="ml-3">
                                {{ __('Faire un don') }}
                            </x-primary-button>
{{--                            <a class="text-white text-base px-2.5 py-2 bg-black hover:opacity-75 rounded-md" @click="isOpen = false" href="{{ route('blog') }}">Etre membre</a>--}}
{{--                            <a class="text-white text-base px-2.5 py-2 bg-black hover:opacity-75 rounded-md" @click="isOpen = false" href="{{ route('blog') }}">Faire un don</a>--}}
                        </div>
                    </div>
                </div>
            </div>


            <button @@click.prevent="isOpen = !isOpen" :class="{ 'transition transform-180': isOpen }"
                    class="block lg:hidden rounded-lg bg-gray-100 p-2 text-gray-600 mr-8 sm:mr-0" type="button">
                <span class="sr-only">Open menu</span>
                <svg
                    aria-hidden="true"
                    class="h-5 w-5"
                    fill="none"
                    stroke="currentColor"
                    viewbox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path x-show="isOpen"
                          d="M4 6h16M4 12h16M4 18h16"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                    />
                    <path x-show="!isOpen" fill-rule="evenodd"
                        d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
                    />
                </svg>
            </button>
        </div>
    </div>

</header>



