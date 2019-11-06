  <!-- Navigation Bar-->
        <header id="topnav">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        <li class="d-none d-sm-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>
            
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-bell noti-icon"></i>
                                <span class="badge badge-danger rounded-circle noti-icon-badge">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-right">
                                            <a href="" class="text-muted">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>

                                <div class="slimscroll noti-scroll">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon">
                                            <img src="{{asset('assets/images/users/user-1.jpg')}} class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">1 min ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="{{asset('assets/images/users/user-4.jpg')}} class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                            <small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-secondary">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                              
                                <span class="pro-user-name ml-1">
                                    Mr.Thanh <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        Welcome !
                                    </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Settings</span>
                                </a>
                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                                <i class="fe-settings noti-icon"></i>
                            </a>
                        </li>

                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box" style="margin-left: -4%;">
                        <a href="index.html" class="logo text-center">
                            <span class="logo-lg">
                                <img src="{{asset('assets/images/doraemon.png')}}" alt="" height="50">
                                <!-- <span class="logo-lg-text-dark">Upvex</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">X</span> -->
                                <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="28">
                            </span>
                        </a>
                    </div>

                    <h2 class="title-cms">Quizz Game Dora IQ</h2>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <div class="topbar-menu">
                <div class="container-fluid" style="width: 12%;">
                   <div class="sidenav">
                      <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="{{route('linh-vuc.danh-sach')}}" style="margin-left: 20px;" >
                                    <i class="la la-cube"></i>Lĩnh Vực </a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{route('cau-hoi.danh-sach')}}">
                                    <i class="la la-share-alt"></i>Câu Hỏi</a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{route('nguoi-choi.danh-sach')}}"> <i class="  mdi mdi-account-group"></i>Người Chơi</a>
                               
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('quan-tri-vien.danh-sach')}}"> <i class=" mdi mdi-account-key"></i>Quản Trị Viên</a>
                               
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('goi-credit.danh-sach')}}"> <i class="la la-diamond"></i>Gói Credit</a> 
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('cau-hinh-diem-cau-hoi.danh-sach')}}">
                                    <i class=" la la-cog"></i>Cấu Hình Điểm</a>
                               
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('cau-hinh-app.danh-sach')}}">
                                    <i class=" la la-cog"></i>Cấu Hình App</a>
                               
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('cau-hinh-tro-giup.danh-sach')}}">
                                    <i class="  la la-wechat"></i>Cấu Hình Trợ Giúp</a>
                               
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('lich-su-mua-credit.danh-sach')}}">
                                    <i class="la la-diamond"></i>Lịch Sử Mua Credit</a>
                               
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('luot-choi.danh-sach')}}">
                                    <i class="  la la-gittip"></i>Lượt Chơi</a>
                               
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('chi-tiet-luot-choi.danh-sach')}}">
                                    <i class=" la la-certificate"></i>Chi Tiết Lượt Chơi</a>
                               
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->

        </header>
        <!-- End Navigation Bar-->