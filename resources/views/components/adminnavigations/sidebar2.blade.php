<aside class="float-left w-2/12" :class="{ 'lg:hidden': !isSidebarOpen } "
    x-transition:enter="transition transform duration-300"
    x-transition:enter-start="-translate-x-full opacity-30  ease-in"
    x-transition:enter-end="translate-x-0 opacity-100 ease-out" x-transition:leave="transition transform duration-300"
    x-transition:leave-start="translate-x-0 opacity-100 ease-out"
    x-transition:leave-end="-translate-x-full opacity-0 ease-in"
    class="fixed inset-y-0 z-10 flex flex-col flex-shrink-0 w-64 max-h-screen overflow-hidden transition-all transform bg-white border-r shadow-lg lg:z-auto lg:static lg:shadow-none "
    :class="{'-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen}">
    <!-- sidebar header -->
    <div class="flex items-center justify-between" :class="{'lg:justify-center': !isSidebarOpen} ">
        {{-- <div class="flex items-center justify-between flex-shrink-0 p-2" :class="{'lg:justify-center': !isSidebarOpen}"> --}}
        {{-- <span class="p-2 text-xl font-semibold leading-8 tracking-wider uppercase whitespace-nowrap">
                            K<span :class="{'lg:hidden': !isSidebarOpen}">-WD</span>
                            KWD
                            </span> --}}
        <button @click="toggleSidbarMenu()" class="p-2 rounded-md lg:hidden">
            <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <!-- Sidebar links -->
    <nav class="flex-1 overflow-auto hover:overflow-y-auto font-medium tracking-wider m-1 overscroll-auto">
        <a href="{{ route('main') }}">
            <button
                class=" {{(Request::url() === route('main') ? 'text-blue-800': '')}} flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md active:text-white">
                <span>
                    <svg class="placeholder-blue-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                </span>
                <span> Dashboard </span>
            </button>
        </a>
        <a href="{{ route('list-user') }}">
        <button
            class=" {{(Request::url() === route('list-user') ? 'text-blue-800': '')}} flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md active:text-white">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-file-text">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
            </span>
            <span> Users List </span>

        </button>
    </a>
        <a href="{{ route('detail-profile') }}">
            <button id="aplications"
                class=" {{(Request::url() === route('detail-profile') ? 'text-blue-800': '')}} flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md active:text-white">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-archive">
                        <polyline points="21 8 21 21 3 21 3 8"></polyline>
                        <rect x="1" y="3" width="22" height="5"></rect>
                        <line x1="10" y1="12" x2="14" y2="12"></line>
                    </svg>
                </span>
                <span> Applications </span>
            </button>
        </a>
        <button
            class="flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md active:text-white">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-box">
                    <path
                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                    </path>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                </svg>
            </span>
            <span> UI </span>
        </button>
        <button
            class="flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md active:text-white">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </span>
            <span> Menu </span>
        </button>
        <a href="{{ route('skeleton') }}">
            <button
                class=" {{(Request::url() === route('skeleton') ? 'text-blue-800': '')}} flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md active:text-white">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-file">
                        <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                        <polyline points="13 2 13 9 20 9"></polyline>
                    </svg>
                </span>
                <span> Blank Page </span>
            </button>
        </a>
        <button
            class="flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md max-h-14 active:text-white ">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-book-open">
                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                </svg>
            </span>
            <span> Docs </span>
        </button>
        <a href="{{ route('wall-of-message') }}">
        <button
            class="{{(Request::url() === route('wall-of-message') ? 'text-blue-800': '')}} flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md max-h-14 active:text-white">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
            </span>
            <span> Wall Of Message </span>
        </button>
        </a>
        <a href="{{ route('content-model') }}">
            <button
                class="{{(Request::url() === route('content-model') ? 'text-blue-800': '')}} flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md max-h-14 active:text-white">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                </span>
                <span> Content Model (Taxonomies) </span>
            </button>
        </a>
        <a href="{{ route('content-types') }}">
            <button
                class="{{(Request::url() === route('content-types') ? 'text-blue-800': '')}} flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md max-h-14 active:text-white">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                </span>
                <span> Content Model (Content Types) </span>
            </button>
        </a>
        <a href="{{ route('assets') }}">
            <button
                class="{{(Request::url() === route('assets') ? 'text-blue-800': '')}} flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md max-h-14 active:text-white">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                </span>
                <span> Assets </span>
            </button>
        </a>
        <a href="{{ route('content-panel') }}">
            <button
                class="{{(Request::url() === route('content-panel') ? 'text-blue-800': '')}} flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md max-h-14 active:text-white">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                </span>
                <span> Content Panel </span>
            </button>
        </a>

    </nav>
    <!-- Sidebar footer -->
    <div class="flex-shrink-0 p-2 border-t max-h-14">
    </div>
</aside>
