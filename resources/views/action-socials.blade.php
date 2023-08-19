@extends('layouts.master')

@section('content')
    <header class="bg-cover bg-center bg-no-repeat mx-auto max-w-[1460px] rounded-md h-[530px] px-10" style="background-image: url('{{ asset('assets/images/actions-diaspora.png')}}'); ">
        <div class="absolute max-w-[1460px] bg-graded mx-auto px-10 inset-0 h-[530px] "></div>

        <div class="relative mx-auto h-auto max-w-screen-2xl px-10 py-32 sm:px-6 lg:flex lg:items-center lg:px-8">
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
    <section class="max-w-screen-2xl mx-auto px-10 py-32 my-8">
        Forage offert par ADAP-International/USA en 2021. Localité: Nsan Mendouga dans la Lékié. Ce don a été possible grâce au concours de THE BLACKBAUD GIVING FUND - USA.
    </section>
@endsection
