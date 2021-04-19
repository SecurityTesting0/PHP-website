<!doctype html>
<html lang="en">
  <head>
   <!-- Start  Adsense Code -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-2913024410731706",
              enable_page_level_ads: true
         });
    </script>
    <!-- End Adsense Code -->
    <!-- Required meta tags -->
    <title><?php echo $showpost['title']; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $showpost['institution_name']; ?>">
    <meta name="keywords" content="<?php echo $showpost['keywords']; ?>">
    <!-- CSS File-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
	<script src="js/custom.js"></script>
	
		<script type="text/javascript">
			$(document).ready(function () {
				setupTinyMCE();
				setDatePicker('date-picker');
				$('input[type="checkbox"]').fancybutton();
				$('input[type="radio"]').fancybutton();
			});
		</script>
			<script type="text/javascript">
			$(document).ready(function () {
				setupLeftMenu();
				setSidebarHeight();
			});
		</script>
  </head>
  
  <body>
  
   <!-- Subscriber-->
 <script type="text/javascript">var subscribersSiteId='f89b7971-54e2-4143-987a-970c61c93b90';</script><script type="text/javascript" src="https://cdn.subscribers.com/assets/subscribers.js"></script> 
 <!-- Subscriber-->
  
<div class="main_wrapper"><!-- Start Main Wrapper-->
    <div class="alert alert-warning alert-dismissible fade show text-center" > 
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h6 style="font-size:13px; padding:0px; margin:0px;"><span style="color:green;">Bd</span><span style="color:red">Latest</span><span style="color:green;">Job</span>.com-এ 
    প্রকাশিত যেকোনো চাকরি সংক্রান্ত তথ্য নিয়োগকারী প্রতিষ্ঠান কর্তৃক ও ইন্টারনেটের বিভিন্ন মাধ্যমে থেকে সংগ্রহ করে দেওয়া হয়ে থাকে। 
    প্রকাশিত যেকোনো ধরণের চাকরি তথ্য/বিজ্ঞাপন বা নিয়োগ-প্রক্রিয়ার দায়-দায়িত্ব স্ব-স্ব নিয়োগকারী প্রতিষ্ঠানের। 
    এ সংক্রান্ত কোনো অসত্য বা অসম্পূর্ন তথ্য অথবা আর্থিক লেনদেনের দায় 
    <span style="color:green;">Bd</span><span style="color:red">Latest</span><span style="color:green;">Job</span>.com এর নয়। 
    </h6>
    
    </div>

    
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			  <!--<a class="navbar-brand" href="#">Navbar</a>-->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  
			  <div class="d-sm-block d-md-none nav_bar_search">
					<form class="form-inline" action="search_job.php" method="get">
					  <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search" required>
					  <button class="btn btn-outline-success" type="submit" value="search">Search</button>
					</form>
			    </div>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			  
			  
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item">
					<a class="nav-link" href="index.php"> <i class="fa fa-home"></i> Home</a>
				  </li><!--
				  <li class="nav-item">
					<a class="nav-link" href="admitcard.php">Primary Admit Card Download</a>
				  </li>--> 
				  <li class="nav-item d-none d-md-block d-lg-block ">
					<form class="form-inline" action="search_job.php" method="get">
					  <input class="form-control" type="search" name="search" placeholder="Search" aria-label="Search" required>
					  <button class="btn btn-outline-success" type="submit" value="search">Search</button>
					</form>
				  </li>
				</ul>
				<!---
				<ul class="navbar-nav">
				
				
				<?php 
					if (Session::get('userID')==false){
				
				?>
				
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  <span class="fa fa-user"></span> Sign Up</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <h6 style="background:#0F3A3E; padding:10px;"> <span style="color:red;">BdLatest</span><span style="color:green;"> Account </span></h6>
						  <hr>
						  <a class="dropdown-item" href="user_registraton.php"> <span class="fa fa-user"> </span> Job Seekers Account</a>
						  <a class="dropdown-item" href="jobs_login.php"><span class="fa fa-users"> </span> Company Account</a>
						</div>
					  </li>
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  <span class="fa fa-user"></span> Sign In</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <h6 style="background:#0F3A3E; padding:10px;"> <span style="color:red;">BdLatest</span><span style="color:green;"> Account </span></h6>
						  <hr>
						  <a class="dropdown-item" href="jobs_login.php"> <span class="fa fa-user"> </span> Job Seekers Panel</a>
						  <a class="dropdown-item" href="jobs_login.php"><span class="fa fa-users"> </span> Corporate Panel</a>
						</div>
					  </li>						  
				<?php 
					}else{				
				?>
				
				
				<li class="nav-item dropdown">
				
							<?php								
									$query="SELECT * FROM job_sekers_table where id='$userid'";
									$results=$db->select($query);
									$id=0; 
									if ($results){?>
									<?php
									while($show=$results->fetch_assoc()){
										$id++; 
								?>
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  <span class="fa fa-user"></span>

						  Welcome to <?php echo $show['applcation_name']; ?>
						  
						  </a>
						  
						  <?php } ?>
							<?php } ?>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						   <h6 style="background:#0F3A3E; padding:10px;"> <span style="color:red;">User</span><span style="color:green;"> Account </span></h6>
						  <hr>
						  <a class="dropdown-item" href="user"> <span class="fa fa-user"> </span> Dashboard</a>
						  
						  
						  <?php
									if(isset($_GET['action']) && $_GET['action'] == "logout"){
										Session::destory();
									}
								 ?>	
						  <a class="dropdown-item" href="?action=logout"><span class="fa fa-users"> </span> Logout</a>
						</div>
					  </li>	
				
				
				
				
				<?php 
					}				
				?>
				



					  
				</ul>	-->		
				
			  </div>
			    
			</nav>
