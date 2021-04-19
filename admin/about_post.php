<?php include("inc/Header.php"); ?> 




        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>UPDATE PAGE</h2>
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
						
			
				<?php 
					if ($_SERVER["REQUEST_METHOD"] =="POST"){
						$description	        =$fm->validation($_POST['description']);
						
						$description			=mysqli_real_escape_string($db->link,$description);
						
						$query="UPDATE about_us SET	Description	='$description' WHERE id =$id";
						
						$results=$db->update($query);
						if($results==true){
							echo"<h3 style='color:green; background:#eee; padding:10px 5px; margin-top:10px; width:85%;'>Page Succesfully Update </h3>";
						}else{
							echo"Not Update";
						}
					}
					
					
				?>

				 <?php
					$query ="SELECT * FROM about_us where id=$id";
					   
					$results = $db->select($query);

					if ($results){?>
					<?php while ($showpost = $results->fetch_assoc()) {

				?> 
								<div class="block">               
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">                       
                        <tr>                            
                            <td>
                                <textarea class="tinymce" name="description">
								<?php echo $showpost['Description'];?>
								</textarea>
                            </td>
                        </tr>
						<tr>                            
                            <td>
                                <input type="submit" name="submit" Value="Update Information" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
		
		<?php }?>
		<?php }?>
		
		
		
<?php include("inc/footer.php"); ?> 