<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200">
            Malah Ngoding
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <!-- Active items have the snippet below -->
            {{-- <span
            class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
            aria-hidden="true"
          ></span> --}}

                <!-- Add this classes to an active anchor (a tag) -->
                <!-- text-gray-800 dark:text-gray-100 -->
                <a class="{{(Request::url() === route('main') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('main') }}">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul>
            {{-- <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                        </path>
                    </svg>
                    <span class="ml-4">Forms</span>
                </a>
            </li> --}}
            {{-- <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
                    <span class="ml-4">Cards</span>
                </a>
            </li> --}}
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('charts') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('charts') }}">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                    <span class="ml-4">Charts</span>
                </a>
            </li>
            {{-- <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                        </path>
                    </svg>
                    <span class="ml-4">Buttons</span>
                </a>
            </li> --}}
            {{-- <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span class="ml-4">Modals</span>
                </a>
            </li> --}}
            {{-- <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                    <span class="ml-4">Mantap</span>
                </a>
            </li> --}}
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('list-user') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('list-user') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-file-text">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    <span class="ml-4">Users List</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('skeleton') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('skeleton') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-file">
                        <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                        <polyline points="13 2 13 9 20 9"></polyline>
                    </svg>
                    <span class="ml-4">Skeleton</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('wall-of-message') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('wall-of-message') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-message-square">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    <span class="ml-4">Wall Of Message</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('content-model') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('content-model') }}">
                    <svg class="w-7 h-7" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.5 4C4.22386 4 4 4.22386 4 4.5C4 4.77614 4.22386 5 4.5 5H7.5C7.77614 5 8 4.77614 8 4.5C8 4.22386 7.77614 4 7.5 4H4.5Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M1 4V12C1 13.6569 2.34315 15 4 15H13C14.1046 15 15 14.1046 15 13V4C15 2.34315 13.6569 1 12 1H4C2.34315 1 1 2.34315 1 4ZM12 2H4C2.89543 2 2 2.89543 2 4V7H14V4C14 2.89543 13.1046 2 12 2ZM14 13V8H2V12C2 13.1046 2.89543 14 4 14H13C13.5523 14 14 13.5523 14 13Z" fill="currentColor"></path></svg>
                    <span class="ml-6">Content Model (Taxonomies)</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('content-types') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('content-types') }}">
                    <svg class="w-7 h-7" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.5 4C4.22386 4 4 4.22386 4 4.5C4 4.77614 4.22386 5 4.5 5H7.5C7.77614 5 8 4.77614 8 4.5C8 4.22386 7.77614 4 7.5 4H4.5Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M1 4V12C1 13.6569 2.34315 15 4 15H13C14.1046 15 15 14.1046 15 13V4C15 2.34315 13.6569 1 12 1H4C2.34315 1 1 2.34315 1 4ZM12 2H4C2.89543 2 2 2.89543 2 4V7H14V4C14 2.89543 13.1046 2 12 2ZM14 13V8H2V12C2 13.1046 2.89543 14 4 14H13C13.5523 14 14 13.5523 14 13Z" fill="currentColor"></path></svg>
                    <span class="ml-6">Content Model (Content Types)</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('content-panel') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('content-panel') }}">
                    <svg class="w-5 h-5" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.49994 7.99968C7.2238 7.99968 6.99994 8.22353 6.99994 8.49968 6.99994 8.77582 7.2238 8.99968 7.49994 8.99968H11.4999C11.7761 8.99968 11.9999 8.77582 11.9999 8.49968 11.9999 8.22353 11.7761 7.99968 11.4999 7.99968H7.49994zM7.49994 10.9997C7.2238 10.9997 6.99994 11.2235 6.99994 11.4997 6.99994 11.7758 7.2238 11.9997 7.49994 11.9997H11.4999C11.7761 11.9997 11.9999 11.7758 11.9999 11.4997 11.9999 11.2235 11.7761 10.9997 11.4999 10.9997H7.49994z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4 11.9646C2.30385 11.7219 1 10.2632 1 8.5V4.5C1 2.567 2.567 1 4.5 1H8.5C10.2632 1 11.7219 2.30385 11.9646 4H12C13.6569 4 15 5.34315 15 7V14C15 14.5523 14.5523 15 14 15H7C5.34315 15 4 13.6569 4 12V11.9646ZM2 4.5C2 3.11929 3.11929 2 4.5 2H8.5C9.70948 2 10.7184 2.85888 10.95 4H7C5.34315 4 4 5.34315 4 7V10.95C2.85888 10.7184 2 9.70948 2 8.5V4.5ZM12 5H7C5.89543 5 5 5.89543 5 7V12C5 13.1046 5.89543 14 7 14H14V7C14 5.89543 13.1046 5 12 5Z" fill="currentColor"></path></svg>
                    <span class="ml-4">Content Panel</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('assets') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('assets') }}">
                    <svg class="w-5 h-5" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.49994 7.99968C7.2238 7.99968 6.99994 8.22353 6.99994 8.49968 6.99994 8.77582 7.2238 8.99968 7.49994 8.99968H11.4999C11.7761 8.99968 11.9999 8.77582 11.9999 8.49968 11.9999 8.22353 11.7761 7.99968 11.4999 7.99968H7.49994zM7.49994 10.9997C7.2238 10.9997 6.99994 11.2235 6.99994 11.4997 6.99994 11.7758 7.2238 11.9997 7.49994 11.9997H11.4999C11.7761 11.9997 11.9999 11.7758 11.9999 11.4997 11.9999 11.2235 11.7761 10.9997 11.4999 10.9997H7.49994z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4 11.9646C2.30385 11.7219 1 10.2632 1 8.5V4.5C1 2.567 2.567 1 4.5 1H8.5C10.2632 1 11.7219 2.30385 11.9646 4H12C13.6569 4 15 5.34315 15 7V14C15 14.5523 14.5523 15 14 15H7C5.34315 15 4 13.6569 4 12V11.9646ZM2 4.5C2 3.11929 3.11929 2 4.5 2H8.5C9.70948 2 10.7184 2.85888 10.95 4H7C5.34315 4 4 5.34315 4 7V10.95C2.85888 10.7184 2 9.70948 2 8.5V4.5ZM12 5H7C5.89543 5 5 5.89543 5 7V12C5 13.1046 5.89543 14 7 14H14V7C14 5.89543 13.1046 5 12 5Z" fill="currentColor"></path></svg>
                    <span class="ml-4">Assets</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('questions') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('questions') }}">
                    <svg class="w-5 h-5" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.5 4C4.22386 4 4 4.22386 4 4.5C4 4.77614 4.22386 5 4.5 5H7.5C7.77614 5 8 4.77614 8 4.5C8 4.22386 7.77614 4 7.5 4H4.5Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M1 4V12C1 13.6569 2.34315 15 4 15H13C14.1046 15 15 14.1046 15 13V4C15 2.34315 13.6569 1 12 1H4C2.34315 1 1 2.34315 1 4ZM12 2H4C2.89543 2 2 2.89543 2 4V7H14V4C14 2.89543 13.1046 2 12 2ZM14 13V8H2V12C2 13.1046 2.89543 14 4 14H13C13.5523 14 14 13.5523 14 13Z" fill="currentColor"></path></svg>
                    <span class="ml-4">Questions</span>
                </a>
            </li>

            <li class="relative px-6 py-3">
                <button
                    class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    @click="togglePagesMenu" aria-haspopup="true">
                    <span class="inline-flex items-center">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                            </path>
                        </svg>
                        <span class="ml-4">Pages</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isPagesMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                        class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                        aria-label="submenu">
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="https://windmill-dashboard.vercel.app/pages/login.html">Login</a>
                        </li>
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="https://windmill-dashboard.vercel.app/pages/create-account.html">
                                Create account
                            </a>
                        </li>
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="https://windmill-dashboard.vercel.app/pages/forgot-password.html">
                                Forgot password
                            </a>
                        </li>
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="https://windmill-dashboard.vercel.app/pages/404.html">404</a>
                        </li>
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="https://windmill-dashboard.vercel.app/pages/blank.html">Blank</a>
                        </li>
                    </ul>
                </template>
            </li>
        </ul>
        <div class="px-6 my-6">
            <button
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Create account
                <span class="ml-2" aria-hidden="true">+</span>
            </button>
        </div>
    </div>
</aside>
<!-- Mobile sidebar -->
<!-- Backdrop -->
{{-- <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
    style="display: none;"></div> --}}
<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
    x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
    @keydown.escape="closeSideMenu" style="display: none">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200">
            Malah Ngoding
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <!-- Active items have the snippet below -->
                <!-- <span
            class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
            aria-hidden="true"
          ></span> -->

                <!-- Add this classes to an active anchor (a tag) -->
                <!-- text-gray-800 dark:text-gray-100 -->
                <a class="{{(Request::url() === route('main') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('main') }}">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul>
            {{-- <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="">
                    <svg class=" w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                        </path>
                    </svg>
                    <span class="ml-4">Forms</span>
                </a>
            </li> --}}
            {{-- <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
                    <span class="ml-4">Cards</span>
                </a>
            </li> --}}
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('charts') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('charts') }}">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                    <span class="ml-4">Charts</span>
                </a>
            </li>
            {{-- <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                        </path>
                    </svg>
                    <span class="ml-4">Buttons</span>
                </a>
            </li> --}}
            {{-- <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span class="ml-4">Modals</span>
                </a>
            </li> --}}
            <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                    <span class="ml-4">Tables</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('list-user') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('list-user') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-file-text">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    <span class="ml-4">Pages</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('skeleton') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('skeleton') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-file">
                        <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                        <polyline points="13 2 13 9 20 9"></polyline>
                    </svg>
                    <span class="ml-4">Skeleton</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('wall-of-message') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('wall-of-message') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-message-square">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    <span class="ml-4">Wall Of Message</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('content-model') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('content-model') }}">
                    <svg class="w-7 h-7" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.5 4C4.22386 4 4 4.22386 4 4.5C4 4.77614 4.22386 5 4.5 5H7.5C7.77614 5 8 4.77614 8 4.5C8 4.22386 7.77614 4 7.5 4H4.5Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M1 4V12C1 13.6569 2.34315 15 4 15H13C14.1046 15 15 14.1046 15 13V4C15 2.34315 13.6569 1 12 1H4C2.34315 1 1 2.34315 1 4ZM12 2H4C2.89543 2 2 2.89543 2 4V7H14V4C14 2.89543 13.1046 2 12 2ZM14 13V8H2V12C2 13.1046 2.89543 14 4 14H13C13.5523 14 14 13.5523 14 13Z" fill="currentColor"></path></svg>
                    <span class="ml-6">Content Model (Taxonomies)</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('content-types') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('content-types') }}">
                    <svg class="w-7 h-7" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.5 4C4.22386 4 4 4.22386 4 4.5C4 4.77614 4.22386 5 4.5 5H7.5C7.77614 5 8 4.77614 8 4.5C8 4.22386 7.77614 4 7.5 4H4.5Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M1 4V12C1 13.6569 2.34315 15 4 15H13C14.1046 15 15 14.1046 15 13V4C15 2.34315 13.6569 1 12 1H4C2.34315 1 1 2.34315 1 4ZM12 2H4C2.89543 2 2 2.89543 2 4V7H14V4C14 2.89543 13.1046 2 12 2ZM14 13V8H2V12C2 13.1046 2.89543 14 4 14H13C13.5523 14 14 13.5523 14 13Z" fill="currentColor"></path></svg>
                    <span class="ml-6">Content Model (Content Types)</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('content-panel') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('content-panel') }}">
                    <svg class="w-5 h-5" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.49994 7.99968C7.2238 7.99968 6.99994 8.22353 6.99994 8.49968 6.99994 8.77582 7.2238 8.99968 7.49994 8.99968H11.4999C11.7761 8.99968 11.9999 8.77582 11.9999 8.49968 11.9999 8.22353 11.7761 7.99968 11.4999 7.99968H7.49994zM7.49994 10.9997C7.2238 10.9997 6.99994 11.2235 6.99994 11.4997 6.99994 11.7758 7.2238 11.9997 7.49994 11.9997H11.4999C11.7761 11.9997 11.9999 11.7758 11.9999 11.4997 11.9999 11.2235 11.7761 10.9997 11.4999 10.9997H7.49994z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4 11.9646C2.30385 11.7219 1 10.2632 1 8.5V4.5C1 2.567 2.567 1 4.5 1H8.5C10.2632 1 11.7219 2.30385 11.9646 4H12C13.6569 4 15 5.34315 15 7V14C15 14.5523 14.5523 15 14 15H7C5.34315 15 4 13.6569 4 12V11.9646ZM2 4.5C2 3.11929 3.11929 2 4.5 2H8.5C9.70948 2 10.7184 2.85888 10.95 4H7C5.34315 4 4 5.34315 4 7V10.95C2.85888 10.7184 2 9.70948 2 8.5V4.5ZM12 5H7C5.89543 5 5 5.89543 5 7V12C5 13.1046 5.89543 14 7 14H14V7C14 5.89543 13.1046 5 12 5Z" fill="currentColor"></path></svg>
                    <span class="ml-4">Content Panel</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('assets') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('assets') }}">
                    <svg class="w-5 h-5" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.49994 7.99968C7.2238 7.99968 6.99994 8.22353 6.99994 8.49968 6.99994 8.77582 7.2238 8.99968 7.49994 8.99968H11.4999C11.7761 8.99968 11.9999 8.77582 11.9999 8.49968 11.9999 8.22353 11.7761 7.99968 11.4999 7.99968H7.49994zM7.49994 10.9997C7.2238 10.9997 6.99994 11.2235 6.99994 11.4997 6.99994 11.7758 7.2238 11.9997 7.49994 11.9997H11.4999C11.7761 11.9997 11.9999 11.7758 11.9999 11.4997 11.9999 11.2235 11.7761 10.9997 11.4999 10.9997H7.49994z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4 11.9646C2.30385 11.7219 1 10.2632 1 8.5V4.5C1 2.567 2.567 1 4.5 1H8.5C10.2632 1 11.7219 2.30385 11.9646 4H12C13.6569 4 15 5.34315 15 7V14C15 14.5523 14.5523 15 14 15H7C5.34315 15 4 13.6569 4 12V11.9646ZM2 4.5C2 3.11929 3.11929 2 4.5 2H8.5C9.70948 2 10.7184 2.85888 10.95 4H7C5.34315 4 4 5.34315 4 7V10.95C2.85888 10.7184 2 9.70948 2 8.5V4.5ZM12 5H7C5.89543 5 5 5.89543 5 7V12C5 13.1046 5.89543 14 7 14H14V7C14 5.89543 13.1046 5 12 5Z" fill="currentColor"></path></svg>
                    <span class="ml-4">Assets</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="{{(Request::url() === route('questions') ? 'text-blue-800': '')}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('questions') }}">
                    <svg class="w-5 h-5" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.5 4C4.22386 4 4 4.22386 4 4.5C4 4.77614 4.22386 5 4.5 5H7.5C7.77614 5 8 4.77614 8 4.5C8 4.22386 7.77614 4 7.5 4H4.5Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M1 4V12C1 13.6569 2.34315 15 4 15H13C14.1046 15 15 14.1046 15 13V4C15 2.34315 13.6569 1 12 1H4C2.34315 1 1 2.34315 1 4ZM12 2H4C2.89543 2 2 2.89543 2 4V7H14V4C14 2.89543 13.1046 2 12 2ZM14 13V8H2V12C2 13.1046 2.89543 14 4 14H13C13.5523 14 14 13.5523 14 13Z" fill="currentColor"></path></svg>
                    <span class="ml-4">Questions</span>
                </a>
            </li>

            <li class="relative px-6 py-3">
                <button
                    class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    @click="togglePagesMenu" aria-haspopup="true">
                    <span class="inline-flex items-center">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                            </path>
                        </svg>
                        <span class="ml-4">Pages</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isPagesMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                        class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                        aria-label="submenu">
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="https://windmill-dashboard.vercel.app/pages/login.html">Login</a>
                        </li>
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="https://windmill-dashboard.vercel.app/pages/create-account.html">
                                Create account
                            </a>
                        </li>
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="https://windmill-dashboard.vercel.app/pages/forgot-password.html">
                                Forgot password
                            </a>
                        </li>
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="https://windmill-dashboard.vercel.app/pages/404.html">404</a>
                        </li>
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="https://windmill-dashboard.vercel.app/pages/blank.html">Blank</a>
                        </li>
                    </ul>
                </template>
            </li>
        </ul>
        <div class="px-6 my-6">
            <button
                class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Create account
                <span class="ml-2" aria-hidden="true">+</span>
            </button>
        </div>
    </div>
</aside>
