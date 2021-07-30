@extends('layouts.adminlayouts.adminmain')
@section('title', 'Terms & Condition')
@section('content')
    @livewire('taxon-item', ['taxonitem_id' => $id])
@endsection
