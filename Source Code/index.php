<?php
include("indexheader.php");
?>
	<!-- ... end Header Standard Landing  -->
	<div class="header-spacer--standard"></div>

	<div class="content-bg-wrap bg-landing"></div>

	<div class="container">
		<div class="row display-flex">
			<div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
				<div class="landing-content">
					<h1>Your Favorite <?php echo $_SESSION['project_title']; ?> is Here!</h1>
					<p>We are the best and biggest <?php echo $_SESSION['project_title']; ?> for college. Share your thoughts, write blog posts, learn and much more!
					</p>
				</div>
			</div>

			<div class="col col-xl-5 ms-auto col-lg-6 col-md-12 col-sm-12 col-12">

				
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
				<label class="control-label">Roll No. <span id="divrollno"><input type="hidden" name="dbidrollno" value="1"></span><span id="idrollno"></span></label>
				<input class="form-control" placeholder="" type="text" name="rollno"   autocomplete="off">
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

<div class="remember">

	<div class="checkbox">
		<label>
			<input name="optionsCheckboxes" type="checkbox">
			Remember Me
		</label>
	</div>
	<a href="#" class="forgot" data-bs-toggle="modal" data-bs-target="#restore-password">Forgot my Password</a>
</div>


									<button type="submit" id="btnlogin" name="btnlogin" class="btn btn-lg btn-primary full-width">Click Here to Login</button>

									<div class="or"></div>
									
									<button type="button" class="btn btn-lg bg-facebook full-width btn-icon-left" data-bs-toggle="modal" data-bs-target="#restore-password" >Did you Forget password..??</button>


								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
				
				<!-- ... end Login-Registration Form  -->
			</div>
		</div>
	</div>

	<img loading="lazy" class="img-bottom" src="img/group-bottom.webp" alt="friends" width="1087" height="148">
	<img loading="lazy" class="img-rocket" src="img/rocket.webp" alt="rocket" width="97" height="96">
</div>
<?php
include("indexfooter.php");
?>