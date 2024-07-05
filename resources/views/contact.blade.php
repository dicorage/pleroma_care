@extends('layouts.main')
@section('content')
<!-- Top-Header-Section -->
<div class="home-header-section sub-header-section">
    <div class="header-top header-top1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 d-md-block d-sm-none">
                    <div class="header-left d-table-cell align-middle">
                        <div class="phone-icon d-inline-block"><i class="fa-solid fa-phone-volume"></i></div>
                        <p>For a free consultation:<a href="tel:+18884257388" class="text-decoration-none">+1 (888) 425-7388</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="header-right float-md-right float-none">
                        <ul class="list-unstyled">
                            <li class="d-inline-block"><i class="fa-sharp fa-solid fa-envelope"></i><a class="d-inline-block email-span text-decoration-none" href="mailto:info@pleromacare.com">info@pleromacare.com</a></li>
                            {{-- <li class="d-inline-block user-li"><i class="fa-solid fa-user"></i><a
                                    class="d-inline-block user-span text-decoration-none" href="login.html">Login</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Header-Section -->
    <header class="header">
        <div class="main-header">
            <div class="container">
                @include('partials.menu')
            </div>
        </div>
    </header>
    <!-- BANNER-SECTION -->
    <div class="home-banner-section overflow-hidden home-banner-section2 home-banner-section1 sub-banner">
        <div class="banner-container-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-md-0 mb-4 text-md-left text-center d-flex align-items-center">
                        <div class="home-banner-text" data-aos="fade-up">
                            <div class="banner-btn discover-btn-banner">
                                <a href="/" class="text-decoration-none about-btn">Home <span class="next-btn"> > </span> <span class="about-span"> Contact</span></a>
                            </div>
                            <h2>Contact Us</h2>
                            <p class="banner-paragraph about-us-p">We are waiting to hear from you.</p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1"></div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="banner-img-section position-relative">
                            <figure class="banner-img2-figure">
                                <img src="assets/images/contact-banner.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- offer-section -->
<div class="offer-section offer-section1 about-offer-section contact-offer-section" data-aos="fade-up">
    <h2 class="offer-heading">We alway here to<span class="support"> help you</span></h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                <div class="offer-section-box">
                    <div class="offer-section-inner">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h5>Address</h5>
                    <p>31 Conair Parkway, Woodbridge. On. L4H 0S4, Canada</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                <div class="offer-section-box">
                    <div class="offer-section-inner">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <h5>Phone</h5>
                    <p>Phone: +1 (888) 425-7388</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-0">
                <div class="offer-section-box">
                    <div class="offer-section-inner">
                        <i class="fa-sharp fa-solid fa-envelope"></i>
                    </div>
                    <h5>Email</h5>
                    <p>info@pleromacare.com</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Happy-Clients-Section  -->
<section class="happy-clients-section happy-clients-section3 contact-form-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 data-aos="fade-up">Contact Form</h2>
                <div class="carousel-card-form position-relative">
                    @include('partials.errors')
                    <form method="post" action="/contact">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="border-bottom-outer position-relative">
                                    <input class="form-input-fields" type="text" id="fname" name="fname" placeholder="First Name" value="{{ old('fname')}}">
                                </div>
                                <input class="form-input-fields" type="text" id="email" name="email" placeholder="Email" value="{{ old('email')}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input class="form-input-fields" type="text" id="lname" name="lname" placeholder="Last Name" value="{{ old('lname')}}">
                                <input class="form-input-fields" type="text" id="phone" name="phone" placeholder="Phone" value="{{ old('phone')}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input class="form-input-fields" type="text" id="subject" name="subject" placeholder="Subject" value="{{ old('subject')}}">
                            </div>
                            <figure class="carousel-bottom-fig"><img src="assets/images/carousel-bottom-img.png" alt="" class="img-fluid"></figure>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text" id="message" name="message" class="message-field" placeholder="Message" value="{{ old('message')}}">
                                <div class="popup-btn">
                                    <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                                </div>
                            </div>
                            <figure class="carousel-bottom-fig"><img src="assets/images/carousel-bottom-img.png" alt="" class="img-fluid"></figure>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="/assets/js/animations.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery-3.6.0.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<script src="/assets/js/custom-script.js"></script>
<script src="/assets/js/owl.carousel.js"></script>
<script src="../../unpkg.com/aos%402.3.1/dist/aos.js"></script>
<script src="/assets/js/text-animations.js"></script>
<script src="/assets/js/carousel.js"></script>
<script src="/assets/js/video-section.js"></script>
@endsection
@section('css')
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/mobile.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<link href="../../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
<link href="/assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link href="/assets/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
@endsection