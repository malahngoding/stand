<header class="flex-shrink-0 border-b">
    <div class="flex items-center justify-between p-2">
        <!-- Navbar left -->
        <div class="flex items-center space-x-3">
            <span class="p-2 text-xl font-semibold leading-8 tracking-wider uppercase whitespace-nowrap">TALL</span>

            <!-- Toggle sidebar button -->
            <button @click="toggleSidbarMenu()" class="p-2 rounded-md focus:outline-none focus:ring">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-list">
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
                        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
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
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
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
                <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bell">
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
                                <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                            </li>
                            <li>
                                <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another
                                    Link</a>
                            </li>
                        </ul>
                        <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                            <a href="#">See All</a>
                        </div>
                    </div>
                </div>

                <!-- Services Button -->
                <div x-data="{ isOpen: false }">
                    <button @click="isOpen = !isOpen">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                                <a href="#" class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                    <span class="block mt-1">
                                        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                            <path fill="#fff"
                                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
                                <a href="#" class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                    <span class="block mt-1">
                                        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
                        <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                            <a href="#">Show all apps</a>
                        </div>
                    </div>
                </div>

                <!-- Options Button -->

            </div>

            <!-- avatar button -->
            <div class="relative" x-data="{ isOpen: false }">
                @livewire('navbar-profile')

            </div>
        </div>
    </div>
</header>
