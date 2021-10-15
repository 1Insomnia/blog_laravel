@extends('layouts.default')

@section('title', 'Home')

@section('content')
    <section class="relative bg-hero-pattern bg-center bg-cover flex items-center justify-center" id="hero">
        <div class="text-center px-4">
            <h1 class="text-white font-bold text-big-sm md:text-big-sm lg:text-big-lg opacity-50">
                Nux Blog
            </h1>
            <h2 class="text-xs text-white font-semibold uppercase tracking-wide opacity-70 md:text-base">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, ipsa?
            </h2>
        </div>
        <a class="absolute bottom-4 animate-pulse text-white opacity-70" href="#about">
            <svg class=" w-8 h-8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="1.5" shape-rendering="geometricPrecision" viewBox="0 0 24 24" class="jsx-3995436223"
                height="24" width="24" style="color: currentcolor;">
                <path d="M7 13l5 5 5-5M7 6l5 5 5-5"></path>
            </svg>
        </a>
    </section>
    <section class="bg-dim" id="about">
        <div class="container py-6 md:py-12 lg:py-24">
            <div class="text-center">
                <div class="mb-10 text-center md:mb-16">
                    <h2 class="heading-2 mb-4">About Me</h2>
                    <p class="uppercase">Lorem ipsum dolor sit amet.</p>
                </div>
                <img class="w-40 h-40 object-cover mx-auto rounded-full mb-10" src="{{ asset('img/home/profile.jpg') }}"
                    alt="">
                <nav class="mb-10" aria-label="social links">
                    <div class="flex items-center justify-center space-x-4">
                        <a class="block hover:text-primary" href="#" target="_blank" rel="noopener noreferrer"
                            aria-label="open link to my facebook">
                            <svg class="w-6 h-6 md:w-8 md:h-8 fill-current" viewBox="0 0 97.75 97.75" fill="auto">
                                <path
                                    d="M48.875 0C21.882 0 0 21.882 0 48.875S21.882 97.75 48.875 97.75 97.75 75.868 97.75 48.875 75.868 0 48.875 0zm18.646 24.89l-6.76.003c-5.301 0-6.326 2.519-6.326 6.215v8.15h12.641l-.006 12.765H54.436v32.758H41.251V52.023H30.229V39.258h11.022v-9.414c0-10.925 6.675-16.875 16.42-16.875l9.851.015V24.89h-.001z">
                                </path>
                            </svg>
                        </a>
                        <a class="block hover:text-primary" href="" target="_blank" rel="noopener noreferrer"
                            aria-label="open link to my instagram">
                            <svg class="w-6 h-6 md:w-8 md:h-8 fill-current" viewBox="0 0 49.652 49.652">
                                <path
                                    d="M24.825 29.796a4.978 4.978 0 004.972-4.97 4.954 4.954 0 00-.94-2.897 4.964 4.964 0 00-4.029-2.073c-1.659 0-3.126.82-4.031 2.072a4.947 4.947 0 00-.94 2.897 4.973 4.973 0 004.968 4.971zM35.678 18.746V13.96l-.623.002-4.164.013.016 4.787z">
                                </path>
                                <path
                                    d="M24.826 0C11.137 0 0 11.137 0 24.826c0 13.688 11.137 24.826 24.826 24.826 13.688 0 24.826-11.138 24.826-24.826C49.652 11.137 38.516 0 24.826 0zm14.119 21.929v11.56a5.463 5.463 0 01-5.457 5.458H16.164a5.462 5.462 0 01-5.457-5.458V16.165a5.462 5.462 0 015.457-5.457h17.323a5.463 5.463 0 015.458 5.457v5.764z">
                                </path>
                                <path
                                    d="M32.549 24.826c0 4.257-3.464 7.723-7.723 7.723s-7.722-3.466-7.722-7.723a7.67 7.67 0 01.568-2.897h-4.215v11.56a2.706 2.706 0 002.706 2.704h17.323a2.707 2.707 0 002.706-2.704v-11.56h-4.217c.367.894.574 1.873.574 2.897z">
                                </path>
                            </svg>
                        </a>
                        <a class="block hover:text-primary" href="" target="_blank" rel="noopener noreferrer"
                            aria-label="open link to my twitter">
                            <svg class="w-6 h-6 md:w-8 md:h-8 fill-current" viewBox="0 0 49.652 49.652" fill="auto">
                                <path
                                    d="M24.826 0C11.137 0 0 11.137 0 24.826c0 13.688 11.137 24.826 24.826 24.826 13.688 0 24.826-11.138 24.826-24.826C49.652 11.137 38.516 0 24.826 0zm11.075 19.144c.011.246.017.494.017.742 0 7.551-5.746 16.255-16.259 16.255-3.227 0-6.231-.943-8.759-2.565.447.053.902.08 1.363.08 2.678 0 5.141-.914 7.097-2.446a5.72 5.72 0 01-5.338-3.969 5.76 5.76 0 002.58-.096 5.715 5.715 0 01-4.583-5.603l.001-.072a5.69 5.69 0 002.587.714 5.71 5.71 0 01-2.541-4.755c0-1.048.281-2.03.773-2.874a16.225 16.225 0 0011.777 5.972 5.707 5.707 0 01-.147-1.303 5.714 5.714 0 019.884-3.91 11.406 11.406 0 003.63-1.387 5.74 5.74 0 01-2.516 3.162 11.36 11.36 0 003.282-.899 11.494 11.494 0 01-2.848 2.954z">
                                </path>
                            </svg>
                        </a>
                        <a class="block hover:text-primary" href="mailto:nuxbot@gmail.com" target="_blank"
                            rel="noopener noreferrer" aria-label="open your default app to mail me">
                            <svg class="w-6 h-6 md:w-8 md:h-8 fill-current" viewBox="0 0 512 512">
                                <path
                                    d="M507.49 101.721L352.211 256 507.49 410.279c2.807-5.867 4.51-12.353 4.51-19.279V121c0-6.927-1.703-13.412-4.51-19.279zM467 76H45c-6.927 0-13.412 1.703-19.279 4.51l198.463 197.463c17.548 17.548 46.084 17.548 63.632 0L486.279 80.51C480.412 77.703 473.927 76 467 76zM4.51 101.721C1.703 107.588 0 114.073 0 121v270c0 6.927 1.703 13.413 4.51 19.279L159.789 256 4.51 101.721z">
                                </path>
                                <path
                                    d="M331 277.211l-21.973 21.973c-29.239 29.239-76.816 29.239-106.055 0L181 277.211 25.721 431.49C31.588 434.297 38.073 436 45 436h422c6.927 0 13.412-1.703 19.279-4.51L331 277.211z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </nav>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, accusantium mollitia tempore
                    architecto
                    nisi veritatis placeat obcaecati magni deserunt eius quasi, iste, officia minima ipsam adipisci
                    reiciendis
                    ipsum! Quod consectetur quibusdam iure temporibus cum fuga labore sed laudantium suscipit
                    consequuntur
                    delectus numquam ea vero veniam similique, eaque exercitationem tempore sint?
                </p>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container py-6 md:py-12 lg:py-24">
            <div class="mb-20 text-center">
                <h2 class="heading-2 mb-4">Services</h2>
                <p class="uppercase">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-4 md:gap-8 lg:gap-12">
                <div class="flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mb-4 text-primary" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <h4 class="font-semibold text-xl mb-4">Workshop</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, rem.</p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mb-4 text-primary" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <h4 class="font-semibold text-xl mb-4">Workshop</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, rem.</p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mb-4 text-primary" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    <h4 class="font-semibold text-xl mb-4">Workshop</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, rem.</p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mb-4 text-primary" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                    </svg>
                    <h4 class="font-semibold text-xl mb-4">Workshop</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, rem.</p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mb-4 text-primary" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                    <h4 class="font-semibold text-xl mb-4">Workshop</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, rem.</p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mb-4 text-primary" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                    </svg>
                    <h4 class="font-semibold text-xl mb-4">Workshop</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, rem.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-dim" id="projects">
        <div class="container py-6 md:py-12 lg:py-24">
            <div class="mb-20 text-center">
                <h2 class="heading-2 mb-4">Projects</h2>
                <p class="uppercase">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-4 md:gap-8 lg:gap-12">
                <div
                    class="text-center max-w-350 shadow-lg transition ease-out duration-300 transform hover:-translate-y-4 hover:shadow-xl">
                    <img class="object-cover" src="{{ asset('img/home/books.jpg') }}" alt="books pictures">
                    <div class="py-5">
                        <h4 class="font-semibold text-xl mb-2">Lorem.</h4>
                        <p>
                            dolor sit amet consectetur, adipisicing elit. Consectetur, dolor?
                        </p>
                    </div>
                </div>
                <div
                    class="text-center max-w-350 shadow-lg transition ease-out duration-300 transform hover:-translate-y-4 hover:shadow-xl">
                    <img class="object-cover" src="{{ asset('img/home/computer.jpg') }}"
                        alt="person pointing finger at computer screen">
                    <div class="py-5">
                        <h4 class="font-semibold text-xl mb-2">Lorem.</h4>
                        <p>
                            dolor sit amet consectetur, adipisicing elit. Consectetur, dolor?
                        </p>
                    </div>
                </div>
                <div
                    class="text-center max-w-350 shadow-lg transition ease-out duration-300 transform hover:-translate-y-4 hover:shadow-xl">
                    <img class="object-cover" src="{{ asset('img/home/hacking.jpg') }}"
                        alt="person working on computer in a meet up">
                    <div class="py-5">
                        <h4 class="font-semibold text-xl mb-2">Lorem.</h4>
                        <p>
                            dolor sit amet consectetur, adipisicing elit. Consectetur, dolor?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials">
        <div class="container py-6 md:py-12 lg:py-24">
            <div class="mb-20 text-center">
                <h2 class="heading-2 mb-4">Testimonials</h2>
                <p class="uppercase">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-4 md:gap-8 lg:gap-12">
                <div class="max-w-350">
                    <img class="w-40 h-40 object-cover mb-10 rounded-full mx-auto"
                        src="{{ asset('img/home/testimonial-picture1.jpg') }}" alt="">
                    <div class="text-center">
                        <h4 class="font-semibold text-xl mb-2">Lorem, ipsum.</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet.</p>
                        <p class="italic">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptas
                            quibusdam ullam voluptatem
                            vitae excepturi quam nihil debitis, iste nemo eligendi. Sed ipsa cumque consectetur
                            exercitationem necessitatibus provident hic earum fugit iusto laudantium rerum, ullam vero
                            libero aliquam cum itaque."</p>
                    </div>
                </div>
                <div class="max-w-350">
                    <img class="w-40 h-40 object-cover mb-10 rounded-full mx-auto"
                        src="{{ asset('img/home/testimonial-picture2.jpg') }}" alt="">
                    <div class="text-center">
                        <h4 class="font-semibold text-xl mb-2">Lorem, ipsum.</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet.</p>
                        <p class="italic">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptas
                            quibusdam ullam voluptatem
                            vitae excepturi quam nihil debitis, iste nemo eligendi. Sed ipsa cumque consectetur
                            exercitationem necessitatibus provident hic earum fugit iusto laudantium rerum, ullam vero
                            libero aliquam cum itaque."</p>
                    </div>
                </div>
                <div class="max-w-350">
                    <img class="w-40 h-40 object-cover mb-10 rounded-full mx-auto"
                        src="{{ asset('img/home/testimonial-picture3.jpg') }}" alt="">
                    <div class="text-center">
                        <h4 class="font-semibold text-xl mb-2">Lorem, ipsum.</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet.</p>
                        <p class="italic">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptas
                            quibusdam ullam voluptatem
                            vitae excepturi quam nihil debitis, iste nemo eligendi. Sed ipsa cumque consectetur
                            exercitationem necessitatibus provident hic earum fugit iusto laudantium rerum, ullam vero
                            libero aliquam cum itaque."</p>
                    </div>
                </div>
                <div class="max-w-350">
                    <img class="w-40 h-40 object-cover mb-10 rounded-full mx-auto"
                        src="{{ asset('img/home/testimonial-picture4.jpg') }}" alt="">
                    <div class="text-center">
                        <h4 class="font-semibold text-xl mb-2">Lorem, ipsum.</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet.</p>
                        <p class="italic">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptas
                            quibusdam ullam voluptatem
                            vitae excepturi quam nihil debitis, iste nemo eligendi. Sed ipsa cumque consectetur
                            exercitationem necessitatibus provident hic earum fugit iusto laudantium rerum, ullam vero
                            libero aliquam cum itaque."</p>
                    </div>
                </div>
                <div class="max-w-350">
                    <img class="w-40 h-40 object-cover mb-10 rounded-full mx-auto"
                        src="{{ asset('img/home/testimonial-picture5.jpg') }}" alt="">
                    <div class="text-center">
                        <h4 class="font-semibold text-xl mb-2">Lorem, ipsum.</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet.</p>
                        <p class="italic">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptas
                            quibusdam ullam voluptatem
                            vitae excepturi quam nihil debitis, iste nemo eligendi. Sed ipsa cumque consectetur
                            exercitationem necessitatibus provident hic earum fugit iusto laudantium rerum, ullam vero
                            libero aliquam cum itaque."</p>
                    </div>
                </div>
                <div class="max-w-350">
                    <img class="w-40 h-40 object-cover mb-10 rounded-full mx-auto"
                        src="{{ asset('img/home/testimonial-picture6.jpg') }}" alt="">
                    <div class="text-center">
                        <h4 class="font-semibold text-xl mb-2">Lorem, ipsum.</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet.</p>
                        <p class="italic">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptas
                            quibusdam ullam voluptatem
                            vitae excepturi quam nihil debitis, iste nemo eligendi. Sed ipsa cumque consectetur
                            exercitationem necessitatibus provident hic earum fugit iusto laudantium rerum, ullam vero
                            libero aliquam cum itaque."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
