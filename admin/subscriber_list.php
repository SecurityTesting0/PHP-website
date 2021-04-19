<?php include("inc/Header.php"); ?> 

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Subscriber Table</h2>
                <div class="block">        
                 <table class="data display datatable" id="example">
					<thead>
						<tr style="text-align:left;">							
							<th>S.L No</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php		
						$query="SELECT * FROM subscriber_table";
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>
						
						<?php
						while($messageshow=$results->fetch_assoc()){
						$id++; 
						
						?>
						<tr class="odd gradeX">
							<td><?php echo $id; ?></td>
							<td><?php echo $messageshow['subscriber_email']; ?></td>
							<td>
							<a href="" class="btn_edit">View</a>
							
							|| <a href="delete.php?sbcrber=<?php echo $messageshow['id']; ?>" class="btn_delete">Delete</a></td>
		
						</tr>
						<?php }?>
						<?php }?>										
					</tbody>
				</table>				
               </div>
            </div>
        </div>
		
<?php include("inc/footer.php"); ?> 