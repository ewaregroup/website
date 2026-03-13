@extends('layout.base')
@section('content')

    <!--==================================================-->
    <!-- Start-Service-Hero -->
    <!--==================================================-->
    <section class="relative w-full overflow-hidden service-hero">
        <div class="absolute inset-0">
            <img src="{{url('assets/images/accueil/img2.jpg')}}" alt="Solutions" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 hero-overlay"></div>
        </div>

        <div class="relative z-10 w-full max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16 py-24 lg:py-32">
            <div class="hero-panel max-w-[760px]">
                <p class="service-kicker text-[12px] tracking-[0.32em] uppercase">Nos solutions</p>
                <h1 class="service-hero-title text-[34px] sm:text-[48px] lg:text-[60px] font-bold leading-tight mt-4">
                    Des solutions energetiques fiables, rentables et durables
                </h1>
                <p class="service-hero-text text-[16px] sm:text-[20px] leading-[1.7] mt-6">
                    Nous accompagnons entreprises, institutions et particuliers a chaque etape, du conseil a la realisation. Notre objectif: optimiser vos performances energetiques, reduire les couts et garantir la fiabilite sur le long terme.
                </p>

                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="{{url('contact')}}" class="inline-flex items-center justify-center px-7 py-3 rounded-[14px] bg-primary text-white font-semibold hover:bg-green-800 transition shadow-lg">
                        Demander un diagnostic
                    </a>
                    <a href="{{url('shop')}}" class="inline-flex items-center justify-center px-7 py-3 rounded-[14px] border border-white/40 text-white hover:bg-white/10 transition">
                        Voir nos offres
                    </a>
                </div>

                <div class="mt-12 flex flex-wrap items-center gap-4 text-sm">
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/10">
                        <i class="fa-solid fa-bolt"></i> Optimisation energie
                    </span>
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/10">
                        <i class="fa-solid fa-leaf"></i> Solutions durables
                    </span>
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/10">
                        <i class="fa-solid fa-user-check"></i> Accompagnement expert
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Service-Hero -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-Service-Cards -->
    <!--==================================================-->
    <section class="service-shell py-20 lg:py-28">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="flex flex-col lg:flex-row items-start justify-between gap-8">
                <div class="max-w-[640px]">
                    <p class="service-kicker text-[12px] tracking-[0.32em] uppercase">Expertise</p>
                    <h2 class="service-title text-[28px] sm:text-[38px] lg:text-[44px] font-semibold mt-4">
                        Une equipe complete pour piloter vos projets
                    </h2>
                    <p class="service-muted text-[16px] sm:text-[18px] leading-[1.7] mt-5">
                        Nous combinons analyse, ingenierie et execution terrain pour livrer des solutions energiques conformes, rentables et durables.
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="service-stat">
                        <p class="service-stat-value">4+</p>
                        <p class="service-stat-label">Ans d'experience</p>
                    </div>
                    <div class="service-stat">
                        <p class="service-stat-value">10+</p>
                        <p class="service-stat-label">Projets pilotes</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                <article class="service-card reveal-on-scroll">
                    <div class="service-icon">
                        <i class="bi bi-check2"></i>
                    </div>
                    <h3 class="service-card-title">Conseil en energie</h3>
                    <p class="service-card-text">
                        Nous aidons a choisir les solutions les plus efficaces pour limiter les depenses et maximiser la performance energetique.
                    </p>
                </article>

                <article class="service-card reveal-on-scroll reveal-delay-1">
                    <div class="service-icon">
                        <i class="bi bi-check2"></i>
                    </div>
                    <h3 class="service-card-title">Audit energetique</h3>
                    <p class="service-card-text">
                        Analyse detaillee de la consommation et recommandations concretes pour reduire les factures et optimiser l'exploitation.
                    </p>
                </article>

                <article class="service-card reveal-on-scroll reveal-delay-2">
                    <div class="service-icon">
                        <i class="bi bi-check2"></i>
                    </div>
                    <h3 class="service-card-title">Developpement de projets</h3>
                    <p class="service-card-text">
                        Conception technique, dimensionnement, estimation des couts et solutions de financement adaptees a votre contexte.
                    </p>
                </article>

                <article class="service-card reveal-on-scroll">
                    <div class="service-icon">
                        <i class="bi bi-check2"></i>
                    </div>
                    <h3 class="service-card-title">Realisation et evaluation</h3>
                    <p class="service-card-text">
                        Mise en oeuvre conforme au cahier de charges, suivi qualite, mise en service et verification des performances.
                    </p>
                </article>

                <article class="service-card reveal-on-scroll reveal-delay-1">
                    <div class="service-icon">
                        <i class="bi bi-check2"></i>
                    </div>
                    <h3 class="service-card-title">Maintenance et supervision</h3>
                    <p class="service-card-text">
                        Contrats de maintenance preventive, supervision a distance et interventions rapides pour garantir la continuite.
                    </p>
                </article>

                <article class="service-card reveal-on-scroll reveal-delay-2">
                    <div class="service-icon">
                        <i class="bi bi-check2"></i>
                    </div>
                    <h3 class="service-card-title">Formation et transfert</h3>
                    <p class="service-card-text">
                        Renforcement des competences des equipes locales pour assurer l'exploitation durable des installations.
                    </p>
                </article>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Service-Cards -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-Process -->
    <!--==================================================-->
    <section class="service-process py-20 lg:py-28">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                <div class="lg:col-span-5">
                    <p class="service-kicker text-[12px] tracking-[0.32em] uppercase">Methodologie</p>
                    <h2 class="service-title text-[28px] sm:text-[38px] lg:text-[44px] font-semibold mt-4">
                        Un processus clair pour des resultats mesurables
                    </h2>
                    <p class="service-muted text-[16px] sm:text-[18px] leading-[1.7] mt-5">
                        Chaque projet suit une methode rigoureuse pour assurer qualite, performance et controle des couts.
                    </p>
                </div>
                <div class="lg:col-span-7">
                    <div class="grid gap-5">
                        <div class="process-step reveal-on-scroll">
                            <div class="process-index">01</div>
                            <div>
                                <h3 class="process-title">Diagnostic et objectifs</h3>
                                <p class="process-text">Analyse des besoins, audit et definition des objectifs de performance.</p>
                            </div>
                        </div>
                        <div class="process-step reveal-on-scroll reveal-delay-1">
                            <div class="process-index">02</div>
                            <div>
                                <h3 class="process-title">Conception et financement</h3>
                                <p class="process-text">Dimensionnement, choix technologiques et plan de financement adapte.</p>
                            </div>
                        </div>
                        <div class="process-step reveal-on-scroll reveal-delay-2">
                            <div class="process-index">03</div>
                            <div>
                                <h3 class="process-title">Execution et suivi</h3>
                                <p class="process-text">Installation, mise en service, formation et suivi de performance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Process -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start-FAQ -->
    <!--==================================================-->
    <section class="service-shell py-20 lg:py-28">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                <div class="lg:col-span-5">
                    <p class="service-kicker text-[12px] tracking-[0.32em] uppercase">FAQ</p>
                    <h2 class="service-title text-[28px] sm:text-[38px] lg:text-[44px] font-semibold mt-4">
                        Questions frequentes
                    </h2>
                    <p class="service-muted text-[16px] sm:text-[18px] leading-[1.7] mt-5">
                        Les reponses les plus utiles pour comprendre notre approche et notre facon de travailler.
                    </p>
                </div>
                <div class="lg:col-span-7">
                    <div class="grid gap-4">
                        <details class="faq-item reveal-on-scroll">
                            <summary>Quels types de projets prenez-vous en charge ?</summary>
                            <p>Projets solaires, eoliens, bornes de recharge, optimisation de consommation et mise en conformite energetique.</p>
                        </details>
                        <details class="faq-item reveal-on-scroll reveal-delay-1">
                            <summary>Proposez-vous un accompagnement financement ?</summary>
                            <p>Oui. Nous proposons plusieurs options selon votre contexte et la taille du projet.</p>
                        </details>
                        <details class="faq-item reveal-on-scroll reveal-delay-2">
                            <summary>En combien de temps peut-on demarrer ?</summary>
                            <p>Apres audit et validation technique, nous pouvons lancer la phase d'execution en quelques semaines.</p>
                        </details>
                        <details class="faq-item reveal-on-scroll">
                            <summary>Pouvez-vous assurer la maintenance ?</summary>
                            <p>Nous proposons des contrats de maintenance preventive et curative avec supervision.</p>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-FAQ -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start-Testimonials -->
    <!--==================================================-->
    <section class="service-testimonials py-20 lg:py-28">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="flex flex-col lg:flex-row items-start justify-between gap-8">
                <div class="max-w-[640px]">
                    <p class="service-kicker text-[12px] tracking-[0.32em] uppercase">Temoignages</p>
                    <h2 class="service-title text-[28px] sm:text-[38px] lg:text-[44px] font-semibold mt-4">
                        Ils parlent de nos resultats
                    </h2>
                    <p class="service-muted text-[16px] sm:text-[18px] leading-[1.7] mt-5">
                        Des projets concrets, des economies mesurables et une execution fiable.
                    </p>
                </div>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
                <article class="testimonial-card reveal-on-scroll">
                    <p class="testimonial-text">Eware Group nous a accompagne sur la conception et la mise en service. Les delais ont ete respectes et la performance est au rendez-vous.</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">MA</div>
                        <div>
                            <p class="testimonial-name">M. Afi</p>
                            <p class="testimonial-role">Directeur technique</p>
                        </div>
                    </div>
                </article>
                <article class="testimonial-card reveal-on-scroll reveal-delay-1">
                    <p class="testimonial-text\">Audit clair, recommandations precises et installation tres propre. Nous avons reduit la facture d'electricite des le premier mois.</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">JK</div>
                        <div>
                            <p class="testimonial-name">J. Kossi</p>
                            <p class="testimonial-role">Responsable exploitation</p>
                        </div>
                    </div>
                </article>
                <article class="testimonial-card reveal-on-scroll reveal-delay-2">
                    <p class="testimonial-text\">Une equipe disponible, reactive et tres professionnelle. La maintenance est structuree et les rapports sont clairs.</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">AC</div>
                        <div>
                            <p class="testimonial-name">A. Cisse</p>
                            <p class="testimonial-role">Chef de projet</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Testimonials -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-CTA -->
    <!--==================================================-->
    <section class="service-cta py-16 lg:py-20">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="service-cta-card reveal-on-scroll">
                <div>
                    <h3 class="text-[24px] sm:text-[30px] font-semibold">Pret a lancer votre projet ?</h3>
                    <p class="text-[15px] sm:text-[17px] opacity-80 mt-3">Contactez nos experts pour un plan d'action clair et rapide.</p>
                </div>
                <a href="{{url('contact')}}" class="inline-flex items-center justify-center px-6 py-3 rounded-[14px] bg-white text-black font-semibold hover:scale-105 transition shadow-lg">
                    Nous contacter
                </a>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-CTA -->
    <!--==================================================-->

    <style>
        .service-hero {
            color: #ffffff;
        }

        .service-hero .hero-overlay {
            background: linear-gradient(120deg, rgba(6, 12, 9, 0.8), rgba(6, 12, 9, 0.55) 45%, rgba(6, 12, 9, 0.85));
        }

        .hero-panel {
            background: rgba(6, 12, 9, 0.55);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 26px;
            padding: 28px 30px;
            backdrop-filter: blur(6px);
            box-shadow: 0 24px 60px rgba(0, 0, 0, 0.35);
        }

        @media (max-width: 640px) {
            .hero-panel {
                padding: 22px 20px;
            }
        }

        .service-hero-title,
        .service-hero-text {
            color: #ffffff;
        }

        .service-shell {
            background: var(--page-bg);
            color: var(--page-text);
        }

        .service-process {
            background: linear-gradient(120deg, rgba(12, 124, 52, 0.08), rgba(243, 140, 45, 0.08));
            color: var(--page-text);
        }

        :root[data-theme="dark"] .service-process {
            background: linear-gradient(120deg, rgba(12, 124, 52, 0.18), rgba(243, 140, 45, 0.14));
        }

        .service-kicker {
            color: var(--page-muted);
        }

        .service-title {
            color: var(--page-text);
        }

        .service-muted {
            color: var(--page-muted);
        }

        .service-card {
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            border-radius: 22px;
            padding: 26px;
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.08);
            transition: transform 220ms ease, box-shadow 220ms ease, border-color 220ms ease;
        }

        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 22px 50px rgba(0, 0, 0, 0.12);
        }

        .service-icon {
            width: 54px;
            height: 54px;
            border-radius: 14px;
            display: grid;
            place-items: center;
            background: rgba(12, 124, 52, 0.12);
            color: #0c7c34;
            font-size: 26px;
        }

        .service-card-title {
            margin-top: 18px;
            font-size: 20px;
            font-weight: 700;
            color: var(--page-text);
        }

        .service-card-text {
            margin-top: 10px;
            font-size: 15px;
            line-height: 1.7;
            color: var(--page-muted);
        }

        .service-stat {
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            border-radius: 16px;
            padding: 14px 18px;
            min-width: 150px;
            text-align: left;
        }

        .service-stat-value {
            font-size: 22px;
            font-weight: 700;
            color: var(--page-text);
            margin: 0;
        }

        .service-stat-label {
            font-size: 12px;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--page-muted);
            margin: 6px 0 0 0;
        }

        .process-step {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 16px;
            padding: 18px 22px;
            border-radius: 20px;
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            box-shadow: 0 14px 30px rgba(0, 0, 0, 0.08);
        }

        .process-index {
            width: 46px;
            height: 46px;
            border-radius: 12px;
            background: rgba(243, 140, 45, 0.2);
            color: #f38c2d;
            display: grid;
            place-items: center;
            font-weight: 700;
        }

        .process-title {
            font-size: 18px;
            font-weight: 700;
            margin: 0 0 6px 0;
            color: var(--page-text);
        }

        .process-text {
            margin: 0;
            font-size: 14px;
            line-height: 1.6;
            color: var(--page-muted);
        }

        .service-cta {
            background: var(--page-bg);
        }

        .service-cta-card {
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: flex-start;
            justify-content: space-between;
            padding: 28px 32px;
            border-radius: 24px;
            background: linear-gradient(120deg, rgba(12, 124, 52, 0.9), rgba(243, 140, 45, 0.85));
            color: #ffffff;
            box-shadow: 0 20px 45px rgba(12, 124, 52, 0.35);
        }

        @media (min-width: 768px) {
            .service-cta-card {
                flex-direction: row;
                align-items: center;
            }
        }

        .faq-item {
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            border-radius: 18px;
            padding: 16px 20px;
            box-shadow: 0 12px 26px rgba(0, 0, 0, 0.08);
        }

        .faq-item summary {
            cursor: pointer;
            font-weight: 600;
            color: var(--page-text);
            list-style: none;
        }

        .faq-item summary::-webkit-details-marker {
            display: none;
        }

        .faq-item summary::after {
            content: '+';
            float: right;
            color: var(--page-muted);
        }

        .faq-item[open] summary::after {
            content: '-';
        }

        .faq-item p {
            margin: 12px 0 0 0;
            color: var(--page-muted);
            line-height: 1.6;
            font-size: 14px;
        }

        .service-testimonials {
            background: var(--page-bg);
            color: var(--page-text);
        }

        .testimonial-card {
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            border-radius: 22px;
            padding: 24px;
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.1);
        }

        .testimonial-text {
            color: var(--page-muted);
            font-size: 15px;
            line-height: 1.7;
            margin: 0;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 18px;
        }

        .testimonial-avatar {
            width: 44px;
            height: 44px;
            border-radius: 999px;
            display: grid;
            place-items: center;
            background: rgba(12, 124, 52, 0.12);
            color: #0c7c34;
            font-weight: 700;
            font-size: 14px;
        }

        .testimonial-name {
            margin: 0;
            font-weight: 600;
            color: var(--page-text);
        }

        .testimonial-role {
            margin: 2px 0 0 0;
            font-size: 12px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--page-muted);
        }
    </style>
@endsection
