<!DOCTYPE html>
<html lang="en">
<head>

	<title>Olympus Shortcodes</title>

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
		<h6>SHORTCODES</h6>
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
										<img loading="lazy" src="img/avatar64-sm.webp" width="34" height="34" alt="author">
									</div>
									<div class="notification-event">
										<div>
											<a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your
											<a href="#" class="notification-link">photo</a>.
										</div>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
									</span>
								</div>
								<div class="comment-photo">
									<img loading="lazy" src="img/comment-photo1.webp" alt="photo" width="40" height="40">
									<span>“She looks incredible in that outfit! We should see each...”</span>
								</div>

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
<div class="header-spacer"></div>

<!-- Main Content -->

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Color Palette</h6>
				</div>
				<div class="ui-block-content">
					<div class="bg-secondary" style="color: #fff; padding: 35px; display: inline-block; font-size: 10px; font-weight: bold; margin-right: -4px;">3f4257</div>
					<div class="bg-grey" style="color: #fff; padding: 35px; display: inline-block; font-size: 10px; font-weight: bold; margin-right: -4px;">515365</div>
					<div class="bg-grey-light" style="color: #fff; padding: 35px; display: inline-block; font-size: 10px; font-weight: bold; margin-right: -4px;">888da8</div>
					<div class="bg-grey-lighter" style="color: #fff; padding: 35px; display: inline-block; font-size: 10px; font-weight: bold; margin-right: -4px;">9a9fbf</div>
					<div class="bg-primary" style="color: #fff; padding: 35px; display: inline-block; font-size: 10px; font-weight: bold; margin-right: -4px;">ff5e3a</div>
					<div class="bg-purple" style="color: #fff; padding: 35px; display: inline-block; font-size: 10px; font-weight: bold; margin-right: -4px;">7c5ac2</div>
					<div class="bg-blue" style="color: #fff; padding: 35px; display: inline-block; font-size: 10px; font-weight: bold; margin-right: -4px;">38a9ff</div>
					<div class="bg-breez" style="color: #fff; padding: 35px; display: inline-block; font-size: 10px; font-weight: bold; margin-right: -4px;">08ddc1</div>
					<div class="bg-breez-light" style="color: #fff; padding: 35px; display: inline-block; font-size: 10px; font-weight: bold; margin-right: -4px;">2aebcb</div>
					<div class="bg-yellow" style="color: #fff; padding: 35px; display: inline-block; font-size: 10px; font-weight: bold; margin-right: -4px;">ffdc1b</div>
					<div class="bg-smoke" style="color: #fff; padding: 35px; display: inline-block; font-size: 10px; font-weight: bold; margin-right: -4px;">e6ecf5</div>
				</div>

				<div class="ui-block-content">
					<h1>Hello, world! - 40px</h1>
					<h2>Hello, world! - 32px</h2>
					<h3>Hello, world! - 28px</h3>
					<h4>Hello, world! - 22px</h4>
					<h5>Hello, world! - 16px</h5>
					<h6>Hello, world! - 14px</h6>
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Button Versions</h6>
				</div>
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

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Form Elements</h6>
				</div>
				<div class="ui-block-content">
					<div class="row">
						<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
							<div class="form-group label-floating is-empty">
								<label class="control-label">Default Input</label>
								<input class="form-control" type="text" placeholder="">
							</div>
							<div class="form-group label-floating has-success">
								<label class="control-label">Success Input</label>
								<input type="text" class="form-control form-control-success">
							</div>
							<div class="form-group label-floating has-error">
								<label class="control-label">Error Input</label>
								<input type="text" class="form-control form-control-danger">
							</div>
							<fieldset disabled>
								<div class="form-group has-disabled">
									<input type="text" class="form-control" placeholder="Disabled input">
								</div>
							</fieldset>

							<label class="control-label">Dropdown Field</label>
							<fieldset class="form-group">
								<select class="form-select form-control">
									<option value="AL">Alabama</option>
									<option value="2">Oklahoma</option>
									<option value="WY">Wyoming</option>
								</select>
							</fieldset>

							<h6>Completed Input V2</h6>
							<div class="form-group">
								<input class="form-control" type="text" placeholder="James Spiegel">
							</div>

							<div class="form-group with-icon label-floating is-empty">
								<label class="control-label">Input with Icon</label>
								<input class="form-control" type="text">
								<svg class="c-facebook" width="20" height="20">
									<use xlink:href="#olymp-facebook-icon"></use>
								</svg>
							</div>

							<label class="control-label">Calendar Field</label>
							<div class="form-group date-time-picker">
								<input type="text" name="datetimepicker" value="10/24/1984" />
								<span class="input-group-addon">
									<svg class="olymp-month-calendar-icon icon"><use xlink:href="#olymp-month-calendar-icon"></use></svg>
								</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col col-lg-6 col-md-6 col-sm-12 col-12 mb30">
							<h6>Switch On</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							<div class="togglebutton">
								<label>
									<input type="checkbox" checked="">
								</label>
							</div>
						</div>

						<div class="col col-lg-6 col-md-6 col-sm-12 col-12 mb30">
							<h6>Switch Off</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							<div class="togglebutton">
								<label>
									<input type="checkbox">
								</label>
							</div>
						</div>
						<div class="col col-lg-6 col-md-6 col-sm-12 col-12 mb30">
							<h6>Checkboxes</h6>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="optionsCheckboxes">
									Unchecked
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="optionsCheckboxes" checked>
									Checked
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="optionsCheckboxes" disabled>
									Disabled Unchecked
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="optionsCheckboxes" disabled checked>
									Disabled Checked
								</label>
							</div>
						</div>
						<div class="col col-lg-6 col-md-6 col-sm-12 col-12 mb30">
							<h6>Radio Buttons</h6>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios">
									Radio is off
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" checked>
									Radio is on
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadiosDisabled" disabled>
									Disabled Radio is off
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadiosDisabled" checked disabled>
									Disabled Radio is on
								</label>
							</div>
						</div>

						<div class="col col-lg-6 col-md-12 col-sm-12 col-12 mb-30">
							<h6>Tooltips</h6>
							<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
								Tooltip on top
							</button>
							<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
								Tooltip on right
							</button>
							<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
								Tooltip on left
							</button>
							<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
								Tooltip on bottom
							</button>
						</div>

						<div class="col col-lg-6 col-md-12 col-sm-12 col-xs-12 mb30">
							<h6>Popovers</h6>
							<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="" title="">
								Popover on top
							</button>
							<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="" title="">
								Popover on right
							</button>
							<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="" title="">
								Popover on bottom
							</button>
							<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="" title="">
								Popover on left
							</button>
						</div>

					</div>

					<!----------------------------------------- Range sliders ----------------------------------------->

					<div class="row medium-padding80">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb30">
							<div class="range-slider range-slider--primary">
								<input type="text" class="range-slider-js" name="example_name" value="" />
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb30">
							<div class="range-slider range-slider--red">
								<input type="text" class="range-slider-js" name="example_name" value="" />
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb30">
							<div class="range-slider range-slider--green">
								<input type="text" class="range-slider-js" name="example_name" value="" />
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb30">
							<div class="range-slider range-slider--blue">
								<input type="text" class="range-slider-js" name="example_name" value="" />
							</div>
						</div>
					</div>

					<!-- JS library for IonRange Slider -->
					<script defer src="js/libs/ion.rangeSlider.min.js"></script>
					<!-- ...end JS library for IonRange Slider -->

					<!-- JS-init for Map -->
					<script defer>
						/* -----------------------
						 * Init Ion.RangeSlider
						 * Script file: ion.rangeSlider.min.js
						 * GitHub page:     https://github.com/IonDen/ion.rangeSlider
						 * --------------------- */

						rangeSlider = function () {
							$(".range-slider-js").ionRangeSlider({
									type: "double",
									grid: true,
									min: 0,
									max: 1000,
									from: 200,
									to: 800,
									prefix: "$"
								}
							);
						};

						document.addEventListener("DOMContentLoaded", function () {
							rangeSlider();
						});

					</script>
					<!-- ... end JS-init for Map -->

					<!------------------------------------ ... end Range sliders -------------------------------------->

					<div class="row mb30">
						<div class="col col-lg-12 col-12">
							<h6>Upload Buttons</h6>
						</div>
						<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="file-upload">
								<label for="upload" class="file-upload__label">Upload Button</label>
								<input id="upload" class="file-upload__input" type="file" name="file-upload">
							</div>
						</div>
						<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="file-upload">
								<label for="upload" class="file-upload__label bg-blue">Upload Button</label>
								<input id="upload3" class="file-upload__input" type="file" name="file-upload">
							</div>
						</div>
						<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="file-upload">
								<label for="upload" class="file-upload__label bg-breez">Upload Button</label>
								<input id="upload1" class="file-upload__input" type="file" name="file-upload">
							</div>
						</div>
						<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="file-upload">
								<label for="upload" class="file-upload__label bg-green">Upload Button</label>
								<input id="upload2" class="file-upload__input" type="file" name="file-upload">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col col-lg-12 col-12">
							<h6>Quantity Input Field</h6>
						</div>

						<div class="col col-lg-3 col-md-6 col-sm-12 col-12 mb30">
							<div class="input-group number-spinner">
								<span class="input-group-btn data-dwn input-group-prepend">
									<button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
								</span>
								<input type="text" class="form-control text-center" value="1" min="0" max="100">
								<span class="input-group-btn data-up input-group-append">
									<button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
								</span>
							</div>
						</div>

						<div class="col col-lg-3 col-md-6 col-sm-12 col-12 mb30">
							<div class="input-group number-spinner number-spinner--secondary">
								<span class="input-group-btn data-dwn input-group-prepend">
									<button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
								</span>
								<input type="text" class="form-control text-center" value="-10" min="-50" max="50">
								<span class="input-group-btn data-up input-group-append">
									<button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
								</span>
							</div>
						</div>

						<div class="col col-lg-3 col-md-6 col-sm-12 col-12 mb30">
							<div class="input-group number-spinner number-spinner--breez">
								<span class="input-group-btn data-dwn input-group-prepend">
									<button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
								</span>
								<input type="text" class="form-control text-center" value="10" min="-40" max="40">
								<span class="input-group-btn data-up input-group-append">
									<button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
								</span>
							</div>
						</div>

						<div class="col col-lg-3 col-md-6 col-sm-12 col-12 mb30">
							<div class="input-group number-spinner number-spinner--green">
								<span class="input-group-btn data-dwn input-group-prepend">
									<button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
								</span>
								<input type="text" class="form-control text-center" value="5" min="0" max="10">
								<span class="input-group-btn data-up input-group-append">
									<button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Forms Validated</h6>
				</div>
				<div class="ui-block-content">
					<form class="needs-validation" novalidate>
						<div class="crumina-module crumina-heading with-title-decoration">
							<h5 class="heading-title">Form</h5>
						</div>

						<div class="row">
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">First Name</label>
									<input class="form-control" type="text" placeholder="" value="" required>
									<span class="invalid-feedback">
										<span class="error-box">
											First Name is required
										</span>
									</span>
								</div>
							</div>
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Last Name</label>
									<input class="form-control" type="text" placeholder="" value="Spiegel" required>
									<span class="invalid-feedback">
										<span class="error-box">
											Last Name is required
										</span>
									</span>
								</div>
							</div>
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Email</label>
									<input class="form-control" type="email" placeholder="" value="jspiegel@yourmail.com" required>
									<span class="invalid-feedback">
										<span class="error-box">
											Email is required
										</span>
									</span>
								</div>
							</div>
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="form-group">
									<input class="form-control" type="tel" placeholder="Phone Number" required>
									<span class="invalid-feedback">
										<span class="error-box">
											Phone Number is required
										</span>
									</span>
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Select your Country</label>
									<select class="form-select form-control">
										<option value="US">United States</option>
										<option value="AR">Argentina</option>
									</select>
								</div>
							</div>
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Select Your State</label>
									<select class="form-select form-control">
										<option value="CA">California</option>
										<option value="AR">Arizona</option>
									</select>
								</div>
							</div>
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="form-group">
									<input class="form-control" placeholder="Zip Code" type="text" required>
									<span class="invalid-feedback">
										<span class="error-box">
											Zip Code is required
										</span>
									</span>
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Your Address</label>
									<input class="form-control" type="text" placeholder="" required>
									<span class="invalid-feedback">
										<span class="error-box">
											Your Address is required
										</span>
									</span>
								</div>

								<div class="form-group label-floating">
									<label class="control-label">Apartment Number / Suite</label>
									<input class="form-control" type="text" placeholder="" required>
									<span class="invalid-feedback">
										<span class="error-box">
											Apartment Number / Suite is required
										</span>
									</span>
								</div>

								<div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes" required>
										Ship to a different address
										<span class="invalid-feedback">
											<span class="error-box">
												Different address is required
											</span>
										</span>
									</label>
								</div>

								<button class="btn btn-md btn-primary" type="submit">Submit form</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ...end Main Content -->


<a class="back-to-top" href="#">
	<svg class="back-icon" width="14" height="18">
		<use xlink:href="#olymp-back-to-top"></use>
	</svg>
</a>


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