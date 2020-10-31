<?php 
$uri1 = uri_segment('1');
$uri2 = uri_segment('2');
$uri3 = uri_segment('3');
?>
<?Php $sedatas=$this->session->all_userdata();
$usertype=$sedatas['userinfo']->user_type;
?>
<div class="clearfix"> </div>
    <div class="page-container">
		<div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse">
				<ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
					<li class="sidebar-toggler-wrapper hide">
						<div class="sidebar-toggler">
							<span></span>
						</div>
					</li>

					<li class="nav-item start <?php if ($uri2 == 'dashboard') { echo 'active open'; } ?> ">
						<a href="<?php echo base_url();  ?>admin/dashboard" class="nav-link nav-toggle">
							<i class="icon-home"></i>
							<span class="title">Dashboard</span>
							<span class="selected"></span>
							<span class="arrow open"></span>
						</a>
					</li>
					<li class="nav-item start <?php if ($uri1 == 'category') { echo 'active open'; } ?> ">
						<a href="<?php echo base_url();  ?>category" class="nav-link nav-toggle">
							<i class="icon-docs"></i>
							<span class="title">Category</span>
						</a>
					</li>
					<li class="nav-item start <?php if ($uri1 == 'sub_category') { echo 'active open'; } ?> ">
						<a href="<?php echo base_url();  ?>sub_category" class="nav-link nav-toggle">
							<i class="icon-docs"></i>
							<span class="title">Sub Category</span>
						</a>
					</li>
					<li class="nav-item start <?php if ($uri1 == 'level') { echo 'active open'; } ?> ">
						<a href="<?php echo base_url();  ?>level" class="nav-link nav-toggle">
							<i class="icon-docs"></i>
							<span class="title">Level</span>
						</a>
					</li>
					<li class="nav-item start <?php if ($uri1 == 'experince') { echo 'active open'; } ?> ">
						<a href="<?php echo base_url();  ?>experince" class="nav-link nav-toggle">
							<i class="icon-docs"></i>
							<span class="title">Experince</span>
						</a>
					</li>
					<li class="nav-item start <?php if ($uri1 == 'header') { echo 'active open'; } ?> ">
						<a href="<?php echo base_url();  ?>header" class="nav-link nav-toggle">
							<i class="icon-docs"></i>
							<span class="title">Header Data</span>
						</a>
					</li>
					<li class="nav-item start <?php if ($uri1 == 'footer') { echo 'active open'; } ?> ">
						<a href="<?php echo base_url();  ?>footer" class="nav-link nav-toggle">
							<i class="icon-docs"></i>
							<span class="title">Footer data</span>
						</a>
					</li>
					<li class="nav-item start <?php if ($uri1 == 'howitwork') { echo 'active open'; } ?> ">
						<a href="<?php echo base_url();  ?>howitwork" class="nav-link nav-toggle">
							<i class="icon-docs"></i>
							<span class="title">How it work data</span>
						</a>
					</li>
					<li class="nav-item start <?php if ($uri1 == 'advantage') { echo 'active open'; } ?> ">
						<a href="<?php echo base_url();  ?>advantage" class="nav-link nav-toggle">
							<i class="icon-docs"></i>
							<span class="title">Our Advantage</span>
						</a>
					</li>
					<li class="nav-item start <?php if ($uri1 == 'additional') { echo 'active open'; } ?> ">
						<a href="<?php echo base_url();  ?>additional" class="nav-link nav-toggle">
							<i class="icon-docs"></i>
							<span class="title">Additional Service</span>
						</a>
					</li>
					<li class="nav-item start <?php if ($uri1 == 'service') { echo 'active open'; } ?> ">
						<a href="<?php echo base_url();  ?>service" class="nav-link nav-toggle">
							<i class="icon-docs"></i>
							<span class="title">Service</span>
						</a>
					</li>
				</ul>
			</div>
        </div>
		<style>
		.input-inline{margin-left: 10px;}
		</style>
        <!-- END SIDEBAR -->