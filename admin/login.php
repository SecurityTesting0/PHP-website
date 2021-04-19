<?php 
ob_start();
$query = $_SERVER['QUERY_STRING']; 

$c_a = explode("=",$query );
$two_elc = array_slice($c_a, 0,2, true);

$user	= current($two_elc); 
$pass	= next ($two_elc); 


$verify_user 	= "madrasatul"; 
$verify_pass	= "muslima";

if (($user!=$verify_user)|| ($pass != $verify_pass)){
	header('location:../index.php');
	die();
	
}; 
 
//http://localhost/jobsbd2/adminpanel/index.php?ibrahim=tarek
?> 

<?php

include("lib/session.php");
Session::init(); 

?> 

<?php
include("lib/config.php");
include("lib/database.php");
include("lib/helper.php");

$db = new Database();
$fm = new Formate();

?> 


<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
	
	<?php
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			$username =$fm->validation($_POST['username']);
			$password =$fm->validation(md5($_POST['password']));
			
			$username = mysqli_real_escape_string($db->link,$username);
			$password = mysqli_real_escape_string($db->link,$password);
			
			$query ="SELECT * FROM admin_user WHERE username = '$username' AND password = '$password'" ; 
			$results =$db->select($query); 
			if($results != false){
					$value 	= mysqli_fetch_array($results);
					$rows 	= mysqli_num_rows($results); 
					if($rows > 0){
						Session::set("login", true);			
						Session::set("username", $value['username']);			
						Session::set("userID", $value['id']);	
						Session::set("Status", $value['status']);	
						header("Location:index.php");
					}else{
						echo"No Reuslts Found";
					}								
				
			}else{
				echo"<spna style='color:red; font-size:18px;'> <script> alert('You are not valid user'); </script></span>"; 
			}
			
		}
	
	
	?>
		<form action="" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="site_info_1">
			
		</div>
		<div class="site_info">
			<h3>Madrasatul Mislima</h3>
		</div>
	</section><!-- content -->
</div><!-- container -->
</body>
</html>