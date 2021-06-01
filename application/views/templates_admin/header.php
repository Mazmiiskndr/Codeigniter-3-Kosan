 <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title><?= $title; ?></title>

    <link href="<?= base_url('') ?>assets/favicon/icon.png" rel="icon">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>
    <link rel="stylesheet" href="<?= base_url('') ?>assets/summernote/summernote-bs4.css">
    <!-- Fontfaces CSS-->
    <link href="<?= base_url('') ?>assets/admin2/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin2/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url('') ?>assets/admin2/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url('') ?>assets/admin2/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin2/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin2/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin2/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin2/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin2/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('') ?>assets/admin2/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <h2>Bu Kost</h2>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="<?= base_url('') ?>admin/dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>admin/kost">
                                <i class="fas fa-home"></i>Kost</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>admin/komplain">
                                <i class="fas fa-comments"></i>Komplain</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>admin/member">
                                <i class="fas fa-users"></i>Member</a>
                        </li>
                    
                        <li>
                            <a href="<?= base_url('') ?>admin/transaksi">
                                <i class="fas fa-handshake-o"></i>Transaksi</a>
                        </li>

                        

                        
                

                        <li>
                            <a href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->