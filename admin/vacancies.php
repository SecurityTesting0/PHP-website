<?php include("inc/Header.php"); ?> 




        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>UPDATE VACANCIES PAGE</h2>
			
				<?php 
					if ($_SERVER["REQUEST_METHOD"] =="POST"){
						$description	        =$fm->validation($_POST['description']);
						
						$description			=mysqli_real_escape_string($db->link,$description);
						
						$query="UPDATE admission_vacancies SET	Description	='$description' WHERE id =1";
						
						$results=$db->update($query);
						if($results==true){
							echo"<h3 style='color:green'>Page Succesfully Update </p>";
						}else{
							echo"Not Update";
						}
					}
					
					
				?>

				 <?php
					$query ="SELECT * FROM admission_vacancies where id=1";
					   
					$results = $db->select($query);

					if ($results){?>
					<?php while ($showpost = $results->fetch_assoc()) {

				?> 
								<div class="block">               
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">                       
                        <tr>                            
                            <td>
                                <textarea class="tinymce" name="description">
								<?php echo $showpost['Description'];?>
								</textarea>
                            </td>
                        </tr>
						<tr>                            
                            <td>
                                <input type="submit" name="submit" Value="Update Information" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
		
		<?php }?>
		<?php }?>
		
		
		
<?php include("inc/footer.php"); ?> 