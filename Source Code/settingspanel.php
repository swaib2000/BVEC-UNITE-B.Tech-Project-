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
		$note= mysqli_real_escape_string($con, $_POST['note']);
		
		if(isset($_GET['editid']))
		{
			$sql="UPDATE subject  set subject='$_POST[subject]',course_id='$_POST[coursetitle]',semester='$_POST[semester]',note='$note',status='Active' WHERE subject_id='$_GET[editid]'";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
			if(mysqli_affected_rows($con) == 1)
			{
				echo "<SCRIPT>alert('Subject record UPDATED successfully..');</SCRIPT>";
			}	
		}
		else
		{
			$sql="INSERT INTO subject(subject,course_id,semester,note,status) values ('$_POST[subject]','$_POST[coursetitle]','$_POST[semester]','$note','Active')";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
			if(mysqli_affected_rows($con) == 1)
			{
				echo "<SCRIPT>alert('Subject record inserted successfully..');</SCRIPT>";
				echo "<script>window.location='settingspanel.php';</script>";
			}
		}
	}
}
$_SESSION['sessionid'] = rand();
if(isset($_GET['editid']))
{
	$sqledit = "SELECT * FROM subject WHERE subject_id='$_GET[editid]'";
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
					<h6 class="title">Subject</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Form Favorite Page Information -->
				<?php
				if(isset($_GET['editid']))
				{
				?>
					<form action="settingspanel.php?editid=<?php echo $_GET['editid']; ?>&view=Notice" class="contact_form" method="post" name="frmsubject" onsubmit="return validateform()">
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
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Course <span id="idcoursetitle"></span></label>
				<select name="coursetitle" class="form-select">
              <option value="">Select Course</option>
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
					echo "<option value='$rscourse[course_id]'>$rscourse[course]</option>";
					}
				}
				?>
                </select>
								</div>
					
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Semester <span id="idsemester"></span></label>
									<select name="semester" class="form-select">   
              <option value="">Select semester</option>
              <?php
			  $arr = array("First Semester","Second Semester","Third Semester","Fourth Semester","Fifth Semester","Sixth Semester","Seventh Semester","Eighth semester");
			  foreach($arr as $val)
			  {
				   if($val == $rsedit['semester'])
				   {
				  echo "<option value='$val' selected>$val</option>";
				   }
				   else
				   {
				  echo "<option value='$val'>$val</option>";
				   }
			  }
			  ?>
              </select>
								</div>
					
							</div>
					
							<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
					
								<div class="form-group label-floating is-empty">
									<label class="control-label">Subject <span id="idsubject"></span></label>
									<input name="subject" class="form-control" type="text" value="<?php echo $rsedit['subject']; ?>">
								</div>
					
					
							</div>
					
							<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Note</label>
									<textarea name="note" class="form-control" cols="30" rows="10" ><?php echo $rsedit['note']; ?></textarea>
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
	 document.getElementById("idsubject").innerHTML ="";

	 if(document.frmsubject.coursetitle.value=="")
	 {
		 document.getElementById("idcoursetitle").innerHTML ="<font color='red'>Kindly select Course..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmsubject.subject.value=="")
	 {
		 document.getElementById("idsubject").innerHTML ="<font color='red'>Kindly add Subject..</font>";
		 validatecondtion=1;
	 }
	  if(document.frmsubject.semester.value=="")
	 {
		 document.getElementById("idsemester").innerHTML ="<font color='red'>Kindly add Semester..</font>";
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