<!DOCTYPE html>
<html>
    
	<?php include 'meta.php'; ?>
    
<body>
    
		<div id="header" class="sticky dark header-md transparent noborder clearfix">
				<!-- SEARCH HEADER -->
				<div class="search-box over-header">
					<a id="closeSearch" href="#" class="glyphicon glyphicon-remove"></a>

					<form action="page-search-result-1.html" method="get">
						<input type="text" class="form-control" placeholder="SEARCH" />
					</form>
				</div> 
				<!-- /SEARCH HEADER -->

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">

							<!-- SEARCH -->
							<li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
							</li>
							<!-- /SEARCH -->

						</ul>
						<!-- /BUTTONS -->


						<!-- Logo -->
						<a class="logo pull-left" href="index.php">
							<img src="https://s3.amazonaws.com/webviautomation/assets/general/logo/vi_logo+60x65.png" alt="" />
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="dropdown active"><!-- HOME -->
										<a class="dropdown-toggle" href="index.php">
											<strong>HOME</strong>
										</a>

									</li>
									<li class="dropdown"><!-- PAGES -->
										<a class="dropdown-toggle" href="#">
											<strong>COMPANY</strong>
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="about_us.php">
													ABOUT US
												</a>
												<ul class="dropdown-menu">
													
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													MANAGEMENT TEAM
												</a>
												<ul class="dropdown-menu">
													
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													BOARD OF DIRECTORS
												</a>
												<ul class="dropdown-menu">
													
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													TECHNOLOGY PARTNERS
												</a>
												
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													CONTACTS
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-contact-1.html">MAIN CONTACTS</a></li>
													<li><a href="page-contact-2.html">SALES CONTACTS & OFFICES</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													CAREERS
												</a>
												
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													SITEMAP
												</a>
												
											</li>
											
										</ul>
									</li>
									<li class="dropdown"><!-- FEATURES -->
										<a class="dropdown-toggle" href="services.php">
											<strong>SERVICES</strong>
										</a>

									</li>
									<li class="dropdown mega-menu"><!-- PORTFOLIO -->
										<a class="dropdown-toggle" href="#">
											<strong>OUR WORK</strong>
										</a>

									</li>
									<li class="dropdown"><!-- BLOG -->
										<a class="dropdown-toggle" href="#">
											<strong>NEWS & EVENTS</strong>
										</a>

									</li>
									<li class="dropdown"><!-- SHOP -->
										<a class="dropdown-toggle" href="#">
											<strong>RESOURCES</strong>
										</a>

									</li>
									
									<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<strong>LANGUAGES</strong>
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-contact-1.html">ENGLISH</a></li>
													<li><a href="page-contact-2.html">ESPAÑOL</a></li>
												</ul>
											</li>

								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>
	
</body>
</html>