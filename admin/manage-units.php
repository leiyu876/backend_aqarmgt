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
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>AqarMgt - Real Estate Management System</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- Animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS you can use different color css from css/colors folder -->
    <!-- We have chosen the skin-blue (blue.css) for this starter
          page. However, you can choose any other skin from folder css / colors .
-->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
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
		.btn-inverse, .btn-inverse.active, .btn-inverse.focus, .btn-inverse:active, .btn-inverse:focus, .btn-inverse:hover, .open>.dropdown-toggle.btn-inverse {
			background-color: #C4996C;
			border: 1px solid #C4996C;
			color: #fff;
		}
		.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
			background-color: #c2996c;
			border-color: #bb966d;
		}
	</style>
</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b><img height="50px" src="../plugins/images/logo-icon.png" alt="home" /></b><span class="hidden-xs">AQAR<strong>MGT</strong></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li>
                        <a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a>
                    </li>
                    <!--<li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>-->
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <!--<li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    <!--</li>
                    <!-- /.dropdown -->
                    <!--<li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    <!--</li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="../plugins/images/users/1.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Admin User</b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i>  My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i>  Inbox</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i>  Account Setting</a></li>
                            <li><a href="login.html"><i class="fa fa-power-off"></i>  Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!--<li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
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
                    <li style="text-align: center"> <a href="index.html" class="waves-effect"><i class="ti-dashboard"></i><br/><span class="hide-menu">Dashboard</span></a> </li>
                    <li style="text-align: center"> <a href="manage-properties.html" class="waves-effect"><i class="ti-home"></i><br/><span class="hide-menu">Manage Properties</span></a> </li>
                    <li style="text-align: center"> <a href="manage-units.html" class="waves-effect"><i class="ti-layers-alt"></i><br/><span class="hide-menu">Manage Units</span></a> </li>
                    <li style="text-align: center"> <a href="#" class="waves-effect"><i class="ti-package"></i><br/><span class="hide-menu">Facility Management</span><span class="fa arrow"></span></a> 
                    
                    <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px; text-align: left">
                            <li> <a href="manage-assets.html" class="waves-effect"><i class="ti-layout-grid3" style="margin-right: 5%"></i> <span class="hide-menu">Assets</span></a> </li>
                            <li> <a href="manage-services.html" class="waves-effect"><i class="ti-paint-roller" style="margin-right: 5%"></i> <span class="hide-menu">Services</span></a> </li>
                            <li> <a href="manage-sp.html" class="waves-effect"><i class="ti-view-list-alt" style="margin-right: 5%"></i> <span class="hide-menu">Service Providers</span></a> </li>
                        </ul>
                    </li>
                    <li style="text-align: center"> <a href="manage-contracts.html" class="waves-effect"><i class="ti-agenda"></i><br/><span class="hide-menu">Contracts</span></a> </li>
                     
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
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Units List</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
							<li><a class="btn btn-block btn-success" href="create-unit.html" style="color: #fff"><span class="btn-label"><i class="fa fa-plus"></i></span>Create New Unit</a></li>
                            <li><a href="#">Manage Units</a></li>
                            <li class="active">Units List</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Search</h3>
                            <form role="form" class="row">
								<div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <select class="selectpicker show-tick" data-style="form-control">
                                            <option value="">Owner</option>
                                            <option value="1">Person A</option>
                                            <option value="2">Person B</option>
                                            <option value="3">Person C</option>
                                            <option value="4">Person D</option>
                                            <option value="5">Person E</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <select class="selectpicker show-tick" data-style="form-control">
                                            <option value="0" disabled selected>For</option>
                                            <option value="1">Rent</option>
                                            <option value="2">Sale</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <select class="selectpicker show-tick" data-style="form-control">
                                            <option value="">City</option>
                                            <option value="1">Riyadh</option>
                                            <option value="2">Dammam</option>
                                            <option value="3">AL-Khobar</option>
                                            <option value="4">Jeddah</option>
                                            <option value="5">Makkah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <select class="selectpicker show-tick" data-style="form-control">
                                            <option value="">Property Type</option>
                                            <option value="1">Apartment</option>
                                            <option value="3">Office</option>
                                            <option value="4">Shop</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-1">
                                    <button type="submit" class="btn btn-inverse btn-block form-control"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                 <div class="row">
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="white-box pro-box p-0">
                            <div class="pro-list-img" style="background: url('../plugins/images/property/unit1.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                            <div class="pro-content-3-col">
                                <div class="pro-list-details">
                                    <h4>
                                    <a class="text-dark" href="javascript:void(0)">Demo Name, Building</a>
                                </h4>
                                    <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                            </div>
                            <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                            <div class="pro-list-info-3-col">
                                <ul class="pro-info text-muted m-b-0">
                                    <li><span>Apartment</span></li>
                                </ul>
                            </div>
                            <hr class="m-0">
                            <div class="pro-agent-col-3">
                                <div class="agent-img">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent.jpg"></a>
                                </div>
                                <div class="agent-name">
                                    <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="white-box pro-box p-0">
                            <div class="pro-list-img" style="background: url('../plugins/images/property/unit2.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                            <div class="pro-content-3-col">
                                <div class="pro-list-details">
                                    <h4>
                                    <a class="text-dark" href="javascript:void(0)">Demo Name, Building</a>
                                </h4>
                                    <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                            </div>
                            <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                            <div class="pro-list-info-3-col">
                                <ul class="pro-info text-muted m-b-0">
                                    <li><span>Apartment</span></li>
                                </ul>
                            </div>
                            <hr class="m-0">
                            <div class="pro-agent-col-3">
                                <div class="agent-img">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent.jpg"></a>
                                </div>
                                <div class="agent-name">
                                    <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="white-box pro-box p-0">
                            <div class="pro-list-img" style="background: url('../plugins/images/property/unit3.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                            <div class="pro-content-3-col">
                                <div class="pro-list-details">
                                    <h4>
                                    <a class="text-dark" href="javascript:void(0)">Demo Name, Building</a>
                                </h4>
                                    <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                            </div>
                            <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                            <div class="pro-list-info-3-col">
                                <ul class="pro-info text-muted m-b-0">
                                    <li><span>Shop</span></li>
                                </ul>
                            </div>
                            <hr class="m-0">
                            <div class="pro-agent-col-3">
                                <div class="agent-img">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent.jpg"></a>
                                </div>
                                <div class="agent-name">
                                    <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="white-box pro-box p-0">
                            <div class="pro-list-img" style="background: url('../plugins/images/property/unit4.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                            <div class="pro-content-3-col">
                                <div class="pro-list-details">
                                    <h4>
                                    <a class="text-dark" href="javascript:void(0)">Demo Name, Building</a>
                                </h4>
                                    <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                            </div>
                            <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                            <div class="pro-list-info-3-col">
                                <ul class="pro-info text-muted m-b-0">
                                    <li><span>Apartment</span></li>
                                </ul>
                            </div>
                            <hr class="m-0">
                            <div class="pro-agent-col-3">
                                <div class="agent-img">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent.jpg"></a>
                                </div>
                                <div class="agent-name">
                                    <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="white-box pro-box p-0">
                            <div class="pro-list-img" style="background: url('../plugins/images/property/unit5.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                            <div class="pro-content-3-col">
                                <div class="pro-list-details">
                                    <h4>
                                    <a class="text-dark" href="javascript:void(0)">Demo Name, Building</a>
                                </h4>
                                    <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                            </div>
                            <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                            <div class="pro-list-info-3-col">
                                <ul class="pro-info text-muted m-b-0">
                                    <li><span>Apartment</span></li>
                                </ul>
                            </div>
                            <hr class="m-0">
                            <div class="pro-agent-col-3">
                                <div class="agent-img">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent.jpg"></a>
                                </div>
                                <div class="agent-name">
                                    <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="white-box pro-box p-0">
                            <div class="pro-list-img" style="background: url('../plugins/images/property/unit6.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                            <div class="pro-content-3-col">
                                <div class="pro-list-details">
                                    <h4>
                                    <a class="text-dark" href="javascript:void(0)">Demo Name, Building</a>
                                </h4>
                                    <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                            </div>
                            <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                            <div class="pro-list-info-3-col">
                                <ul class="pro-info text-muted m-b-0">
                                    <li><span>Office</span></li>
                                </ul>
                            </div>
                            <hr class="m-0">
                            <div class="pro-agent-col-3">
                                <div class="agent-img">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent.jpg"></a>
                                </div>
                                <div class="agent-name">
                                    <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="white-box pro-box p-0">
                            <div class="pro-list-img" style="background: url('../plugins/images/property/unit7.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                            <div class="pro-content-3-col">
                                <div class="pro-list-details">
                                    <h4>
                                    <a class="text-dark" href="javascript:void(0)">Demo Name, Building</a>
                                </h4>
                                    <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                            </div>
                            <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                            <div class="pro-list-info-3-col">
                                <ul class="pro-info text-muted m-b-0">
                                    <li><span>Office</span></li>
                                </ul>
                            </div>
                            <hr class="m-0">
                            <div class="pro-agent-col-3">
                                <div class="agent-img">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent.jpg"></a>
                                </div>
                                <div class="agent-name">
                                    <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="white-box pro-box p-0">
                            <div class="pro-list-img" style="background: url('../plugins/images/property/unit13.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                            <div class="pro-content-3-col">
                                <div class="pro-list-details">
                                    <h4>
                                    <a class="text-dark" href="javascript:void(0)">Demo Name, Building</a>
                                </h4>
                                    <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                            </div>
                            <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                            <div class="pro-list-info-3-col">
                                <ul class="pro-info text-muted m-b-0">
                                    <li><span>Office</span></li>
                                </ul>
                            </div>
                            <hr class="m-0">
                            <div class="pro-agent-col-3">
                                <div class="agent-img">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent.jpg"></a>
                                </div>
                                <div class="agent-name">
                                    <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
             
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="pagination pagination-split">
                            <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                            <li class="active"> <a href="#">1</a> </li>
                            <li> <a href="#">2</a> </li>
                            <li> <a href="#">3</a> </li>
                            <li> <a href="#">4</a> </li>
                            <li> <a href="#">5</a> </li>
                            <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                        </ul>
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
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Aqarmgt </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/tether.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Sidebar menu plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!-- bootstrap-select javascript -->
    <script src="../plugins/bower_components/bootstrap-select/bootstrap-select.min.js"></script>
    <!--Slimscroll JavaScript For custom scroll-->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
