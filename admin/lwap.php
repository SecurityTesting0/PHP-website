<?php include("inc/Header.php"); ?> 

        <div class="grid_10">
		
            <div class="box round first grid">
			<a href="lwap.php">Upload Photo</a>| <a href="lwapht.php"> Update Header Text </a> 
			<h2> </h2>	
<?php 
	if(isset($_POST["submit"])){
		$title				=$fm->validation($_POST['image_title']);
		
		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['image']['name'];	
		$file_size = $_FILES['image']['size'];
		$file_temp = $_FILES['image']['tmp_name'];
		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "generalimage/".$unique_image;

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
		
		$query="INSERT INTO header_lawp_page(image_title,image) 
		values ('$title','$uploaded_image')";
		$results=$db->insert($query);
		if($results==true){
			echo"Images Slider Upload SuccessFull";
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
                                <label>Title Image</label>
                            </td>
                            <td>
                                <input type="text" name="image_title" placeholder="Enter Image Title..." class="medium" />
                            </td>
                        </tr>
                 
                        <tr>
                            <td>
                                <label>Upload Slider Image</label>
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
							<td>S.L </td>
							<td>Name</td>
							<td>Image</td>
							<td>Action</td>
						</tr>
						
						<?php		
						$query="SELECT * FROM header_lawp_page";
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>
						
						<?php
						while($results1=$results->fetch_assoc()){
						$id++; 
						
						?>
						<tr style="height:100px; ">
							<td valign="middle"><?php echo $id; ?></td>
							<td valign="middle"><?php echo $results1['image_title']; ?></td>
							<td valign="middle"><img src="<?php echo $results1['image']; ?>" alt="" style="height:70px; width:70px;"/></td>
							<td valign="middle">
							
							<a href="delete.php?lwap=<?php echo $results1['id']; ?>" class="btn_delete">Delete </a> </td>
		
						</tr>
						<?php }?>
						<?php }?>
					</table>
					
					
                </div>
            </div>
        </div>
		
		
		
<?php include("inc/footer.php"); ?> 