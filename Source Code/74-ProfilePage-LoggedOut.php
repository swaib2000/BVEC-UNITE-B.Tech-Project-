<!DOCTYPE html>
<html lang="en">
<head>

	<title>Social Search Results</title>

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


<!-- Header-BP-logout -->

<header class="header header--logout" id="site-header">
	<a href="02-ProfilePage.php" class="logo">
		<div class="img-wrap">
			<img loading="lazy" src="img/logo.webp" alt="<?php echo $_SESSION['project_title']; ?>" width="34" height="34">
		</div>
	</a>

	<div class="page-title">
		<h6>LOGGED OUT</h6>
	</div>

	<div class="header-content-wrapper">
		<form class="search-bar w-search notification-list friend-requests">
			<div class="form-group with-button">
				<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
				<button>
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="#olymp-magnifying-glass-icon"></use></svg>
				</button>
			</div>
		</form>

		<div class="form--login-logout">
			<form class="form-inline">
				<div class="form-group">
					<input class="form-control form-control-sm" type="text" placeholder="Username" value="" required>
				</div>
				<div class="form-group">
					<input class="form-control form-control-sm" type="password" placeholder="Password" value="" required>
				</div>
				<button class="btn btn-primary btn-md-2">Login</button>
			</form>
			<a href="#" class="btn btn-primary btn-md-2 login-btn-responsive" data-bs-toggle="modal" data-bs-target="#registration-login-form-popup">Login</a>
		</div>
	</div>

</header>

<!-- ... end Header-BP-logout -->
<div class="header-spacer"></div>



<!-- Top Header-Profile Logout -->

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="top-header">
					<div class="top-header-thumb">

					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<a href="#" class="friend-count-item">
											<div class="h6">58</div>
											<div class="title">Friends</div>
										</a>
									</li>
									<li>
										<a href="#" class="friend-count-item">
											<div class="h6">240</div>
											<div class="title">Photos</div>
										</a>
									</li>
									<li>
										<a href="#" class="friend-count-item">
											<div class="h6">12</div>
											<div class="title">Videos</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="col col-lg-5 ms-auto col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<a href="#" class="friend-count-item">
											<div class="h6">835</div>
											<div class="title">Posts</div>
										</a>
									</li>
									<li>
										<a href="#" class="friend-count-item">
											<div class="h6">12.6K</div>
											<div class="title">Comments</div>
										</a>
									</li>
									<li>
										<a href="#" class="friend-count-item">
											<div class="h6">970</div>
											<div class="title">Likes</div>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="control-block-button">
							<a href="35-YourAccount-FriendsRequests.php" class="btn btn-control bg-blue">
								<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
							</a>

							<a href="#" class="btn btn-control bg-purple">
								<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
							</a>
						</div>
					</div>
					<div class="top-header-author">
						<a href="02-ProfilePage.php" class="author-thumb">
							<img loading="lazy" src="img/author-main1.webp" alt="author" width="124" height="124">
						</a>
						<div class="author-content">
							<a href="02-ProfilePage.php" class="h4 author-name">James Spiegel</a>
							<div class="country">San Francisco, CA</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Top Header-Profile Logout -->
<section class="medium-padding120">
	<div class="container">
		<div class="row">
			<div class="col col-xl-4 col-lg-12 col-md-12 col-12 m-auto">
				<div class="logout-content">
					<div class="logout-icon">
						<svg width="10" height="10"><use xlink:href="#olymp-close-icon"></use></svg>
					</div>
					<h6>Do you wanna check James’s Profile?</h6>
					<p><a href="01-LandingPage.php">Login</a> or <a href="01-LandingPage.php">Register</a> now to create your own profile
						and have access to all the Olympus awesome features!
					</p>
				</div>
			</div>
		</div>
	</div>
</section>


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
<script src="js/libs/moment.min.js"></script>
<script src="js/libs/daterangepicker.min.js"></script>
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