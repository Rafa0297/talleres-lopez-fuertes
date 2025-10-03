<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Noto+Serif:ital,wght@1,700&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="style.css">

	<!-- Font Icons -->
	<link rel="stylesheet" href="css/font-icons.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title>Header - Navigation | Canvas</title>

	<style>
		@media (min-width: 992px) {

			.block-nav-header-2 #top-bar.transparent-topbar {
				background: transparent !important;
				z-index: 399;
				border-bottom: 0;
			}

			.block-nav-header-2 .primary-menu {
				border-top: 1px solid rgba(255,255,255,0.3);
			}

			.block-nav-header-2 .transparent-topbar + .transparent-header + #content {
				margin-top: -163px; /*  #header(height) + #top-bar(height) */
			}
		}

		.block-nav-header-2 .dark .top-links li > a,
		.block-nav-header-2 .dark #top-social li a { color: #f5f5f5; }

		.block-nav-header-2 .dark #top-social li,
		.block-nav-header-2 .top-links-item { border-left: 0; }

	</style>

</head>

<body class="stretched block-nav-header-2">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="transparent-topbar dark py-md-2">
			<div class="container">

				<div class="row align-items-center">

					<div class="col-12 col-lg-3 col-md-2">
						<div class="top-links d-flex justify-content-center justify-content-lg-start">
							<ul class="top-links-container">
								<li class="top-links-item"><a href="#">EN</a>
									<ul class="top-links-sub-menu" style="width: 53px; left: 0;">
										<li class="top-links-item"><a href="#">TH</a></li>
										<li class="top-links-item"><a href="#">AR</a></li>
										<li class="top-links-item"><a href="#">ES</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- .top-links end -->
					</div>

					<div class="col-12 col-lg-6 col-md-8">
						<!-- Top Links
						============================================= -->
						<div class="top-links">
							<ul class="top-links-container">
								<li class="top-links-item px-1 ls-2"><a href="demo-travel.php">Home</a></li>
								<li class="top-links-item px-1 ls-2"><a href="faqs.php">FAQs</a></li>
								<li class="top-links-item px-1 ls-2"><a href="contact.php">Contact</a></li>
							</ul>
						</div><!-- .top-links end -->
					</div>

					<div class="col-12 col-lg-3 col-md-2">
						<!-- Top Social
						============================================= -->
						<ul id="top-social" class="justify-content-center justify-content-lg-end">
							<li><a href="#" class="h-bg-facebook"><span class="ts-icon"><i class="fa-brands fa-facebook-f"></i></span><span
										class="ts-text">Facebook</span></a></li>
							<li><a href="#" class="h-bg-x-twitter"><span class="ts-icon"><i class="fa-brands fa-x-twitter"></i></span><span
										class="ts-text">Twitter</span></a></li>
							<li><a href="#" class="h-bg-pinterest"><span class="ts-icon"><i class="fa-brands fa-pinterest-p"></i></span><span
										class="ts-text">Pinterest</span></a></li>
							<li><a href="#" class="h-bg-instagram"><span class="ts-icon"><i class="fa-brands fa-instagram"></i></span><span
										class="ts-text">Instagram</span></a></li>
						</ul><!-- #top-social end -->

					</div>
				</div>

			</div>
		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="me-lg-0">
							<a href="index.php">
								<img class="logo-default" srcset="images/logo.png, images/logo@2x.png 2x" src="images/logo@2x.png" alt="Canvas Logo">
								<img class="logo-dark" srcset="images/logo-dark.png, images/logo-dark@2x.png 2x" src="images/logo-dark@2x.png" alt="Canvas Logo">
							</a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="uil uil-search"></i><i class="bi-x-lg"></i></a>
							</div><!-- #top-search end -->

							<!-- Top Cart
							============================================= -->
							<div id="top-cart" class="header-misc-icon">
								<a href="#" id="top-cart-trigger"><i class="uil uil-shopping-bag"></i><span class="top-cart-number">5</span></a>
								<div class="top-cart-content">
									<div class="top-cart-title">
										<h4>Shopping Cart</h4>
									</div>
									<div class="top-cart-items">
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt"></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">Blue Round-Neck Tshirt with a Button</a>
													<span class="top-cart-item-price d-block">$19.99</span>
												</div>
												<div class="top-cart-item-quantity">x 2</div>
											</div>
										</div>
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress"></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">Light Blue Denim Dress</a>
													<span class="top-cart-item-price d-block">$24.99</span>
												</div>
												<div class="top-cart-item-quantity">x 3</div>
											</div>
										</div>
									</div>
									<div class="top-cart-action">
										<span class="top-checkout-price">$114.95</span>
										<a href="#" class="button button-3d button-small m-0">View Cart</a>
									</div>
								</div>
							</div><!-- #top-cart end -->

						</div>

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item">
									<a class="menu-link" href="index.php">
										<div>Home</div>
									</a>
									<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="intro.php#section-niche">
												<div>Niche Demos</div>
											</a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-corporate.php">
												<div>Home - Corporate</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-corporate.php">
														<div>Corporate - Layout 1</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-corporate-2.php">
														<div>Corporate - Layout 2</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-corporate-3.php">
														<div>Corporate - Layout 3</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-corporate-4.php">
														<div>Corporate - Layout 4</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-portfolio.php">
												<div>Home - Portfolio</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-portfolio.php">
														<div>Portfolio - Layout 1</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-portfolio-2.php">
														<div>Portfolio - Layout 2</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-portfolio-3.php">
														<div>Portfolio - Masonry</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-portfolio-4.php">
														<div>Portfolio - AJAX</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-blog.php">
												<div>Home - Blog</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-blog.php">
														<div>Blog - Layout 1</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-blog-2.php">
														<div>Blog - Layout 2</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-blog-3.php">
														<div>Blog - Layout 3</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-shop.php">
												<div>Home - Shop</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-shop.php">
														<div>Shop - Layout 1</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-shop-2.php">
														<div>Shop - Layout 2</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-magazine.php">
												<div>Home - Magazine</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-magazine.php">
														<div>Magazine - Layout 1</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-magazine-2.php">
														<div>Magazine - Layout 2</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-magazine-3.php">
														<div>Magazine - Layout 3</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="landing.php">
												<div>Home - Landing Page</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="landing.php">
														<div>Landing Page - Layout 1</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="landing-2.php">
														<div>Landing Page - Layout 2</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="landing-3.php">
														<div>Landing Page - Layout 3</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="landing-4.php">
														<div>Landing Page - Layout 4</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="landing-5.php">
														<div>Landing Page - Layout 5</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-fullscreen-image.php">
												<div>Home - Full Screen</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-fullscreen-image.php">
														<div>Full Screen - Image</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-fullscreen-slider.php">
														<div>Full Screen - Slider</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-fullscreen-video.php">
														<div>Full Screen - Video</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-onepage.php">
												<div>Home - One Page</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-onepage.php">
														<div>One Page - Default</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-onepage-2.php">
														<div>One Page - Submenu</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-onepage-3.php">
														<div>One Page - Dots Style</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="#">
												<div>Extras</div>
											</a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="index-wedding.php">
																<div>Wedding</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="index-restaurant.php">
																<div>Restaurant</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="index-events.php">
																<div>Events</div>
															</a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="index-parallax.php">
																<div>Parallax</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="index-app-showcase.php">
																<div>App Showcase</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="index-boxed.php">
																<div>Boxed Layout</div>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="#">
										<div>Features</div>
									</a>
									<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="#">
												<div><i class="bi-hypnotize"></i>Sliders</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="slider-revolution.php">
														<div>Revolution Slider</div>
													</a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="rs-demos.php">
																<div>Premium Templates</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution.php">
																<div>Full Screen</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution-fullwidth.php">
																<div>Full Width</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution-kenburns.php">
																<div>Kenburns Effect</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution-html5-videos.php">
																<div>HTML5 Video</div>
															</a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="slider-canvas.php">
														<div>Canvas Slider</div>
													</a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas.php">
																<div>Full Width</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-fade.php">
																<div>Fade Transition</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-autoplay.php">
																<div>Autoplay Feature</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-video-event.php">
																<div>Custom Video Event</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-pagination.php">
																<div>Pagination Navigation</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-3.php">
																<div>3 Columns</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-4.php">
																<div>4 Columns</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-5.php">
																<div>5 Columns</div>
															</a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="slider-flex.php">
														<div>Flex Slider</div>
													</a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="slider-flex.php">
																<div>Default Layout</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-flex-thumbs.php">
																<div>with Thumbs</div>
															</a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="slider-owl.php">
														<div>Owl Slider</div>
													</a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="slider-owl-full.php">
																<div>Full Width</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-owl.php">
																<div>Boxed Width</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-owl-videos.php">
																<div>Video Slider</div>
															</a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="static-parallax.php">
														<div>Static Media</div>
													</a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="static-parallax.php">
																<div>Static - Parallax</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-image.php">
																<div>Static - Image</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-thumbs-grid.php">
																<div>Static - Thumb Gallery</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-html5-video.php">
																<div>Static - HTML5 Video</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-embed-video.php">
																<div>Static - Embedded Video</div>
															</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="#">
												<div><i class="bi-menu-button-wide-fill"></i>Headers</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="header-light.php">
														<div>Light Version</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-dark.php">
														<div>Dark Version</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-transparent.php">
														<div>Transparent</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-semi-transparent.php">
														<div>Semi Transparent</div>
													</a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-semi-transparent.php">
																<div>Light Version</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-semi-transparent-dark.php">
																<div>Dark Version</div>
															</a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-side-left.php">
														<div>Left Side Header</div>
													</a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-side-left.php">
																<div>Fixed Position</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-left-open.php">
																<div>OnClick Open</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-left-open-push.php">
																<div>Push Content</div>
															</a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-side-right.php">
														<div>Right Side Header</div>
													</a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-side-right.php">
																<div>Fixed Position</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-right-open.php">
																<div>OnClick Open</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-right-open-push.php">
																<div>Push Content</div>
															</a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-floating.php">
														<div>Floating Version</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="static-sticky.php">
														<div>Static Sticky</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="responsive-sticky.php">
														<div>Responsive Sticky</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="logo-changer.php">
														<div>Alternate Logos</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="alternate-mobile-menu.php">
														<div>Alternate Mobile Menu</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="#">
												<div><i class="bi-border-style"></i>Menu Styles</div>
											</a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="header-light.php">
																<div>Default Layout</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-2.php">
																<div>Alternate Layout</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-3.php">
																<div>Pill Style</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-4.php">
																<div>Border Style</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-5.php">
																<div>Large Icon Menu</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="split-menu.php">
																<div>Split Layout</div>
															</a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="menu-6.php">
																<div>Scaling Border</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-subtitle.php">
																<div>Sub-Title Menu</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-7.php">
																<div>Extended Menu 1</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-8.php">
																<div>Extended Menu 2</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-9.php">
																<div>Extended Menu 3</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-10.php">
																<div>Overlay Menu</div>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="mega-menu.php">
												<div><i class="bi-layout-split"></i>Mega Menu</div>
											</a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="forms.php">
												<div><i class="bi-postcard"></i>Forms</div>
											</a>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="widgets.php">
												<div><i class="bi-boxes"></i>Widgets</div>
											</a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="widgets.php">
																<div>Links</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php">
																<div>Flickr Photostream</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php">
																<div>Dribbble Shots</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php">
																<div>Subscribers</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php">
																<div>Posts List</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php">
																<div>Twitter Feed</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php">
																<div>Tabbed Widgets</div>
															</a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="widgets.php">
																<div>Carousel</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php">
																<div>Social Icons</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php">
																<div>Testimonials</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php">
																<div>Quick Contact</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php">
																<div>Tags Cloud</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php">
																<div>Video Embeds</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php">
																<div>Raw HTML</div>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="#">
												<div><i class="bi-textarea-t"></i>Page Titles</div>
											</a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col-5">
														<li class="menu-item">
															<a class="menu-link" href="page.php">
																<div>Left Align</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-right.php">
																<div>Right Align</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-center.php">
																<div>Center Align</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-dark.php">
																<div>Dark Style</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-pattern.php">
																<div>BG Pattern</div>
															</a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col-7">
														<li class="menu-item">
															<a class="menu-link" href="page-title-parallax.php">
																<div>Parallax - Default</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-parallax-header.php">
																<div>Parallax - Transparent</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-video.php">
																<div>HTML5 Video</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-nobg.php">
																<div>No Background</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-mini.php">
																<div>Mini Version</div>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="side-panel.php">
												<div><i class="bi-layout-sidebar-inset-reverse"></i>Side Panel</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="side-panel-left-overlay.php">
														<div>Left Overlay</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel-left-push.php">
														<div>Left Push</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel-right-overlay.php">
														<div>Right Overlay</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel.php">
														<div>Right Push</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel-light.php">
														<div>Light Background</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="modal-onload.php">
												<div><i class="bi-front"></i>Modal OnLoad</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="modal-onload.php">
														<div>Default Layout</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-iframe.php">
														<div>Video iFrame</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-subscribe.php">
														<div>Subscription Form</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-common-height.php">
														<div>Common Height</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-cookie.php">
														<div>Cookies Enabled</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="#footer" data-scrollto="#footer">
												<div><i class="bi-layer-forward"></i>Footers</div>
											</a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="sticky-footer.php">
																<div>Sticky</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="#footer" data-scrollto="#footer">
																<div>Layout 1</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-2.php#footer">
																<div>Layout 2</div>
															</a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="footer-3.php#footer">
																<div>Layout 3</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-4.php#footer">
																<div>Layout 4</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-5.php#footer">
																<div>Layout 5</div>
															</a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="footer-6.php#footer">
																<div>Layout 6</div>
															</a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-7.php#footer">
																<div>Layout 7</div>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="#">
										<div>Pages</div>
									</a>
									<div class="mega-menu-content mega-menu-style-2">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Introductory</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="about.php">
																	<div>About Us</div>
																</a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="about.php">
																			<div>Main Layout</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="about-2.php">
																			<div>Alternate Layout</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="about-me.php">
																			<div>About Me</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="team.php">
																			<div>Team Members</div>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="gdpr.php">
																	<div>GDPR Compliance</div>
																</a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="gdpr.php">
																			<div>Default</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="gdpr-small.php">
																			<div>Small</div>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="jobs.php">
																	<div>Careers</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="profile.php">
																	<div>User Profile</div>
																</a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Utility &amp; Specials</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="services.php">
																	<div><i class="bi-asterisk"></i>Services Pages</div>
																</a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="services.php">
																			<div>Layout 1</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="services-2.php">
																			<div>Layout 2</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="services-3.php">
																			<div>Layout 3</div>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="#">
																	<div><i class="bi-calendar"></i>Events</div>
																</a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="events-list.php">
																			<div>Events List</div>
																		</a>
																		<ul class="sub-menu-container mega-menu-dropdown">
																			<li class="menu-item">
																				<a class="menu-link" href="events-list.php">
																					<div>Right Sidebar</div>
																				</a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="events-list-left-sidebar.php">
																					<div>Left Sidebar</div>
																				</a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="events-list-both-sidebar.php">
																					<div>Both Sidebar</div>
																				</a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="events-list-fullwidth.php">
																					<div>Full Width</div>
																				</a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="events-list-parallax.php">
																					<div>Parallax List</div>
																				</a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="event-single.php">
																			<div>Single Event</div>
																		</a>
																		<ul class="sub-menu-container mega-menu-dropdown">
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-right-sidebar.php">
																					<div>Right Sidebar</div>
																				</a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-left-sidebar.php">
																					<div>Left Sidebar</div>
																				</a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-both-sidebar.php">
																					<div>Both Sidebar</div>
																				</a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single.php">
																					<div>Full Width</div>
																				</a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="event-single-full-width-image.php">
																			<div>Single Event - Full</div>
																		</a>
																		<ul class="sub-menu-container mega-menu-dropdown">
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-full-width-image.php">
																					<div>Parallax Image</div>
																				</a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-full-width-map.php">
																					<div>Google Map</div>
																				</a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-full-width-slider.php">
																					<div>Slider Gallery</div>
																				</a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-full-width-video.php">
																					<div>HTML5 Video</div>
																				</a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="events-calendar.php">
																			<div>Full Width Calendar</div>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="contact.php">
																	<div><i class="bi-envelope-at"></i>Contact Pages</div>
																</a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="contact.php">Main Layout</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-2.php">Grid Layout</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-3.php">Right Sidebar</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-4.php">Both Sidebars</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-5.php">Modal Form</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-6.php">Form Overlay</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-7.php">Form Overlay Mini</a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="faqs.php">
																	<div><i class="bi-question-circle"></i>FAQs Pages</div>
																</a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="faqs.php">
																			<div>Layout 1</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="faqs-2.php">
																			<div>Layout 2</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="faqs-3.php">
																			<div>Layout 3</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="faqs-4.php">
																			<div>Layout 4</div>
																		</a>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Layouts &amp; PageNavs</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="full-width.php">
																	<div>Full Width</div>
																</a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="full-width.php">
																			<div>Default Width</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="full-width-wide.php">
																			<div>Wide Width</div>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="#">
																	<div>Sidebars</div>
																</a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="right-sidebar.php">
																			<div>Right Sidebar</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="left-sidebar.php">
																			<div>Left Sidebar</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="both-sidebar.php">
																			<div>Both Sidebar</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="both-right-sidebar.php">
																			<div>Both Right Sidebar</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="both-left-sidebar.php">
																			<div>Both Left Sidebar</div>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="page-submenu.php">
																	<div>Page Submenu</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="side-navigation.php">
																	<div>Side Navigation</div>
																</a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Miscellaneous</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="login-register.php">
																	<div>Login/Register</div>
																</a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="login-register.php">
																			<div>Default Layout</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="login-register-2.php">
																			<div>Tabbed Login</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="login-register-3.php">
																			<div>Login Accordion</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="login-1.php">
																			<div>Dark BG Login</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="login-2.php">
																			<div>Image BG Login</div>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="coming-soon.php">
																	<div>Coming Soon</div>
																</a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="coming-soon.php">
																			<div>Default Layout</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="coming-soon-2.php">
																			<div>Parallax Image</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="coming-soon-3.php">
																			<div>HTML5 Video</div>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="404.php">
																	<div>404 Pages</div>
																</a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="404.php">
																			<div>Default Layout</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="404-2.php">
																			<div>Parallax Image</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="404-3.php">
																			<div>HTML5 Video</div>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="#">
																	<div>Extras</div>
																</a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="blank-page.php">
																			<div>Blank Page</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="maintenance.php">
																			<div>Maintenance Page</div>
																		</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="sitemap.php">
																			<div>Sitemap</div>
																		</a>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="#">
										<div>Portfolio</div>
									</a>
									<div class="mega-menu-content mega-menu-style-2">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Grids</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="portfolio-1.php">
																	<div>1 Column</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-2.php">
																	<div>2 Columns</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-3.php">
																	<div>3 Columns</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio.php">
																	<div>4 Columns</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-5.php">
																	<div>5 Columns</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-6.php">
																	<div>6 Columns</div>
																</a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Masonry</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="portfolio-mixed-masonry.php">
																	<div>Mixed Columns</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-2-masonry.php">
																	<div>2 Columns</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-3-masonry.php">
																	<div>3 Columns</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-masonry.php">
																	<div>4 Columns</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-5-masonry.php">
																	<div>5 Columns</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-6-masonry.php">
																	<div>6 Columns</div>
																</a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Loading Styles</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="portfolio.php">
																	<div>jQuery Filter</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-jpagination.php">
																	<div>jQuery Pagination</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-infinity-scroll.php">
																	<div>Infinity Scroll</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-ajax.php">
																	<div>AJAX In Page</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-ajax-in-modal.php">
																	<div>AJAX In Modal</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-filter-styles.php">
																	<div>Filter Styles</div>
																</a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Single Project</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-extended.php">
																	<div>Extended Item</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-fullwidth.php">
																	<div>Parallax Image</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-gallery-full.php">
																	<div>Slider Gallery</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-video-fullwidth-left-sidebar.php">
																	<div>HTML5 Video</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-thumbs-right-sidebar.php">
																	<div>Masonry Thumbs</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-video-both-sidebar.php">
																	<div>Embed Video</div>
																</a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Layouts</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="portfolio-nomargin.php">
																	<div>Default</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-1-alt-right-sidebar.php">
																	<div>Right Sidebar</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-3-left-sidebar.php">
																	<div>Left Sidebar</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-2-both-sidebar.php">
																	<div>Both Sidebar</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-fullwidth-notitle.php">
																	<div>100% Width</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-parallax.php">
																	<div>Parallax</div>
																</a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="#">
										<div>Blog</div>
									</a>
									<div class="mega-menu-content mega-menu-style-2">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Default</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog.php">
																	<div>Right Sidebar</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-left-sidebar.php">
																	<div>Left Sidebar</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-both-sidebar.php">
																	<div>Both Sidebar</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-full-width.php">
																	<div>Full Width</div>
																</a>
															</li>
														</ul>
													</li>
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Timeline</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-timeline-right-sidebar.php">
																	<div>Right Sidebar</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-timeline-left-sidebar.php">
																	<div>Left Sidebar</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-timeline.php">
																	<div>Full Width</div>
																</a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Masonry</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-masonry.php">
																	<div>4 Columns</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-masonry-3.php">
																	<div>3 Columns</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-masonry-2.php">
																	<div>2 Columns</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-masonry-full.php">
																	<div>100% Width</div>
																</a>
															</li>
														</ul>
													</li>
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Grid</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-grid.php">
																	<div>4 Columns</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-grid-3.php">
																	<div>3 Columns</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-grid-2.php">
																	<div>2 Columns</div>
																</a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Small Thumbs</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-small-left-sidebar.php">
																	<div>Left Sidebar</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-small.php">
																	<div>Right Sidebar</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-small-both-sidebar.php">
																	<div>Both Sidebar</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-small-full-width.php">
																	<div>Full Width</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-small-alt.php">
																	<div>Alternate Layout</div>
																</a>
															</li>
														</ul>
													</li>
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Item Splitting</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-grid.php">
																	<div>Pagination</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-masonry.php">
																	<div>Infinite Scroll</div>
																</a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Single</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-single.php">
																	<div>Default Layout</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-single-left-sidebar.php">
																	<div>Left Sidebar</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-single-full.php">
																	<div>Full Width</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-single-small.php">
																	<div>Small Image</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-single-split-right-sidebar.php">
																	<div>Split Layout</div>
																</a>
															</li>
														</ul>
													</li>
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#">
															<div>Comments Module</div>
														</a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-single-left-sidebar.php#comments">
																	<div>Facebook Comments</div>
																</a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-single-small.php#comments">
																	<div>Disqus Comments</div>
																</a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="shop.php">
										<div>Shop</div>
									</a>
									<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="shop.php">
												<div>4 Columns</div>
											</a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-3.php">
												<div>3 Columns</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="shop-3.php">
														<div>Full Width</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-3-right-sidebar.php">
														<div>Right Sidebar</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-3-left-sidebar.php">
														<div>Left Sidebar</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-2-right-sidebar.php">
												<div>2 Columns</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="shop-2-right-sidebar.php">
														<div>Right Sidebar</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-2-left-sidebar.php">
														<div>Left Sidebar</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-2-both-sidebar.php">
														<div>Both Sidebar</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-1.php">
												<div>1 Columns</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="shop-1.php">
														<div>Full Width</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-1-right-sidebar.php">
														<div>Right Sidebar</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-1-left-sidebar.php">
														<div>Left Sidebar</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-1-both-sidebar.php">
														<div>Both Sidebar</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-category-parallax.php">
												<div>Categories - Parallax</div>
											</a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-combination-filter.php">
												<div>Combination Filter</div>
											</a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-single.php">
												<div>Single Product</div>
											</a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="shop-single.php">
														<div>Full Width</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-single-right-sidebar.php">
														<div>Right Sidebar</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-single-left-sidebar.php">
														<div>Left Sidebar</div>
													</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-single-both-sidebar.php">
														<div>Both Sidebar</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="cart.php">
												<div>Cart</div>
											</a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="checkout.php">
												<div>Checkout</div>
											</a>
										</li>
									</ul>
								</li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="#">
										<div>Shortcodes</div>
									</a>
									<div class="mega-menu-content">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item">
														<a class="menu-link" href="animations.php">
															<div><i class="bi-magic"></i>Animations</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="buttons.php">
															<div><i class="bi-square"></i>Buttons</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="carousel.php">
															<div><i class="bi-arrow-left-right"></i>Carousel</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="charts.php">
															<div><i class="bi-graph-up-arrow"></i>Charts</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="clients.php">
															<div><i class="bi-grip-horizontal"></i>Clients</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="columns-grids.php">
															<div><i class="bi-grid-1x2"></i>Columns</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="counters.php">
															<div><i class="bi-clock-history"></i>Counters</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="read-more.php">
															<div><i class="bi-three-dots"></i>Read More</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-datatable.php">
															<div><i class="bi-table"></i>Data Tables</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-datepicker.php">
															<div><i class="bi-calendar-plus"></i>Date &amp; Time Pickers</div>
														</a>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item">
														<a class="menu-link" href="dividers.php">
															<div><i class="bi-hr"></i>Dividers</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="featured-boxes.php">
															<div><i class="bi-lightbulb"></i>Icon Boxes</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="gallery.php">
															<div><i class="bi-images"></i>Galleries</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="headings-dropcaps.php">
															<div><i class="bi-type-h1"></i>Heading Styles</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="icon-lists.php">
															<div><i class="bi-list-stars"></i>Icon Lists</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="gradients.php">
															<div><i class="bi-droplet-half"></i>Gradients</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="lightbox.php">
															<div><i class="bi-pip"></i>Lightbox</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="item-overlays.php">
															<div><i class="bi-border-outer"></i>Item Overlays</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="form-elements.php">
															<div><i class="bi-input-cursor-text"></i>Form Elements</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-uploads.php">
															<div><i class="bi-upload"></i>File Uploads</div>
														</a>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item">
														<a class="menu-link" href="lists-cards.php">
															<div><i class="bi-card-list"></i>Lists &amp; Cards</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="maps.php">
															<div><i class="bi-geo-fill"></i>Maps</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="media-embeds.php">
															<div><i class="bi-collection-play"></i>Media Embeds</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="modal-popovers.php">
															<div><i class="bi-subtract"></i>Modal Boxes</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="navigation.php">
															<div><i class="bi-list"></i>Navigations</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="pagination-progress.php">
															<div><i class="bi-123"></i>Pagination</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="pie-skills.php">
															<div><i class="bi-pie-chart"></i>Pies &amp; Skills</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="shape-dividers.php">
															<div><i class="bi-circle-square"></i>Shape Dividers</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-range-slider.php">
															<div><i class="bi-sliders"></i>Range Slider</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-ratings.php">
															<div><i class="bi-star-half"></i>Star Ratings</div>
														</a>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item">
														<a class="menu-link" href="pricing.php">
															<div><i class="bi-currency-dollar"></i>Pricing Boxes</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="process-steps.php">
															<div><i class="bi-bar-chart-steps"></i>Process Steps</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="promo-boxes.php">
															<div><i class="bi-card-heading"></i>Promo Boxes</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="quotes-blockquotes.php">
															<div><i class="bi-blockquote-left"></i>Blockquotes</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="responsive.php">
															<div><i class="bi-display"></i>Responsive</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="sections.php">
															<div><i class="bi-window-desktop"></i>Sections</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="social-icons.php">
															<div><i class="bi-instagram"></i>Social Icons</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="hover-animations.php">
															<div><i class="bi-hand-index-thumb"></i>Hover Animations</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-select-picker.php">
															<div><i class="bi-menu-button"></i>Select Picker</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-select-box.php">
															<div><i class="bi-layout-three-columns"></i>Select Boxes</div>
														</a>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item">
														<a class="menu-link" href="style-boxes.php">
															<div><i class="bi-exclamation-circle"></i>Alert Boxes</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="styled-icons.php">
															<div><i class="bi-flower2"></i>Styled Icons</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="tables.php">
															<div><i class="bi-table"></i>Tables</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="tabs.php">
															<div><i class="bi-segmented-nav"></i>Tabs</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="testimonials-twitter.php">
															<div><i class="bi-chat-left-quote"></i>Testimonials</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="thumbnails-slider.php">
															<div><i class="bi-image"></i>Thumbnails</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="toggles-accordions.php">
															<div><i class="bi-caret-down-square"></i>Toggles</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="lazy-loading.php">
															<div><i class="fa-solid fa-spinner"></i>Lazy Loading</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-radios-switches.php">
															<div><i class="bi-toggle-off"></i>Radios &amp; Switches</div>
														</a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="flip-cards.php">
															<div><i class="bi-arrow-repeat"></i>Flip Cards</div>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.php" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content" style="background: linear-gradient(to bottom, rgba(0,0,0,.95), rgba(0,0,0,.6)),  url('images/blocks/preview/hero-10/main.jpg') no-repeat center / cover">
			<div class="content-wrap dark py-0">
				<div class="row justify-content-center align-items-center text-center min-vh-100">
					<h1 class="col-12 display-3 mb-0 mt-5">Content<br>...</h1>
				</div>
			</div>
		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/plugins.min.js"></script>
	<script src="js/functions.bundle.js"></script>

</body>
</html>