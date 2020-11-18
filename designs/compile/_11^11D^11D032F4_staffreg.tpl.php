<?php /* Smarty version 2.6.26, created on 2020-01-10 07:49:34
         compiled from staffreg.tpl */ ?>
<!-- <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="web/css/bootstrap.css">
	<title></title>
</head>
<body><center>
	<h1>REGISTRATION</h1>
	<form method="post" action="" enctype="multipart/form-data">
	<table class="table">
	<input type="hidden" name="hide" value="h">
	<tr><td>Staff Name</td><td><input type="text" name="name"></td></tr>
	<tr><td>Full Address</td><td><TEXTAREA name="add"></TEXTAREA></td></tr>
	<tr><td>Hotel Name</td>
	<td><select name="hid">
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
					<option value="<?php echo $this->_tpl_vars['b']['fid']; ?>
"><?php echo $this->_tpl_vars['b']['restname']; ?>
</option>		
		<?php endforeach; endif; unset($_from); ?>

	</select></td>
	</tr>
	<tr><td>Contact No</td><td><input type="text" name="no"></td></tr>
	<tr><td>Image</td><td><input type="file" name="img"></td></tr>
	<tr><td>Gender</td><td><input type="radio" name="gender" value="male">male
							<input type="radio" name="gender" value="female">female</td>
	</tr>
	<tr><td>Age</td><td><input type="text" name="age"></td></tr>
	<tr><td>Email</td><td><input type="email" name="mail"></td></tr>
	<tr><td>Password</td><td><input type="password" name="pass"></td></tr>
	<tr><td>Confirm Password</td><td><input type="password" name="pass"></td></tr>
	</table>	
	<a href="staffreg.php"><Button class="btn btn-outline-success">Register</Button></a>
	</form>
</center>	
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
<head><link rel="stylesheet" href="newreg/css/bootstrap.css">
<title>Staff Registration</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Event Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php echo '
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>'; ?>

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
			<h1 class="w3layouts_head">Staff Registration Form</h1>
				<div class="w3layouts_main_grid">
					<form action="" method="post" enctype="multipart/form-data" class="w3_form_post">
						<input type="hidden" name="hide" value="h">
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Staff Name </label>
								<input type="text" name="name" placeholder="Your Name" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Address </label>
								<textarea name="add" placeholder="Your Address" required=""></textarea>
							</span>
						</div>
						
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Restaurant Name </label>
								<select name="hid">
									<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
										<option value="<?php echo $this->_tpl_vars['b']['fid']; ?>
"><?php echo $this->_tpl_vars['b']['restname']; ?>
</option>	

									<?php endforeach; endif; unset($_from); ?>
								
								</select>
							</span>
						</div>
						
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Contact No </label>
								<input type="text" name="no" placeholder="Your Contact No" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Add Profile pic</label>
								<input type="file" name="img" placeholder="Your Profile Pic" required="">
							</span>
						</div>
					<div class="content-w3ls">
						<div class="form-w3ls">
							<div class="content-wthree2">
								<div class="grid-w3layouts1">
									<div class="w3-agile1">
										<label>Gender</label>
										<ul>
											<li>
												<input type="radio" id="a-option" name="gender" value="male">
												<label for="a-option">Male </label>
												<div class="check"></div>
											</li>
											<li>
												<input type="radio" id="b-option" name="gender" value="female">
												<label for="b-option">Female</label>
												<div class="check"><div class="inside"></div></div>
											</li>
										</ul>
									</div>	
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Age</label>
								<input type="text" name="age" placeholder="Your Age is" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Email</label>
								<input type="text" name="mail" placeholder="Your Email is" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Password </label>
								<input type="text" name="pass" placeholder="Your Password is" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Confirm Password </label>
								<input type="text" name="cpass" placeholder="Your Password is" required="">
							</span>
						</div>
						<!-- <div class="form-w3ls-1">
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
							<input type="submit" value="Register">
						</div>
					</div>
				</form>
			</div>
			<?php echo '
		<!-- Calendar -->
			<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
					{literal}<script>
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