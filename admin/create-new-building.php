<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>AqarMgt - Real Estate Management System</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="../plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- Wizard CSS -->
    <link href="../plugins/bower_components/jquery-wizard-master/css/wizard.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/megna.css" id="theme" rel="stylesheet">
	<link rel="stylesheet" href="../plugins/bower_components/dropify/dist/css/dropify.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBcV7FXhmwPul3s678dxeyHWtJ9rLc6Z8"></script>
	<style>
		.navbar-header {
			background: #295580;
		}
		.fix-sidebar .top-left-part {
			background: #295580;
		}
	</style>
</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <?php include('inc/header.php'); ?>
        
        <?php include('inc/nav.php'); ?>
        
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Create New Building</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Manage Properties</a></li>
                            <li><a href="#">Create New Property</a></li>
                            <li class="active">Create New Building</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div id="exampleValidator" class="wizard">
                                <ul class="wizard-steps" role="tablist">
                                    <li class="active" role="tab">
                                        <h4><span><i class="fa fa-building"></i></span>Building Details</h4>
                                    </li>
                                    <li role="tab">
                                        <h4><span><i class="ti-credit-card"></i></span>Area & Price</h4>
                                    </li>
                                    <li role="tab">
                                        <h4><span><i class="fa fa-location-arrow"></i></span>Location Details</h4>
                                    </li>
									<li role="tab">
                                        <h4><span><i class="fa fa-upload"></i></span>Attachments</h4>
                                    </li>
                                </ul>
                                <form id="validation" class="form-horizontal">
                                    <div class="wizard-content">
                                        <div class="wizard-pane active" role="tabpanel">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="col-xs-6 control-label">Building Name</label>
														<div class="col-xs-5">
															<input type="text" class="form-control" name="name" />
														</div>
													</div>
													<div class="form-group">
														<label class="col-xs-6 control-label">Number Of Levels</label>
														<div class="col-xs-5">
															<input type="text" class="form-control" name="name" />
														</div>
													</div>
                                                    
                                                    <!--zaib-->
                                                    <div class="form-group">
														<label class="col-xs-6 control-label">Building Type</label>
														<div class="col-xs-5">
															<select class="form-control"  id="city">
                                                                <option value="1">Residential Building</option>
                                                                <option value="2">Commercial Building</option>
                                                                <option value="3">Parking Building</option>                                                             </select>
														</div>
													</div> 
                                                    <div class="form-group">
														<label class="col-xs-6 control-label">Status</label>
														<div class="col-xs-5">
															<select class="form-control"  id="status">
                                                                <option value="1">Activate</option>
                                                                <option value="2">Deactivate</option>
                                                            </select>
														</div>
													</div> 
                                                    
                                                    
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="col-xs-6 control-label">Building Code</label>
														<div class="col-xs-5">
															<input type="text" class="form-control" name="name" />
														</div>
													</div>
													<div class="form-group">
														<label class="col-xs-6 control-label">Number Of Units</label>
														<div class="col-xs-5">
															<input type="text" class="form-control" name="name" />
														</div>
													</div>
                                                    <!--zaib-->
                                                    <div class="form-group">
														<label class="col-xs-6 control-label">Building For</label>
														<div class="col-xs-5">
															<select class="form-control"  id="building_for">
                                                                <option value="0">None</option>
                                                                <option value="1">Rent</option>
                                                                <option value="2">Sale</option>                                                             </select>
														</div>
													</div> 
                                                    <div class="col-md-6">
                                                    <div class="form-group">
														<label class="col-xs-6 control-label">Owner NIC No</label>
														<div class="col-xs-5">
															<input type="text" class="form-control" name="name" />
														</div>
													</div>
                                                    
                                                    </div>
                                                    <div class="col-md-6">
                                                    <label class="col-xs-6 control-label">Search Owner</label>
                                                    <button class="btn btn-block btn-outline btn-success">Search</button>
                                                    </div>
                                                    
												</div>
											</div>
                                        </div>
                                        <div class="wizard-pane" role="tabpanel">
                                            <div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="col-xs-6 control-label">Land Area</label>
														<div class="col-xs-5">
															<input type="text" class="form-control" name="name" />
														</div>
													</div>
													<div class="form-group">
														<label class="col-xs-6 control-label">Land Price</label>
														<div class="col-xs-5">
															<input type="text" class="form-control" name="name" />
														</div>
													</div>
													<div class="form-group">
														<label class="col-xs-6 control-label">Evaluated By</label>
														<div class="col-xs-5">
															<input type="text" class="form-control" name="name" />
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="col-xs-6 control-label">Covered Area</label>
														<div class="col-xs-5">
															<input type="text" class="form-control" name="name" />
														</div>
													</div>
													<div class="form-group">
														<label class="col-xs-6 control-label">Evaluated building Price</label>
														<div class="col-xs-5">
															<input type="text" class="form-control" name="name" />
														</div>
													</div>
													<div class="form-group">
														<label class="col-xs-6 control-label">Evaluation Date</label>
														<div class="col-xs-5">
															<div class="input-group">
																<span class="input-group-addon"><i class="icon-calender"></i></span> <input type="text" class="form-control" id="datepicker-autoclose" placeholder="dd/mm/yyyy"> 
															</div>														
														</div>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="wizard-pane" role="tabpanel">
											<div class="row">
												<div class="container">
													<h4>Search Location</h4>

													<!-- search input box -->
													<form>
													<div class="form-group input-group">
														<input type="text" id="search_location" class="form-control" placeholder="Search location">
														<div class="input-group-btn">
															<button class="btn btn-block btn-info get_map" type="submit">
																Locate
															</button>
														</div>
													</div>
													</form>
													<style>
													#geomap{width: 100%; height: 400px;}
													</style>
													<!-- display google map -->
													<div id="geomap"></div>

													

												</div>
											</div>
                                            <div class="row">
												<div class="col-md-12">
													<div class="col-md-12">
														<div class="form-group">
															<label class="col-xs-6 control-label">Address</label>
															<div class="col-xs-5">
																<input type="text" class="form-control search_addr" name="name" />
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="col-md-6">
														<div class="form-group">
															<label class="col-xs-6 control-label">Longitude</label>
															<div class="col-xs-5">
																<input type="text" class="form-control search_latitude" name="name" />
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="col-xs-6 control-label">Latitude</label>
															<div class="col-xs-5">
																<input type="text" class="form-control search_longitude" name="name" />
															</div>
														</div>
													</div>
												</div>
											</div>
                                        </div>
										<div class="wizard-pane active" role="tabpanel">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="input-file-now">Attachment 1</label>
														<input type="file" id="input-file-now" class="dropify" data-height="100"/>
													</div>
													<div class="form-group">
														<label for="input-file-now">Attachment 3</label>
														<input type="file" id="input-file-now" class="dropify" data-height="100"/>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="input-file-now">Attachment 2</label>
														<input type="file" id="input-file-now" class="dropify" data-height="100"/>
													</div>
													<div class="form-group">
														<label for="input-file-now">Attachment 4</label>
														<input type="file" id="input-file-now" class="dropify" data-height="100"/>
													</div>
												</div>
											</div>
                                        </div>
                                    </div>
                                </form>
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
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" theme="megna" class="megna-theme working">6</a></li>
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
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Form Wizard JavaScript -->
    <script src="../plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js"></script>
    <!-- FormValidation -->
    <link rel="stylesheet" href="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css">
    <!-- FormValidation plugin and the class supports validating Bootstrap form -->
    <script src="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js"></script>
    <script src="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- Sweet-Alert  -->
    <script src="../plugins/bower_components/sweetalert/sweetalert.min.js"></script>
	  <!-- Date Picker Plugin JavaScript -->
    <script src="../plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="../plugins/bower_components/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript">
    (function() {
		// Date Picker
			$('#datepicker-autoclose').datepicker({
				autoclose: true,
				format: 'dd/mm/yyyy',
				todayHighlight: true
			});
        $('#exampleBasic').wizard({
            onFinish: function() {
                swal("Successfully Added!", "Yoy can always update property details from property management.");
            }
        });
        $('#exampleBasic2').wizard({
            onFinish: function() {
                swal("Successfully Added!", "Yoy can always update property details from property management.");
            }
        });
        $('#exampleValidator').wizard({
            onInit: function() {
                $('#validation').formValidation({
                    framework: 'bootstrap',
                    fields: {
                        username: {
                            validators: {
                                notEmpty: {
                                    message: 'The username is required'
                                },
                                stringLength: {
                                    min: 6,
                                    max: 30,
                                    message: 'The username must be more than 6 and less than 30 characters long'
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z0-9_\.]+$/,
                                    message: 'The username can only consist of alphabetical, number, dot and underscore'
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'The email address is required'
                                },
                                emailAddress: {
                                    message: 'The input is not a valid email address'
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: 'The password is required'
                                },
                                different: {
                                    field: 'username',
                                    message: 'The password cannot be the same as username'
                                }
                            }
                        }
                    }
                });
            },
            validator: function() {
                var fv = $('#validation').data('formValidation');

                var $this = $(this);

                // Validate the container
                fv.validateContainer($this);

                var isValidStep = fv.isValidContainer($this);
                if (isValidStep === false || isValidStep === null) {
                    return false;
                }

                return true;
            },
            onFinish: function() {
                $('#validation').submit();
                swal("Successfully Added!", "Yoy can always update property details from property management.");
            }
        });

        $('#accordion').wizard({
            step: '[data-toggle="collapse"]',

            buttonsAppendTo: '.panel-collapse',

            templates: {
                buttons: function() {
                    var options = this.options;
                    return '<div class="panel-footer"><ul class="pager">' +
                        '<li class="previous">' +
                        '<a href="#' + this.id + '" data-wizard="back" role="button">' + options.buttonLabels.back + '</a>' +
                        '</li>' +
                        '<li class="next">' +
                        '<a href="#' + this.id + '" data-wizard="next" role="button">' + options.buttonLabels.next + '</a>' +
                        '<a href="#' + this.id + '" data-wizard="finish" role="button">' + options.buttonLabels.finish + '</a>' +
                        '</li>' +
                        '</ul></div>';
                }
            },

            onBeforeShow: function(step) {
                step.$pane.collapse('show');
            },

            onBeforeHide: function(step) {
                step.$pane.collapse('hide');
            },

            onFinish: function() {
                swal("Successfully Added!", "Yoy can always update property details from property management.");
            }
        });
    })();
    </script>
	<script type="text/javascript">
    var geocoder;
    var map;
    var marker;

    /*
     * Google Map with marker
     */
    function initialize() {
        var initialLat = $('.search_latitude').val();
        var initialLong = $('.search_longitude').val();
        initialLat = initialLat?initialLat:26.2906357;
        initialLong = initialLong?initialLong:50.1777825;

        var latlng = new google.maps.LatLng(initialLat, initialLong);
        var options = {
            zoom: 14,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById("geomap"), options);

        geocoder = new google.maps.Geocoder();

        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            position: latlng
        });

        google.maps.event.addListener(marker, "dragend", function () {
            var point = marker.getPosition();
            map.panTo(point);
            geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    marker.setPosition(results[0].geometry.location);
                    $('.search_addr').val(results[0].formatted_address);
                    $('.search_latitude').val(marker.getPosition().lat());
                    $('.search_longitude').val(marker.getPosition().lng());
                }
            });
        });

    }

    $(document).ready(function () {
        //load google map
        initialize();

        /*
         * autocomplete location search
         */
        var PostCodeid = '#search_location';
        $(function () {
            $(PostCodeid).autocomplete({
                source: function (request, response) {
                    geocoder.geocode({
                        'address': request.term
                    }, function (results, status) {
                        response($.map(results, function (item) {
                            return {
                                label: item.formatted_address,
                                value: item.formatted_address,
                                lat: item.geometry.location.lat(),
                                lon: item.geometry.location.lng()
                            };
                        }));
                    });
                },
                select: function (event, ui) {
                    $('.search_addr').val(ui.item.value);
                    $('.search_latitude').val(ui.item.lat);
                    $('.search_longitude').val(ui.item.lon);
                    var latlng = new google.maps.LatLng(ui.item.lat, ui.item.lon);
                    marker.setPosition(latlng);
                    initialize();
                }
            });
        });

        /*
         * Point location on google map
         */
        $('.get_map').click(function (e) {
            var address = $(PostCodeid).val();
            geocoder.geocode({'address': address}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    marker.setPosition(results[0].geometry.location);
                    $('.search_addr').val(results[0].formatted_address);
                    $('.search_latitude').val(marker.getPosition().lat());
                    $('.search_longitude').val(marker.getPosition().lng());
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });
            e.preventDefault();
        });

        //Add listener to marker for reverse geocoding
        google.maps.event.addListener(marker, 'drag', function () {
            geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        $('.search_addr').val(results[0].formatted_address);
                        $('.search_latitude').val(marker.getPosition().lat());
                        $('.search_longitude').val(marker.getPosition().lng());
                    }
                }
            });
        });
    });

</script>
<!-- jQuery file upload -->
    <script src="../plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
