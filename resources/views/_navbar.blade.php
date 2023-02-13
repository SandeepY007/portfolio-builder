<nav class="flex items-center bg-blue-200  py-5" aria-label="Global">
    <div class="flex ml-2">
        <a href="#" class="-m-1.5 p-1.5 bg-gray-300 rounded-xl ml-3 mr-2">
            <span class="sr-only">Portfolio Builder</span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32"
                height="32">
                <defs>
                    <linearGradient id="a">
                        <stop offset="0" stop-color="#000092" />
                        <stop offset="1" stop-color="#ff00f3" />
                    </linearGradient>
                    <linearGradient id="b" x1="1" x2="29" y1="16" y2="16"
                        gradientUnits="userSpaceOnUse" xlink:href="#a" />
                </defs>
                <path
                    style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                    fill="url(#b)"
                    d="M13.75 5C12.232 5 11 6.252 11 7.78V8H4c-1.653 0-3 1.347-3 3v14.5c0 .417.193.775.459 1.041.266.266.624.459 1.041.459h27c.417 0 .775-.193 1.041-.459.266-.266.459-.624.459-1.041V11c0-1.653-1.347-3-3-3h-7v-.22C21 6.251 19.768 5 18.25 5h-4.5zm0 1h4.5c.975 0 1.75.782 1.75 1.78V8h-8v-.22c0-.998.775-1.78 1.75-1.78zM4 9h2v6a.5.5 0 0 0-.5.5v.5H4c-1.117 0-2-.883-2-2v-3c0-1.117.883-2 2-2zm3 0h2v6H7V9zm3 0h12v6a.5.5 0 0 0-.5.5v.5h-11v-.5a.5.5 0 0 0-.5-.5V9zm13 0h2v6h-2V9zm3 0h2c1.117 0 2 .883 2 2v3c0 1.117-.883 2-2 2h-1.5v-.5a.5.5 0 0 0-.5-.5V9zM6.5 16h3v2h-1v-1h-1v1h-1v-2zm16 0h3v2h-1v-1h-1v1h-1v-2zM2 16.219c.532.48 1.23.781 2 .781h1.5v1.5a.5.5 0 0 0 .5.5v7H2.5a.544.544 0 0 1-.334-.166A.544.544 0 0 1 2 25.5v-9.281zm28 0V25.5a.545.545 0 0 1-.166.334.544.544 0 0 1-.334.166H26v-7a.5.5 0 0 0 .5-.5V17H28c.77 0 1.468-.301 2-.781zM10.5 17h11v1.5a.5.5 0 0 0 .5.5v7H10v-7a.5.5 0 0 0 .5-.5V17zM7 19h2v7H7v-7zm16 0h2v7h-2v-7z"
                    color="#000" font-family="sans-serif" font-weight="400" overflow="visible" />
            </svg>
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
    <div class="hidden lg:flex lg:gap-x-12 px-4 ">
        <a href="/" class="text-sm font-semibold leading-6 space-x-0 text-gray-900">Home</a>

        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">AboutUs</a>

        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">ContactUs</a>

        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">YourFeedback</a>
    </div>
    <div class="hidden lg:flex lg:gap-x-12 mt-2 mb-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <button class="border border-blue-500 width-full px-5 bg-blue-500 rounded-xl"><a
                            href="{{ route('login') }}">Log
                            in</a></button>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="border border-blue-500 width-full px-5 bg-blue-500 rounded-xl">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        </div>
    </div>

</nav>