<!DOCTYPE html>
<html lang="en">





<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/material/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Dec 2017 18:12:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Bluejack | Login</title>
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

<body>
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
    <section id="wrapper">
        <div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">        
            <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform"  method="GET">
                    <h3 class="box-title m-b-20">Sign In</h3>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input name="useremail" id="useremail" class="form-control" type="text" required="" placeholder="username@bluejack.in"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input name="userpass" id="userpass" class="form-control" type="password" required="" placeholder="password"> </div>
                    </div>
                    <small id="incorrectText" style="display:none">
                        <div class="form-group has-danger">
                            <div class="form-control-feedback">Sorry, the details don't match. Try again?</div>
                        </div>
                    </small>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button id="submit" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                    
                </form>
            </div>
          </div>
        </div>
        
    </section>
<script src="../assets/plugins/jquery/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {


$('#submit').click(function(e){
    e.preventDefault();
    var email = $("#useremail").val();
    var pass = $("#userpass").val();
    if (email == '' || pass=='') {
    alert("All fields are compulsary");
    } else {
    // AJAX code to submit form.
    $.ajax({
    type: "GET",
    url: "userlogin.php",
    data: {email:email,pass:pass},
    cache: false,
    dataType: 'json',
    success: function(data) {
        if(data.id=="-1"){
        document.getElementById('incorrectText').style.display='block';}
        else{
        document.getElementById('incorrectText').style.display='none';
        window.location="index.php";
    }

    },
    error: function(err) {
    alert(err);
    }
    });
    }

});

});
 
  </script>




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
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/material/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Dec 2017 18:12:53 GMT -->
</html>