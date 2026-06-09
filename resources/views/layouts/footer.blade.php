<footer class="border-t border-white/10 bg-[#050505] text-white">
    <div class="mx-auto max-w-[1180px] px-6 py-10 lg:px-10">
        <div class="grid gap-10 lg:grid-cols-[1.35fr_1fr_1fr]">
            <div>
                <a href="#home" class="inline-flex items-center gap-3">
                    <span class="grid h-11 w-11 place-items-center rounded-xl border border-amber-300/20 bg-black">
                        <img src="{{ asset('images/logo-bhuvan.png') }}" alt="Bhuvan Solution" class="h-7 w-auto">
                    </span>
                    <span class="text-sm font-bold uppercase tracking-[0.22em] text-white">Bhuvan Solution</span>
                </a>
                <p class="mt-4 max-w-md text-sm leading-7 text-white/55">
                    Partner pengembangan website dan web application untuk bisnis, sekolah, UMKM, startup, dan
                    instansi yang ingin membangun solusi digital modern.
                </p>
            </div>

            <div>
                <h3 class="text-xs font-bold uppercase tracking-[0.24em] text-amber-300">Navigasi</h3>
                <div class="mt-4 grid gap-3 text-sm text-white/60">
                    <a href="#home" class="transition hover:text-amber-300">Home</a>
                    <a href="#about" class="transition hover:text-amber-300">About Us</a>
                    <a href="#services" class="transition hover:text-amber-300">Our Services</a>
                    <a href="#contact-us" class="transition hover:text-amber-300">Contact Us</a>
                </div>
            </div>

            <div>
                <h3 class="text-xs font-bold uppercase tracking-[0.24em] text-amber-300">Kontak</h3>
                <div class="mt-4 grid gap-3 text-sm text-white/60">
                    <a href="mailto:support@bhuvansolution.com" class="break-all transition hover:text-amber-300">
                        support@bhuvansolution.com
                    </a>
                    <a href="tel:+6287787943796" class="transition hover:text-amber-300">
                        +62 877-8794-3796
                    </a>
                    <span>Indonesia</span>
                </div>
            </div>
        </div>

        <div
            class="mt-10 flex flex-col gap-3 border-t border-white/10 pt-6 text-xs text-white/45 md:flex-row md:items-center md:justify-between">
            <p>&copy; 2026 Bhuvan Solution. All rights reserved.</p>
            <p class="uppercase tracking-[0.2em] text-amber-300/80">Website & Web Application</p>
        </div>
    </div>
</footer>

@if (!request()->routeIs('contact-us'))
    @include('components.whatsapp-floating-component')
@endif

@include('components.cookie-consent')


<script>
    (function() {
        document.addEventListener('contextmenu', function(event) {
            event.preventDefault();
        });

        document.addEventListener('keydown', function(event) {
            var key = event.key ? event.key.toLowerCase() : '';
            var blockedShortcut =
                event.key === 'F12' ||
                (event.ctrlKey && event.shiftKey && ['i', 'j', 'c'].includes(key)) ||
                (event.ctrlKey && ['u', 's'].includes(key));

            if (blockedShortcut) {
                event.preventDefault();
                event.stopPropagation();
            }
        });
    })();
</script>
