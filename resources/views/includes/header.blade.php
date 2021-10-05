{{-- Header includes --}}
<header class="bg-white shadow-xl" id="header">
    <div class="flex items-center justify-between px-5">
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
                <a class="relative flex items-center h-full px-2 nav-link" href="#"
                    aria-label="Link to homepage">Home</a>
                <a class="relative flex items-center h-full px-2 nav-link" href="#"
                    aria-label="Link to blog page">Blog</a>
                <a class="relative flex items-center h-full px-2 nav-link" href="#"
                    aria-label="Link to about page">About</a>
                <a class="relative flex items-center h-full px-2 nav-link" href="#"
                    aria-label="link to contact page">Contact</a>
            </div>
        </nav>
    </div>
    {{-- Nav Mobile --}}
    <nav class="w-full nav-mobile hidden pb-4" id="navMobile" aria-label="Navigation Links">
        <div class="space-y-4 uppercase tracking-widest" id="navList">
            <a class="block pl-4" href="#" aria-label="Link to homepage">Home</a>
            <a class="block pl-4" href="#" aria-label="Link to blog page">Blog</a>
            <a class="block pl-4" href="#" aria-label="Link to about page">About</a>
            <a class="block pl-4" href="#" aria-label="Link to contact page">Contact</a>
        </div>
    </nav>
</header>
