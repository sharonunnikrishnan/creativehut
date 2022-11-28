<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- For Window Tab Color --> 
		<title><?= $this->renderSection("title") ?></title> 

		<!--favicon-->
		<link rel="icon" href="/assets/images/favicon.ico" type="image/png" sizes="32x32"/> 

		<!-- Main style sheet -->
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" media="all"> 
		<link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="all"> 
		<link rel="stylesheet" type="text/css" href="/assets/css/my-style.css" media="all"> 
        <link rel="stylesheet" type="text/css" href="/assets/css/navbar.css" media="all"> 
 
  		<link href="/assets/css/twentytwenty.css" rel="stylesheet" type="text/css" />

		<!-- Icons CSS-->
		<link href="/assets/css/icons.css" rel="stylesheet" type="text/css"/>
 	
		 <!-------Google Font linking-------->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&&Varela+Round&&display=swap" rel="stylesheet"> 

        <link rel="stylesheet" type="text/css" href="<?= site_url('/css/auto-complete.css') ?>">

		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<script>
			var csrfName = '<?= csrf_token() ?>';
			var csrfHash = '<?= csrf_hash() ?>';
		</script>
		
		<script>
	
			function clear_contact_popup()
			{
				$('#contact_email_popup').val('');
				$('#contact_number_popup').val(''); 
				$('#contact_message_popup').val(''); 
			}
			function contact_us_popup()
			{
				var email = $('#contact_email_popup').val();
				var phone = $('#contact_number_popup').val(); 
				var message = $('#contact_message_popup').val(); 
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
					clear_contact_popup();
				}
				else
				{
					swal("Sorry!", "Please enter your email id", "error");
				}
			}

		</script>

		
	</head>

	<body class="hero-banner-two">

		<div class="main-page-wrapper light-bg">
			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<section>
				<div id="preloader">
					<div id="ctn-preloader" class="ctn-preloader">
						<div class="animation-preloader">
							<div class=""><img src="assets/images/logo.svg" alt="" class="m-auto d-block" style="width:50%"> <span></span></div>
							<div class="txt-loading mt-4">
								<span data-text-preloader="C" class="letters-loading">
									C
								</span>
								<span data-text-preloader="R" class="letters-loading">
									R
								</span>
								<span data-text-preloader="E" class="letters-loading">
									E
								</span>
								<span data-text-preloader="A" class="letters-loading">
									A
								</span>
								<span data-text-preloader="T" class="letters-loading">
									T
								</span>
								<span data-text-preloader="I" class="letters-loading">
									I
								</span>
								<span data-text-preloader="V" class="letters-loading">
									V
								</span>
								<span data-text-preloader="E" class="letters-loading">
									E
								</span>
								<span data-text-preloader="H" class="letters-loading">
									H
								</span>
								<span data-text-preloader="U" class="letters-loading">
									U
								</span>
								<span data-text-preloader="T" class="letters-loading">
									T
								</span>
								
							</div>
						</div>	
					</div>
				</div>
			</section>


			<!-- 
			=============================================
				Search
			============================================== 
			-->
			<!-- <div class="offcanvas offcanvas-top theme-search-form justify-content-center" tabindex="-1" id="offcanvasTop">
				<button type="button" class="close-btn tran3s" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
				<div class="form-wrapper">
					<form action="#">
						<input type="text" placeholder="Search Keyword....">
						<button><i class="bi bi-search"></i></button>
					</form>
				</div>  
			</div> -->


			<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
			<header class="theme-main-menu sticky-menu theme-menu-two">
				<div class="inner-content">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo"><a href="index.html"><img src="assets/images/logo.svg" alt="" width="50"></a><span class="logo-head">Creative Hut</span></div>
						<nav class="navbar navbar-expand-lg">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						    	<span></span>
						 	</button>
						    <div class="collapse navbar-collapse" id="navbarNav">
						    	<ul class="navbar-nav"> 
						    		<li class="d-block d-lg-none"><div class="logo" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"><a href="index.html"><img src="assets/images/logo.svg" alt="" width="50"></a> <span class="logo-head">Creative Hut</span></div></li>
							        <li class="nav-item active dropdown mega-dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class='bx bx-home'></i> Home</a>
							        	<!-- <ul class="dropdown-menu">
							                <li class="pb-20">
							                	<div class="row gx-2">
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="index.html" class="d-block img-meta"><img src="/assets/images/portfolio/1.jpg" alt="" class="tran4s"></a>
							                			<a href="index.html" class="dropdown-item"><span>Creative Agency</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="index-2.html" class="d-block img-meta"><img src="images/nav-img/home01.jpg" alt="" class="tran4s"></a>
							                			<a href="index-2.html" class="dropdown-item"><span>Business</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="index-3.html" class="d-block img-meta"><img src="images/nav-img/home03.jpg" alt="" class="tran4s"></a>
							                			<a href="index-3.html" class="dropdown-item"><span>Agency Minimal</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="index-4.html" class="d-block img-meta"><img src="images/nav-img/home04.jpg" alt="" class="tran4s"></a>
							                			<a href="index-4.html" class="dropdown-item"><span>Service Provider</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="index-5.html" class="d-block img-meta"><img src="images/nav-img/home05.jpg" alt="" class="tran4s"></a>
							                			<a href="index-5.html" class="dropdown-item"><span>Startup</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="index-6.html" class="d-block img-meta"><img src="images/nav-img/home06.jpg" alt="" class="tran4s"></a>
							                			<a href="index-6.html" class="dropdown-item"><span>Design Studio Light</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="index-7.html" class="d-block img-meta"><img src="images/nav-img/home07.jpg" alt="" class="tran4s"></a>
							                			<a href="index-7.html" class="dropdown-item"><span>Design Studio Dark</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="index-8.html" class="d-block img-meta"><img src="images/nav-img/home08.jpg" alt="" class="tran4s"></a>
							                			<a href="index-8.html" class="dropdown-item"><span>Shop Standard</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="index-9.html" class="d-block img-meta"><img src="images/nav-img/home09.jpg" alt="" class="tran4s"></a>
							                			<a href="index-9.html" class="dropdown-item"><span>Shop Creative</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="index-10.html" class="d-block img-meta"><img src="images/nav-img/home10.jpg" alt="" class="tran4s"></a>
							                			<a href="index-10.html" class="dropdown-item"><span>Startup Agency</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="index-11.html" class="d-block img-meta"><img src="images/nav-img/home11.jpg" alt="" class="tran4s"></a>
							                			<a href="index-11.html" class="dropdown-item"><span>Consulting Agency</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="index-12.html" class="d-block img-meta"><img src="images/nav-img/home13.jpg" alt="" class="tran4s"></a>
							                			<a href="index-12.html" class="dropdown-item"><span>Photographer Portfolio</span><i class="tag">New</i></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="index-13.html" class="d-block img-meta"><img src="images/nav-img/home14.jpg" alt="" class="tran4s"></a>
							                			<a href="index-13.html" class="dropdown-item"><span>Designer Portfolio</span><i class="tag">New</i></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="index-14.html" class="d-block img-meta"><img src="images/nav-img/home15.jpg" alt="" class="tran4s"></a>
							                			<a href="index-14.html" class="dropdown-item"><span>Marketing Agency</span><i class="tag">New</i></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="index-15.html" class="d-block img-meta"><img src="images/nav-img/home18.jpg" alt="" class="tran4s"></a>
							                			<a href="index-15.html" class="dropdown-item"><span>Design Agency Portfolio</span><i class="tag">New</i></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="coming-soon.html" class="d-block img-meta"><img src="images/nav-img/home12.jpg" alt="" class="tran4s"></a>
							                			<a href="coming-soon.html" class="dropdown-item"><span>Coming Soon</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<div class="d-block img-meta">
							                				<img src="images/nav-img/home16.jpg" alt="" class="tran4s">
							                				<div class="cs d-flex align-items-center justify-content-center"><span>Coming Soon</span></div>
							                			</div>
							                			<div class="dropdown-item"><span>Startup Modern</span></div>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<div class="d-block img-meta">
							                				<img src="images/nav-img/home17.jpg" alt="" class="tran4s">
							                				<div class="cs d-flex align-items-center justify-content-center"><span>Coming Soon</span></div>
							                			</div>
							                			<div class="dropdown-item"><span>Business</span></div>
							                		</div>
							                	</div>
							                </li>
						                </ul> -->
						            </li>
						            <li class="nav-item dropdown mega-dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class='bx bx-phone-call'></i> Services</a>
						                <ul class="dropdown-menu">
							                <li>
							                	<div class="row">
							                		<div class="col-lg-3">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Web Designing</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="ui-headerV1.html" class="dropdown-item"><span>UI/UX</span></a></li>
							                					<li><a href="ui-headerV2.html" class="dropdown-item"><span>Responsive Website</span></a></li>
							                					<!-- <li><a href="ui-headerV3.html" class="dropdown-item"><span>Graphic Designing</span></a></li> -->
							                					<!-- <li><a href="ui-headerV4.html" class="dropdown-item"><span>Classic Dark Header</span></a></li> -->
							                					<!-- <li><a href="ui-headerV5.html" class="dropdown-item"><span>eCommerce Light Header</span></a></li>
							                					<li><a href="ui-headerV6.html" class="dropdown-item"><span>eCommerce Dark Header</span></a></li>
							                					<li><a href="ui-headerV7.html" class="dropdown-item"><span>Center Logo Header</span></a></li>
							                					<li><a href="ui-headerV8.html" class="dropdown-item"><span>Search Input Header</span></a></li>
							                					<li><a href="ui-headerV9.html" class="dropdown-item"><span>Search Popup Header</span></a></li> -->
							                				</ul>
							                			</div>
							                		</div>
							                		<div class="col-lg-3">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Web Development</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="ui-menuV1.html" class="dropdown-item"><span>Full Stack Web Development</span></a></li>
							                					<li><a href="ui-menuV2.html" class="dropdown-item"><span>LAMP (Linux | Apache | MySql | Php)</span></a></li>
							                					<li><a href="ui-menuV3.html" class="dropdown-item"><span>Wordpress - CMS</span></a></li>
							                					<li><a href="ui-menuV4.html" class="dropdown-item"><span>WooCommerce</span></a></li>
							                					<!-- <li><a href="ui-animated-text.html" class="dropdown-item"><span>Animated Text</span></a></li>
							                					<li><a href="ui-blog-post.html" class="dropdown-item"><span>Blog Post</span></a></li>
							                					<li><a href="ui-button.html" class="dropdown-item"><span>Buttons</span></a></li>
							                					<li><a href="ui-contact.html" class="dropdown-item"><span>Contact Us</span></a></li> -->
							                				</ul>
							                			</div>
							                		</div>
							                		<div class="col-lg-3">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Photography</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="ui-counter.html" class="dropdown-item"><span>Portrait Photography</span></a></li>
							                					<li><a href="ui-cta.html" class="dropdown-item"><span>Newborn Photography </span></a></li>
							                					<li><a href="ui-faq.html" class="dropdown-item"><span>Commercial Photography</span></a></li>
							                					<li><a href="ui-feature-block.html" class="dropdown-item"><span>Product Photography</span></a></li>
																<li><a href="ui-feature-block.html" class="dropdown-item"><span>Photo Retouching</span></a></li>
							                					<!-- <li><a href="ui-footer.html" class="dropdown-item"><span>Footers</span></a></li>
							                					<li><a href="ui-form.html" class="dropdown-item"><span>Forms</span></a></li>
							                					<li><a href="ui-gallery.html" class="dropdown-item"><span>Gallery</span></a></li>
							                					<li><a href="ui-heading.html" class="dropdown-item"><span>Heading</span></a></li> -->
							                				</ul>
							                			</div>
							                		</div>
							                		<div class="col-lg-3">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Digital Marketing</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="ui-hero-section.html" class="dropdown-item"><span>SEO Marketing</span></a></li>
							                					<li><a href="ui-list-item.html" class="dropdown-item"><span>Email Marketing</span></a></li>
							                					<!-- <li><a href="ui-pagination.html" class="dropdown-item"><span>Pagination</span></a></li>
							                					<li><a href="ui-service.html" class="dropdown-item"><span>Service Feature</span></a></li>
							                					<li><a href="ui-subscribe-form.html" class="dropdown-item"><span>Subscribe Form</span></a></li>
							                					<li><a href="ui-team.html" class="dropdown-item"><span>Team Member</span></a></li>
							                					<li><a href="ui-testimonial.html" class="dropdown-item"><span>Testimonial</span></a></li>
							                					<li><a href="ui-text-block.html" class="dropdown-item"><span>Text Block</span></a></li> -->
							                				</ul>
							                			</div>
							                		</div>
							                	</div>
							                </li>
						                </ul>
						            </li>
							        
						            <li class="nav-item dropdown mega-dropdown-md">
							        	<a class="nav-link dropdown-toggle" href="#works" role="button"><i class='bx bx-shopping-bag'></i> Works</a>
										<!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class='bx bx-shopping-bag'></i> Products</a> -->
						                <!-- <ul class="dropdown-menu">
							                <li>
							                	<div class="row">
							                		<div class="col-lg-4">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Web Designs Templates</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="about-usV1.html" class="dropdown-item"><span>About Minimal</span></a></li>
										            			<li><a href="about-usV2.html" class="dropdown-item"><span>About Classic</span></a></li>
										            			<li><a href="teamV1.html" class="dropdown-item"><span>Team Standard</span></a></li>
										            			<li><a href="teamV2.html" class="dropdown-item"><span>Team Classic: Dark</span></a></li>
										            			<li><a href="pricingV1.html" class="dropdown-item"><span>Pricing Standard</span></a></li>
										            			<li><a href="pricingV2.html" class="dropdown-item"><span>Pricing Standard: Dark</span></a></li>
							                				</ul>
							                			</div>
							                		</div>
							                		<div class="col-lg-4">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Mockups</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="contactV1.html" class="dropdown-item"><span>Contact Business</span></a></li>
										            			<li><a href="contactV2.html" class="dropdown-item"><span>Contact Agency</span></a></li>
										            			<li><a href="contactV3.html" class="dropdown-item"><span>Contact Standard</span></a></li>
										            			<li><a href="serviceV1.html" class="dropdown-item"><span>Service Minimal</span></a></li>
										            			<li><a href="serviceV3.html" class="dropdown-item"><span>Service Minimal: Dark</span></a></li>
										            			<li><a href="serviceV2.html" class="dropdown-item"><span>Service Classic</span></a></li>
							                				</ul>
							                			</div>
							                		</div>
							                		<div class="col-lg-4">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Logo Designs</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="testimonialV1.html" class="dropdown-item"><span>Testimonial Classic</span></a></li>
										            			<li><a href="testimonialV2.html" class="dropdown-item"><span>Testimonial Standard</span></a></li>
										            			<li><a href="testimonialV3.html" class="dropdown-item"><span>Testimonial Basic: Dark</span></a></li>
							                					<li><a href="faqV1.html" class="dropdown-item"><span>Faq Standard</span></a></li>
							                					<li><a href="faqV2.html" class="dropdown-item"><span>Faq With filter</span></a></li>
							                					<li><a href="404.html" class="dropdown-item"><span>404 Error</span></a></li>
							                				</ul>
							                			</div>
							                		</div>
							                	</div>
							                </li>
						                </ul> -->
						            </li>
						            <!-- <li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class='bx bx-cart-alt'></i> Shop</a>
						                <ul class="dropdown-menu">
						                	<li class="dropdown-submenu dropdown">
							                	<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Shop Elements</span></a>
							                	<ul class="dropdown-menu">
									            	<li><a href="product-detailsV1.html" class="dropdown-item"><span>Shop Details</span></a></li>
										            <li><a href="checkout.html" class="dropdown-item"><span>Checkout</span></a></li>
										            <li><a href="cart.html" class="dropdown-item"><span>Cart</span></a></li>
										            <li><a href="sign-in.html" class="dropdown-item"><span>Sign In</span></a></li>
										            <li><a href="sign-up.html" class="dropdown-item"><span>Sign Up</span></a></li>
									            </ul>
							                </li>
							                <li><a href="productV1.html" class="dropdown-item"><span>Grid Layout</span></a></li>
							                <li><a href="productV2.html" class="dropdown-item"><span>Grid With Sidebar</span></a></li>
							                <li><a href="productV3.html" class="dropdown-item"><span>Dark Layout</span></a></li>
							                <li><a href="productV4.html" class="dropdown-item"><span>Full Width Layout</span></a></li>
						                </ul>
						            </li> -->
							        <li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#about-me" role="button" > <i class='bx bx-edit'></i> About Me</a>
										<!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"> <i class='bx bx-edit'></i> About Me</a> -->
						                <!-- <ul class="dropdown-menu">
							                <li><a href="blogV1.html" class="dropdown-item"><span>Grid Layout</span></a></li>
							                <li><a href="blogV2.html" class="dropdown-item"><span>Grid Dark Layout</span></a></li>
							                <li><a href="blogV3.html" class="dropdown-item"><span>List With Sidebar</span></a></li>
							                <li><a href="blogV4.html" class="dropdown-item"><span>Full Width Dark</span></a></li>
							                <li class="dropdown-submenu dropdown">
							                	<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Blog Details</span></a>
							                	<ul class="dropdown-menu">
									            	<li><a href="blog-detailsV1.html" class="dropdown-item"><span>Standard</span></a></li>
										            <li><a href="blog-detailsV2.html" class="dropdown-item"><span>Featured Image</span></a></li>
										            <li><a href="blog-detailsV3.html" class="dropdown-item"><span>Creative Dark</span></a></li>
									            </ul>
							                </li>
						                </ul> -->
						            </li>
						    	</ul>
						    	<div class="mobile-content d-block d-lg-none">
						    		<!-- <form action="#" class="search-form">
								  		<input type="text" placeholder="Search here..">
								  		<button><i class="bi bi-search"></i></button>
								  	</form> -->
									  	<center><a class="btn btn-hover color-6" data-bs-toggle="modal" href="#subscribeModalToggle" role="button">Contact Us</a></center>
								  	<div class="address-block">
								  		<!-- <h4 class="title"> Address</h4>
								  		<p>Kannur, Kerala <br>India</p>
								  		<p> <i class='bx bx-whatsapp'></i> 9747642004</p> -->
								  	</div>
						    	</div> <!-- /.mobile-content -->
						    </div>
						</nav>
						<div class="right-widget d-flex align-items-center">
							
							<a class="btn btn-hover color-6 btn-nav" data-bs-toggle="modal" href="#subscribeModalToggle" role="button">Contact Us</a>
							
						</div> 
						<!-- /.right-widget -->
					</div>
				</div> <!-- /.inner-content -->
			</header> <!-- /.theme-main-menu -->

		</div>


		

		
		<?php if (session()->has('warning')): ?>
         
		 	<script> swal('<?= session('warning') ?>','','warning')</script>
	  
		<?php endif; ?>

		<?php if (session()->has('info')): ?>
			
			<script> swal('<?= session('info') ?>','Thank You','success')</script>
			
		<?php endif; ?>

		<?php if (session()->has('error')): ?>
			
			<script> swal('<?= session('error') ?>','','error')</script>
			
		<?php endif; ?>

        <?= $this->renderSection("content") ?>

		
		<!--Footer-->
		<div class="container-fluid footer-container">
			<div class="container">
				<div class="row"> 
					<div class="col-sm-12 footer-title">
						<i class="bx bx-copyright"></i> 2022 creativehut.online
					</div>
				</div>
			</div>
		</div> 
		<!--Footer Ends-->
			

		<!--Subscribe Modal-->
		<div class="modal fade" id="subscribeModalToggle" aria-hidden="true" aria-labelledby="subscribeModalToggleLabel" tabindex="-1">
			<div class="modal-dialog modal-dialog-centered">
			  <div class="modal-content">
				<div class="modal-header">
				  <h4 class="modal-title" id="subscribeModalToggleLabel">Contact Us</h4>
				  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					
					<div class="col-sm-12 contact-us-form1"> 
					 	<center><img src="assets/images/logo.svg" alt="" class="m-auto d-block" style="width:20%"> </center>

						<div class="input-container ic1">
							<input class="input" type="email" placeholder=" " name="email" id="contact_email_popup"/>
							<div class="cut"></div>
							<label for="contact_email_popup" class="placeholder">Email</label>
						</div>

						<div class="input-container ic1">
							<input class="input" type="text" placeholder=" " name="email" id="contact_number_popup"/>
							<div class="cut"></div>
							<label for="contact_number_popup" class="placeholder">Contact Number</label>
						</div>

						<div class="input-container ic1">
							<textarea class="input textarea"  placeholder=" " name="message" id="contact_message_popup"></textarea>
							<div class="cut"></div>
							<label for="contact_message_popup" class="placeholder">Message</label>
						</div>
						<div style="margin-top:80px;">
							<!-- <a class="btn btn-hover color-8 contact-btn" role="button" onclick="clear_contact_popup()">Clear</a> -->
							<a class="btn btn-hover color-6 contact-btn" role="button" onclick="contact_us_popup()">Send &nbsp &nbsp<i class="bx bx-send"></i></a>
						</div>
						<div style="clear:both"></div>
					</div>
						
				</div>
				<div class="modal-footer">
				  <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button> -->
				</div>
			  </div>
			</div>
		  </div>
		  
		<!--Response Modal Ends-->

		<div class="modal fade" id="responseModalToggle" aria-hidden="true" aria-labelledby="responseModalToggleLabel" tabindex="-1">
			<div class="modal-dialog modal-dialog-centered">
			  <div class="modal-content">
				<div class="modal-header">
				  <!-- <h5 class="modal-title" id="responseModalToggleLabel">Subscribe</h5> -->
				  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					
                    <center><div class="response-body"></div></center>
						
				</div>
				<div class="modal-footer">
				  <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button> -->
				</div>
			  </div>
			</div>
		  </div>

		  <!-- Response Modal Ends -->
			


		<button class="scroll-top">
			<i class="bx bx-up-arrow-alt"></i>
		</button>
			 

    	<!-- jQuery first, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="/assets/js/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="/assets/js/bootstrap.bundle.min.js"></script>  

		<script src="/assets/js/jquery.event.move.js"></script>
    	<script src="/assets/js/jquery.twentytwenty.js"></script>

		<!-- Theme js -->
		<script src="/assets/js/theme.js"></script>


		<script>
			$(function(){
			  $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
			  $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
			});
		</script>

		<!-- </div>  -->
		<!-- /.main-page-wrapper -->
	</body>
</html>