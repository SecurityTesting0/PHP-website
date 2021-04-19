<?php include("inc/Header.php"); ?> 

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Teachers Page Header Information</h2>
                <div class="block">
				
						<?php 
							if ($_SERVER["REQUEST_METHOD"] =="POST"){
								$title				        =$fm->validation($_POST['title']);	
								$head1				        =$fm->validation($_POST['Tagline']);	
								$head2				        =$fm->validation($_POST['Tagline2']);	
								
								$title				        =mysqli_real_escape_string($db->link,$title);
								$head1				        =mysqli_real_escape_string($db->link,$head1);
								$head2				        =mysqli_real_escape_string($db->link,$head2);  
								
								$query="UPDATE header_teachers_page_one SET
								Title					='$title',	
								Tagline                 ='$head1',
								Tagline2                ='$head2'
								
								WHERE id                =1";
								
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
								$query ="SELECT * FROM header_teachers_page_one where id=1";
								   
								$results = $db->select($query);

								if ($results){?>
								<?php while ($showpost = $results->fetch_assoc()) {

							?> 

			
				
								 <form action="" method="post" enctype="multipart/form-data">
									<table class="form">
									   
										<tr>
											<td>
												<label>Title Name:</label>
											</td>
											<td>
												<input type="text"  class="medium" name="title" value="<?php echo $showpost['Title']; ?>"/>
											</td>
										</tr>
										<tr>
											<td>
												<label>Header One:</label>
											</td>
											<td>
												<input type="text" class="medium" name="Tagline" value="<?php echo $showpost['Tagline']; ?>"/>
											</td>
										</tr>
										<tr>
											<td>
												<label>Header Two:</label>
											</td>
											<td>
												<input type="text"  class="medium" name="Tagline2" value="<?php echo $showpost['Tagline2']; ?>"/>
											</td>
										</tr>                    
									   
										<tr>
											<td></td>
											<td>
												<input type="submit" name="submit" Value="Update Information" />
											</td>
										</tr>
									</table>
									</form>
					
						<?php } ?>
						<?php } ?>
				
				
                </div>
            </div>
        </div>
		
		
		
<?php include("inc/footer.php"); ?> 