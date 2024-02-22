<section class="bg-cover bg-center bg-no-repeat mx-auto max-w-[1460px] rounded-md md:px-10" style="background-image: url('{{ asset('assets/images/projet-forage/p-forage-2.jpeg')}}'); ">
    <div class="absolute max-w-[1460px] bg-graded mx-auto md:px-10 inset-0 h-[580px] md:h-[580px] "></div>

    <div class="relative mx-auto h-auto max-w-screen-2xl px-10 py-32 sm:px-6 md:flex md:items-center md:px-8">
        <div class="max-w-2xl md:max-w-3xl text-left">
            <h1 class="text-4xl text-white text-left font-extrabold md:text-6xl leading-9">
                {{ __('home.headerText') }} <span class="text-[#0000FF]">{{ __('home.headerText2') }}</span>
                <strong class="block font-extrabold text-secondary">
                    {{ __('home.headerText3') }}
                </strong>
            </h1>

            <p class="mt-4 sm:text-xl text-white sm:leading-relaxed">
                {{ __('home.subHeaderText') }}
            </p>

            <div class="flex flex-wrap mt-4">
                <x-primary-button href="#" class="">
                    {{ __('Nous soutenir') }}
                </x-primary-button>
            </div>
        </div>
    </div>
</section>

