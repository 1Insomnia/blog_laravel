@extends('layouts.default')
@section('title', 'Dashboard')

@section('content')
    <section>
        <div class="container">
            <div name="header">
                <h1 class="heading-1">
                    Dashboard
                </h1>
            </div>
            <div class="jsx-2387839603 wrapper">
                <div>
                    <div class="tabs">
                        <header class="">
                            <div class="border-b border-accent-2 flex items-center space-x-4">
                                <button role="button" class="flex items-center py-4 px-1 border-b-2 border-foreground">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                         stroke-linejoin="round" stroke-width="1.5" shape-rendering="geometricPrecision"
                                         viewBox="0 0 24 24" height="24" width="24">
                                        <path d="M21 2H3v16h5v4l4-4h5l4-4V2zm-10 9V7m5 4V7"></path>
                                    </svg>
                                    <span class="ml-2">Twitch TV</span>
                                </button>
                                <button role="button" class="flex items-center py-4 px-1">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                         stroke-linejoin="round" stroke-width="1.5" shape-rendering="geometricPrecision"
                                         viewBox="0 0 24 24" height="24" width="24">
                                        <path
                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                    </svg>
                                    <span class="block ml-2">
                                        Twitter
                                    </span>
                                </button>
                            </div>
                        </header>
                        <div class="mt-4">
                            <p class="hidden">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, voluptatibus?
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, corporis?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
