<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="M_Adnan" />
    <!-- Document Title -->
    <title>Mustwill | <?= $data['judul']; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= BASEURL ?>/images/favicon.jpg" type="image/x-icon">
    <link rel="icon" href="<?= BASEURL ?>/images/favicon.jpg" type="image/x-icon">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/plugins/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/plugins/assets/css/icons.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/plugins/assets/css/theme.min.css" />

    <!-- StyleSheets -->
    <link rel="stylesheet" href="<?= BASEURL ?>/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/main.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/responsive.css">


    <!-- Fonts Online -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900|Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">


    <!-- JavaScripts -->
    <script src="<?= BASEURL ?>/js/vendors/modernizr.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- LOADER -->
    <div id="loader">
        <div class="position-center-center">
            <div class="loader"></div>
        </div>
    </div>

    <!-- Main Layout -->
    <!--   <main class="cd-main-content"> -->
    <!-- Header -->
    <header class="header header-relative">
        <div class="sticky">
            <div class="container">
                <div class="logo"> <a href="<?= BASEURL ?>"><img src="<?= BASEURL ?>/images/logo-mustwill.png" alt=""></a> </div>

                <!-- Nav -->
                <nav class="navbar ownmenu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
                    </div>

                    <!-- NAV -->
                    <div class="collapse navbar-collapse" id="nav-open-btn">
                        <ul class="nav">
                            <li> <a href="<?= BASEURL ?>">Beranda </a></li>
                            <li> <a href="<?= BASEURL ?>/shop">Toko Kami </a></li>
                            <li> <a href="<?= BASEURL ?>/about">Tentang Kami </a></li>
                            <!-- NAV RIGHT -->
                            <div class="nav-right navbar-right">
                                <ul>
                                    <li class="dropdown user-basket"> <span class="cart-num">1</span> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart"></i> </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="media-left">
                                                    <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="<?= BASEURL ?>/images/large-img-2.jpg" alt="..."> </a> </div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Girls Top 2018</h6>
                                                    <span class="price">1 X $169</span>
                                                </div>
                                                <a href="#." class="remov"><i class="fa fa-times"></i></a>
                                            </li>
                                            <li class="margin-0 padding-0 price-cart-drop">
                                                <h5>Subtotal: <span>258.00$</span></h5>
                                            </li>
                                            <li class="margin-0 padding-0"> <a href="<?= BASEURL ?>/shop/cart" class="btn margin-bottom-20">VIEW CART</a>
                                                <!--<a href="<?= BASEURL ?>/shop/checkout" class="btn">CHECK OUT</a> -->
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:void(0);" class="search-open"><i class="fa fa-search"></i></a>
                                        <div class="search-inside animated-4s fadeIn"> <i class="lnr lnr-cross search-close"></i>
                                            <div class="search-overlay"></div>
                                            <div class="position-center-center">
                                                <div class="container">
                                                    <div class="search">
                                                        <form>
                                                            <input type="search" placeholder="Type Your Search...">
                                                            <button type="submit"><i class="lnr lnr-magnifier"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a><img class="rounded-circle header-profile-user" src="BASEURL ?>/images/img-dummy.png" alt="Header Avatar"><span class="d-none d-sm-inline-block ml-1">Henry</span><i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                    <span>Inbox</span>
                                                    <span>
                                                        <span class="badge badge-pill badge-success">3</span>
                                                    </span>
                                                </div>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                    <span>Profile</span>
                                                    <span>
                                                        <span class="badge badge-pill badge-info">1</span>
                                                    </span>
                                                </div>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                    Settings
                                                </div>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                    <span>Lock Account</span>
                                                </div>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                    <span>Log Out</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End Header -->