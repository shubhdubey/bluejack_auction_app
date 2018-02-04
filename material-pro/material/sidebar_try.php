<?php
session_start();
// if(!isset($_SESSION["userid"])) {
//     header("Location: http://localhost/trial1/material-pro/material/login_test.php");
//     exit;
// }
include_once("sconfig.php");
// $userid=$_SESSION['userid'];
$userid=1;
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
    <title>Bluejack | Admins</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
                        <li> <a class="active waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-laptop-windows"></i><span class="hide-menu">Admin Users</span></a>
                            
                        </li>
                        <li> <a class="waves-effect waves-dark" href="dealers.php" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Dealers</span></a>
                            
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
                        <h3 class="text-themecolor">Admins</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Admin Users</li>
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
                            <!-- <div class="">
                                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
        <div class="row">
                <!-- <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Users</h4>
                                

                                
                                </div>
                                    <div class="table-responsive m-t-40">
                                        <div id="example23_wrapper" class="dataTables_wrapper"><div id="example23_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example23"></label></div><table id="example23" class="display nowrap table table-hover table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                                        <thead>
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 178px;">Name</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 150px;">Role</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Contact Number: activate to sort column ascending" style="width: 180px;">Contact Number</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Email ID: activate to sort column ascending" style="width: 160px;">Email ID</th><th  tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 170px;">Action</th></tr>
                                        </thead>
                                        <tfoot>
                                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Role</th><th rowspan="1" colspan="1">Contact Number</th><th rowspan="1" colspan="1">Email ID</th><th rowspan="1" colspan="1">Action</th></tr>
                                        </tfoot>
                                        <tbody>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        <tr role="row" class="odd">
                                                <td class="sorting_1">Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td><button type="button" class="btn btn-secondary btn-circle editUser"><i class="mdi mdi-pencil"></i> </button>
                                                    <button type="button" class="btn btn-danger btn-circle deleteUser"style="background:#dd4b39;border: 1px solid #dd4b39"><i class="mdi mdi-close"></i></button></td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td><button type="button" class="btn btn-secondary btn-circle editUser"><i class="mdi mdi-pencil"></i> </button>
                                                    <button type="button" class="btn btn-danger btn-circle deleteUser" style="background:#dd4b39;border: 1px solid #dd4b39"><i class="mdi mdi-close"></i> </button></td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td><button type="button" class="btn btn-secondary btn-circle editUser"><i class="mdi mdi-pencil"></i> </button>
                                                    <button type="button" class="btn btn-danger btn-circle deleteUser" style="background:#dd4b39;border: 1px solid #dd4b39"><i class="mdi mdi-close"></i> </button></td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td><button type="button" class="btn btn-secondary btn-circle editUser"><i class="mdi mdi-pencil"></i> </button>
                                                    <button type="button" class="btn btn-danger btn-circle deleteUser" style="background:#dd4b39;border: 1px solid #dd4b39"><i class="mdi mdi-close"></i> </button></td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td><button type="button" class="btn btn-secondary btn-circle editUser"><i class="mdi mdi-pencil"></i> </button>
                                                    <button type="button" class="btn btn-danger btn-circle deleteUser" style="background:#dd4b39;border: 1px solid #dd4b39"><i class="mdi mdi-close"></i> </button></td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td><button type="button" class="btn btn-secondary btn-circle editUser"><i class="mdi mdi-pencil"></i> </button>
                                                    <button type="button" class="btn btn-danger btn-circle deleteUser" style="background:#dd4b39;border: 1px solid #dd4b39"><i class="mdi mdi-close"></i> </button></td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td><button type="button" class="btn btn-secondary btn-circle editUser"><i class="mdi mdi-pencil"></i> </button>
                                                    <button type="button" class="btn btn-danger btn-circle deleteUser" style="background:#dd4b39;border: 1px solid #dd4b39"><i class="mdi mdi-close"></i> </button></td>
                                            
                                            </tr></tbody>
                                    </table></div>
                                </div>
                            </div> -->
                        

                 <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Users</h4>
                                <div><button type="button" id="addButton" class="btn btn-outline-success" style="float:right; margin-right:2em;"><i class="mdi mdi-account-plus"></i> Add New User</button>
                                <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close closeModal" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h5 class="modal-title">Add a new user</h5>
                                            </div>
                                            <div style="padding:3px;"></div>
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
                                                        <input type="text" class="form-control" id="contact" required>
                                                        <span class="bar"></span>
                                                        <label for="contact" class="control-label">Contact Number</label>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <!-- <div class="form-group m-b-40 col-md-6">
                                                            <select class="form-control p-0" id="gender">
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                                <option>Other</option>
                                                            </select><span class="bar"></span>
                                                            <label for="gender">Gender</label>
                                                        </div> -->
                                                        <div class="form-group m-b-40 col-md-6" >
                                                            <select class="form-control p-0" id="type">
                                                                <option value="1">Admin</option>
                                                                <option value="0">Operation</option>
                                                            </select><span class="bar"></span>
                                                            <label for="type">User Type</label>
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
                                                <h5 class="modal-title">Edit user</h5>
                                            </div>
                                            <div style="padding:3px;"></div>
                                            <div class="modal-body">
                                                <form id="editUserForm" class="floating-labels">
                                                    <div class="form-group m-b-40" id="edivName">
                                                        <input type="text" class="form-control" id="ename" value="Lorem" required>
                                                        <span class="bar"></span>
                                                        <label for="ename">Name</label>
                                                    </div>
                                                    <div class="form-group m-b-40" id="edivEmail">
                                                        <input type="text" class="form-control" id="eemail" value="ipsum@gmail.com" readonly>
                                                        <span class="bar"></span>
                                                        <label for="eemail" class="control-label">Email ID</label>
                                                        
                                                    </div>
                                                    <div class="form-group m-b-40" id="edivPassword">
                                                        <input type="password" class="form-control" id="epassword" value="password" readonly>
                                                        <span class="bar"></span>
                                                        <label for="epassword" class="control-label">Password</label>

                                                    </div>
                                                     <div class="form-group m-b-40" id="edivContact">
                                                        <input type="text" class="form-control" id="econtact" value="9566812618" required>
                                                        <span class="bar"></span>
                                                        <label for="econtact" class="control-label">Contact Number</label>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <!-- <div class="form-group m-b-40 col-md-6">
                                                            <select class="form-control p-0" id="egender">
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                                <option>Other</option>
                                                            </select><span class="bar"></span>
                                                            <label for="egender">Gender</label>
                                                        </div> -->
                                                        <div class="form-group m-b-40 col-md-12" >
                                                            <select class="form-control p-0" id="etype">
                                                                <option value="1">Admin</option>
                                                                <option value="0">Operation</option>
                                                            </select><span class="bar"></span>
                                                            <label for="etype">User Type</label>
                                                        </div>
                                                    </div>
                                                        <div class="form-group m-b-40" id="edivAddress">
                                                                                                                        <label for="eaddress">Address</label>
                                                            <input type="text" class="form-control" id="eaddress" value="Goa" required>
                                                            <span class="bar"></span>

                                                        
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
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 178px;">Name</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 150px;">Role</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Contact Number: activate to sort column ascending" style="width: 180px;">Contact Number</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Email ID: activate to sort column ascending" style="width: 160px;">Email ID</th><th  tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 170px;">Action</th></tr>
                                        </thead>
                                        <tfoot>
                                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Role</th><th rowspan="1" colspan="1">Contact Number</th><th rowspan="1" colspan="1">Email ID</th><th rowspan="1" colspan="1">Action</th></tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
$sql="SELECT usermaster.id, usermaster.username, usermaster.useremail, usermaster.contact,usermaster.ustatus,rolemaster.role
FROM usermaster
INNER JOIN rolemaster where ustatus=1 and usermaster.roleid=rolemaster.roleid";
$run_query=mysqli_query($conn,$sql);
//$row_count=mysqli_num_rows($run_query);


?>    
                                            
                                            
                                            
                           
                                            
                                            
                                            
                                            
                                            
                                            <?php
                                            while ($row=mysqli_fetch_array($run_query)) {
                                                                    # code...
                                    
                                                                    $name_sql=$row['username'];
                                                                    $email_sql=$row['useremail'];
                                                                    $mobile_sql=$row['contact'];
                                                                    $role_sql=$row['role'];
                                                            
                                                                    echo "<tr role='row' id='userRow".$row['id']."' >";
                                                                   // $file="location.href='dealers/viewCar".$row['id'].".php'";
                                                                    echo "<td class='sorting_1'><a href='javascript:void(0)' ' id='viewUser".$row['id']."' class=' right-side-toggle  viewUser'>".$name_sql."</a></td>" ;
                                                                    echo "<td>".$role_sql."</td>";
                                                                    echo "<td>".$mobile_sql."</td>";
                                                                    echo "<td>".$email_sql." </td> ";
                                                                    /*echo "<td>".ucfirst($row['color'])."</td>";
                                                                    echo "<td>".ucfirst($row['owner'])."</td>";*/
                                                                
                                                                  /*  echo "<td><div class='btn-group bootstrap-select'>
                                                                                <select class='selectpicker' data-style='form-control btn-secondary' tabindex='-98' id='dealerStatus".$row['id']."'>
                                                                                <option value='open'>Approved</option>
                                                                                <option value='view'>Pending</option>
                                                                                <option value='close'>Blocked</option>
                                                                                <option value='close'>Removed</option>
                                                                                </select></div></td>";*/
                                                                    echo "<td><button type='button' class='btn btn-secondary btn-circle editUser' id='editUser".$row['id']."' title='Edit Details'><i class='mdi mdi-pencil'></i> </button>";

                                                                    echo "<button style='background:#dd4b39;border: 1px solid #dd4b39; margin-left:3%' type='button' class='btn btn-danger btn-circle deleteUser' id='deleteUser".$row['id']."'title='Remove User'><i  class='mdi mdi-close'></i> </button></td>


                                            </tr>";

                                                                }
                                                
                                                
                                            ?></tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 
                        </div>
                 </div>   
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title">User Details <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="../assets/images/users/5.jpg" class="img-circle" width="150">
                                    <h4 id="sidebarName" class="card-title m-t-10">Hanna Gover</h4>
                                    <h6 id="sidebarType"class="card-subtitle">Accoubts Manager Amix corp</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class=""><a href="javascript:void(0)" class="link"><i class="icon-people"></i><br /><small>Dealers: 25</small></a></div>
                                        
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small  class="text-muted">Email address </small>
                                <h6 id="sidebarEmail">hannagover@gmail.com</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6 id="sidebarContact">+91 654 784 547</h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6 id="sidebarAddress">71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                                <!-- <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                                </div> --> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                    <script src="../assets/plugins/jquery/jquery.min.js"></script>
                <script src="sidebarContent.js"></script>
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


    <!--JS for Modal of Add User -->
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
    $(".editUser").click(function(){
        window.scrollTo(0, 0);
        $("#responsive-modal2").addClass("show");
        document.getElementById('responsive-modal2').style.display = 'block';
    });

   /* $(".deleteUser").click(function(){
        var result = confirm('You want to remove the user');
    });*/
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
    var type = document.getElementById("type");
     var name = $('#name').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var contact_no = $('#contact').val();
    var type = $('#type').val();
    var gender = $('#gender').val();
    var address = $('#address').val();
    var type=$('#type').val();
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
    if (name == '' || email=='' || password=='' || contact_no=='' || type=='' || gender=='' || address=='') {
    alert("All fields are compulsary");
    } else {
       // alert(name);
   }
    // AJAX code to submit form.
    $.ajax({
    type: "GET",
    url: "addusers.php",
    data: {name:name,email:email,password:password,contact_no:contact_no,type:type,gender:gender,address:address},
    cache: false,
    dataType: 'json',
    success: function(data) {
        document.getElementById("addUserForm").innerHTML = data;
        $("#responsive-modal").removeClass("show");
        document.getElementById('responsive-modal').style.display = 'none';
        $("#responsive-modal2").removeClass("show");
        document.getElementById('responsive-modal2').style.display = 'none';

    },
    error: function(err) {
    alert(err);
    }
    });
    
 }

document.getElementById("esaveButton").onclick = function(){
    var patternemail = /^[a-z0-9._-]+@[a-z]+.[a-z.]{2,5}$/;
    var patterncontact = /^([+0-9]{1,3})?([0-9]{10,11})$/ ;
    var patternpassword = /^[a-z0-9]{6,}/i ;
    var email = document.getElementById("eemail");
    var contact = document.getElementById("econtact");
    var name = document.getElementById("ename");
    var address = document.getElementById("eaddress");
    var password = document.getElementById("epassword");
     var type = document.getElementById("etype");
     var name = $('#ename').val();
    var email = $('#eemail').val();
    var password = $('#epassword').val();
    var contact = $('#econtact').val();
    var type = $('#etype').val();
    var address = $('#eaddress').val();
    var type=$('#etype').val();
    if(!patternemail.test(email.value)){
        $("#eemail").addClass("form-control-danger");
        $("#edivEmail").addClass("has-danger");
        $("#edivEmail").addClass("has-error");
    }
    else{
         $("#eemail").removeClass("form-control-danger");
        $("#edivEmail").removeClass("has-danger");
        $("#edivEmail").removeClass("has-error");
    }

    if(!patterncontact.test(contact.value)){
        $("#econtact").addClass("form-control-danger");
        $("#edivContact").addClass("has-danger");
        $("#edivContact").addClass("has-error");
    }
    else{
         $("#econtact").removeClass("form-control-danger");
        $("#edivContact").removeClass("has-danger");
        $("#edivContact").removeClass("has-error");
    }
    if(!patternpassword.test(password.value)){
        $("#epassword").addClass("form-control-danger");
        $("#edivPassword").addClass("has-danger");
        $("#edivPassword").addClass("has-error");
    }
    else{
         $("#epassword").removeClass("form-control-danger");
        $("#edivPassword").removeClass("has-danger");
        $("#edivPassword").removeClass("has-error");
    }
    if(!name.value){

        $("#ename").addClass("form-control-danger");
        $("#edivName").addClass("has-danger");
        $("#edivName").addClass("has-error");
    }
    else{
         $("#ename").removeClass("form-control-danger");
        $("#edivName").removeClass("has-danger");
        $("#edivName").removeClass("has-error");
    }
    if(!address.value){

        $("#eaddress").addClass("form-control-danger");
        $("#edivAddress").addClass("has-danger");
        $("#edivAddress").addClass("has-error");
    }
    else{
         $("#eaddress").removeClass("form-control-danger");
        $("#edivAddress").removeClass("has-danger");
        $("#edivAddress").removeClass("has-error");
    }

    if (name == '' ||  contact=='' || type=='' || address=='') {
    alert("All fields are compulsary");
    } else {
       // alert(name);
   }
    // AJAX code to submit form.
    $.ajax({
    type: "GET",
    url: "updateUser.php",
    data: {name:name,email:email,password:password,contact:contact,type:type,address:address},
    cache: false,
    dataType: 'json',
    success: function(data) {
        //document.getElementById("editUserForm").innerHTML = data;
      //  alert("hello");
        document.getElementById("editUserForm").style.display='none';
        $("#responsive-modal2").removeClass("show");
        document.getElementById('responsive-modal2').style.display = 'none';


    },
    error: function(err) {
    alert(err);
    }
    });
 };



</script>
<script>
 $(".editUser").click(function(e){
        e.preventDefault();
        window.scrollTo(0, 0);
        document.getElementById("editUserForm").style.display='block';
        var edit=this.id;
       // alert("KLK");
        var lastChar = parseInt(edit.match(/[0-9]+/)[0], 10);
        //alert(lastChar);
   
            $.ajax({
            type: "GET",
            url: "editUser.php",
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
  document.getElementById('etype').value=data.type;
  document.getElementById('eaddress').value=data.location;





            },
            error: function(err) {
            alert(err);
            }
            });


    });
 $('.deleteUser').click(function(e){
        e.preventDefault();
        var delCar=confirm("You want to remove the entry ?");
        if(delCar==true){
            var del=this.id;
            var lastChar = parseInt(del.match(/[0-9]+/)[0], 10);
            var del="#userRow"+lastChar;
           // alert(lastChar);
            //alert(del);
            $(del).remove();
            $.ajax({
    type: "GET",
    url: "removeUser.php",
    data: {id:lastChar},
    cache: false,
    dataType: 'json',
    success: function(data) {
        if(data.status=="1"){
           // alert('Delete Successful');
        }
        else{
            alert('Unable to Delete');
    }

    },
    error: function(err) {
    alert(err);
    }
    });
    }

        
    });

</script>

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
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
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
        <!-- Sweet-Alert  -->
    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="../assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>


<script>
    $(document).ready(function() {
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
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>



<!--Custom CSS for Add User form -->
<style>
#addUserForm, #editUserForm{
    font-size: 0.96rem;

}
#closeButton, #ecloseButton {
    margin-left: 9rem;
    margin-right: 1rem;
}

.card{
    margin-bottom:0px;
}
</style>
</body>


</html>