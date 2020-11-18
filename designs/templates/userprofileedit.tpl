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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    
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
                
                    
                <a href="userprofile.php"><font color=red><button class="btn btn-outline-dark btn-sm">Back</button></font></a></font>
<!-- <h3>test1</h3> --><center>
                    {foreach from=$view item="b"}
                    <!-- <h3>test2</h3> -->
                    <form method="post" action="" enctype="multipart/form-data">
                    <input type="hidden" name="hide" value="h">
                        <div class="abt-agile">
                            <div class="abt-agile-left">
                                    <img src="{$b.image}" class="rounded-circle" alt="Cinque Terre" height="180px" width="180px">
                            </div>
                            
                            <div class="abt-agile-left"><br>
                                <table >

                                <!-- <h3>test2</h3> -->
                                
                               
                                          <tr>  <td><b>Name </b></td><td><input type="text" name="name" value="{$b.name}" required="" class="form-control"></td></tr>
                                            
                                            
                                          <tr>  <td>   <b>Pin code </b></td><td><input type="text" name="pin" value="{$b.pin}" required="" class="form-control"></td></tr>
                                       
                                         <tr>  <td>    <b>Number </b></td><td><input type="text" name="no" value="{$b.no}" required="" class="form-control"></td></tr>
                                            
                                        <tr>  <td>     <b>Profile Picture </b></td><td><input type="file" name="img"  required="" class="form-control"></td></tr>
                                            
                                         <tr>  <td>    <b>Gender </b></td>
                                            <td><input type="radio" name="gender" value="male">Male
                                            <input type="radio" name="gender" value="female">Female</td></tr>

                                          </table>          
                                        
                            </div>
                            
                                <div class="clear"></div>
                        </div>

                                <center><a href="deactivated.php"><button class="btn btn-danger btn-sm">Delete Account</button></a>
                                        <a href="userprofileedit.php"><button class="btn btn-primary">Update</button></a></center>
                            
                            </form>
                        
                        {/foreach}</center>
                    </form>
                   
            </div>
        </div>
    </section>{literal}
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