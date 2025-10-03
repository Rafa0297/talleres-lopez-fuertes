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
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="style.css">

	<!-- Font Icons -->
	<link rel="stylesheet" href="css/font-icons.css">
	<link rel="stylesheet" href="css/components/bs-switches.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title>Menu Dropdowns | Canvas</title>

	<style>

		:root,
        .not-dark,
        .is-expanded-menu #header {
            --cnvs-primary-menu-submenu-color: var(--cnvs-contrast-200);
			--cnvs-primary-menu-hover-color: var(--cnvs-themecolor);
			--cnvs-primary-menu-submenu-hover-bg: var(--cnvs-contrast-900);
			--cnvs-primary-menu-submenu-hover-color: var(--cnvs-contrast-0);
            --cnvs-primary-menu-submenu-border: 1px solid var(--cnvs-body-bg);
            --cnvs-primary-menu-submenu-border-radius: 10px;
		}

		.is-expanded-menu .sub-menu-container,
		.is-expanded-menu .mega-menu-content {
			border-top: var(--cnvs-primary-menu-submenu-border);
            border-radius: var(--cnvs-primary-menu-submenu-border-radius);
		}

        .is-expanded-menu .menu-item:first-child .menu-link {
            border-top-left-radius: var(--cnvs-primary-menu-submenu-border-radius);
            border-top-right-radius: var(--cnvs-primary-menu-submenu-border-radius);
        }

        .is-expanded-menu .menu-item:last-child .menu-link {
            border-bottom-left-radius: var(--cnvs-primary-menu-submenu-border-radius);
            border-bottom-right-radius: var(--cnvs-primary-menu-submenu-border-radius);
        }

		.is-expanded-menu .mega-menu-content .sub-menu-container + .sub-menu-container {
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
        }

		.is-expanded-menu .sub-menu-container .menu-item > .menu-link,
		.is-expanded-menu .sub-menu-container .menu-item:hover > .menu-link {
			font-weight: 400;
		}

		.is-expanded-menu .sub-menu-container .menu-item:not(:first-child) {
			border-top: 1px solid rgba(var(--cnvs-contrast-rgb),.07);
		}

	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<header id="header" class="transparent-header">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-center">

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">

							<ul class="menu-container">
								<li class="menu-item">
									<a class="menu-link" href="#"><div>Home</div></a>
								</li>

								<li class="menu-item">
									<a class="menu-link" href="#"><div>Dropdown</div></a>
									<ul class="sub-menu-container dark">
										<li class="menu-item">
											<a class="menu-link" href="#"><div><i class="bi-hypnotize"></i>Sliders</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="slider-revolution.php"><div>Revolution Slider</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="rs-demos.php"><div>Premium Templates</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution.php"><div>Full Screen</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution-fullwidth.php"><div>Full Width</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution-kenburns.php"><div>Kenburns Effect</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution-html5-videos.php"><div>HTML5 Video</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="slider-canvas.php"><div>Canvas Slider</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas.php"><div>Full Width</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-fade.php"><div>Fade Transition</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-autoplay.php"><div>Autoplay Feature</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-video-event.php"><div>Custom Video Event</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-pagination.php"><div>Pagination Navigation</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-3.php"><div>3 Columns</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-4.php"><div>4 Columns</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-5.php"><div>5 Columns</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="slider-flex.php"><div>Flex Slider</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="slider-flex.php"><div>Default Layout</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-flex-thumbs.php"><div>with Thumbs</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="slider-owl.php"><div>Owl Slider</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="slider-owl-full.php"><div>Full Width</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-owl.php"><div>Boxed Width</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-owl-videos.php"><div>Video Slider</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="static-parallax.php"><div>Static Media</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="static-parallax.php"><div>Static - Parallax</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-image.php"><div>Static - Image</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-thumbs-grid.php"><div>Static - Thumb Gallery</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-html5-video.php"><div>Static - HTML5 Video</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-embed-video.php"><div>Static - Embedded Video</div></a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="#"><div><i class="bi-menu-button-wide-fill"></i>Headers</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="#"><div>Custom Layouts</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-saas.php"><div>SAAS</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-ecommerce-minimal.php"><div>eCommerce Minimal</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-directory.php"><div>Directory</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-floating-semi-transparent.php"><div>Floating Semi-Transparent</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-floating-with-topbar.php"><div>Floating with Top-Bar</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-floating-small.php"><div>Floating Small</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-offcanvas-overlay.php"><div>Off-Canvas Overlay</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-full-menu.php"><div>Full Menu</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-full-border.php"><div>Full Border</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-sticky-on-scrollup.php"><div>Sticky on ScrollUp</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="index-shop.php"><div>Language + Currency</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-light.php"><div>Light Version</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-dark.php"><div>Dark Version</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-transparent.php"><div>Transparent</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-semi-transparent.php"><div>Semi Transparent</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-semi-transparent.php"><div>Light Version</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-semi-transparent-dark.php"><div>Dark Version</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-side-left.php"><div>Left Side Header</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-side-left.php"><div>Fixed Position</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-left-open.php"><div>OnClick Open</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-left-open-push.php"><div>Push Content</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-side-right.php"><div>Right Side Header</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-side-right.php"><div>Fixed Position</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-right-open.php"><div>OnClick Open</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-right-open-push.php"><div>Push Content</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-floating.php"><div>Floating Version</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="static-sticky.php"><div>Static Sticky</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="responsive-sticky.php"><div>Responsive Sticky</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="logo-changer.php"><div>Alternate Logos</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="alternate-mobile-menu.php"><div>Alternate Mobile Menu</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="#"><div><i class="bi-border-style"></i>Menu Styles</div></a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="header-light.php"><div>Default Layout</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-2.php"><div>Alternate Layout</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-3.php"><div>Pill Style</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-4.php"><div>Border Style</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-5.php"><div>Large Icon Menu</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="split-menu.php"><div>Split Layout 1</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="split-menu-2.php"><div>Split Layout 2</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-10.php"><div>Overlay Menu</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="#"><div>Dropdown Styles</div></a>
															<ul class="sub-menu-container mega-menu-dropdown p-lg-0">
																<li class="menu-item">
																	<a class="menu-link" href="menu-dropdowns-blur.php"><div>Blur</div></a>
																</li>
																<li class="menu-item">
																	<a class="menu-link" href="menu-dropdowns-colors.php"><div>Colors</div></a>
																</li>
																<li class="menu-item">
																	<a class="menu-link" href="menu-dropdowns-dark.php"><div>Dark</div></a>
																</li>
																<li class="menu-item">
																	<a class="menu-link" href="menu-dropdowns-flat.php"><div>Flat</div></a>
																</li>
																<li class="menu-item">
																	<a class="menu-link" href="menu-dropdowns-fullwidth.php"><div>Full-Width</div></a>
																</li>
																<li class="menu-item">
																	<a class="menu-link" href="menu-dropdowns-other-arrows.php"><div>Custom Arrows</div></a>
																</li>
																<li class="menu-item">
																	<a class="menu-link" href="menu-dropdowns-rounded.php"><div>Rounded</div></a>
																</li>
																<li class="menu-item">
																	<a class="menu-link" href="menu-dropdowns-shadow.php"><div>Shadow</div></a>
																</li>
															</ul>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-6.php"><div>Scaling Border</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-subtitle.php"><div>Sub-Title Menu</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-7.php"><div>Extended Menu 1</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-8.php"><div>Extended Menu 2</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-9.php"><div>Extended Menu 3</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-app-1.php"><div>App Menu 1</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-app-2.php"><div>App Menu 2</div></a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="mega-menu.php"><div><i class="bi-layout-split"></i>Mega Menu</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="mega-menu.php"><div>Widgetized</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="mega-menu-full.php"><div>Full-Width</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="mega-menu-tab.php"><div>Tabbed</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="mega-menu-side-tab.php"><div>Side-Tabs (onClick)</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="forms.php"><div><i class="bi-postcard"></i>Forms</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="contact.php"><div><i class="bi-envelope-at"></i>Contact Pages</div></a>
											<ul class="sub-menu-container">
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
												<li class="menu-item">
													<a class="menu-link" href="contact-recaptcha-v3.php">reCaptcha</a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="contact-hcaptcha.php">hCaptcha</a>
												</li>
											</ul>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="widgets.php"><div><i class="bi-boxes"></i>Widgets</div></a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="widgets.php"><div>Links</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php"><div>Flickr Photostream</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php"><div>Dribbble Shots</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php"><div>Subscribers</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php"><div>Posts List</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php"><div>Twitter Feed</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php"><div>Tabbed Widgets</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="widgets.php"><div>Carousel</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php"><div>Social Icons</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php"><div>Testimonials</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php"><div>Quick Contact</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php"><div>Tags Cloud</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php"><div>Video Embeds</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.php"><div>Raw HTML</div></a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="#"><div><i class="bi-textarea-t"></i>Page Titles</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="#"><div>Styles</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="page-title-block.php"><div>Block</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-bold.php"><div>Bold</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-fancy.php"><div>Fancy</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-fancy-alt.php"><div>Fancy Alternate</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-boxes.php"><div>Boxes</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-blog.php"><div>Layout for Blogs</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-shop.php"><div>Layout for Shops</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-mini.php"><div>Mini Version</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="#"><div>Backgrounds</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="page-title-dark.php"><div>Dark Style</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-pattern.php"><div>BG Pattern</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-parallax.php"><div>Parallax - Default</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-parallax-header.php"><div>Parallax - Transparent</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-video.php"><div>HTML5 Video</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-gmap.php"><div>Google Maps</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-gmap-mini.php"><div>Google Maps Mini</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-nobg.php"><div>No Background</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="#"><div>Layouts</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="page-title.php"><div>Left Align</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-right.php"><div>Right Align</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-center.php"><div>Center Align</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-sticky.php"><div>Sticky</div></a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="side-panel.php"><div><i class="bi-layout-sidebar-inset-reverse"></i>Side Panel</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="side-panel-left-overlay.php"><div>Left Overlay</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel-left-push.php"><div>Left Push</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel-right-overlay.php"><div>Right Overlay</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel.php"><div>Right Push</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel-light.php"><div>Light Background</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="modal-onload.php"><div><i class="bi-front"></i>Modal OnLoad</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="modal-onload.php"><div>Default Layout</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-iframe.php"><div>Video iFrame</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-subscribe.php"><div>Subscription Form</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-common-height.php"><div>Common Height</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-cookie.php"><div>Cookies Enabled</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="#footer" data-scrollto="#footer"><div><i class="bi-layer-forward"></i>Footers</div></a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="sticky-footer.php"><div>Sticky</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="#footer" data-scrollto="#footer"><div>Layout 1</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-2.php#footer"><div>Layout 2</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="footer-3.php#footer"><div>Layout 3</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-4.php#footer"><div>Layout 4</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-5.php#footer"><div>Layout 5</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="footer-6.php#footer"><div>Layout 6</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-7.php#footer"><div>Layout 7</div></a>
														</li>
													</ul>
												</div>
											</div>
										</li>
									</ul>
								</li>

								<li class="menu-item">
									<a class="menu-link" href="#"><div>Pages</div></a>
								</li>

								<li class="menu-item">
									<a class="menu-link" href="#"><div>Blog</div></a>
								</li>

								<li class="menu-item">
									<a class="menu-link" href="#"><div>Contact</div></a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container text-center">
					<a class="m-2 btn btn-outline-dark" href="menu-dropdowns-shadow.php">Shadow</a>
					<a class="m-2 btn btn-outline-dark" href="menu-dropdowns-rounded.php">Rounded</a>
					<a class="m-2 btn btn-outline-dark disabled" href="menu-dropdowns-dark.php">Dark</a>
					<a class="m-2 btn btn-outline-dark" href="menu-dropdowns-flat.php">Flat</a>
					<a class="m-2 btn btn-outline-dark" href="menu-dropdowns-colors.php">Colors</a>
					<a class="m-2 btn btn-outline-dark" href="menu-dropdowns-blur.php">Blur</a>
					<a class="m-2 btn btn-outline-dark" href="menu-dropdowns-fullwidth.php">Full-Width</a>
					<a class="m-2 btn btn-outline-dark" href="menu-dropdowns-other-arrows.php">Diff. Arrows</a>
				</div>
			</div>
		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- JavaScripts
	============================================= -->
	<script src="js/plugins.min.js"></script>
	<script src="js/functions.bundle.js"></script>

</body>
</html>