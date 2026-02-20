<header x-data="{ isOpen: false }" class="shadow-navbar">

    <div class="mx-auto max-w-screen-2xl">
        <div class="flex items-center justify-between gap-4 px-4 sm:px-6 lg:px-8 py-2 lg:gap-10">
            <div class="flex lg:w-0 lg:flex-1 ">
                <a href="/" class="py-4">
                    <img src="{{ asset('assets/images/logo/adap-logo.png') }}" class="w-16 h-16 sm:w-28 sm:h-28 object-cover"
                         alt="logo adap-international">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div aria-label="Site Nav" class="hidden sm:block">
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
                                    <span class="flex items-center gap-1 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                                        </svg>
                                        <span class="text-xs text-gray-400">{{ __('navbar.lang-label') }}</span>
                                    </span>
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
                            <a class="text-base {{ request()->routeIs('home') ? 'text-primary font-bold border-b-2 border-primary' : 'text-dark' }}" href="{{ route('home') }}"> {{ __('navbar.nav.nav-0') }}</a>
                            <a class="text-base {{ request()->routeIs('about') ? 'text-primary font-bold border-b-2 border-primary' : 'text-dark' }}" href="{{ route('about') }}"> {{ __('navbar.nav.nav-1') }} </a>
                            <a class="text-base {{ request()->routeIs('Oactions') ? 'text-primary font-bold border-b-2 border-primary' : 'text-dark' }}" href="{{ route('Oactions') }}"> {{ __('navbar.nav.nav-2') }}</a>
                            <a class="text-base {{ request()->routeIs('tourism') ? 'text-primary font-bold border-b-2 border-primary' : 'text-dark' }}" href="{{ route('tourism') }}"> {{ __('navbar.nav.nav-3') }}</a>
                            <a class="text-dark text-base" target="_blank" href="https://blog.adap-international.org">{{ __('Blog') }}</a>
                            <a class="text-base {{ request()->routeIs('contact') ? 'text-primary font-bold border-b-2 border-primary' : 'text-dark' }}" href="{{ route('contact') }}">{{ __('navbar.nav.nav-5') }}</a>
                        </div>
                        <div class="">
                            <x-secondary-button href="{{ route('contact') }}" class="ml-3">
                                {{ __('navbar.button-0') }}
                            </x-secondary-button>
                            <x-primary-button href="{{ route('contact') }}" class="ml-3">
                                {{ __('navbar.button-1') }}
                            </x-primary-button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hamburger button (mobile only) -->
            <button @click="isOpen = !isOpen"
                    class="sm:hidden rounded-lg bg-gray-100 p-2 text-gray-600" type="button">
                <span class="sr-only">Menu</span>
                <svg
                    aria-hidden="true"
                    class="h-6 w-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path x-show="!isOpen"
                          d="M4 6h16M4 12h16M4 18h16"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                    />
                    <path x-show="isOpen" x-cloak
                          d="M6 18L18 6M6 6l12 12"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                    />
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation Menu -->
        <div x-show="isOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-1"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-1"
             x-cloak
             class="sm:hidden border-t border-gray-200 bg-white">
            <nav class="px-4 py-4 space-y-3">
                <a class="block text-base py-2 {{ request()->routeIs('home') ? 'text-primary font-bold' : 'text-dark' }}" @click="isOpen = false" href="{{ route('home') }}">{{ __('navbar.nav.nav-0') }}</a>
                <a class="block text-base py-2 {{ request()->routeIs('about') ? 'text-primary font-bold' : 'text-dark' }}" @click="isOpen = false" href="{{ route('about') }}">{{ __('navbar.nav.nav-1') }}</a>
                <a class="block text-base py-2 {{ request()->routeIs('Oactions') ? 'text-primary font-bold' : 'text-dark' }}" @click="isOpen = false" href="{{ route('Oactions') }}">{{ __('navbar.nav.nav-2') }}</a>
                <a class="block text-base py-2 {{ request()->routeIs('tourism') ? 'text-primary font-bold' : 'text-dark' }}" @click="isOpen = false" href="{{ route('tourism') }}">{{ __('navbar.nav.nav-3') }}</a>
                <a class="block text-base py-2 text-dark" @click="isOpen = false" target="_blank" href="https://blog.adap-international.org">{{ __('Blog') }}</a>
                <a class="block text-base py-2 {{ request()->routeIs('contact') ? 'text-primary font-bold' : 'text-dark' }}" @click="isOpen = false" href="{{ route('contact') }}">{{ __('navbar.nav.nav-5') }}</a>
            </nav>
            <div class="px-4 py-4 border-t border-gray-200 space-y-3">
                <x-secondary-button href="{{ route('contact') }}" class="w-full text-center" @click="isOpen = false">
                    {{ __('navbar.button-0') }}
                </x-secondary-button>
                <x-primary-button href="{{ route('contact') }}" class="w-full text-center" @click="isOpen = false">
                    {{ __('navbar.button-1') }}
                </x-primary-button>
            </div>
            <div class="px-4 py-3 border-t border-gray-200">
                <div class="flex items-center gap-4 text-sm text-gray-500">
                    <div class="flex gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-xs">+1 (713) 592-2074</span>
                    </div>
                </div>
                <div class="flex gap-2 mt-3">
                    @foreach(config('localization.locales') as $locale)
                        <a href="{{ route('localization', $locale) }}" class="text-xs px-3 py-1 rounded-md border {{ app()->getLocale() === $locale ? 'bg-primary text-white border-primary' : 'bg-white text-gray-600 border-gray-300' }}">
                            {{ strtoupper($locale) }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</header>
