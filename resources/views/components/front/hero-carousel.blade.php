<section role="region" aria-roledescription="carousel" aria-label="{{ __('home.page-title') }}"
    x-data="heroCarousel()" x-init="init()">
    <div class="relative flex overflow-x-auto snap-x snap-mandatory scroll-smooth scrollbar-hide"
        x-ref="container"
        @mouseenter="stopAutoplay()" @mouseleave="startAutoplay()"
        @focusin="stopAutoplay()" @focusout="startAutoplay()">

        {{-- Slide 1 --}}
        <div role="group" aria-roledescription="slide" aria-label="1 of 3"
            class="snap-start w-full flex-shrink-0 relative min-h-[60vh] md:min-h-[80vh]">
            <img src="https://images.unsplash.com/photo-1509099896299-af46ad97ff57?w=1920&h=1080&fit=crop&q=80"
                alt="{{ __('home.hero.slide-0.image-alt') }}"
                class="absolute inset-0 w-full h-full object-cover"
                loading="eager" fetchpriority="high">
            <div class="relative z-10 bg-dark-overlay flex items-center min-h-[60vh] md:min-h-[80vh]">
                <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-white">
                    <h2 class="text-3xl md:text-5xl font-bold mb-4 max-w-2xl text-white">{{ __('home.hero.slide-0.title') }}</h2>
                    <p class="text-lg md:text-xl mb-8 max-w-xl">{{ __('home.hero.slide-0.subtitle') }}</p>
                    <a href="{{ url('/nos-actions') }}"
                        class="inline-block bg-primary text-dark font-bold px-8 py-3 rounded-lg hover:opacity-90 transition">
                        {{ __('home.hero.slide-0.cta') }}
                    </a>
                </div>
            </div>
        </div>

        {{-- Slide 2 --}}
        <div role="group" aria-roledescription="slide" aria-label="2 of 3"
            class="snap-start w-full flex-shrink-0 relative min-h-[60vh] md:min-h-[80vh]">
            <img src="https://images.unsplash.com/photo-1615463669098-521a22047a1e?w=1920&h=1080&fit=crop&q=80"
                alt="{{ __('home.hero.slide-1.image-alt') }}"
                class="absolute inset-0 w-full h-full object-cover"
                loading="lazy">
            <div class="relative z-10 bg-dark-overlay flex items-center min-h-[60vh] md:min-h-[80vh]">
                <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-white">
                    <h2 class="text-3xl md:text-5xl font-bold mb-4 max-w-2xl text-white">{{ __('home.hero.slide-1.title') }}</h2>
                    <p class="text-lg md:text-xl mb-8 max-w-xl">{{ __('home.hero.slide-1.subtitle') }}</p>
                    <a href="{{ url('/tousrisne-humanitaire') }}"
                        class="inline-block bg-primary text-dark font-bold px-8 py-3 rounded-lg hover:opacity-90 transition">
                        {{ __('home.hero.slide-1.cta') }}
                    </a>
                </div>
            </div>
        </div>

        {{-- Slide 3 --}}
        <div role="group" aria-roledescription="slide" aria-label="3 of 3"
            class="snap-start w-full flex-shrink-0 relative min-h-[60vh] md:min-h-[80vh]">
            <img src="https://images.unsplash.com/photo-1632215861513-130b66fe97f4?w=1920&h=1080&fit=crop&q=80"
                alt="{{ __('home.hero.slide-2.image-alt') }}"
                class="absolute inset-0 w-full h-full object-cover"
                loading="lazy">
            <div class="relative z-10 bg-dark-overlay flex items-center min-h-[60vh] md:min-h-[80vh]">
                <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-white">
                    <h2 class="text-3xl md:text-5xl font-bold mb-4 max-w-2xl text-white">{{ __('home.hero.slide-2.title') }}</h2>
                    <p class="text-lg md:text-xl mb-8 max-w-xl">{{ __('home.hero.slide-2.subtitle') }}</p>
                    <a href="{{ url('/contact') }}"
                        class="inline-block bg-primary text-dark font-bold px-8 py-3 rounded-lg hover:opacity-90 transition">
                        {{ __('home.hero.slide-2.cta') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Indicator Dots --}}
    <div role="tablist" class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-20"
        style="position: relative; margin-top: -3rem;">
        <template x-for="i in 3" :key="i">
            <button role="tab"
                :aria-selected="currentSlide === (i - 1)"
                :aria-label="'Go to slide ' + i"
                @click="scrollTo(i - 1)"
                class="w-3 h-3 rounded-full transition-all duration-300"
                :class="currentSlide === (i - 1) ? 'bg-primary scale-125' : 'bg-white/60 hover:bg-white/80'">
            </button>
        </template>
    </div>
</section>
