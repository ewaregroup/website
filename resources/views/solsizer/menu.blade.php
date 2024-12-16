<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SolSizer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    {{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{url('assets/images/fav-icon/SolSizer.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- animate CSS -->
    <link rel="stylesheet" href="{{url('assets/css/animate.css')}}" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{url('assets/css/animated-text.css')}}" type="text/css" media="all" />


    <!-- power css -->
    <link rel="stylesheet" href="{{url('assets/css/power.css')}}" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}" type="text/css" media="all" />


    <!-- cinet pay -->
    <script src="https://cdn.cinetpay.com/seamless/main.js" type="text/javascript"></script>

    <style>
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .btn-dark-green {
            background-color: #0b0e2d;
            border-color: #0b0e2d;
            color: #ffffff;
            font-weight: bold;
        }
        .btn-dark-green:hover {
            background-color: #004d00;
            border-color: #004d00;
            color: white;
        }
        .tooltip-inner {
            text-align: justify;
            max-width: 200px;
        }
        h2{
            font-family: "Times New Roman", Times, serif;
        }
        h5{
            font-family: "Times New Roman", Times, serif;
        }
        .times-new-roman-font {
            font-family: "Times New Roman", Times, serif;
            background-color: #3ba9c0;
        }


    </style>

</head>

<!-- Start-header-Menu-->


@yield('content')
<body>
<!-- MultiStep Form -->
<div style="margin-top: 150px;">
    <div class="row justify-content-center mt-10">
        <div class="col-12 col-sm-12 col-md-7 col-lg-9 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-3 pb-0 mt-3 mb-10" style="background-color: #ffffff">
                <div class="d-flex justify-content-center">
                    <img src="{{url('assets/images/SolSizer/menu.png')}}" class="img-fluid" alt="Sample image" style="width:200px">
                </div>
                <h2><strong>MENU</strong></h2>
                <h5>Bienvenue sur notre plateforme de dimensionnement solaire</h5>
                <div class="row" style="border-radius:10px;">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-cubes fa-3x"></i>
                                <div class="button-container">
                                    <a href="{{url('power')}}" class="btn btn-dark-green times-new-roman-font" data-bs-toggle="tooltip" data-bs-placement="top" title="Découvrez notre outil de dimensionnement solaire révolutionnaire ! En un clic,
                                    vous pouvez calculer votre installation solaire et obtenir des résultats précis adaptés à vos besoins énergétiques.
                                    Ce outil est utilisable dans tout pays.">Évaluer un Système</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <i class="far fa-address-card fa-3x"></i>
                                <div class="button-container">
                                    <a href="{{url('entreprises')}}" class="btn btn-dark-green times-new-roman-font" data-bs-toggle="tooltip" data-bs-placement="top" title="
                                        Inscrivez votre entreprise comme installateur solaire agréé !
                                        Rejoignez notre plateforme pour promouvoir vos services,
                                        accéder à des clients potentiels, et développer votre activité
                                        dans le secteur de l'énergie solaire." >
                                        Enregistrer votre Entreprise
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <i class="fab fa-searchengin fa-3x"></i>
                                <div class="button-container">
                                    <a href="{{url('installateur')}}" class="btn btn-dark-green times-new-roman-font" data-bs-toggle="tooltip" data-bs-placement="top" title="
                                    Trouvez votre installateur solaire agréé en un clic !
                                     Notre application vous connecte à des installateurs
                                    qualifiés et vérifiés pour vos projets à grande échelle.
                                    Simplifiez votre recherche avec notre plateforme intuitive.">
                                        Choisir Votre Installateur
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jquery js -->
<script src="{{asset('assets/js/vendor/jquery-3.6.2.min.js')}}"></script>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- carousel js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- counterup js -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<!-- waypoints js -->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<!-- wow js -->
<script src="{{asset('assets/js/wow.js')}}"></script>
<!-- imagesloaded js -->
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- venobox js -->
<script src="{{asset('venobox/venobox.js')}}"></script>
<!--  animated-text js -->
<script src="{{asset('assets/js/animated-text.js')}}"></script>
<!-- venobox min js -->
<script src="{{asset('venobox/venobox.min.js')}}"></script>
<!-- isotope js -->
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/ajax-mail.js')}}"></script>
<!-- jquery meanmenu js -->
<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
<!-- jquery scrollup js -->
<script src="{{asset('assets/js/jquery.scrollUp.js')}}"></script>
<!-- theme js -->
<script src="{{asset('assets/js/theme.js')}}"></script>
<!-- jquery.barfiller js -->
<script src="{{asset('assets/js/jquery.barfiller.js')}}"></script>
<!-- progresscircle js -->
<script src="{{asset('assets/js/progresscircle.js')}}"></script>
<!-- javascript power -->
<script src="{{asset('assets/js/power.js')}}"></script>
<script>
    $(document).ready(function () {
        $('[data-bs-toggle="tooltip"]').tooltip();
    });
</script>


<script src="{{'//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js'}}"></script>


</body>

</html>


