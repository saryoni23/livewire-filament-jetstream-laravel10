@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full gap-2 py-2 bg-yellow-100  hover:text-yellow-900 text-sm text-yellow-500 '
            : 'block w-full gap-2 py-2 bg-white  hover:text-yellow-900 hover:bg-yellow-100 text-sm text-gray-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
