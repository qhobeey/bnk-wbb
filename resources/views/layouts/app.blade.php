<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities." />
        <meta name="keywords" content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app" />
        <meta name="author" content="pixelstrap" />
        <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon" />
        <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon" />
        <title>Account</title>
        <!-- Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css" />
        <!-- ico-font-->
        <link rel="stylesheet" type="text/css" href="/assets/css/vendors/icofont.css" />
        <!-- Themify icon-->
        <link rel="stylesheet" type="text/css" href="/assets/css/vendors/themify.css" />
        <!-- Flag icon-->
        <link rel="stylesheet" type="text/css" href="/assets/css/vendors/flag-icon.css" />
        <!-- Feather icon-->
        <link rel="stylesheet" type="text/css" href="/assets/css/vendors/feather-icon.css" />
        <!-- Plugins css start-->
        <link rel="stylesheet" type="text/css" href="/assets/css/vendors/slick.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/vendors/slick-theme.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/vendors/scrollbar.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/vendors/animate.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/vendors/datatables.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/vendors/date-range-picker/flatpickr.min.css" />
        <!-- Plugins css Ends-->
        <!-- Bootstrap css-->
        <link rel="stylesheet" type="text/css" href="/assets/css/vendors/bootstrap.css" />
        <!-- App css-->
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
        <link id="color" rel="stylesheet" href="/assets/css/color-1.css" media="screen" />
        <!-- Responsive css-->
        <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css" />

        <style>
            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper,
            .toggle-sidebar{
                background: #ffffff;
            }
            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper .sidebar-main .sidebar-links li a span{
                color: #000;
            }
            .page-wrapper .sidebar-main-title h6{
                color: #fff;
            }
            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper .sidebar-main .sidebar-list i.fa-thumb-tack{
                color: #000;
            }
        </style>
    </head>
    <body>
        <div class="loader-wrapper">
            <div class="loader loader-1">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner-1"></div>
            </div>
        </div>
        <!-- loader ends-->
        <!-- tap on top starts-->
        <div class="tap-top"><i data-feather="chevrons-up"></i></div>
        <!-- tap on tap ends-->
        <!-- page-wrapper Start-->
        <div class="page-wrapper compact-wrapper" id="pageWrapper">
            <div class="page-header row">
                <div class="header-logo-wrapper col-auto">
                    <div class="logo-wrapper">
                        <a href="{{route('admin.dashboard')}}"><img class="img-fluid for-light" src="/front/assets/images/resources/logo-1.png" alt="" /><img class="img-fluid for-dark" src="/assets/images/logo/logo_light.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-4 col-xl-4 page-title">
                    <h4 class="f-w-700">Hello {{auth()->user()->name}}</h4>
                    <nav>
                        <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}"> <i data-feather="home"> </i></a>
                            </li>
                            <li class="breadcrumb-item f-w-400">Dashboard</li>
                            <li class="breadcrumb-item f-w-400 active">account</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Start-->
                <div class="header-wrapper col m-0">
                    <div class="row">
                        <form class="form-inline search-full col" action="#" method="get">
                            <div class="form-group w-100">
                                <div class="Typeahead Typeahead--twitterUsers">
                                    <div class="u-posRelative">
                                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Mofi .." name="q" title="" autofocus />
                                        <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                                        <i class="close-search" data-feather="x"></i>
                                    </div>
                                    <div class="Typeahead-menu"></div>
                                </div>
                            </div>
                        </form>
                        <div class="header-logo-wrapper col-auto p-0">
                            <div class="logo-wrapper">
                                <a href="{{route('admin.dashboard')}}"><img class="img-fluid" src="/assets/images/logo/logo.png" alt="" /></a>
                            </div>
                            <div class="toggle-sidebar">
                                <svg class="stroke-icon sidebar-toggle status_toggle middle">
                                    <use href="/assets/svg/icon-sprite.svg#toggle-icon"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                            <ul class="nav-menus">
                                <li>
                                    <span class="header-search">
                                        <svg>
                                            <use href="/assets/svg/icon-sprite.svg#search"></use>
                                        </svg>
                                    </span>
                                </li>
                                <li>
                                    <div class="form-group w-100">
                                        <div class="Typeahead Typeahead--twitterUsers">
                                            <div class="u-posRelative d-flex align-items-center">
                                                <svg class="search-bg svg-color">
                                                    <use href="/assets/svg/icon-sprite.svg#search"></use>
                                                </svg>
                                                <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search .." name="q" title="" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mode">
                                        <svg>
                                            <use href="/assets/svg/icon-sprite.svg#moon"></use>
                                        </svg>
                                    </div>
                                </li>
                                <li class="profile-nav onhover-dropdown px-0 py-0">
                                    <div class="d-flex profile-media align-items-center">
                                        <img class="img-30" src="/assets/images/dashboard/profile.png" alt="" />
                                        <div class="flex-grow-1">
                                            <span>{{auth()->user()->name}}</span>
                                            <p class="mb-0 font-outfit">Customer<i class="fa fa-angle-down"></i></p>
                                        </div>
                                    </div>
                                    <ul class="profile-dropdown onhover-show-div">
                                        {{-- <li>
                                            <a href="#"><i data-feather="user"></i><span>Account </span></a>
                                        </li> --}}
                                        <li>
                                            <a href="{{route('logout')}}"><i data-feather="log-in"> </i><span>Log out</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <script class="result-template" type="text/x-handlebars-template">
                            <div class="ProfileCard u-cf">
                            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                            <div class="ProfileCard-details">
                            <div class="ProfileCard-realName">Richmond</div>
                            </div>
                            </div>
                        </script>
                        <script class="empty-template" type="text/x-handlebars-template">
                            <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
                        </script>
                    </div>
                </div>
                <!-- Page Header Ends                              -->
            </div>
            <!-- Page Body Start-->
            <div class="page-body-wrapper">
                <!-- Page Sidebar Start-->
                <div class="sidebar-wrapper" data-layout="stroke-svg">
                    <div>
                        <div class="logo-wrapper">
                            <a href="{{route('admin.dashboard')}}"><img class="img-fluid" src="/front/assets/images/resources/logo-1.png" alt="" /></a>
                            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                            <div class="toggle-sidebar">
                                <svg class="stroke-icon sidebar-toggle status_toggle middle">
                                    <use href="/assets/svg/icon-sprite.svg#toggle-icon"></use>
                                </svg>
                                <svg class="fill-icon sidebar-toggle status_toggle middle">
                                    <use href="/assets/svg/icon-sprite.svg#fill-toggle-icon"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="logo-icon-wrapper">
                            <a href="{{route('admin.dashboard')}}"><img class="img-fluid" src="/assets/images/logo/logo-icon.png" alt="" /></a>
                        </div>
                        <nav class="sidebar-main">
                            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                            <div id="sidebar-menu">
                                <ul class="sidebar-links" id="simple-bar">
                                    <li class="back-btn">
                                        <a href="{{route('admin.dashboard')}}"><img class="img-fluid" src="/assets/images/logo/logo-icon.png" alt="" /></a>
                                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                    </li>
                                    <li class="pin-title sidebar-main-title">
                                        <div>
                                            <h6>Pinned</h6>
                                        </div>
                                    </li>
                                    <li class="sidebar-main-title">
                                        <div>
                                            <h6 class="lan-1">General</h6>
                                        </div>
                                    </li>
                                    {{-- <li class="sidebar-list">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title link-nav" href="#">
                                            <svg class="stroke-icon">
                                                <use href="/assets/svg/icon-sprite.svg#stroke-file"></use>
                                            </svg>
                                            <svg class="fill-icon">
                                                <use href="/assets/svg/icon-sprite.svg#fill-file"></use>
                                            </svg>
                                            <span>Dashbaord</span>
                                        </a>
                                    </li> --}}
                                    <li class="sidebar-list">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title link-nav" href="#">
                                            <svg class="stroke-icon">
                                                <use href="/assets/svg/icon-sprite.svg#stroke-file"></use>
                                            </svg>
                                            <svg class="fill-icon">
                                                <use href="/assets/svg/icon-sprite.svg#fill-file"></use>
                                            </svg>
                                            <span>Accounts</span>
                                        </a>
                                    </li>
                                    {{-- <li class="sidebar-list">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title link-nav" href="#">
                                            <svg class="stroke-icon">
                                                <use href="/assets/svg/icon-sprite.svg#stroke-file"></use>
                                            </svg>
                                            <svg class="fill-icon">
                                                <use href="/assets/svg/icon-sprite.svg#fill-file"></use>
                                            </svg>
                                            <span>Transfers & Pay</span>
                                        </a>
                                    </li> --}}
                                    {{-- <li class="sidebar-list">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title link-nav" href="#">
                                            <svg class="stroke-icon">
                                                <use href="/assets/svg/icon-sprite.svg#stroke-file"></use>
                                            </svg>
                                            <svg class="fill-icon">
                                                <use href="/assets/svg/icon-sprite.svg#fill-file"></use>
                                            </svg>
                                            <span>Payroll</span>
                                        </a>
                                    </li> --}}
                                    
                                    
                                    
                                    {{-- <li class="sidebar-list">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title link-nav" href="#">
                                            <svg class="stroke-icon">
                                                <use href="/assets/svg/icon-sprite.svg#stroke-support-tickets"></use>
                                            </svg>
                                            <svg class="fill-icon">
                                                <use href="/assets/svg/icon-sprite.svg#fill-support-tickets"></use>
                                            </svg>
                                            <span>Support Ticket</span>
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                        </nav>
                    </div>
                </div>
                <!-- Page Sidebar Ends-->
                <div class="page-body">
                    <!-- Container-fluid starts-->
                    @yield('content')
                    <!-- Container-fluid Ends-->
                </div>
                <!-- footer start-->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 footer-copyright d-flex flex-wrap align-items-center justify-content-between">
                                <p class="mb-0 f-w-600">Copyright <span class="year-update"> </span> © {{env('APP_NAME')}}</p>
                                <p class="mb-0 f-w-600">
                                    Hand crafted & made with
                                    <svg class="footer-icon">
                                        <use href="/assets/svg/icon-sprite.svg#footer-heart"></use>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="/assets/js/jquery.min.js"></script>
        <!-- Bootstrap js-->
        <script src="/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- feather icon js-->
        <script src="/assets/js/icons/feather-icon/feather.min.js"></script>
        <script src="/assets/js/icons/feather-icon/feather-icon.js"></script>
        <!-- scrollbar js-->
        <script src="/assets/js/scrollbar/simplebar.js"></script>
        <script src="/assets/js/scrollbar/custom.js"></script>
        <!-- Sidebar jquery-->
        <script src="/assets/js/config.js"></script>
        <!-- Plugins JS start-->
        <script src="/assets/js/sidebar-menu.js"></script>
        <script src="/assets/js/sidebar-pin.js"></script>
        <script src="/assets/js/slick/slick.min.js"></script>
        <script src="/assets/js/slick/slick.js"></script>
        <script src="/assets/js/header-slick.js"></script>
        <script src="/assets/js/chart/apex-chart/apex-chart.js"></script>
        <script src="/assets/js/chart/apex-chart/stock-prices.js"></script>
        <script src="/assets/js/chart/apex-chart/moment.min.js"></script>
        <script src="/assets/js/notify/bootstrap-notify.min.js"></script>
        <!-- calendar js-->
        <script src="/assets/js/dashboard/default.js"></script>
        <script src="/assets/js/notify/index.js"></script>
        <script src="/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
        <script src="/assets/js/datatable/datatables/datatable.custom.js"></script>
        <script src="/assets/js/datatable/datatables/datatable.custom1.js"></script>
        <script src="/assets/js/datepicker/date-range-picker/moment.min.js"></script>
        <script src="/assets/js/datepicker/date-range-picker/datepicker-range-custom.js"></script>
        <script src="/assets/js/typeahead/handlebars.js"></script>
        <script src="/assets/js/typeahead/typeahead.bundle.js"></script>
        <script src="/assets/js/typeahead/typeahead.custom.js"></script>
        <script src="/assets/js/typeahead-search/handlebars.js"></script>
        <script src="/assets/js/typeahead-search/typeahead-custom.js"></script>
        <script src="/assets/js/height-equal.js"></script>
        <script src="/assets/js/animation/wow/wow.min.js"></script>
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="/assets/js/script.js"></script>
        <script src="/assets/js/script1.js"></script>
        <script src="/assets/js/theme-customizer/customizer.js"></script>
        <!-- Plugin used-->
        <script>
            new WOW().init();
        </script>
    </body>
</html>
