    <!--**********************************
                Nav header start
            ***********************************-->
    <div class="nav-header">
        <a href="index-2.html" class="brand-logo">
            <img class="logo-abbr" src="images/Logo footer.png" alt="">
            <img class="logo-compact" src="images/Logo footer.png" alt="">
            <img class="brand-title" src="images/Logo footer.png" alt="">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
                Nav header end
            ***********************************-->
    <!--**********************************
                Chat box End
            ***********************************-->

    <!--**********************************
                Sidebar start
            ***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label first">Main Menu</li>
                <li><a class="has-arrow ai-icon" href="{{ route('dashboard') }}" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                <path
                                    d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                    fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-label">Apps</li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path
                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                    fill="#000000" fill-rule="nonzero" />
                            </g>
                        </svg>
                        <span class="nav-text">Apps</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('user.index') }}">User</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                    d="M3,3 L21,3 C21.5522847,3 22,3.44771525 22,4 L22,11 C22,11.5522847 21.5522847,12 21,12 L3,12 C2.44771525,12 2,11.5522847 2,11 L2,4 C2,3.44771525 2.44771525,3 3,3 Z M5,8 C4.44771525,8 4,8.44771525 4,9 C4,9.55228475 4.44771525,10 5,10 L19,10 C19.5522847,10 20,9.55228475 20,9 C20,8.44771525 19.5522847,8 19,8 L5,8 Z"
                                    fill="#000000" />
                                <path
                                    d="M17.2914283,14.2943612 L18.7085717,15.7056388 C17.6611931,16.7573706 17.6647221,18.4590358 18.7164539,19.5064144 C18.8065164,19.5961041 18.902828,19.6792918 19.0046636,19.755351 L19.5984004,20.1988028 L18.4015996,21.8011972 L17.8078628,21.3577454 C17.6302443,21.2250852 17.4622605,21.0799918 17.3051762,20.9235577 C15.4707777,19.096752 15.4646226,16.1287596 17.2914283,14.2943612 Z M11.2914283,15.2943612 L12.7085717,16.7056388 C11.6611931,17.7573706 11.6647221,19.4590358 12.7164539,20.5064144 C12.8065164,20.5961041 12.902828,20.6792918 13.0046636,20.755351 L13.5984004,21.1988028 L12.4015996,22.8011972 L11.8078628,22.3577454 C11.6302443,22.2250852 11.4622605,22.0799918 11.3051762,21.9235577 C9.47077775,20.096752 9.4646226,17.1287596 11.2914283,15.2943612 Z M5.29142832,14.2943612 L6.70857168,15.7056388 C5.66119311,16.7573706 5.66472209,18.4590358 6.71645389,19.5064144 C6.80651638,19.5961041 6.90282804,19.6792918 7.00466363,19.755351 L7.59840039,20.1988028 L6.40159961,21.8011972 L5.80786284,21.3577454 C5.63024431,21.2250852 5.46226047,21.0799918 5.30517622,20.9235577 C3.47077775,19.096752 3.4646226,16.1287596 5.29142832,14.2943612 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            </g>
                        </svg>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('product.index')}}">Products</a></li>

                    </ul>
                </li>
                <li class="nav-label">Components</li>
                <li>
                    <a href="widget-basic.html" class="ai-icon" href="javascript:void()" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                    d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z"
                                    fill="#000000" />
                                <path
                                    d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            </g>
                        </svg>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('order.index')}}">Order</a></li>
                    </ul>
                </li>
                <li>
                    <a href="widget-basic.html" class="ai-icon" href="javascript:void()" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                    d="M4,7 L20,7 L20,19.5 C20,20.3284271 19.3284271,21 18.5,21 L5.5,21 C4.67157288,21 4,20.3284271 4,19.5 L4,7 Z M10,10 C9.44771525,10 9,10.4477153 9,11 C9,11.5522847 9.44771525,12 10,12 L14,12 C14.5522847,12 15,11.5522847 15,11 C15,10.4477153 14.5522847,10 14,10 L10,10 Z"
                                    fill="#000000" />
                                <rect fill="#000000" opacity="0.3" x="2" y="3" width="20" height="4" rx="1" />
                            </g>
                        </svg>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('laporan')}}">Laporan</a></li>
                    </ul>
                </li>

            </ul>
        </div>


    </div>
    <!--**********************************
                Sidebar end
            ***********************************-->

    <!--**********************************
                Header start
            ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="search_bar dropdown">
                            <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                <i class="mdi mdi-magnify"></i>
                            </span>
                            <div class="dropdown-menu p-0 m-0">
                                <form>
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link bell dz-fullscreen" href="#">
                                <svg id="icon-full" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor"
                                    stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    class="css-i6dzq1">
                                    <path
                                        d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                    </path>
                                </svg>
                                <svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-minimize">
                                    <path
                                        d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>
                                <div class="pulse-css"></div>
                            </a>

                        </li>

                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <div class="header-info">
                                    <span>Hey, <strong>{{Auth::user()->name}}</strong></span>
                                    <small>Business Profile</small>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button class="dropdown-item ai-icon"  type="submit">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                        width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    <span class="ml-2">Logout </span>
                                </button>
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
                Header end ti-comment-alt
            ***********************************-->
