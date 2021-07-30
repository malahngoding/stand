@extends('layouts.looks.main')
@section('title', 'Terms & Condition')

@section('content')
<div>
    <div class="flex flex-row border-4 border-gray mt-5 pb-5 bg-gray rounded-t-lg mx-5">
        <div class="flex flex-1 mt-5 justify-center font-bold">
            <button>
                <svg wire:click="back" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-arrow-left">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
            </button>
        </div>
        <div class="flex flex-1 mt-5 justify-center font-bold">
            {{$title}}
        </div>
        <div class="flex flex-1"></div>
    </div>
    <div class="flex flex-col border-4 border-purple-100 mt-0 mb-5 bg-white mx-5 rounded-b-lg">
        <div class="flex p-10">
            <pre>{!! $text !!}</pre>
        </div>
        <div class="flex justify-center mx-28 rounded-full py-3 px-4 bg-yellow mb-5 text-white text-center">
            Nilai {{$score}} Point
        </div>
        <div class="text-center mx-4 my-4">
            Pilih jawaban untuk kolom yang kosong
        </div>

        @foreach ($answer as $jawaban)
        <div class="flex flex-row border-4 border-white justify-center">
            <div class="flex mx-2 py-3 px-4 flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                <div>{{$jawaban}}</div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
