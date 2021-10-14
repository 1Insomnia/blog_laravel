@extends('layouts.default')
@section('title', 'Categories')

@section('content')
    <section>
        <div class="container">
            <div class="pt-12 mb-4">
                <h1 class="heading-1">Categories</h1>
            </div>
            @foreach ($categories as $category)
                <div>
                    <h2 class="heading-2 mb-4 text-primary"># {{ $category->name }}</h2>
                    @foreach ($category->post as $post)
                        <div
                            class="mt-12 block border border-lighter w-full mb-10 p-5 rounded shadow-lg transition ease-out duration-300 transform hover:-translate-y-4 hover:shadow-xl">
                            <div>
                                <img class="block object-cover w-full h-52 mb-5" src="{{ asset($post->image_path) }}"
                                    alt="">
                            </div>
                            <article class="flex flex-col justify-between flex-1">
                                <div>
                                    {{-- Post Title --}}
                                    <div>
                                        <h2 class="heading-2 mb-6">
                                            {{ $post->title }}
                                        </h2>
                                        <a href="{{ route('category.show', $post->category->id) }}"
                                            class="block mb-2 underline text-success transition duration-200 ease-linear hover:text-success-light">
                                            <h3>
                                                # {{ $post->category->name }}
                                            </h3>
                                        </a>
                                    </div>
                                    {{-- Post Description --}}
                                    <p class="mb-6 paragrah-base font-serif">
                                        {{ $post->description }}
                                    </p>
                                </div>

                                <div class="flex items-center justify-between text-sm text-light">
                                    <a class="flex items-center text-success transition duration-200 ease-linear hover:text-success-light"
                                        href="{{ route('post.show', $post->slug) }}">
                                        <span class="block">Read More</span>
                                        <span class="ml-2 block">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </span>
                                    </a>
                                    <span class="">{{ $post->publishedAt() }}</span>
                                </div>
                                @can('admin')
                                    <div class="mt-8 ml-auto">
                                        <button class="btn-warning">
                                            <a href="{{ route('post.edit', $post->slug) }}">
                                                Update Post
                                            </a>
                                        </button>
                                        <button class="btn-error" id="deletePostBtn" type="submit"
                                            data-slug="{{ $post->slug }}">
                                            Delete Post
                                        </button>
                                    </div>
                                @endcan
                            </article>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
@endsection
