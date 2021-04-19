<?php include("inc/header.php"); ?> 

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Header Jobs Page</h2>
                <div class="block">    


															<?php 
															if ($_SERVER["REQUEST_METHOD"] =="POST"){
															$title				        	=$fm->validation($_POST['title']);	
															$tagline				        =$fm->validation($_POST['tagline']);	
															$descriptin				        =$fm->validation($_POST['descriptin']);	
															$vacancy				        =$fm->validation($_POST['vacancy']);	

															$title				      	 	 =mysqli_real_escape_string($db->link,$title);
															$tagline				        =mysqli_real_escape_string($db->link,$tagline);
															$descriptin				        =mysqli_real_escape_string($db->link,$descriptin);  
															$vacancy				        =mysqli_real_escape_string($db->link,$vacancy);  

															$query="UPDATE header_jobs_page SET
															Title					='$title',	
															Tagline                 ='$tagline',
															Description             ='$descriptin',													
															Vacancy                 ='$vacancy'

															WHERE id                =1";

															$results=$db->update($query);
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
				
				$query= "SELECT * From header_jobs_page where id=1;"; 
				$results=$db->select($query);
				$id=0; 
				if ($results){	
				?>
				
				<?php
				while($showresults=$results->fetch_assoc()){
				$id++; 
				
				?>
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" class="medium" name="title" value="<?php echo $showresults['Title']; ?>"/>
                            </td>
                        </tr>
						<tr>
                            <td>
                                <label>Tagline</label>
                            </td>
                            <td>
                                <input type="text" class="medium" name="tagline" value="<?php echo $showresults['Tagline']; ?>"/>
                            </td>
                        </tr>
                                            
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Descriptin</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="descriptin"> <?php echo $showresults['Description']; ?></textarea>
                            </td>
                        </tr>
						
						<tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Current Vacancy</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="vacancy"><?php echo $showresults['Vacancy']; ?></textarea>
                            </td>
                        </tr>
						
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Update Jobs Information" />
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