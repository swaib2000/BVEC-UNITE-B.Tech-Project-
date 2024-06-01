<?php
if(!isset($_SESSION['student_id']) && !isset($_SESSION['user_id']))
{
	echo "<script>window.location='index.php';</script>";
}
if(isset($_SESSION['user_id']))
{
	$sqluserprofile = "SELECT * FROM user WHERE user_id='$_SESSION[user_id]'";
	$qsqluserprofile = mysqli_query($con,$sqluserprofile);
	echo mysqli_error($con);
	$rsuserprofile = mysqli_fetch_array($qsqluserprofile);
}
if(isset($_SESSION['student_id']))
{
	$sqlstudentprofile = "SELECT student.*, course.course FROM student LEFT JOIN course on student.course_id=course.course_id WHERE student.student_id='" . $_SESSION['student_id'] . "'";
	$qsqlstudentprofile = mysqli_query($con,$sqlstudentprofile);
	echo mysqli_error($con);
	$rsstudentprofile = mysqli_fetch_array($qsqlstudentprofile);
	if($rsstudentprofile['student_img'] == "")
	{
	  $profileimg = "images/no-image.png";
	}
	else if(file_exists("studentimages/" . $rsstudentprofile['student_img']))
	{
	  $profileimg = "studentimages/" . $rsstudentprofile['student_img'];
	}
	else
	{
	  $profileimg = "images/no-image.png";
	}
}
?>