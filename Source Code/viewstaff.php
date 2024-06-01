<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT &  ~E_WARNING);
include("dbconnection.php");
if(isset($_GET['delid']))
{	
	$sql = "DELETE FROM user WHERE user_id='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Staff record deleted successfully..');</script>";
		echo "<script>window.location='staffpanel.php?view=viewstaff';</script>";
	}
}
?>
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">View Staff Records</h6>
				</div>
				<div class="ui-block-content">
					<form  action="" class="contact_form" method="post" name="frmstudent">
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 table-responsive" >
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" style="width: 100%;">
            <thead>        
  <tr>
    <th scope="col">Image</th>
    <th scope="col">User Type</th>
    <th scope="col">Name</th>
    <th scope="col">Login Id</th>
    <th scope="col">Status</th>
    <th scope="col">Action</th>
  </tr>
  </thead>
  <tbody>
  <?php  
  $sql ="SELECT * FROM user";
  $qsql = mysqli_query($con, $sql);
  while($rsrec = mysqli_fetch_array($qsql))
  {
    echo "<tr>
    <td>&nbsp;<img src='";
	if($rsrec['user_img'] == "")
	{
		echo "images/no-image.png";
	}
	else if(file_exists("userprofileimages/" . $rsrec['user_img']))
	{
		echo "userprofileimages/" . $rsrec['user_img'];
	}
	else
	{
		echo "images/no-image.png";
	}
	echo "' style='width:50px;height:50px;' > </td>
    <td>&nbsp;$rsrec[user_type]</td>
    <td>&nbsp;$rsrec[name]</td>
    <td>&nbsp;$rsrec[login_id]</td>
    <td>&nbsp;$rsrec[status]</td>
    <td>&nbsp;<a href='staffpanel.php?view=staff&editid=$rsrec[user_id]' class='btn btn-primary'>Edit</a>  <a href='viewstaff.php?delid=$rsrec[user_id]' onclick='return deleteconfirm()' class='btn btn-danger'>Delete</a></td>
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