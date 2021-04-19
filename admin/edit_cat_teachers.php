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
                <h2>Update Category</h2>
               <div class="block copyblock"> 
			   <?php
			   if ($_SERVER["REQUEST_METHOD"] =="POST"){
						$name				        =$fm->validation($_POST['name']);
						
						$name				        =mysqli_real_escape_string($db->link,$name);
						
						$query="UPDATE cat_teachers SET
							name				='$name'							
							WHERE id                =$rid";
						
						$results=$db->update($query);
						if($results==true){
							echo "<script> alert ('Catagory Successfully Update') </script>";
							echo "<script> window:location ='addcat_teachers.php'; </script>";
						}else{
							echo"Not Update";
						}
					}
					?>
					<?php
					$query ="SELECT * FROM cat_teachers where id=$rid";
					   
					$results = $db->select($query);

					if ($results){?>
					<?php while ($showpost = $results->fetch_assoc()) {

					?> 
					<form action="" method="post" >
						<table class="form">					
							<tr>
								<td>
									<input type="text" value="<?php echo $showpost['name']; ?>" name="name" class="medium" required/>
								</td>
							</tr>
							<tr> 
								<td>
									<input type="submit" name="submit" Value="Update Catagory" />
								</td>
							</tr>
						</table>
					</form>
					<?php }?>
					<?php }?>
                </div>
            </div>	
        </div>
		
<?php include("inc/footer.php"); ?> 