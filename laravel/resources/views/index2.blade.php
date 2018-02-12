
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('plugins/images/favicon.png')}}">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- vector map CSS -->
    <link href="{{asset('plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/bower_components/css-chart/css-chart.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{asset('css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script src="http://www.w3schools.com/lib/w3data.js"></script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b><img src="plugins/images/eliteadmin-logo.png" alt="home" /></b><span class="hidden-xs"><img src="plugins/images/eliteadmin-text.png" alt="home" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    
                    
                    <!-- /.Megamenu -->
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('bootstrap/dist/js/tether.min.js')}}"></script>
        <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
        <!--slimscroll JavaScript -->
        <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
        <!--Wave Effects -->
        <script src="{{asset('js/waves.js')}}"></script>
        <!-- Flot Charts JavaScript -->
        <script src="{{asset('plugins/bower_components/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('plugins/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
        <!-- google maps api -->
        <script src="{{asset('plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('plugins/bower_components/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <!-- Sparkline charts -->
        <script src="{{asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <!-- EASY PIE CHART JS -->
        <script src="{{asset('plugins/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('plugins/bower_components/jquery.easy-pie-chart/easy-pie-chart.init.js')}}"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{asset('js/custom.min.js')}}"></script>
        <script src="{{asset('js/dashboard2.js')}}"></script>
        <!--Style Switcher -->
        <script src="{{asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>
