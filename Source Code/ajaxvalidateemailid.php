<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT &  ~E_WARNING);
include("dbconnection.php");
$sql11 ="SELECT * FROM student WHERE email_id='" . $_GET['forgot_email'] . "'";
$qsql11 = mysqli_query($con, $sql11);
echo mysqli_error($con);
if(mysqli_num_rows($qsql11) == 1)
{
$rsrec = mysqli_fetch_array($qsql11);
$otp = rand(100001,999999);
$cstname = $rsrec['student_name'];
$roll_no = $rsrec['roll_no'];
$emailid = $rsrec['email_id'];
include("phpmailer.php");
$msg = "Hello $cstname, <br><br>
Welcome to <?php echo $_SESSION['project_title']; ?>,<br><br>
You can reset password by entering following Password Recovery Code...<br>
<br>
<b>Your Roll Number is : $roll_no</b>
<br><br>
<b>Password Recovery Code is : $otp </b> <i>(Use this code to Reset password)</i>
<br>
<hr>
<b>Do not share this with anyone.</b>";
sendmail($emailid, $cstname , "OTP for to Reset Password", $msg);
echo $otp;
}
else	
{
	echo 0;
}
?>