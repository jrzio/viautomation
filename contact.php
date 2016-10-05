<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
	
		<?php include 'meta.php'; ?>
		
	</head>

	<body class="smoothscroll enable-animation">

		<!-- SLIDE TOP -->
		<div id="slidetop">

			<a class="slidetop-toggle" href="#"><!-- toggle button --></a>

		</div>
		<!-- /SLIDE TOP -->
		
		<!-- wrapper -->
		<div id="wrapper">

			<?php include 'header.php' ?>

			<!-- PAGE HEADER -->
			<div id="map2" class="height-400 grayscale"></div>
			<!-- /PAGE HEADER -->
						<section>
				<div class="container">
					
					<div class="row">

						<!-- FORM -->
						<div class="col-md-9 col-sm-9">

							<h3>Get in touch!<strong><em></em></strong></h3>

							
							<!--
								MESSAGES
								
									How it works?
									The form data is posted to php/contact.php where the fields are verified!
									php.contact.php will redirect back here and will add a hash to the end of the URL:
										#alert_success 		= email sent
										#alert_failed		= email not sent - internal server error (404 error or SMTP problem)
										#alert_mandatory	= email not sent - required fields empty
										Hashes are handled by assets/js/contact.js

									Form data: required to be an array. Example:
										contact[email][required]  WHERE: [email] = field name, [required] = only if this field is required (PHP will check this)
										Also, add `required` to input fields if is a mandatory field. 
										Example: <input required type="email" value="" class="form-control" name="contact[email][required]">

									PLEASE NOTE: IF YOU WANT TO ADD OR REMOVE FIELDS (EXCEPT CAPTCHA), JUST EDIT THE HTML CODE, NO NEED TO EDIT php/contact.php or javascript
												 ALL FIELDS ARE DETECTED DINAMICALY BY THE PHP

									WARNING! Do not change the `email` and `name`!
												contact[name][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
												contact[email][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
							-->

							<!-- Alert Success -->
							<div id="alert_success" class="alert alert-success margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Thank You!</strong> Your message successfully sent!
							</div><!-- /Alert Success -->


							<!-- Alert Failed -->
							<div id="alert_failed" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>[SMTP] Error!</strong> Internal server error!
							</div><!-- /Alert Failed -->


							<!-- Alert Mandatory -->
							<div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Sorry!</strong> You need to complete all mandatory (*) fields!
							</div><!-- /Alert Mandatory -->


							<form action="php/contact.php" method="post" enctype="multipart/form-data">
								<fieldset>
									<input type="hidden" name="action" value="contact_send" />

									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label for="contact:name">Full Name *</label>
												<input required type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
											</div>
											<div class="col-md-4">
												<label for="contact:email">E-mail Address *</label>
												<input required type="email" value="" class="form-control" name="contact[email][required]" id="contact:email">
											</div>
											<div class="col-md-4">
												<label for="contact:phone">Phone</label>
												<input type="text" value="" class="form-control" name="contact[phone]" id="contact:phone">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-8">
												<label for="contact:subject">Subject *</label>
												<input required type="text" value="" class="form-control" name="contact[subject][required]" id="contact:subject">
											</div>
											<div class="col-md-4">
												<label for="contact_department">Department</label>
												<select class="form-control pointer" name="contact[department]">
													<option value="">--- Select ---</option>
													<option value="Automated Equipment">Automated Equipment</option>
													<option value="Test Equipment">Test Equipment</option>
													<option value="Machining">Machining</option>
													<option value="Field Service">Field Service</option>
													<option value="Programming">Programming Services</option>
													<option value="Others">Others</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:message">Message *</label>
												<textarea required maxlength="10000" rows="8" class="form-control" name="contact[message]" id="contact:message"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:attachment">File Attachment</label>

												<!-- custom file upload -->
												<input class="custom-file-upload" type="file" id="file" name="contact[attachment]" id="contact:attachment" data-btn-text="Select a File" />
												<small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>

											</div>
										</div>
									</div>

								</fieldset>

								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>
									</div>
								</div>
							</form>

						</div>
						<!-- /FORM -->


						<!-- INFO -->
						<div class="col-md-3 col-sm-3">

							<h2>Visit Us</h2>

							<p>
							</p>

							<hr />

							<p>
								<span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong> 6607 Montes Pirineos, La Cuesta CD Juarez CHI, Mexico, 32674</span>
								<span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> <a href="tel:+52 (656) 566 1614">+52 (656) 566 1614</a></span>
								<span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:info@viautomation.com">info@viautomation.com</a></span>
							</p>

							<hr />

							<h4 class="font300">Business Hours</h4>
							<p>
								<span class="block"><strong>Monday - Friday:</strong> 7am to 6pm</span>
								<span class="block"><strong>Saturday:</strong> 8am to 2pm</span>
								<span class="block"><strong></strong>Call any day for Emergency Field Support 24x7</span>
							</p>

						</div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
			
		
			<!-- FOOTER -->
			<?php include'footer.php' ?>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>

		<script type="text/javascript" src="assets/js/scripts.js"></script>
		
			
		<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="assets/plugins/gmaps.js"></script>
		<script type="text/javascript">

			jQuery(document).ready(function(){

				/**
					@BASIC GOOGLE MAP
				**/
				var map2 = new GMaps({
					div: '#map2',
					lat: 31.6904233,
					lng: -106.434,
					scrollwheel: false
				});

				var marker = map2.addMarker({
					lat: 31.6904233,
					lng: -106.434,
					title: 'Company, Inc.'
				});

			});

		</script>
		
		
	</body>
</html>