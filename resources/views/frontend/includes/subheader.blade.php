<div class="header-main-area">
           
            <div class="header-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
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
                                                    <li class="menu-link parent">
                                                        <a href="{{url('/')}}" class="link-title">
                                                            <span class="sp-link-title">Home</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">About us</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">About us</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu sub-menu collapse" id="collapse-page-menu">
                                                            <li class="submenu-li">
                                                                <a href="{{url('about-us')}}" class="submenu-link">History of Khadayata Samaj</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="{{url('board-members')}}" class="submenu-link">Board Members</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Events</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Events</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu sub-menu collapse" id="collapse-page-menu">
                                                            <li class="submenu-li">
                                                                <a href="{{url('upcoming-events')}}" class="submenu-link">Upcoming Events</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="{{url('past-events')}}" class="submenu-link">Past Events</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- <li class="menu-link parent">
                                                        <a href="updates.php" class="link-title">
                                                            <span class="sp-link-title">Updates</span>
                                                        </a>
                                                    </li> -->
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Message Board</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Message Board</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu sub-menu collapse" id="collapse-page-menu">
                                                            <li class="submenu-li">
                                                                <a href="{{@Auth::guard('member')->user() ? url('/achievements') : url('login')}}" class="submenu-link">Achievements</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="{{@Auth::guard('member')->user() ? url('/jobs') : url('login')}}" class="submenu-link">Jobs</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="{{@Auth::guard('member')->user() ? url('/requirements') : url('login')}}" class="submenu-link">Requirements</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="{{@Auth::guard('member')->user() ? url('/matrimonials') : url('login')}}" class="submenu-link">Matrimonials</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Member List</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Member List</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu sub-menu collapse" id="collapse-page-menu">
                                                            <li class="submenu-li">
                                                                <a href="{{@Auth::guard('member')->user() ? url('/members-list') : url('login')}}" class="submenu-link">List of members /  Search</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <!-- <a href="how-to-become-a-member.php" class="submenu-link">How to Become a Member</a> -->
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="{{url('contact-us')}}" class="submenu-link">Any Questions Click Here</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="/register" class="submenu-link">Membership form and Fees</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="{{url('faq')}}" class="link-title">
                                                            <span class="sp-link-title">Faq's</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="{{url('donation')}}" class="link-title">
                                                            <span class="sp-link-title">Donate</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="{{url('contact-us')}}" class="link-title">
                                                            <span class="sp-link-title">Contact us</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- menu end -->
                                    <div class="samaj-search">
                                        <div class="header-element search-wrap">
                                            <input type="text" name="search" placeholder="Search website">
                                            <a href="{{url('/')}}" class="search-btn"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>