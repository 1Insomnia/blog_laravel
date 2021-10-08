@extends('layouts.default')
@section('title', 'blog')

@section('content')
    <section id="blogPosts">
        <div class="px-6 py-8">
            <div class="container flex justify-between mx-auto px-5">
                <div class="w-full lg:w-8/12">
                    <div class="flex items-center justify-between">
                        <h1 class="text-4xl md:text-6xl font-bold pb-3 mb-6 tracking-tighter">
                            Post
                        </h1>
                        <div>
                            <label>
                                <select
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option>Latest</option>
                                    <option>Last Week</option>
                                </select>
                            </label>
                        </div>
                    </div>

                    {{-- Only show create post for admin/writer --}}
                    @can('post_create')
                        <div class="pt-8 mb-4">
                            <a class="btn-accent" href="{{ route('blog.create') }}">
                                Create Post
                            </a>
                        </div>
                        <div class="pt-8 mb-4">
                            <a class="btn-accent" href="{{ route('category.create') }}">
                                Create Category
                            </a>
                        </div>
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
                        <article class="mt-6">
                            <div class="max-w-4xl px-6 py-8 bg-white rounded-lg shadow-lg">
                                <div class="flex items-center justify-between">
                                    {{-- Post : published date --}}
                                    <span class="font-light text-gray-600">
                                        {{ $post->published_at }}
                                    </span>
                                    {{-- Post : category --}}
                                    <a href="#"
                                        class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">
                                        {{ $post->category->name }}
                                    </a>
                                </div>
                                <div class="mt-2">
                                    {{-- Post : category --}}
                                    <a href="#" class="text-2xl font-bold text-gray-700 hover:underline">
                                        {{ $post->title }}
                                    </a>
                                    {{-- Post : description --}}
                                    <p class="mt-2 text-gray-600">
                                        {{ $post->description }}
                                    </p>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    {{-- Call to action -> post.show.id --}}
                                    <a href="{{ route('blog.show', $post->slug) }}" class="text-blue-500 hover:underline">
                                        Read more
                                    </a>
                                    <div>
                                        <a href="#" class="flex items-center">
                                            <img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80"
                                                alt="avatar"
                                                class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                            {{-- Post : author --}}
                                            <h1 class="font-bold text-gray-700 hover:underline">
                                                {{ $post->user->name }}
                                            </h1>
                                        </a>
                                    </div>
                                </div>
                                @can('post_delete')
                                    <form action="{{ route('blog.destroy', $post->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="mt-4 btn-accent">
                                            Delete Post
                                        </button>
                                    </form>
                                @endcan
                            </div>
                        </article>
                    @endforeach

                    {{-- Pagination --}}
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
                </div>

                {{-- Categories --}}
                <div class="px-8 mt-10">
                    <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
                    <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                        {{ $category->name }}
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
