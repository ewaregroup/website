@extends('layout.base')
@section('content')

<!--==================================================-->
<!-- Start-shope-section-->
<!--==================================================-->
<div class="product-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="products-details-content">
                    <div class="products-title">
                        <h4 style="line-height: 1.8;">Residence | Kit EWARE – Genset –1M + Borne de recharge (Sur commande)</h4>
                    </div>
                    <div class="products-details-reting">
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li class="rating-text">4.5</li>
                        </ul>
                    </div>
                    <div class="pirce-box">
                        <span> FCFA<del>2 500 000<del></span>
                        <span class="price">1 500 000 FCFA/kVA</span>
                    </div>
                    <div class="products-features">
                        <span>Description A Propos Du Produit: </span>
                            <p>
                                <li> Investissement : 1 500 000 FCFA par kVA.</li>
                                <li> Durée de vie du système : 25 ans. </li>
                                <li> Frais de suivi du système : Gratuit.</li>
                                <li> Durée d’utilisation sans dépense : 7 à 10 ans</li>
                                <li> Autonomie : 2 à 5 heures.</li>
                                <li> Garantie : 3 ans. </li>

                            </p>
                    </div>
                    <div class="chart-button">
                        {{--                        <a href="#"><i class="bi bi-cart-fill"></i>Add to chart</a>--}}
                        <a class="btn mx-2" href="https://wa.me/92405748/?text=Bonjour%20bienvenue%20eware%20groupe%20comment%20nous%20pouvons%20vous%20aidez">
                            <i class="fa-brands fa-whatsapp fa-1x"></i>
                            Commander
                        </a>
                        <a class="btn ms-4"  href="{{url('shop')}}">Autres produits</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="preview-pic tab-content">
                    <div class="tab-pane active" id="pic-1"><img src="{{url('assets/images/portfolio/shop2.jpg')}}" style="margin-bottom: 5PX" alt="products"></div>
                    <div class="tab-pane active" id="pic-1"><img src="{{url('assets/images/portfolio/shop8.png')}}" style="" alt="products"></div>
                </div>
            </div>

            </div>
        </div>


    </div>
</div>
<!--==================================================-->
<!-- End-shope-section-->
<!--==================================================-->


<!--==================================================-->
<!-- Start-Team-section-->
<!--==================================================-->
<div class="team-section" style="background-color: #e5e06b">
    <div class="container ">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title tow">
                    <img src="{{'assets/images/logo/logo4.png'}}" style="width:50px" alt="">
                    <h4 style="color: #115015">Découvrir nos fournisseurs  !</h4>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6">
                        <div class="single-team-box">
                            <div class="team-thumb">
                                <a href="https://www.jinkosco.com/" data-bs-toggle="tooltip" title="Cliquez!"   target="_blank"><img src="{{'assets/images/logo/logoma1.png'}}" alt="" style="width:100px"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-team-box">
                            <div class="team-thumb">
                                <a href="https://www.lorentz.de/fr/" data-bs-toggle="tooltip" title="Cliquez!"  target="_blank"><img src="{{'assets/images/logo/logomat2.png'}}" style="width:100px" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-team-box">
                            <div class="team-thumb">
                                <a href=" https://www.victronenergy.fr/ " data-bs-toggle="tooltip" title="Cliquez!" target="_blank"><img src="{{'assets/images/logo/logomat3.png'}}" style="width:100px" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-team-box">
                            <div class="team-thumb">
                                <a href="https://www.sma.de/fr/produits/onduleurs-a-batterie/sunny-island-44m-60h-80h" data-bs-toggle="tooltip" title="Cliquez!" target="_blank" ><img src="{{'assets/images/logo/logomat4.png'}}" style="width:100px" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-team-box">
                            <div class="team-thumb">
                                <a href="https://www.bydbatterybox.com/" data-bs-toggle="tooltip" title="Cliquez!"  target="_blank" ><img src="{{'assets/images/logo/logomat5.png'}}" style="width:100px" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-team-box">
                            <div class="team-thumb">
                                <a href="https://solar.huawei.com/fr" data-bs-toggle="tooltip" title="Cliquez!"  target="_blank" ><img src="{{'assets/images/logo/logomat6.png'}}" style="width:100px" alt=""></a>
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
