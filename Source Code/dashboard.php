<?php
include("header.php");
?>

<div class="header-spacer header-spacer-small"></div>
<!-- Main Header Groups -->

<div class="main-header">
	<div class="content-bg-wrap bg-group" style="background-image: url(img/networkimage.jpg);"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>DASHBOARD</h1>
				</div>
			</div>
		</div>
	</div>

	<img loading="lazy" class="img-bottom" src="img/group-bottom.webp" alt="friends" width="1087" height="148">
</div>

<!-- ... end Main Header Groups -->

<div class="container">
	<div class="row">
			
		
<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
	<div class="ui-block h-100 mb-0">
		<div class="ui-block-title">
			<div class="h6 title">Number of student records</div>
		</div>

		<div class="ui-block-content">
			<div class="swiper-container" data-slide="fade">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="statistics-slide">
							<div class="count-stat" data-swiper-parallax="-500"><?php
				  $sql= "SELECT * FROM student";
				  $qsql= mysqli_query($con,$sql);
                  echo mysqli_num_rows($qsql);
                  ?></div>
							<div class="title" data-swiper-parallax="-100">
								<span class="c-primary">Students</span> Registered
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		
		
<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
	<div class="ui-block h-100 mb-0">
		<div class="ui-block-title">
			<div class="h6 title">Number of Discussion Records</div>
		</div>

		<div class="ui-block-content">
			<div class="swiper-container" data-slide="fade">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="statistics-slide">
							<div class="count-stat" data-swiper-parallax="-500"><?php
				  $sql= "SELECT * FROM discussion_reply";
				  $qsql= mysqli_query($con,$sql);
                  echo mysqli_num_rows($qsql);
                  ?></div>
							<div class="title" data-swiper-parallax="-100">
								<span class="c-primary">Discussions</span> in WallPost
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
			
<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
	<div class="ui-block h-100 mb-0">
		<div class="ui-block-title">
			<div class="h6 title">	Number of WallPost Comments</div>
		</div>

		<div class="ui-block-content">
			<div class="swiper-container" data-slide="fade">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="statistics-slide">
							<div class="count-stat" data-swiper-parallax="-500"><?php
				  $sql= "SELECT * FROM notice";
				  $qsql= mysqli_query($con,$sql);
                  echo mysqli_num_rows($qsql);
                  ?></div>
							<div class="title" data-swiper-parallax="-100">
								<span class="c-primary">Comments</span> in <span class="c-primary">WallPost</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
	<div class="ui-block h-100 mb-0">
		<div class="ui-block-title">
			<div class="h6 title">Number of Courses in the list</div>
		</div>

		<div class="ui-block-content">
			<div class="swiper-container" data-slide="fade">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="statistics-slide">
							<div class="count-stat" data-swiper-parallax="-500"><?php
				  $sql= "SELECT * FROM course";
				  $qsql= mysqli_query($con,$sql);
                  echo mysqli_num_rows($qsql);
                  ?></div>
							<div class="title" data-swiper-parallax="-100">
								<span class="c-primary">Course</span> Records
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		
<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
	<div class="ui-block h-100 mb-0">
		<div class="ui-block-title">
			<div class="h6 title">Number of Chat Entries</div>
		</div>

		<div class="ui-block-content">
			<div class="swiper-container" data-slide="fade">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="statistics-slide">
							<div class="count-stat" data-swiper-parallax="-500"><?php
$sql = "SELECT * FROM chat";
$qsql= mysqli_query($con,$sql);
echo mysqli_num_rows($qsql);
?></div>
							<div class="title" data-swiper-parallax="-100">
								<span class="c-primary">Chat </span> Entries Found
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
			
<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
	<div class="ui-block h-100 mb-0">
		<div class="ui-block-title">
			<div class="h6 title">Number of Group Chat records</div>
		</div>

		<div class="ui-block-content">
			<div class="swiper-container" data-slide="fade">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="statistics-slide">
							<div class="count-stat" data-swiper-parallax="-500"><?php
				  $sql= "SELECT * FROM group_chat";
				  $qsql= mysqli_query($con,$sql);
                  echo mysqli_num_rows($qsql);
                  ?></div>
							<div class="title" data-swiper-parallax="-100">
								<span class="c-primary">Group Chat</span> messages
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
			
<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
	<div class="ui-block h-100 mb-0">
		<div class="ui-block-title">
			<div class="h6 title">Number of Notice Entries</div>
		</div>

		<div class="ui-block-content">
			<div class="swiper-container" data-slide="fade">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="statistics-slide">
							<div class="count-stat" data-swiper-parallax="-500"><?php
				  $sql= "SELECT * FROM notice";
				  $qsql= mysqli_query($con,$sql);
                  echo mysqli_num_rows($qsql);
                  ?></div>
							<div class="title" data-swiper-parallax="-100">
								<span class="c-primary">Notice Entries</span> Found
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
				
<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
	<div class="ui-block h-100 mb-0">
		<div class="ui-block-title">
			<div class="h6 title">Number of Quiz Types</div>
		</div>

		<div class="ui-block-content">
			<div class="swiper-container" data-slide="fade">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="statistics-slide">
							<div class="count-stat" data-swiper-parallax="-500"><?php
				  $sql= "SELECT * FROM quiz";
				  $qsql= mysqli_query($con,$sql);
                  echo mysqli_num_rows($qsql);
                  ?></div>
							<div class="title" data-swiper-parallax="-100">
								<span class="c-primary">Quiz Types</span> entered
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		
<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
	<div class="ui-block h-100 mb-0">
		<div class="ui-block-title">
			<div class="h6 title">Number of Questions</div>
		</div>

		<div class="ui-block-content">
			<div class="swiper-container" data-slide="fade">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="statistics-slide">
							<div class="count-stat" data-swiper-parallax="-500"><?php
				  $sql= "SELECT * FROM question";
				  $qsql= mysqli_query($con,$sql);
                  echo mysqli_num_rows($qsql);
                  ?></div>
							<div class="title" data-swiper-parallax="-100">
								<span class="c-primary">Quiz Question</span> Entries
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
		
<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
	<div class="ui-block h-100 mb-0">
		<div class="ui-block-title">
			<div class="h6 title">Number of Quiz Results</div>
		</div>

		<div class="ui-block-content">
			<div class="swiper-container" data-slide="fade">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="statistics-slide">
							<div class="count-stat" data-swiper-parallax="-500"><?php
				  $sql= "SELECT * FROM quiz";
				  $qsql= mysqli_query($con,$sql);
                  echo mysqli_num_rows($qsql);
                  ?></div>
							<div class="title" data-swiper-parallax="-100">
								<span class="c-primary">Quiz Results</span> Generated
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
		
<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
	<div class="ui-block h-100 mb-0">
		<div class="ui-block-title">
			<div class="h6 title">Number of Study Materials</div>
		</div>

		<div class="ui-block-content">
			<div class="swiper-container" data-slide="fade">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="statistics-slide">
							<div class="count-stat" data-swiper-parallax="-500"><?php
				  $sql= "SELECT * FROM study_material";
				  $qsql= mysqli_query($con,$sql);
                  echo mysqli_num_rows($qsql);
                  ?></div>
							<div class="title" data-swiper-parallax="-100">
								<span class="c-primary">Study Materials</span> uploaded
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		
		
<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
	<div class="ui-block h-100 mb-0">
		<div class="ui-block-title">
			<div class="h6 title">Number of subject records</div>
		</div>

		<div class="ui-block-content">
			<div class="swiper-container" data-slide="fade">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="statistics-slide">
							<div class="count-stat" data-swiper-parallax="-500"><?php
				  $sql= "SELECT * FROM subject";
				  $qsql= mysqli_query($con,$sql);
                  echo mysqli_num_rows($qsql);
                  ?></div>
							<div class="title" data-swiper-parallax="-100">
								<span class="c-primary">Subjects</span> Entered
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		
		
		
		
<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
	<div class="ui-block h-100 mb-0">
		<div class="ui-block-title">
			<div class="h6 title">	Number of Staff records</div>
		</div>

		<div class="ui-block-content">
			<div class="swiper-container" data-slide="fade">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="statistics-slide">
							<div class="count-stat" data-swiper-parallax="-500"><?php
				  $sql= "SELECT * FROM user";
				  $qsql= mysqli_query($con,$sql);
                  echo mysqli_num_rows($qsql);
                  ?></div>
							<div class="title" data-swiper-parallax="-100">
								<span class="c-primary">Staff</span> Records
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

<!-- JS-libs and init for charts -->
<script src="js/libs/moment.min.js"></script>
<script src="js/libs/jquery.appear.min.js"></script>
<script src="js/libs/Chart.min.js"></script>
<script src="js/libs/chartjs-plugin-deferred.min.js"></script>
<script src="js/libs/circle-progress.min.js"></script>
<script src="js/libs/loader.min.js"></script>
<script src="js/libs/run-chart.min.js"></script>
<!-- ... end JS-libs and init for charts -->

<script src="js/main.js"></script>
<script src="js/libs-init/libs-init.js"></script>

<script src="Bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- SVG icons loader -->
<script src="js/svg-loader.js"></script>
<!-- /SVG icons loader -->

</body>
</html>