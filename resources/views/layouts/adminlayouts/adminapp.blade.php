@extends('layouts.adminlayouts.adminbase')

@section('body')
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
