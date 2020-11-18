<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Consultancy Profile Widget Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Consultancy Profile Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
{literal}
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- js -->
<script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/sliding.form.js"></script>
{/literal}
<!-- //js -->
<link href="userprofile/web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="userprofile/web/css/font-awesome.min.css" />
<link rel="stylesheet" href="userprofile/web/css/smoothbox.css" type='text/css' media="all" />
<link href="//fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="panel/bt4/admin/dist/css/style.min.css" rel="stylesheet">
</head>
<body>
	
	

					



					

		<section><br><br><br><br><br><br>
        <div class="login-box card">
            <div class="card-body">
               <center> <a href="staffview.php"><button><font color=red><span>Home</span></font></button></a>
                        <a href="staffaccountedit.php"><Button><font color=green><span>Edit Profile</span></font></Button></a></font>
                    {foreach from=$view item="b"}
                    <legend>{$b.name}</legend>
                        <div class="abt-agile">
                            <div class="abt-agile-left">
                                    <img src="{$b.image}" class="rounded-circle" alt="Cinque Terre" height="180px" width="180px">
                            </div>
                            <div class="abt-agile-right">

                                <h3></h3>
                                
                               
                                       
                                        
                                          
                                        
                                 
                                           <b>Address </b>: {$b.address}<br>

                                        
                                 
                                        
                                 
                                           <b>Contact no </b>: {$b.no}<br>

                                        
                                 
                                           <b>Gender </b>: {$b.gender}<br>

                                        
                                 
                                           
                                       
                            </div>
                                <div class="clear"></div>
                        </div>
                        {/foreach}</center>
                    <!-- <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit">Log In</button>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                           <!--  <div class="social">
                                <button class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook-f"></i> </button>
                                <button class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus-g"></i> </button>
                            </div> -->
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <!-- <div class="col-sm-12 text-center">
                            Don't have an account? <a href="pages-register2.html" class="text-primary m-l-5"><b>Sign Up</b></a>
                        </div> -->
                    </div>
                </form>
               
            </div>
        </div>
    </section>
					
					

	{literal}<script type="text/javascript" src="userprofile/web/js/smoothbox.jquery2.js"></script>{/literal}
</body>
</html>