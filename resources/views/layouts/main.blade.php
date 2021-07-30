@extends('layouts.base')

@section('body')
    <x-navigations.navbar />
    @yield('content')
    <x-navigations.footer />

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
