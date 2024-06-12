
<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <link rel="stylesheet" href="assets/css/rangeSlider.min.css">
        <link rel="stylesheet" href="assets/css/fancybox.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/dark-style.css">

        <title>{{env('APP_NAME')}} - Adapting the future</title>

        <link rel="icon" type="image/png" href="https://templates.envytheme.com/tracer/default/assets/img/favicon.png">
    </head>
    <body>

        <!-- Dark/Light Toggle -->
		<div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="loader">
                <div class="sbl-half-circle-spin">
                    <div></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area navbar-style-two">
            <div class="tracer-responsive-nav">
                <div class="container">
                    <div class="tracer-responsive-menu">
                        <div class="logo black-logo">
                            <a href="/">
                                <img src="assets/img/logo.png" style="width:50px;" alt="logo">
                            </a>
                        </div>
                        <div class="logo white-logo">
                            <a href="index.html">
                                <img src="assets/img/logo.png" style="width:50px;" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tracer-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand black-logo" href="index.html">
                            <img src="assets/img/logo.png" style="width:50px;" style="width:50px;" alt="logo">
                        </a>
                        <a class="navbar-brand white-logo" href="index.html">
                            <img src="assets/img/logo.png" style="width:50px;" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="/" class="nav-link active">Home </a>
                                
                                </li>

                                <li class="nav-item"><a href="about" class="nav-link">About Us</a>
                                  
                                </li>

                                <li class="nav-item"><a href="services" class="nav-link">Services </a>
                                   
                                </li>

                                <li class="nav-item"><a href="works" class="nav-link">Our Works </a>
                                 
                                </li>

                                <li class="nav-item"><a href="technology" class="nav-link">Technology </a>
                                   
                                </li>

                                <li class="nav-item"><a href="contact" class="nav-link">Contact Us </a>
                                    
                                </li>
                            </ul>

                            <div class="others-option d-flex align-items-center">
                                <div class="option-item">
                                    <a href="#" class="default-btn"><i class="flaticon-right"></i>More<span></span></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-option">
                                <div class="option-item">
                                    <a href="tel:{{env('SKYSOFT_CONTACT')}}" class="default-btn"><i class="flaticon-right"></i>Call Us<span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
     @yield('content')

  

        <!-- Start Partner Area -->
        <div class="partner-area pb-100 bg-f1f8fb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                        <div class="single-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <img src="{{env('APP_ASSETS_URL')}}/assets/img/partners/tana.png" alt="image">
                        </div>
                    </div>

                    
                </div>
            </div>

            <div class="divider"></div>
        </div>
        <!-- End Partner Area -->


        <!-- Start Subscribe Area -->
        <section class="subscribe-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="subscribe-image">
                            <img src="https://templates.envytheme.com/tracer/default/assets/img/subscribe-img1.png" data-speed="0.06" data-revert="true" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="subscribe-content">
                            <h2 class="wow animate__animated animate__fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Do you want to get feeds from us?</h2>
                            <p class="wow animate__animated animate__fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">Subscribe to our weekly news and offers.</p>
                            <form class="newsletter-form wow animate__animated animate__fadeInUp" data-bs-toggle="validator" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <input type="text" class="input-newsletter" placeholder="Enter your email address" name="EMAIL" required autocomplete="off">
                                <button type="submit" class="default-btn"><i class="flaticon-tick"></i>Subscribe Now<span></span></button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Subscribe Area -->

        <!-- Start Footer Area -->
        <footer class="footer-area bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <a href="index.html" class="logo black-logo">
                                <img src="assets/img/logo.png" style="width: 100px" alt="logo">
                            </a>
                            <a href="/" class="logo white-logo">
                                <img src="assets/img/logo.png" style="width:100px;" alt="logo">
                            </a>
                            <h3><em>Adapting the future</em></h3>
                            <ul class="social-link">
                                <li><a href="{{env('FACEBOOK_LINK')}}" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="{{env('TWITTER_LINK')}}" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="{{env('INSTAGRAM_LINK')}}" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                                <li><a href="{{env('LINKEDIN_LINK')}}" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Explore</h3>
                            <ul class="footer-links-list">
                                <li><a href="/">Home</a></li>
                                <li><a href="about">About</a></li>
                                <li><a href="serrvices">Services</a></li>
                                <li><a href="works">Our Works</a></li>
                                <li><a href="contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                  

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Address</h3>
                            <ul class="footer-contact-info">
                                <li><i class='bx bx-map'></i>Ruaka, Nairobi county Kenya, Ruaka Town </li>
                                <li><i class='bx bx-phone-call'></i><a href="tel:+254751751681">+254 751 751 681</a></li>
                                <li><i class='bx bx-envelope'></i><a href="info@skysofttechnology.com"><span class="__cf_email__">info@skysofttechnology.com</span></a></li>
                                <li><i class='bx bxs-inbox'></i><a href="tel:+254751751681">+254751751681</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom-area">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <p><i class='bx bx-copyright'></i><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> <strong>SKYSOFT</strong> is Proudly Powered by <a target="_blank" href="{{env('APP_URL')}}">Skysoft Technologies</a></p>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <ul>
                                <li><a href="policy">Privacy Policy</a></li>
                                <li><a href="terms">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d255282.39753362627!2d36.885189!3d-1.3024769!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e331be47ad1efd%3A0x4aad74000212d3c3!2sskysoft%20technology!5e0!3m2!1sen!2ske!4v1718194691364!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </footer>
        <!-- End Footer Area -->

        <div class="go-top"><i class="flaticon-up"></i></div>
        <script src="https://widget.trustmary.com/dkrzaKy9L"></script>
        <!-- Links of JS files -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/tilt.jquery.min.js"></script>
        <script src="assets/js/meanmenu.min.js"></script>
        <script src="assets/js/nice-select.min.js"></script>
        <script src="assets/js/rangeSlider.min.js"></script>
        <script src="assets/js/sticky-sidebar.min.js"></script>
        <script src="assets/js/fancybox.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/TweenMax.min.js"></script>
        <script src="assets/js/ScrollMagic.min.js"></script>
        <script src="assets/js/animation.gsap.min.js"></script>
        <script src="assets/js/debug.addIndicators.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.js"></script>
        <script src="assets/js/ajaxchimp.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>