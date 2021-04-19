<?php include("inc/header.php"); ?> 

				
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Site Informationss</h2>
                <div class="block">  
				
				<?php 
				
						if ($_SERVER["REQUEST_METHOD"] =="POST"){
						$Telphone_Title		=$fm->validation($_POST['Telephone_title']);
						$Telphone_Number	=$fm->validation($_POST['Telephone_number']);
						$Title_Hourse		=$fm->validation($_POST['Title_Hourse']);
						$Madrasa_Hourse		=$fm->validation($_POST['Madrasa_Hourse']);
						$Email		        =$fm->validation($_POST['Email']);
						$Address_title      =$fm->validation($_POST['address_title']);
						$Address	        =$fm->validation($_POST['Address']);
						
						$Telphone_Title		=mysqli_real_escape_string($db->link,$Telphone_Title);
						$Telphone_Number	=mysqli_real_escape_string($db->link,$Telphone_Number);
						$Title_Hourse		=mysqli_real_escape_string($db->link,$Title_Hourse);
						$Madrasa_Hourse		=mysqli_real_escape_string($db->link,$Madrasa_Hourse);
						$Email				=mysqli_real_escape_string($db->link,$Email);
						$Address_title		=mysqli_real_escape_string($db->link,$Address_title);
						$Address			=mysqli_real_escape_string($db->link,$Address);
						
						
						$query="UPDATE footer_area SET
						Telephone_title			='$Telphone_Title',	
						Telephone_number        ='$Telphone_Number',
						Madrasa_hours_title    	='$Title_Hourse',
						Madrasa_hours_time      ='$Madrasa_Hourse',								
						Madrasa_email_address   ='$Email',								
						Madrasa_address_title   ='$Address_title',								
						Madrasa_address         ='$Address'							
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
				$query ="SELECT * FROM footer_area where id=1";
				   
				$results = $db->select($query);

				if ($results){?>
				<?php while ($showpost = $results->fetch_assoc()) {

				?> 	
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Telphone Title:</label>
                            </td>
                            <td>
                                <input type="text" class="medium" name="Telephone_title" value="<?php echo $showpost['Telephone_title'];?>"/>
                            </td>
                        </tr>
						<tr>
                            <td>
                                <label>Telphone Number:</label>
                            </td>
                            <td>
                                <input type="text" class="medium" name="Telephone_number" value="<?php echo $showpost['Telephone_number'];?>"/>
                            </td>
                        </tr>
						<tr>
                            <td>
                                <label>Title Hourse:</label>
                            </td>
                            <td>
                                <input type="text" class="medium" name="Title_Hourse" value="<?php echo $showpost['Madrasa_hours_title'];?>"/>
                            </td>
                        </tr>
						<tr>
                            <td>
                                <label>Madrasa Hourse:</label>
                            </td>
                            <td>
                                <input type="text" class="medium" name="Madrasa_Hourse" value="<?php echo $showpost['Madrasa_hours_time'];?>"/>
                            </td>
                        </tr>
						
						<tr>
                            <td>
                                <label>E-mail:</label>
                            </td>
                            <td>
                                <input type="text" class="medium" name="Email" value="<?php echo $showpost['Madrasa_email_address'];?>"/>
                            </td>
                        </tr>
						<tr>
                            <td>
                                <label>Address_title:</label>
                            </td>
                            <td>
                                <input type="text" class="medium" name="address_title" value="<?php echo $showpost['Madrasa_address_title'];?>"/>
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
                                <label>Address:</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="Address"> <?php echo $showpost['Madrasa_address'];?> </textarea>
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