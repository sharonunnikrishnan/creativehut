<?= $this->extend("layouts/landingpage") ?>

<?= $this->section("title") ?> Creative Hut | Web-development | Photography | UIUX | Digital-Marketing | Sharon Unnikrishnan<?= $this->endSection() ?>

<?= $this->section("content") ?>

<!-- <script>
	var csrfName = '<?= csrf_token() ?>';
	var csrfHash = '<?= csrf_hash() ?>';
</script> -->
<script>
	
	function clear_contact()
	{
		$('#contact_email').val('');
		$('#contact_phone').val(''); 
		$('#contact_message').val(''); 
	}
	function contact_us()
	{
		var email = $('#contact_email').val();
		var phone = $('#contact_phone').val(); 
		var message = $('#contact_message').val(); 
		if(email != '')  
		{
			$.ajax({  
				url:"<?php echo base_url() . '/contactus/create'?>",  
				method:'POST',  
				data:{email : email, phone : phone, message : message, [csrfName]: csrfHash},
				success:function(data)  
				{  
					var result = JSON.parse(data);
					csrfName = result.csrfName;
					csrfHash = result.csrfHash;  
					
					if(result.output==0)
					{
						swal("Thank you!", "We will contact you soon", "success");
					}
					else if(result.output==1)
					{
						swal("Sorry!", "Something went wrong", "error");
					}
					else if(result.output==2)
					{
						swal("Mail id already recieved", "We will contact you soon", "error");
					}
				}  
			});  
			clear_contact();
		}
		else
		{
			swal("Sorry!", "Please enter your email id", "error");
		}
	}

</script>

                <!---Banner Section Starts-->
		<div class="container">
			<div class="row">

				<div class="col-lg-6">
					<img src="assets/images/responsive-mockup.png" alt="banner image" class="img-fluid banner-img center"> 
					
				</div>

				<!-- <div class="box">
					<div class="square" style="--i:0;"></div>
					<div class="square" style="--i:1;"></div>
					<div class="square" style="--i:2;"></div>
					<div class="square" style="--i:3;"></div>
					<div class="square" style="--i:4;"></div>
					<div class="square" style="--i:5;"></div>
				</div> -->

				<!-- <div class="banner-sub-head">
					Sharon Unnikrishnan
				</div> -->

				<div class="col-lg-6 banner-head"> 
					Freelance Web Developer
					<div class="banner-sub-head">Web Development | Digital Marketing | Photography</div>
					<div class="center-btn">
						<?php if (current_user()): ?>
							<a href="<?= site_url("/admin/dashboard") ?>"><span class="signin">Login</span></a>
						<?php else: ?>
							<a href="<?= site_url("/login") ?>"><span class="signin">Login</span></a>
						<?php endif; ?>
							<a href="<?= site_url("/signup") ?>"><span class="signup">Sign Up</span></a>
					</div>
					<div style="clear:both"></div>
				</div>
				
				<div class="banner-icon">
					<div class="scroll-icon"></div>
					<!-- <i class='bx bx-desktop'></i> &nbsp <i class='bx bx-camera'></i> -->
				</div>
			</div>
		</div>
		<!--Banner Section Ends-->
		
		<!--Services-->
		<!-- <div class="container-fluid services"  style="background-color:#eeffe7">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 service-sec">
							<img src="assets/images/placeholder/web-design.svg" alt="" class="img-fluid center" style="width:40%">
							<div class="service-head">Web Designing</div>
					</div>
					<div class="col-lg-3 service-sec">
							<img src="assets/images/placeholder/web-development.svg" alt="" class="img-fluid center" style="width:40%">
							<div class="service-head">Web Development</div>
					</div>
					<div class="col-lg-3 service-sec">
							<img src="assets/images/placeholder/digital-marketing.svg" alt="" class="img-fluid center" style="width:40%">
							<div class="service-head">Digital Marketing</div>
					</div>
					<div class="col-lg-3 service-sec">
							<img src="assets/images/placeholder/photography.svg" alt="" class="img-fluid center" style="width:40%">
							<div class="service-head">Photography</div>
					</div>		  	
				</div>
			</div>
		</div>  -->
		<!--Services-->

		<!--Works-->
		<div class="container-fluid" id="works" style="margin-top:60px;">
			<div class="container">
				<div class="row	">
					<div class="sec-content-head center">
						<span>Portfolio</span>
					</div>
						<div class="box">
						
						<div class="dream">
							<a href="<?= site_url("ktr/new") ?>"><img src="assets/images/portfolio/webdesign-mockup.png"></a>
							<!-- <img src="assets/images/portfolio/2.png">
							<img src="assets/images/portfolio/3.jpg">
							<img src="assets/images/portfolio/4.jpg">
							<img src="assets/images/portfolio/5.jpg"> -->
								
						</div>

						<div class="dream">
							<!-- <img src="assets/images/portfolio/6.jpg">
							<img src="assets/images/portfolio/7.jpg">
							<img src="assets/images/portfolio/8.jpg">
							<img src="assets/images/portfolio/9.jpg">
							<img src="assets/images/portfolio/10.jpg"> -->
								
						</div>

						<div class="dream">
							<!-- <img src="assets/images/portfolio/11.jpg">
							<img src="assets/images/portfolio/12.jpg">
							<img src="assets/images/portfolio/13.jpg">
							<img src="assets/images/portfolio/14.jpg">
							<img src="assets/images/portfolio/15.jpg"> -->
								
						</div>

					</div>
				</div>
			</div>
		</div>
		<!--Works-->

		<!--Web Development-->

		<div class="container-fluid">
			<div class="container">
				<div class="row services">
					<div class="col-sm-12 sec-content-head">
						<div style="font-weight:600">Why Every Business Needs A Website?</div> 
					</div>
				
					<div class="box" style="margin-top:30px;">
						
						<div class="dream" style="padding:10px;">
							
							<div class="content-box">	
								<div style="font-size:40px;padding:10px;"><center><i class='bx bx-layout'></i></center></div>					
								A business’s online presence, regardless of industry, can have a massive impact on its success. In this day and age, some businesses still don’t realize that a majority of their customers will visit their website before making a purchase.

								Having a strong online presence, particularly a website, can be make or break for generating more revenue. Yes, the quality of your website impacts results.
							</div> 
							<div class="padding10px"></div>
							<div class="content-box">
								<div style="font-size:40px;padding:10px;"><center><i class='bx bx-sort-up'></i></center></div>					
								<b>Leads</b><br>
								Perhaps one of the most intriguing reasons to have a website for your business is because it can increase your chances of getting leads.

Once people find you online, become interested in your product or service and want to know more, they'll know how to contact you thanks to the information on your website, which gives you the opportunity to increase your sales. Even though websites have a cost, when used correctly, they have a positive ROI.

Organic Traffic 

Once you're online and have an SEO-optimized website, you have a chance of showing up in Google search results. This means that when people are searching for a product or service, there is a chance your website will show up in the results. This gives you the opportunity to drastically increase your customer base. 
							</div>
							
						</div>

						<div class="dream" style="padding:10px;">
							<div class="content-box">
							<div style="font-size:40px;padding:10px;"><center><i class='bx bx-shield-alt-2'></i></center></div>
								<b>Credibility</b> <br>
								One of the main reasons you should have a website for your business is to increase your organization's credibility. Chances are there are several providers offering a similar service to yours. One way you can stand out is by having a website that looks good and clearly communicates quality information to your consumers.

Without a website, people may question your legitimacy as a business. Having a website is an opportunity to make a great first impression and give people comfort that you’re a real business.
							</div>
							<div class="padding10px"></div>
							<div class="content-box">
								<div style="font-size:40px;padding:10px;"><center><i class='bx bx-purchase-tag-alt'></i></center></div>
								<b>Brand</b><br>
								Showcasing your brand to your prospective customers is one of the most important things that you can do. By clearly establishing who you are, what you represent and what you stand for, you increase the chances of your customers buying from you.

This is also something that can set you apart from your competitors. Without a website, it can be incredibly challenging to do this because people can't easily find quality and reliable information on your business. 
							</div> 
							<div class="padding10px"></div>
							<div class="content-box">
								<div style="font-size:40px;padding:10px;"><center><i class='bx bx-store'></i></center></div>
								<b>Digital Marketing</b> <br>
								If you plan on leveraging digital marketing to increase your leads and grow your business, you'll likely want to drive traffic to a website or landing page. To do this effectively, leverage historic traffic that has been going to your website so you can target the most qualified customers and get the best ROI on your ad spend. This is something that can’t be set up retroactively, so it is best to get your website running early even if you’re not planning on running ads at the moment. 
							</div>
							
						</div>

						<div class="dream" style="padding:10px;">
							<div class="content-box">
								<div style="font-size:40px;padding:10px;"><center><i class='bx bx-time-five' ></i></center></div>
								<b>Saving You Time + Customer Service  </b><br>
								Many businesses get calls from prospects or existing customers asking simple questions about location and hours of operation. If you miss a call, the customer is left unhappy. Calls can also distract your staff from focusing on the most important parts of your business. A website can reduce these calls and increase internal productivity. At the same time, it helps customers find useful information without needing to call, which ultimately provides an all-around better user experience.
							</div>
							<div class="padding10px"></div>
							<div class="content-box">
								<div style="font-size:40px;padding:10px;"><center><i class='bx bxs-megaphone'></i></center></div>
								<b>Updates And Announcements </b><br>
								Since your website is on 24/7, it's easy to post updates and announcements to your customers. It's a way to keep them up to date on everything that you're doing. When something is particularly relevant to them, it increases the chance of you being able to upsell them.
							</div> 
							<div class="padding10px"></div>
							<div class="content-box">
								<div style="font-size:40px;padding:10px;"><center><i class='bx bx-globe'></i></center></div>
								<b>Organic Traffic</b><br>
								Once you're online and have an SEO-optimized website, you have a chance of showing up in Google search results. This means that when people are searching for a product or service, there is a chance your website will show up in the results. This gives you the opportunity to drastically increase your customer base. 
							</div> 
						</div>
 
					</div>
					
				</div>
			</div>
		</div>


		<div class="container-fluid">
			<div class="container">
				<div class="row services">
					<div class="col-lg-6 sec-content1">
						<div class="sec-content-head">Are you looking for a website?</div> <br>Either static or dynamic. I am here to help you create a beautiful responsive and SEO friendly website.
						<div style="margin-top:30px;font-size:40px;">
							<i class="fa-brands fa-html5"></i>
							<i class="fa-brands fa-css3-alt"></i>
							<i class="fa-brands fa-js"></i>
							<i class="fa-brands fa-linux"></i>
							<i class="fa-brands fa-php"></i>
							<i class="fa-solid fa-database"></i>
							<i class="fa-brands fa-wordpress"></i>
							<i class="fa-brands fa-wix"></i>
							<i class="fa-brands fa-shopify"></i>
							
						</div>
					</div>
					<div class="col-lg-6">
						<img src="assets/images/responsive-dev-mockup.png" alt="" class="img-fluid center" style="width:70%;">
					</div>
				</div>
			</div>
		</div>
		<!--Web Development-->

		

		<!--Footer-->
		<div class="container-fluid full-container contact-us" id="about-me" style="margin-top:60px">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 footer-content1"> 
						
						<!-- <div class="center"><span class="hover-green footer-active">Home</span> | <span class="hover-green">Services</span> | <span class="hover-green">Products</span> | <span class="hover-green">Shop</span> | <span class="hover-green">Blog</span></div> -->
						<div class="center" style="margin-top:40px;"><span class="hover-green footer-active">About Me</span></div>
						<div class="center" style="text-align:justify"><span class="hover-green">Hi!. My name is Sharon Unnikrishnan. I am a freelance web developer and photography enthusiast. I have more than 5 years of experience in web development and using various tools like html, css, javascript, php, mysql etc.. <br> I would like to share my knowledge and experience to make your business a success.</span></div>
						

						<div style="margin-top:40px" class="center">
							<div style="float:left;width:100px;"><i class='bx bx-map footer-active'></i> Location </div><div style="float:left;">: Kannur , Kerala</div>
							<div style="clear:both"></div> 
							<div style="float:left;width:100px;"><i class='bx bx-phone footer-active'></i> Phone </div><div style="float:left;">: 9747642004 </div>
							<div style="clear:both"></div> 
							<div style="float:left;width:100px;"><i class='bx bx-envelope footer-active'></i> Email </div><div style="float:left;">: creativehut@gmail.com</div>
							<div style="clear:both"></div> 
						</div>

						<div style="margin-top:20px;" class="center">
							<div class="social-circle social-icons"><i class='bx bxl-facebook'></i> </div> 
							<div class="social-circle social-icons"><i class='bx bxl-instagram'></i></div> 
							<div class="social-circle social-icons"><i class='bx bxl-whatsapp '></i> </div>
						</div>

						<div style="clear:both"></div> 
					</div>
					
					<!-- <div class="col-sm-4 contact-us-form"> 
						<form method="post" id="contact_form">
							<div class="app-form-group">
								<input type="email" class="app-form-control" placeholder="Email*" name="email" id="contact_email">
							</div>
							<div class="app-form-group">
								<input type="text" class="app-form-control" placeholder="Contact No" name="phone" id="contact_phone">
							</div>
							<div class="app-form-group message">
								<textarea class="app-form-control" placeholder="Message" name="message" id="contact_message"></textarea>
							</div>
							<div class="app-form-group buttons">
								<button class="app-form-button"  onclick="clear_contact()">CANCEL</button>
								<button class="app-form-button"  onclick="contact_us()">SEND</button>
							</div>
						</form>
					</div> -->

					<div class="col-lg-7" style="padding:50px;"> 
					<div class="mapouter center"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=perumachery&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/">format json</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {width:100%!important;height:400px!important;}</style></div>
					</div>
				</div>
			</div>
		</div>

		<!--Contact Us Ends-->


<?= $this->endSection() ?>

