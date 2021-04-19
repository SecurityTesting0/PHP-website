<?php include("inc/header.php"); ?> 



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
                <h2>Add New Post</h2>
                <div class="block">  
				
				<?php 
					if ($_SERVER["REQUEST_METHOD"] =="POST"){
						$name				        =$fm->validation($_POST['name']);
						$desigination			    =$fm->validation($_POST['desigination']);
						$teacher_cat		        =$fm->validation($_POST['teacher_cat']);
						$description		        =$fm->validation($_POST['description']);
						
						$name				        =mysqli_real_escape_string($db->link,$name);
						$desigination				=mysqli_real_escape_string($db->link,$desigination);
						$teacher_cat				=mysqli_real_escape_string($db->link,$teacher_cat);
						$description		        =mysqli_real_escape_string($db->link,$description);
						
						$query="UPDATE header_teachers_page_info SET
						name					='$name',	
						desigination            ='$desigination',
						about                	='$description',
						teachers_cat_id         ='$teacher_cat'								
						WHERE id                =$id";
						
						$results=$db->insert($query);
						if($results==true){
							echo"<div class='well'> 
							<h2 style='color:green; font-weight:bold; text-align:center; background:#eee;'> 
							Succesfully Update <h2> 
							
							</div>";
						}else{
							echo"Not Update";
						}
					}
					?>
			
				<?php
				$query ="SELECT * FROM header_teachers_page_info where id=$id";
				   
				$results = $db->select($query);

				if ($results){?>
				<?php while ($showpost = $results->fetch_assoc()) {

				?> 	
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Teacher Name:</label>
                            </td>
                            <td>
                                <input type="text" class="medium" name="name" value="<?php echo $showpost['name'];?>"/>
                            </td>
                        </tr>
						<tr>
                            <td>
                                <label>Desigination:</label>
                            </td>
                            <td>
                                <input type="text" class="medium" name="desigination" value="<?php echo $showpost['desigination'];?>"/>
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category:</label>
                            </td>
							
                            <td>
                                <select id="select" name="teacher_cat">
                                   
                                   <option >Re-Select </option>
                                   <option value="1" value="<?php if($showpost['teachers_cat_id']== '1')?>">Male</option>
                                   <option value="2" value="<?php if($showpost['teachers_cat_id']== '2') ?>">Female</option>
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
                                <textarea class="tinymce" name="description"> <?php echo $showpost['about'];?> </textarea>
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
					<?php }?> 
					<?php }?> 
                </div>
            </div>
        </div>
		
		
		
<?php include("inc/footer.php"); ?> 