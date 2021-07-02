@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-normal text-xs text-black-800']) }}>
    {{ $value ?? $slot }}
</label>
