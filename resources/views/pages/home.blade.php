@extends('layouts.default')

@section('title', 'Home')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <section class="h-screen bg-hero-pattern bg-center bg-cover flex items-center justify-center" id="hero">
        <div class="text-center px-4">
            <h1 class="text-white text-2xl font-light uppercase tracking-widest mb-4">Nux Blog</h1>
            <h2 class="text-xs text-white font-semibold uppercase tracking-wide opacity-70">Lorem ipsum dolor, sit
                amet
                consectetur
                adipisicing elit. Dicta, dignissimos.</h2>
        </div>
    </section>
@endsection
