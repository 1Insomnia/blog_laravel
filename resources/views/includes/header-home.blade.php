<header class="bg-white shadow-xl text-black" id="header">
    <div class="flex items-center justify-between px-5">
        <a class=" block font-bold" href="">Logo</a>
        {{-- Mobile Menu --}}
        <button class="burger block lg:hidden" id="burger" aria-haspopup="true" aria-controls="nav-menu"
            aria-label="Primary Navigation Button">
            <span class="burger__inner">
                <span></span>
            </span>
        </button>
        {{-- Nav Desktop --}}
        <nav class="hidden lg:h-full lg:flex lg:items-center" id="navMobile" aria-label="Navigation Links">
            <div class="flex uppercase tracking-widest h-full" id="navList">
                <a class="relative flex items-center h-full px-2 nav-link" href=" #">Home</a>
                <a class="relative flex items-center h-full px-2 nav-link" href=" #">Blog</a>
                <a class="relative flex items-center h-full px-2 nav-link" href=" #">About</a>
                <a class="relative flex items-center h-full px-2 nav-link" href=" #">Contact</a>
            </div>
        </nav>
    </div>
    {{-- Nav Mobile --}}
    <nav class="w-full nav-mobile hidden pb-4" id="navMobile" aria-label="Navigation Links">
        <div class="space-y-4 uppercase tracking-widest" id="navList">
            <a class="block pl-4" href=" #">Home</a>
            <a class="block pl-4" href=" #">Blog</a>
            <a class="block pl-4" href=" #">About</a>
            <a class="block pl-4" href=" #">Contact</a>
        </div>
    </nav>
</header>
