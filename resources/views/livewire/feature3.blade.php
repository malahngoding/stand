@extends('layouts.looks.main')
@section('title', 'Terms & Condition')

@section('content')
<div class="bg-blue-b2 w-full h-full">
    <div class="px-4">
        <div class="flex justify-center">
            <div class=" pb-4 border-t-8 border-blue-b3 w-full">
            </div>
        </div>
        <div class="pt-20 px-72">
            <div class="grid grid-cols-4 justify-items-center">
                <div class="border-l-4 border-blue-b1">
                    <p class="text-sm font-bold px-2">More than 50% of US teachers use Kurtis</p>
                </div>
                <div class="border-l-4 border-blue-b4">
                    <p class="text-sm font-bold px-2 break-words">Players in more than <br> 200 countries</p>
                </div>
                <div class="border-l-4 border-blue-b5">
                    <p class="text-sm font-bold px-2">Over 30 million public games available</p>
                </div>
                <div class="border-l-4 border-yellow">
                    <p class="text-sm font-bold px-2">97% of the Fortune 500 use Kurtis</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center pt-20">
            <img width="500px" height="500px" src="{{ url('storage/photos/feature3.png') }}" alt="1">

            <div class="">
                <p class="text-5xl font-black px-12 py-10">Ready for make</p>
                <p class="text-5xl font-black px-12 pb-10">learning fun!</p>

                <div class="pl-12">
                    <button
                        class="bg-blue-b1 text-white font-bold py-2 px-12 border-b-4 hover:border-b-2 hover:border-t-2 border-black hover:border-blue-100 rounded">Sign
                        up for free</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
