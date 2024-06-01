<?php
include("header.php");
if(!isset($_SESSION['student_id']))
{
	echo "<script>window.location='studentlogin.php';</script>";
}
if(isset($_POST['btnupdprofile']))
{
	if($_FILES['profileimage']['name'] != "")
	{
		$imgname = rand(). $_FILES['profileimage']['name'];
		move_uploaded_file($_FILES['profileimage']['tmp_name'],"studentimages/".$imgname);
	}
	if($_FILES['wall_poster']['name'] != "")
	{
		$imgname1 = rand(). $_FILES['wall_poster']['name'];
		move_uploaded_file($_FILES['wall_poster']['tmp_name'],"studentimages/".$imgname1);
	}
	$aboutus= mysqli_real_escape_string($con, nl2br($_POST['aboutus']));
	$sql="UPDATE student set student_name='$_POST[name]',roll_no='$_POST[rollno]',";
	if($_FILES['profileimage']['name'] != "")
	{
	$sql = $sql . "student_img='$imgname',";
	}
	$sql = $sql . "course_id='$_POST[course]',semester='$_POST[semester]',about_student='$aboutus',email_id='$_POST[emailid]',student_dob='$_POST[student_dob]',mob_no='$_POST[mobileno]',status='Active' WHERE student_id='$_SESSION[student_id]'";
	$qsql = mysqli_query($con,$sql);
	if(!$qsql)
	{
		echo mysqli_error($con);
	}
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<SCRIPT>alert('Student Profile Updated successfully..');</SCRIPT>";
		echo "<script>window.location='studentprofile.php';</script>";
	}	
}
if(isset($_SESSION['student_id']))
{
	$sqledit = "SELECT * FROM student WHERE student_id='$_SESSION[student_id]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
?>
<!-- ... end Responsive Header-BP -->
<div class="header-spacer header-spacer-small"></div>

<!-- Main Header Account -->
<div class="main-header">
	<div class="content-bg-wrap bg-account"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>My Profile</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ... end Main Header Account -->

<!-- Your Account Personal Information -->
<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Personal Information</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Personal Information Form  -->
					
					<form action="" class="contact_form" method="post" enctype="multipart/form-data" name="frmstudentprofile" onsubmit="return validateform()">
						<div class="row">

	<div class="col col-lg-7 col-md-7 col-sm-12 col-12">
		<div class="form-group label-floating">
			<label class="control-label">Full Name <span id="idname"></span></label>
			<input name="name" class="form-control" type="text" placeholder="Name  *" value="<?php echo $rsedit['student_name']; ?>">
		</div>
		<div class="form-group label-floating">
			<label class="control-label">Roll No: <span id="idrollno"></span></label>
			<input name="rollno" class="form-control" type="text" placeholder="Roll No *" value="<?php echo $rsedit['roll_no']; ?>" 
			  <?php 
			  if(isset($_SESSION['student_id']))
			  {
				  echo " readonly";
			  }
			  ?>
			>
		</div>
		<div class="form-group label-floating">
			<label class="control-label">Course: <span id="idcourse"></span></label>
              <select name="course" class="form-control" <?php 
			  if(isset($_SESSION['student_id']))
			  {
				  echo " readonly";
			  }
			  ?>>
              	<?php
				$sqlcourse =  "SELECT * FROM course WHERE status='Active'";
				$qsqlcourse = mysqli_query($con,$sqlcourse);
				while($rscourse = mysqli_fetch_array($qsqlcourse))
				{
					if($rscourse['course_id'] == $rsedit['course_id'])
					{
					echo "<option value='$rscourse[course_id]' selected>$rscourse[course]</option>";
					}
				}
				?>
              </select>
		</div>
		<div class="form-group label-floating">
			<label class="control-label">Semester: <span id="idsemester"></span></label>
            <select name="semester" class="form-control" >
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
				  echo "<option value='$val'>$val</option>";
				    }
			  }
			  ?>
            </select>
		</div>
		<div class="form-group label-floating">
			<label class="control-label">About Me <span id="idaboutus"></span></label>
			<textarea name="aboutus" class="form-control" cols="30" rows="10" ><?php echo strip_tags($rsedit['about_student']); ?></textarea>
		</div>
	</div>
	<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
		<div class="form-group label-floating">
			<label class="control-label">Profile Image: <span id="idprofileimage"></span></label>
			<input type="file" name="profileimage" class="form-select" accept="image/*"  onchange="loadFile(event)" title="Upload image">
			<?php
              if($rsedit['student_img'] == "")
              {
              	echo '<center><img src="images/no-image.png" style="width: 200px"  alt="Image preview..." id="previewimg"></center>';
              }
              else
              {
				  if(file_exists("studentimages/" . $rsedit['student_img']))
				  {
					echo "<center><img src='studentimages/$rsedit[student_img]' style='width: 200px' alt='Image preview...' id='previewimg'></center>";
				  }
				  else
				  {
					echo '<center><img src="images/no-image.png" style="width: 200px" alt="Image preview..." id="previewimg"></center>';
				  }
              }
            ?>
		</div>
		<div class="form-group label-floating">
			<label class="control-label">Wall Poster: <span id="idprofileimage"></span></label>
			<input type="file" name="wall_poster" class="form-select" accept="image/*"   onchange="preview_image(event)" title="Upload Wallposter">
			<?php
              if($rsedit['wall_poster'] == "")
              {
              	echo '<center><img src="images/no-image.png" style="width: 100%;"  alt="Image preview..." id="output_image"></center>';
              }
              else
              {
				  if(file_exists("studentimages/" . $rsedit['wall_poster']))
				  {
					echo "<center><img src='studentimages/$rsedit[wall_poster]'  style='width: 100%;'  alt='Image preview...' id='output_image'></center>";
				  }
				  else
				  {
					echo '<center><img src="images/no-image.png" style="width: 100%;" alt="Image preview..." id="output_image"></center>';
				  }
              }
            ?>
		</div>
	</div>
	
	<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
		<div class="form-group label-floating">
			<label class="control-label">Email ID <span id="idemailid"></span></label>
			<input class="form-control" type="email"   name="emailid"  value="<?php echo $rsedit['email_id']; ?>">
		</div>
	</div>

	<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
		<div class="form-group label-floating is-select">
			<label class="control-label">Mobile No. <span id="idmobileno"></span></label>
			<input class="form-control" type="number" name="mobileno"  value="<?php echo $rsedit['mob_no']; ?>">
		</div>
	</div>
	<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
		<div class="form-group label-floating is-select">
			<label class="control-label">Date of Birth. <span id="idstudent_dob"></span></label>
			<input class="form-select" type="date" name="student_dob"   value="<?php echo $rsedit['student_dob']; ?>" >
		</div>
	</div>
	
	<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
	<hr>
		<center><button class="btn btn-primary btn-lg" type="submit" name="btnupdprofile">Click Here to Update Profile</button></center>
	</div>

						</div>
					</form>
					
					<!-- ... end Personal Information Form  -->
				</div>
			</div>
		</div>

		<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12 responsive-display-none">
			<div class="ui-block">

				<!-- Your Profile  -->
				
				<div class="your-profile">

					<div class="accordion" id="accordionExample1">
						<div class="accordion-item">
							<h6 class="accordion-header" id="headingOne1">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
									Profile Settings
									<svg class="olymp-dropdown-arrow-icon"><use xlink:href="#olymp-dropdown-arrow-icon"></use></svg>
								</button>
							</h6>
							<div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
								<div class="accordion-body">
									<ul class="your-profile-menu">
										<li>
											<a href="studentprofile.php">Personal Information</a>
										</li>
										<li>
											<a href="changepasswordst.php">Change Password</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ... end Your Profile  -->
			</div>
		</div>
	</div>
</div>
<!-- ... end Your Account Personal Information -->
<?php
include("footer.php");
?>
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
<script>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
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
	 document.getElementById("idsemester").innerHTML ="";
	 document.getElementById("idemailid").innerHTML ="";
	 document.getElementById("idmobileno").innerHTML ="";
		 
	 if(!document.frmstudentprofile.name.value.match(alphaspaceExp))
	 {
		 document.getElementById("idname").innerHTML ="<font color='red'>Name should contain only alphabets...</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudentprofile.name.value=="")
	 {
		 document.getElementById("idname").innerHTML ="<font color='red'>Name should not be empty...</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudentprofile.semester.value=="")
	 {
		 document.getElementById("idsemester").innerHTML ="<font color='red'>Kindly select your semester</font>";
		 validatecondtion=1;
	 }
	  if(document.frmstudentprofile.emailid.value=="")
	 {
		 document.getElementById("idemailid").innerHTML ="<font color='red'>Email ID cannot be empty </font>";
		 validatecondtion=1;
	 } 
	  if(document.frmstudentprofile.student_dob.value=="")
	 {
		 document.getElementById("idstudent_dob").innerHTML ="<font color='red'>Should not be empty </font>";
		 validatecondtion=1;
	 }
	if(document.frmstudentprofile.mobileno.value!="")
	 {
if(document.frmstudentprofile.mobileno.value.length != 10 && document.frmstudentprofile.mobileno.value.length != 11 && document.frmstudentprofile.mobileno.value.length != 12 && document.frmstudentprofile.mobileno.value.length != 13 )
		{
		 document.getElementById("idmobileno").innerHTML ="<font color='red'>Mobile Number must be equal to or more than 10 digits..</font>";
		 validatecondtion=1;
		}
		if(!document.frmstudentprofile.mobileno.value.match(numericExpression))
	    {
		 document.getElementById("idmobileno").innerHTML ="<font color='red'>Only numeric values allowed....</font>";
		 validatecondtion=1;
	    }
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