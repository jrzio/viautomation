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
			<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact" data-sr-id="9" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
                    <p>Mx: 656-566-1614</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact" data-sr-id="10" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
                    <p><a href="mailto:info@viautomation.com">info@viautomation.com</a></p>
                </div>
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