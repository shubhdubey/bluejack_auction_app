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
    <title>Bluejack | Brands</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <link href="../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="../assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
    <link href="../assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css">
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
                        <li> <a class="waves-effect waves-dark" href="dealers.php" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Dealers</span></a>
                            
                        </li>
                        <li> <a class="waves-effect waves-dark" href="cars.php" aria-expanded="false"><i class="mdi mdi-car"></i><span class="hide-menu">All Cars</span></a>
                            
                        </li>
                        <li class="active"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-car-connected"></i><span class="hide-menu">Masters</span></a>
                            <ul aria-expanded="true" class="collapse in">
                                <li class="active"><a class="active" href="app-email.html">Brands</a></li>
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
                        <h3 class="text-themecolor">Brands</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Brands</li>
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
                <h4 class="card-title">All Models</h4>
                <div>
                    <button type="button" id="addButton" class="btn btn-outline-success" style="float:right; margin-right:2em;"><i class="mdi mdi-database-plus"></i> Add new brand</button>
                    <div>
                        <form id="addBrandForm" style="display:none">
                                                <div class="row form-group">
                                                    <div class="form-group col-md-8 m-b-40 row" id="divNameBrand">
                                                        <label class="control-label col-md-3"></label>
                                                        <input type="text" id="brandName" class="form-control col-md-8" placeholder="Name of the brand">

                                                    </div>
                                                    <div >
                                                        <button type="button" id="saveButtonBrand" class="btn btn-danger waves-effect waves-light"><i class="fa fa-plus"></i> Add brand</button>
                                                        <button type="button" id="closeButtonBrand" class="btn btn-default waves-effect" >Cancel</button>
                                                        
                                                    </div>
                                                </div>
                        </form>
                        <form id="addCarForm" style="display:none">
                                                <div class="row form-group">
                                                    <div class="form-group col-md-8 m-b-40 row" id="divNameCar">
                                                        <label class="control-label col-md-3"></label>
                                                        <input type="text" id="carName" class="form-control col-md-8" placeholder="Name of the car">

                                                    </div>
                                                    <div >
                                                        <button type="button" id="saveButtonCar" class="btn btn-danger waves-effect waves-light"><i class="fa fa-plus"></i> Add car</button>
                                                        <button type="button" class="btn btn-default waves-effect closeButtonCar" >Cancel</button>
                                                        
                                                    </div>
                                                </div>
                        </form>
                    </div>
                    <div class="table-responsive m-t-40">
                                   <table id="myTable" class="table table-bordered">
                                        <thead>
                                            <tr role="row"  ><th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">S. No.</th>
                                                <th class="sorting " tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 300px;">Brand</th>
                                                <th  tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width:400px;">Cars</th>
                                                <th  tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width:400px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                         
                                            
                                            
<?php
$sql="SELECT *  FROM carmake";
$run_query=mysqli_query($conn,$sql);
$row_count=mysqli_num_rows($run_query);

?>                                            
                           
                                   <?php
                                        while($row=mysqli_fetch_array($run_query)){
                                            echo "<tr role='row' id='brandRow".$row['id']."'> <td class='sorting_1'>".$row['id']."</td> <td>".strtoupper($row['carmake'])."</td>";
                                            $sql3="SELECT id,carmodel from carmodel where carmakeid=".$row['id'];
                                            $sql3_res=mysqli_query($conn,$sql3);
                                            echo "<td>";
                                            while($row3=mysqli_fetch_array($sql3_res)){
                                                echo "<div id='divModel".$row3['id']."' class='input-group  m-t-20 m-b-30'> <span class='input-group-addon'>".strtoupper($row3['carmodel'])."</span>";
                                                echo "<input type='text' value='";
                                                $sql4="SELECT id,carvariant from carvariant where carmodelid=".$row3['id'];
                                                $sql4_res=mysqli_query($conn,$sql4);
                                                while($row4=mysqli_fetch_array($sql4_res)){
                                                    echo $row4['carvariant'].",";

                                                }
                                                echo "' id='model".$row3['id']."' class='variantTag' data-role='tagsinput' placeholder='Add variant' style='display: none;'>";
                                                echo "<i class='mdi mdi-close removeModel' id='deleteModel".$row3['id']."'></i>
                                                    </div>
                                                
                                                ";
                                                
                                                }
                                                echo "</td><td class='carAction'><button class='btn btn-sm btn-outline-success addCar' id='addModel".$row['id']."'><i class='fa fa-plus'></i> Add Car</button>
                                                    <button class='btn btn-sm btn-outline-danger removeBrand' id='removeBrand".$row['id']."'><i class='fa fa-times'></i> Remove Brand</button>
                                                </td>
                                        </tr>";
                                        }

                                   ?>     
                                            
</tbody>
                                    </table></div>
                    </div>
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
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- ============================================================== -->
    <script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/multiselect/js/jquery.multi-select.js"></script>
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


$(document).ready(function(){
    $("#addButton").click(function(){
        document.getElementById('addBrandForm').style.display = 'block';
        document.getElementById('addButton').style.display='none';

    });
    $(".addCar").click(function(){
        document.getElementById('addCarForm').style.display='block';
        document.getElementById('addButton').style.display='none';
        window.scrollTo(0,0);
        var del=this.id;
        var lastChar = del.substring(8);
        addModelId = lastChar;

    });

    $("#closeButtonBrand").click(function(){
        document.getElementById('addBrandForm').style.display='none';
        document.getElementById('addButton').style.display='block';
    });

    $(".closeButtonCar").click(function(){
        document.getElementById('addCarForm').style.display='none';
        document.getElementById('addButton').style.display='block';
    });
    $("#saveButtonCar").click(function(){
        document.getElementById('addCarForm').style.display='none';
        document.getElementById('addButton').style.display='block';
        var id=addModelId;
        var name = document.getElementById('carName').value;
        if(!name){
            alert("Enter a valid model name");
        }
        else{
                    $.ajax({
                    url: 'addmodel.php',
                    type: 'GET',
                    data: {name : name, id:id},
                    dataType: 'json',
                    //contentType: "application/json; charset=utf-8",
                    success:function(result){
                        //window.alert(result);
                        if(result.status=="1"){
                            alert("Successfully added");
                        }
                        else{
                            alert("Try again later");
                        }
                        
                        
                        }
                    ,
                    error: function (xhr, ajaxOptions, thrownError) {
                    }

                });
                    location.reload();
                    
                }

    });


    $("#saveButtonBrand").click(function(){
        var name=document.getElementById('brandName').value;
        if(!name){
            alert("Enter a valid brand name");
        }
        else{
                    $.ajax({
                    url: 'addbrand.php',
                    type: 'GET',
                    data: {name : name},
                    dataType: 'json',
                    //contentType: "application/json; charset=utf-8",
                    success:function(result){
                        //window.alert(result);
                        if(result.status=="1"){
                            alert("Successfully added");
                        }
                        else{
                            alert("Try again later");
                        }
                        
                        
                        }
                    ,
                    error: function (xhr, ajaxOptions, thrownError) {
                    }

                });
                    location.reload();
                    window.scrollTo(0,document.body.scrollHeight);
                    document.getElementById('addBrandForm').style.display='none';
                    document.getElementById('addButton').style.display='block';
 
                }
            });


//Remove Model Script
            $('.removeModel').click(function(e){
                e.preventDefault();
                var delModel=confirm("You want to remove the model?");
                if(delModel==true){
                    var del=this.id;
                    var lastChar = del.substring(11);
                    var del='#divModel'+lastChar;
                    $(del).remove();
                    $.ajax({
                        type: "GET",
                        url: "removeModel.php",
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



//Remove Brand Script
            $('.removeBrand').click(function(e){
                e.preventDefault();
                var delBrand=confirm("You wish to delete brand?");
                if(delBrand==true){
                    var del=this.id;
                    var lastChar = del.substring(11);
                    var del='#brandRow'+lastChar;
                    $(del).remove();
                    $.ajax({
                        type: "GET",
                        url: "removeBrand.php",
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






//Add Variant Script
            $('.variantTag').on('itemAdded',function(event){
                var del=this.id;
                var name=event.item;
                var lastChar = del[del.length -1];
                alert(lastChar);
                $.ajax({
                    type:"GET",
                    url: "variantAdd.php",
                    data :{id:lastChar,name:name},
                    cache:false,
                    dataType:'json',
                    success: function(data){
                        if(data.status=='1'){
                            alert('Success');
                        }
                    },
                    error:function(err){
                        alert(err);
                    }
                });
                
            });

//Remove Variant Script
            $('.variantTag').on('itemRemoved',function(event){
                var del=this.id;
                var name=event.item;
                var lastChar = del[del.length -1];
                alert(lastChar);
                $.ajax({
                    type:"GET",
                    url: "variantRemove.php",
                    data :{id:lastChar,name:name},
                    cache:false,
                    dataType:'json',
                    success: function(data){
                        if(data.status=='1'){
                            alert('Success');
                        }
                    },
                    error:function(err){
                        alert(err);
                    }
                });
                
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




});
    
</script>

<script>

     
    </script>









<style>
#addBrandForm,#addCarForm {
    margin-top: 2em;
}

.carAction button{
    margin-top: 3em;
    margin-left: 1em;
}

.card{font-size: 0.92rem;}
#myTable_wrapper{
    margin-top: 1em;
}

td .mdi-close{
    color: #fc4b6c;
    height: max-content;
    font-size: 1.5em;
    cursor: pointer;
}

</style>

</html>