<div class="">
    <img src="{{$image}}" alt="image service" class="bg-cover h-[300px] w-full rounded-lg">
    <h3 class="card-title py-4">{{ $title }}</h3>
    <p class="paragraph mb-2">{{$paragraph}}</p>
    <a href="{{$url}}" class="inline-flex items-center gap-1 mt-6 px-2 py-1 bg-black opacity-75 rounded-md">
        <span class="text-white text-xs">En savoir plus</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
             class="w-6 h-6 text-white">
            <path fill-rule="evenodd"
                  d="M16.72 7.72a.75.75 0 011.06 0l3.75 3.75a.75.75 0 010 1.06l-3.75 3.75a.75.75 0 11-1.06-1.06l2.47-2.47H3a.75.75 0 010-1.5h16.19l-2.47-2.47a.75.75 0 010-1.06z"
                  clip-rule="evenodd"/>
        </svg>
    </a>
{{--    <a href="{{$url}}">Voir plus</a>--}}
</div>
