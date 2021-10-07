@extends('layouts.default')
@section('title', 'Create Blog Post')

@section('content')
    <section>
        <div class="container mx-auto px-5">
            <div class="container mx-auto px-5 py-6 md:py-12 lg:py-24">
                <h2 class="text-2xl font-bold leading-7 sm:text-3xl sm:truncate">
                    Create Post
                </h2>
                {{-- Validation Errors --}}
                <x-validation-errors>
                </x-validation-errors>
                <form class="mt-6" action="{{ route('post.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    {{-- Title --}}
                    <label for="title" class="block mt-4 text-xs font-semibold uppercase md:text-base lg:text-lg">
                        Title
                    </label>
                    <input id="title" type="text" name="title" placeholder="A cool title" autocomplete="email"
                        class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-white focus:shadow-inner border border-transparent focus:border-dark"
                        required autofocus value="{{ old('title') }}" />

                    {{-- Category --}}
                    <label for="category" class="block mt-4 text-xs font-semibold uppercase md:text-base lg:text-lg">
                        Category
                    </label>
                    <select class="mt-4 outline-none w-full block p-3 bg-gray-200 text-gray-700" name="category"
                        id="category">
                        <option class="outline-none w-full block p-3" selected>Select category</option>
                        @foreach ($categories as $category)
                            <option class="p-3" value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    {{-- Status --}}
                    <label for="status" class="block mt-4 text-xs font-semibold uppercase md:text-base lg:text-lg">
                        Status
                    </label>
                    <select class="mt-4 outline-none w-full block p-3 bg-gray-200 text-gray-700" name="status" id="status">
                        <option class="outline-none w-full block p-3" selected>Select Status</option>
                        <option class="p-3" value="0">In Progress</option>
                        <option class="p-3" value="1">Publish</option>
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
                        id="description" name="description" type="text" placeholder="Description..."
                        value="{{ old('description') }}" required></textarea>

                    {{-- Body --}}
                    <label for="body" class="block mt-4 text-xs font-semibold uppercase md:text-base lg:text-lg">
                        Body
                    </label>
                    {{-- Toast UI Editor --}}
                    <div class="mt-2" id="editor"></div>
                    {{-- Hidden input = editor.markdown --}}
                    <input type="hidden" name="body" id="bodyInput" required />

                    {{-- Submit & --}}
                    <button type="submit" class="mt-8 btn-accent" id="createPostBtn">
                        Create Post
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
