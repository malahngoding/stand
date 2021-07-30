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
            {{$displayGroupName}}
        </div>
        <div class="flex flex-1"></div>
    </div>
    <div class="flex flex-col border-4 border-purple-100 mt-0 mb-5 bg-white mx-5 rounded-b-lg">
        <div>
            <img class="flex my-8 " src="{{ url('storage/photos/'.$displayPicture) }}" alt="picture" title="">
        </div>
        <div class="flex justify-center mx-28 rounded-full py-3 px-4 bg-yellow mb-5 text-white">
            Nilai {{$displayScore}} Point
        </div>
        <div class="text-center mx-4 my-4">
            {{$checkQuestions}}
        </div>
        @foreach ($checkAnswer as $key => $answer)


        <div class="flex flex-row border-4 border-white justify-center">
            <div wire:click="check_answer('{{$key}}')" class="flex mx-2 py-3 px-4 flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                <div>{{$answer}}</div>
            </div>
            {{-- <div class="flex mx-2 py-3 px-4 flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                <div>6.6 liter</div>
            </div>
            <div class="flex mx-2 py-3 px-4 flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                <div>7.6 liter</div>
            </div> --}}
        </div>
        @endforeach
        <div class="flex flex-row border-4 border-white justify-center mt-2 mb-2">
            {{-- <div class="flex mx-2 py-3 px-4 flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                <div>4.3 liter</div>
            </div>
            <div class="flex mx-2 py-3 px-4 flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                <div>6.6 liter</div>
            </div>
            <div class="flex mx-2 py-3 px-4 flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                <div>7.6 liter</div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
