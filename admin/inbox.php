<?php include("inc/header.php"); ?> 

 <?php
if (isset($_GET['id'])){
	$seenid				=$_GET['id']; 
	
	$query="UPDATE header_contact_us_page SET
		Seen_unseen_id		='1'							
		WHERE id            ='$seenid'";
	
	$results=$db->update($query);
	if($results==true){
		
	}else{
		echo"Not Update";
	}
}
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block">        
                 <table class="data display datatable" id="example">
					<thead>
						<tr style="text-align:left;">
							
							<th>Name</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php		
					$query="SELECT * FROM header_contact_us_page where Seen_unseen_id=0;";
					$results=$db->select($query);
					$id=0; 
					if ($results){	
					?>
					
					<?php
					while($messageshow=$results->fetch_assoc()){
					$id++; 
					
					?>
					<tr class="odd gradeX">
						<td><?php echo $messageshow['Name']; ?></td>
						<td><a href=""> <?php echo $fm->textShorten($messageshow['Message'],70); ?> </a></td>
						<td>
						<a href="inbox_singlemsg.php?id=<?php echo $messageshow['id']; ?> " class="btn_edit">View</a>  
						
						||
						<a href="delete.php?inboxid=<?php echo $messageshow['id']; ?>" class="btn_delete">Delete</a></td>
					
					</tr>
					<?php }?>
					<?php }?>
										
					</tbody>
				</table>
				<br>
				<!--<h5> Seen Message</h5> 
				<hr>
				<table class="data display datatable" id="example">
					<thead>
						<tr style="text-align:left;">
							
							<th>Name</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php		
					$query="SELECT * FROM header_contact_us_page where Seen_unseen_id=1;";
					$results=$db->select($query);
					$id=0; 
					if ($results){	
					?>
					
					<?php
					while($messageshow=$results->fetch_assoc()){
					$id++; 
					
					?>
					<tr class="odd gradeX">
						<td><?php echo $messageshow['Name']; ?></td>
						<td><a href=""> <?php echo $messageshow['Message']; ?> </a></td>
						<td><a href="inbox_singlemsg.php?id=<?php echo $messageshow['id']; ?> " class="btn_edit">View</a> || <a href="" class="btn_delete">Delete</a></td>
					</tr>
					<?php }?>					
					<?php }?>
					</tbody>
				</table>-->
               </div>
            </div>
        </div>
		
<?php include("inc/footer.php"); ?> 