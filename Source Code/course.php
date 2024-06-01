<?php
include("header.php");
if(!isset($_SESSION['user_id']))
{
	echo "<script>window.location='userlogin.php';</script>";
}
if($_SESSION['sessionid'] == $_POST['sessionid'])
{
	if(isset($_POST['submit']))
	{
		$course_description= mysqli_real_escape_string($con, $_POST['coursedescription']);
		
		if(isset($_GET['editid']))
		{
	$sql="UPDATE course set course='$_POST[coursetitle]',course_description='$course_description',status='Active' WHERE course_id='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		if(!$qsql)
		{
			echo mysqli_error($con);
		}
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<SCRIPT>alert('Course record UPDATED successfully..');</SCRIPT>";
		    echo "<script>window.location='viewcourse.php';</script>";
		}	
	    }
	else
	{
		$sql="INSERT INTO course(course,course_description,status) values ('$_POST[coursetitle]','$course_description','Active')";
		$qsql = mysqli_query($con,$sql);
		if(!$qsql)
		{
			echo mysqli_error($con);
		}
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<SCRIPT>alert('Course record inserted successfully.');</SCRIPT>";
			echo "<script>window.location='viewcourse.php';</script>";
		}
	}
}
}
$_SESSION['sessionid'] = rand();
if(isset($_GET['editid']))
{
	$sqledit = "SELECT * FROM course WHERE course_id='$_GET[editid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
?>
<div class="header-spacer header-spacer"></div>


<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Course</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Form Favorite Page Information -->
				<?php
				if(isset($_GET['editid']))
				{
				?>
					<form action="course.php?editid=<?php echo $_GET['editid']; ?>&view=Notice" class="contact_form" method="post" name="frmsubject" onsubmit="return validateform()">
				<?php
				}
				else
				{
				?>
					<form action="" class="contact_form" method="post" name="frmsubject" onsubmit="return validateform()">
				<?php
				}
				?>
            <input  type="hidden" name="sessionid" value="<?php echo $_SESSION['sessionid']; ?>" >
						<div class="row">
							<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Course Title <span id="idcoursetitle"></span></label>
				<input name="coursetitle" class="form-control" type="text" value="<?php echo $rsedit['course']; ?>">
								</div>
					
							</div>
					
							<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Course Description</label>
									<textarea name="coursedescription" class="form-control" ><?php echo $rsedit['course_description']; ?></textarea>
								</div>
							</div>
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<hr>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<button name="submit" type="submit" class="btn btn-primary btn-lg full-width">Click here to Save</button>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
							</div>
						</div>
					</form>
					
					<!-- ... end Form Favorite Page Information -->
					

				</div>
			</div>

		</div>
<?php
include("inlcudesettingsidebar.php");
?>
	</div>
</div>
<!-- ... end Your Account Personal Information -->
<script type="application/javascript">
 function validateform()
 {
	 var validatecondtion = 0;
	     
	 document.getElementById("idcoursetitle").innerHTML ="";
	 
	 if(document.frmcourse.coursetitle.value=="")
	 {
		 document.getElementById("idcoursetitle").innerHTML ="<font color='red'>Kindly add Course..</font>";
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
<?php
include("footer.php");
?>