<!DOCTYPE html>
<html lang="en">
<head>

	<title>Profile Page - Photos</title>

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
						<svg class="olymp-menu-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="OPEN MENU"><use xlink:href="#olymp-menu-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="03-Newsfeed.php">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="NEWSFEED"><use xlink:href="#olymp-newsfeed-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="16-FavPagesFeed.php">
						<svg class="olymp-star-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="FAV PAGE"><use xlink:href="#olymp-star-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="17-FriendGroups.php">
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="FRIEND GROUPS"><use xlink:href="#olymp-happy-faces-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="18-MusicAndPlaylists.php">
						<svg class="olymp-headphones-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="MUSIC&PLAYLISTS"><use xlink:href="#olymp-headphones-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="19-WeatherWidget.php">
						<svg class="olymp-weather-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="WEATHER APP"><use xlink:href="#olymp-weather-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="20-CalendarAndEvents-MonthlyCalendar.php">
						<svg class="olymp-calendar-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="CALENDAR AND EVENTS"><use xlink:href="#olymp-calendar-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="24-CommunityBadges.php">
						<svg class="olymp-badge-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Community Badges"><use xlink:href="#olymp-badge-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="25-FriendsBirthday.php">
						<svg class="olymp-cupcake-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Friends Birthdays"><use xlink:href="#olymp-cupcake-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="26-Statistics.php">
						<svg class="olymp-stats-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Account Stats"><use xlink:href="#olymp-stats-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="27-ManageWidgets.php">
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Manage Widgets"><use xlink:href="#olymp-manage-widgets-icon"></use></svg>
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
						<svg class="olymp-close-icon left-menu-icon"><use xlink:href="#olymp-close-icon"></use></svg>
						<span class="left-menu-title">Collapse Menu</span>
					</a>
				</li>
				<li>
					<a href="03-Newsfeed.php">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="NEWSFEED"><use xlink:href="#olymp-newsfeed-icon"></use></svg>
						<span class="left-menu-title">Newsfeed</span>
					</a>
				</li>
				<li>
					<a href="16-FavPagesFeed.php">
						<svg class="olymp-star-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="FAV PAGE"><use xlink:href="#olymp-star-icon"></use></svg>
						<span class="left-menu-title">Fav Pages Feed</span>
					</a>
				</li>
				<li>
					<a href="17-FriendGroups.php">
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="FRIEND GROUPS"><use xlink:href="#olymp-happy-faces-icon"></use></svg>
						<span class="left-menu-title">Friend Groups</span>
					</a>
				</li>
				<li>
					<a href="18-MusicAndPlaylists.php">
						<svg class="olymp-headphones-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="MUSIC&PLAYLISTS"><use xlink:href="#olymp-headphones-icon"></use></svg>
						<span class="left-menu-title">Music & Playlists</span>
					</a>
				</li>
				<li>
					<a href="19-WeatherWidget.php">
						<svg class="olymp-weather-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="WEATHER APP"><use xlink:href="#olymp-weather-icon"></use></svg>
						<span class="left-menu-title">Weather App</span>
					</a>
				</li>
				<li>
					<a href="20-CalendarAndEvents-MonthlyCalendar.php">
						<svg class="olymp-calendar-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="CALENDAR AND EVENTS"><use xlink:href="#olymp-calendar-icon"></use></svg>
						<span class="left-menu-title">Calendar and Events</span>
					</a>
				</li>
				<li>
					<a href="24-CommunityBadges.php">
						<svg class="olymp-badge-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Community Badges"><use xlink:href="#olymp-badge-icon"></use></svg>
						<span class="left-menu-title">Community Badges</span>
					</a>
				</li>
				<li>
					<a href="25-FriendsBirthday.php">
						<svg class="olymp-cupcake-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Friends Birthdays"><use xlink:href="#olymp-cupcake-icon"></use></svg>
						<span class="left-menu-title">Friends Birthdays</span>
					</a>
				</li>
				<li>
					<a href="26-Statistics.php">
						<svg class="olymp-stats-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Account Stats"><use xlink:href="#olymp-stats-icon"></use></svg>
						<span class="left-menu-title">Account Stats</span>
					</a>
				</li>
				<li>
					<a href="27-ManageWidgets.php">
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Manage Widgets"><use xlink:href="#olymp-manage-widgets-icon"></use></svg>
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
							James Spiegel <svg class="olymp-dropdown-arrow-icon"><use xlink:href="#olymp-dropdown-arrow-icon"></use></svg>
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
						<svg class="olymp-close-icon left-menu-icon"><use xlink:href="#olymp-close-icon"></use></svg>
						<span class="left-menu-title">Collapse Menu</span>
					</a>
				</li>
				<li>
					<a href="mobile-index.php">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="NEWSFEED"><use xlink:href="#olymp-newsfeed-icon"></use></svg>
						<span class="left-menu-title">Newsfeed</span>
					</a>
				</li>
				<li>
					<a href="Mobile-28-YourAccount-PersonalInformation.php">
						<svg class="olymp-star-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="FAV PAGE"><use xlink:href="#olymp-star-icon"></use></svg>
						<span class="left-menu-title">Fav Pages Feed</span>
					</a>
				</li>
				<li>
					<a href="mobile-29-YourAccount-AccountSettings.php">
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="FRIEND GROUPS"><use xlink:href="#olymp-happy-faces-icon"></use></svg>
						<span class="left-menu-title">Friend Groups</span>
					</a>
				</li>
				<li>
					<a href="Mobile-30-YourAccount-ChangePassword.php">
						<svg class="olymp-headphones-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="MUSIC&PLAYLISTS"><use xlink:href="#olymp-headphones-icon"></use></svg>
						<span class="left-menu-title">Music & Playlists</span>
					</a>
				</li>
				<li>
					<a href="Mobile-31-YourAccount-HobbiesAndInterests.php">
						<svg class="olymp-weather-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="WEATHER APP"><use xlink:href="#olymp-weather-icon"></use></svg>
						<span class="left-menu-title">Weather App</span>
					</a>
				</li>
				<li>
					<a href="Mobile-32-YourAccount-EducationAndEmployement.php">
						<svg class="olymp-calendar-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="CALENDAR AND EVENTS"><use xlink:href="#olymp-calendar-icon"></use></svg>
						<span class="left-menu-title">Calendar and Events</span>
					</a>
				</li>
				<li>
					<a href="Mobile-33-YourAccount-Notifications.php">
						<svg class="olymp-badge-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Community Badges"><use xlink:href="#olymp-badge-icon"></use></svg>
						<span class="left-menu-title">Community Badges</span>
					</a>
				</li>
				<li>
					<a href="Mobile-34-YourAccount-ChatMessages.php">
						<svg class="olymp-cupcake-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Friends Birthdays"><use xlink:href="#olymp-cupcake-icon"></use></svg>
						<span class="left-menu-title">Friends Birthdays</span>
					</a>
				</li>
				<li>
					<a href="Mobile-35-YourAccount-FriendsRequests.php">
						<svg class="olymp-stats-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Account Stats"><use xlink:href="#olymp-stats-icon"></use></svg>
						<span class="left-menu-title">Account Stats</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Manage Widgets"><use xlink:href="#olymp-manage-widgets-icon"></use></svg>
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

						<svg class="olymp-menu-icon"><use xlink:href="#olymp-menu-icon"></use></svg>

						<span>Profile Settings</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-star-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="FAV PAGE"><use xlink:href="#olymp-star-icon"></use></svg>

						<span>Create Fav Page</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-logout-icon"><use xlink:href="#olymp-logout-icon"></use></svg>

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
				<svg class="olymp-menu-icon"><use xlink:href="#olymp-menu-icon"></use></svg>
			</a>
		</div>

		<a href="#" class="olympus-chat inline-items js-chat-open">
			<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
							</li>
						</ul>

					</div>
				</li>
			</ul>

		</div>

		<div class="search-friend inline-items">
			<form class="form-group" >
				<input class="form-control" placeholder="Search Friends..." value="" type="text">
			</form>

			<a href="29-YourAccount-AccountSettings.php" class="settings">
				<svg class="olymp-settings-icon"><use xlink:href="#olymp-settings-icon"></use></svg>
			</a>

			<a href="#" class="js-sidebar-open">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>
		</div>

		<a href="#" class="olympus-chat inline-items js-chat-open">

			<h6 class="olympus-chat-title">OLYMPUS CHAT</h6>
			<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
		</a>

	</div>
</div>

<!-- ... end Fixed Sidebar Right -->


<!-- Fixed Sidebar Right-Responsive -->

<div class="fixed-sidebar right fixed-sidebar-responsive" id="sidebar-right-responsive">

	<div class="fixed-sidebar-right sidebar--small">
		<a href="#" class="js-sidebar-open">
			<svg class="olymp-menu-icon"><use xlink:href="#olymp-menu-icon"></use></svg>
			<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="#olymp-block-from-chat-icon"></use></svg>
							</li>
						</ul>

					</div>
				</li>
			</ul>

		</div>

		<div class="search-friend inline-items">
			<form class="form-group" >
				<input class="form-control" placeholder="Search Friends..." value="" type="text">
			</form>

			<a href="29-YourAccount-AccountSettings.php" class="settings">
				<svg class="olymp-settings-icon"><use xlink:href="#olymp-settings-icon"></use></svg>
			</a>

			<a href="#" class="js-sidebar-open">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>
		</div>

		<a href="#" class="olympus-chat inline-items js-chat-open">

			<h6 class="olympus-chat-title">OLYMPUS CHAT</h6>
			<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
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
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="#olymp-magnifying-glass-icon"></use></svg>
				</button>
			</div>
		</form>

		<a href="#" class="link-find-friend">Find Friends</a>

		<div class="control-block">

			<div class="control-icon more has-items">
				<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
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
									<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
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
									<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
								</div>
							</li>

							<li class="accepted">
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar57-sm.webp" alt="author" width="34" height="34">
								</div>
								<div class="notification-event">
									You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>.
								</div>
								<span class="notification-icon">
									<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="#olymp-little-delete"></use></svg>
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
									<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
								</div>
							</li>

						</ul>
					</div>

					<a href="#" class="view-all bg-blue">Check all your Events</a>
				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
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
									<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
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
									<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
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
									<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
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
									<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
								</div>
							</li>
						</ul>
					</div>

					<a href="#" class="view-all bg-purple">View All Messages</a>
				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-thunder-icon"><use xlink:href="#olymp-thunder-icon"></use></svg>

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
									<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="#olymp-little-delete"></use></svg>
								</div>
							</li>

							<li class="un-read">
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar63-sm.webp" alt="author" width="34" height="34">
								</div>
								<div class="notification-event">
									<div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="#olymp-little-delete"></use></svg>
								</div>
							</li>

							<li class="with-comment-photo-wrap">								<div class="with-comment-photo">									<div class="author-thumb">										<img loading="lazy" src="img/avatar64-sm.webp" width="34" height="34" alt="author">									</div>									<div class="notification-event">										<div>											<a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your											<a href="#" class="notification-link">photo</a>.										</div>										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>									</div>									<span class="notification-icon">										<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>									</span>								</div>								<div class="comment-photo">									<img loading="lazy" src="img/comment-photo1.webp" alt="photo" width="40" height="40">									<span>“She looks incredible in that outfit! We should see each...”</span>								</div>								<div class="more">									<svg class="olymp-three-dots-icon">										<use xlink:href="#olymp-three-dots-icon"></use>									</svg>									<svg class="olymp-little-delete">										<use xlink:href="#olymp-little-delete"></use>									</svg>								</div>							</li>

							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar65-sm.webp" alt="author" width="34" height="34">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="#olymp-little-delete"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar66-sm.webp" alt="author" width="34" height="34">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="#olymp-little-delete"></use></svg>
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

										<svg class="olymp-menu-icon"><use xlink:href="#olymp-menu-icon"></use></svg>

										<span>Profile Settings</span>
									</a>
								</li>
								<li>
									<a href="36-FavPage-SettingsAndCreatePopup.php">
										<svg class="olymp-star-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="FAV PAGE"><use xlink:href="#olymp-star-icon"></use></svg>

										<span>Create Fav Page</span>
									</a>
								</li>
								<li>
									<a href="#">
										<svg class="olymp-logout-icon"><use xlink:href="#olymp-logout-icon"></use></svg>

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
									<svg class="olymp-check-icon"><use xlink:href="#olymp-check-icon"></use></svg>
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
						James Spiegel <svg class="olymp-dropdown-arrow-icon"><use xlink:href="#olymp-dropdown-arrow-icon"></use></svg>
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
											<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
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
								<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
							</a>

							<a href="#" class="btn btn-control bg-purple">
								<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
							</a>

							<div class="btn btn-control bg-primary more">
								<svg class="olymp-settings-icon"><use xlink:href="#olymp-settings-icon"></use></svg>

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
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title">James’s Photo Gallery</div>

					<div class="block-btn align-right">
						<a href="#" data-bs-toggle="modal" data-bs-target="#create-photo-album" class="btn btn-primary btn-md-2">Create Album  +</a>

						<a href="#" data-bs-toggle="modal" data-bs-target="#update-header-photo" class="btn btn-md-2 btn-border-think custom-color c-grey">Add Photos</a>
					</div>

					<ul class="nav nav-tabs photo-gallery" role="tablist">
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#photo-page" role="tab">
								<svg class="olymp-photos-icon"><use xlink:href="#olymp-photos-icon"></use></svg>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link active" data-bs-toggle="tab" href="#album-page" role="tab">
								<svg class="olymp-albums-icon"><use xlink:href="#olymp-albums-icon"></use></svg>
							</a>
						</li>

					</ul>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane fade" id="photo-page" role="tabpanel">

					<div class="photo-album-wrapper">

						
						
						<div class="photo-item half-width">
							<img loading="lazy" src="img/photo-item1.webp" alt="photo" width="577" height="283">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v1" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img loading="lazy" src="img/photo-item2.webp" alt="photo" width="332" height="284">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img loading="lazy" src="img/photo-item3.webp" alt="photo" width="283" height="283">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img loading="lazy" src="img/photo-item4.webp" alt="photo" width="283" height="283">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img loading="lazy" src="img/photo-item5.webp" alt="photo" width="283" height="283">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img loading="lazy" src="img/photo-item6.webp" alt="photo" width="332" height="284">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img loading="lazy" src="img/photo-item7.webp" alt="photo" width="283" height="283">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img loading="lazy" src="img/photo-item8.webp" alt="photo" width="283" height="283">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img loading="lazy" src="img/photo-item9.webp" alt="photo" width="283" height="283">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img loading="lazy" src="img/photo-item10.webp" alt="photo" width="283" height="283">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img loading="lazy" src="img/photo-item11.webp" alt="photo" width="283" height="283">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>
						

						<a href="#" class="btn btn-control btn-more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>

					</div>

				</div>

				<div class="tab-pane fade active show" id="album-page" role="tabpanel">

					<div class="photo-album-wrapper">

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

						<div class="photo-album-item-wrap col-4-width">
							
							
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

						<div class="photo-album-item-wrap col-4-width">
							
							
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

						<div class="photo-album-item-wrap col-4-width">
							
							
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

						<div class="photo-album-item-wrap col-4-width">
							
							<div class="photo-album-item">
								<div class="photo-item">
									<img loading="lazy" src="img/photo-album3.webp" alt="photo" width="332" height="284">
									<div class="overlay overlay-dark"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
										<span>324</span>
									</a>
							
									<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v1" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="#" class="title h5">Graffiti & Street Art</a>
									<span class="sub-title">Last Added: 16 hours ago</span>
							
									<div class="swiper-container" data-slide="fade">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<ul class="friends-harmonic">
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

						<div class="photo-album-item-wrap col-4-width">
							
							
							<div class="photo-album-item">
								<div class="photo-item">
									<img loading="lazy" src="img/photo-album4.webp" alt="photo" width="332" height="284">
									<div class="overlay overlay-dark"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
										<span>324</span>
									</a>
							
									<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v1" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="#" class="title h5">Amazing Landscapes</a>
									<span class="sub-title">Last Added: 13 mins ago</span>
							
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
														<a href="#" class="all-users">+3</a>
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

						<div class="photo-album-item-wrap col-4-width">
							
							
							<div class="photo-album-item">
								<div class="photo-item">
									<img loading="lazy" src="img/photo-item6.webp" alt="photo" width="332" height="284">
									<div class="overlay overlay-dark"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
										<span>324</span>
									</a>
							
									<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v1" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="#" class="title h5">The Majestic Canyon</a>
									<span class="sub-title">Last Added: 57 mins ago</span>
							
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

						<div class="photo-album-item-wrap col-4-width">
							
							
							<div class="photo-album-item">
								<div class="photo-item">
									<img loading="lazy" src="img/photo-album5.webp" alt="photo" width="332" height="284">
									<div class="overlay overlay-dark"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
										<span>324</span>
									</a>
							
									<a href="#" data-bs-toggle="modal" data-bs-target="#open-photo-popup-v1" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="#" class="title h5">Winter 2015 Portraits</a>
									<span class="sub-title">Last Added: 1 year ago</span>
							
									<div class="swiper-container" data-slide="fade">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<ul class="friends-harmonic">
													<li>
														<a href="#">
															<img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28" height="28">
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

		</div>
	</div>
</div>




<!-- Window-popup Open Photo Popup V1 -->

<div class="modal fade modal-has-swiper" id="open-photo-popup-v1" tabindex="-1" role="dialog" aria-labelledby="open-photo-popup-v1" aria-hidden="true">
	<div class="modal-dialog window-popup open-photo-popup open-photo-popup-v1" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-body">
				<div class="open-photo-thumb">
					<div class="swiper-container" data-slide="fade">
						<div class="swiper-wrapper">

							<div class="swiper-slide">
								<div class="photo-item">
									<img loading="lazy" src="img/open-photo1.webp" alt="photo" width="970" height="646">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item">
									<img loading="lazy" src="img/open-photo1.webp" alt="photo" width="970" height="646">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item">
									<img loading="lazy" src="img/open-photo1.webp" alt="photo" width="970" height="646">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

						</div>

						<!--Prev Next Arrows-->

						<svg class="btn-next-without olymp-popup-right-arrow"><use xlink:href="#olymp-popup-right-arrow"></use></svg>

						<svg class="btn-prev-without olymp-popup-left-arrow"><use xlink:href="#olymp-popup-left-arrow"></use></svg>
					</div>
				</div>

				<div class="open-photo-content">

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

							<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
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

						<p>Here’s a photo from last month’s photoshoot. We really had a great time and got a batch of incredible shots for the new catalog.</p>

						<p>With: <a href="#">Jessy Owen</a>, <a href="#">Marina Valentine</a></p>

						<div class="post-additional-info inline-items">

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
								<span>148</span>
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
								<a href="#">Diana</a>, <a href="#">Nicholas</a> and
								<br>13 more liked this
							</div>


							<div class="comments-shared">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
									<span>61</span>
								</a>

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
									<span>32</span>
								</a>
							</div>


						</div>

						<div class="control-block-button post-control-button">

							<a href="#" class="btn btn-control">
								<svg class="olymp-like-post-icon"><use xlink:href="#olymp-like-post-icon"></use></svg>
							</a>

							<a href="#" class="btn btn-control">
								<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
							</a>

							<a href="#" class="btn btn-control">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
							</a>

						</div>

					</article>

					<div class="mCustomScrollbar" data-mcs-theme="dark">

						<ul class="comments-list">
							<li class="comment-item">
								<div class="post__author author vcard inline-items">
									<img loading="lazy" src="img/avatar48-sm.webp" alt="author" width="28" height="28">

									<div class="author-date">
										<a class="h6 post__author-name fn" href="#">Marina Valentine</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												46 mins ago
											</time>
										</div>
									</div>

									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>

								</div>

								<p>I had a great time too!! We should do it again!</p>

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
									<span>8</span>
								</a>
								<a href="#" class="reply">Reply</a>
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

									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>

								</div>

								<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
									<span>7</span>
								</a>
								<a href="#" class="reply">Reply</a>

							</li>
						</ul>

					</div>

					<form class="comment-form inline-items">

						<div class="post__author author vcard inline-items">
							<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

							<div class="form-group with-icon-right ">
								<textarea class="form-control" placeholder="Press Enter to post..."></textarea>
								<div class="add-options-message">
									<a href="#" class="options-message">
										<svg class="olymp-camera-icon"><use xlink:href="#olymp-camera-icon"></use></svg>
									</a>
								</div>
							</div>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Open Photo Popup V1 -->

<!-- Window-popup Open Photo Popup V2 -->

<div class="modal fade modal-has-swiper" id="open-photo-popup-v2" tabindex="-1" role="dialog" aria-labelledby="open-photo-popup-v2" aria-hidden="true">
	<div class="modal-dialog window-popup open-photo-popup open-photo-popup-v2" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-body">
				<div class="open-photo-thumb">

					<div class="swiper-container" data-effect="fade" data-autoplay="4000">

						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img loading="lazy" src="img/open-photo2.webp" alt="photo" width="800" height="532">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img loading="lazy" src="img/open-photo2.webp" alt="photo" width="800" height="532">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img loading="lazy" src="img/open-photo2.webp" alt="photo" width="800" height="532">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img loading="lazy" src="img/open-photo2.webp" alt="photo" width="800" height="532">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img loading="lazy" src="img/open-photo2.webp" alt="photo" width="800" height="532">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img loading="lazy" src="img/open-photo2.webp" alt="photo" width="800" height="532">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img loading="lazy" src="img/open-photo2.webp" alt="photo" width="800" height="532">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img loading="lazy" src="img/open-photo2.webp" alt="photo" width="800" height="532">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img loading="lazy" src="img/open-photo2.webp" alt="photo" width="800" height="532">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>


						</div>

					</div>

					<!--Pagination tabs-->

					<div class="slider-slides">
						<a href="#" class="slides-item ">
							<img loading="lazy" src="img/photo-tabs1.webp" alt="slide" width="100" height="100">
							<div class="overlay overlay-dark"></div>
						</a>

						<a href="#" class="slides-item ">
							<img loading="lazy" src="img/photo-tabs2.webp" alt="slide" width="100" height="100">
							<div class="overlay overlay-dark"></div>
						</a>

						<a href="#" class="slides-item ">
							<img loading="lazy" src="img/photo-tabs3.webp" alt="slide" width="100" height="100">
							<div class="overlay overlay-dark"></div>
						</a>

						<a href="#" class="slides-item ">
							<img loading="lazy" src="img/photo-tabs4.webp" alt="slide" width="100" height="100">
							<div class="overlay overlay-dark"></div>
						</a>
						<a href="#" class="slides-item ">
							<img loading="lazy" src="img/photo-tabs5.webp" alt="slide" width="100" height="100">
							<div class="overlay overlay-dark"></div>
						</a>

						<a href="#" class="slides-item ">
							<img loading="lazy" src="img/photo-tabs6.webp" alt="slide" width="100" height="100">
							<div class="overlay overlay-dark"></div>
						</a>

						<a href="#" class="slides-item ">
							<img loading="lazy" src="img/photo-tabs7.webp" alt="slide" width="100" height="100">
							<div class="overlay overlay-dark"></div>
						</a>

						<a href="#" class="slides-item ">
							<img loading="lazy" src="img/photo-tabs8.webp" alt="slide" width="100" height="100">
							<div class="overlay overlay-dark"></div>
						</a>

						<a href="#" class="slides-item ">
							<img loading="lazy" src="img/photo-tabs9.webp" alt="slide" width="100" height="100">
							<div class="overlay overlay-dark"></div>
						</a>

						<!--Prev Next Arrows-->

						<svg class="btn-next olymp-popup-right-arrow"><use xlink:href="#olymp-popup-right-arrow"></use></svg>

						<svg class="btn-prev olymp-popup-left-arrow"><use xlink:href="#olymp-popup-left-arrow"></use></svg>

					</div>

				</div>

				<div class="open-photo-content">

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

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
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

				<p>Here’s a photo from last month’s photoshoot. We really had a great time and got a batch of incredible shots for the new catalog.</p>

				<p>With: <a href="#">Jessy Owen</a>, <a href="#">Marina Valentine</a></p>

				<div class="post-additional-info inline-items">

					<a href="#" class="post-add-icon inline-items">
						<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
						<span>148</span>
					</a>


					<div class="comments-shared">
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
							<span>61</span>
						</a>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
							<span>32</span>
						</a>
					</div>


				</div>

				<div class="control-block-button post-control-button">

					<a href="#" class="btn btn-control">
						<svg class="olymp-like-post-icon"><use xlink:href="#olymp-like-post-icon"></use></svg>
					</a>

					<a href="#" class="btn btn-control">
						<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
					</a>

					<a href="#" class="btn btn-control">
						<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
					</a>

				</div>

			</article>

			<div class="mCustomScrollbar" data-mcs-theme="dark">

				<ul class="comments-list">
					<li class="comment-item">
						<div class="post__author author vcard inline-items">
							<img loading="lazy" src="img/avatar48-sm.webp" alt="author" width="28" height="28">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="#">Marina Valentine</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										46 mins ago
									</time>
								</div>
							</div>

							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>

						</div>

						<p>I had a great time too!! We should do it again!</p>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>8</span>
						</a>
						<a href="#" class="reply">Reply</a>
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

							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>

						</div>

						<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>7</span>
						</a>
						<a href="#" class="reply">Reply</a>

					</li>
				</ul>

			</div>

			<form class="comment-form inline-items">

				<div class="post__author author vcard inline-items">
					<img loading="lazy" src="img/avatar73-sm.webp" alt="author" width="28" height="28">
					<div class="form-group with-icon-right ">
						<textarea class="form-control" placeholder="Press Enter to post..." ></textarea>
						<div class="add-options-message">
							<a href="#" class="options-message">
								<svg class="olymp-camera-icon"><use xlink:href="#olymp-camera-icon"></use></svg>
							</a>
						</div>
					</div>
				</div>

			</form>

		</div>
			</div>
		</div>
	</div>
</div>

<!-- Window-popup Open Photo Popup V2 -->
<!-- Window-popup Create Photo Album -->

<div class="modal fade" id="create-photo-album" tabindex="-1" role="dialog" aria-labelledby="create-photo-album" aria-hidden="true">
	<div class="modal-dialog window-popup create-photo-album" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Create Photo Album</h6>
			</div>

			<div class="modal-body">

			<form class="form-group label-floating">
				<label class="control-label">Album Name</label>
				<input class="form-control" placeholder="" type="text" value="Rock Garden Festival - Day 4">
			</form>

			<div class="photo-album-wrapper">
				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item create-album">
						<div class="content">
							<a href="#" class="btn btn-control bg-primary">
								<svg class="olymp-plus-icon"><use xlink:href="#olymp-plus-icon"></use></svg>
							</a>

							<a href="#" class="title h5">Add More Photos...</a>
						</div>
					</div>
				</div>

				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item">
						<div class="form-group">
							<img loading="lazy" src="img/photo-album6.webp" alt="photo" width="224" height="159">
							<textarea class="form-control" placeholder="Write something about this photo..."></textarea>
						</div>

						<form class="form-group">
							<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>

							<select class="form-select" >
								<option title="Green Goo Rock" >Green Goo Rock</option>

								<option title="Mathilda Brinker">Mathilda Brinker</option>

								<option title="Marina Valentine">Marina Valentine</option>

								<option title="Dave Marinara">Dave Marinara</option>

								<option title="Rachel Howlett">Rachel Howlett</option>
							</select>
						</form>
					</div>
				</div>

				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item">
						<div class="form-group">
							<img loading="lazy" src="img/photo-album7.webp" alt="photo" width="224" height="158">
							<textarea class="form-control" placeholder="Write something about this photo..."></textarea>
						</div>
						<form class="form-group">
							<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>

							<select class="form-select" >
								<option title="Green Goo Rock" >Green Goo Rock</option>

								<option title="Mathilda Brinker">Mathilda Brinker</option>

								<option title="Marina Valentine">Marina Valentine</option>

								<option title="Dave Marinara">Dave Marinara</option>

								<option title="Rachel Howlett">Rachel Howlett</option>
							</select>
						</form>
					</div>
				</div>

				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item">
						<div class="form-group">
							<img loading="lazy" src="img/photo-album8.webp" alt="photo" width="224" height="158">
							<textarea class="form-control" placeholder="Write something about this photo..."></textarea>
						</div>

						<form class="form-group">
							<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>

							<select class="form-select" >
								<option title="Green Goo Rock" >Green Goo Rock</option>

								<option title="Mathilda Brinker">Mathilda Brinker</option>

								<option title="Marina Valentine">Marina Valentine</option>

								<option title="Dave Marinara">Dave Marinara</option>

								<option title="Rachel Howlett">Rachel Howlett</option>
							</select>
						</form>
					</div>
				</div>

				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item">
						<div class="form-group">
							<img loading="lazy" src="img/photo-album9.webp" alt="photo" width="224" height="158">
							<textarea class="form-control" placeholder="Write something about this photo..."></textarea>
						</div>

						<form class="form-group">
							<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>

							<select class="form-select" >
								<option title="Green Goo Rock" >Green Goo Rock</option>

								<option title="Mathilda Brinker">Mathilda Brinker</option>

								<option title="Marina Valentine">Marina Valentine</option>

								<option title="Dave Marinara">Dave Marinara</option>

								<option title="Rachel Howlett">Rachel Howlett</option>
							</select>
						</form>
					</div>
				</div>

				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item">
						<div class="form-group">
							<img loading="lazy" src="img/photo-album10.webp" alt="photo" width="224" height="158">
							<textarea class="form-control" placeholder="Write something about this photo..."></textarea>
						</div>

						<form class="form-group">
							<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>

							<select class="form-select" >
								<option title="Green Goo Rock" >Green Goo Rock</option>

								<option title="Mathilda Brinker">Mathilda Brinker</option>

								<option title="Marina Valentine">Marina Valentine</option>

								<option title="Dave Marinara">Dave Marinara</option>

								<option title="Rachel Howlett">Rachel Howlett</option>
							</select>
						</form>

					</div>
				</div>
			</div>

			<a href="#" class="btn btn-secondary btn-lg btn--half-width">Discard Everything</a>
			<a href="#" class="btn btn-primary btn-lg btn--half-width">Post Album</a>

		</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Create Photo Album -->
<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
	<div class="modal-dialog window-popup update-header-photo" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Update Header Photo</h6>
			</div>

			<div class="modal-body">
				<a href="#" class="upload-photo-item">
				<svg class="olymp-computer-icon"><use xlink:href="#olymp-computer-icon"></use></svg>

				<h6>Upload Photo</h6>
				<span>Browse your computer.</span>
			</a>

				<a href="#" class="upload-photo-item" data-bs-toggle="modal" data-bs-target="#choose-from-my-photo">

			<svg class="olymp-photos-icon"><use xlink:href="#olymp-photos-icon"></use></svg>

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
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-header">
				<h6 class="title">Choose from My Photos</h6>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-expanded="true">
							<svg class="olymp-photos-icon"><use xlink:href="#olymp-photos-icon"></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab" aria-expanded="false">
							<svg class="olymp-albums-icon"><use xlink:href="#olymp-albums-icon"></use></svg>
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


<a class="back-to-top" href="#">
	<svg class="back-icon" width="14" height="18"><use xlink:href="#olymp-back-to-top"></use></svg>
</a>




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