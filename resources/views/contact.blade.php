@extends('layouts.master')

@section('content')
    <div class="container mb-24 px-6 mx-auto">

        <!-- Section: Design Block -->
        <section class="mb-32 text-gray-800 ">
            <style>
                .map-container {
                    height: 700px;
                    z-index: -1;
                }
            </style>

            <div class="px-6 py-12 md:px-12">
                <div class="container mx-auto">
                    <div class="grid lg:grid-cols-6 gap-10 items-center">
                        <div class="md:mt-12 col-span-4 lg:mt-0 mb-12 lg:mb-0">
                            <div class="block  px-6 py-12 md:px-12 lg:-mr-14">
                                <h2 class="text-3xl font-bold mb-12 uppercase">
                                    Contactez-nous</h2>
                                <form class="w-full">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-first-name">
                                                First Name
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                id="grid-first-name" type="text" placeholder="Jane">
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-last-name">
                                                Last Name
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="grid-last-name" type="text" placeholder="Doe">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-password">
                                                E-mail
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="email" type="email">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-password">
                                                Message
                                            </label>
                                            <textarea
                                                class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                                                id="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="md:flex md:items-center">
                                        <div class="md:w-1/3">
                                            <x-primary-button href="#" class="">
                                                {{ __('Envoyez') }}
                                            </x-primary-button>
                                        </div>
                                        <div class="md:w-2/3"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="md:mb-12 col-span-2 lg:mb-0">
                            <div class="j2x7_17hqRVmwte_tWFa czGmoDY2lMQ_0SyND3x7">
                                <h3 class="text-2xl font-semibold">Points of contact</h3>
                               <div class="mt-4">
                                   <h4 class="text-lg font-medium">US Address</h4>
                                   <span>+1 (713) 592-2074</span> <br>
                                   <span>contact@adap-international.org</span>
                                   <address class=" non-italic">
                                       PO Box 2446m Alief,
                                       <br>Taxes 77411
                                   </address>
                               </div>
                               <div class="mt-4">
                                   <h4 class="text-lg font-medium">Cameroon address</h4>
                                   <span>contact@adap-international.org</span>
                                   <address class="non-italic">
                                       Neue Schönhauser Str. 3-5,
                                       <br>10178 Berlin
                                   </address>

                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-container relative shadow-lg rounded-lg">
                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    class="left-0 top-0 h-full w-full absolute rounded-lg" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>
        <!-- Section: Design Block -->

    </div>
@endsection
