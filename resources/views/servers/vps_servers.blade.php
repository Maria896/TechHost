@extends('layouts.app')

<!-- banner section -->
<section class="xs-banner service-banner contet-to-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 align-self-center">
                <div class="xs-banner-content">
                    <div class="xs-banner-group">
                        <h2 class="banner-title wow fadeInLeft" data-wow-duration="1s">VPS HOSTING</h2>
                        <p class="wow fadeInLeft" data-wow-duration="1.5s">Share processes and data securely on a need to know basis  without the need for reconciliation it combines a permissione.</p>
                    </div>
                </div><!-- .xs-banner-content END -->
            </div>
            <div class="col-lg-5 align-self-center">
                <div class="inner-welcome-image-group wow fadeIn">
                    <img src="assets/images/innerWelcome/cloud-hosting-bg.png" data-parallax='{"y": 150}' alt="hosting image">
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- End banner section -->

<!-- shared hosting details section -->
<section class="xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">Shared Hosting</h2>
                    <h3 class="heading-title">WHY <span>SHARED HOSTING</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-us-block wow fadeInUp">
                    <div class="choose-us-img">
                        <img src="assets/images/chooseUs/choose-us-1.png" alt="hostinza hosting image">
                    </div>
                    <h4 class="xs-title">99.9% Uptime Guarantee</h4>
                    <p>Share processes and data secure <br> lona need to know basis</p>
                </div><!-- .why-choose-us-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-us-block wow fadeInUp" data-wow-duration="1.5s">
                    <div class="choose-us-img">
                        <img src="assets/images/chooseUs/choose-us-2.png" alt="hostinza hosting image">
                    </div>
                    <h4 class="xs-title">Safe and Secured</h4>
                    <p>Our team assured your web site is always safe and secure</p>
                </div><!-- .why-choose-us-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-us-block wow fadeInUp" data-wow-duration="2s">
                    <div class="choose-us-img">
                        <img src="assets/images/chooseUs/choose-us-3.png" alt="hostinza hosting image">
                    </div>
                    <h4 class="xs-title">Our Dedicated Support</h4>
                    <p>We finally found a host that truly understood the unique</p>
                </div><!-- .why-choose-us-block END -->
            </div>
        </div>
    </div><!-- .container END -->
</section><!-- END shared hosting details section -->

<!-- shared hosting details section -->
<section class="xs-section-padding pt-0">
    <div class="container">
        <div class="vps-slider-wraper">
            <div class="slider-group">
                <div class="vps-slider"></div><!-- .vps-slider END -->
                <div class="slider-range clearfix">
                    <div id="icon-0" class="slider-tigger"><h5>Basic</h5></div>
                    <div id="icon-1" class="slider-tigger"><h5>Starter</h5></div>
                    <div id="icon-2" class="slider-tigger"><h5>Enterprise</h5></div>
                    <div id="icon-3" class="slider-tigger"><h5>Business</h5></div>
                    <div id="icon-4" class="slider-tigger"><h5>Pro</h5></div>
                </div><!-- .slider-range END -->
            </div><!-- .slider-group END -->
            <div class="slider-content-group" style="background-image: url(assets/images/vps/slider-bg.png);">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="slider-container">
                            <!-- title -->
                            <p class="title xs0"></p>
                            <input type="hidden" name="title" class="title xs0">

                            <!-- price -->
                            <h2 class="price xs1"></h2>
                            <input type="hidden" name="price" class="price xs1">

                            <!-- description -->
                            <p class="desc xs2"></p>
                            <input type="hidden" name="desc" class="desc xs2">

                            <!-- buttons -->
                            <a class="btn btn-primary slider-btns xs12" href="http://whmcs.finesttheme.com/cart.php?a=add&pid=3" target="_blank"><span class="icon icon-checkmark"></span> Purchase Now</a>
                        </div><!-- .slider-container END -->
                    </div>
                    <div class="col-lg-7">
                        <ul class="vps-pricing-list clearfix">
                            <li>
                                <h4>CPU</h4>
                                <p class="cpu xs3"></p>
                                <input type="hidden" name="cpu" class="cpu xs3">
                            </li>
                            <li>
                                <h4>Bandwidth</h4>
                                <p class="brandwidth xs4"></p>
                                <input type="hidden" name="brandwidth" class="brandwidth xs4">
                            </li>
                            <li>
                                <h4>Bandwidth</h4>
                                <p class="brandwidth2 xs5"></p>
                                <input type="hidden" name="brandwidth2" class="brandwidth2 xs5">
                            </li>
                        </ul><!-- .vps-pricing-list END -->
                        <ul class="vps-pricing-list clearfix">
                            <li>
                                <h4>RAM</h4>
                                <p class="ram xs6"></p>
                                <input type="hidden" name="ram" class="ram xs6">
                            </li>
                            <li>
                                <h4>Setup</h4>
                                <p class="setup xs7"></p>
                                <input type="hidden" name="setup" class="setup xs7">
                            </li>
                            <li>
                                <h4>Setup</h4>
                                <p class="setup2 xs8"></p>
                                <input type="hidden" name="setup2" class="setup2 xs8">
                            </li>
                        </ul><!-- .vps-pricing-list END -->
                        <ul class="vps-pricing-list clearfix">
                            <li>
                                <h4>Disk Space</h4>
                                <p class="diskspace xs9"></p>
                                <input type="hidden" name="diskspace" class="diskspace xs9">
                            </li>
                            <li>
                                <h4>IP</h4>
                                <p class="ip_one xs10"></p>
                                <input type="hidden" name="ip_one" class="ip_one xs10">
                            </li>
                            <li>
                                <h4>IP</h4>
                                <p class="ip_two xs11"></p>
                                <input type="hidden" name="ip_two" class="ip_two xs11">
                            </li>
                        </ul><!-- .vps-pricing-list END -->
                    </div>
                </div><!-- .row END -->
            </div><!-- .slider-content-group END -->
        </div><!-- .vps-slider-wraper END -->
    </div>
</section><!-- END shared hosting details section -->

<!-- include feature section -->
<section class="xs-section-padding included-feature-list bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">We Offer</h2>
                    <h3 class="heading-title">FEATURES <span>INCLUDED</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-6">
                <div class="include-feature-list">
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-1.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">No Multi Tenancy</h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-2.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">LiteSpeed Web Server</h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-3.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">cPanel Hosting Control </h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                </div><!-- .include-feature-list END -->
            </div>    
            <div class="col-lg-6">
                <div class="include-feature-list">
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-4.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">PHP Selector</h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-5.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">LiteSpeed Web Server</h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-6.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">Patchman Kiler</h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                </div><!-- .include-feature-list END -->
            </div>    
        </div>
    </div><!-- .container END -->
</section><!-- END include feature section -->


<!-- offset cart strart -->
<!-- sidebar cart item -->
<div class="xs-sidebar-group cart-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading media">
                <div class="media-body">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
            </div>
            <div class="xs-empty-content">
                <h3 class="widget-title">Shopping cart</h3>
                <h4 class="xs-title">No products in the cart.</h4>
                <p class="empty-cart-icon">
                    <i class="icon icon-shopping-cart"></i>
                </p>
                <p class="xs-btn-wraper">
                    <a class="btn btn-primary" href="#">Return To Shop</a>
                </p>
            </div>
        </div>
    </div>
</div>    <!-- END sidebar cart item -->    <!-- END offset cart strart -->

<!-- offset cart strart -->
<!-- sidebar cart item -->
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    X
                </a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-logo-wraper">
                    <img src="assets/images/blue_logo.png" alt="sidebar logo">
                </div>
                <p>Far far away, behind the word moun tains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of  </p>
                <ul class="sideabr-list-widget">
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/location.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>759 Pinewood Avenue</p>
                                <span>Marquette, Michigan</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/mail.png" alt="">
                            </div>
                            <div class="media-body">
                                <a href="mailto:info@domain.com">info@domain.com</a>
                                <span>Online Support</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/phone.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>906-624-2565</p>
                                <span>Mon-Fri 8am-5pm</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                </ul><!-- .sideabr-list-widget -->
                <div class="subscribe-from">
                    <p>Get Subscribed!</p>
                    <form action="#" method="POST" id="subscribe-form" class="subscribe-form">
                        <label for="sub-input"></label>
                        <div class="form-group">
                            <input type="email" name="email" id="sub-input" placeholder="Enter your mail here" class="form-control">
                            <button class="sub-btn" type="submit"><i class="icon icon-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
                <ul class="social-list version-2">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
                </ul><!-- .social-list -->
                <div class="text-center">
                    <a href="#" class="btn btn-primary">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
</div>    <!-- END sidebar widget item -->    <!-- END offset cart strart -->
