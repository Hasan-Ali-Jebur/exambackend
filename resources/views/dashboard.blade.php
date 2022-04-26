@extends('layouts.app')

@section('header')
    <h4 class="page-title"> {{ __('Dashboard') }}</h4>
@endsection
@section("content")
    <div class="container">

        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h4 class="header-title m-t-0 m-b-30">Total Revenue</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1">
                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                                   data-bgColor="#F9B9B9" value="58"
                                   data-skin="tron" data-angleOffset="180" data-readOnly=true
                                   data-thickness=".15"/>
                        </div>
                        <div class="widget-detail-1">
                            <h2 class="p-t-10 m-b-0" data-plugin="counterup"> 256 </h2>
                            <p class="text-muted">Revenue today</p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-lg-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h4 class="header-title m-t-0 m-b-30">Statistics</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1">
                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                                   data-bgColor="#FFE6BA" value="80"
                                   data-skin="tron" data-angleOffset="180" data-readOnly=true
                                   data-thickness=".15"/>
                        </div>


                        <div class="widget-detail-1">
                            <h2 class="p-t-10 m-b-0" data-plugin="counterup"> 4569 </h2>
                            <p class="text-muted">Revenue today</p>
                        </div>
                    </div>


                </div>

            </div>


            <div class="col-lg-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h4 class="header-title m-t-0 m-b-30">Sales Analytics</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1">
                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#35b8e0"
                                   data-bgColor="#B8E6F4" value="77"
                                   data-skin="tron" data-angleOffset="180" data-readOnly=true
                                   data-thickness=".15"/>
                        </div>
                        <div class="widget-detail-1">
                            <h2 class="p-t-10 m-b-0" data-plugin="counterup"> 8545 </h2>
                            <p class="text-muted">Revenue today</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h4 class="header-title m-t-0 m-b-30">Daily Sales</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1">
                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#10c469"
                                   data-bgColor="#AAE2C6" value="20"
                                   data-skin="tron" data-angleOffset="180" data-readOnly=true
                                   data-thickness=".15"/>
                        </div>
                        <div class="widget-detail-1">
                            <h2 class="p-t-10 m-b-0" data-plugin="counterup"> 3562 </h2>
                            <p class="text-muted">Revenue today</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- end row -->



        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h4 class="header-title m-t-0 m-b-30">Sales Analytics</h4>

                    <div class="widget-box-2">
                        <div class="widget-detail-2">
                            <span class="badge badge-success pull-left m-t-20">32% <i class="zmdi zmdi-trending-up"></i> </span>
                            <h2 class="m-b-0" data-plugin="counterup"> 956 </h2>
                            <p class="text-muted m-b-25">Revenue today</p>
                        </div>

                        <div class="progress progress-bar-success-alt progress-sm m-b-0">
                            <div class="progress-bar progress-bar-success" role="progressbar"
                                 aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                 style="width: 77%;">
                                <span class="sr-only">77% Complete</span>
                            </div>
                        </div>

                    </div>


                </div>

            </div>


            <div class="col-lg-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h4 class="header-title m-t-0 m-b-30">Daily Sales</h4>

                    <div class="widget-box-2">
                        <div class="widget-detail-2">
                            <span class="badge badge-primary pull-left m-t-20">32% <i class="zmdi zmdi-trending-up"></i> </span>
                            <h2 class="m-b-0" data-plugin="counterup"> 145 </h2>
                            <p class="text-muted m-b-25">Revenue today</p>
                        </div>

                        <div class="progress progress-bar-primary-alt progress-sm m-b-0">
                            <div class="progress-bar progress-bar-primary" role="progressbar"
                                 aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"
                                 style="width: 48%;">
                                <span class="sr-only">48% Complete</span>
                            </div>
                        </div>

                    </div>


                </div>

            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h4 class="header-title m-t-0 m-b-30">Total Revenue</h4>

                    <div class="widget-box-2">
                        <div class="widget-detail-2">
                            <span class="badge badge-pink pull-left m-t-20">32% <i class="zmdi zmdi-trending-up"></i> </span>
                            <h2 class="m-b-0" data-plugin="counterup"> 7845 </h2>
                            <p class="text-muted m-b-25">Revenue today</p>
                        </div>

                        <div class="progress progress-bar-pink-alt progress-sm m-b-0">
                            <div class="progress-bar progress-bar-pink" role="progressbar"
                                 aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"
                                 style="width: 58%;">
                                <span class="sr-only">58% Complete</span>
                            </div>
                        </div>

                    </div>


                </div>

            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h4 class="header-title m-t-0 m-b-30">Statistics</h4>

                    <div class="widget-box-2">
                        <div class="widget-detail-2">
                            <span class="badge badge-purple pull-left m-t-20">32% <i class="zmdi zmdi-trending-up"></i> </span>
                            <h2 class="m-b-0" data-plugin="counterup"> 8451 </h2>
                            <p class="text-muted m-b-25">Revenue today</p>
                        </div>

                        <div class="progress progress-bar-purple-alt progress-sm m-b-0">
                            <div class="progress-bar progress-bar-purple" role="progressbar"
                                 aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                 style="width: 77%;">
                                <span class="sr-only">77% Complete</span>
                            </div>
                        </div>

                    </div>


                </div>

            </div>

        </div>

        <!-- end row -->


        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="assets/images/users/avatar-3.jpg" class="img-responsive img-circle" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5">Chadengle</h4>
                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                            <small class="text-warning"><b>Admin</b></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="assets/images/users/avatar-2.jpg" class="img-responsive img-circle" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5"> Michael Zenaty</h4>
                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                            <small class="text-custom"><b>Admin</b></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="assets/images/users/avatar-1.jpg" class="img-responsive img-circle" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5">Stillnotdavid</h4>
                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                            <small class="text-success"><b>Admin</b></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="assets/images/users/avatar-10.jpg" class="img-responsive img-circle" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5">Tomaslau</h4>
                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                            <small class="text-info"><b>Admin</b></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card-box widget-user">
                    <div class="text-center">
                        <h2 class="text-custom" data-plugin="counterup">6599</h2>
                        <h5>Statistics</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-box widget-user">
                    <div class="text-center">
                        <h2 class="text-pink" data-plugin="counterup">5894</h2>
                        <h5>Total Revenue</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-box widget-user">
                    <div class="text-center">
                        <h2 class="text-warning" data-plugin="counterup">452</h2>
                        <h5>Sales Analytics</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-box widget-user">
                    <div class="text-center">
                        <h2 class="text-info" data-plugin="counterup">1254</h2>
                        <h5>Daily Sales</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h4 class="header-title m-t-0 m-b-30">Team Members</h4>

                    <ul class="list-group m-b-0 user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">CEO</span>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Neon</span>
                                    <span class="desc">Web Designer</span>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">John Smith</span>
                                    <span class="desc m-b-0">Web Developer</span>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">Programmer</span>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Mat Helme</span>
                                    <span class="desc">Manager</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center card-box">
                    <div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div>
                        <img src="assets/images/users/avatar-10.jpg" class="img-circle thumb-xl img-thumbnail m-b-10" alt="profile-image">

                        <p class="text-muted font-13 m-b-30">
                            Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                        </p>

                        <div class="text-left">
                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">Johnathan Deo</span></p>

                            <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">(123) 123 1234</span></p>

                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">coderthemes@gmail.com</span></p>

                            <p class="text-muted font-13 m-b-5"><strong>Location :</strong> <span class="m-l-15">USA</span></p>

                        </div>

                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h4 class="header-title m-t-0 m-b-30">Progressbars</h4>

                    <p class="font-600 m-b-5">iMacs <span class="text-primary pull-right">80%</span></p>
                    <div class="progress progress-bar-primary-alt progress-sm m-b-20">
                        <div class="progress-bar progress-bar-primary progress-animated wow animated animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%; visibility: visible; animation-name: animationProgress;">
                        </div><!-- /.progress-bar .progress-bar-danger -->
                    </div><!-- /.progress .no-rounded -->

                    <p class="font-600 m-b-5">iBooks <span class="text-pink pull-right">50%</span></p>
                    <div class="progress progress-bar-pink-alt progress-sm m-b-20">
                        <div class="progress-bar progress-bar-pink progress-animated wow animated animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%; visibility: visible; animation-name: animationProgress;">
                        </div><!-- /.progress-bar .progress-bar-pink -->
                    </div><!-- /.progress .no-rounded -->

                    <p class="font-600 m-b-5">iPhone 5s <span class="text-info pull-right">70%</span></p>
                    <div class="progress progress-bar-info-alt progress-sm m-b-20">
                        <div class="progress-bar progress-bar-info progress-animated wow animated animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%; visibility: visible; animation-name: animationProgress;">
                        </div><!-- /.progress-bar .progress-bar-info -->
                    </div><!-- /.progress .no-rounded -->

                    <p class="font-600 m-b-5">iPhone 6 <span class="text-warning pull-right">65%</span></p>
                    <div class="progress progress-bar-warning-alt progress-sm m-b-20">
                        <div class="progress-bar progress-bar-warning progress-animated wow animated animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%; visibility: visible; animation-name: animationProgress;">
                        </div><!-- /.progress-bar .progress-bar-warning -->
                    </div><!-- /.progress .no-rounded -->

                    <p class="font-600 m-b-5">iPhone 4 <span class="text-danger pull-right">65%</span></p>
                    <div class="progress progress-bar-danger-alt progress-sm m-b-20">
                        <div class="progress-bar progress-bar-danger progress-animated wow animated animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%; visibility: visible; animation-name: animationProgress;">
                        </div><!-- /.progress-bar .progress-bar-warning -->
                    </div><!-- /.progress .no-rounded -->

                    <p class="font-600 m-b-5">iPhone 6s <span class="text-success pull-right">40%</span></p>
                    <div class="progress progress-bar-success-alt progress-sm m-b-0">
                        <div class="progress-bar progress-bar-success progress-animated wow animated animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%; visibility: visible; animation-name: animationProgress;">
                        </div><!-- /.progress-bar .progress-bar-success -->
                    </div><!-- /.progress .no-rounded -->


                </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h4 class="header-title m-t-0 m-b-30"><i class="zmdi zmdi-notifications-none m-r-5"></i> Upcoming Reminders</h4>

                    <ul class="list-group m-b-0 user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar text-center">
                                    <i class="zmdi zmdi-circle text-primary"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Meet Manager</span>
                                    <span class="desc">February 29, 2016 - 10:30am to 12:45pm</span>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar text-center">
                                    <i class="zmdi zmdi-circle text-success"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Project Discussion</span>
                                    <span class="desc">February 29, 2016 - 10:30am to 12:45pm</span>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar text-center">
                                    <i class="zmdi zmdi-circle text-pink"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Meet Manager</span>
                                    <span class="desc">February 29, 2016 - 10:30am to 12:45pm</span>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar text-center">
                                    <i class="zmdi zmdi-circle text-muted"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Project Discussion</span>
                                    <span class="desc">February 29, 2016 - 10:30am to 12:45pm</span>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar text-center">
                                    <i class="zmdi zmdi-circle text-danger"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Meet Manager</span>
                                    <span class="desc">February 29, 2016 - 10:30am to 12:45pm</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- end row -->


    </div> <!-- container -->
@endsection

@section("scripts")
    <!-- Counter Up  -->
    <script src="{{asset("assets/plugins/waypoints/lib/jquery.waypoints.js")}}"></script>
    <script src="{{asset("assets/plugins/counterup/jquery.counterup.min.js")}}"></script>

    <!-- KNOB JS -->
    <!--[if IE]>
    <script type="text/javascript" src="{{asset("assets/plugins/jquery-knob/excanvas.js")}}"></script>
    <![endif]-->
    <script src="{{asset("assets/plugins/jquery-knob/jquery.knob.js")}}"></script>
@endsection

