<?php include("inc/header.php"); ?> 
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Category || Gallery Page</h2>
               <div class="block copyblock"> 
			   
			   
				   <?php 
						if(isset($_POST["submit"])){
							$name=$_POST['name'];	
							$query="INSERT INTO cat_gallery(name) values ('$name')";
							$results=$db->insert($query);
							
							if($results==true){
								echo"<p class='well text-center' style='margin:0px auto; color:green;'>Catagory Succesfully created</p>";
							}else{
								echo"You should be checked again";
							}
						}
					?>
			   
                 <form action="" method="post" >
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" placeholder="Enter Category Name..." name="name" class="medium" required/>
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Creat Catagory"  />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
				 <table class="display datatable" id="example">
					<thead>
						<tr >
							<th style="text-align:left">Serial No.</th>
							<th style="text-align:left">Cat Name</th>
							<th style="text-align:left">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php		
						$query="SELECT * FROM cat_gallery";
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>
						
						<?php
						while($catshow=$results->fetch_assoc()){
						$id++; 
						
						?>
						<tr class="odd gradeX">
							<td><?php echo $id; ?></td>
							<td><?php echo $catshow['name']; ?></td>
							<td>
							<a href="edit_cat_gallery.php?id=<?php echo $catshow['id']; ?>" class="btn_edit">Edit</a> 
							<?php 
							if (Session::get('Status')=='admin'){
							?>
							|| <a href="delete.php?gcat=<?php echo $catshow['id']; ?>" class="btn_delete">Delete</a></td>
						<?php }?>
						</tr>
						
						<?php }?>
						<?php }?>
												
					</tbody>
				</table>
            </div>	
        </div>
		
<?php include("inc/footer.php"); ?> 