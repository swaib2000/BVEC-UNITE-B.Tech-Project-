<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT &  ~E_WARNING);
include("dbconnection.php");
if(isset($_GET['delid']))
{
	$sql = "DELETE FROM study_material WHERE study_material_id='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Study Material record deleted successfully..');</script>";
		echo "<script>window.location='studymaterialpanel.php';</script>";
	}
}
?>
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">View Study materials</h6>
				</div>
				<div class="ui-block-content">
					<form  action="" class="contact_form" method="post" name="frmstudent">
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 table-responsive" >
<table border="1" border="1" id="datatable1" class="table table-striped table-bordered" cellspacing="0" style="width:100%;">
  <thead>
  <tr>
    <th scope="col">Course</th>
    <th scope="col">Semester</th>
    <th scope="col">Subject</th>
    <th scope="col">Title</th>
    <th scope="col">User</th>
    <th scope="col">Description</th>
    <th scope="col">Date Time</th>
    <th scope="col">Study material</th>
    <th scope="col">Action</th>
  </tr>
  </thead>
  <tbody>
  <?php  
  $sql ="SELECT * FROM study_material";
  $qsql = mysqli_query($con, $sql);
   while($rsrec = mysqli_fetch_array($qsql))
  {
	  $sqluser = "SELECT * FROM user WHERE user_id='$rsrec[user_id]'";
	  $qsqluser = mysqli_query($con,$sqluser);
	  $rsuser = mysqli_fetch_array($qsqluser);
  	  $sqlcourse = "SELECT * FROM course WHERE course_id='$rsrec[course_id]'";
	  $qsqlcourse = mysqli_query($con,$sqlcourse);
	  $rscourse = mysqli_fetch_array($qsqlcourse);
  	  $sqlsubject = "SELECT * FROM subject WHERE course_id='$rsrec[course_id]'";
	  $qsqlsubject = mysqli_query($con,$sqlsubject);
	  $rssubject= mysqli_fetch_array($qsqlsubject);
    echo "<tr>
    <td>&nbsp;$rscourse[course]</td>
    <td>&nbsp;$rsrec[semester]</td>
    <td>&nbsp;$rssubject[subject]</td>
    <td>&nbsp;$rsrec[title]</td>
    <td>&nbsp;$rsuser[name]</td>
    <td>&nbsp;$rsrec[description]</td>
	<td>&nbsp;$rsrec[date_time]</td>
    <td>&nbsp;<a href='studymaterialimages/$rsrec[uploads]'  class='btn btn-success' download>Download</a></td>
    <td>&nbsp;<a href='studymaterialpanel.php?view=Edit&editid=$rsrec[study_material_id]'  class='btn btn-primary' style='width: 100%;' >Edit</a> <a href='viewstudymaterial.php?delid=$rsrec[study_material_id]' onclick='return deleteconfirm()'  class='btn btn-danger' style='width: 100%;' >Delete</a></td>
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