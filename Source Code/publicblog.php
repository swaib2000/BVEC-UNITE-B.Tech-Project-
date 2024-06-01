<?php
include("indexheader.php");
?>
	<!-- ... end Header Standard Landing  -->
	<div class="header-spacer--standard"></div>

	<div class="stunning-header-content">
		<h1 class="stunning-header-title">Notice - <?php echo $_GET['notice_type']; ?></h1>

		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="#">Home</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span><?php echo $_GET['notice_type']; ?></span>
			</li>
		</ul>
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>
</div>

<!-- ... end Stunning header -->

<?php
/*
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex1200">
				<div class="ui-block-title">
					<ul class="filter-icons">
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat2.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat15.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat9.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat4.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat6.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat26.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat27.webp" alt="icon" width="20" height="20">
							</a>
						</li>
					</ul>
					<div class="w-select">
						<div class="title">Filter By:</div>
						<fieldset class="form-group">
							<select class="form-select">
								<option value="NU">All Categories</option>
								<option value="NU">Favourite</option>
								<option value="NU">Likes</option>
							</select>
						</fieldset>
					</div>

					<div class="w-select">
						<fieldset class="form-group">
							<select class="form-select">
								<option value="NU">Date (Descending)</option>
								<option value="NU">Date (Ascending)</option>
							</select>
						</fieldset>
					</div>

					<a href="#" data-bs-toggle="modal" data-bs-target="#create-photo-album" class="btn btn-primary btn-md-2">Filter</a>

					<form class="w-search">
						<div class="form-group with-button">
							<input class="form-control" type="text" placeholder="Search Blog Posts......">
							<button>
								<svg class="olymp-magnifying-glass-icon"><use xlink:href="#olymp-magnifying-glass-icon"></use></svg>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
*/
?>

<section class="blog-post-wrap medium-padding80">
	<div class="container">
		<div class="row">
<?php
  $sql="SELECT * FROM notice WHERE ";
  if(isset($_GET['notice_type']))
  {
  $sql = $sql . " notice_type='$_GET[notice_type]' AND ";
  }
  if(isset($_GET['searcharticle']))
  {
  $sql = $sql . " title LIKE '%$_GET[searcharticle]%' AND ";
  }
  $sql = $sql . "  status='Active' ORDER BY date_time DESC";
  $qsql=mysqli_query($con,$sql);
  while($rsrec = mysqli_fetch_array($qsql))
  {
	  $sqluser = "SELECT * FROM user WHERE user_id='$rsrec[user_id]'";
	  $qsqluser = mysqli_query($con,$sqluser);
	  $rsuser = mysqli_fetch_array($qsqluser);
?>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
				<div class="ui-block">

					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<?php
							if($rsrec['uploads'] == "")
							{
							?>
							<img loading="lazy" src="images/no-image.png" alt="photo" width="370" height="261">
							<?php
							}
							else if(file_exists("noticeimages/".$rsrec['uploads']))
							{
							?>
							<img loading="lazy" src="<?php echo "noticeimages/".$rsrec['uploads']; ?>" alt="photo" width="370" height="261">
							<?php
							}
							else
							{
							?>
							<img loading="lazy" src="images/no-image.png" alt="photo" width="370" height="261">
							<?php
							}
							?>
						</div>
					
						<div class="post-content">
							<a href="noticedetailed.php?notice_id=<?php echo $rsrec['notice_id']; ?>" class="post-category bg-blue-light"><?php echo $rsrec['notice_type']; ?></a>
							<a href="noticedetailed.php?notice_id=<?php echo $rsrec['notice_id']; ?>" class="h4 post-title"><b><?php echo $rsrec['title']; ?></b></a>
							<p><?php echo substr($rsrec['description'], 0, 100); ?>...</p>
							<div class="author-date">
								by <a class="h6 post__author-name fn" href="#"><?php echo $rsuser['name']; ?></a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										&nbsp; <?php echo date("d-m-Y h:i A",strtotime($rsrec['date_time'])); ?>
									</time>
								</div>
							</div>
					
							<div class="post-additional-info inline-items">
					
								<div class="comments-shared">
									<a href="noticedetailed.php?notice_id=<?php echo $rsrec['notice_id']; ?>" class="btn btn-primary">Read More</a>
								</div>
					
							</div>
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
<?php
  }
?> 
		</div>
	</div>

<?php
/*
	<!-- Pagination -->
	<nav aria-label="Page navigation">
		<ul class="pagination justify-content-center">
			<li class="page-item disabled">
				<a class="page-link" href="#" tabindex="-1">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div></div></a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">...</a></li>
			<li class="page-item"><a class="page-link" href="#">12</a></li>
			<li class="page-item">
				<a class="page-link" href="#">Next</a>
			</li>
		</ul>
	</nav>
	<!-- ... end Pagination -->
*/
?>
</section>




<!-- Section Call To Action Animation -->

<section class="align-right pt160 pb80 section-move-bg call-to-action-animation">
	<div class="container">
		<div class="row">
			<div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
				<a href="index.php" class="btn btn-primary btn-lg" >Register your <?php echo $_SESSION['project_title']; ?> now..!</a>
			</div>
		</div>
	</div>
	<img class="first-img" alt="guy" src="img/guy.webp" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" width="297" height="254">
	<img class="second-img" alt="rocket" src="img/rocket1.webp" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">
	<div class="content-bg-wrap bg-section1"></div>
</section>

<!-- ... end Section Call To Action Animation -->
<?php
include("indexfooter.php");
?>