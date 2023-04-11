@extends('layouts.master')

@section('content')
    <x-front.header></x-front.header>
<div class="mx-auto max-w-screen-xl pt-16">
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                    <img alt="Party" src="{{ asset('/assets/images/personnes-mains.jpeg') }}" class="absolute inset-0 h-full w-full object-cover"/>
                </div>

                <div class="lg:py-24">
                    <h2 class="text-3xl font-bold sm:text-4xl">ADAP</h2>

                    <p class="mt-4 text-gray-600">
                        œuvrer pour apporter un frein à l’immigration massive, irrégulière et clandestine
                        des jeunes Africains à travers des actions de sensibilisation, de charité et
                        d’assistance, tout en leur proposant des solutions concrètes à leur précarité
                    </p>

                    <a href="#" class="mt-8 inline-block rounded bg-secondary px-12 py-3 text-sm font-medium text-white transition hover:opacity-75 focus:outline-none focus:ring focus:ring-yellow-400">
                        LEARN ABOUT US
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
    <x-front.our-missions></x-front.our-missions>
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full" src="{{asset('assets/images/association.jpeg')}}" alt="dashboard image">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Diaspora en action</h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Promouvoir auprès de ceux et celles de la diaspora la culture du retour aux sources afin de contribuer au développement et à la prospérité du continent africain.</p>
                <a href="#" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                    Get started
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
    </section>
    <x-front.find-work></x-front.find-work>
    <x-section.blog></x-section.blog>
    <section class="bg-cover relative bg-center bg-no-repeat" style="background-image: url('{{ asset('assets/images/projet-forage/p-forage-2.jpeg')}}'); z-index: -1;">
        <div class="absolute inset-0 bg-primary/75 sm:bg-transparent sm:bg-gradient-to-r sm:from-green-300/95 sm:to-green-700/25" style="z-index: -1"></div>
        <div class="z-50 p-8 md:p-12 lg:px-16 lg:py-24" style="z-index: 1000;">
            <div class="flex justify-end ">
                <div class="p-16 max-w-2xl">
                    <h2 class="text-5xl font-semibold ">Rendons le monde meilleur ensemble</h2>
                    <a href="#" class="mt-8 inline-block rounded bg-secondary px-12 py-3 text-sm font-medium text-white transition hover:opacity-75 focus:outline-none focus:ring focus:ring-yellow-400">
                        FAIRE UN DON
                    </a>
                </div>
            </div>
        </div>
    </section>

{{--    <x-front.testimonial></x-front.testimonial>--}}
@endsection
