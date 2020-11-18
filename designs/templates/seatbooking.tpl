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
{literal}
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<!-- js -->
 <script src="booking/web/js/jquery.min.js"></script>{/literal}
<!-- //js --> 
<!-- font-awesome-icons -->
<link href="booking/web/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="booking/web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
	<div class="main">
		<h1>Seat Booking Form</h1>
		<div class="w3_agile_main_grids">
		
			<div id='progress'><div id='progress-complete'></div></div>
			
			<form id="SignupForm" action="" class="agile_form" method="post">
				<input type="hidden" name="hide" value="h">
				<fieldset>
					<h3>Account information</h3>
					
					<div class="form-group agileits_w3layouts_form">
						<div class="wthree_input">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input id="Email" type="email" name="email" class="form-control" placeholder="Email" required="" />
						</div>
					</div>
					<div class="form-group agileits_w3layouts_form w3_agileits_margin">
						<div class="wthree_input">
							<i class="fa fa-file-text" aria-hidden="true"></i>
							<input id="Contact" type="text" name="contact" class="form-control" placeholder="Contact" required="" />
						</div>
					</div>
					<div class="form-group agileits_w3layouts_form">
						<div class="wthree_input">
							<i class="fa fa-file-text" aria-hidden="true"></i>
							<input id="Booking Date" type="date" name="date" class="form-control" placeholder="Booking Date" required="" />
						</div>
					</div>
					<div class="form-group agileits_w3layouts_form">
						<div class="wthree_input">
							<i class="fa fa-file-text" aria-hidden="true"></i>
							<input id="Booking Time" type="time" name="time" class="form-control" placeholder="Booking Time" required="" />
						</div>
					</div>
					<div class="form-group agileits_w3layouts_form">
						<div class="wthree_input">
							<i class="fa fa-key" aria-hidden="true"></i>
							<input id="Password" type="password" name="password" class="form-control" placeholder="Password" required="" />
						</div>
					</div>
					<!-- <div class="form-group agileits_w3layouts_form w3_agileits_margin">
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
					</div> -->
					<div class="clear"> </div>
				</fieldset>
				
				<fieldset>
					<h3>Room Type</h3>
					<h4 class="w3layouts_type">What type of Seats would you want ?</h4>
					<div class="form-group agileits_circles">
						<div class="wthree_radio">
							<span class="fa fa-user" aria-hidden="true"></span>
							<label class="radio">
								<input type="radio" name="seats1" value="1">
								<i></i>Single (Seat-1)
							</label>
						</div>
					</div>
					<div class="form-group agileits_circles">
						<div class="wthree_radio">
							<span class="fa fa-home" aria-hidden="true"></span>
							<label class="radio">
								<input type="radio" value="3" name="seats1">
								<i></i>Family (Seats-3)
							</label>
						</div>
					</div>
					<div class="form-group agileits_circles">
						<div class="wthree_radio">
							<span class="fa fa-building-o" aria-hidden="true"></span>
							<label class="radio">
								<input type="radio" value="6" name="seats1">
								<i></i>Business (Seat-6)
							</label>
						</div>
					</div>

					<div class="form-group agileits_circles">
						<div class="wthree_radio">
							<span class="fa fa-building-o" aria-hidden="true"></span>
							<label class="radio">
								<input type="radio" value="other" name="seats1">
								<i></i>Other
							</label>
						</div>
					</div>

					<div class="form-group agileits_w3layouts_form w3_agileits_margin">
						<div class="wthree_input">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input id="Other" type="text" name="seats" class="form-control" placeholder="Number of Seats"/>
						</div>
					</div>



					<div class="clear"> </div>
				</fieldset>
				
				<fieldset>
					<h3 class="w3_room">Other Details</h3>
					<div class="form-group w3ls_description">
						<i class="fa fa-align-right" aria-hidden="true"></i>
						<textarea name="message" placeholder="Your message here..."></textarea>
					</div>
				</fieldset>
	
				<p>
					<button id="SaveAccount" type="submit" class="btn btn-primary agileinfo_primary submit">Book Now</button>
				</p>
			</form>
			
			<div class="agileits_copyright">
				<p>© 2017 Room Booking Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		</div>
	</div>
	
	<script src="booking/web/js/jquery.validate.min.js"></script>
    <script src="booking/web/js/jquery.formtowizard.js"></script>
    {literal}
    <script>
        $( function() {
            var $signupForm = $( '#SignupForm' );

            $signupForm.validate({errorElement: 'em'});

            $signupForm.formToWizard({
                submitButton: 'SaveAccount',
                nextBtnClass: 'btn btn-primary next',
                prevBtnClass: 'btn btn-default prev',
                buttonTag:    'button',
                validateBeforeNext: function(form, step) {
                    var stepIsValid = true;
                    var validator = form.validate();
                    $(':input', step).each( function(index) {
                        var xy = validator.element(this);
                        stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
                    });
                    return stepIsValid;
                },
                progress: function (i, count) {
                    $('#progress-complete').width(''+(i/count*100)+'%');
                }
            });
        });
    </script>{/literal}
</body>
</html>