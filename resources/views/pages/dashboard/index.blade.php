@extends('layouts.default')
@section('title', 'Dashboard')

@section('content')
    <section>
        <div class="container pt-8">
            <div class="header">
                <h1 class="heading-1 mb-4">
                    Dashboard
                </h1>
            </div>
            @can('admin')
                @include('includes.admin-dashboard')
            @endcan
        </div>
    </section>
@endsection
@push('extra-javascript')
    <script src="{{ asset('js/dashboardIndex.js') }}" defer></script>
@endpush
