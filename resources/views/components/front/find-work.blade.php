<section class="bg-[#9369b0]">
    <div class="max-w-screen-xl mx-auto py-8 sm:py-12 px-8 lg:py-16 lg:px-8">
        <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16">
            <div class="mx-auto max-w-lg sm:text-center lg:mx-0 lg:text-left">
                <h2 class="text-3xl font-bold sm:text-4xl text-white"> {{ __('about.section-0.title') }}</h2>

                <p class="mt-4 text-lg text-white">
                    {{ __('about.section-0.text') }}
                </p>

                <a href="#"
                    class="mt-8 inline-block rounded bg-primary px-12 py-3 text-sm font-medium text-white transition hover:opacity-75 focus:outline-none focus:ring focus:ring-yellow-400">
                    {{ __('navbar.button-0') }}
                </a>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="block flex justify-center items-center flex-col bg-white rounded-xl border border-gray-100 p-6 shadow-sm hover:border-primary hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                   >
                    <img src="{{asset('assets/images/icons/icon-education.png')}}" alt="">

                    <h3 class="mt-2 text-xl font-bold">{{ __('home.activites.act-0.title') }}</h3>

                    <p class=" sm:mt-1 text-center sm:block sm:text-sm sm:text-gray-600">
                        {{ __('home.activites.act-0.text') }}
                    </p>
                </div>

                <div class="block flex justify-center items-center flex-col bg-white rounded-xl border border-gray-100 p-4 shadow-sm hover:border-primary hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring">
                    <img src="{{asset('assets/images/icons/icon-medicale.png')}}" alt="">

                    <h3 class="mt-2 text-xl font-bold">{{ __('home.activites.act-1.title') }}</h3>

                    <p class="text-center sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        {{ __('home.activites.act-1.text') }}
                    </p>
                </div>

                <div class="block flex justify-center items-center flex-col bg-white rounded-xl border border-gray-100 p-4 shadow-sm hover:border-primary hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring">
                    <img src="{{asset('assets/images/icons/icon-sport.png')}}" alt="">

                    <h3 class="mt-2 text-xl font-bold">{{ __('home.activites.act-5.title') }}</h3>

                    <p class="text-center sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        {{ __('home.activites.act-5.text') }}
                    </p>
                </div>

                <div class="block flex justify-center items-center flex-col bg-white rounded-xl border border-gray-100 p-4 shadow-sm hover:border-primary hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring">
                    <img src="{{asset('assets/images/icons/icon-tourism.png')}}" alt="">

                    <h3 class="mt-2 text-xl font-bold">{{ __('home.activites.act-4.title') }}</h3>

                    <p class="text-center sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        {{ __('home.activites.act-4.text') }}
                    </p>
                </div>

                <div class="block flex justify-center items-center flex-col bg-white rounded-xl border border-gray-100 p-4 shadow-sm hover:border-primary hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                   >
                    <img src="{{asset('assets/images/icons/icon-culture.png')}}" alt="">

                    <h3 class="mt-2 text-xl font-bold">{{ __('home.activites.act-3.title') }}</h3>

                    <p class="text-center sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        {{ __('home.activites.act-3.text') }}
                    </p>
                </div>

                <div class="block flex justify-center items-center flex-col bg-white rounded-xl border border-gray-100 p-4 shadow-sm hover:border-primary hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                   >
                    <img src="{{asset('assets/images/icons/icon-droit.png')}}" alt="">

                    <h3 class="mt-2 text-xl font-bold">{{ __('home.activites.act-2.title') }}</h3>

                    <p class="text-center sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        {{ __('home.activites.act-2.text') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
