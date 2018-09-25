<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chatbot Manager</title>

    <!-- Bootstrap -->
    <link href="{{ Illuminate\Support\Facades\URL::asset('public/vendors/bootstrap/dist/css/bootstrap.min.css') }}"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ Illuminate\Support\Facades\URL::asset('public/vendors/font-awesome/css/font-awesome.min.css') }}"
          rel="stylesheet">

    <!-- NProgress -->
    <link href="{{ Illuminate\Support\Facades\URL::asset('public/vendors/nprogress/nprogress.css') }}"
          rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ Illuminate\Support\Facades\URL::asset('public/css/custom.min.css') }}"
          rel="stylesheet">

    <link href="{{ Illuminate\Support\Facades\URL::asset('public/css/admin.css') }}"
          rel="stylesheet">
    <style  rel="stylesheet">
    td, th, tr {
        text-align:center;
        vertical-align:center;
    }
    </style>     
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-user-secret"></i>
                        <span>Bot Manager</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{Illuminate\Support\Facades\URL::asset('/images/img.jpg')}}"
                             alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{isset(Auth::user()->name)? Auth::user()->name  :""}}</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Quản lý</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-tasks"></i>Quản lý loại món ăn<span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li>
                                        <a href="{{URL::to('/')}}/categorys/add">Thêm loại món ăn</a>
                                    </li>
                                    <li>
                                    <a href="{{URL::to('/')}}/categorys/list">Danh sách</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-briefcase"></i>Quản lý món ăn<span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li>
                                        <a href="{{URL::to('/')}}/foods/add">Thêm món ăn</a>
                                    </li>
                                    <li>
                                    <a href="{{URL::to('/')}}/foods/list">Danh sách</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-briefcase"></i>Quản lý tái chín<span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li>
                                        <a href="{{URL::to('/')}}/materials/add">Thêm đồ mua</a>
                                    </li>
                                    <li>
                                    <a href="{{URL::to('/')}}/materials/list">Danh sách </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href='{{URL::to('/')}}/pho'><i class="fa fa-long-arrow-right"></i>Sang trang hóa đơn</a>
							 <li><a><i class="fa fa-money"></i>Doanh thu<span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href='{{URL::to('/')}}/doanhthungay'><i class="fa fa-money"></i>Doanh thu hôm nay</a></li>
                                    <li><a href='{{URL::to('/')}}/revenue/month'><i class="fa fa-money"></i>Doanh thu tháng nay</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle"
                               data-toggle="dropdown" aria-expanded="false">
                                <img src="images/img.jpg" alt="">{{isset(Auth::user()->name)? Auth::user()->name  :""}}
                            
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="logout"><i class="fa fa-sign-out pull-right"></i>
                                        Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left" style="height: 40px;">
                    </div>
                </div>

                <div class="clearfix"></div>

                <div clas="page-content row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @section('content')

                        @show
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Phở Lý Quốc Sư
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->

<script src="{{ Illuminate\Support\Facades\URL::asset('public/vendors/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ Illuminate\Support\Facades\URL::asset('public/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- FastClick -->
<script src="{{ Illuminate\Support\Facades\URL::asset('public/vendors/fastclick/lib/fastclick.js') }}"></script>

<!-- NProgress -->
<script src="{{ Illuminate\Support\Facades\URL::asset('public/vendors/nprogress/nprogress.js') }}"></script>

<!-- Custom Theme Scripts -->
<script src="{{ Illuminate\Support\Facades\URL::asset('public/js/custom.min.js') }}"></script>

@section('custom-script')

@show

</body>
</html>
