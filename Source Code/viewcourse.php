<?php
include("header.php");
if(!isset($_SESSION['user_id']))
{
	echo "<script>window.location='userlogin.php';</script>";
}
if(isset($_GET['delid']))
{
	$sql = "DELETE FROM course WHERE course_id='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Course record deleted successfully..');</script>";
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
					<h6 class="title">View Course</h6>
				</div>
				<div class="ui-block-content">
						<div class="row">
							<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
<table border="1" id="datatable" class="table table-striped table-bordered" cellspacing="0" style="width:100%;">
<thead>
  <tr>
    <th width="49" scope="col">Course</th>
    <th width="94" scope="col">Course description </th>
    <th width="144" scope="col">Action</th>
  </tr>
  </thead>
  <tbody>
<?php  
  $sql ="SELECT * FROM course";
  $qsql = mysqli_query($con, $sql);
  while($rsrec = mysqli_fetch_array($qsql))
  {
  echo "<tr>
    <td>&nbsp;$rsrec[course]</td>
    <td>&nbsp;$rsrec[course_description]</td>
    <td>&nbsp;<a href='course.php?editid=$rsrec[course_id]' class='btn btn-primary'>Edit</a> | <a href='viewcourse.php?delid=$rsrec[course_id]' onclick='return deleteconfirm()' class='btn btn-danger'>Delete</a></td>
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