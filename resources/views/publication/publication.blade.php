@extends('layout.base')
@section('content')

    <!--==================================================-->
    <!-- Start-Publication-Hero -->
    <!--==================================================-->
    <section class="publication-hero relative w-full overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{url('assets/images/publication/blogs2.jpeg')}}" alt="Publications" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 publication-hero-overlay"></div>
        </div>

        <div class="relative z-10 w-full max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16 py-20 lg:py-28">
            <div class="publication-hero-panel max-w-[720px]">
                <p class="publication-kicker text-[12px] tracking-[0.32em] uppercase">Nos actions</p>
                <h1 class="publication-hero-title text-[32px] sm:text-[46px] lg:text-[56px] font-bold leading-tight mt-4">
                    Publications et retours d'experience
                </h1>
                <p class="publication-hero-text text-[16px] sm:text-[20px] leading-[1.7] mt-6">
                    Analyses, projets terrain et partage d'expertise sur les solutions energetiques en Afrique.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{url('contact')}}" class="inline-flex items-center justify-center px-6 py-3 rounded-[14px] bg-primary text-white font-semibold hover:bg-green-800 transition shadow-lg">
                        Proposer une collaboration
                    </a>
                    <a href="{{url('shop')}}" class="inline-flex items-center justify-center px-6 py-3 rounded-[14px] border border-white/40 text-white hover:bg-white/10 transition">
                        Voir nos actions
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Publication-Hero -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-Publication-Featured -->
    <!--==================================================-->
    <section class="publication-shell py-20 lg:py-28">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="flex flex-col lg:flex-row items-start justify-between gap-8">
                <div class="max-w-[640px]">
                    <p class="publication-kicker text-[12px] tracking-[0.32em] uppercase">A la une</p>
                    <h2 class="publication-title text-[28px] sm:text-[38px] lg:text-[44px] font-semibold mt-4">
                        Projet Methanisation
                    </h2>
                    <p class="publication-muted text-[16px] sm:text-[18px] leading-[1.7] mt-5">
                        Visite terrain et analyse de la station de traitement des eaux usees a Lome. Un projet cle dans la valorisation energetique et la reduction des emissions.
                    </p>
                    <div class="mt-6 flex flex-wrap items-center gap-3 text-sm">
                        <span class="publication-tag">22 Sept 2023</span>
                        <span class="publication-tag">Alexandra Morel</span>
                    </div>
                    <a href="https://www.linkedin.com/posts/alexandra-morel-4b81ba197_dans-le-cadre-de-mon-stage-chez-eware-group-ugcPost-7110940352252915712-zQTd?utm_source=share&utm_medium=member_desktop" target="_blank" class="inline-flex items-center gap-2 mt-8 text-primary font-semibold">
                        Lire sur LinkedIn <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="publication-featured-image reveal-on-scroll">
                    <img src="{{url('assets/images/publication/blogs2.jpeg')}}" alt="Projet Methanisation" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Publication-Featured -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-Publication-Grid -->
    <!--==================================================-->
    <section class="publication-shell pb-20 lg:pb-28">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <article class="publication-card reveal-on-scroll">
                    <div class="publication-card-image">
                        <img src="{{url('assets/images/publication/blog1.jpeg')}}" alt="Qualite et rentabilite" class="w-full h-full object-cover">
                    </div>
                    <div class="publication-card-body">
                        <p class="publication-meta">3 Mars 2024 | EWARE Group</p>
                        <h3 class="publication-card-title">Qualite, cout et rentabilite d'un systeme solaire</h3>
                        <p class="publication-card-text">
                            Pourquoi la qualite d'installation et des composants change la durabilite, la performance et la securite d'un systeme solaire.
                        </p>
                        <ul class="publication-bullets">
                            <li><i class="bi bi-check2"></i> Mauvaise qualite = depenses recurrentes</li>
                            <li><i class="bi bi-check2"></i> Risque de panne et d'incendie</li>
                            <li><i class="bi bi-check2"></i> Besoin d'un controle independant</li>
                        </ul>
                        <a href="https://www.linkedin.com/posts/eware-group-electrical-work-and-renewable-energy-group_doit-on-juste-acheter-un-syst%C3%A8me-solaire-activity-7170099787684397058-USa6?utm_source=share&utm_medium=member_desktop" target="_blank" class="publication-link">
                            Lire l'article <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="publication-card reveal-on-scroll reveal-delay-1">
                    <div class="publication-card-image">
                        <img src="{{url('assets/images/publication/blog.jpeg')}}" alt="La Nuit du Droit" class="w-full h-full object-cover">
                    </div>
                    <div class="publication-card-body">
                        <p class="publication-meta">23 Nov 2024 | EWARE Group</p>
                        <h3 class="publication-card-title">La Nuit du Droit</h3>
                        <p class="publication-card-text">
                            Participation a un evenement strategique sur les enjeux juridiques, financiers et environnementaux de la transition energetique.
                        </p>
                        <a href="https://www.linkedin.com/posts/alexandra-morel-4b81ba197_dans-le-cadre-de-mon-stage-chez-eware-group-ugcPost-7110940352252915712-zQTd?utm_source=share&utm_medium=member_desktop" target="_blank" class="publication-link">
                            Lire l'article <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Publication-Grid -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-Publication-CTA -->
    <!--==================================================-->
    <section class="publication-cta py-16 lg:py-20">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="publication-cta-card reveal-on-scroll">
                <div>
                    <h3 class="text-[24px] sm:text-[30px] font-semibold">Vous avez une action a valoriser ?</h3>
                    <p class="publication-cta-text text-[15px] sm:text-[17px] mt-3">Nous pouvons documenter vos projets et partager les resultats avec votre reseau.</p>
                </div>
                <a href="{{url('contact')}}" class="inline-flex items-center justify-center px-6 py-3 rounded-[14px] bg-white text-black font-semibold hover:scale-105 transition shadow-lg">
                    Publier avec nous
                </a>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Publication-CTA -->
    <!--==================================================-->

    <style>
        .publication-hero {
            color: #ffffff;
        }

        .publication-hero-overlay {
            background: linear-gradient(120deg, rgba(6, 12, 9, 0.8), rgba(6, 12, 9, 0.55) 45%, rgba(6, 12, 9, 0.85));
        }

        .publication-hero-panel {
            background: rgba(6, 12, 9, 0.55);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 26px;
            padding: 26px 28px;
            backdrop-filter: blur(6px);
            box-shadow: 0 24px 60px rgba(0, 0, 0, 0.35);
        }

        .publication-hero-title,
        .publication-hero-text {
            color: #ffffff;
        }

        .publication-hero .publication-kicker {
            color: rgba(255, 255, 255, 0.78);
        }

        .publication-shell {
            background: var(--page-bg);
            color: var(--page-text);
        }

        .publication-kicker {
            color: var(--page-muted);
        }

        .publication-title,
        .publication-card-title {
            color: var(--page-text);
        }

        .publication-muted,
        .publication-card-text {
            color: var(--page-muted);
        }

        .publication-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 12px;
            border-radius: 999px;
            background: rgba(12, 124, 52, 0.12);
            color: #0c7c34;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .publication-featured-image {
            width: 100%;
            max-width: 540px;
            border-radius: 26px;
            overflow: hidden;
            box-shadow: 0 22px 45px rgba(0, 0, 0, 0.18);
        }

        .publication-card {
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        .publication-card-image {
            height: 220px;
            overflow: hidden;
        }

        .publication-card-body {
            padding: 20px 22px 24px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .publication-meta {
            font-size: 12px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--page-muted);
            margin: 0;
        }

        .publication-card-title {
            font-size: 20px;
            font-weight: 700;
            margin: 0;
        }

        .publication-card-text {
            font-size: 15px;
            line-height: 1.7;
            margin: 0;
        }

        .publication-bullets {
            margin: 0;
            padding-left: 0;
            list-style: none;
            display: grid;
            gap: 6px;
            color: var(--page-muted);
            font-size: 14px;
        }

        .publication-bullets li {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .publication-bullets i {
            color: #0c7c34;
        }

        .publication-link {
            color: #0c7c34;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .publication-cta {
            background: var(--page-bg);
        }

                .publication-cta-card {
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: flex-start;
            justify-content: space-between;
            padding: 28px 32px;
            border-radius: 24px;
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.12);
            position: relative;
            overflow: hidden;
        }

        .publication-cta-card::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 6px;
            height: 100%;
            background: linear-gradient(180deg, #0c7c34, #f38c2d);
        }

        .publication-cta-card h3 {
            color: var(--page-text);
        }

                .publication-cta-text {
            color: var(--page-muted);
        }

        @media (min-width: 768px) {
            .publication-cta-card {
                flex-direction: row;
                align-items: center;
            }
        }
    </style>
@endsection
