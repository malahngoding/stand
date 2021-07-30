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
            Volume Part {{$quizgroup}}
        </div>
        <div class="flex flex-1"></div>
    </div>
    <div class="flex flex-col border-4 border-purple-100 mt-0 mb-5 bg-white mx-5 rounded-b-lg h-full">
        {{-- <div>
            <img class="flex my-8 "src="https://i.postimg.cc/nrGCHb0M/box.png" alt="">
        </div> --}}
        <div>
            <img class="flex my-8 " src="" alt="">
        </div>
        <div class="text-center mx-4 my-4">
            {{$quizquestions}}
        </div>
        <div class="flex justify-center mx-28 rounded-full py-3 px-4 bg-yellow mb-5 text-white">
            Nilai {{$displayCurrentScore}} Point
        </div>
        {{-- <div class="text-center mx-4 my-4">
            Lorem ipsum dol skiamet, consectetur sam elit. Elit viverra massa same ut id?
        </div> --}}

        {{-- <div class="flex flex-row border-4 border-white justify-center">
            <div class="flex mx-2 py-3 px-4 flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                <div>4.3 liter</div>
            </div>
            <div class="flex mx-2 py-3 px-4 flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                <div>6.6 liter</div>
            </div>
            <div class="flex mx-2 py-3 px-4 flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                <div>7.6 liter</div>
            </div>
        </div>
        <div class="flex flex-row border-4 border-white justify-center mt-2 mb-2">
            <div class="flex mx-2 py-3 px-4 flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                <div>4.3 liter</div>
            </div>
            <div class="flex mx-2 py-3 px-4 flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                <div>6.6 liter</div>
            </div>
            <div class="flex mx-2 py-3 px-4 flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                <div>7.6 liter</div>
            </div>
        </div> --}}
        <div class="grid justify-start">
            <div class="pb-2">
                <button wire:click="falseResult" type="submit"
                    class="px-1 py-1 justify-items-center border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                    {{$p1}}
                </button>
            </div>
            <div class="pb-2">
                <button wire:click="falseResult" type="submit"
                    class="px-1 py-1 justify-items-center flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                    {{$p2}}
                </button>
            </div>
            <div class="pb-2">
                <button wire:click="trueResult" type="submit"
                    class="px-1 py-1 justify-items-center flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                    {{$p3}}
                </button>
            </div>
            <div class="pb-2">
                <button wire:click="falseResult" type="submit"
                    class="px-1 py-1 justify-items-center flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                    {{$p4}}
                </button>
            </div>
            <div class="pb-2">
                <button wire:click="falseResult" type="submit"
                    class="px-1 py-1 justify-items-center flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                    {{$p5}}
                </button>
            </div>
            {{-- @foreach ($hello as $hai)
            <div class="pb-2">
                <button wire:click="test1" wire:model = "jawaban"
                    class="px-1 py-1 justify-items-center flex-row border-2 rounded-full border-indigo-600 bg-purple text-purple-100">
                    {{$hai}}
                </button>
            </div>
            @endforeach --}}
        </div>
    </div>

</div>
@endsection
