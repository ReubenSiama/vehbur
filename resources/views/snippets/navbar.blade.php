<nav class="w-full bg-gray-900 text-white font-bold px-4 py-4">
    <div class="hidden sm:flex flex-row justify-between">
        <div class=""></div>
        <div class="flex flex-row justify-center">
            <a href="{{ route('home') }}" class="px-4">Home</a>
            <a href="{{ route('about.us') }}" class="px-4">About</a>
            <a href="{{ route('contact.us') }}" class="px-4">Contact</a>
        </div>
        <div class="">
            <a href="" class="px-4">Login</a>
            <a href="" class="px-4">Register</a>
        </div>
    </div>
    <div class="flex sm:hidden">
        <button></button>
        <svg class="h-8 border rounded-md border-gray-600 px-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
        </svg>
        <div class="text-center font-extrabold w-full text-xl">Vebhur</div>
    </div>
</nav>
