@extends('layouts.looks.main')
@section('title', 'Terms & Condition')

@section('content')

<div class=" flex flex-col border-4 border-black bg-white rounded-3xl m-5 ">
    <div class="flex flex-row border-4 border-white bg-white mx-5 mt-5 rounded-3xl">
        <div class="flex flex-1 m-5 mt-6 mb-0  font-bold">
            Hi {{Auth::user()->name}}
        </div>
        <div class="flex flex-1 justify-end m-4">
            <img class="flex rounded-full h-10 w-10" src="https://i.postimg.cc/PJckkCxW/3.png" alt="" />
        </div>
    </div>


    @if ($progressbutton)
    <a href="{{route('quiz', ['quiz_group' => $quiz_group, 'quiz_number' => $no_quiz])}}">
        <div wire:click="mantap" class="flex flex-row border-4 border-orange mx-5 bg-orange m-6 rounded-3xl">
            <div class="flex flex-1">
                <div class="flex flex-col justify-center">
                    <div class="ml-3 mt-3">Lanjutkan Quizmu</div>
                    <div class="mt-1 ml-3 mb-3 font-bold ">{{$question_name}}</div>
                </div>
            </div>
            <div
                class="flex rounded-full h-12 w-12 items-center justify-center bg-orange border-b-4 border-l-4 border-t-4 border-yellow m-5 mr-8">
            </div>
        </div>
    </a>
    @endif

    @if ($finishbutton)
    <div class="flex flex-row border-4 border-green mx-5 bg-green m-6 rounded-3xl">
        <div class="flex flex-1">
            <div class="flex flex-col justify-center">
                <div class="text-white ml-3 mt-3">Quiz kamu telah selesai</div>
                <div class="flex flex-row justify-center">
                <div class="mt-1 ml-3 font-bold ">Mendapatkan skor: </div>
                <div class="mt-1 ml-3 font-bold ">{{$TotalScore}}</div>
                </div>
            </div>
        </div>
        <div
            class="flex rounded-full h-12 w-12 items-center justify-center bg-green border-b-4 border-l-4 border-t-4 border-yellow m-5 mr-8">
        </div>
    </div>
    @endif

    <div wire:click="code_flow" class="flex flex-row mt-0 border-4 border-green mx-5 bg-green m-6 rounded-3xl">
        <div class="flex flex-1">
            <div class="flex flex-col justify-center">
                <div class="ml-3 mt-3">Lanjutkan Kodemu</div>
                <div class="mt-1 ml-3 mb-3 font-bold ">{{$get_code_question}}</div>
            </div>
        </div>
        <div
            class="flex rounded-full h-12 w-12 items-center justify-center bg-green border-b-4 border-l-4 border-t-4 border-yellow m-5 mr-8">
        </div>
    </div>

    <div class="flex flex-col border-4 border-purple mx-5 bg-purple rounded-lg">
        <div class="text-white ml-5 mt-2">Progressmu</div>
        <div class="text-black font-bold ml-5">50 point lagi untuk naik ke level 5</div>
        <div>
            <img class="flex mt-4" src="https://i.postimg.cc/xdQjgjds/4.png" alt="" />
        </div>
    </div>
    <div class="flex flex-row border-4 border-white bg-white mx-5 mt-5 ">
        <p class="font-bold uppercase">Peringkat di level 5</p>
    </div>
    @foreach ($quiz as $data)
    @if ($data->isActive !== 'FALSE')
    <div class="flex flex-row border-4 border-white bg-white mx-5 mt-5">
        <div class="flex mx-5 my-5 font-bold text-black">
            {{$loop->iteration}}
        </div>
        <div class="flex  justify center mt-3">
            <img class="flex rounded-full h-10 w-10" src="https://i.postimg.cc/PJckkCxW/3.png" alt="" />
        </div>
        <div class="flex flex-1  mx-5 mt-2">
            <div class="flex flex-col">
                <div class="text-black font-bold">{{$data->name }}</div>
                <div>{{$data->TotalScore }} points</div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    {{-- <div class="flex flex-row border-4 border-white bg-white mx-5 mb-5">
        <div class="flex mx-5 my-5 font-bold text-black">02</div>
        <div class="flex  justify center mt-3">
            <img class="flex rounded-full h-10 w-10" src="https://i.postimg.cc/PJckkCxW/3.png" alt="" />
        </div>
        <div class="flex flex-1  mx-5 mt-2">
            <div class="flex flex-col">
                <div class="text-black font-bold">Pablo Escobar</div>
                <div>20 points</div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
