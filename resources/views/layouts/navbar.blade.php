<!-- ============================ NAV ============================ -->
<header class="fixed top-0 inset-x-0 z-50">
    <div class="mx-auto max-w-[1360px] px-6 lg:px-10">
        <nav
            class="mt-5 flex items-center justify-between rounded-full bg-navy-950/70 backdrop-blur-xl border border-white/10 pl-6 pr-3 py-3 text-white">
            <a href="/" class="flex items-center shrink-0">
                <img src="{{ asset('images/bhuvAn solution opsi 2.png') }}" alt="Bhuvan Solution"
                    class="h-10 lg:h-5 w-auto">
            </a>
            <ul class="hidden xl:flex items-center gap-10 ml-12 text-sm text-white/80 whitespace-nowrap">
                <li>
                    <a href="#home" class="ul-hover hover:text-white">
                        {{ __('Home') }}
                    </a>
                </li>

                <li>
                    <a href="#about" class="ul-hover hover:text-white">
                        {{ __('About Us') }}
                    </a>
                </li>

                <li>
                    <a href="#services" class="ul-hover hover:text-white">
                        {{ __('Our Services') }}
                    </a>
                </li>

                <li>
                    <a href="#contact" class="ul-hover hover:text-white">
                        {{ __('Contact Us') }}
                    </a>
                </li>
            </ul>

            {{-- dropdown change lang --}}
            {{-- <div class="relative group">
                <button class="flex items-center gap-1 text-sm font-bold text-white hover:text-accent-gold transition">
                    EN
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </button>

                <div class="absolute right-0 mt-0 w-24 bg-white text-sm text-gray-700 rounded-md shadow-lg
                    opacity-0 invisible
                    group-hover:opacity-100 group-hover:visible
                    transition">

                    <a href="{{ url('lang/en') }}" class="block px-4 py-2 hover:bg-gray-100">EN</a>
                    <a href="{{ url('lang/id') }}" class="block px-4 py-2 hover:bg-gray-100">ID</a>
                </div>
            </div> --}}

            @php
                $currentLocale = app()->getLocale();
                $languages = [
                    'en' => ['name' => 'English', 'flag' => '/images/united-kingdom.png'],
                    'id' => ['name' => 'Indonesia', 'flag' => '/images/indonesia.png'],
                    'es' => ['name' => 'Español', 'flag' => '/images/spain.svg'],
                ];
                $currentLanguage = $languages[$currentLocale] ?? $languages['en'];
            @endphp

            <div class="flex items-center gap-2 sm:gap-3 shrink-0">

                <!-- Elemen untuk tombol translate -->
                <div class="relative inline-block min-w-0 lg:min-w-[180px]" id="language-dropdown">

                    {{-- Hidden Select --}}
                    <select id="custom-language-selector" class="hidden">

                        @foreach ($languages as $code => $language)
                            <option value="{{ $code }}" @selected($currentLocale === $code)>
                                {{ $language['name'] }}
                            </option>
                        @endforeach
                    </select>

                    {{-- Selected Display --}}
                    <div id="selected-language"
                        class="flex items-center justify-between gap-2
           h-[40px] lg:h-[44px] px-3 lg:px-4 rounded-full
           bg-white/10 hover:bg-white/15 backdrop-blur-sm
           border border-white/20 hover:border-white/30
           transition-all duration-200 cursor-pointer">

                        <div class="flex items-center gap-2">
                            <img id="selected-flag" src="{{ $currentLanguage['flag'] }}" alt="Selected language flag"
                                class="w-5 h-5 rounded-full object-cover shrink-0">
                            <span id="selected-text"
                                class="hidden lg:inline text-sm font-semibold text-white whitespace-nowrap">
                                {{ $currentLanguage['name'] }}
                            </span>
                        </div>

                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" class="text-white/70 shrink-0">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>

                    {{-- Dropdown --}}
                    <div id="language-menu"
                        class="absolute top-full mt-2 right-0 lg:right-auto lg:left-0 min-w-[140px] lg:w-full
               bg-slate-900/95 backdrop-blur-md
               border border-white/10
               rounded-xl overflow-hidden
               opacity-0 invisible
               transition-all duration-200 z-50">

                        @foreach ($languages as $code => $language)
                            <a href="{{ url('lang/' . $code) }}"
                                class="language-option flex items-center gap-2 px-3 py-2 hover:bg-white/10 cursor-pointer"
                                data-value="{{ $code }}">

                                <img src="{{ $language['flag'] }}" alt="{{ $language['name'] }} flag"
                                    class="w-5 h-5 rounded-full object-cover">

                                <span class="text-white text-sm">{{ $language['name'] }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Tempat untuk Google Translate Widget -->
                <div id="google_translate_element" style="display: none !important;"></div>

                <!-- Demo Buku CTA — hidden on mobile (in hamburger), visible from sm: -->
                {{-- <a href="/contact-us"
                    class="hidden sm:inline-flex items-center gap-1.5 lg:gap-2 rounded-full bg-accent-gold text-navy-950 px-3 lg:px-5 py-2 lg:py-2.5 text-xs lg:text-sm font-bold hover:bg-white transition whitespace-nowrap shrink-0">
                    <span class="hidden md:inline">Book Demo</span>
                    <span class="md:hidden">Demo</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5" class="shrink-0">
                        <path d="M5 12h14M13 5l7 7-7 7" />
                    </svg>
                </a> --}}

                <!-- Mobile Hamburger Button (visible <xl) -->
                <button type="button" id="mobile-menu-toggle"
                    class="xl:hidden inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/15 backdrop-blur-sm border border-white/20 hover:border-white/30 transition shrink-0"
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

            </div>
        </nav>

        <!-- ============================ MOBILE MENU PANEL ============================ -->
        <div id="mobile-menu-panel"
            class="xl:hidden fixed inset-x-0 top-[88px] bottom-0 z-40 bg-navy-950/98 backdrop-blur-xl border-t border-white/10
                    opacity-0 invisible -translate-y-2 transition-all duration-300 overflow-y-auto">
            <div class="px-6 py-8 max-w-[1360px] mx-auto">
                <nav class="space-y-1">

                    <a href="#home"
                        class="mobile-nav-link flex items-center justify-between w-full px-4 py-4 rounded-xl text-white hover:bg-white/5 transition">
                        <span class="font-semibold">{{ __('Home') }}</span>
                    </a>

                    <a href="#about"
                        class="mobile-nav-link flex items-center justify-between w-full px-4 py-4 rounded-xl text-white hover:bg-white/5 transition">
                        <span class="font-semibold">{{ __('About Us') }}</span>
                    </a>

                    <a href="#services"
                        class="mobile-nav-link flex items-center justify-between w-full px-4 py-4 rounded-xl text-white hover:bg-white/5 transition">
                        <span class="font-semibold">{{ __('Our Services') }}</span>
                    </a>

                    <a href="#contact"
                        class="mobile-nav-link flex items-center justify-between w-full px-4 py-4 rounded-xl text-white hover:bg-white/5 transition">
                        <span class="font-semibold">{{ __('Contact Us') }}</span>
                    </a>

                </nav>

                <!-- Mobile Demo Buku CTA (only shows on smallest mobile where main CTA is hidden) -->
                {{-- <div class="mt-6 sm:hidden">
                    <a href="/contact-us"
                        class="mobile-nav-link flex items-center justify-center gap-2 w-full rounded-full bg-accent-gold text-navy-950 px-5 py-3.5 text-sm font-bold hover:bg-white transition">
                        Book Demo
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M13 5l7 7-7 7" />
                        </svg>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</header>

<!-- ============================ MEGA MENU INTERACTIVITY ============================ -->
<style>
    /* Smooth fade for image swap */
    .zd-megamenu img[data-img-target] {
        transition: opacity .25s ease;
    }

    .zd-megamenu img[data-img-target].is-loading {
        opacity: 0;
    }

    /* Placeholder background when image hasn't loaded or is missing */
    .zd-megamenu .zd-preview-image {
        background: linear-gradient(135deg, #050e24 0%, #14306b 100%);
        position: relative;
    }

    .zd-megamenu .zd-preview-image::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(245, 194, 73, 0.06) 1px, transparent 1px),
            linear-gradient(90deg, rgba(245, 194, 73, 0.06) 1px, transparent 1px);
        background-size: 24px 24px;
        opacity: .6;
        z-index: 1;
    }

    .zd-megamenu .zd-preview-image::after {
        content: 'Preview';
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgba(245, 194, 73, .6);
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        z-index: 1;
    }

    .zd-megamenu .zd-preview-image img[data-img-target] {
        position: relative;
        z-index: 2;
    }
</style>

<script>
    (function() {
        function initZdMegaMenu() {
            document.querySelectorAll('.zd-megamenu').forEach(function(menu) {
                var defaultPane = menu.querySelector('[data-default]');
                var hoverPane = menu.querySelector('[data-hover]');
                if (!defaultPane || !hoverPane) return;

                var imgEl = hoverPane.querySelector('[data-img-target]');
                var tagEl = hoverPane.querySelector('[data-tag-target]');
                var titleEl = hoverPane.querySelector('[data-title-target]');
                var descEl = hoverPane.querySelector('[data-desc-target]');

                var items = menu.querySelectorAll('.zd-mega-item');

                items.forEach(function(item) {
                    item.addEventListener('mouseenter', function() {
                        var img = item.getAttribute('data-img') || '';
                        var tag = item.getAttribute('data-tag') || '';
                        var title = item.getAttribute('data-title') || '';
                        var desc = item.getAttribute('data-desc') || '';

                        if (imgEl) {
                            if (img) {
                                imgEl.classList.add('is-loading');
                                imgEl.onload = function() {
                                    imgEl.classList.remove('is-loading');
                                };
                                imgEl.onerror = function() {
                                    imgEl.removeAttribute('src');
                                    imgEl.classList.remove('is-loading');
                                };
                                imgEl.src = img;
                            } else {
                                imgEl.removeAttribute('src');
                            }
                        }
                        if (tagEl) tagEl.textContent = tag;
                        if (titleEl) titleEl.textContent = title;
                        if (descEl) descEl.textContent = desc;

                        defaultPane.classList.add('hidden');
                        hoverPane.classList.remove('hidden');
                        hoverPane.classList.add('flex');
                    });
                });

                // Reset to default when megamenu closes (parent group loses hover)
                var groupParent = menu.closest('.group');
                if (groupParent) {
                    groupParent.addEventListener('mouseleave', function() {
                        setTimeout(function() {
                            hoverPane.classList.add('hidden');
                            hoverPane.classList.remove('flex');
                            defaultPane.classList.remove('hidden');
                        }, 200);
                    });
                }
            });
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initZdMegaMenu);
        } else {
            initZdMegaMenu();
        }
    })();


    const dropdown = document.getElementById('language-dropdown');
    const menu = document.getElementById('language-menu');

    const languageSelector = document.getElementById('custom-language-selector');
    const selectedLanguageBtn = document.getElementById('selected-language');

    const selectedFlag = document.getElementById('selected-flag');
    const selectedText = document.getElementById('selected-text');

    const options = document.querySelectorAll('.language-option');

    if (languageSelector) {
        languageSelector.addEventListener('change', function() {
            updateLanguageUI(this.value);
        });
    }

    // SHOW / HIDE MENU
    if (dropdown && menu) {
        dropdown.addEventListener('mouseenter', () => {
            menu.classList.remove('opacity-0', 'invisible');
            menu.classList.add('opacity-100', 'visible');
        });

        dropdown.addEventListener('mouseleave', () => {
            menu.classList.remove('opacity-100', 'visible');
            menu.classList.add('opacity-0', 'invisible');
        });
    }

    // UPDATE UI
    function updateLanguageUI(value) {
        if (!selectedText) return;

        const languages = {
            en: {
                flag: '/images/united-kingdom.png',
                label: 'English'
            },
            id: {
                flag: '/images/indonesia.png',
                label: 'Indonesia'
            },
            es: {
                flag: '/images/spain.svg',
                label: 'Español'
            },
        };
        const language = languages[value] || languages.en;

        if (selectedFlag) selectedFlag.src = language.flag;
        selectedText.innerText = language.label;
    }

    // CLICK OPTION
    options.forEach(option => {
        option.addEventListener('click', (event) => {
            const value = option.dataset.value;

            if (!value) return;

            event.preventDefault();

            syncGoogleTranslateCookie(value);

            // update hidden select
            if (languageSelector) {
                languageSelector.value = value;
            }

            // update UI
            updateLanguageUI(value);

            // close menu after selection
            if (menu) {
                menu.classList.remove('opacity-100', 'visible');
                menu.classList.add('opacity-0', 'invisible');
            }

            window.location.href = option.getAttribute('href');
        });
    });

    function syncGoogleTranslateCookie(value) {
        const expires = new Date();
        expires.setTime(expires.getTime() + (30 * 24 * 60 * 60 * 1000));

        const expired = 'Thu, 01 Jan 1970 00:00:00 GMT';
        const host = window.location.hostname;
        const rootDomain = host.split('.').length > 2 ? '.' + host.split('.').slice(-2).join('.') : '.' + host;
        const cookieValue = value === 'en' ? '' : '/auto/' + value;
        const cookieExpires = value === 'en' ? expired : expires.toUTCString();
        const cookieBase = 'googtrans=' + cookieValue + '; expires=' + cookieExpires + '; path=/; SameSite=Lax';

        document.cookie = cookieBase;

        if (host && host !== 'localhost') {
            document.cookie = cookieBase + '; domain=' + host;
            document.cookie = cookieBase + '; domain=' + rootDomain;
        }
    }

    // Init UI from current selection
    if (languageSelector) {
        updateLanguageUI(languageSelector.value);
    } else {
        updateLanguageUI('en');
    }

    // ============================ MOBILE MENU TOGGLE ============================
    (function() {
        const toggleBtn = document.getElementById('mobile-menu-toggle');
        const panel = document.getElementById('mobile-menu-panel');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        if (!toggleBtn || !panel) return;

        let isOpen = false;

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

        function closeMenu() {
            isOpen = false;
            panel.classList.add('opacity-0', 'invisible', '-translate-y-2');
            panel.classList.remove('opacity-100', 'visible', 'translate-y-0');
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.setAttribute('aria-label', 'Open menu');
            document.body.style.overflow = '';

            // Reset all accordions to closed state
            panel.querySelectorAll('[data-accordion]').forEach(accordion => {
                const content = accordion.querySelector('.mobile-accordion-content');
                const chevron = accordion.querySelector('.mobile-accordion-chevron');
                const trigger = accordion.querySelector('.mobile-accordion-trigger');
                if (content) content.style.maxHeight = '0px';
                if (chevron) chevron.style.transform = 'rotate(0deg)';
                if (trigger) trigger.classList.remove('bg-white/5', 'border-white/10');
            });
        }

        toggleBtn.addEventListener('click', function() {
            if (isOpen) closeMenu();
            else openMenu();
        });

        // Close menu when user clicks a real navigation link (NOT accordion triggers)
        panel.querySelectorAll('.mobile-nav-link').forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // ============== ACCORDION TOGGLE ==============
        panel.querySelectorAll('[data-accordion]').forEach(accordion => {
            const trigger = accordion.querySelector('.mobile-accordion-trigger');
            const content = accordion.querySelector('.mobile-accordion-content');
            const chevron = accordion.querySelector('.mobile-accordion-chevron');

            if (!trigger || !content || !chevron) return;

            trigger.addEventListener('click', function(e) {
                e.preventDefault();
                const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

                if (isOpen) {
                    // Close this accordion
                    content.style.maxHeight = '0px';
                    chevron.style.transform = 'rotate(0deg)';
                    trigger.classList.remove('bg-white/5', 'border-white/10');
                } else {
                    // Optional: close all other accordions first (accordion behavior)
                    panel.querySelectorAll('[data-accordion]').forEach(other => {
                        if (other !== accordion) {
                            const otherContent = other.querySelector(
                                '.mobile-accordion-content');
                            const otherChevron = other.querySelector(
                                '.mobile-accordion-chevron');
                            const otherTrigger = other.querySelector(
                                '.mobile-accordion-trigger');
                            if (otherContent) otherContent.style.maxHeight = '0px';
                            if (otherChevron) otherChevron.style.transform = 'rotate(0deg)';
                            if (otherTrigger) otherTrigger.classList.remove('bg-white/5',
                                'border-white/10');
                        }
                    });

                    // Open this accordion
                    content.style.maxHeight = content.scrollHeight + 'px';
                    chevron.style.transform = 'rotate(180deg)';
                    trigger.classList.add('bg-white/5', 'border-white/10');
                }
            });
        });

        // Close on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && isOpen) closeMenu();
        });

        // Close on resize to desktop breakpoint (>= 1280px)
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1280 && isOpen) closeMenu();
        });
    })();
</script>
