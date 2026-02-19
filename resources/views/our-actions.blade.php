@extends('layouts.master')

@section('content')
    <header class="bg-cover bg-center bg-no-repeat mx-auto max-w-screen-2xl rounded-md h-[530px] px-4 sm:px-6 lg:px-8" style="background-image: url('{{ asset('assets/images/nos-actions/header.png')}}'); ">
        <div class="absolute max-w-screen-2xl bg-graded mx-auto px-4 sm:px-6 lg:px-8 inset-0 h-[530px] "></div>

        <div class="relative mx-auto h-auto max-w-screen-2xl px-4 py-12 lg:py-16 sm:px-6 lg:flex lg:items-center lg:px-8">
            <div class="max-w-2xl text-center sm:text-left pt-16">
                <h1 class="text-3xl text-white font-extrabold sm:text-5xl leading-9">
                    Nous sommes à l’œuvre pour changer les choses.
                </h1>

                <p class="mt-4 sm:text-xl text-white sm:leading-relaxed">
                    L’entreprenariat social, un réel sacerdoce qui commande, volonté, ingéniosité et méthodologie.
                </p>

                <div class="flex flex-wrap mt-4">
                    <x-primary-button href="#" class="">
                        {{ __('Nous soutenir') }}
                    </x-primary-button>
                </div>
            </div>
        </div>
    </header>
    <section class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16 my-8">
        <div class="flex gap-16 items-center justify-between flex-wrap">
            <div class="flex-1 space-y-4">
                <img src="{{ asset("assets/images/nos-actions/tourism-1.png") }}" class="w-full bg-cover" alt="">
{{--                <div class="flex items-center gap-4">--}}
{{--                    <img src="{{ asset("assets/images/nos-actions/tourism-2.png") }}" class="w-full bg-cover" alt="">--}}
{{--                    <img src="{{ asset("assets/images/nos-actions/tourism-3.png") }}" class="w-full bg-cover" alt="">--}}
{{--                </div>--}}
            </div>
            <div class="flex-1">
                <h2 class="title-section mb-2">Tourisme humanitaire</h2>
                <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minima voluptatum reppour l’amélioration de la qualité de vie, le rapprochement des communautés africaines à travers les secteurs de l’éducation.</p>
                <div class="py-8 flex justify-between gap-4 items-center">
                    <div>
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="" >
                        <p class="paragraph pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minima voluptatum reppour l’amélioration..</p>
                    </div>
                    <div>
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="">
                        <p class="paragraph pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minima voluptatum reppour l’amélioration..</p>
                    </div>
                </div>
                <div class="flex flex-wrap mt-4 gap-8">
                    <x-primary-button href="#" class="">
                        {{ __('Nous soutenir') }}
                    </x-primary-button>
                    <x-secondary-button href="#" class="">
                        {{ __('Devenir membre') }}
                    </x-secondary-button>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="flex gap-16 items-center flex-row-reverse justify-between flex-wrap">
            <div class="flex-1 space-y-4">
                <img src="{{ asset("assets/images/nos-actions/immigration-1.png") }}" class="w-full bg-cover" alt="">
{{--                <div class="flex items-center gap-4">--}}
{{--                    <img src="{{ asset("assets/images/nos-actions/immigration-2.png") }}" class="w-full bg-cover" alt="">--}}
{{--                    <img src="{{ asset("assets/images/nos-actions/immigration-3.png") }}" class="w-full bg-cover" alt="">--}}
{{--                </div>--}}
            </div>
            <div class="flex-1">
                <h2 class="title-section mb-2">Risky immigration</h2>
                <p class="paragraph">Il est urgent d'enrayer ce désastre à travers des campagnes de sensibilisation en Afrique,
                    tout en offrant au groupe cible une éducation et des outils pour sortir de la pauvreté.</p>
                <div class="py-8 flex justify-between gap-4 items-center">
                    <div>
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="" >
                        <p class="paragraph pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minima voluptatum reppour l’amélioration..</p>
                    </div>
                    <div>
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="">
                        <p class="paragraph pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minima voluptatum reppour l’amélioration..</p>
                    </div>
                </div>
                <div class="flex flex-wrap mt-4 gap-8">
                    <x-primary-button href="#" class="">
                        {{ __('Nous soutenir') }}
                    </x-primary-button>
                    <x-secondary-button href="#" class="">
                        {{ __('Devenir membre') }}
                    </x-secondary-button>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 lg:py-8 my-8 lg:my-12">
        <div class="flex gap-16 items-center justify-between flex-wrap">
            <div class="flex-1 space-y-4">
                <img src="{{ asset("assets/images/nos-actions/programme-1.png") }}" class="w-full bg-cover" alt="">
{{--                <div class="flex items-center gap-4">--}}
{{--                    <img src="{{ asset("assets/images/nos-actions/programme-2.png") }}" class="w-full bg-cover h-auto" alt="">--}}
{{--                    <img src="{{ asset("assets/images/nos-actions/programme-3.png") }}" class="w-full bg-cover  h-auto" alt="">--}}
{{--                </div>--}}
            </div>
            <div class="flex-1">
                <h2 class="title-section mb-2">Programmes clés</h2>
                <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minima voluptatum reppour l’amélioration de la qualité de vie, le rapprochement des communautés africaines à travers les secteurs de l’éducation.</p>
                <div class="py-8 grid grid-cols-4 gap-4 items-center">
                    <div class="col-span-2">
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="" >
                        <p class="paragraph pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minima voluptatum reppour l’amélioration..</p>
                    </div>
                    <div class="col-span-2">
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="">
                        <p class="paragraph pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minima voluptatum reppour l’amélioration..</p>
                    </div>
                    <div class="col-span-2">
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="" >
                        <p class="paragraph pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minima voluptatum reppour l’amélioration..</p>
                    </div>
                    <div class="col-span-2">
                        <img src="{{ asset("assets/images/icons/icon-record.png") }}" alt="">
                        <p class="paragraph pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minima voluptatum reppour l’amélioration..</p>
                    </div>
                </div>
                <div class="flex flex-wrap mt-4 gap-8">
                    <x-primary-button href="#" class="">
                        {{ __('Nous soutenir') }}
                    </x-primary-button>
                    <x-secondary-button href="#" class="">
                        {{ __('Devenir membre') }}
                    </x-secondary-button>
                </div>
            </div>
        </div>
    </section>
@endsection
