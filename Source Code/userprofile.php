<?php
include("header.php");
if($_SESSION['sessionid'] == $_POST['sessionid'])
{
	if($_FILES['profileimage']['name'] != "")
	{
		$imgname = rand(). $_FILES['profileimage']['name'];
		move_uploaded_file($_FILES["profileimage"]["tmp_name"],"userprofileimages/".$imgname);
	}
	if(isset($_POST['submitprofile']))
	{
			$sql="UPDATE user set name='$_POST[name]',";
			if($_FILES['profileimage']['name'] != "")
			{
			$sql = $sql . "user_img='$imgname',";
			}
			$sql = $sql .
			"login_id='$_POST[loginid]',status='Active' WHERE user_id='$_SESSION[user_id]'";
			$qsql = mysqli_query($con,$sql);
			if(!$qsql)
			{
				echo mysqli_error($con);
			}
			if(mysqli_affected_rows($con) == 1)
			{
				echo "<SCRIPT>alert('User Profile UPDATED successfully.');</SCRIPT>";
				echo "<script>window.location='dashboard.php';</script>";
			}
	}
}
$_SESSION['sessionid'] = rand();
if(isset($_SESSION['user_id']))
{
	$sqledit = "SELECT * FROM user WHERE user_id='$_SESSION[user_id]'";
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
					<h1>Update Profile</h1>
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
					
					<form action="" class="contact_form" method="post" enctype="multipart/form-data"  name="frmuserprofile" onsubmit="return validateform()">
					<input  type="hidden" name="sessionid" value="<?php echo $_SESSION['sessionid']; ?>" >
						<div class="row">
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Name <span id="idname"></span></label>
									<input name="name" class="form-control" type="text" placeholder="Name *" value="<?php echo $rsedit['name']; ?>">
								</div>
					
								<div class="form-group label-floating">
									<label class="control-label">Login ID:</label>
									<input  name="loginid" class="form-control" type="text" placeholder="Login Id *" value="<?php echo $rsedit['login_id']; ?>"
									  <?php 
									  if(isset($_SESSION['user_id']))
									  {
										  echo " readonly";
									  }
									  ?>
									>
								</div>
					
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label"></label>
									<input type="file" name="profileimage" class="form-control" accept="image/*"  onchange="loadFile(event)" >
              <?php
			  if(file_exists("userprofileimages/$rsedit[user_img]"))
              {
              	echo "<img src='userprofileimages/$rsedit[user_img]' style='height: 100px;' alt='Image preview...' id='previewimg'>";
              }
              else if($rsedit['user_img'] == "")
              {
              	echo '<img src="img/admindefault.png" style="height: 100px;" alt="Image preview..." id="previewimg">';
              }
              else
              {
              	echo '<img src="img/admindefault.png" style="height: 100px;" alt="Image preview..." id="previewimg">';
              }
              ?>
								</div>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<?php /*<button class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>*/ ?>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<button type="submit" name="submitprofile" id="submitprofile" class="btn btn-primary btn-lg full-width">Save all Changes</button>
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
	
	 if(!document.frmuserprofile.name.value.match(alphaspaceExp))
	 {
		 document.getElementById("idname").innerHTML ="<font color='red'>Name should contain only alphabets...</font>";
		 validatecondtion=1;
	 }
	 if(document.frmuserprofile.name.value=="")
	 {
		 document.getElementById("idname").innerHTML ="<font color='red'>Name should not be empty...</font>";
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
