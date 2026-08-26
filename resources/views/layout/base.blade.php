<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ewaregroup</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{url('assets/images/fav-icon/icon1.png')}}">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}" type="text/css" media="all" />
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}" type="text/css" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{url('assets/css/animate.css')}}" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{url('assets/css/animated-text.css')}}" type="text/css" media="all" />
    <!-- font-awesome CSS -->
    <link rel="stylesheet"  href="{{url('assets/css/all.min.css')}}" type="text/css" media="all" />
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="{{url('assets/css/flaticon.css')}}" type="text/css" media="all" />
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{url('assets/css/theme-default.css')}}" type="text/css" media="all" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{url('assets/css/meanmenu.min.css')}}" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{url('assets/css/owl.transitions.css')}}" type="text/css" media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{url('venobox/venobox.css')}}" type="text/css" media="all" />
    <!--porgress-bar-css-->
    <link rel="stylesheet" href="{{url('assets/css/progresscircle.css')}}" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}" type="text/css" media="all" />
    <!-- modernizr js -->
    <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>

    <!-- cinet pay -->
    <script src="https://cdn.cinetpay.com/seamless/main.js" type="text/javascript"></script>

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Vite Scripts & Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] { display: none !important; }

        :root {
            --page-bg: #f6f8fb;
            --page-text: #0b0b0b;
            --page-muted: rgba(0, 0, 0, 0.65);
            --partner-bg: #f6f8fb;
            --partner-text: #0b0b0b;
            --partner-muted: rgba(0, 0, 0, 0.6);
            --partner-card-bg: rgba(255, 255, 255, 0.9);
            --partner-card-border: rgba(0, 0, 0, 0.08);
            --about-card-bg: #ffffff;
            --about-card-border: rgba(0, 0, 0, 0.06);
            --hero-overlay: rgba(0, 0, 0, 0.45);
            --hero-pill-bg: rgba(255, 255, 255, 0.2);
            --hero-pill-border: rgba(255, 255, 255, 0.45);
            --feature-card-bg: #ffffff;
            --feature-card-border: rgba(0, 0, 0, 0.06);
            --feature-title: #0b0b0b;
            --feature-text: rgba(0, 0, 0, 0.7);
            --footer-bg: #f1f5f2;
            --footer-text: #0b0b0b;
            --footer-muted: rgba(0, 0, 0, 0.6);
            --footer-card-bg: rgba(255, 255, 255, 0.85);
            --footer-card-border: rgba(0, 0, 0, 0.08);
        }

        :root[data-theme="dark"] {
            --page-bg: #0b1511;
            --page-text: #f5f7f5;
            --page-muted: rgba(255, 255, 255, 0.7);
            --partner-bg: #0b1511;
            --partner-text: #ffffff;
            --partner-muted: rgba(255, 255, 255, 0.7);
            --partner-card-bg: rgba(255, 255, 255, 0.06);
            --partner-card-border: rgba(255, 255, 255, 0.12);
            --about-card-bg: rgba(255, 255, 255, 0.06);
            --about-card-border: rgba(255, 255, 255, 0.12);
            --hero-overlay: rgba(0, 0, 0, 0.55);
            --hero-pill-bg: rgba(255, 255, 255, 0.12);
            --hero-pill-border: rgba(255, 255, 255, 0.25);
            --feature-card-bg: rgba(255, 255, 255, 0.08);
            --feature-card-border: rgba(255, 255, 255, 0.12);
            --feature-title: #ffffff;
            --feature-text: rgba(255, 255, 255, 0.7);
            --footer-bg: #0b1511;
            --footer-text: #ffffff;
            --footer-muted: rgba(255, 255, 255, 0.7);
            --footer-card-bg: rgba(255, 255, 255, 0.1);
            --footer-card-border: rgba(255, 255, 255, 0.12);
        }

        body {
            background: var(--page-bg);
            color: var(--page-text);
            transition: background 250ms ease, color 250ms ease;
        }

        .theme-toggle {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.08);
            color: #0b0b0b;
            transition: transform 200ms ease, background 200ms ease, border-color 200ms ease, color 200ms ease;
        }

        :root[data-theme="dark"] .theme-toggle {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.2);
            color: #ffffff;
        }

        .nav-link {
            color: var(--page-text);
        }

        .nav-link:hover {
            color: #0c7c34;
        }

        .nav-dropdown {
            background: var(--page-bg);
            border: 1px solid var(--about-card-border);
        }

        :root[data-theme="dark"] .nav-dropdown {
            background: #0b1511;
            border-color: rgba(255, 255, 255, 0.12);
        }

        .nav-dropdown-link {
            display: block;
            padding: 10px 12px;
            border-radius: 12px;
            color: var(--page-text);
            font-size: 15px;
            transition: background 180ms ease, color 180ms ease;
        }

        .nav-dropdown-link:hover {
            background: rgba(12, 124, 52, 0.12);
            color: #0c7c34;
        }

        .cta-link {
            color: var(--page-text);
            border-color: rgba(0, 0, 0, 0.2);
        }

        :root[data-theme="dark"] .cta-link {
            border-color: rgba(255, 255, 255, 0.3);
        }

        .mobile-menu-panel {
            background: rgba(255, 255, 255, 0.95);
            border-color: rgba(0, 0, 0, 0.08);
        }

        :root[data-theme="dark"] .mobile-menu-panel {
            background: rgba(11, 21, 17, 0.95);
            border-color: rgba(255, 255, 255, 0.12);
        }

        .mobile-menu-link {
            color: var(--page-text);
        }

        .mobile-menu-link:hover {
            color: #0c7c34;
        }


        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(16px);
            transition: opacity 600ms ease, transform 600ms ease;
        }

        .reveal-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-delay-1 { transition-delay: 80ms; }
        .reveal-delay-2 { transition-delay: 160ms; }
        .reveal-delay-3 { transition-delay: 240ms; }
        .reveal-delay-4 { transition-delay: 320ms; }

        @media (prefers-reduced-motion: reduce) {
            .reveal-on-scroll {
                transition: none;
                opacity: 1;
                transform: none;
            }
        }
    </style>
</head>
<body
    class="font-sans antialiased"
    x-data="{
        scrolled: false,
        theme: localStorage.getItem('theme') || 'light'
    }"
    x-init="
        document.documentElement.setAttribute('data-theme', theme);
        $watch('theme', value => {
            document.documentElement.setAttribute('data-theme', value);
            localStorage.setItem('theme', value);
        });
    "
    @scroll.window="scrolled = (window.pageYOffset > 50)"
>


<!-- Start-header-Menu-->
<header
    :class="scrolled ? 'fixed top-3 left-0 right-0 z-50 mx-auto max-w-7xl px-4' : 'fixed top-0 left-0 right-0 z-50 w-full'"
    class="transition-all duration-300 ease-in-out"
>
    <!-- Glassy Navbar -->
    <div
        :class="scrolled ? 'bg-white/30 backdrop-blur-md rounded-2xl md:rounded-[24px] px-6 py-2 md:px-10 border border-white/20 shadow-xl' : 'bg-white/30 backdrop-blur-md px-6 py-4 md:px-16 border-b border-white/10'"
        class="flex items-center justify-between transition-all duration-300 relative"
    >

        <!-- Logo -->
        <a href="{{url('/')}}" class="flex items-center shrink-0">
            <img src="{{url('assets/images/logo/logo_cb.png')}}" class=" h-10 md:h-12 w-auto p-1" alt="logo">
            {{-- <img src="{{url('assets/images/logo/logo2.jpg')}}" class="h-8 md:h-11 w-auto rounded-lg bg-white/50 p-1" alt="logo"> --}}
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center space-x-6 xl:space-x-8">
            <a href="{{url('/')}}" class="nav-link text-[15px] xl:text-[18px] font-medium transition">Accueil</a>
            <a href="{{url('filiales')}}" class="nav-link text-[15px] xl:text-[18px] font-medium transition">Filiales</a>
            <a href="{{url('services')}}" class="nav-link text-[15px] xl:text-[18px] font-medium transition">Nos solutions</a>
            <a href="{{url('publication')}}" class="nav-link text-[15px] xl:text-[18px] font-medium transition">Nos actions</a>
            {{-- <div class="relative group">
                <a href="{{url('shop')}}" class="nav-link text-[16px] xl:text-[20px] font-medium transition inline-flex items-center gap-2">
                    Nos actions <i class="fas fa-chevron-down text-xs"></i>
                </a>
                <div class="nav-dropdown absolute left-0 mt-3 min-w-[220px] rounded-2xl p-2 shadow-xl opacity-0 translate-y-2 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition">
                    <a href="{{url('shop')}}" class="nav-dropdown-link">Boutique</a>
                    <a href="{{url('publication')}}" class="nav-dropdown-link">Publications</a>
                </div>
            </div> --}}
            <a href="{{url('contact')}}" class="nav-link text-[15px] xl:text-[18px] font-medium transition">Contact</a>
        </nav>

        <!-- CTA Buttons -->
        <div class="hidden lg:flex items-center gap-2 xl:gap-3">
            {{-- <a target="_blank" href="https://wa.me/92405748/" class="cta-link flex items-center justify-center px-6 py-2 rounded-full border hover:bg-white/30 transition text-[16px] md:text-[18px]">
                WhatsApp
            </a> --}}
            <a target="_blank" rel="noopener" href="https://solsizer-app.ewaregroup.org" class="bg-secondary text-white flex items-center justify-center gap-2 px-4 xl:px-5 py-2 rounded-full border border-transparent transition hover:scale-105 shadow-md text-[13px] xl:text-[16px] font-medium whitespace-nowrap">
                <i class="fa fa-power-off text-base xl:text-lg"></i>
                <span>Solsizer</span>
            </a>
            <a target="_blank" rel="noopener" href="https://eimatafrica.com" class="bg-primary text-white flex items-center justify-center gap-2 px-4 xl:px-5 py-2 rounded-full border border-transparent transition hover:scale-105 shadow-md text-[13px] xl:text-[16px] font-medium whitespace-nowrap">
                <i class="fa fa-power-off text-base xl:text-lg"></i>
                <span>EIMAT</span>
            </a>
            <a target="_blank" rel="noopener" href="https://eware-mobility.ewaregroup.org/" class="bg-dark text-white flex items-center justify-center gap-2 px-4 xl:px-5 py-2 rounded-full border border-white/20 transition hover:scale-105 shadow-md text-[13px] xl:text-[16px] font-medium whitespace-nowrap">
                <i class="fa-solid fa-car text-base xl:text-lg"></i>
                <span>ewareMobility</span>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="lg:hidden flex items-center">
            <button
                id="mobile-menu-togglebtn"
                class="text-black hover:text-primary focus:outline-none"
            >
                <i class="fas fa-bars text-3xl"></i>
            </button>

            <!-- Mobile Menu Dropdown -->
            <div
                id="mobile-menu-dropdown"
                class="hidden absolute top-full left-0 right-0 mt-4 backdrop-blur-lg rounded-2xl shadow-xl border p-6 flex flex-col space-y-4 mobile-menu-panel"
                style="display: none;"
            >
                <a href="{{url('/')}}" class="mobile-menu-link text-xl">Accueil</a>
                <a href="{{url('filiales')}}" class="mobile-menu-link text-xl">Filiales</a>
                <a href="{{url('services')}}" class="mobile-menu-link text-xl">Nos solutions</a>
                <a href="{{url('shop')}}" class="mobile-menu-link text-xl">Nos actions</a>
                <a href="{{url('publication')}}" class="mobile-menu-link text-xl">Publications</a>
                <a href="{{url('contact')}}" class="mobile-menu-link text-xl">Contact</a>
                <a target="_blank" href="https://wa.me/92405748/" class="mobile-menu-link text-xl flex items-center"><i class="fa-brands fa-whatsapp mr-2 text-green-500"></i> WhatsApp</a>
                <div class="pt-3 border-t border-black/10 dark:border-white/10 flex flex-col gap-2">
                    <a target="_blank" rel="noopener" href="https://solsizer-app.ewaregroup.org" class="bg-secondary text-white flex items-center justify-center gap-2 px-4 py-2.5 rounded-full text-base font-medium shadow-md">
                        <i class="fa fa-power-off"></i> Solsizer
                    </a>
                    <a target="_blank" rel="noopener" href="https://eimatafrica.com" class="bg-primary text-white flex items-center justify-center gap-2 px-4 py-2.5 rounded-full text-base font-medium shadow-md">
                        <i class="fa fa-power-off"></i> EIMAT
                    </a>
                    <a target="_blank" rel="noopener" href="https://eware-mobility.ewaregroup.org/" class="bg-dark text-white flex items-center justify-center gap-2 px-4 py-2.5 rounded-full text-base font-medium shadow-md">
                        <i class="fa-solid fa-car"></i> ewareMobility
                    </a>
                </div>
                <button
                    @click="theme = theme === 'dark' ? 'light' : 'dark'"
                    class="theme-toggle rounded-xl px-4 py-3 flex items-center justify-between text-base font-medium"
                    aria-label="Basculer le theme"
                >
                    <span x-text="theme === 'dark' ? 'Mode clair' : 'Mode sombre'"></span>
                    <i class="fa-solid fa-moon" x-show="theme === 'light'" x-cloak></i>
                    <i class="fa-solid fa-sun" x-show="theme === 'dark'" x-cloak></i>
                </button>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('mobile-menu-togglebtn');
        const dropdown = document.getElementById('mobile-menu-dropdown');

        if(toggleBtn && dropdown) {
            toggleBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                if (dropdown.style.display === 'none' || dropdown.classList.contains('hidden')) {
                    dropdown.style.display = 'flex';
                    dropdown.classList.remove('hidden');
                } else {
                    dropdown.style.display = 'none';
                    dropdown.classList.add('hidden');
                }
            });

            document.addEventListener('click', function(e) {
                if (!dropdown.contains(e.target) && e.target !== toggleBtn) {
                    dropdown.style.display = 'none';
                    dropdown.classList.add('hidden');
                }
            });
        }
    });
</script>
<!-- End-header-Menu-->


@yield('content')


<!--==================================================-->
<!-- Start-Footer-section-->
<!--==================================================-->
<footer class="relative theme-footer pt-20 pb-12 z-10 w-full overflow-hidden">
    <div class="absolute -top-40 right-0 w-[420px] h-[420px] bg-secondary/15 rounded-full blur-[140px] pointer-events-none" aria-hidden="true"></div>
    <div class="absolute -bottom-48 -left-24 w-[520px] h-[520px] bg-primary/20 rounded-full blur-[160px] pointer-events-none" aria-hidden="true"></div>

    <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-start">
            <div class="lg:col-span-3 reveal-on-scroll">
                <h4 class="footer-label text-[12px] tracking-[0.3em] uppercase">Quick links</h4>
                <ul class="mt-6 space-y-3">
                    <li><a href="{{url('/')}}" class="footer-link text-[16px] transition">Accueil</a></li>
                    <li><a href="{{url('apropos')}}" class="footer-link text-[16px] transition">A propos</a></li>
                    <li><a href="{{url('services')}}" class="footer-link text-[16px] transition">Services</a></li>
                    <li><a href="{{url('shop')}}" class="footer-link text-[16px] transition">Boutique</a></li>
                    <li><a href="{{url('publication')}}" class="footer-link text-[16px] transition">Publications</a></li>
                    <li><a href="{{url('contact')}}" class="footer-link text-[16px] transition">Contact</a></li>
                </ul>
            </div>

            <div class="lg:col-span-4 reveal-on-scroll reveal-delay-1">
                <h4 class="footer-label text-[12px] tracking-[0.3em] uppercase">Contact</h4>
                <ul class="mt-6 space-y-5">
                    <li class="flex items-start gap-4">
                        <div class="footer-icon w-[46px] h-[46px] rounded-full flex shrink-0 items-center justify-center">
                            <i class="fas fa-map-marker-alt text-lg"></i>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h5 class="text-[16px] font-semibold m-0 p-0 leading-none">Adresse</h5>
                            <p class="footer-muted text-[14px] leading-snug">13 BP 93, Derriere le GEG Baguida centre</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="footer-icon w-[46px] h-[46px] rounded-full flex shrink-0 items-center justify-center">
                            <i class="fas fa-envelope text-lg"></i>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h5 class="text-[16px] font-semibold m-0 p-0 leading-none">Email</h5>
                            <a href="mailto:info@ewaregroup.org" class="footer-link footer-muted text-[14px] transition">info@ewaregroup.org</a>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="footer-icon w-[46px] h-[46px] rounded-full flex shrink-0 items-center justify-center">
                            <i class="fas fa-phone text-lg"></i>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h5 class="text-[16px] font-semibold m-0 p-0 leading-none">Telephone</h5>
                            <a href="tel:+22892405748" class="footer-link footer-muted text-[14px] transition">+228 92 40 57 48</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="lg:col-span-5 reveal-on-scroll reveal-delay-2">
                <div class="footer-card rounded-3xl p-8 sm:p-10 shadow-[0_18px_45px_rgba(0,0,0,0.25)] backdrop-blur-sm">
                    <h4 class="footer-title text-[22px] font-semibold">S'inscrire maintenant</h4>
                    <p class="footer-muted text-[15px] mt-3 max-w-md">Recevez nos actualites et opportunites directement par email.</p>

                    <form method="POST" class="mt-6 flex flex-col gap-4">
                        @csrf
                        <div class="relative w-full">
                            <input type="email" name="email" placeholder="Votre email" class="footer-input w-full rounded-[14px] px-5 py-4 text-[15px] focus:outline-none focus:ring-4 focus:ring-primary/40 border-none shadow-sm placeholder-gray-500" required>
                        </div>
                        <button type="submit" class="w-full sm:w-auto bg-primary hover:bg-green-800 text-white font-semibold text-[15px] rounded-[14px] px-6 py-4 transition shadow-lg">
                            S'inscrire
                        </button>
                        @error('email')
                            <p class="text-red-200 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-16 pt-6 border-t footer-divider text-center reveal-on-scroll reveal-delay-3">
            <p class="footer-muted text-sm">&copy; {{ date('Y') }} <a href="{{url('/')}}" class="footer-link transition font-medium">Eware Group</a>. Tous droits reserves.</p>
        </div>
    </div>

    <style>
        .theme-footer {
            background: var(--footer-bg);
            color: var(--footer-text);
            transition: background 250ms ease, color 250ms ease;
        }

        .footer-label {
            color: var(--footer-muted);
        }

        .footer-muted {
            color: var(--footer-muted);
        }

        .footer-link {
            color: var(--footer-muted);
        }

        .footer-link:hover {
            color: #f38c2d;
        }

        .footer-icon {
            background: rgba(0, 0, 0, 0.06);
            border: 1px solid rgba(0, 0, 0, 0.08);
        }

        :root[data-theme="dark"] .footer-icon {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.12);
        }

        .footer-card {
            background: var(--footer-card-bg);
            border: 1px solid var(--footer-card-border);
        }

        .footer-input {
            background: #ffffff;
            color: #0b0b0b;
        }

        :root[data-theme="dark"] .footer-input {
            background: rgba(255, 255, 255, 0.95);
            color: #0b0b0b;
        }

        .footer-divider {
            border-color: var(--footer-card-border);
        }

    </style>
</footer>
<!--==================================================-->
<!-- End-Footer-section-->
<!--==================================================-->
        <!--==================================================-->
        <!-- Start Search Popup Section -->
        <!--==================================================-->
        <div class="search-popup">
            <button class="close-search style-two"><span class="flaticon-multiply"><i class="far fa-times-circle"></i></span></button>
            <button class="close-search"><i class="bi bi-arrow-up"></i></button>
            <form method="post" action="#">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
        <!--==================================================-->
        <!-- Start Search Popup Section -->
        <!--==================================================-->

        <!--==================================================-->
        <!-- Start scrollup section Section -->
        <!--==================================================-->
        <div class="fixed bottom-6 right-6 z-50 flex flex-col items-end gap-3">
            <div class="flex items-center gap-3">
                <a target="_blank" href="https://wa.me/92405748/" class="flex h-14 w-14 items-center justify-center rounded-full bg-primary text-white shadow-lg hover:bg-green-800 hover:scale-110 transition duration-300">
                    <i class="fa-brands fa-whatsapp text-3xl"></i>
                </a>
                <button
                    @click="theme = theme === 'dark' ? 'light' : 'dark'"
                    class="theme-toggle rounded-full h-14 w-14 flex items-center justify-center hover:scale-110 shadow-lg transition duration-300"
                    aria-label="Basculer le theme"
                >
                    <i class="fa-solid fa-moon text-lg md:text-xl" x-show="theme === 'light'" x-cloak></i>
                    <i class="fa-solid fa-sun text-lg md:text-xl" x-show="theme === 'dark'" x-cloak></i>
                </button>
            </div>
            {{-- <div class="flex flex-wrap items-center justify-end gap-2">
                <a href="{{url('menusolsizer')}}" class="bg-secondary text-white flex items-center justify-center gap-2 px-4 py-2 rounded-full shadow-md text-sm md:text-base transition hover:scale-105">
                    <i class="fa fa-power-off text-base"></i>
                    <span>Solsizer</span>
                </a>
                <a target="_blank" rel="noopener" href="https://eimatafrica.com" class="bg-primary text-white flex items-center justify-center px-4 py-2 rounded-full shadow-md text-sm md:text-base transition hover:scale-105">
                    EIMAT
                </a>
            </div> --}}
        </div>
        <!--==================================================-->
        <!-- Start scrollup section Section -->
        <!--==================================================-->

        <!-- jquery js -->
        <script src="{{asset('assets/js/vendor/jquery-3.6.2.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- carousel js -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- counterup js -->
        <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
        <!-- waypoints js -->
        <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('assets/js/wow.js')}}"></script>
        <!-- imagesloaded js -->
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <!-- venobox js -->
        <script src="{{asset('venobox/venobox.js')}}"></script>
        <!--  animated-text js -->
        <script src="{{asset('assets/js/animated-text.js')}}"></script>
        <!-- venobox min js -->
        <script src="{{asset('venobox/venobox.min.js')}}"></script>
        <!-- isotope js -->
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/js/ajax-mail.js')}}"></script>
        <!-- jquery meanmenu js -->
        <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
        <!-- jquery scrollup js -->
        <script src="{{asset('assets/js/jquery.scrollUp.js')}}"></script>
        <!-- theme js -->
        <script src="{{asset('assets/js/theme.js')}}"></script>
        <!-- jquery.barfiller js -->
        <script src="{{asset('assets/js/jquery.barfiller.js')}}"></script>
        <!-- progresscircle js -->
        <script src="{{asset('assets/js/progresscircle.js')}}"></script>
        <!-- javascript power -->
        <script src="{{asset('assets/js/power.js')}}"></script>

</body>

</html>
