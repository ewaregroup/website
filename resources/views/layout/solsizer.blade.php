<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SolSizer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{url('assets/images/fav-icon/SolSizer.png')}}">
    <!-- bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet"/>

    <!-- cinet pay -->
    <script src="https://cdn.cinetpay.com/seamless/main.js" type="text/javascript"></script>

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- Start-Top-header-->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            data-mdb-collapse-init
            class="navbar-toggler"
            type="button"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img
                    src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
                    height="15"
                    alt="MDB Logo"
                    loading="lazy"
                />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Icon -->
            <a class="link-secondary me-3" href="#">
                <i class="fas fa-shopping-cart"></i>
            </a>

            <!-- Notifications -->
            <div class="dropdown">
                <a
                    data-mdb-dropdown-init
                    class="link-secondary me-3 dropdown-toggle hidden-arrow"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    aria-expanded="false"
                >
                    <i class="fas fa-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
                <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuLink"
                >
                    <li>
                        <a class="dropdown-item" href="#">Some news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Another news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
            </div>
            <!-- Avatar -->
            <div class="dropdown">
                <a
                    data-mdb-dropdown-init
                    class="dropdown-toggle d-flex align-items-center hidden-arrow"
                    href="#"
                    id="navbarDropdownMenuAvatar"
                    role="button"
                    aria-expanded="false"
                >
                    <img
                        src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                        class="rounded-circle"
                        height="25"
                        alt="Black and White Portrait of a Man"
                        loading="lazy"
                    />
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                    <li>
                        <a class="dropdown-item" href="#">My profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Settings</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar --><!-- End-Top-bar-Area -->


@yield('content')




<!-- jquery js -->
<script src="{{asset('assets/js/vendor/jquery-3.6.2.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
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

</body>

</html>

