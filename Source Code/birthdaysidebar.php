<?php
$sql ="SELECT * FROM student WHERE status='Active' AND MONTH(`student_dob`) = MONTH(NOW()) AND DAY(`student_dob`) = DAY(NOW()) ORDER BY rand() LIMIT 1 ";
$qsql = mysqli_query($con, $sql);
 $img="";
 while($rsrec = mysqli_fetch_array($qsql))
  {
	  $sqlcourse = "SELECT * FROM course WHERE course_id='$rsrec[course_id]'";
	  $qsqlcourse = mysqli_query($con,$sqlcourse);
	  $rscourse = mysqli_fetch_array($qsqlcourse);
	  if($rsrec['student_img'] == "")
	  {
		  $img = "images/no-image.png";
	  }
	  else if(file_exists("studentimages/" . $rsrec['student_img']))
	  {
		  $img = "studentimages/" . $rsrec['student_img'];
	  }
	  else
	  {
		  $img = "images/no-image.png";
	  }
?>
			<div class="ui-block">
				<!-- W-Birthsday-Alert -->
				<div class="widget w-birthday-alert">
					<div class="icons-block">
						<svg class="olymp-cupcake-icon"><use xlink:href="#olymp-cupcake-icon"></use></svg>
					</div>
				
					<div class="content">
						<div class="author-thumb">
							<img loading="lazy" src="<?php echo $img; ?>" alt="author" style="width: 38px; height: 38px;">
						</div>
						<span>Today is</span>
						<a href="#" class="h4 title"><?php echo $rsrec['student_name']; ?>’s Birthday!</a>
						<p>Leave her a message with your best wishes..</p>
					</div>
				</div>
				<!-- ... end W-Birthsday-Alert -->
			</div>
<?php
  }
?>