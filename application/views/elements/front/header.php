<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Arteify</title>
	<meta charset="UTF-8">
	<meta name="description" content="Arteify">
	<meta name="keywords" content="Arteify">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/nice-select.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/magnific-popup.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/slicknav.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/style.css"/>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		<div class="header-top">
			<div class="row m-0">
				<div class="col-md-6 d-none d-md-block p-0">
					<div class="header-info">
						<i class="material-icons">map</i>
						<p>Palam Corporate Plaza, Sector-3,Gurugram ,122017</p>
					</div>
					<div class="header-info">
						<i class="material-icons">phone</i>
						<p>0124-4181680</p>
					</div>
				</div>
				<div class="col-md-6 text-left text-md-right p-0">
					<div class="header-info d-none d-md-inline-flex">
						<i class="material-icons">alarm_on</i>
						<p>Mon - Fri:  6:30am - 07:45pm</p>
					</div>
					<!--<div class="header-info">
						<i class="material-icons">language</i>
						<select id="language" class="language-select">
							<option data-display="Language">EN</option>
							<option data-display="Language" value="1">ES</option>
							<option data-display="Language" value="2">JA</option>
							<option data-display="Language" value="2">AR</option>
						</select>
					</div>-->
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<a href="<?php echo base_url();?>home/" class="site-logo">
				<img src="<?php echo base_url();?>front_assets/img/logo.png" alt="">
			</a>
			<div class="hb-right">
				<div class="hb-switch" id="search-switch">
					<img src="<?php echo base_url();?>front_assets/img/icons/search.png" alt="">
				</div>
				<div class="hb-switch" id="infor-switch">
					<!--<img src="<?php echo base_url();?>front_assets/img/icons/bars.png" alt="">-->
				</div>
			</div>
			<?php $us = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
			<?php $cat = get_category();?>
			<div class="container">
				<ul class="main-menu">
					<li><a href="<?php echo base_url();?>home" class="<?php if($us[2] =='home' && $us[3] =='' ){ echo 'active' ;}?>">Home</a></li>
					<li><a href="<?php echo base_url();?>home/aboutus" class="<?php if($us[2] =='home' && $us[3] =='aboutus'){ echo 'active' ;}?>">About Us</a></li>
					<li><a href="classes.html" class="<?php if($us[2] =='home' && $us[3] =='artist'){ echo 'active' ;}?>">Artist</a>
						<ul class="sub-menu">
							<?php foreach($cat as $ca) { ?>
							<li><a href="<?php echo base_url();?>home/artist/<?php echo $ca->id;?>/<?php echo $ca->name?> "><?php echo $ca->name?></a></li>
							<?php } ?>
						</ul>
					</li>
					<!--<li><a href="trainer.html">trainers</a>
						<ul class="sub-menu">
							<li><a href="trainer.html">Our Trainers</a></li>
							<li><a href="trainer-details.html">Trainers Details</a></li>
						</ul>
					</li>-->
					<li><a href="<?php echo base_url();?>home/events" class="<?php if($us[2] =='home' && $us[3] =='events'){ echo 'active' ;}?>" >events</a>
						<ul class="sub-menu">
							<li><a href="<?php echo base_url();?>home/events">Our Events</a></li>
							<li><a href="event-details.html">Events Details</a></li>
						</ul>
					</li>
					<!--<li><a href="<?php echo base_url();?>home/blog">Blog</a>
						<ul class="sub-menu">
							<li><a href="<?php echo base_url();?>home/blog">Our Blog</a></li>
							<li><a href="single-blog.html">Blog Details</a></li>
						</ul>
					</li>-->
					<li><a href="<?php echo base_url();?>home/contact"  class="<?php if($us[2] =='home' && $us[3] =='contact'){ echo 'active' ;}?>">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header Section end -->