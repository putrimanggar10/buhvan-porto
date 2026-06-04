<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bhuvan Solution | Website, Web Application & IT Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&family=Instrument+Serif&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            950: '#050e24',
                            900: '#0a1630',
                            800: '#0f2451',
                            700: '#14306b',
                            600: '#1d3f82',
                        },
                        brand: {
                            green: '#085410',
                            greenLight: '#0c7a19',
                        },
                        accent: {
                            gold: '#f5c249',
                            goldDark: '#d9a82f',
                        }
                    },
                    fontFamily: {
                        display: ['Plus Jakarta Sans', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                        serif: ['Instrument Serif', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }



        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #fafaf7;
            color: #0a1630;
            -webkit-font-smoothing: antialiased;
        }

        /* Hero circuit background */
        .circuit-bg {
            background-color: #050e24;
            background-image:
                radial-gradient(ellipse at top right, rgba(245, 194, 73, 0.08), transparent 50%),
                radial-gradient(ellipse at bottom left, rgba(29, 63, 130, 0.35), transparent 60%),
                linear-gradient(rgba(245, 194, 73, 0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(245, 194, 73, 0.04) 1px, transparent 1px);
            background-size: auto, auto, 60px 60px, 60px 60px;
        }

        .grid-overlay {
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 48px 48px;
        }

        .noise {
            position: absolute;
            inset: 0;
            pointer-events: none;
            opacity: .4;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2'/><feColorMatrix values='0 0 0 0 0.96 0 0 0 0 0.96 0 0 0 0 0.96 0 0 0 0.08 0'/></filter><rect width='100%25' height='100%25' filter='url(%23n)'/></svg>");
            mix-blend-mode: overlay;
        }

        /* subtle golden glow */
        .gold-glow {
            box-shadow: 0 0 0 1px rgba(245, 194, 73, .2), 0 20px 60px -15px rgba(245, 194, 73, .25);
        }

        /* marker pulse */
        @keyframes pulse-ring {
            0% {
                transform: scale(.8);
                opacity: .8;
            }

            80%,
            100% {
                transform: scale(2.2);
                opacity: 0;
            }
        }

        .pulse-ring {
            animation: pulse-ring 2s ease-out infinite;
            transform-origin: center;
        }

        @keyframes marker-pop {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-3px);
            }
        }

        .marker-bounce {
            animation: marker-pop 3s ease-in-out infinite;
        }

        /* ticker */
        @keyframes scroll-x {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        @keyframes scroll-x-reverse {
            from {
                transform: translateX(-50%);
            }

            to {
                transform: translateX(0);
            }
        }

        .ticker {
            animation: scroll-x 30s linear infinite;
        }




        .ticker-reverse {
            animation: scroll-x-reverse 80s linear infinite;
        }

        /* Coming Soon — sparkle icon gentle float & glow */
        @keyframes zd-sparkle-float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
                filter: drop-shadow(0 0 6px rgba(245, 194, 73, 0.4));
            }

            50% {
                transform: translateY(-3px) rotate(8deg);
                filter: drop-shadow(0 0 14px rgba(245, 194, 73, 0.7));
            }
        }

        .zd-sparkle {
            animation: zd-sparkle-float 2.6s ease-in-out infinite;
        }

        /* Coming Soon — staggered dot pulse */
        @keyframes zd-dot-pulse {

            0%,
            80%,
            100% {
                opacity: 0.3;
                transform: scale(0.8);
            }

            40% {
                opacity: 1;
                transform: scale(1.15);
            }
        }

        .zd-dot-1 {
            animation: zd-dot-pulse 1.4s ease-in-out infinite;
            animation-delay: 0s;
        }

        .zd-dot-2 {
            animation: zd-dot-pulse 1.4s ease-in-out infinite;
            animation-delay: 0.2s;
        }

        .zd-dot-3 {
            animation: zd-dot-pulse 1.4s ease-in-out infinite;
            animation-delay: 0.4s;
        }

        /* fade-rise on load */
        @keyframes rise {
            from {
                opacity: 0;
                transform: translateY(24px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .rise {
            animation: rise .9s cubic-bezier(.2, .8, .2, 1) both;
        }

        /* reveal on scroll */
        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity .8s cubic-bezier(.2, .8, .2, 1), transform .8s cubic-bezier(.2, .8, .2, 1);
        }

        .reveal.in {
            opacity: 1;
            transform: none;
        }

        .divider-dotted {
            background-image: radial-gradient(circle, rgba(10, 22, 48, .18) 1px, transparent 1.2px);
            background-size: 12px 2px;
            background-repeat: repeat-x;
            height: 2px;
        }

        /* fancy underline on hover */
        .ul-hover {
            position: relative;
        }

        .ul-hover::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -4px;
            width: 0;
            height: 1.5px;
            background: #f5c249;
            transition: width .3s ease;
        }

        .ul-hover:hover::after {
            width: 100%;
        }

        /* device frames */
        .monitor-frame {
            background: linear-gradient(180deg, #1a1a1a 0%, #0d0d0d 100%);
            border-radius: 14px 14px 4px 4px;
            padding: 14px;
            box-shadow:
                0 40px 80px -20px rgba(0, 0, 0, .5),
                0 0 0 1px rgba(255, 255, 255, .06),
                inset 0 1px 0 rgba(255, 255, 255, .1);
        }

        .tablet-frame {
            background: #0a0a0a;
            border-radius: 18px;
            padding: 10px;
            box-shadow: 0 30px 60px -15px rgba(0, 0, 0, .55), 0 0 0 1px rgba(255, 255, 255, .08);
        }

        .mobile-frame {
            background: #0a0a0a;
            border-radius: 22px;
            padding: 6px;
            box-shadow: 0 30px 50px -10px rgba(0, 0, 0, .5), 0 0 0 1px rgba(255, 255, 255, .08);
        }

        .check-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 18px;
            height: 18px;
            border-radius: 999px;
            background: #085410;
            color: white;
        }

        /* custom form focus */
        .field:focus {
            outline: none;
            border-color: #f5c249;
            box-shadow: 0 0 0 4px rgba(245, 194, 73, .15);
        }

        .tag {
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        /* accordion arrow */
        details[open] .arrow {
            transform: rotate(45deg);
        }

        .arrow {
            transition: transform .3s ease;
        }

        /* subtle scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #0a1630;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #eee;
        }

        .group:hover .mega-menu {
            transition-delay: 0.1s;
        }
    </style>
</head>

<body class="overflow-x-hidden">

    @include('layouts.navbar')

    <!-- ============================ HERO ============================ -->
    {{-- <section id="home" class="circuit-bg relative pt-36 pb-24 lg:pt-44 lg:pb-32 text-white overflow-hidden">
        <div class="grid-overlay absolute inset-0 opacity-60"></div>
        <div class="noise"></div>

        <!-- floating particle dots -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-32 left-[12%] w-1.5 h-1.5 rounded-full bg-accent-gold/70"></div>
            <div class="absolute top-48 right-[8%] w-1 h-1 rounded-full bg-white/50"></div>
            <div class="absolute bottom-40 left-[20%] w-2 h-2 rounded-full bg-accent-gold/40"></div>
            <div class="absolute top-[30%] right-[22%] w-1 h-1 rounded-full bg-white/30"></div>
        </div>

        <div class="relative mx-auto max-w-[1360px] px-6 lg:px-10 grid lg:grid-cols-12 gap-12 items-center">
            <!-- Left copy -->
            <div class="lg:col-span-5 rise">
                <div class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-3 py-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="tag text-white/80">Enterprise Device Management</span>
                </div>
                <h1 class="mt-7 font-extrabold tracking-[-0.03em] leading-[0.92] text-[clamp(3rem,7vw,6.5rem)]">
                    One<br />Platform<br />
                    <span class="text-accent-gold italic font-serif font-normal text-[clamp(2.6rem,6.2vw,5.8rem)]">Multi
                        Connect.</span>
                </h1>
                <p class="mt-7 max-w-md text-white/70 text-lg leading-relaxed">
                    Manage thousands of devices — from Smart Camera, biometrics, signage to POS — in one smart dashboard
                    that stays synced across web, tablet, and mobile.
                </p>
                <div class="mt-9 flex flex-wrap items-center gap-3">
                    <a href="/contact-us"
                        class="inline-flex items-center gap-2 rounded-full bg-accent-gold text-navy-950 px-6 py-3.5 font-bold hover:bg-white transition">
                        Book Demo
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M13 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="#solutions"
                        class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/5 hover:bg-white/10 px-6 py-3.5 font-semibold">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                        Watch Overview
                    </a>
                </div>
                <!-- small stats -->
                <div class="mt-12 grid grid-cols-3 gap-6 max-w-md">
                    <div>
                        <div class="font-extrabold text-3xl">5,000<span class="text-accent-gold">+</span></div>
                        <div class="text-xs text-white/60 mt-1">Device SKUs supported</div>
                    </div>
                    <div>
                        <div class="font-extrabold text-3xl">99.9<span class="text-accent-gold">%</span></div>
                        <div class="text-xs text-white/60 mt-1">Uptime SLA</div>
                    </div>
                    <div>
                        <div class="font-extrabold text-3xl">24<span class="text-accent-gold">/7</span></div>
                        <div class="text-xs text-white/60 mt-1">Remote monitoring</div>
                    </div>
                </div>
            </div>

            <!-- Right Visual: Multi-device composition -->
            <div class="lg:col-span-7 relative rise" style="animation-delay:.15s">
                <!-- Monitor -->
                <div class="monitor-frame relative mx-auto" style="max-width:720px;">
                    <!-- browser chrome -->
                    <div class="flex items-center justify-between pb-3 border-b border-white/10">
                        <div class="flex gap-1.5">
                            <span class="w-2.5 h-2.5 rounded-full bg-red-400/70"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-yellow-400/70"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-green-400/70"></span>
                        </div>
                        <div
                            class="flex items-center gap-1.5 text-[10px] text-white/50 font-mono bg-white/5 rounded px-2 py-1">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" />
                                <path d="M7 11V7a5 5 0 0110 0v4" />
                            </svg>
                            app.zd-one.com/dashboard
                        </div>
                        <div class="w-10"></div>
                    </div>
                    <!-- dashboard: real interactive world map (Leaflet) -->
                    <div class="bg-[#0d1424] rounded-md mt-3 overflow-hidden flex flex-col" style="min-height:520px;">

                        <!-- Top bar -->
                        <div
                            class="flex items-center justify-between px-4 py-2.5 border-b border-white/5 bg-[#0d1424] shrink-0">
                            <div class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-accent-gold"></span>
                                <span class="text-[9px] font-bold tracking-widest text-accent-gold uppercase">Global
                                    Coverage</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div
                                    class="flex items-center gap-1.5 bg-white/5 border border-white/10 rounded-md px-2 py-1">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                    <span class="text-[8px] text-white font-mono">6 Countries · Live</span>
                                </div>
                            </div>
                        </div>

                        <!-- World Map (Leaflet — full width, fill remaining height) -->
                        <div class="relative flex-1" style="min-height:480px;">
                            <div id="zd-world-map"
                                style="position:absolute; inset:0; width:100%; height:100%; background:#0d1424;"></div>

                            <!-- "GLOBAL" wordmark overlay -->
                            <div class="absolute bottom-3 left-3 z-[400] pointer-events-none select-none">
                                <div
                                    class="font-black tracking-[-0.02em] text-white/15 text-[clamp(2rem,5vw,3.5rem)] leading-none">
                                    GLOBAL</div>
                            </div>

                            <!-- Country counter top right -->
                            <div
                                class="absolute top-3 right-3 z-[400] bg-[#0a1628]/95 backdrop-blur border border-accent-gold/30 rounded-lg px-3 py-2 shadow-lg pointer-events-none">
                                <div class="text-[8px] font-bold tracking-widest text-accent-gold/80 mb-0.5 uppercase">
                                    Total Coverage</div>
                                <div class="text-lg font-extrabold text-white leading-none">6 <span
                                        class="text-[10px] font-semibold text-white/60">Countries</span></div>
                            </div>

                            <!-- Legend bottom right -->
                            <div
                                class="absolute bottom-3 right-3 z-[400] bg-[#0a1628]/95 backdrop-blur border border-white/15 rounded-lg px-2.5 py-2 shadow-lg pointer-events-none">
                                <div class="text-[8px] font-bold tracking-widest text-white/50 mb-1.5 uppercase">Legend
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2.5 h-2.5 rounded-full bg-accent-gold border border-white"></span>
                                    <span class="text-[9px] text-white/80 font-semibold">Active Country</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Leaflet CSS -->
                    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
                        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
                    <!-- Leaflet JS -->
                    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
                        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
                    <!-- Leaflet MarkerCluster CSS -->
                    <link rel="stylesheet"
                        href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.css" />
                    <link rel="stylesheet"
                        href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.Default.css" />
                    <!-- Leaflet MarkerCluster JS -->
                    <script src="https://unpkg.com/leaflet.markercluster@1.5.3/dist/leaflet.markercluster.js"></script>

                    <style>
                        /* Custom styling for Leaflet inside dark dashboard */
                        #zd-world-map .leaflet-control-attribution {
                            background: rgba(10, 22, 40, 0.85) !important;
                            color: rgba(255, 255, 255, 0.5) !important;
                            font-size: 8px !important;
                            padding: 2px 6px !important;
                        }

                        #zd-world-map .leaflet-control-attribution a {
                            color: rgba(245, 194, 73, 0.8) !important;
                        }

                        #zd-world-map .leaflet-control-zoom a {
                            background: rgba(10, 22, 40, 0.95) !important;
                            color: #f5c249 !important;
                            border: 1px solid rgba(245, 194, 73, 0.3) !important;
                            font-weight: bold;
                        }

                        #zd-world-map .leaflet-control-zoom a:hover {
                            background: rgba(245, 194, 73, 0.15) !important;
                        }

                        /* Custom gold pin marker */
                        .zd-country-pin {
                            background: transparent;
                            border: none;
                        }

                        .zd-country-pin-inner {
                            position: relative;
                            width: 32px;
                            height: 40px;
                        }

                        .zd-country-pin-pulse {
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            width: 40px;
                            height: 40px;
                            margin-left: -20px;
                            margin-top: -20px;
                            border-radius: 50%;
                            background: rgba(245, 194, 73, 0.3);
                            animation: zd-pulse 2.2s cubic-bezier(0, 0, 0.2, 1) infinite;
                        }

                        @keyframes zd-pulse {
                            0% {
                                transform: scale(0.5);
                                opacity: 1;
                            }

                            100% {
                                transform: scale(2.2);
                                opacity: 0;
                            }
                        }

                        .zd-country-pin-marker {
                            position: absolute;
                            left: 50%;
                            top: 0;
                            transform: translateX(-50%);
                            width: 28px;
                            height: 36px;
                            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.3));
                        }

                        .zd-country-pin-label {
                            position: absolute;
                            top: 44px;
                            left: 50%;
                            transform: translateX(-50%);
                            background: rgba(10, 22, 40, 0.95);
                            color: white;
                            font-size: 10px;
                            font-weight: 700;
                            padding: 3px 8px;
                            border-radius: 6px;
                            white-space: nowrap;
                            border: 1px solid rgba(245, 194, 73, 0.4);
                            font-family: 'Plus Jakarta Sans', sans-serif;
                            pointer-events: none;
                        }

                        /* Custom cluster bubble (gold themed) */
                        .marker-cluster-zd {
                            background: rgba(245, 194, 73, 0.25);
                            border: 2px solid rgba(245, 194, 73, 0.5);
                            border-radius: 50%;
                            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
                        }

                        .marker-cluster-zd div {
                            background: linear-gradient(135deg, #f5c249 0%, #d9a82f 100%);
                            color: #050e24;
                            font-family: 'Plus Jakarta Sans', sans-serif;
                            font-weight: 800;
                            border-radius: 50%;
                            width: 32px;
                            height: 32px;
                            margin-left: 4px;
                            margin-top: 4px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            line-height: 1;
                            border: 2px solid white;
                        }

                        .marker-cluster-zd span {
                            line-height: 1 !important;
                            font-size: 13px;
                        }

                        /* Hide default cluster styles to override cleanly */
                        .marker-cluster-small,
                        .marker-cluster-medium,
                        .marker-cluster-large {
                            background: transparent;
                        }

                        .marker-cluster-small div,
                        .marker-cluster-medium div,
                        .marker-cluster-large div {
                            background: transparent;
                        }
                    </style>

                    <script>
                        (function() {
                            // Wait for Leaflet to load
                            function initZdMap() {
                                if (typeof L === 'undefined') {
                                    setTimeout(initZdMap, 100);
                                    return;
                                }
                                var mapEl = document.getElementById('zd-world-map');
                                if (!mapEl || mapEl._leafletInitialized) return;
                                mapEl._leafletInitialized = true;

                                // World view centered to fit all 6 countries
                                var map = L.map('zd-world-map', {
                                    center: [20, 30],
                                    zoom: 2,
                                    minZoom: 2,
                                    maxZoom: 8,
                                    zoomControl: true,
                                    scrollWheelZoom: false,
                                    worldCopyJump: false,
                                    preferCanvas: false,
                                    fadeAnimation: false,
                                    zoomAnimation: true,
                                    markerZoomAnimation: true,
                                    // Lock map within world boundaries — cannot drag past edges
                                    maxBounds: [
                                        [-85, -180],
                                        [85, 180]
                                    ],
                                    maxBoundsViscosity: 1.0
                                });

                                // CartoDB Positron — light, clean basemap (matches example reference)
                                L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OSM</a> | &copy; <a href="https://carto.com/attributions">CARTO</a>',
                                    subdomains: 'abcd',
                                    maxZoom: 19,
                                    keepBuffer: 8,
                                    updateWhenIdle: false,
                                    updateWhenZooming: false,
                                    noWrap: true,
                                    bounds: [
                                        [-85, -180],
                                        [85, 180]
                                    ]
                                }).addTo(map);

                                // 6 country pin coordinates
                                var countries = [{
                                        name: 'Mexico',
                                        coords: [23.6345, -102.5528]
                                    },
                                    {
                                        name: 'Rep. Dominika',
                                        coords: [18.7357, -70.1627]
                                    },
                                    {
                                        name: 'UAE',
                                        coords: [23.4241, 53.8478]
                                    },
                                    {
                                        name: 'Malaysia',
                                        coords: [4.2105, 101.9758]
                                    },
                                    {
                                        name: 'Singapore',
                                        coords: [1.3521, 103.8198]
                                    },
                                    {
                                        name: 'Indonesia',
                                        coords: [-2.5489, 118.0149]
                                    }
                                ];

                                // Custom pin HTML icon
                                function buildPinIcon(label) {
                                    return L.divIcon({
                                        className: 'zd-country-pin',
                                        html: '<div class="zd-country-pin-inner">' +
                                            '<div class="zd-country-pin-pulse"></div>' +
                                            '<svg class="zd-country-pin-marker" viewBox="0 0 28 36" fill="none">' +
                                            '<path d="M14 0C6.27 0 0 6.27 0 14c0 10.5 14 22 14 22s14-11.5 14-22C28 6.27 21.73 0 14 0Z" fill="#f5c249" stroke="white" stroke-width="2"/>' +
                                            '<circle cx="14" cy="14" r="5" fill="white"/>' +
                                            '</svg>' +
                                            '<div class="zd-country-pin-label">' + label + '</div>' +
                                            '</div>',
                                        iconSize: [32, 80],
                                        iconAnchor: [16, 36]
                                    });
                                }

                                // Create cluster group with custom gold-themed bubble
                                var clusterGroup = L.markerClusterGroup({
                                    showCoverageOnHover: false,
                                    spiderfyOnMaxZoom: true,
                                    zoomToBoundsOnClick: true,
                                    maxClusterRadius: 60,
                                    iconCreateFunction: function(cluster) {
                                        var count = cluster.getChildCount();
                                        return L.divIcon({
                                            html: '<div><span>' + count + '</span></div>',
                                            className: 'marker-cluster-zd',
                                            iconSize: L.point(40, 40)
                                        });
                                    }
                                });

                                // Place markers into cluster group
                                countries.forEach(function(c) {
                                    clusterGroup.addLayer(
                                        L.marker(c.coords, {
                                            icon: buildPinIcon(c.name)
                                        })
                                    );
                                });
                                map.addLayer(clusterGroup);

                                // Fit bounds to all 6 countries with comfortable padding
                                var bounds = L.latLngBounds(countries.map(function(c) {
                                    return c.coords;
                                }));
                                map.fitBounds(bounds, {
                                    padding: [60, 60],
                                    maxZoom: 3
                                });

                                // ===== Fix: prevent tiles from disappearing on scroll/resize =====

                                // 1. Force tiles to re-render after init delay (handles initial render race condition)
                                setTimeout(function() {
                                    map.invalidateSize(true);
                                }, 200);
                                setTimeout(function() {
                                    map.invalidateSize(true);
                                }, 600);
                                setTimeout(function() {
                                    map.invalidateSize(true);
                                }, 1200);

                                // 2. Invalidate on window resize (handles responsive layout shifts)
                                var resizeTimer;
                                window.addEventListener('resize', function() {
                                    clearTimeout(resizeTimer);
                                    resizeTimer = setTimeout(function() {
                                        map.invalidateSize(true);
                                    }, 150);
                                });

                                // 3. Re-render when map enters viewport (lazy-load fix for off-screen render)
                                if ('IntersectionObserver' in window) {
                                    var mapObserver = new IntersectionObserver(function(entries) {
                                        entries.forEach(function(entry) {
                                            if (entry.isIntersecting) {
                                                map.invalidateSize(true);
                                            }
                                        });
                                    }, {
                                        threshold: 0.1
                                    });
                                    mapObserver.observe(mapEl);
                                }

                                // 4. Keep tiles loaded even if scrolled out (handled via tileLayer keepBuffer option above)
                            }

                            // Init when DOM ready
                            if (document.readyState === 'loading') {
                                document.addEventListener('DOMContentLoaded', initZdMap);
                            } else {
                                initZdMap();
                            }
                        })();
                    </script>

                    <!-- monitor stand -->
                    <div class="mx-auto mt-0 w-32 h-3 bg-gradient-to-b from-[#222] to-[#0a0a0a] rounded-b"></div>
                    <div class="mx-auto -mt-0.5 w-48 h-1.5 bg-[#0a0a0a] rounded-full"></div>






                </div>
            </div>

            <!-- bottom glow -->
            <div
                class="absolute -bottom-24 left-0 right-0 h-48 bg-gradient-to-t from-accent-gold/10 to-transparent blur-3xl pointer-events-none">
            </div>
    </section> --}}

    <!-- ============================ SECTION 2: PLATFORM DEEP DIVE ============================ -->
    {{-- <section class="bg-[#fafaf7] py-24 lg:py-32 relative">
        <div class="mx-auto max-w-[1360px] px-6 lg:px-10 grid lg:grid-cols-2 gap-14 items-center">
            <!-- Left: copy -->
            <div class="reveal">
                <div class="tag text-brand-green mb-4">— Platform Overview</div>
                <h2 class="font-extrabold tracking-tight text-[clamp(2rem,4vw,3.5rem)] leading-[1.05]">
                    The ZD One Platform —<br />
                    <span class="relative inline-block">
                        <span class="relative z-10">Connect Everything</span>
                        <span class="absolute left-0 right-0 bottom-1 h-3 bg-accent-gold/40 -z-0"></span>
                    </span>
                </h2>
                <p class="mt-6 text-lg text-navy-900/70 leading-relaxed max-w-xl">
                    The ZD One Platform delivers comprehensive control and operational visibility across your entire
                    enterprise device ecosystem — all from a single, unified dashboard, with no compromises.
                </p>

                <!-- Device list -->
                <ul class="mt-8 space-y-3 text-[15px] text-navy-900/90">
                    <li class="flex items-start gap-3">
                        <span class="check-badge mt-0.5"><svg width="10" height="10" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="3">
                                <path d="M5 12l5 5L20 7" />
                            </svg></span>
                        <span><strong>Intelligent monitoring systems</strong> — Smart Camera, NVR, AI Box
                            analytics.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="check-badge mt-0.5"><svg width="10" height="10" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="3">
                                <path d="M5 12l5 5L20 7" />
                            </svg></span>
                        <span><strong>Multi-biometric readers</strong> — fingerprint, facial, palm, vein, retina,
                            iris.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="check-badge mt-0.5"><svg width="10" height="10" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="3">
                                <path d="M5 12l5 5L20 7" />
                            </svg></span>
                        <span><strong>Digital signage, laptops, tablets & POS systems</strong> — fully
                            integrated.</span>
                    </li>
                </ul>

                <!-- Value pillars -->
                <div class="mt-10 divider-dotted"></div>
                <div class="mt-8 grid grid-cols-2 gap-x-6 gap-y-5">
                    <div>
                        <div class="flex items-center gap-2 text-sm font-bold text-navy-900">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#085410"
                                stroke-width="2">
                                <rect x="3" y="11" width="18" height="10" rx="2" />
                                <path d="M7 11V7a5 5 0 0110 0v4" />
                            </svg>
                            Device Management & Security
                        </div>
                        <p class="text-xs text-navy-900/60 mt-1">Centralized security with end-to-end encryption.</p>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 text-sm font-bold text-navy-900">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#085410"
                                stroke-width="2">
                                <polyline points="16 18 22 12 16 6" />
                                <polyline points="8 6 2 12 8 18" />
                            </svg>
                            App Development & Deployment
                        </div>
                        <p class="text-xs text-navy-900/60 mt-1">Deploy applications to thousands of devices in a
                            single click.
                        </p>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 text-sm font-bold text-navy-900">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#085410"
                                stroke-width="2">
                                <circle cx="12" cy="12" r="3" />
                                <path
                                    d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 01-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09a1.65 1.65 0 00-1-1.51 1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09a1.65 1.65 0 001.51-1 1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z" />
                            </svg>
                            Remote Troubleshooting
                        </div>
                        <p class="text-xs text-navy-900/60 mt-1">Real-time remote diagnostics and troubleshooting.</p>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 text-sm font-bold text-navy-900">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#085410"
                                stroke-width="2">
                                <line x1="18" y1="20" x2="18" y2="10" />
                                <line x1="12" y1="20" x2="12" y2="4" />
                                <line x1="6" y1="20" x2="6" y2="14" />
                            </svg>
                            Performance Analytics
                        </div>
                        <p class="text-xs text-navy-900/60 mt-1">Live data insights and KPI metrics.</p>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 text-sm font-bold text-navy-900">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#085410"
                                stroke-width="2">
                                <path d="M12 2L2 7l10 5 10-5-10-5z" />
                                <path d="M2 17l10 5 10-5M2 12l10 5 10-5" />
                            </svg>
                            IoT Deployment
                        </div>
                        <p class="text-xs text-navy-900/60 mt-1">Structured orchestration for thousands of IoT
                            endpoints.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right: Video placeholder + CTA -->
            <div class="reveal" style="transition-delay:.15s">
                <div class="relative rounded-2xl bg-gradient-to-br from-navy-800 to-navy-950 p-1 gold-glow">
                    <div
                        class="relative aspect-video rounded-xl overflow-hidden bg-gradient-to-br from-navy-700 via-navy-900 to-navy-950 grid place-items-center">
                        <video class="absolute inset-0 h-full w-full object-cover bg-navy-950" controls autoplay muted
                            loop playsinline preload="metadata">
                            <source src="{{ asset('video/zd-video.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>

                <!-- CTA -->
                <div class="mt-6 flex flex-wrap items-center gap-4">
                    <a href="/contact-us"
                        class="inline-flex items-center gap-2 rounded-full bg-accent-gold text-navy-950 px-7 py-4 font-extrabold hover:bg-navy-900 hover:text-white transition">
                        Book Demo
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M13 5l7 7-7 7" />
                        </svg>
                    </a>
                    <div class="text-sm text-navy-900/60">
                        No credit card required · 30-minute live consultation
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ============================ SECTION 3: VALUE PROPOSITION / FEATURES ============================ -->
    {{-- <section class="bg-white py-24 lg:py-28 border-t border-navy-900/5">
        <div class="mx-auto max-w-[1360px] px-6 lg:px-10">
            <div class="text-center max-w-3xl mx-auto reveal">
                <div class="tag text-brand-green mb-4">— Capabilities</div>
                <h2 class="font-extrabold tracking-tight text-[clamp(2rem,4vw,3.25rem)] leading-[1.05]">
                    What <span class="italic font-serif font-normal text-accent-goldDark">ZD</span> Can Do<br />For
                    Your Business
                </h2>
                <p class="mt-5 text-navy-900/60 text-lg">
                    Five core pillars that transform how enterprises manage devices in the field.
                </p>
            </div>

            <div class="mt-16 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-x-8 gap-y-12">
                <!-- 1 Enterprise Management -->
                <div class="reveal text-center group" style="transition-delay:.05s">
                    <a href="/capability-enterprise">
                        <div class="relative mx-auto w-24 h-24 rounded-full grid place-items-center transition-transform group-hover:-translate-y-1"
                            style="background:#085410">
                            <div class="absolute inset-0 rounded-full blur-xl opacity-0 group-hover:opacity-60 transition"
                                style="background:#085410">
                            </div>
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="white"
                                stroke-width="1.8">
                                <circle cx="12" cy="12" r="2.5" />
                                <circle cx="4" cy="4" r="2" />
                                <circle cx="20" cy="4" r="2" />
                                <circle cx="4" cy="20" r="2" />
                                <circle cx="20" cy="20" r="2" />
                                <line x1="6" y1="5" x2="10" y2="10" />
                                <line x1="18" y1="5" x2="14" y2="10" />
                                <line x1="6" y1="19" x2="10" y2="14" />
                                <line x1="18" y1="19" x2="14" y2="14" />
                            </svg>
                        </div>
                        <div class="mt-5 font-bold text-navy-900 leading-tight">Enterprise<br />Management</div>
                        <p class="mt-2 text-xs text-navy-900/55 leading-relaxed">Centralized orchestration for
                            large-scale organizations.</p>
                    </a>
                </div>

                <!-- 2 Minimize Downtime -->
                <div class="reveal text-center group" style="transition-delay:.12s">
                    <a href="/capability-downtime">
                        <div class="relative mx-auto w-24 h-24 rounded-full grid place-items-center transition-transform group-hover:-translate-y-1"
                            style="background:#3b82f6">
                            <div class="absolute inset-0 rounded-full blur-xl opacity-0 group-hover:opacity-60 transition"
                                style="background:#3b82f6"></div>
                            <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="white"
                                stroke-width="1.8">
                                <rect x="7" y="2" width="10" height="20" rx="2" />
                                <circle cx="10" cy="10" r=".8" fill="white" />
                                <circle cx="14" cy="10" r=".8" fill="white" />
                                <path d="M10 14 Q12 16 14 14" />
                            </svg>
                        </div>
                        <div class="mt-5 font-bold text-navy-900 leading-tight">Minimize<br />Downtime</div>
                        <p class="mt-2 text-xs text-navy-900/55 leading-relaxed">Detect anomalies before they cause
                            impact.
                        </p>
                    </a>
                </div>

                <!-- 3 Simplify Business -->
                <div class="reveal text-center group" style="transition-delay:.19s">
                    <a href="/capability-simplify">
                        <div class="relative mx-auto w-24 h-24 rounded-full grid place-items-center transition-transform group-hover:-translate-y-1"
                            style="background:#14306b">
                            <div class="absolute inset-0 rounded-full blur-xl opacity-0 group-hover:opacity-60 transition"
                                style="background:#14306b"></div>
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="white"
                                stroke-width="1.8">
                                <rect x="2" y="3" width="7" height="5" rx="1" />
                                <rect x="15" y="3" width="7" height="5" rx="1" />
                                <rect x="8" y="16" width="8" height="5" rx="1" />
                                <path d="M5.5 8 V12 H18.5 V8" />
                                <path d="M12 12 V16" />
                            </svg>
                        </div>
                        <div class="mt-5 font-bold text-navy-900 leading-tight">Simplify<br />Business</div>
                        <p class="mt-2 text-xs text-navy-900/55 leading-relaxed">Standardized workflows across
                            teams.
                        </p>
                    </a>
                </div>

                <!-- 4 Remote Troubleshooting -->
                <div class="reveal text-center group" style="transition-delay:.26s">
                    <a href="/capability-remote">
                        <div class="relative mx-auto w-24 h-24 rounded-full grid place-items-center transition-transform group-hover:-translate-y-1"
                            style="background:#ef7a55">
                            <div class="absolute inset-0 rounded-full blur-xl opacity-0 group-hover:opacity-60 transition"
                                style="background:#ef7a55"></div>
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white"
                                stroke-width="1.8">
                                <rect x="6" y="2" width="12" height="20" rx="2" />
                                <circle cx="12" cy="12" r="2.5" />
                                <path
                                    d="M12 8.5 v1 M12 14.5 v1 M15.5 12 h1 M7.5 12 h1 M14.5 9.5 l.7 .7 M8.8 14.3 l.7 .7 M14.5 14.5 l.7 -.7 M8.8 9.7 l.7 -.7" />
                            </svg>
                        </div>
                        <div class="mt-5 font-bold text-navy-900 leading-tight">Remote<br />Troubleshooting</div>
                        <p class="mt-2 text-xs text-navy-900/55 leading-relaxed">Fix and patch issues without
                            on-site visits.
                        </p>
                    </a>
                </div>

                <!-- 5 Performance Analysis -->
                <div class="reveal text-center group" style="transition-delay:.33s">
                    <a href="/capability-performance">
                        <div class="relative mx-auto w-24 h-24 rounded-full grid place-items-center transition-transform group-hover:-translate-y-1"
                            style="background:#1d3f82">
                            <div class="absolute inset-0 rounded-full blur-xl opacity-0 group-hover:opacity-60 transition"
                                style="background:#1d3f82"></div>
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="white"
                                stroke-width="1.8">
                                <polyline points="3 17 9 11 13 15 21 6" />
                                <polyline points="15 6 21 6 21 12" />
                                <line x1="3" y1="21" x2="21" y2="21" />
                            </svg>
                        </div>
                        <div class="mt-5 font-bold text-navy-900 leading-tight">Performance<br />Analysis</div>
                        <p class="mt-2 text-xs text-navy-900/55 leading-relaxed">Real-time KPI reports and dashboards.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ============================ SECTION 4: PARTNERS & CUSTOMERS ============================ -->
    {{-- <section class="bg-[#fafaf7] py-24 lg:py-28">
        <div class="mx-auto max-w-[1360px] px-6 lg:px-10">
            <!-- Partners -->
            <div class="reveal">
                <div class="text-center">
                    <div class="tag text-brand-green mb-4">— Ecosystem</div>
                    <h2 class="font-extrabold tracking-tight text-[clamp(1.75rem,3vw,2.5rem)]">
                        ZD One Platform <span class="italic font-serif font-normal text-accent-goldDark">Brand
                            Partners</span>
                    </h2>
                    <p class="mt-4 text-navy-900/55 max-w-2xl mx-auto">Integrated with world-class hardware and OS
                        vendors — an open ecosystem with no vendor lock-in.</p>
                </div>

                <!-- ticker marquee -->
                <div class="mt-14 overflow-hidden relative"
                    style="mask-image: linear-gradient(90deg, transparent, black 10%, black 90%, transparent);">
                    <div class="ticker flex gap-16 whitespace-nowrap w-max">
                        <!-- double the set for seamless loop -->
                        <div class="flex gap-16 items-center shrink-0">
                            <img src="{{ asset('images/partners/Android.png') }}" alt="Android"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/Logo_Roomi.png') }}" alt="Logo Roomi"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/partners/Vizion_Logo.png') }}" alt="Vizion Logo"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/partners/Kozen.png') }}" alt="Kozen"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/partners/Dahua.png') }}" alt="Dahua"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/HIKVISION.png') }}" alt="HIKVISION"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/LG.png') }}" alt="LG"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/Logo Magic (Hitam).png') }}" alt="Magic"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/Samsung.png') }}" alt="Samsung"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/Tizen.png') }}" alt="Tizen"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/WebOS.png') }}" alt="WebOS"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/ZKTeco.png') }}" alt="ZKTeco"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/logo_sunmi.png') }}" alt="Sunmi"
                                class="h-8 object-contain">

                        </div>

                        <!-- repeat for seamless loop -->
                        <div class="flex gap-16 items-center shrink-0">
                            <img src="{{ asset('images/partners/Android.png') }}" alt="Android"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/Logo_Roomi.png') }}" alt="Logo Roomi"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Vizion_Logo.png') }}" alt="Vizion Logo"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/partners/Kozen.png') }}" alt="Kozen"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/partners/Dahua.png') }}" alt="Dahua"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/HIKVISION.png') }}" alt="HIKVISION"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/LG.png') }}" alt="LG"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/Logo Magic (Hitam).png') }}" alt="Magic"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/Samsung.png') }}" alt="Samsung"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/Tizen.png') }}" alt="Tizen"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/WebOS.png') }}" alt="WebOS"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/ZKTeco.png') }}" alt="ZKTeco"
                                class="h-8 object-contain">
                            <img src="{{ asset('images/partners/logo_sunmi.png') }}" alt="Sunmi"
                                class="h-8 object-contain">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Valued Customers -->
            <div class="mt-24 reveal">
                <div class="text-center">
                    <div class="tag text-brand-green mb-4">— Trusted By</div>
                    <h2 class="font-extrabold tracking-tight text-[clamp(1.75rem,3vw,2.5rem)]">
                        ZD One Platform <span class="italic font-serif font-normal text-accent-goldDark">Valued
                            Customers</span>
                    </h2>
                </div>

                <!-- ticker marquee -->
                <div class="mt-14 overflow-hidden relative"
                    style="mask-image: linear-gradient(90deg, transparent, black 10%, black 90%, transparent);">
                    <div class="ticker-reverse flex gap-16 whitespace-nowrap w-max">
                        <!-- double the set for seamless loop -->
                        <div class="flex gap-16 items-center shrink-0">
                            <img src="{{ asset('images/customer/BAF.png') }}" alt="BAF"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Japfa.svg') }}" alt="Japfa"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Orang Tua Group.png') }}" alt="Orang Tua Group"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Superindo.png') }}" alt="Superindo"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Trakindo.png') }}" alt="Trakindo"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Danone.png') }}" alt="Danone"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/KFC.PNG') }}" alt="KFC"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/agora.png') }}" alt="Agora Mall"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/ecolab.png') }}" alt="Ecolab"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/fatima_fertilizer.png') }}" alt="Fatima Fertilizer"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/nayatel.png') }}" alt="Nayatel"
                                class="h-16 object-contain">

                            <img src="{{ asset('images/customer/banco_confisa.png') }}" alt="banco confisa"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/AKR.png') }}" alt="AKR"
                                class="h-16 object-contain">

                            <img src="{{ asset('images/customer/agora_mall.png') }}" alt="Agora Mall"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Cormidom.png') }}" alt="Cormidom"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Corporacion_Multi_inversiones.png') }}"
                                alt="Corporacion Multi Inversiones" class="h-16 object-contain">
                            <img src="{{ asset('images/customer/din_taifung.png') }}" alt="Din Taifung"
                                class="h-16 object-contain">

                            <img src="{{ asset('images/customer/woow_finance.png') }}" alt="Woow Finance"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Corporacion_Multi_inversiones.png') }}"
                                alt="Corporacion Multi Inversiones" class="h-16 object-contain">
                            <img src="{{ asset('images/customer/nayatel.png') }}" alt="Nayatel"
                                class="h-16 object-contain">


                            <img src="{{ asset('images/customer/ecolab.png') }}" alt="Ecolab"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Erha_clinic.png') }}" alt="Erha Clinic"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Grab.png') }}" alt="grab"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Hokben.png') }}" alt="Hokben"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Hospital_Republica_Dominicana.png') }}"
                                alt="Hospital República Dominicana" class="h-16 object-contain">
                            <img src="{{ asset('images/customer/IMSS.png') }}" alt="IMSS"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/MCDONALDS.png') }}" alt="MCDONALD"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/optik_seis.png') }}" alt="Optik Seis"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Universidad_Santo_Domingo.png') }}"
                                alt="Universidad Santo Domingo" class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Shopee.png') }}" alt="Shopee"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/RELX.png') }}" alt="RELX"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Pokhand.png') }}" alt="Pokhand"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Universidad_Santo_Domingo.png') }}" alt=""
                                class="h-16 object-contain">

                            <img src="{{ asset('images/customer/Sadaqat-Textile.png') }}" alt="Sadaqat texttile"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Santo_Domingo.png') }}" alt="Sadaqat texttile"
                                class="h-16 object-contain">




                        </div>
                        <!-- repeat for seamless loop -->
                        <div class="flex gap-16 items-center shrink-0">
                            <img src="{{ asset('images/customer/BAF.png') }}" alt="BAF"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Japfa.svg') }}" alt="Japfa"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Orang Tua Group.png') }}" alt="Orang Tua Group"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Superindo.png') }}" alt="Superindo"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Trakindo.png') }}" alt="Trakindo"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Danone.png') }}" alt="Danone"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/KFC.PNG') }}" alt="KFC"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/agora.png') }}" alt="Agora Mall"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/ecolab.png') }}" alt="Ecolab"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/fatima_fertilizer.png') }}" alt="Fatima Fertilizer"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/nayatel.png') }}" alt="Nayatel"
                                class="h-16 object-contain">



                            <img src="{{ asset('images/customer/banco_confisa.png') }}" alt="banco confisa"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/AKR.png') }}" alt="AKR"
                                class="h-16 object-contain">

                            <img src="{{ asset('images/customer/agora_mall.png') }}" alt="Agora Mall"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Cormidom.png') }}" alt="Cormidom"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Corporacion_Multi_inversiones.png') }}"
                                alt="Corporacion Multi Inversiones" class="h-16 object-contain">
                            <img src="{{ asset('images/customer/din_taifung.png') }}" alt="Din Taifung"
                                class="h-16 object-contain">

                            <img src="{{ asset('images/customer/woow_finance.png') }}" alt="Woow Finance"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Corporacion_Multi_inversiones.png') }}"
                                alt="Corporacion Multi Inversiones" class="h-16 object-contain">
                            <img src="{{ asset('images/customer/nayatel.png') }}" alt="Nayatel"
                                class="h-16 object-contain">


                            <img src="{{ asset('images/customer/ecolab.png') }}" alt="Ecolab"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/erha_clinic.png') }}" alt="Erha Clinic"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Grab.png') }}" alt="grab"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Hokben.png') }}" alt="Hokben"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Hospital_Republica_Dominicana.png') }}"
                                alt="Hospital República Dominicana" class="h-16 object-contain">
                            <img src="{{ asset('images/customer/IMSS.png') }}" alt="IMSS"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/MCDONALDS.png') }}" alt="MCDONALD"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/optik_seis.png') }}" alt="Optik Seis"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Universidad_Santo_Domingo.png') }}"
                                alt="Universidad Santo Domingo" class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Shopee.png') }}" alt="Shopee"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/RELX.png') }}" alt="RELX"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Pokhand.png') }}" alt="Pokhand"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Universidad_Santo_Domingo.png') }}" alt=""
                                class="h-16 object-contain">

                            <img src="{{ asset('images/customer/Sadaqat-Textile.png') }}" alt="Sadaqat texttile"
                                class="h-16 object-contain">
                            <img src="{{ asset('images/customer/Santo_Domingo.png') }}" alt="Sadaqat texttile"
                                class="h-16 object-contain">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section> --}}

    <!-- ============================ SECTION 5: DEVICE SUPPORT ============================ -->
    {{-- <section id="device-support" class="bg-white py-24 lg:py-32 relative overflow-hidden">
        <!-- decorative -->
        <div
            class="absolute top-20 right-0 w-[600px] h-[600px] bg-accent-gold/5 rounded-full blur-3xl pointer-events-none">
        </div>
        <div
            class="absolute bottom-20 left-0 w-[500px] h-[500px] bg-brand-green/5 rounded-full blur-3xl pointer-events-none">
        </div>



        <!-- Bottom bar: Summary stats -->
        <div
            class="mt-10 grid sm:grid-cols-4 gap-px bg-navy-900/10 border border-navy-900/10 rounded-2xl overflow-hidden reveal">
            <div class="bg-white p-6">
                <div class="tag text-brand-green mb-1">Protocols</div>
                <div class="font-extrabold text-2xl text-navy-900">ONVIF · RTSP</div>
                <div class="text-xs text-navy-900/50 mt-1">Fully supports industry standards.</div>
            </div>
            <div class="bg-white p-6">
                <div class="tag text-brand-green mb-1">SDK</div>
                <div class="font-extrabold text-2xl text-navy-900">10+ Vendor</div>
                <div class="text-xs text-navy-900/50 mt-1">Hikvision, Dahua, ZKTeco, and more.</div>
            </div>
            <div class="bg-white p-6">
                <div class="tag text-brand-green mb-1">OS Support</div>
                <div class="font-extrabold text-2xl text-navy-900">Android · WebOS · Tizen</div>
                <div class="text-xs text-navy-900/50 mt-1">Cross-platform native agent.</div>
            </div>
            <div class="bg-white p-6">
                <div class="tag text-brand-green mb-1">Scale</div>
                <div class="font-extrabold text-2xl text-navy-900">5,000+ <span
                        class="text-accent-goldDark">SKU</span></div>
                <div class="text-xs text-navy-900/50 mt-1">Compatible device catalog.</div>
            </div>
        </div>
        </div>
    </section> --}}

    <!-- ============================ SECTION 6: SOLUTIONS ECOSYSTEM ============================ -->
    {{-- <section id="solutions" class="bg-[#fafaf7] py-24 lg:py-32">
        <div class="mx-auto max-w-[1360px] px-6 lg:px-10">
            <div class="max-w-3xl reveal">
                <div class="tag text-brand-green mb-4">— Solutions</div>
                <h2 class="font-extrabold tracking-tight text-[clamp(2.25rem,4.5vw,4rem)] leading-[1]">
                    One ecosystem.<br />
                    <span class="italic font-serif font-normal text-accent-goldDark">Five powerful modules.</span>
                </h2>
                <p class="mt-5 text-navy-900/65 text-lg">
                    A modular stack designed to work independently or as one unified system — choose what you need
                    and scale when you are ready.
                </p>
            </div>

            <!-- solution list (horizontal rows) -->
            <div class="mt-14 divide-y divide-navy-900/10 border-y border-navy-900/10">
                <!-- 01 ZD One Platform -->
                <div
                    class="group py-8 grid md:grid-cols-12 gap-6 items-center hover:bg-white/50 transition px-4 -mx-4 rounded-2xl reveal">
                    <div class="md:col-span-1 tag text-navy-900/40">01</div>
                    <div class="md:col-span-4">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-navy-900 text-white grid place-items-center">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                    stroke="#f5c249" stroke-width="1.8">
                                    <rect x="3" y="3" width="8" height="8" rx="1.5" />
                                    <rect x="13" y="3" width="8" height="8" rx="1.5" />
                                    <rect x="3" y="13" width="8" height="8" rx="1.5" />
                                    <rect x="13" y="13" width="8" height="8" rx="1.5" />
                                </svg>
                            </div>
                            <h3 class="font-extrabold text-2xl text-navy-900">ZD One Platform</h3>
                        </div>
                    </div>
                    <div class="md:col-span-6 text-navy-900/65">
                        The core foundation — a centralized dashboard that integrates all your services and devices.
                    </div>
                    <div class="md:col-span-1 text-right">
                        <a href="{{ route('zd-one-platform') }}">
                            <svg class="inline-block group-hover:translate-x-1 transition" width="22"
                                height="22" viewBox="0 0 24 24" fill="none" stroke="#0a1630"
                                stroke-width="1.8">
                                <path d="M5 12h14M13 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- 02 ZD Remote -->
                <div
                    class="group py-8 grid md:grid-cols-12 gap-6 items-center hover:bg-white/50 transition px-4 -mx-4 rounded-2xl reveal">
                    <div class="md:col-span-1 tag text-navy-900/40">02</div>
                    <div class="md:col-span-4">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-brand-green text-white grid place-items-center">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                    stroke="#f5c249" stroke-width="1.8">
                                    <rect x="5" y="2" width="14" height="20" rx="2" />
                                    <path d="M12 18h.01" />
                                </svg>
                            </div>
                            <h3 class="font-extrabold text-2xl text-navy-900">ZD Remote</h3>
                        </div>
                    </div>
                    <div class="md:col-span-6 text-navy-900/65">
                        Access, control, and monitor devices from anywhere — one click for screen sharing,
                        restarts, or push updates.
                    </div>
                    <div class="md:col-span-1 text-right">
                        <a href="{{ route('zd-remote') }}">
                            <svg class="inline-block group-hover:translate-x-1 transition" width="22"
                                height="22" viewBox="0 0 24 24" fill="none" stroke="#0a1630"
                                stroke-width="1.8">
                                <path d="M5 12h14M13 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- 03 Content Management -->
                <div
                    class="group py-8 grid md:grid-cols-12 gap-6 items-center hover:bg-white/50 transition px-4 -mx-4 rounded-2xl reveal">
                    <div class="md:col-span-1 tag text-navy-900/40">03</div>
                    <div class="md:col-span-4">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-navy-600 text-white grid place-items-center">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                    stroke="#f5c249" stroke-width="1.8">
                                    <rect x="2" y="4" width="20" height="14" rx="2" />
                                    <path d="M8 21h8" />
                                </svg>
                            </div>
                            <h3 class="font-extrabold text-2xl text-navy-900">ZD Content Management</h3>
                        </div>
                    </div>
                    <div class="md:col-span-6 text-navy-900/65">
                        A dedicated CMS for distributing media and information across digital signage devices —
                        scheduling, playlisting, and multi-zone management.
                    </div>
                    <div class="md:col-span-1 text-right">
                        <a href="{{ route('zd-content-management') }}">
                            <svg class="inline-block group-hover:translate-x-1 transition" width="22"
                                height="22" viewBox="0 0 24 24" fill="none" stroke="#0a1630"
                                stroke-width="1.8">
                                <path d="M5 12h14M13 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- 04 Analytics -->
                <div
                    class="group py-8 grid md:grid-cols-12 gap-6 items-center hover:bg-white/50 transition px-4 -mx-4 rounded-2xl reveal">
                    <div class="md:col-span-1 tag text-navy-900/40">04</div>
                    <div class="md:col-span-4">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-accent-goldDark text-navy-950 grid place-items-center">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <polyline points="3 17 9 11 13 15 21 6" />
                                </svg>
                            </div>
                            <h3 class="font-extrabold text-2xl text-navy-900">ZD Analytics</h3>
                        </div>
                    </div>
                    <div class="md:col-span-6 text-navy-900/65">
                        Performance reports, operational insights, and system metrics — exportable, live, and
                        customizable by role.
                    </div>
                    <div class="md:col-span-1 text-right">
                        <a href="{{ route('zd-analytics') }}">
                            <svg class="inline-block group-hover:translate-x-1 transition" width="22"
                                height="22" viewBox="0 0 24 24" fill="none" stroke="#0a1630"
                                stroke-width="1.8">
                                <path d="M5 12h14M13 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- 05 ZD Connect · FEATURED -->
                <div
                    class="group py-10 grid md:grid-cols-12 gap-6 items-start bg-gradient-to-r from-navy-950 to-navy-800 text-white px-4 -mx-4 rounded-2xl relative overflow-hidden reveal">
                    <div class="absolute inset-0 grid-overlay opacity-30"></div>
                    <div class="absolute top-0 right-0 w-64 h-64 bg-accent-gold/10 rounded-full blur-3xl"></div>
                    <div class="md:col-span-1 tag text-accent-gold relative">05</div>
                    <div class="md:col-span-4 relative">
                        <div
                            class="inline-flex items-center gap-2 px-2 py-0.5 rounded-full bg-accent-gold/20 border border-accent-gold/30 text-accent-gold text-[10px] font-bold mb-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-accent-gold animate-pulse"></span>
                            FEATURED · API GATEWAY
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-accent-gold text-navy-950 grid place-items-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <polyline points="16 18 22 12 16 6" />
                                    <polyline points="8 6 2 12 8 18" />
                                </svg>
                            </div>
                            <h3 class="font-extrabold text-3xl">ZD Connect</h3>
                        </div>
                    </div>
                    <div class="md:col-span-7 relative">
                        <p class="text-white/80 leading-relaxed">
                            <strong class="text-white">Integration gateway</strong> with full support for <strong
                                class="text-accent-gold">REST API</strong> & <strong
                                class="text-accent-gold">Webhook</strong>. Connect ZD with third-party
                            applications — ERP, HRIS, CRM, BI tools — through fully documented endpoints and
                            rate-limiting enterprise-grade.
                        </p>
                        <div
                            class="mt-4 font-mono text-xs text-accent-gold/90 bg-navy-950/60 border border-white/10 rounded-lg px-4 py-3 overflow-x-auto">
                            <span class="text-emerald-300">POST</span> https://api.zd-one.com/v2/devices<br />
                            <span class="text-white/50">Authorization: Bearer ***</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <!-- ============================ SECTION 7: INDUSTRIES ============================ -->
    {{-- <section id="industries" class="bg-white py-24 lg:py-32">
        <div class="mx-auto max-w-[1360px] px-6 lg:px-10">
            <div class="flex flex-wrap items-end justify-between gap-8 reveal">
                <div class="max-w-2xl">
                    <div class="tag text-brand-green mb-4">— Industries</div>
                    <h2 class="font-extrabold tracking-tight text-[clamp(2.25rem,4.5vw,4rem)] leading-[1]">
                        Built for<br />
                        <span class="italic font-serif font-normal text-accent-goldDark">every vertical.</span>
                    </h2>
                </div>
                <p class="max-w-md text-navy-900/65 text-lg">
                    Flexible, adaptable solutions — from retail to mining operations in extreme environments.
                </p>
            </div>

            <div class="mt-16 grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <!-- Retail -->
                <a href="{{ route('industries-retail') }}">
                    <article
                        class="reveal group relative rounded-3xl overflow-hidden p-8 h-80 flex flex-col justify-end text-white"
                        style="background: linear-gradient(180deg, rgba(10,22,48,.15) 0%, rgba(10,22,48,.9) 100%), linear-gradient(135deg, #5a3fc0 0%, #2563eb 100%);">

                        <div
                            class="absolute top-6 right-6 w-12 h-12 rounded-full bg-white/15 backdrop-blur border border-white/20 grid place-items-center">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white"
                                stroke-width="1.8">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-2 4h13M9 20h.01M17 20h.01" />
                            </svg>
                        </div>
                        <div class="tag text-accent-gold mb-2">01 · Retail</div>
                        <h3 class="font-extrabold text-2xl">Retail & F&B</h3>
                        <p class="mt-2 text-sm text-white/75">POS, promotional digital signage, inventory tracking —
                            omnichannel experiences from a single backend.</p>
                    </article>
                </a>

                <!-- Manufacturing -->
                <a href="{{ route('industries-manufacturing') }}">
                    <article
                        class="reveal group relative rounded-3xl overflow-hidden p-8 h-80 flex flex-col justify-end text-white"
                        style="transition-delay:.08s; background: linear-gradient(180deg, rgba(10,22,48,.15) 0%, rgba(10,22,48,.9) 100%), linear-gradient(135deg, #64748b 0%, #0f172a 100%);">
                        <div
                            class="absolute top-6 right-6 w-12 h-12 rounded-full bg-white/15 backdrop-blur border border-white/20 grid place-items-center">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white"
                                stroke-width="1.8">
                                <path d="M2 20h20M4 20V9l5 3V9l5 3V9l5 3v8" />
                            </svg>
                        </div>
                        <div class="tag text-accent-gold mb-2">02 · Manufacturing</div>
                        <h3 class="font-extrabold text-2xl">Manufacturing</h3>
                        <p class="mt-2 text-sm text-white/75">Production line monitoring, factory hardware asset
                            management, and integrated workplace security.</p>
                    </article>
                </a>

                <!-- Banking -->
                <a href="{{ route('industries-banking-finance') }}">
                    <article
                        class="reveal group relative rounded-3xl overflow-hidden p-8 h-80 flex flex-col justify-end text-white"
                        style="transition-delay:.16s; background: linear-gradient(180deg, rgba(10,22,48,.15) 0%, rgba(10,84,16,.9) 100%), linear-gradient(135deg, #0c7a19 0%, #085410 100%);">
                        <div
                            class="absolute top-6 right-6 w-12 h-12 rounded-full bg-white/15 backdrop-blur border border-white/20 grid place-items-center">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white"
                                stroke-width="1.8">
                                <path d="M3 10l9-7 9 7v2H3v-2zM5 12v7h4v-7M15 12v7h4v-7M10 12v7h4v-7M2 21h20" />
                            </svg>
                        </div>
                        <div class="tag text-accent-gold mb-2">03 · Banking</div>
                        <h3 class="font-extrabold text-2xl">Banking & Finance</h3>
                        <p class="mt-2 text-sm text-white/75">High-level security with multi-modal biometrics,
                            centralized kiosk and ATM management.</p>
                    </article>
                </a>

                <!-- Mining -->
                <a href="{{ route('industries-mining-oil-gas') }}">
                    <article
                        class="reveal group relative rounded-3xl overflow-hidden p-8 h-80 flex flex-col justify-end text-white"
                        style="transition-delay:.24s; background: linear-gradient(180deg, rgba(10,22,48,.15) 0%, rgba(10,22,48,.9) 100%), linear-gradient(135deg, #92400e 0%, #78350f 100%);">
                        <div
                            class="absolute top-6 right-6 w-12 h-12 rounded-full bg-white/15 backdrop-blur border border-white/20 grid place-items-center">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white"
                                stroke-width="1.8">
                                <path d="M14 2l-8 14h6l-2 6 8-14h-6z" />
                            </svg>
                        </div>
                        <div class="tag text-accent-gold mb-2">04 · Mining</div>
                        <h3 class="font-extrabold text-2xl">Mining, Oil & Gas</h3>
                        <p class="mt-2 text-sm text-white/75">Devices in extreme remote locations, worker safety
                            monitoring, and IoT sensor integration.</p>
                    </article>
                </a>

                <!-- Healthcare (Etc) -->
                <a href="{{ route('industries-healthcare') }}">
                    <article
                        class="reveal group relative rounded-3xl overflow-hidden p-8 h-80 flex flex-col justify-end text-white"
                        style="transition-delay:.32s; background: linear-gradient(180deg, rgba(10,22,48,.15) 0%, rgba(10,22,48,.9) 100%), linear-gradient(135deg, #0891b2 0%, #0e7490 100%);">
                        <div
                            class="absolute top-6 right-6 w-12 h-12 rounded-full bg-white/15 backdrop-blur border border-white/20 grid place-items-center">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white"
                                stroke-width="1.8">
                                <path d="M12 2v20M2 12h20M8 8l8 8M16 8l-8 8" />
                            </svg>
                        </div>
                        <div class="tag text-accent-gold mb-2">05 · Healthcare</div>
                        <h3 class="font-extrabold text-2xl">Healthcare</h3>
                        <p class="mt-2 text-sm text-white/75">Medical device management, queue displays, and
                            reliable patient identification systems.</p>
                    </article>
                </a>

                <!-- Etc -->

                <article
                    class="reveal group relative rounded-3xl overflow-hidden p-8 h-80 flex flex-col justify-between bg-navy-950 text-white border border-accent-gold/20"
                    style="transition-delay:.4s;">
                    <div class="absolute inset-0 grid-overlay opacity-40"></div>
                    <div class="relative">
                        <div class="tag text-accent-gold mb-2">+ · Custom</div>
                        <h3 class="font-extrabold text-2xl">And many more...</h3>
                        <p class="mt-2 text-sm text-white/70">Is your sector not listed? Our platform is built
                            to adapt — let us discuss your specific use case.</p>
                    </div>
                    <a href="/contact-us"
                        class="relative inline-flex items-center gap-2 text-accent-gold font-bold hover:gap-3 transition-all">
                        Discuss your use case
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M13 5l7 7-7 7" />
                        </svg>
                    </a>
                </article>


            </div>
        </div>
    </section> --}}
    <section id="services" class="bg-white py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span
                    class="inline-flex items-center px-4 py-2 rounded-full bg-[#fcbc40]/10 text-[#123458] text-sm font-semibold">
                    Our Services
                </span>

                <h2 class="mt-6 text-4xl lg:text-6xl font-bold text-[#123458] leading-tight">
                    Building Digital Products
                    <span class="text-[#fcbc40]">That Drive Growth</span>
                </h2>

                <p class="mt-6 text-slate-600 text-lg">
                    Menghadirkan solusi digital modern melalui pengembangan website,
                    web application, UI/UX design, dan sistem custom yang membantu
                    bisnis berkembang lebih cepat.
                </p>
            </div>

            <!-- Bento Grid -->
            <div class="grid lg:grid-cols-3 gap-6">

                <!-- Website Development -->
                <div
                    class="group lg:col-span-2 min-h-[320px] rounded-3xl bg-gradient-to-br from-[#123458] to-[#1f4e80] p-10 relative overflow-hidden hover:-translate-y-2 transition-all duration-500 shadow-xl">

                    <div class="absolute top-0 right-0 w-72 h-72 bg-[#fcbc40]/20 blur-3xl rounded-full">
                    </div>

                    <div class="w-16 h-16 rounded-2xl bg-white/10 backdrop-blur flex items-center justify-center mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21a9 9 0 100-18 9 9 0 000 18z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.6 9h16.8M3.6 15h16.8M12 3c2.5 2.5 4 5.8 4 9s-1.5 6.5-4 9c-2.5-2.5-4-5.8-4-9s1.5-6.5 4-9z" />
                        </svg>
                    </div>

                    <h3 class="text-white text-4xl font-bold">
                        Website Development
                    </h3>

                    <p class="text-white/80 mt-4 max-w-xl text-lg">
                        Website company profile, landing page, portal perusahaan,
                        e-commerce, dan website profesional yang cepat,
                        responsif, dan SEO friendly.
                    </p>
                </div>

                <!-- UI UX -->
                <div
                    class="group rounded-3xl bg-slate-50 border border-slate-200 p-8 hover:border-[#fcbc40] hover:shadow-xl hover:-translate-y-2 transition-all duration-500">

                    <div class="w-14 h-14 rounded-xl bg-[#fcbc40]/10 flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-7 h-7 text-[#fcbc40]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897L16.862 4.487z" />
                        </svg>
                    </div>

                    <h3 class="text-[#123458] text-2xl font-bold">
                        UI/UX Design
                    </h3>

                    <p class="text-slate-600 mt-4">
                        Desain modern, intuitif, dan berorientasi pada pengalaman pengguna
                        untuk meningkatkan engagement dan konversi.
                    </p>
                </div>

                <!-- Web App -->
                <div
                    class="group rounded-3xl bg-slate-50 border border-slate-200 p-8 hover:border-[#fcbc40] hover:shadow-xl hover:-translate-y-2 transition-all duration-500">

                    <div class="w-14 h-14 rounded-xl bg-[#fcbc40]/10 flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-7 h-7 text-[#fcbc40]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 6.75L21 12l-3.75 5.25M6.75 6.75L3 12l3.75 5.25M14.25 4.5L9.75 19.5" />
                        </svg>
                    </div>

                    <h3 class="text-[#123458] text-2xl font-bold">
                        Web Application
                    </h3>

                    <p class="text-slate-600 mt-4">
                        Dashboard, ERP, CRM, HRIS, sistem inventori, dan aplikasi berbasis web
                        yang dirancang sesuai kebutuhan bisnis.
                    </p>
                </div>

                <!-- Custom System -->
                <div
                    class="group lg:col-span-2 rounded-3xl bg-slate-50 border border-slate-200 p-10 relative overflow-hidden hover:border-[#fcbc40] hover:shadow-xl hover:-translate-y-2 transition-all duration-500">

                    <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#fcbc40]/10 blur-3xl rounded-full">
                    </div>

                    <div class="w-14 h-14 rounded-xl bg-[#fcbc40]/10 flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-7 h-7 text-[#fcbc40]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12a7.5 7.5 0 1115 0 7.5 7.5 0 01-15 0zm7.5-3v3l2 2" />
                        </svg>
                    </div>

                    <h3 class="text-[#123458] text-4xl font-bold">
                        Custom System Development
                    </h3>

                    <p class="text-slate-600 mt-4 max-w-2xl text-lg">
                        Pengembangan sistem khusus seperti PPDB Online, Sistem Absensi,
                        Dashboard Admin, CRM, ERP, Manajemen Data, hingga aplikasi yang
                        dirancang sesuai alur bisnis perusahaan Anda.
                    </p>

                    <div class="flex flex-wrap gap-3 mt-8">
                        <span class="px-4 py-2 rounded-full bg-[#123458]/5 text-[#123458] text-sm">ERP</span>
                        <span class="px-4 py-2 rounded-full bg-[#123458]/5 text-[#123458] text-sm">CRM</span>
                        <span class="px-4 py-2 rounded-full bg-[#123458]/5 text-[#123458] text-sm">HRIS</span>
                        <span class="px-4 py-2 rounded-full bg-[#123458]/5 text-[#123458] text-sm">PPDB</span>
                        <span class="px-4 py-2 rounded-full bg-[#123458]/5 text-[#123458] text-sm">Inventory</span>
                        <span class="px-4 py-2 rounded-full bg-[#123458]/5 text-[#123458] text-sm">Dashboard</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="services" class="bg-slate-950 py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span
                    class="inline-flex items-center px-4 py-2 rounded-full bg-[#fcbc40]/10 text-[#fcbc40] text-sm font-semibold">
                    Our Services
                </span>

                <h2 class="mt-6 text-4xl lg:text-6xl font-bold text-white leading-tight">
                    Building Digital Products
                    <span class="text-[#fcbc40]">That Drive Growth</span>
                </h2>

                <p class="mt-6 text-slate-400 text-lg">
                    Menghadirkan solusi digital modern melalui pengembangan website,
                    web application, UI/UX design, dan sistem custom yang membantu
                    bisnis berkembang lebih cepat.
                </p>
            </div>

            <!-- Bento Grid -->
            <div class="grid lg:grid-cols-3 gap-6">

                <!-- Website Development -->
                <div
                    class="group lg:col-span-2 min-h-[320px] rounded-3xl border border-white/10 bg-gradient-to-br from-[#123458] to-[#1d4f91] p-10 relative overflow-hidden hover:-translate-y-2 transition-all duration-500">

                    <div class="absolute top-0 right-0 w-72 h-72 bg-[#fcbc40]/20 blur-3xl rounded-full">
                    </div>

                    <div class="w-16 h-16 rounded-2xl bg-white/10 backdrop-blur flex items-center justify-center mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21a9 9 0 100-18 9 9 0 000 18z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.6 9h16.8M3.6 15h16.8M12 3c2.5 2.5 4 5.8 4 9s-1.5 6.5-4 9c-2.5-2.5-4-5.8-4-9s1.5-6.5 4-9z" />
                        </svg>
                    </div>
                    <h3 class="text-white text-4xl font-bold mt-3">
                        Website Development
                    </h3>

                    <p class="text-white/70 mt-4 max-w-xl">
                        Website company profile, landing page, portal perusahaan,
                        e-commerce, dan website profesional yang cepat,
                        responsif, dan SEO friendly.
                    </p>
                </div>

                <!-- UI UX -->
                <div
                    class="group rounded-3xl border border-white/10 bg-white/5 backdrop-blur p-8 hover:border-[#fcbc40]/50 hover:-translate-y-2 transition-all duration-500">

                    <div class="w-14 h-14 rounded-xl bg-[#fcbc40]/10 flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-[#fcbc40]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897L16.862 4.487z" />
                        </svg>
                    </div>

                    <h3 class="text-white text-2xl font-bold mt-3">
                        UI/UX Design
                    </h3>

                    <p class="text-slate-400 mt-4">
                        Desain modern, intuitif, dan berorientasi pada pengalaman pengguna.
                    </p>
                </div>

                <!-- Web App -->
                <div
                    class="group rounded-3xl border border-white/10 bg-white/5 backdrop-blur p-8 hover:border-[#fcbc40]/50 hover:-translate-y-2 transition-all duration-500">

                    <div class="w-14 h-14 rounded-xl bg-[#fcbc40]/10 flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-[#fcbc40]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 6.75L21 12l-3.75 5.25M6.75 6.75L3 12l3.75 5.25M14.25 4.5L9.75 19.5" />
                        </svg>
                    </div>

                    <h3 class="text-white text-2xl font-bold mt-3">
                        Web Application
                    </h3>

                    <p class="text-slate-400 mt-4">
                        Dashboard, ERP, CRM, HRIS, sistem inventori, dan aplikasi
                        berbasis web sesuai kebutuhan bisnis.
                    </p>
                </div>

                <!-- Custom System -->
                <div
                    class="group lg:col-span-2 rounded-3xl border border-white/10 bg-gradient-to-br from-slate-900 to-slate-800 p-10 relative overflow-hidden hover:-translate-y-2 transition-all duration-500">

                    <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#fcbc40]/10 blur-3xl rounded-full">
                    </div>

                    <div class="w-14 h-14 rounded-xl bg-[#fcbc40]/10 flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-[#fcbc40]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12a7.5 7.5 0 1115 0 7.5 7.5 0 01-15 0zm7.5-3v3l2 2" />
                        </svg>
                    </div>

                    <h3 class="text-white text-4xl font-bold mt-3">
                        Custom System Development
                    </h3>

                    <p class="text-white/70 mt-4 max-w-2xl">
                        Pengembangan sistem khusus seperti PPDB Online, Sistem Absensi,
                        Dashboard Admin, CRM, ERP, Manajemen Data, hingga aplikasi
                        yang dirancang sesuai alur bisnis perusahaan Anda.
                    </p>

                    <div class="flex flex-wrap gap-3 mt-8">
                        <span class="px-4 py-2 rounded-full bg-white/5 text-white/80 text-sm">ERP</span>
                        <span class="px-4 py-2 rounded-full bg-white/5 text-white/80 text-sm">CRM</span>
                        <span class="px-4 py-2 rounded-full bg-white/5 text-white/80 text-sm">HRIS</span>
                        <span class="px-4 py-2 rounded-full bg-white/5 text-white/80 text-sm">PPDB</span>
                        <span class="px-4 py-2 rounded-full bg-white/5 text-white/80 text-sm">Inventory</span>
                        <span class="px-4 py-2 rounded-full bg-white/5 text-white/80 text-sm">Dashboard</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.footer')

    <script>
        // Reveal on scroll
        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('in');
                    io.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.12
        });
        document.querySelectorAll('.reveal').forEach(el => io.observe(el));
    </script>


</body>

</html>
