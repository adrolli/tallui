<header class="relative">
    <div class="pt-6 bg-gray-900">
      <nav class="relative flex items-center justify-between px-4 mx-auto max-w-7xl sm:px-6" aria-label="Global">
        <div class="flex items-center flex-1">
          <div class="flex items-center justify-between w-full md:w-auto">
            <a href="#">
              <span class="sr-only">Workflow</span>
              <img class="w-auto h-8 sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-teal-200-cyan-400.svg" alt="">
            </a>
            <div class="flex items-center mr-2 md:hidden">
              <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-gray-900 rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              </button>
            </div>
          </div>
          <div class="hidden space-x-8 md:flex md:ml-10">
            <a href="{{ route('welcome') }}" class="text-base font-medium text-white hover:text-gray-300">Start</a>

            <a href="{{ route('blog') }}" class="text-base font-medium text-white hover:text-gray-300">Blog</a>

            <a href="{{ route('docs') }}" class="text-base font-medium text-white hover:text-gray-300">Docs</a>

            <a href="{{ route('contact') }}" class="text-base font-medium text-white hover:text-gray-300">Contact</a>
          </div>
        </div>

        @if (Route::has('login'))
        <div class="hidden md:flex md:items-center md:space-x-6">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-base font-medium text-white hover:text-gray-300">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-base font-medium text-white hover:text-gray-300">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 text-base font-medium text-white bg-gray-600 border border-transparent rounded-md hover:bg-gray-700">{{ __('Register for free') }}</a>
                @endif
            @endauth
        </div>
        @endif

      </nav>
    </div>

    <!--
      Mobile menu, show/hide based on menu open state.

      Entering: "duration-150 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
    <div class="absolute inset-x-0 top-0 p-2 transition origin-top transform md:hidden">
      <div class="overflow-hidden bg-white rounded-lg shadow-md ring-1 ring-black ring-opacity-5">
        <div class="flex items-center justify-between px-5 pt-4">
          <div>
            <img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-mark-teal-500-cyan-600.svg" alt="">
          </div>
          <div class="-mr-2">
            <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-600">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x -->
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        <div class="pt-5 pb-6">
          <div class="px-2 space-y-1">

            <a href="{{ route('welcome') }}" class="block px-3 py-2 text-base font-medium text-gray-900 rounded-md hover:bg-gray-50">Start</a>

            <a href="{{ route('blog') }}" class="block px-3 py-2 text-base font-medium text-gray-900 rounded-md hover:bg-gray-50">Blog</a>

            <a href="{{ route('docs') }}" class="block px-3 py-2 text-base font-medium text-gray-900 rounded-md hover:bg-gray-50">Docs</a>

            <a href="{{ route('contact') }}" class="block px-3 py-2 text-base font-medium text-gray-900 rounded-md hover:bg-gray-50">Contact</a>
          </div>
          <div class="px-5 mt-6">
            <a href="{{ route('register') }}" class="block w-full px-4 py-3 font-medium text-center text-white rounded-md shadow bg-gradient-to-r from-teal-500 to-cyan-600 hover:from-teal-600 hover:to-cyan-700">Register</a>
          </div>
          <div class="px-5 mt-6">
            <p class="text-base font-medium text-center text-gray-500">Existing customer? <a href="{{ route('login') }}" class="text-gray-900 hover:underline">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </header>
