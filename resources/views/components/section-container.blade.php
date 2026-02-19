@props(['tag' => 'section'])

<{{ $tag }} {{ $attributes->merge(['class' => 'max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16']) }}>
    {{ $slot }}
</{{ $tag }}>
