<?php include("inc/Header.php"); ?> 

        <div class="grid_10">
            <div class="box round first grid" >
                <h2>User Profile</h2>
                <div class="block">
					
                 <table class="data " id="example">
					<tbody>
						<?php		
						if (Session::get('Status')=='admin'){
							
						$query="SELECT * FROM admin_user where id=$userid";
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>
						
						<?php
						while($userresults=$results->fetch_assoc()){
						$id++; 
						
						?>
						<tr class="odd gradeX">
							<th rowspan="4">
								<img src="<?php echo $userresults['photo']; ?>" alt="" style="width:200px; height:200px;" />
							</th>
							<td>First Name</td>
							<td>:</td>
							<td><?php echo $userresults['firstname']; ?></td>
						</tr>
						<tr class="odd gradeX">
							<td>Last Name</td>
							<td>:</td>
							<td><?php echo $userresults['lastname']; ?></td>
						</tr>
						<tr class="odd gradeX">
							<td>Username</td>
							<td>:</td>
							<td><?php echo $userresults['username']; ?></td>
						</tr>
						<tr class="odd gradeX">
							
							<td>E-mail</td>
							<td>:</td>
							<td><?php echo $userresults['email']; ?></td>
							
						</tr>
						
						<tr class="">
							
							<td></td>
							<td></td>
							<td></td>
							<td>
							<br>
							
							<a href="edit_profile.php?id=<?php echo $userresults['id']; ?>" class="btn_edit" style="padding: 10px;"> Update Profile Information</a>
							</td>
							
						</tr>
						
							
						
					
						
						<?php }?>
						<?php }?>
						<?php }else {?>	
						
						<?php
								$query="SELECT * FROM admin_user where id='$userid' and status='$Status'";
								$results=$db->select($query);
								$id=0; 
								if ($results){?>
								<?php
								while($userresults=$results->fetch_assoc()){
									$id++; 
							?>
						
							
							<tr class="odd gradeX">
							<th rowspan="4">
								<img src="<?php echo $userresults['photo']; ?>" alt="" style="width:200px; height:200px;" />
							</th>
							<td>First Name</td>
							<td>:</td>
							<td><?php echo $userresults['firstname']; ?></td>
						</tr>
						<tr class="odd gradeX">
							<td>Last Name</td>
							<td>:</td>
							<td><?php echo $userresults['lastname']; ?></td>
						</tr>
						<tr class="odd gradeX">
							<td>Username</td>
							<td>:</td>
							<td><?php echo $userresults['username']; ?></td>
						</tr>
						<tr class="odd gradeX">
							
							<td>E-mail</td>
							<td>:</td>
							<td><?php echo $userresults['email']; ?></td>
							
						</tr>
						
						<tr class="">
							
							<td></td>
							<td></td>
							<td></td>
							<td>
							<br>
							
							<a href="edit_profile.php?id=<?php echo $userresults['id']; ?>" class="btn_edit" style="padding: 10px;"> Update Profile Information</a>
							</td>
							
						</tr>
						
						<?php }?>	
						<?php }?>	
						<?php }?>	

						
					</tbody>
						
				</table>				
               </div>
            </div>
        </div>
		
<?php include("inc/footer.php"); ?> 