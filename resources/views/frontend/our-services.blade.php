@extends('layouts/main')


@section('contents')

<div id="appCapsule">
    <div class="section full">
        <div class="row">
            <div class="col-5">
                <div class="card product-card">
                    <div class="card-body">
                        <img src="template/img/sample/photo/product1.jpg" class="image" alt="product image">
                        <h2 class="title">Apple</h2>
                        <p class="text">1 kg</p>
                        <div class="price">$ 1.50</div>
                        <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card product-card">
                    <div class="card-body">
                        <img src="template/img/sample/photo/product4.jpg" class="image" alt="product image">
                        <h2 class="title">Beetroot</h2>
                        <p class="text">1 piece</p>
                        <div class="price">$ 4.99</div>
                        <a href="#" class="btn btn-sm btn-primary btn-block">ADD TO CART</a>
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
    
@endsection