<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{asset('admin/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('admin/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        @include('blocks.admin.header')
        @include('blocks.admin.sidebar')
        <div class="page-wrapper">
            @yield('content')
            @include('blocks.admin.footer')
        </div>
       
    </div>

    
  
    <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{asset('admin/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/pages/chart/chart-page-init.js')}}"></script>
    <script src="{{asset('admin/assets/libs/chart/matrix.interface.js')}}"></script>
    <script src="{{asset('admin/assets/libs/chart/excanvas.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/chart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/chart/matrix.charts.js')}}"></script>
    <script src="{{asset('admin/assets/libs/chart/jquery.flot.pie.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/chart/turning-series.js')}}"></script>
    @yield('script')
</body>

</html>