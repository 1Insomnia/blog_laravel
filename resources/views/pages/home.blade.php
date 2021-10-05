@extends('layouts.default')

@section('title', 'Home')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <section class="h-screen bg-hero-pattern bg-center bg-cover flex items-center justify-center" id="hero">
        <div class="text-center px-4">
            <h1 class="text-white text-2xl font-light uppercase tracking-widest mb-4 md:text-5xl lg:text-7xl lg:mb-8">Nux
                Blog</h1>
            <h2 class="text-xs text-white font-semibold uppercase tracking-wide opacity-70 md:text-base">Lorem ipsum dolor,
                sit
                amet
                consectetur
                adipisicing elit. Dicta, dignissimos.</h2>
        </div>
    </section>
    <section id="about">
        <div class="container mx-auto px-5 py-6 md:py-12 lg:py-24">
            <div class="text-center">
                <div class="mb-10 text-center md:mb-16">
                    <h2 class="text-2xl uppercase mb-4">About Me</h2>
                    <p class="uppercase">Lorem ipsum dolor sit amet.</p>
                </div>
                <img class="w-40 h-40 object-cover mx-auto rounded-full mb-4"
                    src="{{ asset('assets/img/home/profile.jpg') }}" alt="">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, accusantium mollitia tempore
                    architecto
                    nisi veritatis placeat obcaecati magni deserunt eius quasi, iste, officia minima ipsam adipisci
                    reiciendis
                    ipsum! Quod consectetur quibusdam iure temporibus cum fuga labore sed laudantium suscipit consequuntur
                    delectus numquam ea vero veniam similique, eaque exercitationem tempore sint?
                </p>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container mx-auto px-5 py-6 md:py-12 lg:py-24">
            <div class="mb-20 text-center">
                <h2 class="text-2xl uppercase mb-4">Services</h2>
                <p class="uppercase">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-4 md:gap-8 lg:gap-12">
                <div class="flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mb-4 text-accent" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <h4 class="font-semibold text-xl mb-4">Workshop</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, rem.</p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mb-4 text-accent" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <h4 class="font-semibold text-xl mb-4">Workshop</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, rem.</p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mb-4 text-accent" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    <h4 class="font-semibold text-xl mb-4">Workshop</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, rem.</p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mb-4 text-accent" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                    </svg>
                    <h4 class="font-semibold text-xl mb-4">Workshop</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, rem.</p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mb-4 text-accent" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                    <h4 class="font-semibold text-xl mb-4">Workshop</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, rem.</p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mb-4 text-accent" fill="none"
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
        <div class="container mx-auto px-5 py-6 md:py-12 lg:py-24">
            <div class="mb-20 text-center">
                <h2 class="text-2xl uppercase mb-4">Projects</h2>
                <p class="uppercase">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-4 md:gap-8 lg:gap-12">
                <div class="shadow-xl text-center" style=" max-width: 350px;">
                    <img class="object-cover" src="{{ asset('assets/img/home/books.jpg') }}" alt="books pictures">
                    <div class="py-5">
                        <h4 class="font-semibold text-xl mb-2">Lorem.</h4>
                        <p>
                            dolor sit amet consectetur, adipisicing elit. Consectetur, dolor?
                        </p>
                    </div>
                </div>
                <div class="shadow-xl text-center" style=" max-width: 350px;">
                    <img class="object-cover" src="{{ asset('assets/img/home/computer.jpg') }}"
                        alt="person pointing finger at computer screen">
                    <div class="py-5">
                        <h4 class="font-semibold text-xl mb-2">Lorem.</h4>
                        <p>
                            dolor sit amet consectetur, adipisicing elit. Consectetur, dolor?
                        </p>
                    </div>
                </div>
                <div class="shadow-xl text-center" style=" max-width: 350px;">
                    <img class="object-cover" src="{{ asset('assets/img/home/hacking.jpg') }}"
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
        <div class="container mx-auto px-5 py-6 md:py-12 lg:py-24">
            <div class="mb-20 text-center">
                <h2 class="text-2xl uppercase mb-4">Testimonials</h2>
                <p class="uppercase">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-4 md:gap-8 lg:gap-12">
                <div style="max-width: 350px;">
                    <img class="w-40 h-40 object-cover mb-10 rounded-full mx-auto"
                        src="{{ asset('assets/img/home/testimonial-picture1.jpg') }}" alt="">
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
                <div style="max-width: 350px;">
                    <img class="w-40 h-40 object-cover mb-10 rounded-full mx-auto"
                        src="{{ asset('assets/img/home/testimonial-picture2.jpg') }}" alt="">
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
                <div style="max-width: 350px;">
                    <img class="w-40 h-40 object-cover mb-10 rounded-full mx-auto"
                        src="{{ asset('assets/img/home/testimonial-picture3.jpg') }}" alt="">
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
                <div style="max-width: 350px;">
                    <img class="w-40 h-40 object-cover mb-10 rounded-full mx-auto"
                        src="{{ asset('assets/img/home/testimonial-picture4.jpg') }}" alt="">
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
                <div style="max-width: 350px;">
                    <img class="w-40 h-40 object-cover mb-10 rounded-full mx-auto"
                        src="{{ asset('assets/img/home/testimonial-picture5.jpg') }}" alt="">
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
                <div style="max-width: 350px;">
                    <img class="w-40 h-40 object-cover mb-10 rounded-full mx-auto"
                        src="{{ asset('assets/img/home/testimonial-picture6.jpg') }}" alt="">
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
