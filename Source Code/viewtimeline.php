<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT &  ~E_WARNING);
include("dbconnection.php");
if(isset($_GET['delid']))
{
	$sql = "DELETE FROM timeline WHERE timeline_id='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Timeline record deleted successfully..');</script>";
		echo "<script>window.location='monitor.php?view=Timeline';</script>";
	}
}
?>
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">View Timeline</h6>
				</div>
				<div class="ui-block-content">
					<form  action="" class="contact_form" method="post" name="frmstudent">
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 table-responsive" >
<table border="1" id="datatable1" class="table table-striped table-bordered" cellspacing="0" style="width:100%;">
    <thead>        
  <tr>
    <th scope="col">Student</th>
    <th scope="col">Post Type</th>
    <th scope="col">Text Message</th>
    <th scope="col">Image Path</th>
    <th scope="col">Video Path</th>
    <th scope="col">Date Time</th>
     <?php
	if($_SESSION['user_type'] == "Admin")
	{
	?>
    <th scope="col">Action</th>
    <?php
	}
	?>
  </tr>
  </thead>
  <tbody>
  <?php  
  $sql ="SELECT * FROM timeline";
  $qsql = mysqli_query($con, $sql);
  while($rsrec = mysqli_fetch_array($qsql))
  {
	  $sqlstudent = "SELECT * FROM student WHERE student_id='$rsrec[student_id]'";
	  $qsqlstudent = mysqli_query($con,$sqlstudent);
	  $rsstudent = mysqli_fetch_array($qsqlstudent);
     echo "<tr>
    <td>&nbsp;$rsstudent[student_name]</td>
    <td>&nbsp;$rsrec[post_type]</td>
    <td>&nbsp;$rsrec[text_message]</td>
    <td>&nbsp;$rsrec[image_path]</td>
    <td>&nbsp;$rsrec[video_path]</td>
    <td>&nbsp;$rsrec[date_time]</td>";
	if($_SESSION['user_type'] == "Admin")
	{
	echo "<td>&nbsp;<a href='viewtimeline.php?delid=$rsrec[timeline_id]' onclick='return deleteconfirm()' class='btn btn-danger'>Delete</a></td>";
	}
	echo "</tr>";
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