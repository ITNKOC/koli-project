<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ashion </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet"
        href="<?= URI."assets/front/fonts/fonts/material-icon/css/material-design-iconic-font.min.css"?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= URI."assets/front/css/styleTemp.css"?>">
    <link rel="stylesheet" href="<?= URI."assets/front/css/bootstrap.min.css" ?>" type=" text/css">
    <link rel="stylesheet" href="<?= URI."assets/front/css/font-awesome.min.css"?>" type=" text/css">
    <link rel="stylesheet" href="<?= URI."assets/front/css/elegant-icons.css"?>" type=" text/css">
    <link rel="stylesheet" href="<?= URI."assets/front/css/jquery-ui.min.css"?>" type=" text/css">
    <link rel="stylesheet" href="<?= URI."assets/front/css/magnific-popup.css"?>" type=" text/css">
    <link rel="stylesheet" href="<?= URI."assets/front/css/owl.carousel.min.css"?>" type=" text/css">
    <link rel="stylesheet" href="<?= URI."assets/front/css/slicknav.min.css"?>" type=" text/css">
    <link rel="stylesheet" href="<?= URI."assets/front/css/style.css"?>" type=" text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="<?=URI?>paniers/shopCart"><span class="icon_bag_alt"></span>
                    <div class="tip"></div>
                </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index"><img src="<?= URI."assets/front/img/logo.png " ?>" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="<?= URI."auths/login " ?>">Login</a>
            <a href="<?= URI."auths/register " ?>">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="<?= URI."articles/index " ?>"><img src="<?= URI."assets/front/img/logo.png " ?>"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="<?= URI."articles/index " ?>">Home</a></li>
                            <li><a href="<?= URI."articles/shop" ?>">Shop</a></li>
                            <li><a href="<?= URI."clients/blog " ?>">Blog</a></li>
                            <li><a href="<?= URI."clients/contact " ?>">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <?php
                       
                            if (isset($_SESSION['utilisateur'])) {
                                echo  "<a href=".URI."auths/deconnexion>Deconexion</a>";  
                            }else{
                                echo  "<a href=".URI."auths/login>Login</a>";
                            }
                    
                            ?>

                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="#"><span class="icon_bag_alt"></span>
                                    <div class="tip">statique</div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->