<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Mustwill | <?= $data['judul']; ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Home Appliances Website" name="description" />
    <meta content="Laptopia" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= BASEURL ?>/images/mustwill.png">

    <!-- App css -->
    <link href="<?= BASEURL; ?>/plugins/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/plugins/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/plugins/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="<?= BASEURL; ?>">
                        <span>
                            <img src="<?= BASEURL; ?>/images/mustwill.png" alt="" height="50" margin-top: 5px;>
                        </span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li><a href="<?= BASEURL; ?>/admin/index">Dashboard</a></li>
                        <li><a href="">Produk</a></li>
                        <li><a href="pages-starter.html">Pembelian</a></li>
                        <li><a href="pages-maintenance.html">Pelanggan</a></li>
                        <li><a href="<?= BASEURL; ?>/admin/invoice">Invoice</a></li>
                        <li><a href="pages-team.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>