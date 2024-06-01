<?php
include("header.php");
if($_SESSION['sessionid'] == $_POST['sessionid'])
{
	if(isset($_POST['submitchangepassword']))
	{
		$ectopass=md5($_POST['oldpassword']);
		$ectnpass=md5($_POST['newpassword']);
		$sql="UPDATE user SET password='$ectnpass' WHERE password='$ectopass' AND user_id='$_SESSION[user_id]' ";
		$qsql = mysqli_query($con,$sql);
		echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<SCRIPT>alert('Password updated successfully.');</SCRIPT>";
			echo "<script>window.location='dashboard.php';</script>";
		}
		else
		{
			echo "<SCRIPT>alert('Failed to update password...');</SCRIPT>";			
		}
	}
}
$_SESSION['sessionid'] = rand();
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
					<h1>Change Password</h1>
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
					<h6 class="title">Change Password</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Change Password Form -->
					
					<form action="" class="contact_form" method="post" name="frmchangepassworduser" onsubmit="return validateform()">
             <input  type="hidden" name="sessionid" value="<?php echo $_SESSION['sessionid']; ?>" >
						<div class="row">
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Confirm Current Password <span id="idoldpassword"></span></label>
									<input name="oldpassword" class="form-control" type="password">
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Your New Password  <span id="idnewpassword"></span></label>
									<input  name="newpassword" class="form-control" type="password">
								</div>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Confirm New Password <span id="idconfirmpassword"></span></label>
									<input name="confirmpassword" class="form-control" type="password" >
								</div>
							</div>
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<button type="submit" name="submitchangepassword" class="btn btn-primary btn-lg full-width">Change Password Now!</button>
							</div>
					
						</div>
					</form>
					
					<!-- ... end Change Password Form -->
				</div>
			</div>
		</div>

		<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12 responsive-display-none">
			<div class="ui-block">

				<!-- Your Profile  -->
				
				<div class="your-profile">

					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h6 class="accordion-header" id="headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Profile Settings
									<svg class="olymp-dropdown-arrow-icon"><use xlink:href="#olymp-dropdown-arrow-icon"></use></svg>
								</button>
							</h6>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
	<?php
	include("includemyprofile.php");
	?>
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
<script type="application/javascript">
 function validateform()
 {
	 var validatecondtion = 0;
	     
	 document.getElementById("idoldpassword").innerHTML ="";
	 document.getElementById("idnewpassword").innerHTML ="";
	 document.getElementById("idconfirmpassword").innerHTML ="";
	  
	 if(document.frmchangepassworduser.oldpassword.value.length < 8)
	 {
		 document.getElementById("idoldpassword").innerHTML ="<font color='red'>Password must contain at least 8 characters..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmchangepassworduser.oldpassword.value=="")
	 {
		 document.getElementById("idoldpassword").innerHTML ="<font color='red'>Kindly enter Old Password....</font>";
		 validatecondtion=1;
	 }
	 if(document.frmchangepassworduser.newpassword.value.length < 8)
	 {
		 document.getElementById("idnewpassword").innerHTML ="<font color='red'>Password must contain at least 8 characters..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmchangepassworduser.newpassword.value=="")
	 {
		 document.getElementById("idnewpassword").innerHTML ="<font color='red'>Password should not be empty..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmchangepassworduser.newpassword.value!=document.frmchangepassworduser.confirmpassword.value)
	 {
		 document.getElementById("idconfirmpassword").innerHTML ="<font color='red'>Password and Confirm password are not matching..</font>";
		 validatecondtion=1;
	 }	 
	   if(document.frmchangepassworduser.confirmpassword.value=="")
	 {
		 document.getElementById("idconfirmpassword").innerHTML ="<font color='red'>Confirm Password should not be empty..</font>";
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