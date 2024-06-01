			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Quiz Result</h6>
				</div>
				<!-- W-Action -->
				
				<ul class="widget w-friend-pages-added notification-list friend-requests">
              <?php
			  $sqlquizresultsidebar = "SELECT DISTINCT quiz_id, student_id FROM quiz_result ORDER BY quiz_result_id DESC limit 0,5";
			  $qsqlquizresultsidebar = mysqli_query($con,$sqlquizresultsidebar);
			  echo mysqli_error($con);
			  while($rsquizresultsidebar = mysqli_fetch_array($qsqlquizresultsidebar))
			  {
					$scored=0;
				  	  $sqlstudent = "SELECT * FROM student WHERE student_id='$rsquizresultsidebar[student_id]'";
					  $qsqlstudent = mysqli_query($con,$sqlstudent);
					  $rsstudent = mysqli_fetch_array($qsqlstudent);
  						
	  if($rsstudent['student_img'] == "")
	  {
		  $img = "images/no-image.png";
	  }
	  else if(file_exists("studentimages/" . $rsstudent['student_img']))
	  {
		  $img = "studentimages/" . $rsstudent['student_img'];
	  }
	  else
	  {
		  $img = "images/no-image.png";
	  }
						$sqlquiz ="SELECT * FROM quiz WHERE quiz_id='$rsquizresultsidebar[quiz_id]'";
		  				$qsqlquiz = mysqli_query($con, $sqlquiz);
		 				$rsrecquiz = mysqli_fetch_array($qsqlquiz);
						
						  	$sqlquiz_result ="SELECT * FROM quiz_result WHERE quiz_id='$rsquizresultsidebar[quiz_id]' AND  student_id='$rsquizresultsidebar[student_id]' ";
							$qsqlquiz_result = mysqli_query($con, $sqlquiz_result);
							$totquestionquiz_result = mysqli_num_rows($qsqlquiz_result);
							while($rsrecquiz_result = mysqli_fetch_array($qsqlquiz_result))
							{
									  if($rsrecquiz_result['correct_ans'] == $rsrecquiz_result['selected_option'])
									  {
										  $scored=$scored+1;
									  }
							}
				$totalpercent = $scored *100/$totquestionquiz_result;
				if($totalpercent >= 50)
				   {
				  ?>
					<li class="inline-items">
						<div class="author-thumb">
							<img loading="lazy" src="<?php echo $img; ?>" alt="author"  style="width: 36px; height: 36px;">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend"><?php echo $rsstudent['student_name']; ?></a>
							<span class="chat-message-item"><?php echo $rsrecquiz['title']; ?></span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request"><?php echo $totalpercent;?>%
							</a>
						</span>
					</li>
			<?php
				   }
			  }
			?>
				</ul>
				<!-- ... end W-Action -->
			</div>