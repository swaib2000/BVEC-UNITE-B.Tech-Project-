
			<div class="ui-block">

				
				<!-- W-Action -->
				
				<div class="widget w-action">
					<div class="content">
						<h4 class="title">Study Materials</h4>
						<span><?php 
						$sqlstudymaterials = "SELECT * FROM study_material";
						$qsqlstudymaterials = mysqli_query($con,$sqlstudymaterials);
						echo mysqli_num_rows($qsqlstudymaterials);
						?> study materials found..</span>
						<a href="displaystudymaterial.php" class="btn btn-bg-secondary btn-md">Click Here</a>
					</div>
				</div>
				
				<!-- ... end W-Action -->
			</div>
