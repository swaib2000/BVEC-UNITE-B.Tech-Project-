<?php
include("indexheader.php");
$sql="SELECT * FROM notice WHERE notice_id='$_GET[notice_id]' AND status='Active' ORDER BY date_time DESC";
$qsql=mysqli_query($con,$sql);
$rsrec = mysqli_fetch_array($qsql);
$sqluser = "SELECT * FROM user WHERE user_id='$rsrec[user_id]'";
$qsqluser = mysqli_query($con,$sqluser);
$rsuser = mysqli_fetch_array($qsqluser);
?>
	<!-- ... end Header Standard Landing  -->
	<div class="header-spacer--standard"></div>

	<div class="stunning-header-content">
		<h1 class="stunning-header-title">View Notice</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="#">Home</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item">
				<a href="#">View detailed Notice</a>
			</li>
		</ul>
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>
</div>

<!-- End Stunning header -->


<div class="container mb60 mt50">
	<div class="row">
		<div class="col col-xl-8 m-auto col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">

				
				<!-- Single Post -->
				
				<article class="hentry blog-post single-post single-post-v2">
				
					<a href="#" class="post-category bg-blue-light"><?php echo $rsrec['notice_type']; ?></a>
					<h2 class="h1 post-title"><?php echo $rsrec['title']; ?></h2>
				
					<div class="single-post-additional inline-items">
						<div class="post__author author vcard inline-items">
							<img loading="lazy" alt="author" src="<?php
	if($rsuser['user_img'] == "")
	{
		echo "images/no-image.png";
	}
	else if(file_exists("userprofileimages/" . $rsuser['user_img']))
	{
		echo "userprofileimages/" . $rsuser['user_img'];
	}
	else
	{
		echo "images/no-image.png";
	}
							?>" class="avatar" width="28" height="28">
							<div class="author-date not-uppercase">
								<a class="h6 post__author-name fn" href="#"><?php echo $rsuser['name']; ?></a>
								<div class="author_prof">
									<?php echo $rsuser['user_type']; ?>
								</div>
							</div>
						</div>
						<div class="post-date-wrap inline-items">
							<svg class="olymp-calendar-icon">
								<use xlink:href="#olymp-calendar-icon"></use>
							</svg>
							<div class="post-date">
								<a class="h6 date" href="#"><?php echo date("d-m-Y h:i A",strtotime($rsrec['date_time'])); ?></a>
								<span>Date</span>
							</div>
						</div>
						<?php
						/*
						<div class="post-comments-wrap inline-items">
							<svg class="olymp-comments-post-icon">
								<use xlink:href="#olymp-comments-post-icon"></use>
							</svg>
							<div class="post-comments">
								<a class="h6 comments" href="#">14</a>
								<span>Comments</span>
							</div>
						</div>
						*/
						?>
					</div>
				
					<div class="post-thumb">
							<?php
							if($rsrec['uploads'] == "")
							{
							?>
							<img loading="lazy" src="images/no-image.png" alt="author" width="769" height="522">
							<?php
							}
							else if(file_exists("noticeimages/".$rsrec['uploads']))
							{
							?>
							<img loading="lazy" src="<?php echo "noticeimages/".$rsrec['uploads']; ?>" alt="author" width="769" height="522">
							<?php
							}
							else
							{
							?>
							<img loading="lazy" src="images/no-image.png" alt="author" width="769" height="522">
							<?php
							}
							?>
					</div>
				
				
					<div class="post-content-wrap">
				
						<div class="post-content">
							<h5 class="weight-normal"><?php echo $rsrec['title']; ?></h5>
							<?php echo $rsrec['description']; ?>
						</div>
					</div>
				
					<div class="socials-shared">
					<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
						<a href="http://www.facebook.com/sharer.php?u=<?php echo $actual_link; ?>" target="_blank" class="social-item bg-facebook">
							<svg width="16" height="16"><use xlink:href="#olymp-facebook-icon"></use></svg>
						</a>
						<a href="http://www.twitter.com/sharer.php?u=<?php echo $actual_link; ?>" target="_blank"  class="social-item bg-twitter">
							<svg width="16" height="16"><use xlink:href="#olymp-twitter-icon"></use></svg>
						</a>
						<a href="http://www.google.com/sharer.php?u=<?php echo $actual_link; ?>" target="_blank"  class="social-item bg-google">
							<svg width="16" height="16"><use xlink:href="#olymp-google-plus-g-icon"></use></svg>
						</a>
					</div>
				
				</article>
				
				<!-- ... end Single Post -->

			</div>


			
		</div>


	</div>
</div>

<?php
include("indexfooter.php")
?>