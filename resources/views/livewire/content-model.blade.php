<div x-data>
    <div class="flex flex-col items-start justify-between pb-6 space-y-4  lg:items-center lg:space-y-0 lg:flex-row">
        <ul>
            <li>
                <h1 class="text-2xl font-semibold whitespace-nowrap">Taxonomies</h1>
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
                        <a href="{{ route('create-taxon') }}">
                            <button
                                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-800 rounded-full shadow ripple hover:shadow-lg hover:bg-yellow-600 focus:outline-none">
                                Create New
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
                            <th class="px-4 py-3">Terms</th>
                            <th class="px-4 py-3">Updated</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    @foreach ($taxonomies as $taxon)
                    @if ($taxon->isActive !== 'FALSE')
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800 border-b-2 border-gray-200">
                        <tr class="text-black dark:text-gray-400 ">
                            <td wire:click="getTaxon('{{$taxon->id}}')" class="px-4 py-3">
                                <div>
                                    <p class="px-4 py-3 text-xm"> {{$taxon->name }}</p>
                                </div>
                            </td>
                            <td wire:click="getTaxon('{{$taxon->id}}')" class="px-4 py-3 text-sm">
                                {{$taxon->total }}
                            </td>

                            <td wire:click="getTaxon('{{$taxon->id}}')" class="px-4 py-3 text-sm">
                                {{$taxon->updated_at }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg wire:click="delete_wall('{{ $taxon->id }}')"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
            {{ $taxonomies->links('custom-pagination-links-view') }}
        </div>
    </div>

    {{-- @if ($deleteModal)
    <div class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-800 bg-opacity-50 ">
        <div class="bg-white rounded-lg w-1/2">
            <div class="flex flex-col items-start p-4">
                <div class="flex items-center w-full">
                    <div class="text-gray-900 font-medium text-lg">Menghapus Taxonomy Group</div>
                    <svg wire:click="close_modal" class="ml-auto fill-current text-gray-700 w-6 h-6 cursor-pointer"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <hr>
                <div class="">Apakah anda yakin?</div>
                <hr>
                <div class="ml-auto">
                    <button wire:click="accept_modal"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Iya
                    </button>
                    <button wire:click="close_modal"
                        class="bg-transparent hover:bg-gray-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        Tidak
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif --}}
    @if ($deleteModal)
    <div x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0  transform translate-y-1/2"
            class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
            role="dialog" id="modal">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-end">
                <button wire:click="close_modal"
                    class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                    aria-label="close">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            <!-- Modal body -->
            <div class="mt-4 mb-6">
                <!-- Modal title -->
                <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                    Taxonomies
                </p>
                <!-- Modal description -->
                <p class="text-sm text-gray-700 dark:text-gray-400">
                    Apakah anda yakin ingin menghapus data ini?
                </p>
            </div>
            <footer
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
                <button wire:click="close_modal"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Tidak
                </button>
                <button wire:click="accept_modal"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Iya
                </button>
            </footer>
        </div>
    </div>
    @endif
</div>
