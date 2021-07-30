@extends('layouts.looks.base')

@section('body')
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
