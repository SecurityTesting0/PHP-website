<?php include("inc/header.php"); ?> 

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Teacher </h2>
                <div class="block">  

				<?php 
				if(isset($_POST["submit"])){
					$name				        =$fm->validation($_POST['name']);
					$desigination			    =$fm->validation($_POST['desigination']);
					$teacher_cat		        =$fm->validation($_POST['teacher_cat']);
					$description		        =$fm->validation($_POST['description']);
					
					$name				        =mysqli_real_escape_string($db->link,$name);
					$desigination				=mysqli_real_escape_string($db->link,$desigination);
					$teacher_cat				=mysqli_real_escape_string($db->link,$teacher_cat);
					$description		        =mysqli_real_escape_string($db->link,$description);
					
						
					$query="INSERT INTO header_teachers_page_info(name,desigination,about,teachers_cat_id ) 
					values ('$name','$desigination','$description','$teacher_cat')";
					
					
					$results=$db->insert($query);
					if($results==true){
						echo"<div class='well'>Teacher Succesfully Added </div>";
					}else{
						echo"Checked Again";
					}
				}

				?>

				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Teacher Name:</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Teacher Name..." class="medium" name="name"/>
                            </td>
                        </tr>
						<tr>
                            <td>
                                <label>Desigination:</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Desigination" class="medium" name="desigination"/>
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category:</label>
                            </td>
							
                            <td>
                                <select id="select" name="teacher_cat">
                                    <option >Select</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>                                
                                </select>
                            </td>
							
                        </tr>                   
                    
                        <!--<tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input type="file" />
                            </td>
                        </tr>--> 
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Description:</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="description"></textarea>
                            </td>
                        </tr>
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="SAVE" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
		
		
		
<?php include("inc/footer.php"); ?> 