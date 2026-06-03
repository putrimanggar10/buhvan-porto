<!-- ============================ NAV ============================ -->
<header class="fixed top-0 inset-x-0 z-50">
    <div class="mx-auto max-w-[1360px] px-6 lg:px-10">
        <nav
            class="mt-5 flex items-center justify-between rounded-full bg-navy-950/70 backdrop-blur-xl border border-white/10 pl-6 pr-3 py-3 text-white">
            <a href="/" class="flex items-center gap-2.5 shrink-0 whitespace-nowrap">
                <span
                    class="w-8 h-8 rounded-lg bg-gradient-to-br from-accent-gold to-accent-goldDark grid place-items-center text-navy-950 font-extrabold text-sm shrink-0">Z</span>
                <span class="font-extrabold tracking-tight whitespace-nowrap">ZD<span class="text-accent-gold">.</span>One</span>
            </a>
            <ul class="hidden xl:flex items-center gap-6 xl:gap-9 ml-8 xl:ml-12 text-sm text-white/80 whitespace-nowrap">
                <li><a href="/" class="ul-hover hover:text-white">{{ __('homes.nav.home') }}</a></li>

                <!-- ============= DEVICE SUPPORT mega menu ============= -->
                <li class="relative group">
                    <a class="ul-hover hover:text-white flex items-center gap-1">{{ __('homes.nav.device_support') }}</a>

                    <div
                        class="hidden xl:block absolute left-1/2 -translate-x-1/2 top-full mt-6 w-[860px] opacity-0 invisible xl:group-hover:opacity-100 xl:group-hover:visible transition-all duration-300 zd-megamenu"
                        data-megamenu="device-support">

                        <div class="bg-white text-navy-950 rounded-2xl shadow-2xl border border-gray-100 overflow-hidden grid grid-cols-12">

                            <!-- LEFT: Preview pane -->
                            <div class="col-span-5 bg-gradient-to-br from-[#fafaf7] to-[#f0eee5] p-7 relative overflow-hidden">
                                <!-- Default branded splash -->
                                <div class="zd-preview-default flex flex-col h-full" data-default>
                                    <div class="flex items-center gap-2 mb-5">
                                        <span class="w-9 h-9 rounded-lg bg-gradient-to-br from-accent-gold to-accent-goldDark grid place-items-center text-navy-950 font-extrabold">Z</span>
                                        <span class="font-extrabold text-navy-950 text-lg">ZD<span class="text-accent-gold">.</span>One Platform</span>
                                    </div>
                                    <div class="font-extrabold text-3xl text-navy-950 leading-tight tracking-tight">
                                        Connecting<br/><span class="italic font-serif font-normal text-accent-goldDark">Everything.</span>
                                    </div>
                                    <p class="mt-4 text-sm text-navy-900/65 leading-relaxed">One unified platform for managing every device across your organization â€” surveillance, biometrics, signage, laptops, tablets, and POS.</p>
                                    <div class="mt-auto pt-6">
                                        <div class="text-[10px] font-bold tracking-widest text-accent-goldDark uppercase mb-1">Hover for details</div>
                                        <div class="flex gap-1.5">
                                            <span class="w-6 h-1 rounded-full bg-accent-gold"></span>
                                            <span class="w-2 h-1 rounded-full bg-navy-900/15"></span>
                                            <span class="w-2 h-1 rounded-full bg-navy-900/15"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hover preview content -->
                                <div class="zd-preview-hover flex-col h-full hidden" data-hover>
                                    <div class="zd-preview-image w-full h-40 rounded-xl bg-navy-950 overflow-hidden mb-4 flex items-center justify-center">
                                        <img src="" alt="" class="w-full h-full object-cover" data-img-target/>
                                    </div>
                                    <div class="text-[10px] font-bold tracking-widest text-accent-goldDark uppercase mb-1.5" data-tag-target></div>
                                    <h3 class="font-extrabold text-xl text-navy-950 leading-tight" data-title-target></h3>
                                    <p class="mt-2 text-sm text-navy-900/65 leading-relaxed" data-desc-target></p>
                                </div>
                            </div>

                            <!-- RIGHT: Items list -->
                            <div class="col-span-7 p-7">
                                <div class="text-[10px] font-bold tracking-widest text-gray-400 uppercase mb-4">Device Categories</div>
                                <ul class="grid grid-cols-2 gap-1.5">
                                    <li>
                                        <a href="{{ route('device-monitoring') }}"
                                           class="zd-mega-item flex items-center gap-2.5 px-3 py-2.5 rounded-lg hover:bg-accent-gold/10 transition group/item"
                                           data-img="/images/image-navbar/device_support/device-monitoring.svg"
                                           data-tag="A Â· Surveillance"
                                           data-title="Intelligent Monitoring System"
                                           data-desc="Enterprise surveillance with cameras, NVR, and AI analytics in one system â€” 24/7 visibility without blind spots.">
                                            <span class="w-8 h-8 rounded-lg bg-accent-gold/15 grid place-items-center shrink-0">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d9a82f" stroke-width="2"><rect x="2" y="6" width="15" height="12" rx="2"/><path d="M17 10l5-3v10l-5-3z"/></svg>
                                            </span>
                                            <span class="text-sm font-semibold group-hover/item:text-accent-goldDark">Device Monitoring</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('device-biometric') }}"
                                           class="zd-mega-item flex items-center gap-2.5 px-3 py-2.5 rounded-lg hover:bg-accent-gold/10 transition group/item"
                                           data-img="/images/image-navbar/device_support/biometric-readers.svg"
                                           data-tag="B Â· Biometric"
                                           data-title="Multi Biometric Readers"
                                           data-desc="Multi-modal authentication â€” fingerprint, face, palm, vein. Combine methods for layered security.">
                                            <span class="w-8 h-8 rounded-lg bg-accent-gold/15 grid place-items-center shrink-0">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d9a82f" stroke-width="1.5"><path d="M12 11a4 4 0 0 0-4 4v3M12 11a4 4 0 0 1 4 4v1M12 7a8 8 0 0 0-8 8v3M12 7a8 8 0 0 1 8 8M12 3v0M4 11a8 8 0 0 1 13-6"/></svg>
                                            </span>
                                            <span class="text-sm font-semibold group-hover/item:text-accent-goldDark">Biometric Readers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('device-signage') }}"
                                           class="zd-mega-item flex items-center gap-2.5 px-3 py-2.5 rounded-lg hover:bg-accent-gold/10 transition group/item"
                                           data-img="/images/image-navbar/device_support/digital-signage.svg"
                                           data-tag="C Â· Signage"
                                           data-title="Digital Signage"
                                           data-desc="Remote visual content management â€” distribute info & promotions to thousands of screens, on schedule.">
                                            <span class="w-8 h-8 rounded-lg bg-accent-gold/15 grid place-items-center shrink-0">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d9a82f" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8m-4-4v4"/></svg>
                                            </span>
                                            <span class="text-sm font-semibold group-hover/item:text-accent-goldDark">Digital Signage</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg opacity-50 cursor-default select-none">
                                            <span class="w-8 h-8 rounded-lg bg-accent-gold/15 grid place-items-center shrink-0">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d9a82f" stroke-width="2"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M6 21h12m-7-4v4"/></svg>
                                            </span>
                                            <span class="text-sm font-semibold">Laptops</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg opacity-50 cursor-default select-none">
                                            <span class="w-8 h-8 rounded-lg bg-accent-gold/15 grid place-items-center shrink-0">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d9a82f" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                                            </span>
                                            <span class="text-sm font-semibold">Tablets</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg opacity-50 cursor-default select-none">
                                            <span class="w-8 h-8 rounded-lg bg-accent-gold/15 grid place-items-center shrink-0">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d9a82f" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6v6H9z"/></svg>
                                            </span>
                                            <span class="text-sm font-semibold">POS Systems</span>
                                        </div>
                                    </li>
                                </ul>

                                <div class="mt-5 pt-5 border-t border-gray-100">
                                    <a href="/contact-us" class="inline-flex items-center gap-2 rounded-full bg-accent-gold text-navy-950 px-5 py-2 text-xs font-bold hover:bg-navy-950 hover:text-white transition">
                                        Book Demo
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ============= SOLUTIONS mega menu ============= -->
                <li class="relative group">
                    <a  class="ul-hover hover:text-white flex items-center gap-1">{{ __('homes.nav.solutions') }}</a>

                    <div
                        class="hidden xl:block absolute left-1/2 -translate-x-1/2 top-full mt-6 w-[860px] opacity-0 invisible xl:group-hover:opacity-100 xl:group-hover:visible transition-all duration-300 zd-megamenu"
                        data-megamenu="solutions">

                        <div class="bg-white text-navy-950 rounded-2xl shadow-2xl border border-gray-100 overflow-hidden grid grid-cols-12">

                            <!-- LEFT: Preview pane -->
                            <div class="col-span-5 bg-gradient-to-br from-[#fafaf7] to-[#f0eee5] p-7 relative overflow-hidden">
                                <div class="zd-preview-default flex flex-col h-full" data-default>
                                    <div class="flex items-center gap-2 mb-5">
                                        <span class="w-9 h-9 rounded-lg bg-gradient-to-br from-accent-gold to-accent-goldDark grid place-items-center text-navy-950 font-extrabold">Z</span>
                                        <span class="font-extrabold text-navy-950 text-lg">ZD<span class="text-accent-gold">.</span>One Solutions</span>
                                    </div>
                                    <div class="font-extrabold text-3xl text-navy-950 leading-tight tracking-tight">
                                        One Platform.<br/><span class="italic font-serif font-normal text-accent-goldDark">Multi Connect.</span>
                                    </div>
                                    <p class="mt-4 text-sm text-navy-900/65 leading-relaxed">Modular software ecosystem â€” orchestrate devices, content, analytics, and integrations across your business.</p>
                                    <div class="mt-auto pt-6">
                                        <div class="text-[10px] font-bold tracking-widest text-accent-goldDark uppercase mb-1">Hover for details</div>
                                        <div class="flex gap-1.5">
                                            <span class="w-6 h-1 rounded-full bg-accent-gold"></span>
                                            <span class="w-2 h-1 rounded-full bg-navy-900/15"></span>
                                            <span class="w-2 h-1 rounded-full bg-navy-900/15"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="zd-preview-hover flex-col h-full hidden" data-hover>
                                    <div class="zd-preview-image w-full h-40 rounded-xl bg-navy-950 overflow-hidden mb-4 flex items-center justify-center">
                                        <img src="" alt="" class="w-full h-full object-cover" data-img-target/>
                                    </div>
                                    <div class="text-[10px] font-bold tracking-widest text-accent-goldDark uppercase mb-1.5" data-tag-target></div>
                                    <h3 class="font-extrabold text-xl text-navy-950 leading-tight" data-title-target></h3>
                                    <p class="mt-2 text-sm text-navy-900/65 leading-relaxed" data-desc-target></p>
                                </div>
                            </div>

                            <!-- RIGHT: Items list -->
                            <div class="col-span-7 p-7">
                                <div class="text-[10px] font-bold tracking-widest text-gray-400 uppercase mb-4">Platform Modules</div>
                                <ul class="grid grid-cols-1 gap-1.5">
                                    <li>
                                        <a href="{{ route('zd-one-platform') }}"
                                           class="zd-mega-item flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-accent-gold/10 transition group/item"
                                           data-img="/images/image-navbar/solutions/zd-one-platform.svg"
                                           data-tag="Core Platform"
                                           data-title="ZD One Platform"
                                           data-desc="The unified dashboard â€” central command for all your devices, applications, and analytics in one place.">
                                            <span class="w-9 h-9 rounded-lg bg-accent-gold/15 grid place-items-center shrink-0">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d9a82f" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                                            </span>
                                            <div class="flex-1">
                                                <div class="text-sm font-bold group-hover/item:text-accent-goldDark">ZD One Platform</div>
                                                <div class="text-xs text-gray-500">Unified device management dashboard</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('zd-remote') }}"
                                           class="zd-mega-item flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-accent-gold/10 transition group/item"
                                           data-img="/images/image-navbar/solutions/zd-remote.svg"
                                           data-tag="Remote Control"
                                           data-title="ZD Remote"
                                           data-desc="Remote access, troubleshooting, and control â€” fix device issues from anywhere without on-site visits.">
                                            <span class="w-9 h-9 rounded-lg bg-accent-gold/15 grid place-items-center shrink-0">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d9a82f" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                                            </span>
                                            <div class="flex-1">
                                                <div class="text-sm font-bold group-hover/item:text-accent-goldDark">ZD Remote</div>
                                                <div class="text-xs text-gray-500">Remote access & troubleshooting</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('zd-content-management') }}"
                                           class="zd-mega-item flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-accent-gold/10 transition group/item"
                                           data-img="/images/image-navbar/solutions/zd-content-management.svg"
                                           data-tag="Content Mgmt"
                                           data-title="ZD Content Management"
                                           data-desc="Schedule, distribute, and monitor visual content across signage networks â€” multi-region deployment.">
                                            <span class="w-9 h-9 rounded-lg bg-accent-gold/15 grid place-items-center shrink-0">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d9a82f" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8m-4-4v4"/></svg>
                                            </span>
                                            <div class="flex-1">
                                                <div class="text-sm font-bold group-hover/item:text-accent-goldDark">ZD Content Management</div>
                                                <div class="text-xs text-gray-500">Distributed signage CMS</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('zd-analytics') }}"
                                           class="zd-mega-item flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-accent-gold/10 transition group/item"
                                           data-img="/images/image-navbar/solutions/zd-analytics.svg"
                                           data-tag="Analytics"
                                           data-title="ZD Analytics"
                                           data-desc="Performance dashboards, device telemetry, and operational insights â€” turn data into decisions.">
                                            <span class="w-9 h-9 rounded-lg bg-accent-gold/15 grid place-items-center shrink-0">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d9a82f" stroke-width="2"><polyline points="3 17 9 11 13 15 21 6"/><polyline points="15 6 21 6 21 12"/></svg>
                                            </span>
                                            <div class="flex-1">
                                                <div class="text-sm font-bold group-hover/item:text-accent-goldDark">ZD Analytics</div>
                                                <div class="text-xs text-gray-500">Performance & operational insights</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <div class="mt-5 pt-5 border-t border-gray-100">
                                    <a href="/contact-us" class="inline-flex items-center gap-2 rounded-full bg-accent-gold text-navy-950 px-5 py-2 text-xs font-bold hover:bg-navy-950 hover:text-white transition">
                                        Book Demo
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ============= INDUSTRIES mega menu ============= -->
                <li class="relative group">
                    <a class="ul-hover hover:text-white flex items-center gap-1">{{ __('homes.nav.industries') }}</a>

                    <div
                        class="hidden xl:block absolute left-1/2 -translate-x-1/2 top-full mt-6 w-[860px] opacity-0 invisible xl:group-hover:opacity-100 xl:group-hover:visible transition-all duration-300 zd-megamenu"
                        data-megamenu="industries">

                        <div class="bg-white text-navy-950 rounded-2xl shadow-2xl border border-gray-100 overflow-hidden grid grid-cols-12">

                            <!-- LEFT: Preview pane -->
                            <div class="col-span-5 bg-gradient-to-br from-[#fafaf7] to-[#f0eee5] p-7 relative overflow-hidden">
                                <div class="zd-preview-default flex flex-col h-full" data-default>
                                    <div class="flex items-center gap-2 mb-5">
                                        <span class="w-9 h-9 rounded-lg bg-gradient-to-br from-accent-gold to-accent-goldDark grid place-items-center text-navy-950 font-extrabold">Z</span>
                                        <span class="font-extrabold text-navy-950 text-lg">ZD<span class="text-accent-gold">.</span>One Industries</span>
                                    </div>
                                    <div class="font-extrabold text-3xl text-navy-950 leading-tight tracking-tight">
                                        Built For<br/><span class="italic font-serif font-normal text-accent-goldDark">Every Sector.</span>
                                    </div>
                                    <p class="mt-4 text-sm text-navy-900/65 leading-relaxed">From retail floors to manufacturing lines, banks to oil rigs â€” proven deployments across critical industries.</p>
                                    <div class="mt-auto pt-6">
                                        <div class="text-[10px] font-bold tracking-widest text-accent-goldDark uppercase mb-1">Hover for details</div>
                                        <div class="flex gap-1.5">
                                            <span class="w-6 h-1 rounded-full bg-accent-gold"></span>
                                            <span class="w-2 h-1 rounded-full bg-navy-900/15"></span>
                                            <span class="w-2 h-1 rounded-full bg-navy-900/15"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="zd-preview-hover flex-col h-full hidden" data-hover>
                                    <div class="zd-preview-image w-full h-40 rounded-xl bg-navy-950 overflow-hidden mb-4 flex items-center justify-center">
                                        <img src="" alt="" class="w-full h-full object-cover" data-img-target/>
                                    </div>
                                    <div class="text-[10px] font-bold tracking-widest text-accent-goldDark uppercase mb-1.5" data-tag-target></div>
                                    <h3 class="font-extrabold text-xl text-navy-950 leading-tight" data-title-target></h3>
                                    <p class="mt-2 text-sm text-navy-900/65 leading-relaxed" data-desc-target></p>
                                </div>
                            </div>

                            <!-- RIGHT: Items list -->
                            <div class="col-span-7 p-7">
                                <div class="text-[10px] font-bold tracking-widest text-gray-400 uppercase mb-4">{{ __('homes.nav.industry_verticals') }}</div>
                                <ul class="grid grid-cols-1 gap-1.5">
                                    <li>
                                        <a href="{{ route('industries-retail') }}"
                                           class="zd-mega-item flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-accent-gold/10 transition group/item"
                                           data-img="/images/image-navbar/industries/retail.svg"
                                           data-tag="Retail"
                                           data-title="Retail & F&B"
                                           data-desc="POS terminals, digital signage, queue management, customer analytics â€” built for high-volume retail operations.">
                                            <span class="w-9 h-9 rounded-lg bg-accent-gold/15 grid place-items-center shrink-0">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d9a82f" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4H6zM3 6h18M16 10a4 4 0 11-8 0"/></svg>
                                            </span>
                                            <div class="flex-1">
                                                <div class="text-sm font-bold group-hover/item:text-accent-goldDark">Retail</div>
                                                <div class="text-xs text-gray-500">POS, signage, in-store ops</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('industries-manufacturing') }}"
                                           class="zd-mega-item flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-accent-gold/10 transition group/item"
                                           data-img="/images/image-navbar/industries/manufacturing.svg"
                                           data-tag="Manufacturing"
                                           data-title="Manufacturing & Industrial"
                                           data-desc="Production line monitoring, asset tracking, biometric area access, safety surveillance â€” uptime is survival.">
                                            <span class="w-9 h-9 rounded-lg bg-accent-gold/15 grid place-items-center shrink-0">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d9a82f" stroke-width="2"><path d="M2 20h20M4 20V8l4-3v15M12 20V4l5 3v13M17 20V12l4 2v6"/></svg>
                                            </span>
                                            <div class="flex-1">
                                                <div class="text-sm font-bold group-hover/item:text-accent-goldDark">Manufacturing</div>
                                                <div class="text-xs text-gray-500">Production lines, asset mgmt, safety</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('industries-banking-finance') }}"
                                           class="zd-mega-item flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-accent-gold/10 transition group/item"
                                           data-img="/images/image-navbar/industries/banking-finance.svg"
                                           data-tag="Banking"
                                           data-title="Banking & Finance"
                                           data-desc="High-security biometric access, branch device management, ATM monitoring, compliance-grade audit logs.">
                                            <span class="w-9 h-9 rounded-lg bg-accent-gold/15 grid place-items-center shrink-0">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d9a82f" stroke-width="2"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3"/></svg>
                                            </span>
                                            <div class="flex-1">
                                                <div class="text-sm font-bold group-hover/item:text-accent-goldDark">Banking & Finance</div>
                                                <div class="text-xs text-gray-500">Security, branch ops, compliance</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('industries-mining-oil-gas') }}"
                                           class="zd-mega-item flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-accent-gold/10 transition group/item"
                                           data-img="/images/image-navbar/industries/mining-oil-gas.svg"
                                           data-tag="Mining Â· Oil Â· Gas"
                                           data-title="Mining, Oil & Gas"
                                           data-desc="Remote site device control, harsh-environment monitoring, IoT sensor integration, worker safety tracking.">
                                            <span class="w-9 h-9 rounded-lg bg-accent-gold/15 grid place-items-center shrink-0">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d9a82f" stroke-width="2"><path d="M12 2v6M12 22v-4M4.93 4.93l4.24 4.24M14.83 14.83l4.24 4.24M2 12h6M16 12h6M4.93 19.07l4.24-4.24M14.83 9.17l4.24-4.24"/></svg>
                                            </span>
                                            <div class="flex-1">
                                                <div class="text-sm font-bold group-hover/item:text-accent-goldDark">Mining, Oil & Gas</div>
                                                <div class="text-xs text-gray-500">Remote sites, IoT, worker safety</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('industries-healthcare') }}"
                                           class="zd-mega-item flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-accent-gold/10 transition group/item"
                                           data-img="/images/image-navbar/industries/healthcare.svg"
                                           data-tag="Healthcare"
                                           data-title="Healthcare"
                                           data-desc="Hospital tablet fleets, clinic biometric access, patient signage, medical equipment integration.">
                                            <span class="w-9 h-9 rounded-lg bg-accent-gold/15 grid place-items-center shrink-0">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d9a82f" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0016.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 002 8.5c0 2.29 1.51 4.04 3 5.5l7 7Z"/></svg>
                                            </span>
                                            <div class="flex-1">
                                                <div class="text-sm font-bold group-hover/item:text-accent-goldDark">Healthcare</div>
                                                <div class="text-xs text-gray-500">Hospital fleet, biometrics, signage</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <div class="mt-5 pt-5 border-t border-gray-100">
                                    <a href="/contact-us" class="inline-flex items-center gap-2 rounded-full bg-accent-gold text-navy-950 px-5 py-2 text-xs font-bold hover:bg-navy-950 hover:text-white transition">
                                        Book Demo
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                 <li><a href="/pricing" class="ul-hover hover:text-white">{{ __('Pricing') }}</a></li>

                <li><a href="/contact-us" class="ul-hover hover:text-white">{{ __('homes.nav.contact_us') }}</a></li>
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
    <select id="custom-language-selector"
        class="hidden">

        @foreach ($languages as $code => $language)
            <option value="{{ $code }}" @selected($currentLocale === $code)>{{ $language['name'] }}</option>
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
            <img id="selected-flag" src="{{ $currentLanguage['flag'] }}"
                alt="Selected language flag"
                class="w-5 h-5 rounded-full object-cover shrink-0">
            <span id="selected-text"
                class="hidden lg:inline text-sm font-semibold text-white whitespace-nowrap">
                {{ $currentLanguage['name'] }}
            </span>
        </div>

        <svg width="12" height="12" viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2.5"
            class="text-white/70 shrink-0">
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

                <img src="{{ $language['flag'] }}"
                    alt="{{ $language['name'] }} flag"
                    class="w-5 h-5 rounded-full object-cover">

                <span class="text-white text-sm">{{ $language['name'] }}</span>
            </a>
        @endforeach
    </div>
</div>

                <!-- Tempat untuk Google Translate Widget -->
                <div id="google_translate_element" style="display: none !important;"></div>

                <!-- Demo Buku CTA — hidden on mobile (in hamburger), visible from sm: -->
                <a href="/contact-us"
                    class="hidden sm:inline-flex items-center gap-1.5 lg:gap-2 rounded-full bg-accent-gold text-navy-950 px-3 lg:px-5 py-2 lg:py-2.5 text-xs lg:text-sm font-bold hover:bg-white transition whitespace-nowrap shrink-0">
                    <span class="hidden md:inline">Book Demo</span>
                    <span class="md:hidden">Demo</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5" class="shrink-0">
                        <path d="M5 12h14M13 5l7 7-7 7" />
                    </svg>
                </a>

                <!-- Mobile Hamburger Button (visible <xl) -->
                <button type="button" id="mobile-menu-toggle"
                    class="xl:hidden inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/15 backdrop-blur-sm border border-white/20 hover:border-white/30 transition shrink-0"
                    aria-label="Open menu"
                    aria-expanded="false">
                    <svg id="hamburger-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                    <svg id="close-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="hidden">
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

                    <!-- Home (direct link) -->
                    <a href="/" class="mobile-nav-link flex items-center justify-between w-full px-4 py-4 rounded-xl text-white hover:bg-white/5 transition border border-transparent hover:border-white/10">
                        <span class="font-semibold">{{ __('homes.nav.home') }}</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                    </a>

                    <!-- Device Support (accordion) -->
                    <div class="mobile-accordion" data-accordion>
                        <button type="button" class="mobile-accordion-trigger flex items-center justify-between w-full px-4 py-4 rounded-xl text-white hover:bg-white/5 transition border border-transparent hover:border-white/10">
                            <span class="font-semibold">{{ __('homes.nav.device_support') }}</span>
                            <svg class="mobile-accordion-chevron transition-transform duration-300" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <div class="mobile-accordion-content overflow-hidden max-h-0 transition-all duration-300">
                            <ul class="ml-4 mt-1 mb-2 border-l border-white/10 pl-4 space-y-0.5">
                                <li><a href="{{ route('device-monitoring') }}" class="mobile-nav-link block py-2.5 text-sm text-white/70 hover:text-accent-gold transition">Device Monitoring</a></li>
                                <li><a href="{{ route('device-biometric') }}" class="mobile-nav-link block py-2.5 text-sm text-white/70 hover:text-accent-gold transition">Biometric Readers</a></li>
                                <li><a href="{{ route('device-signage') }}" class="mobile-nav-link block py-2.5 text-sm text-white/70 hover:text-accent-gold transition">Digital Signage</a></li>
                                <li><span class="block py-2.5 text-sm text-white/40 cursor-default select-none">Laptops</span></li>
                                <li><span class="block py-2.5 text-sm text-white/40 cursor-default select-none">Tablets</span></li>
                                <li><span class="block py-2.5 text-sm text-white/40 cursor-default select-none">POS Systems</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Solutions (accordion) -->
                    <div class="mobile-accordion" data-accordion>
                        <button type="button" class="mobile-accordion-trigger flex items-center justify-between w-full px-4 py-4 rounded-xl text-white hover:bg-white/5 transition border border-transparent hover:border-white/10">
                            <span class="font-semibold">{{ __('homes.nav.solutions') }}</span>
                            <svg class="mobile-accordion-chevron transition-transform duration-300" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <div class="mobile-accordion-content overflow-hidden max-h-0 transition-all duration-300">
                            <ul class="ml-4 mt-1 mb-2 border-l border-white/10 pl-4 space-y-0.5">
                                <li><a href="{{ route('zd-one-platform') }}" class="mobile-nav-link block py-2.5 text-sm text-white/70 hover:text-accent-gold transition">ZD One Platform</a></li>
                                <li><a href="{{ route('zd-remote') }}" class="mobile-nav-link block py-2.5 text-sm text-white/70 hover:text-accent-gold transition">ZD Remote</a></li>
                                <li><a href="{{ route('zd-content-management') }}" class="mobile-nav-link block py-2.5 text-sm text-white/70 hover:text-accent-gold transition">ZD Content Management</a></li>
                                <li><a href="{{ route('zd-analytics') }}" class="mobile-nav-link block py-2.5 text-sm text-white/70 hover:text-accent-gold transition">ZD Analytics</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Industries (accordion) -->
                    <div class="mobile-accordion" data-accordion>
                        <button type="button" class="mobile-accordion-trigger flex items-center justify-between w-full px-4 py-4 rounded-xl text-white hover:bg-white/5 transition border border-transparent hover:border-white/10">
                            <span class="font-semibold">{{ __('homes.nav.industries') }}</span>
                            <svg class="mobile-accordion-chevron transition-transform duration-300" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <div class="mobile-accordion-content overflow-hidden max-h-0 transition-all duration-300">
                            <ul class="ml-4 mt-1 mb-2 border-l border-white/10 pl-4 space-y-0.5">
                                <li><a href="{{ route('industries-retail') }}" class="mobile-nav-link block py-2.5 text-sm text-white/70 hover:text-accent-gold transition">Retail</a></li>
                                <li><a href="{{ route('industries-manufacturing') }}" class="mobile-nav-link block py-2.5 text-sm text-white/70 hover:text-accent-gold transition">Manufacturing</a></li>
                                <li><a href="{{ route('industries-banking-finance') }}" class="mobile-nav-link block py-2.5 text-sm text-white/70 hover:text-accent-gold transition">Banking &amp; Finance</a></li>
                                <li><a href="{{ route('industries-mining-oil-gas') }}" class="mobile-nav-link block py-2.5 text-sm text-white/70 hover:text-accent-gold transition">Mining, Oil &amp; Gas</a></li>
                                <li><a href="{{ route('industries-healthcare') }}" class="mobile-nav-link block py-2.5 text-sm text-white/70 hover:text-accent-gold transition">Healthcare</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Pricing (direct link) -->
                    <a href="/pricing" class="mobile-nav-link flex items-center justify-between w-full px-4 py-4 rounded-xl text-white hover:bg-white/5 transition border border-transparent hover:border-white/10">
                        <span class="font-semibold">{{ __('Pricing') }}</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                    </a>

                    <!-- Contact Us (direct link) -->
                    <a href="/contact-us" class="mobile-nav-link flex items-center justify-between w-full px-4 py-4 rounded-xl text-white hover:bg-white/5 transition border border-transparent hover:border-white/10">
                        <span class="font-semibold">{{ __('homes.nav.contact_us') }}</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                    </a>
                </nav>

                <!-- Mobile Demo Buku CTA (only shows on smallest mobile where main CTA is hidden) -->
                <div class="mt-6 sm:hidden">
                    <a href="/contact-us"
                        class="mobile-nav-link flex items-center justify-center gap-2 w-full rounded-full bg-accent-gold text-navy-950 px-5 py-3.5 text-sm font-bold hover:bg-white transition">
                        Book Demo
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M5 12h14M13 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
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
            linear-gradient(rgba(245,194,73,0.06) 1px, transparent 1px),
            linear-gradient(90deg, rgba(245,194,73,0.06) 1px, transparent 1px);
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
        color: rgba(245,194,73,.6);
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
(function(){
    function initZdMegaMenu() {
        document.querySelectorAll('.zd-megamenu').forEach(function(menu){
            var defaultPane = menu.querySelector('[data-default]');
            var hoverPane = menu.querySelector('[data-hover]');
            if (!defaultPane || !hoverPane) return;

            var imgEl   = hoverPane.querySelector('[data-img-target]');
            var tagEl   = hoverPane.querySelector('[data-tag-target]');
            var titleEl = hoverPane.querySelector('[data-title-target]');
            var descEl  = hoverPane.querySelector('[data-desc-target]');

            var items = menu.querySelectorAll('.zd-mega-item');

            items.forEach(function(item){
                item.addEventListener('mouseenter', function(){
                    var img   = item.getAttribute('data-img') || '';
                    var tag   = item.getAttribute('data-tag') || '';
                    var title = item.getAttribute('data-title') || '';
                    var desc  = item.getAttribute('data-desc') || '';

                    if (imgEl) {
                        if (img) {
                            imgEl.classList.add('is-loading');
                            imgEl.onload = function(){ imgEl.classList.remove('is-loading'); };
                            imgEl.onerror = function(){ imgEl.removeAttribute('src'); imgEl.classList.remove('is-loading'); };
                            imgEl.src = img;
                        } else {
                            imgEl.removeAttribute('src');
                        }
                    }
                    if (tagEl)   tagEl.textContent   = tag;
                    if (titleEl) titleEl.textContent = title;
                    if (descEl)  descEl.textContent  = desc;

                    defaultPane.classList.add('hidden');
                    hoverPane.classList.remove('hidden');
                    hoverPane.classList.add('flex');
                });
            });

            // Reset to default when megamenu closes (parent group loses hover)
            var groupParent = menu.closest('.group');
            if (groupParent) {
                groupParent.addEventListener('mouseleave', function(){
                    setTimeout(function(){
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
        en: { flag: '/images/united-kingdom.png', label: 'English' },
        id: { flag: '/images/indonesia.png', label: 'Indonesia' },
        es: { flag: '/images/spain.svg', label: 'Español' },
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
                        const otherContent = other.querySelector('.mobile-accordion-content');
                        const otherChevron = other.querySelector('.mobile-accordion-chevron');
                        const otherTrigger = other.querySelector('.mobile-accordion-trigger');
                        if (otherContent) otherContent.style.maxHeight = '0px';
                        if (otherChevron) otherChevron.style.transform = 'rotate(0deg)';
                        if (otherTrigger) otherTrigger.classList.remove('bg-white/5', 'border-white/10');
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
