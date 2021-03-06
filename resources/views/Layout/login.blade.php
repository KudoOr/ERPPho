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
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left" style="height: 40px;">
                    </div>
                </div>
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
