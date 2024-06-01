<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sql = "DELETE FROM discussion WHERE discussion_id='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Discussion record deleted successfully..');</script>";
	}
}
?>
<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>

<!-- Tab panes -->
<div class="tab-content">
	<div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">View Discussions</h6>
				</div>
				<div class="ui-block-content">
					<form  action="" class="contact_form" method="post" name="frmstudent">
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 table-responsive" >
<table border="1" border="1" id="datatable" class="table table-striped table-bordered" cellspacing="0" style="width:100%;">
   <thead>
  <tr>
    <th scope="col">Student</th>
    <th scope="col">Course</th>
    <th scope="col">Discussion Description</th>
    <th scope="col">Date Time</th>
     <th scope="col">Action</th>
  </tr>
  </thead>
  <tbody>
  <?php  
  $sql ="SELECT * FROM discussion";
  $qsql = mysqli_query($con, $sql);
  echo mysqli_error($con);
  while($rsrec = mysqli_fetch_array($qsql))
  {
	  $sqlstudent = "SELECT * FROM student WHERE student_id='$rsrec[student_id]'";
	  $qsqlstudent = mysqli_query($con,$sqlstudent);
	  $rsstudent = mysqli_fetch_array($qsqlstudent);
	  
	  $sqlcourse = "SELECT * FROM course WHERE course_id='$rsrec[course_id]'";
	  $qsqlcourse = mysqli_query($con,$sqlcourse);
	  $rscourse = mysqli_fetch_array($qsqlcourse);
	  
	  $sqlsubject= "SELECT * FROM subject WHERE subject_id='$rsrec[subject_id]'";
	  $qsqlsubject = mysqli_query($con,$sqlsubject);
	  $rssubject = mysqli_fetch_array($qsqlsubject);
	  
    echo "<tr>
    <td>&nbsp;$rsstudent[student_name]</td>
    <td><strong>Course:</strong> $rscourse[course]<hr><strong>Semster:</strong> $rsrec[semester]<hr><strong>Subject:</strong> $rssubject[subject]</td>
    <td><b style='color:red'>$rsrec[discussion_title]</b>&nbsp;$rsrec[discussion_description]</td>
    <td>&nbsp;$rsrec[date_time]</td>
	<td>&nbsp;<a href='viewdiscussion.php?delid=$rsrec[discussion_id]' onclick='return deleteconfirm()' class='btn btn-danger'>Delete</a></td>
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
 	
	</div>
</div>


<!-- Playlist Popup -->

<div class="window-popup playlist-popup" tabindex="-1" role="dialog" aria-labelledby="playlist-popup" aria-hidden="true">

	<a href="" class="icon-close js-close-popup">
		<svg class="olymp-close-icon">
			<use xlink:href="#olymp-close-icon"></use>
		</svg>
	</a>

	<div class="mCustomScrollbar">
		<table class="playlist-popup-table">

			<thead>

			<tr>

				<th class="play">
					PLAY
				</th>

				<th class="cover">
					COVER
				</th>

				<th class="song-artist">
					SONG AND ARTIST
				</th>

				<th class="album">
					ALBUM
				</th>

				<th class="released">
					RELEASED
				</th>

				<th class="duration">
					DURATION
				</th>

				<th class="spotify">
					GET IT ON SPOTIFY
				</th>

				<th class="remove">
					REMOVE
				</th>
			</tr>

			</thead>

			<tbody>
			<tr>
				<td class="play">
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big">
							<use xlink:href="#olymp-music-play-icon-big"></use>
						</svg>
					</a>
				</td>
				<td class="cover">
					<div class="playlist-thumb">
						<img loading="lazy" src="img/playlist19.webp" alt="thumb-composition" width="34" height="34">
					</div>
				</td>
				<td class="song-artist">
					<div class="composition">
						<a href="#" class="composition-name">We Can Be Heroes</a>
						<a href="#" class="composition-author">Jason Bowie</a>
					</div>
				</td>
				<td class="album">
					<a href="#" class="album-composition">Ziggy Firedust</a>
				</td>
				<td class="released">
					<div class="release-year">2014</div>
				</td>
				<td class="duration">
					<div class="composition-time">
						<time class="published" datetime="2017-03-24T18:18">6:17</time>
					</div>
				</td>
				<td class="spotify">
					<svg class="composition-icon" width="22" height="22">
						<use xlink:href="#olymp-spotify-icon"></use>
					</svg>
				</td>
				<td class="remove">
					<a href="#" class="remove-icon">
						<svg class="olymp-close-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
					</a>
				</td>
			</tr>

			<tr>
				<td class="play">
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big">
							<use xlink:href="#olymp-music-play-icon-big"></use>
						</svg>
					</a>
				</td>
				<td class="cover">
					<div class="playlist-thumb">
						<img loading="lazy" src="img/playlist6.webp" alt="thumb-composition" width="34" height="34">
					</div>
				</td>
				<td class="song-artist">
					<div class="composition">
						<a href="#" class="composition-name">The Past Starts Slow and Ends</a>
						<a href="#" class="composition-author">System of a Revenge</a>
					</div>
				</td>
				<td class="album">
					<a href="#" class="album-composition">Wonderize</a>
				</td>
				<td class="released">
					<div class="release-year">2014</div>
				</td>
				<td class="duration">
					<div class="composition-time">
						<time class="published" datetime="2017-03-24T18:18">6:17</time>
					</div>
				</td>
				<td class="spotify">
					<svg class="composition-icon" width="22" height="22">
						<use xlink:href="#olymp-spotify-icon"></use>
					</svg>
				</td>
				<td class="remove">
					<a href="#" class="remove-icon">
						<svg class="olymp-close-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
					</a>
				</td>
			</tr>

			<tr>
				<td class="play">
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big">
							<use xlink:href="#olymp-music-play-icon-big"></use>
						</svg>
					</a>
				</td>
				<td class="cover">
					<div class="playlist-thumb">
						<img loading="lazy" src="img/playlist7.webp" alt="thumb-composition" width="34" height="34">
					</div>
				</td>
				<td class="song-artist">
					<div class="composition">
						<a href="#" class="composition-name">The Pretender</a>
						<a href="#" class="composition-author">Kung Fighters</a>
					</div>
				</td>
				<td class="album">
					<a href="#" class="album-composition">Warping Lights</a>
				</td>
				<td class="released">
					<div class="release-year">2014</div>
				</td>
				<td class="duration">
					<div class="composition-time">
						<time class="published" datetime="2017-03-24T18:18">6:17</time>
					</div>
				</td>
				<td class="spotify">
					<svg class="composition-icon" width="22" height="22">
						<use xlink:href="#olymp-spotify-icon"></use>
					</svg>
				</td>
				<td class="remove">
					<a href="#" class="remove-icon">
						<svg class="olymp-close-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
					</a>
				</td>
			</tr>

			<tr>
				<td class="play">
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big">
							<use xlink:href="#olymp-music-play-icon-big"></use>
						</svg>
					</a>
				</td>
				<td class="cover">
					<div class="playlist-thumb">
						<img loading="lazy" src="img/playlist8.webp" alt="thumb-composition" width="34" height="34">
					</div>
				</td>
				<td class="song-artist">
					<div class="composition">
						<a href="#" class="composition-name">Seven Nation Army</a>
						<a href="#" class="composition-author">The Black Stripes</a>
					</div>
				</td>
				<td class="album">
					<a href="#" class="album-composition ">Icky Strung (LIVE at Cube Garden)</a>
				</td>
				<td class="released">
					<div class="release-year">2014</div>
				</td>
				<td class="duration">
					<div class="composition-time">
						<time class="published" datetime="2017-03-24T18:18">6:17</time>
					</div>
				</td>
				<td class="spotify">
					<svg class="composition-icon" width="22" height="22">
						<use xlink:href="#olymp-spotify-icon"></use>
					</svg>
				</td>
				<td class="remove">
					<a href="#" class="remove-icon">
						<svg class="olymp-close-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
					</a>
				</td>
			</tr>

			<tr>
				<td class="play">
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big">
							<use xlink:href="#olymp-music-play-icon-big"></use>
						</svg>
					</a>
				</td>
				<td class="cover">
					<div class="playlist-thumb">
						<img loading="lazy" src="img/playlist9.webp" alt="thumb-composition" width="34" height="34">
					</div>
				</td>
				<td class="song-artist">
					<div class="composition">
						<a href="#" class="composition-name">Leap of Faith</a>
						<a href="#" class="composition-author">Eden Artifact</a>
					</div>
				</td>
				<td class="album">
					<a href="#" class="album-composition">The Assassins’s Soundtrack</a>
				</td>
				<td class="released">
					<div class="release-year">2014</div>
				</td>
				<td class="duration">
					<div class="composition-time">
						<time class="published" datetime="2017-03-24T18:18">6:17</time>
					</div>
				</td>
				<td class="spotify">
					<svg class="composition-icon" width="22" height="22">
						<use xlink:href="#olymp-spotify-icon"></use>
					</svg>
				</td>
				<td class="remove">
					<a href="#" class="remove-icon">
						<svg class="olymp-close-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
					</a>
				</td>
			</tr>

			<tr>
				<td class="play">
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big">
							<use xlink:href="#olymp-music-play-icon-big"></use>
						</svg>
					</a>
				</td>
				<td class="cover">
					<div class="playlist-thumb">
						<img loading="lazy" src="img/playlist10.webp" alt="thumb-composition" width="34" height="34">
					</div>
				</td>
				<td class="song-artist">
					<div class="composition">
						<a href="#" class="composition-name">Killer Queen</a>
						<a href="#" class="composition-author">Archiduke</a>
					</div>
				</td>
				<td class="album">
					<a href="#" class="album-composition ">News of the Universe</a>
				</td>
				<td class="released">
					<div class="release-year">2014</div>
				</td>
				<td class="duration">
					<div class="composition-time">
						<time class="published" datetime="2017-03-24T18:18">6:17</time>
					</div>
				</td>
				<td class="spotify">
					<svg class="composition-icon" width="22" height="22">
						<use xlink:href="#olymp-spotify-icon"></use>
					</svg>
				</td>
				<td class="remove">
					<a href="#" class="remove-icon">
						<svg class="olymp-close-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
					</a>
				</td>
			</tr>
			</tbody>
		</table>
	</div>

	<!----------------------------------------------- MediaPlayer ----------------------------------------------------->

	<audio id="mediaplayer" data-showplaylist="true">
		<source src="mp3/Twice.mp3" title="Track 1" data-poster="track1.webp" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 2" data-poster="track2.webp" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 3" data-poster="track3.webp" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 4" data-poster="track4.webp" type="audio/mpeg">
	</audio>

	<!-- JS library for MediaPlayer -->
	<script defer src="js/libs/mediaelement-and-player.min.js"></script>
	<script defer src="js/libs/mediaelement-playlist-plugin.min.js"></script>
	<!-- ...end JS library for MediaPlayer -->

	<!------------------------------------------------ ... end MediaPlayer -------------------------------------------->

</div>

<!-- ... end Playlist Popup -->
<?php
include("footer.php");
?>
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