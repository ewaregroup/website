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
                            <h1>Contact </h1>
                        </div>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>Contact </li>
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
    <!-- Start-contact-infor-section-->
    <!--==================================================-->
    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h1>Adresse de Contact Rapide</h1>
                        <p class="center">Chaque projet est unique. Nous adaptons nos services et nos équipes pour répondre à vos objectifs et à votre budget,
                            en fournissant le plus haut niveau de service de la manière la plus efficace possible..</p>
                    </div>
                </div>
            </div>
            <div class="row" style="border-radius: 15PX">
                <div class="col-lg-4 col-md-6" >
                    <div class="contact-infor-box" >
                        <div class="contact-infor-icon">
                            <i class="bi bi-telephone-inbound"></i>
                        </div>
                        <div class="contact-infor-content">
                            <h4>Telephone</h4>
                            <p> +228 92405748</p>
                            <p>     </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-infor-box">
                        <div class="contact-infor-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="contact-infor-content">
                            <h4>Notre Email </h4>
                            <p>info@ewaregroup.org</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-infor-box">
                        <div class="contact-infor-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="contact-infor-content">
                            <h4>Notre Siège</h4>
                            <p>13 BP 93, Derrière le GEG Baguida centre </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End-contact-infor-section-->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start-contact-form-tow-section-->
    <!--==================================================-->
    <div class="contact-form-">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col">
                    <div class="contact-form">
                        <div class="contact-form-content">
                            <h1>Contact Us</h1>
                            <p>Veuillez Nous laissez un message .</p>
                        </div>
                        <form  method="POST" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="nom" placeholder="Nom" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="Email" name="email" placeholder="Email" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="subject" placeholder="subject" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="phone" placeholder="phone" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <textarea name="message" id="massage" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="submit-button">
                                        <button type="submit">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="status"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="contact-thumb">
                        <img src="{{'assets/images/contact/contact-thumb.jpg'}}" alt="imgs" style="border-radius:15Px ">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End-contact-form-tow-section-->
    <!--==================================================-->





@endsection
