@extends('layout.base')
@section('content')

    <!--==================================================-->
    <!-- Start-Hero-section-->
    <!--==================================================-->
    <div class="relative w-full min-h-[840px] overflow-hidden flex items-center justify-start flex-col pt-32 sm:pt-24 hero-section">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{url('assets/images/accueil/head.jpg')}}" alt="Background" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 hero-overlay"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 w-full max-w-[1728px] mx-auto px-6 sm:px-10 mb-8 lg:px-44">
            <div class="max-w-[626px] flex flex-col items-start gap-8 mt-10 text-left">
                <!-- Welcom Pill -->
                <div class="hero-pill inline-flex items-center gap-4 px-6 py-2 rounded-full backdrop-blur-[2px]">
                    <span class="w-[15px] h-[15px] bg-secondary rounded-full"></span>
                    <span class="text-white text-[25px] font-normal leading-none pt-1">Bienvenue</span>
                </div>

                <h1 class="hero-text text-[40px] sm:text-[55px] font-bold leading-tight m-0">
                    Optimisez votre performance <br/>énergétique et industrielle
                </h1>

                <p class="hero-text text-[20px] sm:text-[25px] font-normal m-0">
                    Des solutions intégrées pour réduire vos coûts opérationnels et votre empreinte carbone.
                </p>

                <a href="{{url('shop')}}" class="inline-flex justify-center items-center px-10 py-3.5 bg-primary hover:bg-[#0A6B2D] hover:shadow-[0_8px_30px_rgb(12,124,52,0.4)] rounded-[12px] hover:scale-105 transition-all duration-300 shadow-lg mt-4 w-fit group">
                    <span class="text-white text-[18px] sm:text-[22px] font-bold">Nos solutions</span>
                    <i class="fas fa-arrow-right ml-3 text-white transition-transform duration-300 group-hover:translate-x-2"></i>
                </a>
            </div>
        </div>

        <!-- SVG Bottom Curve -->
        <div class="absolute bottom-0 left-0 w-full z-10 leading-none">
            <img x-show="theme !== 'dark'" x-cloak src="{{url('assets/images/svg/header.svg')}}" alt="Curve" class="w-full h-auto object-cover">
            <img x-show="theme === 'dark'" x-cloak src="{{url('assets/images/svg/header_dark.svg')}}" alt="Curve" class="w-full h-auto object-cover">
        </div>
    </div>
    <!--==================================================-->
    <!-- End-Hero-section-->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start-feature-section-->
    <!--==================================================-->
    <div class="relative z-20 w-full max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16 -mt-32 md:-mt-16 pb-20">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 md:gap-20 place-items-center">

            <!-- Feature 1 -->
            <div class="feature-card w-full max-w-[462px] min-h-[206px] rounded-[20px] p-[25px] pt-4 shadow-[0_16px_15px_rgba(12,124,52,0.25)] flex flex-col gap-[10px] hover:-translate-y-2 transition duration-300 reveal-on-scroll">
                <div class="w-full flex justify-between items-center mb-1">
                    <div class="w-[55px] h-[55px] bg-primary rounded-[10px] flex items-center justify-center text-white text-[25px] font-bold">
                        1
                    </div>
                    <div class="w-[60px] h-[60px] rounded-full border-[5px] border-primary flex items-center justify-center bg-transparent">
                        <img src="{{url('assets/images/accueil/about-icon2.png')}}" alt="icon" class="w-[35px] h-[35px] object-contain">
                    </div>
                </div>
                <h3 class="feature-title text-[25px] font-normal m-0 leading-tight">INGÉNIERIE INTÉGRÉE</h3>
                <p class="feature-text text-[14px] font-light leading-snug m-0 max-w-[412px]">Conception, fourniture et installation de solutions solaires, réseaux HT/BT et équipements industriels adaptés à vos besoins.</p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card w-full max-w-[462px] min-h-[206px] rounded-[20px] p-[25px] pt-4 shadow-[0_16px_15px_rgba(243,140,45,0.25)] flex flex-col gap-[10px] hover:-translate-y-2 transition duration-300 reveal-on-scroll reveal-delay-1">
                <div class="w-full flex justify-between items-center mb-1">
                    <div class="w-[55px] h-[55px] bg-secondary rounded-[10px] flex items-center justify-center text-white text-[25px] font-bold">
                        2
                    </div>
                    <div class="w-[60px] h-[60px] rounded-full border-[5px] border-secondary flex items-center justify-center bg-transparent">
                        <img src="{{url('assets/images/accueil/about-icon1.png')}}" alt="icon" class="w-[35px] h-[35px] object-contain">
                    </div>
                </div>
                <h3 class="feature-title text-[25px] font-normal m-0 leading-tight">IMPACT DURABLE</h3>
                <p class="feature-text text-[14px] font-light leading-snug m-0 max-w-[412px]">Efficacité énergétique optimale, réduction des coûts opérationnels et de l'empreinte carbone.</p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card w-full max-w-[462px] min-h-[206px] rounded-[20px] p-[25px] pt-4 shadow-[0_16px_15px_rgba(12,124,52,0.25)] flex flex-col gap-[10px] hover:-translate-y-2 transition duration-300 reveal-on-scroll reveal-delay-2">
                <div class="w-full flex justify-between items-center mb-1">
                    <div class="w-[55px] h-[55px] bg-primary rounded-[10px] flex items-center justify-center text-white text-[25px] font-bold">
                        3
                    </div>
                    <div class="w-[60px] h-[60px] rounded-full border-[5px] border-primary flex items-center justify-center bg-transparent">
                        <img src="{{url('assets/images/accueil/faeture-icon2.png')}}" alt="icon" class="w-[35px] h-[35px] object-contain">
                    </div>
                </div>
                <h3 class="feature-title text-[25px] font-normal m-0 leading-tight">ACCOMPAGNEMENT COMPLET</h3>
                <p class="feature-text text-[14px] font-light leading-snug m-0 max-w-[412px]">Conseil, audit, réalisation, maintenance et suivi: un partenaire unique sur tout le cycle de vie.</p>
            </div>

        </div>
    </div>
    <!--==================================================-->
    <!-- End-feature-section-->
    <!--==================================================-->
    <style>
        .hero-overlay {
            background: var(--hero-overlay);
        }

        .hero-pill {
            background: var(--hero-pill-bg);
            border: 1px solid var(--hero-pill-border);
        }

        .hero-text {
            color: #ffffff;
        }

        .feature-card {
            background: var(--feature-card-bg);
            border: 1px solid var(--feature-card-border);
        }

        .feature-title {
            color: var(--feature-title);
        }

        .feature-text {
            color: var(--feature-text);
        }
    </style>

    <!--==================================================-->
    <!-- Start-About (Modern Highlights) -->
    <!--==================================================-->
    <section class="relative w-full z-10 about-section overflow-hidden">
        <div class="absolute -top-32 -right-40 w-[420px] h-[420px] bg-primary/15 rounded-full blur-[120px] pointer-events-none" aria-hidden="true"></div>
        <div class="absolute -bottom-40 -left-40 w-[520px] h-[520px] bg-secondary/15 rounded-full blur-[140px] pointer-events-none" aria-hidden="true"></div>

        <div class="relative z-10 w-full max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16 py-24 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                <div class="lg:col-span-5">
                    <p class="about-label text-[13px] tracking-[0.28em] uppercase mb-4">Notre différence</p>
                    <h2 class="about-headline text-[34px] sm:text-[44px] lg:text-[52px] font-bold leading-tight">
                        Une approche complète pour vos infrastructures énergétiques et industrielles
                    </h2>
                    <p class="about-muted text-[16px] sm:text-[18px] leading-[1.7] mt-6 max-w-[520px]">
                        Nous combinons expertise technique, innovation et exécution terrain pour livrer des résultats fiables et mesurables.
                    </p>
                    <div class="mt-10 flex flex-wrap gap-4">
                        <div class="bg-white rounded-2xl border border-black/5 px-5 py-4 shadow-[0_10px_30px_rgba(0,0,0,0.06)]">
                            <p class="text-[22px] font-bold text-black leading-none">7</p>
                            <p class="text-[12px] uppercase tracking-widest text-black/50 mt-2">Domaines d'intervention</p>
                        </div>
                        <div class="bg-white rounded-2xl border border-black/5 px-5 py-4 shadow-[0_10px_30px_rgba(0,0,0,0.06)]">
                            <p class="text-[22px] font-bold text-black leading-none">5</p>
                            <p class="text-[12px] uppercase tracking-widest text-black/50 mt-2">Services clés</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <div class="grid gap-6">
                        <article class="about-card reveal-on-scroll">
                            <div class="about-index">01</div>
                            <div class="about-content">
                                <h3 class="about-title">Partenaire Stratégique</h3>
                                <p class="about-text">
                                    Nous allions expertise énergétique et industrielle pour concevoir des solutions adaptées à vos contraintes d’exploitation, avec un objectif clair : améliorer votre compétitivité.
                                </p>
                                <span class="about-pill">Stratégie & performance</span>
                            </div>
                        </article>

                        <article class="about-card reveal-on-scroll reveal-delay-1">
                            <div class="about-index">02</div>
                            <div class="about-content">
                                <h3 class="about-title">Expertise multi-métiers</h3>
                                <p class="about-text">
                                    Solaire, réseaux HT/BT, mobilité électrique, froid & climatisation, IT/télécoms, maintenance mécanique: une équipe unique pour coordonner vos projets.
                                </p>
                                <span class="about-pill">Ingénierie terrain</span>
                            </div>
                        </article>

                        <article class="about-card reveal-on-scroll reveal-delay-2">
                            <div class="about-index">03</div>
                            <div class="about-content">
                                <h3 class="about-title">Cycle de Vie Complet</h3>
                                <p class="about-text">
                                    Audit et conseil énergétique, développement, exécution, fourniture de matériels, et service après-vente : nous restons à vos côtés pour garantir l'optimisation continue.
                                </p>
                                <span class="about-pill">Suivi & maintenance</span>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .about-section {
                background: var(--page-bg);
                color: var(--page-text);
                transition: background 250ms ease, color 250ms ease;
            }

            .about-label,
            .about-muted {
                color: var(--page-muted);
            }

            .about-headline {
                color: var(--page-text);
            }

            .about-card {
                position: relative;
                display: grid;
                grid-template-columns: auto 1fr;
                gap: 20px;
                padding: 28px;
                border-radius: 24px;
                background: var(--about-card-bg);
                border: 1px solid var(--about-card-border);
                box-shadow: 0 18px 45px rgba(0, 0, 0, 0.08);
                transition: transform 260ms ease, box-shadow 260ms ease, border-color 260ms ease;
            }

            .about-card::before {
                content: "";
                position: absolute;
                inset: 0;
                border-radius: 24px;
                padding: 1px;
                background: linear-gradient(120deg, rgba(12, 124, 52, 0.35), rgba(243, 140, 45, 0.35), rgba(12, 124, 52, 0.15));
                -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
                -webkit-mask-composite: xor;
                mask-composite: exclude;
                pointer-events: none;
            }

            .about-card:hover {
                transform: translateY(-6px);
                box-shadow: 0 26px 60px rgba(0, 0, 0, 0.12);
                border-color: rgba(0, 0, 0, 0.12);
            }

            .about-index {
                min-width: 58px;
                height: 58px;
                border-radius: 16px;
                display: grid;
                place-items: center;
                font-weight: 700;
                font-size: 18px;
                color: #0c7c34;
                background: rgba(12, 124, 52, 0.12);
            }

            .about-title {
                font-size: 22px;
                font-weight: 700;
                color: var(--page-text);
                margin: 0 0 10px 0;
            }

            .about-text {
                font-size: 16px;
                line-height: 1.7;
                color: var(--page-muted);
                margin: 0;
            }

            .about-pill {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                margin-top: 18px;
                padding: 6px 14px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: 0.12em;
                text-transform: uppercase;
                border-radius: 999px;
                color: #0c7c34;
                background: rgba(12, 124, 52, 0.12);
            }

            @media (max-width: 1024px) {
                .about-card {
                    grid-template-columns: 1fr;
                }

                .about-index {
                    width: 58px;
                }
            }
        </style>
    </section>
    <!--==================================================-->
    <!-- End-About-->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start-Team-section-->
    <!--==================================================-->
    <section class="relative w-full py-24 lg:py-32 partner-section overflow-hidden">
        <div class="absolute -top-32 right-0 w-[420px] h-[420px] bg-secondary/20 rounded-full blur-[140px] pointer-events-none" aria-hidden="true"></div>
        <div class="absolute -bottom-40 -left-20 w-[520px] h-[520px] bg-primary/20 rounded-full blur-[160px] pointer-events-none" aria-hidden="true"></div>

        <div class="relative z-10 w-full max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="max-w-[820px]">
                <p class="partner-label text-[12px] tracking-[0.32em] uppercase">Partenaires</p>
                <h2 class="partner-title text-[32px] sm:text-[42px] lg:text-[48px] font-semibold mt-4">Ils nous font confiance</h2>
                <p class="partner-text text-[16px] sm:text-[18px] leading-[1.7] mt-6">
                    Des institutions publiques aux acteurs privés, nos partenaires nous accompagnent pour déployer des solutions fiables et durables.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="partner-card reveal-on-scroll">
                    <img src="{{url('assets/images/logo/logo-part3.png')}}" alt="Partner" class="partner-logo">
                </div>
                <div class="partner-card reveal-on-scroll reveal-delay-1">
                    <img src="{{url('assets/images/logo/accessmali_logo2.png')}}" alt="Partner" class="partner-logo">
                </div>
                <div class="partner-card reveal-on-scroll reveal-delay-2">
                    <img src="{{url('assets/images/logo/egnon_consulting_logo2.png')}}" alt="Partner" class="partner-logo">
                </div>
                <div class="partner-card reveal-on-scroll reveal-delay-3">
                    <img src="{{url('assets/images/logo/logo-part6.png')}}" alt="Partner" class="partner-logo">
                </div>
            </div>
        </div>

        <style>
            .partner-section {
                background: var(--partner-bg);
                color: var(--partner-text);
                transition: background 250ms ease, color 250ms ease;
            }

            .partner-label,
            .partner-text {
                color: var(--partner-muted);
            }

            .partner-title {
                color: var(--partner-text);
            }

            .partner-card {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 120px;
                border-radius: 22px;
                background: var(--partner-card-bg);
                border: 1px solid var(--partner-card-border);
                box-shadow: 0 18px 40px rgba(0, 0, 0, 0.18);
                backdrop-filter: blur(8px);
                transition: transform 250ms ease, background 250ms ease, border-color 250ms ease;
            }

            .partner-card:hover {
                transform: translateY(-6px);
                background: rgba(255, 255, 255, 0.12);
                border-color: rgba(255, 255, 255, 0.25);
            }

            .partner-logo {
                max-height: 70px;
                width: auto;
                filter: grayscale(1) brightness(0.95);
                transition: filter 250ms ease, transform 250ms ease;
            }

            .partner-card:hover .partner-logo {
                filter: grayscale(0) brightness(1);
                transform: scale(1.04);
            }

        </style>
    </section>
    <!--==================================================-->
    <!-- End-Team-section-->
    <!--==================================================-->

@endsection


