@extends('layouts/looks.base')

@section('body')
<div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ &#39;overflow-hidden&#39;: isSideMenuOpen}">
    {{-- <x-adminnavigations.sidebar /> --}}
    <div class="flex flex-col flex-1">
    {{-- <x-adminnavigations.navbar /> --}}
    <main class="h-full overflow-y-auto">
        @yield('content')
    </main>

    </div>
</div>
{{-- <x-nav.footer /> --}}
@isset($slot)
{{ $slot }}
@endisset
@endsection
