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
    <div class="appHeader bg-primary">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="offcanvas" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            DIGITECH
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

    {{-- konten --}}

    @yield('contents')

    {{-- end konten --}}

    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="/our-services" class="item">
            <div class="col">
                <ion-icon name="folder-open-outline"></ion-icon>
                <strong>Our Services</strong>
            </div>
        </a>
        <a href="/about-us" class="item">
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
        <a href="https://wa.me/6285709471660" target="_blank" class="item">
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
                    <a href="/aour-services" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="folder-open-outline"></ion-icon>
                        </div>
                        <div class="in">
                            Our Services
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/about-us" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="business-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>About Us</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="https://wa.me/6285709471660" target="_blank" class="item">
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