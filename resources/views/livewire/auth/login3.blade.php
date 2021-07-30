@section('title', 'Sign in to your account')
<div>
    <form wire:submit.prevent="authenticate">

        {{-- E-MAIL --}}
        <div class="relative w-full mb-3"><input wire:model.lazy="email" id="email" name="email" type="email" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        @error('email')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
        </div>

        {{-- PASSWORD --}}
        <div class="relative w-full mb-3"><input wire:model.lazy="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        @error('password')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
        </div>

        <div><label class="inline-flex items-center cursor-pointer"><input type="checkbox" id="customCheckLogin" class="form-checkbox text-gray-800 ml-1 w-5 h-5" style="transition:all .15s ease"/><span class="ml-2 text-sm font-semibold text-gray-700">Remember me</span></label></div>

        {{-- SIGN IN --}}
        <div class="text-center mt-6"><button type="submit"
            class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out border border-transparent rounded-md bg-blue hover:bg-blue-800 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700">
            Sign In</button></div>
    </form>
</div>
