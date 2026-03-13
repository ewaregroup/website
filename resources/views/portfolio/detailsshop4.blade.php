@extends('layout.base')
@section('content')

    <!--==================================================-->
    <!-- Start-Product-Hero -->
    <!--==================================================-->
    <section class="product-hero relative w-full overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{url('assets/images/portfolio/shop4.png')}}" alt="Pompe solaire" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 product-hero-overlay"></div>
        </div>

        <div class="relative z-10 w-full max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16 py-20 lg:py-28">
            <div class="product-hero-panel max-w-[760px]">
                <p class="product-kicker text-[12px] tracking-[0.32em] uppercase">Nos actions</p>
                <h1 class="product-hero-title text-[30px] sm:text-[44px] lg:text-[54px] font-bold leading-tight mt-4">
                    Pompe Solaire | Kit EWARE - Pump - 1400
                </h1>
                <p class="product-hero-text text-[16px] sm:text-[20px] leading-[1.7] mt-6">
                    Systeme de pompage autonome pour irrigation, sites isoles et besoins agricoles.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <span class="product-tag">Garantie 1 an</span>
                    <span class="product-tag">4 m3/jour</span>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Product-Hero -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-Product-Details -->
    <!--==================================================-->
    <section class="product-shell py-20 lg:py-28">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                <div class="lg:col-span-5">
                    <div class="product-card reveal-on-scroll">
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>4.5</span>
                        </div>

                        <div class="product-price">
                            <span class="price-old">7 000 000 FCFA</span>
                            <span class="price-current">5 000 000 FCFA</span>
                        </div>

                        <h2 class="product-title">Description du produit</h2>
                        <ul class="product-features">
                            <li>Investissement initial : 5 000 000 FCFA.</li>
                            <li>Consommation d'eau : 4 m3/jour.</li>
                            <li>Duree de vie du systeme : 5 ans min.</li>
                            <li>Facture d'electricite : Gratuit.</li>
                            <li>Nombre de point d'eau : 1.</li>
                            <li>Forage, tuyauterie, poly tank, installation inclus.</li>
                            <li>Garantie : 1 an.</li>
                        </ul>

                        <div class="product-actions">
                            <a class="product-btn primary" href="https://wa.me/92405748/?text=Bonjour%20bienvenue%20eware%20groupe%20comment%20nous%20pouvons%20vous%20aidez">
                                <i class="fa-brands fa-whatsapp"></i> Commander
                            </a>
                            <a class="product-btn" href="{{url('shop')}}">Autres produits</a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <div class="product-gallery reveal-on-scroll reveal-delay-1">
                        <div class="product-main">
                            <img src="{{url('assets/images/portfolio/shop4.png')}}" alt="Pompe solaire">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Product-Details -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-Product-Suppliers -->
    <!--==================================================-->
    <section class="product-suppliers py-20 lg:py-28">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="text-center max-w-[700px] mx-auto">
                <p class="product-kicker text-[12px] tracking-[0.32em] uppercase">Partenaires</p>
                <h2 class="product-section-title text-[28px] sm:text-[38px] lg:text-[44px] font-semibold mt-4">Decouvrir nos fournisseurs</h2>
                <p class="product-muted text-[16px] sm:text-[18px] leading-[1.7] mt-4">
                    Des marques reconnues pour la fiabilite et la durabilite des solutions proposees.
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
    <!-- End-Product-Suppliers -->
    <!--==================================================-->

    <style>
        .product-hero {
            color: #ffffff;
        }

        .product-hero-overlay {
            background: linear-gradient(120deg, rgba(6, 12, 9, 0.85), rgba(6, 12, 9, 0.55) 45%, rgba(6, 12, 9, 0.9));
        }

        .product-hero-panel {
            background: rgba(6, 12, 9, 0.55);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 26px;
            padding: 26px 28px;
            backdrop-filter: blur(6px);
            box-shadow: 0 24px 60px rgba(0, 0, 0, 0.35);
        }

        .product-hero-title,
        .product-hero-text {
            color: #ffffff;
        }

        .product-shell,
        .product-suppliers {
            background: var(--page-bg);
            color: var(--page-text);
        }

        .product-kicker {
            color: var(--page-muted);
        }

        .product-title,
        .product-section-title {
            color: var(--page-text);
        }

        .product-muted {
            color: var(--page-muted);
        }

        .product-tag {
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

        .product-card {
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            border-radius: 22px;
            padding: 26px;
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.1);
        }

        .product-rating {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #f6b319;
            font-weight: 600;
        }

        .product-rating span {
            margin-left: 6px;
            color: var(--page-muted);
        }

        .product-price {
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin: 16px 0 20px;
        }

        .price-old {
            color: var(--page-muted);
            text-decoration: line-through;
            font-size: 14px;
        }

        .price-current {
            font-size: 22px;
            font-weight: 700;
            color: var(--page-text);
        }

        .product-features {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 10px;
            color: var(--page-muted);
            font-size: 15px;
            line-height: 1.6;
        }

        .product-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 20px;
        }

        .product-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 18px;
            border-radius: 12px;
            background: rgba(12, 124, 52, 0.12);
            color: #0c7c34;
            font-weight: 600;
            transition: transform 200ms ease, background 200ms ease;
        }

        .product-btn.primary {
            background: #0c7c34;
            color: #ffffff;
        }

        .product-btn:hover {
            transform: translateY(-2px);
        }

        .product-gallery {
            display: grid;
            gap: 16px;
        }

        .product-main {
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            border-radius: 24px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 320px;
        }

        .product-main img {
            max-height: 320px;
            width: auto;
        }

        .product-thumbs {
            display: grid;
            gap: 12px;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        }

        .product-thumbs img {
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            border-radius: 16px;
            padding: 12px;
            height: 120px;
            width: 100%;
            object-fit: contain;
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
