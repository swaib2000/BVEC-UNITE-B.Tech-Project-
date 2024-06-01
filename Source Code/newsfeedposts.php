<?php
include("myprofile.php");
$sqltimeline = "SELECT * FROM timeline";
if(isset($_GET['timeline_id']))
{
	$sqltimeline = $sqltimeline . " WHERE timeline_id='" . $_GET['timeline_id'] . "' ";
}
$sqltimeline = $sqltimeline . " order by timeline_id desc";
$qsqltimeline = mysqli_query($con, $sqltimeline);
	 while($rstimeline = mysqli_fetch_array($qsqltimeline))
		{
			$sqlstudent = "SELECT * FROM student WHERE student_id='$rstimeline[student_id]'";
			$qsqlstudent = mysqli_query($con, $sqlstudent);
			$rsstudent = mysqli_fetch_array($qsqlstudent);
			$dttime = strtotime($rstimeline['date_time']);
			$sqlLikes = "SELECT * FROM timeline_comments WHERE timeline_id='$rstimeline[timeline_id]' AND comment_type='Likes' AND student_id='$_SESSION[student_id]' ";
			$qsqlLikes = mysqli_query($con, $sqlLikes);
			$nooflikes = mysqli_num_rows($qsqlLikes);
			$sqlLikescount = "SELECT * FROM timeline_comments WHERE timeline_id='$rstimeline[timeline_id]' AND comment_type='Likes' ";
			$qsqlLikescount = mysqli_query($con, $sqlLikescount);
			$nooflikescount = mysqli_num_rows($qsqlLikescount);
?>
			<div class="ui-block" id="wallpostid<?php echo $rstimeline[0]; ?>">
				<article class="hentry post has-post-thumbnail">
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="<?php
							if($rsstudent['student_img'] == "")
							{
							  echo 'images/no-image.png';
							}
							else if(file_exists('studentimages/' .$rsstudent['student_img']))
							{
								echo 'studentimages/' . $rsstudent['student_img'];
							}
							else
							{
							  echo 'images/no-image.png';
							}
						?>" alt="author" style='width: 42px;height: 42px;'>
						<div class="author-date">
							<a class="h6 post__author-name fn" href="#"><?php echo $rsstudent['student_name']; ?></a>
							<div class="post__date">
								<time class="published" datetime="2004-07-24T18:18">
									<?php echo date("M Y D d",$dttime) . " at " . date("h:i A",$dttime);; ?>
								</time>
							</div>
						</div>				
					<?php
					if($_SESSION['student_id'] == $rsstudent['student_id'])
					 {
					?>
		<a href="" class="more" onclick="delpost(<?php echo $rstimeline[0]; ?>);return false;" ><svg class="olymp-little-delete"><use xlink:href="#olymp-little-delete"></use></svg></a>
					<?php
					 }
					 ?>
					</div>
				
					<p 
					<?php
					if($rstimeline['post_type'] == "Text")
					{
					echo ' style="font-size: large;text-align:justify;" ';
					}
					?>
					><?php echo $rstimeline['text_message']; ?></p>
					<?php
					if($rstimeline['post_type'] == "Image")
					{
					?>
						<div class="post-block-photo js-zoom-gallery">
							<a href="imgwallpost/<?php echo $rstimeline['image_path']; ?>" class="full-width"><img loading="lazy" src="imgwallpost/<?php echo $rstimeline['image_path']; ?>" alt="photo" style="width: 100%;"></a>
						</div>
					<?php
					}
					if($rstimeline['post_type'] == "Video")
					{
					?>
						<div class="post-thumb"><center><video style='width: 100%;' controls><source style='width: 100%;'  src='vidwallpost/<?php echo $rstimeline['video_path']; ?>' id='video_here' ></video></center></div>
					<?php
					}
					?>
						
					<div class="post-additional-info inline-items">
						<a href="#" class="post-add-icon inline-items" >
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span id='countlikes<?php echo $rstimeline['timeline_id']; ?>'><?php
							if($nooflikescount  ==0)
							{
								echo "0 Likes";
							}
							else if($nooflikescount  ==1)
							{
								echo $nooflikescount . " Like";
							}
							else
							{
								echo $nooflikescount . " Likes";
							}
							?></span>
						</a>
				<?php
				/*
						<ul class="friends-harmonic">
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic7.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic8.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic9.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>
						<div class="names-people-likes">
							<a href="#">You</a>, <a href="#">Elaine</a> and
							<br>22 more liked this
						</div>
				*/
				?>
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span id="pannumcomments<?php echo $rstimeline['timeline_id']; ?>">0 Comments</span>
							</a>
							<?php
							/*
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>2 Shares</span>
							</a>
							*/
							?>
						</div>
					</div>
				
<div class="control-block-button post-control-button">
<?php
//############################
$sqlLikes = "SELECT * FROM timeline_comments WHERE timeline_id='$rstimeline[timeline_id]' AND comment_type='Likes' AND student_id='$_SESSION[student_id]' ";
$qsqlLikes = mysqli_query($con, $sqlLikes);
$nooflikes = mysqli_num_rows($qsqlLikes);
//############################
$sqlLikescount = "SELECT * FROM timeline_comments WHERE timeline_id='$rstimeline[timeline_id]' AND comment_type='Likes' ";
$qsqlLikescount = mysqli_query($con, $sqlLikescount);
$nooflikescount = mysqli_num_rows($qsqlLikescount);
//############################
?>
<div id="changeicon<?php echo $rstimeline['timeline_id']; ?>">
	<?php
	 if(mysqli_num_rows($qsqlLikes) == 0)
	 {
	?>
		<a href="" class="btn btn-control" onclick="loadlikes(<?php echo $rstimeline['timeline_id']; ?>,<?php echo $nooflikescount; ?>);return false;" ><svg class="olymp-like-post-icon"><use xlink:href="#olymp-like-post-icon"></use></svg></a>
	<?php
	 }
	 else
	 {
	?>
		<a href="" class="btn btn-control" style="background-color: #ff5e3a;"  onclick="loaddislikes(<?php echo $rstimeline['timeline_id']; ?>,<?php echo $nooflikescount; ?>);return false;" ><svg class="olymp-like-post-icon"><use xlink:href="#olymp-like-post-icon"></use></svg></a>
	<?php
	 }
	?>
</div>
<a href="#" class="btn btn-control"  onclick="$('#txtcmt<?php echo $rstimeline['timeline_id']; ?>').focus();return false;" ><svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg></a>  
<?php
/*
<a href="#" class="btn btn-control">
	<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
</a>
*/
?>
</div>
				</article>
				<!-- Comments Starts-->
				<ul class="comments-list">

					<li class="comment-item has-children">
						<ul class="children"  id='wallpostcomment<?php echo $rstimeline['timeline_id']; ?>'><?php include("timelinecomment.php"); ?></ul>					
					</li>
				</ul>
				<!-- ...  Comments ends-->
				
				<!-- Comment Form  -->
				<form class="comment-form inline-items">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="<?php echo $profileimg; ?>" style="width: 36px;height: 36px;" alt="author">
						<div class="form-group with-icon-right ">
							<textarea class="form-control"  name="txtcmt" id="txtcmt<?php echo $rstimeline['timeline_id']; ?>"  placeholder="Type Comment and Press Enter" onkeyup="submitcomment(<?php echo $rstimeline['timeline_id']; ?>,this.value,event);" ></textarea>
							<?php
							/*
							<div class="add-options-message">
								<a href="#" class="options-message" data-bs-toggle="modal" data-bs-target="#update-header-photo">
									<svg class="olymp-camera-icon">
										<use xlink:href="#olymp-camera-icon"></use>
									</svg>
								</a>
							</div>
							*/
							?>
						</div>
					</div>
					<?php
					/*
					<button type="button" class="btn btn-md-2 btn-primary" onkeyup="submitcomment(<?php echo $rstimeline['timeline_id']; ?>,txtcmt<?php echo $rstimeline['timeline_id']; ?>.value,event);" >Post Comment</button>
					*/
					?>
				</form>
				
				<!-- ... end Comment Form  -->
				
			</div>
<?php
		}
?>