@extends('layouts.looks.main')
@section('title', 'Terms & Condition')

@section('content')

<div>
    <div class="flex flex-col border-4 border-purple rounded-xl m-5 bg-white overflow-y-auto">
        <div class="flex flex-col border-4 border-purple bg-purple rounded-xl m-3">
            <div class="flex mx-24 my-8 justify-center rounded-full py-3 px-4 flex-row border-2 border-white bg-white text-purple font-bold">Quiz Selesai</div>
            <div class="flex justify-center font-bold text-purple-100">
                Kamu Mendapatkan Nilai
            </div>
            <div class="rounded-full h-24 w-24 mx-32 my-8 flex items-center justify-center bg-white border-4 border-black">
                <div class="flex flex-col text-center">
                    <p class="text-center font-bold text-2xl">{{$totalpoints[0]->nilai}}</p>
                    <p>Points</p>
                </div>
            </div>
            <div>
                <p class="text-center font-bold text-purple-100 mb-8">Total point kamu {{$totalpoints[0]->TotalScore}}</p>
            </div>
    </div>
    <div class="flex flex-row border-4 border-white m-3">
        <div class="flex flex-1 ml-5">
            <div class="flex flex-col">
                <p class="text-gray font-bold justify-center">Jawaban Benar</p>
                <p class="text-black text-2xl font-bold">{{$totalpoints[0]->jawaban_benar}} Soal</p>
            </div>
        </div>
        <div class="flex flex-1">
            <div class="flex flex-col justify-start">
                <p class="text-gray font-bold">Rata-rata point</p>
                <p class="text-black text-2xl font-bold">{{$totalpoints[0]->rata_rata}}</p>
            </div>
        </div>
    </div>
    <div class="flex flex-row border-4 border-white m-3">
        <div class="flex flex-1">
            <div class="flex flex-col ml-5">
                <p class="text-gray font-bold justify-center">Akurasi</p>
                <p class="text-black text-2xl font-bold">{{$totalpoints[0]->akurasi}}%</p>
            </div>
        </div>
        <div class="flex flex-1">
            <div class="flex flex-col justify-start ml-2">
                <p class="text-gray font-bold">Soal dilewati</p>
                <p class="text-black text-2xl font-bold">{{$totalpoints[0]->soal_dilewati}}</p>
            </div>
        </div>
    </div>
    <button wire:click="finish" class="flex mx-24 my-8 justify-center rounded-full py-3 px-4 flex-row border-2 border-purple bg-white text-black font-bold">
        Selesai
    </button>
</div>
