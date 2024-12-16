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
                            <h1>Nos produits </h1>
                        </div>
                        <ul>
                            <li><a href="{{'/'}}">Home</a></li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>Produits</li>
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
    <!-- Start-shope-section-->
    <!--==================================================-->

    <div class="shop-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row products">
                        <div class="col-lg-6 col-md-6">
                            <div class="form_box">
                                <p class="form-text">Produits</p>
                                <select id="cars" name="carlist" form="carform">
                                    <option value="service">4 </option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- widget search -->
                            <div class="widget_search upper">
                                <form action="#" method="get">
                                    <input type="text" name="s" value="" placeholder="Search Here" title="Search for:">
                                    <button type="submit" class="icons">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-products-box">
                                <!-- products thumb -->
                                <div class="products-thumb">
                                    <img src="{{url('assets/images/portfolio/shop1.gif')}}" style=" width: 170PX"   alt="">
                                    <!-- product thumb -->
{{--                                    <div class="product-thumb-icon">--}}
{{--                                        <a href="shop-details.html"> <i class="bi bi-suit-heart"></i> </a>--}}
{{--                                    </div>--}}
                                </div>

                                <!-- products content -->
                                <div class="product-content">
                                    <!-- product list -->
                                    <ul class="product-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                    <div class="product-title">
                                        <h6> Entreprise</h6>
                                    </div>
                                    <div class="product-title" >
                                        <button type="button" class="btn btn-success btn-rounded" data-mdb-ripple-init><a  style="color:white;font-family:Poppins;border-radius: 10PX " class="btn mx-1" href="{{url('detailsshop1')}}">DETAILS</a></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-products-box">
                                <!-- products thumb -->
                                <div class="products-thumb">
                                    <img src="{{url('assets/images/portfolio/shop2.jpg')}}" style=" width: 90PX" alt="" >
                                    <!-- product thumb -->
{{--                                    <div class="product-thumb-icon">--}}
{{--                                        <a href="shop-details.html"> <i class="bi bi-suit-heart"></i> </a>--}}
{{--                                    </div>--}}
                                </div>
                                <!-- products content -->
                                <div class="product-content">
                                    <!-- product list -->
                                    <ul class="product-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                    <div class="product-price">
                                        <h6> Residence </h6>
                                    </div>
                                    <div class="product-title" >
                                        <button type="button" class="btn btn-success btn-rounded" data-mdb-ripple-init><a  style="color: white" class="btn mx-1" href="{{url('detailsshop2')}}">DETAILS</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="single-products-box">
                                <!-- products thumb -->
                                <div class="products-thumb">
                                    <img src="{{url('assets/images/portfolio/shop4.png')}}" style="  width: 72PX" alt="">
                                    <!-- product thumb -->
{{--                                    <div class="product-thumb-icon">--}}
{{--                                        <a href="shop-details.html"> <i class="bi bi-suit-heart"></i> </a>--}}
{{--                                    </div>--}}
                                </div>

                                <!-- products content -->
                                <div class="product-content">
                                    <!-- product list -->
                                    <ul class="product-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                    <div class="product-price">
                                        <h6> Pompage d'eau </h6>
                                    </div>
                                    <div class="product-title" >
                                        <button type="button" class="btn btn-success btn-rounded" data-mdb-ripple-init><a  style="color: white " class="btn mx-1" href="{{url('detailsshop4')}}">DETAILS</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-products-box">
                                <!-- products thumb -->
                                <div class="products-thumb">
                                    <img src="{{url('assets/images/portfolio/shop3.png')}}" style="  width: 130PX" alt="">
                                    <!-- product thumb -->
{{--                                    <div class="product-thumb-icon center">--}}
{{--                                        <a href="shop-details.html"> <i class="bi bi-suit-heart"></i> </a>--}}
{{--                                    </div>--}}
                                </div>

                                <!-- products content -->
                                <div class="product-content">
                                    <!-- product list -->
                                    <ul class="product-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                    <div class="product-price">
                                        <h6> Voiture électrique </h6>
                                    </div>
                                    <div class="product-title" >
                                        <button type="button" class="btn btn-success btn-rounded" data-mdb-ripple-init><a  style="color: white " class="btn mx-1" href="{{url('detailsshop6')}}">DETAILS</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="pagination-menu text-center">
                                <ul> <li><a href="{{url('shop')}} ">1</a></li></ul>
                                <ul> <li><a href="{{url('shops')}} ">2</a></li></ul>
                            </div>
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

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>



@endsection
