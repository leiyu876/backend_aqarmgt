<?php include('inc/script_up.php'); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Property List</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a class="btn btn-block btn-success" href="create-property.php" style="color: #fff"><span class="btn-label"><i class="fa fa-plus"></i></span>Create New Property</a></li>
                            <li><a href="#">Manage Properties</a></li>
                            <li class="active">Property List</li>
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
                                            <option value="1">Demo Person A</option>
                                            <option value="2">Demo Person B</option>
                                            <option value="3">Demo Person C</option>
                                            <option value="4">Demo Person D</option>
                                            <option value="5">Demo Person E</option>
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
                                            <option value="3">Building</option>
                                            <option value="4">Flat</option>
                                            <option value="5">House</option>
                                            <option value="2">Villa/Mansion</option>
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
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box pro-box p-0">
                            <div class="pro-list-img" style="background: url('../plugins/images/property/prop8.jpg') center center / cover no-repeat;"></div>
                            <div class="pro-content-3-col">
                                <div class="pro-list-details">
                                    <h4>
                                    <a class="text-dark" href="javascript:void(0)">Demo Address, City</a>
                                </h4>
                                    <h4 class="text-danger"><small>SR </small> 220,000</h4> </div>
                            </div>
                            <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                            <div class="pro-list-info-3-col">
                               <ul class="pro-info text-muted m-b-0">
                                    <li> <span>Property Code:</span><span class="label text-inverse">SA16OPXX00000</span></li>
                                </ul>
                            </div>
                            <hr class="m-0">
                            <div class="pro-agent-col-3">
                                <div class="agent-img">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent.jpg"></a>
                                </div>
                                <div class="agent-name">
                                    <h5 class="m-b-0">Owner Name</h5> <small class="text-muted">5 Properties</small> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box pro-box p-0">
                            <div class="pro-list-img" style="background: url('../plugins/images/property/prop3.jpeg') center center / cover no-repeat;"></div>
                            <div class="pro-content-3-col">
                                <div class="pro-list-details">
                                    <h4>
                                    <a class="text-dark" href="javascript:void(0)">Demo Address, City</a>
                                </h4>
                                    <h4 class="text-danger"><small>SR </small> 220,000</h4> </div>
                            </div>
                            <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                            <div class="pro-list-info-3-col">
                                <ul class="pro-info text-muted m-b-0">
                                    <li> <span>Property Code:</span><span class="label text-inverse">SA16OPXX00000</span></li>
                                </ul>
                            </div>
                            <hr class="m-0">
                            <div class="pro-agent-col-3">
                                <div class="agent-img">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent.jpg"></a>
                                </div>
                                <div class="agent-name">
                                    <h5 class="m-b-0">Owner Name</h5> <small class="text-muted">5 Properties</small> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box pro-box p-0">
                            <div class="pro-list-img" style="background: url('../plugins/images/property/prop6.jpg') center center / cover no-repeat;"></div>
                            <div class="pro-content-3-col">
                                <div class="pro-list-details">
                                    <h4>
                                    <a class="text-dark" href="javascript:void(0)">Demo Address, City</a>
                                </h4>
                                    <h4 class="text-danger"><small>SR </small> 220,000</h4> </div>
                            </div>
                            <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Sale</span>
                            <div class="pro-list-info-3-col">
                                <ul class="pro-info text-muted m-b-0">
                                    <li> <span>Property Code:</span><span class="label text-inverse">SA16OPXX00000</span></li>
                                   
                                </ul>
                            </div>
                            <hr class="m-0">
                            <div class="pro-agent-col-3">
                                <div class="agent-img">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent.jpg"></a>
                                </div>
                                <div class="agent-name">
                                    <h5 class="m-b-0">Owner Name</h5> <small class="text-muted">5 Properties</small> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box pro-box p-0">
                            <div class="pro-list-img" style="background: url('../plugins/images/property/prop7.jpg') center center / cover no-repeat;"></div>
                            <div class="pro-content-3-col">
                                <div class="pro-list-details">
                                    <h4>
                                    <a class="text-dark" href="javascript:void(0)">Demo Address, City</a>
                                </h4>
                                    <h4 class="text-danger"><small>SR </small> 220,000</h4> </div>
                            </div>
                            <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                            <div class="pro-list-info-3-col">
                                <ul class="pro-info text-muted m-b-0">
                                    <li> <span>Property Code:</span><span class="label text-inverse">SA16OPXX00000</span></li>
                                </ul>
                            </div>
                            <hr class="m-0">
                            <div class="pro-agent-col-3">
                                <div class="agent-img">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent.jpg"></a>
                                </div>
                                <div class="agent-name">
                                    <h5 class="m-b-0">Owner Name</h5> <small class="text-muted">5 Properties</small> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box pro-box p-0">
                            <div class="pro-list-img" style="background: url('../plugins/images/property/property.jpg') center center / cover no-repeat;"></div>
                            <div class="pro-content-3-col">
                                <div class="pro-list-details">
                                    <h4>
                                    <a class="text-dark" href="javascript:void(0)">Demo Address, City</a>
                                </h4>
                                    <h4 class="text-danger"><small>SR </small> 220,000</h4> </div>
                            </div>
                            <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Sale</span>
                            <div class="pro-list-info-3-col">
                                <ul class="pro-info text-muted m-b-0">
                                    <li> <span>Property Code:</span><span class="label text-inverse">SA16OPXX00000</span></li>
                                </ul>
                            </div>
                            <hr class="m-0">
                            <div class="pro-agent-col-3">
                                <div class="agent-img">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent.jpg"></a>
                                </div>
                                <div class="agent-name">
                                    <h5 class="m-b-0">Owner Name</h5> <small class="text-muted">5 Properties</small> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box pro-box p-0">
                            <div class="pro-list-img" style="background: url('../plugins/images/property/prop8.jpg') center center / cover no-repeat;"></div>
                            <div class="pro-content-3-col">
                                <div class="pro-list-details">
                                    <h4>
                                    <a class="text-dark" href="javascript:void(0)">Demo Address, City</a>
                                </h4>
                                    <h4 class="text-danger"><small>SR </small> 220,000</h4> </div>
                            </div>
                            <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Sale</span>
                            <div class="pro-list-info-3-col">
                                <ul class="pro-info text-muted m-b-0">
                                    <li> <span>Property Code:</span><span class="label text-inverse">SA16OPXX00000</span></li>
                                </ul>
                            </div>
                            <hr class="m-0">
                            <div class="pro-agent-col-3">
                                <div class="agent-img">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent.jpg"></a>
                                </div>
                                <div class="agent-name">
                                    <h5 class="m-b-0">Owner Name</h5> <small class="text-muted">5 Properties</small> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box pro-box p-0">
                            <div class="pro-list-img" style="background: url('../plugins/images/property/prop1.jpeg') center center / cover no-repeat;"></div>
                            <div class="pro-content-3-col">
                                <div class="pro-list-details">
                                    <h4>
                                    <a class="text-dark" href="javascript:void(0)">Demo Address, City</a>
                                </h4>
                                    <h4 class="text-danger"><small>SR </small> 220,000</h4> </div>
                            </div>
                            <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                            <div class="pro-list-info-3-col">
                                <ul class="pro-info text-muted m-b-0">
                                    <li> <span>Property Code:</span><span class="label text-inverse">SA16OPXX00000</span></li>
                                </ul>
                            </div>
                            <hr class="m-0">
                            <div class="pro-agent-col-3">
                                <div class="agent-img">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent.jpg"></a>
                                </div>
                                <div class="agent-name">
                                    <h5 class="m-b-0">Owner Name</h5> <small class="text-muted">5 Properties</small> </div>
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
<?php include('inc/script_down.php'); ?>
