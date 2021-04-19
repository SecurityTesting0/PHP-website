<?php include("inc/header.php"); ?> 


<?php 
	if (empty($_GET['id'])){
	}elseif(!isset($_GET['id']) || $_GET['id'] == NULL){
		echo 'Something went to wrong';
	}else{
			$tid= $_GET['id'];
			$id= preg_replace("/[^0-9a-zA-Z]/", "", $tid);
			$rid = $id;
	}
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Student Application List</h2>
                <div class="block">        
                 <table class="data display datatable" id="example">				
					<tbody>
					<?php		
					$query="SELECT * FROM admission_apply_page_two where id=$rid";
					$results=$db->select($query);
					$id=0; 
					if ($results){	
					?>
					
					<?php
					while($messageshow=$results->fetch_assoc()){
					$id++; 
					
					?>
					<tr class="odd gradeX">	
						<td>Name</td>
						<td>:</td>
						<td><?php echo $messageshow['Name']; ?></td>
					</tr>
					<tr class="odd gradeX">	
						<td>E-mail</td>
						<td>:</td>
						<td><?php echo $messageshow['Email']; ?></td>
					</tr>
					<tr class="odd gradeX">	
						<td>Seding Date</td>
						<td>:</td>
						<td><?php echo $messageshow['date']; ?></td>
					</tr>
					<tr class="odd gradeX">	
						<td>Subject</td>
						<td>:</td>
						<td><?php echo $messageshow['Subject']; ?></td>
					</tr>
					<tr class="odd gradeX">	
						<td>Message</td>
						<td>:</td>
						<td><?php echo $messageshow['Message']; ?></td>
					</tr>
					<?php }?>
					<?php }?>
										
					</tbody>
				</table>
				
               </div>
            </div>
        </div>
		
<?php include("inc/footer.php"); ?> 