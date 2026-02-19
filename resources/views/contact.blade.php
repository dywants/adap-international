@extends('layouts.master')

@section('content')
    <div class="container mb-24 px-4 sm:px-6 lg:px-8 mx-auto">

        <!-- Section: Design Block -->
        <section class="mb-32 text-gray-800 ">
            <style>
                .map-container {
                    height: 700px;
                    z-index: -1;
                }
            </style>

            @if (session()->has('success'))
                <div class="relative flex flex-col sm:flex-row sm:items-center bg-gray-200 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6 mb-3 mt-3">
                    <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                        <div class="text-green-500" >
                            <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="text-sm font-medium ml-3">Success!.</div>
                    </div>
                    <div class="text-sm tracking-wide text-gray-500 dark:text-white mt-4 sm:mt-0 sm:ml-4"> {{ session('success') }}</div>
                    <div class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </div>
                </div>
            @endif

            <div class="px-6 py-12 md:px-12">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-6 gap-10 items-center">
                        <div class="col-span-1 lg:col-span-4 mb-12 lg:mb-0">
                            <div class="block  px-6 py-12 md:px-12 lg:-mr-14">
                                <h2 class="text-3xl font-bold mb-12 uppercase">
                                    Contactez-nous</h2>
                                <form class="w-full" action="{{ route('contact.send') }}" method="POST">
                                    @csrf
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-first-name">
                                                Votre Nom
                                            </label>
                                            <input name="name"
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                id="grid-first-name" type="text" placeholder="Jane Doe">
                                            @error('name')
                                                 <span class="text-xs text-red-500">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-last-name">
                                                E-mail
                                            </label>
                                            <input name="email"
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="grid-last-name" type="email" placeholder="votre@email.com">
                                            @error('email')
                                            <span class="text-xs text-red-500">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-password">
                                               Sujet de votre email
                                            </label>
                                            <input name="subject"
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="subject" type="text">
                                            @error('subject')
                                            <span class="text-xs text-red-500">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="grid-password">
                                                Message
                                            </label>
                                            <textarea name="message"
                                                class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                                                id="message"></textarea>
                                            @error('message')
                                            <span class="text-xs text-red-500">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="md:flex md:items-center">
                                        <div class="md:w-1/3">
                                            <button type="submit" class="inline-flex justify-center cursor-pointer items-center text-center px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-[16px] text-white uppercase tracking-widest hover:opacity-75 focus:opacity-75 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                {{ __('Envoyez') }}
                                            </button>
                                        </div>
                                        <div class="md:w-2/3"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-span-1 lg:col-span-2 mb-12 lg:mb-0">
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
                                       P.O Box: 18700 Douala Cameroun
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
