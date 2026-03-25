@extends('layout.base')
@section('content')

    <!--==================================================-->
    <!-- Start-Shop-Hero -->
    <!--==================================================-->
    <section class="shop-hero relative w-full overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{url('assets/images/accueil/head.jpg')}}" alt="Nos actions" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 shop-hero-overlay"></div>
        </div>

        <div class="relative z-10 w-full max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16 py-20 lg:py-28">
            <div class="shop-hero-panel max-w-[720px]">
                <p class="shop-kicker text-[12px] tracking-[0.32em] uppercase">Nos actions</p>
                <h1 class="shop-hero-title text-[32px] sm:text-[46px] lg:text-[56px] font-bold leading-tight mt-4">
                    Solutions et produits adaptes a vos besoins
                </h1>
                <p class="shop-hero-text text-[16px] sm:text-[20px] leading-[1.7] mt-6">
                    Retrouvez nos offres pour entreprises, residences, pompage d'eau et mobilite electrique.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{url('contact')}}" class="inline-flex items-center justify-center px-6 py-3 rounded-[14px] bg-primary text-white font-semibold hover:bg-green-800 transition shadow-lg">
                        Demander un devis
                    </a>
                    <a href="{{url('publication')}}" class="inline-flex items-center justify-center px-6 py-3 rounded-[14px] border border-white/40 text-white hover:bg-white/10 transition">
                        Voir nos publications
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Shop-Hero -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-Shop-Products -->
    <!--==================================================-->
    <section class="shop-shell py-20 lg:py-28">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="flex flex-col lg:flex-row items-start justify-between gap-8">
                <div class="max-w-[640px]">
                    <p class="shop-kicker text-[12px] tracking-[0.32em] uppercase">Catalogue</p>
                    <h2 class="shop-title text-[28px] sm:text-[38px] lg:text-[44px] font-semibold mt-4">
                        Nos produits les plus demandes
                    </h2>
                    <p class="shop-muted text-[16px] sm:text-[18px] leading-[1.7] mt-5">
                        Un choix clair et oriente usage, avec des details pour chaque categorie.
                    </p>
                </div>
                <div class="shop-filters">
                    <div class="shop-filter">
                        <label for="product-count">Produits</label>
                        <select id="product-count">
                            <option>4</option>
                        </select>
                    </div>
                    <div class="shop-filter search">
                        <label for="product-search">Recherche</label>
                        <div class="shop-search">
                            <input id="product-search" type="text" placeholder="Rechercher un produit">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                <article class="shop-card reveal-on-scroll">
                    <div class="shop-card-image">
                        <img src="{{url('assets/images/portfolio/shop1.gif')}}" alt="Entreprise">
                    </div>
                    <div class="shop-card-body">
                        <div class="shop-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <h3 class="shop-card-title">Entreprise</h3>
                        <a href="{{url('detailsshop1')}}" class="shop-card-btn">Details</a>
                    </div>
                </article>

                <article class="shop-card reveal-on-scroll reveal-delay-1">
                    <div class="shop-card-image">
                        <img src="{{url('assets/images/portfolio/shop2.jpg')}}" alt="Residence">
                    </div>
                    <div class="shop-card-body">
                        <div class="shop-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <h3 class="shop-card-title">Residence</h3>
                        <a href="{{url('detailsshop2')}}" class="shop-card-btn">Details</a>
                    </div>
                </article>
                <article class="shop-card reveal-on-scroll reveal-delay-2">
                    <div class="shop-card-image">
                        <img src="{{url('assets/images/portfolio/shop4.png')}}" alt="Pompage d'eau">
                    </div>
                    <div class="shop-card-body">
                        <div class="shop-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <h3 class="shop-card-title">Pompage d'eau</h3>
                        <a href="{{url('detailsshop4')}}" class="shop-card-btn">Details</a>
                    </div>
                </article>

                <article class="shop-card reveal-on-scroll reveal-delay-3">
                    <div class="shop-card-image">
                        <img src="{{url('assets/images/portfolio/shop3.png')}}" alt="Voiture electrique">
                    </div>
                    <div class="shop-card-body">
                        <div class="shop-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <h3 class="shop-card-title">Voiture electrique</h3>
                        <a href="{{url('detailsshop6')}}" class="shop-card-btn">Details</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Shop-Products -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-Shop-Suppliers -->
    <!--==================================================-->
    <section class="shop-suppliers py-20 lg:py-28">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="text-center max-w-[700px] mx-auto">
                <p class="shop-kicker text-[12px] tracking-[0.32em] uppercase">Partenaires</p>
                <h2 class="shop-title text-[28px] sm:text-[38px] lg:text-[44px] font-semibold mt-4">Decouvrir nos fournisseurs</h2>
                <p class="shop-muted text-[16px] sm:text-[18px] leading-[1.7] mt-4">
                    Des marques internationales reconnues pour la fiabilite et la durabilite.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-6">
                <a class="supplier-card reveal-on-scroll" href="https://www.jinkosco.com/" target="_blank"><img src="{{url('assets/images/logo/logoma1.png')}}" alt="Jinko"></a>
                <a class="supplier-card reveal-on-scroll reveal-delay-1" href="https://www.lorentz.de/fr/" target="_blank"><img src="{{url('assets/images/logo/logomat2.png')}}" alt="Lorentz"></a>
                <a class="supplier-card reveal-on-scroll reveal-delay-2" href="https://www.victronenergy.fr/" target="_blank"><img src="{{url('assets/images/logo/logomat3.png')}}" alt="Victron"></a>
                <a class="supplier-card reveal-on-scroll reveal-delay-3" href="https://www.sma.de/fr/produits/onduleurs-a-batterie/sunny-island-44m-60h-80h" target="_blank"><img src="{{url('assets/images/logo/logomat4.png')}}" alt="SMA"></a>
                <a class="supplier-card reveal-on-scroll" href="https://www.bydbatterybox.com/" target="_blank"><img src="{{url('assets/images/logo/logomat5.png')}}" alt="BYD"></a>
                <a class="supplier-card reveal-on-scroll reveal-delay-1" href="https://solar.huawei.com/fr" target="_blank"><img src="{{url('assets/images/logo/logomat6.png')}}" alt="Huawei"></a>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Shop-Suppliers -->
    <!--==================================================-->

    <style>
        .shop-hero {
            color: #ffffff;
        }

        .shop-hero-overlay {
            background: linear-gradient(120deg, rgba(6, 12, 9, 0.85), rgba(6, 12, 9, 0.55) 45%, rgba(6, 12, 9, 0.9));
        }

        .shop-hero-panel {
            background: rgba(6, 12, 9, 0.55);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 26px;
            padding: 26px 28px;
            backdrop-filter: blur(6px);
            box-shadow: 0 24px 60px rgba(0, 0, 0, 0.35);
        }

        .shop-hero-title,
        .shop-hero-text {
            color: #ffffff;
        }

        .shop-shell {
            background: var(--page-bg);
            color: var(--page-text);
        }

        .shop-suppliers {
            background: var(--page-bg);
            color: var(--page-text);
        }

        .shop-kicker {
            color: var(--page-muted);
        }

        .shop-title {
            color: var(--page-text);
        }

        .shop-muted {
            color: var(--page-muted);
        }

        .shop-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
        }

        .shop-filter {
            display: flex;
            flex-direction: column;
            gap: 8px;
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            border-radius: 16px;
            padding: 12px 16px;
            min-width: 200px;
        }

        .shop-filter label {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.16em;
            color: var(--page-muted);
        }

        .shop-filter select {
            background: transparent;
            border: none;
            color: var(--page-text);
            font-weight: 600;
        }

        .shop-filter.search {
            min-width: 240px;
        }

        .shop-search {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .shop-search input {
            background: transparent;
            border: none;
            outline: none;
            width: 100%;
            color: var(--page-text);
        }

        .shop-search i {
            color: var(--page-muted);
        }

        .shop-card {
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            border-radius: 22px;
            padding: 22px;
            display: flex;
            flex-direction: column;
            gap: 16px;
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.1);
            transition: transform 220ms ease, box-shadow 220ms ease, border-color 220ms ease;
            text-align: center;
        }

        .shop-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 24px 50px rgba(0, 0, 0, 0.14);
        }

        .shop-card-image {
            height: 140px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .shop-card-image img {
            max-height: 120px;
            width: auto;
        }

        .shop-card-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--page-text);
            margin: 0;
        }

        .shop-rating {
            display: inline-flex;
            gap: 4px;
            color: #f6b319;
            justify-content: center;
        }

        .shop-card-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 18px;
            border-radius: 12px;
            background: #0c7c34;
            color: #ffffff;
            font-weight: 600;
            transition: transform 200ms ease, background 200ms ease;
        }

        .shop-card-btn:hover {
            background: #0a6b2d;
            transform: translateY(-2px);
        }

        .shop-pagination {
            display: inline-flex;
            gap: 8px;
            padding: 8px;
            border-radius: 999px;
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
        }

        .shop-pagination a {
            width: 38px;
            height: 38px;
            border-radius: 999px;
            display: grid;
            place-items: center;
            font-weight: 600;
            color: var(--page-text);
        }

        .shop-pagination a.active {
            background: #0c7c34;
            color: #ffffff;
        }

        .supplier-card {
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            border-radius: 18px;
            padding: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 12px 26px rgba(0, 0, 0, 0.08);
            transition: transform 200ms ease, box-shadow 200ms ease;
        }

        .supplier-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.12);
        }

        .supplier-card img {
            max-height: 60px;
            width: auto;
            filter: grayscale(1) brightness(0.9);
            transition: filter 200ms ease, transform 200ms ease;
        }

        .supplier-card:hover img {
            filter: grayscale(0) brightness(1);
            transform: scale(1.04);
        }
    </style>
@endsection
