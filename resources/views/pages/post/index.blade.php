@extends('layouts.default')
@section('title', 'blog')

@section('content')
    <section id="blogPosts">
        <div class="px-6 py-8">
            <div class="container">
                <div class="w-full lg:max-w-screen-sm">
                    <h1 class="text-4xl md:text-6xl font-bold pb-3 mb-6 tracking-tighter">
                        Post
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
                        <a class="mt-12 block border border-lighter w-full mb-10 p-5 rounded shadow-lg transition ease-out duration-300 transform hover:-translate-y-4 hover:shadow-xl"
                            href="{{ route('blog.show', $post->slug) }}">

                            @if ($post->image)
                                <div class="block h-post-card-image bg-cover bg-center bg-no-repeat w-full h-48 mb-5"
                                    style="background-image: url('https://laravel-blog-assets.s3.amazonaws.com/vzO9spKEYmoaORj64y0IZe92IsIIc7ZBtKcFbsJB.png')">
                                </div>
                            @endif
                            <article class="flex flex-col justify-between flex-1">
                                <div>
                                    <h2 class="heading-4 leading-normal block mb-6">
                                        {{ $post->title }}
                                    </h2>
                                    <p class="mb-6 font-serif leading-loose">
                                        {{ $post->description }}
                                    </p>
                                </div>

                                <div class="flex items-center text-sm text-light">
                                    <span class="ml-auto">{{ $post->publishedAt() }}</span>
                                </div>
                                <div class="ml-auto mt-8">
                                    <button class="btn-error">
                                        Delete Post
                                    </button>
                                </div>
                            </article>
                        </a>
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
            </div>
    </section>
@endsection
