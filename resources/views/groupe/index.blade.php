@extends('layout.base')
@section('content')

    <!--==================================================-->
    <!-- Start-Group-Hero -->
    <!--==================================================-->
    <section class="group-hero relative w-full overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{url('assets/images/accueil/img2.jpg')}}" alt="Le Groupe" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 group-hero-overlay"></div>
        </div>

        <div class="relative z-10 w-full max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16 py-20 lg:py-28">
            <div class="group-hero-panel max-w-[760px]">
                <p class="group-kicker text-[12px] tracking-[0.32em] uppercase">Filiales</p>
                <h1 class="group-hero-title text-[32px] sm:text-[46px] lg:text-[56px] font-bold leading-tight mt-4">
                    Des filiales complementaires pour accompagner la transition energetique
                </h1>
                <p class="group-hero-text text-[16px] sm:text-[20px] leading-[1.7] mt-6">
                    Nous presentons ici les filiales et activites connexes de l'entreprise.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <span class="group-tag">Energie</span>
                    <span class="group-tag">Mobilite</span>
                    <span class="group-tag">Industrie</span>
                    <span class="group-tag">Formation</span>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Group-Hero -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-Group-Entities -->
    <!--==================================================-->
    <section class="group-shell py-20 lg:py-28">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="flex flex-col lg:flex-row items-start justify-between gap-8">
                <div class="max-w-[640px]">
                <p class="group-kicker text-[12px] tracking-[0.32em] uppercase">Nos filiales</p>
                    <h2 class="group-title text-[28px] sm:text-[38px] lg:text-[44px] font-semibold mt-4">
                        Des activites specialisees, une vision commune
                    </h2>
                    <p class="group-muted text-[16px] sm:text-[18px] leading-[1.7] mt-5">
                        Chaque entite repond a un besoin precis, avec un niveau d'expertise eleve et des equipes terrain.
                    </p>
                </div>
                {{-- <a href="{{url('contact')}}" class="inline-flex items-center justify-center px-6 py-3 rounded-[14px] bg-primary text-white font-semibold hover:bg-green-800 transition shadow-lg">
                    Contacter le groupe
                </a>   --}}
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                <a class="group-card reveal-on-scroll" href="https://eimatafrica.com" target="_blank" rel="noopener">
                    <div class="group-icon">EM</div>
                    <h3>EIMAT</h3>
                    <p>Solutions de mobilite electrique, bornes et accompagnement flotte.</p>
                    <span class="group-link">Visiter le site</span>
                </a>
                <a class="group-card reveal-on-scroll reveal-delay-1" href="https://filiale-industry.example.com" target="_blank" rel="noopener">
                    <div class="group-icon">EI</div>
                    <h3>EWARE Mobility</h3>
                    <p>Equipements industriels, installation et maintenance sur mesure.</p>
                    <span class="group-link">Visiter le site</span>
                </a>
                <a class="group-card reveal-on-scroll reveal-delay-2" href="https://filiale-consulting.example.com" target="_blank" rel="noopener">
                    <div class="group-icon">EC</div>
                    <h3>Solsizer</h3>
                    <p>Audit, conseil et pilotage de projets energetiques complexes.</p>
                    <span class="group-link">Visiter le site</span>
                </a>
                {{-- <a class="group-card reveal-on-scroll" href="https://filiale-academy.example.com" target="_blank" rel="noopener">
                    <div class="group-icon">EA</div>
                    <h3>EWARE Academy</h3>
                    <p>Formation, transfert de competences et certification terrain.</p>
                    <span class="group-link">Visiter le site</span>
                </a>
                <a class="group-card reveal-on-scroll reveal-delay-1" href="https://filiale-services.example.com" target="_blank" rel="noopener">
                    <div class="group-icon">ES</div>
                    <h3>EWARE Services</h3>
                    <p>Exploitation, supervision et support operationnel continu.</p>
                    <span class="group-link">Visiter le site</span>
                </a>
                <a class="group-card reveal-on-scroll reveal-delay-2" href="https://filiale-trading.example.com" target="_blank" rel="noopener">
                    <div class="group-icon">ET</div>
                    <h3>EWARE Trading</h3>
                    <p>Distribution de materiels certifies et logistique regionale.</p>
                    <span class="group-link">Visiter le site</span>
                </a> --}}
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Group-Entities -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-Group-CTA -->
    <!--==================================================-->
    <section class="group-cta py-16 lg:py-20">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="group-cta-card reveal-on-scroll">
                <div>
                    <h3 class="text-[24px] sm:text-[30px] font-semibold">Vous representez une institution ou une entreprise ?</h3>
                    <p class="text-[15px] sm:text-[17px] opacity-80 mt-3">Construisons une solution multi-entites adaptee a votre secteur.</p>
                </div>
                <a href="{{url('contact')}}" class="inline-flex items-center justify-center px-6 py-3 rounded-[14px] bg-white text-black font-semibold hover:scale-105 transition shadow-lg">
                    Discuter d'un partenariat
                </a>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Group-CTA -->
    <!--==================================================-->

    <style>
        .group-hero {
            color: #ffffff;
        }

        .group-hero-overlay {
            background: linear-gradient(120deg, rgba(6, 12, 9, 0.85), rgba(6, 12, 9, 0.55) 45%, rgba(6, 12, 9, 0.9));
        }

        .group-hero-panel {
            background: rgba(6, 12, 9, 0.55);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 26px;
            padding: 26px 28px;
            backdrop-filter: blur(6px);
            box-shadow: 0 24px 60px rgba(0, 0, 0, 0.35);
        }

        .group-hero-title,
        .group-hero-text {
            color: #ffffff;
        }

        .group-shell,
        .group-cta {
            background: var(--page-bg);
            color: var(--page-text);
        }

        .group-kicker {
            color: var(--page-muted);
        }

        .group-title {
            color: var(--page-text);
        }

        .group-muted {
            color: var(--page-muted);
        }

        .group-tag {
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

        .group-card {
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            border-radius: 22px;
            padding: 24px;
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            display: block;
            transition: transform 200ms ease, box-shadow 200ms ease;
        }

        .group-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 22px 44px rgba(0, 0, 0, 0.14);
        }

        .group-card h3 {
            font-size: 18px;
            font-weight: 700;
            margin: 14px 0 8px;
            color: var(--page-text);
        }

        .group-card p {
            margin: 0;
            color: var(--page-muted);
            line-height: 1.6;
        }

        .group-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 12px;
            color: #0c7c34;
            font-weight: 600;
        }

        .group-icon {
            width: 46px;
            height: 46px;
            border-radius: 12px;
            background: rgba(12, 124, 52, 0.12);
            color: #0c7c34;
            display: grid;
            place-items: center;
            font-weight: 700;
        }

        .group-cta-card {
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
            .group-cta-card {
                flex-direction: row;
                align-items: center;
            }
        }
    </style>
@endsection
