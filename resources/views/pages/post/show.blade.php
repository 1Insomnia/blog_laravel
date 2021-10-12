@extends('layouts.default')
@section('title', 'Blog Post Show')

{{-- Load Extra Css form blog post body style --}}
@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/blog_post.css') }}">
@endsection

@section('content')
    <section>
        <div class="container py-6 md:py-12 lg:py-24">
            <div class="pb-8 border-b border-gray-200 md:flex md:items-center p-4">
                <h1 class="text-xl font-bold">{{ $post->title }}</h1>
                <h2 class="md:pl-4 text-accent">{{ $post->category->name }}</h2>
                <h3 class="md:pl-4 text-accent font-bold">{{ $post->publishedAt() }}</h3>
            </div>
            <div class="pb-8 border-b border-gray-200 md:flex md:items-center p-4">
                <div class="" id="postBody">
                    {!! Str::markdown($post->body) !!}
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('blog.edit', $post->slug) }}" class="btn-accent">Edit Post</a>
            </div>
        </div>
    </section>
@endsection
