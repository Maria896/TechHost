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

<style type="text/css">
    
ul.tech-list li {
    display: inline-block;
    width: 115px;
    text-align: center;
    margin: 40px 5px 20px;
}
ul.tech-list li .icon {
    margin-bottom: 15px;
}
</style>
<div class="container">
                <div class="section-title" style="margin-top: 30px;">
                    
                    <div class="xs-heading wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    <h3 class="heading-title"><span>SHARED HOSTING IN LAHORE</span></h3>
                    <h2 class="heading-sub-title">Hosting by the Experts, for the Experts</h2>
                </div>
                    <p class="fz-18">We build web solutions to help to execute your business operations smooth, fast and efficiently. 
                        From Web applications to MVP, portals, websites, and custom software development, we know technologies and what will be right for you. We spend our time and energies like a pro to develop and implement modern solutions for blue-chip corporate clients, fresh-faced start-ups or local SMEs. Our expertise lies in PHP, .Net, WordPress, Magento, JavaScript, AJAX, JQuery, React, Mongo DB, Agular.JS, Node.js, 
                        and Ruby on Rails to name a few. </p>
                        <div class="text-center">
                            <ul class="tech-list">
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/asp.png')}}" class="m-0">
                                    </div>
                                    <p>ASP .Net</p>
                                </li>

                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/angular.png')}}" class="m-0">
                                    </div>
                                    <p>Angular 6</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/ajax.png')}}" class="m-0">
                                    </div>
                                    <p>AJAX</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/react.png')}}" class="m-0">
                                    </div>
                                    <p>React</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/jquery.png')}}" class="m-0">
                                    </div>
                                    <p>jQuery</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/php.png')}}" class="m-0">
                                    </div>
                                    <p>PHP</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/laravel.png')}}" class="m-0">
                                    </div>
                                    <p>Laravel</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/mongodb.png')}}" class="m-0">
                                    </div>
                                    <p>Mongo DB</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/js.png')}}" class="m-0">
                                    </div>
                                    <p>Javascript</p>
                                </li>
                            </ul>
                            

                        </div>
                </div>
            </div>


   <style>

.card {
    background-color: #FFF;
    border-radius: 25px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    padding: 40px;
    z-index: 0
}

.heading {
    font-weight: normal
}

.desc {
    font-size: 14px
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey;
    padding-left: 0px
}

#progressbar .active {
    color: #673AB7
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar .step0:before {
    content: ""
}

#progressbar li:before {
    width: 40px;
    height: 40px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    background: #E0E0E0;
    border-radius: 50%;
    margin: auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 10px;
    background: #E0E0E0;
    position: absolute;
    left: 0;
    top: 17px;
    z-index: -1
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #F9A825
}

.sub-heading {
    font-weight: 500
}

.yellow-text {
    color: #F9A825
}

fieldset.show {
    display: block
}

fieldset {
    display: none
}

.radio {
    display: inline-block;
    border-radius: 0;
    box-sizing: border-box;
    cursor: pointer;
    color: #BDBDBD;
    font-weight: 500;
    -webkit-filter: grayscale(100%);
    -moz-filter: grayscale(100%);
    -o-filter: grayscale(100%);
    -ms-filter: grayscale(100%);
    filter: grayscale(100%)
}

.radio:hover {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
}

.radio.selected {
    border: 1px solid #F9A825;
    box-shadow: 0px 8px 16px 0px #EEEEEE;
    color: #29B6F6 !important;
    -webkit-filter: grayscale(0%);
    -moz-filter: grayscale(0%);
    -o-filter: grayscale(0%);
    -ms-filter: grayscale(0%);
    filter: grayscale(0%)
}

.card-block {
    border: 1px solid #CFD8DC;
    width: 45%;
    margin: 2.5%;
    padding: 20px 25px 15px 25px
}

@media screen and (max-width: 768px) {
    .card-block {
        padding: 20px 20px 0px 20px;
        height: 250px
    }
}

.icon {
    width: 85px;
    height: 100px
}

.image-icon {
    width: 85px;
    height: 100px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 20px
}

select,
input,
textarea,
button {
    padding: 8px 15px 8px 15px;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    background-color: #ECEFF1;
    border: 1px solid #ccc;
    font-size: 16px;
    letter-spacing: 1px
}

select:focus,
input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid skyblue !important;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

textarea {
    height: 100px
}

button {
    width: 120px;
    letter-spacing: 2px
}

.fit-image {
    width: 100%;
    object-fit: cover
}

.btn-block {
    border-radius: 5px;
    height: 50px;
    font-weight: 500;
    cursor: pointer
}

.fa-long-arrow-right {
    float: right;
    margin-top: 4px
}

.fa-long-arrow-left {
    float: left;
    margin-top: 4px
}</style>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                
                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>
                            <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-7">
            <div class="card b-0">
                <h3 class="heading">Request a Quote</h3>
                <p class="desc">Fill out the form or call <span class="yellow-text">123 456 7891</span><br>to start protecting your business today!</p>
                <ul id="progressbar" class="text-center">
                    <li class="active step0" id="step1"></li>
                    <li class="step0" id="step2"></li>
                    <li class="step0" id="step3"></li>
                    <li class="step0" id="step4"></li>
                </ul>
                <fieldset class="show">
                    <div class="form-card">
                        <h5 class="sub-heading">Select Service(s)</h5>
                        <div class="row px-1 radio-group">
                            <div class="card-block text-center radio selected">
                                <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                <p class="sub-desc">Website Development</p>
                            </div>
                            <div class="card-block text-center radio">
                                <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                <p class="sub-desc">SEO</p>
                            </div>
                            <div class="card-block text-center radio">
                                <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/ynKYPkk.png"> </div>
                                <p class="sub-desc">SMO</p>
                            </div>
                            <div class="card-block text-center radio">
                                <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/6qK7u8Q.png"> </div>
                                <p class="sub-desc">Google Ads</p>
                            </div>
                        </div> <button id="next1" class="btn-block btn-primary mt-3 mb-1 next">NEXT<span class="fa fa-long-arrow-right"></span></button>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <h5 class="sub-heading mb-4">Personal Details</h5> <label class="text-danger mb-3">* Required</label>
                        <div class="form-group"> <label class="form-control-label">First Name * :</label> <input type="text" id="fname" name="fname" placeholder="" class="form-control" onblur="validate1(1)"> </div>
                        <div class="form-group"> <label class="form-control-label">Last Name * :</label> <input type="text" id="lname" name="lname" placeholder="" class="form-control" onblur="validate1(2)"> </div>
                        <div class="form-group"> <label class="form-control-label">Email ID * :</label> <input type="text" id="email" name="email" placeholder="" class="form-control" onblur="validate1(3)"> </div>
                        <div class="form-group"> <label class="form-control-label">Contact No. * :</label> <input type="text" id="mob" name="mob" placeholder="" class="form-control" onblur="validate1(4)"> </div> <button id="next2" class="btn-block btn-primary mt-3 mb-1 next mt-4" onclick="validate1(0)">NEXT<span class="fa fa-long-arrow-right"></span></button> <button class="btn-block btn-secondary mt-3 mb-1 prev"><span class="fa fa-long-arrow-left"></span>PREVIOUS</button>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <h5 class="sub-heading mb-4">Company Details</h5> <label class="text-danger mb-3">* Required</label>
                        <div class="form-group"> <label class="form-control-label">Company Name * :</label> <input type="text" id="cname" name="cname" placeholder="" class="form-control" onblur="validate2(1)"> </div>
                        <div class="form-group"> <label class="form-control-label">Zip Code * :</label> <input type="text" id="zip" name="zip" placeholder="" class="form-control" onblur="validate2(2)"> </div>
                        <div class="form-group"> <label class="form-control-label">State * :</label> <input type="text" id="state" name="state" placeholder="" class="form-control" onblur="validate2(3)"> </div>
                        <div class="form-group"> <label class="form-control-label">City * :</label> <input type="text" id="city" name="city" placeholder="" class="form-control" onblur="validate2(4)"> </div>
                        <div class="form-group"> <label class="form-control-label">Shredding Job Size * :</label>
                            <div class="select mb-3"> <select name="shred-info" class="form-control">
                                    <option>NA</option>
                                    <option>1-20 boxes</option>
                                    <option>20-50 boxes</option>
                                    <option>50-100 boxes</option>
                                    <option>100+ boxes</option>
                                </select> </div>
                        </div> <button id="next3" class="btn-block btn-primary mt-3 mb-1 next mt-4" onclick="validate2(0)">SUBMIT REQUEST<span class="fa fa-long-arrow-right"></span></button> <button class="btn-block btn-secondary mt-3 mb-1 prev"><span class="fa fa-long-arrow-left"></span>PREVIOUS</button>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <h5 class="sub-heading mb-4">Success!</h5>
                        <p class="message">Thank You for choosing our website.<br>Quotation will be sent to your Email ID and Contact Number.</p>
                        <div class="check"> <img class="fit-image check-img" src="https://i.imgur.com/QH6Zd6Y.gif"> </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>
                            <script type='text/javascript'>function validate1(val) {
v1 = document.getElementById("fname");
v2 = document.getElementById("lname");
v3 = document.getElementById("email");
v4 = document.getElementById("mob");

flag1 = true;
flag2 = true;
flag3 = true;
flag4 = true;

if(val>=1 || val==0) {
if(v1.value == "") {
v1.style.borderColor = "red";
flag1 = false;
}
else {
v1.style.borderColor = "green";
flag1 = true;
}
}

if(val>=2 || val==0) {
if(v2.value == "") {
v2.style.borderColor = "red";
flag2 = false;
}
else {
v2.style.borderColor = "green";
flag2 = true;
}
}

if(val>=3 || val==0) {
if(v3.value == "") {
v3.style.borderColor = "red";
flag3 = false;
}
else {
v3.style.borderColor = "green";
flag3 = true;
}
}

if(val>=4 || val==0) {
if(v4.value == "") {
v4.style.borderColor = "red";
flag4 = false;
}
else {
v4.style.borderColor = "green";
flag4 = true;
}
}

flag = flag1 && flag2 && flag3 && flag4;

return flag;
}

function validate2(val) {
v1 = document.getElementById("cname");
v2 = document.getElementById("zip");
v3 = document.getElementById("state");
v4 = document.getElementById("city");

flag1 = true;
flag2 = true;
flag3 = true;
flag4 = true;

if(val>=1 || val==0) {
if(v1.value == "") {
v1.style.borderColor = "red";
flag1 = false;
}
else {
v1.style.borderColor = "green";
flag1 = true;
}
}

if(val>=2 || val==0) {
if(v2.value == "") {
v2.style.borderColor = "red";
flag2 = false;
}
else {
v2.style.borderColor = "green";
flag2 = true;
}
}

if(val>=3 || val==0) {
if(v3.value == "") {
v3.style.borderColor = "red";
flag3 = false;
}
else {
v3.style.borderColor = "green";
flag3 = true;
}
}

if(val>=4 || val==0) {
if(v4.value == "") {
v4.style.borderColor = "red";
flag4 = false;
}
else {
v4.style.borderColor = "green";
flag4 = true;
}
}

flag = flag1 && flag2 && flag3 && flag4;

return flag;
}

$(document).ready(function(){

var current_fs, next_fs, previous_fs;

$(".next").click(function(){

str1 = "next1";
str2 = "next2";
str3 = "next3";

if(!str2.localeCompare($(this).attr('id')) && validate1(0) == true) {
val2 = true;
}
else {
val2 = false;
}

if(!str3.localeCompare($(this).attr('id')) && validate2(0) == true) {
val3 = true;
}
else {
val3 = false;
}

if(!str1.localeCompare($(this).attr('id')) || (!str2.localeCompare($(this).attr('id')) && val2 == true) || (!str3.localeCompare($(this).attr('id')) && val3 == true)) {
current_fs = $(this).parent().parent();
next_fs = $(this).parent().parent().next();

$(current_fs).removeClass("show");
$(next_fs).addClass("show");

$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

current_fs.animate({}, {
step: function() {

current_fs.css({
'display': 'none',
'position': 'relative'
});

next_fs.css({
'display': 'block'
});
}
});
}
});

$(".prev").click(function(){

current_fs = $(this).parent().parent();
previous_fs = $(this).parent().parent().prev();

$(current_fs).removeClass("show");
$(previous_fs).addClass("show");

$("#progressbar li").eq($("fieldset").index(next_fs)).removeClass("active");

current_fs.animate({}, {
step: function() {

current_fs.css({
'display': 'none',
'position': 'relative'
});

previous_fs.css({
'display': 'block'
});
}
});
});

$('.radio-group .radio').click(function(){
$(this).toggleClass('selected');
});

});</script>
@endsection