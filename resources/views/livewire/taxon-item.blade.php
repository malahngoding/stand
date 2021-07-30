<div>

    <div>
        <div class="flex flex-col items-start justify-between pb-6 space-y-4  lg:items-center lg:space-y-0 lg:flex-row">
            <ul>
                <li>
                    <h1 class="text-2xl font-semibold whitespace-nowrap">
                    </h1>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="my-2 flex sm:flex-row flex-col">
                        <div class="flex flex-row mb-1 sm:mb-0">
                        </div>
                        <div class="block relative ">
                            <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">

                            </span>
                            <button wire:click="openModal"
                                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-800 rounded-full shadow ripple hover:shadow-lg hover:bg-yellow-600 focus:outline-none">
                                Create New Taxonomy terms
                            </button>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="space-y-6 space-x-8 md:space-x-2 md:space-y-0">
            </div>
        </div>
        <!-- TABLE -->
        <!-- component -->

        <body class="antialiased font-sans bg-gray-200">
            <div class="container mx-auto px-4 sm:px-8">
                <div class="py-8">
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Taxonomy Terms
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($taxonitem as $item)
                                    @if ($item->isDelete !== 'FALSE')

                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                <div class="ml-3">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{$item->term }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap"></p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm ">
                                            <p class="text-gray-900 break-words whitespace-no-wrap ">
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex item-center justify-center">
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </div>

                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg wire:click="deleteTerm('{{$item->id}}')"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </body>

        {{-- MODAL --}}
        @if ($show)
        <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div
                    class="inline-block align-bottom bg-black rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <br>
                        <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center">Taxonomy term name</h1>
                        <br>
                        <div class="mb-4" wire:model="term">
                            <textarea
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text"></textarea>
                            @error('term') <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between">
                            <button wire:click="closeModal" id="submit"
                                class="bg-yellow-800 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                                <i class="fab fa-whatsapp"></i> Cancel
                            </button>
                            <button wire:click="createTerm"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                <i class="fab fa-whatsapp"></i> Create
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif



    </div>
</div>
