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
                        <p>For a free consultation:<a href="tel:+14167312502" class="text-decoration-none">+1 (416) 731-2502</a></p>
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
                                <a class="text-decoration-none about-btn">Home <span class="next-btn"> > </span> <span class="about-span"> About Us</span></a>
                            </div>
                            <h2>About Us</h2>
                            <p class="banner-paragraph about-us-p">
                                We are all about providing quality personal support care for seniors and those in need of care in the community and nursing homes.</p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1"></div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="banner-img-section position-relative">
                            <figure class="banner-img2-figure">
                                <img src="/assets/images/about-banner-img.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- offer-section -->
<div class="offer-section offer-section1 about-offer-section" data-aos="fade-up">
    <h2 class="offer-heading">We offer you the <span class="support">best support</span></h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                <div class="offer-section-box">
                    <div class="offer-section-inner">
                        <figure>
                            <img src="/assets/images/offer-section-img1.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <h5>We’re here to help</h5>
                    <p>We are customer centric and pride ourselves in providing the best service to our customers.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                <div class="offer-section-box">
                    <div class="offer-section-inner">
                        <figure>
                            <img src="/assets/images/offer-section-img2.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <h5>Our Mission</h5>
                    <p>Our mission is to provide deeply compassionate and affectionate care in an environment that
                        promotes joy, healing and wellness.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                <div class="offer-section-box">
                    <div class="offer-section-inner">
                        <figure>
                            <img src="/assets/images/offer-section-img3.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <h5>Careers</h5>
                    <p>Are you a passionate care giver?<br />Join our team.<br /><br /></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Popup-Section -->
<div class="offer-section popup-section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-3">
                <h2 data-aos="fade-up">Welcome to Pleroma<span class="support">Care</span></h2>
                <p>Our focus is providing deeply compassionate and affectionate care by people who are well trained and truly care, in an environment that
                    promotes joy, healing and wellness.</p>
                <div class="popup-btn">
                    <a href="#">About us</a>
                </div>
                <h4>Need more info?</h4>
                <h4 class="popup-section-number">+1 (888) 425-7388</h4>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 mb-lg-0 mb-md-0 mb-3">
                <div class="video-section-box">

                    <a class="popup-vime">
                        <figure class="mb-0">
                            <img src="/assets/images/popup-video-img.png" style="cursor: pointer" alt="" class="img-fluid video-img rounded-40">
                        </figure>
                    </a>
                    <figure class="position-absolute popup-top-figure">
                        <img src="/assets/images/video-section-top-img.png" alt="" class="img-fluid">
                    </figure>
                    <figure class="position-absolute popup-bottom-figure">
                        <img src="/assets/images/video-section-bottom-img.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter-Section -->
<div class="counter-section2">
    <div class="container">
        <div class="counter-inner-row">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-sm-2">
                    <div class="counter-inner-box vl-border">
                        <h5><span class="counter">45</span></h5>
                        <p>Donations Every Year</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-sm-2">
                    <div class="counter-inner-box vl-right-border">
                        <h5><span class="counter">690</span></h5>
                        <p>Great Local Volunteers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-sm-2">
                    <div class="counter-inner-box">
                        <h5><span class="counter">437</span></h5>
                        <p>Face to Face Visits</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-sm-2">
                    <div class="counter-inner-box border-right-box">
                        <h5><span class="counter">170</span></h5>
                        <p>Organized Local Events</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service-Offer-Section -->
<div class="service-offer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="service-offer-content" data-aos="fade-up">
                    <h2>Services We<span class="support">Offer</span></h2>
                    <p>Our personalized and caring services for (Assisted Living &
                        Independent Living), as well as provision of nurses and PSWs from Phillipines and Africa</p>
                </div>
                <div class="service-inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <figure class="service-figure-mb">
                                <img src="/assets/images/service-offer-section-img1.png" alt="" class="img-fluid">
                            </figure>
                            <div class="offer-img-content">
                                <h5>Errands</h5>
                                {{-- <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <figure class="service-figure-mb">
                                <img src="/assets/images/service-offer-section-img2.png" alt="" class="img-fluid">
                            </figure>
                            <div class="offer-img-content">
                                <h5>Meal Prep</h5>
                                {{-- <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <figure class="service-figure-mb">
                                <img src="/assets/images/service-offer-section-img3.png" alt="" class="img-fluid">
                            </figure>
                            <div class="offer-img-content">
                                <h5>Care Givers</h5>
                                {{-- <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <figure class="service-figure-mb">
                                <img src="/assets/images/service-offer-section-img4.png" alt="" class="img-fluid">
                            </figure>
                            <div class="offer-img-content">
                                <h5>Personal Support</h5>
                                {{-- <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-inner mb-0">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <figure class="service-figure-mb">
                                <img src="/assets/images/service-offer-section-img-hygiene.png" alt="" class="img-fluid">
                            </figure>
                            <div class="offer-img-content">
                                <h5>Personal Hygiene Care</h5>
                                {{-- <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <figure class="service-figure-mb">
                                <img src="/assets/images/service-offer-section-img5.png" alt="" class="img-fluid">
                            </figure>
                            <div class="offer-img-content">
                                <h5>Friendly Companionship</h5>
                                {{-- <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <figure class="service-figure-mb">
                                <img src="/assets/images/service-offer-section-img6.png" alt="" class="img-fluid">
                            </figure>
                            <div class="offer-img-content">
                                <h5>Support with Appointments</h5>
                                {{-- <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <figure class="service-figure-mb">
                                <img src="/assets/images/service-offer-section-img7.png" alt="" class="img-fluid">
                            </figure>
                            <div class="offer-img-content">
                                <h5>Medication Reminders</h5>
                                {{-- <p class="mb-0">Duis aute irure dolor in reprehen voluptate velit esse cillum.</p> --}}
                            </div>
                        </div>

                    </div>
                </div>
                <div class="service-inner mb-0">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <figure class="service-figure-mb">
                                <img src="/assets/images/service-offer-section-img8.png" alt="" class="img-fluid">
                            </figure>
                            <div class="offer-img-content">
                                <h5>Driving Companions</h5>
                                {{-- <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <figure class="service-figure-mb">
                                <img src="/assets/images/service-offer-section-img9.png" alt="" class="img-fluid">
                            </figure>
                            <div class="offer-img-content">
                                <h5>House Keeping</h5>
                                {{-- <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <figure class="service-figure-mb">
                                <img src="/assets/images/service-offer-section-img10.png" alt="" class="img-fluid">
                            </figure>
                            <div class="offer-img-content">
                                <h5>Live-in Care</h5>
                                {{-- <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <figure class="service-figure-mb">
                                <img src="/assets/images/service-offer-section-img11.png" alt="" class="img-fluid">
                            </figure>
                            <div class="offer-img-content">
                                <h5>Laundry</h5>
                                {{-- <p class="mb-0">Duis aute irure dolor in reprehen voluptate velit esse cillum.</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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