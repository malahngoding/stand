@props(['active'])

@php
$classes = $active ?? false ? 'inline-flex items-center px-1 pt-1  border-indigo-400 text-sm font-black leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition' : 'inline-flex items-center px-1 pt-1 border-transparent text-sm font-normal leading-5 text-gray-500 hover:text-gray-700 hover:border-black-300 focus:outline-none focus:text-gray-700 focus:border-black-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
