@extends('layouts/main')

@section('contents')
<!-- App Capsule -->
    <div id="appCapsule">

        <div class="section full mb-1 mt-1">
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
                                <button type="button" class="btn btn-outline-primary shadowed my-3 mx-3">Detail</button>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="images/e-commerce.png" class="card-img-top" alt="image">
                                <button type="button" class="btn btn-outline-primary shadowed my-3 mx-3">Detail</button>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="images/konsultan.png" class="card-img-top" alt="image">
                                <button type="button" class="btn btn-outline-primary shadowed my-3 mx-3">Detail</button>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="images/company_profile.png" class="card-img-top" alt="image">
                                <button type="button" class="btn btn-outline-primary shadowed my-3 mx-3">Detail</button>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="images/undangan_digital.png" class="card-img-top" alt="image">
                                <button type="button" class="btn btn-outline-primary shadowed my-3 mx-3">Detail</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- * carousel multiple -->

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
                <div class="col-sm-12 items mb-3">
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
                <button type="button" class="btn btn-outline-primary shadowed me-1 mb-1">Request</button>
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
                <div class="col-sm-12 items mb-3">
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
                <button type="button" class="btn btn-outline-primary shadowed me-1 mb-1">Request</button>
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
                <div class="col-sm-12 items mb-3">
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
                <button type="button" class="btn btn-outline-primary shadowed me-1">Request</button>
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
@endsection