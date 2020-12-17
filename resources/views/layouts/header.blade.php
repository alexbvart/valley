<header class="text-gray-700 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col sm:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 sm:mb-0">
            <img src="{{ asset('images/logo-verde.svg') }}" alt="logo de valley">
        </a>
        <nav class="sm:ml-auto flex flex-wrap items-center text-base justify-center">

            @if (Route::has('login'))
                @auth
                    <a class="mr-5 hover:text-gray-900" href="{{ url('/home') }}">Home</a>
                    <span>{{ Auth::user()->name }}</span>
                    <a 
                                class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <a class="mr-5 hover:text-gray-900" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a class="mr-5 hover:text-gray-900" href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
        </nav>

    </div>
</header>
