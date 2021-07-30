@props(['slot', 'type' => 'basic'])
@php
$type ?? '';
if ($type === 'primary') {
    $style = 'text-white bg-blue-800';
} elseif ($type === 'warning') {
    $style = 'text-black bg-yellow-800';
} elseif ($type === 'danger') {
    $style = 'text-black bg-red-800';
} elseif ($type === 'pink') {
    $style = 'text-black bg-pink-800';
} elseif ($type === 'basic') {
    $style = 'text-black bg-white';
}
@endphp
<button
    class="{{ $style }} max-w-sm px-3 py-2 mx-2 text-sm font-bold border-2 border-black rounded-md box-shadow shadow-drop sm:max-w-sm">
    {{ $slot }}
</button>
