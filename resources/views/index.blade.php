@extends('layouts.main')
@section('content')
   <!-- Top-Header-Section -->
<div class="header-top">
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
                        <li class="d-inline-block"><i class="fa-sharp fa-solid fa-envelope"></i><a
                                class="d-inline-block email-span text-decoration-none"
                                href="mailto:info@pleromacare.com">info@pleromacare.com</a></li>
                        {{-- <li class="d-inline-block user-li"><i class="fa-solid fa-user"></i><a
                                class="d-inline-block user-span text-decoration-none" href="login.html">Login</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home-header-section home-header-section2">
    <!--Header-Section -->
    <header class="header">
        <div class="main-header">
            <div class="container">
                @include('partials.menu')
            </div>
        </div>
    </header>
    <!-- BANNER-SECTION -->
    <div class="home-banner-section overflow-hidden home-banner-section2">
        <div class="banner-container-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-md-0 mb-4 text-md-left text-center">
                        <div class="home-banner-text" data-aos="fade-up">
                            <h1>We Care like <span class="banner-deserve">Family</span></h1>
                            <p class="banner-paragraph">
                                We offer quality personal support care for seniors and those in need of care in the community and nursing homes.</p>
                            <div class="banner-btn discover-btn-banner">
                                <a href="/about" class="text-decoration-none">OUR CARE SERVICES</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="banner-img-section position-relative">
                            <figure class="banner-img1-figure">
                                <img src="/assets/images/index2-banner-img2.png" alt="" class="img-fluid">
                            </figure>
                            <figure class="banner-img2-figure">
                                <img src="/assets/images/index2-banner-img1.png" alt="" class="img-fluid">
                            </figure>
                            <figure class="banner-img3-figure">
                                <img src="/assets/images/banner-img3.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Offer-Section -->
    <div class="offer-section">
        <div class="container">
            <h2 data-aos="fade-up">We Offer You The <span class="support">Best support</span></h2>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                    <div class="offer-section-box">
                        <div class="offer-section-inner">
                            <figure>
                                <img src="/assets/images/offer-section-img1.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Personal Care</h5>
                        <p>We offer personal care services in a caring environment.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                    <div class="offer-section-box">
                        <div class="offer-section-inner">
                            <figure>
                                <img src="/assets/images/offer-section-img2.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Home Care</h5>
                        <p>We provide home care services like house keeping, laundry and so on.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                    <div class="offer-section-box">
                        <div class="offer-section-inner">
                            <figure>
                                <img src="/assets/images/offer-section-img3.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Medical Escort</h5>
                        <p>We provide medical assistance services of nurses and PSWs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sencare-Section -->
    <div class="sencare-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="sencare-inner">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <figure class="mb-0">
                                    <img src="/assets/images/sencare-section-img1.png" alt=""
                                        class="img-fluid sencare-inner-img rounded-25">
                                </figure>
                                <div class="green-box position-relative">
                                    <div class="img-text-box" data-aos="fade-up">
                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <h4>Need more info?</h4>
                                            </li>
                                            <li><span>+1 (416) 731-2502</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="sencare-content" data-aos="fade-up">
                                    <h2>Welcome to Pleroma<span class="care">Care</span></h2>
                                    <p>Our focus is providing deeply compassionate and  affectionate care by people who are well trained and truly care, in an environment that
                                        promotes joy, healing and wellness.</p>
                                    <div class="cyber-content accordian-text position-relative">
                                        <div class="accordian-inner">
                                            <div id="accordion1">
                                                <div class="accordion-card">
                                                    <div class="" id="headingFive">
                                                        <a href="#"
                                                            class="btn btn-link text-decoration-none collapsed position-relative"
                                                            data-toggle="collapse" data-target="#collapseFive"
                                                            aria-expanded="false" aria-controls="collapseFive">
                                                            <h5>Personal Care Services</h5>
                                                        </a>
                                                    </div>
                                                    <div id="collapseFive" class="collapse"
                                                        aria-labelledby="headingFive">
                                                        <div class="card-body p-0">
                                                            <p class="text-left accordian-text-color">
                                                                personal support care for seniors and those in need of care in the community and nursing homes.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cyber-content accordian-text position-relative">
                                        <div class="accordian-inner">
                                            <div id="accordion2" class="accordion2-p">
                                                <div class="accordion-card">
                                                    <div class="" id="headingSix">
                                                        <a href="#"
                                                            class="btn btn-link text-decoration-none collapsed position-relative"
                                                            data-toggle="collapse" data-target="#collapseSix"
                                                            aria-expanded="false" aria-controls="collapseSix">
                                                            <h5 class="sencare-mb">Urgent Care Services</h5>
                                                        </a>
                                                    </div>
                                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix">
                                                        <div class="card-body p-0">
                                                            <p class="text-left accordian-text-color">
                                                                We are available on short notice  and for distant services.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="readmore-btn">
                                        <a href="/about" class="text-decoration-none">Read more</a>
                                    </div>
                                </div>
                            </div>
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
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/mobile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="../../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
    <link href="/assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/owl.theme.default.min.css" rel="stylesheet" type="text/css"> 
@endsection
@section('css')
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/mobile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="../../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
    <link href="/assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/owl.theme.default.min.css" rel="stylesheet" type="text/css"> 
@endsection