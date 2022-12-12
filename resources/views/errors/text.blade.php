
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

        <title>{{env('APP_NAME')}}-Error Page</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
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

        <!-- Start 404 Error Area -->
        <section class="error-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="error-content">
                            <img src="assets/img/error.png" alt="image">
                            <h3>Error @yield('code') : @yield('message')</h3>
                            
                            <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                            <div class="btn-box">
                                <button onclick="history.back()" class="default-btn"><i class="flaticon-history"></i>Go Back<span></span></button>
                                <button href="/" class="default-btn"><a href="/"><i class="flaticon-earth-day"></i>Homepage</a><span></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End 404 Error Area -->

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