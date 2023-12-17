<header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headr-khadayata">
                        <!-- logo start -->
                        <div class="header-element logo">
                            <a href="index.php">
                                <img src="{{asset('frontend/images/logo.webp')}}" alt="logo-image" class="img-fluid">
                            </a>
                        </div>
                        <!-- logo end -->
                        <div class="header-phone2">
                            <h4>Convenor: Shri Shreyas Shirishchandra Shah</h4>
                        </div>
                        <div class="header-phone">
                            <div class="head-mob" > 
                                <i class="fa fa-phone"></i><a href="tel:+91 9821020582">+91 9821020582</a>
                            </div>
                            <div class="head-mail" >
                                <i class="fa fa-envelope"></i><a href="mailto:care@khadayatasamaj.in"> care@khadayatasamaj.in</a>
                            </div>
                            <div class="head-register">
                                <a href="{{url('member/register')}}" class="btn btn-style2">Register</a>
                                <a href="{{url('member/login')}}" class="btn btn-style2">Login</a>
                            </div>
                        </div>
                        <div class="header-main">
                            <!-- header-mobile icon start -->
                            <div class="header-element right-block-box">
                                <ul class="shop-element">
                                    <li class="side-wrap nav-toggler">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#navbarContent">
                                            <span class="line"></span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <!-- header-icon end -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        @include('frontend/includes/subheader')
    </header>
    <!-- header end -->

    <!-- mobile menu start -->
    @include('frontend/includes/mobileheader')
    <!-- mobile menu end -->