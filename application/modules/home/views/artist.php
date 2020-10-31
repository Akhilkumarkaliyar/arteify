
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
	<section class="page-top-section set-bg" data-setbg="<?php echo base_url();?>front_assets/img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>Our Artist</h2>
					<p></p>
				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Classes Section -->
	<section class="classes-page-section spad overflow-hidden">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="classes-top">
						<div class="row">
							<!--<div class="col-md-6">
								<p>Showing 8 classes of 30 classes</p>
							</div>-->
							<div class="col-md-6">
								<select class="circle-select">
									<option data-display="Default Sorting">Default Sorting</option>
									<option value="2">Oldest</option>
									<option value="2">Newest</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<?php foreach($artistcat as $art) { ?>
						<div class="col-md-6">
							<div class="classes-item-warp">
								<div class="classes-item">
									<div class="ci-img">
										<img src="<?php echo IMG_URL.$art->image; ?>" alt="">
									</div>
									<div class="ci-text">
										<h4><?php echo $art->title; ?></h4>
										<div class="ci-metas">
											<!--<div class="ci-meta"><i class="material-icons">event_available</i>Mon, Wed, Fri</div>-->
											<div class="ci-meta">Price : <?php echo $art->budget; ?></div>
										</div>
										<p><?php echo isset($art->description) && (strlen(strip_tags($art->description))>40) ? substr(strip_tags($art->description),'0', '40').'..' : strip_tags($art->description);  ?></p>
									</div>
									<div class="ci-bottom">
										<div class="ci-author">
											<img src="<?php echo base_url();?>front_assets/img/classes/author/1.jpg" alt="">
											<div class="author-text">
												<h6><?php echo $ev->event_date;?></h6>
												<!--<p>Yoga Trainer</p>-->
											</div>
										</div>
										<a href="" class="site-btn sb-gradient">book now</a>
									</div>
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
				<div class="col-lg-3 col-md-5 col-sm-8 sidebar">
					<!--<div class="sb-widget">
						<h2 class="sb-title">Search Classes</h2>
						<form class="classes-filter">
							<select class="circle-select">
								<option data-display="Choose Category">Choose Category</option>
								<option value="1">Category 1</option>
								<option value="2">Category 2</option>
							</select>
							<select class="circle-select">
								<option data-display="Choose Level">Choose Level</option>
								<option value="1">Level 1</option>
								<option value="2">Level 2</option>
							</select>
							<select class="circle-select">
								<option data-display="Choose Trainer">Choose Trainer</option>
								<option value="2">Name</option>
							</select>
							<h3>Filter by Day</h3>
							<div class="cf-cal">
								<div class="cf-radio">
									<input type="checkbox" name="sc" id="monday">
									<label for="monday">Monday</label>
								</div>
								<div class="cf-radio">
									<input type="checkbox" name="sc" id="tuesday">
									<label for="tuesday">Tuesday</label>
								</div>
								<div class="cf-radio">
									<input type="checkbox" name="sc" id="wednesday">
									<label for="wednesday">Wednesday</label>
								</div>
								<div class="cf-radio">
									<input type="checkbox" name="sc" id="thurstday">
									<label for="thurstday">Thurstday</label>
								</div>
							</div>
							<div class="cf-cal">
								<div class="cf-radio">
									<input type="checkbox" name="sc" id="friday">
									<label for="friday">Friday</label>
								</div>
								<div class="cf-radio">
									<input type="checkbox" name="sc" id="saturday">
									<label for="saturday">Saturday</label>
								</div>
								<div class="cf-radio">
									<input type="checkbox" name="sc" id="sunday">
									<label for="sunday">Sunday</label>
								</div>
							</div>
							<div class="clearfix"></div>
							<button class="site-btn sb-gradient">Filter now</button>
						</form>
					</div>-->
					<div class="sb-widget">
						<h2 class="sb-title">Popular Artist</h2>
						<div class="popular-classes-widget owl-carousel">
							<?php foreach($popart as $pop) { ?>
							<div class="pc-item">
								<div class="pc-thumb set-bg" data-setbg="<?php echo IMG_URL.$pop->image; ?>"></div>
								<div class="pc-text">
									<h4><a href="#"><?php echo $pop->user_name; ?></a></h4>
									<ul>
										<li><?php echo $pop->email; ?></li>
										<li><?php echo $pop->mobile; ?></li>
									</ul>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
					<!--<div class="sb-widget">
						<div class="sb-video">
							<img src="img/video.jpg" alt="">
							<a href="https://www.youtube.com/watch?v=vgv-hzTl5FA" class="video-popup"><img src="<?php echo base_url();?>front_assets/img/icons/play.png" alt=""></a>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</section>
	<!-- Classes Section end -->

