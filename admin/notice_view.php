<?php include("inc/Header.php"); ?> 

        <div class="grid_10">
		
            <div class="box round first grid">
             <a href="notice.php" class="btn_edit">Add New Notce </a>|| <a href="notice_view.php" class="btn_delete">View Notice</a>
			<h2></h2>			

               <table class="data display datatable" id="example">
					<thead>
						<tr style="text-align:left;">
							
							<th>S.L No</th>
							<th></th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php		
					$query="SELECT * FROM notice_board";
					$results=$db->select($query);
					$id=0; 
					if ($results){						
					?>
					
					<?php
					while($notice=$results->fetch_assoc()){
					$id++; 					
					?>
					<tr class="odd gradeX">
						<td><?php echo $id; ?></td>
						<td><?php echo $fm->textShorten($notice['title'],30); ?></td>
						
						<td><a href="delete.php?delnotice=<?php echo $notice['id']; ?>" class="btn_delete">Delete</a></td>
						
					</tr>
					<?php }?>					
					<?php }?>
					</tbody>
				</table> 
            </div>
        </div>
		
		
		
<?php include("inc/footer.php"); ?> 