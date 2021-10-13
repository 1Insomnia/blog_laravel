@extends('layouts.default')

@section('title', 'Create Category')

@section('content')
    <section>
        <div class="container py-6 md:py-12 lg:py-24">
            <h2 class="heading-2">
                Create New Category
            </h2>
            {{-- Validation Errors --}}
            <x-validation-errors>
            </x-validation-errors>

            <form class="mt-6" action="{{ route('category.store') }}" method="POST">
                @csrf
                {{-- Title --}}
                <div>
                    <x-form.label for="name">
                        Name
                    </x-form.label>
                    <x-form.input id="name" type="text" name="name" placeholder="Category Name" required autofocus
                        value="{{ old('name') }}">
                    </x-form.input>
                </div>
                {{-- Submit & --}}
                <div class="mt-8">
                    <button type="submit" class="btn-success" id="createPostBtn">
                        Create Category
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
