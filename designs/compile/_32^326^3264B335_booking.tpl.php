<?php /* Smarty version 2.6.26, created on 2019-11-01 10:06:26
         compiled from booking.tpl */ ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Room Booking Form Flat Responsive Widget Template :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Room Booking Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />


<?php echo '
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<!-- js -->
 <script src="booking/web/js/jquery.min.js"></script>
'; ?>



<!-- //js --> 
<!-- font-awesome-icons -->
<link href="booking/web/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="booking/web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
	<div class="main">
		<h1>Room Booking Form</h1>
		<div class="w3_agile_main_grids">
		
			<div id='progress'><div id='progress-complete'></div></div>
			
			<form id="SignupForm" action="#" class="agile_form"method="post">
				<fieldset>
					<h3>Account information</h3>
					<div class="form-group agileits_w3layouts_form w3_agileits_margin">
						<div class="wthree_input">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input id="Name" type="text" name="Name" class="form-control" placeholder="Name" required="" />
						</div>
					</div>
					<div class="form-group agileits_w3layouts_form">
						<div class="wthree_input">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input id="Email" type="email" name="Email" class="form-control" placeholder="Email" required="" />
						</div>
					</div>
					<div class="form-group agileits_w3layouts_form w3_agileits_margin">
						<div class="wthree_input">
							<i class="fa fa-file-text" aria-hidden="true"></i>
							<input id="Subject" type="text" name="Subject" class="form-control" placeholder="Subject" required="" />
						</div>
					</div>
					<div class="form-group agileits_w3layouts_form">
						<div class="wthree_input">
							<i class="fa fa-key" aria-hidden="true"></i>
							<input id="Password" type="password" name="Password" class="form-control" placeholder="Password" required="" />
						</div>
					</div>
					<div class="form-group agileits_w3layouts_form w3_agileits_margin">
						<div class="wthree_input">
							<i class="fa fa-globe" aria-hidden="true"></i>
							<select class="form-control">
								<option value="Country" selected="">Country</option>
								<option value="Afghanistan"> Afghanistan </option>
								<option value="Albania"> Albania </option>
								<option value="Algeria"> Algeria </option>
								<option value="American Samoa"> American Samoa </option>
								<option value="Andorra"> Andorra </option>
								<option value="Angola"> Angola </option>
								<option value="Anguilla"> Anguilla </option>
								<option value="Antarctica"> Antarctica </option>
								<option value="...">...</option>
							</select>
						</div>
					</div>
					<div class="clear"> </div>
				</fieldset>
				
				<fieldset>
					<h3>Room Type</h3>
					<h4 class="w3layouts_type">What type of room would you want ?</h4>
					<div class="form-group agileits_circles">
						<div class="wthree_radio">
							<span class="fa fa-user" aria-hidden="true"></span>
							<label class="radio">
								<input type="radio" name="radio" checked="">
								<i></i>Single
							</label>
						</div>
					</div>
					<div class="form-group agileits_circles">
						<div class="wthree_radio">
							<span class="fa fa-home" aria-hidden="true"></span>
							<label class="radio">
								<input type="radio" name="radio">
								<i></i>Family
							</label>
						</div>
					</div>
					<div class="form-group agileits_circles">
						<div class="wthree_radio">
							<span class="fa fa-building-o" aria-hidden="true"></span>
							<label class="radio">
								<input type="radio" name="radio">
								<i></i>Business
							</label>
						</div>
					</div>
					<div class="clear"> </div>
				</fieldset>
				
				<fieldset>
					<h3 class="w3_room">Room Details</h3>
					<div class="form-group w3ls_description">
						<i class="fa fa-align-right" aria-hidden="true"></i>
						<textarea name="Message" placeholder="Your message here..." required=""></textarea>
					</div>
				</fieldset>
	
				<p>
					<button id="SaveAccount" class="btn btn-primary agileinfo_primary submit">Submit form</button>
				</p>
			</form>
			
			<div class="agileits_copyright">
				<p>© 2017 Room Booking Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		</div>
	</div>
	

	<?php echo '
	<script src="booking/web/js/jquery.validate.min.js"></script>
    <script src="booking/web/js/jquery.formtowizard.js"></script>

    <script>
        $( function() {
            var $signupForm = $( \'#SignupForm\' );

            $signupForm.validate({errorElement: \'em\'});

            $signupForm.formToWizard({
                submitButton: \'SaveAccount\',
                nextBtnClass: \'btn btn-primary next\',
                prevBtnClass: \'btn btn-default prev\',
                buttonTag:    \'button\',
                validateBeforeNext: function(form, step) {
                    var stepIsValid = true;
                    var validator = form.validate();
                    $(\':input\', step).each( function(index) {
                        var xy = validator.element(this);
                        stepIsValid = stepIsValid && (typeof xy == \'undefined\' || xy);
                    });
                    return stepIsValid;
                },
                progress: function (i, count) {
                    $(\'#progress-complete\').width(\'\'+(i/count*100)+\'%\');
                }
            });
        });
    </script>
    '; ?>

</body>
</html>