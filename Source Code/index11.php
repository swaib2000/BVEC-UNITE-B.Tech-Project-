<?php
session_start();
if(isset($_SESSION['student_id']))
{
	echo "<script>window.location='wallpost.php';</script>";
}
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT &  ~E_WARNING);
$dt= date("Y-m-d");
$tim = date("h:i:s");
$dttim = date("Y-m-d h:i:s");
include("dbconnection.php");
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
			$sql="INSERT INTO student(student_name,roll_no,password,student_img,course_id,semester,about_student,email_id,mob_no,status) values ('$_POST[name]','$_POST[rollno]','$ectpass','$imgname','$_POST[course]','$_POST[semester]','$aboutus','$_POST[emailid]','$_POST[mobileno]','Active')";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
			if(mysqli_affected_rows($con) == 1)
			{
				$sql = "DELETE FROM student WHERE roll_no='$_POST[rollno]' AND (status='New' )";
				$qsql = mysqli_query($con,$sql);
				echo "<SCRIPT>alert('Your Account registered successfully...');</SCRIPT>";
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

</head>

<body class="landing-page">


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
<div class="content-bg-wrap"></div>


<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
	<div class="container">
		<div class="header--standard-wrap">

			<a href="index.php" class="logo">
				<div class="img-wrap">
					<img loading="lazy" src="img/logo.webp" alt="Campus" width="34" height="34">
					<img loading="lazy" src="img/logo-colored-small.webp" width="34" height="34" alt="Campus" class="logo-colored">
				</div>
				<div class="title-block">
					<h6 class="logo-title">CAMPUS</h6>
					<div class="sub-title">SOCIAL NETWORK</div>
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
							<a href="#" class="nav-link">News and Updates</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Events</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Meeting</a>
						</li>
						<li class="nav-item">
							<a href="about.php" class="nav-link">About</a>
						</li>
						<li class="nav-item">
							<a href="contact.php" class="nav-link">Contact</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Staff Login</a>
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

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
	<div class="row display-flex">
		<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="landing-content">
				<h1>Welcome to the Biggest <?php echo $_SESSION['project_title']; ?> in the World</h1>
				<p>We are the best and biggest <?php echo $_SESSION['project_title']; ?> with many active students all around the world. Share you
					thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
				</p>
				<!--
				<a href="#" class="btn btn-md btn-border c-white">Register Now!</a>
				-->
			</div>
		</div>

		<div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
			
			<!-- Login-Registration Form  -->

			<div class="registration-login-form">

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" id="registration-form-tabs" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">
							<svg class="olymp-login-icon"><use xlink:href="#olymp-login-icon"></use></svg>
						</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
							<svg class="olymp-register-icon"><use xlink:href="#olymp-register-icon"></use></svg>
						</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content" id="registration-form-tabs-content">
					<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
						<div class="title h6">Register to <?php echo $_SESSION['project_title']; ?></div>
<form class="content contact_form" method="post" action="" enctype="multipart/form-data" name="frmstudent" onsubmit="return validateform()"  autocomplete="off" >
	<div class="row">
		<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
			<div class="form-group label-floating">
				<label class="control-label">Full Name <span id="idname"></span></label>
				<input class="form-control" name="name"  type="text" autocomplete="off">
			</div>
		</div>
		<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
			<div class="form-group label-floating">
				<label class="control-label">Roll No. <span id="divrollno"><input type="hidden" name="dbidrollno"></span><span id="idrollno"></span></label>
				<input class="form-control" placeholder="" type="text" name="rollno"   onKeyUp="validaterollno(course.value,semester.value,this.value)" autocomplete="off">
			</div>
		</div>
		<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
			<div class="form-group label-floating">
				<label class="control-label">Password <span id="idpassword"></span></label>
				<input class="form-control" name="password"  placeholder="" type="password" autocomplete="off">
			</div>
		</div>
		<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
			<div class="form-group label-floating">
				<label class="control-label">Confirm Password <span id="idconfirmpassword"></span></label>
				<input class="form-control" placeholder="" type="password" name="confirmpassword"  autocomplete="off">
			</div>
		</div>
		<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
			<div class="form-group label-floating">
				<label class="control-label">Course <span id="idcourse"></span></label>
				<select name="course" id="course" class="form-control"  <?php 
				  if(isset($_SESSION['user_id']))
				  {
					  echo " readonly";
				  }
				  ?> >
              <option value=""></option>
              	<?php
				$sqlcourse =  "SELECT * FROM course WHERE status='Active'";
				$qsqlcourse = mysqli_query($con,$sqlcourse);
				while($rscourse = mysqli_fetch_array($qsqlcourse))
				{
					if($rscourse['course_id'] == $rsedit['course_id'])
					{
					echo "<option value='$rscourse[course_id]' selected>$rscourse[course]</option>";
					}
					else
					{					
					echo "<option value='$rscourse[course_id]' ";
					if(isset($_SESSION['user_id']))
			  		{
						echo " disabled ";
					}
					echo ">$rscourse[course]</option>";
					}
				}
				?>
              </select>
			</div>
		</div>
		<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
			<div class="form-group label-floating">
				<label class="control-label">Semester <span id="idsemester"></span></label>
              <select name="semester" id="semester" class="form-control"  <?php 
			  if(isset($_SESSION['user_id']))
			  {
				  echo " readonly";
			  }
			  ?>>  
              <option value=""></option>
              <?php
			  $arr = array("First Semester","Second Semester","Third Semester","Fourth Semester","Fifth Semester","Sixth Semester","Seventh Semester","Eighth Semester");
			  foreach($arr as $val)
			  {
				   if($val == $rsedit['semester'])
				   {
				  echo "<option value='$val' selected>$val</option>";
				   }
				   else
				   {
				  echo "<option value='$val' ";
				  if(isset($_SESSION['user_id']))
			  		{
						echo " disabled ";
					}
				 echo ">$val</option>";
				   }
			  }
			  ?>
              </select>
			</div>
		</div>
		
		
		<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
			<div class="form-group label-floating">
				<label class="control-label">Your Email <span id="idemailid"></span></label>
				<input name="emailid" class="form-control" type="email"  autocomplete="off">
			</div>
			<div class="form-group label-floating">
				<label class="control-label">Mobile No <span id="idmobileno"></span></label>
				<input name="mobileno" class="form-control" type="text"  autocomplete="off">
			</div>
		</div>
		
		<div class="col col-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">
			<div class="form-group label-floating" style="padding-top: 9px;">
				Upload Profile Image
			</div>
		</div>
		<div class="col col-9 col-xl-9 col-lg-9 col-md-9 col-sm-9">
			<div>
				<input type="file" name="profileimage" class="form-control" value="<?php echo $rsedit['student_img']; ?>" accept="image/*"  onchange="loadFile(event)" <?php if(isset($_SESSION['user_id']))
			  		{
						echo " disabled ";
					} ?>>
			</div>
		</div>
		<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
			<button type="submit" name="submit" class="btn btn-purple btn-lg full-width">Complete Registration..!</button>
		</div>
	</div>
</form>
					</div>

					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="title h6">Login to your Account</div>
						<form class="content contact_form" method="post" action="" name="frmstudentlogin" onsubmit="return validateformlogin()">
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">Enter Roll No. <span id="idrollnologin"></span></label>
										<input name="rollnologin" class="form-control" type="text" >
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Enter Password <span id="idpasswordlogin"></span></label>
										<input name="passwordlogin" class="form-control" type="password" >
									</div>
<?php
/*
<div class="remember">

	<div class="checkbox">
		<label>
			<input name="optionsCheckboxes" type="checkbox">
			Remember Me
		</label>
	</div>
	<a href="#" class="forgot" data-bs-toggle="modal" data-bs-target="#restore-password">Forgot my Password</a>
</div>
*/
?>

									<button type="submit" id="btnlogin" name="btnlogin" class="btn btn-lg btn-primary full-width">Click Here to Login</button>

									<div class="or"></div>
									
									<a type="button" class="btn btn-lg bg-facebook full-width btn-icon-left" >Did you Forget password..??</a>

									<div class="or"></div>

									<a href="userlogin.php" class="btn btn-lg bg-twitter full-width btn-icon-left">Staff Login</a>
  

								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<!-- ... end Login-Registration Form  -->		</div>
	</div>
</div>
<!-- Window-popup Restore Password -->

<div class="modal fade" id="restore-password" tabindex="-1" role="dialog" aria-labelledby="restore-password" aria-hidden="true">
	<div class="modal-dialog window-popup restore-password-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Restore your Password</h6>
			</div>

			<div class="modal-body">
				<form  method="get">
					<p>Enter your email and click the send code button. You’ll receive a code in your email. Please use that
						code below to change the old password for a new one.
					</p>
					<div class="form-group label-floating">
						<label class="control-label">Your Email</label>
						<input class="form-control" placeholder="" type="email" value="james-spiegel@yourmail.com">
					</div>
					<button class="btn btn-purple btn-lg full-width">Send me the Code</button>
					<div class="form-group label-floating">
						<label class="control-label">Enter the Code</label>
						<input class="form-control" placeholder="" type="text" value="">
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Your New Password</label>
						<input class="form-control" placeholder="" type="password" value="olympus">
					</div>
					<button class="btn btn-primary btn-lg full-width">Change your Password!</button>
				</form>

			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Restore Password -->


<!-- Window Popup Main Search -->

<div class="modal fade" id="main-popup-search" tabindex="-1" role="dialog" aria-labelledby="main-popup-search" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered window-popup main-popup-search" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-body">
				<form class="form-inline search-form" method="post">
					<div class="form-group label-floating">
						<label class="control-label">Search News and Articles here...</label>
						<input class="form-control bg-white" placeholder="" type="text" value="">
					</div>

					<button class="btn btn-purple btn-lg">Search</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- ... end Window Popup Main Search -->

<!-- JS Scripts -->
<script src="js/jQuery/jquery-3.5.1.min.js"></script>

<script src="js/libs/jquery.mousewheel.min.js"></script>
<script src="js/libs/perfect-scrollbar.min.js"></script>
<script src="js/libs/imagesloaded.pkgd.min.js"></script>
<script src="js/libs/material.min.js"></script>
<script src="js/libs/selectize.min.js"></script>
<script src="js/libs/moment.min.js"></script>
<script src="js/libs/daterangepicker.min.js"></script>
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
 <script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('previewimg');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
<script type="application/javascript">
function validateform()
{
	    var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
		var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
		var alphanumbericExp = /^[a-zA-Z0-9]+$/; //Variable to validate only alphabets and space
		var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
	 
	 var validatecondtion = 0;
	     
	 document.getElementById("idname").innerHTML ="";
	 document.getElementById("idrollno").innerHTML ="";
	 document.getElementById("idpassword").innerHTML ="";
	 document.getElementById("idconfirmpassword").innerHTML ="";
	 document.getElementById("idcourse").innerHTML ="";
	 document.getElementById("idsemester").innerHTML ="";
	 document.getElementById("idemailid").innerHTML ="";
	 document.getElementById("idmobileno").innerHTML ="";
		      
	 if(!document.frmstudent.name.value.match(alphaspaceExp))
	 {
		 document.getElementById("idname").innerHTML ="<font color='red'>Only alphabets are allowed...</font>";
		 validatecondtion=1;
	 }
	  if(document.frmstudent.name.value=="")
	 {
		 document.getElementById("idname").innerHTML ="<font color='red'>Name cannot be empty.</font>";
		 validatecondtion=1;
	 } 
	 if(!document.frmstudent.rollno.value.match(numericExpression))
	 {
		 document.getElementById("idrollno").innerHTML ="<font color='red'>Only numeric values allowed....</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudent.dbidrollno.value=="")
	 {
		 document.getElementById("idrollno").innerHTML ="<font color='red'>Roll Number not exits..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudent.rollno.value=="")
	 {
		 document.getElementById("idrollno").innerHTML ="<font color='red'>Kindly enter your Roll Number..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudent.password.value.length < 8)
	 {
		 document.getElementById("idpassword").innerHTML ="<font color='red'>Password must contain at least 8 characters..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudent.password.value=="")
	 {
		 document.getElementById("idpassword").innerHTML ="<font color='red'>Must Required..</font>";
		 validatecondtion=1;
	 }
	  if(document.frmstudent.password.value!=document.frmstudent.confirmpassword.value)
	 {
		 document.getElementById("idconfirmpassword").innerHTML ="<font color='red'>Password and Confirm password not matching..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudent.confirmpassword.value=="")
	 {
		 document.getElementById("idconfirmpassword").innerHTML ="<font color='red'>Must Required..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudent.course.value=="")
	 {
		 document.getElementById("idcourse").innerHTML ="<font color='red'>Must Required..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudent.semester.value=="")
	 {
		 document.getElementById("idsemester").innerHTML ="<font color='red'>Must Required..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudent.emailid.value=="")
	 {
		 document.getElementById("idemailid").innerHTML ="<font color='red'>Email ID cannot be empty. </font>";
		 validatecondtion=1;
	 }
	if(document.frmstudent.mobileno.value == "")
	{
	 document.getElementById("idmobileno").innerHTML ="<font color='red'>Only numeric values allowed....</font>";
	 validatecondtion=1;
	}
	if(document.frmstudent.mobileno.value.length != 10 && document.frmstudent.mobileno.value.length != 11 && document.frmstudent.mobileno.value.length != 12 && document.frmstudent.mobileno.value.length != 13 )
	{
	 document.getElementById("idmobileno").innerHTML ="<font color='red'>Mobile Number must be equal to or more than 10 digits..</font>";
	 validatecondtion=1;
	}
	if(!document.frmstudent.mobileno.value.match(numericExpression))
	{
	 document.getElementById("idmobileno").innerHTML ="<font color='red'>Only numeric values allowed....</font>";
	 validatecondtion=1;
	}
	 if(validatecondtion==1)
	 {
		 return false;
	 }                      
	 else
	 {
		 return true;
	 }
}

function validaterollno(course,semester,rollno) {
	document.getElementById("divrollno").innerHTML = "<input type='hidden' name='dbidrollno'>";
    if (rollno == "") 
	{
        document.getElementById("divrollno").innerHTML = "<input type='hidden' name='dbidrollno'>";
        return;
    } 
	else 
	{ 
        if (window.XMLHttpRequest) 
		{
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } 
		else 
		{
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
		{
            if (this.readyState == 4 && this.status == 200) 
			{
				document.getElementById("divrollno").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajaxrollno.php?course="+ course + "&semester=" + semester + "&rollno="+rollno,true);
        xmlhttp.send();
    }
}
</script>	
<script type="application/javascript">
 function validateformlogin()
 {
	var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
	var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
	var alphanumbericExp = /^[a-zA-Z0-9]+$/; //Variable to validate only alphabets and space
	var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
	var validatecondtion = 0;
	     
	 document.getElementById("idrollnologin").innerHTML ="";
	 document.getElementById("idpasswordlogin").innerHTML ="";
	
	if(!document.frmstudentlogin.rollnologin.value.match(numericExpression))
	 {
		 document.getElementById("idrollnologin").innerHTML ="<font color='red'>Only numeric values allowed....</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudentlogin.rollnologin.value=="")
	 {
		 document.getElementById("idrollnologin").innerHTML ="<font color='red'>Kindly enter your rollno..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudentlogin.passwordlogin.value.length < 8)
	 {
		 document.getElementById("idpasswordlogin").innerHTML ="<font color='red'>Password must be 8 characters..</font>";
		 validatecondtion=1;
	 }
	  if(document.frmstudentlogin.passwordlogin.value=="")
	 {
		 document.getElementById("idpasswordlogin").innerHTML ="<font color='red'>Kindly enter your password..</font>";
		 validatecondtion=1;
	 }
	if(validatecondtion==1)
	 {
		 return false;
	 }
	 else
	 {
		 return true;
	 }
 }
</script>