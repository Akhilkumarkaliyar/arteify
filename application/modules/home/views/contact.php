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
				<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>-->
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
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>Contact Us</h2>
					<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Contact Section -->
	<section class="contact-page-section spad overflow-hidden">
		<div class="container">
			<div class="contact-map"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Palam%20Corporate%20Plaza%2C%20Sector-3%2CGurugram%20%2C122017&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			</div>
			<div class="row">
				<div class="col-lg-5">
					<div class="con-info">
						<h3>Visit the Scheppend Solutions</h3>
						<ul>
							<li><i class="material-icons">map</i>Palam Corporate Plaza, Sector-3,Gurugram ,122017</li>
						</ul>
					</div>
					<div class="con-info">
						<h3>Message Us</h3>
						<ul>
							<li><i class="material-icons">map</i>0124-4181680</li>
							<li><i class="material-icons">map</i>admin@scheppendsolutions.com</li>
						</ul>
					</div>
					<div class="con-info">
						<h3>Opening Hours</h3>
						<ul>
							<li><i class="material-icons">map</i>Mon - Fri:  6:30am - 07:45pm</li>
						</ul>
					</div>
					<div class="contact-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-7">
					<?php echo form_open('',array('id'=>'contact_form' ,'class'=>"singup-form contact-form")); ?> 
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="name" id="name" placeholder="Name">
								<span id="error_name" class="error"></span>
							</div>
							<div class="col-md-6">
								<input type="text" name="email" id="email" placeholder="Your Email">
								<span id="error_email" class="error"></span>
							</div>
							<div class="col-md-6">
								<input type="text" name="mobile"  id="mobile" placeholder="Phone Number">
								<span id="error_mobile" class="error"></span>
							</div>
							<div class="col-md-6">
								<input type="text" name="pin" id="pin" placeholder="pin">
								<span id="error_pin" class="error"></span>
							</div>
							<div class="col-md-12">
								<textarea name="message" id="message" placeholder="Message"></textarea>
								<span id="error_message" class="error"></span>
							</div>
							<div class="col-md-4">
								<p id="suc" style="color: #e7a719;font-size: 20px;"></p>
                                <input type="button" id="contactsubmit" onclick="contact_submit()" class="site-btn sb-gradient" value="Send message" /> 
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Trainers Section end -->

	
<style>
	.error{color: #ef0914de;}
</style>
<script>
function contact_submit()
{
	var z = true;
	if($('#name').val() =='')
	{
		$('#error_name').html('Please enter name');
		z = false;
	}
	if($('#mobile').val() =='')
	{
		$('#error_mobile').html('Please enter mobile no');
		z = false;
	}
	if($('#email').val() =='')
	{
		$('#error_email').html('Please enter email');
		z = false;
	}
	/*if($('#email').val()!="" && !isValidEmailAddress($('#email').val()))
	{
		$('#error_email').html('Please Enter valid Email ID!');
		z=true;
	}*/
	if($('#pin').val() =='')
	{
		$('#error_pin').html('Please enter your pin');
		z = false;
	}
	if($('#message').val() =='')
	{
		$('#error_message').html('Please enter your message');
		z = false;
	}
	
	if(z)
	{
		$('.error').html('');
		var formdata=$("#contact_form").serialize();
		console.log(formdata);
		$.ajax({
			type: "POST",
			url: '<?php echo base_url(); ?>'+'home/contactform',
			data: formdata,
			success:function(response)
			{
				if(response ==1){
					//alert('thanks we will you back soon');
					$("#suc").text("Thanks for query. we will get back to you soon !!!!");
				}else{
					alert('Please try again !!!');
				}
			}	
				
		}); 
	}
}
</script>