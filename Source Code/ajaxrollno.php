<?php
error_reporting(0);
include("dbconnection.php");
$sql = "SELECT * from student WHERE roll_no='$_GET[rollno]' AND course_id='$_GET[course]' AND semester='$_GET[semester]' AND status='New'";
$qsql = mysqli_query($con,$sql);
?>
<?php
if(mysqli_num_rows($qsql) >= 1)
{
?>
	<input type="hidden" name="dbidrollno" value="1"><font color="#5BAB1A"><strong>Valid</strong></font>
<?php
}
else
{
?>
	<input type="hidden" name="dbidrollno" value=""><font color="#CF232D"><strong>Not valid</strong></font>
<?php
}
?>