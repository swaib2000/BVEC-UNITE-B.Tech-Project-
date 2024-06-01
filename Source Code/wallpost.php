<?php
include("header.php");
if(!isset($_SESSION['student_id']))
{
	echo "<script>window.location='studentlogin.php';</script>";
}
?>
<style>
.children {
    border-top: 1px solid #e6ecf5;
    border-top: 1px solid var(--olympus-border-color);
    margin: 0 -25px 0 -25px;
    padding-left: 35px;
}

.comments-list .comment-item {
    padding: 0 25px 25px 25px;
    border-bottom: 1px solid #e6ecf5;
    border-bottom: 1px solid var(--olympus-border-color);
    background-color: #fafbfd;
    background-color: var(--olympus-smoke-light);
    position: relative;
}
</style>
<style>
.parent {
   width: 75px; /* I took the width from your post and placed it in css */
   height: 75px;
}

/* This will style any img element in .parent div */
.parent img {
   height: 100%;
   width: 100%;
}
</style>
<div class="header-spacer"></div>
<div class="container">
	<div class="row">
<!-- Main Content -->
<main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
<?php
include("newsfeeder.php");
?>
<div class="ui-block">
	<div class="ui-block-title">
		<div class="h6 title">Showing <span class="c-primary" id="idwallpostcounter" ><?php
		$sqltimeline = "SELECT * FROM timeline order by timeline_id desc";
		$qsqltimeline = mysqli_query($con, $sqltimeline);
		echo $counter = mysqli_num_rows($qsqltimeline); ?></span> Results in Wallpost..</div>
		<input type="hidden" name="wpcounter" id="wpcounter" value="<?php echo $counter; ?>" />
	</div>
</div>
<div id="newsfeed-items-grid"><?php include("newsfeedposts.php"); ?></div>
<?php
/*
			<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.php" data-container="newsfeed-items-grid"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
*/
?>
		</main>

		<!-- ... end Main Content -->


		<!-- Left Sidebar -->

		<aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
			
			<div class="ui-block">
				<!-- W-Build-Fav -->
				<div class="widget w-build-fav">
					<div class="widget-thumb">
						<img loading="lazy" src="<?php echo $profileimg; ?>" alt="notebook" width="197" height="137">
					</div>
					<div class="content">
						<center><span><?php echo $rsstudentprofile['course']; ?>, <?php echo $rsstudentprofile['semester']; ?></span></center>
						<center><a href="mywallpost.php?student_id=<?php echo $rsstudentprofile['student_id']; ?>" class="h4 title"><?php echo $rsstudentprofile['student_name']; ?></a></center>
						<center><p><a href="mywallpost.php?student_id=<?php echo $rsstudentprofile['student_id']; ?>" class="btn btn-bg-secondary btn-md">View My Wallpost</a></p></center>
					</div>
				</div>
				<!-- ... end W-Build-Fav -->
			</div>

<?php
$sql ="SELECT * FROM student WHERE course_id='$rsstudentprofile[course_id]' AND semester='$rsstudentprofile[semester]' AND status='Active'";
$qsql = mysqli_query($con, $sql);
?>
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">My Classmates (<?php echo mysqli_num_rows($qsql); ?>)</h6>
				</div>

				<!-- W-Friend-Pages-Added -->
				
				<ul class="widget w-friend-pages-added notification-list friend-requests">
  <?php
  $img="";
 while($rsrec = mysqli_fetch_array($qsql))
  {
	  $sqlcourse = "SELECT * FROM course WHERE course_id='$rsrec[course_id]'";
	  $qsqlcourse = mysqli_query($con,$sqlcourse);
	  $rscourse = mysqli_fetch_array($qsqlcourse);
	  if($rsrec['student_img'] == "")
	  {
		  $img = "images/no-image.png";
	  }
	  else if(file_exists("studentimages/" . $rsrec['student_img']))
	  {
		  $img = "studentimages/" . $rsrec['student_img'];
	  }
	  else
	  {
		  $img = "images/no-image.png";
	  }
?>
					<li class="inline-items">
						<div class="author-thumb">
							<img loading="lazy" src="<?php echo $img; ?>" alt="author" style="width: 36px; height: 36px;">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend"><?php echo $rsrec['student_name']; ?></a>
							<span class="chat-message-item">Roll No. <?php echo $rsrec['roll_no']; ?></span>
						</div>
						<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="VIEW PROFILE">
							<a href="#">
								<svg><use xlink:href="#olymp-photos-icon"></use></svg>
							</a>
						</span>
					</li>
<?php
  }
  ?>
				
				</ul>
				
				<!-- .. end W-Friend-Pages-Added -->
			</div>
		</aside>

		<!-- ... end Left Sidebar -->


		<!-- Right Sidebar -->

		<aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">
<?php
include("birthdaysidebar.php");
include("quizresultsidebar.php");
include("sidebardiscusssions.php");
include("studymaterialsidebar.php");
?>

		</aside>

		<!-- ... end Right Sidebar -->

	</div>
</div>

<?php
include("footer.php");
?>
<script>
$('#icon_file_img').on('click', function() {
    $('#file_img').trigger('click');
});
$('#icon_file_vid').on('click', function() {
    $('#file_vid').trigger('click');
});
$('#icon_file_doc').on('click', function() {
    $('#file_doc').trigger('click');
});
</script>
<script>
function showPreview(objFileInput) {
    if (objFileInput.files[0]) {
		var filecontent="";
        var fileReader = new FileReader();
        fileReader.onload = function (e) {
            //$('#blah').attr('src', e.target.result);
			filecontent = $("#divmultimediapreview").html();
			$("#divmultimediapreview").html(filecontent + '<div class="parent"><img src="'+e.target.result+'" align="left" /></div>');
			//$("#targetLayer").css('opacity','0.7');
			//$(".icon-choose-image").css('opacity','0.5');
        }
		fileReader.readAsDataURL(objFileInput.files[0]);
    }
}
</script>
<script>
//On click of image button Upload Image Starts here
$('#file_vid').change(function() {
    alert("My file_vid");
});
//On click of image button Upload Image Ends here
//On click of image button Upload Image Starts here
$('#file_doc').change(function() {
    alert("My file_doc");
});
//On click of image button Upload Image Ends here
</script>
<script type="application/javascript">
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('previewimg');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
<script>
  function loadlikes(timelineid,nooflikes)
  {	
	nooflikes = parseInt(nooflikes)+1;
	document.getElementById("countlikes"+timelineid).innerHTML="...";
  	if(nooflikes == 1)
	{
		document.getElementById("countlikes"+timelineid).innerHTML="1 Like";
		document.getElementById("changeicon"+timelineid).innerHTML  = "<a href='' class='btn btn-control'  style='background-color: #ff5e3a;' onclick='loaddislikes(" + timelineid + "," +   nooflikes + ");return false;' ><svg class='olymp-like-post-icon'><use xlink:href='#olymp-like-post-icon'></use></svg></a>";	  
	}
	else
	{
		document.getElementById("countlikes"+timelineid).innerHTML= nooflikes + " Likes";
		document.getElementById("changeicon"+timelineid).innerHTML  = "<a href='' class='btn btn-control' style='background-color: #ff5e3a;'  onclick='loaddislikes(" + timelineid + "," +   nooflikes + ");return false;' ><svg class='olymp-like-post-icon'><use xlink:href='#olymp-like-post-icon'></use></svg></a>";
	}
	var timelineid = timelineid;	
	$.post("timelinecomment.php", { timelineid: timelineid,comment_type:"Likes"},
	   function(data) {
	   });
  }
  function loaddislikes(timelineid,nooflikes)
  {
	nooflikes =parseInt(nooflikes)-1;
	document.getElementById("countlikes"+timelineid).innerHTML="...";
  	if(nooflikes == 0)
	{
		document.getElementById("countlikes"+timelineid).innerHTML  = "0 Likes";
		document.getElementById("changeicon"+timelineid).innerHTML  = "<a href='' class='btn btn-control'  onclick='loadlikes(" + timelineid + "," +   nooflikes + ");return false;' ><svg class='olymp-like-post-icon'><use xlink:href='#olymp-like-post-icon'></use></svg></a>";	
	}
  	else if(nooflikes == 1)
	{
		document.getElementById("countlikes"+timelineid).innerHTML="1 Like";
		document.getElementById("changeicon"+timelineid).innerHTML  = "<a href='' class='btn btn-control'  style='background-color: #ff5e3a;' onclick='loadlikes(" + timelineid + "," +   nooflikes + ");return false;' ><svg class='olymp-like-post-icon'><use xlink:href='#olymp-like-post-icon'></use></svg></a>";	  
	}
	else
	{	  
		document.getElementById("countlikes"+timelineid).innerHTML  = nooflikes + " Like";
		document.getElementById("changeicon"+timelineid).innerHTML  = "<a href='' class='btn btn-control'  onclick='loadlikes(" + timelineid + "," + nooflikes + ");return false;' ><svg class='olymp-like-post-icon'><use xlink:href='#olymp-like-post-icon'></use></svg></a>";
	}
	var timelineid = timelineid;
	$.post("timelinecomment.php", { timelineid: timelineid,comment_type:"Dislike"},
	   function(data) {
	   });
  }
</script>
<script>
function delcomments(timelineid,timeline_comment_id)
{
	if(confirm("Are you sure want to delete this comment?") == true)
	{
		$.post("timelinecomment.php", { timelineid: timelineid,timeline_comment_id: timeline_comment_id,comment_type:"DeleteComment"},
		function(data) {
				document.getElementById("wallpostcomment"+timelineid).innerHTML  =  data;
				if(document.getElementById("num_comments"+timelineid).value == 0)
				{
					document.getElementById("pannumcomments"+timelineid).innerHTML =  "0 Comments";
				}
				else if(document.getElementById("num_comments"+timelineid).value == 1)
				{
					document.getElementById("pannumcomments"+timelineid).innerHTML = document.getElementById("num_comments"+timelineid).value + " Comment";
				}
				else
				{
					document.getElementById("pannumcomments"+timelineid).innerHTML = document.getElementById("num_comments"+timelineid).value + " Comments";
				}
		});
	}
}
</script>
<script type="application/javascript">
function delpost(timelineid)
{
	if(confirm("Are you sure want to delete this post?") == true)
	{
		$.post("jsnewsfeeder.php", { deltimelineid: timelineid},
		function(data) {
			if(data == 1)
			{
				wallcounter = parseInt($('#wpcounter').val());
				wallcounter = wallcounter - 1;
				$('#wpcounter').val(wallcounter);
				$('#idwallpostcounter').html(wallcounter);
				$("#wallpostid"+timelineid).remove();
			}
		});
	}
}
</script>
<script>
  function submitcomment(timelineid,message,e)
  	{
		var code = (e.keyCode ? e.keyCode : e.which);
		if(code == 13) //Enter keycode
		{ 
			var txtcmt = message;	
			var timelineid = timelineid;
			document.getElementById("txtcmt"+timelineid).value="";
			$.post("timelinecomment.php", { timelineid: timelineid, txtcmt: txtcmt,comment_type:"Comment"},
			function(data) 
			{
				document.getElementById("wallpostcomment"+timelineid).innerHTML  =  data;
				if(document.getElementById("num_comments"+timelineid).value == 0)
				{
					document.getElementById("pannumcomments"+timelineid).innerHTML =  "0 Comments";
				}
				else if(document.getElementById("num_comments"+timelineid).value == 1)
				{
					document.getElementById("pannumcomments"+timelineid).innerHTML = document.getElementById("num_comments"+timelineid).value + " Comment";
				}
				else
				{
					document.getElementById("pannumcomments"+timelineid).innerHTML = document.getElementById("num_comments"+timelineid).value + " Comments";
				}
			});
		}
	}  
</script>
<script type="application/javascript">
 function validateform1()
 {
	 var validatecondtion = 0;
	     
	 document.getElementById("idtext").innerHTML ="";
		 
	  if(document.frmwallpost1.text.value=="")
	 {
		 document.getElementById("idtext").innerHTML ="<font color='red'>Message cannot be empty...</font>";
		 validatecondtion=1;
	 }
	 if(validatecondtion==1)
	 {
		 return false;
	 }                      
	 else
	 {
		 return true;
	 }
 }        
</script>
<script type="application/javascript"> 
 function validateform2()
 {
	 var validatecondtion = 0;	
	 document.getElementById("idimage").innerHTML ="";	
	 if(document.frmwallpost2.image.value=="")
	 {
		 document.getElementById("idimage").innerHTML ="<font color='red'>Kindly post image.</font>";
		 validatecondtion=1;
	 }
	 if(validatecondtion==1)
	 {
		 return false;
	 }                      
	 else
	 {
		 return true;
	 }
 }        
</script>
<script type="application/javascript">
function validateform3()
{
	 var validatecondtion = 0;	 
	 document.getElementById("idvideo").innerHTML ="";	
	 if(document.frmwallpost3.video.value=="")
	 {
		 document.getElementById("idvideo").innerHTML ="<font color='red'>Kindly post video...</font>";
		 validatecondtion=1;
	 }
	 if(validatecondtion==1)
	 {
		 return false;
	 }                      
	 else
	 {
		 return true;
	 }
}        
</script>
<script>
//Insert News Feeder Starts here
$("#btnnftext").click(function() {
	var wallcounter = 0;
	$('#txtnotificationmsg').delay(1).fadeIn();
	if($("#textmessage").val() == "")
	{
		$('#txtnotificationmsg').html('<a href="" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top"  style="font-weight: bold; color: red;" onclick="return false;" >Empty data cannot be entered...</a>');
		$('#txtnotificationmsg').delay(3000).fadeOut('slow');
	}
	else
	{
		$.post("jsnewsfeeder.php", { textmessage: $("#textmessage").val(), btnnftext: "Submit"},
		function(data)
		{
			wallcounter = parseInt($('#wpcounter').val());
			wallcounter = wallcounter +1;
			$('#wpcounter').val(wallcounter);
			$('#idwallpostcounter').html(wallcounter);
			$('#textmessage').val('');
			$('#txtnotificationmsg').html('<a href="" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top"  style="font-weight: bold; color: forestgreen;" onclick="return false;" >News Feed published in Wall Post...</a>');
			$('#txtnotificationmsg').delay(5000).fadeOut('slow');
			$("#newsfeed-items-grid").prepend(data);
		});
	}
});
//Insert News Feeder ends here
</script>
<script>
//Image Upload Code starts here
$('#OpenImgUpload').click(function(){ $('#imgupload').trigger('click'); });
</script>
<script>
document.getElementById('imgupload').onchange = function () {
  var src = URL.createObjectURL(this.files[0])
  document.getElementById('imgInp').src = src;
}
</script>
<script>
$("#btnnfphoto").click(function() {
	var wallcounter = 0;
	$('#txtnotificationimgmsg').delay(1).fadeIn();
	if($("#imgupload").val() == "")
	{
		$('#txtnotificationimgmsg').html('<a href="" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top"  style="font-weight: bold; color: red;" onclick="return false;" >Kindly Upload Image...</a>');
		$('#txtnotificationimgmsg').delay(3000).fadeOut('slow');
	}
	else
	{
		var formData = new FormData($('#frmuploadImage')[0]);
		formData.append('btnimage', "btnuploadimage");
		formData.append('imgupload', $('input[type=file]')[0].files[0]);
		$.ajax({
			type: "POST",
			url: "jsnewsfeeder.php",
			processData: false,
			contentType: false,
			data: formData,
			success: function(responsedata) {
				wallcounter = parseInt($('#wpcounter').val());
				wallcounter = wallcounter +1;
				$('#wpcounter').val(wallcounter);
				$('#idwallpostcounter').html(wallcounter);
				$('#textmessage').val('');
				$('#txtnotificationimgmsg').html('<a href="" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top"  style="font-weight: bold; color: forestgreen;" onclick="return false;" >Image published in Wall Post...</a>');
				$('#txtnotificationimgmsg').delay(5000).fadeOut('slow');
				$("#newsfeed-items-grid").prepend(responsedata);
				$('#imgInp').attr('src', '');
				$('#frmuploadImage').trigger("reset");
			}
		});
	}
});
//Image Upload Code ends here
</script>
<script>
//Video Upload Code starts here
$('#OpenvideoUpload').click(function(){ $('#videoupload').trigger('click'); });
</script>
<script>
document.getElementById('videoupload').onchange = function () {
	var src = URL.createObjectURL(this.files[0]);
	$('#previewvideo').html("<center><video style='width: 100%;' controls><source style='width: 100%;'  src='" + src + "' id='video_here' ></video></center>");
}
</script>
<script>
$("#btnnfvideo").click(function() {
	var wallcounter = 0;
	$('#txtnotificationvideomsg').delay(1).fadeIn();
	if($("#videoupload").val() == "")
	{
		$('#txtnotificationvideomsg').html('<a href="" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top"  style="font-weight: bold; color: red;" onclick="return false;" >Kindly Upload Video...</a>');
		$('#txtnotificationvideomsg').delay(3000).fadeOut('slow');
	}
	else
	{
		var formData = new FormData($('#frmuploadvideo')[0]);
		formData.append('btnvideo', "btnuploadvideo");
		formData.append('videoupload', $('input[type=file]')[0].files[0]);
		$.ajax({
			type: "POST",
			url: "jsnewsfeeder.php",
			processData: false,
			contentType: false,
			data: formData,
			success: function(responsedata) {
				wallcounter = parseInt($('#wpcounter').val());
				wallcounter = wallcounter +1;
				$('#wpcounter').val(wallcounter);
				$('#idwallpostcounter').html(wallcounter);
				$('#textmessage').val('');
				$('#txtnotificationvideomsg').html('<a href="" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top"  style="font-weight: bold; color: forestgreen;" onclick="return false;" >Video published in Wall Post...</a>');
				$('#txtnotificationvideomsg').delay(5000).fadeOut('slow');
				$("#newsfeed-items-grid").prepend(responsedata);
				$('#previewvideo').html('');
				$('#frmuploadvideo').trigger("reset");
			}
		});
	}
});
//Video Upload Code ends here
</script>