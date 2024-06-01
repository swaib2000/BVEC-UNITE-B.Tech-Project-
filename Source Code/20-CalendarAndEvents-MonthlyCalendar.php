<!DOCTYPE html>
<html lang="en">
<head>

	<title>Calendar and Events - Create Event POPUP (Private/Public)</title>

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
		<h6>calendar &amp; events</h6>
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

<!-- Main Header Events -->

<div class="main-header">
	<div class="content-bg-wrap bg-events"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Create and Manage Events</h1>
					<p>Welcome to your personal planner assistant. Here you’ll see all your next events and invites that your
						friends sent you. You can create 3 different types of events: Personal (for your daily errands), Private
						(for you and friends only) and Public (open to everyone). Create your events, invite friends and have fun!</p>
				</div>
			</div>
		</div>
	</div>

	<img loading="lazy" class="img-bottom" src="img/event-bottom.webp" alt="friends" width="1169" height="146">
</div>

<!-- ... end Main Header Events -->


<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<ul class="nav nav-tabs calendar-events-tabs" id="calendar-events-tabs" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="events-tab" data-bs-toggle="tab" href="#events" role="tab" aria-controls="home" aria-selected="true">
								Calendar and Events
							</a>
						</li>

						<li class="nav-item" role="presentation">
							<a class="nav-link" id="notifications-tab" data-bs-toggle="tab" href="#notifications" role="tab" aria-controls="home" aria-selected="false">
								Event Invites <span class="items-round-little bg-breez">2</span>
							</a>
						</li>

					</ul>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Tab panes -->
<div class="tab-content" id="calendar-events-tabs-content">
	<div class="tab-pane fade show active" id="events" role="tabpanel" aria-labelledby="events-tab">
		<div class="container">
			<div class="row">
				<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="ui-block">


						<!-- Today Events -->

						<div class="today-events calendar">
							<div class="today-events-thumb">
								<div class="date">
									<div class="day-number">26</div>
									<div class="day-week">Saturday</div>
									<div class="month-year">March, 2016</div>
								</div>
							</div>

							<div class="list">
								<div class="control-block-button">
									<a href="#" class="btn btn-control bg-breez" data-bs-toggle="modal" data-bs-target="#create-event">
										<svg class="olymp-plus-icon">
											<use xlink:href="#olymp-plus-icon"></use>
										</svg>
									</a>
								</div>

								<div class="accordion day-event" id="accordionExample" data-month="12" data-day="2">
									<div class="accordion-item">
										<div class="accordion-header" id="headingOne">
											<div class="event-time">
												<time datetime="2004-07-24T18:18">9:00am</time>
												<div class="more">
													<svg class="olymp-three-dots-icon">
														<use xlink:href="#olymp-three-dots-icon"></use>
													</svg>
													<ul class="more-dropdown">
														<li>
															<a href="#">Mark as Completed</a>
														</li>
														<li>
															<a href="#">Delete Event</a>
														</li>
													</ul>
												</div>
											</div>
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												Breakfast at the Agency
												<svg width="8" height="8">
													<use xlink:href="#olymp-dropdown-arrow-icon"></use>
												</svg>
												<span class="event-status-icon" data-bs-toggle="modal" data-bs-target="#public-event">
																				<svg class="olymp-calendar-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="UNCOMPLETED"><use xlink:href="#olymp-calendar-icon"></use></svg>
																			</span>
											</button>
										</div>
										<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
											<div class="accordion-body">
												Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
												<div class="place inline-items">
													<svg class="olymp-add-a-place-icon">
														<use xlink:href="#olymp-add-a-place-icon"></use>
													</svg>
													<span>Daydreamz Agency</span>
												</div>

												<ul class="friends-harmonic inline-items">
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
													<li class="with-text">
														Will Assist
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header" id="headingTwo">
											<div class="event-time">
												<time datetime="2004-07-24T18:18">12:00pm</time>
												<div class="more">
													<svg class="olymp-three-dots-icon">
														<use xlink:href="#olymp-three-dots-icon"></use>
													</svg>
													<ul class="more-dropdown">
														<li>
															<a href="#">Mark as Completed</a>
														</li>
														<li>
															<a href="#">Delete Event</a>
														</li>
													</ul>
												</div>
											</div>
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Send the new “Olympus” project files to the Agency
												<svg width="8" height="8">
													<use xlink:href="#olymp-dropdown-arrow-icon"></use>
												</svg>
												<span class="event-status-icon completed" data-toggle="tooltip" data-placement="top" data-original-title="COMPLETED">
																				<svg class="olymp-checked-calendar-icon"><use xlink:href="#olymp-checked-calendar-icon"></use></svg>
																			</span>
											</button>
										</div>
										<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
											<div class="accordion-body">
												Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header" id="headingThree">
											<div class="event-time">
												<time datetime="2004-07-24T18:18">6:30pm</time>
												<div class="more">
													<svg class="olymp-three-dots-icon">
														<use xlink:href="#olymp-three-dots-icon"></use>
													</svg>
													<ul class="more-dropdown">
														<li>
															<a href="#">Mark as Completed</a>
														</li>
														<li>
															<a href="#">Delete Event</a>
														</li>
													</ul>
												</div>
											</div>
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Take Querty to the Veterinarian
												<svg width="8" height="8">
													<use xlink:href="#olymp-dropdown-arrow-icon"></use>
												</svg>
												<span class="event-status-icon" data-bs-toggle="modal" data-bs-target="#public-event">
																				<svg class="olymp-calendar-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="UNCOMPLETED"><use xlink:href="#olymp-calendar-icon"></use></svg>
																			</span>
											</button>
										</div>
										<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
											<div class="accordion-body">
												<div class="place inline-items">
													<svg class="olymp-add-a-place-icon">
														<use xlink:href="#olymp-add-a-place-icon"></use>
													</svg>
													<span>Daydreamz Agency</span>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

						<!-- ... end Today Events -->
					</div>
				</div>
				<div class="col col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
					<div class="ui-block">


						<!------------------------------------- Full Calendar ----------------------------------------->

						<div id="calendar" class="crumina-full-calendar">


						</div>

						<!-- JS library for Full Calendar -->
						<script src="js/libs/fullcalendar.min.js"></script>
						<!-- ...end JS library for Full Calendar -->

						<!-- JS-init for Full Calendar -->
						<script>

							/* -----------------------------
								 * FullCalendar Init
								 * Script file: fullcalendar.min.js
								 * https://fullcalendar.io/
							* ---------------------------*/

							fullCalendar = function () {
								var calendarEl = document.getElementById('calendar');

								var calendar = new FullCalendar.Calendar(calendarEl, {
									plugins: ['interaction', 'dayGrid', 'timeGrid'],
									defaultView: 'dayGridMonth',
									defaultDate: '2019-05-07',
									header: {
										left: 'prev',
										center: 'title',
										right: 'next,dayGridMonth,timeGridWeek,timeGridDay'
									},
									buttonText: {
										month: ' ',
										week: ' ',
										day: ' '
									},
									buttonIcons: {
										prev: 'far fa-chevron-left',
										next: 'far fa-chevron-right'
									},

									eventClick: function (info) {
										var url = info.event.url;
										var is_modal = url.match(/^modal\:(#[-\w]+)$/);
										if (!is_modal) {
											return;
										}

										info.jsEvent.preventDefault();
										var modal = is_modal[1];

										$(modal).modal('show');
									},
									events: [
										{
											title: 'Chris Greyson’s Bday',
											start: '2019-05-08',
											url: 'modal:#public-event'
										},
										{
											title: 'Make Dinner Plans...',
											start: '2019-05-08',
											url: 'modal:#private-event'
										},
										{
											title: 'Jenny’s Birthday...',
											start: '2019-05-30',
											url: 'modal:#private-event'
										},
										{
											title: 'Videocall to talk...',
											start: '2019-05-30',
											url: 'modal:#public-event'
										},
										{
											title: 'Breakfast at the...',
											start: '2019-05-26',
											url: 'modal:#public-event'
										},
										{
											title: 'Send the new...',
											start: '2019-05-26',
											url: 'modal:#private-event'
										},
										{
											title: 'Take Querty to the...',
											start: '2019-05-26',
											url: 'modal:#public-event'
										}
									]
								});

								calendar.render();
							};

							document.addEventListener("DOMContentLoaded", function () {
								fullCalendar();
							});

						</script>
						<!-- ... end JS-init for Full Calendar -->

						<!------------------------------------- ... end Full Calendar ----------------------------------------->


						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">WEDNESDAY, MARCH 30</h6>
						</div>

						<div class="today-events calendar">
							<div class="list">

								<div class="control-block-button">

									<a href="#" class="btn btn-control bg-breez" data-bs-toggle="modal" data-bs-target="#create-event">
										<svg class="olymp-plus-icon">
											<use xlink:href="#olymp-plus-icon"></use>
										</svg>
									</a>

								</div>

								<div class="accordion day-event" id="accordionExample2">
									<div class="accordion-item">
										<div class="accordion-header" id="headingOne2">
											<div class="event-time">
												<time class="published" datetime="2017-03-24T18:18">10:50am</time>
												<div class="more">
													<svg class="olymp-three-dots-icon">
														<use xlink:href="#olymp-three-dots-icon"></use>
													</svg>
													<ul class="more-dropdown">
														<li>
															<a href="#">Mark as Completed</a>
														</li>
														<li>
															<a href="#">Delete Event</a>
														</li>
													</ul>
												</div>
											</div>
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
												Videocall to talk with the agency’s new client
												<svg width="8" height="8">
													<use xlink:href="#olymp-dropdown-arrow-icon"></use>
												</svg>
												<span class="event-status-icon" data-bs-toggle="modal" data-bs-target="#public-event">
													<svg class="olymp-calendar-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="UNCOMPLETED"><use xlink:href="#olymp-calendar-icon"></use></svg>
												</span>
											</button>
										</div>
										<div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
											<div class="accordion-body">
												I have to remeber to be a little earlier at the agency to discuss with the guys all the questions we have for our new client and to show them the new logo.
												<div class="place inline-items">
													<svg class="olymp-add-a-place-icon">
														<use xlink:href="#olymp-add-a-place-icon"></use>
													</svg>
													<span>Daydreamz Agency</span>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header" id="headingTwo2">
											<div class="event-time">
												<time class="published" datetime="2017-03-24T18:18">10:50am</time>
												<div class="more">
													<svg class="olymp-three-dots-icon">
														<use xlink:href="#olymp-three-dots-icon"></use>
													</svg>
													<ul class="more-dropdown">
														<li>
															<a href="#">Mark as Completed</a>
														</li>
														<li>
															<a href="#">Delete Event</a>
														</li>
													</ul>
												</div>
											</div>
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
												Jenny’s Birthday Party
												<svg width="8" height="8">
													<use xlink:href="#olymp-dropdown-arrow-icon"></use>
												</svg>
												<span class="event-status-icon" data-bs-toggle="modal" data-bs-target="#private-event">
													<svg class="olymp-calendar-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="UNCOMPLETED"><use xlink:href="#olymp-calendar-icon"></use></svg>
												</span>
											</button>
										</div>
										<div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">
											<div class="accordion-body">
												Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
												<div class="place inline-items">
													<svg class="olymp-add-a-place-icon">
														<use xlink:href="#olymp-add-a-place-icon"></use>
													</svg>
													<span>Daydreamz Agency</span>
												</div>

												<ul class="friends-harmonic inline-items">
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
													<li class="with-text">
														Will Assist
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
		<div class="container">
			<div class="row">
				<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="ui-block">


						<table class="event-item-table event-item-table-fixed-width">

							<thead>

							<tr>

								<th class="author">
									NOTIFICATION
								</th>

								<th class="location">
									PLACE
								</th>

								<th class="upcoming">
									DATE
								</th>

								<th class="description">
									DESCRIPTION
								</th>

								<th class="users">
									ASSISTANTS
								</th>

								<th class="add-event">

								</th>
							</tr>

							</thead>

							<tbody>
							<tr class="event-item">
								<td class="author">
									<div class="event-author inline-items">
										<div class="author-thumb">
											<img loading="lazy" src="img/avatar62-sm.webp" width="34" height="34" alt="author">
										</div>
										<div class="author-date">
											<a href="#" class="author-name h6">Mathilda Brinker</a> invited you
											<br> to an event <a href="#">Reunion Dinner.</a>
										</div>
									</div>
								</td>
								<td class="location">
									<div class="place inline-items">
										<svg class="olymp-add-a-place-icon">
											<use xlink:href="#olymp-add-a-place-icon"></use>
										</svg>
										<span>Panucci Restaurant</span>
									</div>
								</td>
								<td class="upcoming">
									<div class="date-event inline-items align-left">
										<svg class="olymp-small-calendar-icon">
											<use xlink:href="#olymp-small-calendar-icon"></use>
										</svg>

										<span class="month">Aug 14, 2016 at 7:00pm</span>

									</div>
								</td>
								<td class="description">
									<p class="description">Hey! I thought we could all get together and grab something to eat to remember old times!</p>
								</td>
								<td class="users">
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
										<li>
											<a href="#" class="all-users bg-breez">+24</a>
										</li>
									</ul>
								</td>
								<td class="add-event">
									<a href="20-CalendarAndEvents-MonthlyCalendar.php" class="btn btn-breez btn-sm">Add to Calendar</a>
									<a href="#" class="btn btn-sm btn-border-think custom-color c-grey">Decline / Delete</a>
								</td>
							</tr>
							<tr class="event-item">
								<td class="author">
									<div class="event-author inline-items">
										<div class="author-thumb">
											<img loading="lazy" src="img/avatar78-sm.webp" alt="author" width="34" height="34">
										</div>
										<div class="author-date">
											<a href="#" class="author-name h6">Walter Havock </a>invited you to
											<br> an event <a href="#"> Daydreamz New <br> Year’s Party.</a>
										</div>
									</div>
								</td>
								<td class="location">
									<div class="place inline-items">
										<svg class="olymp-add-a-place-icon">
											<use xlink:href="#olymp-add-a-place-icon"></use>
										</svg>
										<span>Daydreamz Agency</span>
									</div>
								</td>
								<td class="upcoming">
									<div class="date-event inline-items align-left">
										<svg class="olymp-small-calendar-icon">
											<use xlink:href="#olymp-small-calendar-icon"></use>
										</svg>

										<span class="month">Dec 29, 2016 at 7:00pm</span>

									</div>
								</td>
								<td class="description">
									<p class="description">Let’s celebrate the new year together! We are organizing a big party for all the agency...</p>
								</td>
								<td class="users">
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

									</ul>
								</td>
								<td class="add-event">
									<a href="20-CalendarAndEvents-MonthlyCalendar.php" class="btn btn-breez btn-sm">Add to Calendar</a>
									<a href="#" class="btn btn-sm btn-border-think custom-color c-grey">Decline / Delete</a>
								</td>
							</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Window-popup Event Public -->

<div class="modal fade" id="public-event" tabindex="-1" role="dialog" aria-labelledby="public-event" aria-hidden="true">
	<div class="modal-dialog window-popup event-private-public public-event" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon">
					<use xlink:href="#olymp-close-icon"></use>
				</svg>
			</a>
			<div class="modal-body">
				<article class="hentry post has-post-thumbnail thumb-full-width private-event">

					<div class="private-event-head inline-items">
						<img loading="lazy" src="img/avatar77-sm.webp" alt="author" width="40" height="40">

						<div class="author-date">
							<a class="h3 event-title" href="#">Green Goo in Gotham</a>
							<div class="event__date">
								<time class="published" datetime="2017-03-24T18:18">
									Saturday at 9:00am
								</time>
							</div>
						</div>

						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Event Settings</a>
								</li>
								<li>
									<a href="#">Mark as Completed</a>
								</li>
								<li>
									<a href="#">Delete Event</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="post-thumb">
						<img loading="lazy" src="img/event-public.webp" alt="photo" width="769" height="380">
					</div>

					<div class="row">
						<div class="col col-lg-7 col-md-7 col-sm-12 col-12">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="img/avatar5-sm.webp" alt="author" width="42" height="42">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Green Goo Rock</a> created the
									<a href="#">Event</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											March 11 at 9:52pm
										</time>
									</div>
								</div>

							</div>

							<p>
								We’ll be playing in the Gotham Bar in May. Come and have a great time with us! Entry: $12
							</p>
						</div>
						<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
							<div class="event-description">
								<h6 class="event-description-title">Public Event</h6>
								<div class="place inline-items">
									<svg class="olymp-add-a-place-icon">
										<use xlink:href="#olymp-add-a-place-icon"></use>
									</svg>
									<span>Gotham Bar</span>
								</div>

								<div class="place inline-items">
									<svg class="olymp-add-a-place-icon">
										<use xlink:href="#olymp-add-a-place-icon"></use>
									</svg>
									<span>Mar 26, 2016 at 9:00am UTC-8</span>
								</div>

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
									<li>
										<a href="#" class="all-users bg-breez">+24</a>
									</li>

									<li class="with-text">
										Will Assist
									</li>
								</ul>

								<a href="#" class="btn btn-blue btn-sm full-width">Invite Friends</a>

								<a href="#" class="btn btn-breez btn-sm full-width">Add to Calendar / Assist</a>
							</div>
						</div>
					</div>


					<div class="post-additional-info inline-items">

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon">
								<use xlink:href="#olymp-heart-icon"></use>
							</svg>
							<span>8</span>
						</a>

						<ul class="friends-harmonic">
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic1.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic9.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic7.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic4.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic8.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>

						<div class="names-people-likes">
							<a href="#">Diana </a>, <a href="#">Nicholas</a> and
							<br>15 more liked this
						</div>


						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon">
									<use xlink:href="#olymp-speech-balloon-icon"></use>
								</svg>
								<span>16 Comments</span>
							</a>
						</div>


					</div>

					<div class="control-block-button post-control-button">

						<a href="#" class="btn btn-control">
							<svg class="olymp-like-post-icon">
								<use xlink:href="#olymp-like-post-icon"></use>
							</svg>
						</a>

						<a href="#" class="btn btn-control">
							<svg class="olymp-comments-post-icon">
								<use xlink:href="#olymp-comments-post-icon"></use>
							</svg>
						</a>

						<a href="#" class="btn btn-control">
							<svg class="olymp-share-icon">
								<use xlink:href="#olymp-share-icon"></use>
							</svg>
						</a>

					</div>

				</article>

				<div class="mCustomScrollbar" data-mcs-theme="dark">

					<ul class="comments-list">
						<li class="comment-item">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											38 mins ago
										</time>
									</div>
								</div>

								<a href="#" class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
								</a>

							</div>

							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
								<span>3</span>
							</a>
							<a href="#" class="reply">Reply</a>
						</li>
						<li class="comment-item">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="img/avatar1-sm.webp" alt="author" width="42" height="42">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Mathilda Brinker</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											1 hour ago
										</time>
									</div>
								</div>

								<a href="#" class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
								</a>

							</div>

							<p>Ratione voluptatem sequi en lod nesciunt. Neque porro quisquam est, quinder dolorem ipsum
								quia dolor sit amet, consectetur adipisci velit en lorem ipsum duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
							</p>

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
								<span>8</span>
							</a>
							<a href="#" class="reply">Reply</a>
						</li>
						<li class="comment-item">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											5 mins ago
										</time>
									</div>
								</div>

								<a href="#" class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
								</a>

							</div>

							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
								<span>8</span>
							</a>
							<a href="#" class="reply">Reply</a>
						</li>
					</ul>

				</div>

				<form class="comment-form inline-items">

					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

						<div class="form-group with-icon-right">
							<textarea class="form-control" placeholder=""></textarea>
							<div class="add-options-message">
								<a href="#" class="options-message">
									<svg class="olymp-camera-icon">
										<use xlink:href="#olymp-camera-icon"></use>
									</svg>
								</a>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Event Public -->

<!-- Window-popup Event Private Public -->

<div class="modal fade" id="private-event" tabindex="-1" role="dialog" aria-labelledby="private-event" aria-hidden="true">
	<div class="modal-dialog window-popup event-private-public private-event" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon">
					<use xlink:href="#olymp-close-icon"></use>
				</svg>
			</a>
			<div class="modal-body">
				<article class="hentry post has-post-thumbnail thumb-full-width private-event">

					<div class="private-event-head inline-items">
						<img loading="lazy" src="img/avatar77-sm.webp" alt="author" width="40" height="40">

						<div class="author-date">
							<a class="h3 event-title" href="#">Breakfast at the Agency</a>
							<div class="event__date">
								<time class="published" datetime="2017-03-24T18:18">
									Saturday at 9:00am
								</time>
							</div>
						</div>

						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Event Settings</a>
								</li>
								<li>
									<a href="#">Mark as Completed</a>
								</li>
								<li>
									<a href="#">Delete Event</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="post-thumb">
						<img loading="lazy" src="img/event-private.webp" alt="photo" width="770" height="379">
					</div>

					<div class="row">
						<div class="col col-lg-7 col-md-7 col-sm-12 col-12">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a> created the
									<a href="#">Event</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											March 11 at 9:52pm
										</time>
									</div>
								</div>

							</div>

							<p>
								Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the
								new design project we have been working on. Cheers!
							</p>
						</div>
						<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
							<div class="event-description">
								<h6 class="event-description-title">Private Event</h6>
								<div class="place inline-items">
									<svg class="olymp-add-a-place-icon">
										<use xlink:href="#olymp-add-a-place-icon"></use>
									</svg>
									<span>Daydreamz Agency</span>
								</div>

								<div class="place inline-items">
									<svg class="olymp-small-calendar-icon">
										<use xlink:href="#olymp-small-calendar-icon"></use>
									</svg>
									<span>Mar 26, 2016 at 9:00am UTC-8</span>
								</div>

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

									<li class="with-text">
										Will Assist
									</li>
								</ul>

								<a href="#" class="btn btn-blue btn-sm full-width">Invite Friends</a>
							</div>
						</div>
					</div>


					<div class="post-additional-info inline-items">

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon">
								<use xlink:href="#olymp-heart-icon"></use>
							</svg>
							<span>8</span>
						</a>

						<ul class="friends-harmonic">
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic1.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic9.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic7.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic4.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic8.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>

						<div class="names-people-likes">
							<a href="#">Diana </a>, <a href="#">Nicholas</a> and
							<br>15 more liked this
						</div>


						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon">
									<use xlink:href="#olymp-speech-balloon-icon"></use>
								</svg>
								<span>16 Comments</span>
							</a>
						</div>


					</div>

					<div class="control-block-button post-control-button">

						<a href="#" class="btn btn-control">
							<svg class="olymp-like-post-icon">
								<use xlink:href="#olymp-like-post-icon"></use>
							</svg>
						</a>

						<a href="#" class="btn btn-control">
							<svg class="olymp-comments-post-icon">
								<use xlink:href="#olymp-comments-post-icon"></use>
							</svg>
						</a>

					</div>

				</article>

				<div class="mCustomScrollbar" data-mcs-theme="dark">

					<ul class="comments-list">
						<li class="comment-item">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											38 mins ago
										</time>
									</div>
								</div>

								<a href="#" class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
								</a>

							</div>

							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
								<span>3</span>
							</a>
							<a href="#" class="reply">Reply</a>
						</li>
						<li class="comment-item">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="img/avatar1-sm.webp" alt="author" width="42" height="42">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Mathilda Brinker</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											1 hour ago
										</time>
									</div>
								</div>

								<a href="#" class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
								</a>

							</div>

							<p>Ratione voluptatem sequi en lod nesciunt. Neque porro quisquam est, quinder dolorem ipsum
								quia dolor sit amet, consectetur adipisci velit en lorem ipsum duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
							</p>

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
								<span>8</span>
							</a>
							<a href="#" class="reply">Reply</a>
						</li>
						<li class="comment-item">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											5 mins ago
										</time>
									</div>
								</div>

								<a href="#" class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="#olymp-three-dots-icon"></use>
									</svg>
								</a>

							</div>

							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
								<span>8</span>
							</a>
							<a href="#" class="reply">Reply</a>
						</li>
					</ul>

				</div>

				<form class="comment-form inline-items">

					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

						<div class="form-group with-icon-right ">
							<textarea class="form-control" placeholder=""></textarea>
							<div class="add-options-message">
								<a href="#" class="options-message">
									<svg class="olymp-camera-icon">
										<use xlink:href="#olymp-camera-icon"></use>
									</svg>
								</a>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Event Private Public -->

<!-- Window-popup Create Event -->

<div class="modal fade" id="create-event" tabindex="-1" role="dialog" aria-labelledby="create-event" aria-hidden="true">
	<div class="modal-dialog window-popup create-event" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon">
					<use xlink:href="#olymp-close-icon"></use>
				</svg>
			</a>
			<div class="modal-header">
				<h6 class="title">Create an Event</h6>
			</div>

			<div class="modal-body">
				<div class="form-group label-floating is-select">
					<label class="control-label">Personal Event</label>
					<select class="form-select">
						<option value="MA">Private Event</option>
						<option value="FE">Personal Event</option>
					</select>
				</div>

				<div class="form-group label-floating">
					<label class="control-label">Event Name</label>
					<input class="form-control" placeholder="" value="Take Querty to the Veterinarian" type="text">
				</div>

				<div class="form-group label-floating is-empty">
					<label class="control-label">Event Location</label>
					<input class="form-control" placeholder="" value="" type="text">
				</div>

				<div class="form-group date-time-picker label-floating">
					<label class="control-label">Event Date</label>
					<input name="datetimepicker" value="26/03/2016">
					<span class="input-group-addon">
					<svg class="olymp-calendar-icon icon"><use xlink:href="#olymp-calendar-icon"></use></svg>
				</span>
				</div>

				<div class="row">
					<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
						<div class="form-group label-floating">
							<label class="control-label">Event Time</label>
							<input class="form-control" placeholder="" value="09:00" type="text">
						</div>
					</div>
					<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
						<div class="form-group label-floating is-select">
							<label class="control-label">AM-PM</label>
							<select class="form-select">
								<option value="MA">AM</option>
								<option value="FE">PM</option>
							</select>
						</div>
					</div>
					<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="form-group label-floating is-select">
							<label class="control-label">Timezone</label>
							<select class="form-select">
								<option value="MA">US (UTC-8)</option>
								<option value="FE">UK (UTC-0)</option>
							</select>
						</div>
					</div>

				</div>

				<div class="form-group">
					<textarea class="form-control" placeholder="Event Description">I need to take Querty for a check up and ask the doctor if he needs a new tank.</textarea>
				</div>

				<form class="form-group">
					<svg class="olymp-happy-face-icon">
						<use xlink:href="#olymp-happy-face-icon"></use>
					</svg>

					<select class="form-select">
						<option title="Green Goo Rock">Green Goo Rock</option>

						<option title="Mathilda Brinker">Mathilda Brinker</option>

						<option title="Marina Valentine">Marina Valentine</option>

						<option title="Dave Marinara">Dave Marinara</option>

						<option title="Rachel Howlett">Rachel Howlett</option>

					</select>
				</form>

				<button class="btn btn-breez btn-lg full-width">Create Event</button>

			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Create Event -->


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