<!-- Fixed Sidebar Left -->
<div class="fixed-sidebar left">
	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

		<a href="index.php" class="logo">
			<div class="img-wrap">
				<img loading="lazy" src="images/college.png" alt="<?php echo $_SESSION['project_title']; ?>" width="34" height="34">
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-menu-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="OPEN MENU"><use xlink:href="#olymp-menu-icon"></use></svg>
					</a>
				</li>
<?php
if(isset($_SESSION['student_id']))
{
?>
				<li>
					<a href="wallpost.php">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="WALLPOST"><use xlink:href="#olymp-newsfeed-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="groupchat.php">
						<svg class="olymp-star-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Group Chat"><use xlink:href="#olymp-star-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="<?php
					if($_SESSION['user_type'] == "Admin")
					{
						echo "viewdiscussion.php"; 
					}
					else
					{
						echo "discussiondisplay.php"; 
					}
?>">
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="DISCUSSIONS"><use xlink:href="#olymp-happy-faces-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="quizpanel.php">
						<svg class="olymp-trophy-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Quiz"><use xlink:href="#olymp-trophy-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="studymaterialpanel.php">
						<svg class="olymp-settings-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Study Material"><use xlink:href="#olymp-settings-icon"></use></svg>
					</a>
				</li>
<?php
}
if(isset($_SESSION['user_id']))
{
?>
				<li>
					<a href="dashboard.php">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="DASHBOARD"><use xlink:href="#olymp-newsfeed-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="monitor.php">
						<svg class="olymp-star-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Monitor"><use xlink:href="#olymp-star-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="<?php
					if($_SESSION['user_type'] == "Admin")
					{
						echo "viewdiscussion.php"; 
					}
					else
					{
						echo "discussiondisplay.php"; 
					}
?>">
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="DISCUSSIONS"><use xlink:href="#olymp-happy-faces-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="studymaterialpanel.php">
						<svg class="olymp-settings-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Study Material"><use xlink:href="#olymp-settings-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="quizpanel.php">
						<svg class="olymp-trophy-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Quiz"><use xlink:href="#olymp-trophy-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="noticepanel.php">
						<svg class="olymp-calendar-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="NOTICE"><use xlink:href="#olymp-calendar-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="studentaccount.php">
						<svg class="olymp-camera-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Student Accounts"><use xlink:href="#olymp-camera-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="staffpanel.php">
						<svg class="olymp-weather-sunny-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Staff Accounts"><use xlink:href="#olymp-weather-sunny-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="settingspanel.php">
						<svg class="olymp-stats-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Settigns"><use xlink:href="#olymp-stats-icon"></use></svg>
					</a>
				</li>
<?php
}
?>
			</ul>
		</div>
	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
		<a href="index.php" class="logo">
			<div class="img-wrap">
				<img loading="lazy" src="images/college.png" alt="<?php echo $_SESSION['project_title']; ?>" width="34" height="34">
			</div>
			<div class="title-block">
				<h6 class="logo-title"><?php echo $_SESSION['project_title']; ?></h6>
			</div>
		</a>
	<div class="mCustomScrollbar" data-mcs-theme="dark"><?php include("leftmenu.php"); ?></div>
	</div>
</div>
<!-- ... end Fixed Sidebar Left -->
<!-- Fixed Sidebar Left -->
<div class="fixed-sidebar left fixed-sidebar-responsive">

	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
		<a href="index.php" class="logo js-sidebar-open">
			<img loading="lazy" src="images/college.png" alt="<?php echo $_SESSION['project_title']; ?>" width="34" height="34">
		</a>

	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
		<a href="#" class="logo">
			<div class="img-wrap">
				<img loading="lazy" src="images/college.png" alt="<?php echo $_SESSION['project_title']; ?>" width="34" height="34">
			</div>
			<div class="title-block">
				<h6 class="logo-title"><?php echo $_SESSION['project_title']; ?></h6>
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="control-block">
<?php
if(isset($_SESSION['user_id']))
{
?>
	<div class="author-page author vcard inline-items">
		<div class="author-thumb">
	<?php
	if(file_exists("userprofileimages/$rsuserprofile[user_img]"))
	{
	echo "<img alt='author' src='userprofileimages/" . $rsuserprofile['user_img'] . "' width='36' height='36' class='avatar'>";
	}
	else if($rsuserprofile['user_img'] == "")
	{
	echo '<img alt="author" src="img/admindefault.png" width="36" height="36" class="avatar">';
	}
	else
	{
	echo '<img alt="author" src="img/admindefault.png" width="36" height="36" class="avatar">';
	}
	?>
	<!--<span class="icon-status online"></span>-->
		</div>
		<a href="02-ProfilePage.php" class="author-name fn">
			<div class="author-title">
				<?php echo $rsuserprofile['name']; ?> <svg class="olymp-dropdown-arrow-icon"><use xlink:href="#olymp-dropdown-arrow-icon"></use></svg>
			</div>
			<span class="author-subtitle"><?php echo $rsuserprofile['user_type']; ?></span>
		</a>
	</div>
<?php
}
if(isset($_SESSION['student_id']))
{
?>
	<div class="author-page author vcard inline-items">
		<div class="author-thumb">
			<img alt="author" src="<?php echo $profileimg; ?>" style="width: 36px; height: 36px;" class="avatar">
		</div>
		<a href="studentprofile.php" class="author-name fn">
			<div class="author-title">
				<?php echo $rsstudentprofile['student_name']; ?> (<?php echo $rsstudentprofile['roll_no']; ?>)<svg class="olymp-dropdown-arrow-icon"><use xlink:href="#olymp-dropdown-arrow-icon"></use></svg>
			</div>
			<span class="author-subtitle"><?php echo $rsstudentprofile['course']; ?> - <?php echo $rsstudentprofile['semester']; ?></span>
		</a>
	</div>
<?php
}
?>
			</div>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">MAIN SECTIONS</h6>
			</div>
<?php
include("leftmenu.php");
include("profilemenu.php"); 
?>
		</div>
	</div>

</div>
<!-- ... end Fixed Sidebar Left -->