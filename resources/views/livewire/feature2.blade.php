@extends('layouts.looks.main')
@section('title', 'Terms & Condition')

@section('content')
<div class="pt-6">
    <div class="flex justify-center pb-8 text-sm">
        <p>Still more? </p>
        <span class="ml-2 text-blue-masive font-bold underline text-sm">
            Take a look to our features games
        </span>
    </div>
    <div class="grid justify-center font-bold">
        <p class="">How does Kurtis work?</p>

    </div>
    <div class="grid justify-center pb-4">
        <p class="border-2 bg-blue-b1 border-blue-b1 w-12"></p>
    </div>
    <div class="flex justify-center px-44">
        <div class="pl-80 pr-14">
            <div class="pb-8">
                <img width="250px" height="250px" src="{{ url('storage/photos/feature2-1.png') }}" alt="1">
            </div>
            <div class="pb-8">
                <p class="font-bold text-sm">Host or share</p>
                <p class="text-sm">Host a live game with questions
                    on a big screen or share a game with remote players.</p>
            </div>
            <div>
                <img width="250px" height="250px" src="{{ url('storage/photos/feature2-3.png') }}" alt="3">
            </div>

        </div>
        <div class="pr-80">
            <div class="pb-32">
                <p class="font-bold text-sm">Create</p>
                <p class="text-sm">It only takes minutes to create a
                    learning game or trivia quiz on
                    any topic, in any language.</p>
            </div>
            <div class="pb-8">
                <img width="250px" height="250px" src="{{ url('storage/photos/feature2-2.png') }}" alt="2">
            </div>
            <div>
                <p class="font-bold text-sm">Play</p>
                <p class="text-sm">Game on! Join a kahoot with a
                    PIN provided by the host and answer questions on your device.</p>
            </div>
        </div>

    </div>
</div>
@endsection
