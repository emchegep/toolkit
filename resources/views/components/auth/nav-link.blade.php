@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'bg-[#a004ac] px-3 py-2 rounded-md text-lg font-semibold text-white flex items-center'
                : 'px-3 py-2 rounded-md text-lg font-semibold text-black flex items-center hover:bg-[#a004ac] hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
