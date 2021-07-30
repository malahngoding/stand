<div>
    {{-- <button @click="isOpen = !isOpen">
        <img class="object-cover w-8 h-8 rounded-full"
            src="https://avatars0.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
            alt="Ahmed Kamel" />
    </button> --}}
    <!-- green dot -->
    {{-- <div class="absolute right-0 p-1 bg-green-400 rounded-full bottom-3 animate-ping"></div>
    <div class="absolute right-0 p-1 bg-green-400 border border-white rounded-full bottom-3"></div> --}}

    <!-- Dropdown card -->
    {{-- <div @click.away="isOpen = false" x-show.transition.opacity="isOpen"
        class="absolute mt-3 transform -translate-x-full bg-white rounded-md shadow-lg min-w-max"> --}}

        <div class="flex flex-col p-4 space-y-1 font-medium border-b">
            <span class="text-black-800 dark:text-gray-800">{{Auth::user()->name}}</span>
            <span class="text-sm text-gray-400">{{Auth::user()->email}}</span>
        </div>
        <ul class="flex flex-col p-2 my-2 space-y-1">
            <li>
                <a href="{{route('admin-profile', "email=".$users)}}" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Profile</a>
            </li>
        </ul>

        <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    {{-- </div> --}}
</div>
