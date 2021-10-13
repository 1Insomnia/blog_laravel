@extends('layouts.default')
@section('title', 'Blog')

@section('content')
    <x-modal.modal-post-delete>
        <x-slot name="title">Confirm Delete</x-slot>
        Do you want to delete this post ?
    </x-modal.modal-post-delete>
    <section id="blogPosts">
        <div class="px-6 py-8">
            <div class="container">
                <div class="flex justify-between">
                    <div class="w-full lg:w-8/12">
                        <h1 class="heading-1 mb-4">
                            Latest
                        </h1>
                        {{-- Only show create post/category for admin --}}
                        @can('admin')
                            <nav class="md:flex md:items-center md:space-x-4">
                                <div class="pt-8 mb-4 md:pt-0">
                                    {{-- Create New Post Link --}}
                                    <a class="btn-success" href="{{ route('blog.create') }}">
                                        Create Post
                                    </a>
                                </div>
                                <div class="pt-2 mb-4 md:pt-0">
                                    {{-- Create New Category Link --}}
                                    <a class="btn-success" href="{{ route('category.create') }}">
                                        Create Category
                                    </a>
                                </div>
                            </nav>
                        @endcan

                        @if (session('message'))
                            <div class="py-4 text-red-600">
                                <h3>
                                    {{ session('message') }}
                                </h3>
                            </div>
                        @endif

                        {{-- Blog Post --}}
                        @foreach ($posts as $post)
                            <div
                                class="mt-12 block border border-lighter w-full mb-10 p-5 rounded shadow-lg transition ease-out duration-300 transform hover:-translate-y-4 hover:shadow-xl">
                                <div>
                                    <img class="block object-cover w-full h-52 mb-5"
                                         src="https://source.unsplash.com/random" alt="">
                                </div>
                                <article class="flex flex-col justify-between flex-1">
                                    <div>
                                        {{-- Post Title --}}
                                        <div class="">
                                            <h2 class="heading-2 mb-6">
                                                {{ $post->title }}
                                            </h2>
                                            <a href=""
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
                                           href="{{ route('blog.show', $post->slug) }}">
                                            <span class="block">Read More</span>
                                            <span class="ml-4 block">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-linecap="round"
                                                     stroke-linejoin="round" stroke-width="1.5"
                                                     shape-rendering="geometricPrecision" viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        d="M5 12h14M12 5l7 7-7 7"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <span class="">{{ $post->publishedAt() }}</span>
                                    </div>
                                    @can('admin')
                                        <div class="mt-8 ml-auto">
                                            <button class="btn-warning">
                                                <a href="{{ route('blog.edit', $post->slug) }}">
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

                        {{-- Pagination --}}
                        @if ($posts)
                            <div class="mt-8">
                                <div class="flex">
                                    <a href="#"
                                       class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed">
                                        previous
                                    </a>
                                    <a href="#"
                                       class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                                        1
                                    </a>
                                    <a href="#"
                                       class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                                        2
                                    </a>
                                    <a href="#"
                                       class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                                        3
                                    </a>
                                    <a href="#"
                                       class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                                        Next
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="hidden w-4/12 lg:block">
                        <div class="px-8 mx-auto max-w-sm">
                            <h1 class="heading-1 mb-4">Categories</h1>
                            <div class="flex flex-col px-4 py-6 bg-white rounded-lg shadow-md">
                                <ul>
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="#"
                                               class="underline text-success transition duration-200 ease-linear hover:text-success-light">
                                                # {{ $category->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
