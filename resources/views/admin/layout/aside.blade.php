<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu" style="margin-top: -20px">
    <div class="h-100 " data-simplebar>
        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ asset('/assets/images/jaguar.png') }}" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>My Account</span>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock mr-1"></i>
                        <span>Lock Screen</span>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{ route('admin.index') }}">
                        <i data-feather="airplay"></i>
                        <span> Main Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}">
                        <i data-feather="user"></i>
                        <span> Profile </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('users') }}">
                        <i data-feather="users"></i>
                        <span> Users </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('chat') }}">
                        <i data-feather="message-square"></i>
                        <span> Chats </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('group_chat') }}">
                        <i data-feather="message-circle"></i>
                        <span> Group Chats </span>
                    </a>
                </li>
                <li>
                    <a href="#Contacts" data-toggle="collapse" id="main_dashboard">
                        <i data-feather="settings"></i>
                        <span> Settings </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="Contacts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('profile') }}">profile</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.logout') }}">Logout</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <!-- End Sidebar -->
    <div class="clear-fix"></div>
</div>
<!-- Sidebar -left -->