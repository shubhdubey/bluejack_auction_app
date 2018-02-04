<?php
session_start();
if(!isset($_SESSION["userid"])) {
    header("Location: http://localhost/trial1/material-pro/material/login_test.php");
    exit;
}
include_once("sconfig.php");
$userid=$_SESSION['userid'];
$sql="SELECT * FROM usermaster where id='$userid'";
$run=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($run);

$username=$result['username'];
$email=$result['useremail'];

?>
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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Bluejack | Dealers</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                       
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            
                                            <div class="u-text">
                                                <h4 class="dashboardName"><?php echo $username; ?></h4>
                                                <p id="dashboardEmail" class="text-muted"><?php echo $email; ?></p></div>
                                        </div>
                                    </li>
                                    
                                    <li role="separator" class="divider"></li>
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(../assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../assets/images/users/profile.png" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?php echo $username;?></a>
                        <div class="dropdown-menu animated flipInY">  <a href="logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a> </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="in">
                        <li class="nav-small-cap">BLUEJACK</li>
                        <li class=""> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                            
                        </li>
                        <li> <a class="waves-effect waves-dark" href="users.php" aria-expanded="false"><i class="mdi mdi-laptop-windows"></i><span class="hide-menu">Admin Users</span></a>
                            
                        </li>
                        <li> <a class="active waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Dealers</span></a>
                            
                        </li>
                        <li> <a class="waves-effect waves-dark" href="cars.php" aria-expanded="false"><i class="mdi mdi-car"></i><span class="hide-menu">All Cars</span></a>
                            
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-car-connected"></i><span class="hide-menu">Masters</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="brands.php">Brands</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open"></i><span class="hide-menu">Reports</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Inspection</a></li>
                                <li><a href="#">Bid</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-star-outline"></i><span class="hide-menu">Notification</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Custom Notification</a></li>
                            </ul>
                        </li>
                        <li> 
                         
                    </ul>
                        
                        
                         
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dealers</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dealers</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                                    <h4 class="m-t-0 text-info">TOTAL SALES</h4></div>
                                <div class="spark-chart">
                                    <div id="monthchart"></div>
                                </div>
                            </div>
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                                    <h4 class="m-t-0 text-primary">TOTAL SALES</h4></div>
                                <div class="spark-chart">
                                    <div id="lastmonthchart"></div>
                                </div>
                            </div>
                            <div class="">
                                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

          <!--      <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Dealers</h4>
                                <div><button type="button" id="addButton" class="btn btn-outline-success" style="float:right; margin-right:2em;"><i class="mdi mdi-account-plus"></i> Add Dealers</button>
                                
                                <div class="table-responsive m-t-40">
                                    <div id="myTable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="myTable_length"><label>Show <select name="myTable_length" aria-controls="myTable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="myTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="myTable"></label></div><table id="myTable" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                                        
                                    </table><div class="dataTables_info" id="myTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="myTable_paginate"><a class="paginate_button previous disabled" aria-controls="myTable" data-dt-idx="0" tabindex="0" id="myTable_previous">Previous</a><span><a class="paginate_button current" aria-controls="myTable" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="myTable" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="myTable" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="myTable" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="myTable" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="myTable" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="myTable" data-dt-idx="7" tabindex="0" id="myTable_next">Next</a></div></div>
                                </div>
                            </div>
                        </div>





































       </div>







 -->


                 <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Dealers</h4>
                                <div><button type="button" id="addButton" class="btn btn-outline-success" style="float:right; margin-right:2em;"><i class="mdi mdi-account-plus"></i> Add Dealer</button>
                                <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close closeModal" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h5 class="modal-title">Add a new dealer</h5>
                                            </div>
                                            <div style="padding:2px;"></div>
                                            <div class="modal-body">
                                                <form id="addUserForm" class="floating-labels">
                                                    <div class="form-group m-b-40" id="divName">
                                                        <input type="text" class="form-control" id="name" required>
                                                        <span class="bar"></span>
                                                        <label for="name">Name</label>
                                                    </div>
                                                    <div class="form-group m-b-40" id="divEmail">
                                                        <input type="text" class="form-control" id="email" required>
                                                        <span class="bar"></span>
                                                        <label for="email" class="control-label">Email ID</label>
                                                        
                                                    </div>
                                                    <div class="form-group m-b-40" id="divPassword">
                                                        <input type="password" class="form-control" id="password" required>
                                                        <span class="bar"></span>
                                                        <label for="password" class="control-label">Password</label>
                                                        <span class="help-block"><small>Password should be min. 6 characters.</small></span>

                                                    </div>
                                                     <div class="form-group m-b-40" id="divContact">
                                                        <input type="text" class="form-control" id="contact" maxlength="13" required>
                                                        <span class="bar"></span>
                                                        <label for="contact" class="control-label">Contact Number</label>
                                                        
                                                    </div>
                                                    <div class="form-group m-b-40" id="divDealership">
                                                        <input type="text" class="form-control" id="dealership" required>
                                                        <span class="bar"></span>
                                                        <label for="dealership" class="control-label">Dealership</label>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group m-b-40 col-md-6">
                                                            <select class="form-control p-0" id="gender">
                                                                <option>Male</option>6
                                                                <option>Female</option>
                                                                <option>Other</option>
                                                            </select><span class="bar"></span>
                                                            <label for="gender">Gender</label>
                                                        </div>
<div class="form-group">
                                                                    <label>Date Of Birth</label>
                                                                    <input id="dob" type='text' class="form-control" data-mask="9999-99-99" required>
                                                                    
                                                                
                                                            </div>
                                                    
                                                    </div>
                                                        <div class="form-group m-b-40" id="divAddress">
                                                            <input type="text" class="form-control" id="address" required>
                                                            <span class="bar"></span>
                                                            <label for="address">Address</label>
                                                        
                                                    </div>
                                                    <div>
                                                        <button type="button" id="closeButton" class="btn btn-default waves-effect closeModal" data-dismiss="modal">Close</button>
                                                        <button type="button" id="saveButton" class="btn btn-danger waves-effect waves-light">Save</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div id="responsive-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close closeModal" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h5 class="modal-title">Edit Dealer</h5>
                                            </div>
                                            <div style="padding:3px;"></div>
                                            <div class="modal-body">
                                                <form id="editUserForm" class="floating-labels">

                                                    <div class="form-group m-b-40" id="edivName">
                                                     <input type='text' class='form-control' id='ename'  value="name" required> 
                                                        <span class="bar"></span>
                                                        <label for="ename">Name</label>
                                                    </div>
                                                    <div class="form-group m-b-40" id="edivEmail">
                                                        <input type="text" class="form-control" id="eemail" value="email" readonly>
                                                        <span class="bar"></span>
                                                        <label for="eemail" class="control-label">Email ID</label>
                                                        
                                                    </div>
                                                    <div class="form-group m-b-40" id="edivPassword">
                                                        <input type="password" class="form-control" id="epassword" value="password" readonly>
                                                        <span class="bar"></span>
                                                        <label for="epassword" class="control-label">Password</label>

                                                    </div>
                                                     <div class="form-group m-b-40" id="edivContact">
                                                        <input type="text" class="form-control" id="econtact" value="contact" maxlength="13" required>
                                                        <span class="bar"></span>
                                                        <label for="econtact" class="control-label">Contact Number</label>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group m-b-40 col-md-6">
                                                            <select class="form-control p-0" id="egender">
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                                <option>Other</option>
                                                            </select><span class="bar"></span>
                                                            <label for="egender">Gender</label>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                        <div class="form-group m-b-40" id="edivAddress">
                                                            <input type="text" class="form-control" id="eaddress" value="address" required>
                                                            <span class="bar"></span>
                                                            <label for="eaddress">Address</label>
                                                        
                                                    </div>
                                                    <div>
                                                        <button type="button" id="ecloseButton" class="btn btn-default waves-effect closeModal" data-dismiss="modal">Close</button>
                                                        <button type="button" id="esaveButton" class="btn btn-danger waves-effect waves-light">Save</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 170px;">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 250px;">Email ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 100px;">Dealership</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Contact: activate to sort column ascending" style="width: 180px;">Contact Number</th><th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 140px;">Status</th><th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="">Action</th></tr>
                                        </thead>
                                        <tbody>
<?php
$sql="SELECT *  FROM dealermaster where approved <> 3 ";
$run_query=mysqli_query($conn,$sql);
$row_count=mysqli_num_rows($run_query);


?>    
                                            
                                            
                                            
                           
                                            
                                            
                                            
                                            
                                            
                                            <?php
                                            while ($row=mysqli_fetch_array($run_query)) {
                                                                    # code...
                                    
                                                                    $name_sql=$row['dname'];
                                                                    $email_sql=$row['demail'];


                
                                
                                                                    $dealership_sql=$row['dealership'];
                                                            
                                                    
                                                    
                                                                    $mobile_sql=$row['dmobile'];
                                                            
                                                                    echo "<tr role='row' id='carRow".$row['id']."' >";
                                                                   // $file="location.href='dealers/viewCar".$row['id'].".php'";
                                                                    echo "<td class='sorting_1'>".$name_sql."</td>" ;
                                                                    echo "<td>".$email_sql."</td>";
                                                                    echo "<td>".$dealership_sql."</td>";
                                                                    echo "<td>".$row['dmobile']." </td> ";
                                                                    /*echo "<td>".ucfirst($row['color'])."</td>";
                                                                    echo "<td>".ucfirst($row['owner'])."</td>";*/
                                                                    $status = $row['approved'];

                                                                        switch($status)    {
                                                                            case 0 : echo "<td><div class='btn-group bootstrap-select'>
                                                                                <select class='selectpicker approveSelect' data-style='form-control btn-secondary' tabindex='-98' id='dealerStatus".$row['id']."'>
                                                                                <option value='0'>Approved</option>
                                                                                <option value='1'>Pending</option>
                                                                                <option value='2'>Blocked</option>
                                                                                <option value='3'>Removed</option>
                                                                                </select></div></td>";
                                                                                break;
                                                                            case 1 : echo "<td><div class='btn-group bootstrap-select'>
                                                                                <select class='selectpicker m-b-20 m-r-10 approveSelect' data-style='form-control btn-warning' tabindex='-98' id='dealerStatus".$row['id']."'>
                                                                                <option value='0'>Approved</option>
                                                                                <option value='1' selected>Pending</option>
                                                                                <option value='2' >Blocked</option>
                                                                                <option value='3'>Removed</option>
                                                                                </select></div></td>";
                                                                                break;
                                                                            case 2 : echo "<td><div class='btn-group bootstrap-select'>
                                                                                <select class='selectpicker approveSelect' data-style='form-control btn-danger' tabindex='-98' id='dealerStatus".$row['id']."'>
                                                                                <option value='0'>Approved</option>
                                                                                <option value='1'>Pending</option>
                                                                                <option value='2'selected>Blocked</option>
                                                                                <option value='3'>Removed</option>
                                                                                </select></div></td>";
                                                                                break;
                                                                            }
                                                                    echo "<td><button type='button' class='btn btn-secondary btn-circle editDealer' id='editDealer".$row['id']."'  title='Edit Details'><i class='mdi mdi-pencil'></i> </button></td>
                                            </tr>";

                                                                }
                                                
                                                
                                            ?></tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 
                        </div>





                    
                </div>    

    <script src="../assets/plugins/jquery/jquery.min.js"></script>
<script>


$(document).ready(function(){
    $("#addButton").click(function(){
        $("#responsive-modal").addClass("show");
        document.getElementById('responsive-modal').style.display = 'block';

    });
    $(".closeModal").click(function(){
        $("#responsive-modal").removeClass("show");
        document.getElementById('responsive-modal').style.display = 'none';
        $("#responsive-modal2").removeClass("show");
        document.getElementById('responsive-modal2').style.display = 'none';
    });

    $(".editDealer").click(function(){
        $("#responsive-modal2").addClass("show");
        document.getElementById("responsive-modal2").style.display = 'block';

    });

 $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });

    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });



// Change Status of Approved Script
$(".approveSelect").change(function(){
        var del=this.id;
        var lastChar = del.substring(12);
        var id= "dealerStatus"+lastChar;
        var value = document.getElementById(id).value;
        
        $.ajax({
            type: 'GET',
            url: 'dealerApprove.php',
            data: { id: lastChar,value:value },
            dataType: 'json',
            success: function(data)
            {  //alert("Success");

            
            }
        });


    });
  

});


document.getElementById("saveButton").onclick = function(){
    var patternemail = /^[a-z0-9._-]+@[a-z]+.[a-z.]{2,5}$/;
    var patterncontact = /^([+0-9]{1,3})?([0-9]{10,11})$/ ;
    var patternpassword = /^[a-z0-9]{6,}/i ;
    var email = document.getElementById("email");
    var contact = document.getElementById("contact");
    var name = document.getElementById("name");
    var address = document.getElementById("address");
    var password = document.getElementById("password");
    var dealership = document.getElementById("dealership");
    var dob = document.getElementById("dob");
     var name = $('#name').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var contact_no = $('#contact').val();
    var dealership = $('#dealership').val();
    var gender = $('#gender').val();
    var address = $('#address').val();
    var dob=$('#dob').val();
    if(!patternemail.test(email.value)){
        $("#email").addClass("form-control-danger");
        $("#divEmail").addClass("has-danger");
        $("#divEmail").addClass("has-error");
    }
    else{
         $("#email").removeClass("form-control-danger");
        $("#divEmail").removeClass("has-danger");
        $("#divEmail").removeClass("has-error");
    }

    if(!patterncontact.test(contact.value)){
        $("#contact").addClass("form-control-danger");
        $("#divContact").addClass("has-danger");
        $("#divContact").addClass("has-error");
    }
    else{
         $("#contact").removeClass("form-control-danger");
        $("#divContact").removeClass("has-danger");
        $("#divContact").removeClass("has-error");
    }
    if(!patternpassword.test(password.value)){
        $("#password").addClass("form-control-danger");
        $("#divPassword").addClass("has-danger");
        $("#divPassword").addClass("has-error");
    }
    else{
         $("#password").removeClass("form-control-danger");
        $("#divPassword").removeClass("has-danger");
        $("#divPassword").removeClass("has-error");
    }
    if(!dealership.value){
         $("#dealership").addClass("form-control-danger");
        $("#divDealership").addClass("has-danger");
        $("#divDealership").addClass("has-error");
    }
    else{
         $("#dealership").removeClass("form-control-danger");
        $("#divDealership").removeClass("has-danger");
        $("#divDealership").removeClass("has-error");
    }

    if(!name.value){

        $("#name").addClass("form-control-danger");
        $("#divName").addClass("has-danger");
        $("#divName").addClass("has-error");
    }
    else{
         $("#name").removeClass("form-control-danger");
        $("#divName").removeClass("has-danger");
        $("#divName").removeClass("has-error");
    }
    if(!address.value){

        $("#address").addClass("form-control-danger");
        $("#divAddress").addClass("has-danger");
        $("#divAddress").addClass("has-error");
    }
    else{
         $("#address").removeClass("form-control-danger");
        $("#divAddress").removeClass("has-danger");
        $("#divAddress").removeClass("has-error");
    }
    
if (name == '' || email=='' || password=='' || contact_no=='' || dealership=='' || gender=='' || address=='') {
    alert("All fields are compulsary");
    } else {
       // alert(name);
   }
    // AJAX code to submit form.
    $.ajax({
    type: "GET",
    url: "adddealer.php",
    data: {name:name,email:email,password:password,contact_no:contact_no,dealership:dealership,gender:gender,address:address,dob:dob},
    cache: false,
    dataType: 'json',
    success: function(data) {
        $("#responsive-modal").removeClass("show");
        document.getElementById('responsive-modal').style.display = 'none';
    },
    error: function(err) {
    alert(err);
    }
    });
    };
</script>
<script>
 $(".editDealer").click(function(event){
        event.preventDefault();
        window.scrollTo(0, 0);
                $("#responsive-modal2").addClass("show");
        document.getElementById("responsive-modal2").style.display = 'block';
        var edit=this.id;
        //alert(edit);
        var lastChar = parseInt(edit.match(/[0-9]+/)[0], 10)
       // alert(lastChar);
   
            $.ajax({
            type: "GET",
            url: "editDealer.php",
            data: {id:lastChar},
            cache: false,
            dataType: 'json',
            success: function(data) {
                /*var name = data.name;
 
alert(name);*/ document.getElementById('ename').value=data.name;

// $('#ename').val()='POggh';
// $('')
 document.getElementById('epassword').value=data.password;
document.getElementById('eemail').value=data.email;
 document.getElementById('econtact').value=data.mobile;
  document.getElementById('egender').value=data.gender;
  document.getElementById('eaddress').value=data.location;





            },
            error: function(err) {
            alert(err);
            }
            });


    });

</script>
<!-- ediiting update record -->
<script>
document.getElementById("esaveButton").onclick = function(){
   /* var patternemail = /^[a-z0-9._-]+@[a-z]+.[a-z.]{2,5}$/;*/
    var patterncontact = /^([+0-9]{1,3})?([0-9]{10,11})$/ ;
    /*var patternpassword = /^[a-z0-9]{6,}/i ;*/
    var name= document.getElementById("ename")
    var email = document.getElementById("eemail");
    var contact = document.getElementById("econtact");
    var address = document.getElementById("eaddress");
    var password = document.getElementById("epassword");
    var gender = document.getElementById("egender");
     var name = $('#ename').val();
    var email = $('#eemail').val();
    var password = $('#epassword').val();
    var contact_no = $('#econtact').val();
    var gender = $('#egender').val();
    var address = $('#eaddress').val();
   // alert(email);
    if(!patternemail.test(email.value)){
        $("#email").addClass("form-control-danger");
        $("#divEmail").addClass("has-danger");
        $("#divEmail").addClass("has-error");
    }
    else{
         $("#email").removeClass("form-control-danger");
        $("#divEmail").removeClass("has-danger");
        $("#divEmail").removeClass("has-error");
    }

    if(!patterncontact.test(contact.value)){
        $("#contact").addClass("form-control-danger");
        $("#divContact").addClass("has-danger");
        $("#divContact").addClass("has-error");
    }
    else{
         $("#contact").removeClass("form-control-danger");
        $("#divContact").removeClass("has-danger");
        $("#divContact").removeClass("has-error");
    }
    if(!patternpassword.test(password.value)){
        $("#password").addClass("form-control-danger");
        $("#divPassword").addClass("has-danger");
        $("#divPassword").addClass("has-error");
    }
    else{
         $("#password").removeClass("form-control-danger");
        $("#divPassword").removeClass("has-danger");
        $("#divPassword").removeClass("has-error");
    }
    if(!dealership.value){
         $("#dealership").addClass("form-control-danger");
        $("#divDealership").addClass("has-danger");
        $("#divDealership").addClass("has-error");
    }
    else{
         $("#dealership").removeClass("form-control-danger");
        $("#divDealership").removeClass("has-danger");
        $("#divDealership").removeClass("has-error");
    }

    if(!name.value){

        $("#name").addClass("form-control-danger");
        $("#divName").addClass("has-danger");
        $("#divName").addClass("has-error");
    }
    else{
         $("#name").removeClass("form-control-danger");
        $("#divName").removeClass("has-danger");
        $("#divName").removeClass("has-error");
    }
    if(!address.value){

        $("#address").addClass("form-control-danger");
        $("#divAddress").addClass("has-danger");
        $("#divAddress").addClass("has-error");
    }
    else{
         $("#address").removeClass("form-control-danger");
        $("#divAddress").removeClass("has-danger");
        $("#divAddress").removeClass("has-error");
    }
    
if (name == '' ||  contact_no=='' || gender=='' || address=='') {
    alert("All fields are compulsary");
    } else {
       // alert(name);
   }
    // AJAX code to submit form.
    $.ajax({
    type: "GET",
    url: "updatedealer.php",
    data: {name:name,email:email,password:password,contact_no:contact_no,gender:gender,address:address},
    cache: false,
    dataType: 'json',
    success: function(data) {
        $("#responsive-modal2").removeClass("show");
        document.getElementById('responsive-modal2').style.display = 'none';
    },
    error: function(err) {
    alert(err);
    }
    });
    };





</script>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
<!--                 <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2018 BlueJack </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
         <script src="js/mask.js"></script>
     <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

<script>

       
    </script>








<style>
.card{font-size: 0.92rem;}

td button{float: right;
          margin-right: 1.5em;}

#addUserForm .m-b-40{
    margin-bottom: 30px;
}
.modal-content{
    margin-top: -1rem;
}
.modal-header{
    padding: 9px;
}
#closeButton, #ecloseButton {
    margin-left: 9rem;
    margin-right: 1rem;
}
.btn-warning, .btn-danger{
    color: #ffffff;
}

</style>

</html>