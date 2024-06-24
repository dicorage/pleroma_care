<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from html.designingmedia.com/sencare/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Aug 2023 07:42:48 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | {{ $title }}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../apple-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../apple-icon-152x152.html">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png">
    {{-- <link rel="manifest" href="https://html.designingmedia.com/manifest.json"> --}}
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    @yield('css')
</head>

<body>
    @yield('content')
    <!-- Footer -->
    <div class="footer-section footer-img-section position-relative">
        <figure class="sencare-left-footer">
            <img src="/assets/images/footer-left-img.png" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <figure class="sencare-logo-footer sencare-logo1">
                        <a class="navbar-brand mr-0" href="index-2.html"><img src="/assets/images/sencare-logo.png" alt="" class="img-fluid"></a>
                    </figure>
                    <p class="footer-text">Copyright {{ date('Y') }}, Pleroma Care</p>
                    <div class="social-icons text-center">
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-twitter social-networks"></i></a></li>
                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-facebook-f social-networks"></i></a></li>
                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-pinterest-p social-networks"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 d-lg-block d-none">
                    <ul class="list-unstyled footer-list-ul">
                        <li class="list-item footer-margin-left">
                            <h4 class="footer-link  footer-heading">
                                Useful Links
                            </h4>
                        </li>
                        <li>
                            <a href="/about" class="text-decoration-none footer-link-p">
                                About us
                            </a>
                        </li>

                        <li>
                            <a href="#" class="text-decoration-none footer-link-p">
                                FAQ Page
                            </a>
                        </li>
                        <li>
                            <a href="/contact" class="text-decoration-none footer-link-p">
                                Contact us
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <ul class="list-unstyled footer-list-ul contact-info-heading">
                        <li class="list-item footer-margin-left">
                            <h4 class="footer-link footer-heading">
                                Contact Info
                            </h4>
                        </li>
                        <li class="footer-margin-bottom">
                            <a href="about.html" class="text-decoration-none">
                                Address:
                            </a>
                        </li>
                        <li class="pr-2 mb-3">
                            <a class="text-decoration-none">
                                132 Commerce Park Drive, Unit K Barrie, Ontario.
                                L4N 0Z7
                            </a>
                        </li>
                        <li class="footer-margin-bottom">
                            <a class="text-decoration-none">
                                Email:
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="mailto:info@pleromacare.com" class="text-decoration-none">
                                info@pleromacare.com
                            </a>
                        </li>

                        <li class="footer-margin-bottom">
                            <a href="#" class="text-decoration-none">
                                Phone:
                            </a>
                        </li>
                        <li>
                            <a href="tel:+18884257388" class="text-decoration-none">
                                +1 (888) 425-7388
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <ul class="list-unstyled">
                        <li class="list-item">
                            <h4 class="footer-link  footer-heading instagram-heading">
                                Instagram
                            </h4>
                        </li>
                    </ul>
                    <div class="footer-images">
                        <div class="images-inner-box">
                            <ul class="list-unstyled mb-1">
                                <li class="list-item d-inline-block">
                                    <figure class="mb-0"><img src="/assets/images/footer-img1.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                                </li>
                                <li class="list-item d-inline-block">
                                    <figure class="mb-0"><img src="/assets/images/footer-img2.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                                </li>
                                <li class="list-item d-inline-block">
                                    <figure class="mb-0"><img src="/assets/images/footer-img3.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                                </li>
                            </ul>
                        </div>
                        <div class="images-inner-box">
                            <ul class="list-unstyled">
                                <li class="list-item d-inline-block">
                                    <figure class="mb-0"><img src="/assets/images/footer-img4.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                                </li>
                                <li class="list-item d-inline-block">
                                    <figure class="mb-0"><img src="/assets/images/footer-img5.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                                </li>
                                <li class="list-item d-inline-block">
                                    <figure class="mb-0"><img src="/assets/images/footer-img6.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('js')
</body>

</html>