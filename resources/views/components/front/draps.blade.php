<div class="mx-auto max-w-screen-xl pt-16">
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-6 lg:gap-16 place-content-stretch">
                <div class="col-span-2 relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                    <img alt="Party" src="{{ asset('/assets/images/personnes-mains.jpeg') }}"
                         class="absolute inset-0 h-full w-full object-cover" />
                </div>

                <div class="lg:py-24 col-span-4">
                    <section class=" space-y-8">
                        <div
                            class="container flex flex-row items-stretch justify-center w-full space-x-8"
                            x-data="{tab: 1}">
                            <div class="flex flex-col justify-start w-1/4 space-y-4">
                                <a class="px-4 py-2 text-2xl"
                                   :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 1, ' transform -translate-x-2': tab !== 1}"
                                   href="#" @click.prevent="tab = 1">
                                    Notre vision
                                </a>
                                <a class="px-4 py-2 text-2xl"
                                   :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 2, ' transform -translate-x-2': tab !== 2}"
                                   href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                                    Notre mission
                                </a>

                            </div>
                            <div class="w-3/4">
                                <p class="space-y-6 text-xl leading-9" x-show="tab === 1" x-show="tab === 1" x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                                    Participer á la construction d'une société globale dans laquelle les rapports
                                    humains seront privilégiés entre
                                    les africains résident en Afrique et les diasporas africaines à travers le monde
                                </p>

                                <p class="space-y-6 text-xl leading-9" x-show="tab === 2" x-show="tab === 2" x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                                    Œuvrer pour l'amélioration de la qualité de vie, le rapprochement des
                                    communautés africaines á travers les secteurs de l'education et de
                                    l'entrepreneuriat jeune,
                                    la préservation de l'environnement, le renforcement de l'economie locale, la
                                    promotion de la paix, le developpement du potentiel sportif et l'accès aux
                                    services de base
                                </p>
                            </div>
                        </div>
                    </section>

                    {{--                        <a href="#"--}}
                    {{--                            class="mt-8 inline-block rounded bg-secondary px-12 py-3 text-sm font-medium text-white transition hover:opacity-75 focus:outline-none focus:ring focus:ring-yellow-400">--}}
                    {{--                            EN SAVOIR PLUS SUR NOUS--}}
                    {{--                        </a>--}}
                </div>
            </div>
        </div>
    </section>
</div>
