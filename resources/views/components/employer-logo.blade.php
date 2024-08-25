@props(['isWide' => false, 'src' => ''])

@php
    if (!$isWide) {
        $src = Str::replace('90x90.png', '42x42.png', $src);
    }
@endphp

<img {{ $attributes->merge(['src' => $src, 'class' => 'rounded-lg']) }}>
