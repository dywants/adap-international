@extends('layouts.master')

@section('title', __('actions.page-title'))

@section('content')
    <header class="bg-cover bg-center bg-no-repeat mx-auto max-w-screen-2xl rounded-md h-[530px] px-4 sm:px-6 lg:px-8" style="background-image: url('{{ asset('assets/images/nos-actions/header.png')}}'); ">
        <div class="absolute max-w-screen-2xl bg-graded mx-auto px-4 sm:px-6 lg:px-8 inset-0 h-[530px] "></div>

        <div class="relative mx-auto h-auto max-w-screen-2xl px-4 py-12 lg:py-16 sm:px-6 lg:flex lg:items-center lg:px-8">
            <div class="max-w-2xl text-center sm:text-left pt-16">
                <h1 class="text-3xl text-white font-extrabold sm:text-5xl leading-9">
                    {{ __('actions.hero.title') }}
                </h1>

                <p class="mt-4 sm:text-xl text-white sm:leading-relaxed">
                    {{ __('actions.hero.subtitle') }}
                </p>

                <div class="flex flex-wrap mt-4">
                    <x-primary-button href="{{ route('contact') }}" class="">
                        {{ __('actions.hero.cta') }}
                    </x-primary-button>
                </div>
            </div>
        </div>
    </header>
    <section class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16 my-8">
        <div class="flex gap-16 items-center justify-between flex-wrap">
            <div class="flex-1 space-y-4">
                <img src="{{ asset("assets/images/nos-actions/tourism-1.png") }}" class="w-full bg-cover" alt="{{ __('actions.tourism.title') }}">
{{--                <div class="flex items-center gap-4">--}}
{{--                    <img src="{{ asset("assets/images/nos-actions/tourism-2.png") }}" class="w-full bg-cover" alt="">--}}
{{--                    <img src="{{ asset("assets/images/nos-actions/tourism-3.png") }}" class="w-full bg-cover" alt="">--}}
{{--                </div>--}}
            </div>
            <div class="flex-1">
                <h2 class="title-section mb-2">{{ __('actions.tourism.title') }}</h2>
                <p class="paragraph">{{ __('actions.tourism.text-0') }}</p>
                <div class="py-8 flex justify-between gap-4 items-center">
                    <div>
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="" >
                        <p class="paragraph pt-4">{{ __('actions.tourism.text-1') }}</p>
                    </div>
                    <div>
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="">
                        <p class="paragraph pt-4">{{ __('actions.tourism.text-2') }}</p>
                    </div>
                </div>
                <div class="flex flex-wrap mt-4 gap-8">
                    <x-primary-button href="{{ route('contact') }}" class="">
                        {{ __('actions.tourism.btn-details') }}
                    </x-primary-button>
                    <x-secondary-button href="{{ route('tourism') }}" class="">
                        {{ __('actions.tourism.btn-contact') }}
                    </x-secondary-button>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="flex gap-16 items-center flex-row-reverse justify-between flex-wrap">
            <div class="flex-1 space-y-4">
                <img src="{{ asset("assets/images/nos-actions/immigration-1.png") }}" class="w-full bg-cover" alt="{{ __('actions.immigration.title') }}">
{{--                <div class="flex items-center gap-4">--}}
{{--                    <img src="{{ asset("assets/images/nos-actions/immigration-2.png") }}" class="w-full bg-cover" alt="">--}}
{{--                    <img src="{{ asset("assets/images/nos-actions/immigration-3.png") }}" class="w-full bg-cover" alt="">--}}
{{--                </div>--}}
            </div>
            <div class="flex-1">
                <h2 class="title-section mb-2">{{ __('actions.immigration.title') }}</h2>
                <p class="paragraph">{{ __('actions.immigration.text-0') }}</p>
                <div class="py-8 flex justify-between gap-4 items-center">
                    <div>
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="" >
                        <p class="paragraph pt-4">{{ __('actions.immigration.text-1') }}</p>
                    </div>
                    <div>
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="">
                        <p class="paragraph pt-4">{{ __('actions.immigration.text-2') }}</p>
                    </div>
                </div>
                <div class="flex flex-wrap mt-4 gap-8">
                    <x-primary-button href="{{ route('contact') }}" class="">
                        {{ __('actions.immigration.btn-details') }}
                    </x-primary-button>
                    <x-secondary-button href="{{ route('immigrat') }}" class="">
                        {{ __('actions.immigration.btn-contact') }}
                    </x-secondary-button>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 lg:py-8 my-8 lg:my-12">
        <div class="flex gap-16 items-center justify-between flex-wrap">
            <div class="flex-1 space-y-4">
                <img src="{{ asset("assets/images/nos-actions/programme-1.png") }}" class="w-full bg-cover" alt="{{ __('actions.programs.title') }}">
{{--                <div class="flex items-center gap-4">--}}
{{--                    <img src="{{ asset("assets/images/nos-actions/programme-2.png") }}" class="w-full bg-cover h-auto" alt="">--}}
{{--                    <img src="{{ asset("assets/images/nos-actions/programme-3.png") }}" class="w-full bg-cover  h-auto" alt="">--}}
{{--                </div>--}}
            </div>
            <div class="flex-1">
                <h2 class="title-section mb-2">{{ __('actions.programs.title') }}</h2>
                <p class="paragraph">{{ __('actions.programs.text-0') }}</p>
                <div class="py-8 grid grid-cols-4 gap-4 items-center">
                    <div class="col-span-2">
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="" >
                        <p class="paragraph pt-4">{{ __('actions.programs.text-1') }}</p>
                    </div>
                    <div class="col-span-2">
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="">
                        <p class="paragraph pt-4">{{ __('actions.programs.text-2') }}</p>
                    </div>
                    <div class="col-span-2">
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="" >
                        <p class="paragraph pt-4">{{ __('actions.programs.text-3') }}</p>
                    </div>
                    <div class="col-span-2">
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="">
                        <p class="paragraph pt-4">{{ __('actions.programs.text-4') }}</p>
                    </div>
                </div>
                <div class="flex flex-wrap mt-4 gap-8">
                    <x-primary-button href="{{ route('contact') }}" class="">
                        {{ __('actions.programs.btn-details') }}
                    </x-primary-button>
                    <x-secondary-button href="{{ route('Oactions') }}" class="">
                        {{ __('actions.programs.btn-contact') }}
                    </x-secondary-button>
                </div>
            </div>
        </div>
    </section>
@endsection
