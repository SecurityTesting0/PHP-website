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
                <h2>Add New Post</h2>
                <div class="block">    

<?php 
	if(isset($_POST["submit"])){
	$description			    =$fm->validation($_POST['description']);
	$description				=mysqli_real_escape_string($db->link,$description);
						

	$query="INSERT INTO information_menu(page_id,Description) 
	values ('$rid','$description')";
	$results=$db->insert($query);
	if($results==true){
	echo" <h3 style='color:green;'>Your Post Succesfully Completed </h3>";
	}else{
	echo"Checked Again";
	}
	}

?>			
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="description"></textarea>
                            </td>
                        </tr>
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
		
		
		
<?php include("inc/footer.php"); ?> 