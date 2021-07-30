<div x-data>
    <div class="flex flex-col items-start justify-between pb-6 space-y-4  lg:items-center lg:space-y-0 lg:flex-row">
        <ul>
            <li>
                <h1 class="text-2xl font-semibold whitespace-nowrap">Assets</h1>
            </li>
        </ul>
    </div>
    <div class="flex flex-col items-start justify-between pb-2 space-y-4  lg:items-center lg:space-y-0 lg:flex-row">
        <ul>
            <li>
                <h1 class="text-xl whitespace-nowrap">Total assets:</h1>
            </li>
        </ul>
    </div>
    <div class="flex flex-col items-start pb-6 space-y-4  lg:items-center lg:space-y-0 lg:flex-row">
        <td>
            {{-- @foreach ($assets as $asset) --}}
            <h1 class="text-xl mr-2 whitespace-nowrap">{{$counts}}</h1>
            {{-- @endforeach --}}
            <tr>
                <h1 class="text-xl whitespace-nowrap mr-96">assets</h1>
            </tr>
            <tr>
                @if ($delete_allModal)
                <div class="inline-block mr-2 mt-2">
                    <button wire:click="delete_all" type="submit" class="focus:outline-none text-red-600 text-sm py-2.5 px-10 rounded-full border border-red-600 hover:bg-red-50 flex items-center" >
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    Delete</button>
                </div>
                @endif
            </tr>
        </td>
    </div>

    <div class="flex flex-col items-start justify-between pb-6 space-y-4  lg:items-center lg:space-y-0 lg:flex-row">

        <button
                wire:click="upload_assets" class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue-800 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-800 hover:text-white">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                </svg>
                <span class="mt-2 text-base leading-normal">Select a file</span>
                {{-- <input type='file' class="hidden" wire:model="files"/> --}}
                {{-- <button  class="hidden"></button> --}}
                {{-- @error('files') <span class="error">{{ $message }}</span> @enderror --}}
        </button>

        {{-- <div>
        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
                d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <input type='file' wire:model="files" />
        <button type="submit" wire:click="upload">Save Photo</button>
        @error('files') <span class="error">{{ $message }}</span> @enderror
        </div> --}}
    </div>
    <div
        class="flex flex-col items-start pb-6 space-y-4  lg:items-center lg:space-y-0 lg:flex-row overflow-scroll max-w-full break-words">
        <div class="flex flex-row flex-wrap">
            @foreach ($assets as $asset)
            @if ($asset->isDelete !== 'TRUE')
            <div class=" w-40 m-4">
                <a href="{{ url('storage/photos/'.$asset->file) }}" target="_blank">
                <img src="{{ url('storage/photos/'.$asset->file) }}" alt="avatar" title=""
                    class="shadow-lg rounded h-auto align-middle border-none mb-2" />
                </a>
                {{-- DeleteButton --}}
                <div class="border border-red-500 p-1">
                <input type="checkbox" class="form-checkbox" name="mantap" value="{{$asset->id}}" wire:model="ids" wire:click="delete_checkbox">
                <label> Delete</label>
                </div>

            </div>
            @endif
            @endforeach
        </div>
    </div>

    {{-- @if ($deleteModal)
    <div class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-800 bg-opacity-50 ">
        <div class="bg-white rounded-lg w-1/2">
            <div class="flex flex-col items-start p-4">
                <div class="flex items-center w-full">
                    <div class="text-gray-900 font-medium text-lg">Menghapus message</div>
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
                    <button wire:click="accept_modal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
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
                    Assets
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


    @if($uploadModal)
    <div class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-800 bg-opacity-50 ">
        <div class="border-solid border-4 border-light-blue-500 p-4 rounded-xl w-1/2 bg-white">
            <h1 class="text-xl font-bold">Input</h1>
            <div class="flex flex-col justify-between lg:flex-row m-1">
              <div class="flex flex-col m-1">
                <input type="file" wire:model="files" class="border-solid border-2 border-light-blue-500 p-4" />
                @error('files') <span class="text-red-500">{{ $message }}</span> @enderror
              </div>
            </div>
            <hr>
            <div class="ml-auto">
                <button wire:click="close_modal"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Tidak
                </button>
                <button wire:click="accept_modal"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Upload
                </button>
            </div>
        </div>
      </div>
    @endif

    <script>
        function myFunction() {
          var x = document.getElementById("myDIV");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
    </script>
</div>
