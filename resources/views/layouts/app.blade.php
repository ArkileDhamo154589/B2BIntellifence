<!DOCTYPE html>
<html lang="el" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PharmaIntel | B2B Intelligence</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        pharmaTeal: '#0d9488',
                        pharmaBlue: '#1e3a8a',
                    }
                }
            }
        }
    </script>

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <style>
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 { animation-delay: 2s; }
        .animation-delay-4000 { animation-delay: 4s; }
    </style>

    @stack('styles')
</head>
<body class="bg-slate-50 text-slate-900 dark:bg-slate-950 dark:text-slate-100 transition-colors duration-500 overflow-x-hidden">

<div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
    <div class="absolute top-0 -left-4 w-72 h-72 bg-blue-300 dark:bg-blue-900 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
    <div class="absolute top-0 -right-4 w-72 h-72 bg-teal-300 dark:bg-teal-900 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-20 w-72 h-72 bg-purple-300 dark:bg-purple-900 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
</div>

@include('layouts.partials.header')

<main class="min-h-screen">
    @yield('content')
</main>

@include('layouts.partials.footer')

<script src="{{ asset('js/main.js') }}"></script>
@stack('scripts')
</body>
</html>
