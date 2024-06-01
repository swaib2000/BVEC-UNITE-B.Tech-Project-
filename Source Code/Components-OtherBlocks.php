<!DOCTYPE html>
<html lang="en">
<head>

	<title>Components - Other Blocks</title>

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
<body>


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
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-12">
			<h2 class="presentation-margin">Button Versions</h2>
		</div>

		<div class="col col-xl-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<div class="row">
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-primary btn-lg">Big Button</a>
							<a href="#" class="btn btn-primary btn-md">Medium Button</a>
							<a href="#" class="btn btn-primary btn-md-2">Medium Button V2</a>
							<a href="#" class="btn btn-primary btn-sm">Small Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-secondary btn-lg">Big Button</a>
							<a href="#" class="btn btn-secondary btn-md">Medium Button</a>
							<a href="#" class="btn btn-secondary btn-md-2">Medium Button V2</a>
							<a href="#" class="btn btn-secondary btn-sm">Small Button</a>
						</div>
					</div>
					<div class="row">
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-purple btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-blue btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-breez btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-green btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-grey btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-grey-light btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-grey-lighter btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-breez-light btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-yellow btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-smoke btn-lg btn-light-bg">Big Button</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-12">
			<h2 class="presentation-margin">Friends</h2>
		</div>

		<div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="ui-block">

				
				<!-- Friend Item -->
				
				<div class="friend-item">
					<div class="friend-header-thumb">
						<img loading="lazy" src="img/friend1.webp" alt="friend" width="318" height="122">
					</div>
				
					<div class="friend-item-content">
				
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Report Profile</a>
								</li>
								<li>
									<a href="#">Block Profile</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
							</ul>
						</div>
						<div class="friend-avatar">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar1.webp" alt="author" width="92" height="92">
							</div>
							<div class="author-content">
								<a href="#" class="h5 author-name">Nicholas Grissom</a>
								<div class="country">San Francisco, CA</div>
							</div>
						</div>
				
						<div class="swiper-container" data-slide="fade">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="friend-count" data-swiper-parallax="-500">
										<a href="#" class="friend-count-item">
											<div class="h6">52</div>
											<div class="title">Friends</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">240</div>
											<div class="title">Photos</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">16</div>
											<div class="title">Videos</div>
										</a>
									</div>
									<div class="control-block-button" data-swiper-parallax="-100">
										<a href="#" class="btn btn-control bg-blue">
											<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
										</a>
				
										<a href="#" class="btn btn-control bg-purple">
											<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
										</a>
				
									</div>
								</div>
				
								<div class="swiper-slide">
									<p class="friend-about" data-swiper-parallax="-500">
										Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
									</p>
				
									<div class="friend-since" data-swiper-parallax="-100">
										<span>Friends Since:</span>
										<div class="h6">December 2014</div>
									</div>
								</div>
							</div>
				
							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
				
				<!-- ... end Friend Item -->
			</div>
		</div>
		<div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="ui-block">

				
				<!-- Friend Item -->
				
				<div class="friend-item">
					<div class="friend-header-thumb">
						<img loading="lazy" src="img/friend2.webp" alt="friend" width="318" height="122">
					</div>
				
					<div class="friend-item-content">
				
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Report Profile</a>
								</li>
								<li>
									<a href="#">Block Profile</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
							</ul>
						</div>
						<div class="friend-avatar">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar2.webp" alt="author" width="92" height="92">
							</div>
							<div class="author-content">
								<a href="#" class="h5 author-name">Marina Valentine</a>
								<div class="country">Long Island, NY</div>
							</div>
						</div>
				
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="friend-count" data-swiper-parallax="-500">
										<a href="#" class="friend-count-item">
											<div class="h6">52</div>
											<div class="title">Friends</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">240</div>
											<div class="title">Photos</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">16</div>
											<div class="title">Videos</div>
										</a>
									</div>
									<div class="control-block-button" data-swiper-parallax="-100">
										<a href="#" class="btn btn-control bg-blue">
											<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
										</a>
				
										<a href="#" class="btn btn-control bg-purple">
											<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
										</a>
				
									</div>
								</div>
				
								<div class="swiper-slide">
									<p class="friend-about" data-swiper-parallax="-500">
										Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
									</p>
				
									<div class="friend-since" data-swiper-parallax="-100">
										<span>Friends Since:</span>
										<div class="h6">December 2014</div>
									</div>
								</div>
							</div>
				
							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
				
				<!-- ... end Friend Item -->
			</div>
		</div>
		<div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="ui-block">

				
				<!-- Friend Item -->
				
				<div class="friend-item">
					<div class="friend-header-thumb">
						<img loading="lazy" src="img/friend3.webp" alt="friend" width="318" height="122">
					</div>
				
					<div class="friend-item-content">
				
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Report Profile</a>
								</li>
								<li>
									<a href="#">Block Profile</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
							</ul>
						</div>
						<div class="friend-avatar">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar3.webp" alt="author" width="92" height="92">
							</div>
							<div class="author-content">
								<a href="#" class="h5 author-name">Nicholas Grissom</a>
								<div class="country">Los Angeles, CA</div>
							</div>
						</div>
				
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="friend-count" data-swiper-parallax="-500">
										<a href="#" class="friend-count-item">
											<div class="h6">49</div>
											<div class="title">Friends</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">132</div>
											<div class="title">Photos</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">5</div>
											<div class="title">Videos</div>
										</a>
									</div>
									<div class="control-block-button" data-swiper-parallax="-100">
										<a href="#" class="btn btn-control bg-blue">
											<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
										</a>
				
										<a href="#" class="btn btn-control bg-purple">
											<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
										</a>
				
									</div>
								</div>
				
								<div class="swiper-slide">
									<p class="friend-about" data-swiper-parallax="-500">
										Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
									</p>
				
									<div class="friend-since" data-swiper-parallax="-100">
										<span>Friends Since:</span>
										<div class="h6">December 2014</div>
									</div>
								</div>
							</div>
				
							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
				
				<!-- ... end Friend Item -->
			</div>
		</div>
		<div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="ui-block">

				
				<!-- Friend Item -->
				
				<div class="friend-item">
					<div class="friend-header-thumb">
						<img loading="lazy" src="img/friend4.webp" alt="friend" width="318" height="122">
					</div>
				
					<div class="friend-item-content">
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Report Profile</a>
								</li>
								<li>
									<a href="#">Block Profile</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
							</ul>
						</div>
				
						<div class="friend-avatar">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar4.webp" alt="author" width="92" height="92">
							</div>
							<div class="author-content">
								<a href="#" class="h5 author-name">Chris Greyson</a>
								<div class="country">Austin, TX</div>
							</div>
						</div>
				
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="friend-count" data-swiper-parallax="-500">
										<a href="#" class="friend-count-item">
											<div class="h6">65</div>
											<div class="title">Friends</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">104</div>
											<div class="title">Photos</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">12</div>
											<div class="title">Videos</div>
										</a>
									</div>
									<div class="control-block-button" data-swiper-parallax="-100">
										<a href="#" class="btn btn-control bg-blue">
											<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
										</a>
				
										<a href="#" class="btn btn-control bg-purple">
											<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
										</a>
				
									</div>
								</div>
				
								<div class="swiper-slide">
									<p class="friend-about" data-swiper-parallax="-500">
										Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
									</p>
				
									<div class="friend-since" data-swiper-parallax="-100">
										<span>Friends Since:</span>
										<div class="h6">December 2014</div>
									</div>
								</div>
							</div>
				
							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
				
				<!-- ... end Friend Item -->
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-12">
			<h2 class="presentation-margin">Favourite pages</h2>
		</div>

		<div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="ui-block">

				
				
				<!-- Friend Item -->
				
				<div class="friend-item fav-page">
					<div class="friend-header-thumb">
						<img loading="lazy" src="img/fav1.webp" alt="friend" width="318" height="122">
					</div>
				
					<div class="friend-item-content">
				
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Report Profile</a>
								</li>
								<li>
									<a href="#">Block Profile</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
							</ul>
						</div>
						<div class="friend-avatar">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar9.webp" alt="author" width="92" height="92">
							</div>
							<div class="author-content">
								<a href="#" class="h5 author-name">Green Goo Rock</a>
								<div class="country">Rock Band</div>
							</div>
						</div>
				
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="friend-count" data-swiper-parallax="-500">
										<a href="#" class="friend-count-item">
											<div class="h6">48</div>
											<div class="title">Photos</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">5630</div>
											<div class="title">Favourites</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">12</div>
											<div class="title">Videos</div>
										</a>
									</div>
									<div class="control-block-button" data-swiper-parallax="-100">
										<a href="#" class="btn btn-control bg-primary">
											<svg class="olymp-star-icon"><use xlink:href="#olymp-star-icon"></use></svg>
										</a>
				
										<a href="#" class="btn btn-control bg-purple">
											<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
										</a>
				
									</div>
								</div>
				
								<div class="swiper-slide">
									<p class="friend-about" data-swiper-parallax="-500">
										We are Rock Band from Los Angeles, now based in San Francisco, come and listen to us play!
									</p>
				
									<div class="friend-since" data-swiper-parallax="-100">
										<div>Website:</div>
										<a href="#" class="h6">www.ggrock.com</a>
									</div>
								</div>
							</div>
				
							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
				
				
				<!-- ... end Friend Item -->
			</div>
		</div>
		<div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="ui-block">

				
				<!-- Friend Item -->
				
				<div class="friend-item fav-page">
					<div class="friend-header-thumb">
						<img loading="lazy" src="img/fav2.webp" alt="friend" width="318" height="122">
					</div>
				
					<div class="friend-item-content">
				
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Report Profile</a>
								</li>
								<li>
									<a href="#">Block Profile</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
							</ul>
						</div>
						<div class="friend-avatar">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar10.webp" alt="author" width="92" height="92">
							</div>
							<div class="author-content">
								<a href="#" class="h5 author-name">The Marina Bar</a>
								<div class="country">Restaurant / Bar</div>
							</div>
						</div>
				
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="friend-count" data-swiper-parallax="-500">
										<a href="#" class="friend-count-item">
											<div class="h6">48</div>
											<div class="title">Photos</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">5630</div>
											<div class="title">Favourites</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">12</div>
											<div class="title">Videos</div>
										</a>
									</div>
									<div class="control-block-button" data-swiper-parallax="-100">
										<a href="#" class="btn btn-control bg-primary">
											<svg class="olymp-star-icon"><use xlink:href="#olymp-star-icon"></use></svg>
										</a>
				
										<a href="#" class="btn btn-control bg-purple">
											<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
										</a>
				
									</div>
								</div>
				
								<div class="swiper-slide">
									<p class="friend-about" data-swiper-parallax="-500">
										We are Rock Band from Los Angeles, now based in San Francisco, come and listen to us play!
									</p>
				
									<div class="friend-since" data-swiper-parallax="-100">
										<div>Website:</div>
										<a href="#" class="h6">www.ggrock.com</a>
									</div>
								</div>
							</div>
				
							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
				
				
				<!-- ... end Friend Item -->

			</div>
		</div>
		<div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="ui-block">

				
				<!-- Friend Item -->
				
				<div class="friend-item fav-page">
					<div class="friend-header-thumb">
						<img loading="lazy" src="img/fav3.webp" alt="friend" width="318" height="122">
					</div>
				
					<div class="friend-item-content">
				
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Report Profile</a>
								</li>
								<li>
									<a href="#">Block Profile</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
							</ul>
						</div>
						<div class="friend-avatar">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar11.webp" alt="author" width="92" height="92">
							</div>
							<div class="author-content">
								<a href="#" class="h5 author-name">Tapronus Rock</a>
								<div class="country">Rock Band</div>
							</div>
						</div>
				
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="friend-count" data-swiper-parallax="-500">
										<a href="#" class="friend-count-item">
											<div class="h6">48</div>
											<div class="title">Photos</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">5630</div>
											<div class="title">Favourites</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">12</div>
											<div class="title">Videos</div>
										</a>
									</div>
									<div class="control-block-button" data-swiper-parallax="-100">
										<a href="#" class="btn btn-control bg-primary">
											<svg class="olymp-star-icon"><use xlink:href="#olymp-star-icon"></use></svg>
										</a>
				
										<a href="#" class="btn btn-control bg-purple">
											<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
										</a>
				
									</div>
								</div>
				
								<div class="swiper-slide">
									<p class="friend-about" data-swiper-parallax="-500">
										We are Rock Band from Los Angeles, now based in San Francisco, come and listen to us play!
									</p>
				
									<div class="friend-since" data-swiper-parallax="-100">
										<div>Website:</div>
										<a href="#" class="h6">www.ggrock.com</a>
									</div>
								</div>
							</div>
				
							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
				
				<!-- ... end Friend Item -->

			</div>
		</div>
		<div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="ui-block">

				
				<!-- Friend Item -->
				
				<div class="friend-item fav-page">
					<div class="friend-header-thumb">
						<img loading="lazy" src="img/fav1.webp" alt="friend" width="318" height="122">
					</div>
				
					<div class="friend-item-content">
				
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Report Profile</a>
								</li>
								<li>
									<a href="#">Block Profile</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
							</ul>
						</div>
						<div class="friend-avatar">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar9.webp" alt="author" width="92" height="92">
							</div>
							<div class="author-content">
								<a href="#" class="h5 author-name">Green Goo Rock</a>
								<div class="country">Rock Band</div>
							</div>
						</div>
				
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="friend-count" data-swiper-parallax="-500">
										<a href="#" class="friend-count-item">
											<div class="h6">48</div>
											<div class="title">Photos</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">5630</div>
											<div class="title">Favourites</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">12</div>
											<div class="title">Videos</div>
										</a>
									</div>
									<div class="control-block-button" data-swiper-parallax="-100">
										<a href="#" class="btn btn-control bg-primary">
											<svg class="olymp-star-icon"><use xlink:href="#olymp-star-icon"></use></svg>
										</a>
				
										<a href="#" class="btn btn-control bg-purple">
											<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
										</a>
				
									</div>
								</div>
				
								<div class="swiper-slide">
									<p class="friend-about" data-swiper-parallax="-500">
										We are Rock Band from Los Angeles, now based in San Francisco, come and listen to us play!
									</p>
				
									<div class="friend-since" data-swiper-parallax="-100">
										<div>Website:</div>
										<a href="#" class="h6">www.ggrock.com</a>
									</div>
								</div>
							</div>
				
							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
				
				<!-- ... end Friend Item -->
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-12">
			<h2 class="presentation-margin">Photo Album</h2>
		</div>

		<div class="col col-xl-12 col-12">
			<div class="photo-album-item-wrap col-4-width" >

				
				<div class="photo-album-item create-album">
				
					<a href="#" data-bs-toggle="modal" data-bs-target="#create-photo-album" class="  full-block"></a>
				
					<div class="content">
				
						<a href="#" class="btn btn-control bg-primary" data-bs-toggle="modal" data-bs-target="#create-photo-album">
							<svg class="olymp-plus-icon"><use xlink:href="#olymp-plus-icon"></use></svg>
						</a>
				
						<a href="#" class="title h5" data-bs-toggle="modal" data-bs-target="#create-photo-album">Create an Album</a>
						<span class="sub-title">It only takes a few minutes!</span>
				
					</div>
				
				</div>

			</div>

			<div class="photo-album-item-wrap col-4-width" >

				
				
				<div class="photo-album-item">
					<div class="photo-item">
						<img loading="lazy" src="img/photo-item2.webp" alt="photo" width="332" height="284">
						<div class="overlay overlay-dark"></div>
						<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
						<a href="#" class="post-add-icon">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>324</span>
						</a>
						<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v2" class="  full-block"></a>
					</div>
				
					<div class="content">
						<a href="#" class="title h5">South America Vacations</a>
						<span class="sub-title">Last Added: 2 hours ago</span>
				
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<ul class="friends-harmonic">
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic5.webp" alt="friend" width="28" height="28">
											</a>
										</li>
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28" height="28">
											</a>
										</li>
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic7.webp" alt="friend" width="28" height="28">
											</a>
										</li>
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic8.webp" alt="friend" width="28" height="28">
											</a>
										</li>
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic2.webp" alt="friend" width="28" height="28">
											</a>
										</li>
									</ul>
								</div>
				
								<div class="swiper-slide">
									<div class="friend-count" data-swiper-parallax="-500">
										<a href="#" class="friend-count-item">
											<div class="h6">24</div>
											<div class="title">Photos</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">86</div>
											<div class="title">Comments</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">16</div>
											<div class="title">Share</div>
										</a>
									</div>
								</div>
							</div>
				
							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>
						</div>
					</div>
				
				</div>

			</div>

			<div class="photo-album-item-wrap col-4-width" >

				
				
				<div class="photo-album-item">
					<div class="photo-item">
						<img loading="lazy" src="img/photo-album1.webp" alt="photo" width="332" height="284">
						<div class="overlay overlay-dark"></div>
						<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
						<a href="#" class="post-add-icon">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>324</span>
						</a>
				
						<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v1" class="  full-block"></a>
					</div>
				
					<div class="content">
						<a href="#" class="title h5">Photoshoot Summer 2016</a>
						<span class="sub-title">Last Added: 5 weeks ago</span>
				
						<div class="swiper-container" data-slide="fade">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<ul class="friends-harmonic">
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic5.webp" alt="friend" width="28" height="28">
											</a>
										</li>
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28" height="28">
											</a>
										</li>
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic7.webp" alt="friend" width="28" height="28">
											</a>
										</li>
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic8.webp" alt="friend" width="28" height="28">
											</a>
										</li>
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic2.webp" alt="friend" width="28" height="28">
											</a>
										</li>
									</ul>
								</div>
				
								<div class="swiper-slide">
									<div class="friend-count" data-swiper-parallax="-500">
										<a href="#" class="friend-count-item">
											<div class="h6">24</div>
											<div class="title">Photos</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">86</div>
											<div class="title">Comments</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">16</div>
											<div class="title">Share</div>
										</a>
									</div>
								</div>
							</div>
				
							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>
						</div>
					</div>
				
				</div>

			</div>

			<div class="photo-album-item-wrap col-4-width" >

				
				
				<div class="photo-album-item">
					<div class="photo-item">
						<img loading="lazy" src="img/photo-album2.webp" alt="photo" width="332" height="284">
						<div class="overlay overlay-dark"></div>
						<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
						<a href="#" class="post-add-icon">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>324</span>
						</a>
				
						<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v1" class="  full-block"></a>
					</div>
				
					<div class="content">
						<a href="#" class="title h5">Amazing Street Food</a>
						<span class="sub-title">Last Added: 6 mins ago</span>
				
						<div class="swiper-container" data-slide="fade">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<ul class="friends-harmonic">
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28" height="28">
											</a>
										</li>
									</ul>
								</div>
				
								<div class="swiper-slide">
									<div class="friend-count" data-swiper-parallax="-500">
										<a href="#" class="friend-count-item">
											<div class="h6">24</div>
											<div class="title">Photos</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">86</div>
											<div class="title">Comments</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">16</div>
											<div class="title">Share</div>
										</a>
									</div>
								</div>
							</div>
				
							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>
						</div>
					</div>
				
				</div>

			</div>
		</div>

	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-12">
			<h2 class="presentation-margin">Video Album</h2>
		</div>
		<div class="col col-lg-3 col-md-3 col-sm-6 col-12">

			
			<div class="ui-block video-item">
				<div class="video-player">
					<img loading="lazy" src="img/video10.webp" alt="photo" width="318" height="212">
					<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
						<svg class="olymp-play-icon"><use xlink:href="#olymp-play-icon"></use></svg>
					</a>
					<div class="overlay overlay-dark"></div>
			
					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></div>
				</div>
			
				<div class="ui-block-content video-content">
					<a href="#" class="h6 title">Rock Garden Festival - Day 3</a>
					<time class="published" datetime="2017-03-24T18:18">18:44</time>
				</div>
			</div>
			

		</div>
		<div class="col col-lg-3 col-md-3 col-sm-6 col-12">

			
			<div class="ui-block video-item">
				<div class="video-player">
					<img loading="lazy" src="img/video11.webp" alt="photo" width="318" height="212">
					<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
						<svg class="olymp-play-icon"><use xlink:href="#olymp-play-icon"></use></svg>
					</a>
					<div class="overlay overlay-dark"></div>
			
					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></div>
				</div>
			
				<div class="ui-block-content video-content">
					<a href="#" class="h6 title">Rock Garden Festival - Day 2</a>
					<time class="published" datetime="2017-03-24T18:18">13:19</time>
				</div>
			</div>

		</div>
		<div class="col col-lg-3 col-md-3 col-sm-6 col-12">

			
			
			<div class="ui-block video-item">
				<div class="video-player">
					<img loading="lazy" src="img/video12.webp" alt="photo" width="318" height="212">
					<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
						<svg class="olymp-play-icon"><use xlink:href="#olymp-play-icon"></use></svg>
					</a>
					<div class="overlay overlay-dark"></div>
			
					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></div>
				</div>
			
				<div class="ui-block-content video-content">
					<a href="#" class="h6 title">Rock Garden Festival - Day 1</a>
					<time class="published" datetime="2017-03-24T18:18">15:47</time>
				</div>
			</div>

		</div>
		<div class="col col-lg-3 col-md-3 col-sm-6 col-12">

			
			<div class="ui-block video-item">
				<div class="video-player">
					<img loading="lazy" src="img/video13.webp" alt="photo" width="318" height="212">
					<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
						<svg class="olymp-play-icon"><use xlink:href="#olymp-play-icon"></use></svg>
					</a>
					<div class="overlay overlay-dark"></div>
			
					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></div>
				</div>
			
				<div class="ui-block-content video-content">
					<a href="#" class="h6 title">The Best Burgers in the State!</a>
					<time class="published" datetime="2017-03-24T18:18">0:23</time>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-12">
			<h2 class="presentation-margin">Badges</h2>
		</div>
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block">

				
				<div class="birthday-item inline-items badges">
					<div class="author-thumb">
						<img loading="lazy" src="img/badge1.webp" alt="author" width="38" height="38">
						<div class="label-avatar bg-primary">2</div>
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Olympian User</a>
						<div class="birthday-date">Congratulations! You have been in the Olympus community for 2 years.</div>
					</div>
				
					<div class="skills-item">
						<div class="skills-item-meter">
							<span class="skills-item-meter-active" style="width: 76%"></span>
						</div>
					</div>
				
				</div>

			</div>

			<div class="ui-block">

				
				<div class="birthday-item inline-items badges">
					<div class="author-thumb">
						<img loading="lazy" src="img/badge2.webp" alt="author" width="38" height="38">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Favourite Creator</a>
						<div class="birthday-date">You created a favourite page.</div>
					</div>
				
					<div class="skills-item">
						<div class="skills-item-meter">
							<span class="skills-item-meter-active" style="width: 100%"></span>
						</div>
					</div>
				
				</div>

			</div>

			<div class="ui-block">

				
				<div class="birthday-item inline-items badges">
					<div class="author-thumb">
						<img loading="lazy" src="img/badge3.webp" alt="author" width="38" height="38">
						<div class="label-avatar bg-blue">4</div>
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Friendly User</a>
						<div class="birthday-date">You have more than 80 friends. Next Tier: 150 Friends. </div>
					</div>
				
					<div class="skills-item">
						<div class="skills-item-meter">
							<span class="skills-item-meter-active" style="width: 52%"></span>
						</div>
					</div>
				
				</div>

			</div>

			<div class="ui-block">

				
				<div class="birthday-item inline-items badges">
					<div class="author-thumb">
						<img loading="lazy" src="img/badge4.webp" alt="author" width="38" height="38">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Professional Photographer</a>
						<div class="birthday-date">You have uploaded more than 500 images to your profile.</div>
					</div>
				
					<div class="skills-item">
						<div class="skills-item-meter">
							<span class="skills-item-meter-active" style="width: 100%"></span>
						</div>
					</div>
				
				</div>

			</div>

			<div class="ui-block">

				
				<div class="birthday-item inline-items badges">
					<div class="author-thumb">
						<img loading="lazy" src="img/badge5.webp" alt="author" width="38" height="38">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Expert Filmaker</a>
						<div class="birthday-date">You have uploaded more than 80 videos to your profile.</div>
					</div>
				
					<div class="skills-item">
						<div class="skills-item-meter">
							<span class="skills-item-meter-active" style="width: 70%"></span>
						</div>
					</div>
				
				</div>

			</div>

		</div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-12">
			<h2 class="presentation-margin">Birthday</h2>
		</div>
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">January</h6>
				</div>
			</div>
		</div>
		<div class="col col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img loading="lazy" src="img/avatar7-sm.webp" alt="author" width="42" height="42">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Marina Valentine </a>
						<div class="birthday-date">January 16th, 1989</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.php" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>

		<div class="col col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="ui-block">

				
				<!-- Birthday Item -->
				
				<div class="birthday-item inline-items">
					<div class="author-thumb">
						<img loading="lazy" src="img/avatar7-sm.webp" alt="author" width="42" height="42">
					</div>
					<div class="birthday-author-name">
						<a href="#" class="h6 author-name">Marina Valentine </a>
						<div class="birthday-date">January 16th, 1989</div>
					</div>
					<a href="20-CalendarAndEvents-MonthlyCalendar.php" class="btn btn-sm bg-blue">Create Event</a>
				</div>
				
				<!-- ... end Birthday Item -->

			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-12">
			<h2 class="presentation-margin">Chat</h2>
		</div>
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			
			<!-- Popup Chat -->
			
			<div class="ui-block popup-chat">
				<div class="ui-block-title">
					<span class="icon-status online"></span>
					<h6 class="title">Mathilda Brinker</h6>
					<div class="more">
						<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
						<svg class="olymp-little-delete"><use xlink:href="#olymp-little-delete"></use></svg>
					</div>
				</div>
				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<ul class="notification-list chat-message chat-message-field">
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
							</div>
						</li>
			
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Don’t worry Mathilda!</span>
								<span class="chat-message-item">I already bought everything</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
							</div>
						</li>
			
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
							</div>
						</li>
					</ul>
				</div>
			
				<form>
			
					<div class="form-group label-floating is-empty">
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
			
			<!-- ... end Popup Chat -->
			

		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-12">
			<h2 class="presentation-margin">Pagination</h2>
		</div>
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			
			<!-- Pagination -->
			
			<nav aria-label="Page navigation">
				<ul class="pagination justify-content-center">
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1">Previous</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div></div></a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">...</a></li>
					<li class="page-item"><a class="page-link" href="#">12</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>
			
			<!-- ... end Pagination -->

		</div>
	</div>
</div>





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
<script src="js/libs/isotope.pkgd.min.js"></script>
<script src="js/libs/ajax-pagination.min.js"></script>
<script src="js/libs/jquery.magnific-popup.min.js"></script>

<script src="js/main.js"></script>
<script src="js/libs-init/libs-init.js"></script>

<script src="Bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- SVG icons loader -->
<script src="js/svg-loader.js"></script>
<!-- /SVG icons loader -->

</body>
</html>