@extends('layouts.default')
@section('title', 'Categories')

@section('content')
    <section>
        <div class="container">
            <div class="pt-12 mb-4">
                <h1 class="heading-1">{{ $category->name }}</h1>
            </div>
            <div>
                @foreach ($category->post as $post)
                    <x-blog.post :post="$post"></x-blog.post>
                @endforeach
            </div>
        </div>
    </section>
@endsection
