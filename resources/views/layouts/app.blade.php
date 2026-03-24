<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'PharmaIntel - B2B')</title>

    <link rel="icon" type="image/svg+xml" href="{{ asset('logo.svg') }}">

    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    @stack('styles')
</head>
<body>

<header class="header">
    <div class="logo-container">
        <img src="{{ asset('logo.svg') }}" alt="PharmaIntel Logo" class="logo-img">
        <div class="logo-text">Pharma<span>Intel</span></div>
    </div>
</header>

@yield('content')

<footer class="footer">
    &copy; {{ date('Y') }} PharmaIntel. Όλα τα δικαιώματα διατηρούνται.
</footer>

</body>
</html>
