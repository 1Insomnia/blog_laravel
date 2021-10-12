@extends('layouts.default')
@section('title', 'Edit Blog Post')

@section('content')
    <section>
        <div class="container py-6 md:py-12 lg:py-24">
            <h2 class="text-2xl font-bold leading-7 sm:text-3xl sm:truncate">
                Edit Blog Post
            </h2>
            {{-- Validation Errors --}}
            <x-validation-errors>
            </x-validation-errors>
            <form class="mt-6" action="{{ route('blog.update', $post->slug) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- Title --}}
                <label for="title" class="block mt-4 text-xs font-semibold uppercase md:text-base lg:text-lg">
                    Title
                </label>
                <input id="title" type="text" name="title" placeholder="A cool title" autocomplete="email"
                    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-white focus:shadow-inner border border-transparent focus:border-dark"
                    required autofocus value="{{ $post->title }}" />
                {{-- Category --}}
                <label for="categoryId" class="block mt-4 text-xs font-semibold uppercase md:text-base lg:text-lg">
                    Category
                </label>
                <select class="mt-4 outline-none w-full block p-3 bg-gray-200 text-gray-700" name="category_id"
                    id="categoryId">
                    @foreach ($categories as $category)
                        <option class="p-3" value="{{ $category->id }}" @if ($post->category->id === $category->id) selected @endif>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
                {{-- Status --}}
                <label for="status" class="block mt-4 text-xs font-semibold uppercase md:text-base lg:text-lg">
                    Status
                </label>
                <select class="mt-4 outline-none w-full block p-3 bg-gray-200 text-gray-700" name="status" id="status">
                    <option class="p-3" value="0" @if ($post->status === 0) selected @endif>
                        In Progress
                    </option>
                    <option class="p-3" value="1" @if ($post->status === 1) selected @endif>
                        Publish
                    </option>
                </select>

                {{-- Image --}}
                <label for="image" class="block mt-4 text-xs font-semibold uppercase md:text-base lg:text-lg">
                    Image
                </label>
                <input id="image" type="file" name="image"
                    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-white focus:shadow-inner border border-transparent focus:border-dark" />

                {{-- Description --}}
                <label for="description" class="block mt-4 text-xs font-semibold uppercase md:text-base lg:text-lg">
                    Description
                </label>
                <textarea
                    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-white focus:shadow-inner border border-transparent focus:border-dark"
                    id="description" name="description" type="text" placeholder="Description"
                    value="{{ $post->description }}" required>{{ $post->description }}</textarea>

                {{-- Body --}}
                <label for="body" class="block mt-4 text-xs font-semibold uppercase md:text-base lg:text-lg">
                    Body
                </label>
                {{-- Toast UI Editor --}}
                <div class="mt-2" id="editor"></div>
                {{-- Hidden input = editor.markdown --}}
                <input type="hidden" name="body" id="bodyInput" value="{{ $post->body }}" required />

                {{-- Submit & --}}
                <button type="submit" class="mt-8 btn-accent" id="createPostBtn">
                    Edit Post
                </button>
            </form>
        </div>
    </section>
@endsection
