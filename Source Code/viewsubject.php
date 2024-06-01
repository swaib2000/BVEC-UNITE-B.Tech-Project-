<?php
include("header.php");
if(!isset($_SESSION['user_id']))
{
	echo "<script>window.location='userlogin.php';</script>";
}
if(isset($_GET['delid']))
{
	$sql = "DELETE FROM subject WHERE subject_id='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Subject record deleted successfully..');</script>";
		echo "<script>window.location='viewsubject.php';</script>";
	}
}
?>
<div class="header-spacer header-spacer"></div>


<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">View Subjects</h6>
				</div>
				<div class="ui-block-content">
						<div class="row">
							<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
<table border="1" id="datatable" class="table table-striped table-bordered" cellspacing="0" style="width:100%;">
  <thead>
  <tr>
    <th scope="col">Subject</th>
    <th scope="col">Course</th>
    <th scope="col">Semester</th>
    <th scope="col">Note</th>
    <th scope="col">Action</th>
  </tr>
  </thead>
  <tbody>
  <?php  
  $sql ="SELECT * FROM subject";
  $qsql = mysqli_query($con, $sql);
  while($rsrec = mysqli_fetch_array($qsql))
  {
	  $sqlcourse = "SELECT * FROM course WHERE course_id='$rsrec[course_id]'";
	  $qsqlcourse = mysqli_query($con,$sqlcourse);
	  $rscourse = mysqli_fetch_array($qsqlcourse);
    echo "<tr>
    <td>&nbsp;$rsrec[subject]</td>
    <td>&nbsp;$rscourse[course]</td>
	<td>&nbsp;$rsrec[semester]</td>
    <td>&nbsp;$rsrec[note]</td>
	<td>&nbsp;<a href='settingspanel.php?editid=$rsrec[subject_id]' class='btn btn-primary'>Edit</a> <a href='viewsubject.php?delid=$rsrec[subject_id]' onclick='return deleteconfirm()' class='btn btn-danger'>Delete</a></td>
  </tr>";
  }
  ?>
  </tbody>
</table>
							</div>
						</div>
					
					<!-- ... end Form Favorite Page Information -->
					

				</div>
			</div>

		</div>
<?php
include("inlcudesettingsidebar.php");
?>
	</div>
</div>
<!-- ... end Your Account Personal Information -->
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
<?php
include("footer.php");
?>