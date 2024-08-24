@props(['size' => 'base'])

@php
    $size = match ($size) {
        'xs' => 'text-xs px-1 py-0.5 mx-1',
        'sm' => 'text-sm px-2 py-1 mx-1',
        'base' => 'text-base px-3 py-1.5 mx-1',
        'lg' => 'text-lg px-4 py-2 mx-2',
        'xl' => 'text-xl px-5 py-2.5 mx-2.5',
        default => 'text-base px-3 py-1.5 mx-1',
    };
@endphp

<a
    {{ $attributes->merge([
        'class' => "bg-white/10 hover:bg-white/25 $size rounded-full transition duration-300",
    ]) }}>
    {{ $slot }}
</a>
