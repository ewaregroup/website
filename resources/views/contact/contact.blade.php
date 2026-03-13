@extends('layout.base')
@section('content')

    <!--==================================================-->
    <!-- Start-Contact-Hero -->
    <!--==================================================-->
    <section class="contact-hero relative w-full overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{url('assets/images/contact/contact-thumb.jpg')}}" alt="Contact" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 contact-hero-overlay"></div>
        </div>

        <div class="relative z-10 w-full max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16 py-20 lg:py-28">
            <div class="contact-hero-panel max-w-[720px]">
                <p class="contact-kicker text-[12px] tracking-[0.32em] uppercase">Contact</p>
                <h1 class="contact-hero-title text-[32px] sm:text-[46px] lg:text-[56px] font-bold leading-tight mt-4">
                    Parlons de votre projet
                </h1>
                <p class="contact-hero-text text-[16px] sm:text-[20px] leading-[1.7] mt-6">
                    Chaque projet est unique. Nous adaptons nos services et nos equipes pour atteindre vos objectifs avec un budget maitrise.
                </p>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Contact-Hero -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-Contact-Info -->
    <!--==================================================-->
    <section class="contact-shell py-20 lg:py-28">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="contact-card reveal-on-scroll">
                    <div class="contact-icon"><i class="bi bi-telephone-inbound"></i></div>
                    <h3>Telephone</h3>
                    <p>+228 92 40 57 48</p>
                </div>
                <div class="contact-card reveal-on-scroll reveal-delay-1">
                    <div class="contact-icon"><i class="bi bi-envelope"></i></div>
                    <h3>Email</h3>
                    <p>info@ewaregroup.org</p>
                </div>
                <div class="contact-card reveal-on-scroll reveal-delay-2">
                    <div class="contact-icon"><i class="bi bi-geo-alt"></i></div>
                    <h3>Siege</h3>
                    <p>13 BP 93, Derriere le GEG Baguida centre</p>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Contact-Info -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-Contact-Form -->
    <!--==================================================-->
    <section class="contact-shell pb-20 lg:pb-28">
        <div class="max-w-[1728px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                <div class="lg:col-span-6">
                    <div class="contact-form-card reveal-on-scroll">
                        <h2 class="contact-title text-[26px] sm:text-[32px] font-semibold">Envoyer un message</h2>
                        <p class="contact-muted text-[16px] sm:text-[18px] mt-3">Dites-nous ce dont vous avez besoin, nous revenons vers vous rapidement.</p>

                        <form method="POST" class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                            @csrf
                            <input class="contact-input" type="text" name="nom" placeholder="Nom">
                            <input class="contact-input" type="email" name="email" placeholder="Email">
                            <input class="contact-input" type="text" name="subject" placeholder="Sujet">
                            <input class="contact-input" type="text" name="phone" placeholder="Telephone">
                            <textarea class="contact-input contact-textarea md:col-span-2" name="message" rows="6" placeholder="Votre message"></textarea>
                            <button type="submit" class="contact-submit md:col-span-2">Envoyer</button>
                        </form>
                    </div>
                </div>
                <div class="lg:col-span-6">
                    <div class="contact-image reveal-on-scroll reveal-delay-1">
                        <img src="{{url('assets/images/contact/contact-thumb.jpg')}}" alt="Contact">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End-Contact-Form -->
    <!--==================================================-->

    <style>
        .contact-hero {
            color: #ffffff;
        }

        .contact-hero-overlay {
            background: linear-gradient(120deg, rgba(6, 12, 9, 0.85), rgba(6, 12, 9, 0.55) 45%, rgba(6, 12, 9, 0.9));
        }

        .contact-hero-panel {
            background: rgba(6, 12, 9, 0.55);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 26px;
            padding: 26px 28px;
            backdrop-filter: blur(6px);
            box-shadow: 0 24px 60px rgba(0, 0, 0, 0.35);
        }

        .contact-hero-title,
        .contact-hero-text {
            color: #ffffff;
        }

        .contact-shell {
            background: var(--page-bg);
            color: var(--page-text);
        }

        .contact-kicker {
            color: var(--page-muted);
        }

        .contact-card {
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            border-radius: 22px;
            padding: 24px;
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .contact-card h3 {
            margin: 14px 0 6px;
            font-size: 18px;
            font-weight: 700;
            color: var(--page-text);
        }

        .contact-card p {
            margin: 0;
            color: var(--page-muted);
            line-height: 1.6;
        }

        .contact-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: rgba(12, 124, 52, 0.12);
            color: #0c7c34;
            display: grid;
            place-items: center;
            font-size: 22px;
        }

        .contact-form-card {
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            border-radius: 24px;
            padding: 28px;
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.1);
        }

        .contact-title {
            color: var(--page-text);
        }

        .contact-muted {
            color: var(--page-muted);
        }

        .contact-input {
            width: 100%;
            background: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 12px;
            padding: 12px 14px;
            color: #0b0b0b;
        }

        :root[data-theme="dark"] .contact-input {
            background: rgba(255, 255, 255, 0.95);
            color: #0b0b0b;
        }

        .contact-textarea {
            min-height: 160px;
            resize: vertical;
        }

        .contact-submit {
            padding: 12px 16px;
            border-radius: 12px;
            background: #0c7c34;
            color: #ffffff;
            font-weight: 600;
            transition: transform 200ms ease, background 200ms ease;
        }

        .contact-submit:hover {
            background: #0a6b2d;
            transform: translateY(-2px);
        }

        .contact-image {
            background: var(--about-card-bg);
            border: 1px solid var(--about-card-border);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.1);
        }

        .contact-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection
