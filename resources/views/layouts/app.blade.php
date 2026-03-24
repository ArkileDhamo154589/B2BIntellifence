<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'PharmaIntel - B2B')</title>

    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @stack('styles')
</head>
<body>

<header class="header">
    <div class="logo-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="width: 40px; height: 40px; color: var(--pharma-blue);">
            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
            <line x1="12" y1="8" x2="12" y2="16" stroke="var(--pharma-teal)" stroke-width="2.5"></line>
            <line x1="8" y1="12" x2="16" y2="12" stroke="var(--pharma-teal)" stroke-width="2.5"></line>
        </svg>
        <div class="logo-text">Pharma<span>Intel</span></div>
    </div>
</header>

@yield('content')

<footer class="footer">
    &copy; {{ date('Y') }} PharmaIntel B2B Intelligence. Όλα τα δικαιώματα διατηρούνται.
</footer>

</body>
</html>
