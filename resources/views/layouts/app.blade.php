<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('meta_title', 'PharmaIntel - B2B Hub')</title>
    <meta name="description" content="@yield('meta_description', 'Σύστημα διαχείρισης B2B παραγγελιών και δικτύων φαρμακείων.')">

    <link rel="icon" type="image/svg+xml" href="{{ asset('logo.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @stack('styles')
</head>
<body>

@include('partials.layout.header')

@yield('content')

@include('partials.layout.footer')

<script src="{{ asset('js/main.js') }}"></script>
@stack('scripts')
</body>
</html>
