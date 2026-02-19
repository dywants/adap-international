@extends('layouts.master')

@section('title', __('immigration.page-title'))

@section('content')
    <!-- Hero Section -->
    <header class="bg-cover bg-center bg-no-repeat mx-auto max-w-screen-2xl rounded-md h-[530px] px-4 sm:px-6 lg:px-8" style="background-image: url('{{ asset('assets/images/nos-actions/immigration-1.png') }}');">
        <div class="absolute max-w-screen-2xl bg-graded mx-auto px-4 sm:px-6 lg:px-8 inset-0 h-[530px]"></div>

        <div class="relative mx-auto h-auto max-w-screen-2xl px-4 py-12 lg:py-16 sm:px-6 lg:flex lg:items-center lg:px-8">
            <div class="max-w-2xl text-center sm:text-left pt-16">
                <h1 class="text-3xl text-white font-extrabold sm:text-5xl leading-9">
                    {{ __('immigration.hero.title') }}
                </h1>

                <p class="mt-4 sm:text-xl text-white sm:leading-relaxed">
                    {{ __('immigration.hero.subtitle') }}
                </p>
            </div>
        </div>
    </header>

    <!-- Intro Section -->
    <section class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="max-w-4xl mx-auto">
            <h2 class="title-section mb-6">{{ __('immigration.intro.title') }}</h2>
            <p class="paragraph text-lg leading-8">{{ __('immigration.intro.text') }}</p>
        </div>
    </section>

    <!-- Dangers Section -->
    <section class="bg-gray-50 py-12 lg:py-16">
        <div class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h2 class="title-section mb-4">{{ __('immigration.dangers.title') }}</h2>
                <p class="paragraph text-lg leading-8 mb-8">{{ __('immigration.dangers.text') }}</p>
                <ul class="space-y-4">
                    @foreach(__('immigration.dangers.items') as $item)
                        <li class="flex items-start space-x-3">
                            <svg class="flex-shrink-0 h-6 w-6 text-red-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                            </svg>
                            <span class="text-lg text-gray-700">{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <!-- Alternatives Section -->
    <section class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="max-w-4xl mx-auto">
            <h2 class="title-section mb-4">{{ __('immigration.alternatives.title') }}</h2>
            <p class="paragraph text-lg leading-8 mb-8">{{ __('immigration.alternatives.text') }}</p>
            <ul class="space-y-4">
                @foreach(__('immigration.alternatives.items') as $item)
                    <li class="flex items-start space-x-3">
                        <svg class="flex-shrink-0 h-6 w-6 text-primary mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-lg text-gray-700">{{ $item }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('assets/images/bg-action.jpg') }}');">
        <div class="relative z-50 p-8 md:p-12 lg:px-16 lg:py-24" style="z-index: 1000;">
            <div class="flex justify-center">
                <div class="max-w-3xl text-center">
                    <h2 class="text-4xl md:text-5xl text-white font-semibold mb-6">{{ __('immigration.cta.title') }}</h2>
                    <p class="text-xl text-white mb-8">{{ __('immigration.cta.text') }}</p>
                    <a href="{{ route('contact') }}"
                       class="inline-block rounded bg-primary px-12 py-3 text-sm font-medium text-white transition hover:opacity-75 focus:outline-none focus:ring focus:ring-yellow-400">
                        {{ __('immigration.cta.button') }}
                    </a>
                </div>
            </div>
            <div class="absolute inset-0 bg-primary/75 sm:bg-transparent sm:bg-gradient-to-r sm:from-green-300/95 sm:to-green-700/25" style="z-index: -1;"></div>
        </div>
    </section>
@endsection
