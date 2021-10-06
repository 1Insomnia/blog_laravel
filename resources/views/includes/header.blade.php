{{-- Header includes --}}
<header class="bg-white shadow-xl" id="header">
    <div class="flex items-center justify-between container mx-auto px-5">
        <a class="text-accent block font-bold" href="">Logo</a>
        {{-- Mobile Menu --}}
        <button class="burger block lg:hidden" id="burger" aria-haspopup="true" aria-controls="nav-menu"
            aria-label="Primary Navigation Button">
            <span class="burger__inner">
                <span></span>
            </span>
        </button>
        {{-- Nav Desktop --}}
        <nav class="hidden lg:h-full lg:flex lg:items-center" id="navDesktop" aria-label="Navigation Links">
            <div class="flex uppercase tracking-widest h-full" id="navList">
                <a class="relative flex items-center h-full px-2 nav-link" href="{{ route('home') }}"
                    aria-label="Link to homepage">Home</a>
                <a class="relative flex items-center h-full px-2 nav-link" href="{{ route('post.index') }}"
                    aria-label="Link to blog page">Blog</a>
                <a class="relative flex items-center h-full px-2 nav-link" href="#"
                    aria-label="Link to about page">About</a>
                <a class="relative flex items-center h-full px-2 nav-link" href="#"
                    aria-label="link to contact page">Contact</a>
                @guest
                    <a class="block relative flex items-center h-full px-2 nav-link uppercase" href="{{ route('login') }}"
                        aria-label="link to login page">
                        Login
                    </a>
                @endguest
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="block relative flex items-center h-full px-2 uppercase nav-link"
                            aria-label="logout of session">
                            Logout
                        </button>
                    </form>
                @endauth
            </div>
        </nav>
    </div>
    {{-- Nav Mobile --}}
    <nav class="w-full nav-mobile hidden pb-4" id="navMobile" aria-label="Navigation links mobile">
        <div class="space-y-4 uppercase tracking-widest" id="navList">
            <a class="block pl-4" href="{{ route('home') }}" aria-label="Link to homepage">Home</a>
            <a class="block pl-4" href="{{ route('post.index') }}" aria-label="Link to blog page">Blog</a>
            <a class="block pl-4" href="#" aria-label="Link to about page">About</a>
            <a class="block pl-4" href="#" aria-label="Link to contact page">Contact</a>
            @guest
                <a class="block pl-4" href="{{ route('login') }}" aria-label="Link to login page">Login</a>
            @endguest
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="block pl-4 uppercase" aria-label="logout of session">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </nav>
</header>
