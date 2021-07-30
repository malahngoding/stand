<html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div>
        <div class="flex w-screen h-screen overflow-y-hidden bg-white" x-data="setup()"
            x-init="$refs.loading.classList.add('hidden')">
            <!-- Loading screen -->
            <div x-ref="loading"
                class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50">
                Loading.....
            </div>

            <div class="flex flex-col flex-1 h-full overflow-hidden">
                <!-- Navbar -->
                <header class="flex-shrink-0 border-b">
                    <div class="flex items-center justify-between p-2">
                        <!-- Navbar left -->
                        <div class="flex items-center space-x-3">
                            <span
                                class="p-2 text-xl font-semibold leading-8 tracking-wider uppercase whitespace-nowrap">TALL</span>

                            <!-- Toggle sidebar button -->
                            <button @click="toggleSidbarMenu()" class="p-2 rounded-md focus:outline-none focus:ring">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-list">
                                    <line x1="8" y1="6" x2="21" y2="6"></line>
                                    <line x1="8" y1="12" x2="21" y2="12"></line>
                                    <line x1="8" y1="18" x2="21" y2="18"></line>
                                    <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                    <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                    <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                </svg>
                            </button>
                        </div>

                        <!-- Mobile search box -->
                        <div x-show.transition="isSearchBoxOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20"
                            style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
                            <div @click.away="isSearchBoxOpen = false"
                                class="absolute inset-x-0 flex items-center justify-between p-2 bg-white shadow-md">
                                <div class="flex items-center flex-1 px-2 space-x-2">
                                    <!-- search icon -->
                                    <span>
                                        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </span>
                                    <input type="text" placeholder="Search"
                                        class="w-full px-4 py-3 text-gray-600 rounded-md focus:bg-gray-100 focus:outline-none" />
                                </div>
                                <!-- close button -->
                                <button @click="isSearchBoxOpen = false" class="flex-shrink-0 p-4 rounded-md">
                                    <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Desktop search box -->
                        <div class="items-center hidden px-2 space-x-2 md:flex-1 md:flex md:mr-auto md:ml-5">
                            <!-- search icon -->
                            <span>
                                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </span>
                            <input type="text" placeholder="Search"
                                class="px-4 py-3 rounded-md hover:bg-gray-100 lg:max-w-sm md:py-2 md:flex-1 focus:outline-none md:focus:bg-gray-100 md:focus:shadow md:focus:border" />
                        </div>

                        <!-- Navbar right -->
                        <div class="relative flex items-center space-x-3">
                            <!-- Search button -->
                            <button @click="isSearchBoxOpen = true"
                                class="p-2 bg-gray-100 rounded-full md:hidden focus:outline-none focus:ring hover:bg-gray-200">
                                <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>

                            <div class="items-center hidden space-x-3 md:flex">
                                <!-- Notification Button -->
                                <div class="relative" x-data="{ isOpen: false }">
                                    <!-- red dot -->
                                    <div class="absolute right-0 p-1 bg-red-400 rounded-full animate-ping"></div>
                                    <div class="absolute right-0 p-1 bg-red-400 border rounded-full"></div>
                                    <button @click="isOpen = !isOpen">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                        </svg>
                                    </button>

                                    <!-- Dropdown card -->
                                    <div @click.away="isOpen = false" x-show.transition.opacity="isOpen"
                                        class="absolute w-48 max-w-md mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max">
                                        <div class="p-4 font-medium border-b">
                                            <span class="text-gray-800">Notification</span>
                                        </div>
                                        <ul class="flex flex-col p-2 my-2 space-y-1">
                                            <li>
                                                <a href="#"
                                                    class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another
                                                    Link</a>
                                            </li>
                                        </ul>
                                        <div
                                            class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                            <a href="#">See All</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Services Button -->
                                <div x-data="{ isOpen: false }">
                                    <button @click="isOpen = !isOpen">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-maximize-2">
                                            <polyline points="15 3 21 3 21 9"></polyline>
                                            <polyline points="9 21 3 21 3 15"></polyline>
                                            <line x1="21" y1="3" x2="14" y2="10"></line>
                                            <line x1="3" y1="21" x2="10" y2="14"></line>
                                        </svg>
                                    </button>

                                    <!-- Dropdown -->
                                    <div @click.away="isOpen = false" @keydown.escape="isOpen = false"
                                        x-show.transition.opacity="isOpen"
                                        class="absolute mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max">
                                        <div class="p-4 text-lg font-medium border-b">Web apps & services</div>
                                        <ul class="flex flex-col p-2 my-3 space-y-3">
                                            <li>
                                                <a href="#"
                                                    class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                                    <span class="block mt-1">
                                                        <svg class="w-6 h-6 text-gray-500"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                                            <path fill="#fff"
                                                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                                        </svg>
                                                    </span>
                                                    <span class="flex flex-col">
                                                        <span class="text-lg">Atlassian</span>
                                                        <span class="text-sm text-gray-400">Lorem ipsum dolor
                                                            sit.</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                                    <span class="block mt-1">
                                                        <svg class="w-6 h-6 text-gray-500"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                                        </svg>
                                                    </span>
                                                    <span class="flex flex-col">
                                                        <span class="text-lg">Slack</span>
                                                        <span class="text-sm text-gray-400">Lorem ipsum, dolor sit amet
                                                            consectetur adipisicing elit.</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div
                                            class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                            <a href="#">Show all apps</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Options Button -->
                                <div class="relative" x-data="{ isOpen: false }">
                                    <button @click="isOpen = !isOpen">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-shopping-bag">
                                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                        </svg>
                                    </button>

                                    <!-- Dropdown card -->
                                    <div @click.away="isOpen = false" x-show.transition.opacity="isOpen"
                                        class="absolute w-40 max-w-sm mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max">
                                        <div class="p-4 font-medium border-b">
                                            <span class="text-gray-800">Options</span>
                                        </div>
                                        <ul class="flex flex-col p-2 my-2 space-y-1">
                                            <li>
                                                <a href="#"
                                                    class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another
                                                    Link</a>
                                            </li>
                                        </ul>
                                        <div
                                            class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                            <a href="#">See All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- avatar button -->
                            <div class="relative" x-data="{ isOpen: false }">
                                <button @click="isOpen = !isOpen">
                                    <img class="object-cover w-8 h-8 rounded-full"
                                        src="https://avatars0.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
                                        alt="Ahmed Kamel" />
                                </button>
                                <!-- green dot -->
                                {{-- <div class="absolute right-0 p-1 bg-green-400 rounded-full bottom-3 animate-ping"></div>
                <div class="absolute right-0 p-1 bg-green-400 border border-white rounded-full bottom-3"></div> --}}

                                <!-- Dropdown card -->
                                <div @click.away="isOpen = false" x-show.transition.opacity="isOpen"
                                    class="absolute mt-3 transform -translate-x-full bg-white rounded-md shadow-lg min-w-max">
                                    <div class="flex flex-col p-4 space-y-1 font-medium border-b">
                                        <span class="text-gray-800">Ahmed Kamel</span>
                                        <span class="text-sm text-gray-400">ahmed.kamel@example.com</span>
                                    </div>
                                    <ul class="flex flex-col p-2 my-2 space-y-1">
                                        <li>
                                            <a href="#"
                                                class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another
                                                Link</a>
                                        </li>
                                    </ul>
                                    <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                        <a href="#">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>


                <!-- Main content -->
                <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
                    <!-- Sidebar -->
                    <aside class="float-left w-2/12" :class="{ 'lg:hidden': !isSidebarOpen }"
                        x-transition:enter="transition transform duration-300"
                        x-transition:enter-start="-translate-x-full opacity-30  ease-in"
                        x-transition:enter-end="translate-x-0 opacity-100 ease-out"
                        x-transition:leave="transition transform duration-300"
                        x-transition:leave-start="translate-x-0 opacity-100 ease-out"
                        x-transition:leave-end="-translate-x-full opacity-0 ease-in"
                        class="fixed inset-y-0 z-10 flex flex-col flex-shrink-0 w-64 max-h-screen overflow-hidden transition-all transform bg-white border-r shadow-lg lg:z-auto lg:static lg:shadow-none"
                        :class="{'-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen}">

                        <!-- sidebar header -->
                        <div class="flex items-center justify-between" :class="{'lg:justify-center': !isSidebarOpen}">

                            <button @click="toggleSidbarMenu()" class="p-2 rounded-md lg:hidden">
                                <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <!-- Sidebar links -->
                        <nav class="flex-1 overflow-hidden hover:overflow-y-auto font-medium tracking-wider m-1 ">
                            {{-- <a href="{{ route('main') }}"> --}}
                            <button
                                class="flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md active:text-white">
                                <span>
                                    <svg class="placeholder-blue-800" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </span>
                                <span> Dashboard </span>
                            </button>
                            <a href="{{ route('list-pengguna') }}">
                                <button
                                    class=" {{(route('list-pengguna')? 'text-blue-800': '')}} flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md active:text-white">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-file-text">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </span>
                                    <span> Pages </span>

                                </button>
                            </a>
                            <button
                                class="flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md active:text-white">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-archive">
                                        <polyline points="21 8 21 21 3 21 3 8"></polyline>
                                        <rect x="1" y="3" width="22" height="5"></rect>
                                        <line x1="10" y1="12" x2="14" y2="12"></line>
                                    </svg>
                                </span>
                                <span> Applications </span>
                            </button>
                            <button
                                class="flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md active:text-white">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-box">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-menu">
                                        <line x1="3" y1="12" x2="21" y2="12"></line>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <line x1="3" y1="18" x2="21" y2="18"></line>
                                    </svg>
                                </span>
                                <span> Menu </span>
                            </button>
                            <a href="{{ route('skeleton') }}">
                                <button
                                    class=" flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md active:text-white">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                            <polyline points="13 2 13 9 20 9"></polyline>
                                        </svg>
                                    </span>
                                    <span> Blank Page </span>
                                </button>
                            </a>
                            <button
                                class="flex items-center w-full px-4 py-2 space-x-2 font-medium tracking-wider uppercase hover:bg-gray-100 border rounded-md active:text-white">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-book-open">
                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                    </svg>
                                </span>
                                <span> Docs </span>
                            </button>
                        </nav>
                        <!-- Sidebar footer -->
                        <div class="flex-shrink-0 p-2 border-t max-h-14">
                        </div>
                    </aside>

                    <!-- Main content header -->
                    <div
                        class="flex flex-col items-start justify-between pb-6 space-y-4  lg:items-center lg:space-y-0 lg:flex-row">
                        <ul>
                            <li>
                                <h1 class="text-2xl font-semibold whitespace-nowrap">Blog</h1>
                            </li>
                            <li>
                                <h4>Pages -> Blog -> List</h4>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <div class="my-2 flex sm:flex-row flex-col">
                                    <div class="flex flex-row mb-1 sm:mb-0">
                                        {{-- <div class="relative">
                                            <select class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option>5</option>
                                                <option>10</option>
                                                <option>20</option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="relative">
                                            <select class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                                                <option>All</option>
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                                </svg>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="block relative">
                                        <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                                            <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                                <path
                                                    d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                                                </path>
                                            </svg>
                                        </span>
                                        <input placeholder="Search"
                                            class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="space-y-6 md:space-x-2 md:space-y-0">
                        </div>
                    </div>
                    <!-- TABLE -->
                    <!-- component -->

                    <body class="antialiased font-sans bg-gray-200">
                        <div class="container mx-auto px-4 sm:px-8">
                            <div class="py-8">
                                <div>
                                    <h4 class="text-2xl font-semibold leading-tight">Users</h4>
                                </div>
                                <div class="my-2 flex sm:flex-row flex-col">
                                    <div class="flex flex-row mb-1 sm:mb-0">
                                        <div class="relative">
                                            <select
                                                class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option>5</option>
                                                <option>10</option>
                                                <option>20</option>
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="relative">
                                            <select
                                                class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                                                <option>All</option>
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block relative">
                                        <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                                            <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                                <path
                                                    d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                                                </path>
                                            </svg>
                                        </span>
                                        <input placeholder="Search"
                                            class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                                    </div>
                                </div>
                                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                        <table class="min-w-full leading-normal">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        NAME
                                                    </th>
                                                    <th
                                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        E-MAIL
                                                    </th>
                                                    <th
                                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        STATUS
                                                    </th>
                                                    <th
                                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-full h-full rounded-full"
                                                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                                    alt="" />
                                                            </div>
                                                            <div class="ml-3">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    {{ $list }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <span
                                                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden
                                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">Activo</span>
                                                        </span>
                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <div class="flex item-center justify-center">
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                </svg>
                                                            </div>
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                </svg>
                                                            </div>
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-full h-full rounded-full"
                                                                    src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                                    alt="" />
                                                            </div>
                                                            <div class="ml-3">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    Blake Bowman
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <p class="text-gray-900 whitespace-no-wrap">Editor</p>
                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <span
                                                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden
                                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">Activo</span>
                                                        </span>
                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <div class="flex item-center justify-center">
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                </svg>
                                                            </div>
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                </svg>
                                                            </div>
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-full h-full rounded-full"
                                                                    src="https://images.unsplash.com/photo-1540845511934-7721dd7adec3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                                    alt="" />
                                                            </div>
                                                            <div class="ml-3">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    Dana Moore
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <p class="text-gray-900 whitespace-no-wrap">Editor</p>
                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <span
                                                            class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                                            <span aria-hidden
                                                                class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">Suspended</span>
                                                        </span>
                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <div class="flex item-center justify-center">
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                </svg>
                                                            </div>
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                </svg>
                                                            </div>
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-5 py-5 bg-white text-sm">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-full h-full rounded-full"
                                                                    src="https://images.unsplash.com/photo-1522609925277-66fea332c575?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&h=160&w=160&q=80"
                                                                    alt="" />
                                                            </div>
                                                            <div class="ml-3">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    Alonzo Cox
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-5 py-5 bg-white text-sm">
                                                        <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                                                    </td>
                                                    <td class="px-5 py-5 bg-white text-sm">
                                                        <span
                                                            class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                                            <span aria-hidden
                                                                class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">Inactive</span>
                                                        </span>
                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <div class="flex item-center justify-center">
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                </svg>
                                                            </div>
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                </svg>
                                                            </div>
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="px-5 py-5 bg-white border-t flex justify-start">

                                            <div class="inline-flex mt-2 xs:mt-0">
                                                <ul class="flex">
                                                    <li class="mx-1 px-3 py-2 bg-gray-200 text-gray-500 rounded-lg">
                                                        <a class="flex items-center font-bold" href="#">
                                                            <span class="mx-1">First</span>
                                                        </a>
                                                    </li>
                                                    <li
                                                        class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                                                        <a class="font-bold" href="#">1</a>
                                                    </li>
                                                    <li
                                                        class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                                                        <a class="font-bold" href="#">2</a>
                                                    </li>
                                                    <li
                                                        class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                                                        <a class="font-bold" href="#">3</a>
                                                    </li>
                                                    <li
                                                        class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                                                        <a class="flex items-center font-bold" href="#">
                                                            <span class="mx-1">Last</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <span class="flex justify-items-end text-xs xs:text-sm text-gray-900">
                                                            Show
                                                        </span>
                                                    </li>
                                                    {{-- <li class="justify-end">
                                                        <div class="flex justify-items-end my-2 flex sm:flex-row flex-col">
                                                            <div class="flex flex-row mb-1 sm:mb-0">
                                                                <div class="relative">
                                                                    <select class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                                        <option>5</option>
                                                                        <option>10</option>
                                                                        <option>20</option>
                                                                    </select>
                                                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="relative">
                                                                    <select class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                                                                        <option>All</option>
                                                                        <option>Active</option>
                                                                        <option>Inactive</option>
                                                                    </select>
                                                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="block relative">
                                                                <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                                                                    <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                                                        <path d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <input placeholder="Search" class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                            </div>
                                                        </div>
                                                    </li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </body>

                </main>
                <!-- Main footer -->
                <footer class="flex items-center justify-between flex-shrink-0 p-4 border-t max-h-14">
                    <div>TALL &copy; 2021</div>

                    <div>
                        <!-- Github svg -->
                        <a class="text-blue-400 underline" href="https://github.com/Kamona-WD" target="_blank"
                            rel="noopener noreferrer">Support</a>
                        <span class="divider mx-2">|</span>
                        <a class="text-blue-400 underline" href="https://github.com/Kamona-WD" target="_blank"
                            rel="noopener noreferrer"> Docs</a>

                    </div>
                </footer>
            </div>



            <!-- Settings panel -->
            <div x-show="isSettingsPanelOpen" @click.away="isSettingsPanelOpen = false"
                x-transition:enter="transition transform duration-300"
                x-transition:enter-start="translate-x-full opacity-30  ease-in"
                x-transition:enter-end="translate-x-0 opacity-100 ease-out"
                x-transition:leave="transition transform duration-300"
                x-transition:leave-start="translate-x-0 opacity-100 ease-out"
                x-transition:leave-end="translate-x-full opacity-0 ease-in"
                class="fixed inset-y-0 right-0 flex flex-col bg-white shadow-lg bg-opacity-20 w-80"
                style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
                <div class="flex items-center justify-between flex-shrink-0 p-2">
                    <h6 class="p-2 text-lg">Settings</h6>
                    <button @click="isSettingsPanelOpen = false" class="p-2 rounded-md focus:outline-none focus:ring">
                        <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 max-h-full p-4 overflow-hidden hover:overflow-y-scroll">
                    <span>Settings Content</span>
                    <!-- Settings Panel Content ... -->
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
        <script>
            const setup = () => {
        return {
          loading: true,
          isSidebarOpen: true,
          toggleSidbarMenu() {
            this.isSidebarOpen = !this.isSidebarOpen
          },
          isSettingsPanelOpen: false,
          isSearchBoxOpen: false,
        }
      }
        </script>
    </div>
</body>

</html>
