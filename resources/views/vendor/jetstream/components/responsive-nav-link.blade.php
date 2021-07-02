@props(['active'])

@php
$classes = $active ?? false ? 'block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-normal text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition' : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-normal text-black-700 hover:text-black-800 hover:bg-gray-50 hover:border-black-300 focus:outline-none focus:text-black-800 focus:bg-gray-50 focus:border-black-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
