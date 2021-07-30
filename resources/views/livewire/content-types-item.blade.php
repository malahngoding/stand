<div class="p-5">
    <div class="flex flex-col items-start justify-between pb-6 space-y-4  lg:items-center lg:space-y-0 lg:flex-row">
        <div class="space-y-6 space-x-8 md:space-x-2 md:space-y-0">
        </div>
    </div>

    <body class="antialiased font-sans bg-gray-200">
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-black uppercase tracking-wider">
                                        Content Types
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-black uppercase tracking-wider">
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($list as $data)
                                @if ($data->isDelete !== 'FALSE')

                                <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                                    <td wire:click="" class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{$data->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex item-center justify-center">

                                            {{-- EDIT BUTTON --}}

                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg wire:click="updateModal('{{ $data->id }}')"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </div>



                                            {{-- DELETE BUTTON --}}

                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg wire:click="deleteItem('{{ $data->id }}')"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
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

    <div class="flex justify-center items-baseline flex-wrap">
        <div class="flex m-2">
            <button wire:click="handle_text" class="text-base  rounded-r-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
        hover:bg-teal-700 hover:text-teal-100
        bg-teal-100
        text-teal-700
        border duration-200 ease-in-out
        border-teal-600 transition">
                <div class="flex leading-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-edit w-5 h-5 mr-1">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                    Text</div>
            </button>
            <button wire:click="handle_choice" class="text-base  rounded-l-none rounded-r-none border-l-0 border-r-0  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
        hover:bg-teal-700 hover:text-teal-100
        bg-teal-100
        text-teal-700
        border duration-200 ease-in-out
        border-teal-600 transition">
                <div class="flex leading-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-edit w-5 h-5 mr-1">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                    Multiple Choice</div>
            </button>
            <button class="text-base  rounded-l-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
        hover:bg-teal-700 hover:text-teal-100
        bg-teal-100
        text-teal-700
        border duration-200 ease-in-out
        border-teal-600 transition">
                <div class="flex leading-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-eye w-5 h-5 mr-1">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    Number</div>
            </button>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        @foreach ($form as $key => $item)
                        @if ($item['type'] === "TEXT")
                        <div class='w-1/2'>
                            <div class=" pt-2 font-mono">
                                <div class="container mx-auto">
                                    <div class="inputs w-full max-w-2xl mx-auto">
                                        <h2 class="text-2xl text-gray-90S0">Text</h2>
                                        <div class="mt-6 pt-4">
                                            <div class='flex flex-wrap -mx-3 mb-6'>
                                                <div class='w-full md:w-full px-3 mb-6'>
                                                    <input wire:model="form.{{$key}}.name"
                                                        class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                                        id="form.{{$key}}.name" type='text' placeholder='Untitled Text'
                                                        name="form.{{$key}}.name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class='w-1/2'>
                            <div class=" pt-2 font-mono">
                                <div class="container mx-auto">
                                    <div class="inputs w-full max-w-2xl mx-auto">
                                        <h2 class="text-2xl text-gray-900">Multiple Choice</h2>
                                        <div class="mt-6 border-t border-gray-400 pt-4">
                                            <div class='flex flex-wrap -mx-3 mb-6'>
                                                <div class='w-full md:w-full px-3 mb-6'>
                                                    <input wire:model="form.{{$key}}.name"
                                                        class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                                        id="form.{{$key}}.name" type='text'
                                                        placeholder='Untitled Multiple Choice'
                                                        name="form.{{$key}}.name">
                                                </div>
                                                <div class='w-full md:w-full px-3 mb-6'>
                                                    <label
                                                        class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Show
                                                        in
                                                        content item as</label>
                                                    <div class="flex-shrink w-full inline-block relative">
                                                        <select wire:model="form.{{$key}}.show"
                                                            class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                                            <option>Radio Button</option>
                                                            <option>Checkboxes</option>
                                                        </select>
                                                        <div
                                                            class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                                            <svg class="fill-current h-4 w-4"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="personal w-full border-t border-gray-400 pt-4">
                                                    <div class='w-full md:w-full px-3 mb-6'>

                                                        @foreach ($item['options'] as $kunci =>$items)
                                                        <label
                                                            class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Options</label>
                                                        <input wire:model="form.{{$key}}.options.{{$kunci}}"
                                                            placeholder="Add another option"
                                                            class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'>

                                                        @endforeach
                                                    </div>
                                                    <div class="flex justify-end">
                                                        <button wire:click="addOptions({{$key}})"
                                                            class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md mr-3">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <div class="flex-wrap mt-2">
                            <button wire:click="text" class="p-3 bg-blue-500 text-white hover:bg-blue-400"
                                required>Submit</button>
                            <button class="p-3 bg-red-500 text-white hover:bg-red-400" required>Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'content' );
    </script>

    @if ($updatemodal)
    <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8">
                    <br>
                    <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center">Update content type name
                    </h1>
                    <br>
                    <div class="mb-4" wire:model="updated">
                        <textarea placeholder="Untitled content type"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text"></textarea>
                        @error('updated') <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button wire:click="closeModal" id="submit"
                            class="bg-yellow-800 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            <i class="fab fa-whatsapp"></i> Cancel
                        </button>
                        <button wire:click="updateItem" id="submit"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            <i class="fab fa-whatsapp"></i> Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
</div>
