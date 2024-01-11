<header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headr-khadayata">
                        <!-- logo start -->
                        <div class="header-element logo">
                            <a href="{{url('/')}}">
                                <img src="{{url('frontend/images/logo.webp')}}" alt="logo-image" class="img-fluid">
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
                                <h1>Welcome {{ucfirst(@Auth::guard('member')->user()->firstName)}}</h1>
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
        <div class="header-main-area">
           
            <div class="header-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-menu-area">
                                <div class="main-navigation navbar-expand-xl">
                                    <div class="box-header menu-close">
                                        <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                                    </div>
                                    <!-- menu start -->
                                    <div class="navbar-collapse" id="navbarContent">
                                        <div class="megamenu-content">
                                            <div class="mainwrap">
                                                <ul class="main-menu">
                                                    <li class="menu-link">
                                                        <a href="{{url('/member/dashboard')}}" class="link-title">
                                                            <span class="sp-link-title">Dashboard</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="{{url('/member/profile')}}" class="link-title">
                                                            <span class="sp-link-title">Profile</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="{{url('/member/message-board')}}" class="link-title">
                                                            <span class="sp-link-title">Message Board</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="{{url('/member/connections')}}" class="link-title">
                                                            <span class="sp-link-title">Connection</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="{{url('/member/membership-plan')}}" class="link-title">
                                                            <span class="sp-link-title">Membership Plan</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="{{url('/member/banners')}}" class="link-title">
                                                            <span class="sp-link-title">Banners</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="{{url('/member/invoices')}}" class="link-title">
                                                            <span class="sp-link-title">Invoices</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="{{url('/member/suggestions')}}" class="link-title">
                                                            <span class="sp-link-title">Suggestions</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="{{url('/member/feedbacks')}}" class="link-title">
                                                            <span class="sp-link-title">Feedback</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- menu end -->
                                    <div class="head-mom">
                                        <a href="{{url('/member/mom')}}" class="btn btn-style21">MOM</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <!-- header end -->

    <!-- mobile menu start -->
    <div class="header-bottom-area mobile">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main-menu-area">
                        <div class="main-navigation navbar-expand-xl">
                            <div class="box-header menu-close">
                                <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                            </div>
                            <!-- menu start -->
                            <div class="navbar-collapse" id="navbarContent01">
                                <div class="megamenu-content">
                                    <div class="mainwrap">
                                        <ul class="main-menu">
                                            <li class="menu-link">
                                                <a href="{{url('dashboard')}}" class="link-title">
                                                    <span class="sp-link-title">Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="menu-link">
                                                <a href="{{url('profile')}}" class="link-title">
                                                    <span class="sp-link-title">Profile</span>
                                                </a>
                                            </li>
                                            <li class="menu-link">
                                                <a href="{{url('message-board')}}" class="link-title">
                                                    <span class="sp-link-title">Message Board</span>
                                                </a>
                                            </li>
                                            <li class="menu-link">
                                                <a href="{{url('connection')}}" class="link-title">
                                                    <span class="sp-link-title">Connection</span>
                                                </a>
                                            </li>
                                            <li class="menu-link">
                                                <a href="{{url('membership-plan')}}" class="link-title">
                                                    <span class="sp-link-title">Membership Plan</span>
                                                </a>
                                            </li>
                                            <li class="menu-link">
                                                <a href="{{url('banners')}}" class="link-title">
                                                    <span class="sp-link-title">Banners</span>
                                                </a>
                                            </li>
                                            <li class="menu-link">
                                                <a href="{{url('invoices')}}" class="link-title">
                                                    <span class="sp-link-title">Invoices</span>
                                                </a>
                                            </li>
                                            <li class="menu-link">
                                                <a href="{{url('suggestions')}}" class="link-title">
                                                    <span class="sp-link-title">Suggestions</span>
                                                </a>
                                            </li>
                                            <li class="menu-link">
                                                <a href="{{url('feedback')}}" class="link-title">
                                                    <span class="sp-link-title">Feedback</span>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="head-mom">
                                                    <a href="{{url('mom')}}" class="btn btn-style21">MOM</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- menu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu end -->

    <div class="dash-board">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-head-dash">
                        <div class="header-dash">
                            <h3>{{ucfirst(Request::segment(1))}}</h3>
                        </div>
                        <div class="dash-log">
                            <a href="{{url('/member/logout')}}" class="btn btn-style05">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

