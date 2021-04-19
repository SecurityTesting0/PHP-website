<?php include("inc/Header.php"); ?> 
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Change Password</h2>
                <div class="block">  
 <?php

if ($_SERVER["REQUEST_METHOD"] =="POST"){
		$old 		=$fm->validation(md5($_POST['oldpass']));
		$newpass	=$fm->validation(md5($_POST['npwd']));
		$rnewpass	=$fm->validation(md5($_POST['cnpwd']));

		$query="SELECT * from admin_user where password='$old' "; 
		$passchck =$db->select($query);
			if($passchck!= false) {
				while($value =$passchck->fetch_assoc()){
				$id =$value['id'];
			}
			if($newpass==$rnewpass){
				$query ="UPDATE admin_user SET 
				password = '$rnewpass'
				WHERE id='$id'";

			$passchange =$db->update($query);
			if ($passchange) {
				echo"<span style='color:green; text-align:center;'>Password Successfully Change </span> <br>";
			} else {
			echo "Contact Webmuster";
			}

			}else{
			echo "New Password Not match";
			}									
			}else{
			echo"<h3 style='color:red; text-align:center;'>Current Password Not Match </h3>";
			}
			}
?> 				
                 <form action="" method="post" >
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Old Password</label>
                            </td>
                            <td>
                                <input type="password" placeholder="Enter Old Password..."  name="oldpass" class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>New Password</label>
                            </td>
                            <td>
                                <input type="password" placeholder="Enter New Password..." name="npwd" class="medium" />
                            </td>
                        </tr>
						<tr>
                            <td>
                                <label>Re-Enter</label>
                            </td>
                            <td>
                                <input type="password" placeholder="Re-Enter New Password..." name="cnpwd" class="medium" />
                            </td>
                        </tr>
						 
						
						 <tr>
                            <td>
                            </td>
                            <td>
                                <input type="submit" name="submit"  Value="Update Password" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
		
		
		
<?php include("inc/footer.php"); ?> 