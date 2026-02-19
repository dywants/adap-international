@extends('layouts.master')

@section('title', __('about.page-title'))

@section('content')
    <div class="relative px-4 sm:px-6 lg:px-8 my-8 lg:my-12">
        <div class="mx-auto max-w-2xl lg:max-w-5xl">
            <div class="grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:grid-rows-[auto_1fr] lg:gap-y-12">
                <div class="lg:pl-20">
                    <div class="max-w-xs px-2.5 lg:max-w-none">
                        <img alt="{{ __('about.founder-photo-alt') }}" sizes="(min-width: 1024px) 32rem, 20rem" src="{{ asset('assets/images/tchokossa/TCHOKOSSA.JPG') }}" class="aspect-square  rounded-2xl bg-zinc-100 object-cover dark:bg-zinc-800" loading="lazy" style="color: transparent;" width="800" height="800"></div>
                </div>
                <div class="lg:order-first lg:row-span-2">
                    <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl"> {{ __('about.title') }}</h1>
                    <div class="mt-6 space-y-7 text-lg leading-9 text-zinc-600">
                        <p>{{ __('about.text-0') }}</p>
                        <p> {{ __('about.text-1') }}</p>
                        <p>{{ __('about.text-2') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-front.find-work></x-front.find-work>

    <section class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8 my-8 lg:my-12">
        <div class="flex flex-col sm:flex-row gap-16 sm:gap-32 justify-between items-center">
            <div class="flex-1">
                <h2 class="title-section mb-5">{{ __('about.section-1.title') }}</h2>
                <p class="text-lg text-gray-500">{{ __('about.section-1.text') }}</p>
                <div class="flex flex-wrap mt-4">
                    <x-primary-button href="{{ route('contact') }}" class="">
                        {{ __('navbar.button-2') }}
                    </x-primary-button>
                </div>
            </div>
            <div class="flex-1">
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                    <div class="text-center rounded-lg border p-10 col-span-2 hover:bg-primaryLight">
                        <span class="number">{{ __('about.section-1.stats.stat-0.number') }}</span>
                        <p class="text-lg text-gray-500">{{ __('about.section-1.stats.stat-0.label') }}</p>
                    </div>
                    <div class="text-center rounded-lg border p-10 col-span-2 hover:bg-primaryLight">
                        <span class="number">{{ __('about.section-1.stats.stat-1.number') }}</span>
                        <p class="paragraph">{{ __('about.section-1.stats.stat-1.description') }}</p>
                    </div>
                    <div class="text-center rounded-lg border p-10 col-span-2 hover:bg-primaryLight">
                        <span class="number">{{ __('about.section-1.stats.stat-2.number') }}</span>
                        <p class="paragraph">{{ __('about.section-1.stats.stat-2.description') }}</p>
                    </div>
                    <div class="text-center rounded-lg border p-10 col-span-2 hover:bg-primaryLight">
                        <span class="number">{{ __('about.section-1.stats.stat-3.number') }}</span>
                        <p class="paragraph">{{ __('about.section-1.stats.stat-3.description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-16">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="title-section mb-4">{{ __('about.section-2.title') }}</h2>
                <p class="font-light text-gray-500 sm:text-xl text-xl dark:text-gray-400">{{ __('about.section-2.text') }}</p>
            </div>
            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <div class="text-center text-gray-500 ">
                    <img class="mx-auto mb-4" src="{{ asset('assets/images/equipe/user-avatar.png') }}" alt="{{ __('about.section-2.members.member-0.name') }}">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">{{ __('about.section-2.members.member-0.name') }}</a>
                    </h3>
                    <p>{{ __('about.section-2.members.member-0.role') }}</p>
                    <p>{{ __('about.section-2.members.member-0.location') }}</p>
                </div>
                <div class="text-center text-gray-500 ">
                    <img class="mx-auto mb-4" src="{{ asset('assets/images/equipe/user-avatar.png') }}" alt="{{ __('about.section-2.members.member-1.name') }}">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">{{ __('about.section-2.members.member-1.name') }}</a>
                    </h3>
                    <p>{{ __('about.section-2.members.member-1.role') }}</p>
                    <p>{{ __('about.section-2.members.member-1.location') }}</p>
                </div>
                <div class="text-center text-gray-500 ">
                    <img class="mx-auto mb-4" src="{{ asset('assets/images/equipe/user-avatar.png') }}" alt="{{ __('about.section-2.members.member-2.name') }}">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">{{ __('about.section-2.members.member-2.name') }}</a>
                    </h3>
                    <p>{{ __('about.section-2.members.member-2.role') }}</p>
                    <p>{{ __('about.section-2.members.member-2.location') }}</p>
                </div>
                <div class="text-center text-gray-500 ">
                    <img class="mx-auto mb-4" src="{{ asset('assets/images/equipe/user-avatar.png') }}" alt="{{ __('about.section-2.members.member-3.name') }}">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">{{ __('about.section-2.members.member-3.name') }}</a>
                    </h3>
                    <p>{{ __('about.section-2.members.member-3.role') }}</p>
                    <p>{{ __('about.section-2.members.member-3.location') }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
