@extends('layouts.looks.main')
@section('title', 'Terms & Condition')

@section('content')
<div class="bg-blue-b2 w-full h-full">
<div class="px-8 pt-20">
    <div class="flex justify-center pt-20 font-black">
        <p class="text-4xl">Who is Kurtis for?</p>
    </div>
    <div class="grid justify-center pb-20">
        <p class="border-4 border-blue-b1 w-28"></p>
    </div>
    <div class="grid grid-cols-4 justify-items-center px-32">
        <div class="">
            <img class="pb-4 px-12" width="150px" src="{{ url('storage/photos/newfeature-1.png') }}" alt="1">
            <p class="font-bold pb-4 px-12">At School</p>
            <p class="pb-8 px-12">Engaging group and distance learning for teachers and students.</p>
            <p class="font-bold px-12">Learn more</p>
        </div>
        <div class="">
            <img class="pb-4 px-12" width="150px" src="{{ url('storage/photos/newfeature-2.png') }}" alt="2">
            <p class="font-bold pb-4 px-12">At Work</p>
            <p class="pb-8 px-12">For training, e-learning, interactive presentations and more.</p>
            <p class="font-bold px-12">Learn more</p>
        </div>
        <div class="">
            <img class="pb-4 px-14" width="168px" src="{{ url('storage/photos/newfeature-3.png') }}" alt="3">
            <p class="font-bold pb-4 px-14">At Home</p>
            <p class="pb-8 px-14">Apps and games for family fun or home study.</p>
            <p class="font-bold px-14">Learn more</p>
        </div>
        <div class="">
            <img class="pb-4 px-14" width="168px" src="{{ url('storage/photos/newfeature-4.png') }}" alt="4">
            <p class="font-bold pb-4 px-14">Learning apps</p>
            <p class="pb-8 px-14">Engage kids with the Kahoot! family of learning apps.</p>
            <p class="font-bold px-14">Learn more</p>
        </div>
    </div>
    <div class="grid justify-center pt-20">
        <button class="bg-blue-b1 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 hover:border-t-2 border-black hover:border-blue-100 rounded">SIGN UP NOW</button>
    </div>
</div>
</div>
@endsection
