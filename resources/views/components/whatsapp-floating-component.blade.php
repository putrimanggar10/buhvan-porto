{{--
    ============================================================
    COMPONENT: Floating WhatsApp Button
    ============================================================
    Usage:
        @include('components.whatsapp-floating')

    Where to include:
        - Add BEFORE @include('layouts.footer') in any blade page
        - OR conditionally in master layout (recommended):

            @if(!request()->is('contact-us'))
                @include('components.whatsapp-floating')
            @endif

    Configuration:
        - WhatsApp number: edit $whatsappNumber below (or use .env)
        - Pre-filled message: edit $whatsappMessage below
        - Style/color/animation: edit Tailwind classes inline

    Notes:
        - Position: fixed bottom-6 right-6 (24px from corner)
        - Z-index: z-50 (above content, below modals)
        - Responsive: bubble shows on hover (desktop), icon only on mobile
        - Pulse animation: subtle attention without distraction
    ============================================================
--}}

@php
    // TODO: Replace with real WhatsApp number from ZDGlobal sales team
    // Format: country code + number, no leading + or spaces (e.g. 62895360990303 for +62 895-3609-90303)
    $whatsappNumber = '62895360990303';

    // Pre-filled message (will appear in WhatsApp chat when user clicks)
    $whatsappMessage = 'Hi ZDGlobal, I am interested in further discussion about the ZD One Platform.';

    // Build wa.me URL
    $waUrl = 'https://wa.me/' . $whatsappNumber . '?text=' . urlencode($whatsappMessage);
@endphp

<!-- ============================ FLOATING WHATSAPP BUTTON ============================ -->
<a href="{{ $waUrl }}"
   target="_blank"
   rel="noopener noreferrer"
   id="wa-floating-button"
   aria-label="Chat with us on WhatsApp"
   class="group fixed bottom-6 right-6 z-50 inline-flex items-center gap-3
          h-14 sm:h-14
          rounded-full pl-4 pr-2 sm:pr-2
          bg-[#25D366] hover:bg-[#128C7E]
          shadow-2xl shadow-[#25D366]/30 hover:shadow-[#128C7E]/40
          transition-all duration-300
          hover:scale-105">

    {{-- Bubble text (hidden default, slide in on hover at sm+) --}}
    <div class="hidden sm:flex flex-col items-end leading-tight
                max-w-0 group-hover:max-w-[200px]
                overflow-hidden whitespace-nowrap
                opacity-0 group-hover:opacity-100
                transition-all duration-500 ease-out">
        <span class="text-xs text-white/90 font-medium">Need help?</span>
        <span class="text-sm text-white font-bold">Chat with us</span>
    </div>

    {{-- WhatsApp icon container with pulse ring --}}
    <span class="relative inline-flex items-center justify-center shrink-0
                 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-white/15">

        {{-- Pulse ring (animated) --}}
        <span class="absolute inset-0 rounded-full bg-white/20 animate-ping opacity-75"></span>

        {{-- WhatsApp official SVG icon --}}
        <svg class="relative w-6 h-6 sm:w-6 sm:h-6 text-white fill-current" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
        </svg>
    </span>
</a>

{{-- Optional: small inline script to hide button if user already on contact-us (safety net) --}}
<script>
    (function() {
        const path = window.location.pathname;
        if (path === '/contact-us' || path === '/contact-us/' || path.endsWith('/contact-us')) {
            const btn = document.getElementById('wa-floating-button');
            if (btn) btn.style.display = 'none';
        }
    })();
</script>
