@extends('layouts.adminlayouts.adminmain')
@section('title', 'Terms & Condition')

@section('content')
{{-- <div x-data> --}}
    {{-- <livewire:content-types-item/> --}}
    @livewire('content-panel')
{{-- </div> --}}
@endsection
