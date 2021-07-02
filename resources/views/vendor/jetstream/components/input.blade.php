@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'px-2 py-1 placeholder-black-300 text-black-800 relative bg-white rounded-lg text-md border-2 border-black-800 outline-none focus:outline-none focus:ring']) !!}>
