@extends('layouts/main')


@section('contents')

<div id="appCapsule">
    <div class="section full" style="display: flex;">
        <div class="col-3 image-place">
            <img src="images/digitech.png" alt="">
        </div>
        <div class="col 9 text-image">
            <h3>Digital Technology Indonesia</h3>
            <p class="mb-0">Merupakan Salah Satu Website Platform yang berpusat di Lampung yang menyediakan jasa Pembuatan Progressive Web App secara Profesional.</p>
        </div>
    </div>
    <div class="section full mt-1">
        <div class="wide-block pt-2 pb-2">

            <ul class="nav nav-tabs capsuled" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                        Description
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                        Our Team
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#contact" role="tab">
                        Contact
                    </a>
                </li>
            </ul>
            <div class="tab-content mt-2">
                <div class="tab-pane fade show active" id="home" role="tabpanel">
                    <div class="accordion" id="accordionExample1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion1">
                                    Is this PWA?
                                </button>
                            </h2>
                            <div id="accordion1" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    Yes, Mobilekit is PWA ready html template. You can build mobile websites and progressive web
                                    apps with it.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion2">
                                    What CSS framework this theme use?
                                </button>
                            </h2>
                            <div id="accordion2" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    We are using Bootstrap 5.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion3">
                                    What can i do with this template?
                                </button>
                            </h2>
                            <div id="accordion3" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    You can make mobile websites or progressive web apps for mobile devices.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion4">
                                    Is this WordPress theme?
                                </button>
                            </h2>
                            <div id="accordion4" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    No. It is a html template. Mobilekit build with HTML, CSS, Javascript and some love.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel">
                    <ul class="listview image-listview media">
                        <li>
                            <div class="item">
                                <div class="imageWrapper">
                                    <img src="template/img/sample/avatar/avatar1.jpg" alt="image" class="imaged w64">
                                </div>
                                <div class="in">
                                    <div>
                                        Rickie Baroch
                                        <div class="text-muted">CEO</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="imageWrapper">
                                    <img src="template/img/sample/avatar/avatar2.jpg" alt="image" class="imaged w64">
                                </div>
                                <div class="in">
                                    <div>
                                        Erika Mateo
                                        <div class="text-muted">Designer</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="imageWrapper">
                                    <img src="template/img/sample/avatar/avatar4.jpg" alt="image" class="imaged w64">
                                </div>
                                <div class="in">
                                    <div>
                                        Emelda Scandroot
                                        <div class="text-muted">Developer</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel">
                    <div class="section-title">Fill the form to contact us *</div>
                    <div class="wide-block pt-2 pb-2">
                        <form>
                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="text" class="form-control" id="name5" placeholder="Name">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="email" class="form-control" id="email5" placeholder="Email">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <textarea id="address5" rows="4" class="form-control" placeholder="Message"></textarea>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="mt-1">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Send
                                </button>
                            </div>

                        </form>

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