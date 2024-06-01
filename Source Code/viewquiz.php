<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT &  ~E_WARNING);
include("dbconnection.php");
$_SESSION['sessionid'] = rand();
if(isset($_GET['delid']))
{
	$sql = "DELETE FROM quiz WHERE quiz_id='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Quiz record deleted successfully..');</script>";
		echo "<script>window.location='quizpanel.php?view=viewquiz';</script>";
	}
}
?>
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">View Quiz & Quiz Questions</h6>
				</div>
				<div class="ui-block-content">
					<form  action="" class="contact_form" method="post" name="frmstudent">
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 table-responsive" >
<table id="datatable1" class="table table-striped table-bordered" cellspacing="0"	>
   <thead>
  <tr>
    <th scope="col">User</th>
    <th scope="col">Course</th>
    <th scope="col">Semester</th>
    <th scope="col">Subject</th>
    <th scope="col">Title</th>
    <th scope="col">Quiz Questions</th>
    <th scope="col">Action</th>
  </tr>
  </thead>
  <tbody>
  <?php  
  $sql ="SELECT * FROM quiz";
  $qsql = mysqli_query($con, $sql);
 while($rsrec = mysqli_fetch_array($qsql))
  {
	  $sqluser = "SELECT * FROM user WHERE user_id='$rsrec[user_id]'";
	  $qsqluser = mysqli_query($con,$sqluser);
	  $rsuser = mysqli_fetch_array($qsqluser);
	  
	  $sqlcourse = "SELECT * FROM course WHERE course_id='$rsrec[course_id]'";
	  $qsqlcourse = mysqli_query($con,$sqlcourse);
	  $rscourse = mysqli_fetch_array($qsqlcourse);
	  
	  $sqlsubject = "SELECT * FROM subject WHERE subject_id='$rsrec[subject_id]'";
	  $qsqlsubject = mysqli_query($con,$sqlsubject);
	  $rssubject = mysqli_fetch_array($qsqlsubject);
	  
	  $sqlcount="SELECT count(*) from question WHERE quiz_id='$rsrec[quiz_id]'";
	  $qsqlcount = mysqli_query($con,$sqlcount);
	  $rscount = mysqli_fetch_array($qsqlcount);
	  
	  echo "<tr>
		<td>&nbsp;$rsuser[name]</td>
		<td>&nbsp;$rscourse[course]</td>
		<td>&nbsp;$rsrec[semester]</td>
		<td>&nbsp;$rssubject[subject]</td>
		<td><strong>$rsrec[title]</strong><br />$rsrec[description]</td>
		<td>";
        if($_SESSION['user_type'] == "Staff")
		   {
		echo "<a href='questions.php?quizid=$rsrec[quiz_id]' class='btn btn-primary' >Add question</a><br />";
		   }
		   echo "<a href='viewquestions.php?quizid=$rsrec[quiz_id]' class='btn 	bg-twitter btn-icon-left'><font color='Blue'>View questions</font></a><br /> ($rscount[0] questions) </td>
		<td>";
	//if($_SESSION['user_type'] == "Staff")
	{
    echo "<a href='quizpanel.php?editid=$rsrec[quiz_id]&view=addquiz' class='btn btn-primary' style='width: 100%;' >Edit</a>";
	}
	echo "<a href='viewquiz.php?delid=$rsrec[quiz_id]&view=viewquiz' onclick='return deleteconfirm()' class='btn btn-danger' style='width: 100%;'>Delete</a></td>
	  </tr>";
  }
  ?>
  </tbody>
</table>
</div>
						</div>
					</form>
				</div>
			</div>

		</div>

	</div>
</div>
  <script type="application/javascript">
function deleteconfirm()
{
	if(confirm("Are you sure want to delete this record?") == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
 </script>