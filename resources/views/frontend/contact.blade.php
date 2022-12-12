@extends('layouts.main')
@section('content')
        <!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>

            <div class="shape-img1"><img src="assets/img/shape/shape1.svg" alt="image"></div>
            <div class="shape-img2"><img src="assets/img/shape/shape2.png" alt="image"></div>
            <div class="shape-img3"><img src="assets/img/shape/shape3.png" alt="image"></div>
        </section>
        <!-- End Page Title Area -->

        <!-- Start Contact Info Area -->
        <section class="contact-info-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <div class="back-icon">
                                <i class='bx bx-map'></i>
                            </div>
                            <div class="icon">
                                <i class='bx bx-map'></i>
                            </div>
                            <h3>Our Address</h3>
                            <p>Kianjai next to Eringo, Limiri building 3rd floor RM 1 along Meru Maua highway </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <div class="back-icon">
                                <i class='bx bx-phone-call'></i>
                            </div>
                            <div class="icon">
                                <i class='bx bx-phone-call'></i>
                            </div>
                            <h3>Contact</h3>
                            <p>Mobile: <a href="tel:+254769265559">(+254) 769 265 559</a></p>
                            <p>E-mail: <a href="mailto:info@skysoft.co.ke"><span class="__cf_email__" data-cfemail="254d4049494a655157444640570b464a48">info@skysoft.co.ke</span></a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="contact-info-box">
                            <div class="back-icon">
                                <i class='bx bx-time-five'></i>
                            </div>
                            <div class="icon">
                                <i class='bx bx-time-five'></i>
                            </div>
                            <h3>Hours of Operation</h3>
                            <p>Monday - Saturday: 08:00 - 20:00</p>
                            <p>Sunday & holidays: 10:30 - 6:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Info Area -->

        <!-- Start Contact Area -->
        <section class="contact-area pb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title"><img src="assets/img/star-icon.png" alt="image"> Get in Touch</span>
                    <h2>Ready to Get Started?<span class="overlay"></span></h2>
                    <p>Your email address will not be published. Required fields are marked *</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-image" data-tilt>
                            <img src="assets/img/contact.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="contact-form">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="Your email address">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Your phone number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn"><i class="flaticon-tick"></i>Send Message<span></span></button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->

        <!-- Start Map Area -->
        <div id="map">
            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=900&amp;height=400&amp;hl=en&amp;q=kianjai eringo&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://mcpedls.com/">minecraft download</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
            </div>
        <!-- End Map Area -->
@endsection