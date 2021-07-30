<div x-data>
    {{-- <div
        class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row w-10/12">
        <h1 class="text-2xl font-semibold whitespace-nowrap">Detail Profile</h1>
    </div> --}}
    <div class="flex flex-col items-start justify-between pb-6 m-2 lg:items-center space-y-4 border-b lg:space-y-0">
        <h1 class="text-2xl font-semibold whitespace-nowrap">Detail Profile</h1>
    </div>

    <!-- Start Content -->

    <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4 w-10/12">
        <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4">
            <img class="w-full h-56 object-cover object-center" src="{{ url('storage/photos/'.$photos) }}" alt="avatar"
                title="">
            <div class="flex items-center px-6 py-3 bg-gray-900 text-yellow-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-star">
                    <polygon
                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                    </polygon>
                </svg>
                <h1 class="mx-3 text-white font-semibold text-lg">{{ $interest_areas }}</h1>
            </div>
            <div class="py-4 px-6">
                <h1 class="text-2xl font-semibold text-gray-800">{{$names}}</h1>
                <p class="py-2 text-lg text-gray-700">{{$bio}}</p>
                <div class="flex items-center mt-4 text-gray-700">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                        <path
                            d="M239.208 343.937c-17.78 10.103-38.342 15.876-60.255 15.876-21.909 0-42.467-5.771-60.246-15.87C71.544 358.331 42.643 406 32 448h293.912c-10.639-42-39.537-89.683-86.704-104.063zM178.953 120.035c-58.479 0-105.886 47.394-105.886 105.858 0 58.464 47.407 105.857 105.886 105.857s105.886-47.394 105.886-105.857c0-58.464-47.408-105.858-105.886-105.858zm0 186.488c-33.671 0-62.445-22.513-73.997-50.523H252.95c-11.554 28.011-40.326 50.523-73.997 50.523z" />
                        <g>
                            <path
                                d="M322.602 384H480c-10.638-42-39.537-81.691-86.703-96.072-17.781 10.104-38.343 15.873-60.256 15.873-14.823 0-29.024-2.654-42.168-7.49-7.445 12.47-16.927 25.592-27.974 34.906C289.245 341.354 309.146 364 322.602 384zM306.545 200h100.493c-11.554 28-40.327 50.293-73.997 50.293-8.875 0-17.404-1.692-25.375-4.51a128.411 128.411 0 0 1-6.52 25.118c10.066 3.174 20.779 4.862 31.895 4.862 58.479 0 105.886-47.41 105.886-105.872 0-58.465-47.407-105.866-105.886-105.866-37.49 0-70.427 19.703-89.243 49.09C275.607 131.383 298.961 163 306.545 200z" />
                        </g>
                    </svg>
                    <h1 class="px-2 text-sm">{{$date_of_births}}</h1>
                </div>
                <div class="flex items-center mt-4 text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-smartphone">
                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                        <line x1="12" y1="18" x2="12.01" y2="18"></line>
                    </svg>

                    <h1 class="px-2 text-sm">{{$phone_numbers}}</h1>
                </div>
                <div class="flex items-center mt-4 text-gray-700">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                        <path
                            d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z" />
                    </svg>
                    <h1 class="px-2 text-sm">{{$emails}}</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->


</div>
