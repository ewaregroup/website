<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" type="image/png" sizes="56x56" href="{{url('assets/images/fav-icon/SolSizer.png')}}">
    <link href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="shortcut icon" href="{{url('assets/images/fav-icon/icon1.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <title>Solsizer</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{url('admin/assets/css/linearicon.css')}}">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{url('admin/assets/css/vendors/font-awesome.css')}}">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="{{url('admin/assets/css/vendors/themify.css')}}">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="{{url('admin/assets/css/ratio.css')}}">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{url('admin/assets/css/remixicon.css')}}">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{url('admin/assets/css/vendors/feather-icon.css')}}">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{url('admin/assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('admin/assets/css/vendors/animate.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{url('admin/assets/css/vendors/bootstrap.css')}}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{url('admin/assets/css/vector-map.css')}}">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{url('admin/assets/css/vendors/slick.css')}}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{url('admin/assets/css/style.css')}}">

    <!-- power css -->
    <link rel="stylesheet" href="{{url('assets/css/power.css')}}" type="text/css" media="all">

    <!-- Country Select CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/country-select-js/build/css/countrySelect.min.css">


    @yield('head')

</head>

<body>

<!-- tap on top start -->
<div class="tap-top">
    <span class="lnr lnr-chevron-up"></span>
</div>
<!-- tap on tap end -->

<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="nav-right col-12 d-flex align-items-center p-0">
            <ul class="nav nav-pills mb-3 flex-grow-1" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                            type="button"> Informations Générales <i class="fa fa-info-circle" aria-hidden="true"></i></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-technique-tab" data-bs-toggle="pill" data-bs-target="#pills-technique"
                            type="button">Paramètres Techniques <i class="fa fa-cogs" aria-hidden="true"></i></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-financiere-tab" data-bs-toggle="pill" data-bs-target="#pills-financière"
                            type="button">Paramètres Financiers <i class="fa fa-credit-card" aria-hidden="true"></i></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-resultats-tab" data-bs-toggle="pill" data-bs-target="#pills-résultats"
                            type="button">Récapitulatif <i class="fa fa-list-alt" aria-hidden="true"></i></button>
                </li>
            </ul>
        </div>
    </div>
    <!-- Page Header Ends-->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div id="sidebarEffect"></div>
            <div>
                <div class="logo-wrapper logo-wrapper-center mb-6">
                    <a href="{{url('menu')}}" data-bs-original-title="" title="">
                        <img class="img-fluid for-white" src="{{url('assets/images/logo/SolSizer.png')}}" style="width: 80PX" alt="logo">
                    </a>
                    <div class="back-btn">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                    </div>
                </div>
                <nav class="sidebar-main mt-5">
                    <div class="left-arrow" id="left-arrow">
                        <i data-feather="arrow-left"></i>
                    </div>
                    <div>
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn"></li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{'dashboard'}}">
                                    <i class="ri-home-line"></i>
                                    <span>Tableau de bord </span>
                                </a>
                            </li>
                            <li class="sidebar-list">
                                <a class=" sidebar-link sidebar-title" href="{{url('dashboard')}}">
                                    <i class="ri-store-3-line"></i>
                                    <span>Guide d’utilisation</span>
                                </a>
                            </li>
                            <li class="sidebar-list">
                                <a class=" sidebar-link sidebar-title" href="{{url('menu')}}">
                                    <i class="ri-menu-add-fill"></i>
                                    <span>Menu</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow">
                        <i data-feather="arrow-right"></i>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        @yield('content')

    </div>
    <!-- Page Body End -->
</div>
<!-- page-wrapper -->

<!-- latest js -->
<script src="{{asset('admin/assets/js/jquery-3.6.0.min.js')}}"></script>

<!-- Bootstrap js -->
<script src="{{asset('admin/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

<!-- feather icon js -->
<script src="{{asset('admin/assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('admin/assets/js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- scrollbar simplebar js -->
<script src="{{asset('admin/assets/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('admin/assets/js/scrollbar/custom.js')}}"></script>

<!-- Sidebar jquery -->
<script src="{{asset('admin/assets/js/config.js')}}"></script>

<!-- tooltip init js -->
<script src="{{asset('admin/assets/js/tooltip-init.js')}}"></script>

<!-- Plugins JS -->
<script src="{{asset('admin/assets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('admin/assets/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('admin/assets/js/notify/index.js')}}"></script>

<!-- Apexchar js -->
<script src="{{asset('admin/assets/js/chart/apex-chart/apex-chart1.js')}}"></script>
<script src="{{asset('admin/assets/js/chart/apex-chart/moment.min.js')}}"></script>
<script src="{{asset('admin/assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('admin/assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('admin/assets/js/chart/apex-chart/chart-custom1.js')}}"></script>

<!-- Country Select JS -->
<script src="https://cdn.jsdelivr.net/npm/country-select-js/build/js/countrySelect.min.js"></script>

<!-- slick slider js -->
<script src="{{asset('admin/assets/js/slick.min.js')}}"></script>
<script src="{{asset('admin/assets/js/custom-slick.js')}}"></script>

<!-- customizer js -->
<script src="{{asset('admin/assets/js/customizer.js')}}"></script>

<!-- ratio js -->
<script src="{{asset('admin/assets/js/ratio.js')}}"></script>

<!-- sidebar effect -->
<script src="{{asset('admin/assets/js/sidebareffect.js')}}"></script>

<!-- Theme js -->
<script src="{{asset('admin/assets/js/script.js')}}"></script>

</body>

<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 15:34:46 GMT -->
</html>

