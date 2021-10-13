@extends('layouts.default')
@section('title', 'Create Blog Post')

@section('content')
    <section>
        <div class="container py-6 md:py-12 lg:py-24">
            <h2 class="heading-2">
                Create Blog Post
            </h2>

            {{-- Validation Errors --}}
            <x-validation-errors>
            </x-validation-errors>

            <form class="mt-6" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Title --}}
                <div>
                    <x-form.label for="title">
                        Title
                    </x-form.label>
                    <x-form.input id="title" type="text" name="title" placeholder="A cool title" autocomplete="email"
                        required autofocus value="{{ old('title') }}">
                    </x-form.input>
                </div>

                {{-- Category --}}
                <div class="mt-4">
                    <x-form.label for="categoryId">
                        Category
                    </x-form.label>
                    <select
                        class="mt-4 block appearance-none outline-none bg-background w-full px-2 py-3 border border-accent-2 rounded-md focus:border-accent-8"
                        name="category_id" id="categoryId">
                        <option class="outline-none w-full block p-3" selected>Select category</option>
                        @foreach ($categories as $category)
                            <option class="p-3" value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Status --}}
                <div class="mt-4">
                    <x-form.label for="status">
                        Status
                    </x-form.label>
                    <select
                        class="mt-4 block appearance-none outline-none bg-background w-full px-2 py-3 border border-accent-2 rounded-md focus:border-accent-8"
                        name="status" id="status">
                        <option class="outline-none w-full block p-3" selected>Select Status</option>
                        <option class="p-3" value="0">In Progress</option>
                        <option class="p-3" value="1">Publish</option>
                    </select>
                </div>

                {{-- Image --}}
                <div class="mt-4">
                    <x-form.label for="image">
                        Image
                    </x-form.label>
                    <x-form.input id="image" type="file" name="image"></x-form.input>
                </div>

                {{-- Description --}}
                <div class="mt-4">
                    <x-form.label for="description">
                        Description
                    </x-form.label>
                    <textarea
                        class="block appearance-none outline-none bg-background w-full px-2 py-3 border border-accent-2 rounded-md focus:border-accent-8 min-h-150"
                        id="description" name="description" type="text" placeholder="Please enter a description."
                        value="{{ old('description') }}" required></textarea>
                </div>

                {{-- Body --}}
                <x-form.label class="mt-4" for="body">
                    Body
                </x-form.label>
                {{-- Toast UI Editor --}}
                <div class="mt-2" id="editor"></div>
                {{-- Hidden input = editor.markdown --}}
                <input type="hidden" name="body" id="bodyInput" required />

                {{-- Submit & --}}
                <div class="mt-8">
                    <button type="submit" class="btn-success" id="postBtn">
                        Create Post
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection

@push('extra-javascript')
    <script src="{{ asset('js/editor.js') }}" defer></script>
@endpush
