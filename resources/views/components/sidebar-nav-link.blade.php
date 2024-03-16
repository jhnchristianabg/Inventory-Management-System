@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center px-1 py-3 text-lg md:text-sm w-full text-gray-100 bg-green-800'
            : 'flex items-center px-1 py-3 text-lg md:text-sm w-full transition duration-300 ease-in-out hover:bg-green-700 hover:text-gray-100 text-black-800';
@endphp
<!-- -->
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $icon }}
    <span>{{ $slot }}</span>
</a>

