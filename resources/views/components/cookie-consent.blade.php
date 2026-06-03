<!-- Prevent Cookie Banner Flash -->
<script>
(function() {
    if (typeof window !== 'undefined' && localStorage.getItem('cookie_consent')) {
        document.documentElement.style.setProperty('--hide-cookie-banner', 'true');
    }
})();
</script>

<!-- Cookie Consent Banner -->
<div id="cookie-consent" class="fixed bottom-0 left-0 right-0 bg-white shadow-2xl border-t border-gray-200 z-40 transform translate-y-full transition-transform duration-300" style="display: none;">
    <div class="max-w-7xl mx-auto px-4 py-6">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
            <!-- Content -->
            <div class="flex-1">
                <h3 class="text-lg font-bold text-navy-950 mb-2">{{ __('cookie.title') }}</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    {{ __('cookie.description') }}
                </p>
                <a href="#cookie-policy" class="text-sm text-accent-gold hover:text-accent-goldDark font-semibold mt-2 inline-block">
                    {{ __('cookie.learn_more') }} →
                </a>
            </div>

            <!-- Actions -->
            <div class="flex gap-3 w-full md:w-auto shrink-0">
                <button id="cookie-reject" class="flex-1 md:flex-none px-5 py-2.5 rounded-lg border border-gray-300 text-navy-950 text-sm font-semibold hover:bg-gray-100 transition duration-200">
                    {{ __('cookie.reject') }}
                </button>
                <button id="cookie-settings" class="flex-1 md:flex-none px-5 py-2.5 rounded-lg bg-gray-200 text-navy-950 text-sm font-semibold hover:bg-gray-300 transition duration-200">
                    {{ __('cookie.settings') }}
                </button>
                <button id="cookie-accept" class="flex-1 md:flex-none px-5 py-2.5 rounded-lg bg-accent-gold text-navy-950 text-sm font-bold hover:bg-accent-goldDark transition duration-200">
                    {{ __('cookie.accept') }}
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Cookie Settings Modal -->
<div id="cookie-modal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto">
        <!-- Header -->
        <div class="sticky top-0 bg-white border-b border-gray-200 px-8 py-6 flex items-center justify-between">
            <h2 class="text-2xl font-bold text-navy-950">{{ __('cookie.settings_title') }}</h2>
            <button id="cookie-modal-close" class="text-gray-400 hover:text-gray-600 transition">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <!-- Content -->
        <div class="px-8 py-6">
            <p class="text-gray-600 mb-8">
                {{ __('cookie.settings_description') }}
            </p>

            <!-- Cookie Categories -->
            <div class="space-y-6">
                <!-- Essential Cookies -->
                <div class="border border-gray-200 rounded-xl p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="font-bold text-lg text-navy-950 mb-2">{{ __('cookie.essential') }}</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                {{ __('cookie.essential_desc') }}
                            </p>
                        </div>
                        <input type="checkbox" id="cookie-essential" class="cookie-checkbox mt-1" checked disabled />
                    </div>
                    <p class="text-xs text-gray-400 mt-4">{{ __('cookie.always_active') }}</p>
                </div>

                <!-- Analytics Cookies -->
                <div class="border border-gray-200 rounded-xl p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="font-bold text-lg text-navy-950 mb-2">{{ __('cookie.analytics') }}</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                {{ __('cookie.analytics_desc') }}
                            </p>
                        </div>
                        <input type="checkbox" id="cookie-analytics" class="cookie-checkbox mt-1" />
                    </div>
                </div>

                <!-- Marketing Cookies -->
                <div class="border border-gray-200 rounded-xl p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="font-bold text-lg text-navy-950 mb-2">{{ __('cookie.marketing') }}</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                {{ __('cookie.marketing_desc') }}
                            </p>
                        </div>
                        <input type="checkbox" id="cookie-marketing" class="cookie-checkbox mt-1" />
                    </div>
                </div>

                <!-- Performance Cookies -->
                <div class="border border-gray-200 rounded-xl p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="font-bold text-lg text-navy-950 mb-2">{{ __('cookie.performance') }}</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                {{ __('cookie.performance_desc') }}
                            </p>
                        </div>
                        <input type="checkbox" id="cookie-performance" class="cookie-checkbox mt-1" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="sticky bottom-0 bg-gray-50 border-t border-gray-200 px-8 py-6 flex gap-3 justify-end">
            <button id="cookie-modal-reject" class="px-6 py-2.5 rounded-lg border border-gray-300 text-navy-950 font-semibold hover:bg-gray-100 transition">
                {{ __('cookie.reject') }}
            </button>
            <button id="cookie-modal-save" class="px-6 py-2.5 rounded-lg bg-accent-gold text-navy-950 font-bold hover:bg-accent-goldDark transition">
                {{ __('cookie.save_settings') }}
            </button>
        </div>
    </div>
</div>

<style>
    .cookie-checkbox {
        width: 20px;
        height: 20px;
        cursor: pointer;
        accent-color: #f5c249;
    }

    .cookie-checkbox:disabled {
        cursor: not-allowed;
        opacity: 0.7;
    }

    #cookie-consent {
        animation: slideUp 0.3s ease-out;
    }

    @keyframes slideUp {
        from {
            transform: translateY(100%);
        }
        to {
            transform: translateY(0);
        }
    }

    @keyframes slideDown {
        from {
            transform: translateY(0);
        }
        to {
            transform: translateY(100%);
        }
    }

    .slide-down {
        animation: slideDown 0.3s ease-out;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cookieConsent = document.getElementById('cookie-consent');
    const cookieModal = document.getElementById('cookie-modal');
    const cookieAcceptBtn = document.getElementById('cookie-accept');
    const cookieRejectBtn = document.getElementById('cookie-reject');
    const cookieSettingsBtn = document.getElementById('cookie-settings');
    const cookieModalClose = document.getElementById('cookie-modal-close');
    const cookieModalReject = document.getElementById('cookie-modal-reject');
    const cookieModalSave = document.getElementById('cookie-modal-save');

    // Check if user has already made a choice
    function checkCookieConsent() {
        const consent = localStorage.getItem('cookie_consent');
        if (consent) {
            hideCookieBanner();
        } else {
            showCookieBanner();
        }
    }

    // Show cookie banner
    function showCookieBanner() {
        cookieConsent.style.transform = 'translateY(0)';
        cookieConsent.style.display = 'block';
    }

    // Hide cookie banner
    function hideCookieBanner() {
        cookieConsent.style.transform = 'translateY(100%)';
        setTimeout(() => {
            cookieConsent.style.display = 'none';
        }, 300);
    }

    // Accept all cookies
    cookieAcceptBtn.addEventListener('click', function() {
        const consent = {
            essential: true,
            analytics: true,
            marketing: true,
            performance: true,
            timestamp: new Date().getTime()
        };
        localStorage.setItem('cookie_consent', JSON.stringify(consent));
        loadAnalyticsAndMarketing(consent);
        hideCookieBanner();
    });

    // Reject all cookies (except essential)
    cookieRejectBtn.addEventListener('click', function() {
        const consent = {
            essential: true,
            analytics: false,
            marketing: false,
            performance: false,
            timestamp: new Date().getTime()
        };
        localStorage.setItem('cookie_consent', JSON.stringify(consent));
        hideCookieBanner();
    });

    // Open settings modal
    cookieSettingsBtn.addEventListener('click', function() {
        openModal();
    });

    // Close modal
    cookieModalClose.addEventListener('click', function() {
        closeModal();
    });

    // Close modal on backdrop click
    cookieModal.addEventListener('click', function(e) {
        if (e.target === cookieModal) {
            closeModal();
        }
    });

    // Reject all from modal
    cookieModalReject.addEventListener('click', function() {
        document.getElementById('cookie-analytics').checked = false;
        document.getElementById('cookie-marketing').checked = false;
        document.getElementById('cookie-performance').checked = false;
        saveSettings();
    });

    // Save settings from modal
    cookieModalSave.addEventListener('click', function() {
        saveSettings();
    });

    // Load existing settings into modal
    function loadModalSettings() {
        const consent = JSON.parse(localStorage.getItem('cookie_consent') || '{}');
        document.getElementById('cookie-analytics').checked = consent.analytics || false;
        document.getElementById('cookie-marketing').checked = consent.marketing || false;
        document.getElementById('cookie-performance').checked = consent.performance || false;
    }

    // Save settings from modal
    function saveSettings() {
        const consent = {
            essential: true,
            analytics: document.getElementById('cookie-analytics').checked,
            marketing: document.getElementById('cookie-marketing').checked,
            performance: document.getElementById('cookie-performance').checked,
            timestamp: new Date().getTime()
        };
        localStorage.setItem('cookie_consent', JSON.stringify(consent));
        loadAnalyticsAndMarketing(consent);
        closeModal();
        hideCookieBanner();
    }

    // Open modal
    function openModal() {
        loadModalSettings();
        cookieModal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    // Close modal
    function closeModal() {
        cookieModal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Load analytics and marketing scripts
    function loadAnalyticsAndMarketing(consent) {
        if (consent.analytics) {
            // Load Google Analytics
            // Replace 'G-XXXXXXXXXX' dengan ID Google Analytics Anda
            const script = document.createElement('script');
            script.async = true;
            script.src = 'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX';
            document.head.appendChild(script);

            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-XXXXXXXXXX');
        }

        if (consent.marketing) {
            // Load marketing scripts (Facebook Pixel, etc.)
            // Tambahkan script marketing Anda di sini
        }
    }

    // Initialize
    checkCookieConsent();
});
</script>
