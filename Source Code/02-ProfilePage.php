<!DOCTYPE html>
<html lang="en">
<head>

	<title>Profile Page</title>

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
	<link rel="stylesheet" type="text/css" href="css/rtl.min.css">

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
		<h6>Profile Page</h6>
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
<div class="header-spacer"></div>


<!-- Top Header-Profile -->

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
										<a href="02-ProfilePage.php" class="active">Timeline</a>
									</li>
									<li>
										<a href="05-ProfilePage-About.php">About</a>
									</li>
									<li>
										<a href="06-ProfilePage.php">Friends</a>
									</li>
								</ul>
							</div>
							<div class="col col-lg-5 ms-auto col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<a href="07-ProfilePage-Photos.php">Photos</a>
									</li>
									<li>
										<a href="09-ProfilePage-Videos.php">Videos</a>
									</li>
									<li>
										<div class="more">
											<svg class="olymp-three-dots-icon">
												<use xlink:href="#olymp-three-dots-icon"></use>
											</svg>
											<ul class="more-dropdown more-with-triangle">
												<li>
													<a href="#">Report Profile</a>
												</li>
												<li>
													<a href="#">Block Profile</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="control-block-button">
							<a href="35-YourAccount-FriendsRequests.php" class="btn btn-control bg-blue">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="#olymp-happy-face-icon"></use>
								</svg>
							</a>

							<a href="#" class="btn btn-control bg-purple">
								<svg class="olymp-chat---messages-icon">
									<use xlink:href="#olymp-chat---messages-icon"></use>
								</svg>
							</a>

							<div class="btn btn-control bg-primary more">
								<svg class="olymp-settings-icon">
									<use xlink:href="#olymp-settings-icon"></use>
								</svg>

								<ul class="more-dropdown more-with-triangle triangle-bottom-right">
									<li>
										<a href="#" data-bs-toggle="modal" data-bs-target="#update-header-photo">Update Profile Photo</a>
									</li>
									<li>
										<a href="#" data-bs-toggle="modal" data-bs-target="#update-header-photo">Update Header Photo</a>
									</li>
									<li>
										<a href="29-YourAccount-AccountSettings.php">Account Settings</a>
									</li>
								</ul>
							</div>
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

<!-- ... end Top Header-Profile -->
<div class="container">
	<div class="row">

		<!-- Main Content -->

		<div class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
			<div id="newsfeed-items-grid">

				<div class="ui-block">
					<!-- Post -->

					<article class="hentry post">

						<div class="post__author author vcard inline-items">
							<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										19 hours ago
									</time>
								</div>
							</div>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Edit Post</a>
									</li>
									<li>
										<a href="#">Delete Post</a>
									</li>
									<li>
										<a href="#">Turn Off Notifications</a>
									</li>
									<li>
										<a href="#">Select as Featured</a>
									</li>
								</ul>
							</div>

						</div>

						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
							pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
							mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
							accusantium doloremque.
						</p>

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
										<img loading="lazy" src="img/friend-harmonic9.webp" alt="friend" width="28" height="28">
									</a>
								</li>
								<li>
									<a href="#">
										<img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28" height="28">
									</a>
								</li>
								<li>
									<a href="#">
										<img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28" height="28">
									</a>
								</li>
							</ul>

							<div class="names-people-likes">
								<a href="#">Jenny</a>, <a href="#">Robert</a> and
								<br>6 more liked this
							</div>


							<div class="comments-shared">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon">
										<use xlink:href="#olymp-speech-balloon-icon"></use>
									</svg>
									<span>17</span>
								</a>

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-share-icon">
										<use xlink:href="#olymp-share-icon"></use>
									</svg>
									<span>24</span>
								</a>
							</div>


						</div>

						<div class="control-block-button post-control-button">

							<a href="#" class="btn btn-control featured-post">
								<svg class="olymp-trophy-icon">
									<use xlink:href="#olymp-trophy-icon"></use>
								</svg>
							</a>

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

					<!-- .. end Post -->                </div>
				<div class="ui-block">

					<!-- Post -->

					<article class="hentry post video">

						<div class="post__author author vcard inline-items">
							<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a> shared a
								<a href="#">link</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										7 hours ago
									</time>
								</div>
							</div>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Edit Post</a>
									</li>
									<li>
										<a href="#">Delete Post</a>
									</li>
									<li>
										<a href="#">Turn Off Notifications</a>
									</li>
									<li>
										<a href="#">Select as Featured</a>
									</li>
								</ul>
							</div>

						</div>

						<p>If someone missed it, check out the new song by System of a Revenge! I thinks they are going back to their roots...</p>

						<div class="post-video">
							<div class="video-thumb">
								<img loading="lazy" src="img/video5.webp" alt="photo" width="178" height="178">
								<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
									<svg class="olymp-play-icon">
										<use xlink:href="#olymp-play-icon"></use>
									</svg>
								</a>
							</div>

							<div class="video-content">
								<a href="#" class="h4 title">System of a Revenge - Nothing Else Matters (LIVE)</a>
								<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempo incididunt ut labore..</p>
								<a href="#" class="link-site">YOUTUBE.COM</a>
							</div>
						</div>

						<div class="post-additional-info inline-items">

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
								<span>15</span>
							</a>

							<ul class="friends-harmonic">
								<li>
									<a href="#">
										<img loading="lazy" src="img/friend-harmonic9.webp" alt="friend" width="28" height="28">
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
										<img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28" height="28">
									</a>
								</li>
							</ul>

							<div class="names-people-likes">
								<a href="#">Jenny</a>, <a href="#">Robert</a> and
								<br>13 more liked this
							</div>

							<div class="comments-shared">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon">
										<use xlink:href="#olymp-speech-balloon-icon"></use>
									</svg>
									<span>1</span>
								</a>

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-share-icon">
										<use xlink:href="#olymp-share-icon"></use>
									</svg>
									<span>16</span>
								</a>
							</div>


						</div>


					</article>

					<!-- .. end Post -->                </div>
				<div class="ui-block">
					<!-- Post -->

					<article class="hentry post">

						<div class="post__author author vcard inline-items">
							<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										2 hours ago
									</time>
								</div>
							</div>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Edit Post</a>
									</li>
									<li>
										<a href="#">Delete Post</a>
									</li>
									<li>
										<a href="#">Turn Off Notifications</a>
									</li>
									<li>
										<a href="#">Select as Featured</a>
									</li>
								</ul>
							</div>

						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.
						</p>

						<div class="post-additional-info inline-items">

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
								<span>36</span>
							</a>

							<ul class="friends-harmonic">
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
										<img loading="lazy" src="img/friend-harmonic9.webp" alt="friend" width="28" height="28">
									</a>
								</li>
								<li>
									<a href="#">
										<img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28" height="28">
									</a>
								</li>
								<li>
									<a href="#">
										<img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28" height="28">
									</a>
								</li>
							</ul>

							<div class="names-people-likes">
								<a href="#">You</a>, <a href="#">Elaine</a> and
								<br>34 more liked this
							</div>


							<div class="comments-shared">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon">
										<use xlink:href="#olymp-speech-balloon-icon"></use>
									</svg>
									<span>17</span>
								</a>

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-share-icon">
										<use xlink:href="#olymp-share-icon"></use>
									</svg>
									<span>24</span>
								</a>
							</div>


						</div>


					</article>

					<!-- .. end Post -->
					<!-- Comments -->

					<ul class="comments-list">
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
						<li class="comment-item has-children">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="img/avatar5-sm.webp" alt="author" width="42" height="42">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Green Goo Rock</a>
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

							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugiten, sed quia
								consequuntur magni dolores eos qui ratione voluptatem sequi en lod nesciunt. Neque porro
								quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit en lorem ipsum der.
							</p>

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
								<span>5</span>
							</a>
							<a href="#" class="reply">Reply</a>

							<ul class="children">
								<li class="comment-item">
									<div class="post__author author vcard inline-items">
										<img loading="lazy" src="img/avatar8-sm.webp" alt="author" width="36" height="36">

										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Diana Jameson</a>
											<div class="post__date">
												<time class="published" datetime="2017-03-24T18:18">
													39 mins ago
												</time>
											</div>
										</div>

										<a href="#" class="more">
											<svg class="olymp-three-dots-icon">
												<use xlink:href="#olymp-three-dots-icon"></use>
											</svg>
										</a>

									</div>

									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon">
											<use xlink:href="#olymp-heart-icon"></use>
										</svg>
										<span>2</span>
									</a>
									<a href="#" class="reply">Reply</a>
								</li>
								<li class="comment-item">
									<div class="post__author author vcard inline-items">
										<img loading="lazy" src="img/avatar2-sm.webp" alt="author" width="42" height="42">

										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Nicholas Grisom</a>
											<div class="post__date">
												<time class="published" datetime="2017-03-24T18:18">
													24 mins ago
												</time>
											</div>
										</div>

										<a href="#" class="more">
											<svg class="olymp-three-dots-icon">
												<use xlink:href="#olymp-three-dots-icon"></use>
											</svg>
										</a>

									</div>

									<p>Excepteur sint occaecat cupidatat non proident.</p>

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon">
											<use xlink:href="#olymp-heart-icon"></use>
										</svg>
										<span>0</span>
									</a>
									<a href="#" class="reply">Reply</a>

								</li>
							</ul>

						</li>

						<li class="comment-item">
							<div class="post__author author vcard inline-items">
								<img loading="lazy" src="img/avatar4-sm.webp" alt="author" width="42" height="42">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Chris Greyson</a>
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

							<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
								<span>7</span>
							</a>
							<a href="#" class="reply">Reply</a>

						</li>
					</ul>

					<!-- ... end Comments -->
					<a href="#" class="more-comments">View more comments <span>+</span></a>

					<!-- Comment Form  -->

					<form class="comment-form inline-items">

						<div class="post__author author vcard inline-items">
							<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

							<div class="form-group with-icon-right ">
								<textarea class="form-control" placeholder=""></textarea>
								<div class="add-options-message">
									<a href="#" class="options-message" data-bs-toggle="modal" data-bs-target="#update-header-photo">
										<svg class="olymp-camera-icon">
											<use xlink:href="#olymp-camera-icon"></use>
										</svg>
									</a>
								</div>
							</div>
						</div>

						<button class="btn btn-md-2 btn-primary">Post Comment</button>

						<button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

					</form>

					<!-- ... end Comment Form  -->                </div>
				<div class="ui-block">
					<!-- Post -->

					<article class="hentry post has-post-thumbnail shared-photo">

						<div class="post__author author vcard inline-items">
							<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a> shared
								<a href="#">Diana Jameson</a>’s <a href="#">photo</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										7 hours ago
									</time>
								</div>
							</div>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Edit Post</a>
									</li>
									<li>
										<a href="#">Delete Post</a>
									</li>
									<li>
										<a href="#">Turn Off Notifications</a>
									</li>
									<li>
										<a href="#">Select as Featured</a>
									</li>
								</ul>
							</div>

						</div>

						<p>Hi! Everyone should check out these amazing photographs that my friend shot the past week. Here’s one of them...leave a kind comment!</p>

						<div class="post-thumb">
							<img loading="lazy" src="img/post-photo6.webp" alt="photo" width="618" height="412">
						</div>

						<ul class="children single-children">
							<li class="comment-item">
								<div class="post__author author vcard inline-items">
									<img loading="lazy" src="img/avatar8-sm.webp" alt="author" width="36" height="36">
									<div class="author-date">
										<a class="h6 post__author-name fn" href="#">Diana Jameson</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												16 hours ago
											</time>
										</div>
									</div>
								</div>

								<p>Here’s the first photo of our incredible photoshoot from yesterday. If you like it please say so and tel me what you wanna see next!</p>
							</li>
						</ul>

						<div class="post-additional-info inline-items">

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
								<span>15</span>
							</a>

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

							<div class="names-people-likes">
								<a href="#">Diana</a>, <a href="#">Nicholas</a> and
								<br>13 more liked this
							</div>

							<div class="comments-shared">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon">
										<use xlink:href="#olymp-speech-balloon-icon"></use>
									</svg>
									<span>0</span>
								</a>

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-share-icon">
										<use xlink:href="#olymp-share-icon"></use>
									</svg>
									<span>16</span>
								</a>
							</div>

						</div>


					</article>

					<!-- .. end Post -->                </div>
			</div>

			<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.php" data-container="newsfeed-items-grid">
				<svg class="olymp-three-dots-icon">
					<use xlink:href="#olymp-three-dots-icon"></use>
				</svg>
			</a>
		</div>

		<!-- ... end Main Content -->


		<!-- Left Sidebar -->

		<div class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Profile Intro</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Personal-Info -->

					<ul class="widget w-personal-info item-block">
						<li>
							<span class="title">About Me:</span>
							<span class="text">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56.</span>
						</li>
						<li>
							<span class="title">Favourite TV Shows:</span>
							<span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
						</li>
						<li>
							<span class="title">Favourite Music Bands / Artists:</span>
							<span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</span>
						</li>
					</ul>

					<!-- .. end W-Personal-Info -->
					<!-- W-Socials -->

					<div class="widget w-socials">
						<h6 class="title">Other Social Networks:</h6>
						<a href="#" class="social-item bg-facebook">
							<svg width="16" height="16">
								<use xlink:href="#olymp-facebook-icon"></use>
							</svg>
							Facebook
						</a>
						<a href="#" class="social-item bg-twitter">
							<svg width="16" height="16">
								<use xlink:href="#olymp-twitter-icon"></use>
							</svg>
							Twitter
						</a>
						<a href="#" class="social-item bg-dribbble">
							<svg width="16" height="16">
								<use xlink:href="#olymp-dribble-icon"></use>
							</svg>
							Dribbble
						</a>
					</div>


					<!-- ... end W-Socials -->
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">James’s Badges</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Badges -->

					<ul class="widget w-badges">
						<li>
							<a href="24-CommunityBadges.php">
								<img loading="lazy" src="img/badge1.webp" alt="author" width="38" height="38">
								<div class="label-avatar bg-primary">2</div>
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.php">
								<img loading="lazy" src="img/badge4.webp" alt="author" width="38" height="38">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.php">
								<img loading="lazy" src="img/badge3.webp" alt="author" width="38" height="38">
								<div class="label-avatar bg-blue">4</div>
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.php">
								<img loading="lazy" src="img/badge6.webp" alt="author" width="38" height="38">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.php">
								<img loading="lazy" src="img/badge11.webp" alt="author" width="38" height="38">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.php">
								<img loading="lazy" src="img/badge8.webp" alt="author" width="38" height="38">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.php">
								<img loading="lazy" src="img/badge10.webp" alt="author" width="38" height="38">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.php">
								<img loading="lazy" src="img/badge13.webp" alt="author" width="38" height="38">
								<div class="label-avatar bg-breez">2</div>
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.php">
								<img loading="lazy" src="img/badge7.webp" alt="author" width="38" height="38">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.php">
								<img loading="lazy" src="img/badge12.webp" alt="author" width="38" height="38">
							</a>
						</li>
					</ul>

					<!--.. end W-Badges -->
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">My Spotify Playlist</h6>
				</div>

				<!-- W-Playlist -->

				<ol class="widget w-playlist">
					<li class="js-open-popup" data-popup-target=".playlist-popup">
						<div class="playlist-thumb">
							<img loading="lazy" src="img/playlist6.webp" alt="thumb-composition" width="34" height="34">
							<div class="overlay"></div>
							<a href="#" class="play-icon">
								<svg class="olymp-music-play-icon-big">
									<use xlink:href="#olymp-music-play-icon-big"></use>
								</svg>
							</a>
						</div>

						<div class="composition">
							<a href="#" class="composition-name">The Past Starts Slow...</a>
							<a href="#" class="composition-author">System of a Revenge</a>
						</div>

						<div class="composition-time">
							<time class="published" datetime="2017-03-24T18:18">3:22</time>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Add Song to Player</a>
									</li>
									<li>
										<a href="#">Add Playlist to Player</a>
									</li>
								</ul>
							</div>
						</div>

					</li>

					<li class="js-open-popup" data-popup-target=".playlist-popup">
						<div class="playlist-thumb">
							<img loading="lazy" src="img/playlist7.webp" alt="thumb-composition" width="34" height="34">
							<div class="overlay"></div>
							<a href="#" class="play-icon">
								<svg class="olymp-music-play-icon-big">
									<use xlink:href="#olymp-music-play-icon-big"></use>
								</svg>
							</a>
						</div>

						<div class="composition">
							<a href="#" class="composition-name">The Pretender</a>
							<a href="#" class="composition-author">Kung Fighters</a>
						</div>

						<div class="composition-time">
							<time class="published" datetime="2017-03-24T18:18">5:48</time>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Add Song to Player</a>
									</li>
									<li>
										<a href="#">Add Playlist to Player</a>
									</li>
								</ul>
							</div>
						</div>

					</li>
					<li class="js-open-popup" data-popup-target=".playlist-popup">
						<div class="playlist-thumb">
							<img loading="lazy" src="img/playlist8.webp" alt="thumb-composition" width="34" height="34">
							<div class="overlay"></div>
							<a href="#" class="play-icon">
								<svg class="olymp-music-play-icon-big">
									<use xlink:href="#olymp-music-play-icon-big"></use>
								</svg>
							</a>
						</div>

						<div class="composition">
							<a href="#" class="composition-name">Blood Brothers</a>
							<a href="#" class="composition-author">Iron Maid</a>
						</div>

						<div class="composition-time">
							<time class="published" datetime="2017-03-24T18:18">3:06</time>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Add Song to Player</a>
									</li>
									<li>
										<a href="#">Add Playlist to Player</a>
									</li>
								</ul>
							</div>
						</div>

					</li>
					<li class="js-open-popup" data-popup-target=".playlist-popup">
						<div class="playlist-thumb">
							<img loading="lazy" src="img/playlist9.webp" alt="thumb-composition" width="34" height="34">
							<div class="overlay"></div>
							<a href="#" class="play-icon">
								<svg class="olymp-music-play-icon-big">
									<use xlink:href="#olymp-music-play-icon-big"></use>
								</svg>
							</a>
						</div>

						<div class="composition">
							<a href="#" class="composition-name">Seven Nation Army</a>
							<a href="#" class="composition-author">The Black Stripes</a>
						</div>

						<div class="composition-time">
							<time class="published" datetime="2017-03-24T18:18">6:17</time>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Add Song to Player</a>
									</li>
									<li>
										<a href="#">Add Playlist to Player</a>
									</li>
								</ul>
							</div>
						</div>

					</li>
					<li class="js-open-popup" data-popup-target=".playlist-popup">
						<div class="playlist-thumb">
							<img loading="lazy" src="img/playlist10.webp" alt="thumb-composition" width="34" height="34">
							<div class="overlay"></div>
							<a href="#" class="play-icon">
								<svg class="olymp-music-play-icon-big">
									<use xlink:href="#olymp-music-play-icon-big"></use>
								</svg>
							</a>
						</div>

						<div class="composition">
							<a href="#" class="composition-name">Killer Queen</a>
							<a href="#" class="composition-author">Archiduke</a>
						</div>

						<div class="composition-time">
							<time class="published" datetime="2017-03-24T18:18">5:40</time>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Add Song to Player</a>
									</li>
									<li>
										<a href="#">Add Playlist to Player</a>
									</li>
								</ul>
							</div>
						</div>

					</li>
				</ol>

				<!-- .. end W-Playlist -->
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Twitter Feed</h6>
				</div>

				<!-- W-Twitter -->

				<ul class="widget w-twitter">
					<li class="twitter-item">
						<div class="author-folder">
							<img loading="lazy" src="img/twitter-avatar1.webp" alt="avatar" width="40" height="40">
							<div class="author">
								<a href="#" class="author-name">Space Cowboy</a>
								<a href="#" class="group">@james_spiegelOK</a>
							</div>
						</div>
						<p>Tomorrow with the agency we will run 5 km for charity. Come and give us your support!
							<a href="#" class="link-post">#Daydream5K</a></p>
						<span class="post__date">
							<time class="published" datetime="2017-03-24T18:18">
								2 hours ago
							</time>
						</span>
					</li>
					<li class="twitter-item">
						<div class="author-folder">
							<img loading="lazy" src="img/twitter-avatar1.webp" alt="avatar" width="40" height="40">
							<div class="author">
								<a href="#" class="author-name">Space Cowboy</a>
								<a href="#" class="group">@james_spiegelOK</a>
							</div>
						</div>
						<p>Check out the new website of “The Bebop Bar”! <a href="#" class="link-post">bytle/thbp53f</a>
						</p>
						<span class="post__date">
							<time class="published" datetime="2017-03-24T18:18">
								16 hours ago
							</time>
						</span>
					</li>
					<li class="twitter-item">
						<div class="author-folder">
							<img loading="lazy" src="img/twitter-avatar1.webp" alt="avatar" width="40" height="40">
							<div class="author">
								<a href="#" class="author-name">Space Cowboy</a>
								<a href="#" class="group">@james_spiegelOK</a>
							</div>
						</div>
						<p>The Sunday is the annual agency camping trip and I still haven’t got a tent
							<a href="#" class="link-post">#TheWild #Indoors</a></p>
						<span class="post__date">
							<time class="published" datetime="2017-03-24T18:18">
								Yesterday
							</time>
						</span>
					</li>
				</ul>


				<!-- .. end W-Twitter -->
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Last Videos</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Latest-Video -->

					<ul class="widget w-last-video">
						<li>
							<a href="https://vimeo.com/ondemand/viewfromabluemoon4k/147865858" class="play-video play-video--small">
								<svg class="olymp-play-icon">
									<use xlink:href="#olymp-play-icon"></use>
								</svg>
							</a>
							<img loading="lazy" src="img/video8.webp" alt="video" width="272" height="181">
							<div class="video-content">
								<div class="title">System of a Revenge - Hypnotize...</div>
								<time class="published" datetime="2017-03-24T18:18">3:25</time>
							</div>
							<div class="overlay"></div>
						</li>
						<li>
							<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
								<svg class="olymp-play-icon">
									<use xlink:href="#olymp-play-icon"></use>
								</svg>
							</a>
							<img loading="lazy" src="img/video7.webp" alt="video" width="272" height="177">
							<div class="video-content">
								<div class="title">Green Goo - Live at Dan’s Arena</div>
								<time class="published" datetime="2017-03-24T18:18">5:48</time>
							</div>
							<div class="overlay"></div>
						</li>
					</ul>

					<!-- .. end W-Latest-Video -->
				</div>
			</div>

		</div>

		<!-- ... end Left Sidebar -->


		<!-- Right Sidebar -->

		<div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Last Photos</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Latest-Photo -->

					<ul class="widget w-last-photo js-zoom-gallery">
						<li>
							<a href="img/last-photo10-large.webp">
								<img loading="lazy" src="img/last-photo10-large.webp" alt="photo" width="600" height="600">
							</a>
						</li>
						<li>
							<a href="img/last-phot11-large.webp">
								<img loading="lazy" src="img/last-phot11-large.webp" alt="photo" width="600" height="600">
							</a>
						</li>
						<li>
							<a href="img/last-phot12-large.webp">
								<img loading="lazy" src="img/last-phot12-large.webp" alt="photo" width="600" height="600">
							</a>
						</li>
						<li>
							<a href="img/last-phot13-large.webp">
								<img loading="lazy" src="img/last-phot13-large.webp" alt="photo" width="600" height="600">
							</a>
						</li>
						<li>
							<a href="img/last-phot14-large.webp">
								<img loading="lazy" src="img/last-phot14-large.webp" alt="photo" width="600" height="600">
							</a>
						</li>
						<li>
							<a href="img/last-phot15-large.webp">
								<img loading="lazy" src="img/last-phot15-large.webp" alt="photo" width="600" height="600">
							</a>
						</li>
						<li>
							<a href="img/last-phot16-large.webp">
								<img loading="lazy" src="img/last-phot16-large.webp" alt="photo" width="600" height="600">
							</a>
						</li>
						<li>
							<a href="img/last-phot17-large.webp">
								<img loading="lazy" src="img/last-phot17-large.webp" alt="photo" width="600" height="600">
							</a>
						</li>
						<li>
							<a href="img/last-phot18-large.webp">
								<img loading="lazy" src="img/last-phot18-large.webp" alt="photo" width="600" height="600">
							</a>
						</li>
					</ul>


					<!-- .. end W-Latest-Photo -->
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Blog Posts</h6>
				</div>
				<!-- W-Blog-Posts -->

				<ul class="widget w-blog-posts">
					<li>
						<article class="hentry post">

							<a href="#" class="h4">My Perfect Vacations in South America and Europe</a>

							<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et.</p>

							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									7 hours ago
								</time>
							</div>

						</article>
					</li>
					<li>
						<article class="hentry post">

							<a href="#" class="h4">The Big Experience of Travelling Alone</a>

							<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et.</p>

							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									March 18th, at 6:52pm
								</time>
							</div>

						</article>
					</li>
				</ul>

				<!-- .. end W-Blog-Posts -->
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Friends (86)</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Faved-Page -->

					<ul class="widget w-faved-page js-zoom-gallery">
						<li>
							<a href="#">
								<img loading="lazy" src="img/avatar38-sm.webp" alt="author" width="36" height="36">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/avatar24-sm.webp" width="42" height="42" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/avatar36-sm.webp" alt="author" width="42" height="42">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/avatar35-sm.webp" alt="user" width="42" height="42">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/avatar34-sm.webp" alt="author" width="42" height="42">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/avatar33-sm.webp" alt="author" width="42" height="42">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/avatar32-sm.webp" alt="user" width="42" height="42">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/avatar31-sm.webp" alt="author" width="42" height="42">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/avatar30-sm.webp" alt="author" width="42" height="42">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/avatar29-sm.webp" width="42" height="42" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/avatar28-sm.webp" width="42" height="42" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/avatar27-sm.webp" width="42" height="42" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/avatar26-sm.webp" width="42" height="42" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/avatar25-sm.webp" width="42" height="42" alt="user">
							</a>
						</li>
						<li class="all-users">
							<a href="#">+74</a>
						</li>
					</ul>

					<!-- .. end W-Faved-Page -->
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Favourite Pages</h6>
				</div>

				<!-- W-Friend-Pages-Added -->

				<ul class="widget w-friend-pages-added notification-list friend-requests">
					<li class="inline-items">
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar41-sm.webp" alt="author" width="36" height="36">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">The Marina Bar</a>
							<span class="chat-message-item">Restaurant / Bar</span>
						</div>
						<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="#olymp-star-icon"></use></svg>
							</a>
						</span>

					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar42-sm.webp" alt="author" width="36" height="36">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Tapronus Rock</a>
							<span class="chat-message-item">Rock Band</span>
						</div>
						<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="#olymp-star-icon"></use></svg>
							</a>
						</span>

					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar43-sm.webp" alt="author" width="36" height="36">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Pixel Digital Design</a>
							<span class="chat-message-item">Company</span>
						</div>
						<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="#olymp-star-icon"></use></svg>
							</a>
						</span>
					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar44-sm.webp" alt="author" width="36" height="36">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Thompson’s Custom Clothing Boutique</a>
							<span class="chat-message-item">Clothing Store</span>
						</div>
						<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="#olymp-star-icon"></use></svg>
							</a>
						</span>

					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar45-sm.webp" alt="author" width="36" height="36">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Crimson Agency</a>
							<span class="chat-message-item">Company</span>
						</div>
						<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="#olymp-star-icon"></use></svg>
							</a>
						</span>
					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar46-sm.webp" alt="author" width="38" height="38">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Mannequin Angel</a>
							<span class="chat-message-item">Clothing Store</span>
						</div>
						<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="#olymp-star-icon"></use></svg>
							</a>
						</span>
					</li>
				</ul>

				<!-- .. end W-Friend-Pages-Added -->
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">James's Poll</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Pool -->

					<ul class="widget w-pool">
						<li>
							<p>If you had to choose, which actor do you prefer to be the next Darkman? </p>
						</li>
						<li>
							<div class="skills-item">
								<div class="skills-item-info">
									<span class="skills-item-title">
										<span class="radio">
											<label>
												<input type="radio" name="optionsRadios">
												Thomas Bale
											</label>
										</span>
									</span>
									<span class="skills-item-count">
										<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="62" data-from="0"></span>
										<span class="units">62%</span>
									</span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary" style="width: 62%"></span>
								</div>

								<div class="counter-friends">12 friends voted for this</div>

								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic1.webp" alt="friend" width="28" height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic2.webp" alt="friend" width="28" height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic3.webp" alt="friend" width="28" height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic4.webp" alt="friend" width="28" height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic5.webp" alt="friend" width="28" height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic6.webp" alt="friend" width="28" height="28">
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
											<img loading="lazy" src="img/friend-harmonic9.webp" alt="friend" width="28" height="28">
										</a>
									</li>
									<li>
										<a href="#" class="all-users">+3</a>
									</li>
								</ul>
							</div>
						</li>

						<li>
							<div class="skills-item">
								<div class="skills-item-info">
									<span class="skills-item-title">
										<span class="radio">
											<label>
												<input type="radio" name="optionsRadios">
												Ben Robertson
											</label>
										</span>
									</span>
									<span class="skills-item-count">
										<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="27" data-from="0"></span>
										<span class="units">27%</span>
									</span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary" style="width: 27%"></span>
								</div>
								<div class="counter-friends">7 friends voted for this</div>

								<ul class="friends-harmonic">
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
											<img loading="lazy" src="img/friend-harmonic9.webp" alt="friend" width="28" height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28" height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28" height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic12.webp" alt="friend" width="28" height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic13.webp" alt="friend" width="28" height="28">
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li>
							<div class="skills-item">
								<div class="skills-item-info">
									<span class="skills-item-title">
										<span class="radio">
											<label>
												<input type="radio" name="optionsRadios">
												Michael Streiton
											</label>
										</span>
									</span>
									<span class="skills-item-count">
										<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="11" data-from="0"></span>
										<span class="units">11%</span>
									</span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary" style="width: 11%"></span>
								</div>

								<div class="counter-friends">2 people voted for this</div>

								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic14.webp" alt="friend" width="28" height="28">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/friend-harmonic15.webp" alt="friend" width="28" height="28">
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>

					<!-- .. end W-Pool -->
					<a href="#" class="btn btn-md-2 btn-border-think custom-color c-grey full-width">Vote Now!</a>
				</div>
			</div>

		</div>

		<!-- ... end Right Sidebar -->

	</div>
</div>

<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
	<div class="modal-dialog window-popup update-header-photo" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon">
					<use xlink:href="#olymp-close-icon"></use>
				</svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Update Header Photo</h6>
			</div>

			<div class="modal-body">
				<a href="#" class="upload-photo-item">
					<svg class="olymp-computer-icon">
						<use xlink:href="#olymp-computer-icon"></use>
					</svg>

					<h6>Upload Photo</h6>
					<span>Browse your computer.</span>
				</a>

				<a href="#" class="upload-photo-item" data-bs-toggle="modal" data-bs-target="#choose-from-my-photo">

					<svg class="olymp-photos-icon">
						<use xlink:href="#olymp-photos-icon"></use>
					</svg>

					<h6>Choose from My Photos</h6>
					<span>Choose from your uploaded photos</span>
				</a>
			</div>
		</div>
	</div>
</div>


<!-- ... end Window-popup Update Header Photo -->

<!-- Window-popup Choose from my Photo -->

<div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo" aria-hidden="true">
	<div class="modal-dialog window-popup choose-from-my-photo" role="document">

		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon">
					<use xlink:href="#olymp-close-icon"></use>
				</svg>
			</a>
			<div class="modal-header">
				<h6 class="title">Choose from My Photos</h6>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-expanded="true">
							<svg class="olymp-photos-icon">
								<use xlink:href="#olymp-photos-icon"></use>
							</svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab" aria-expanded="false">
							<svg class="olymp-albums-icon">
								<use xlink:href="#olymp-albums-icon"></use>
							</svg>
						</a>
					</li>
				</ul>
			</div>

			<div class="modal-body">
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane fade active show" id="home" role="tabpanel" aria-expanded="true">

						<div class="choose-photo-item">
							<div class="radio">
								<label class="custom-radio">
									<img loading="lazy" src="img/choose-photo1.webp" alt="photo" width="247" height="166">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item">
							<div class="radio">
								<label class="custom-radio">
									<img loading="lazy" src="img/choose-photo2.webp" alt="photo" width="247" height="166">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item">
							<div class="radio">
								<label class="custom-radio">
									<img loading="lazy" src="img/choose-photo3.webp" alt="photo" width="247" height="166">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>

						<div class="choose-photo-item">
							<div class="radio">
								<label class="custom-radio">
									<img loading="lazy" src="img/choose-photo4.webp" alt="photo" width="247" height="166">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item">
							<div class="radio">
								<label class="custom-radio">
									<img loading="lazy" src="img/choose-photo5.webp" alt="photo" width="247" height="166">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item">
							<div class="radio">
								<label class="custom-radio">
									<img loading="lazy" src="img/choose-photo6.webp" alt="photo" width="247" height="166">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>

						<div class="choose-photo-item">
							<div class="radio">
								<label class="custom-radio">
									<img loading="lazy" src="img/choose-photo7.webp" alt="photo" width="247" height="166">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item">
							<div class="radio">
								<label class="custom-radio">
									<img loading="lazy" src="img/choose-photo8.webp" alt="photo" width="247" height="166">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item">
							<div class="radio">
								<label class="custom-radio">
									<img loading="lazy" src="img/choose-photo9.webp" alt="photo" width="247" height="166">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>


						<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
						<a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-expanded="false">

						<div class="choose-photo-item">
							<figure>
								<img loading="lazy" src="img/choose-photo10.webp" alt="photo" width="225" height="180">
								<figcaption>
									<a href="#">South America Vacations</a>
									<span>Last Added: 2 hours ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item">
							<figure>
								<img loading="lazy" src="img/choose-photo11.webp" alt="photo" width="225" height="180">
								<figcaption>
									<a href="#">Photoshoot Summer 2016</a>
									<span>Last Added: 5 weeks ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item">
							<figure>
								<img loading="lazy" src="img/choose-photo12.webp" alt="photo" width="225" height="180">
								<figcaption>
									<a href="#">Amazing Street Food</a>
									<span>Last Added: 6 mins ago</span>
								</figcaption>
							</figure>
						</div>

						<div class="choose-photo-item">
							<figure>
								<img loading="lazy" src="img/choose-photo13.webp" alt="photo" width="224" height="179">
								<figcaption>
									<a href="#">Graffity & Street Art</a>
									<span>Last Added: 16 hours ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item">
							<figure>
								<img loading="lazy" src="img/choose-photo14.webp" alt="photo" width="225" height="180">
								<figcaption>
									<a href="#">Amazing Landscapes</a>
									<span>Last Added: 13 mins ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item">
							<figure>
								<img loading="lazy" src="img/choose-photo15.webp" alt="photo" width="225" height="180">
								<figcaption>
									<a href="#">The Majestic Canyon</a>
									<span>Last Added: 57 mins ago</span>
								</figcaption>
							</figure>
						</div>


						<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
						<a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- ... end Window-popup Choose from my Photo -->

<!-- Playlist Popup -->

<div class="window-popup playlist-popup" tabindex="-1" role="dialog" aria-labelledby="playlist-popup" aria-hidden="true">

	<a href="" class="icon-close js-close-popup">
		<svg class="olymp-close-icon">
			<use xlink:href="#olymp-close-icon"></use>
		</svg>
	</a>

	<div class="mCustomScrollbar">
		<table class="playlist-popup-table">

			<thead>

			<tr>

				<th class="play">
					PLAY
				</th>

				<th class="cover">
					COVER
				</th>

				<th class="song-artist">
					SONG AND ARTIST
				</th>

				<th class="album">
					ALBUM
				</th>

				<th class="released">
					RELEASED
				</th>

				<th class="duration">
					DURATION
				</th>

				<th class="spotify">
					GET IT ON SPOTIFY
				</th>

				<th class="remove">
					REMOVE
				</th>
			</tr>

			</thead>

			<tbody>
			<tr>
				<td class="play">
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big">
							<use xlink:href="#olymp-music-play-icon-big"></use>
						</svg>
					</a>
				</td>
				<td class="cover">
					<div class="playlist-thumb">
						<img loading="lazy" src="img/playlist19.webp" alt="thumb-composition" width="34" height="34">
					</div>
				</td>
				<td class="song-artist">
					<div class="composition">
						<a href="#" class="composition-name">We Can Be Heroes</a>
						<a href="#" class="composition-author">Jason Bowie</a>
					</div>
				</td>
				<td class="album">
					<a href="#" class="album-composition">Ziggy Firedust</a>
				</td>
				<td class="released">
					<div class="release-year">2014</div>
				</td>
				<td class="duration">
					<div class="composition-time">
						<time class="published" datetime="2017-03-24T18:18">6:17</time>
					</div>
				</td>
				<td class="spotify">
					<svg class="composition-icon" width="22" height="22">
						<use xlink:href="#olymp-spotify-icon"></use>
					</svg>
				</td>
				<td class="remove">
					<a href="#" class="remove-icon">
						<svg class="olymp-close-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
					</a>
				</td>
			</tr>

			<tr>
				<td class="play">
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big">
							<use xlink:href="#olymp-music-play-icon-big"></use>
						</svg>
					</a>
				</td>
				<td class="cover">
					<div class="playlist-thumb">
						<img loading="lazy" src="img/playlist6.webp" alt="thumb-composition" width="34" height="34">
					</div>
				</td>
				<td class="song-artist">
					<div class="composition">
						<a href="#" class="composition-name">The Past Starts Slow and Ends</a>
						<a href="#" class="composition-author">System of a Revenge</a>
					</div>
				</td>
				<td class="album">
					<a href="#" class="album-composition">Wonderize</a>
				</td>
				<td class="released">
					<div class="release-year">2014</div>
				</td>
				<td class="duration">
					<div class="composition-time">
						<time class="published" datetime="2017-03-24T18:18">6:17</time>
					</div>
				</td>
				<td class="spotify">
					<svg class="composition-icon" width="22" height="22">
						<use xlink:href="#olymp-spotify-icon"></use>
					</svg>
				</td>
				<td class="remove">
					<a href="#" class="remove-icon">
						<svg class="olymp-close-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
					</a>
				</td>
			</tr>

			<tr>
				<td class="play">
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big">
							<use xlink:href="#olymp-music-play-icon-big"></use>
						</svg>
					</a>
				</td>
				<td class="cover">
					<div class="playlist-thumb">
						<img loading="lazy" src="img/playlist7.webp" alt="thumb-composition" width="34" height="34">
					</div>
				</td>
				<td class="song-artist">
					<div class="composition">
						<a href="#" class="composition-name">The Pretender</a>
						<a href="#" class="composition-author">Kung Fighters</a>
					</div>
				</td>
				<td class="album">
					<a href="#" class="album-composition">Warping Lights</a>
				</td>
				<td class="released">
					<div class="release-year">2014</div>
				</td>
				<td class="duration">
					<div class="composition-time">
						<time class="published" datetime="2017-03-24T18:18">6:17</time>
					</div>
				</td>
				<td class="spotify">
					<svg class="composition-icon" width="22" height="22">
						<use xlink:href="#olymp-spotify-icon"></use>
					</svg>
				</td>
				<td class="remove">
					<a href="#" class="remove-icon">
						<svg class="olymp-close-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
					</a>
				</td>
			</tr>

			<tr>
				<td class="play">
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big">
							<use xlink:href="#olymp-music-play-icon-big"></use>
						</svg>
					</a>
				</td>
				<td class="cover">
					<div class="playlist-thumb">
						<img loading="lazy" src="img/playlist8.webp" alt="thumb-composition" width="34" height="34">
					</div>
				</td>
				<td class="song-artist">
					<div class="composition">
						<a href="#" class="composition-name">Seven Nation Army</a>
						<a href="#" class="composition-author">The Black Stripes</a>
					</div>
				</td>
				<td class="album">
					<a href="#" class="album-composition ">Icky Strung (LIVE at Cube Garden)</a>
				</td>
				<td class="released">
					<div class="release-year">2014</div>
				</td>
				<td class="duration">
					<div class="composition-time">
						<time class="published" datetime="2017-03-24T18:18">6:17</time>
					</div>
				</td>
				<td class="spotify">
					<svg class="composition-icon" width="22" height="22">
						<use xlink:href="#olymp-spotify-icon"></use>
					</svg>
				</td>
				<td class="remove">
					<a href="#" class="remove-icon">
						<svg class="olymp-close-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
					</a>
				</td>
			</tr>

			<tr>
				<td class="play">
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big">
							<use xlink:href="#olymp-music-play-icon-big"></use>
						</svg>
					</a>
				</td>
				<td class="cover">
					<div class="playlist-thumb">
						<img loading="lazy" src="img/playlist9.webp" alt="thumb-composition" width="34" height="34">
					</div>
				</td>
				<td class="song-artist">
					<div class="composition">
						<a href="#" class="composition-name">Leap of Faith</a>
						<a href="#" class="composition-author">Eden Artifact</a>
					</div>
				</td>
				<td class="album">
					<a href="#" class="album-composition">The Assassins’s Soundtrack</a>
				</td>
				<td class="released">
					<div class="release-year">2014</div>
				</td>
				<td class="duration">
					<div class="composition-time">
						<time class="published" datetime="2017-03-24T18:18">6:17</time>
					</div>
				</td>
				<td class="spotify">
					<svg class="composition-icon" width="22" height="22">
						<use xlink:href="#olymp-spotify-icon"></use>
					</svg>
				</td>
				<td class="remove">
					<a href="#" class="remove-icon">
						<svg class="olymp-close-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
					</a>
				</td>
			</tr>

			<tr>
				<td class="play">
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big">
							<use xlink:href="#olymp-music-play-icon-big"></use>
						</svg>
					</a>
				</td>
				<td class="cover">
					<div class="playlist-thumb">
						<img loading="lazy" src="img/playlist10.webp" alt="thumb-composition" width="34" height="34">
					</div>
				</td>
				<td class="song-artist">
					<div class="composition">
						<a href="#" class="composition-name">Killer Queen</a>
						<a href="#" class="composition-author">Archiduke</a>
					</div>
				</td>
				<td class="album">
					<a href="#" class="album-composition ">News of the Universe</a>
				</td>
				<td class="released">
					<div class="release-year">2014</div>
				</td>
				<td class="duration">
					<div class="composition-time">
						<time class="published" datetime="2017-03-24T18:18">6:17</time>
					</div>
				</td>
				<td class="spotify">
					<svg class="composition-icon" width="22" height="22">
						<use xlink:href="#olymp-spotify-icon"></use>
					</svg>
				</td>
				<td class="remove">
					<a href="#" class="remove-icon">
						<svg class="olymp-close-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
					</a>
				</td>
			</tr>
			</tbody>
		</table>
	</div>

	<!----------------------------------------------- MediaPlayer ----------------------------------------------------->

	<audio id="mediaplayer" data-showplaylist="true">
		<source src="mp3/Twice.mp3" title="Track 1" data-poster="track1.webp" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 2" data-poster="track2.webp" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 3" data-poster="track3.webp" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 4" data-poster="track4.webp" type="audio/mpeg">
	</audio>

	<!-- JS library for MediaPlayer -->
	<script defer src="js/libs/mediaelement-and-player.min.js"></script>
	<script defer src="js/libs/mediaelement-playlist-plugin.min.js"></script>
	<!-- ...end JS library for MediaPlayer -->

	<!------------------------------------------------ ... end MediaPlayer -------------------------------------------->

</div>

<!-- ... end Playlist Popup -->


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