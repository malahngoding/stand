@extends('layouts.adminlayouts.adminbase')

@section('body')
<div class="flex w-screen h-screen overflow-y-hidden bg-white" x-data="setup()"
    x-init="$refs.loading.classList.add('hidden')">
    <!-- Loading screen -->
    <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50">
        Loading.....
    </div>
    <div class="flex flex-col flex-1 h-full overflow-hidden">
        <x-adminnavigations.navbar />
        <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll overflow-auto">
        <x-adminnavigations.sidebar />
        @yield('content')
        </main>
        <x-adminnavigations.footer />
    </div>
</div>

@isset($slot)
{{ $slot }}
@endisset
@endsection
