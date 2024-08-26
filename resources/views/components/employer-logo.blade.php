@props(['isWide' => false, 'src' => ''])

@php
    $sizeClass = $isWide ? 'w-[90px] h-[90px]' : 'w-[42px] h-[42px]';
@endphp

<div class="{{ $sizeClass }}">
    <img {{ $attributes->merge(['src' => $src, 'class' => 'rounded-lg w-full h-full object-cover']) }}>
</div>
