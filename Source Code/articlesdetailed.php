<!DOCTYPE html>
<html lang="en">
<head>

	<title>Company Page Blog V2 Post</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Theme Font -->
	<link rel="preload" type="text/css" href="css/theme-font.min.css" as="style">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.min.css">

	<!-- Main RTL CSS -->
	<!--<link rel="stylesheet" type="text/css" href="css/rtl.min.css">-->

</head>
<body class="body-bg-white">


<!-- Preloader -->

<div id="hellopreloader">
	<div class="preloader">
		<svg width="45" height="45" stroke="#fff">
			<g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="8">
					<animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6"/>
				</circle>
			</g>
		</svg>

		<div class="text">Loading ...</div>
	</div>
</div>

<!-- ... end Preloader -->
<!-- Stunning header -->

<div class="stunning-header bg-primary-opacity">

	
	<!-- Header Standard Landing  -->
	
	<div class="header--standard header--standard-landing" id="header--standard">
		<div class="container">
			<div class="header--standard-wrap">
	
				<a href="#" class="logo">
					<div class="img-wrap">
						<img loading="lazy" src="img/logo.webp" alt="<?php echo $_SESSION['project_title']; ?>" width="34" height="34">
						<img loading="lazy" src="img/logo-colored-small.webp" width="34" height="34" alt="<?php echo $_SESSION['project_title']; ?>" class="logo-colored">
					</div>
					<div class="title-block">
						<h6 class="logo-title">olympus</h6>
						<div class="sub-title">SOCIAL NETWORK</div>
					</div>
				</a>
	
				<a href="#" class="open-responsive-menu js-open-responsive-menu">
					<svg class="olymp-menu-icon"><use xlink:href="#olymp-menu-icon"></use></svg>
				</a>
	
				<div class="nav nav-pills nav1 header-menu">
					<div class="mCustomScrollbar">
						<ul>
							<li class="nav-item">
								<a href="#" class="nav-link">Home</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-bs-hover="dropdown" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Profile</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Profile Page</a>
									<a class="dropdown-item" href="#">Newsfeed</a>
									<a class="dropdown-item" href="#">Post Versions</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-has-megamenu">
								<a href="#" class="nav-link dropdown-toggle" data-bs-hover="dropdown" data-bs-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Forums</a>
								<div class="dropdown-menu megamenu">
									<div class="row">
										<div class="col col-sm-3">
											<h6 class="column-tittle">Main Links</h6>
											<a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-blue-light">new</span></a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
										</div>
										<div class="col col-sm-3">
											<h6 class="column-tittle">BuddyPress</h6>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-primary">HOT!</span></a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
										</div>
										<div class="col col-sm-3">
											<h6 class="column-tittle">Corporate</h6>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
										</div>
										<div class="col col-sm-3">
											<h6 class="column-tittle">Forums</h6>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Terms & Conditions</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Events</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Privacy Policy</a>
							</li>
							<li class="close-responsive-menu js-close-responsive-menu">
								<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
							</li>
							<li class="nav-item js-expanded-menu">
								<a href="#" class="nav-link">
									<svg class="olymp-menu-icon"><use xlink:href="#olymp-menu-icon"></use></svg>
									<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
								</a>
							</li>
							<li class="shoping-cart more">
								<a href="#" class="nav-link">
									<svg class="olymp-shopping-bag-icon"><use xlink:href="#olymp-shopping-bag-icon"></use></svg>
									<span class="count-product">2</span>
								</a>
								<div class="more-dropdown shop-popup-cart">
									<ul>
										<li class="cart-product-item">
											<div class="product-thumb">
												<img loading="lazy" src="img/product1.webp" alt="product" width="35" height="28">
											</div>
											<div class="product-content">
												<h6 class="title">White Enamel Mug</h6>
												<ul class="rait-stars">
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
	
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
													<li>
														<svg class="star-icon" width="10" height="10"><use xlink:href="#olymp-star-null"></use></svg>
													</li>
												</ul>
												<div class="counter">x2</div>
											</div>
											<div class="product-price">$20</div>
											<div class="more">
												<svg class="olymp-little-delete"><use xlink:href="#olymp-little-delete"></use></svg>
											</div>
										</li>
										<li class="cart-product-item">
											<div class="product-thumb">
												<img loading="lazy" src="img/product2.webp" alt="product" width="28" height="45">
											</div>
											<div class="product-content">
												<h6 class="title">Olympus Orange Shirt</h6>
												<ul class="rait-stars">
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
	
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
													<li>
														<svg class="star-icon" width="10" height="10"><use xlink:href="#olymp-star-null"></use></svg>
													</li>
												</ul>
												<div class="counter">x1</div>
											</div>
											<div class="product-price">$40</div>
											<div class="more">
												<svg class="olymp-little-delete"><use xlink:href="#olymp-little-delete"></use></svg>
											</div>
										</li>
									</ul>
	
									<div class="cart-subtotal">Cart Subtotal:<span>$80</span></div>
	
									<div class="cart-btn-wrap">
										<a href="#" class="btn btn-primary btn-sm">Go to Your Cart</a>
										<a href="#" class="btn btn-purple btn-sm">Go to Checkout</a>
									</div>
								</div>
							</li>
	
							<li class="menu-search-item">
								<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#main-popup-search">
									<svg class="olymp-magnifying-glass-icon"><use xlink:href="#olymp-magnifying-glass-icon"></use></svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- ... end Header Standard Landing  -->
	<div class="header-spacer--standard"></div>

	<div class="stunning-header-content">
		<h1 class="stunning-header-title">Blog Post V2</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="#">Home</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item">
				<a href="#">Blog</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span>Blog Post V2</span>
			</li>
		</ul>
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>
</div>

<!-- End Stunning header -->


<div class="container mb60 mt50">
	<div class="row">
		<div class="col col-xl-8 m-auto col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">

				
				<!-- Single Post -->
				
				<article class="hentry blog-post single-post single-post-v2">
				
					<a href="#" class="post-category bg-blue-light">THE COMMUNITY</a>
					<h2 class="h1 post-title">Here are the best tattoos of our community</h2>
				
					<div class="single-post-additional inline-items">
						<div class="post__author author vcard inline-items">
							<img loading="lazy" alt="author" src="img/avatar84-sm.webp" class="avatar" width="28" height="28">
							<div class="author-date not-uppercase">
								<a class="h6 post__author-name fn" href="#">Jack Scorpio</a>
								<div class="author_prof">
									Author
								</div>
							</div>
						</div>
						<div class="post-date-wrap inline-items">
							<svg class="olymp-calendar-icon">
								<use xlink:href="#olymp-calendar-icon"></use>
							</svg>
							<div class="post-date">
								<a class="h6 date" href="#">2 Months Ago</a>
								<span>Date</span>
							</div>
						</div>
						<div class="post-comments-wrap inline-items">
							<svg class="olymp-comments-post-icon">
								<use xlink:href="#olymp-comments-post-icon"></use>
							</svg>
							<div class="post-comments">
								<a class="h6 comments" href="#">14</a>
								<span>Comments</span>
							</div>
						</div>
					</div>
				
					<div class="post-thumb">
						<img loading="lazy" src="img/post-header1.webp" alt="author" width="769" height="522">
					</div>
				
				
					<div class="post-content-wrap">
				
						<div class="post-content">
							<h5 class="weight-normal">Lorem ipsum dolor sit amet, consectadipisicing elit, sed do eiusmod por incidid ut labore et dolore
								magna aliqua. Ut enim ad minim veniam, quis nostrud lorem exercitation ullamco laboris.
							</h5>
				
							<p>Duis en aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
								nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
								deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
								voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
								inventore veritatis et quasi hitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
								voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
								dolores eos qui ratione voluptatem sequi nesciunt Sed ut perspiciatis unde omnis iste natus
								error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
								ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
								ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
								dolores eos qui ratione voluptatem sequi nesciunt.
							</p>
				
							<h3>Best Tattoos Slideshow</h3>
				
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
								sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
								voluptatem accusantium doloremque.
							</p>
				
							<div class="single-post-slider">
				
								<div class="swiper-container" data-autoplay="4000">
				
									<!-- Additional required wrapper -->
									<div class="swiper-wrapper">
										<!-- Slides -->
				
										<div class="swiper-slide">
											<img loading="lazy" src="img/slide1.webp" alt="photo" width="570" height="360">
										</div>
				
										<div class="swiper-slide">
											<img loading="lazy" src="img/slide1.webp" alt="photo" width="570" height="360">
										</div>
				
										<div class="swiper-slide">
											<img loading="lazy" src="img/slide1.webp" alt="photo" width="570" height="360">
										</div>
				
										<div class="swiper-slide">
											<img loading="lazy" src="img/slide1.webp" alt="photo" width="570" height="360">
										</div>
				
										<div class="swiper-slide">
											<img loading="lazy" src="img/slide1.webp" alt="photo" width="570" height="360">
										</div>
				
										<div class="swiper-slide">
											<img loading="lazy" src="img/slide1.webp" alt="photo" width="570" height="360">
										</div>
				
									</div>
				
								</div>
				
								<!--Pagination tabs-->
				
								<div class="slider-slides">
									<a href="#" class="slides-item ">
										<img loading="lazy" src="img/photo-tabs10.webp" alt="slide" width="60" height="60">
										<div class="overlay overlay-dark"></div>
									</a>
				
									<a href="#" class="slides-item ">
										<img loading="lazy" src="img/photo-tabs11.webp" alt="slide" width="60" height="60">
										<div class="overlay overlay-dark"></div>
									</a>
				
									<a href="#" class="slides-item ">
										<img loading="lazy" src="img/photo-tabs12.webp" alt="slide" width="60" height="60">
										<div class="overlay overlay-dark"></div>
									</a>
				
									<a href="#" class="slides-item ">
										<img loading="lazy" src="img/photo-tabs13.webp" alt="slide" width="60" height="60">
										<div class="overlay overlay-dark"></div>
									</a>
									<a href="#" class="slides-item ">
										<img loading="lazy" src="img/photo-tabs14.webp" alt="slide" width="60" height="60">
										<div class="overlay overlay-dark"></div>
									</a>
				
									<a href="#" class="slides-item ">
										<img loading="lazy" src="img/photo-tabs15.webp" alt="slide" width="60" height="60">
										<div class="overlay overlay-dark"></div>
									</a>
				
									<!--Prev Next Arrows-->
				
									<svg class="btn-next olymp-popup-right-arrow">
										<use xlink:href="#olymp-popup-right-arrow"></use>
									</svg>
				
									<svg class="btn-prev olymp-popup-left-arrow">
										<use xlink:href="#olymp-popup-left-arrow"></use>
									</svg>
				
								</div>
				
							</div>
				
							<p>Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud tation ullamco laboris
								nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
								velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
								sunt in culpa qui officia unt mollit anim id est laborum aperiam, eaque ipsa quae ab illo
								inventore veritatis quasi architecto.
							</p>
						</div>
					</div>
				
					<div class="choose-reaction">
						<div class="title">Choose your <span>Reaction!</span></div>
				
						<ul>
							<li>
								<a href="#">
									<img loading="lazy" src="img/icon-chat13.webp" alt="icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="LOL">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/icon-chat15.webp" alt="icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Amazed">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/icon-chat9.webp" alt="icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ANGER">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/icon-chat4.webp" alt="icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="joy">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/icon-chat6.webp" alt="icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BAD">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/icon-chat26.webp" alt="icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="LIKE">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/icon-chat27.webp" alt="icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="COOL">
								</a>
							</li>
						</ul>
				
					</div>
				
					<div class="socials-shared">
						<a href="#" class="social-item bg-facebook">
							<svg width="16" height="16"><use xlink:href="#olymp-facebook-icon"></use></svg>
						</a>
						<a href="#" class="social-item bg-twitter">
							<svg width="16" height="16"><use xlink:href="#olymp-twitter-icon"></use></svg>
						</a>
						<a href="#" class="social-item bg-google">
							<svg width="16" height="16"><use xlink:href="#olymp-google-plus-g-icon"></use></svg>
						</a>
					</div>
				
				</article>
				
				<!-- ... end Single Post -->

			</div>


			<div class="related-posts mb60 mt60">
				<div class="crumina-module crumina-heading with-title-decoration">
					<h5 class="heading-title">Related Articles</h5>
				</div>

				<div class="row">
					<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

						<!-- Post -->
						
						<article class="hentry blog-post">
						
							<div class="post-thumb">
								<img loading="lazy" src="img/post7.webp" alt="photo" width="367" height="261">
							</div>
						
							<div class="post-content">
								<a href="#" class="post-category bg-blue-light">THE COMMUNITY</a>
								<a href="#" class="h4 post-title">Here are the best tattoos of our community</a>
								<p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>
						
								<div class="author-date">
									by
									<a class="h6 post__author-name fn" href="#">JACK SCORPIO</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											- 2 MONTHS ago
										</time>
									</div>
								</div>
						
								<div class="post-additional-info inline-items">
						
									<div class="friends-harmonic-wrap">
										<ul class="friends-harmonic">
											<li>
												<a href="#">
													<img loading="lazy" src="img/icon-chat2.webp" alt="icon" width="20" height="20">
												</a>
											</li>
											<li>
												<a href="#">
													<img loading="lazy" src="img/icon-chat4.webp" alt="icon" width="20" height="20">
												</a>
											</li>
										</ul>
										<div class="names-people-likes">
											37
										</div>
									</div>
						
									<div class="comments-shared">
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-speech-balloon-icon">
												<use xlink:href="#olymp-speech-balloon-icon"></use>
											</svg>
											<span>62</span>
										</a>
									</div>
						
								</div>
							</div>
						
						</article>
						
						<!-- ... end Post -->
					</div>
					<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

						<!-- Post -->
						
						<article class="hentry blog-post">
						
							<div class="post-thumb">
								<img loading="lazy" src="img/post8.webp" alt="photo" width="368" height="260">
							</div>
						
							<div class="post-content">
								<a href="#" class="post-category bg-purple">INSPIRATION</a>
								<a href="#" class="h4 post-title">Take a look to the coolest beaches of the world</a>
								<p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>
						
								<div class="author-date">
									by
									<a class="h6 post__author-name fn" href="#">MADDY SIMMONS</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											- 2 months ago
										</time>
									</div>
								</div>
						
								<div class="post-additional-info inline-items">
						
									<div class="friends-harmonic-wrap">
										<ul class="friends-harmonic">
											<li>
												<a href="#">
													<img loading="lazy" src="img/icon-chat26.webp" alt="icon" width="20" height="20">
												</a>
											</li>
											<li>
												<a href="#">
													<img loading="lazy" src="img/icon-chat25.webp" alt="icon" width="20" height="20">
												</a>
											</li>
											<li>
												<a href="#">
													<img loading="lazy" src="img/icon-chat21.webp" alt="icon" width="20" height="20">
												</a>
											</li>
										</ul>
										<div class="names-people-likes">
											104
										</div>
									</div>
						
									<div class="comments-shared">
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-speech-balloon-icon">
												<use xlink:href="#olymp-speech-balloon-icon"></use>
											</svg>
											<span>84</span>
										</a>
									</div>
						
								</div>
							</div>
						
						</article>
						
						<!-- ... end Post -->
					</div>
				</div>
			</div>

			<div class="crumina-module crumina-heading with-title-decoration">
				<h5 class="heading-title">Comments (14)</h5>
			</div>

			
			<!-- Comments -->
			
			<ul class="comments-list style-3">
				<li class="comment-item">
					<div class="post__author-thumb">
						<img loading="lazy" src="img/avatar1.webp" alt="author" width="92" height="92">
					</div>
			
					<div class="comments-content">
						<div class="post__author author vcard">
			
							<div class="author-date">
								<a class="h6 post__author-name fn" href="#">Nicholas Grissom</a>
								<div class="post__date">
									<time class="published" datetime="2004-07-24T18:18">
										27 mins ago
									</time>
								</div>
							</div>
			
						</div>
			
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>
			
						<a href="#" class="reply">Reply</a>
						<a href="#" class="report">Report</a>
					</div>
			
				</li>
				<li class="comment-item">
					<div class="post__author-thumb">
						<img loading="lazy" src="img/avatar2.webp" alt="author" width="92" height="92">
					</div>
			
					<div class="comments-content">
						<div class="post__author author vcard">
			
							<div class="author-date">
								<a class="h6 post__author-name fn" href="#">Marina Valentine</a>
								<div class="post__date">
									<time class="published" datetime="2004-07-24T18:18">
										4 hours ago
									</time>
								</div>
							</div>
			
						</div>
			
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
							consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis
							unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
							aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
							dicta sunt explicabo.
						</p>
			
						<a href="#" class="reply">Reply</a>
						<a href="#" class="report">Report</a>
					</div>
				</li>
				<li class="comment-item has-children">
					<div class="post__author-thumb">
						<img loading="lazy" src="img/avatar3.webp" alt="author" width="92" height="92">
					</div>
			
					<div class="comments-content">
						<div class="post__author author vcard">
			
							<div class="author-date">
								<a class="h6 post__author-name fn" href="#">Mathilda Brinker</a>
								<div class="post__date">
									<time class="published" datetime="2004-07-24T18:18">
										12 hours ago
									</time>
								</div>
							</div>
			
						</div>
			
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totame rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.
						</p>
			
						<a href="#" class="reply">Reply</a>
						<a href="#" class="report">Report</a>
					</div>
			
					<ul class="children">
						<li class="comment-item">
							<div class="post__author-thumb">
								<img loading="lazy" src="img/avatar4.webp" alt="author" width="92" height="92">
							</div>
			
							<div class="comments-content">
								<div class="post__author author vcard">
			
									<div class="author-date">
										<a class="h6 post__author-name fn" href="#">James Spiegel</a>
										<div class="post__date">
											<time class="published" datetime="2004-07-24T18:18">
												20 hours ago
											</time>
										</div>
									</div>
			
								</div>
			
								<p>Consectadipisicing elit, sed do eiusmod por incidid ut labore et dolore magna aliqua.
									Ut enim ad minim veniam, quis nostrud lorem exercitation ullamco laboris.
								</p>
			
								<a href="#" class="reply">Reply</a>
								<a href="#" class="report">Report</a>
							</div>
						</li>
					</ul>
				</li>
				<li class="comment-item">
					<div class="post__author-thumb">
						<img loading="lazy" src="img/avatar5.webp" width="92" height="92" alt="author">
					</div>
			
					<div class="comments-content">
						<div class="post__author author vcard">
			
							<div class="author-date">
								<a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
								<div class="post__date">
									<time class="published" datetime="2004-07-24T18:18">
										38 mins ago
									</time>
								</div>
							</div>
			
						</div>
			
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>
			
						<a href="#" class="reply">Reply</a>
						<a href="#" class="report">Report</a>
					</div>
				</li>
			</ul>
			
			<!-- ... end Comments -->
		</div>

		<div class="col col-xl-8 m-auto col-lg-12 col-md-12 col-sm-12 col-12 align-center">
			<a href="#" class="btn btn-purple btn-md mb60 mt60">Load More Comments...</a>
		</div>

		<div class="col col-xl-8 m-auto col-lg-12 col-md-12 col-sm-12 col-12">

			
			<!-- Comment Form -->
			
			<form>
				<div class="crumina-module crumina-heading with-title-decoration">
					<h5 class="heading-title">Write a Comment</h5>
				</div>
				<div class="row">
					<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
						<div class="form-group label-floating">
							<label class="control-label">Your Name</label>
							<input class="form-control" placeholder="" value="James Spiegel" type="text">
						</div>
					</div>
					<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
						<div class="form-group label-floating">
							<label class="control-label">Your Email</label>
							<input class="form-control" placeholder="" value="jspiegel@yourmail.com" type="email">
						</div>
					</div>
			
					<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="form-group">
							<textarea class="form-control" placeholder="Your Comment"></textarea>
						</div>
						<a href="#" class="btn btn-primary btn-lg full-width">Post your Comment</a>
					</div>
				</div>
			</form>
			
			<!-- ... end Comment Form -->
			
			

		</div>
	</div>
</div>



<!-- Section Call To Action Animation -->

<section class="align-right pt160 pb80 section-move-bg call-to-action-animation">
	<div class="container">
		<div class="row">
			<div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
				<a href="#" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#registration-login-form-popup">Start Making Friends Now!</a>
			</div>
		</div>
	</div>
	<img class="first-img" alt="guy" src="img/guy.webp" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" width="297" height="254">
	<img class="second-img" alt="rocket" src="img/rocket1.webp" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">
	<div class="content-bg-wrap bg-section1"></div>
</section>

<!-- ... end Section Call To Action Animation -->

<!-- Window-popup Restore Password -->

<div class="modal fade" id="restore-password" tabindex="-1" role="dialog" aria-labelledby="restore-password" aria-hidden="true">
	<div class="modal-dialog window-popup restore-password-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Restore your Password</h6>
			</div>

			<div class="modal-body">
				<form  method="get">
					<p>Enter your email and click the send code button. You’ll receive a code in your email. Please use that
						code below to change the old password for a new one.
					</p>
					<div class="form-group label-floating">
						<label class="control-label">Your Email</label>
						<input class="form-control" placeholder="" type="email" value="james-spiegel@yourmail.com">
					</div>
					<button class="btn btn-purple btn-lg full-width">Send me the Code</button>
					<div class="form-group label-floating">
						<label class="control-label">Enter the Code</label>
						<input class="form-control" placeholder="" type="text" value="">
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Your New Password</label>
						<input class="form-control" placeholder="" type="password" value="olympus">
					</div>
					<button class="btn btn-primary btn-lg full-width">Change your Password!</button>
				</form>

			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Restore Password -->


<div class="modal fade" id="registration-login-form-popup" tabindex="-1" role="dialog" aria-labelledby="registration-login-form-popup" aria-hidden="true">
	<div class="modal-dialog window-popup registration-login-form-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-body">
				<div class="registration-login-form">

					<!-- Nav tabs -->
					<ul class="nav nav-tabs" id="registration-form-tabs" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">
								<svg class="olymp-login-icon"><use xlink:href="#olymp-login-icon"></use></svg>
							</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
								<svg class="olymp-register-icon"><use xlink:href="#olymp-register-icon"></use></svg>
							</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content" id="registration-form-tabs-content">
						<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
							<div class="title h6">Register to Olympus</div>
							<form class="content">
								<div class="row">
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group label-floating">
											<label class="control-label">First Name</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group label-floating">
											<label class="control-label">Last Name</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>
									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group label-floating">
											<label class="control-label">Your Email</label>
											<input class="form-control" placeholder="" type="email">
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Your Password</label>
											<input class="form-control" placeholder="" type="password">
										</div>

										<div class="form-group date-time-picker label-floating">
											<label class="control-label">Your Birthday</label>
											<input name="datetimepicker" value="10/24/1984" />
											<span class="input-group-addon">
														<svg class="olymp-calendar-icon"><use xlink:href="#olymp-calendar-icon"></use></svg>
													</span>
										</div>

										<div class="form-group label-floating is-select">
											<label class="control-label">Your Gender</label>
											<select class="form-select">
												<option value="MA">Male</option>
												<option value="FE">Female</option>
											</select>
										</div>

										<div class="remember">
											<div class="checkbox">
												<label>
													<input name="optionsCheckboxes" type="checkbox">
													I accept the <a href="#">Terms and Conditions</a> of the website
												</label>
											</div>
										</div>

										<a href="#" class="btn btn-purple btn-lg full-width">Complete Registration!</a>
									</div>
								</div>
							</form>
						</div>

						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="title h6">Login to your Account</div>
							<form class="content">
								<div class="row">
									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group label-floating">
											<label class="control-label">Your Email</label>
											<input class="form-control" placeholder="" type="email">
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Your Password</label>
											<input class="form-control" placeholder="" type="password">
										</div>

										<div class="remember">

											<div class="checkbox">
												<label>
													<input name="optionsCheckboxes" type="checkbox">
													Remember Me
												</label>
											</div>
											<a href="#" class="forgot" data-bs-toggle="modal" data-bs-target="#restore-password">Forgot my Password</a>
										</div>

										<a href="#" class="btn btn-lg btn-primary full-width">Login</a>

										<div class="or"></div>

										<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><svg width="16" height="16"><use xlink:href="#olymp-facebook-icon"></use></svg>Login with Facebook</a>

										<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><svg width="16" height="16"><use xlink:href="#olymp-twitter-icon"></use></svg>Login with Twitter</a>


										<p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Footer Full Width -->

<div class="footer footer-full-width" id="footer">
	<div class="container">
		<div class="row">
			<div class="col col-lg-4 col-md-4 col-sm-12 col-12">

				
				<!-- Widget About -->
				
				<div class="widget w-about">
				
					<a href="02-ProfilePage.php" class="logo">
						<div class="img-wrap">
							<img loading="lazy" src="img/logo-colored.webp" alt="<?php echo $_SESSION['project_title']; ?>" width="60" height="60">
						</div>
						<div class="title-block">
							<h6 class="logo-title">olympus</h6>
							<div class="sub-title">SOCIAL NETWORK</div>
						</div>
					</a>
					<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et lorem.</p>
					<ul class="socials">
						<li>
							<a href="#">
								<svg width="16" height="16"><use xlink:href="#olymp-facebook-square"></use></svg>
							</a>
						</li>
						<li>
							<a href="#">
								<svg width="16" height="16"><use xlink:href="#olymp-twitter-icon"></use></svg>
							</a>
						</li>
						<li>
							<a href="#">
								<svg width="16" height="16"><use xlink:href="#olymp-youtube-icon"></use></svg>
							</a>
						</li>
						<li>
							<a href="#">
								<svg width="16" height="16"><use xlink:href="#olymp-google-plus-g-icon"></use></svg>
							</a>
						</li>
						<li>
							<a href="#">
								<svg width="16" height="16"><use xlink:href="#olymp-instagram-icon"></use></svg>
							</a>
						</li>
					</ul>
				</div>
				
				<!-- ... end Widget About -->

			</div>

			<div class="col col-lg-2 col-md-4 col-sm-12 col-12">

				
				<!-- Widget List -->
				
				<div class="widget w-list">
					<h6 class="title">Main Links</h6>
					<ul>
						<li>
							<a href="#">Landing</a>
						</li>
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">About</a>
						</li>
						<li>
							<a href="#">Events</a>
						</li>
					</ul>
				</div>
				
				<!-- ... end Widget List -->

			</div>
			<div class="col col-lg-2 col-md-4 col-sm-12 col-12">

				
				<div class="widget w-list">
					<h6 class="title">Your Profile</h6>
					<ul>
						<li>
							<a href="#">Main Page</a>
						</li>
						<li>
							<a href="#">About</a>
						</li>
						<li>
							<a href="#">Friends</a>
						</li>
						<li>
							<a href="#">Photos</a>
						</li>
					</ul>
				</div>

			</div>
			<div class="col col-lg-2 col-md-4 col-sm-12 col-12">

				
				<div class="widget w-list">
					<h6 class="title">Features</h6>
					<ul>
						<li>
							<a href="#">Newsfeed</a>
						</li>
						<li>
							<a href="#">Post Versions</a>
						</li>
						<li>
							<a href="#">Messages</a>
						</li>
						<li>
							<a href="#">Friend Groups</a>
						</li>
					</ul>
				</div>

			</div>
			<div class="col col-lg-2 col-md-4 col-sm-12 col-12">

				
				<div class="widget w-list">
					<h6 class="title">Olympus</h6>
					<ul>
						<li>
							<a href="#">Privacy</a>
						</li>
						<li>
							<a href="#">Terms & Conditions</a>
						</li>
						<li>
							<a href="#">Forums</a>
						</li>
						<li>
							<a href="#">Statistics</a>
						</li>
					</ul>
				</div>

			</div>

			<div class="col col-lg-12 col-md-12 col-sm-12 col-12">

				
				<!-- SUB Footer -->
				
				<div class="sub-footer-copyright">
					<span>
						Copyright <a href="index.php">Olympus Buddypress + WP</a> All Rights Reserved 2017
					</span>
				</div>
				
				<!-- ... end SUB Footer -->

			</div>
		</div>
	</div>
</div>

<!-- ... end Footer Full Width -->



<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="popup-chat-responsive" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="#olymp-little-delete"></use></svg>
			</div>
		</div>
		<div class="modal-body">
			<div class="mCustomScrollbar">
				<ul class="notification-list chat-message chat-message-field">
					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>
				</ul>
			</div>

			<form class="need-validation">

		<div class="form-group">
			<textarea class="form-control" placeholder="Press enter to post..."></textarea>
			<div class="add-options-message">
				<a href="#" class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="#olymp-computer-icon"></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="#olymp-happy-sticker-icon"></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat1.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat2.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat3.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat4.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat5.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat6.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat7.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat8.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat9.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat10.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat11.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat12.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat13.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat14.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat15.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat16.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat17.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat18.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat19.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat20.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat21.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat22.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat23.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat24.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat25.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat26.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat27.webp" alt="icon" width="20" height="20">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</form>
		</div>
	</div>

</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->

<!-- Window Popup Main Search -->

<div class="modal fade" id="main-popup-search" tabindex="-1" role="dialog" aria-labelledby="main-popup-search" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered window-popup main-popup-search" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-body">
				<form class="form-inline search-form" method="post">
					<div class="form-group label-floating">
						<label class="control-label">What are you looking for?</label>
						<input class="form-control bg-white" placeholder="" type="text" value="">
					</div>

					<button class="btn btn-purple btn-lg">Search</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- ... end Window Popup Main Search -->



<a class="back-to-top" href="#">
	<svg class="back-icon" width="14" height="18"><use xlink:href="#olymp-back-to-top"></use></svg>
</a>



<!-- JS Scripts -->
<script src="js/jQuery/jquery-3.5.1.min.js"></script>

<script src="js/libs/jquery.mousewheel.min.js"></script>
<script src="js/libs/perfect-scrollbar.min.js"></script>
<script src="js/libs/imagesloaded.pkgd.min.js"></script>
<script src="js/libs/material.min.js"></script>
<script src="js/libs/selectize.min.js"></script>
<script src="js/libs/swiper.jquery.min.js"></script>
<script src="js/libs/moment.min.js"></script>
<script src="js/libs/daterangepicker.min.js"></script>
<script src="js/libs/isotope.pkgd.min.js"></script>
<script src="js/libs/ajax-pagination.min.js"></script>
<script src="js/libs/jquery.magnific-popup.min.js"></script>
<script src="js/libs/aos.min.js"></script>

<script src="js/main.js"></script>
<script src="js/libs-init/libs-init.js"></script>

<script src="Bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- SVG icons loader -->
<script src="js/svg-loader.js"></script>
<!-- /SVG icons loader -->

</body>
</html>