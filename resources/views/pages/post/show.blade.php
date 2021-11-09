@extends('layouts.default')
@section('title', 'Blog Post Show')

{{-- Load Extra Css form blog post body style --}}
@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/blog_post.css') }}">
@endsection

@section('content')
    <section>
        <div class="container pt-20">
            <div class="w-80-ch">
                {{-- Post Heading --}}
                <h1 class="mb-5 heading-1">{{ $post->title }}</h1>
                <div class="flex items-center text-sm text-light">
                    <span>{{ $post->publishedAt() }}</span>
                    &nbsp; — &nbsp;
                    <span class="block" class="text-primary">#{{ $post->category->name }}</span>
                </div>
                @if ($post->image_path)
                    <div class="mt-5">
                        <img class="block object-cover w-full h-72 mb-5" src="{{ asset('img/' . $post->image_path) }}"
                            alt="">
                    </div>
                @endif
                {{-- Post Body --}}
                <div class="mt-5 post-body">
                    {!! $post->displayBody() !!}
                </div>

                {{-- Comment Section --}}
                <div class="mt-10 lg:flex items-center p-5 border border-lighter  rounded">
                    Comment Section
                </div>
            </div>
    </section>
@endsection
