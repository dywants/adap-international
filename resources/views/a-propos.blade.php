@extends('layouts.master')

@section('content')
    <div class="relative px-8 lg:px-12 my-16">
        <div class="mx-auto max-w-2xl lg:max-w-5xl">
            <div class="grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:grid-rows-[auto_1fr] lg:gap-y-12">
                <div class="lg:pl-20">
                    <div class="max-w-xs px-2.5 lg:max-w-none">
                        <img alt="" sizes="(min-width: 1024px) 32rem, 20rem" src="{{ asset('assets/images/tchokossa/TCHOKOSSA.JPG') }}" class="aspect-square  rounded-2xl bg-zinc-100 object-cover dark:bg-zinc-800" loading="lazy" style="color: transparent;" width="800" height="800"></div>
                </div>
                <div class="lg:order-first lg:row-span-2">
                    <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl">Association Internationale pour le Développement,
                        l’Assistance et la Paix
                    </h1>
                    <div class="mt-6 space-y-7 text-lg leading-9 text-zinc-600">
                        <p>En Créant ADAP-International au Cameroun à l’orée des années 2002, Nous
                            voulions penser et implémenter une nouvelle façon d’œuvrer dans le social.
                            Nous étions de cet avis qu’il était nécessaire d’être à même de nous
                            prendre en charge et financer nos activités sociales sur la base de sources
                            de rentrées créées par nous grâce à notre expertise et notre savoir-faire en
                            management social.
                        </p>

                        <p> Le projet de publication d’ouvrage encadré par notre organisation rentre
                            dans cet ordre de perception. A savoir, mettre à la disposition de
                            l’association une portion raisonnable des revenues pour le financement des
                            activités sociales. Cela est possible après désintéressement de tous les
                            partenaires financiers.</p>
                        <p>ADAP-International entend fortement coopérer avec les collectivités
                            municipales dans les domaines du tourisme, l’encadrement de la jeunesse
                            désœuvrée.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-front.find-work></x-front.find-work>

    <section class="mx-auto max-w-screen-2xl px-8 sm:px-20 my-16 sm:my-32">
        <div class="flex flex-col sm:flex-row gap-16 sm:gap-32 justify-between items-center">
            <div class="flex-1">
                <h2 class="title-section mb-5">ADAP International en chiffres</h2>
                <p class="text-lg text-gray-500">Nos actions oeuvres a l'amelioration de la situation des denumies et le soutien des elus du.</p>
                <div class="flex flex-wrap mt-4">
                    <x-primary-button href="#" class="">
                        {{ __('Faire un don') }}
                    </x-primary-button>
                </div>
            </div>
            <div class="flex-1">
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                    <div class="text-center rounded-lg border p-10 col-span-2 hover:bg-primaryLight">
                        <span class="number">12</span>
                        <p class="text-lg text-gray-500"> Projets sociaux menes a termes</p>
                    </div>
                    <div class="text-center rounded-lg border p-10 col-span-2 hover:bg-primaryLight">
                        <span class="number">+30</span>
                        <p class="paragraph"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minima</p>
                    </div>
                    <div class="text-center rounded-lg border p-10 col-span-2 hover:bg-primaryLight">
                        <span class="number">+125</span>
                        <p class="paragraph"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minima</p>
                    </div>
                    <div class="text-center rounded-lg border p-10 col-span-2 hover:bg-primaryLight">
                        <span class="number">32</span>
                        <p class="paragraph"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minima</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-16">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Notre equipe</h2>
                <p class="font-light text-gray-500 sm:text-xl text-xl dark:text-gray-400">Cet organe est constitué des membres fondateurs, des membres du conseil d’administration des représentations, de personnes ressources.</p>
            </div>
            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <div class="text-center text-gray-500 ">
                    <img class="mx-auto mb-4" src="{{ asset('assets/images/equipe/user-avatar.png') }}" alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Vincent TCHOKOSSA</a>
                    </h3>
                    <p>Président</p>
                    <p>USA-Pic</p>
                </div>
                <div class="text-center text-gray-500 ">
                    <img class="mx-auto mb-4" src="{{ asset('assets/images/equipe/user-avatar.png') }}" alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Serge NDONGO</a>
                    </h3>
                    <p>Membre</p>
                    <p>Country-Pic</p>
                </div>
                <div class="text-center text-gray-500 ">
                    <img class="mx-auto mb-4" src="{{ asset('assets/images/equipe/user-avatar.png') }}" alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Julienne NGATCHOU</a>
                    </h3>
                    <p>Membre</p>
                    <p>Cameroun-Pic</p>
                </div>
                <div class="text-center text-gray-500 ">
                    <img class="mx-auto mb-4" src="{{ asset('assets/images/equipe/user-avatar.png') }}" alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Brigitte NJIKEUNTCHI</a>
                    </h3>
                    <p>Membre</p>
                    <p>France-Pic</p>
                </div>
            </div>
        </div>
    </section>
@endsection
