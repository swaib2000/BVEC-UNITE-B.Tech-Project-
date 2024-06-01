<?php
if(isset($_SESSION['user_id']))
{
?>
	<ul class="left-menu">
		<li>
			<a href="#" class="js-sidebar-open">
				<svg class="olymp-close-icon left-menu-icon"><use xlink:href="#olymp-close-icon"></use></svg>
				<span class="left-menu-title">Collapse Menu</span>
			</a>
		</li>
		<li>
			<a href="dashboard.php">
				<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="DASHBOARD"><use xlink:href="#olymp-newsfeed-icon"></use></svg>
				<span class="left-menu-title">DASHBOARD</span>
			</a>
		</li>
		<li>
			<a href="monitor.php">
				<svg class="olymp-star-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Monitor"><use xlink:href="#olymp-star-icon"></use></svg>
				<span class="left-menu-title">Monitor</span>
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
				<span class="left-menu-title">DISCUSSIONS</span>
			</a>
		</li>
		<li>
			<a href="studymaterialpanel.php">
				<svg class="olymp-settings-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Study Material"><use xlink:href="#olymp-settings-icon"></use></svg>
				<span class="left-menu-title">Study Material</span>
			</a>
		</li>
		<li>
			<a href="quizpanel.php">
				<svg class="olymp-trophy-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Quiz"><use xlink:href="#olymp-trophy-icon"></use></svg>
				<span class="left-menu-title">Quiz</span>
			</a>
		</li>
		<li>
			<a href="noticepanel.php">
				<svg class="olymp-calendar-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="NOTICE"><use xlink:href="#olymp-calendar-icon"></use></svg>
				<span class="left-menu-title">NOTICE</span>
			</a>
		</li>
		<li>
			<a href="studentaccount.php">
				<svg class="olymp-camera-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Student Accounts"><use xlink:href="#olymp-camera-icon"></use></svg>
				<span class="left-menu-title">Student Accounts</span>
			</a>
		</li>
		<li>
			<a href="staffpanel.php">
				<svg class="olymp-cupcake-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Staff Accounts"><use xlink:href="#olymp-cupcake-icon"></use></svg>
				<span class="left-menu-title">Staff Accounts</span>
			</a>
		</li>
		<li>
			<a href="settingspanel.php">
				<svg class="olymp-weather-sunny-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Settigns"><use xlink:href="#olymp-weather-sunny-icon"></use></svg>
				<span class="left-menu-title">Settigns</span>
			</a>
		</li>
	</ul>
<?php
}
?>
<?php
if(isset($_SESSION['student_id']))
{
?>
	<ul class="left-menu">
		<li>
			<a href="#" class="js-sidebar-open">
				<svg class="olymp-close-icon left-menu-icon"><use xlink:href="#olymp-close-icon"></use></svg>
				<span class="left-menu-title">Collapse Menu</span>
			</a>
		</li>
		<li>
			<a href="wallpost.php">
				<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="WALLPOST"><use xlink:href="#olymp-newsfeed-icon"></use></svg>
				<span class="left-menu-title">WALLPOST</span>
			</a>
		</li>
		<li>
			<a href="groupchat.php">
				<svg class="olymp-star-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Group Chat"><use xlink:href="#olymp-star-icon"></use></svg>
				<span class="left-menu-title">Group Chat</span>
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
				<span class="left-menu-title">DISCUSSIONS</span>
			</a>
		</li>
		<li>
			<a href="quizpanel.php">
				<svg class="olymp-trophy-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Quiz"><use xlink:href="#olymp-trophy-icon"></use></svg>
				<span class="left-menu-title">Quiz</span>
			</a>
		</li>
		<li>
			<a href="studymaterialpanel.php">
				<svg class="olymp-settings-icon left-menu-icon"  data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Study Material"><use xlink:href="#olymp-settings-icon"></use></svg>
				<span class="left-menu-title">Study Material</span>
			</a>
		</li>
	</ul>
<?php
}
?>