<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT &  ~E_WARNING);
include("dbconnection.php");
if(!isset($_SESSION['user_id']))
{
	echo "<script>window.location='userlogin.php';</script>";
}
//acst student_id view
if(isset($_GET['acst']))
{
	$sqlst = "UPDATE student SET status='$_GET[acst]' WHERE student_id='$_GET[student_id]'";
	$qsqlst = mysqli_query($con,$sqlst);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Student Account Status updated successfully');</script>";
		echo "<script>window.location='studentaccount.php?view=viewstudentaccount';</script>";
	}
}
if(isset($_GET['delid']))
{
	$sqltimeline = "SELECT * FROM timeline WHERE student_id='$_GET[delid]'";
    $qsqltimeline = mysqli_query($con,$sqltimeline);
    $rstimeline = mysqli_fetch_array($qsqltimeline);
	$sqltimelinecm = "SELECT * FROM timeline_comments WHERE student_id='$_GET[delid]'";
    $qsqltimelinecm = mysqli_query($con,$sqltimelinecm);
    $rstimelinecm = mysqli_fetch_array($qsqltimelinecm);
	$sqldiscussion = "SELECT * FROM discussion WHERE student_id='$_GET[delid]'";
    $qsqldiscussion = mysqli_query($con,$sqldiscussion);
    $rsdiscussion = mysqli_fetch_array($qsqldiscussion);
	$sqldiscussionreply = "SELECT * FROM discussion_reply WHERE student_id='$_GET[delid]'";
    $qsqldiscussionreply = mysqli_query($con,$sqldiscussionreply);
    $rsdiscussionreply = mysqli_fetch_array($qsqldiscussionreply);
	$sqlquizresult = "SELECT * FROM quiz_result WHERE student_id='$_GET[delid]'";
    $qsqlquizresult = mysqli_query($con,$sqlquizresult);
    $rsquizresult = mysqli_fetch_array($qsqlquizresult);
	$sql = "DELETE FROM student WHERE student_id='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	$sqli="DELETE FROM timeline WHERE student_id='$rstimeline[student_id]'";
	$qsqli= mysqli_query($con,$sqli);
	$sqlicm="DELETE FROM timeline_comments WHERE student_id='$rstimelinecm[student_id]'";
	$qsqlicm= mysqli_query($con,$sqlicm);
	
	$sqlidiscussion="DELETE FROM discussion WHERE student_id='$rsdiscussion[student_id]'";
	$qsqlidiscussion= mysqli_query($con,$sqlidiscussion);
	
	$sqlidiscussionreply="DELETE FROM discussion_reply WHERE student_id='$rsdiscussionreply[student_id]'";
	$qsqlidiscussionreply= mysqli_query($con,$sqlidiscussionreply);
	
	$sqliquizresult="DELETE FROM quiz_result WHERE student_id='$rsquizresult[student_id]'";
	$qsqliquizresult= mysqli_query($con,$sqliquizresult);
	echo "<script>alert('Student record deleted successfully..');</script>";
	echo "<script>window.location='studentaccount.php?view=viewstudentaccount';</script>";
}
?>
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title">Search Student</div>
				<form class="w-search" method="get" action="">
				<input type="hidden" name="view" id="view" value="viewstudentaccount" >
						<div class="form-group with-button">
							<select name="semester" class="form-control" onChange="" >
							  <option value="">Select semester</option>
							  <?php
							  $arr = array("First Semester","Second Semester","Third Semester","Fourth Semester","Fifth Semester","Sixth Semester");
							  foreach($arr as $val)
							  {
								   if($val == $_GET['semester'])
								   {
										echo "<option value='$val' selected>$val</option>";
								   }
								   else
								   {
										echo "<option value='$val' >$val</option>";
								   }
							  }
							  ?>
						   </select>
							<button type="submit" class="" name="btnsemester" value="Select Semester">
								<svg class="olymp-magnifying-glass-icon"><use xlink:href="#olymp-magnifying-glass-icon"></use></svg>
							</button>
						</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">View Students</h6>
				</div>
				<div class="ui-block-content">
					<form  action="" class="contact_form" method="post" name="frmstudent">
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 table-responsive" >
<table border="1" border="1" id="datatable" class="table table-striped table-bordered" cellspacing="0" style="width:100%;">
    <thead>        
  <tr>
    <th scope="col">Image</th>
    <th scope="col">Student Name</th>
    <th scope="col">Roll No</th>
    <th scope="col">Course</th>
    <th scope="col">Semester</th>
    <th scope="col">Email ID</th>
    <th scope="col">Mobile No</th>
    <th scope="col">Status</th>
  </tr>
  </thead>
  <tbody>
  <?php  
  $sql11 ="SELECT * FROM student WHERE status='Active'";
  if(isset($_GET['semester']))
  {
	  $sql11 = $sql11 . " AND semester='$_GET[semester]'";
  }
  $qsql11 = mysqli_query($con, $sql11);
  echo mysqli_error($con);
	while($rsrec = mysqli_fetch_array($qsql11))
  {
	  $sqlcourse1 = "SELECT * FROM course WHERE course_id='$rsrec[course_id]'";
	  $qsqlcourse1 = mysqli_query($con,$sqlcourse1);
	  $rscourse1 = mysqli_fetch_array($qsqlcourse1);
    echo "<tr>
    <td>&nbsp;<img src='";
	if($rsrec['student_img'] == "")
	{
		echo "images/no-image.png";
	}
	else if(file_exists("studentimages/" . $rsrec['student_img']))
	{
		echo "studentimages/$rsrec[student_img]";
	}
	else
	{
		echo "images/no-image.png";
	}
	echo "' width='50' height='50' ></td>";
    echo "<td>&nbsp;$rsrec[student_name]</td>
    <td>&nbsp;$rsrec[roll_no]</td>
    <td>&nbsp;$rscourse1[course]</td>
    <td>&nbsp;$rsrec[semester]</td>
    <td>&nbsp;$rsrec[email_id]</td>
    <td>&nbsp;$rsrec[mob_no]</td>
    <td>&nbsp;$rsrec[status]<br>";
	if($rsrec['status'] == "Active")
	{
	echo "<a href='viewstudentaccount.php?student_id=$rsrec[student_id]&acst=Inactive&view=viewstudentaccount' onclick='return confirmchange()' class='social-item bg-dribbble'>Deactivate</a>";
	}
	echo "</td>";
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
function confirmchange()
{
	if(confirm("Are yous sure want to change the status?") == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
function checkall()
{
	var select_all = document.getElementById("select_all"); //select all checkbox
	var checkboxes = document.getElementsByClassName("checkbox"); //checkbox items
	
	//select all checkboxes
	select_all.addEventListener("change", function(e){
		for (i = 0; i < checkboxes.length; i++) { 
			checkboxes[i].checked = select_all.checked;
		}
	});
	
	
	for (var i = 0; i < checkboxes.length; i++) {
		checkboxes[i].addEventListener('change', function(e){ //".checkbox" change 
			//uncheck "select all", if one of the listed checkbox item is unchecked
			if(this.checked == false){
				select_all.checked = false;
			}
			//check "select all" if all checkbox items are checked
			if(document.querySelectorAll('.checkbox:checked').length == checkboxes.length){
				select_all.checked = true;
			}
		});
	}
}
</script>