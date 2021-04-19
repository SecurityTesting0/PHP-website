<?php include("inc/header.php"); ?> 

				
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Contact Page Short Description</h2>
                <div class="block">  
				
				<?php 
				
						if ($_SERVER["REQUEST_METHOD"] =="POST"){
						$slogan			=$fm->validation($_POST['slogan']);
					
						$slogan			=mysqli_real_escape_string($db->link,$slogan);
				
						
						$query="UPDATE contact_us_default_content SET
						header			='$slogan'
						WHERE id                =1";
						
						$results=$db->insert($query);
						if($results==true){
							echo"<div class='well'> 
							<h2 style='color:green; font-weight:bold; text-align:center; background:#eee;'> 
							Informations Succesfully Update <h2> 
							
							</div>";
						}else{
							echo"Information Not Updated";
						}
					}
					?>
			
				<?php
				$query ="SELECT * FROM contact_us_default_content where id=1";
				   
				$results = $db->select($query);

				if ($results){?>
				<?php while ($showpost = $results->fetch_assoc()) {

				?> 	
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
						<tr>
                            <td>
                                <label>Short Description:</label>
                            </td>
                            <td>
							<textarea rows="8" cols="50" name="slogan" > <?php echo $showpost['header'];?></textarea>
                                
                            </td>
                        </tr>
					
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit"  Value="Update Information" />
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