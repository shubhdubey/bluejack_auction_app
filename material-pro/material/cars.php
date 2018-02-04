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
    <title>Bluejack | Cars</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Commented Date Pickers
    <link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <! chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">

    <!-- Commented Date Pickers
    <link href="../assets/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <! Date picker plugins css 
    <link href="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <! Daterange picker plugins css 
    <link href="../assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <! Custom CSS -->
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
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
                        <li> <a class="waves-effect waves-dark" href="dealers.php" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Dealers</span></a>
                            
                        </li>
                        <li> <a class="active waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-car"></i><span class="hide-menu">All Cars</span></a>
                            
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
                        <h3 class="text-themecolor">All Cars</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Cars</li>
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
                
                <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Cars</h4>
                                <div><button type="button" id="addButton" class="btn btn-outline-success" style="float:right; margin-right:2em;display:block;"><i class="mdi mdi-shape-circle-plus"></i> Add a car</button>
                                <form id="addCarForm" class="form-material m-t-40" style='display:none;'>
                                    <h4 style="text-align:center;">Add a new car</h4>
                                    <p style="text-align:center;"><span  class="help"><small>* All fields are compulsory</small></span></p>
                                            <div class="row">
                                                    <div class="form-group col-md-6" id="divBrand">
                                                        <label for="name">Brand</label>
                                                        <select name="brand"  class="form-control" id="brand" required>
                                                            <option selected="selected" value="">-- Select an option --</option>
                                                            <?php
                                                                $select = "SELECT id,carmake from carmake";
                                                                $sel_result = mysqli_query($conn,$select);
                                                                while ($row=mysqli_fetch_array($sel_result)) {
                                                                    # code...
                                                                    echo "<option value='" . $row['id']."'>".ucwords($row['carmake'])."</option>";

                                                                }
                                                            ?>
                                                        </select>    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divCar">
                                                        <label for="car">Car</label>
                                                        <select name="car"  class="form-control" id="car" required>
                                                            
                                                        </select>    
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="form-group col-md-6" id="divVariant">
                                                        <label for="variant">Variant Name</label>
                                                        <select name="variant"  class="form-control" id="variant" required>
                                                            
                                                        </select>    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divYear">
                                                        <label for="year">Model Year</label>
                                                        <select name="year"  class="form-control" id="year" required>
                                                            <option value='' selected='selected'></option>
                                                        </select>    
                                                    </div>
                                            </div>
                                            <div class="row"> 
                                                  <div class="form-group col-md-6" id="divRegState">
                                                        <label for="regState">Registration State</label>
                                                        <select name="regState"  class="form-control" id="regState" required>
                                                            <option></option>
                                                            <option>RJ- Rajasthan</option>
                                                            <option>HR- Haryana</option>
                                                            <option>DL- Delhi</option>
                                                            <option>UP- Uttar Pradesh</option>
                                                        </select>    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divRegNo">
                                                        <label for="regNo">Registration Number</label>
                                                        <input name="regNo" id="regNo" type="text" class="form-control" required>

                                                    </div>
                                            </div>

                                                    <div class="form-group" id="divColor">
                                                        <label for="color">Car Colour</label>
                                                        <input name="color" id="color" type="text" class="form-control" required>
                                
                                                    </div>
                                                    <div class="form-group" id="divFuel">
                                                        <label for="fuel">Fuel Type</label>
                                                        <select name="fuel"  class="form-control" id="fuel" required>
                                                            <option value="Petrol">Petrol</option>
                                                            <option value="Deisel">Deisel</option>
                                                            <option value="Petrol-CNG">Petrol-CNG</option>
                                                        </select>    
                                                    </div>
                                                    <div class="form-group" id="divCNG">
                                                        <label for="cng">CNG</label>
                                                        <select name="cng"  class="form-control" id="cng" >
                                                            <option value="No Cng">No CNG</option>
                                                            <option value="Sequential">Sequential</option>
                                                            <option value="Sequential outside">Sequential from outside</option>
                                                            <option value="Non Sequential">Non Sequential</option>
                                                        </select>    
                                                    </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6" id="divOwnerCount">
                                                        <label for="ownerCount">Owner Count</label>
                                                        <input name="ownerCount" id="ownerCount" type="number" class="form-control" required>

                                                    </div>
                                                    <div class="form-group col-md-6" id="divKm">
                                                        <label for="km">Kilometers Run</label>
                                                        <input name="km" id="km" type="number" class="form-control" placeholder="Kms Run" required>

                                                    </div>
                                                </div>
                                    <h4 style="margin-top:2em; text-align:center; color: black;margin-left:-5em">Bid Details</h4>
                                                <div class="row">
                                                    <div class="form-group col-md-6" id="divDemand">
                                                         <label for="demand">Demand Price </label>
                                                        <input name="demand" id="demand" type="number" class="form-control" placeholder="₹₹₹₹₹₹₹" required>
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divBidStart">
                                                         <label for="bidStart">Bid Start Price </label>
                                                        <input name="bidStart" id="bidStart" type="number" class="form-control" placeholder="₹₹₹₹₹₹₹" required>
    
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6" id="divMaxBid">
                                                         <label for="maxBid">Maximum Bid Amount </label>
                                                        <input name="maxBid" id="maxBid" type="number" class="form-control" placeholder="₹₹₹₹₹₹₹" required>
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divMinBid">
                                                         <label for="minBid">Minimum Bid Amount </label>
                                                        <input name="minBid" id="minBid" type="number" class="form-control" placeholder="₹₹₹₹₹₹₹" required>
    
                                                    </div>
                                                </div>
                                    
                                                    <div class="row">
                                                        <div class='col-md-3'>
                                                            <div class="form-group">
                                                                    <label>Bid Start Date</label>
                                                                    <input id="startDate" type='text' class="form-control" data-mask="9999-99-99" required>
                                                                    
                                                                
                                                            </div>
                                                        </div>
                                                        <div class='col-md-3'>
                                                            <div class="form-group">
                                                                    <label>Bid Start Time</label>
                                                                    <input id="startTime" type='text' class="form-control" data-mask="99:99" placeholder="20:20" required>
                                                                    
                                                                
                                                            </div>
                                                        </div>
                                                        <div class='col-md-3'>
                                                            <div class="form-group">
                                                                    <label>Bid End Date</label>
                                                                    <input id="endDate" type='text' class="form-control" data-mask="9999-99-99" required>
                                                                    
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                        <div class='col-md-3'>
                                                            <div class="form-group">
                                                                    <label>Bid End Time</label>
                                                                    <input id="endTime" type='text' class="form-control" data-mask="99:99" placeholder="20:20" required>
                                                                    
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        <h4 style="margin-top:2em; text-align:center; color: black;margin-left:-3em;margin-bottom:2em">Inspection Report</h4>
                                                    
                                                <div class="form-group">
                                                        <div class="row">
                                                        <div class="col-md-2">

                                                            <label class="control-label">Accidental</label>
                                                        </div>
                                                        <div class="col-md-2">
                                                        <label class="custom-control custom-radio">
                                                            <input value="Yes" id="radYes" name="radioAccident" type="radio"  class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Yes</span>
                                                        </label>
                                                        </div>
                                                        <div class="col-md-2">
                                                        <label class="custom-control custom-radio">
                                                            <input value="No" id="radNo" name="radioAccident" type="radio" checked="" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">No</span>
                                                        </label>
                                                        </div>
                                                    
                                                </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-6" id="divEngine">
                                                         <label for="engine">Engine Condition </label>
                                                        <input name="engine" id="engine" type="text" class="form-control"required>
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divSuspension">
                                                         <label for="suspension">Suspension Condition </label>
                                                        <input name="suspension" id="suspension" type="text" class="form-control"  required>
    
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6" id="divPaint">
                                                         <label for="paint">Paint Condition </label>
                                                        <input name="paint" id="paint" type="text" class="form-control"  required>
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divTyre">
                                                         <label for="tyre">Tyre Condition </label>
                                                        <input name="tyre" id="tyre" type="text" class="form-control"  required>
    
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6" id="divWindow">
                                                         <label for="window">Window Windsheild Condition </label>
                                                        <input name="window" id="window" type="text" class="form-control"  required>
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divLight">
                                                         <label for="light">Light Condition </label>
                                                        <input name="light" id="light" type="text" class="form-control" required>
    
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <div class="row">
                                                        <div class="col-md-2">

                                                            <label class="control-label">Service Record</label>
                                                        </div>
                                                        <div class="col-md-2">
                                                        <label class="custom-control custom-radio">
                                                            <input value="Available" id="radYesService" name="radioService" type="radio" checked="" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Available</span>
                                                        </label>
                                                        </div>
                                                        <div class="col-md-2">
                                                        <label class="custom-control custom-radio">
                                                            <input value="Not Available" id="radNoService" name="radioService" type="radio"  class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Not Available</span>
                                                        </label>
                                                        </div>
                                                    
                                                </div>
                                                </div>
                                                <div class="row">
                                                        <div class="form-group col-md-6" id="divInsurance">
                                                         <label for="insurance">Insurance</label>
                                                        <input name="insurance" id="insurance" type="text" class="form-control" required>
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divInsType">
                                                         <label for="insType">Insurance Type </label>
                                                        <input name="insType" id="insType" type="text" class="form-control" required>
    
                                                    </div>
                                                </div>
                                                <div class="row">
                                                        <div class="form-group col-md-6" id="divDents">
                                                         <label for="dents">Dents</label>
                                                        <input placeholder="Rusting Info" name="dents" id="dents" type="text" class="form-control" required>
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divTotal">
                                                         <label for="total">RFC Total Amount </label>
                                                        <input name="total" id="total" type="text" class="form-control" required>
    
                                                    </div>
                                                </div>
                                                <div class="" style="margin-bottom:1em;margin-top:1em;">
                                                    <h3 style="text-align:center;">RFC</h4>
                                                        

                                                </div>
                                                <div id="rfcContainer" style="margin-bottom:1em;">
                                                    <div class="row" id='divRFC1'>
                                                            <div class="form-group col-md-6" id="divDetails1">
                                                             <label for="details1">RFC Details</label>
                                                            <input name="details1" id="details1" type="text" class="form-control">
        
                                                        </div>
                                                        <div class="form-group col-md-6" id="divAmount1">
                                                             <label for="amount1">RFC Amount </label>
                                                            <input name="amount1" id="amount1" type="text" class="form-control">
        
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom:2em;">
                                                    <div class='col-md-4'></div>
                                                    <div class="col-md-2">
                                                            <button type="button" id="rfcPlus" class="btn btn-outline-primary "><i class="mdi mdi-plus"> Add RFC</i> </button>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <button type="button" id="rfcMinus" class="btn btn-outline-secondary "><i class="mdi mdi-window-close"> Remove RFC</i> </button>
                                                        </div>
                                                </div>
                                                
                                                <div class="row">
                                                        <div class="form-group col-md-6" id="divTest">
                                                         <label for="test">Test Drive Result</label>
                                                        <input name="test" id="test" type="text" class="form-control">
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divWork">
                                                         <label for="work">Work Done on Car </label>
                                                        <input name="work" id="work" type="text" class="form-control">
    
                                                    </div>
                                                </div>
                                                <div class="row form-control">
                                                        <div class="form-group" id='divRemark'>
                                                        <label for="remark">Remarks</label>
                                                        <input name="remark" id="remark" type="text" class="form-control">
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <label>Upload Car Images</label>
                                                        <input type="file" name= 'imageUpload[]' multiple='' class="form-control" id="upload" aria-describedby="fileHelp">
                                                    </div>
                                                    <div>
                                                        <button type="button" id="closeButton" class="btn btn-default waves-effect " >Close</button>
                                                        <button type="button" id="saveButton" class="btn btn-danger waves-effect waves-light">Save</button>
                                                    </div>

                                
                                </form>
                                <form id="editCarForm" class="form-material m-t-40" style='display:none;'>
                                    <h4 style="text-align:center;">Update car</h4>
                                    <p style="text-align:center;"><span  class="help"><small>* All fields are compulsory</small></span></p>
                                            <div class="row">
                                                    <div class="form-group col-md-6" id="divBrand2">
                                                        <label for="brand2">Brand</label>
                                                        <select name="brand2"  class="form-control" id="brand2" required>
                                                             
                                                            <?php
                                                                $select = "SELECT id,carmake from carmake";
                                                                $sel_result = mysqli_query($conn,$select);
                                                                while ($row=mysqli_fetch_array($sel_result)) {
                                                                    # code...
                                                                    echo "<option value='" . $row['id']."'>".ucwords($row['carmake'])."</option>";

                                                                }
                                                            ?>
                                                        </select>    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divCar2">
                                                        <label for="car2">Car</label>
                                                        <select name="car2" class="form-control" id="car2" required>
                                                        </select>
                                                                
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="form-group col-md-6" id="divVariant2">
                                                        <label for="variant2">Variant Name</label>
                                                        <select name="variant2"  class="form-control" id="variant2" required>
                                                        </select>    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divYear2">
                                                        <label for="year2">Model Year</label>
                                                        <input name ="year2" id = "year2" type="text" class="form-control" required>
                                                        <!--<select name="year2"  class="form-control" id="year2" required>
                                                            <option></option>
                                                            <option>Honda</option>
                                                        </select> -->  
                                                    </div>
                                            </div>
                                            <div class="row"> 
                                                  <div class="form-group col-md-6" id="divRegState2">
                                                        <label for="regState2">Registration State</label>
                                                        <select name="regState2"  class="form-control" id="regState2" required>
                                                            <option></option>
                                                            <option value="RJ - Rajasthan">Rajasthan</option>
                                                            <option value="HR - Haryana">Haryana</option>
                                                            <option value="DL - Delhi">Delhi</option>
                                                            <option value="UP - Uttar Pradesh">Uttar Pradesh</option>
                                                        </select>    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divRegNo2">
                                                        <label for="regNo2">Registration Number</label>
                                                        <input name="regNo2" id="regNo2" type="text" class="form-control" required>

                                                    </div>
                                            </div>

                                                    <div class="form-group" id="divColor2">
                                                        <label for="color2">Car Colour</label>
                                                        <input name="color2" id="color2" type="text" class="form-control" required>
                                
                                                    </div>
                                                    <div class="form-group" id="divFuel2">
                                                        <label for="fuel2">Fuel Type</label>
                                                        <select name="fuel2"  class="form-control" id="fuel2" required>
                                                            <option>Petrol</option>
                                                            <option>Diesel</option>
                                                            <option>Petrol-CNG</option>
                                                        </select>    
                                                    </div>
                                                    <div class="form-group" id="divCNG2">
                                                        <label for="cng2">CNG</label>
                                                        <select name="cng2"  class="form-control" id="cng2" >
                                                            <option value="No Cng">No CNG</option>
                                                            <option value="Sequential">Sequential</option>
                                                            <option value="Sequential from outside">Sequential from outside</option>
                                                            <option value="Non Sequential">Non Sequential</option>
                                                        </select>    
                                                    </div>
                                                    <div class="form-group" id="divOwnerCount2">
                                                        <label for="ownerCount2">Owner Count</label>
                                                        <input name="ownerCount2" id="ownerCount2" type="number" class="form-control" required>

                                                    </div>
                                                    <div class="form-group" id="divKm2">
                                                        <label for="km2">Kilometers Run</label>
                                                        <input name="km2" id="km2" type="number" class="form-control" placeholder="Kms Run" required>

                                                    </div>
                                    <h4 style="margin-top:2em; text-align:center; color: black;margin-left:-5em">Bid Details</h4>
                                                <div class="row">
                                                    <div class="form-group col-md-6" id="divDemand2">
                                                         <label for="demand2">Demand Price </label>
                                                        <input name="demand2" id="demand2" type="number" class="form-control" placeholder="₹₹₹₹₹₹₹" required>
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divBidStart2">
                                                         <label for="bidStart2">Bid Start Price </label>
                                                        <input name="bidStart2" id="bidStart2" type="number" class="form-control" placeholder="₹₹₹₹₹₹₹" required>
    
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6" id="divMaxBid2">
                                                         <label for="maxBid2">Maximum Bid Amount </label>
                                                        <input name="maxBid2" id="maxBid2" type="number" class="form-control" placeholder="₹₹₹₹₹₹₹" required>
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divMinBid2">
                                                         <label for="minBid2">Minimum Bid Amount </label>
                                                        <input name="minBid2" id="minBid2" type="number" class="form-control" placeholder="₹₹₹₹₹₹₹" required>
    
                                                    </div>
                                                </div>
                                    
                                                    <div class="row">
                                                        <div class="example col-md-4" style="margin-left:20rem">
                                                        <h5 style="text-align:center;color:black" class="box-title m-t-30">Bid Duration</h5>
                                                        <input type="text" style="text-align:center" class="form-control input-daterange-timepicker" name="daterange2" value="01/01/2018 1:30 PM - 01/01/2018 2:00 PM"> 
                                                    </div>
                                                    </div>
                                        <h4 style="margin-top:2em; text-align:center; color: black;margin-left:-3em;margin-bottom:2em">Inspection Report</h4>
                                                    
                                                <div class="form-group">
                                                        <div class="row">
                                                        <div class="col-md-2">

                                                            <label class="control-label">Accidental</label>
                                                        </div>
                                                        <div class="col-md-2">
                                                        <label class="custom-control custom-radio">
                                                            <input id="radYes2" name="radioAccident2" type="radio"  class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Yes</span>
                                                        </label>
                                                        </div>
                                                        <div class="col-md-2">
                                                        <label class="custom-control custom-radio">
                                                            <input id="radNo2" name="radioAccident2" type="radio" checked="" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">No</span>
                                                        </label>
                                                        </div>
                                                    
                                                </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-6" id="divEngine2">
                                                         <label for="engine2">Engine Condition </label>
                                                        <input name="engine2" id="engine2" type="text" class="form-control"required>
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divSuspension2">
                                                         <label for="suspension2">Suspension Condition </label>
                                                        <input name="suspension2" id="suspension2" type="text" class="form-control"  required>
    
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6" id="divSuspension2">
                                                         <label for="paint2">Paint Condition </label>
                                                        <input name="paint2" id="paint2" type="text" class="form-control"  required>
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divTyre2">
                                                         <label for="tyre2">Tyre Condition </label>
                                                        <input name="tyre2" id="tyre2" type="text" class="form-control"  required>
    
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6" id="divWindow2">
                                                         <label for="window2">Window Windsheild Condition </label>
                                                        <input name="window2" id="window2" type="text" class="form-control"  required>
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divLight2">
                                                         <label for="light2">Light Condition </label>
                                                        <input name="light2" id="light2" type="text" class="form-control" required>
    
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <div class="row">
                                                        <div class="col-md-2">

                                                            <label class="control-label">Service Record</label>
                                                        </div>
                                                        <div class="col-md-2">
                                                        <label class="custom-control custom-radio">
                                                            <input id="radYesService2" name="radioService2" type="radio" checked="" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Available</span>
                                                        </label>
                                                        </div>
                                                        <div class="col-md-2">
                                                        <label class="custom-control custom-radio">
                                                            <input id="radNoService2" name="radioService2" type="radio"  class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Not Available</span>
                                                        </label>
                                                        </div>
                                                    
                                                </div>
                                                </div>
                                                <div class="row">
                                                        <div class="form-group col-md-6" id="divInsurance2">
                                                         <label for="insurance2">Insurance</label>
                                                        <input name="insurance2" id="insurance2" type="text" class="form-control" required>
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divInsType2">
                                                         <label for="insType2">Insurance Type </label>
                                                        <input name="insType2" id="insType2" type="text" class="form-control" required>
    
                                                    </div>
                                                </div>
                                                <div class="row">
                                                        <div class="form-group col-md-6" id="divDents2">
                                                         <label for="dents2">Dents</label>
                                                        <input name="dents2" id="dents2" type="text" class="form-control" required>
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divTotal2">
                                                         <label for="total2">RFC Total Amount </label>
                                                        <input name="total2" id="total2" type="text" class="form-control" required>
    
                                                    </div>
                                                </div>

                                                <div class="" style="margin-bottom:1em;margin-top:1em;">
                                                    <h3 style="text-align:center;">RFC</h4>
                                                        

                                                </div>

                                                <div id="rfcContainer2" style="margin-bottom:1em;">
                                                    <div class="row" id='rdivRFC'>
                                                            <div class="form-group col-md-6" id="rdivDetails">
                                                             <label for="rdetails1">RFC Details</label>
                                                            <input name="rdetails1" id="rdetails1" type="text" class="form-control">
        
                                                        </div>
                                                        <div class="form-group col-md-6" id="rdivAmount">
                                                             <label for="ramount1">RFC Amount </label>
                                                            <input name="ramount1" id="ramount1" type="text" class="form-control">
        
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom:2em;">
                                                    <div class='col-md-4'></div>
                                                    <div class="col-md-2">
                                                            <button type="button" id="rfcPlus2" class="btn btn-outline-primary "><i class="mdi mdi-plus"> Add RFC</i> </button>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <button type="button" id="rfcMinus2" class="btn btn-outline-secondary "><i class="mdi mdi-window-close"> Remove RFC</i> </button>
                                                        </div>
                                                </div>

                                               <!---<div class="row">
                                                        <div class="form-group col-md-4" id="divDetails2">
                                                         <label for="details2">RFC Details</label>
                                                        <input name="details2" id="details2" type="text" class="form-control">
    
                                                    </div>
                                                    <div class="form-group col-md-4" id="divAmount2">
                                                         <label for="amount2">RFC Amount </label>
                                                        <input name="amount2" id="amount2" type="text" class="form-control">
    
                                                    </div>
                                                    <div class="row" style="margin-bottom:2em;">
                                                    <div class='col-md-4'></div>
                                                    <div class="col-md-2">
                                                            <button type="button" id="rfcPlus2" class="btn btn-outline-primary "><i class="mdi mdi-plus"> Add RFC</i> </button>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <button type="button" id="rfcMinus2" class="btn btn-outline-secondary "><i class="mdi mdi-window-close"> Remove RFC</i> </button>
                                                        </div>
                                                </div>
                                                    <div class="col-md-1">
                                                        <button type="button" id="rfcPlus2" class="btn btn-info btn-circle editDealer"><i class="mdi mdi-plus"></i> </button>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <button type="button" id="rfcMinus2" class="btn btn-warning btn-circle editDealer"><i class="mdi mdi-minus"></i> </button>
                                                    </div>
                                                </div>-->

                                                <div class="row">
                                                        <div class="form-group col-md-6" id="divTest2">
                                                         <label for="test2">Test Drive Result</label>
                                                        <input name="test2" id="test2" type="text" class="form-control">
    
                                                    </div>
                                                    <div class="form-group col-md-6" id="divWork2">
                                                         <label for="work2">Work Done on Car </label>
                                                        <input name="work2" id="work2" type="text" class="form-control">
    
                                                    </div>
                                                </div>
                                                <div class="row form-control">
                                                        <div class="form-group" id='divRemark2'>
                                                        <label for="remark2">Remarks</label>
                                                        <input name="remark2" id="remark2" type="text" class="form-control">
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <label>Upload more Car Images</label>
                                                        <input type="file" name= 'imageUpload2[]' multiple='' class="form-control" id="upload2" aria-describedby="fileHelp">
                                                    </div>
                                                    <div>
                                                        <button type="button" id="closeButton2" class="btn btn-default waves-effect " >Close</button>
                                                        <button type="button" id="updateButton" class="btn btn-danger waves-effect waves-light">Update</button>
                                                    </div>

                                
                                </form> 

                                

                                
                                </div>
                                    <div class="table-responsive m-t-40">
                                    <div id="myTable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="myTable_length"><label>Show <select name="myTable_length" aria-controls="myTable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="myTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="myTable"></label></div><table id="myTable" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                                        <thead>
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 150px;">Car | Brand</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 180px;">Model</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 100px;">Fuel type</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 100px;">Color</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 70px;">No of owners</th>
                                                
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Contact: activate to sort column ascending" style="width: 70px;">Bid Count</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 140px;">Bid Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" >Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
<?php
$sql="SELECT *  FROM carmaster where cstatus=1";
$run_query=mysqli_query($conn,$sql);
$row_count=mysqli_num_rows($run_query);


?>    
                                            
                                            
                                            
                           
                                            
                                            
                                            
                                            
                                            
                                            <?php
                                            while ($row=mysqli_fetch_array($run_query)) {
                                                                    # code...
                                                                    $sql2="SELECT carmake from carmake where id=".$row['brandname'];
                                                                    $sql2_res=mysqli_query($conn,$sql2);
                                                                    $row2=mysqli_fetch_assoc($sql2_res);
                                                                    $brand_sql=$row2['carmake'];
                                                                    $sql3="SELECT carmodel from carmodel where id=".$row['carmake'];
                                                                    $sql3_res=mysqli_query($conn,$sql3);
                                                                    $row3=mysqli_fetch_assoc($sql3_res);
                                                                    $model_sql=$row3['carmodel'];
                                                                    $sql4="SELECT carvariant from carvariant where id=".$row['carmodel'];
                                                                    $sql4_res=mysqli_query($conn,$sql4);
                                                                    $row4=mysqli_fetch_assoc($sql4_res);
                                                                    $variant_sql=$row4['carvariant'];
                                                                    $year_sql=$row['modelyear'];
                                                                    echo "<tr role='row' id='carRow".$row['id']."' >";
                                                                    $file="location.href='cars/viewCar".$row['id'].".php'";
                                                                    echo "<td class='sorting_1'><button type='button' id='viewCarButton".$row['id']."' class='btn waves-effect waves-light btn-sm btn-success viewcar'>".ucwords($brand_sql)." ".ucwords($model_sql)."</button></td>" ;
                                                                    echo "<td>Variant: ".strtoupper($variant_sql)."<br />"."Year: ".$year_sql."</td>";
                                                                    echo "<td>".$row['fuel']." </td> ";
                                                                    echo "<td>".ucfirst($row['color'])."</td>";
                                                                    echo "<td>".ucfirst($row['owner'])."</td>";
                                                                    echo "<td>".$row['currentbidby']."</td>";
                                                                    echo "<td><div class='btn-group bootstrap-select'>
                                                                                <select class='selectpicker' data-style='form-control btn-secondary' tabindex='-98' id='bidSelect".$row['id']."'>
                                                                                <option value='open'>Open</option>
                                                                                <option value='view'>View only</option>
                                                                                <option value='close'>Closed</option>
                                                                                </select></div></td>";
                                                                    echo "<td><a href='' class='editCar' style='font-size:1.4em; color:#477084' id='editCar".$row['id']."'><i class='mdi mdi-pencil'></i> </a>
                                                    <a href='' class='deleteCar' style='font-size:1.4em; color:#477084' id='deleteCar".$row['id']."'><i class='mdi mdi-delete'></i></a></td>
                                            </tr>";

                                                                }
                                                
                                                /*<td>Accountant</td>
                                                <td>Cars</td>
                                                <td>Black</td>
                                                <td>9</td>
                                                <td>3</td>
                                                <td><div class="btn-group bootstrap-select">
                                                       <select class="selectpicker" data-style="form-control btn-secondary" tabindex="-98">
                                                                <option>Open</option>
                                                                <option>View only</option>
                                                                <option>Closed</option>
                                                            </select></div></td>
                                               <td><a href="" class="editCar" style="font-size:1.4em; color:#477084"><i class="mdi mdi-pencil"></i> </a>
                                                    <a href="" class="deleteCar" style="font-size:1.4em; color:#dd4b39"><i class="mdi mdi-delete"></i></a></td>
                                            </tr>*/
                                            ?></tbody>
                                    </table></div>
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
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
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

    <!-- Page specific JS -->
<script>



//$(document).ready(function(){

/*RFC BUTTONS SCRIPT*/
var rfcCount=1;
$("#rfcPlus").click(function(){
    rfcCount=rfcCount+1;
    $("#rfcContainer").append("<div class='row' id='divRFC"+rfcCount+"'><div class='form-group col-md-6' id='divDetails"+rfcCount+"'> <label for='details"+rfcCount+"'>RFC Details("+rfcCount+")</label><input name='details"+rfcCount+"' id='details"+rfcCount+"' type='text' class='form-control'></div><div class='form-group col-md-6' id='divAmount"+rfcCount+"'> <label for='amount"+rfcCount+"'>RFC Amount("+rfcCount+")</label><input name='amount"+rfcCount+"' id='amount"+rfcCount+"' type='text' class='form-control'></div></div>");
                                                            /*<div class='form-group col-md-4' id='divDetails"+rfcCount+"'>
                                                             <label for='details"+rfcCount+"'>RFC Details</label>
        
                                                        </div>");
                                                        <div class="form-group col-md-4" id="divAmount'+rfcCount+'">
                                                             <label for="amount'+rfcCount+'">RFC Amount </label>
                                                            <input name="amount'+rfcCount+'" id="amount'+rfcCount+'" type="text" class="form-control">
        
                                                        </div></div>");*/
});
$("#rfcMinus").click(function(){
    var remove = "#divRFC"+rfcCount;
    rfcCount=rfcCount-1;
    $(remove).remove();
});



    $("#addButton").click(function(){
        document.getElementById("addCarForm").style.display='block';
        document.getElementById("addButton").style.display = 'none';
    });
    $("#closeButton").click(function(){
        document.getElementById("addButton").style.display='block';
        document.getElementById("addCarForm").style.display='none';
    })
    $("#closeButton2").click(function(){
        document.getElementById("editCarForm").style.display='none';

        document.getElementById("addButton").style.display='block';
    });
   var regNo =document.getElementById('regNo').value;
var color = document.getElementById('color').value;
var km = document.getElementById('km').value;
var demand = document.getElementById('demand').value;
var bidStart = document.getElementById('bidStart').value;
var maxBid = document.getElementById('maxBid').value;
var minBid = document.getElementById('minBid').value;
var total = document.getElementById('total').value;

    $("#saveButton").click(function(){
        if(!regNo || !color || !km || !demand || !bidStart || !maxBid || !minBid || !total){
            alert("All the fields in the form are compulsory. Please check you have filled all.");
        }
        else{
        saveCar();
        document.getElementById("addCarForm").submit();}
    });

</script>


<!--Get Data AJAX -->

<script type='text/javascript'>
        $('#brand').change(function(){
            getdata();
        });
        $('#car').change(function(){
            getvariant();
        });



       function getdata()
       {
           var data = document.getElementById("brand").value;
           $('#car').empty();
           $("#car").prepend("<option value='' selected='selected'></option>");
    
           
            $.ajax({
                    url: 'getmodels.php',
                    type: 'GET',
                    data: {id : data},
                    dataType: 'json',
                    //contentType: "application/json; charset=utf-8",
                    success:function(result){
                        //window.alert(result);
                        var myDDL = document.getElementById("car");
                        
                            
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



       function getvariant(){
        var data = document.getElementById("car").value;
           $('#variant').empty();
           $("#variant").prepend("<option value='' selected='selected'></option>");
    
           
            $.ajax({
                    url: 'getvariant.php',
                    type: 'GET',
                    data: {id : data},
                    dataType: 'json',
                    //contentType: "application/json; charset=utf-8",
                    success:function(result){
                        //window.alert(result);
                        var myDDL = document.getElementById("variant");
                        
                            
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

        $('#car').change(function(){
            for(j=2018;j>1995;j--){
                var carYear=document.getElementById('year');
                var option=document.createElement("option");
                option.text=j;
                option.value=j;
                carYear.options.add(option);

            }
        });
//});
</script>




<!-- Add Car Form AJAX -->
<script type="text/javascript">

function saveCar() {
    var brandname = $("#brand").val();
    var carmake = $('#car').val();
    var carmodel = $('#variant').val();
    var modelyear = $('#year').val();
    var carnumber = $('#regNo').val();
    var regstate = $('#regState').val();
    var demandprice = $('#demand').val();
    var bidstartprice = $('#bidStart').val();
    var accidental = $("input:radio[name ='radioAccident']:checked").val();
    var service = $("input:radio[name ='radioService']:checked").val();
    var cng = $('#cng').val();
    var color = $('#color').val();
    var cengine = $('#engine').val();
    var fuel = $('#fuel').val();
    var insurance = $('#insurance').val();
    var insurancetype = $('#insType').val();
    var kms = $('#km').val();
    var light = $('#light').val();
    var owner = $('#ownerCount').val();
    var paint = $('#paint').val();
    var rfc = $('#total').val();
    var rusting = $('#dents').val();
    var suspension = $('#suspension').val();
    var testdriveresult = $('#test').val();
    var tyres = $('#tyre').val();
    var windowsshield = $('#window').val();
    var workdoneoncar = $('#work').val();
    var remarks = $('#remark').val();
    var bidstartdate = $('#startDate')
    var bidstarttime = $('#startTime').val();
    var bidenddate = $('#endDate').val();
    var bidendtime = $('#endTime').val();
    var maxbid = $('#maxBid').val();
    var minbid = $('#minBid').val();

    if (brandname == '' || carmake=='' || carnumber=='' || carmodel=='') {
    alert("All fields are compulsary");
    } else {
    // AJAX code to submit form.
    $.ajax({
    type: "GET",
    url: "addcar.php",
    data: {brandname:brandname,carmake:carmake,carmodel:carmodel,modelyear:modelyear,carnumber:carnumber,regstate:regstate,demandprice:demandprice,bidstartprice:bidstartprice,accidental:accidental,service:service,cng:cng,color:color,cengine:cengine,fuel:fuel,insurance:insurance,insurancetype:insurancetype,kms:kms,light:light,owner:owner,paint:paint,rfc:rfc,rusting:rusting,suspension:suspension,testdriveresult:testdriveresult,tyres:tyres,windowsshield:windowsshield,workdoneoncar:workdoneoncar,remarks:remarks,bidstartdate:bidstartdate,bidstarttime:bidstarttime,bidenddate:bidenddate,bidendtime:bidendtime,maxbid:maxbid,minbid:minbid},
    cache: false,
    dataType: 'json',
    success: function(data) {
        if(data.status=="1"){
        }
        else{
    }

    },
    error: function(err) {
    alert(err);
    }
    });
    }

for(i=0;i<rfcCount;i++){
    var detailid="#details"+i;
    var detail=$(detailid).val();
    var amountid="#amount"+i;
    var amount=$(amountid).val();
    if(amount!='' && detail!=''){

        $.ajax({
        type: "GET",
        url: "addrfc.php",
        data: {detail:detail,amount:amount},
        cache: false,
        dataType: 'json',
        success: function(data) {
            if(data.status=="1"){
            }
            else{
            }

            },
    error: function(err) {
    alert(err);
    }
    });

    }

}





}

</script>







<!--Update Data AJAX-->








<script>
/*Delete Car Button Script*/
    $('.deleteCar').click(function(e){
        e.preventDefault();
        var delCar=confirm("You want to remove the entry ?");
        if(delCar==true){
            var del=this.id;
            var lastChar = del.substring(7);
            var del="#carRow"+lastChar;
            //alert(del);
            $(del).remove();
            $.ajax({
    type: "GET",
    url: "removeCar.php",
    data: {id:lastChar},
    cache: false,
    dataType: 'json',
    success: function(data) {
        if(data.status=="1"){
            alert('Delete Successful');
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
    //Edit Car Script

    $(".editCar").click(function(e){
        e.preventDefault();
        window.scrollTo(0, 0);
        document.getElementById("addButton").style.display = 'none' ;
        document.getElementById("editCarForm").style.display='block';
        var edit=this.id;
        var lastChar = edit.substring(7); 
            $.ajax({
            type: "GET",
            url: "editCar.php",
            data: {id:lastChar},
            cache: false,
            dataType: 'json',
            success: function(data) {
                document.getElementById('brand2').selectedIndex=parseInt(data.brandname)-1;
                var carmodel = data.carmodel;
                getdata3(carmodel);
                var variant = data.carvariant;
                getvariant3(carmodel,variant);
                document.getElementById('year2').value=data.modelyear;
                document.getElementById('regState2').value=data.regstate;
                document.getElementById('regNo2').value=data.carnumber;
                document.getElementById('color2').value=data.coloR;
                document.getElementById('fuel2').value=data.fuel;
                document.getElementById('cng2').value=data.cng;
                document.getElementById('ownerCount2').value=data.owner;
                document.getElementById('km2').value=data.kms;
                document.getElementById('demand2').value=data.demandprice;
                document.getElementById('bidStart2').value=data.bidstartprice;
                document.getElementById('maxBid2').value=data.maxbid;
                document.getElementById('minBid2').value=data.minbid;
                if(data.accidental=="Yes") {
                    $("#radYes2").prop("checked",true);
                }
                else{
                    $("#radNo2").prop("checked",true);
                }
                if(data.service=="Yes") {
                    $("#radYesService2").prop("checked",true);
                }
                else{
                    $("#radNoService2").prop("checked",true);
                }
                document.getElementById('engine2').value=data.cengine;
                document.getElementById('suspension2').value=data.suspension;
                document.getElementById('paint2').value=data.paint;
                document.getElementById('tyre2').value=data.tyres;
                document.getElementById('light2').value=data.light;
                document.getElementById('insurance2').value=data.insurance;
                document.getElementById('insType2').value=data.insurancetype;
                document.getElementById('dents2').value=data.rusting;
                document.getElementById('test2').value=data.testdriveresult;
                document.getElementById('work2').value=data.workdoneoncar;
                document.getElementById('remark2').value=data.remarks;
                document.getElementById('window2').value=data.windowsshield;
                document.getElementById('total2').value=data.rfc;
            },
            error: function(err) {
                alert(err);
            }
            });


    });
    
    $("#updateButton").click(function(e) {
        e.preventDefault();
        var brandname = $("#brand2").val();
        var carmake = $('#car2').val();
        var carmodel = $('#variant2').val();
        var modelyear = $('#year2').val();
        var carnumber = $('#regNo2').val();
        var regstate = $('#regState2').val();
        var demandprice = $('#demand2').val();
        var bidstartprice = $('#bidStart2').val();
        var accidental = $("input:radio[name ='radioAccident2']:checked").val();
        var service = $("input:radio[name ='radioService2']:checked").val();
        var cng = $('#cng2').val();
        var color = $('#color2').val();
        var cengine = $('#engine2').val();
        var fuel = $('#fuel2').val();
        var insurance = $('#insurance2').val();
        var insurancetype = $('#insType2').val();
        var kms = $('#km2').val();
        var light = $('#light2').val();
        var owner = $('#ownerCount2').val();
        var paint = $('#paint2').val();
        var rfc = $('#total2').val();
        var rusting = $('#dents2').val();
        var suspension = $('#suspension2').val();
        var testdriveresult = $('#test2').val();
        var tyres = $('#tyre2').val();
        var windowsshield = $('#window2').val();
        var workdoneoncar = $('#work2').val();
        var remarks = $('#remark2').val();
        var maxbid = $('#maxBid2').val();
        var minbid = $('#minBid2').val();
        
        // cannot execute the ajax call . Same error as in Adddcar.php AJAX call    
        /*
        $.ajax({ 
                type:"GET",
                url:"updatecar.php",
                async: false,
                data:{brandname:brandname,carmake:carmake,carmodel:carmodel},
                    modelyear:modelyear,
                    carnumber:carnumber,
                    regstate:regstate,
                    demandprice:demandprice,
                    bidstartprice:bidstartprice,
                    accidental:accidental,
                    service:service,
                    cng:cng,
                    color:color,
                    cengine:cengine,
                    fuel:fuel,
                    insurance:insurance,
                    insurancetype:insurancetype,
                    kms:kms,
                    light:light,
                    owner:owner,
                    paint:paint,
                    rfc:rfc,
                    rusting:rusting,
                    suspension:suspension,
                    testdriveresult:testdriveresult,
                    tyres:tyres,
                    windowsshield:windowsshield,
                    workdoneoncar:workdoneoncar,
                    remarks:remarks,
                    maxbid:maxbid,
                    minbid:minbid 
                
                cache:false,
                dataType: 'json',
                success: function(data) {
                    window.alert(data);
                    if(data.status=="1"){
                        echo "Data Succesully Updated!";
                    }
                    else{
                        echo "Data Update Failed !";
                    }
                }, 
                error: function(err) {
                    alert(err);
                }
        }); */
        alert("Working");
    });

</script>

<!--<script type="text/javascript">
    function updateCar() 
    { alert('hj');
        var brandname = $("#brand").val();
        var carmake = $('#car').val();
        var carmodel = $('#variant').val();
        var modelyear = $('#year').val();
        var carnumber = $('#regNo2').val();
        var regstate = $('#regState2').val();
        var demandprice = $('#demand2').val();
        var bidstartprice = $('#bidStart2').val();
        var accidental = $("input:radio[name ='radioAccident2']:checked").val();
        var service = $("input:radio[name ='radioService2']:checked").val();
        var cng = $('#cng2').val();
        var color = $('#color2').val();
        var cengine = $('#engine2').val();
        var fuel = $('#fuel2').val();
        var insurance = $('#insurance2').val();
        var insurancetype = $('#insType2').val();
        var kms = $('#km2').val();
        var light = $('#light2').val();
        var owner = $('#ownerCount2').val();
        var paint = $('#paint2').val();
        var rfc = $('#total2').val();
        var rusting = $('#dents2').val();
        var suspension = $('#suspension2').val();
        var testdriveresult = $('#test2').val();
        var tyres = $('#tyre2').val();
        var windowsshield = $('#window2').val();
        var workdoneoncar = $('#work2').val();
        var remarks = $('#remark2').val();
        var maxbid = $('#maxBid2').val();
        var minbid = $('#minBid2').val();
        
            
        $.ajax({ 
                type: "GET",
                url: "updatecar.php",
                data:{brandname:brandname,
                    carmake:carmake,
                    carmodel:carmodel,
                    modelyear:modelyear,
                    carnumber:carnumber,
                    regstate:regstate,
                    demandprice:demandprice,
                    bidstartprice:bidstartprice,
                    accidental:accidental,
                    service:service,
                    cng:cng,
                    color:color,
                    cengine:cengine,
                    fuel:fuel,
                    insurance:insurance,
                    insurancetype:insurancetype,
                    kms:kms,
                    light:light,
                    owner:owner,
                    paint:paint,
                    rfc:rfc,
                    rusting:rusting,
                    suspension:suspension,
                    testdriveresult:testdriveresult,
                    tyres:tyres,
                    windowsshield:windowsshield,
                    workdoneoncar:workdoneoncar,
                    remarks:remarks,
                    maxbid:maxbid,
                    minbid:minbid 
                },
                cache:false,
                dataType: 'json',
                success: function(data) {
                    window.alert(data);
                    if(data.status=="1"){
                        echo "Data Succesully Updated!";
                    }
                    else{
                        echo "Data Update Failed !";
                    }
                }, 
                error: function(err) {
                    alert(err);
                }
        });       
    }

</script>-->

<script type='text/javascript'>
        $('#brand2').change(function(){
            getdata2();
        });
        $('#car2').change(function(){
            getvariant2();
        });


        function getdata2()
       {
           var data = document.getElementById("brand2").value;
           $('#car2').empty();
           
            $.ajax({
                    url:'getmodels.php',
                    type:'GET',
                    data:{id : data},
                    dataType:'json',
                    //contentType: "application/json; charset=utf-8",
                    success:function(result){
                        var myDDL = document.getElementById("car2");
                        
                            
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
                        alert("datareadyState: "+xhr.readyState+"status: "+xhr.status);
                        alert("responseText: "+xhr.responseText);
                    }
                });
       }



       function getdata3(a)
       {
           var data = document.getElementById("brand2").value;
           $('#car2').empty();
           
            $.ajax({
                    url:'getmodels.php',
                    type:'GET',
                    data:{id : data},
                    dataType:'json',
                    //contentType: "application/json; charset=utf-8",
                    success:function(result){
                        var myDDL = document.getElementById("car2");
                        
                            
                        for (i = 0; i < result.length; i++) {
                        var value = result[i][0];
                        var option = document.createElement("option");
                        option.text = result[i].name;
                        //window.alert(result[i].name);
 
                        option.value = result[i].id;
                        
                        try {
                                myDDL.options.add(option);
                                document.getElementById('car2').value= a;
                                //window.alert(option);
                            }
                        catch (e) {
                            alert(e);
                            }   
                        }
                    },  
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert("datareadyState: "+xhr.readyState+"status: "+xhr.status);
                        alert("responseText: "+xhr.responseText);
                    }
                });
       }



        function getvariant2() {

            var data = document.getElementById("car2").value;
            $('#variant2').empty();

            $.ajax({
                    url: 'getvariant.php',
                    type: 'GET',
                    data: {id : data},
                    dataType: 'json',
                    //contentType: "application/json; charset=utf-8",
                    success:function(result){
                        //window.alert(result);
                        var myDDL = document.getElementById("variant2");
                        
                            
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
                        alert("variantreadyState: "+xhr.readyState+"\nstatus: "+xhr.status);
                        alert("responseText: "+xhr.responseText);
                    }
                });
        }


        function getvariant3(a,b) {
            
            var data = a;
            $('#variant2').empty();
            alert(b);

           
            $.ajax({
                    url: 'getvariant.php',
                    type: 'GET',
                    data: {id : data},
                    dataType: 'json',
                    //contentType: "application/json; charset=utf-8",
                    success:function(result){
                        //window.alert(result);
                        var myDDL = document.getElementById("variant2");
                        
                            
                        for (i = 0; i < result.length; i++) {
                        var value = result[i][0];
                        var option = document.createElement("option");
                        option.text = result[i].name;
                        //window.alert(result[i].name);
 
                        option.value = result[i].id;
                        
                        try {
                                myDDL.options.add(option);
                                document.getElementById('variant2').value=b;
                                //window.alert(option);
                            }
                        catch (e) {
                            alert(e);
                            }
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert("variantreadyState: "+xhr.readyState+"\nstatus: "+xhr.status);
                        alert("responseText: "+xhr.responseText);
                    }
                });
        }

     /*   $('#car2').change(function(){
            for(j=2018;j>1995;j--){
                var carYear=document.getElementById('year2');
                var option=document.createElement("option");
                option.text=j;
                option.value=j;
                carYear.options.add(option);

            }
        });*/

</script>







<script type="text/javascript">
        var d= new Date();
        var date = d.getDate();
        var mon = parseInt(d.getMonth())+1;
        if(mon<10){
            var month='0'+mon;
        }
        var year = d.getFullYear();
        var date = year+'-'+month+'-'+date
        document.getElementById('startDate').placeholder=date;
        date=d.getDate();
        date +=1;
        var date2 = year+'-'+month+'-'+date;
        document.getElementById('endDate').placeholder=date2;
</script>


<script type="text/javascript">
var rfcCount = 1;

$("#rfcPlus2").click(function(){
    rfcCount=rfcCount+1;
    $("#rfcContainer2").append("<div class='row' id='rdivRFC"+rfcCount+"'><div class='form-group col-md-6' id='rdivDetails"+rfcCount+"'> <label for='rdetails"+rfcCount+"'>RFC Details("+rfcCount+")</label><input name='rdetails"+rfcCount+"' id='rdetails"+rfcCount+"' type='text' class='form-control'></div><div class='form-group col-md-6' id='rdivAmount"+rfcCount+"'> <label for='ramount"+rfcCount+"'>RFC Amount("+rfcCount+")</label><input name='ramount"+rfcCount+"' id='ramount"+rfcCount+"' type='text' class='form-control'></div></div>");
                                                            /*<div class='form-group col-md-4' id='divDetails"+rfcCount+"'>
                                                             <label for='details"+rfcCount+"'>RFC Details</label>
        
                                                        </div>");
                                                        <div class="form-group col-md-4" id="divAmount'+rfcCount+'">
                                                             <label for="amount'+rfcCount+'">RFC Amount </label>
                                                            <input name="amount'+rfcCount+'" id="amount'+rfcCount+'" type="text" class="form-control">
        
                                                        </div></div>");*/
});
$("#rfcMinus2").click(function(){
    var remove = "#rdivRFC"+rfcCount;
    rfcCount=rfcCount-1;
    $(remove).remove();
});

/*
var rfcCount={1:true,2:false,3:false,4:false};
var rfcTotal=1;
$('#rfcPlus').click(function(){
    rfcCount[1]=true;
    rfcTotal+=1;
    document.getElementById('divRFC2').style.display='block';
});
$('#rfcPlus2').click(function(){
    rfcCount[2]=true;
    rfcTotal+=1;
    document.getElementById('divRFC3').style.display='block';
});/*
$('#rfcPlus3').click(function(){
    rfcCount[3]=true;
    rfcTotal+=1;
    document.getElementById('divRFC4').style.display='block';
});
$('#rfcPlus4').click(function(){
    rfcCount[3]=true;
    document.getElementById('divRFC4').style.display='block';
});
$('#rfcMinus').click(function(){
    rfcCount[0]:false;
    rfcTotal-=1;
    document.getElementById('divRFC').style.display='none';
});
$('#rfcMinus2').click(function(){
    rfcCount[1]=false;
    rfcTotal-=1;
    document.getElementById('divRFC2').style.display='none';
});/*
$('#rfcMinus3').click(function(){
    rfcCount[2]=false;
    rfcTotal-=1;
    document.getElementById('divRFC3').style.display='none';
});
$('#rfcMinus4').click(function(){
    rfcCount[3]=false;
    rfcTotal-=1;
    document.getElementById('divRFC4').style.display='none';
});
*/

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
    <script src="js/mask.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

 <!-- Plugin JavaScript -->
  <!-- Here Date Pluginssss 
    <script src="../assets/plugins/moment/moment.js"></script>
    <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <! Clock Plugin JavaScript 
    <script src="../assets/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <! Color Picker Plugin JavaScript 
    <script src="../assets/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="../assets/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="../assets/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <! Date Picker Plugin JavaScript 
    <script src="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!Date range Plugin JavaScript 
    <script src="../assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script>
    // MAterial Date picker    
    $('#mdate').bootstrapMaterialDatePicker({ weekStart : 0, time: false });
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
        format: 'YYYY-MM-DD h:mm A',
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
-->
<script type="text/javascript">

 $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });



    </script>



<script>
$(".viewcar").click(function(){
    var id=this.id;
    var lastChar = id[id.length -1];
    alert(lastChar);
    $.ajax({
        type: 'GET',
        url: 'setcarid.php',
        data: { id: lastChar },
        dataType: 'json',
        success: function(data)
        {alert(data);
            var page='viewcar1.php';
            window.location=page;
        
        }
    });

    

});
</script>


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








<style>
/* Removing Spinner in number feilds*/
/* For Firefox */
input[type='number'] {
    -moz-appearance:textfield;
}
/* Webkit browsers like Safari and Chrome */

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

label{color: black;}


#closeButton, #closeButton2{
    margin-left: 30em;
}


.card{font-size: 0.92rem;}
</style>

</html>