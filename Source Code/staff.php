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
		$encpass = md5($_POST['password']);
		if(isset($_GET['editid']))
		{
			$sql="UPDATE user  set user_type='$_POST[usertype]',name='$_POST[name]',login_id='$_POST[loginid]'";
			if($_POST['password'] != "")
			{
			$sql = $sql . ",password='$encpass'";
			}
			$sql = $sql . ",status='$_POST[status]' WHERE user_id='$_GET[editid]'";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
			if(mysqli_affected_rows($con) == 1)
			{
				echo "<SCRIPT>alert('User record UPDATED successfully.');</SCRIPT>";
				echo "<script>window.location='staffpanel.php?view=staff&editid=$_GET[editid]';</script>";
			}			
		}
		else
		{
			$sql="INSERT INTO user(user_type,name,login_id,password,status) values ('$_POST[usertype]','$_POST[name]','$_POST[loginid]','$encpass','$_POST[status]')";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
			if(mysqli_affected_rows($con) == 1)
			{
				echo "<SCRIPT>alert('User record inserted successfully.');</SCRIPT>";
				echo "<script>window.location='staffpanel.php?view=viewstaff';</script>";
			}
		}
	}
}
$_SESSION['sessionid'] = rand();
if(isset($_GET['editid']))
{
	$sqledit = "SELECT * FROM user WHERE user_id='$_GET[editid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
?>
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">Staff</h6>
				</div>
				<div class="ui-block-content">
				<?php
				if(isset($_GET['editid']))
				{
				?>
					<form action="staff.php?editid=<?php echo $_GET['editid']; ?>&view=staff" class="contact_form" method="post" name="frmuser" onsubmit="return validateform()" >
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
		<label class="control-label">Staff Type: <span id="idusertype"></span></label>
		<select name="usertype" class="form-select">
              <option value="">Select Staff Type</option>
             <?php
			  $arr = array("Staff","Admin");
			  foreach($arr as $val)
			  {
				  if($val == $rsedit['user_type'])
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
							<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="form-group label-floating">
									<label class="control-label">Name <span id="idname"></span></label>
									<input name="name" class="form-select" type="text" placeholder="Name *" value="<?php echo $rsedit['name']; ?>">
								</div>
							</div>
							
							<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="form-group label-floating">
									<label class="control-label">Login ID: <span id="idloginid"></span></label>
									<input name="loginid" class="form-control" type="text" value="<?php echo $rsedit['login_id']; ?>">
								</div>
							</div>
							
							<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="form-group label-floating">
									<label class="control-label">Password: <span id="idpassword"></span></label>
									<input name="password" class="form-control" type="password" >
								</div>
							</div>
							
							<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="form-group label-floating">
									<label class="control-label">Confirm Password: <span id="idconfirmpassword"></span></label>
									<input name="confirmpassword" class="form-control" type="password" >
								</div>
							</div>
							
							<div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="form-group label-floating">
									<label class="control-label">Status: <span id="idstatus"></span></label>
			<select name="status" class="form-select">
              <option value="">Select Status</option>
              <?php
			  $arr = array("Active","Inactive");
			  foreach($arr as $val)
			  {
				  if($val == $rsedit['status'])
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
							
							<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
								<!--<a href="#" class="btn btn-secondary btn-lg full-width">Cancel</a>-->
							</div>
							<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
				<?php
				if(isset($_GET['editid']))
				{
				?>
								<button type="submit"  name="submit" class="btn btn-blue btn-lg full-width">Update Staff</button>
				<?php
				}
				else
				{
				?>
				
								<button type="submit"  name="submit" class="btn btn-blue btn-lg full-width">Add New Staff</button>
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
<script type="application/javascript">
 function validateform()
 {
		var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
		var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
		var alphanumbericExp = /^[a-zA-Z0-9]+$/; //Variable to validate only alphabets and space
		var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
	 
	 var validatecondtion = 0;
	     
	 document.getElementById("idusertype").innerHTML ="";
	 document.getElementById("idname").innerHTML ="";
	 document.getElementById("idloginid").innerHTML ="";
	 document.getElementById("idpassword").innerHTML ="";
	 document.getElementById("idconfirmpassword").innerHTML ="";
	 document.getElementById("idstatus").innerHTML ="";
	 
	 if(document.frmuser.usertype.value=="")
	 {
		 document.getElementById("idusertype").innerHTML ="<font color='red'>Kindly select User type..</font>";
		 validatecondtion=1;
	 }
	 if(!document.frmuser.name.value.match(alphaspaceExp))
	 {
		 document.getElementById("idname").innerHTML ="<font color='red'>Name should contain only alphabets...</font>";
		 validatecondtion=1;
	 }
	 if(document.frmuser.name.value=="")
	 {
		 document.getElementById("idname").innerHTML ="<font color='red'>Name should not be empty...</font>";
		 validatecondtion=1;
	 }
	 if(!document.frmuser.loginid.value.match(alphanumbericExp))
	 {
		 document.getElementById("idloginid").innerHTML ="<font color='red'>Only alphabets and numeric values are allowed...</font>";
		 validatecondtion=1;
	 }
	 if(document.frmuser.loginid.value=="")
	 {
		 document.getElementById("idloginid").innerHTML ="<font color='red'>Login ID should not be empty..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmuser.editid.value == 0)
	 {
		 if(document.frmuser.password.value.length < 8)
		 {
			 document.getElementById("idpassword").innerHTML ="<font color='red'>Password must contain at least 8 characters..</font>";
			 validatecondtion=1;                                
		 }                                                    
		 if(document.frmuser.password.value=="")              
		 {
			 document.getElementById("idpassword").innerHTML ="<font color='red'>Password should not be empty..</font>";
			 validatecondtion=1;
		 }
		 if(document.frmuser.password.value!=document.frmuser.confirmpassword.value)
		 {
			 document.getElementById("idconfirmpassword").innerHTML ="<font color='red'>Password and Confirm password are not matching..</font>";
			 validatecondtion=1;
		 }
		 if(document.frmuser.confirmpassword.value=="")
		 {
			 document.getElementById("idconfirmpassword").innerHTML ="<font color='red'>Confirm password should not be empty.</font>";
			 validatecondtion=1;
		 }
	 }
	 if(document.frmuser.status.value=="")
	 {
		 document.getElementById("idstatus").innerHTML ="<font color='red'>Kindly select your status..</font>";
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