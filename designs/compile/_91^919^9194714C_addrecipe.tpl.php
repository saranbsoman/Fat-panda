<?php /* Smarty version 2.6.26, created on 2020-01-28 12:46:31
         compiled from addrecipe.tpl */ ?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<h1>ADD RECIPE</h1>
	<form method="post" action="" enctype="multipart/form-data">
	<table class="table">
	<input type="hidden" name="hide" value="h">
	<tr><td>Category</td><td><input type="radio" name="cat" value="Veg" >Veg
							<input type="radio" name="cat" value="Non-Veg" checked="checked">Non-Veg</td>
	</tr>
	<tr><td>Name</td><td><input type="text" name="name" required=""></td></tr>
	<tr><td>Amount</td><td><input type="text" name="amt" required=""></td></tr>
	<tr><td>Details</td><td><input type="text" name="det" required=""></td></tr>
	<tr><td>Add Photo</td><td><input type="file" name="img" required=""></td></tr>
	</table>	
	<a href="addrecipe.php"><Button class="btn btn-outline-success">Add</Button></a>
	</form>
	</center>	


</body>
</html>
 -->





<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Recipe</title>
<!-- for-mobile-apps -->
<?php echo '
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Event Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- //custom-theme -->
<link href="newreg/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href=\'//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900\' rel=\'stylesheet\' type=\'text/css\'>
</head>
<body>




<!-- banner -->
    <div class="center-container">
        <div class="main">
            <h1 class="w3layouts_head">Add Recipe</h1>

                    <div class="w3-show-inline-block">
<div class="w3-bar w3-light-grey">
    <center>
  <a href="restview.php" class="w3-container w3-sand"><font color="red"><button class="btn btn-danger btn-sm">Home</button></font></a>
  <!-- <a href="restfileupload.php" class="w3-bar-item w3-button"><font color="red"><button class="btn btn-danger btn-sm">Documents</button></font></a> -->
</center>

</div>
</div>

                <div class="w3layouts_main_grid">
                    <form action="" method="post" class="w3_form_post" enctype="multipart/form-data">
                        <input type="hidden" name="hide" value="h">
                        <!-- <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>Restaurant Name </label>
                                <input type="text" name="restname" placeholder="Your Name" required="">
                            </span>
                        </div>
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>Address </label>
                                <textarea name="address" placeholder="Your Address" required=""></textarea>
                            </span>
                        </div>
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>Pin </label>
                                <textarea name="pin" placeholder="Your Pincode" required=""></textarea>
                            </span>
                        </div> -->
                    

                        <!-- <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                            <span class="agileinfo_grid">
                                <label>Date / Time </label>
                                <div class="agileits_w3layouts_main_gridl">
                                    <input class="date" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = \'\';" onblur="if (this.value == \'\') {this.value = \'\';}" required="">
                                </div>
                                <div class="agileits_w3layouts_main_gridr">
                                    <input type="time" name="Time" placeholder=" " required="">
                                </div>
                                    <div class="clear"> </div>
                            </span>
                        </div> -->
                        <!--  <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>City</label>
                                <input type="text" name="city" placeholder="City" required="">
                            </span>
                        </div>
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>Contact No </label>
                                <input type="text" name="no" placeholder="Contact no" required="">
                            </span>
                        </div> -->
                    <div class="content-w3ls">
                        <div class="form-w3ls">
                            <div class="content-wthree2">
                                <div class="grid-w3layouts1">
                                    <div class="w3-agile1">
                                        <label>Category</label>
                                        <ul>
                                            <li>
                                                <input type="radio" id="a-option" name="cat" value="veg">
                                                <label for="a-option">Veg 
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="b-option" name="cat" value="Non-Veg">
                                                <label for="b-option">Not-available</label>
                                                <div class="check"><div class="inside"></div></div>
                                            </li>
                                        </ul>
                                    </div>  
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        
                        <!-- <div class="form-w3ls-1">
                            <div class="grid-w3layouts1">
                                <div class="w3-agile1">
                                    <label>Parking</label>
                                        <ul>
                                            <li>
                                                <input type="radio" id="d-option" name="park" value="available">
                                                <label for="d-option">Available</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="e-option" name="park" value="not available">
                                                <label for="e-option">Not available</label>
                                                <div class="check"><div class="inside"></div></div>
                                            </li>
                
                                        </ul>
                                </div>  
                            </div>      
                        </div> -->
                       <!--  <div class="clear"></div>
                    </div> -->
                       
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Recipe name" required="">
                            </span>
                        </div>

                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                 <label>Amount</label>
                                <input type="text" name="amt" placeholder="Amount" required="">
                            </span>
                        </div>
                    
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>Details</label>
                                <input type="text" name="det" placeholder="Details" required="">
                            </span>
                        </div>
                         <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>Add Photo</label>
                                <input type="file" name="img" placeholder="Upload" required="">
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="w3_main_grid">
                        <div class="w3_main_grid_right">
                            <center><input type="submit" value="Add"></center>
                        </div>
                    </div>
                </form>
            </div>
        <!-- Calendar -->
            <link rel="stylesheet" href="css/jquery-ui.css" />
                <script src="js/jquery-ui.js"></script>
                    <script>
                        $(function() {
                            $( "#datepicker" ).datepicker();
                        });
                    </script>
        <!-- //Calendar -->
            <div class="w3layouts_copy_right">
                <div class="container">
                    <!-- <p>© 2017 Event Registration Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p> -->
                </div>
            </div>
        </div>
    </div>
<!-- //footer -->
'; ?>

</body>
</html>