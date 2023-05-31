<!-- Topbar Start -->
<div class="navbar-custom" style="background-color:#008080;height:50px">
    <div class="container-fluid" style="margin-top: -10px">
        <ul class="list-unstyled topnav-menu float-right mb-0">
            <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                    <i class="fa fa-gear fa-lg" style="color: light; ; max-width: 12px !important"></i>
                </a>
            </li>
            <li class="dropdown notification-list topbar-dropdown ml-0">
                <a class="nav-link  nav-user mr-0 ml-0" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('/') }}assets/images/user.jpg" style="width: 35px; margin-top:-6px" alt="user-image"
                        class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Hello!</h6>
                    </div>

                    <!-- item-->
                    <a href="{{ route('profile') }}" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>
                    <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>



        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="javascript:void(0)" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <!-- <img src="{{ asset('/assets/img/company.png') }}" alt="" height="25"> -->
                    <!-- <span class="logo-lg-text-light">UBold</span> -->
                </span>
                <span class="logo-lg">
                    <!-- <img src="{{ asset('/assets/img/company.png') }}" alt="" width="300"
                        height="50"> -->
                    <!-- <span class="logo-lg-text-light">U</span> -->
                </span>
            </a>

            <a href="javascript:void(0)" class="logo logo-light text-center">
                <span class="logo-sm">
                <span class="logo-lg-text-light">S</span>
                
                     <!-- <img src="{{ asset('/assets/img/company.png') }}" alt="" height="25"> -->
                </span>
                <span class="logo-lg">
                <span class="logo-lg-text-light">Signal</span>
                    <!-- <img src="{{ asset('/assets/img/company.png') }}" alt="" height="40" width="100"> -->
                </span>
            </a>

        </div>


        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <a class="button-menu-mobile waves-effect waves-light pl-3 text-light">
                    <i class="fe-menu"></i>
                </a>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>

        </ul>
        <div class="clearfix" style="height:50px"></div>
    </div>
</div>
<!-- end Topbar -->
