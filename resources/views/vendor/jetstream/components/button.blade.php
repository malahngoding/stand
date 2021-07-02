<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'text-black border-black b-2',
]) }}>
    {{ $slot }}
</button>
