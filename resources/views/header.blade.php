<header class="header">
    <nav class="navbar" id="mainnav">
        <div class="logo">
            <a href="{{ url('/') }}"><img src="img/gtc-logo.png" alt="Logo" class="logo-img"></a>
        </div>
        <ul class="nav-links" id="mainmenu">
            <li><a href="{{ url('/') }}" class="nav-link" id="menuicon">Home</a></li>
            <li><a href="{{ route('about') }}" class="nav-link" id="menuicon">About</a></li>
            {{-- <li><a href="{{ route('products') }}" class="nav-link" id="menuicon">Products</a></li> --}}
            <li><a href="{{ route('services') }}" class="nav-link" id="menuicon">Services</a></li>
            <li><a href="{{ route('contact') }}" class="nav-link" id="menuicon">Contact</a></li>
        </ul>
    </nav>
    <div class="nav-login sm:fixed sm:top-0 sm:right-0 p-4 text-right z-5 login-route">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="fixed top-6 right-4 z-50 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 p-3 rounded-full bg-gray-200 dark:bg-gray-800 user-icon">
                    <i class="fa fa-user" style="font-size: 1.5rem; color: #ccc;"></i>
                </a>
            @else
                <a href="{{ route('login') }}" class="btn-login">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" id="btn-register">Register</a>
                @endif
            @endauth
        @endif
    </div>
    <div>
        <i class="fa fa-bars" id="bars-icon"></i>
    </div>
</header>
