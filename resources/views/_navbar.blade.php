<nav class=" flex items-center bg-blue-200  py-2 " aria-label="Global">
    <div class="flex ml-2">
        <a href="#" class="-m-1.5 p-1.5 bg-gray-300 rounded-xl ml-3 mr-2">
            <span class="sr-only">Portfolio Builder</span>
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
        </a>
    </div>
    <div class="flex lg:hidden">
        <button type="button"
            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <!-- Heroicon name: outline/bars-3 -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12 px-56">
        <a href="/" class="text-sm font-semibold leading-6 space-x-0 text-gray-900">Home</a>

        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">AboutUs</a>

        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">ContactUs</a>

    </div>
    <div class="hidden lg:flex lg:gap-x-12 mt-2 mb-0">
        @if (Route::has('login'))
            <div class="hidden top-0 right-0 px-6 py-4  sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <button class="border border-black width-full px-5 bg-gray-300 rounded-xl"><a
                            href="{{ route('login') }}">Log
                            in</a></button>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="border width-full px-5 border-black bg-gray-300 rounded-xl">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

</nav>