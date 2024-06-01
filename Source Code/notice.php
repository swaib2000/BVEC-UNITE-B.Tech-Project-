<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT &  ~E_WARNING);
include("dbconnection.php");
if(!isset($_SESSION['user_id']))
{
	echo "<script>window.location='userlogin.php';</script>";
}
if($_SESSION['sessionid'] == $_POST['sessionid'])
{
	if($_FILES["uploadfile"]["name"] != "")
	{
		$imgname = rand(). $_FILES["uploadfile"]["name"];
		move_uploaded_file($_FILES["uploadfile"]["tmp_name"],"noticeimages/".$imgname);
	}
	if(isset($_POST['submit']))
	{
		$title= mysqli_real_escape_string($con, $_POST['title']);
		$description= mysqli_real_escape_string($con, $_POST['description']);
		
	    if(isset($_GET['editid']))
		{
			$sql="UPDATE notice set notice_type='$_POST[noticetype]',user_id='$_SESSION[user_id]',title='$title',description='$description',";
			if($_FILES["uploadfile"]["name"] != "")
			{
			$sql = $sql . "uploads='$imgname',";
			}
			$sql = $sql . "status='Active' WHERE notice_id='$_GET[editid]'";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
			if(mysqli_affected_rows($con) == 1)
			{
				echo "<SCRIPT>alert('Notice record UPDATED successfully..');</SCRIPT>";
				echo "<script>window.location='noticepanel.php?editid=$_GET[editid]&view=Notice';</script>";
			}
	    }
		else
		{
			$sql="INSERT INTO notice(notice_type,user_id,title,description,uploads,date_time,status) values ('$_POST[noticetype]','$_SESSION[user_id]','$title','$description','$imgname','$dt $tim','Active')";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
			if(mysqli_affected_rows($con) == 1)
			{
				echo "<SCRIPT>alert('Notice Published successfully.');</SCRIPT>";
				echo "<script>window.location='noticepanel.php?view=viewnotice';</script>";
			}
		}
	}
}
$_SESSION['sessionid'] = rand();
if(isset($_GET['editid']))
{
	$sqledit = "SELECT * FROM notice WHERE notice_id='$_GET[editid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
?>
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">Notice Board</h6>
				</div>
				<div class="ui-block-content">
				<?php
				if(isset($_GET['editid']))
				{
				?>
					<form action="notice.php?editid=<?php echo $_GET['editid']; ?>&view=Notice" class="contact_form" method="post" enctype="multipart/form-data" name="frmnotice" onsubmit="return validateform()">
				<?php
				}
				else
				{
				?>
					<form action="" class="contact_form" method="post" enctype="multipart/form-data" name="frmnotice" onsubmit="return validateform()">
				<?php
				}
				?>
                 <input  type="hidden" name="sessionid" value="<?php echo $_SESSION['sessionid']; ?>" >
						<div class="row">
							<div class="col col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
								<div class="form-group label-floating is-select">
		<label class="control-label">Notice Type: <span id="idnoticetype"></span></label>
		<select name="noticetype" class="form-select" tabindex="1" autofocus="autofocus">
            <option value="">Select Notice Type</option>
            	<?php
				$arr = array("Events","Meeting","News and Updates");				
					foreach($arr as $val)
					{
						if($val == $rsedit['notice_type'])
						{
						echo "<option vaulue='$val' selected>$val</option>";
						}
						else
						{
						 echo "<option value='$val'>$val</option>";	
						}
					}
				?>      
         </select>
								</div>
							</div>
							<div class="col col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
								<div class="form-group label-floating">
									<label class="control-label">Title <span id="idtitle"></span></label>
									<input type="text" name="title" class="form-control" value="<?php echo $rsedit['title']; ?>">
								</div>
							</div>
							
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group">
									<label class="control-label">Description <span id="iddescription"></span></label>
									<script src="richtexteditor/tinymce.min.js"></script>
                  <script>tinymce.init({ selector:'textarea' });</script>
                  <textarea name="description" id="descriptions" class="form-control" cols="30" rows="25" placeholder="description *"><?php echo $rsedit['description']; ?></textarea>
								</div>
							</div>
							
<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="form-group">
		<label class="control-label">Upload Study material <span id="iduploads"></span></label>
		<input type="file" name="uploadfile"  class="form-control" accept="image/*"  onchange="loadFile(event)">
              <?php
              if($rsedit['uploads'] == "")
              {
              	echo '<img src="images/no-image.png" height="200" alt="Image preview..." id="previewimg">';
              }
              else
              {
				  if(file_exists("noticeimages/".$rsedit['uploads']))
				  {
					echo "<img src='noticeimages/$rsedit[uploads]' height='200' alt='Image preview...' id='previewimg'>";
				  }
				  else
				  {
					echo '<img src="images/no-image.png" height="200" alt="Image preview..." id="previewimg">';
				  }
              }
              ?>
	</div>
</div>
							<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
								<!--<a href="#" class="btn btn-secondary btn-lg full-width">Cancel</a>-->
							</div>
							<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
				<?php
				if(isset($_GET['editid']))
				{
				?>
								<button type="submit"  name="submit" class="btn btn-blue btn-lg full-width">Update Notice</button>
				<?php
				}
				else
				{
				?>
				
								<button type="submit"  name="submit" class="btn btn-blue btn-lg full-width">Publish Notice</button>
				<?php
				}
				?>
							</div>
							
							<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
								<!--<a href="#" class="btn btn-secondary btn-lg full-width">Cancel</a>-->
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>

	</div>
</div>
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('previewimg');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
<script type="application/javascript">
 function validateform()
 {
	 var validatecondtion = 0;
	     
	 document.getElementById("idnoticetype").innerHTML ="";
	 document.getElementById("idtitle").innerHTML ="";
	 document.getElementById("iddescription").innerHTML ="";
	      
	  if(document.frmnotice.noticetype.value=="")
	 {
		 document.getElementById("idnoticetype").innerHTML ="<font color='red'>Kindly select Notice type..</font>";
		 validatecondtion=1;
	 }
	  if(document.frmnotice.title.value=="")
	 {
		 document.getElementById("idtitle").innerHTML ="<font color='red'>Title cannot be empty..</font>";
		 validatecondtion=1;
	 }

	  if(tinyMCE.get('descriptions').getContent() =="")
	 {
		 document.getElementById("iddescription").innerHTML ="<font color='red'>Description should not be empty...</font>";
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