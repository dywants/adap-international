@extends('layouts.master')

@section('title', __('social-actions.page-title'))

@section('content')
    <!-- Hero Section -->
    <header class="bg-cover bg-center bg-no-repeat mx-auto max-w-screen-2xl rounded-md h-[530px] px-4 sm:px-6 lg:px-8" style="background-image: url('{{ asset('assets/images/actions-diaspora.png') }}');">
        <div class="absolute max-w-screen-2xl bg-graded mx-auto px-4 sm:px-6 lg:px-8 inset-0 h-[530px]"></div>

        <div class="relative mx-auto h-auto max-w-screen-2xl px-4 py-12 lg:py-16 sm:px-6 lg:flex lg:items-center lg:px-8">
            <div class="max-w-2xl text-center sm:text-left pt-16">
                <h1 class="text-3xl text-white font-extrabold sm:text-5xl leading-9">
                    {{ __('social-actions.hero.title') }}
                </h1>

                <p class="mt-4 sm:text-xl text-white sm:leading-relaxed">
                    {{ __('social-actions.hero.subtitle') }}
                </p>

                <div class="flex flex-wrap mt-4">
                    <x-primary-button href="{{ route('contact') }}" class="">
                        {{ __('social-actions.hero.cta') }}
                    </x-primary-button>
                </div>
            </div>
        </div>
    </header>

    <!-- Content Section 0 -->
    <section class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8 py-12 lg:py-16 my-8">
        <div class="flex gap-16 items-center justify-between flex-wrap">
            <div class="flex-1 space-y-4">
                <img src="{{ asset('assets/images/actions-diaspora.png') }}" class="w-full bg-cover rounded-xl" alt="{{ __('social-actions.content.section-0.image-alt') }}">
            </div>
            <div class="flex-1">
                <h2 class="title-section mb-4">{{ __('social-actions.content.section-0.title') }}</h2>
                <p class="paragraph text-lg leading-8">{{ __('social-actions.content.section-0.text') }}</p>
            </div>
        </div>
    </section>

    <!-- Content Section 1 -->
    <section class="bg-gray-50 py-12 lg:py-16">
        <div class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8">
            <div class="flex gap-16 items-center flex-row-reverse justify-between flex-wrap">
                <div class="flex-1 space-y-4">
                    <img src="{{ asset('assets/images/action-social.jpeg') }}" class="w-full bg-cover rounded-xl" alt="{{ __('social-actions.content.section-1.image-alt') }}">
                </div>
                <div class="flex-1">
                    <h2 class="title-section mb-4">{{ __('social-actions.content.section-1.title') }}</h2>
                    <p class="paragraph text-lg leading-8">{{ __('social-actions.content.section-1.text') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section 2 -->
    <section class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="flex gap-16 items-center justify-between flex-wrap">
            <div class="flex-1 space-y-4">
                <img src="{{ asset('assets/images/home/adap-international.jpeg') }}" class="w-full bg-cover rounded-xl" alt="{{ __('social-actions.content.section-2.image-alt') }}">
            </div>
            <div class="flex-1">
                <h2 class="title-section mb-4">{{ __('social-actions.content.section-2.title') }}</h2>
                <p class="paragraph text-lg leading-8">{{ __('social-actions.content.section-2.text') }}</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('assets/images/bg-action.jpg') }}');">
        <div class="relative z-50 p-8 md:p-12 lg:px-16 lg:py-24" style="z-index: 1000;">
            <div class="flex justify-center">
                <div class="max-w-3xl text-center">
                    <h2 class="text-4xl md:text-5xl text-white font-semibold mb-8">{{ __('social-actions.cta.title') }}</h2>
                    <a href="{{ route('contact') }}"
                       class="inline-block rounded bg-primary px-12 py-3 text-sm font-medium text-dark transition hover:opacity-75 focus:outline-none focus:ring focus:ring-yellow-400">
                        {{ __('social-actions.cta.button') }}
                    </a>
                </div>
            </div>
            <div class="absolute inset-0 bg-primary/75 sm:bg-transparent sm:bg-gradient-to-r sm:from-green-300/95 sm:to-green-700/25" style="z-index: -1;"></div>
        </div>
    </section>
@endsection
