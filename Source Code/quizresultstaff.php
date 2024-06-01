<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT &  ~E_WARNING);
include("dbconnection.php");
$_SESSION['sessionid'] = rand();
if(isset($_GET['editid']))
{
	$sqledit = "SELECT * FROM question WHERE quiz_question_id='$_GET[editid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
if(isset($_GET['delid']))
{
	$sql = "DELETE FROM quiz_result WHERE quiz_result_id='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Quiz Result record deleted successfully..');</script>";
		echo "<script>window.location='quizpanel.php';</script>";
	}
}
?>
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">View Quiz Result</h6>
				</div>
				<div class="ui-block-content">
					<form  action="" class="contact_form" method="post" name="frmstudent">
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 table-responsive" >
<table id="datatable" class="table table-striped table-bordered" cellspacing="0"	>
	<thead>
	  <tr>
		<th >&nbsp;<span id="idq">Student Image</span></th>
		 <th>&nbsp;<span id="idq">Student Name</span></th>
		 <th>&nbsp;<span id="idq">Title</span></th>
		 <th>&nbsp;<span id="idq">Total Marks</span></th>
		 <th>&nbsp;<span id="idq">Scored Marks</span></th>
		 <th>&nbsp;<span id="idq">Percentage</span></th> 
		  <?php
		if($_SESSION['user_type'] == "Admin")
		{
		?>
		 <th style="color:#039" scope="col">&nbsp;<span id="idq">Action</span></th>
		<?php
		}
		?>
		 </tr>
	</thead>
<tbody>
<?php
  $sqlquizresultsidebar = "SELECT  DISTINCT quiz_id, student_id, quiz_result_id FROM quiz_result limit 0,10 ";
  $qsqlquizresultsidebar = mysqli_query($con,$sqlquizresultsidebar);
  echo mysqli_error($con);
  while($rsquizresultsidebar = mysqli_fetch_array($qsqlquizresultsidebar))
  {
				  $scored=0;
				  	  $sqlstudent = "SELECT * FROM student WHERE student_id='$rsquizresultsidebar[student_id]'";
					  $qsqlstudent = mysqli_query($con,$sqlstudent);
					  $rsstudent = mysqli_fetch_array($qsqlstudent);
  						
						$sqlquiz ="SELECT * FROM quiz WHERE quiz_id='$rsquizresultsidebar[quiz_id]'";
		  				$qsqlquiz = mysqli_query($con, $sqlquiz);
		 				$rsrecquiz = mysqli_fetch_array($qsqlquiz);
						  
						  $sqlquiz_result ="SELECT * FROM quiz_result WHERE quiz_id='$rsquizresultsidebar[quiz_id]' AND  student_id='$rsquizresultsidebar[student_id]' ";
							$qsqlquiz_result = mysqli_query($con, $sqlquiz_result);
							$totquestionquiz_result = mysqli_num_rows($qsqlquiz_result);
							while($rsrecquiz_result = mysqli_fetch_array($qsqlquiz_result))
							{
									  if($rsrecquiz_result['correct_ans'] == $rsrecquiz_result['selected_option'])
									  {
										  $scored=$scored+1;
									  }
							} 
						   ?>
<?php
	
	$count=0;
?>

    <tr height='29' width='29'>
    <td height="29" style="color:#039"  scope="col">&nbsp;<span id="idq"><img alt="" src="studentimages/<?php echo $rsstudent['student_img']; ?>" height="35" width="35"></span></td>
     <td height="29" style="color:#039" scope="col">&nbsp;<span id="idq"><strong><?php echo $rsstudent['student_name']; ?></strong></span></td>
      <td height="29" style="color:#039" scope="col">&nbsp;<span id="idq"> <?php echo $rsrecquiz['title']; ?></span></td>
     <td height="29" style="color:#039" scope="col">&nbsp;<span id="idq"><?php 
	 		$sqlquizq ="SELECT * FROM question WHERE quiz_id='$rsquizresultsidebar[quiz_id]' ";
			$qsqlquizq = mysqli_query($con, $sqlquizq);
	 echo mysqli_num_rows($qsqlquizq); 
	 ?></span></td>     
     <td height="29" 
	 style="color:#039" scope="col">&nbsp;<span id="idq"><?php echo $scored; ?></span></td>
    <td height="29" style="color:#039" scope="col">&nbsp;<span id="idq"><?php echo $scored/mysqli_num_rows($qsqlquizq)*100; ?>%</span></td>
   <?php
    if($_SESSION['user_type'] == "Admin")
	{
	echo "<td>&nbsp;<a href='quizresultstaff.php?delid=$rsquizresultsidebar[quiz_result_id]' onclick='return deleteconfirm()' class='btn btn-danger'>Delete</a></td>";
	}
	else
	{
	echo "<td>&nbsp;</td>";
	}	
	?>
	</tr>
<?php 
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