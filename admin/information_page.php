<?php include("inc/Header.php"); ?> 


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
			 <?php
					$query ="SELECT * FROM cat_information where id=$id";
					   
					$results = $db->select($query);

					if ($results){?>
					<?php while ($showpagename = $results->fetch_assoc()) {

				?> 
			
                <h2>UPDATE PAGE ||<?php echo $showpagename['name'];?> </h2>
				<?php } ?> 
				<?php } ?> 
				
					
			
				<?php 
					if ($_SERVER["REQUEST_METHOD"] =="POST"){
						$description	        =$fm->validation($_POST['description']);
						
						$description			=mysqli_real_escape_string($db->link,$description);
						
						$query="UPDATE information_menu SET	Description	='$description' WHERE id =$id";
						
						$results=$db->update($query);
						if($results==true){
							echo"<h3 style='color:green'>Page Succesfully Update </p>";
						}else{
							echo"Not Update";
						}
					}
					
					
				?>

				 <?php
					$query ="SELECT * FROM information_menu where id=$id";
					   
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
		<?php }else{?>
			<h3 style="text-align:center; margin-top:100px;"> Please add content first <a href="add_infopage.php?id=<?php echo $rid ?>" style="color:red;">Click Here</a>
		<?php }?>
		
		
		
		
		
<?php include("inc/footer.php"); ?> 