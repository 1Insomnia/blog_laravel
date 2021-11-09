@extends('layouts.default')
@section('title', 'Blog Posts')
@section('content')
    <section id="blogPosts">
        <div class="px-6 py-8">
            <div class="container">
                <div class="flex justify-between">
                    <h1 class="hidden">Blog Post</h1>
                    <div class="w-full lg:w-8/12">
                        <h2 class="heading-1 mb-4">
                            Latest
                        </h2>
                        {{-- Blog Post --}}
                        @foreach ($posts as $post)
                            <x-blog.post :post="$post"></x-blog.post>
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
                            <h2 class="heading-1 mb-4">Categories</h2>
                            <div class="flex flex-col px-4 py-6 bg-white rounded-lg shadow-md">
                                <ul>
                                    @foreach ($categories as $category)
                                        <li>
                                            <a class="ml-4 heading-4 block text-accent-6 transition duration-200 ease-linear hover:text-success-light"
                                                href="{{ route('category.show', $category->slug) }}">
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
