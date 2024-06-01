<?php
session_start();
//$_SESSION['project_title'] = "Campus Social Network";
$_SESSION['project_title'] = "BVEC UNITE";
$_SESSION['main_project_title'] = "BVEC";
$_SESSION['sub_project_title'] = "UNITE";
if(isset($_SESSION['student_id']))
{
	echo "<script>window.location='wallpost.php';</script>";
}
if(isset($_SESSION['user_id']))
{
	echo "<script>window.location='dashboard.php';</script>";
}
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT &  ~E_WARNING);
$dt= date("Y-m-d");
$tim = date("h:i:s");
$dttim = date("Y-m-d h:i:s");
include("dbconnection.php");
if(isset($_POST['btnresetpassword']))
{
	//forgot_email recovery_password btnresetpassword
	$pwd = md5($_POST['recovery_password']);
	$sql="UPDATE student set password='$pwd' WHERE email_id='$_POST[forgot_email]'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<SCRIPT>alert('Student Password updated successfully..');</SCRIPT>";
	}	
}
if(isset($_POST['submit']))
{
	$ectpass =md5($_POST['password']);
	if($_FILES["profileimage"]["name"] != "")
	{
		$imgname = rand(). $_FILES["profileimage"]["name"];
		move_uploaded_file($_FILES["profileimage"]["tmp_name"],"studentimages/".$imgname);
	}
	$aboutus= mysqli_real_escape_string($con, $_POST['aboutus']);
	if(isset($_GET['editid']))
	{
		$sql="UPDATE student set student_name='$_POST[name]',roll_no='$_POST[rollno]',password='$ectpass',";
		if($_FILES["profileimage"]["name"] != "")
		{
		$sql = $sql . "student_img='$imgname',";
		}
		$sql = $sql .  "course_id='$_POST[course]',semester='$_POST[semester]',about_student='$aboutus',email_id='$_POST[emailid]',mob_no='$_POST[mobileno]',status='$_POST[status]' WHERE student_id='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<SCRIPT>alert('Student record UPDATED successfully..');</SCRIPT>";
		}	
	}
	else
	{
		$sql = "SELECT * FROM student WHERE roll_no='$_POST[rollno]' AND (status='Active' OR status='Inactive')";
		$qsql = mysqli_query($con,$sql);
		
		if(mysqli_num_rows($qsql) >= 1)
		{
			echo "<SCRIPT>alert('Roll number already exits..');</SCRIPT>";
		}
		else
		{
			$sql="INSERT INTO student(student_name,roll_no,password,student_img,course_id,semester,about_student,email_id,mob_no,status) values ('$_POST[name]','$_POST[rollno]','$ectpass','$imgname','$_POST[course]','$_POST[semester]','$aboutus','$_POST[emailid]','$_POST[mobileno]','Pending')";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
			if(mysqli_affected_rows($con) == 1)
			{
				echo "<SCRIPT>alert('Your Account Created successfully... Admin will verify your account..');</SCRIPT>";
				echo "<script>window.location='index.php';</script>";			
			}
		}
	}
}
if(isset($_GET['editid']))
{
	$sqledit = "SELECT * FROM student WHERE student_id='$_GET[editid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
//Student Login Starts here
if(isset($_POST['btnlogin']))
{
	$ectpass=md5($_POST['passwordlogin']);
	$sql = "SELECT * FROM student WHERE roll_no='$_POST[rollnologin]' AND password='$ectpass' AND status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_num_rows($qsql) == 1)
	{
		$rs = mysqli_fetch_array($qsql);
		$_SESSION['student_id'] = $rs['student_id'];
		echo "<script>window.location='wallpost.php';</script>";
	}
	else
	{
		echo "<SCRIPT>alert('Invalid Login ID and password entered....');</SCRIPT>";
	}
}
//Student Login Ends here
//Staff Login Starts here
if(isset($_POST['btnstafflogin']))
{
	$ectpass=md5($_POST['staffpassword']);
	$sql = "SELECT * FROM user WHERE login_id='$_POST[staffloginid]' AND password='$ectpass' AND status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_num_rows($qsql) == 1)
	{
		$rs = mysqli_fetch_array($qsql);
		$_SESSION['user_id'] = $rs['user_id'];
		$_SESSION['user_type'] = $rs['user_type'];
		echo "<script>window.location='dashboard.php';</script>";
	}
	else
	{
		echo "<script>alert('Invalid Staff Login ID and password entered..');</script>";
	}
}
//Staff Login Ends here
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title><?php echo $_SESSION['project_title']; ?></title>

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
	<style>
	.errormsg {
	    color: rgb(255, 0, 0);
	}
	</style>
</head>
<body class="body-bg-white">


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

<?php
if(basename($_SERVER['PHP_SELF']) == "index.php")
{
?>
<!-- ... end Preloader -->
<div class="main-header main-header-fullwidth main-header-has-header-standard" style="margin: 0 auto 0px;">
<?php
}
else
{
?>
<div class="stunning-header bg-primary-opacity">
<?php
}
?>
<!-- Header Standard Landing  -->
<div class="header--standard header--standard-landing" id="header--standard">
	<div class="container">
		<div class="header--standard-wrap">

			<a href="index.php" class="logo">
				<div class="img-wrap">
					<img loading="lazy" src="images/college.png" alt="<?php echo $_SESSION['project_title']; ?>" width="34" height="34">
					<img loading="lazy" src="images/college.png" width="34" height="34" alt="<?php echo $_SESSION['project_title']; ?>" class="logo-colored">
				</div>
				<div class="title-block">
					<h6 class="logo-title"><?php echo $_SESSION['main_project_title']; ?></h6>
					<div class="sub-title"><?php echo $_SESSION['sub_project_title']; ?></div>
				</div>
			</a>

			<a href="#" class="open-responsive-menu js-open-responsive-menu">
				<svg class="olymp-menu-icon"><use xlink:href="#olymp-menu-icon"></use></svg>
			</a>

			<div class="nav nav-pills nav1 header-menu">
				<div class="mCustomScrollbar">
				<ul>
					<li class="nav-item">
						<a href="index.php" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="publicblog.php?notice_type=News and Updates" class="nav-link">News and Updates</a>
					</li>
					<li class="nav-item">
						<a href="publicblog.php?notice_type=Events" class="nav-link">Events</a>
					</li>
					<li class="nav-item">
						<a href="publicblog.php?notice_type=Meeting" class="nav-link">Meeting</a>
					</li>
					<li class="nav-item">
						<a href="about.php" class="nav-link">About</a>
					</li>
					<li class="nav-item">
						<a href="contact.php" class="nav-link">Contact</a>
					</li>
					<li class="close-responsive-menu js-close-responsive-menu">
						<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
					</li>
					<li class="nav-item js-expanded-menu">
						<a href="#" class="nav-link">
							<svg class="olymp-menu-icon"><use xlink:href="#olymp-menu-icon"></use></svg>
							<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
						</a>
					</li>
					
					<li class="menu-search-item">
						<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#main-popup-search">
							<svg class="olymp-magnifying-glass-icon"><use xlink:href="#olymp-magnifying-glass-icon"></use></svg>
						</a>
					</li>
				</ul>
				</div>
			</div>
		</div>
	</div>
</div>
	