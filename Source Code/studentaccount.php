<?php
include("header.php");
?>
<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="top-header top-header-favorit">
					<div class="profile-section with-social-menu-tabs">
						<div class="row">
							<div class="col col-xl-8 m-auto col-lg-8 col-md-12">

								<ul class="nav nav-tabs social-menu-tabs" id="social-menu-tabs" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link 
										<?php
										if(isset($_GET['view']))
										{
											if($_GET['view'] == "viewstudentaccount")
											{
											echo " active ";
											}
										}
										else
										{
											echo " active ";
										}
										?>" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">
											<svg class="olymp-info-icon">
												<use xlink:href="#olymp-status-icon"></use>
											</svg>
											View Student Account
										</a>
									</li>

									<li class="nav-item" role="presentation">
										<a class="nav-link 
										<?php
										if($_GET['view'] == "viewpendingstudentaccount")
										{
										echo " active ";
										}
										?>" id="statistics-tab" data-bs-toggle="tab" href="#statistics" role="tab" aria-controls="statistics" aria-selected="false">
											<svg class="olymp-week-calendar-icon">
												<use xlink:href="#olymp-week-calendar-icon"></use>
											</svg>
											View Pending Accounts
										</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Tab panes -->
<div class="tab-content">

	<div class="tab-pane fade <?php
	if(isset($_GET['view']))
	{
		if($_GET['view'] == "viewstudentaccount")
		{
		echo " show active ";
		}
	}
	else
	{
		echo " show active ";
	}
	?>" id="about" role="tabpanel" aria-labelledby="about-tab"><?php 
	include("viewstudentaccount.php"); 
	?></div>
	<div class="tab-pane fade <?php
	if($_GET['view'] == "viewpendingstudentaccount")
	{
	echo " show active ";
	}
	?>" id="statistics" role="tabpanel" aria-labelledby="statistics-tab"><?php 
	include("viewpendingstudentaccount.php"); 
	?></div>

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