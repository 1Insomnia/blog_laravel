{{-- Header includes --}}
<header class="relative bg-white shadow-xl" id="header">
    <div class="flex items-center justify-between container">
        {{-- Left Container --}}
        <div class="">
            <a class="text-accent block font-bold" href="{{ route('home') }}">
                <img class="h-6" src="{{ asset('img/logo.png') }}" alt="Nux Blog Logo">
            </a>
        </div>

        {{-- Mobile Menu --}}
        <button class="burger lg:hidden lg:h-full" id="burger" aria-haspopup="true" aria-controls="nav-menu"
            aria-label="Primary Navigation Button">
            <span class="burger__inner">
                <span></span>
            </span>
        </button>

        {{-- Middle Container --}}
        <div class="hidden lg:flex-1 lg:flex lg:items-center lg:justify-center lg:h-full">
            {{-- Nav Desktop --}}
            <nav class="lg:h-full lg:flex lg:items-center" id="navDesktop" aria-label="Navigation Links">
                <div class="flex uppercase tracking-widest h-full text-sm" id="navList">
                    <a class="relative flex items-center h-full px-2 nav-link" href="{{ route('home') }}"
                        aria-label="Link to homepage">
                        Home
                    </a>
                    <a class="relative flex items-center h-full px-2 nav-link" href="{{ route('post.index') }}"
                        aria-label="Link to blog page">
                        Blog
                    </a>
                    <a class="relative flex items-center h-full px-2 nav-link" href="#" aria-label="Link to about page">
                        About
                    </a>
                    <a class="relative flex items-center h-full px-2 nav-link" href="#"
                        aria-label="link to contact page">
                        Contact
                    </a>
                </div>
            </nav>
        </div>

        {{-- Right Container --}}
        <div class="hidden lg:flex lg:items-center lg:justify-center lg:h-full">
            @guest
                <a class="transition duration-200 ease-linear hover:text-primary" href="{{ route('login') }}"
                    aria-label="link to login page">
                    Login
                </a>
                <div class="flex items-center h-full pl-4">
                    <a class="btn uppercase" href="{{ route('register') }}" aria-label="link to login page">
                        Signup
                    </a>
                </div>
            @endguest
            @auth
                <a class="relative flex items-center h-full px-2 nav-link" href="{{ route('dashboard.index') }}"
                    aria-label="link to contact page">
                    Profile
                </a>
                <form class="pl-4" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn" aria-label="logout of session">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
        {{-- Nav Mobile --}}
    </div>
</header>
<nav class="nav-mobile hidden" id="navMobile" aria-label="Navigation links mobile">
    <div class="tracking-widest container" id="navList">
        @guest
            <div class="py-2">
                <a class="btn-outline-full-white py-4" href="{{ route('login') }}" aria-label="link to login page">
                    Login
                </a>
            </div>
            <div class="py-2">
                <a class="btn-full" href="{{ route('register') }}" aria-label="link to login page">
                    Signup
                </a>
            </div>
        @endguest
        @auth
            <div class="py-2">
                <a class="btn-outline-full-white" href="{{ route('dashboard.index') }}"
                    aria-label="Link to contact page">
                    Profile
                </a>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn-full" aria-label="logout of session">
                    Logout
                </button>
            </form>
        @endauth
        <a class="block pl-2 py-4 border-b border-accent-2" href="{{ route('home') }}" aria-label="Link to homepage">
            Home
        </a>
        <a class="block pl-2 py-4 border-b border-accent-2" href="{{ route('post.index') }}"
            aria-label="Link to blog page">
            Blog
        </a>
        <a class="block pl-2 py-4 border-b border-accent-2" href="#" aria-label="Link to about page">
            About
        </a>
        <a class="block pl-2 py-4 border-b border-accent-2" href="#" aria-label="Link to contact page">
            Contact
        </a>
    </div>
</nav>
