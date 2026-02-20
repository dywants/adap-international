<!--
  This component uses @tailwindcss/line-clamp

  yarn add @tailwindcss/line-clamp
  npm install @tailwindcss/line-clamp

  plugins: [require('@tailwindcss/line-clamp')]
-->

<article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
    <img
        alt="Office"
        src="{{$imagePost}}"
        class="h-56 w-full object-cover"
    />

    <div class="bg-white p-4 sm:p-6">
        <time datetime="2022-10-10" class="block text-xs text-gray-500">
            {{ $datePost }}
        </time>

        <h3 class="mt-0.5 text-lg text-gray-900">
            {{ $title }}
        </h3>

        <p class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3">
           {{$description}}
        </p>

        <a href="{{ $url ?? '#' }}" class="inline-flex items-center gap-1 mt-6 px-2 py-1 bg-black opacity-75 rounded-md">
            <span class="text-white text-xs">{{ __('navbar.button-3') }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                <path fill-rule="evenodd" d="M16.72 7.72a.75.75 0 011.06 0l3.75 3.75a.75.75 0 010 1.06l-3.75 3.75a.75.75 0 11-1.06-1.06l2.47-2.47H3a.75.75 0 010-1.5h16.19l-2.47-2.47a.75.75 0 010-1.06z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
</article>

