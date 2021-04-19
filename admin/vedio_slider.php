<?php include("inc/Header.php"); ?> 

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Slider Page</h2>
				
<?php 
	if(isset($_POST["submit"])){
		$title				=$fm->validation($_POST['title']);
		$link				=$fm->validation($_POST['link']);
		
		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['image']['name'];	
		$file_size = $_FILES['image']['size'];
		$file_temp = $_FILES['image']['tmp_name'];
		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "sliderimage/".$unique_image;

		if (empty($file_name)) {
		 echo "<span class='error'>Please Select any Image !</span>";
		}elseif ($file_size >1048567) {
		 echo "<span class='error'>Image Size should be less then 1MB!
		 </span>";
		} elseif (in_array($file_ext, $permited) === false) {
		 echo "<span class='error'>You can upload only:-"
		 .implode(', ', $permited)."</span>";
		} else{
		move_uploaded_file($file_temp, $uploaded_image);
		
		$query="INSERT INTO home_slider_video(video_link,video_thumnail,video_title) 
		values ('$link','$uploaded_image','$title')";
		$results=$db->insert($query);
		if($results==true){
			echo"<h3 style='color:green'>Video Slider Upload SuccessFull</h3>";
		}else{
			echo"Checked Again";
		}
	}
	}

?>
                <div class="block">               
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Video Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" placeholder="Enter Video Title..." class="medium" />
                            </td>
                        </tr>
						<td>
                                <label>Video Link</label>
                            </td>
                            <td>
                                <input type="text" name="link" placeholder="Enter Youtube Video Link..." class="medium" />
								<p>example-link: https://www.youtube.com/embed/z9mh6YRABA8</p>
                            </td>
                        </tr>
                 
                        <tr>
                            <td>
                                <label>Upload Thumnail/Poster Image</label>
                            </td>
                            <td>
                                <input type="file" name="image"/>
                            </td>
                        </tr>
                     
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" class="submit_btn" Value="Submit" />
                            </td>
                        </tr>
                    </table>
                    </form>
					
				
					
					<table class="form"> 
						<tr class="head_table">
							<th>S.L 			</th>
							<th>Name			</th>
							<th>Poster Image	</th>
							<th>Vedio			</th>
							<th>Action			</th>
						</tr>
						
						<?php		
						$query="SELECT * FROM home_slider_video";
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>
						
						<?php
						while($results1=$results->fetch_assoc()){
						$id++; 
						
						?>
						
						<tr style="text-align:center; ">
							<td valign="middle"><?php echo $id; ?></td>
							<td valign="top"><?php echo $fm->textShorten($results1['video_title'],30); ?></td>
							<td valign="middle"><img src="<?php echo $results1['video_thumnail']; ?>" alt="" style="height:70px; width:70px;"/></td>
							<td valign="middle">
							
							<iframe width="200px" height="100px" src="<?php echo $results1['video_link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</td>
							<td valign="middle">
						
							<a href="delete.php?vidslider=<?php echo $results1['id']; ?>" class="btn_delete">Delete </a> </td>
			
						</tr>
						<?php }?>
						<?php }?>
					</table>
					
					
                </div>
            </div>
        </div>
		
		
		
<?php include("inc/footer.php"); ?> 