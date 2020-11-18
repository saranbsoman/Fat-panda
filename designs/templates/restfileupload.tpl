<!-- <!DOCTYPE html>
<html>
<head>
	file upload
<link rel="stylesheet" href="web/css/bootstrap.css">
	<title></title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data" >
	<table class="table">
		<input type="hidden" name="hide" value="h">
		<tr><td>Panchayath License</td>
			<td><input type="file" name="lic" required=""></td>
		</tr>
		<tr><td>Food Safety</td>
			<td><input type="file" name="fdsfty" required=""></td>
		</tr>
		<tr><td>Quality Management</td>
			<td><input type="file" name="qtymgmt" required=""></td>
		</tr>
		<tr><td>ISO Standards</td>
			<td><input type="file" name="iso" required=""></td>
		</tr>
		<tr><td>Pollution Certificate</td>
			<td><input type="file" name="pollu" required=""></td>
		</tr>
		</table>
	<a href=restview.php><Button class="btn btn-outline-danger">Upload</Button></a>
	
	</form>		
</body>
</html> -->



<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Event Registration Form Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Event Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
{literal}
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
			<h1 class="w3layouts_head">Event Registration Form</h1>
				<div class="w3layouts_main_grid">
					        <div class="w3-show-inline-block">
<div class="w3-bar w3-light-grey">
  <center><a href="restreg.php" class="w3-container w3-sand"> <i class="fa fa-Home"></i><font color=red>Back</font></a></center>
 
</div>
</div>
					<form action="restview.php" method="post" class="w3_form_post" enctype="multipart/form-data">
						<input type="hidden" name="hide" value="h">
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Panchayath License </label>
								<input type="file" name="lic" placeholder="Your Name" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Food Safety </label>
								<input type="file" name="fdsfty" placeholder="Your Email" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Quality Management </label>
								<input type="file" name="qtymgmt" placeholder="Phone Number" required="">
								</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>ISO Standards</label>
								<input type="file" name="iso" placeholder="Phone Number" required="">
								</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Pollution Certificate</label>
								<input type="file" name="pollu" placeholder="Phone Number" required="">
								</span>
						</div>
						<!-- <div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>No.of persons </label>
								<select name="country">
									<option value="none" selected="" disabled="">Select numbers</option>
									<option value="Ph">50</option>
									<option value="Po">100</option>
									<option value="So">200</option>
									<option value="Sp">500</option>
									<option value="Sw">1000</option>
								</select>
							</span>
						</div>
						<div class="agileits_w3layouts_main_grid w3ls_main_grid">
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
						</div>
					<div class="content-w3ls">
						<div class="form-w3ls">
							<div class="content-wthree2">
								<div class="grid-w3layouts1">
									<div class="w3-agile1">
										<label>Please choose your favourite food</label>
										<ul>
											<li>
												<input type="radio" id="a-option" name="selector1">
												<label for="a-option">Veg </label>
												<div class="check"></div>
											</li>
											<li>
												<input type="radio" id="b-option" name="selector1">
												<label for="b-option">Non-veg</label>
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
									<label>Please choose your favourite drink</label>
										<ul>
											<li>
												<input type="radio" id="d-option" name="selector2">
												<label for="d-option">Wine</label>
												<div class="check"></div>
											</li>
											<li>
												<input type="radio" id="e-option" name="selector2">
												<label for="e-option">Whisky</label>
												<div class="check"><div class="inside"></div></div>
											</li>
											<li>
												<input type="radio" id="f-option" name="selector2">
												<label for="f-option">beer </label>
												<div class="check"><div class="inside"></div></div>
											</li>
										</ul>
								</div>	
							</div>		
						</div> -->
						<div class="clear"></div>
					</div>
					<div class="w3_main_grid">
						<div class="w3_main_grid_right">
							<center><input type="submit" value="Submit"></center>
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
					{/literal}
		<!-- //Calendar -->
			
				<!-- <div class="container">
				<p>© 2017 Event Registration Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
				</div> -->
			
		</div>
	</div>
<!-- //footer -->
</body>
</html>