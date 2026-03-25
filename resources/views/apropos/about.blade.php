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
                            <h1>A propos</h1>
                        </div>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li> A propos </li>
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
    <!-- Start-About-section-->
    <!--==================================================-->
    <div class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-thumb">
                        <img src="{{'assets/images/apropos/about.jpg'}}" style="max-width: 100%; height: auto; border-radius: 20px;" alt="about imgs">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="section-title">
                        <h4>A propos  </h4>
                        <h1>Qui Sommes Nous ?</h1>
                        <p class="desc-one" style="text-align: justify" >Eware Group fournit, installe et intègre des solutions énergétiques et industrielles. Nous accompagnons les entreprises et les industries dans l’optimisation de leur efficacité énergétique grâce à des équipements innovants et durables.
                        </p>
                    </div>
                    <div class="about-box-item">
                        <div class="about-content">
                            <h4 style="text-decoration-color: #0b3f0f">Vision</h4>
                            <p >Avec une approche axée sur l’innovation et la performance industrielle, nous intervenons sur l’ensemble du cycle de vie des infrastructures. Eware Group se positionne comme un partenaire stratégique pour les entreprises souhaitant améliorer leur compétitivité tout en adoptant des solutions énergétiques durables.</p>
                        </div>
                    </div>
                    <div class="about-box-item">
                    </div>
                    <div class="solar-button">
                        <a class="btn mx-2" href="https://wa.me/92405748/?text=Bonjour%20bienvenue%20eware%20groupe%20comment%20nous%20pouvons%20vous%20aidez">
                            <i class="fa-brands fa-whatsapp fa-1x"></i>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- End-About-section-->
    <!--==================================================-->




    <!--==================================================-->
    <!-- Start-Counter-section-->
    <!--==================================================-->
    <div class="counter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title tow">
                        <h1>Nos Resultats </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box">
                        <div class="counter-content">
                            <h1 class="counter-up"><span>+</span>10</h1>
                            <p>Experience Equipe </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box">
                        <div class="counter-content">
                            <span>+</span><h1 class="counter-up">30</h1>
                            <p>Clients Satisfaits</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box">
                        <div class="counter-content">
                            <h1 class="counter-up"><span>+</span>8</h1>
                            <p>Projets </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box">
                        <div class="counter-content">
                            <h1 class="counter-up">4</h1>
{{--                            <span>K</span>--}}
                            <p>Experts Energéticiens</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- End-Counter-section-->
    <!--==================================================-->





    <!--==================================================-->
    <!-- Start-Team-section-->
    <!--==================================================-->
{{--    <div class="team-section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 text-center">--}}
{{--                    <div class="section-title tow">--}}
{{--                        <h4>Our Team</h4>--}}
{{--                        <h1>Our Best Experts</h1>--}}
{{--                        <p class="desc-tow">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed de ut labore et dolore magna aliqua--}}
{{--                            Donec scelerisque dolor id  Donec scelerisque dolor id</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="single-team-box">--}}
{{--                        <div class="team-thumb">--}}
{{--                            <img src="assets/images/team1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-content">--}}
{{--                            <div class="team-social-icon">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <h4>Julia Taylor</h4>--}}
{{--                            <p>Project Manager</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="single-team-box">--}}
{{--                        <div class="team-thumb">--}}
{{--                            <img src="assets/images/team2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-content">--}}
{{--                            <div class="team-social-icon">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <h4>Julia Taylor</h4>--}}
{{--                            <p>Project Manager</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="single-team-box">--}}
{{--                        <div class="team-thumb">--}}
{{--                            <img src="assets/images/team3.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-content">--}}
{{--                            <div class="team-social-icon">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <h4>Julia Taylor</h4>--}}
{{--                            <p>Project Manager</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="single-team-box">--}}
{{--                        <div class="team-thumb">--}}
{{--                            <img src="assets/images/team4.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-content">--}}
{{--                            <div class="team-social-icon">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <h4>Julia Taylor</h4>--}}
{{--                            <p>Project Manager</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--==================================================-->
    <!-- End-Team-section-->
    <!--==================================================-->




    <!--==================================================-->
    <!-- Start-Call-do-action-section-->
    <!--==================================================-->
    <div class="call-do-action-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title tow">
                        <h4>Prendre Rendez-Vous</h4>
                        <h1>Alimentez votre vie avec le soleil</h1>
                        <p class="desc-tow"> We are preparing for a better Future !!!!!</p>
                    </div>
                    <div class="quick-contact">
                        <img src="{{'assets/images/apropos/call-icon.png'}}" alt="icon">
                        <span>+228 92405748</span>
                    </div>
                    <div class="solar-button">
                        <a href="{{'contact'}}">Get in Touch<i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End-Call-do-action-section-->
    <!--==================================================-->




@endsection
