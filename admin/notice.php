<?php include("inc/Header.php"); ?> 

        <div class="grid_10">
		
            <div class="box round first grid">
               <a href="notice.php" class="btn_edit">Add New Notce </a>|| <a href="notice_view.php" class="btn_delete">View Notice</a>
			<h2></h2>
				
				

				
<?php 
	if(isset($_POST["submit"])){
		$title				=$fm->validation($_POST['title']);
		$description		=$fm->validation($_POST['description']);
		
		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['image']['name'];	
		$file_size = $_FILES['image']['size'];
		$file_temp = $_FILES['image']['tmp_name'];
		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "generalimage/".$unique_image;

		if ($file_size >1048567) {
		 echo "<span class='error'>Image Size should be less then 1MB!
		 </span>";
		} else{
		move_uploaded_file($file_temp, $uploaded_image);
		
		$query="INSERT INTO notice_board(title,image,description) 
		values ('$title','$uploaded_image','$description')";
		$results=$db->insert($query);
		if($results==true){
			echo"Notce Post Successfully";
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
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" placeholder="Enter Post Title..." class="medium" required/>
                            </td>
                        </tr>
                     
                       
                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input type="file" name="image" />
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="description"></textarea>
                            </td>
                        </tr>
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
		
		
		
<?php include("inc/footer.php"); ?> 