@extends('layouts.default')
@section('title', 'Categories')

@section('content')
    <section>
        <div class="container">
            <div class="pt-12 mb-4">
                <h1 class="heading-1">Categories</h1>
            </div>
            @foreach ($categories as $category)
                <div>
                    <h2 class="heading-2 mb-4 text-primary"># {{ $category->name }}</h2>
                    @foreach ($category->post as $post)
                        <x-blog.post :post="$post"></x-blog.post>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
@endsection
