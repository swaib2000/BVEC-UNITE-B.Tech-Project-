
			<div class="ui-block">

				<div class="ui-block-title">
					<h6 class="title">Discussions Feed</h6>
				</div>

				
				<!-- W-Activity-Feed -->
				
				<ul class="widget w-activity-feed notification-list">
<?php
  $sqldiscussion ="SELECT discussion.*, course.course , subject.subject FROM discussion LEFT JOIN course ON discussion.course_id=course.course_id LEFT JOIN subject ON subject.subject_id=discussion.subject_id WHERE discussion.course_id='$rsstudentprofile[course_id]' AND discussion.semester='$rsstudentprofile[semester]' AND discussion.status='Active' ORDER BY discussion.discussion_id DESC LIMIT 10";
  $qsqldiscussion = mysqli_query($con, $sqldiscussion);
  while($rsrecdiscussion = mysqli_fetch_array($qsqldiscussion))
  {	  
	  $sqlstudent = "SELECT * FROM student WHERE student_id='$rsrecdiscussion[student_id]'";
	  $qsqlstudent = mysqli_query($con,$sqlstudent);
	  $rsstudent = mysqli_fetch_array($qsqlstudent);
	  if($rsstudent['student_img'] == "")
	  {
		  $img = "images/no-image.png";
	  }
	  else if(file_exists("studentimages/" . $rsstudent['student_img']))
	  {
		  $img = "studentimages/" . $rsstudent['student_img'];
	  }
	  else
	  {
		  $img = "images/no-image.png";
	  }
?>
	<li>
		<div class="author-thumb">
			<img loading="lazy" src="<?php echo $img; ?>" alt="author" style='width: 28px; height: 28px;' >
		</div>
		<div class="notification-event">
			<a href="#" class="h6 notification-friend"><?php echo $rsstudent['student_name']; ?></a>'s queries <a href="#" class="notification-link"><?php echo $rsrecdiscussion['discussion_title']; ?>.</a>.
			<span class="notification-date"><time class="entry-date updated" datetime="<?php echo $rsrecdiscussion['subject']; ?>"><?php echo $rsrecdiscussion['subject']; ?></time></span>
		</div>
	</li>
<?php
	}
?>
				</ul>
				
				<!-- .. end W-Activity-Feed -->
			</div>

