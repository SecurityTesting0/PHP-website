<?php include("inc/Header.php"); ?> 


<?php 
	if (empty($_GET['id'])){
	}elseif(!isset($_GET['id']) || $_GET['id'] == NULL){
		echo 'Something went to wrong';
	}else{
			$tid= $_GET['id'];
			$id= preg_replace("/[^0-9a-zA-Z]/", "", $tid);
			$rid = $id;
	}
?>
        <div class="grid_10">
		
            <div class="box round first grid">
               <?php
					$query ="SELECT * FROM cat_gallery where id=$id";
					   
					$results = $db->select($query);

					if ($results){?>
					<?php while ($showpagename = $results->fetch_assoc()) {

				?> 
			
                <h2>Upload Photo ||<?php echo $showpagename['name'];?> </h2>
				<?php } ?> 
				<?php } ?> 
				
<?php 
	if(isset($_POST["submit"])){
		$title				=$fm->validation($_POST['title']);
		
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
			
			$query="INSERT INTO gallery_menu(title,image,page_id) 
			values ('$title','$uploaded_image','$rid')";
			$results=$db->insert($query);
			if($results==true){
				echo"Images Upload SuccessFull";
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
                                <input type="text" name="title" placeholder="Enter Image Title..." class="medium" />
                            </td>
                        </tr>
                 
                        <tr>
                            <td>
                                <label>Upload Slider Image</label>
                            </td>
                            <td>
                                <input type="file" name="image" value="uplod photo" multiple/>
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
						$query="SELECT * FROM gallery_menu where page_id=$rid";
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
							<td valign="top"><?php echo $results1['title']; ?></td>
							<td valign="middle"><img src="<?php echo $results1['image']; ?>" alt="" style="height:70px; width:70px;"/></td>
							<td valign="middle">
							
							<a href="delete.php?gid=<?php echo $results1['id']; ?>" class="btn_delete">Delete </a> </td>
	
						</tr>
						<?php }?>
						<?php }?>
					</table>
					
					
                </div>
            </div>
        </div>
		
		
		
<?php include("inc/footer.php"); ?> 