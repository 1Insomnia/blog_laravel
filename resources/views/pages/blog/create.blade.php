@extends('layouts.default')
@section('title', 'create blog post')

@section('content')
    <section>
        <div class="container mx-auto px-5">
            <div class="container mx-auto px-5 py-6 md:py-12 lg:py-24">
                <h2 class="text-2xl font-bold leading-7 sm:text-3xl sm:truncate">
                    Create Post
                </h2>
                <form class="mt-6" action="{{ route('post.store') }}" method="POST">
                    @csrf
                    <label for="title" class="block mt-4 text-xs font-semibold uppercase md:text-base lg:text-lg">
                        Title
                    </label>
                    <input id="title" type="text" name="title" placeholder="A cool title" autocomplete="email"
                           class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-white focus:shadow-inner border border-transparent focus:border-dark"
                           required autofocus value="{{ old('title') }}"/>
                    <label for="title" class="block mt-4 text-xs font-semibold uppercase md:text-base lg:text-lg">
                        Category
                    </label>
                    <select class="mt-4 outline-none w-full block p-3 bg-gray-200 text-gray-700" name="category"
                            id="category">
                        <option class="outline-none w-full block p-3" selected>Select category</option>
                        @foreach($categories as $category)
                            <option class="p-3" value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <label for="description" class="block mt-4 text-xs font-semibold uppercase md:text-base lg:text-lg">
                        Description
                    </label>
                    <textarea
                        class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-white focus:shadow-inner border-transparent focus:border-dark"
                        id="description" name="description" type="text" placeholder="Description..."
                        value="{{ old('description') }}" required></textarea>
                    <label for="body" class="block mt-4 text-xs font-semibold uppercase md:text-base lg:text-lg">
                        Body
                    </label>
                    <div class="mt-2" id="editor"></div>
                    <input type="hidden" name="body" id="bodyInput" required/>
                    <button type="submit"
                            class="w-full py-4 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none "
                            id="createPost">
                        Create Post
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
