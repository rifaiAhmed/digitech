@extends('layouts/main')


@section('contents')

<div id="appCapsule">
    <div class="header-large-title">
        <h4 class="subtitle">OUR SERVICES</h4>
    </div>
    <div class="section full">
        <div class="row out">
            <div class="col-4 list">
                <div class="card product-card">
                    <div class="card-body">
                        <img src="images/siakad.png" class="image" alt="product image">
                        <h2 class="title">SIAKAD</h2>
                        <p class="text">Progressive Web App</p>
                        <a href="#" class="btn btn-sm btn-primary btn-block">KONSULTASI</a>
                    </div>
                </div>
            </div>
            <div class="col-4 list">
                <div class="card product-card">
                    <div class="card-body">
                        <img src="images/e-commerce.png" class="image" alt="product image">
                        <h2 class="title">E-Commerce</h2>
                        <p class="text">Progressive Web App</p>
                        <a href="#" class="btn btn-sm btn-primary btn-block">KONSULTASI</a>
                    </div>
                </div>
            </div>
            <div class="col-4 list">
                <div class="card product-card">
                    <div class="card-body">
                        <img src="images/konsultan.png" class="image" alt="product image">
                        <h2 class="title">Project Skripsi</h2>
                        <p class="text">Progressive Web App</p>
                        <a href="#" class="btn btn-sm btn-primary btn-block">KONSULTASI</a>
                    </div>
                </div>
            </div>
            <div class="col-4 list">
                <div class="card product-card">
                    <div class="card-body">
                        <img src="images/company_profile.png" class="image" alt="product image">
                        <h2 class="title">Company Profil</h2>
                        <p class="text">Progressive Web App</p>
                        <a href="#" class="btn btn-sm btn-primary btn-block">KONSULTASI</a>
                    </div>
                </div>
            </div>
            <div class="col-4 list">
                <div class="card product-card">
                    <div class="card-body">
                        <img src="images/undangan_digital.png" class="image" alt="product image">
                        <h2 class="title">Digital Invitation</h2>
                        <p class="text">Progressive Web App</p>
                        <a href="#" class="btn btn-sm btn-primary btn-block">KONSULTASI</a>
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
            <a href="https://wa.me/6285709471660" class="btn btn-icon btn-sm btn-whatsapp">
                <ion-icon name="logo-whatsapp"></ion-icon>
            </a>
            <a href="#" class="btn btn-icon btn-sm btn-secondary goTop">
                <ion-icon name="arrow-up-outline"></ion-icon>
            </a>
        </div>

    </div>
    <!-- * app footer -->

</div>
    
@endsection