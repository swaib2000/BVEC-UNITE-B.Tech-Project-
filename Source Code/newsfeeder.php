<style>
.hideMe {
    -moz-animation: cssAnimation 0s ease-in 5s forwards;
    /* Firefox */
    -webkit-animation: cssAnimation 0s ease-in 5s forwards;
    /* Safari and Chrome */
    -o-animation: cssAnimation 0s ease-in 5s forwards;
    /* Opera */
    animation: cssAnimation 0s ease-in 5s forwards;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
}
</style>
<div class="ui-block">
	<!-- News Feed Form  -->
	<div class="news-feed-form">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active inline-items" data-bs-toggle="tab" href="#home-1" role="tab" aria-expanded="true">
					<svg class="olymp-status-icon"><use xlink:href="#olymp-status-icon"></use></svg>
					<span>Text</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link inline-items" data-bs-toggle="tab" href="#profile-1" role="tab" aria-expanded="false">
					<svg class="olymp-multimedia-icon"><use xlink:href="#olymp-multimedia-icon"></use></svg>
					<span>Photos</span>
				</a>
			</li>
	
			<li class="nav-item">
				<a class="nav-link inline-items" data-bs-toggle="tab" href="#blog" role="tab" aria-expanded="false">
					<svg class="olymp-blog-icon"><use xlink:href="#olymp-play-icon"></use></svg>
					<span>Video</span>
				</a>
			</li>
		</ul>
	
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-expanded="true">
				<form method="post" action="">
					<div class="author-thumb">
						<img loading="lazy" src="<?php echo $profileimg; ?>"  style="width: 36px;height: 36px;" alt="author">
					</div>
					<div class="form-group with-icon label-floating is-empty">
						<label class="control-label">Share what you are thinking here...</label>
						<textarea class="form-control" name="textmessage" id="textmessage" ></textarea>
					</div>
					<div class="add-options-message">
						<span id="txtnotificationmsg"></span>
						<?php
						/*
						<a href="#" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="ADD PHOTOS">
							<svg class="olymp-camera-icon" data-bs-toggle="modal" data-bs-target="#update-header-photo"><use xlink:href="#olymp-camera-icon"></use></svg>
						</a>
						<a href="#" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="TAG YOUR FRIENDS">
							<svg class="olymp-computer-icon"><use xlink:href="#olymp-computer-icon"></use></svg>
						</a>	
						<a href="#" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="ADD LOCATION">
							<svg class="olymp-small-pin-icon"><use xlink:href="#olymp-small-pin-icon"></use></svg>
						</a>
						<?php
						<button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>
						*/
						?>
						<button type="button" name="btnnftext" id="btnnftext" class="btn btn-primary btn-md-2">Post Message</button>
					</div>
				</form>
			</div>
	
			<div class="tab-pane fade" id="profile-1" role="tabpanel" aria-expanded="true">
				<form method="post" action="" enctype="multipart/form-data" id="frmuploadImage" name="frmuploadImage" >
					<div class="author-thumb">
						<img loading="lazy" src="<?php echo $profileimg; ?>"  style="width: 36px;height: 36px;" alt="author">
					</div>
					<div class="form-group with-icon label-floating is-empty">
						<label class="control-label">Share about this Photo...</label>
						<textarea class="form-control" name="txtnfphoto" id="txtnfphoto" ></textarea>
						<div class="row">
							<div class="col-md-12" id="previewimage"><center><img id="imgInp" style="width: 100%;"/></center></div>
						</div>
					</div>
					<div class="add-options-message">
						<input type="file" id="imgupload" name="imgupload" style="display:none" accept="image/*"/> 
						<a id="OpenImgUpload"  href="" onclick="return false;" class="options-message"  data-bs-original-title="ADD PHOTO"><svg class="olymp-camera-icon" ><use xlink:href="#olymp-camera-icon"></use></svg></a>
						&nbsp;<span id="txtnotificationimgmsg"></span>
						<?php
						/*
						<a href="#" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="TAG YOUR FRIENDS">
							<svg class="olymp-computer-icon"><use xlink:href="#olymp-computer-icon"></use></svg>
						</a>
	
						<a href="#" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="ADD LOCATION">
							<svg class="olymp-small-pin-icon"><use xlink:href="#olymp-small-pin-icon"></use></svg>
						</a>
						<button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>
						*/
						?>
						<button type="button" name="btnnfphoto" id="btnnfphoto" class="btn btn-primary btn-md-2">Upload Photo</button>	
					</div>	
				</form>
			</div>
	
			<div class="tab-pane fade" id="blog" role="tabpanel" aria-expanded="true">
				<form method="post" action="" enctype="multipart/form-data" id="frmuploadvideo" name="frmuploadvideo" >
					<div class="author-thumb">
						<img loading="lazy" src="<?php echo $profileimg; ?>"  style="width: 36px;height: 36px;" alt="author">
					</div>
					<div class="form-group with-icon label-floating is-empty">
						<label class="control-label">Share about this Video...</label>
						<textarea class="form-control" name="txtnfvideo" id="txtnfvideo" ></textarea>
						<div id="previewvideo"></div>
					</div>
					<div class="add-options-message">
						<input type="file" id="videoupload" name="videoupload" style="display:none" accept="video/mp4,video/ogg,video/webm,video/avi"/> 
						<a id="OpenvideoUpload"  href="" onclick="return false;" class="options-message"  data-bs-original-title="ADD VIDEO"><svg class="olymp-music-next-song-icon" ><use xlink:href="#olymp-music-next-song-icon"></use></svg></a>
						&nbsp;<span id="txtnotificationvideomsg"></span>
						<?php
						/*
						<a href="#" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="TAG YOUR FRIENDS">
							<svg class="olymp-computer-icon"><use xlink:href="#olymp-computer-icon"></use></svg>
						</a>
	
						<a href="#" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="ADD LOCATION">
							<svg class="olymp-small-pin-icon"><use xlink:href="#olymp-small-pin-icon"></use></svg>
						</a>
						<button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>
						*/
						?>
						<button type="button" name="btnnfvideo" id="btnnfvideo" class="btn btn-primary btn-md-2">Publish Video</button>	
					</div>	
				</form>
			</div>
		</div>
	</div>
	<!-- ... end News Feed Form  -->
</div>