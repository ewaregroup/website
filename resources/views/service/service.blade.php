@extends('layout.base')
@section('content')


    <!--==================================================-->
    <!-- Start-breadcumb-section-->
    <!--==================================================-->
    <div class="breadcumb-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h1>Service</h1>
                        </div>
                        <ul>
                            <li><a href="{{url('/')}}">Accueil</a></li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- Start-bradcumb-section-->
    <!--==================================================-->





    <!--==================================================-->
    <!-- Start-Service-section-->
    <!--==================================================-->
    <div class="service-section upper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-service-box upper">
                        <div class="service-box-icon" style="background-color: white;border-color: #0b3f0f">
                            <i class="bi bi-check2 fa-4x"></i>
                        </div>
                        <div class="service-content">
                            <h6>Conseil en Energie</h6>
                            <p style="text-align: justify-all;margin-top:10PX">
                                Nous assistons nos clients sur le choix de solutions énergétiques efficaces.
                                l’objectif est d'amener le client à éviter les solutions énergivores et contrôler ses financements énergétiques ( consommation, production).
                                Nos conseils peuvent augmenter la rentabilité des affaires de nos clients.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service-box upper">
                        <div class="service-box-icon" style="background-color: white;border-color: #0b3f0f">
                            <i class="bi bi-check2 fa-4x"></i>
                        </div>
                        <div class="service-content">
                            <h6>Audit Énergétique</h6>
                            <p style="text-align: justify-all;margin-top:10PX">
                                Nous aidons nos clients à prendre connaissance de leur consommation d’énergie.
                                Un rapport d’audit est fourni au client avec des propositions de solutions lui permettant de réduire ses factures d'électricité.
                                En fonction du système du client, nous donnons des conseils aidant le client à réduire sa facture sans forcément investir sur une solution.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service-box upper">
                        <div class="service-box-icon" style="background-color: white;border-color: #0b3f0f">
                            <i class="bi bi-check2 fa-4x"></i>
                        </div>
                        <div class="service-content">
                            <h6>Développement de projets énergétiques</h6>
                            <p style="text-align: justify-all;margin-top:10PX">
                                Ce service est souvent basé sur un rapport d’audit énergétique, ou sur une demande de client.. Un devis,
                                ou rapport d’étude est fourni au client indiquant, les solutions, et le financement à son besoin.
                                Nous offrons à cette étape des services de financement à la convenance de nos clients.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service-box upper">
                        <div class="service-box-icon" style="background-color: white;border-color: #0b3f0f">
                            <i class= " bi bi-check2 fa-4x "></i>
                        </div>
                        <div class="service-content">
                            <h6>Réalisation de projets et évaluations</h6>
                            <p style="text-align:justify-all; word-spacing: 0;margin-top:10PX ">
                                Le cahier de charge défini pendant le développement du projet est mis en œuvre conformément aux spécifications du client.

                                L’activité peut porter sur l'installation d'un système solaire ou éolien, d’une borne de recharge, l’entretien ou la réparation d’un véhicule électrique.
                            </p>
                        </div>
                    </div>
                </div>
{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="single-service-box upper">--}}
{{--                        <div class="service-box-icon" style="background-color: white;border-color: #0b3f0f">--}}
{{--                            <i class="bi bi-check2 fa-4x "></i>--}}
{{--                        </div>--}}
{{--                        <div class="service-content">--}}
{{--                            <h6>Suivi et Évaluation</h6>--}}
{{--                            <p>A Company involved in servicing, maintenance and repairs of engines,prime movers our site best now…</p>--}}
{{--                            <a class="box-button" href="#">Rearn More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End-service-section-->
    <!--==================================================-->



@endsection
