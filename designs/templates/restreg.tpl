

        	<!-- Registration Form -->


<!-- <html>
<head><title>Registration</title></head>
<center>
<body background="bg1.jpg">
	<br><br><br>
	<h1>REGISTRATION</h1>
	<br><br><br>
		<form method="post" action="" enctype="multipart/form-data">
		<div class="table-responsive">
		<table class="table">
			<input type="hidden" name="hide" value="h">

			<tr>	<td>Restaurant Name</td><td><input type="text" name="restname"></td></tr>
			<tr>	<td>Address</td><td><textarea name='address'></textarea></td></tr>
			<tr>	<td>Pincode</td><td><input type="text" name="pin"></td></tr>
			<tr>	<td>District</td><td><select name="dist">
							<option>Trivandrum</option>
							<option>Kollam</option>
							<option>Alappuzha</option>
							<option>Pattanamthitta</option>
							<option>Kottayam</option>
							<option>Idukki</option>
							<option>Ernakulam</option>
							<option>Thrissur</option>
							<option>Palakkad</option>
							<option>Malappuram</option>
							<option>Kozhikode</option>
							<option>Wayanad</option>
							<option>Kannur</option>
							<option>Kasargod</option>
					</select></td></tr>
			<tr>	<td>City</td><td><input type="text" name="city"></td></tr>
			<tr>	<td>Contact No</td><td><input type="text" name="no"></td></tr>
            <tr><td>Reservation</td><td><input type="radio" name="res" value="Available">Yes</td>
                        <td><input type="radio" name="res" value="Not Available">No</td></tr>

            <tr>    <td>Image</td><td><input type="file" name="img"></td></tr>
			<tr>	<td>Email</td><td><input type="email" name="email"></td></tr>
			<tr>	<td>Password</td><td><input type="Password" name="pass"></td></tr>
			<tr>	<td>Confirm Password</td><td><input type="Password" name="cpass"></td></tr>
		</table>
		</div>
		<br><br>
		<a href="restreg.php"><Button class="btn btn-outline-success">Register</Button></a>	
		
		</form>
</body>
</center>
</html>		 -->


 <!--/Registration Form -->




<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Restaurant Registration</title>
<!-- for-mobile-apps -->
{literal}
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
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body>




<!-- banner -->
    <div class="center-container">
        <div class="main">
            <h1 class="w3layouts_head">Restaurant Registration Form</h1>

                    <div class="w3-show-inline-block">
<div class="w3-bar w3-light-grey">
    <center>
  <a href="index.php" class="w3-container w3-sand"><font color="red"><button class="btn btn-danger btn-sm">Home</button></font></a>
  <a href="restfileupload.php" class="w3-bar-item w3-button"><font color="red"><button class="btn btn-danger btn-sm">Documents</button></font></a>
</center>

</div>
</div>

                <div class="w3layouts_main_grid">
                    <form action="" method="post" class="w3_form_post" enctype="multipart/form-data">
                        <input type="hidden" name="hide" value="h">
                        <div class="w3_agileits_main_grid w3l_main_grid">
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
                        </div>
                    
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>District </label>
                                <select name="dist">
                                    <option>Trivandrum</option>
                                    <option>Kollam</option>
                                    <option>Alappuzha</option>
                                    <option>Pattanamthitta</option>
                                    <option>Kottayam</option>
                                    <option>Idukki</option>
                                    <option>Ernakulam</option>
                                    <option>Thrissur</option>
                                    <option>Palakkad</option>
                                    <option>Malappuram</option>
                                    <option>Kozhikode</option>
                                    <option>Wayanad</option>
                                    <option>Kannur</option>
                                    <option>Kasargod</option>
                                </select>
                            </span>
                        </div>
                        <!-- <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                            <span class="agileinfo_grid">
                                <label>Date / Time </label>
                                <div class="agileits_w3layouts_main_gridl">
                                    <input class="date" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                                </div>
                                <div class="agileits_w3layouts_main_gridr">
                                    <input type="time" name="Time" placeholder=" " required="">
                                </div>
                                    <div class="clear"> </div>
                            </span>
                        </div> -->
                         <div class="w3_agileits_main_grid w3l_main_grid">
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
                        </div>
                    <div class="content-w3ls">
                        <div class="form-w3ls">
                            <div class="content-wthree2">
                                <div class="grid-w3layouts1">
                                    <div class="w3-agile1">
                                        <label>Reservation</label>
                                        <ul>
                                            <li>
                                                <input type="radio" id="a-option" name="res" value="available">
                                                <label for="a-option">Available <input type="text" name="seats" placeholder="No of seats" required=""></label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="b-option" name="res" value="not available">
                                                <label for="b-option">Not-available</label>
                                                <div class="check"><div class="inside"></div></div>
                                            </li>
                                        </ul>
                                    </div>  
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        
                        <div class="form-w3ls-1">
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
                        </div>
                        <div class="clear"></div>
                    </div>
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>Image</label>
                                <input type="file" name="img" placeholder="Profile Picture" required="">
                            </span>
                        </div>
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>Email</label>
                                <input type="text" name="email" placeholder="Enter email" required="">
                            </span>
                        </div>
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>Password</label>
                                <input type="Password" name="pass" placeholder="Enter Password" required="">
                            </span>
                        </div>
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>Confirm Password</label>
                                <input type="Password" name="pass" placeholder="Enter Password" required="">
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="w3_main_grid">
                        <div class="w3_main_grid_right">
                            <center><input type="submit" value="Register"></center>
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
{/literal}
</body>
</html>