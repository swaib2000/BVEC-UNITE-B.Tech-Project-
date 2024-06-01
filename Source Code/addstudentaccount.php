<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT &  ~E_WARNING);
include("dbconnection.php");
if(!isset($_SESSION['user_id']))
{
	echo "<script>window.location='userlogin.php';</script>";
}
if($_SESSION['sessionid'] == $_POST['sessionid'])
{
	if(isset($_POST['submit']))
	{
		if(isset($_GET['editid']))
		{
			$sql = "SELECT * FROM student WHERE roll_no='$_POST[rollno]' AND (status='New' OR status='Active')";
			$qsql = mysqli_query($con,$sql);
			
			if(mysqli_num_rows($qsql) >= 1)
			{
				echo "<SCRIPT>alert('Roll number already exits..');</SCRIPT>";
			}
			else
			{
				$sql="UPDATE student set student_name='$_POST[name]',roll_no='$_POST[rollno]',course_id='$_POST[course]',semester='$_POST[semester]',status='New' WHERE student_id='$_GET[editid]'";
				$qsql = mysqli_query($con,$sql);
				if(!$qsql)
				{
					echo mysqli_error($con);
				}
				if(mysqli_affected_rows($con) == 1)
				{
					echo "<SCRIPT>alert('Student profile UPDATED successfully..');</SCRIPT>";
					echo "<script>window.location='viewstudentprofile.php';</script>";
				}
			}
		}
		else
		{
			$sql = "SELECT * FROM student WHERE roll_no='$_POST[rollno]' AND (status='New' OR status='Active')";
			$qsql = mysqli_query($con,$sql);
			
			if(mysqli_num_rows($qsql) >= 1)
			{
				echo "<SCRIPT>alert('Roll number already exits..');</SCRIPT>";	
			}
			else
			{
				$sql="INSERT INTO student(student_name,roll_no,course_id,semester,status) values ('$_POST[name]','$_POST[rollno]','$_POST[course]','$_POST[semester]','New')";
				$qsql = mysqli_query($con,$sql);
				if(!$qsql)
				{
					echo mysqli_error($con);
				}
				if(mysqli_affected_rows($con) == 1)
				{
					echo "<SCRIPT>alert('New student profile added..');</SCRIPT>";
					echo "<script>window.location='viewstudentprofile.php';</script>";		
				}
			}
		}
	}
}
$_SESSION['sessionid'] = rand();
if(isset($_GET['editid']))
{
	$sqledit = "SELECT * FROM student WHERE student_id='$_GET[editid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
?>
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">Add Student account</h6>
				</div>
				<div class="ui-block-content">
				<?php
				if(isset($_GET['editid']))
				{
				?>
					<form action="addstudentaccount.php?editid=<?php echo $_GET['editid']; ?>&view=staff" class="contact_form" method="post" name="frmuser" onsubmit="return validateform()" >
					<input type="hidden" name="editid" id="editid" value="<?php echo $_GET['editid']; ?>" >
				<?php
				}
				else
				{
				?>
					<form action="" class="contact_form" method="post" name="frmuser" onsubmit="return validateform()" >
					<input type="hidden" name="editid" id="editid" value="0" >
				<?php
				}
				?>
                 <input  type="hidden" name="sessionid" value="<?php echo $_SESSION['sessionid']; ?>" >
						<div class="row">
							<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="form-group label-floating is-select">
		<label class="control-label">Full Name: <span id="idname"></span></label>
		<input name="name" class="form-control" type="text" value="<?php echo $rsedit['student_name']; ?>" />
								</div>
							</div>
							
							<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="form-group label-floating">
									<label class="control-label">Roll No.: <span id="idrollno"></span></label>
									<input name="rollno" class="form-control" type="text" value="<?php echo $rsedit['roll_no']; ?>" />
								</div>
							</div>
							
							<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="form-group label-floating">
									<label class="control-label">Course: <span id="idcourse"></span></label>
									<select name="course" class="form-select" >
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
							
							<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="form-group label-floating">
			<label class="control-label">Semester: <span id="idsemester"></span></label>
			<select name="semester" class="form-select"  >  
              <option value="">Select semester</option>
              <?php
			  $arr = array("First Semester","Second Semester","Third Semester","Fourth Semester","Fifth Semester","Sixth Semester");
			  foreach($arr as $val)
			  {
				   if($val == $rsedit['semester'])
				   {
				  echo "<option value='$val' selected>$val</option>";
				   }
				   else
				   {
				  echo "<option value='$val' >$val</option>";
				   }
			  }
			  ?>
            </select>
								</div>
							</div>
							
							<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
								<!--<a href="#" class="btn btn-secondary btn-lg full-width">Cancel</a>-->
							</div>
							<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
				<?php
				if(isset($_GET['editid']))
				{
				?>
								<button type="submit"  name="submit" class="btn btn-blue btn-lg full-width">Update Student profile</button>
				<?php
				}
				else
				{
				?>
				
								<button type="submit"  name="submit" class="btn btn-blue btn-lg full-width">Add New Student Account</button>
				<?php
				}
				?>
							</div>
							
							<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
								<!--<a href="#" class="btn btn-secondary btn-lg full-width">Cancel</a>-->
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>

	</div>
</div>
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
	 document.getElementById("idcourse").innerHTML ="";
	 document.getElementById("idsemester").innerHTML ="";
		        
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
	 if(document.frmstudent.rollno.value=="")
	 {
		 document.getElementById("idrollno").innerHTML ="<font color='red'>Kindly enter your Roll Number..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudent.course.value=="")
	 {
		 document.getElementById("idcourse").innerHTML ="<font color='red'>Kindly select your course..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudent.semester.value=="")
	 {
		 document.getElementById("idsemester").innerHTML ="<font color='red'>Kindly select your semester</font>";
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