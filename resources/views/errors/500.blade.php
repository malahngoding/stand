<html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
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
</head>

<body>
    <div class="flex w-screen h-screen overflow-y-hidden bg-white" x-data="setup()"
        x-init="$refs.loading.classList.add('hidden')">
        <!-- Loading screen -->
        <div x-ref="loading"
            class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50">
            Loading.....
        </div>
        <div class="flex flex-col flex-1 h-full overflow-hidden">

            <div class="container flex flex-col items-center px-6 mx-auto">
                <svg class="w-12 h-12 mt-8 text-purple-200" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z"
                        clip-rule="evenodd"></path>
                </svg>

                <h1 class="text-6xl font-semibold text-black-800">
                    500
                </h1>
                <p class="text-gray-700">
                    Page error. Check the address or
                    <a class="text-purple-600 hover:underline" href="http://127.0.0.1:8000/">
                        go back
                    </a>
                    .
                </p>
            </div>
        </div>
    </div>
</body>
