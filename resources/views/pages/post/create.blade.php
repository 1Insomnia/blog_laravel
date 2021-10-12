@extends('layouts.default')
@section('title', 'Create Blog Post')

@section('content')
    <section>
        <div class="container py-6 md:py-12 lg:py-24">
            <h2 class="text-2xl font-bold leading-7 sm:text-3xl sm:truncate">
                Create Blog Post
            </h2>
            {{-- Validation Errors --}}
            <x-validation-errors>
            </x-validation-errors>
            <form class="mt-6" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Title --}}
                <x-form.label for="title">
                    Title
                </x-form.label>

                <x-form.input id="title" type="text" name="title" placeholder="A cool title" autocomplete="email" required
                    autofocus value="{{ old('title') }}">
                </x-form.input>

                {{-- Category --}}
                <x-form.label for="categoryId">
                    Category
                </x-form.label>
                <select class="mt-4 outline-none w-full block p-3 bg-gray-200 text-gray-700" name="category_id"
                    id="categoryId">
                    <option class="outline-none w-full block p-3" selected>Select category</option>
                    @foreach ($categories as $category)
                        <option class="p-3" value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                {{-- Status --}}
                <x-form.label for="status">
                    Status
                </x-form.label>
                <select class="mt-4 outline-none w-full block p-3 bg-gray-200 text-gray-700" name="status" id="status">
                    <option class="outline-none w-full block p-3" selected>Select Status</option>
                    <option class="p-3" value="0">In Progress</option>
                    <option class="p-3" value="1">Publish</option>
                </select>

                {{-- Image --}}
                <x-form.label for="image">
                    Image
                </x-form.label>
                <x-form.input id="image" type="file" name="image"></x-form.input>

                {{-- Description --}}
                <x-form.label for="description">
                    Description
                </x-form.label>
                <textarea
                    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-white focus:shadow-inner border border-transparent focus:border-dark"
                    id="description" name="description" type="text" placeholder="Description..."
                    value="{{ old('description') }}" required></textarea>

                {{-- Body --}}
                <x-form.label for="body">
                    Body
                </x-form.label>
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
    </section>
@endsection
