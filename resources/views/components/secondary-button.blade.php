@props(['size' => 'md'])

@php
    $sizeClasses = match($size) {
        'sm' => 'px-3 py-1.5 text-xs',
        'lg' => 'px-6 py-3 text-base',
        default => 'px-4 py-2 text-xs',
    };
@endphp

<a {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center ' . $sizeClasses . ' bg-white border border-primary rounded-md font-semibold text-primary uppercase tracking-widest shadow-sm hover:bg-primary hover:text-dark focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
