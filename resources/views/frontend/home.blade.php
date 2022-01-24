<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>DIGITECH || DIGITAL TECHNOLOGY</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 5, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="images/digitech.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="images/digitech.png">
    <link rel="stylesheet" href="template/css/style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="manifest" href="temnplate/__manifest.json">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-secondary scrolled">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="offcanvas" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <img src="images/digitech.png" alt="">
        </div>
        <div class="right">
            <a href="#" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="#" class="ms-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

    <!-- App Capsule -->
    <div id="appCapsule" style="padding-top: 10px;">

        <div class="section full mb-1">
            <div class="section-title" style="display: flex; justify-content: center;">
                <h1 class="title">
                    <img src="images/digitech.png" alt="">
                </h1>
            </div>
            <!-- carousel full -->
            <div class="carousel-full splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="images/digitech_banner.png" alt="alt" class="imaged w-100 square">
                        </li>
                        <li class="splide__slide">
                            <img src="images/digitech_banner.png" alt="alt" class="imaged w-100 square">
                        </li>
                        <li class="splide__slide">
                            <img src="images/digitech_banner.png" alt="alt" class="imaged w-100 square">
                        </li>
                    </ul>
                </div>
            </div>
            <!-- * carousel full -->
        </div>

        <div class="header-large-title">
            <h4 class="subtitle">OUR SERVICES</h4>
        </div>

        <div class="section full mt-1 mb-1">

            <!-- carousel multiple -->
            <div class="carousel-multiple splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="card">
                                <img src="images/siakad.png" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">SIAKAD</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="images/e-commerce.png" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">E-Commerce</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="images/konsultan.png" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Skripsi Konsultan</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="images/company_profile.png" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Company Profile</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="images/undangan_digital.png" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Digital Invitation</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- * carousel multiple -->

        </div>


        <div class="section mt-3 mb-1">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-end">
                    <div>
                        <h6 class="card-subtitle">Discover</h6>
                        <h5 class="card-title mb-0 d-flex align-items-center justify-content-between">
                            Dark Mode
                        </h5>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodecontent">
                        <label class="form-check-label" for="darkmodecontent"></label>
                    </div>

                </div>
            </div>
        </div>

        <div class="header-large-title mt-3">
            <h2 style="text-align: center;">PROMO IN THIS MONTH</h2>
        </div>
        <div class="section row mt-1 mb-1" style="display: flex; justify-content: space-around;">
            <div class="col-md-3 promo">
                <div class="col-sm-12 title mt-5">
                    Web Development Package
                </div>
                <div class="col-sm-12 sub-title mt-1">
                    <ion-icon size="large" name="medkit-outline" style="margin-right: 5px;"></ion-icon>
                    Company Profile
                </div>
                <div class="col-sm-12 price mt-1">
                    Rp. 5.000.000
                </div>
                <div class="col-sm-10 line mt-3 mb-3"></div>
                <div class="col-sm-12 items mb-5">
                    <div class="item mb-1">
                        <div class="col-sm-10">
                            Free Domain + Hosting 2GB
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="item mb-1">
                        <div class="col-sm-10">
                            CRUD Sistem (Administrator)
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="item mb-1">
                        <div class="col-sm-10">
                            Standart Fitures and Menu
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="item mb-1">
                        <div class="col-sm-10">
                            Free One Month Maintenance
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-sm-10">
                            Request and Design Content
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 promo">
                <div class="col-sm-12 title mt-5">
                    Web Development Package
                </div>
                <div class="col-sm-12 sub-title mt-1">
                    <ion-icon size="large" name="medkit-outline" style="margin-right: 5px;"></ion-icon>
                    Konsultasi Skripsi
                </div>
                <div class="col-sm-12 price mt-1">
                    Rp. 6.000.000
                </div>
                <div class="col-sm-10 line mt-3 mb-3"></div>
                <div class="col-sm-12 items mb-5">
                    <div class="item mb-1">
                        <div class="col-sm-10">
                            Free Domain + Hosting 2GB
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="item mb-1">
                        <div class="col-sm-10">
                            CRUD Sistem (Administrator)
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="item mb-1">
                        <div class="col-sm-10">
                            Standart Fitures and Menu
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="item mb-1">
                        <div class="col-sm-10">
                            Konsultasi Sampai Sidang (only Weekend)
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="item mb-1">
                        <div class="col-sm-10">
                            Include Naskah SoftCopy
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-sm-10">
                            Request and Design Content
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 promo">
                <div class="col-sm-12 title mt-5">
                    Web Development Package
                </div>
                <div class="col-sm-12 sub-title mt-1">
                    <ion-icon size="large" name="medkit-outline" style="margin-right: 5px;"></ion-icon>
                    SIAKAD
                </div>
                <div class="col-sm-12 price mt-1">
                    Rp. 3.000.000
                </div>
                <div class="col-sm-10 line mt-3 mb-3"></div>
                <div class="col-sm-12 items mb-5">
                    <div class="item mb-1">
                        <div class="col-sm-10">
                            Free Domain + Hosting 2GB
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="item mb-1">
                        <div class="col-sm-10">
                            CRUD Sistem (Administrator)
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="item mb-1">
                        <div class="col-sm-10">
                            Standart Fitures and Menu
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="item mb-1">
                        <div class="col-sm-10">
                            Free One Month Maintenance
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-sm-10">
                            Request and Design Content
                        </div>
                        <div class="col-sm-2">
                            <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- app footer -->
        <div class="appFooter bg-secondary">
            <img style="height: 60px;" src="images/digitech.png" alt="icon" class="footer-logo mb-2">
            <div class="footer-title">
                Copyright © Digitech <span class="yearNow"></span>. All Rights Reserved.
            </div>
            <div>Digital Technology Indonesia.</div>
            Great way to start your mobile websites and pwa projects.

            <div class="mt-2">
                <a href="#" class="btn btn-icon btn-sm btn-facebook">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-twitter">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-linkedin">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-instagram">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-whatsapp">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-secondary goTop">
                    <ion-icon name="arrow-up-outline"></ion-icon>
                </a>
            </div>

        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu rounded">
        <a href="#" class="item">
            <div class="col">
                <ion-icon name="folder-open-outline"></ion-icon>
                <strong>Our Services</strong>
            </div>
        </a>
        <a href="#" class="item">
            <div class="col">
                <ion-icon name="business-outline"></ion-icon>
                <strong>About Us</strong>
            </div>
        </a>
        <a href="/" class="item">
            <div class="col">
                <div class="action-button large">
                    <ion-icon name="home-outline"></ion-icon>
                </div>
            </div>
        </a>
        <a href="#" class="item">
            <div class="col">
                <ion-icon name="logo-whatsapp"></ion-icon>
                <strong>Whatsapp</strong>
            </div>
        </a>
        <a href="#sidebarPanel" class="item" data-bs-toggle="offcanvas">
            <div class="col">
                <ion-icon name="menu-outline"></ion-icon>
                <strong>Tab Menu</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarPanel">
        <div class="offcanvas-body">
            <!-- profile box -->
            <div class="profileBox">
                <div class="image-wrapper">
                    <img src="images/digitech.png" alt="image" class="imaged rounded">
                </div>
                <div class="in">
                    <strong>DIGITECH</strong>
                    <div class="text-muted">
                        <ion-icon name="location"></ion-icon>
                        Indonesia
                    </div>
                </div>
                <a href="#" class="close-sidebar-button" data-bs-dismiss="offcanvas">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <!-- * profile box -->

            <ul class="listview flush transparent no-line image-listview mt-2">
                <li>
                    <a href="/" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="in">
                            Home
                        </div>
                    </a>
                </li>
                <li>
                    <a href="app-components.html" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="folder-open-outline"></ion-icon>
                        </div>
                        <div class="in">
                            Our Services
                        </div>
                    </a>
                </li>
                <li>
                    <a href="app-pages.html" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="business-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>About Us</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="page-chat.html" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="logo-whatsapp"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Contact Us</div>
                            <span class="badge badge-danger"></span>
                        </div>
                    </a>
                </li>
                <li>
                    <div class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="moon-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Dark Mode</div>
                            <div class="form-check form-switch">
                                <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodesidebar">
                                <label class="form-check-label" for="darkmodesidebar"></label>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- * App Sidebar -->

    <!-- welcome notification  -->
    <div id="notification-welcome" class="notification-box">
        <div class="notification-dialog android-style">
            <div class="notification-header">
                <div class="in">
                    <img src="images/digitech.png" alt="image" class="imaged w24">
                    <strong>Digitech</strong>
                    <span>just now</span>
                </div>
                <a href="#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">Welcome to Digitech</h3>
                    <div class="text">
                        Built Your World Digital With Us
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * welcome notification -->

    <!-- ============== Js Files ==============  -->
    <!-- Bootstrap -->
    <script src="template/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="template/js/plugins/splide/splide.min.js"></script>
    <!-- ProgressBar js -->
    <script src="template/js/plugins/progressbar-js/progressbar.min.js"></script>
    <!-- Base Js File -->
    <script src="template/js/base.js"></script>

    <script>
        // Trigger welcome notification after 5 seconds
        setTimeout(() => {
            notification('notification-welcome', 5000);
        }, 2000);
    </script>

</body>

</html>