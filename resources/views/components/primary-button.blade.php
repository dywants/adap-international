@props(['size' => 'md'])

@php
    $sizeClasses = match($size) {
        'sm' => 'px-3 py-1.5 text-sm',
        'lg' => 'px-6 py-3 text-lg',
        default => 'px-4 py-2 text-[16px]',
    };
@endphp

<a  {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center cursor-pointer items-center text-center ' . $sizeClasses . ' bg-primary border border-transparent rounded-md font-semibold text-dark uppercase tracking-widest hover:opacity-75 focus:opacity-75 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
