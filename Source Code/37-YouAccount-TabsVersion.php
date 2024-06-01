<!DOCTYPE html>
<html lang="en">
<head>

	<title>Your Account - Tabs Version</title>

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
<body class="page-has-left-panels page-has-right-panels">


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
<!-- Profile Settings Responsive -->

<div id="responsive-container-panel" class="profile-settings-responsive">

	<a href="#" class="js-profile-settings-open profile-settings-open">
		<svg class="settings-open-arrow" width="14" height="14">
			<use xlink:href="#olymp-popup-left-arrow"></use>
		</svg>
	</a>
	<div class="mCustomScrollbar" data-mcs-theme="dark">
		<div class="ui-block">

		</div>
	</div>
</div>

<!-- ... end Profile Settings Responsive -->


<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar left">
	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

		<a href="02-ProfilePage.php" class="logo">
			<div class="img-wrap">
				<img loading="lazy" src="img/logo.webp" alt="<?php echo $_SESSION['project_title']; ?>" width="34" height="34">
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-menu-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="OPEN MENU">
							<use xlink:href="#olymp-menu-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="03-Newsfeed.php">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="NEWSFEED">
							<use xlink:href="#olymp-newsfeed-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="16-FavPagesFeed.php">
						<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FAV PAGE">
							<use xlink:href="#olymp-star-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="17-FriendGroups.php">
						<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
							<use xlink:href="#olymp-happy-faces-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="18-MusicAndPlaylists.php">
						<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
							<use xlink:href="#olymp-headphones-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="19-WeatherWidget.php">
						<svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="WEATHER APP">
							<use xlink:href="#olymp-weather-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="20-CalendarAndEvents-MonthlyCalendar.php">
						<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
							<use xlink:href="#olymp-calendar-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="24-CommunityBadges.php">
						<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Community Badges">
							<use xlink:href="#olymp-badge-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="25-FriendsBirthday.php">
						<svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Friends Birthdays">
							<use xlink:href="#olymp-cupcake-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="26-Statistics.php">
						<svg class="olymp-stats-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Account Stats">
							<use xlink:href="#olymp-stats-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="27-ManageWidgets.php">
						<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Manage Widgets">
							<use xlink:href="#olymp-manage-widgets-icon"></use>
						</svg>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
		<a href="02-ProfilePage.php" class="logo">
			<div class="img-wrap">
				<img loading="lazy" src="img/logo.webp" alt="<?php echo $_SESSION['project_title']; ?>" width="34" height="34">
			</div>
			<div class="title-block">
				<h6 class="logo-title">olympus</h6>
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
						<span class="left-menu-title">Collapse Menu</span>
					</a>
				</li>
				<li>
					<a href="03-Newsfeed.php">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="NEWSFEED">
							<use xlink:href="#olymp-newsfeed-icon"></use>
						</svg>
						<span class="left-menu-title">Newsfeed</span>
					</a>
				</li>
				<li>
					<a href="16-FavPagesFeed.php">
						<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FAV PAGE">
							<use xlink:href="#olymp-star-icon"></use>
						</svg>
						<span class="left-menu-title">Fav Pages Feed</span>
					</a>
				</li>
				<li>
					<a href="17-FriendGroups.php">
						<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
							<use xlink:href="#olymp-happy-faces-icon"></use>
						</svg>
						<span class="left-menu-title">Friend Groups</span>
					</a>
				</li>
				<li>
					<a href="18-MusicAndPlaylists.php">
						<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
							<use xlink:href="#olymp-headphones-icon"></use>
						</svg>
						<span class="left-menu-title">Music & Playlists</span>
					</a>
				</li>
				<li>
					<a href="19-WeatherWidget.php">
						<svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="WEATHER APP">
							<use xlink:href="#olymp-weather-icon"></use>
						</svg>
						<span class="left-menu-title">Weather App</span>
					</a>
				</li>
				<li>
					<a href="20-CalendarAndEvents-MonthlyCalendar.php">
						<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
							<use xlink:href="#olymp-calendar-icon"></use>
						</svg>
						<span class="left-menu-title">Calendar and Events</span>
					</a>
				</li>
				<li>
					<a href="24-CommunityBadges.php">
						<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Community Badges">
							<use xlink:href="#olymp-badge-icon"></use>
						</svg>
						<span class="left-menu-title">Community Badges</span>
					</a>
				</li>
				<li>
					<a href="25-FriendsBirthday.php">
						<svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Friends Birthdays">
							<use xlink:href="#olymp-cupcake-icon"></use>
						</svg>
						<span class="left-menu-title">Friends Birthdays</span>
					</a>
				</li>
				<li>
					<a href="26-Statistics.php">
						<svg class="olymp-stats-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Account Stats">
							<use xlink:href="#olymp-stats-icon"></use>
						</svg>
						<span class="left-menu-title">Account Stats</span>
					</a>
				</li>
				<li>
					<a href="27-ManageWidgets.php">
						<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Manage Widgets">
							<use xlink:href="#olymp-manage-widgets-icon"></use>
						</svg>
						<span class="left-menu-title">Manage Widgets</span>
					</a>
				</li>
			</ul>

			<div class="profile-completion">

				<div class="skills-item">
					<div class="skills-item-info">
						<span class="skills-item-title">Profile Completion</span>
						<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="76" data-from="0"></span><span class="units">76%</span></span>
					</div>
					<div class="skills-item-meter">
						<span class="skills-item-meter-active bg-primary" style="width: 76%"></span>
					</div>
				</div>

				<span>Complete <a href="#">your profile</a> so people can know more about you!</span>

			</div>
		</div>
	</div>
</div>

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar left fixed-sidebar-responsive">

	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
		<a href="#" class="logo js-sidebar-open">
			<img loading="lazy" src="img/logo.webp" alt="<?php echo $_SESSION['project_title']; ?>" width="34" height="34">
		</a>

	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
		<a href="#" class="logo">
			<div class="img-wrap">
				<img loading="lazy" src="img/logo.webp" alt="<?php echo $_SESSION['project_title']; ?>" width="34" height="34">
			</div>
			<div class="title-block">
				<h6 class="logo-title">olympus</h6>
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="control-block">
				<div class="author-page author vcard inline-items">
					<div class="author-thumb">
						<img alt="author" src="img/author-page.webp" width="36" height="36" class="avatar">
						<span class="icon-status online"></span>
					</div>
					<a href="02-ProfilePage.php" class="author-name fn">
						<div class="author-title">
							James Spiegel
							<svg class="olymp-dropdown-arrow-icon">
								<use xlink:href="#olymp-dropdown-arrow-icon"></use>
							</svg>
						</div>
						<span class="author-subtitle">SPACE COWBOY</span>
					</a>
				</div>
			</div>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">MAIN SECTIONS</h6>
			</div>

			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
						<span class="left-menu-title">Collapse Menu</span>
					</a>
				</li>
				<li>
					<a href="mobile-index.php">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="NEWSFEED">
							<use xlink:href="#olymp-newsfeed-icon"></use>
						</svg>
						<span class="left-menu-title">Newsfeed</span>
					</a>
				</li>
				<li>
					<a href="Mobile-28-YourAccount-PersonalInformation.php">
						<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FAV PAGE">
							<use xlink:href="#olymp-star-icon"></use>
						</svg>
						<span class="left-menu-title">Fav Pages Feed</span>
					</a>
				</li>
				<li>
					<a href="mobile-29-YourAccount-AccountSettings.php">
						<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
							<use xlink:href="#olymp-happy-faces-icon"></use>
						</svg>
						<span class="left-menu-title">Friend Groups</span>
					</a>
				</li>
				<li>
					<a href="Mobile-30-YourAccount-ChangePassword.php">
						<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
							<use xlink:href="#olymp-headphones-icon"></use>
						</svg>
						<span class="left-menu-title">Music & Playlists</span>
					</a>
				</li>
				<li>
					<a href="Mobile-31-YourAccount-HobbiesAndInterests.php">
						<svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="WEATHER APP">
							<use xlink:href="#olymp-weather-icon"></use>
						</svg>
						<span class="left-menu-title">Weather App</span>
					</a>
				</li>
				<li>
					<a href="Mobile-32-YourAccount-EducationAndEmployement.php">
						<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
							<use xlink:href="#olymp-calendar-icon"></use>
						</svg>
						<span class="left-menu-title">Calendar and Events</span>
					</a>
				</li>
				<li>
					<a href="Mobile-33-YourAccount-Notifications.php">
						<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Community Badges">
							<use xlink:href="#olymp-badge-icon"></use>
						</svg>
						<span class="left-menu-title">Community Badges</span>
					</a>
				</li>
				<li>
					<a href="Mobile-34-YourAccount-ChatMessages.php">
						<svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Friends Birthdays">
							<use xlink:href="#olymp-cupcake-icon"></use>
						</svg>
						<span class="left-menu-title">Friends Birthdays</span>
					</a>
				</li>
				<li>
					<a href="Mobile-35-YourAccount-FriendsRequests.php">
						<svg class="olymp-stats-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Account Stats">
							<use xlink:href="#olymp-stats-icon"></use>
						</svg>
						<span class="left-menu-title">Account Stats</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Manage Widgets">
							<use xlink:href="#olymp-manage-widgets-icon"></use>
						</svg>
						<span class="left-menu-title">Manage Widgets</span>
					</a>
				</li>
			</ul>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">YOUR ACCOUNT</h6>
			</div>

			<ul class="account-settings">
				<li>
					<a href="#">

						<svg class="olymp-menu-icon">
							<use xlink:href="#olymp-menu-icon"></use>
						</svg>

						<span>Profile Settings</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FAV PAGE">
							<use xlink:href="#olymp-star-icon"></use>
						</svg>

						<span>Create Fav Page</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-logout-icon">
							<use xlink:href="#olymp-logout-icon"></use>
						</svg>

						<span>Log Out</span>
					</a>
				</li>
			</ul>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">About Olympus</h6>
			</div>

			<ul class="about-olympus">
				<li>
					<a href="#">
						<span>Terms and Conditions</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>FAQs</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>Careers</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>Contact</span>
					</a>
				</li>
			</ul>

		</div>
	</div>
</div>

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->

<div class="fixed-sidebar right">
	<div class="fixed-sidebar-right sidebar--small" id="sidebar-right">

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="chat-users">
				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar67-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>
				</li>
				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar62-sm.webp" width="34" height="34" class="avatar">
						<span class="icon-status online"></span>
					</div>
				</li>

				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar68-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>
				</li>

				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar69-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status away"></span>
					</div>
				</li>

				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar70-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status disconected"></span>
					</div>
				</li>
				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img alt="author" loading="lazy" src="img/avatar64-sm.webp" width="34" height="34" class="avatar">
						<span class="icon-status online"></span>
					</div>
				</li>
				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar71-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>
				</li>
				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar72-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status away"></span>
					</div>
				</li>
				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar63-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status status-invisible"></span>
					</div>
				</li>
				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar72-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status away"></span>
					</div>
				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar71-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>
				</li>
			</ul>
		</div>

		<div class="search-friend inline-items">
			<a href="#" class="js-sidebar-open">
				<svg class="olymp-menu-icon">
					<use xlink:href="#olymp-menu-icon"></use>
				</svg>
			</a>
		</div>

		<a href="#" class="olympus-chat inline-items js-chat-open">
			<svg class="olymp-chat---messages-icon">
				<use xlink:href="#olymp-chat---messages-icon"></use>
			</svg>
		</a>

	</div>

	<div class="fixed-sidebar-right sidebar--large" id="sidebar-right-1">

		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">Close Friends</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar67-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Carol Summers</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>

				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar62-sm.webp" width="34" height="34" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Mathilda Brinker</a>
						<span class="status">AT WORK!</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>

				</li>

				<li class="inline-items js-chat-open">


					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar68-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Carol Summers</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>


				</li>

				<li class="inline-items js-chat-open">


					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar69-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Michael Maximoff</a>
						<span class="status">AWAY</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>


				</li>

				<li class="inline-items js-chat-open">


					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar70-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status disconected"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Rachel Howlett</a>
						<span class="status">OFFLINE</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>


				</li>
			</ul>


			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">MY FAMILY</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" loading="lazy" src="img/avatar64-sm.webp" width="34" height="34" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Sarah Hetfield</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>
				</li>
			</ul>


			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">UNCATEGORIZED</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar71-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Bruce Peterson</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>


				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar72-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Chris Greyson</a>
						<span class="status">AWAY</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>

				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar63-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status status-invisible"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Nicholas Grisom</a>
						<span class="status">INVISIBLE</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>
				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar72-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Chris Greyson</a>
						<span class="status">AWAY</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>
				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar71-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Bruce Peterson</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>
				</li>
			</ul>

		</div>

		<div class="search-friend inline-items">
			<form class="form-group">
				<input class="form-control" placeholder="Search Friends..." value="" type="text">
			</form>

			<a href="29-YourAccount-AccountSettings.php" class="settings">
				<svg class="olymp-settings-icon">
					<use xlink:href="#olymp-settings-icon"></use>
				</svg>
			</a>

			<a href="#" class="js-sidebar-open">
				<svg class="olymp-close-icon">
					<use xlink:href="#olymp-close-icon"></use>
				</svg>
			</a>
		</div>

		<a href="#" class="olympus-chat inline-items js-chat-open">

			<h6 class="olympus-chat-title">OLYMPUS CHAT</h6>
			<svg class="olymp-chat---messages-icon">
				<use xlink:href="#olymp-chat---messages-icon"></use>
			</svg>
		</a>

	</div>
</div>

<!-- ... end Fixed Sidebar Right -->


<!-- Fixed Sidebar Right-Responsive -->

<div class="fixed-sidebar right fixed-sidebar-responsive" id="sidebar-right-responsive">

	<div class="fixed-sidebar-right sidebar--small">
		<a href="#" class="js-sidebar-open">
			<svg class="olymp-menu-icon">
				<use xlink:href="#olymp-menu-icon"></use>
			</svg>
			<svg class="olymp-close-icon">
				<use xlink:href="#olymp-close-icon"></use>
			</svg>
		</a>
	</div>

	<div class="fixed-sidebar-right sidebar--large">
		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">Close Friends</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar67-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Carol Summers</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>

				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar62-sm.webp" width="34" height="34" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Mathilda Brinker</a>
						<span class="status">AT WORK!</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>

				</li>

				<li class="inline-items js-chat-open">


					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar68-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Carol Summers</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>


				</li>

				<li class="inline-items js-chat-open">


					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar69-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Michael Maximoff</a>
						<span class="status">AWAY</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>


				</li>

				<li class="inline-items js-chat-open">


					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar70-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status disconected"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Rachel Howlett</a>
						<span class="status">OFFLINE</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>


				</li>
			</ul>


			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">MY FAMILY</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" loading="lazy" src="img/avatar64-sm.webp" width="34" height="34" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Sarah Hetfield</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>
				</li>
			</ul>


			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">UNCATEGORIZED</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar71-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Bruce Peterson</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>


				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar72-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Chris Greyson</a>
						<span class="status">AWAY</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>

				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar63-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status status-invisible"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Nicholas Grisom</a>
						<span class="status">INVISIBLE</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>
				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar72-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Chris Greyson</a>
						<span class="status">AWAY</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>
				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar71-sm.webp" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Bruce Peterson</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>
				</li>
			</ul>

		</div>

		<div class="search-friend inline-items">
			<form class="form-group">
				<input class="form-control" placeholder="Search Friends..." value="" type="text">
			</form>

			<a href="29-YourAccount-AccountSettings.php" class="settings">
				<svg class="olymp-settings-icon">
					<use xlink:href="#olymp-settings-icon"></use>
				</svg>
			</a>

			<a href="#" class="js-sidebar-open">
				<svg class="olymp-close-icon">
					<use xlink:href="#olymp-close-icon"></use>
				</svg>
			</a>
		</div>

		<a href="#" class="olympus-chat inline-items js-chat-open">

			<h6 class="olympus-chat-title">OLYMPUS CHAT</h6>
			<svg class="olymp-chat---messages-icon">
				<use xlink:href="#olymp-chat---messages-icon"></use>
			</svg>
		</a>
	</div>

</div>

<!-- ... end Fixed Sidebar Right-Responsive -->


<!-- Header-BP -->

<header class="header" id="site-header">

	<div class="page-title">
		<h6>your account</h6>
	</div>

	<div class="header-content-wrapper">
		<form class="search-bar w-search notification-list friend-requests">
			<div class="form-group with-button">
				<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
				<button>
					<svg class="olymp-magnifying-glass-icon">
						<use xlink:href="#olymp-magnifying-glass-icon"></use>
					</svg>
				</button>
			</div>
		</form>

		<a href="#" class="link-find-friend">Find Friends</a>

		<div class="control-block">

			<div class="control-icon more has-items">
				<svg class="olymp-happy-face-icon">
					<use xlink:href="#olymp-happy-face-icon"></use>
				</svg>
				<div class="label-avatar bg-blue">6</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FRIEND REQUESTS</h6>
						<a href="#">Find Friends</a>
						<a href="#">Settings</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list friend-requests">
							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar55-sm.webp" alt="author" width="34" height="34">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Tamara Romanoff</a>
									<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
								</div>
								<span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar56-sm.webp" alt="author" width="34" height="34">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Tony Stevens</a>
									<span class="chat-message-item">4 Friends in Common</span>
								</div>
								<span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
								</div>
							</li>

							<li class="accepted">
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar57-sm.webp" alt="author" width="34" height="34">
								</div>
								<div class="notification-event">
									You and
									<a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on
									<a href="#" class="notification-link">her wall</a>.
								</div>
								<span class="notification-icon">
									<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar58-sm.webp" alt="author" width="34" height="34">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Stagg Clothing</a>
									<span class="chat-message-item">9 Friends in Common</span>
								</div>
								<span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
								</div>
							</li>

						</ul>
					</div>

					<a href="#" class="view-all bg-blue">Check all your Events</a>
				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-chat---messages-icon">
					<use xlink:href="#olymp-chat---messages-icon"></use>
				</svg>
				<div class="label-avatar bg-purple">2</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Chat / Messages</h6>
						<a href="#">Mark all as read</a>
						<a href="#">Settings</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list chat-message">
							<li class="message-unread">
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar59-sm.webp" alt="author" width="34" height="34">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Diana Jameson</a>
									<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
								<span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
								</span>
								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar60-sm.webp" alt="author" width="34" height="34">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Jake Parker</a>
									<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
								<span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
								</div>
							</li>
							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar61-sm.webp" alt="author" width="34" height="34">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
									<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
								</div>
								<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
									</span>
								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
								</div>
							</li>

							<li class="chat-group">
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar11-sm.webp" alt="author" width="16" height="16">
									<img loading="lazy" src="img/avatar12-sm.webp" alt="author" width="16" height="16">
									<img loading="lazy" src="img/avatar13-sm.webp" alt="author" width="16" height="16">
									<img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
									<span class="last-message-author">Ed:</span>
									<span class="chat-message-item">Yeah! Seems fine by me!</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
								</div>
								<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
									</span>
								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
								</div>
							</li>
						</ul>
					</div>

					<a href="#" class="view-all bg-purple">View All Messages</a>
				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-thunder-icon">
					<use xlink:href="#olymp-thunder-icon"></use>
				</svg>

				<div class="label-avatar bg-primary">8</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Notifications</h6>
						<a href="#">Mark all as read</a>
						<a href="#">Settings</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list">
							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar62-sm.webp" width="34" height="34" alt="author">
								</div>
								<div class="notification-event">
									<div>
										<a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new
										<a href="#" class="notification-link">profile status</a>.
									</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
								<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

							<li class="un-read">
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar63-sm.webp" alt="author" width="34" height="34">
								</div>
								<div class="notification-event">
									<div>You and
										<a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on
										<a href="#" class="notification-link">his wall</a>.
									</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
								</div>
								<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

							<li class="with-comment-photo-wrap">
								<div class="with-comment-photo">
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar64-sm.webp" width="34" height="34" alt="author"></div>
									<div class="notification-event">
										<div>
											<a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your
											<a href="#" class="notification-link">photo</a>.
										</div>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
									</div>
									<span class="notification-icon">										<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>									</span>
								</div>
								<div class="comment-photo">
									<img loading="lazy" src="img/comment-photo1.webp" alt="photo" width="40" height="40">
									<span>“She looks incredible in that outfit! We should see each...”</span></div>
								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar65-sm.webp" alt="author" width="34" height="34">
								</div>
								<div class="notification-event">
									<div>
										<a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in
										<a href="#" class="notification-link">Gotham Bar</a>.
									</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
								</div>
								<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar66-sm.webp" alt="author" width="34" height="34">
								</div>
								<div class="notification-event">
									<div>
										<a href="#" class="h6 notification-friend">James Summers</a> commented on your new
										<a href="#" class="notification-link">profile status</a>.
									</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
								</div>
								<span class="notification-icon">
										<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>
						</ul>
					</div>

					<a href="#" class="view-all bg-primary">View All Notifications</a>
				</div>
			</div>

			<div class="author-page author vcard inline-items more">
				<div class="author-thumb">
					<img alt="author" src="img/author-page.webp" width="36" height="36" class="avatar">
					<span class="icon-status online"></span>
					<div class="more-dropdown more-with-triangle">
						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Your Account</h6>
							</div>

							<ul class="account-settings">
								<li>
									<a href="29-YourAccount-AccountSettings.php">

										<svg class="olymp-menu-icon">
											<use xlink:href="#olymp-menu-icon"></use>
										</svg>

										<span>Profile Settings</span>
									</a>
								</li>
								<li>
									<a href="36-FavPage-SettingsAndCreatePopup.php">
										<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FAV PAGE">
											<use xlink:href="#olymp-star-icon"></use>
										</svg>

										<span>Create Fav Page</span>
									</a>
								</li>
								<li>
									<a href="#">
										<svg class="olymp-logout-icon">
											<use xlink:href="#olymp-logout-icon"></use>
										</svg>

										<span>Log Out</span>
									</a>
								</li>
							</ul>

							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Chat Settings</h6>
							</div>

							<ul class="chat-settings">
								<li>
									<a href="#">
										<span class="icon-status online"></span>
										<span>Online</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="icon-status away"></span>
										<span>Away</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="icon-status disconected"></span>
										<span>Disconnected</span>
									</a>
								</li>

								<li>
									<a href="#">
										<span class="icon-status status-invisible"></span>
										<span>Invisible</span>
									</a>
								</li>
							</ul>

							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Custom Status</h6>
							</div>

							<form class="form-group with-button custom-status">
								<input class="form-control" placeholder="" type="text" value="Space Cowboy">

								<button class="bg-purple">
									<svg class="olymp-check-icon">
										<use xlink:href="#olymp-check-icon"></use>
									</svg>
								</button>
							</form>

							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">About Olympus</h6>
							</div>

							<ul>
								<li>
									<a href="#">
										<span>Terms and Conditions</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>FAQs</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>Careers</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>Contact</span>
									</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
				<a href="02-ProfilePage.php" class="author-name fn">
					<div class="author-title">
						James Spiegel
						<svg class="olymp-dropdown-arrow-icon">
							<use xlink:href="#olymp-dropdown-arrow-icon"></use>
						</svg>
					</div>
					<span class="author-subtitle">SPACE COWBOY</span>
				</a>
			</div>

		</div>
	</div>

</header>

<!-- ... end Header-BP -->


<!-- Responsive Header-BP -->

<header class="header header-responsive" id="site-header-responsive">

	<div class="header-content-wrapper">
		<ul class="nav nav-tabs mobile-notification-tabs" id="mobile-notification-tabs" role="tablist">
			<li class="nav-item" role="presentation">
				<a class="nav-link" id="request-tab" data-bs-toggle="tab" href="#request" role="tab" aria-controls="request" aria-selected="false">
					<div class="control-icon has-items">
						<svg class="olymp-happy-face-icon">
							<use xlink:href="#olymp-happy-face-icon"></use>
						</svg>
						<div class="label-avatar bg-blue">6</div>
					</div>
				</a>
			</li>

			<li class="nav-item" role="presentation">
				<a class="nav-link" id="chat-tab" data-bs-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="false">
					<div class="control-icon has-items">
						<svg class="olymp-chat---messages-icon">
							<use xlink:href="#olymp-chat---messages-icon"></use>
						</svg>
						<div class="label-avatar bg-purple">2</div>
					</div>
				</a>
			</li>

			<li class="nav-item" role="presentation">
				<a class="nav-link" id="notification-tab" data-bs-toggle="tab" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
					<div class="control-icon has-items">
						<svg class="olymp-thunder-icon">
							<use xlink:href="#olymp-thunder-icon"></use>
						</svg>
						<div class="label-avatar bg-primary">8</div>
					</div>
				</a>
			</li>

			<li class="nav-item" role="presentation">
				<a class="nav-link" id="search-tab" data-bs-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="false">
					<svg class="olymp-magnifying-glass-icon">
						<use xlink:href="#olymp-magnifying-glass-icon"></use>
					</svg>
					<svg class="olymp-close-icon">
						<use xlink:href="#olymp-close-icon"></use>
					</svg>
				</a>
			</li>
		</ul>
	</div>

	<!-- Tab panes -->
	<div class="tab-content tab-content-responsive">

		<div class="tab-pane fade" id="request" role="tabpanel" aria-labelledby="request-tab">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">FRIEND REQUESTS</h6>
					<a href="#">Find Friends</a>
					<a href="#">Settings</a>
				</div>
				<ul class="notification-list friend-requests">
					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar55-sm.webp" alt="author" width="34" height="34">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Tamara Romanoff</a>
							<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
						</div>
						<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar56-sm.webp" alt="author" width="34" height="34">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Tony Stevens</a>
							<span class="chat-message-item">4 Friends in Common</span>
						</div>
						<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
						</div>
					</li>
					<li class="accepted">
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar57-sm.webp" alt="author" width="34" height="34">
						</div>
						<div class="notification-event">
							You and
							<a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on
							<a href="#" class="notification-link">her wall</a>.
						</div>
						<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<svg class="olymp-little-delete">
								<use xlink:href="#olymp-little-delete"></use>
							</svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar58-sm.webp" alt="author" width="34" height="34">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Stagg Clothing</a>
							<span class="chat-message-item">9 Friends in Common</span>
						</div>
						<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
						</div>
					</li>
				</ul>
				<a href="#" class="view-all bg-blue">Check all your Events</a>
			</div>

		</div>

		<div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chat-tab">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Chat / Messages</h6>
					<a href="#">Mark all as read</a>
					<a href="#">Settings</a>
				</div>

				<ul class="notification-list chat-message">
					<li class="message-unread">
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar59-sm.webp" alt="author" width="34" height="34">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Diana Jameson</a>
							<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
						<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
									</span>
						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar60-sm.webp" alt="author" width="34" height="34">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Jake Parker</a>
							<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
						<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar61-sm.webp" alt="author" width="34" height="34">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
							<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
						</div>
						<span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
										</span>
						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
						</div>
					</li>

					<li class="chat-group">
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar11-sm.webp" alt="author" width="16" height="16">
							<img loading="lazy" src="img/avatar12-sm.webp" alt="author" width="16" height="16">
							<img loading="lazy" src="img/avatar13-sm.webp" alt="author" width="16" height="16">
							<img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
							<span class="last-message-author">Ed:</span>
							<span class="chat-message-item">Yeah! Seems fine by me!</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
						</div>
						<span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
										</span>
						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
						</div>
					</li>
				</ul>

				<a href="#" class="view-all bg-purple">View All Messages</a>
			</div>

		</div>

		<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Notifications</h6>
					<a href="#">Mark all as read</a>
					<a href="#">Settings</a>
				</div>

				<ul class="notification-list">
					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar62-sm.webp" width="34" height="34" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new
								<a href="#" class="notification-link">profile status</a>.
							</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
						<span class="notification-icon">
											<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<svg class="olymp-little-delete">
								<use xlink:href="#olymp-little-delete"></use>
							</svg>
						</div>
					</li>

					<li class="un-read">
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar63-sm.webp" alt="author" width="34" height="34">
						</div>
						<div class="notification-event">
							<div>You and
								<a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on
								<a href="#" class="notification-link">his wall</a>.
							</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
						</div>
						<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<svg class="olymp-little-delete">
								<use xlink:href="#olymp-little-delete"></use>
							</svg>
						</div>
					</li>

					<li class="with-comment-photo-wrap">
						<div class="with-comment-photo">
							<div class="author-thumb"><img loading="lazy" src="img/avatar64-sm.webp" width="34" height="34" alt="author"></div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your
									<a href="#" class="notification-link">photo</a>.
								</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
							</div>
							<span class="notification-icon">										<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>									</span>
						</div>
						<div class="comment-photo"><img loading="lazy" src="img/comment-photo1.webp" alt="photo" width="40" height="40">
							<span>“She looks incredible in that outfit! We should see each...”</span></div>
						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<svg class="olymp-little-delete">
								<use xlink:href="#olymp-little-delete"></use>
							</svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar65-sm.webp" alt="author" width="34" height="34">
						</div>
						<div class="notification-event">
							<div>
								<a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in
								<a href="#" class="notification-link">Gotham Bar</a>.
							</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
						</div>
						<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<svg class="olymp-little-delete">
								<use xlink:href="#olymp-little-delete"></use>
							</svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar66-sm.webp" alt="author" width="34" height="34">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new
								<a href="#" class="notification-link">profile status</a>.
							</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
						</div>
						<span class="notification-icon">
											<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<svg class="olymp-little-delete">
								<use xlink:href="#olymp-little-delete"></use>
							</svg>
						</div>
					</li>
				</ul>

				<a href="#" class="view-all bg-primary">View All Notifications</a>
			</div>

		</div>

		<div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">

			<form class="search-bar w-search notification-list friend-requests">
				<div class="form-group with-button">
					<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
				</div>
			</form>

		</div>

	</div>
	<!-- ... end  Tab panes -->

</header>

<!-- ... end Responsive Header-BP -->
<div class="header-spacer header-spacer-small"></div>

<!-- Main Header Account -->

<div class="main-header">
	<div class="content-bg-wrap bg-account"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Your Account Dashboard</h1>
					<p>Welcome to your account dashboard! Here you’ll find everything you need to change your profile
						information, settings, read notifications and requests, view your latest messages, change your pasword and much
						more! Also you can create or manage your own favourite page, have fun!</p>
				</div>
			</div>
		</div>
	</div>
	<img class="img-bottom" src="img/account-bottom.webp" width="1169" height="153">
</div>

<!-- ... end Main Header Account -->


<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">

			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
					<div class="ui-block">
						<div class="ui-block-title">
							<h6 class="title">Personal Information</h6>
						</div>
						<div class="ui-block-content">

							<!-- Personal Information Form  -->

							<form>
								<div class="row">

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating">
											<label class="control-label">First Name</label>
											<input class="form-control" placeholder="" type="text" value="James">
										</div>

										<div class="form-group label-floating">
											<label class="control-label">Your Email</label>
											<input class="form-control" placeholder="" type="email" value="jspiegel@yourmail.com">
										</div>

										<div class="form-group date-time-picker label-floating">
											<label class="control-label">Your Birthday</label>
											<input name="datetimepicker" value="10/24/1984" />
											<span class="input-group-addon">
																	<svg class="olymp-month-calendar-icon icon"><use xlink:href="#olymp-month-calendar-icon"></use></svg>
																</span>
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating">
											<label class="control-label">Last Name</label>
											<input class="form-control" placeholder="" type="text" value="Spiegel">
										</div>

										<div class="form-group label-floating">
											<label class="control-label">Your Website</label>
											<input class="form-control" placeholder="" type="email" value="daydreamzagency.com">
										</div>


										<div class="form-group label-floating is-empty">
											<label class="control-label">Your Phone Number</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>

									<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
										<div class="form-group label-floating is-select">
											<label class="control-label">Your Country</label>
											<select class="form-select">
												<option value="US">United States</option>
												<option value="AU">Australia</option>
											</select>
										</div>
									</div>
									<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
										<div class="form-group label-floating is-select">
											<label class="control-label">Your State / Province</label>
											<select class="form-select">
												<option value="CA">California</option>
												<option value="TE">Texas</option>
											</select>
										</div>
									</div>
									<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
										<div class="form-group label-floating is-select">
											<label class="control-label">Your City</label>
											<select class="form-select">
												<option value="SF">San Francisco</option>
												<option value="NY">New York</option>
											</select>
										</div>
									</div>
									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="Write a little description about you">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56</textarea>
										</div>

										<div class="form-group label-floating is-select">
											<label class="control-label">Your Gender</label>
											<select class="form-select">
												<option value="MA">Male</option>
												<option value="FE">Female</option>
											</select>
										</div>

										<div class="form-group label-floating is-empty">
											<label class="control-label">Religious Belifs</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>
									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Your Birthplace</label>
											<input class="form-control" placeholder="" type="text">
										</div>

										<div class="form-group label-floating">
											<label class="control-label">Your Occupation</label>
											<input class="form-control" placeholder="" type="text" value="UI/UX Designer">
										</div>

										<div class="form-group label-floating is-select">
											<label class="control-label">Status</label>
											<select class="form-select">
												<option value="MA">Married</option>
												<option value="FE">Not Married</option>
											</select>
										</div>

										<div class="form-group label-floating">
											<label class="control-label">Political Incline</label>
											<input class="form-control" placeholder="" type="text" value="Democrat">
										</div>
									</div>
									<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group with-icon label-floating">
											<label class="control-label">Your Facebook Account</label>
											<input class="form-control" type="text" value="www.facebook.com/james-spiegel95321">
											<svg class="c-facebook" width="20" height="20">
												<use xlink:href="#olymp-facebook-icon"></use>
											</svg>
										</div>
										<div class="form-group with-icon label-floating">
											<label class="control-label">Your Twitter Account</label>
											<input class="form-control" type="text" value="www.twitter.com/james_spiegelOK">
											<svg class="c-twitter" width="20" height="20">
												<use xlink:href="#olymp-twitter-icon"></use>
											</svg>
										</div>
										<div class="form-group with-icon label-floating is-empty">
											<label class="control-label">Your RSS Feed Account</label>
											<input class="form-control" type="text">
											<svg class="c-rss" width="20" height="20">
												<use xlink:href="#olymp-rss-icon"></use>
											</svg>
										</div>
										<div class="form-group with-icon label-floating">
											<label class="control-label">Your Dribbble Account</label>
											<input class="form-control" type="text" value="www.dribbble.com/thecowboydesigner">
											<svg class="c-dribbble" width="20" height="20">
												<use xlink:href="#olymp-dribble-icon"></use>
											</svg>
										</div>
										<div class="form-group with-icon label-floating is-empty">
											<label class="control-label">Your Spotify Account</label>
											<input class="form-control" type="text">
											<svg class="c-spotify" width="20" height="20">
												<use xlink:href="#olymp-spotify-icon"></use>
											</svg>
										</div>
									</div>
									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<button class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>
									</div>
									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<button class="btn btn-primary btn-lg full-width">Save all Changes</button>
									</div>

								</div>
							</form>

							<!-- ... end Personal Information Form  -->                        </div>
					</div>
				</div>
				<div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
					<div class="ui-block">
						<div class="ui-block-title">
							<h6 class="title">Account Settings</h6>
						</div>
						<div class="ui-block-content">

							<!-- Personal Account Settings Form -->

							<form>
								<div class="row">

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating is-select">
											<label class="control-label">Who Can Friend You?</label>
											<select class="form-select">
												<option value="EO">Everyone</option>
												<option value="NO">No One</option>
											</select>
										</div>
									</div>
									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating is-select">
											<label class="control-label">Who Can View Your Posts</label>
											<select class="form-select">
												<option value="US">Friends Only</option>
												<option value="EO">Everyone</option>
											</select>
										</div>
									</div>

									<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="description-toggle">
											<div class="description-toggle-content">
												<div class="h6">Notifications Sound</div>
												<p>A sound will be played each time you receive a new activity notification</p>
											</div>

											<div class="togglebutton">
												<label>
													<input type="checkbox" checked="">
												</label>
											</div>
										</div>
										<div class="description-toggle">
											<div class="description-toggle-content">
												<div class="h6">Notifications Email</div>
												<p>We’ll send you an email to your account each time you receive a new activity notification</p>
											</div>

											<div class="togglebutton">
												<label>
													<input type="checkbox" checked="">
												</label>
											</div>
										</div>
										<div class="description-toggle">
											<div class="description-toggle-content">
												<div class="h6">Friend’s Birthdays</div>
												<p>Choose wheather or not receive notifications about your friend’s birthdays on your newsfeed</p>
											</div>

											<div class="togglebutton">
												<label>
													<input type="checkbox" checked="">
												</label>
											</div>
										</div>
										<div class="description-toggle">
											<div class="description-toggle-content">
												<div class="h6">Chat Message Sound</div>
												<p>A sound will be played each time you receive a new message on an inactive chat window</p>
											</div>

											<div class="togglebutton">
												<label>
													<input type="checkbox" checked="">
												</label>
											</div>
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<button class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>
									</div>
									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<button class="btn btn-primary btn-lg full-width">Save all Changes</button>
									</div>
								</div>
							</form>

							<!-- ... end Personal Account Settings Form  -->
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
					<div class="ui-block">
						<div class="ui-block-title">
							<h6 class="title">Change Password</h6>
						</div>
						<div class="ui-block-content">


							<!-- Change Password Form -->

							<form>
								<div class="row">

									<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group label-floating">
											<label class="control-label">Confirm Current Password</label>
											<input class="form-control" placeholder="" type="password" value="Olympus-2017">
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Your New Password</label>
											<input class="form-control" placeholder="" type="password">
										</div>
									</div>
									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Confirm New Password</label>
											<input class="form-control" placeholder="" type="password">
										</div>
									</div>

									<div class="col col-lg-12 col-sm-12 col-sm-12 col-12">
										<div class="remember">

											<div class="checkbox">
												<label>
													<input name="optionsCheckboxes" type="checkbox">
													Remember Me
												</label>
											</div>

											<a href="#" class="forgot" data-bs-toggle="modal" data-bs-target="#restore-password">Forgot my Password</a>
										</div>
									</div>

									<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<button class="btn btn-primary btn-lg full-width">Change Password Now!</button>
									</div>

								</div>
							</form>

							<!-- ... end Change Password Form -->
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="hobbies" role="tabpanel" aria-labelledby="hobbies-tab">
					<div class="ui-block">
						<div class="ui-block-title">
							<h6 class="title">Hobbies and Interests</h6>
						</div>
						<div class="ui-block-content">


							<!-- Form Hobbies and Interests -->

							<form>
								<div class="row">

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="Hobbies">I like to ride the bike to work, swimming, and working out. I also like reading design magazines, go to museums, and binge watching a good tv show while it’s raining outside.</textarea>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Favourite TV Shows">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</textarea>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Favourite Movies">Idiocratic, The Scarred Wizard and the Fire Crown,  Crime Squad, Ferrum Man. </textarea>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Favourite Games">The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch Auto. </textarea>
										</div>

										<button class="btn btn-secondary btn-lg full-width">Cancel</button>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="Favourite Music Bands / Artists">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</textarea>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Favourite Books">The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water.</textarea>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Favourite Writers">Martin T. Georgeston, Jhonathan R. Token, Ivana Rowle, Alexandria Platt, Marcus Roth. </textarea>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Other Interests">Swimming, Surfing, Scuba Diving, Anime, Photography, Tattoos, Street Art.</textarea>
										</div>

										<button class="btn btn-primary btn-lg full-width">Save all Changes</button>
									</div>

								</div>
							</form>

							<!-- ... end Form Hobbies and Interests -->

						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
					<div class="ui-block">
						<div class="ui-block-title">
							<h6 class="title">Your Education History</h6>
						</div>
						<div class="ui-block-content">


							<!-- Education History Form -->

							<form>
								<div class="row">

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating">
											<label class="control-label">Title or Place</label>
											<input class="form-control" placeholder="" type="text" value="The New College of Design">
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating">
											<label class="control-label">Period of Time</label>
											<input class="form-control" placeholder="" type="text" value="2001 - 2006">
										</div>
									</div>

									<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="Description">Bachelor of Interactive Design in the New College. It was a five years intensive career. Average: A+</textarea>
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating">
											<label class="control-label">Title or Place</label>
											<input class="form-control" placeholder="" type="text" value="Rembrandt Institute">
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating">
											<label class="control-label">Period of Time</label>
											<input class="form-control" placeholder="" type="text" value="2008">
										</div>
									</div>

									<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="Description">Five months Digital Illustration course. Professor: Leonardo Stagg.</textarea>
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Title or Place</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Period of Time</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>

									<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="Description"></textarea>
										</div>

										<a href="#" class="add-field">
											<svg class="olymp-plus-icon">
												<use xlink:href="#olymp-plus-icon"></use>
											</svg>
											<span>Add Education Field</span>
										</a>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<button class="btn btn-secondary btn-lg full-width">Cancel</button>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<button class="btn btn-primary btn-lg full-width">Save all Changes</button>
									</div>
								</div>
							</form>

							<!-- ... end Education History Form -->
						</div>
					</div>
					<div class="ui-block">
						<div class="ui-block-title">
							<h6 class="title">Your Employement History</h6>
						</div>
						<div class="ui-block-content">


							<!-- Employement History Form -->

							<form>
								<div class="row">
									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating">
											<label class="control-label">Title or Place</label>
											<input class="form-control" placeholder="" type="text" value="Digital Design Intern">
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating">
											<label class="control-label">Period of Time</label>
											<input class="form-control" placeholder="" type="text" value="2006 - 2008">
										</div>
									</div>

									<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="Description">Digital Design Intern for the “Multimedz” agency. Was in charge of the communication with the clients.</textarea>
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating">
											<label class="control-label">Title or Place</label>
											<input class="form-control" placeholder="" type="text" value="UI/UX Designer">
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating">
											<label class="control-label">Period of Time</label>
											<input class="form-control" placeholder="" type="text" value="2008 - 2013">
										</div>
									</div>

									<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="Description">UI/UX Designer for the “Daydreams” agency.</textarea>
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Title or Place</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Period of Time</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>

									<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="Description"></textarea>
										</div>

										<a href="#" class="add-field">
											<svg class="olymp-plus-icon">
												<use xlink:href="#olymp-plus-icon"></use>
											</svg>
											<span>Add Education Field</span>
										</a>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<button class="btn btn-secondary btn-lg full-width">Cancel</button>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<button class="btn btn-primary btn-lg full-width">Save all Changes</button>
									</div>
								</div>
							</form>

							<!-- ... end Employement History Form -->
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
					<div class="ui-block">
						<div class="ui-block-title">
							<h6 class="title">Notifications</h6>
							<a href="#" class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</a>
						</div>


						<!-- Notification List -->

						<ul class="notification-list">
							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar1-sm.webp" alt="author" width="42" height="42">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new
									<a href="#" class="notification-link">profile status</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
								<span class="notification-icon">
														<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
													</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

							<li class="un-read">
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar2-sm.webp" alt="author" width="42" height="42">
								</div>
								<div class="notification-event">
									You and
									<a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on
									<a href="#" class="notification-link">his wall</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
								</div>
								<span class="notification-icon">
														<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
													</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

							<li class="with-comment-photo-wrap">
								<div class="with-comment-photo">
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar64-sm.webp" width="34" height="34" alt="author"></div>
									<div class="notification-event">
										<div>
											<a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your
											<a href="#" class="notification-link">photo</a>.
										</div>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
									</div>
									<span class="notification-icon">										<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>									</span>
								</div>
								<div class="comment-photo">
									<img loading="lazy" src="img/comment-photo1.webp" alt="photo" width="40" height="40">
									<span>“She looks incredible in that outfit! We should see each...”</span></div>
								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar4-sm.webp" alt="author" width="42" height="42">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Chris Greyson</a> liked your
									<a href="#" class="notification-link">profile status</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 18th at 8:22pm</time></span>
								</div>
								<span class="notification-icon">
													<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
												</span>
								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar5-sm.webp" alt="author" width="42" height="42">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in
									<a href="#" class="notification-link">Gotham Bar</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
								</div>
								<span class="notification-icon">
														<svg class="olymp-calendar-icon"><use xlink:href="#olymp-calendar-icon"></use></svg>
													</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar6-sm.webp" alt="author" width="42" height="42">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">James Summers</a> commented on your new
									<a href="#" class="notification-link">profile status</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
								</div>
								<span class="notification-icon">
														<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
													</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar7-sm.webp" alt="author" width="42" height="42">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Marina Valentine</a> commented on your new
									<a href="#" class="notification-link">profile status</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 10:07am</time></span>
								</div>
								<span class="notification-icon">
														<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
													</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>
						</ul>

						<!-- ... end Notification List -->

					</div>


					<!-- Pagination -->

					<nav aria-label="Page navigation">
						<ul class="pagination justify-content-center">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1
								<div class="ripple-container">
									<div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div>
								</div>
							</a></li>
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
				<div class="tab-pane fade" id="chat-message" role="tabpanel" aria-labelledby="chat-message-tab">
					<div class="ui-block">
						<div class="ui-block-title">
							<h6 class="title">Chat / Messages</h6>
							<a href="#" class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</a>
						</div>

						<div class="row">
							<div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">


								<!-- Notification List Chat Messages -->

								<ul class="notification-list chat-message">
									<li>
										<div class="author-thumb">
											<img loading="lazy" src="img/avatar8-sm.webp" alt="author" width="36" height="36">
										</div>
										<div class="notification-event">
											<a href="#" class="h6 notification-friend">Diana Jameson</a>
											<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
											<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
										</div>
										<span class="notification-icon">
																		<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
																	</span>

										<div class="more">
											<svg class="olymp-three-dots-icon">
												<use xlink:href="#olymp-three-dots-icon"></use>
											</svg>
										</div>
									</li>

									<li>
										<div class="author-thumb">
											<img loading="lazy" src="img/avatar9-sm.webp" alt="author" width="36" height="36">
										</div>
										<div class="notification-event">
											<a href="#" class="h6 notification-friend">Jake Parker</a>
											<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
											<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
										</div>
										<span class="notification-icon">
																		<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
																	</span>

										<div class="more">
											<svg class="olymp-three-dots-icon">
												<use xlink:href="#olymp-three-dots-icon"></use>
											</svg>
										</div>
									</li>
									<li>
										<div class="author-thumb">
											<img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">
										</div>
										<div class="notification-event">
											<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
											<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
											<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
										</div>
										<span class="notification-icon">
																	<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
																</span>
										<div class="more">
											<svg class="olymp-three-dots-icon">
												<use xlink:href="#olymp-three-dots-icon"></use>
											</svg>
										</div>
									</li>

									<li class="chat-group">
										<div class="author-thumb">
											<img loading="lazy" src="img/avatar11-sm.webp" alt="author" width="16" height="16">
											<img loading="lazy" src="img/avatar12-sm.webp" alt="author" width="16" height="16">
											<img loading="lazy" src="img/avatar13-sm.webp" alt="author" width="16" height="16">
											<img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">
										</div>
										<div class="notification-event">
											<a href="#" class="h6 notification-friend">You, Faye, Ed & Jet +3</a>
											<span class="last-message-author">Ed:</span>
											<span class="chat-message-item">Yeah! Seems fine by me!</span>
											<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
										</div>
										<span class="notification-icon">
																	<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
																</span>
										<div class="more">
											<svg class="olymp-three-dots-icon">
												<use xlink:href="#olymp-three-dots-icon"></use>
											</svg>
										</div>
									</li>
								</ul>

								<!-- ... end Notification List Chat Messages -->


								<!-- Popup Chat -->

								<div class="ui-block popup-chat">
									<div class="ui-block-title">
										<span class="icon-status online"></span>
										<h6 class="title">Mathilda Brinker</h6>
										<div class="more">
											<svg class="olymp-three-dots-icon">
												<use xlink:href="#olymp-three-dots-icon"></use>
											</svg>
											<svg class="olymp-little-delete">
												<use xlink:href="#olymp-little-delete"></use>
											</svg>
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
													<svg class="olymp-computer-icon">
														<use xlink:href="#olymp-computer-icon"></use>
													</svg>
												</a>
												<div class="options-message smile-block">

													<svg class="olymp-happy-sticker-icon">
														<use xlink:href="#olymp-happy-sticker-icon"></use>
													</svg>

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

							<div class="col col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">


								<!-- Chat Field -->

								<div class="chat-field">
									<div class="ui-block-title">
										<h6 class="title">Elaine Dreyfuss</h6>
										<a href="#" class="more">
											<svg class="olymp-three-dots-icon">
												<use xlink:href="#olymp-three-dots-icon"></use>
											</svg>
										</a>
									</div>
									<div class="mCustomScrollbar" data-mcs-theme="dark">
										<ul class="notification-list chat-message chat-message-field">
											<li>
												<div class="author-thumb">
													<img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">
												</div>
												<div class="notification-event">
													<div class="event-info-wrap">
														<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
														<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
													</div>
													<span class="chat-message-item">Hi James, How are your doing? Please remember that next week we are going to Gotham Bar to celebrate Marina’s Birthday.</span>
												</div>
											</li>

											<li>
												<div class="author-thumb">
													<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
												</div>
												<div class="notification-event">
													<div class="event-info-wrap">
														<a href="#" class="h6 notification-friend">James Spiegel</a>
														<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:30pm</time></span>
													</div>
													<span class="chat-message-item">Hi Elaine! I have a question, do you think that tomorrow we could talk to
																			the client to iron out some details before the presentation? I already finished the first screen but
																			I need to ask him something before moving on. Anyway, here’s a preview!
																		</span>
													<div class="added-photos">
														<img loading="lazy" src="img/photo-message1.webp" alt="photo" width="75" height="61">
														<img loading="lazy" src="img/photo-message2.webp" alt="photo" width="71" height="62">
														<span class="photos-name">icons.jpeg; bunny.jpeg</span>
													</div>
												</div>
											</li>

											<li>
												<div class="author-thumb">
													<img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">
												</div>
												<div class="notification-event">
													<div class="event-info-wrap">
														<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
														<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
													</div>
													<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with it. I think That looks really good!</span>
												</div>
											</li>
										</ul>
									</div>

									<form>

										<div class="form-group">
											<textarea class="form-control" placeholder="Write your reply here..."></textarea>
										</div>

										<div class="add-options-message">
											<a href="#" class="options-message">
												<svg class="olymp-computer-icon">
													<use xlink:href="#olymp-computer-icon"></use>
												</svg>
											</a>
											<a href="#" class="options-message">
												<svg class="olymp-computer-icon">
													<use xlink:href="#olymp-computer-icon"></use>
												</svg>
											</a>
											<div class="options-message smile-block">
												<svg class="olymp-happy-sticker-icon">
													<use xlink:href="#olymp-happy-sticker-icon"></use>
												</svg>

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

											<button class="btn btn-primary btn-sm">Post Reply</button>
										</div>

									</form>

								</div>

								<!-- ... end Chat Field -->

							</div>
						</div>

					</div>


					<!-- Pagination -->

					<nav aria-label="Page navigation">
						<ul class="pagination justify-content-center">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1
								<div class="ripple-container">
									<div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div>
								</div>
							</a></li>
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
				<div class="tab-pane fade" id="friend" role="tabpanel" aria-labelledby="friend-tab">
					<div class="ui-block">
						<div class="ui-block-title">
							<h6 class="title">Friend Requests</h6>
							<a href="#" class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</a>
						</div>


						<!-- Notification List Frien Requests -->

						<ul class="notification-list friend-requests">
							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar15-sm.webp" alt="author" width="42" height="42">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Tamara Romanoff</a>
									<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
								</div>
								<span class="notification-icon">
													<a href="#" class="accept-request">
														<span class="icon-add">
															<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
														</span>
														<span class="accept-request-text">Accept Friend Request</span>
													</a>
						
													<a href="#" class="accept-request request-del">
														<span class="icon-minus">
															<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
														</span>
													</a>
						
												</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar16-sm.webp" alt="author" width="42" height="42">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Tony Stevens</a>
									<span class="chat-message-item">4 Friends in Common</span>
								</div>
								<span class="notification-icon">
													<a href="#" class="accept-request">
														<span class="icon-add">
															<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
														</span>
														<span class="accept-request-text">Accept Friend Request</span>
													</a>
						
													<a href="#" class="accept-request request-del">
														<span class="icon-minus">
															<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
														</span>
													</a>
						
												</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

							<li class="accepted">
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar17-sm.webp" alt="author" width="42" height="42">
								</div>
								<div class="notification-event">
									You and
									<a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on
									<a href="#" class="notification-link">his wall</a>.
								</div>
								<span class="notification-icon">
													<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
												</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar18-sm.webp" alt="author" width="42" height="42">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Stagg Clothing</a>
									<span class="chat-message-item">9 Friends in Common</span>
								</div>
								<span class="notification-icon">
													<a href="#" class="accept-request">
														<span class="icon-add">
															<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
														</span>
														<span class="accept-request-text">Accept Friend Request</span>
													</a>
						
													<a href="#" class="accept-request request-del">
														<span class="icon-minus">
															<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
														</span>
													</a>
						
												</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

						</ul>

						<!-- ... end Notification List Frien Requests -->
					</div>
				</div>
				<div class="tab-pane fade" id="create-fav" role="tabpanel" aria-labelledby="create-fav-tab">
					<div class="ui-block">
						<div class="ui-block-title">
							<h6 class="title">Favorite Page Information</h6>
						</div>
						<div class="ui-block-content">


							<!-- Form Favorite Page Information -->

							<form>
								<div class="row">
									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating">
											<label class="control-label">First Name</label>
											<input class="form-control" placeholder="" type="text" value="Green Goo">
										</div>

										<div class="form-group label-floating">
											<label class="control-label">Your Email</label>
											<input class="form-control" placeholder="" type="email" value="greengoo_gigs@yourmail.com">
										</div>

										<div class="form-group date-time-picker label-floating">
											<label class="control-label">Since</label>
											<input name="datetimepicker" value="10/24/1984" />
											<span class="input-group-addon">
																	<svg class="olymp-calendar-icon icon"><use xlink:href="#olymp-calendar-icon"></use></svg>
																</span>
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating">
											<label class="control-label">Last Name</label>
											<input class="form-control" placeholder="" type="text" value="Rock">
										</div>

										<div class="form-group label-floating">
											<label class="control-label">Your Website</label>
											<input class="form-control" placeholder="" type="email" value="www.ggrock.com">
										</div>


										<div class="form-group label-floating">
											<label class="control-label">Your Phone Number</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>

									<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
										<div class="form-group label-floating is-select">
											<label class="control-label">Your Country</label>
											<select class="form-select">
												<option value="US">United States</option>
												<option value="AU">Australia</option>
											</select>
										</div>
									</div>
									<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
										<div class="form-group label-floating is-select">
											<label class="control-label">Your State / Province</label>
											<select class="form-select">
												<option value="CA">California</option>
												<option value="TE">Texas</option>
											</select>
										</div>
									</div>
									<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
										<div class="form-group label-floating is-select">
											<label class="control-label">Your City</label>
											<select class="form-select">
												<option value="SF">San Francisco</option>
												<option value="NY">New York</option>
											</select>
										</div>
									</div>
									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="Write a little description about the page">We are Rock Band from Los Angeles, now based in San Francisco, come and listen to us play!</textarea>
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">

										<div class="form-group label-floating is-empty">
											<label class="control-label">Based In</label>
											<input class="form-control" placeholder="" type="text">
										</div>

										<div class="form-group label-floating is-select">
											<label class="control-label">Category</label>
											<select class="form-select">
												<option value="MA">Rock Band</option>
												<option value="FE">Pop Band</option>
												<option value="FE">Jazz Band</option>
											</select>
										</div>
									</div>

									<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="Additional Info">We are open for gigs all over the country. If you are interested, please contact us via our website or send us an email to gigs@ggrock.com</textarea>
										</div>
									</div>

									<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group with-icon label-floating">
											<label class="control-label">Your Facebook Account</label>
											<input class="form-control" type="text" value="www.facebook.com/greengoo_rock">
											<svg class="c-facebook" width="20" height="20">
												<use xlink:href="#olymp-facebook-icon"></use>
											</svg>
										</div>
										<div class="form-group with-icon label-floating">
											<label class="control-label">Your Twitter Account</label>
											<input class="form-control" type="text" value="www.twitter.com/greengoo_rock">
											<svg class="c-twitter" width="20" height="20">
												<use xlink:href="#olymp-twitter-icon"></use>
											</svg>
										</div>
										<div class="form-group with-icon label-floating is-empty">
											<label class="control-label">Your RSS Feed Account</label>
											<input class="form-control" type="text">
											<svg class="c-rss" width="20" height="20">
												<use xlink:href="#olymp-rss-icon"></use>
											</svg>
										</div>
										<div class="form-group with-icon label-floating is-empty">
											<label class="control-label">Your Dribbble Account</label>
											<input class="form-control" type="text" value="">
											<svg class="c-dribbble" width="20" height="20">
												<use xlink:href="#olymp-dribble-icon"></use>
											</svg>
										</div>
										<div class="form-group with-icon label-floating">
											<label class="control-label">Your Spotify Account</label>
											<input class="form-control" type="text" value="green_goo@spotify.com">
											<svg class="c-spotify" width="20" height="20">
												<use xlink:href="#olymp-spotify-icon"></use>
											</svg>
										</div>
									</div>
									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<a href="#" class="btn btn-secondary btn-lg full-width">Restore all Attributes</a>
									</div>
									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<a href="#" class="btn btn-primary btn-lg full-width">Save all Changes</a>
									</div>
								</div>
							</form>

							<!-- ... end Form Favorite Page Information -->


						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="settings-fav" role="tabpanel" aria-labelledby="settings-fav-tab">
					<div class="ui-block">
						<div class="ui-block-title">
							<h6 class="title">Favourite Page Settings</h6>
						</div>
						<div class="ui-block-content">


							<!-- Form Favorite Page Settings -->

							<form>
								<div class="row">

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating is-select">
											<label class="control-label">Who Can Friend You?</label>
											<select class="form-select">
												<option value="EO">Everyone</option>
												<option value="NO">No One</option>
											</select>
										</div>
									</div>
									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating is-select">
											<label class="control-label">Who Can View Your Posts</label>
											<select class="form-select">
												<option value="US">Friends Only</option>
												<option value="EO">Everyone</option>
											</select>
										</div>
									</div>

									<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="description-toggle">
											<div class="description-toggle-content">
												<div class="h6">Notifications Sound</div>
												<p>A sound will be played each time you receive a new activity notification</p>
											</div>

											<div class="togglebutton">
												<label>
													<input type="checkbox" checked="">
												</label>
											</div>
										</div>
										<div class="description-toggle">
											<div class="description-toggle-content">
												<div class="h6">Notifications Email</div>
												<p>We’ll send you an email to your account each time you receive a new activity notification</p>
											</div>

											<div class="togglebutton">
												<label>
													<input type="checkbox" checked="">
												</label>
											</div>
										</div>
										<div class="description-toggle">
											<div class="description-toggle-content">
												<div class="h6">Friend’s Birthdays</div>
												<p>Choose wheather or not receive notifications about your friend’s birthdays on your newsfeed</p>
											</div>

											<div class="togglebutton">
												<label>
													<input type="checkbox" checked="">
												</label>
											</div>
										</div>
										<div class="description-toggle">
											<div class="description-toggle-content">
												<div class="h6">Chat Message Sound</div>
												<p>A sound will be played each time you receive a new message on an inactive chat window</p>
											</div>

											<div class="togglebutton">
												<label>
													<input type="checkbox" checked="">
												</label>
											</div>
										</div>
									</div>

									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<a href="#" class="btn btn-secondary btn-lg full-width">Restore all Attributes</a>
									</div>
									<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
										<a href="#" class="btn btn-primary btn-lg full-width">Save all Changes</a>
									</div>
								</div>
							</form>

							<!-- ... end Form Favorite Page Settings -->
						</div>
					</div>
				</div>
			</div>

		</div>

		<div id="desktop-container-panel" class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12 responsive-display-none">
			<div class="ui-block">

				<!-- Your Profile  -->

				<div id="profile-panel" class="your-profile">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Your PROFILE</h6>
					</div>

					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h6 class="accordion-header" id="headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Profile Settings
									<svg class="olymp-dropdown-arrow-icon">
										<use xlink:href="#olymp-dropdown-arrow-icon"></use>
									</svg>
								</button>
							</h6>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<ul class="your-profile-menu">
										<li>
											<a href="28-YourAccount-PersonalInformation.php">Personal Information</a>
										</li>
										<li>
											<a href="29-YourAccount-AccountSettings.php">Account Settings</a>
										</li>
										<li>
											<a href="30-YourAccount-ChangePassword.php">Change Password</a>
										</li>
										<li>
											<a href="31-YourAccount-HobbiesAndInterests.php">Hobbies and Interests</a>
										</li>
										<li>
											<a href="32-YourAccount-EducationAndEmployement.php">Education and Employement</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<ul class="nav nav-tabs your-profile-menu main" id="myTab1" role="tablist">
						<li class="nav-item">
							<a class="nav-link" id="notifications-tab" data-bs-toggle="tab" href="#notifications" role="tab" aria-controls="notifications" aria-selected="false">
								<div class="ui-block-title">
									<div class="h6 title">Notifications</div>
									<div class="items-round-little bg-primary">8</div>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="chat-message-tab" data-bs-toggle="tab" href="#chat-message" role="tab" aria-controls="chat-message" aria-selected="false">
								<div class="ui-block-title">
									<div class="h6 title">Chat / Messages</div>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="friend-tab" data-bs-toggle="tab" href="#friend" role="tab" aria-controls="friend" aria-selected="false">
								<div class="ui-block-title">
									<div class="h6 title">Friend Requests</div>
									<div class="items-round-little bg-blue">4</div>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">FAVOURITE PAGE</h6>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="create-fav-tab" data-bs-toggle="tab" href="#create-fav" role="tab" aria-controls="create-fav" aria-selected="false">
								<div class="ui-block-title">
									<div class="h6 title">Create Fav Page</div>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="settings-fav-tab" data-bs-toggle="tab" href="#settings-fav" role="tab" aria-controls="settings-fav" aria-selected="false">
								<div class="ui-block-title">
									<div class="h6 title">Fav Page Settings</div>
								</div>
							</a>
						</li>
					</ul>
				</div>

				<!-- ... end Your Profile  -->


			</div>
		</div>
	</div>
</div>

<!-- ... end Your Account Personal Information -->


<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="popup-chat-responsive" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title">Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon">
					<use xlink:href="#olymp-three-dots-icon"></use>
				</svg>
				<svg class="olymp-little-delete js-chat-open">
					<use xlink:href="#olymp-little-delete"></use>
				</svg>
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
							<svg class="olymp-computer-icon">
								<use xlink:href="#olymp-computer-icon"></use>
							</svg>
						</a>
						<div class="options-message smile-block">

							<svg class="olymp-happy-sticker-icon">
								<use xlink:href="#olymp-happy-sticker-icon"></use>
							</svg>

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


<a class="back-to-top" href="#">
	<svg class="back-icon" width="14" height="18">
		<use xlink:href="#olymp-back-to-top"></use>
	</svg>
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
