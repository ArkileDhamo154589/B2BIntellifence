@extends('layouts.app')

@section('content')
    <div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
        <div class="absolute top-0 -left-4 w-72 h-72 bg-teal-300 dark:bg-teal-900 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute top-0 -right-4 w-72 h-72 bg-blue-300 dark:bg-blue-900 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
    </div>

    @include('layouts.partials.home.hero')

    @include('layouts.partials.home.actions')

    @include('layouts.partials.home.pricing')

    @include('layouts.partials.home.features')

@endsection
