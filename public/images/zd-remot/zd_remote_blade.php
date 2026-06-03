<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZD One Platform - Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            scroll-behavior: smooth;
        }

        .gold-gradient-text {
            background: linear-gradient(90deg, #D4AF37 0%, #F9E29C 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-bg {
            background: radial-gradient(circle at top right, #1e293b 0%, #0f172a 100%);
            background-color: #050e24;
            background-image:
                radial-gradient(ellipse at top right, rgba(245, 194, 73, 0.08), transparent 50%),
                radial-gradient(ellipse at bottom left, rgba(29, 63, 130, 0.35), transparent 60%),
                linear-gradient(rgba(245, 194, 73, 0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(245, 194, 73, 0.04) 1px, transparent 1px);
            background-size: auto, auto, 60px 60px, 60px 60px;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .feature-icon-wrapper {
            transition: transform 0.3s ease;
        }

        .feature-icon-wrapper:hover {
            transform: translateY(-5px);
        }

        .device-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .device-card:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .remote-glow {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
        }

        .bg-grid-white {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' viewBox='0 0 40 40'%3E%3Cpath d='M0 40 L40 40 L40 0 M0 0 L0 40' fill='none' stroke='rgba(255,255,255,0.05)' stroke-width='1'/%3E%3C/svg%3E");
        }
    </style>
</head>

<body class="text-slate-800">

    @include('layouts.navbar')

    <!-- Hero Section / Header ZD One -->
    <section class="hero-bg text-white py-20 px-6 lg:px-24">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-5xl lg:text-6xl font-bold leading-tight mb-4">
                    ZD <br>
                    <span class="gold-gradient-text">Remote.</span>
                </h1>
                <p class="text-slate-400 text-lg mb-8 max-w-md">
                    ZDRemote is a remote control module with dual encryption for fast and secure control between
                    the dashboard and devices.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a  href="/contact-us"
                        class="bg-[#D4AF37] hover:bg-[#b8962d] text-slate-900 font-semibold px-8 py-3 rounded-full transition">
                        Get Started
</a>
                    <a  href="/contact-us"
                        class="border border-white/20 hover:bg-white/10 px-8 py-3 rounded-full transition flex items-center gap-2">
                        <i class="fas fa-play-circle"></i> View Demo
</a>
                </div>
            </div>
            <div class="relative">
                <!-- Hero Asset — Main Data Visualization Dashboard -->
                <div class="glass-card rounded-2xl p-4 shadow-2xl overflow-hidden border border-white/10">
                    <div class="rounded-lg overflow-hidden">
                        <img src="/images/zd-remote-hero.svg"
                             alt="ZD Remote Console — Main Data Visualization Dashboard with live metrics and active sessions"
                             class="w-full h-auto block">
                    </div>
                </div>
                <!-- Floating Elements -->
                <div class="absolute -bottom-6 -left-6 glass-card p-4 rounded-xl hidden md:block">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 bg-green-500/20 rounded-full flex items-center justify-center text-green-500">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400">System Active</p>
                            <p class="text-sm font-bold">99.9% Uptime</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Connect Everything Section -->
    <section class="py-24 px-6 lg:px-24 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-3xl font-bold mb-6">
                        ZD Remote — <br>
                        <span class="text-[#D4AF37]">Take Control Remotely</span>
                    </h2>
                    <p class="text-slate-600 mb-8">
                        Access and control devices directly with encrypted and reliable real-time connections.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-circle-check text-green-500 mt-1"></i>
                            <span>Cross-device remote control.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-circle-check text-green-500 mt-1"></i>
                            <span>Centralized monitoring with high-security systems.</span>
                        </li>
                    </ul>
                </div>
                <div class="order-1 lg:order-2 rounded-3xl overflow-hidden shadow-xl">
                    <img src="/images/zd-remote-control.svg"
                         alt="ZD Remote — Take Control Remotely · Real-time secure transmission status"
                         class="w-full h-auto block">
                </div>
            </div>
        </div>
    </section>

    <!-- Section ZD Remote (NEW) -->
    <section class="py-24 px-6 lg:px-24 bg-slate-950 text-white overflow-hidden relative">
        <div class="absolute inset-0 bg-grid-white opacity-10"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <div class="bg-blue-600/20 border border-blue-500/30 p-6 rounded-2xl remote-glow">
                                <i class="fas fa-toggle-on text-blue-400 text-3xl mb-4"></i>
                                <h4 class="font-bold">Switch Control</h4>
                                <p class="text-xs text-slate-400 mt-2">Turn industrial devices on/off in milliseconds.</p>
                            </div>
                            <div class="bg-slate-900 border border-white/5 p-6 rounded-2xl">
                                <i class="fas fa-sliders text-slate-400 text-3xl mb-4"></i>
                                <h4 class="font-bold">Precision Tuning</h4>
                                <p class="text-xs text-slate-400 mt-2">Adjust technical parameters finely from a distance.</p>
                            </div>
                        </div>
                        <div class="space-y-4 pt-8">
                            <div class="bg-slate-900 border border-white/5 p-6 rounded-2xl">
                                <i class="fas fa-microchip text-slate-400 text-3xl mb-4"></i>
                                <h4 class="font-bold">Firmware Update</h4>
                                <p class="text-xs text-slate-400 mt-2">Update device systems without needing to be on-site.</p>
                            </div>
                            <div class="bg-blue-600/20 border border-blue-500/30 p-6 rounded-2xl remote-glow">
                                <i class="fas fa-terminal text-blue-400 text-3xl mb-4"></i>
                                <h4 class="font-bold">Direct Command</h4>
                                <p class="text-xs text-slate-400 mt-2">Execute command scripts directly to the gateway unit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative Circle -->
                    <div
                        class="absolute -z-10 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-blue-600/20 blur-[100px] rounded-full">
                    </div>
                </div>

                <div>
                    <span class="text-blue-400 font-bold tracking-widest uppercase text-sm">Remote Access</span>
                    <h2 class="text-4xl font-bold mt-4 mb-6 leading-tight">
                        Control Everything <br>
                        <span class="gold-gradient-text">From Anywhere.</span>
                    </h2>
                    <p class="text-slate-400 mb-8 leading-relaxed">
                        ZD Remote removes distance limitations. It's not just about monitoring; you have full control over
                        every actuator, machine, and sensor connected. Operate your entire business ecosystem
                        with just a tap on your smartphone or a click on your desktop.
                    </p>

                    <div class="space-y-6">
                        <div class="flex gap-4 items-start">
                            <div
                                class="w-12 h-12 shrink-0 bg-blue-500/10 border border-blue-500/20 rounded-lg flex items-center justify-center text-blue-400">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div>
                                <h5 class="font-bold">Multi-Device Operation</h5>
                                <p class="text-sm text-slate-500">One account to control hundreds of devices simultaneously or individually.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start">
                            <div
                                class="w-12 h-12 shrink-0 bg-blue-500/10 border border-blue-500/20 rounded-lg flex items-center justify-center text-blue-400">
                                <i class="fas fa-bolt-lightning"></i>
                            </div>
                            <div>
                                <h5 class="font-bold">Ultra Low Latency</h5>
                                <p class="text-sm text-slate-500">Instant response with a specialized communication protocol optimized for speed.</p>
                            </div>
                        </div>
                    </div>

                    <button
                        class="mt-10 border-b-2 border-blue-500 pb-1 text-blue-400 font-bold hover:text-blue-300 transition">
                        Learn About Our Remote Protocol <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Services Icons -->
    <section class="py-16 bg-slate-50 border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <h3 class="text-center font-bold text-2xl mb-12">What can we help with?</h3>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8 text-center">
                <div class="feature-icon-wrapper">
                    <div
                        class="w-16 h-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl shadow-sm">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <p class="font-semibold text-sm">Agriculture</p>
                </div>
                <div class="feature-icon-wrapper">
                    <div
                        class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl shadow-sm">
                        <i class="fas fa-droplet"></i>
                    </div>
                    <p class="font-semibold text-sm">Water Management</p>
                </div>
                <div class="feature-icon-wrapper">
                    <div
                        class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl shadow-sm">
                        <i class="fas fa-industry"></i>
                    </div>
                    <p class="font-semibold text-sm">Industry</p>
                </div>
                <div class="feature-icon-wrapper">
                    <div
                        class="w-16 h-16 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl shadow-sm">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <p class="font-semibold text-sm">Energy</p>
                </div>
                <div class="feature-icon-wrapper">
                    <div
                        class="w-16 h-16 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl shadow-sm">
                        <i class="fas fa-truck-fast"></i>
                    </div>
                    <p class="font-semibold text-sm">Logistics</p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')


</body>

</html>
