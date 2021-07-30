@extends('layouts.main')
@section('title', 'Hello World!')

@section('content')
    <div class="w-full px-4 py-8 leading-normal md:p-8 text-md">
        <h3 class="font-bold tracking-widest text-left uppercase text-blue md:text-center">Hello World!</h3>
        <h1 class="text-5xl font-black text-left text-black md:text-center">Malah Ngoding</h1>
    </div>
    <div class="container px-4 pb-32 mx-auto">
        <div class="flex flex-wrap items-center">
            <div class="w-full ml-auto md:w-5/12 md:px-4">
                <div class="md:pr-12">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 p-3 mb-6 font-black text-center text-black bg-white border-2 border-black rounded-md box-shadow shadow-drop">
                        {{ '</>' }}
                    </div>
                    <h3 class="text-3xl font-semibold">Cara termudah belajar koding, langkah demi langkah</h3>
                    <p class="mt-4 text-lg leading-relaxed text-black-800">
                        Belajar koding dan berlatih di platform yang sangat cocok untuk siapa saja. Cocok untuk para calon
                        pengembang web atau aplikasi mobile.
                    </p>
                    <ul class="mt-6 list-none">
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span
                                        class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-gray-100 rounded-full text-black-800">
                                        {{ '</>' }}
                                    </span>
                                </div>
                                <div>
                                    <h4 class="text-black-800">Dari dan untuk <i>Developers</i></h4>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span
                                        class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-gray-100 rounded-full text-black-800">
                                        {{ '</>' }}
                                    </span>
                                </div>
                                <div>
                                    <h4 class="text-black-800">Malah Ngoding cocok untuk pemula yang belum pernah menulis
                                        kode satu baris pun</h4>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span
                                        class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-gray-100 rounded-full text-black-800">
                                        {{ '</>' }}
                                    </span>
                                </div>
                                <div>
                                    <h4 class="text-black-800">Malah Ngoding juga cocok untuk para pengembang web dan
                                        aplikasi mobile yang ingin mengembangkan skill-nya</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full px-4 pt-24 mr-auto md:w-6/12 md:pt-0">
                <style>
                    .skew-it {
                        transform: scale(1) perspective(1040px) rotateY(-11deg) rotateX(2deg) rotate(2deg);
                    }

                </style>
                <img class="max-w-full border-2 border-black rounded-md box-shadow shadow-drop"
                    src="/assets/img/carbon-copy.webp" alt="Carbon Copy">
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center content-center w-full py-16 bg-yellow">
        <h1 class="px-4 text-4xl font-black text-start">Menghabiskan waktu luang untuk malah ngoding.</h1>
        <h2 class="px-4 text-xl text-start">Bingung menghabiskan waktu luang? Yuk malah ngoding aja.</h2>
    </div>
    <div class="flex flex-col items-center content-center w-full pt-16 bg-green">
        <h1 class="px-4 text-4xl font-black">Mulai ngoding dengan semangat</h1>
        <h2 class="px-4 mb-8 text-xl">Bergabung dengan komunitas malah ngoding</h2>
        <a href="/register">
            <x-instead.button type="pink">Bergabung</x-instead.button>
        </a>
        <div class="h-6"></div>
        <div class="w-full h-48 bg-cover bg-green bg-footer-texture"></div>
    </div>
@endsection
