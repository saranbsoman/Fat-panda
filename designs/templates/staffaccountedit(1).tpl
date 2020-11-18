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
                
                    
               <a href="staffaccount.php"><font color=red><button class="btn btn-outline-dark btn-sm">Back</button></font></a></font>
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
                                            
                                            
                                          <tr>  <td>   <b>Address </b></td><td><input type="text" name="pin" value="{$b.address}" required="" class="form-control"></td></tr>
                                       
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
                                        <a href="staffaccountedit.php"><button class="btn btn-primary">Update</button></a></center>
                            
                            </form>
                        
                        {/foreach}</center>
                    </form>
                   
            </div>
        </div>
    </section>

	{literal}<script type="text/javascript" src="userprofile/web/js/smoothbox.jquery2.js"></script>{/literal}
</body>
</html>