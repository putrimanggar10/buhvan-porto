<header class="fixed inset-x-0 top-0 z-50">
    <div class="w-full px-4">
        <nav
            class="mx-auto mt-6 flex max-w-[1040px] items-center justify-between rounded-2xl border border-white/10 bg-black/45 px-5 py-3 text-white shadow-2xl shadow-amber-950/30 backdrop-blur-xl lg:px-6">
            <a href="#home" class="flex shrink-0 items-center" aria-label="Bhuvan Solution home">
                <img src="{{ asset('images/logo-bhuvan.png') }}" alt="Bhuvan Solution"
                    class="h-10 w-auto object-contain">
            </a>

            <ul class="ml-12 hidden items-center gap-9 whitespace-nowrap text-xs font-semibold text-white/75 xl:flex">
                <li><a href="#home" class="ul-hover hover:text-white">Home</a></li>
                <li><a href="#about" class="ul-hover hover:text-white">Tentang Kami</a></li>
                <li><a href="#location" class="ul-hover hover:text-white">Lokasi</a></li>
                <li><a href="#services" class="ul-hover hover:text-white">Layanan</a></li>
                <li><a href="#contact-us" class="ul-hover hover:text-white">Kontak Kami</a></li>
            </ul>

            <button type="button" id="mobile-menu-toggle"
                class="inline-flex h-10 w-10 shrink-0 items-center justify-center border border-white/20 bg-white/10 backdrop-blur-sm transition hover:border-white/30 hover:bg-white/15 xl:hidden"
                aria-label="Open menu" aria-expanded="false">
                <svg id="hamburger-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
                <svg id="close-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" class="hidden">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </nav>

        <div id="mobile-menu-panel"
            class="fixed inset-x-0 bottom-0 top-[88px] z-40 -translate-y-2 overflow-y-auto border-t border-white/10 bg-black/95 opacity-0 invisible backdrop-blur-xl transition-all duration-300 xl:hidden">
            <nav class="mx-auto max-w-[1040px] space-y-1 px-6 py-8">
                <a href="#home"
                    class="mobile-nav-link flex w-full items-center justify-between rounded-xl px-4 py-4 font-semibold text-white transition hover:bg-white/5">
                    Home
                </a>
                <a href="#about"
                    class="mobile-nav-link flex w-full items-center justify-between rounded-xl px-4 py-4 font-semibold text-white transition hover:bg-white/5">
                    Tentang Kami
                </a>
                <a href="#location"
                    class="mobile-nav-link flex w-full items-center justify-between rounded-xl px-4 py-4 font-semibold text-white transition hover:bg-white/5">
                    Lokasi
                </a>
                <a href="#services"
                    class="mobile-nav-link flex w-full items-center justify-between rounded-xl px-4 py-4 font-semibold text-white transition hover:bg-white/5">
                    Layanan
                </a>
                <a href="#contact-us"
                    class="mobile-nav-link flex w-full items-center justify-between rounded-xl px-4 py-4 font-semibold text-white transition hover:bg-white/5">
                    Kontak Kami
                </a>
            </nav>
        </div>
    </div>
</header>

<script>
    (function() {
        var toggleBtn = document.getElementById('mobile-menu-toggle');
        var panel = document.getElementById('mobile-menu-panel');
        var hamburgerIcon = document.getElementById('hamburger-icon');
        var closeIcon = document.getElementById('close-icon');
        var isOpen = false;

        if (!toggleBtn || !panel || !hamburgerIcon || !closeIcon) return;

        function closeMenu() {
            isOpen = false;
            panel.classList.add('opacity-0', 'invisible', '-translate-y-2');
            panel.classList.remove('opacity-100', 'visible', 'translate-y-0');
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.setAttribute('aria-label', 'Open menu');
            document.body.style.overflow = '';
        }

        function openMenu() {
            isOpen = true;
            panel.classList.remove('opacity-0', 'invisible', '-translate-y-2');
            panel.classList.add('opacity-100', 'visible', 'translate-y-0');
            hamburgerIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
            toggleBtn.setAttribute('aria-expanded', 'true');
            toggleBtn.setAttribute('aria-label', 'Close menu');
            document.body.style.overflow = 'hidden';
        }

        toggleBtn.addEventListener('click', function() {
            if (isOpen) closeMenu();
            else openMenu();
        });

        panel.querySelectorAll('.mobile-nav-link').forEach(function(link) {
            link.addEventListener('click', closeMenu);
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && isOpen) closeMenu();
        });

        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1280 && isOpen) closeMenu();
        });
    })();
</script>
