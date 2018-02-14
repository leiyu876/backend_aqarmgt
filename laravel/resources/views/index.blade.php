<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('plugins/images/favicon.png')}}">
    <title>AqarMgt - Real Estate Management System</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- Animation CSS -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- color CSS you can use different color css from css/colors folder -->
    <!-- We have chosen the skin-blue (blue.css) for this starter
          page. However, you can choose any other skin from folder css / colors .
-->
    <link href="{{asset('css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    
    <style>
        .navbar-header {
            background: #295580;
        }
        .fix-sidebar .top-left-part {
            background: #295580;
        }
    </style>
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-19175540-9', 'auto');
    ga('send', 'pageview');
    </script>
</head>

<body>

    <div class="preloader">
	    <div class="cssload-speeding-wheel"></div>
	</div>

    <div id="wrapper">
        delete me if this laravel will run
        <nav class="navbar navbar-default navbar-static-top m-b-0">
		    <div class="navbar-header"> 
		        <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
		            <i class="ti-menu"></i>
		        </a>
		        <div class="top-left-part">
		            <a class="logo" href="index.php">
		                <b>
		                    <img height="50px" src="{{asset('plugins/images/logo-icon.png')}}" alt="home" />
		                </b>
		                <span class="hidden-xs">AQAR<strong>MGT</strong>
		                </span>
		            </a>
		        </div>
		        <ul class="nav navbar-top-links navbar-left hidden-xs">
		            <li>
		                <a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light">
		                    <i class="icon-arrow-left-circle ti-menu"></i>
		                </a>
		            </li>
		            <!--<li>
		                <form role="search" class="app-search hidden-xs">
		                    <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
		                </form>
		            </li>-->
		        </ul>
		        <ul class="nav navbar-top-links navbar-right pull-right">
		            <li class="dropdown">
		                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{asset('plugins/images/users/1.jpg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Admin User</b> </a>
		                <ul class="dropdown-menu dropdown-user animated flipInY">
		                    <li><a href="javascript:void(0)"><i class="ti-user"></i>  My Profile</a></li>
		                    <li><a href="javascript:void(0)"><i class="ti-email"></i>  Inbox</a></li>
		                    <li><a href="javascript:void(0)"><i class="ti-settings"></i>  Account Setting</a></li>
		                    <li><a href="login2.html"><i class="fa fa-power-off"></i>  Logout</a></li>
		                </ul>
		                <!-- /.dropdown-user -->
		            </li>
		   
		        </ul>
		    </div>
		    <!-- /.navbar-header -->
		    <!-- /.navbar-top-links -->
		    <!-- /.navbar-static-side -->
		</nav>
        
        <div class="navbar-default sidebar" role="navigation">
		    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
		        <ul class="nav" id="side-menu" >
		            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
		                <!-- input-group -->
		                <div class="input-group custom-search-form">
		                    <input type="text" class="form-control" placeholder="Search...">
		                    <span class="input-group-btn">
		                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
		                    </span> 
		                </div>
		                <!-- /input-group -->
		            </li>
		            <li style="text-align: center"> <a href="index.php" class="waves-effect"><i class="ti-dashboard"></i><br/><span class="hide-menu">Dashboard</span></a> </li>
		            <li style="text-align: center"> <a href="manage-properties.php" class="waves-effect"><i class="ti-home"></i><br/><span class="hide-menu">Manage Properties</span></a> </li>
		            <li style="text-align: center"> <a href="manage-units.php" class="waves-effect"><i class="ti-layers-alt"></i><br/><span class="hide-menu">Manage Units</span></a> </li>
		            <li style="text-align: center"> <a href="#" class="waves-effect"><i class="ti-package"></i><br/><span class="hide-menu">Facility Management</span><span class="fa arrow"></span></a> 
		            
		            <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px; text-align: left">
		                    <li> <a href="manage-assets.php" class="waves-effect"><i class="ti-layout-grid3" style="margin-right: 5%"></i> <span class="hide-menu">Assets</span></a> </li>
		                    <li> <a href="manage-services.php" class="waves-effect"><i class="ti-paint-roller" style="margin-right: 5%"></i> <span class="hide-menu">Services</span></a> </li>
		                    <li> <a href="manage-sp.php" class="waves-effect"><i class="ti-view-list-alt" style="margin-right: 5%"></i> <span class="hide-menu">Service Providers</span></a> </li>
		                </ul>
		            </li>
		            <li style="text-align: center"> <a href="manage-contracts.php" class="waves-effect"><i class="ti-agenda"></i><br/><span class="hide-menu">Contracts</span></a> </li>
		             
		            <li style="text-align: center"> <a href="#" class="waves-effect"><i class="ti-menu-alt"></i><br/><span class="hide-menu">Notifications</span></a> </li>
		            <li style="text-align: center"> <a href="#" class="waves-effect"><i class="ti-bar-chart"></i><br/><span class="hide-menu">Income & Expenses</span></a> </li>
		            <li style="text-align: center"> <a href="#" class="waves-effect"><i class="ti-headphone-alt"></i><br/><span class="hide-menu">Query Tickets</span></a> </li>
		            <li style="text-align: center"> <a href="#" class="waves-effect"><i data-icon="P" class="ti-panel"></i><br/><span class="hide-menu">Control Panel</span><span class="fa arrow"></span></a>
		            <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px; text-align: left">
		                   <li> <a href="#" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic" style="margin-right: 5%"></i> <span class="hide-menu">System Settings</span></a> </li> 
		                   <li> <a href="#" class="waves-effect"><i data-icon="P" class="ti-id-badge" style="margin-right: 5%"></i> <span class="hide-menu">Users</span></a> </li> 
		                   <li> <a href="#" class="waves-effect"><i data-icon="P" class="ti-user" style="margin-right: 5%"></i> <span class="hide-menu">Super Users</span></a> </li> 
		                </ul>
		            
		             </li>
		            
		            <li style="text-align: center"> <a href="#" class="waves-effect"><i data-icon="7" class="ti-clipboard"></i><br/><span class="hide-menu">Generate Reports</span></a>
		            </li>
		        </ul>
		    </div>
		</div>
        
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title" style="margin:0px;">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> 
                    </div>
                    <!-- /.page title -->
                </div>
                <!--.row -->
                <div class="row re">
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">All Properties</h3>
                            <ul class="list-inline two-part">
                                <li><i class="ti-home text-info"></i></li>
                                <li class="text-right"><span class="counter">480</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Properties for Sale</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-tag text-purple"></i></li>
                                <li class="text-right"><span class="counter">169</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Properties for Rent</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-tag text-danger"></i></li>
                                <li class="text-right"><span class="counter">311</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Total Ernings</h3>
                            <ul class="list-inline two-part">
                                <li style="width: 25%"><i class="ti-wallet text-success"></i></li>
                                <li style="width: 70%" class="text-right"><span class="counter">SR 81700</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Properties stats</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>Last Year</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #9675ce;"></i>Expected Revenue</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #fb9678;"></i>Collected Revenue</h5> </li>
                            </ul>
                            <div id="morris-bar-chart" style="height:372px;"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white-box m-b-15">
                                    <h3 class="box-title">Property sales income</h3>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                            <h1 class="text-info">SR 64057</h1>
                                            <p class="text-muted">December 2017</p> <b>(15 Sales)</b> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div id="sparkline2dash" class="text-center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="white-box bg-purple m-b-15">
                                    <h3 class="text-white box-title">Property on Rent income</h3>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                            <h1 class="text-white">SR 30447</h1>
                                            <p class="light_op_text">December 2017</p> <b class="text-white">(30 Rental Contracts)</b> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div id="sales1" class="text-center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Pending Approval</h3>
                            <div class="table-responsive">
                                <table class="table product-overview">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Property</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Demo Customer A</td>
                                            <td>Swanim villa</td>
                                            <td>For Sale</td>
                                            <td>10-7-2017</td>
                                            <td><span class="label label-success font-weight-100">Approve This</span> <a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Demo Customer B</td>
                                            <td>River view home</td>
                                            <td>To Rent</td>
                                            <td>09-7-2017</td>
                                            <td><span class="label label-success font-weight-100">Approve This</span> <a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Demo Customer C</td>
                                            <td>Demo Tower</td>
                                            <td>To Rent</td>
                                            <td>08-7-2017</td>
                                            <td><span class="label label-success font-weight-100">Approve This</span> <a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Hrithik</td>
                                            <td>Property ABC</td>
                                            <td>To Rent</td>
                                            <td>02-7-2017</td>
                                            <td><span class="label label-success font-weight-100">Approve This</span> <a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('plugins/images/users/varun.jpg')}}" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('plugins/images/users/genu.jpg')}}" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('plugins/images/users/ritesh.jpg')}}" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('plugins/images/users/arijit.jpg')}}" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('plugins/images/users/govinda.jpg')}}" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('plugins/images/users/hritik.jpg')}}" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('plugins/images/users/john.jpg')}}" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('plugins/images/users/pawandeep.jpg')}}" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            
            <footer class="footer text-center"> 2018 &copy; Aqarmgtt </footer>
            
        </div>
        
</div>
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
<!--Counter js -->
<script src="{{asset('plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
<script src="{{asset('plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
<!--Morris JavaScript -->
<script src="{{asset('plugins/bower_components/raphael/raphael-min.js')}}"></script>
<script src="{{asset('plugins/bower_components/morrisjs/morris.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('js/custom.min.js')}}"></script>
<!--<script src="{{asset('js/dashboard1.js')}}"></script>-->
<!-- Sparkline chart JavaScript -->
<script src="{{asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js')}}"></script>
<script src="{{asset('plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
<!-- Real estate dashboard JavaScript -->
<script src="{{asset('js/real-estate.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
    $.toast({
        heading: 'Welcome to Elite admin',
        text: 'Use the predefined ones, or specify a custom position object.',
        position: 'top-right',
        loaderBg: '#ff6849',
        icon: 'info',
        hideAfter: 3500,

        stack: 6
    })
});
</script>
<!--Style Switcher -->
<script src="{{asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script> 
</body>

</html>
