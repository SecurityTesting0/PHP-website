
<?php include("inc/Header.php"); ?> 

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Admission Applicant List</h2>
                <div class="block">        
                 <table class="data display datatable" id="example">
					<thead>
						<tr style="text-align:left;">
							
							<th>S.L No</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php		
					$query="SELECT * FROM admission_apply_page_two";
					$results=$db->select($query);
					$id=0; 
					if ($results){
					?>
					
					<?php
					while($applicat_results=$results->fetch_assoc()){
					$id++; 
					
					?>
					<tr class="odd gradeX">
						<td><?php echo $id; ?></td>
						<td><?php echo $applicat_results['Name']; ?></td>
						<td><?php echo $applicat_results['Phone']; ?></td>
						<td><?php echo $applicat_results['Email']; ?></td>
						<td><a href=""> <?php echo $applicat_results['Message']; ?> </a></td>
						<td>
						<a href="appliyed_singleview.php?id=<?php echo $applicat_results['id']; ?>" class="btn_edit">View</a> 
						
						|| <a href="delete.php?aplstudent=<?php echo $applicat_results['id']; ?>" class="btn_delete">Delete</a></td>
						
					</tr>
					<?php }?>
					<?php }?>
										
					</tbody>
				</table>
				<br>
				
               </div>
            </div>
        </div>
		
<?php include("inc/footer.php"); ?> 