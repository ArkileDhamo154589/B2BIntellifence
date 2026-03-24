document.addEventListener('DOMContentLoaded', function() {
    // --- Dark Mode Logic ---
    const themeToggles = document.querySelectorAll('#theme-toggle, #theme-toggle-mobile');
    themeToggles.forEach(btn => {
        btn.addEventListener('click', function() {
            document.documentElement.classList.toggle('dark');
            localStorage.theme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
        });
    });

    // --- Mobile Menu Logic ---
    const mobileMenu = document.getElementById('mobile-menu');
    const sidebar = document.getElementById('mobile-menu-sidebar');
    const backdrop = document.getElementById('mobile-menu-backdrop');
    const openBtn = document.getElementById('mobile-menu-open');
    const closeBtn = document.getElementById('mobile-menu-close');

    function openMenu() {
        mobileMenu.classList.remove('invisible');
        backdrop.classList.add('opacity-100');
        sidebar.classList.remove('translate-x-full');
        document.body.classList.add('overflow-hidden'); // Κλειδώνει το scroll του site
    }

    function closeMenu() {
        sidebar.classList.add('translate-x-full');
        backdrop.classList.remove('opacity-100');
        setTimeout(() => {
            mobileMenu.classList.add('invisible');
            document.body.classList.remove('overflow-hidden');
        }, 300); // Περιμένει το animation να τελειώσει
    }

    if (openBtn) openBtn.addEventListener('click', openMenu);
    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
    if (backdrop) backdrop.addEventListener('click', closeMenu);
});
