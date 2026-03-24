<header class="sticky top-0 z-50 w-full border-b border-slate-200 bg-white/80 backdrop-blur dark:border-slate-700 dark:bg-slate-950/80 transition-all duration-300">
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">

        <a href="{{ route('home') }}" class="flex items-center gap-3 no-underline group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-10 w-10 text-teal-600 transition-transform group-hover:scale-110">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                <line x1="12" y1="8" x2="12" y2="16" style="stroke: #0d9488; stroke-width: 2.5;"></line>
                <line x1="8" y1="12" x2="16" y2="12" style="stroke: #0d9488; stroke-width: 2.5;"></line>
            </svg>
            <span class="text-2xl font-black tracking-tighter text-slate-900 dark:text-white">
                Pharma<span class="text-teal-600 font-extrabold">Intel</span>
            </span>
        </a>

        <nav class="hidden md:flex items-center gap-8">
            <a href="{{ route('about') }}" class="text-sm font-bold text-slate-600 hover:text-teal-600 dark:text-slate-300 dark:hover:text-teal-400 no-underline transition-colors">Σχετικά</a>
            <a href="{{ route('news') }}" class="text-sm font-bold text-slate-600 hover:text-teal-600 dark:text-slate-300 dark:hover:text-teal-400 no-underline transition-colors">Νέα</a>
            <a href="{{ route('contact') }}" class="text-sm font-bold text-slate-600 hover:text-teal-600 dark:text-slate-300 dark:hover:text-teal-400 no-underline transition-colors">Επικοινωνία</a>

            <button id="theme-toggle" class="relative h-10 w-10 flex items-center justify-center rounded-xl border border-slate-200 bg-slate-50 dark:border-slate-700 dark:bg-slate-800 hover:ring-2 ring-teal-500/50 transition-all">
                <svg id="moon-icon" class="h-5 w-5 text-slate-700 dark:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>
                <svg id="sun-icon" class="hidden h-5 w-5 text-yellow-400 dark:block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path d="M12 3v1m0 18v1m9-9h1M3 9h1m17.364 7.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </button>
        </nav>

        <div class="flex items-center md:hidden">
            <button id="mobile-menu-open" class="p-2 text-slate-600 dark:text-slate-300 focus:outline-none">
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path d="M4 6h16M4 12h16M10 18h10" />
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="fixed inset-0 z-[60] invisible overflow-hidden" role="dialog">
        <div id="mobile-menu-backdrop" class="absolute inset-0 bg-slate-900/60 opacity-0 transition-opacity duration-300 backdrop-blur-sm"></div>

        <div id="mobile-menu-sidebar" class="absolute inset-y-0 right-0 w-[300px] translate-x-full bg-white dark:bg-slate-950 p-6 shadow-2xl transition-transform duration-300">
            <div class="flex items-center justify-between mb-8 border-b border-slate-100 dark:border-slate-800 pb-4">
                <span class="text-xl font-black text-teal-600">MENU</span>
                <button id="mobile-menu-close" class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <nav class="flex flex-col gap-6">
                <a href="{{ route('about') }}" class="text-lg font-bold text-slate-700 dark:text-slate-200 no-underline hover:text-teal-600 transition-colors">Σχετικά με εμάς</a>
                <a href="{{ route('news') }}" class="text-lg font-bold text-slate-700 dark:text-slate-200 no-underline hover:text-teal-600 transition-colors">Νέα</a>
                <a href="{{ route('contact') }}" class="text-lg font-bold text-slate-700 dark:text-slate-200 no-underline hover:text-teal-600 transition-colors">Επικοινωνία</a>

                <div class="pt-6 mt-6 border-t border-slate-100 dark:border-slate-800 flex justify-between items-center">
                    <span class="text-sm font-semibold dark:text-slate-400">Εναλλαγή Θέματος</span>
                    <button id="theme-toggle-mobile" class="h-10 w-10 flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-800">
                        <svg class="h-5 w-5 dark:text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path d="M12 3v1m0 18v1m9-9h1M3 9h1" />
                        </svg>
                    </button>
                </div>
            </nav>
        </div>
    </div>
</header>
