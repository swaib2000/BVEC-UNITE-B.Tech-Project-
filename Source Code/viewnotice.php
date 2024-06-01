<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT &  ~E_WARNING);
include("dbconnection.php");
if(isset($_GET['delid']))
{
	$sql = "DELETE FROM notice WHERE notice_id='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Notice Record deleted successfully..');</script>";
		echo "<script>window.location='noticepanel.php?view=viewnotice';</script>";
	}
}
?>
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">View Notice Board</h6>
				</div>
				<div class="ui-block-content">
					<form  action="" class="contact_form" method="post" name="frmstudent">
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 table-responsive" >
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" style="width: 100%;">
            <thead>
  <tr>
    <th width="54" scope="col">Icon</th>
    <th width="70" scope="col">Notice Type</th>
    <th width="51" scope="col">User</th>
    <th width="78" scope="col">Description</th>
    <th width="67" scope="col">Published on</th>
    <th width="14" scope="col">Action</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $sql="SELECT * FROM notice";
  $qsql=mysqli_query($con,$sql);
   while($rsrec = mysqli_fetch_array($qsql))
  {
	  $sqluser = "SELECT * FROM user WHERE user_id='$rsrec[user_id]'";
	  $qsqluser = mysqli_query($con,$sqluser);
	  $rsuser = mysqli_fetch_array($qsqluser);
    echo "<tr><td>";
	echo "<img src='noticeimages/" . $rsrec['uploads'] ."' >";
	echo "</td>
    <td>&nbsp;$rsrec[notice_type]</td>
    <td>&nbsp;$rsuser[name]</td>
    <td><b>$rsrec[title]</b><br>$rsrec[description]</td>
    <td>" . date("d-m-Y",strtotime($rsrec['date_time'])) ."<br>". date("h:i A",strtotime($rsrec['date_time']))  . "</td>
	<td>&nbsp;<a href='noticepanel.php?editid=$rsrec[notice_id]&view=Notice' class='btn btn-primary' style='width: 100%;'>Edit</a>  <a href='viewnotice.php?delid=$rsrec[notice_id]' onclick='return deleteconfirm()' class='btn btn-danger' style='width: 100%;'>Delete</a></td>
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