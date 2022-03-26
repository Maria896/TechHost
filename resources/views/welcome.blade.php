@extends('layouts.app')
@section('meta_title')

{{!empty($cms->meta_title)?$cms->meta_title:''}}
@endsection
@section('met_description')
{{!empty($cms->meta_description)?$cms->meta_description:''}}
@endsection
@section('code')
{{!empty($cms->code)?$cms->code:''}}
@endsection
@section('content')
@push('css')
.logo {
    
}
@endpush


<section class="xs-banner" style="min-height: 600px;">
    <div class="container">
        <div class="row">
            <div class="col-md-7 align-self-center">
                <div class="xs-banner-content">
                    <h1 class="banner-sub-title wow fadeInLeft">WE PROVIDE</h1>
                    <h2 class="banner-title wow fadeInLeft" data-wow-duration="1.5s">PREMIUM HOSTING</h2>
                    <p class="wow fadeInUp" data-wow-duration="1.5s">Share processes and data securely on a need to know basis  without the need for reconciliation it combines a permissione.</p>
                    <div class="xs-btn-wraper wow fadeInUp" data-wow-duration="1.7s">
                        <a href="#" class="btn btn-primary">Get Started</a>
                        <a href="#" class="btn btn-outline-primary">Know More</a>
                    </div>
                </div><!-- .xs-banner-content END -->
            </div>
            <div class="col-md-5" style="margin-top: 50px;">
                <div class="xs-banner-image" >
                    <!--Add Here Slider Image -->
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section>
<div class="xs-domain-search">
    <div class="container">
        <!--  Domain Plan  -->
         <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing">
                                    <div class="pricing-header">
                                        
                                        <h3 class="xs-title"><b>Tech Basic</b></h3>
                                        <!-- price details -->
                                        <div class="pricing-body">
                                            <div class="pricing-price">
                                            <!-- <p>Starting at</p> -->
                                            <h2 class="p"><sup>Rs.</sup>2499</h2>
                                            <h6 class="discount-price">25% Discount<del>Rs.49.99</del></h6>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-primary price-box-btn">Buy Now</a>
                                        <!-- .pricing-body END -->
                                        <!-- <h4 style="margin-top: 15px; color: #15095e;">Now 40% Off</h4> -->
                                        <ul class="pricing-card-list" style="text-align: left; padding: 7px;">
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true"></i>One-click WordPress installs&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" ></i>Free WordPress website transfer&nbsp;</li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true"></i>Unlimited websites&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Unmetered bandwidth&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Free SSL certificate&nbsp;</li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true"></i>Free domain included&nbsp;
                                                <i class="fa fa-info-circle tick" aria-hidden="true">
                                                 <span class="litooltip " style="background:black;">iNodes-60000<br>CPU(%)-50<br>RAM(MBs)-300<br>EP-10<br>I/O(MB/sec)-1024<br>
                                                </span>
                                                </i>
                                            </li>
                                        </ul>
                                    </div><!-- .pricing-header END -->
                                    <div class="pricing-body">
                                        <div class="pricing-price">
                                            <p>Starting at</p>
                                            <h2><sup>Rs.</sup>49</h2>
                                            <h6 class="discount-price">25% Discount<del>Rs.49.99</del></h6>
                                        </div>
                                    </div><!-- .pricing-body END -->
                                    <div class="pricing-footer">
                                        <!-- <a href="#" class="btn btn-primary">Buy Now</a> -->
                                    </div><!-- .pricing-footer END -->
                                </div><!-- .xs-single-pricing END -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div id="most-popular-plan">
                                    <!-- <h4>Most Popular</h4> -->
                                    <div class="xs-single-pricing active">
                                    <div class="pricing-header">
                                        
                                        <h3 class="xs-title"><b>Tech Starter</b></h3>
                                        <h4 style="margin-top: 15px; color: white;">Now 40% Off</h4>
                                        <ul class="pricing-card-list">
                                            <li class="pricing-card-list-items">One-click WordPress installs&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items">Free WordPress website transfer&nbsp;</li>
                                            <li class="pricing-card-list-items">Unlimited websites&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items">Unmetered bandwidth&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items">Free SSL certificate&nbsp;</li>
                                            <li class="pricing-card-list-items">Free domain included&nbsp;
                                                <i class="fa fa-info-circle" aria-hidden="true">
                                                 <span class="litooltip " style="background:black;">iNodes-60000<br>CPU(%)-50<br>RAM(MBs)-300<br>EP-10<br>I/O(MB/sec)-1024<br>
                                                </span>
                                                </i>
                                            </li>
                                        </ul>
                                    </div><!-- .pricing-header END -->
                                    <div class="pricing-body">
                                        <div class="pricing-price">
                                            <p>Starting at</p>
                                            <h2><sup>Rs.</sup>49</h2>
                                            <h6 class="discount-price">25% Discount<del>Rs.49.99</del></h6>
                                        </div>
                                    </div>
                                    <!-- .pricing-body END -->
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div><!-- .pricing-footer END -->
                                </div>
                                </div>
                                
                                <!-- .xs-single-pricing END -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing">
                                    <div class="pricing-header">
                                        
                                        <h3 class="xs-title"><b>Business Plan</b></h3>
                                        <h4 style="margin-top: 15px; color: #15095e;">Now 40% Off</h4>
                                        <ul class="pricing-card-list">
                                            <li class="pricing-card-list-items">One-click WordPress installs&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items">Free WordPress website transfer&nbsp;</li>
                                            <li class="pricing-card-list-items">Unlimited websites&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items">Unmetered bandwidth&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items">Free SSL certificate&nbsp;</li>
                                            <li class="pricing-card-list-items">Free domain included&nbsp;
                                                <i class="fa fa-info-circle" aria-hidden="true">
                                                 <span class="litooltip " style="background:black;">iNodes-60000<br>CPU(%)-50<br>RAM(MBs)-300<br>EP-10<br>I/O(MB/sec)-1024<br>
                                                </span>
                                                </i>
                                            </li>
                                        </ul>
                                    </div><!-- .pricing-header END -->
                                    <div class="pricing-body">
                                        <div class="pricing-price">
                                            <p>Starting at</p>
                                            <h2><sup>Rs.</sup>49</h2>
                                            <h6 class="discount-price">25% Discount<del>Rs.49.99</del></h6>
                                        </div>
                                    </div><!-- .pricing-body END -->
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div><!-- .pricing-footer END -->
                                </div><!-- .xs-single-pricing END -->
                            </div>
                            
                        </div>
       
    </div><!-- .container END -->
</div>
<!-- domain search section -->
<div class="xs-domain-search">
    <div class="container">
        <div class="domain-search-form-group wow fadeIn">
            <form action="#" method="POST" class="domain-search-form">
                <input type="search" placeholder="Enter Address" id="domain-search">
                <div class="select-group">
                    <select name="domainList">
                        <option value="com" selected>.com</option>
                        <option value="net">.net</option>
                        <option value="io">.io</option>
                        <option value="info">.info</option>
                        <option value="store">.store</option>
                    </select>
                    <input type="submit" value="Search">
                </div>
            </form>
            <ul class="xs-domain-info">
                <li>
                    <img src="assets/images/domain/com.png" alt="Domain name">
                    <strong>$2.95</strong>
                </li>
                <li>
                    <img src="assets/images/domain/co.png" alt="Domain name">
                    <strong>$4.5</strong>
                </li>
                <li>
                    <img src="assets/images/domain/net.png" alt="Domain name">
                    <strong>$5.8</strong>
                </li>
                <li>
                    <img src="assets/images/domain/info.png" alt="Domain name">
                    <strong>$7.9</strong>
                </li>
                <li>
                    <img src="assets/images/domain/store.png" alt="Domain name">
                    <strong>$1.00</strong>
                </li>
            </ul>
        </div>
    </div><!-- .container END -->
</div>
<!-- End domain search section -->


<!-- include feature section -->
<section class="xs-section-padding included-feature-list feature-list-v3 bg-gradient">
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
                            <h4 class="xs-title">24/7 Monitoring</h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-2.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">Guaranteed Server Uptime</h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-3.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">Languages & Performace </h4>
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
                            <h4 class="xs-title">Extra Fast Core CPUs</h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-5.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">Single Click install Scripts   </h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-6.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">Fully Secure FTP Acess</h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                </div><!-- .include-feature-list END -->
            </div>    
        </div>
    </div><!-- .container END -->
    <!-- <div class="wave_animation_wraper">
        <div class="wave_animation">
            <div class="layer wave one" data-depth="0.2"><img  src="assets/images/wave/01.png" alt="horizontal shape"></div>
            <div class="layer wave two" data-depth="0.4"><img src="assets/images/wave/02.png" alt="vrtical shape"></div>
            <div class="layer wave three" data-depth="0.6"><img  src="assets/images/wave/03.png" alt="vrtical shape"></div>
            <div class="layer wave four" data-depth="0.8"><img  src="assets/images/wave/04.png" alt="vrtical shape"></div>
        </div>
    </div> -->
</section>
<!-- END include feature section -->

<!-- pricing section -->
<!-- END pricing section -->
<section class="service-section xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto wow fadeIn">
                <div class="xs-heading">
                    <h2 class="heading-sub-title">Best Service</h2>
                    <h3 class="heading-title">OUR <span>BEST SERVICE</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-4 col-md-6 xs-mb-8">
                <div class="xs-service-block wow fadeInUp">
                    <div class="service-img">
                        <img src="assets/images/service/service-7.png" alt="hosting service icon">
                    </div>
                    <h4 class="xs-title"><a href="shared-hosting.html">Shared Hosting</a></h4>
                    <p>Share processes and data secure <br> lon a need to know basis </p>
                    <a href="shared-hosting.html" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-4 col-md-6 xs-mb-8">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="1.5s">
                    <div class="service-img">
                        <img src="assets/images/service/service-8.png" alt="hosting service icon">
                    </div>
                    <h4 class="xs-title"><a href="reseller-hosting.html">Reseller Hosting</a></h4>
                    <p>Out of the handful of hosting and solutions we tested </p>
                    <a href="reseller-hosting.html" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-4 col-md-6 xs-mb-8">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="2s">
                    <div class="service-img">
                        <img src="assets/images/service/service-9.png" alt="hosting service icon">
                    </div>
                    <h4 class="xs-title"><a href="vps-hosting.html">VPS Hosting</a></h4>
                    <p>We finally found a host that truly understood the unique </p>
                    <a href="vps-hosting.html" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="2.5s">
                    <div class="service-img">
                        <img src="assets/images/service/service-10.png" alt="hosting service icon">
                    </div>
                    <h4 class="xs-title"><a href="cloud-hosting.html">Cloud Hosting</a></h4>
                    <p>Share processes and data secure <br> lon a need to know basis </p>
                    <a href="cloud-hosting.html" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="3s">
                    <div class="service-img">
                        <img src="assets/images/service/service-11.png" alt="hosting service icon">
                    </div>
                    <h4 class="xs-title"><a href="dedicated-hosting.html">Dedicated Hosting</a></h4>
                    <p>Out of the handful of hosting and solutions we tested </p>
                    <a href="dedicated-hosting.html" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="3.5s">
                    <div class="service-img">
                        <img src="assets/images/service/service-12.png" alt="hosting service icon">
                    </div>
                    <h4 class="xs-title"><a href="domain.html">Domain Name</a></h4>
                    <p>We finally found a host that truly understood the unique </p>
                    <a href="domain.html" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block END -->
            </div>
        </div>
    </div><!-- .container END -->
</section>
<section class="call-to-action-section wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="call-to-action-content">
                    <h2>We don’t compromise with the best Hosting Solution</h2>
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
    <div class="icon-bg" style="background-image: url(assets/images/icon-bg.png)"></div>
</section>
<div class="xs-feature-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="xs-feature-group wow fadeInLeft">
                    <div class="media">
                        <div class="feature-img d-flex">
                            <img src="assets/images/sheild.png" alt="hosting feature img">
                        </div>
                        <div class="media-body feature-content">
                            <h4 class="xs-title">Days money back guarantee</h4>
                            <p>Share processes an data secure lona need <br> to know basis without the need.</p>
                            <div class="xs-btn-wraper">
                                <a href="#" class="btn btn-secondary">Know More</a>
                            </div>
                        </div>
                    </div>
                    <span class="icon icon-dollar watermark-icon"></span>
                </div><!-- .xs-feature-group END -->
            </div>       
            <div class="col-lg-6">
                <div class="xs-feature-group wow fadeInRight">
                    <div class="media">
                        <div class="feature-img d-flex">
                            <img src="assets/images/cloud-lock.png" alt="hosting feature img">
                        </div>
                        <div class="media-body feature-content">
                            <h4 class="xs-title">Build and protect your brand</h4>
                            <p>Share processes an data secure lona need <br> to know basis without the need.</p>
                            <div class="xs-btn-wraper">
                                <a href="#" class="btn btn-secondary">Know More</a>
                            </div>
                        </div>
                    </div>
                    <span class="icon icon-key3 watermark-icon"></span>
                </div><!-- .xs-feature-group END -->
            </div>       
        </div><!-- .row END -->
    </div><!-- .container END -->
</div>

<section class="xs-section-padding xs-hosting-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hosting-info-img">
                    <img src="assets/images/info/info-img-1.png" alt="Hosting info image">
                    <img src="assets/images/info/icon-1.png" class="info-icon icon-1" alt="hosting icon">
                    <img src="assets/images/info/icon-2.png" class="info-icon icon-2" alt="hosting icon">
                    <img src="assets/images/info/icon-3.png" class="info-icon icon-3" alt="hosting icon">
                    <img src="assets/images/info/icon-4.png" class="info-icon icon-4" alt="hosting icon">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="hosting-info-wraper">
                    <div class="spinner-icon wow">
                        <img src="assets/images/info/electric-wave.png" alt="hosting info info">
                    </div>
                    <div class="wow fadeInUp">
                        <h2 class="content-title">Get best plans for more Power</h2>
                        <p>Our best-in-class WordPress solution, with additional optimization to make running a WooCommerce online store easy. Our prices are clear and straight forward so you can</p>
                        <ul class="xs-list check">
                            <li>We've been supporting WordPress since the beginning.</li>
                            <li>Perfect for large sites or agencies managing multiple clients.</li>
                            <li>Our easy-to-use control panel and API let you spend</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div><!-- .hosting-info-wraper END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="hosting-info-wraper-2 wow fadeInLeft" data-wow-duration="1.5s">
                    <h2 class="content-title">Powerful Server and Platform</h2>
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/info/gaurd-icon.png" alt="hosting info icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title small">Better Security and faster Server</h4>
                            <p>Our best-in-class WordPress solution, with additio nal optiz ation to make running a WooCommerce</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/info/cloud-icon.png" alt="hosting info icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title small">No-Downtime website transfers </h4>
                            <p>Our best-in-class WordPress solution, with additio nal optiz ation to make running a WooCommerce</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/info/clock-icon.png" alt="hosting info icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title small">Deployment within few minutes </h4>
                            <p>Our best-in-class WordPress solution, with additio nal optiz ation to make running a WooCommerce</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div><!-- .hosting-info-wraper-2 END -->
            </div>
            <div class="col-lg-6">
                <div class="hosting-info-img wow fadeInRight" data-wow-duration="2s">
                    <img src="assets/images/info/info-img-2.png" alt="Hosting info image">
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section>
<section class="xs-testimonial-section wow fadeIn">
    <div class="container">
        <div class="xs-testimonial-slider owl-carousel">
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="assets/images/avatar/avatar-1.png" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Richard I Jones</h4>
                            <p class="commentor-info">WWW Realty</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="assets/images/avatar/avatar-2.png" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Cecilia H King</h4>
                            <p class="commentor-info">The White Rabbit</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="assets/images/avatar/avatar-3.png" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Joe D Walczak</h4>
                            <p class="commentor-info">Hechinger</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .container END -->
</section>
<div class="xs-client-section">
    <div class="container">
        <div class="xs-client-slider owl-carousel">
            <div class="single-client">
                <img src="assets/images/client/client-1.png" alt="hosting client image">
            </div><!-- .single-client END -->
            <div class="single-client">
                <img src="assets/images/client/client-2.png" alt="hosting client image">
            </div><!-- .single-client END -->
            <div class="single-client">
                <img src="assets/images/client/client-3.png" alt="hosting client image">
            </div><!-- .single-client END -->
            <div class="single-client">
                <img src="assets/images/client/client-4.png" alt="hosting client image">
            </div><!-- .single-client END -->
            <div class="single-client">
                <img src="assets/images/client/client-5.jpg" alt="hosting client image">
            </div><!-- .single-client END -->
        </div>
    </div><!-- .container END -->
</div>
<!-- info section -->
<div class="zoom-anim-dialog mfp-hide modal-language" id="modal-popup-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="language-content">
                <p>Switch The Language</p>
                <ul class="flag-lists">
                    <li><a href="#"><img src="assets/images/flags/006-united-states.svg" alt=""><span>English</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/002-canada.svg" alt=""><span>English</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/003-vietnam.svg" alt=""><span>Vietnamese</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/004-france.svg" alt=""><span>French</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/005-germany.svg" alt=""><span>German</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="xs-search-panel">
                <form action="#" method="POST" class="xs-search-group">
                    <input type="search" class="form-control" name="search" id="search" placeholder="Search">
                    <button type="submit" class="search-button"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
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
</div>    
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
</div>   
@endsection