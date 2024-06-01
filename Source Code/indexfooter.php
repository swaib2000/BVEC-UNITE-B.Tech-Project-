<section class="medium-padding100 subscribe-animation bg-users">
	<div class="container">
		<div class="row">
			<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
				<div class="crumina-module crumina-heading c-white custom-color">
					<h2 class="h1 heading-title"><?php echo $_SESSION['project_title']; ?></h2>
					<p class="heading-text">Copyrights 2021 @ CSN
					</p>
				</div>

				<!-- Subscribe Form  -->
				<button type="button" class="btn btn-blue btn-lg" data-bs-toggle="modal" data-bs-target="#admin_login">Staff Login</button>
				<!-- ... end Subscribe Form  -->

			</div>
		</div>

		<img loading="lazy" src="img/paper-plane.webp" alt="plane" class="plane" data-aos="fade-right" data-aos-delay="200" data-aos-duration="700" width="387" height="316">
	</div>
</section>


<div class="modal fade" id="registration-login-form-popup" tabindex="-1" role="dialog" aria-labelledby="registration-login-form-popup" aria-hidden="true">
	<div class="modal-dialog window-popup registration-login-form-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-body">
				<div class="registration-login-form">

					<!-- Nav tabs -->
					<ul class="nav nav-tabs" id="registration-form-tabs1" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="login1-tab" data-bs-toggle="tab" href="#login1" role="tab" aria-controls="login1" aria-selected="true">
								<svg class="olymp-login-icon"><use xlink:href="#olymp-login-icon"></use></svg>
							</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="profile1-tab" data-bs-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false">
								<svg class="olymp-register-icon"><use xlink:href="#olymp-register-icon"></use></svg>
							</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content" id="registration-form-tabs-conten1">
						<div class="tab-pane fade show active" id="login1" role="tabpanel" aria-labelledby="login1-tab">
							<div class="title h6">Register to Olympus</div>
							<form class="content">
								<div class="row">
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group label-floating">
											<label class="control-label">First Name</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group label-floating">
											<label class="control-label">Last Name</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>
									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group label-floating">
											<label class="control-label">Your Email</label>
											<input class="form-control" placeholder="" type="email">
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Your Password</label>
											<input class="form-control" placeholder="" type="password">
										</div>

										<div class="form-group date-time-picker label-floating">
											<label class="control-label">Your Birthday</label>
											<input name="datetimepicker" value="10/24/1984" />
											<span class="input-group-addon">
														<svg class="olymp-calendar-icon"><use xlink:href="#olymp-calendar-icon"></use></svg>
													</span>
										</div>

										<div class="form-group label-floating is-select">
											<label class="control-label">Your Gender</label>
											<select class="form-select">
												<option value="MA">Male</option>
												<option value="FE">Female</option>
											</select>
										</div>

										<div class="remember">
											<div class="checkbox">
												<label>
													<input name="optionsCheckboxes" type="checkbox">
													I accept the <a href="#">Terms and Conditions</a> of the website
												</label>
											</div>
										</div>

										<a href="#" class="btn btn-purple btn-lg full-width">Complete Registration!</a>
									</div>
								</div>
							</form>
						</div>

						<div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile1-tab">
							<div class="title h6">Login to your Account</div>
							<form class="content">
								<div class="row">
									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group label-floating">
											<label class="control-label">Your Email</label>
											<input class="form-control" placeholder="" type="email">
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Your Password</label>
											<input class="form-control" placeholder="" type="password">
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

										<a href="#" class="btn btn-lg btn-primary full-width">Login</a>

										<div class="or"></div>

										<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><svg width="16" height="16"><use xlink:href="#olymp-facebook-icon"></use></svg>Login with Facebook</a>

										<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><svg width="16" height="16"><use xlink:href="#olymp-twitter-icon"></use></svg>Login with Twitter</a>


										<p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
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
				<form  method="post" action="">
					<p>Enter your email and click the send code button. You’ll receive a code in your email. Please use that
						code below to change the old password for a new one.
					</p>
					<div class="form-group label-floating">
						<label class="control-label">Your Registered Email <span class="errormsg"  id="idforgot_email"></span></label>
						<input class="form-control" type="email" name="forgot_email" id="forgot_email" >
					</div>
					<button type="button" name="btnrecoverpassword" id="btnrecoverpassword" class="btn btn-purple btn-lg full-width" onclick="validateemailid()">Send me the Code</button>
					<div class="form-group label-floating">
						<label class="control-label">Enter Password Recovery Code <span class="errormsg" id="idrecovery_code"></span></label>
						<input class="form-control" type="text" name="recovery_code" id="recovery_code" readonly >
						<input class="form-control" type="hidden" name="hidden_recovery_code" id="hidden_recovery_code" readonly >
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Your New Password <span class="errormsg"  id="idrecovery_password"></span></label>
						<input class="form-control" type="password" name="recovery_password" id="recovery_password" readonly >
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Confirm the Password <span class="errormsg" id="idrecovery_c_password"></span></label>
						<input class="form-control" type="password" name="recovery_c_password" id="recovery_c_password" readonly >
					</div>
					<button type="submit"  name="btnresetpassword" id="btnresetpassword"  class="btn btn-primary btn-lg full-width" disabled onclick="return validateresetpwdsubmit()">Change your Password!</button>
				</form>
<script>
function validateemailid()
{
	var validatecondtion = 0;
	var forgot_email = document.getElementById("forgot_email").value;
	document.getElementById("idforgot_email").innerHTML ="";
	if(document.getElementById("forgot_email").value == "")
	{
		document.getElementById("idforgot_email").innerHTML ="Kindly enter valid Email ID...";
		validatecondtion = 1;
	}
	if(validatecondtion==1)
	 {
		 return false;
	 }
	 else
	 {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function()
		{
		  if (this.readyState == 4 && this.status == 200)
		  {
			  if(this.responseText == 0)
			  {
				  alert("Email Address not found..");
			  }
			  else
			  {
				document.getElementById("hidden_recovery_code").value = this.responseText;
				$('#forgot_email').attr('readonly', true);
				$('#btnrecoverpassword').attr('disabled', true);
				$('#recovery_code').attr('readonly', false);
				$('#recovery_password').attr('readonly', false);
				$('#recovery_c_password').attr('readonly', false);
				$('#btnresetpassword').attr('disabled', false);
				alert("Password Recovery Code sent to your Email ID.. Kindlly check");
			  }
		  }
		};
		xmlhttp.open("GET","ajaxvalidateemailid.php?forgot_email="+forgot_email,true);
		xmlhttp.send();
	 }
}
</script>
<script>
function validateresetpwdsubmit()
{
	//recovery_code hidden_recovery_code recovery_password recovery_c_password
	var validatecondtion = 0;
	var forgot_email = document.getElementById("forgot_email").value;
	document.getElementById("idrecovery_code").innerHTML ="";
	document.getElementById("idrecovery_password").innerHTML ="";
	document.getElementById("idrecovery_c_password").innerHTML ="";
	if(document.getElementById("recovery_code").value != document.getElementById("hidden_recovery_code").value)
	{
		document.getElementById("idrecovery_code").innerHTML ="Not Valid...";
		validatecondtion = 1;
	}
	if(document.getElementById("recovery_code").value == "")
	{
		document.getElementById("idrecovery_code").innerHTML ="Should not be Empty...";
		validatecondtion = 1;
	}
	if(document.getElementById("recovery_password").value == "")
	{
		document.getElementById("idrecovery_password").innerHTML ="Should not be Empty..";
		validatecondtion = 1;
	}
	if(document.getElementById("recovery_password").value != document.getElementById("recovery_c_password").value)
	{
		document.getElementById("idrecovery_c_password").innerHTML ="Not Matching...";
		validatecondtion = 1;
	}
	if(document.getElementById("recovery_c_password").value == "")
	{
		document.getElementById("idrecovery_c_password").innerHTML ="Should not be Empty...";
		validatecondtion = 1;
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
				<form class="form-inline search-form" method="get" action="publicblog.php">
					<div class="form-group label-floating">
						<label class="control-label">What are you looking for?</label>
						<input class="form-control bg-white" type="text" name="searcharticle" id="searcharticle" required>
					</div>
					<button type="submit" name="btnsearchnotice" value="Search Notice" id="btnsearchnotice" class="btn btn-purple btn-lg">Search</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- ... end Window Popup Main Search -->

<!-- Window-popup Restore Password -->
<div class="modal fade" id="admin_login" tabindex="-1" role="dialog" aria-labelledby="admin_login" aria-hidden="true">
	<div class="modal-dialog window-popup restore-password-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Staff/Admin Login</h6>
			</div>

			<div class="modal-body">
				<form  name="frmuserstafflogin" method="post" action="" onsubmit="return validatestaffloginform()"> 
					<p>Kindly enter valid Login credentials..</p>
					<div class="form-group label-floating">
						<label class="control-label">Login ID <span id="idstaffstaffloginid"></span></label>
						<input class="form-control" id="staffloginid" name="staffloginid" type="text">
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Enter Password <span id="idstaffstaffpassword"></span></label>
						<input class="form-control" name="staffpassword" id="staffpassword" type="password">
					</div>
					<button type="submit" name="btnstafflogin" class="btn btn-primary btn-lg full-width">Click Here to Login</button>
				</form>

			</div>
		</div>
	</div>
</div>
<!-- ... end Window-popup Restore Password -->

<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="popup-chat-responsive" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="#olymp-little-delete"></use></svg>
			</div>
		</div>
		<div class="modal-body">
			<div class="mCustomScrollbar">
				<ul class="notification-list chat-message chat-message-field">
					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>
				</ul>
			</div>

			<form class="need-validation">

		<div class="form-group">
			<textarea class="form-control" placeholder="Press enter to post..."></textarea>
			<div class="add-options-message">
				<a href="#" class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="#olymp-computer-icon"></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="#olymp-happy-sticker-icon"></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat1.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat2.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat3.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat4.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat5.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat6.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat7.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat8.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat9.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat10.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat11.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat12.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat13.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat14.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat15.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat16.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat17.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat18.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat19.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat20.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat21.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat22.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat23.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat24.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat25.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat26.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat27.webp" alt="icon" width="20" height="20">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</form>
		</div>
	</div>

</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->



<a class="back-to-top" href="#">
	<svg class="back-icon" width="14" height="18"><use xlink:href="#olymp-back-to-top"></use></svg>
</a>



<!-- JS Scripts -->
<script src="js/jQuery/jquery-3.5.1.min.js"></script>

<script src="js/libs/jquery.mousewheel.min.js"></script>
<script src="js/libs/perfect-scrollbar.min.js"></script>
<script src="js/libs/imagesloaded.pkgd.min.js"></script>
<script src="js/libs/material.min.js"></script>
<script src="js/libs/selectize.min.js"></script>
<script src="js/libs/swiper.jquery.min.js"></script>
<script src="js/libs/moment.min.js"></script>
<script src="js/libs/daterangepicker.min.js"></script>
<script src="js/libs/isotope.pkgd.min.js"></script>
<script src="js/libs/ajax-pagination.min.js"></script>
<script src="js/libs/jquery.magnific-popup.min.js"></script>
<script src="js/libs/aos.min.js"></script>

<script src="js/main.js"></script>
<script src="js/libs-init/libs-init.js"></script>

<script src="Bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- SVG icons loader -->
<script src="js/svg-loader.js"></script>
<!-- /SVG icons loader -->
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
<script type="application/javascript">
 function validatestaffloginform()
 {
	var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
	var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
	var alphanumbericExp = /^[a-zA-Z0-9]+$/; //Variable to validate only alphabets and space
	var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
	var validatecondtion = 0;
	     
	 document.getElementById("idstaffstaffloginid").innerHTML ="";
	 document.getElementById("idstaffstaffpassword").innerHTML ="";

	 if(!document.frmuserstafflogin.staffloginid.value.match(alphanumbericExp))
	 {
		 document.getElementById("idstaffstaffloginid").innerHTML ="<font color='red'>Only alphabets and numeric values are allowed...</font>";
		 validatecondtion=1;
	 }
	  if(document.frmuserstafflogin.staffloginid.value=="")
	 {
		 document.getElementById("idstaffstaffloginid").innerHTML ="<font color='red'>Login ID should not be empty..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmuserstafflogin.staffpassword.value.length < 8)
	 {
		 document.getElementById("idstaffstaffpassword").innerHTML ="<font color='red'>Staff password must contain 8 characters..</font>";
		 validatecondtion=1;
	 }
	  if(document.frmuserstafflogin.staffpassword.value=="")
	 {
		 document.getElementById("idstaffstaffpassword").innerHTML ="<font color='red'>Staff password should not be empty..</font>";
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
</body>
</html>