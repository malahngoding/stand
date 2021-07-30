<div x-data>
    <!-- Main content header -->


    {{-- TABLE BARU --}}


    <div>

        <!-- component -->
        <div class="w-auto overflow-hidden rounded-lg shadow-xs mr-6">
            <div class="w-full overflow-x-auto">
                <table class="min-w-max table-auto w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-black bg-gray-400 dark:text-green dark:bg-white">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    @foreach ($users as $user)
                    @if ($user->isActive === 'TRUE')
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800 border-b-2 border-gray-200">
                        <tr class="text-black dark:text-gray-400 ">
                            <td class="px-4 py-3">
                                <div>
                                    <p class="px-4 py-3 text-xm"> {{$user->name }}</p>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <a href="{{ route('detail-profile',['email' => $user->email]) }}">
                                    <p class="text-gray-900 whitespace-no-wrap">{{$user->email}}</p>
                                </a>
                            </td>

                            <td class="px-4 py-3 text-sm">
                                Active
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg wire:click="updateModal('{{$user->email}}')"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg wire:click="showModal('{{$user->email}}')"
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
                    </tbody>
                    @endif
                    @endforeach

                </table>
            </div>
            {{ $users->links('custom-pagination-links-view') }}
        </div>
    </div>

    {{-- MODAL --}}
    @if ($showmodal)
    <div class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-800">
        <div class="bg-white rounded-lg w-1/2">
            <div class="flex flex-col items-start p-4">
                <div class="flex items-center w-full">
                    <div class="text-gray-900 font-medium text-lg">Delete</div>
                    <svg wire:click="close" class="ml-auto fill-current text-gray-700 w-6 h-6 cursor-pointer"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <hr>
                <div class="">Apakah anda yakin?</div>
                <hr>
                <div class="ml-auto">
                    <button wire:click="delete('{{$user->email}}')"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Ya
                    </button>
                    <button wire:click="close"
                        class="bg-transparent hover:bg-gray-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        Tidak
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if ($updatemodal)
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <br>
                    <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center">Account Information</h1>
                    <br>
                    <div class="mb-4">
                        @if ($photo)
                        {{-- Photo Preview: --}}
                        {{-- {{$photo->temporaryUrl()}} --}}
                        {{-- <img src="{{ $photo->temporaryUrl() }}"> --}}
                        @endif
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Photo
                        </label>
                        <input wire:model="photo"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="file">
                        @error('photo') <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Phone Number
                        </label>

                        <input wire:model="form.phone_number"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="tel" id="tel" type="tel">
                        @error('form.phone_number') <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="Date">
                            Date Of Birth
                        </label>
                        <input wire:model="form.date_of_birth"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="date" id="date" type="date">
                    </div>

                    <div class="mb-4">

                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Interest Area
                        </label>
                        <textarea wire:model="form.interest_area"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="message1" id="message1" type="text"></textarea>
                        @error('form.interest_area') <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">

                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Bio
                        </label>
                        <textarea wire:model="form.bio"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="message1" id="message1" type="text"></textarea>
                        @error('form.bio') <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    @error('botram') <span class="text-red-500">{{ $message }}</span>
                    @enderror


                    <div class="flex items-center justify-between">
                        <button wire:click="close" id="submit"
                            class="bg-yellow-800 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            <i class="fab fa-whatsapp"></i> Cancel
                        </button>
                        <button wire:click="submitform"
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
