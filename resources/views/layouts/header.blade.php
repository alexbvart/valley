<header class="text-gray-700 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col sm:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 sm:mb-0">
            <img src="{{ asset('images/logo-verde.svg') }}" alt="logo de valley">
        </a>
        <nav class="sm:ml-auto flex flex-wrap items-center text-base justify-center">

            @if (Route::has('login'))
                @auth
                    <a class="mr-5 hover:text-gray-900" href="{{ url('/home') }}">Home</a>
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
