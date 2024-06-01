<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
include("dbconnection.php");
$dttime= date("Y-m-d h:i:s");		
if($_POST['comment_type'] =="Comment")
{
	$sql="INSERT INTO timeline_comments(comment_type,student_id,timeline_id,message,date_time) values ('Comment','$_SESSION[student_id]','$_POST[timelineid]','$_POST[txtcmt]','$dttime')";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<SCRIPT>alert('Timeline Comment record inserted successfully..');</SCRIPT>";
	}
}
if($_POST['comment_type'] =="Likes")
{
	$sql="INSERT INTO timeline_comments(comment_type,student_id,timeline_id,date_time) values ('Likes','$_SESSION[student_id]','$_POST[timelineid]','$dttime')";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<SCRIPT>alert('Timeline Comment record inserted successfully..');</SCRIPT>";
	}
}
if($_POST['comment_type'] =="Likes")
{
	$sql="INSERT INTO timeline_comments(comment_type,student_id,timeline_id,date_time) values ('Likes','$_SESSION[student_id]','$_POST[timelineid]','$dttime')";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<SCRIPT>alert('Timeline Comment record inserted successfully..');</SCRIPT>";
	}
}
if($_POST['comment_type'] =="Dislike")
{
	$sql="DELETE from timeline_comments where comment_type='Likes' and timeline_id='" . $_POST['timelineid'] . "'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
}
if($_POST['comment_type'] =="DeleteComment")
{
	$sqltimeline_comments="DELETE from timeline_comments where timeline_comment_id='" . $_POST['timeline_comment_id'] . "'";
	$qsqltimeline_comments = mysqli_query($con,$sqltimeline_comments);
	echo mysqli_error($con);
}
//	Coding to view comment	
$sqlcomments = "SELECT * FROM timeline_comments WHERE ";
if(isset($_POST['timelineid']))
{
	$timelineid= $_POST['timelineid'];
	$sqlcomments = $sqlcomments ." timeline_id='$_POST[timelineid]' ";
}
else
{
	$timelineid= $rstimeline['timeline_id'];
	$sqlcomments = $sqlcomments ." timeline_id='$rstimeline[timeline_id]' ";
}
$sqlcomments = $sqlcomments ." AND comment_type='Comment'";
$qsqlcomments = mysqli_query($con, $sqlcomments);
//Coding to Count Number of comments starts here
echo "<input type='hidden' id='num_comments" . $timelineid . "' name='num_comments" . $timelineid . "' value='" . mysqli_num_rows($qsqlcomments) . "' />";
if(mysqli_num_rows($qsqlcomments) == 0)
{
$numcomments = mysqli_num_rows($qsqlcomments) . " Comments";
}
else if(mysqli_num_rows($qsqlcomments) == 1)
{
$numcomments = mysqli_num_rows($qsqlcomments) . " Comment";
}
else
{
$numcomments = mysqli_num_rows($qsqlcomments) . " Comments";
}
echo "<script>document.getElementById('pannumcomments$timelineid').innerHTML = '$numcomments';</script>";
//Coding to Count Number of comments Ends here
echo mysqli_error($con);
while($rscomments = mysqli_fetch_array($qsqlcomments))
{
	$dtcommentstime = strtotime($rscomments['date_time']);			
	$sqlcommentsstudent = "SELECT * FROM student WHERE student_id='$rscomments[student_id]'";
	$qsqlcommentsstudent = mysqli_query($con, $sqlcommentsstudent);
	echo mysqli_error($con);
	$rscommentsstudent = mysqli_fetch_array($qsqlcommentsstudent);
?>
<li class="comment-item">
	<div class="post__author author vcard inline-items" style="padding-top: 10px;">
		<img loading="lazy" src="<?php
						  if($rscommentsstudent['student_img'] == "")
						  {
							  echo 'images/no-image.png';
						  }
						  else if(file_exists('studentimages/' .$rscommentsstudent['student_img']))
						  {
								echo 'studentimages/' . $rscommentsstudent['student_img'];
						  }
						  else
						  {
							  echo 'images/no-image.png';
						  }
		?>" alt="author" width="36" height="36">
		<div class="author-date">
			<a class="h6 post__author-name fn" href="#"><?php echo $rscommentsstudent['student_name']; ?></a>
			<div class="post__date">
				<time class="published" datetime="2017-03-24T18:18">
					<?php echo date("D d M Y h:i:s A",$dtcommentstime); ?>
				</time>
			</div>
		</div>
		<?php
		if($_SESSION['student_id'] == $rscomments['student_id'])
		{
		?>
		<a href="" class="more" onclick="delcomments(<?php echo $timelineid; ?>,<?php echo $rscomments['timeline_comment_id']; ?>);return false;" ><svg class="olymp-little-delete"><use xlink:href="#olymp-little-delete"></use></svg></a>
		<?php
		}
		?>
	</div>
	<p><?php echo $rscomments['message']; ?></p>
	<?php
	/*
	<a href="#" class="post-add-icon inline-items">
		<svg class="olymp-heart-icon">
			<use xlink:href="#olymp-heart-icon"></use>
		</svg>
		<span>2</span>
	</a>
	<a href="#" class="reply">Reply</a>
	*/
	?>
</li>
<?php						
}
?>
