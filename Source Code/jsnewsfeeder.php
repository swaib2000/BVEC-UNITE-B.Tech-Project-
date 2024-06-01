<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT &  ~E_WARNING);
$dt= date("Y-m-d");
$tim = date("H:i:s");
$dttim = date("Y-m-d H:i:s");
include("dbconnection.php");
//Delete Timeline Record starts Here
if(isset($_POST['deltimelineid']))
{
	$sql = "DELETE FROM timeline WHERE timeline_id='$_POST[deltimelineid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo 1;
	}
}
//Delete Timeline Record ends Here
//Post Text message starts here
if(isset($_POST['btnnftext']))
{
	$text= mysqli_real_escape_string($con, nl2br($_POST['textmessage']));
	$sql="INSERT INTO timeline(student_id,post_type,text_message,date_time) values ('$_SESSION[student_id]','Text','$text','$dt $tim')";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_affected_rows($con) == 1)
	{
		$_GET['timeline_id'] =  mysqli_insert_id($con);
		include("newsfeedposts.php");
	}
}
//Post Text message ends here
//Post image starts here
if(isset($_POST['btnimage']))
{
	$imgname = rand(). $_FILES["imgupload"]["name"];
	move_uploaded_file($_FILES["imgupload"]["tmp_name"],"imgwallpost/".$imgname);
	$message= mysqli_real_escape_string($con, nl2br($_POST['txtnfphoto']));
	$sql="INSERT INTO timeline(student_id,post_type,text_message,image_path,date_time) values ('$_SESSION[student_id]','Image','$message','$imgname','$dt $tim')";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_affected_rows($con) == 1)
	{
		$_GET['timeline_id'] =  mysqli_insert_id($con);
		include("newsfeedposts.php");
	}	
}
//Post image ends here
//Post video starts here
if(isset($_POST['btnvideo']))
{
	$videofilename = rand(). $_FILES["videoupload"]["name"];
	move_uploaded_file($_FILES["videoupload"]["tmp_name"],"vidwallpost/".$videofilename);
	$message= mysqli_real_escape_string($con, nl2br($_POST['txtnfvideo']));
	$sql="INSERT INTO timeline(student_id,post_type,text_message,video_path,date_time) values ('$_SESSION[student_id]','Video','$message','$videofilename','$dt $tim')";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_affected_rows($con) == 1)
	{
		$_GET['timeline_id'] =  mysqli_insert_id($con);
		include("newsfeedposts.php");
	}
}
//Post video ends here
?>