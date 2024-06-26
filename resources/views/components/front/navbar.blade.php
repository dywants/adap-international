<header x-data="{ isOpen: false }" class="shadow-navbar">

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
                    <div class="grid justify-items-end  border-b">
                        <div class="flex items-center gap-2 pb-4">
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

                            <x-dropdown align="right" width="20">
                                <x-slot name="trigger">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                                    </svg>
                                </x-slot>

                                <x-slot name="content">
                                    @foreach(config('localization.locales') as $locale)
                                        <x-dropdown-link :href="route('localization', $locale)">
                                            {{ __($locale) }}
                                        </x-dropdown-link>
                                    @endforeach
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>
                </div>

                <div class="mx-auto max-w-screen-xl text-sm font-medium">
                    <div class="flex flex-col items-center sm:flex-row sm:justify-between text-center gap-8  py-4">
                        <div class="space-x-8">
                            <a class="text-dark text-base" @click="isOpen = false" href="{{ route('home') }}"> {{ __('navbar.nav.nav-0') }}</a>
                            <a class="text-dark text-base" @click="isOpen = false" href="{{ route('about') }}"> {{ __('navbar.nav.nav-1') }} </a>
                            <a class="text-dark text-base" @click="isOpen = false" href="{{ route('Oactions') }}"> {{ __('navbar.nav.nav-2') }}</a>
                            <a class="text-dark text-base" @click="isOpen = false" href="{{ route('tourism') }}"> {{ __('navbar.nav.nav-3') }}</a>
{{--                            <a class="text-dark text-base" @click="isOpen = false" href="{{ route('immigrat') }}"> {{ __('navbar.nav.nav-4') }}</a>--}}
                            <a class="text-dark text-base" @click="isOpen = false" target="_blank" href="https://blog.adap-international.org">{{ __('Blog') }}</a>
                            <a class="text-dark text-base" @click="isOpen = false" href="{{ route('contact') }}">{{ __('navbar.nav.nav-5') }}</a>
                        </div>
                        <div class="">
                            <x-secondary-button href="#" class="ml-3">
                                {{ __('navbar.button-0') }}
                            </x-secondary-button>
                            <x-primary-button href="#" class="ml-3">
                                {{ __('navbar.button-1') }}
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



