<!DOCTYPE html>
<html lang="en">
<head>

	<title>Components - Posts And Comments</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">


	<!-- Theme Font -->
	<link rel="preload" type="text/css" href="css/theme-font.min.css" as="style">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.min.css">

	<!-- Main RTL CSS -->
	<!--<link rel="stylesheet" type="text/css" href="css/rtl.min.css">-->

</head>
<body>


<!-- Preloader -->

<div id="hellopreloader">
	<div class="preloader">
		<svg width="45" height="45" stroke="#fff">
			<g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="8">
					<animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6"/>
				</circle>
			</g>
		</svg>

		<div class="text">Loading ...</div>
	</div>
</div>

<!-- ... end Preloader -->
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-12">
			<h2 class="presentation-margin">Posts and Comments</h2>
		</div>

		<div class="col col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="ui-block">

				<!-- Post -->
				
				<article class="hentry post">
				
						<div class="post__author author vcard inline-items">
							<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
							<div class="author-date">
								<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										19 hours ago
									</time>
								</div>
							</div>
				
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Edit Post</a>
									</li>
									<li>
										<a href="#">Delete Post</a>
									</li>
									<li>
										<a href="#">Turn Off Notifications</a>
									</li>
									<li>
										<a href="#">Select as Featured</a>
									</li>
								</ul>
							</div>
				
						</div>
				
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
							pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
							mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
							accusantium doloremque.
						</p>
				
						<div class="post-additional-info inline-items">
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
								<span>8</span>
							</a>
				
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
								<a href="#">Jenny</a>, <a href="#">Robert</a> and
								<br>6 more liked this
							</div>
				
				
							<div class="comments-shared">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon">
										<use xlink:href="#olymp-speech-balloon-icon"></use>
									</svg>
									<span>17</span>
								</a>
				
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-share-icon">
										<use xlink:href="#olymp-share-icon"></use>
									</svg>
									<span>24</span>
								</a>
							</div>
				
				
						</div>
				
						<div class="control-block-button post-control-button">
				
							<a href="#" class="btn btn-control featured-post">
								<svg class="olymp-trophy-icon">
									<use xlink:href="#olymp-trophy-icon"></use>
								</svg>
							</a>
				
							<a href="#" class="btn btn-control">
								<svg class="olymp-like-post-icon">
									<use xlink:href="#olymp-like-post-icon"></use>
								</svg>
							</a>
				
							<a href="#" class="btn btn-control">
								<svg class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</a>
				
							<a href="#" class="btn btn-control">
								<svg class="olymp-share-icon">
									<use xlink:href="#olymp-share-icon"></use>
								</svg>
							</a>
				
						</div>
				
					</article>
				
				<!-- .. end Post -->
			</div>

			<div class="ui-block">

				
				<!-- Post -->
				
				<article class="hentry post video">
				
						<div class="post__author author vcard inline-items">
							<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
							<div class="author-date">
								<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a> shared a
								<a href="#">link</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										7 hours ago
									</time>
								</div>
							</div>
				
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Edit Post</a>
									</li>
									<li>
										<a href="#">Delete Post</a>
									</li>
									<li>
										<a href="#">Turn Off Notifications</a>
									</li>
									<li>
										<a href="#">Select as Featured</a>
									</li>
								</ul>
							</div>
				
						</div>
				
						<p>If someone missed it, check out the new song by System of a Revenge! I thinks they are going back to their roots...</p>
				
						<div class="post-video">
							<div class="video-thumb">
								<img loading="lazy" src="img/video5.webp" alt="photo" width="178" height="178">
								<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
									<svg class="olymp-play-icon">
										<use xlink:href="#olymp-play-icon"></use>
									</svg>
								</a>
							</div>
				
							<div class="video-content">
								<a href="#" class="h4 title">System of a Revenge - Nothing Else Matters (LIVE)</a>
								<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempo incididunt ut labore..</p>
								<a href="#" class="link-site">YOUTUBE.COM</a>
							</div>
						</div>
				
						<div class="post-additional-info inline-items">
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
								<span>15</span>
							</a>
				
							<ul class="friends-harmonic">
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
										<img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28" height="28">
									</a>
								</li>
							</ul>
				
							<div class="names-people-likes">
								<a href="#">Jenny</a>, <a href="#">Robert</a> and
								<br>13 more liked this
							</div>
				
							<div class="comments-shared">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon">
										<use xlink:href="#olymp-speech-balloon-icon"></use>
									</svg>
									<span>1</span>
								</a>
				
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-share-icon">
										<use xlink:href="#olymp-share-icon"></use>
									</svg>
									<span>16</span>
								</a>
							</div>
				
				
						</div>
				

				
					</article>
				
				<!-- .. end Post -->
			</div>

			<div class="ui-block">

				<!-- Post -->
				
				<article class="hentry post">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									2 hours ago
								</time>
							</div>
						</div>
				
						<div class="more">
							<svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et
						dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.
					</p>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon">
								<use xlink:href="#olymp-heart-icon"></use>
							</svg>
							<span>36</span>
						</a>
				
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
							<br>34 more liked this
						</div>
				
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon">
									<use xlink:href="#olymp-speech-balloon-icon"></use>
								</svg>
								<span>17</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon">
									<use xlink:href="#olymp-share-icon"></use>
								</svg>
								<span>24</span>
							</a>
						</div>
				
				
					</div>
				
					<div class="control-block-button post-control-button">
				
						<a href="#" class="btn btn-control">
							<svg class="olymp-like-post-icon">
								<use xlink:href="#olymp-like-post-icon"></use>
							</svg>
						</a>
				
						<a href="#" class="btn btn-control">
							<svg class="olymp-comments-post-icon">
								<use xlink:href="#olymp-comments-post-icon"></use>
							</svg>
						</a>
				
						<a href="#" class="btn btn-control">
							<svg class="olymp-share-icon">
								<use xlink:href="#olymp-share-icon"></use>
							</svg>
						</a>
				
					</div>
				
				</article>
				
				<!-- .. end Post -->

				<a href="#" class="more-comments">View more comments <span>+</span></a>

				
				<!-- Comment Form  -->
				
				<form class="comment-form inline-items">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="form-group with-icon-right ">
							<textarea class="form-control" placeholder=""></textarea>
							<div class="add-options-message">
								<a href="#" class="options-message" data-bs-toggle="modal" data-bs-target="#update-header-photo">
									<svg class="olymp-camera-icon">
										<use xlink:href="#olymp-camera-icon"></use>
									</svg>
								</a>
							</div>
						</div>
					</div>
				
					<button class="btn btn-md-2 btn-primary">Post Comment</button>
				
					<button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>
				
				</form>
				
				<!-- ... end Comment Form  -->
			</div>

			<div class="ui-block">

				<!-- Post -->
				
				<article class="hentry post has-post-thumbnail shared-photo">
				
						<div class="post__author author vcard inline-items">
							<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
							<div class="author-date">
								<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a> shared
								<a href="#">Diana Jameson</a>’s <a href="#">photo</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										7 hours ago
									</time>
								</div>
							</div>
				
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Edit Post</a>
									</li>
									<li>
										<a href="#">Delete Post</a>
									</li>
									<li>
										<a href="#">Turn Off Notifications</a>
									</li>
									<li>
										<a href="#">Select as Featured</a>
									</li>
								</ul>
							</div>
				
						</div>
				
						<p>Hi! Everyone should check out these amazing photographs that my friend shot the past week. Here’s one of them...leave a kind comment!</p>
				
						<div class="post-thumb">
							<img loading="lazy" src="img/post-photo6.webp" alt="photo" width="618" height="412">
						</div>
				
						<ul class="children single-children">
							<li class="comment-item">
								<div class="post__author author vcard inline-items">
									<img loading="lazy" src="img/avatar8-sm.webp" alt="author" width="36" height="36">
									<div class="author-date">
										<a class="h6 post__author-name fn" href="#">Diana Jameson</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												16 hours ago
											</time>
										</div>
									</div>
								</div>
				
								<p>Here’s the first photo of our incredible photoshoot from yesterday. If you like it please say so and tel me what you wanna see next!</p>
							</li>
						</ul>
				
						<div class="post-additional-info inline-items">
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
								<span>15</span>
							</a>
				
							<ul class="friends-harmonic">
								<li>
									<a href="#">
										<img loading="lazy" src="img/friend-harmonic5.webp" alt="friend" width="28" height="28">
									</a>
								</li>
								<li>
									<a href="#">
										<img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28" height="28">
									</a>
								</li>
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
										<img loading="lazy" src="img/friend-harmonic2.webp" alt="friend" width="28" height="28">
									</a>
								</li>
							</ul>
				
							<div class="names-people-likes">
								<a href="#">Diana</a>, <a href="#">Nicholas</a> and
								<br>13 more liked this
							</div>
				
							<div class="comments-shared">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon">
										<use xlink:href="#olymp-speech-balloon-icon"></use>
									</svg>
									<span>0</span>
								</a>
				
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-share-icon">
										<use xlink:href="#olymp-share-icon"></use>
									</svg>
									<span>16</span>
								</a>
							</div>
				
						</div>
				

				
					</article>
				
				<!-- .. end Post -->
			</div>


			<div class="ui-block">

				
				<article class="hentry post video">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/avatar7-sm.webp" alt="author" width="42" height="42">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="#">Marina Valentine</a> shared a <a href="#">link</a>
							<div class="post__date">
								<time class="published" datetime="2004-07-24T18:18">
									March 4 at 2:05pm
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<p>Hey <a href="#">Cindi</a>, you should really check out this new song by Iron Maid. The next time they come to the city we should totally go!</p>
				
					<div class="post-video">
						<div class="video-thumb">
							<img loading="lazy" src="img/video-youtube1.webp" alt="photo" width="197" height="194">
							<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
								<svg class="olymp-play-icon"><use xlink:href="#olymp-play-icon"></use></svg>
							</a>
						</div>
				
						<div class="video-content">
							<a href="#" class="h4 title">Iron Maid - ChillGroves</a>
							<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua...
							</p>
							<a href="#" class="link-site">YOUTUBE.COM</a>
						</div>
					</div>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>18</span>
						</a>
				
						<ul class="friends-harmonic">
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
									<img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Jenny</a>, <a href="#">Robert</a> and
							<br>18 more liked this
						</div>
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
				
								<span>0</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
				
								<span>16</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>


				
				<!-- Comment Form  -->
				
				<form class="comment-form inline-items">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="form-group with-icon-right ">
							<textarea class="form-control" placeholder=""></textarea>
							<div class="add-options-message">
								<a href="#" class="options-message" data-bs-toggle="modal" data-bs-target="#update-header-photo">
									<svg class="olymp-camera-icon">
										<use xlink:href="#olymp-camera-icon"></use>
									</svg>
								</a>
							</div>
						</div>
					</div>
				
					<button class="btn btn-md-2 btn-primary">Post Comment</button>
				
					<button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>
				
				</form>
				
				<!-- ... end Comment Form  -->
			</div>

			<div class="ui-block">

				
				<article class="hentry post">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
							<div class="post__date">
								<time class="published" datetime="2004-07-24T18:18">
									9 hours ago
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.
					</p>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>24</span>
						</a>
				
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
				
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>17</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>24</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>

			</div>

			<div class="ui-block">

				
				<article class="hentry post has-post-thumbnail">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/avatar5-sm.webp" alt="author" width="42" height="42">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="#">Green Goo Rock</a>
							<div class="post__date">
								<time class="published" datetime="2004-07-24T18:18">
									March 8 at 6:42pm
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<p>Hey guys! We are gona be playing this Saturday of <a href="#">The Marina Bar</a> for their new Mystic Deer Party.
						If you wanna hang out and have a really good time, come and join us. We’l be waiting for you!
					</p>
				
					<div class="post-thumb">
						<img loading="lazy" src="img/post__thumb1.webp" alt="photo" width="518" height="762">
					</div>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>49</span>
						</a>
				
						<ul class="friends-harmonic">
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
									<img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Jimmy</a>, <a href="#">Andrea</a> and
							<br>47 more liked this
						</div>
				
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>264</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>37</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>

			</div>

			<div class="ui-block">

				
				<article class="hentry post has-post-thumbnail">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/avatar3-sm.webp" alt="author" width="42" height="42">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="#">Sarah Hetfield</a>
							<div class="post__date">
								<time class="published" datetime="2004-07-24T18:18">
									March 2 at 9:06am
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
						mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
					</p>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>0 Likes</span>
						</a>
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>0 Comments</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>2 Shares</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>

			</div>

			<div class="ui-block">

				
				<article class="hentry post has-post-thumbnail">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/avatar2-sm.webp" alt="author" width="42" height="42">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="#">Nicholas Grissom</a>
							<div class="post__date">
								<time class="published" datetime="2004-07-24T18:18">
									March 2 at 8:34am
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
						mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
						accusantium doloremque.
					</p>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>22</span>
						</a>
				
						<ul class="friends-harmonic">
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
									<img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Jimmy</a>, <a href="#">Andrea</a> and
							<br>47 more liked this
						</div>
				
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>0</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>2</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>

			</div>
			<div class="ui-block">

				
				<!-- Post -->
				
				<article class="hentry post video">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="#">James Spiegel </a> shared a <a href="#">link</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									7 hours ago
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<p>Hey <a href="#">Chris</a>! here’s the new article I was talking you about. Check it out!</p>
				
					<div class="post-video">
						<div class="video-thumb f-none">
							<img loading="lazy" src="img/post-video.webp" alt="photo" width="620" height="350">
							<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
								<svg class="olymp-play-icon"><use xlink:href="#olymp-play-icon"></use></svg>
							</a>
						</div>
				
						<div class="video-content">
							<a href="#" class="h4 title">The Secrets of the Auroris Movie Effects</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut
								labore et dolore magna aliqua. Ut enim ad minim veniam, quis...
							</p>
							<a href="#" class="link-site">MOVIEMAG.COM</a> | <a href="#" class="link-site">BY DAN STEVENS</a>
						</div>
					</div>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>15</span>
						</a>
				
						<ul class="friends-harmonic">
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
									<img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Diana</a>, <a href="#">Nicholas</a> and
							<br>13 more liked this
						</div>
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>1</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>16</span>
							</a>
						</div>
				
					</div>
				

				
				</article>
				
				<!-- ...end  Post -->
			</div>
			<div class="ui-block">

				
				<!-- Post -->
				
				<article class="hentry post video">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="#">James Spiegel </a> shared a <a href="#">link</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									7 hours ago
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<p>Last night was the best concert of my whole life! <a href="#">Erica</a> check out the video I got from last night’s playlist!</p>
				
					<div class="video-player">
						<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
							<svg class="olymp-play-icon"><use xlink:href="#olymp-play-icon"></use></svg>
						</a>
						<img loading="lazy" src="img/video4.webp" alt="video" width="618" height="377">
						<div class="video-content">
							<div class="h4 title">System of a Revenge - Hypnotize (LIVE)</div>
							<time class="published" datetime="2017-03-24T18:18">3:26</time>
						</div>
						<div class="overlay"></div>
					</div>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>16</span>
						</a>
				
						<ul class="friends-harmonic">
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
									<img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Diana</a>, <a href="#">Nicholas</a> and
							<br>13 more liked this
						</div>
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>0</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>16</span>
							</a>
						</div>
				
					</div>
				

				
				</article>
				
				<!-- ... end  Post -->
			</div>

			<div class="ui-block">

				
				<!-- Post -->
				
				<article class="hentry post has-post-thumbnail">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									7 hours ago
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<p>Today we went with all the ofice guys to <a href="#">Dan’s Burgers and Fries</a> and had some of
						the best burgers I have ever tasted, here’s the proof:
					</p>
				
					<div class="post-thumb">
						<img loading="lazy" src="img/post__thumb2.webp" alt="photo" width="618" height="690">
					</div>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>15</span>
						</a>
				
						<ul class="friends-harmonic">
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic5.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28" height="28">
								</a>
							</li>
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
									<img loading="lazy" src="img/friend-harmonic2.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Diana</a>, <a href="#">Nicholas</a> and
							<br>47 more liked this
						</div>
				
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>16</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>0</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>
				
				<!-- ... end Post -->


				<a href="#" class="more-comments">View more comments <span>+</span></a>

				
				<!-- Comment Form  -->
				
				<form class="comment-form inline-items">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="form-group with-icon-right ">
							<textarea class="form-control" placeholder=""></textarea>
							<div class="add-options-message">
								<a href="#" class="options-message" data-bs-toggle="modal" data-bs-target="#update-header-photo">
									<svg class="olymp-camera-icon">
										<use xlink:href="#olymp-camera-icon"></use>
									</svg>
								</a>
							</div>
						</div>
					</div>
				
					<button class="btn btn-md-2 btn-primary">Post Comment</button>
				
					<button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>
				
				</form>
				
				<!-- ... end Comment Form  -->
			</div>

			<div class="ui-block">

				
				<!-- Post -->
				
				<article class="hentry post has-post-thumbnail">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									7 hours ago
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<p>Check out the GIF of our photoshoot from the other day:</p>
				
					<div class="post-thumb">
				
						<!------------------------------------------------- GIF player ------------------------------------------------>
						<img class="gif-play-image" data-mode="video" data-mp4="videos/post_video.mp4" src="img/post__thumb3.webp" alt="gif" width="618" height="348">
				
						<!-- JS library for GIF player -->
						<script defer src="js/libs/jquery.gifplayer.min.js"></script>
						<!-- ...end JS library for GIF player -->
				
						<!-- JS-init for GIF player is in the file \js\libs-init\libs-init.js -->
				
						<!------------------------------------------- ... end GIF player ---------------------------------------------->
				
					</div>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>15</span>
						</a>
				
						<ul class="friends-harmonic">
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic5.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28" height="28">
								</a>
							</li>
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
									<img loading="lazy" src="img/friend-harmonic2.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Diana</a>, <a href="#">Nicholas</a> and
							<br>47 more liked this
						</div>
				
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>16</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>0</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>
				
				<!-- ... end Post -->

			</div>
		</div>
		<div class="col col-lg-6 col-md-12 col-sm-12 col-12">

			<div class="ui-block">

				
				<!-- Post -->
				
				<article class="hentry post has-post-thumbnail thumb-full-width">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a> wrote a <a href="#">blog post</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									7 hours ago
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<div class="post-thumb">
						<img loading="lazy" src="img/post__thumb4.webp" alt="photo" width="668" height="284">
					</div>
				
					<a href="#" class="h2 post-title">My Perfect Vacations in South America and Europe</a>
				
					<p>Lorem ipsum dolor sit amet, consectadipisicing elit, sed do eiusmod por incidid ut labore et
						dolore magna aliqua. Ut enim ad minim veniam, quis nostrud lorem exercitation ullamco laboris
						nisi ut aliquip ex ea commodo consequat. Duis en aute irure dolor in reprehenderit in voluptate
						velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
						sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
						totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
						dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
						sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt...
					</p>
				
					<a href="#" data-bs-toggle="modal" data-bs-target="#blog-post-popup" class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Read More</a>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>15</span>
						</a>
				
						<ul class="friends-harmonic">
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic5.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28" height="28">
								</a>
							</li>
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
									<img loading="lazy" src="img/friend-harmonic2.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Diana</a>, <a href="#">Nicholas</a> and
							<br>47 more liked this
						</div>
				
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>16</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>0</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>
				
				<!-- ... end Post -->
			</div>

			<div class="ui-block">

				
				<!-- Post -->
				
				<article class="hentry post video">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									7 hours ago
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<p>Last night was the best concert of my whole life! <a href="#">Erica</a> check out the video I got from last night’s playlist!</p>
				
					<div class="post-video">
						<div class="video-thumb f-none">
							<img loading="lazy" src="img/video6.webp" alt="photo" width="616" height="414">
							<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
								<svg class="olymp-play-icon"><use xlink:href="#olymp-play-icon"></use></svg>
							</a>
						</div>
					</div>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>15</span>
						</a>
				
						<ul class="friends-harmonic">
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
									<img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Jenny</a>, <a href="#">Robert</a> and
							<br>18 more liked this
						</div>
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>0</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>16</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>
				
				<!-- ... end Post -->
				

			</div>

			<div class="ui-block">

				
				<!-- Post -->
				
				<article class="hentry post">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a> uploaded 28 <a href="#">new photos</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									7 hours ago
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<p>Here are the pics of the incredibly beautiful landscapes of al the food that I’ve tasted while on
						my trip. I’ve never been so full in my entire life! I recommend to everyone that has the chance
						to travel to stop thinking and do it now!
					</p>
				
					<div class="post-block-photo js-zoom-gallery">
						<a href="img/post-photo1.webp" class="half-width"><img loading="lazy" src="img/post-photo1.webp" alt="photo" width="600" height="600"></a>
						<a href="img/post-photo2.webp" class="half-width"><img loading="lazy" src="img/post-photo2.webp" alt="photo" width="600" height="600"></a>
						<a href="img/post-photo3.webp" class="col col-3-width"><img loading="lazy" src="img/post-photo3.webp" alt="photo" width="600" height="600"></a>
						<a href="img/post-photo4.webp" class="col col-3-width"><img loading="lazy" src="img/post-photo4.webp" alt="photo" width="600" height="600"></a>
						<a href="img/post-photo5.webp" class="more-photos col col-3-width">
							<img loading="lazy" src="img/post-photo5.webp" alt="photo" width="600" height="600">
							<span class="h2">+24</span>
						</a>
					</div>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>15</span>
						</a>
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>0</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>16</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>
				
				<!-- ... end Post -->

				<a href="#" class="more-comments">View more comments <span>+</span></a>

				
				<!-- Comment Form  -->
				
				<form class="comment-form inline-items">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="form-group with-icon-right ">
							<textarea class="form-control" placeholder=""></textarea>
							<div class="add-options-message">
								<a href="#" class="options-message" data-bs-toggle="modal" data-bs-target="#update-header-photo">
									<svg class="olymp-camera-icon">
										<use xlink:href="#olymp-camera-icon"></use>
									</svg>
								</a>
							</div>
						</div>
					</div>
				
					<button class="btn btn-md-2 btn-primary">Post Comment</button>
				
					<button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>
				
				</form>
				
				<!-- ... end Comment Form  -->			</div>

			<div class="ui-block">

				
				<!-- Post -->
				
				<article class="hentry post has-post-thumbnail thumb-full-width">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a> wrote a <a href="#">blog post</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									7 hours ago
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<div class="post-thumb">
						<img loading="lazy" src="img/post__thumb4.webp" alt="photo" width="668" height="284">
					</div>
				
					<a href="#" data-bs-toggle="modal" data-bs-target="#blog-post-popup" class="h2 post-title">My Perfect Vacations in South America and Europe</a>
				
					<p>Lorem ipsum dolor sit amet, consectadipisicing elit, sed do eiusmod por incidid ut labore et
						dolore magna aliqua. Ut enim ad minim veniam, quis nostrud lorem exercitation ullamco laboris
						nisi ut aliquip ex ea commodo consequat. Duis en aute irure dolor in reprehenderit in voluptate
						velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
						sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
						totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
						dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
						sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt...
					</p>
				
					<a href="#" data-bs-toggle="modal" data-bs-target="#blog-post-popup" class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Read More</a>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>8</span>
						</a>
				
						<ul class="friends-harmonic">
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic5.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28" height="28">
								</a>
							</li>
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
									<img loading="lazy" src="img/friend-harmonic2.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Jenny </a>, <a href="#">Robert</a> and
							<br>6 more liked this
						</div>
				
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>12</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>0</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>
				
				<!-- ... end Post -->

			</div>

			<div class="ui-block">

				
				<!-- Post -->
				
				<article class="hentry post has-post-thumbnail thumb-full-width">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a> wrote a <a href="#">blog post</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									March 14 at 6:03pm
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<div class="post-thumb">
						<img loading="lazy" src="img/post__thumb5.webp" alt="photo" width="668" height="267">
					</div>
				
					<a href="#" data-bs-toggle="modal" data-bs-target="#blog-post-popup" class="h2 post-title">I’ve Tasted the Most Perfect Icecream in the World!</a>
				
					<p>Lorem ipsum dolor sit amet, consectadipisicing elit, sed do eiusmod por incidid ut labore et
						dolore magna aliqua. Ut enim ad minim veniam, quis nostrud lorem exercitation ullamco laboris
						nisi ut aliquip ex ea commodo consequat.
					</p>
				
					<p>
						Duis en aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
						mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
						accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
						et quasi architecto beatae vitae dicta sunt explicabo.
					</p>
				
					<p>
						Nemo enim ipsam voluptatem quia voluptas sit aspernatu...
					</p>
				
					<a href="#" data-bs-toggle="modal" data-bs-target="#blog-post-popup" class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Read More</a>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>8</span>
						</a>
				
						<ul class="friends-harmonic">
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic5.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28" height="28">
								</a>
							</li>
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
									<img loading="lazy" src="img/friend-harmonic2.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Jenny </a>, <a href="#">Robert</a> and
							<br>6 more liked this
						</div>
				
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>12</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>0</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>
				
				<!-- ... end Post -->
			</div>

			<div class="ui-block">

				
				
				<!-- Post -->
				
				<article class="hentry post has-post-thumbnail thumb-full-width">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a> wrote a <a href="#">blog post</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									12 hours ago
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<div class="post-thumb">
						<img loading="lazy" src="img/post__thumb6.webp" alt="photo" width="668" height="267">
					</div>
				
					<a href="#" data-bs-toggle="modal" data-bs-target="#blog-post-popup" class="h2 post-title">Advices for Backpacking</a>
				
					<p>Lorem ipsum dolor sit amet, consectadipisicing elit, sed do eiusmod por incidid ut labore et dolore
						magna aliqua. Ut enim ad minim veniam, quis nostrud lorem exercitation ullamco laboris nisi ut
						aliquip ex ea commodo consequat.
					</p>
				
					<p>Duis en aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
						mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
						accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
						et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
						sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
						sequi nesciun Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
						voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni...
					</p>
				
					<a href="#" data-bs-toggle="modal" data-bs-target="#blog-post-popup" class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Read More</a>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>8</span>
						</a>
				
						<ul class="friends-harmonic">
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic1.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic9.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic7.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic4.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic8.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Diana </a>, <a href="#">Nicholas</a> and
							<br>15 more liked this
						</div>
				
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>16</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>8</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>
				
				<!-- ... end Post -->

			</div>

			<div class="ui-block">

				
				<!-- Post -->
				
				<article class="hentry post has-post-thumbnail thumb-full-width">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="02-ProfilePage.php">James Spiegel</a> wrote a <a href="#">blog post</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									12 hours ago
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<div class="post-thumb">
						<img loading="lazy" src="img/post__thumb7.webp" alt="photo" width="668" height="371">
					</div>
				
					<h2 class="post-title">A Day as a Photographer with Maxxine Flames</h2>
				
					<p>Lorem ipsum dolor sit amet, consectadipisicing elit, sed do eiusmod por incidid ut labore et
						dolore magna aliqua. Ut enim ad minim veniam, quis nostrud lorem exercitation ullamco laboris
						nisi ut aliquip ex ea commodo consequat.
					</p>
				
					<p>Duis en aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
						mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
						accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
						et quasi hitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
						aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt...
					</p>
				
					<a href="#" data-bs-toggle="modal" data-bs-target="#blog-post-popup" class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Read More</a>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>8</span>
						</a>
				
						<ul class="friends-harmonic">
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic1.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic9.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic7.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic4.webp" alt="friend" width="28" height="28">
								</a>
							</li>
							<li>
								<a href="#">
									<img loading="lazy" src="img/friend-harmonic8.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Diana </a>, <a href="#">Nicholas</a> and
							<br>15 more liked this
						</div>
				
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>16</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>8</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>
				
				<!-- ... end Post -->
			</div>

			<div class="ui-block">

				
				<!-- Post -->
				
				<article class="hentry post">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/avatar5-sm.webp" alt="author" width="42" height="42">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="#">Green Goo Rock</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									4 hours ago
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<p>Hi guys! We just wanted to let everyone know that we are currently recording
						our new album “News of the Goo”. We’ll be playing one of our new songs this Friday at 8pm in
						our Fake Street 320 recording studio, come and join us!
					</p>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>36</span>
						</a>
				
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
							<br>34 more liked this
						</div>
				
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>17</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>24</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>
				
				<!-- ... end Post -->

			</div>
			<div class="ui-block">

				
				
				<!-- Post -->
				
				<article class="hentry post has-post-thumbnail">
				
					<div class="post__author author vcard inline-items">
						<img loading="lazy" src="img/avatar5-sm.webp" alt="author" width="42" height="42">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="#">Green Goo Rock</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									March 8 at 6:42pm
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Edit Post</a>
								</li>
								<li>
									<a href="#">Delete Post</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
								<li>
									<a href="#">Select as Featured</a>
								</li>
							</ul>
						</div>
				
					</div>
				
					<p>Hey guys! We are gona be playing this Saturday of <a href="#">The Marina Bar</a> for their new Mystic Deer Party.
						If you wanna hang out and have a really good time, come and join us. We’l be waiting for you!
					</p>
				
					<div class="post-thumb">
						<img loading="lazy" src="img/post__thumb1.webp" alt="photo" width="518" height="762">
					</div>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
							<span>49</span>
						</a>
				
						<ul class="friends-harmonic">
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
									<img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28" height="28">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Jimmy</a>, <a href="#">Andrea</a> and
							<br>47 more liked this
						</div>
				
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
								<span>264</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
								<span>37</span>
							</a>
						</div>
				
				
					</div>
				

				
				</article>
				
				<!-- ... end Post -->

			</div>
		</div>
	</div>
</div>




<a class="back-to-top" href="#">
	<svg class="back-icon" width="14" height="18"><use xlink:href="#olymp-back-to-top"></use></svg>
</a>


<!-- JS Scripts -->
<script src="js/jQuery/jquery-3.5.1.min.js"></script>

<script src="js/libs/jquery.mousewheel.min.js"></script>
<script src="js/libs/perfect-scrollbar.min.js"></script>
<script src="js/libs/imagesloaded.pkgd.min.js"></script>
<script src="js/libs/material.min.js"></script>
<script src="js/libs/selectize.min.js"></script>
<script src="js/libs/isotope.pkgd.min.js"></script>
<script src="js/libs/ajax-pagination.min.js"></script>
<script src="js/libs/jquery.magnific-popup.min.js"></script>

<script src="js/main.js"></script>
<script src="js/libs-init/libs-init.js"></script>

<script src="Bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- SVG icons loader -->
<script src="js/svg-loader.js"></script>
<!-- /SVG icons loader -->

</body>
</html>