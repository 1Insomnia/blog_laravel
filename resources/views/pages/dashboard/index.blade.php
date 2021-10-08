@extends('layouts.default')
@section('title', 'Dashboard')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-xl mb-2">
                        Hello : <span class="text-accent">{{ $user->name }}</span>
                    </h1>
                    <h2 class="text-xl text-accent mb-2">
                        {{ $user->email }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection
