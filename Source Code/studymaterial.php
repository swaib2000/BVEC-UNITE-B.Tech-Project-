<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT &  ~E_WARNING);
include("dbconnection.php");
if($_SESSION['sessionid'] == $_POST['sessionid'])
{
	if(isset($_POST['submit']))
	{
		if($_FILES["uploads"]["name"] != "")
		{
			$imgname = rand(). $_FILES["uploads"]["name"];
			move_uploaded_file($_FILES["uploads"]["tmp_name"],"studymaterialimages/".$imgname);
		}
		$title = mysqli_real_escape_string($con, $_POST['title']);
		$description = mysqli_real_escape_string($con, $_POST['description']);
		if(isset($_GET['editid']))
		{
			$sql="UPDATE study_material set course_id='$_POST[course]',subject_id='$_POST[subject]',semester='$_POST[semester]',title='$title',user_id='$_SESSION[user_id]',description='$description',";
			if($_FILES["uploads"]["name"] != "")
			{
			$sql = $sql . "uploads='$imgname',";
			}
			$sql = $sql . " date_time='$dt $tim' WHERE study_material_id='$_GET[editid]'";
			$qsql = mysqli_query($con,$sql);
			if(!$qsql)
			{
				echo mysqli_error($con);
			}
			if(mysqli_affected_rows($con) == 1)
			{
				echo "<SCRIPT>alert('Study Material record UPDATED successfully..');</SCRIPT>";
			}	
		}
		else
		{  
			$sql="INSERT INTO study_material(course_id,semester,subject_id,title,user_id,description,uploads,date_time) values ('$_POST[course]','$_POST[semester]','$_POST[subject]','$title','$_SESSION[user_id]','$description','$imgname','$dt $tim')";
			$qsql = mysqli_query($con,$sql);
			if(!$qsql)
			{
				echo mysqli_error($con);
			}
			if(mysqli_affected_rows($con) == 1)
			{
				echo "<SCRIPT>alert('Study Material published successfully..');</SCRIPT>";
				echo "<script>window.location='studymaterialpanel.php';</script>";
			}
		}
	}
}
$_SESSION['sessionid'] = rand();
if(isset($_GET['editid']))
{
	$sqledit = "SELECT * FROM study_material WHERE study_material_id='$_GET[editid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
?>
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">Publish / Update Study Material</h6>
				</div>
				<div class="ui-block-content">
					<form action="" class="contact_form" method="post" enctype="multipart/form-data" name="frmstudymaterial" onsubmit="return validateform()">
                 <input  type="hidden" name="sessionid" value="<?php echo $_SESSION['sessionid']; ?>" >

						<div class="row">
					
							<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Select Course <span id="idcourse"></span></label>
									<select name="course" class="form-select" onchange="loadsubject(course.value,semester.value)">
                  <option value="">Select Course</option>
                  <?php
                    $sqlcourse =  "SELECT * FROM course WHERE status='Active'";
                    $qsqlcourse = mysqli_query($con,$sqlcourse);
                    while($rscourse = mysqli_fetch_array($qsqlcourse))
                    {
                        if($rscourse['course_id'] == $rsedit['course_id'])
                        {
                        echo "<option value='$rscourse[course_id]' selected>$rscourse[course]</option>";
                        }
                        else
                        {					
                        echo "<option value='$rscourse[course_id]'>$rscourse[course]</option>";
                        }
                    }
                    ?>
              </select>
								</div>
							</div>
					
							<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
								<label class="control-label">Select Semester  <span id="idsemester"></span></label>
									<select name="semester" class="form-select" onchange="loadsubject(course.value,semester.value)">   
              <option value="">Select semester</option>
              <?php
			  $arr = array("First Semester","Second Semester","Third Semester","Fourth Semester","Fifth Semester","Sixth Semester","Seventh Semester","Eighth Semester");
			  foreach($arr as $val)
			  {
				   if($val == $rsedit['semester'])
				   {
				  echo "<option value='$val' selected>$val</option>";
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
					
							<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Select Subject  <span id="idsubject"></span></label>
<span  id="spansubjectid">									
<select name="subject" class="form-select"> 
    <option value="">Select Subject</option>
<?php
    $sqlsubject =  "SELECT * FROM subject WHERE status='Active' AND course_id='$rsedit[course_id]' AND semester='$rsedit[semester]'";
    $qsqlsubject = mysqli_query($con,$sqlsubject);
    while($rssubject = mysqli_fetch_array($qsqlsubject))
    {
        if($rssubject['subject_id'] == $rsedit['subject_id'])
        {
        echo "<option value='$rssubject[subject_id]' selected>$rssubject[subject]</option>";
        }
    }
?>
</select>
</div>
								</div>
							</div>
					
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Title <span id="idtitle"></span></label>
									<input type="text" name="title" class="form-control" value="<?php echo $rsedit['title']; ?>">
								</div>
							</div>
							
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group">
									<label class="control-label">Description</label>
									<script src="richtexteditor/tinymce.min.js"></script>
                  <script>tinymce.init({ selector:'textarea' });</script>
                  <textarea name="description" class="form-control" cols="30" rows="25" placeholder="description *"><?php echo $rsedit['description']; ?></textarea>
								</div>
							</div>
							
<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="form-group">
		<label class="control-label">Upload Study material <span id="iduploads"></span></label>
		<input type="file" name="uploads"  class="form-control" onchange="loadFile(event)">
		<?php
		if(isset($_GET['editid']))
		{
			echo "<a href='studymaterialimages/$rsedit[uploads]'  class='btn btn-success' download>Download</a>";
		}
		?>
	</div>
</div>
							<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
								<!--<a href="#" class="btn btn-secondary btn-lg full-width">Cancel</a>-->
							</div>
							<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
								<button type="submit"  name="submit" class="btn btn-blue btn-lg full-width">Publish Study material</button>
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
		var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
		var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
		var alphanumbericExp = /^[a-zA-Z0-9]+$/; //Variable to validate only alphabets and space
		var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
	 
	 var validatecondtion = 0;
	    var editid = "<?php echo $_GET['editid']; ?>"; 
	 document.getElementById("idcourse").innerHTML ="";
	 document.getElementById("idsemester").innerHTML ="";
	 document.getElementById("idsubject").innerHTML ="";
	 document.getElementById("idtitle").innerHTML ="";
	 document.getElementById("iduploads").innerHTML ="";
	 
	 if(document.frmstudymaterial.course.value=="")
	 {
		 document.getElementById("idcourse").innerHTML ="<font color='red'>Kindly select your course..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudymaterial.semester.value=="")
	 {
		 document.getElementById("idsemester").innerHTML ="<font color='red'>Kindly select your semester..</font>";
		 validatecondtion=1;
	 }
	 if(document.frmstudymaterial.subject.value=="")
	 {
		 document.getElementById("idsubject").innerHTML ="<font color='red'>Kindly select your subject..</font>";
		 validatecondtion=1;
	 }
	  if(document.frmstudymaterial.title.value=="")
	 {
		 document.getElementById("idtitle").innerHTML ="<font color='red'>Title should not be empty..</font>";
		 validatecondtion=1;
	 }
	 //alert(editid);
	 if(editid == "")
		 {
			  if(document.frmstudymaterial.uploads.value=="")
			 {
				 document.getElementById("iduploads").innerHTML ="<font color='red'>Kindly include uploads..</font>";
				 validatecondtion=1;
			 }
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
function loadsubject(courseid,semester) 
{
    if (courseid == "")
	{
        document.getElementById("spansubjectid").innerHTML = "";
        return;
    } 
	else
	{ 
        if (window.XMLHttpRequest)
		{
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } 
		else
		{
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
				
        xmlhttp.open("GET","ajaxloadsubject.php?courseid="+courseid+"&semester="+semester,true);
        xmlhttp.send();
				
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("spansubjectid").innerHTML = this.responseText;
            }
        };
    }
}
</script>