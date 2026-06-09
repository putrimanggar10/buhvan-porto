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
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&family=Instrument+Serif&display=swap"
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

        .consultant-hero {
            min-height: 100vh;
            background:
                radial-gradient(circle at 15% 0%, rgba(245, 194, 73, .34), transparent 34%),
                radial-gradient(circle at 78% 18%, rgba(245, 194, 73, .22), transparent 30%),
                linear-gradient(180deg, #030407 0%, #05050a 100%);
        }

        .consultant-photo {
            filter: grayscale(1) contrast(1.08);
        }

        .consultant-title {
            font-family: 'Bebas Neue', 'Plus Jakarta Sans', sans-serif;
            letter-spacing: .16em;
        }

        .nova-panel {
            isolation: isolate;
            background:
                radial-gradient(circle at 50% 36%, rgba(245, 194, 73, .28), transparent 30%),
                radial-gradient(ellipse at 50% 64%, rgba(217, 168, 47, .42), transparent 23%),
                linear-gradient(180deg, rgba(18, 14, 6, .98), rgba(5, 4, 2, .98));
            box-shadow:
                0 0 0 1px rgba(255, 255, 255, .08),
                0 36px 120px rgba(245, 194, 73, .22);
        }

        .nova-panel::before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: 42%;
            height: 32%;
            background: radial-gradient(ellipse at center, rgba(255, 236, 179, .88), rgba(245, 194, 73, .28) 34%, transparent 66%);
            filter: blur(10px);
            opacity: .9;
            transform: scaleX(1.18);
            pointer-events: none;
            z-index: 0;
        }

        .nova-panel::after {
            content: '';
            position: absolute;
            inset: 48% -10% auto;
            height: 240px;
            border-radius: 50% 50% 0 0;
            border-top: 2px solid rgba(245, 194, 73, .72);
            background: linear-gradient(180deg, rgba(245, 194, 73, .26), transparent 65%);
            filter: blur(1px);
            pointer-events: none;
            z-index: 0;
        }

        .nova-card {
            background: rgba(255, 255, 255, .075);
            border: 1px solid rgba(255, 255, 255, .09);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .04);
        }

        .nova-chip {
            background: linear-gradient(135deg, rgba(245, 194, 73, .9), rgba(245, 194, 73, .85));
            box-shadow: 0 10px 28px rgba(245, 194, 73, .35);
        }

        @media (max-width: 1023px) {
            .nova-panel::before {
                top: 48%;
            }
        }
    </style>
</head>

<body class="overflow-x-hidden">

    @include('layouts.navbar')

    <!-- ============================ HERO ============================ -->
    <section id="home" class="consultant-hero relative isolate overflow-hidden px-4 pb-20 pt-28 text-white lg:px-8 lg:pt-36">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-80 bg-gradient-to-b from-amber-400/15 to-transparent"></div>

        <div class="nova-panel relative mx-auto min-h-[720px] max-w-[1180px] overflow-hidden rounded-[2rem] px-6 py-10 sm:px-10 lg:min-h-[860px] lg:rounded-[2.5rem] lg:px-16">
            <div class="relative z-30 mx-auto max-w-4xl pt-28 text-center lg:pt-36">
                <div class="mx-auto inline-flex rounded-full border border-white/10 bg-white/10 px-4 py-2 text-[10px] font-bold uppercase tracking-[.16em] text-white/70">
                    Built for Digital Growth
                </div>
                <h1 class="mt-8 text-[clamp(3rem,6vw,5.7rem)] font-semibold leading-[1.02] tracking-[-.02em] text-white">
                    Solusi Website dan Aplikasi Web untuk bisnis modern.
                </h1>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-white/66">
                    Bhuvan Solution membantu bisnis, UMKM, startup, dan instansi membangun sistem digital
                    yang aman, responsif, dan siap dikembangkan.
                </p>
                <div class="relative z-50 mt-8 flex flex-wrap justify-center gap-3">
                    <a href="#contact-us"
                        class="nova-chip pointer-events-auto inline-flex items-center rounded-full px-5 py-3 text-sm font-bold text-white transition hover:scale-105">
                        Konsultasi Project
                    </a>
                    <a href="#services"
                        class="pointer-events-auto inline-flex items-center rounded-full border border-white/15 bg-black/30 px-5 py-3 text-sm font-bold text-white/80 transition hover:bg-white hover:text-black">
                        Lihat Layanan
                    </a>
                </div>
            </div>

            <div class="relative z-10 mx-auto mt-14 max-w-3xl overflow-hidden rounded-[1.5rem] border border-white/10 bg-black/45 shadow-2xl shadow-amber-950/60 lg:mt-20">
                <img src="{{ asset('images/business-consultants-hero.png') }}" alt="IT solution strategy meeting"
                    class="consultant-photo h-[260px] w-full object-cover opacity-72 sm:h-[360px] lg:h-[420px]">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/25 to-transparent"></div>
                <div class="absolute bottom-5 left-5 right-5 grid gap-3 sm:grid-cols-3">
                    <div class="rounded-2xl bg-white/10 p-4 backdrop-blur-md">
                        <div class="text-3xl font-semibold">Web</div>
                        <div class="mt-1 text-xs text-white/60">Website modern</div>
                    </div>
                    <div class="rounded-2xl bg-white/10 p-4 backdrop-blur-md">
                        <div class="text-3xl font-semibold">App</div>
                        <div class="mt-1 text-xs text-white/60">Aplikasi responsif</div>
                    </div>
                    <div class="rounded-2xl bg-white/10 p-4 backdrop-blur-md">
                        <div class="text-3xl font-semibold">System</div>
                        <div class="mt-1 text-xs text-white/60">Sistem custom</div>
                    </div>
                </div>
            </div>

            <div class="relative z-10 mt-16 flex flex-wrap items-center justify-center gap-8 text-xs font-semibold uppercase tracking-[.16em] text-white/35">
                <span>Website</span>
                <span>Web App</span>
                <span>UI/UX</span>
                <span>ERP</span>
            </div>
        </div>
    </section>

    <section id="about" class="bg-[#05050a] px-6 py-24 text-white lg:px-10 lg:py-32">
        <div class="mx-auto max-w-[1180px]">
            <div class="mx-auto max-w-3xl text-center">
                <p class="tag text-amber-300">About Us</p>
                <h2 class="mt-5 text-[clamp(2.5rem,5vw,4.4rem)] font-semibold leading-tight tracking-[-.03em]">
                    Kami merancang solusi digital yang bekerja nyata untuk organisasi Anda.
                </h2>
                <p class="mt-6 text-lg leading-relaxed text-white/62">
                    Bhuvan Solution merupakan perusahaan IT yang sedang berkembang dan bergerak di bidang pengembangan
                    Website serta Web Application.
                </p>
            </div>

            <div class="mt-14 grid gap-5 lg:grid-cols-3">
                <div class="nova-card rounded-3xl p-7 lg:col-span-2">
                    <p class="text-xl leading-relaxed text-white/70">
                        Kami hadir untuk membantu bisnis, sekolah, UMKM, startup, dan berbagai instansi membangun solusi
                        digital yang modern, efektif, dan sesuai kebutuhan. Dengan memadukan teknologi terkini, desain
                        yang profesional, dan sistem yang responsif, kami berkomitmen meningkatkan efisiensi kerja,
                        branding perusahaan, serta pengalaman pengguna yang lebih baik.
                    </p>
                    <p class="mt-6 text-xl leading-relaxed text-white/70">
                        Kami percaya transformasi digital bukan hanya tentang teknologi, tetapi tentang bagaimana sebuah
                        solusi dapat memberikan dampak nyata bagi perkembangan bisnis dan organisasi.
                    </p>
                </div>
                <div class="nova-card rounded-3xl p-7">
                    <div class="text-5xl font-semibold">5+</div>
                    <p class="mt-4 text-sm leading-relaxed text-white/58">
                        Fokus layanan digital: website, web app, UI/UX, sistem custom, dan integrasi.
                    </p>
                </div>
            </div>

            <div class="mt-5 grid gap-5 lg:grid-cols-2">
                <div class="nova-card rounded-3xl p-7">
                    <p class="tag text-amber-300">Visi</p>
                    <p class="mt-4 text-lg leading-relaxed text-white/75">
                        Menjadi perusahaan teknologi informasi yang inovatif, profesional, dan terpercaya dalam
                        menyediakan solusi digital berbasis website dan web application di Indonesia.
                    </p>
                </div>
                <div class="nova-card rounded-3xl p-7">
                    <p class="tag text-amber-300">Misi</p>
                    <ul class="mt-4 space-y-3 text-lg leading-relaxed text-white/75">
                        <li>Memberikan layanan pengembangan website dan aplikasi web yang berkualitas.</li>
                        <li>Membantu proses transformasi digital bagi bisnis dan instansi.</li>
                        <li>Mengembangkan sistem yang modern, aman, dan mudah digunakan.</li>
                        <li>Mengutamakan kepuasan klien melalui pelayanan yang profesional.</li>
                        <li>Terus berinovasi mengikuti perkembangan teknologi digital.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="location" class="relative overflow-hidden bg-[#05050a] py-24 text-white lg:py-32">
        <div class="absolute inset-x-0 top-1/2 h-72 -translate-y-1/2 bg-amber-400/10 blur-3xl"></div>
        <div class="relative mx-auto grid max-w-[1360px] items-center gap-12 px-6 lg:grid-cols-12 lg:px-10">
            <div class="lg:col-span-7">
                <p class="tag text-amber-300">Location</p>
                <h2 class="mt-5 text-[clamp(3.2rem,7vw,6.8rem)] font-semibold leading-[.94] tracking-[-.04em]">
                    BSD City<br>Tangerang
                </h2>
            </div>
            <div class="lg:col-span-5">
                <div class="nova-card rounded-3xl p-8">
                    <p class="text-2xl leading-relaxed text-white/78">
                        Kami berbasis di Tangerang, Indonesia, dan siap mendampingi kebutuhan digital bisnis Anda
                        secara remote maupun onsite sesuai kebutuhan project.
                    </p>
                    <a href="#contact-us"
                        class="nova-chip mt-8 inline-flex rounded-full px-6 py-3 text-xs font-black uppercase tracking-[.14em] text-white transition hover:scale-105">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================ SECTION 2: PLATFORM DEEP DIVE ============================ -->

    <!-- ============================ SECTION 3: VALUE PROPOSITION / FEATURES ============================ -->

    <!-- ============================ SECTION 4: PARTNERS & CUSTOMERS ============================ -->

    <!-- ============================ SECTION 5: DEVICE SUPPORT ============================ -->

    <!-- ============================ SECTION 6: SOLUTIONS ECOSYSTEM ============================ -->

    <!-- ============================ SECTION 7: INDUSTRIES ============================ -->

    <section id="services" class="bg-slate-950 py-32 overflow-hidden lg:py-40">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-4xl mx-auto mb-20 lg:mb-24">
             

                <h2 class="consultant-title mx-auto text-[clamp(3.2rem,6vw,6rem)] leading-[.9] text-white">
                    Solusi Digital Profesional
                    <span class="block text-[#f5c249]">Untuk Kebutuhan Bisnis Anda</span>
                </h2>

                <p class="mx-auto mt-8 max-w-3xl text-slate-400 text-lg leading-relaxed">
                    Menghadirkan solusi digital modern melalui pengembangan website,
                    web application, UI/UX design, dan sistem custom yang membantu
                    bisnis berkembang lebih cepat.
                </p>
            </div>

            <!-- Bento Grid -->
            <div class="grid lg:grid-cols-3 gap-6">

                <!-- Website Development -->
                <div
                    class="group lg:col-span-2 min-h-[320px] rounded-3xl border border-amber-300/20 bg-gradient-to-br from-[#3a2a10] via-[#241c0e] to-[#5b4215] p-10 relative overflow-hidden hover:-translate-y-2 transition-all duration-500">

                    <div class="absolute top-0 right-0 w-72 h-72 bg-[#f5c249]/20 blur-3xl rounded-full">
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
                    <h3 class="consultant-title text-white text-5xl leading-none mt-3">
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
                    class="group rounded-3xl border border-white/10 bg-white/5 backdrop-blur p-8 hover:border-[#f5c249]/50 hover:-translate-y-2 transition-all duration-500">

                    <div class="w-14 h-14 rounded-xl bg-[#f5c249]/10 flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-[#f5c249]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897L16.862 4.487z" />
                        </svg>
                    </div>

                    <h3 class="consultant-title text-white text-4xl leading-none mt-3">
                        UI/UX Design
                    </h3>

                    <p class="text-slate-400 mt-4">
                        Desain modern, intuitif, dan berorientasi pada pengalaman pengguna.
                    </p>
                </div>

                <!-- Web App -->
                <div
                    class="group rounded-3xl border border-white/10 bg-white/5 backdrop-blur p-8 hover:border-[#f5c249]/50 hover:-translate-y-2 transition-all duration-500">

                    <div class="w-14 h-14 rounded-xl bg-[#f5c249]/10 flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-[#f5c249]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 6.75L21 12l-3.75 5.25M6.75 6.75L3 12l3.75 5.25M14.25 4.5L9.75 19.5" />
                        </svg>
                    </div>

                    <h3 class="consultant-title text-white text-4xl leading-none mt-3">
                        Web Application
                    </h3>

                    <p class="text-slate-400 mt-4">
                        Dashboard, ERP, POS,HRIS, sistem inventori, dan aplikasi
                        berbasis web sesuai kebutuhan bisnis.
                    </p>
                </div>

                <!-- Custom System -->
                <div
                    class="group lg:col-span-2 rounded-3xl border border-amber-300/20 bg-gradient-to-br from-[#17120a] via-[#21190c] to-[#3a2a10] p-10 relative overflow-hidden hover:-translate-y-2 transition-all duration-500">

                    <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#f5c249]/10 blur-3xl rounded-full">
                    </div>

                    <div class="w-14 h-14 rounded-xl bg-[#f5c249]/10 flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-[#f5c249]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12a7.5 7.5 0 1115 0 7.5 7.5 0 01-15 0zm7.5-3v3l2 2" />
                        </svg>
                    </div>

                    <h3 class="consultant-title text-white text-5xl leading-none mt-3">
                        Custom System Development
                    </h3>

                    <p class="text-white/70 mt-4 max-w-2xl">
                        Pengembangan sistem khusus seperti POS, Sistem Absensi,
                        Dashboard Admin, ERP, Manajemen Data, hingga aplikasi
                        yang dirancang sesuai alur bisnis perusahaan Anda.
                    </p>

                    <div class="flex flex-wrap gap-3 mt-8">
                        <span class="px-4 py-2 rounded-full bg-white/5 text-white/80 text-sm">ERP</span>
                        <span class="px-4 py-2 rounded-full bg-white/5 text-white/80 text-sm">HRIS</span>
                        <span class="px-4 py-2 rounded-full bg-white/5 text-white/80 text-sm">POS</span>
                        <span class="px-4 py-2 rounded-full bg-white/5 text-white/80 text-sm">Inventory</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================ CONTACT US ============================ -->
    <section id="contact-us" class="bg-[#05050a] py-24 overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_10%_80%,rgba(245,194,73,0.13),transparent_35%),radial-gradient(circle_at_90%_20%,rgba(245,194,73,0.16),transparent_35%)]">
        </div>

        <div class="relative mx-auto max-w-[1360px] px-6 lg:px-10">
            <div class="grid items-start gap-14 lg:grid-cols-12">

                <!-- LEFT INFO -->
                <div class="lg:col-span-5">
                    <div class="tag mb-5 text-amber-300">Contact Us</div>

                    <h1
                        class="text-[clamp(3rem,5vw,5.2rem)] font-semibold leading-[.98] tracking-[-.04em] text-white">
                        Wujudkan solusi<br>
                        <span class="text-amber-300">
                            digital Anda.
                        </span>
                    </h1>

                    <p class="mt-8 max-w-md text-lg leading-relaxed text-white/60">
                        Ceritakan kebutuhan website, aplikasi, atau sistem bisnis Anda. Tim kami siap membantu
                        merancang solusi yang tepat dan mudah dikembangkan.
                    </p>

                    <div class="mt-14 space-y-7">
                        <div class="flex items-center gap-4">
                            <div
                                class="grid h-12 w-12 place-items-center rounded-2xl bg-white/10 text-amber-300">
                                <svg width="22" height="22" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                    <path d="m3 7 9 6 9-6"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-white/40">Email</div>
                                <div class="font-extrabold text-white">support@bhuvansolution.com</div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div
                                class="grid h-12 w-12 place-items-center rounded-2xl bg-white/10 text-amber-300">
                                <svg width="22" height="22" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.08 5.18 2 2 0 0 1 5.06 3h3a2 2 0 0 1 2 1.72c.12.9.32 1.77.57 2.61a2 2 0 0 1-.45 2.11L9 10.62a16 16 0 0 0 4.38 4.38l1.18-1.18a2 2 0 0 1 2.11-.45c.84.25 1.71.45 2.61.57A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-white/40">Phone</div>
                                <div class="font-extrabold text-white">+62 877-8794-3796</div>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="grid h-12 w-12 shrink-0 place-items-center rounded-2xl bg-white/10 text-amber-300">
                                <svg width="22" height="22" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M12 21s7-4.35 7-11a7 7 0 1 0-14 0c0 6.65 7 11 7 11z"></path>
                                    <circle cx="12" cy="10" r="2.5"></circle>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-white/40">Office</div>
                                <div class="font-extrabold text-white">BHUVAN</div>
                                <div class="text-sm text-white/50">
                                    BSD City, Tangerang, Indonesia
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT FORM -->
                <div class="lg:col-span-7">
                    <div class="nova-card rounded-[2rem] p-7 lg:p-10">
                        <div class="mb-9 flex items-start justify-between">
                            <div>
                                <h2 class="text-4xl font-semibold leading-none text-white">Book a Demo</h2>
                                <p class="mt-1 text-white/50">Tim kami akan menghubungi Anda secepatnya.</p>
                            </div>

                          
                        </div>

                        <form action="#" method="POST" class="space-y-6">
                            @csrf

                            <div>
                                <label class="mb-2 block text-xs font-bold text-white/55">Nama <span
                                        class="text-red-500">*</span></label>
                                <input type="text" name="name"
                                    class="field w-full rounded-xl border border-white/10 bg-black/35 px-5 py-4 text-sm text-white"
                                    required>
                            </div>

                            <div class="grid gap-5 md:grid-cols-2">
                                <div>
                                    <label class="mb-2 block text-xs font-bold text-white/55">No Telepon <span
                                            class="text-red-500">*</span></label>
                                    <input type="tel" name="phone"
                                        class="field w-full rounded-xl border border-white/10 bg-black/35 px-5 py-4 text-sm text-white"
                                        required>
                                </div>

                                <div>
                                    <label class="mb-2 block text-xs font-bold text-white/55">Email <span
                                            class="text-red-500">*</span></label>
                                    <input type="email" name="email"
                                        class="field w-full rounded-xl border border-white/10 bg-black/35 px-5 py-4 text-sm text-white"
                                        required>
                                </div>
                            </div>
                            <div>
                                <label class="mb-2 block text-xs font-bold text-white/55">Pesan <span
                                        class="font-normal text-white/35">(optional)</span></label>
                                <textarea name="message" rows="5"
                                    class="field w-full resize-none rounded-xl border border-white/10 bg-black/35 px-5 py-4 text-sm text-white"></textarea>
                            </div>

                            <button type="submit"
                                class="flex w-full items-center justify-center gap-2 rounded-full px-6 py-5 font-extrabold text-white transition hover:scale-[1.01] nova-chip">
                                Submit
                                <span>&rarr;</span>
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>


    @include('layouts.footer')
</body>

</html>
