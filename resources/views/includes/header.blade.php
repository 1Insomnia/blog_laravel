{{-- Header includes --}}
<header class="bg-white shadow-xl" id="header">
    <div class="relative flex items-center justify-between container">

        {{-- Left Container --}}
        <div class="lg:flex-1 lg:flex lg:items-center lg:justify-center">
            <a class="text-accent block font-bold" href="{{ route('home') }}">
                <img class="h-8" src="{{ asset('assets/logo.png') }}" alt="Nux Blog Logo">
            </a>
        </div>

        {{-- Mobile Menu --}}
        <button class="burger lg:hidden" id="burger" aria-haspopup="true" aria-controls="nav-menu"
            aria-label="Primary Navigation Button">
            <span class="burger__inner">
                <span></span>
            </span>
        </button>

        {{-- Middle Container --}}
        <div class="hidden lg:h-full lg:flex-1 lg:flex lg:items-center lg:justify-center">
            {{-- Nav Desktop --}}
            <nav class="lg:h-full lg:flex lg:items-center" id="navDesktop" aria-label="Navigation Links">
                <div class="flex uppercase tracking-widest h-full text-sm" id="navList">
                    <a class="relative flex items-center h-full px-2 nav-link" href="{{ route('home') }}"
                        aria-label="Link to homepage">
                        Home
                    </a>
                    <a class="relative flex items-center h-full px-2 nav-link" href="{{ route('blog.index') }}"
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
        <div class="hidden lg:flex-1 lg:flex lg:items-center lg:justify-center">
            @guest
                <a class="transition duration-200 ease-linear hover:text-primary" href="{{ route('login') }}"
                    aria-label="link to login page">
                    Login
                </a>
                <div class="flex items-center h-full pl-6">
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
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="relative flex items-center h-full px-2 uppercase nav-link"
                        aria-label="logout of session">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
        {{-- Nav Mobile --}}
        <nav class="absolute top-20 left-0 bg-white w-full nav-mobile hidden pb-4" id="navMobile"
            aria-label="Navigation links mobile">
            <div class="space-y-4 uppercase tracking-widest container" id="navList">
                <a class="block pl-4" href="{{ route('home') }}" aria-label="Link to homepage">
                    Home
                </a>
                <a class="block pl-4" href="{{ route('blog.index') }}" aria-label="Link to blog page">
                    Blog
                </a>
                <a class="block pl-4" href="#" aria-label="Link to about page">
                    About
                </a>
                <a class="block pl-4" href="#" aria-label="Link to contact page">
                    Contact
                </a>
                @guest
                    <a class="block pl-4" href="{{ route('login') }}" aria-label="Link to login page">
                        Login
                    </a>
                @endguest
                @auth
                    <a class="block pl-4" href="{{ route('dashboard.index') }}" aria-label="Link to contact page">
                        Profile
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="block pl-4 uppercase" aria-label="logout of session">
                            Logout
                        </button>
                    </form>
                @endauth
            </div>
        </nav>
    </div>
</header>
