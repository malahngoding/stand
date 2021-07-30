  <nav class="w-full p-4 py-4 bg-white border-b-2 border-black-300 md:px-8" x-data="{open: false}">
      <div x-show="open" class="fixed top-0 left-0 z-10 flex flex-row w-full h-full" x-cloak>
          <div class="w-3/4 h-full bg-white border-b-2 border-black-300 md:hidden">
              <div class="h-16 bg-none"></div>
              <div class="flex flex-col px-4 items-left content-left">
                  <a class="my-4 mr-4 text-xl font-bold text-blue" href="/study">Study</a>
                  <a class="my-4 mr-4 text-xl font-bold text-pink" href="/camps">Camps</a>
                  <a class="my-4 mr-4 text-xl font-bold text-green" href="/about-us">About Us</a>
              </div>
          </div>
          <div class="w-1/4 bg-black bg-opacity-50 border-l-2 border-black-800" @click="open = false">
          </div>
      </div>
      <div class="flex items-center content-center justify-between h-6 md:h-8">
          <a aria-label="Malah Ngoding" href="/">
              <x-instead.branding scale="1.1" />
          </a>
          <div class="items-center content-center hidden md:flex justify-evenly">
              <a class="mx-6 font-bold hover:text-blue {{ request()->is('study') ? 'text-blue' : '' }}"
                  href="/study">Study</a>
              <a class="mx-6 font-bold hover:text-pink {{ request()->is('camps') ? 'text-pink' : '' }}"
                  href="/camps">Camps</a>
              <a class="mx-6 font-bold hover:text-green {{ request()->is('about-us') ? 'text-green' : '' }}"
                  href=" /about-us">About Us</a>
          </div>
          <div class="items-center content-center hidden md:flex justify-evenly">
              <div class="space-x-4"></div>
              @if (Route::has('login'))
                  @auth
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                          class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:outline-none focus:underline">
                          Log out
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  @else
                      <a href="{{ route('login') }}">
                          <x-instead.button>Masuk</x-instead.button>
                      </a>
                      @if (Route::has('register'))
                          <a href="{{ route('register') }}">
                              <x-instead.button type="primary">Daftar</x-instead.button>
                          </a>
                      @endif
                  @endauth
              @endif

          </div>
          <div class="text-black md:hidden">
              <button @click="open = true"
                  class="inline-flex items-center justify-center p-2 text-black rounded-md bg-black-100 hover:text-white hover:bg-black-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-black-800 focus:ring-white">
                  <span class="sr-only">Open main menu</span>
                  <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                      </path>
                  </svg>
                  <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                      </path>
                  </svg>
              </button>
          </div>
      </div>
  </nav>
