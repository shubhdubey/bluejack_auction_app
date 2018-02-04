<?php
ob_start();
session_start();
include_once("../config.php");
date_default_timezone_set('Asia/Kolkata');
$_SESSION['username']='USERNAME';
$_SESSION['id']=1;
$_SESSION['email']='EMAIL@EMAIL.COM';
$_SESSION['department']=1;
$_SESSION['orgname']=2;
/*if(!$_SESSION['id']){
   header("location:index.php");
   die;
}*/
$username= $_SESSION['username'];
$uid = $_SESSION['id'];
$uemail = $_SESSION['email'];
$department = $_SESSION['department'];
//$showroomname=2;
$startdate="2018/01/20 07:26:07";
$enddate="2018/02/20 07:26:07";
$show_id=2;
$sql="SELECT showroomname FROM showroommaster where id='$show_id'";
$sql_query=mysqli_query($conn,$sql);
$res=mysqli_fetch_assoc($sql_query);
$showroomname=$res['showroomname'];

					if(isset($_POST['btn-fetch']))
{
    $carid = $_POST['carid'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `carsold` WHERE carid='$carid'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT `id`,`orgname`, `dealtitle`, `showroomdemand`, `location`, `contact`, `leaddate`, `carid`, `carnumber`, `carmake`, `carmodel`, `carvariant`, `mfgyear`, `regyear`, `os`, `color`, `km`, `fuel`, `inspected`, `leadstatus` FROM `finallead` WHERE spocname=19";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "bluejack");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
	
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
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Bluejack - <?php echo ucfirst($showroomname);?></title>
    <!-- Bootstrap Core CSS -->
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="../../assets/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="../../assets/plugins/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="../../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="../../assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="../../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border">
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
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../../assets/images/Logo_Thumb_White.png" alt="homepage" class="light-logo" width="32px" height="31px" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="../../assets/images/textWhite.png" class="light-logo" alt="homepage" width="98px" height="19px" /></span> </a>
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
                        <li class="nav-item hidden-sm-down search-box">
                            <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
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
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="../../assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?php echo $username ?></h4>
                                                <p class="text-muted"><?php echo $uemail ?></p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="../main/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-in"></i></a>
                        </li>
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
                <div class="user-profile" style="background: url(../../assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../../assets/images/users/profile.png"  alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?php echo $username ?></a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                            <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div> <a href="../main/logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">BLUEJACK</li>
                        <?php 
							if($department != 1)
							{
								echo '<li>
										<a class="waves-effect waves-dark" aria-expanded="false" href="../main/dashboard.php"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
									  </li>
									  <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-laptop-windows"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../main/carsold.php">Car Sold</a></li>
                            </ul>
                        </li>
									  <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">View</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../main/carsolddetails.php">Car Sold Details</a></li>
                            </ul>
                        </li>
								<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Blackbox</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../main/blackbox.php">Blackbox</a></li>
                            </ul>
                        </li>';
							}
							else
							{
								echo '<li>
                            <a class="waves-effect waves-dark" aria-expanded="false" href="../main/dashboard.php"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-laptop-windows"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../main/carsold.php">Car Sold</a></li>
                            </ul>
                        </li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">View</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../main/carsolddetails.php">Car Sold Details</a></li>
                            </ul>
                        </li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Blackbox</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../main/blackbox.php">Blackbox</a></li>
                            </ul>
                        </li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-brush"></i><span class="hide-menu">Update</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../main/carsoldedit.php">Car Sold Update</a></li>
                            </ul>
                        </li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Users</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../main/users.php">Users Details</a></li>
                            </ul>
                        </li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Bid App</span></a>
							<ul aria-expanded="false" class="collapse">
                                <li><a href="../main/biddashboard.php">Dashboard</a></li>
                            </ul>
							<ul aria-expanded="false" class="collapse">
                                <li><a href="../main/caridbids.php">Bids By Car ID</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../main/biduserapprove.php">User Approval</a></li>
                            </ul>
                        </li>';
							}
						
						?>
						
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item-->
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
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
                        <h3 class="text-themecolor m-b-0 m-t-0">All Leads</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">All Leads</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
						<div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">All Leads</h4>
                            </div>
                            <div class="card-body">

                                <form id="carsold" method="POST">
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Date From</label>
                                                    <input type="text" class="form-control" id="datefrom" name="datefrom" placeholder="Select Date">
												</div>
                                            </div>
											<div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Date To</label>
                                                    <input type="text" class="form-control" id="dateto" name="dateto" placeholder="Select Date" onchange="getfilter();">
												</div>
                                            </div>
											<div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Showroom</label>
                                                    <select class="select2" style="width: 100%" name="showroom" id="showroom" onchange="getfilter();">
                                                        <?php
													$sql2="Select id, showroomname from showroommaster where delid=0";
													$result2=mysqli_query($conn, $sql2);
													echo'<option value="0" disabled>---Select Showroom Name--- </option>';
													while($row=mysqli_fetch_assoc($result2))
													{
														$id = $row['id'];
														$name = $row['showroomname'];
                                                        $selected_val="";
                                                        if($show_id==$id){
                                                            $selected_val="selected";
                                                        }
														echo "<option value='" . $id ."' ".$selected_val."   >" . $name ."</option>";
													} ?>
                                                    </select>
												</div>
                                            </div>
											<div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Inspection Status</label>
                                                    <select class="select2" style="width: 100%" name="inspection" id="inspection" onchange="getfilter();">
                                                        <?php
														$sql2="Select distinct fueltype from cartransact Group By fueltype";
														$result2=mysqli_query($conn2, $sql2);
														echo'<option value="0" disabled selected>---Select Fuel Type--- </option>';
														while($row=mysqli_fetch_assoc($result2))
														{
															$id = $row['fueltype'];
															$name = $row['fueltype'];
															echo "<option value='" . $id ."'>" . $name ."</option>";
														} ?>
                                                    </select>
												</div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group" style=" padding-top: 30px;">
													<input type="button" class="btn btn-success" id="btnShowMsg" value="Clear All" onClick='showMessage()'/>
												</div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        
                                    </div>
                                
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
												<th>Showroom name</th>
												<th>Deal Title</th>
												<th>Showroom Demand</th>
												<th>Location</th>
												<th>Contact</th>
												<th>Lead Date</th>
												<th>Car Id</th>
												<th>Car Number</th>
												<th>Car Make</th>
												<th>Car Model</th>
												<th>Car Variant</th>
												<th>Mfg Year</th>
												<th>Reg Year</th>
												<th>OS</th>
												<th>Color</th>
												<th>KM</th>
												<th>Fuel</th>
												<th>Inspected</th>
											
                                                <th>To Be Inspected</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($row=mysqli_fetch_array($search_result))
											 {   $id=$row['id'];
                                             $carid=$row['carid'];
                                                $check="mdi-close";
                                                $button = "btn-danger";
                                                 if($row['leadstatus']==2){
                                                    $check="mdi-check";
                                                    $button = "btn-success";
                                                 }
												 echo '
												 <tr>
													<td>'.  $row['orgname'] .'</td>
													<td>'.  $row['dealtitle'] .'</td>
													<td>'.  $row['showroomdemand'] .'</td>
													<td>'.  $row['location'] .'</td>
													<td>'.  $row['contact'] .'</td>
													<td>'.  $row['leaddate'] .'</td>
													<td>'.  $row['carid'] .'</td>
													<td>'.  $row['carnumber'] .'</td>
													<td>'.  $row['carmake'] .'</td>
													<td>'.  $row['carmodel'] .'</td>
													<td>'.  $row['carvariant'] .'</td>
													<td>'.  $row['mfgyear'] .'</td>
													<td>'.  $row['regyear'] .'</td>
													<td>'.  $row['os'] .'</td>
													<td>'.  $row['color'] .'</td>
													<td>'.  $row['km'] .'</td>
													<td>'.  $row['fuel'] .'</td>
													<td>'.  $row['inspected'] .'</td>
													
                                                    <td><button type="button" class="btn '.$button.'  btn-circle inspectCheck" id="status'.$carid.'" title="Change Status"><i class="mdi '.$check.'" id="iconstatus'.$carid.'"></i> </button>
												</td></tr>
												 ';
											 }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						</form>
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
                        </div>
                    </div>
                </div>
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
            <footer class="footer"> © 2018 Bluejack </footer>
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

<!-- FIREBASE -->
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
<script>
  // Initialize Firebase
  // var config = {
  //   apiKey: "AIzaSyBxGAwB_hH6giqGpA6NuuLs9x3oKC9q3jE",
  //   authDomain: "bluejack-9b841.firebaseapp.com",
  //   databaseURL: "https://bluejack-9b841.firebaseio.com",
  //   projectId: "bluejack-9b841",
  //   storageBucket: "",
  //   messagingSenderId: "287587735137"
  // };
  // firebase.initializeApp(config);
</script>

<!-- FIREBASE END -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->



    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.min.js"></script>
    <!-- This is data table -->
    <script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="../js/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="../js/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="../js/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="../js/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="../js/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="../js/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="../js/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
	
	<!-- end - This is for export functionality only -->
	<script src="../../assets/plugins/moment/moment.js"></script>
    <script src="../../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
	<!-- Clock Plugin JavaScript -->
    <script src="../../assets/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="../../assets/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="../../assets/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="../../assets/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="../../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="../../assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="../../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- end - This is for export functionality only -->
	<script type="text/javascript">
$(function(){
	
 });
</script>
<script>
	$(".select2").select2();
    // MAterial Date picker    
    $('#datefrom').bootstrapMaterialDatePicker({ weekStart : 0, time: false });
	$('#dateto').bootstrapMaterialDatePicker({ weekStart : 0, time: false });
         $('#timepicker').bootstrapMaterialDatePicker({ format : 'HH:mm', time: true, date: false });
		 
    $('#date-format').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm' });
   
        $('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });
    // Clock pickers
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('.clockpicker').clockpicker({
        donetext: 'Done',
    }).find('input').change(function() {
        console.log(this.value);
    });
    $('#check-minutes').click(function(e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
    // Colorpicker
    $(".colorpicker").asColorPicker();
    $(".complex-colorpicker").asColorPicker({
        mode: 'complex'
    });
    $(".gradient-colorpicker").asColorPicker({
        mode: 'gradient'
    });
    // Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });
    // Daterange picker
    $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-limit-datepicker').daterangepicker({
        format: 'MM/DD/YYYY',
        minDate: '06/01/2015',
        maxDate: '06/30/2015',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse',
        dateLimit: {
            days: 6
        }
    });
    </script>
<script type='text/javascript'>
		function showMessage(){
				alert("Hello friends, this is message.");
				$('#datefrom').val('');
				$('#dateto').val('');
				$("#showroom").select2("val", "0");
				$("#inspection").select2("val", "0");
				var table = $('#myTable').DataTable();
				   table.clear().draw();
				   //destroy datatable
				   table.destroy();

			}

       function getdata()
	   {
		   var data = document.getElementById("carmake").value;
		   $('#carmodel').empty();
		   
			$.ajax({
                    url: 'getmodels_2.php',
                    type: 'POST',
                    data: {id : data},
                    dataType: 'json',
					//contentType: "application/json; charset=utf-8",
                    success:function(result){
						//window.alert(result);
						var newOption = new Option("---Select Car Model---", "", true, true);
						// Append it to the select
						$('#carmodel').append(newOption).trigger('change');
						var myDDL = document.getElementById("carmodel");
						
							
						for (i = 0; i < result.length; i++) {
						var value = result[i][0];
						var option = document.createElement("option");
						option.text = result[i].name;
						//window.alert(result[i].name);
 
						option.value = result[i].id;
						
						try {
								myDDL.options.add(option);
								
								//window.alert(option);
							}
						catch (e) {
							alert(e);
							}
						}
                    },
					error: function (xhr, ajaxOptions, thrownError) {
						alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
						alert("responseText: "+xhr.responseText);
					}
                });
	   }
	   
	   
	   function getfilter()
	   {
		   var datefrom = document.getElementById("datefrom").value;
		   var dateto = document.getElementById("dateto").value;
		   var showroom = document.getElementById("showroom").value;
		   var inspection = document.getElementById("inspection").value;
		   
		   var table = $('#myTable').DataTable();
		   table.clear().draw();
		   //destroy datatable
		   table.destroy();
		   
		   //window.alert(carmake);
		   //$('#carmodel').empty();
		   //$('#card-content').empty();
		   
			$.ajax({
                    url: 'filterdata_2.php',
                    type: 'POST',
                    data: {id : datefrom,id2 : dateto,id3 : showroom,id4 : inspection},
                    dataType: 'json',
					
					//window.alert(id2);
                    success:function(result){
						//window.alert(result);
                        // var carid = result.data[0]['carid'];
                        // var length= result.data.length;
                        // // alert(length);
                        // var check="mdi-close";
                        // var button="btn-danger";
                        // if(status==2){
                        //     var check = "mdi-check";
                        //     var button = "btn-success";
                        // }

						$('#myTable').DataTable( {
							"destroy": true,
							"language": {
									"zeroRecords": "No Data Found",
									"infoEmpty": "No Data Found",
								},
						"ajax": "objects.txt",
							"columns": [
								{ "data": "orgname" },
								{ "data": "dealtitle" },
								{ "data": "showroomdemand" },
								{ "data": "location" },
								{ "data": "contact" },
								{ "data": "leaddate" },
								{ "data": "carid" },
								{ "data": "carnumber" },
								{ "data": "carmake" },
								{ "data": "carmodel" },
								{ "data": "carvariant" },
								{ "data": "mfgyear" },
								{ "data": "regyear" },
								{ "data": "os" },
								{ "data": "color" },
								{ "data": "km" },
								{ "data": "fuel" },
								{ "data": "inspected" },
								// { "data": "leadstatus" },
                                {"data": "carid",
                                 "data": "leadstatus",
                                "width": "50px", "render": function (data, type, row, meta) {
                                    var status= row.leadstatus;
                                    var check="mdi-close";
                                    var button="btn-danger";
                                    var title="Cancel inspection";
                                    if(status==2){
                                        var check = "mdi-check";
                                        var button = "btn-success";
                                    }
                                return '<button id="status'+row.carid+'" onClick="filterStatus(this.id)" type="button" class="btn '+button+' btn-circle"  title="Change Status"><i class="mdi '+check+'" id="iconstatus'+row.carid+'"></i> </button>';
                         }}
							],
                            // "aoColumnDefs"  : [
                            //     {
                            //         "aTargets": [19],    // Column number which needs to be modified
                            //         mRender: function (o, v) { 
                            //           // o, v contains the object and value for the column
                            //             return '<button type="button" class="btn '+button+' inspectCheck" id="status'+v.carid+'" title="Change Status"><i class="mdi '+check+'" id="iconstatus'+carid+'"></i> </button>';
                            //         },
                            //         "sClass": 'tableCell'    // Optional - class to be applied to this table cell
                            //     }]
					} );
                    },
					error: function (xhr, ajaxOptions, thrownError) {
						//alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
						//alert("responseText: "+xhr.responseText);
					}
                });
	   }
    </script>
    <script>
    $(document).ready(function() {
		$(".select2").select2();
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
        //getfilter();
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>


<!-- Script for inspect checkbox -->
<script src="inspect.js"></script>

<!--Toast JS-->
    <script src="../../assets/plugins/toast-master/js/jquery.toast.js"></script>
    <script src="../js/toastr.js"></script>


</body>
</html>
