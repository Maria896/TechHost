	<!-- prelaoder -->
<!-- <div id="preloader">
    <div class="preloader-wrapper">
        <div class="spinner"></div>
    </div>
    <div class="preloader-cancel-btn">
        <a href="#" class="btn btn-secondary prelaoder-btn">Cancel Preloader</a>
    </div> -->
</div>	<!-- END prelaoder -->
<div class="header-transparent">
    <!-- topBar section -->
    <div class="xs-top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="xs-top-bar-info">
                    <li>
                        <p><i class="icon icon-phone3"></i>009-215-5596</p>
                    </li>
                    <li>
                        <a href="mailto:info@domain.com"><i class="icon icon-envelope4"></i>info@domain.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="top-menu">
                    <li><a href="login.html"><i class="icon icon-key2"></i> Login</a></li>
                    <!-- <li><a href="signup.html">Sign Up</a></li> -->
                    <li><a href="support.html"><i class="icon icon-hours-support"></i> Support</a></li>
                </ul>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</div>    <!-- End topBar section -->

    <!-- header section -->
<header class="xs-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="xs-logo-wraper">
                    <a href="{{url('/')}}" class="xs-logo">
                        <img src="assets/images/techhost.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <nav class="xs-menus">
                    <div class="nav-header">
                        <a class="nav-brand" href="{{url('/')}}">
                            <img src="assets/images/logo.png" alt="">
                        </a>
                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu align-to-right">
                             <li><a href="#">Domain</a>
                                <div class="megamenu-panel xs-service-menu">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="{{ url('register-domain') }}">
                                                <div class="media">
                                                    <img src="assets/images/menu-icon/icon-4.png" alt="">
                                                    <div class="media-body">
                                                        <h4>Register Domain</h4>
                                                        <p>Access your files from anywhere</p>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            
                                            <a href="{{ url('transfer-domain') }}">
                                                <div  class="media">
                                                    <img src="assets/images/menu-icon/icon-2.png" alt="">
                                                    <div class="media-body">
                                                        <h4>Transfer Domain</h4>
                                                        <p>Early Create sites & offload them to clients</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Hosting</a>
                                <div class="megamenu-panel xs-service-menu">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="{{ url('shared-hosting') }}">
                                                <div class="media">
                                                    <img src="assets/images/menu-icon/icon-1.png" alt="">
                                                    <div class="media-body">
                                                        <h4>Shared Hosting</h4>
                                                        <p>Early Create sites & offload them to clients</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{ url('reseller-hosting') }}">
                                                <div  class="media">
                                                    <img src="assets/images/menu-icon/icon-2.png" alt="">
                                                    <div class="media-body">
                                                        <h4>Reseller Hosting</h4>
                                                        <p>Early Create sites & offload them to clients</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="{{ url('wordpress-hosting') }}">
                                                <div class="media">
                                                    <img src="assets/images/menu-icon/icon-4.png" alt="">
                                                    <div class="media-body">
                                                        <h4>Worpdress Hosting</h4>
                                                        <p>Access your files from anywhere</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{ url('business-hosting') }}">
                                                <div class="media">
                                                    <img src="assets/images/menu-icon/icon-5.png" alt="">
                                                    <div class="media-body">
                                                        <h4>Business Hosting</h4>
                                                        <p>Be secure, be safe</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                           <li><a href="#">Servers</a>
                                <div class="megamenu-panel xs-service-menu">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="{{ url('vps-servers') }}">
                                                <div class="media">
                                                    <img src="assets/images/menu-icon/icon-1.png" alt="">
                                                    <div class="media-body">
                                                        <h4>VPS Servers</h4>
                                                        <p>Early Create sites & offload them to clients</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{ url('dedicated-servers') }}">
                                                <div  class="media">
                                                    <img src="assets/images/menu-icon/icon-2.png" alt="">
                                                    <div class="media-body">
                                                        <h4>Dedicated Servers</h4>
                                                        <p>Early Create sites & offload them to clients</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="{{ url('pak-based-servers') }}">
                                                <div class="media">
                                                    <img src="assets/images/menu-icon/icon-4.png" alt="">
                                                    <div class="media-body">
                                                        <h4>Pak Based Servers</h4>
                                                        <p>Access your files from anywhere</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{ url('ssd-servers') }}">
                                                <div class="media">
                                                    <img src="assets/images/menu-icon/icon-5.png" alt="">
                                                    <div class="media-body">
                                                        <h4>SSD Servers</h4>
                                                        <p>Be secure, be safe</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                             <li><a href="#">Services</a>
                                <div class="megamenu-panel xs-service-menu">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="{{route('website-development')}}">
                                                <div class="media">
                                                    <img src="assets/images/menu-icon/icon-1.png" alt="">
                                                    <div class="media-body">
                                                        <h4>Web Development</h4>
                                                        <p>Early Create sites & offload them to clients</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{route('seo')}}">
                                                <div  class="media">
                                                    <img src="assets/images/menu-icon/icon-2.png" alt="">
                                                    <div class="media-body">
                                                        <h4>SEO</h4>
                                                        <p>Early Create sites & offload them to clients</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="{{route('smo')}}">
                                                <div class="media">
                                                    <img src="assets/images/menu-icon/icon-4.png" alt="">
                                                    <div class="media-body">
                                                        <h4>SMO</h4>
                                                        <p>Access your files from anywhere</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{route('ssl')}}">
                                                <div class="media">
                                                    <img src="assets/images/menu-icon/icon-5.png" alt="">
                                                    <div class="media-body">
                                                        <h4>SSL Certificates</h4>
                                                        <p>Be secure, be safe</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-lg-2">
                <ul class="xs-menu-tools">
                    <li>
                        <a href="#" class="offset-side-bar"><i class="icon icon-cart2"></i><span class="item-count"></span></a>
                    </li>
                    <li>
                        <a href="#modal-popup-2" class="navsearch-button xs-modal-popup"><i class="icon icon-search"></i></a>
                    </li>
                    <li>
                        <a href="#" class="navSidebar-button"><i class="icon icon-burger-menu"></i></a>
                    </li>
                </ul>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</header>