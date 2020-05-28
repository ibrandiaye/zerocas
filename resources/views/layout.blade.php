<!DOCTYPE html>
<!--
Template Name: Marvin - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Marvin I CRM Dashboard</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- vector map CSS -->
    <link href="{{ asset('vendors/vectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('vendors/apexcharts/dist/apexcharts.css') }}" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="{{ asset('vendors/jquery-toggles/css/toggles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendors/jquery-toggles/css/themes/toggles-light.css') }}" rel="stylesheet" type="text/css">

    <!-- Toastr CSS -->
    <link href="{{ asset('vendors/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Preloader
<div class="preloader-it">
    <div class="loader-pendulums"></div>
</div>
--><!-- /Preloader -->

<!-- HK Wrapper -->
<div class="hk-wrapper hk-vertical-nav">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
        <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
        <a class="navbar-brand font-weight-700" href="dashboard1.html">
            Marvin
        </a>
        <ul class="navbar-nav hk-navbar-content">
            <li class="nav-item">
                <a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="search"></i></span></a>
            </li>
            <li class="nav-item">
                <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="settings"></i></span></a>
            </li>
            <li class="nav-item dropdown dropdown-notifications">
                <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge-wrap"><span class="badge badge-primary badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
                <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">View all</a></h6>
                    <div class="notifications-nicescroll-bar">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-sm">
                                        <img src="dist/img/avatar1.jpg" alt="user" class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="notifications-text"><span class="text-dark text-capitalize">Evie Ono</span> accepted your invitation to join the team</div>
                                        <div class="notifications-time">12m</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-sm">
                                        <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="notifications-text">New message received from <span class="text-dark text-capitalize">Misuko Heid</span></div>
                                        <div class="notifications-time">1h</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-primary rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-account font-18"></i></span></span>
                                            </span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="notifications-text">You have a follow up with<span class="text-dark text-capitalize"> Marvin head</span> on <span class="text-dark text-capitalize">friday, dec 19</span> at <span class="text-dark">10.00 am</span></div>
                                        <div class="notifications-time">2d</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-success rounded-circle">
													<span class="initial-wrap"><span>A</span></span>
                                            </span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="notifications-text">Application of <span class="text-dark text-capitalize">Sarah Williams</span> is waiting for your approval</div>
                                        <div class="notifications-time">1w</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-warning rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-notifications font-18"></i></span></span>
                                            </span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="notifications-text">Last 2 days left for the project</div>
                                        <div class="notifications-time">15d</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-authentication">
                <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <div class="media-img-wrap">
                            <div class="avatar">
                                <img src="{{asset('dist/img/avatar12.jpg')}}" alt="user" class="avatar-img rounded-circle">
                            </div>
                            <span class="badge badge-success badge-indicator"></span>
                        </div>
                        <div class="media-body">
                            <span> {{ Auth::user()->name}}<i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                    <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                    <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a>
                    <a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                    <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                    <div class="dropdown-divider"></div>
                    <div class="sub-dropdown-menu show-on-hover">
                        <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                        <div class="dropdown-menu open-left-side">
                            <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                            <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                            <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="dropdown-icon zmdi zmdi-power"></i><span>Se déconnecter</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <form role="search" class="navbar-search">
        <div class="position-relative">
            <a href="javascript:void(0);" class="navbar-search-icon"><span class="feather-icon"><i data-feather="search"></i></span></a>
            <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
            <a id="navbar_search_close" class="navbar-search-close" href="#"><span class="feather-icon"><i data-feather="x"></i></span></a>
        </div>
    </form>
    <!-- /Top Navbar -->

    <!-- Vertical Nav -->
    <nav class="hk-nav hk-nav-dark">
        <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
        <div class="nicescroll-bar">
            <div class="navbar-nav-wrap">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item ">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#region">
                            <span class="feather-icon"><i data-feather="activity"></i></span>
                            <span class="nav-link-text">Region</span>
                        </a>
                        <ul id="region" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('region.create')}}">Ajouter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('region.index')}}">Liste</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#departement">
                            <span class="feather-icon"><i data-feather="activity"></i></span>
                            <span class="nav-link-text">Departement</span>
                        </a>
                        <ul id="departement" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('departement.create')}}">Ajouter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('departement.index')}}">Liste</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#commune">
                            <span class="feather-icon"><i data-feather="activity"></i></span>
                            <span class="nav-link-text">Commune</span>
                        </a>
                        <ul id="commune" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('commune.create')}}">Ajouter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('commune.index')}}">Liste</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#user">
                            <span class="feather-icon"><i data-feather="activity"></i></span>
                            <span class="nav-link-text">Utilisateur</span>
                        </a>
                        <ul id="user" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('user.create')}}">Ajouter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('user.index')}}">Liste</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#article">
                            <span class="feather-icon"><i data-feather="activity"></i></span>
                            <span class="nav-link-text">Article</span>
                        </a>
                        <ul id="article" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('article.create')}}">Ajouter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('article.index')}}">Liste</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('alerte.index')}}">
                            <span class="feather-icon"><i data-feather="activity"></i></span>
                            <span class="nav-link-text">Alerte</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
    <!-- /Vertical Nav -->

    <!-- Setting Panel -->
    <div class="hk-settings-panel">
        <div class="nicescroll-bar position-relative">
            <div class="settings-panel-wrap">
                <div class="settings-panel-head">
                    <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
                </div>
                <hr>

                <h6 class="mb-5">Navigation</h6>
                <p class="font-14">Menu comes in two modes: dark & light</p>
                <div class="button-list hk-nav-select mb-10">
                    <button type="button" id="nav_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                    <button type="button" id="nav_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                </div>
                <hr>
                <h6 class="mb-5">Top Nav</h6>
                <p class="font-14">Choose your liked color mode</p>
                <div class="button-list hk-navbar-select mb-10">
                    <button type="button" id="navtop_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                    <button type="button" id="navtop_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <h6>Scrollable Header</h6>
                    <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                </div>
                <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
            </div>
        </div>
        <img class="d-none" src="dist/img/logo-light.png" alt="brand" />
        <img class="d-none" src="dist/img/logo-dark.png" alt="brand" />
    </div>
    <div class="hk-pg-wrapper">
        <!-- Container -->

            @yield('content')


        <!-- /Container -->

        <!-- Footer -->
        <div class="hk-footer-wrap container">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="d-inline-block">Follow us</p>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /Footer -->
    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->

<!-- jQuery -->
<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{ asset('dist/js/jquery.slimscroll.js') }}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }}"></script>

<!-- FeatherIcons JavaScript -->
<script src="{{ asset('dist/js/feather.min.js') }}"></script>

<!-- Toggles JavaScript -->
<script src="{{ asset('vendors/jquery-toggles/toggles.min.js') }}"></script>
<script src="{{ asset('dist/js/toggle-data.js') }}"></script>

<!-- Counter Animation JavaScript -->
<script src="{{ asset('vendors/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('vendors/jquery.counterup/jquery.counterup.min.js') }}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('vendors/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('vendors/morris.js/morris.min.j') }}s"></script>

<!-- EChartJS JavaScript -->
<script src="{{ asset('vendors/echarts/dist/echarts-en.min.js') }}"></script>

<!-- Sparkline JavaScript -->
<script src="{{ asset('vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>

<!-- Vector Maps JavaScript -->
<script src="{{ asset('vendors/vectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('vendors/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('dist/js/vectormap-data.js') }}"></script>


<!-- Owl JavaScript -->
<script src="{{ asset('vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>

<!-- Toastr JS -->
<script src="{{ asset('vendors/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

<!-- Init JavaScript -->
<script src="{{ asset('dist/js/init.js') }}"></script>

@yield('script')


</body>

</html>