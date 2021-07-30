<div x-data>
<!-- start -->
{{-- <div class="container flex justify-center items-center mx-8 my-0 py-0"> --}}
    <!-- Card -->
    <div class="bg-white -mt-24 shadow-md rounded-lg overflow-hidden">
        <div class="items-center justify-between py-10 px-5 bg-white shadow-2xl rounded-lg mx-auto text-center">
            <div class="px-2 -mt-6">
                <div class="text-center">
                    <h1 class="font-normal text-3xl text-grey-800 font-medium leading-loose my-3 w-full">Get the
                        Latest Information</h1>
                    <div class="w-full text-center">
                            <div class="max-w-sm mx-auto p-3 pr-0 flex items-center">
                                <input type="text" placeholder="Untitled taxonomy group" wire:model="search_query"
                                    class="flex-1 appearance-none rounded shadow p-3 text-grey-dark mr-2 focus:outline-none">

                                <button wire:click="create_taxom('{{$this->id}}')"

                                    class="bg-blue-600 text-white text-base font-semibold rounded-md shadow-md hover:bg-indigo-600 p-3">Save Changes</button>
                            </div>

                            {{-- <div class="max-w-sm mx-auto p-3 pr-0 flex items-center">
                                @foreach ($taxoncreate as $create)
                                <p class="text-gray-900 whitespace-no-wrap leading-snug break-all mr-1">{{ $create->term }}</p>

                                <button wire:click="create_taxom_term"
                                    class="bg-blue-600 text-white text-base font-semibold rounded-md shadow-md hover:bg-indigo-600 p-3 mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                </button>
                                <button wire:click=""
                                    class="bg-blue-600 text-white text-base font-semibold rounded-md shadow-md hover:bg-indigo-600 p-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                </button>
                                @endforeach
                            </div>

                            @if ($inputModal)
                            <h3>Taxonomy term name</h3>
                            <div class="max-w-sm mx-auto p-3 pr-0 flex items-center">
                                <input type="text" placeholder="Input here" wire:model="term_query" required autofocus
                                    class="flex-1 appearance-none rounded shadow p-3 text-grey-dark mr-2 focus:outline-none @error('term') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                <button wire:click="back_create_term"
                                    class="bg-blue-600 text-white text-base font-semibold rounded-md shadow-md hover:bg-indigo-600 p-3 mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </button>
                                <button wire:click="input_taxom_term"
                                    class="bg-blue-600 text-white text-base font-semibold rounded-md shadow-md hover:bg-indigo-600 p-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </button>
                            </div>
                            @endif

                            @if ($createModal)
                            <div class="max-w-sm mx-auto p-1 pr-0 flex items-center">
                                <button wire:click="create_taxom_term"
                                    class="bg-blue-600 text-white text-base font-semibold rounded-md shadow-md hover:bg-indigo-600 p-3">Create new taxonomy term</button>
                            </div>
                            @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end card -->

{{-- </div> --}}
<!-- end -->
</div>
