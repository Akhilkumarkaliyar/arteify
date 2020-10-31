<!-- Infor Model -->
	<div class="infor-model-warp">
		<div class="infor-model d-flex align-items-center">
			<div class="infor-close">
				<i class="material-icons">close</i>
			</div>
			<div class="infor-middle">
				<a href="#" class="infor-logo">
					<img src="<?php echo base_url();?>front_assets/img/logo-2.png" alt="">
				</a>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
				<div class="insta-imgs">
					<div class="insta-item">
						<div class="insta-img">
							<img src="<?php echo base_url();?>front_assets/img/infor/1.jpg" alt="">
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>ahana.yoga</p>
							</div>
						</div>
					</div>
					<div class="insta-item">
						<div class="insta-img">
							<img src="<?php echo base_url();?>front_assets/img/infor/2.jpg" alt="">
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>ahana.yoga</p>
							</div>
						</div>
					</div>
					<div class="insta-item">
						<div class="insta-img">
							<img src="<?php echo base_url();?>front_assets/img/infor/3.jpg" alt="">
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>ahana.yoga</p>
							</div>
						</div>
					</div>
					<div class="insta-item">
						<div class="insta-img">
							<img src="<?php echo base_url();?>front_assets/img/infor/4.jpg" alt="">
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>ahana.yoga</p>
							</div>
						</div>
					</div>
					<div class="insta-item">
						<div class="insta-img">
							<img src="<?php echo base_url();?>front_assets/img/infor/5.jpg" alt="">
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>ahana.yoga</p>
							</div>
						</div>
					</div>
					<div class="insta-item">
						<div class="insta-img">
							<img src="<?php echo base_url();?>front_assets/img/infor/6.jpg" alt="">
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>ahana.yoga</p>
							</div>
						</div>
					</div>
				</div>
				<form class="infor-form">
					<input type="text" placeholder="Your Email">
					<button><img src="<?php echo base_url();?>front_assets/img/icons/send.png" alt=""></button>
				</form>
				<div class="insta-social">
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Infor Model end -->
	                                                                              
	<!-- Page top Section -->
	<section class="page-top-section page-sp set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>All Events</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->

	<div class="container">
		<div class="event-filter-warp">
			<div class="row">
				<div class="col-xl-3">
					<p>Showing 8 classes of 30 classes</p>
				</div>
				<div class="col-xl-9">
					<form class="event-filter-form">
						<div class="ef-item">
							<input type="text" placeholder="Event Date" class="event-date">
							<i class="material-icons">event_available</i>
						</div>
						<div class="ef-item">
							<input type="text" placeholder="Search">
							<i class="material-icons">search</i>
						</div>
						<div class="ef-item">
							<input type="text" placeholder="Location">
							<i class="material-icons">map</i>
						</div>
						<button class="site-btn sb-gradient">Find Event</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	<!-- Events Section -->
	<section class="events-page-section spad">
		<div class="container">
			<div class="row">
				<?php foreach($event as $ev){  ?>
				<div class="col-lg-6">
					<div class="event-item">
						<div class="ei-img">
							<img src="<?php echo IMG_URL.$ev->image; ?>" alt="">
						</div>
						<div class="ei-text">
							<h4><a href="event-details.html"><?php echo isset($ev->title) && (strlen(strip_tags($ev->title))>20) ? substr(strip_tags($ev->title),'0', '20').'..' : strip_tags($ev->title);  ?></a></h4>
							<ul>
								<li><i class="material-icons">person</i><?php echo isset($ev->description) && (strlen(strip_tags($ev->description))>20) ? substr(strip_tags($ev->description),'0', '20').'..' : strip_tags($ev->description);  ?></li>
								<li><i class="material-icons">event_available</i>15 January, 2019</li>
								<li><i class="material-icons">map</i>184 Main Collins Street</li>
							</ul>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<!--<div class="site-pagination pt-3">
				<a href="#" class="active">1</a>
				<a href="#">2</a>
				<a href="#"><i class="material-icons">keyboard_arrow_right</i></a>
			</div>-->
		</div>
	</section>
	<!-- Events Section end -->