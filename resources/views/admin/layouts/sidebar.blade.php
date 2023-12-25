<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
        <img src="{{ asset(get_from_setting('logo')) }}" alt="{{ get_from_setting('app_name') }}"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ get_from_setting('app_name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset(get_from_setting('user_logo')) }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                
                <a href="#" class="d-block">{{isset(auth()->user()->name)?auth()->user()->name:"" }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item {{ request()->is('admin/home') == 'home' ? 'menu-open' : null }}">
                    <a href="{{ url('/admin/home') }}"
                        class="nav-link {{ request()->is('admin/home') == 'home' ? 'active' : null }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            {{-- <span class="badge badge-info right">2</span> --}}
                        </p>
                    </a>
                </li>
              
                <li class="nav-header">Master Section</li>
                <li
                    class="nav-item {{ request()->is('admin/adBanner*') ? 'menu-open' : '' }} ">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/adBanner*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-school"></i>
                        <p>
                            Masters
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">                     
                        @can('adBanner-viewAny')
                            <li class="nav-item">
                                <a href="{{ url('admin/adBanner') }}" class="nav-link {{ request()->is('admin/adBanner*') ? 'active' : '' }}">
                                    <i class="fas fa-house-user nav-icon"></i>
                                    <p>Ad Banners</p>
                                </a>
                            </li>
                        @endcan
                        @can('event-viewAny')
                            <li class="nav-item">
                                <a href="{{ url('admin/event') }}" class="nav-link {{ request()->is('admin/event*') ? 'active' : '' }}">
                                    <i class="fas fa-house-user nav-icon"></i>
                                    <p>Khadya Samaj Update</p>
                                </a>
                            </li>
                        @endcan
                        @can('testimonial-viewAny')
                            <li class="nav-item">
                                <a href="{{ url('admin/testimonial') }}" class="nav-link {{ request()->is('admin/testimonial*') ? 'active' : '' }}">
                                    <i class="fas fa-house-user nav-icon"></i>
                                    <p>Testimonial</p>
                                </a>
                            </li>
                        @endcan
                        @can('achivementbymember-viewAny')
                            <li class="nav-item">
                                <a href="{{ url('admin/achivementbymember') }}" class="nav-link {{ request()->is('admin/aachivementbymemberdBanner*') ? 'active' : '' }}">
                                    <i class="fas fa-house-user nav-icon"></i>
                                    <p>Achivement By Member</p>
                                </a>
                            </li>
                        @endcan
                        @can('job-viewAny')
                            <li class="nav-item">
                                <a href="{{ url('admin/job') }}" class="nav-link {{ request()->is('admin/job*') ? 'active' : '' }}">
                                    <i class="fas fa-house-user nav-icon"></i>
                                    <p>Job</p>
                                </a>
                            </li>
                        @endcan
                        @can('requirement-viewAny')
                            <li class="nav-item">
                                <a href="{{ url('admin/requirement') }}" class="nav-link {{ request()->is('admin/requirement*') ? 'active' : '' }}">
                                    <i class="fas fa-house-user nav-icon"></i>
                                    <p>Requirement</p>
                                </a>
                            </li>
                        @endcan

                        @can('member-viewAny')
                            <li class="nav-item">
                                <a href="{{ url('admin/member') }}" class="nav-link {{ request()->is('admin/member*') ? 'active' : '' }}">
                                    <i class="fas fa-house-user nav-icon"></i>
                                    <p>Member List</p>
                                </a>
                            </li>
                        @endcan
                        
                    </ul>
                </li>


                <li class="nav-header">System Section</li>
                <li
                    class="nav-item {{ request()->is('admin/settings*') || request()->is('admin/users*') || request()->is('admin/roles*') || request()->is('admin/permissions*') ? 'menu-open' : '' }} ">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/settings*') || request()->is('admin/users*') || request()->is('admin/roles*') || request()->is('admin/permissions*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            System Setting
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">


                        @can('user-viewAny')
                        <li class="nav-item">
                            <a href="{{ url('admin/users') }}" class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                                <i class="fas fa-user-cog nav-icon"></i>
                                <p>Users {{-- <span class="badge badge-info right">2</span> --}}</p>
                            </a>
                        </li>
                        @endcan

                        @can('role-viewAny')
                        <li class="nav-item">
                            <a href="{{ url('admin/roles') }}" class="nav-link {{ request()->is('admin/roles*') ? 'active' : '' }}">
                                <i class="fas fa-user-edit nav-icon"></i>
                                <p>Roles {{-- <span class="badge badge-info right">2</span> --}}</p>
                            </a>
                        </li> 
                        @endcan
                        @can('permission-viewAny')
                        <li class="nav-item">
                            <a href="{{ url('admin/permissions') }}"
                                class="nav-link {{ request()->is('admin/permissions*') ? 'active' : '' }}">
                                <i class="fas fa-user-check nav-icon"></i>
                                <p>Permissions {{-- <span class="badge badge-info right">2</span> --}}</p>
                            </a>
                        </li>
                        @endcan

                        @can('setting-viewAny')
                        <li class="nav-item">
                            <a href="{{ url('admin/settings') }}"
                                class="nav-link {{ request()->is('admin/settings*') ? 'active' : '' }}">
                                <i class="fas fa-sliders-h  nav-icon"></i>
                                <p>General Setting {{-- <span class="badge badge-info right">2</span> --}}</p>
                            </a>
                        </li>
                        @endcan

                    </ul>
                </li>


                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>