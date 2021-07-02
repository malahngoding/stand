<x-guest-layout>
    <div
        class="relative flex items-top justify-center min-h-screen bg-black-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register') && false)
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="flex flex-col justify-center items-center">
            <div class="flex flex-row justify-center items-center">
                <x-jet-application-logo class=" block h-12 w-auto" />
                <div class="ml-2">
                    <h1 class="font-black text-lg">Malah</h1>
                    <h1 class="font-black text-lg">Ngoding</h1>
                </div>
            </div>

            <div class="ml-4 mt-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
            <div style="font-family: monospace">
                This is Malah Ngoding Stand running on {{ app()->env }}
            </div>
        </div>
    </div>
</x-guest-layout>
