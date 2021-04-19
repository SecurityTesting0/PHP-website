<?php include("inc/header.php"); ?> 

				
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Site Informations</h2>
                <div class="block">  
				
				<?php 
				
						if ($_SERVER["REQUEST_METHOD"] =="POST"){
						$title			=$fm->validation($_POST['title']);
						$slogan			=$fm->validation($_POST['slogan']);
					
						
						$title			=mysqli_real_escape_string($db->link,$title);
						$slogan			=mysqli_real_escape_string($db->link,$slogan);
				
						
						$query="UPDATE header_lawp_content SET
						title			='$title',														
						short_intro     ='$slogan'							
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
				$query ="SELECT * FROM header_lawp_content where id=1";
				   
				$results = $db->select($query);

				if ($results){?>
				<?php while ($showpost = $results->fetch_assoc()) {

				?> 	
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title:</label>
                            </td>
                            <td>
                                <input type="text" class="medium" name="title" value="<?php echo $showpost['title'];?>"/>
                            </td>
                        </tr>
						<tr>
                            <td>
                                <label>Short Description:</label>
                            </td>
                            <td>
							<textarea ows="4" cols="50" name="slogan" > <?php echo $showpost['short_intro'];?></textarea>
                                
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