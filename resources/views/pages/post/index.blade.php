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
                        {{-- Only show create post/category for admin --}}
                        @can('admin')
                            <div class="pt-8 mb-12">
                                {{-- Create New Post Link --}}
                                <a class="btn-success" href="{{ route('post.create') }}">
                                    Create Post
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
                            <div class="pt-8 mb-12">
                                <a class="btn-success" href="{{ route('category.create') }}">
                                    Create Category
                                </a>
                            </div>
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
    <x-modal.modal-post-delete>
        <x-slot name="title">Confirm Delete</x-slot>
        Do you want to delete this post ?
    </x-modal.modal-post-delete>
@endsection
