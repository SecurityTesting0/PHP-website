<?php include("inc/Header.php"); ?> 

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block">        
                 <table class="data display datatable" id="example">
					<thead>
						<tr style="text-align:left;">
							
							<th>Name</th>
							<th>Desigination</th>
							<th>Sex</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php		
					$query="SELECT * FROM header_teachers_page_info";
					$results=$db->select($query);
					$id=0; 
					if ($results){	
					?>
					
					<?php
					while($messageshow=$results->fetch_assoc()){
					$id++; 
					
					?>
					<tr class="odd gradeX">
						<td><?php echo $messageshow['name']; ?></td>						
						<td><?php echo $messageshow['desigination']; ?></td>
						<td><?php if($messageshow['teachers_cat_id']==1){
								echo "Male"; 	
						} else{
							echo "Female";
						}
						 ?></td>
						<td><a href="edit_teachers.php?id='<?php echo $messageshow['id']; ?>'" class="btn_edit">Edit</a> 
						<?php 
							if (Session::get('Status')=='admin'){
						?>
						|| 
						<a href="delete.php?delteach='<?php echo $messageshow['id']; ?>'" class="btn_delete">Delete</a></td>
						S<?php }?>
					</tr>
					<?php }?>
					<?php }?>
										
					</tbody>
				</table>				
               </div>
            </div>
        </div>
		
<?php include("inc/footer.php"); ?> 