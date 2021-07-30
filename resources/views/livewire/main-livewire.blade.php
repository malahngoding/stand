<div>
    <div
        class="flex flex-col items-start justify-between pb-6 m-2 lg:items-center space-y-4 border-b lg:space-y-0">
        <h1 class="text-2xl font-semibold whitespace-nowrap text-black">Dashboard</h1>
        {{-- <div class="space-y-6 md:space-x-2 md:space-y-0">
              <a
              href="https://github.com/Kamona-WD/starter-dashboard-layout"
              target="_blank"
              class="inline-flex items-center justify-center px-4 py-1 space-x-1 bg-gray-200 rounded-md shadow hover:bg-opacity-20"
            >
              <span>
                <svg class="w-4 h-4 text-gray-500" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                  <path
                    fill-rule="evenodd"
                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"
                  ></path>
                </svg>
              </span>
              <span>View on Github</span>
            </a>
            <a
              href="https://kamona-wd.github.io/kwd-dashboard/"
              target="_blank"
              class="inline-flex items-center justify-center px-4 py-1 space-x-1 bg-red-500 text-white rounded-md shadow animate-bounce hover:bg-red-600"
            >
              <span>See Dark & Light version</span>
            </a>
            </div> --}}
    </div>

    <!-- Start Content -->

    {{-- <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4 w-10/12">

        <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="text-gray-400">Total User</span>

                    <span class="text-lg font-semibold">{{ $users }}</span>
                </div>
                <div class="p-6 bg-gray-200 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-users">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg></div>
            </div>
            <div>
                <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">from 2021</span>
            </div>
        </div>
        <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
            <div class="flex items-start justify-between">
                <div class="flex flex-col space-y-2">
                    <span class="text-gray-400">Total Event</span>

                    <span class="text-lg font-semibold">{{ $event }}</span>
                </div>
                <div class="p-6 bg-gray-200 rounded-md"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-tv">
                        <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                        <polyline points="17 2 12 7 7 2"></polyline>
                    </svg></div>
            </div>
            <div>
                <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">from 2021</span>
            </div>
        </div>
    </div> --}}

    @if ($users || $event !== null)
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4 pt-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-gray-200 rounded-lg shadow-xs dark:bg-gray-800">
              <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                </svg>
              </div>
              <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                  Total Users
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{ $users }}
                </p>
              </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-gray-200 rounded-lg shadow-xs dark:bg-gray-800">
              <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                  Total Events
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{ $event }}
                </p>
              </div>
            </div>
            <!-- Card -->
        </div>
    @else
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
          <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              New sales
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              376
            </p>
          </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
          <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Pending contacts
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              35
            </p>
          </div>
        </div>

    @endif

    <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->


</div>
