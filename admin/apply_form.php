<?php include("inc/Header.php"); ?> 

        <div class="grid_10">
		
            <div class="box round first grid">
			<h2> Apply Pages</h2>
                <div class="block">  
						
						<?php		
						$query="SELECT * FROM admission_apply_page_one_defult_info";
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>
						
						<?php
						while($results1=$results->fetch_assoc()){
						$id++; 
						
						?>
						
					<table class="form" style="font-size:18px;"> 
						<tr  >							
							<td style="width:30%; text-align:center;"><h3> Heading </h3></td>
							<td style="width:70%;"><?php echo $results1['Description']; ?></td>
						</tr>
						<tr >							
							<td style="width:30%; text-align:center;"><h3>Application Form</h3></td>
							<td>
							<a href="<?php echo $results1['application_form']; ?>">   
							<img src="generalimage/word.jpg" alt="Application Form" style="width:100px; height:70px;"/><br>Application Form
							</a>
							</td>
						</tr>
						<tr >							
							<td style="width:30%; text-align:center;"> <h3>Rightside Image</h3></td>
							<td><img src="<?php echo $results1['righ_bar_image']; ?>" alt="" style="height:200px; width:300px;"/></td>
						</tr>
						
						<tr >							
							<td></td>
							<td>
							<a href="edit_apply.php?id=<?php echo $results1['id']; ?>" class="btn_edit" > Edit </a>
							 
							</td>
						</tr>
						
						<?php }?>
						<?php }?>
					</table>
					
					
                </div>
            </div>
        </div>
		
		
		
<?php include("inc/footer.php"); ?> 