<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/modern/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jul 2019 06:31:33 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="panel/bt4/admin/assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    
    <!-- page css -->
    <link href="panel/bt4/admin/dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="panel/bt4/admin/dist/css/style.min.css" rel="stylesheet">
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>{literal}
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   <!--  <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">loading</p>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
   <!--  <section id="wrapper" class="login-register login-sidebar" style="background-image:url(panel/bt4/admin/assets/images/background/login-register.jpg);"> -->
    <section><br><br><br><br><br><br>
        <div class="login-box card">
            <div class="card-body">
                <center><h2>Change Password</h2></center>
                <form method="post" class="form-horizontal form-material text-center" id="loginform" action="">
                    <!-- <a href="javascript:void(0)" class="db"><img src="panel/bt4/admin/assets/images/logo-icon.png" alt="Home" /><br/><img src="panel/bt4/admin/assets/images/logo-text.png" alt="Home" /></a> -->
                    <input type=hidden value='h' name='hide'>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" name="opass" type="password" required="" placeholder="Old Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="npass" type="password" required="" placeholder="New Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="cpass" type="password" required="" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <!-- <div class="d-flex no-block align-items-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                </div> 
                                <div class="ml-auto">
                                    <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> Forgot pwd?</a> 
                                </div>
                            </div> -->   
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-success btn-lg btn-block text-uppercase btn-rounded" type="submit">Change Password</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                           <!--  <div class="social">
                                <button class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook-f"></i> </button>
                                <button class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus-g"></i> </button>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            Don't have an account? <a href="pages-register2.html" class="text-primary m-l-5"><b>Sign Up</b></a>
                        </div>
                    </div> -->
                </form>
                <form class="form-horizontal" id="recoverform" action="http://eliteadmin.themedesigner.in/demos/bt4/modern/index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="panel/bt4/admin/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="panel/bt4/admin/assets/node_modules/popper/popper.min.js"></script>
    <script src="panel/bt4/admin/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    {/literal}
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/modern/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jul 2019 06:31:33 GMT -->
</html>