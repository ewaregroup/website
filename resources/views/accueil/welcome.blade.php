@extends('layout.base')
@section('content')

    <!-- Start-Hero-section-->
    <!--==================================================-->
    <div class="hero-section align-items-center d-flex">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <div class="hero-content">
                        <h4>Welcome </h4>
                        <h1>Optez pour l'efficacité énergetique !</h1>
                        <p class="hero-desc">
                            Economisez de l'argent en optant pour nos solutions. </p>
                        <div class="solar-button">
                            <a href="{{url('shop')}}">Nos Solutions<i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- Start-Hero-section-->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-feature-section-->
    <!--==================================================-->
    <div class="feature-section">
        <div class="container">
            <div class="row feature">
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-box">
                        <div class="feature-icon">
                            <img src="{{('assets/images/accueil/about-icon2.png')}}" alt="icon">
                        </div>
                        <div class="feature-content" >
                            <h4>SOLUTIONS DURABLES</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-box">
                        <div class="feature-icon">
                            <img src="{{url('assets/images/accueil/about-icon1.png')}}" alt="icon">
                        </div>
                        <div class="feature-content" >
                            <h4>IMPACTS POSITIFS</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" >
                    <div class="single-feature-box">
                        <div class="feature-icon">
                            <img src="{{url('assets/images/accueil/faeture-icon2.png')}}" alt="icon">
                        </div>
                        <div class="feature-content" >
                            <h4 class="text-center">ECONOMIQUE</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End-information-section-->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start-About-section-->
    <!--==================================================-->

    <div class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-thumb">
                        <img src="{{'assets/images/accueil/ord1.jpg'}}" sizes="516x499" style="display: block; margin: auto;" alt="about imgs">
                        <div class="about-shape">
                            <img src="{{'assets/images/about-shape.png'}}" alt="shape">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="section-title">
                        <h4>Pourquoi Nous Choisir ? </h4>
                        <p  style="text-align: justify">
                            Nous sommes une équipe passionnée d'ingénieurs qualifiés,
                            dotés de plusieurs années d'expérience dans le domaine des énergies renouvelables, la mobilité électrique, la vente de matériels électriques et industriels en Afrique subsaharienne.
                            Avec une expertise diversifiée couvrant le solaire, l'éolien,
                            les véhicules électriques et bien plus encore,
                            nous nous engageons à promouvoir un avenir énergétique durable pour la région.
                        </p>
                    </div>
                    <div class="about-box-item">
                        <div class="section-title">
                            <h4>Equipe 4 Experts Energéticiens</h4>
                            <p>Plus 10 ans expériences  et plus de 10 projets réalisés (MCA,GIZ,SABER,UNESCO, etc....)   .</p>
                        </div>
                    </div>
                    <div class="about-box-item">
                        <div class="section-title">
                            <h4>Partenariat  International</h4>
                            <p style="text-align: justify">Grâce à notre engagement envers l'excellence et
                                à notre dévouement à fournir des solutions énergétiques innovantes,
                                nous avons réalisé avec succès une multitude de projets à travers l'Afrique subsaharienne (Togo, Benin, Burkina, Mali, Congo, Mauritanie, Senegal, etc.).
                                Que ce soit pour développer des installations solaires hors réseau dans des communautés éloignées, mettre en place des parcs éoliens pour alimenter des régions rurales ou promouvoir l'adoption de véhicules électriques pour réduire les émissions de carbone, notre équipe est prête à relever les défis les plus complexes.
                                .</p>
                        </div>
                    </div>
                    <div class="solar-button">
                        <a href="{{url('services')}}">Nos Services<i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- End-About-section-->
    <!<--==================================================-->


    <!--==================================================-->
    <!-- Start-Team-section-->
    <!--==================================================-->
    <div class="team-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title tow">
                        <img src="{{'assets/images/logo/logo3.png'}}" style="width:120px;" alt="">
                        <h4 style="color: #000000">Ils nous font confiance !</h4>
                    </div>
                    <div class="row">
{{--                        <div class="col-lg-2 col-md-6">--}}
{{--                            <div class="single-team-box">--}}
{{--                                <div class="team-thumb">--}}
{{--                                    <a href="https://www.globalengineering.sn/" target="_blank"><img src="{{'assets/images/logo/logo-part1.png'}}" alt="" style="width:150px"></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-2 col-md-6">--}}
{{--                            <div class="single-team-box">--}}
{{--                                <div class="team-thumb">--}}
{{--                                    <a href="https://solar.yoorg.fr/" target="_blank"><img src="{{'assets/images/logo/logo-part2.png'}}" style="width:150px" alt=""></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-2 col-md-6">--}}
{{--                            <div class="single-team-box">--}}
{{--                                <div class="team-thumb">--}}
{{--                                    <a href="https://www.wilmosolar.com/" target="_blank" ><img src="{{'assets/images/logo/logo-part4.png'}}" style="width:150px" alt=""></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-lg-3 col-md-6">
                            <div class="single-team-box">
                                <div class="team-thumb">
                                    <a href="https://www.watura.fr/ " target="_blank"><img src="{{'assets/images/logo/logo-part3.png'}}" style="width:150px" alt=""></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="single-team-box">
                                <div class="team-thumb">
                                    <a href="https://capetano.com/"  target="_blank" ><img src="{{'assets/images/logo/logo-part5.png'}}" style="width:150px" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-team-box">
                                <div class="team-thumb">
                                    <a href="https://ev3africa.com/about-us/"  target="_blank" ><img src="{{'assets/images/logo/logo-part6.png'}}" style="width:100px" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-team-box">
                                <div class="team-thumb">
                                    <a href="https://www.intechpower.co/"  target="_blank" ><img src="{{'assets/images/logo/logo-part7.png'}}" style="width:200px" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End-Team-section-->
    <!--==================================================-->


@endsection
