@extends('layouts.adminlayouts.adminbase')

@section('body')
<div class="flex h-screen bg-white dark:bg-gray-900" :class="{ &#39;overflow-hidden&#39;: isSideMenuOpen}">
    <x-adminnavigations.sidebar />
    <div class="flex flex-col flex-1">
    <x-adminnavigations.navbar />
    <main class="h-full pb-16 pl-6 pt-6 pr-6 overflow-y-auto">
        @yield('content')
    </main>

    </div>
</div>
{{-- <x-adminnavigations.footer /> --}}
@isset($slot)
{{ $slot }}
@endisset
@endsection
