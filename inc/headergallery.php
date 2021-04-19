<?php
include("lib/config.php");
include("lib/database.php");
include("lib/helper.php");
$db = new Database();
$fm = new Formate();
?> 
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Madrasatul Muslima| Learn Quran & Islam, be Successfull</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Madrasatul Mislima| Learn Quran & Islam, be Successfull">
  <!-- font awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- animate -->
  <link rel="stylesheet" href="css/animate.css">  
  <!-- bootstrap.css -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- bootsrapmin -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Custome code for devloper you can change tha degign for the custom.css file -->
  <link rel="stylesheet" href="css/thumbnail-slider.css">
  <!-- Gallery -->
  <link rel="stylesheet" href="css/lightgallery.min.css">
  <link rel="stylesheet" href="css/gallery.css">
  <!-- End Gallery -->
  <link rel="stylesheet" href="css/custom.css">
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Archivo&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
  

</head>
<body>
<!-- Start Main Area-->

<!-- Navbar -->
<section class="top_bar" id="top_bar"  >
	<div class="container-fluid">
		<div class="row div col-md-5 col-sm-3 col-xs-12">
		<?php	
			$query="SELECT * FROM footer_area";
			$results=$db->select($query);
			$id=0; 
			if ($results){	
			?>
			<?php
			while($showresults=$results->fetch_assoc()){
			$id++; 
			
			?>		
			<h4>Tel: <?php echo $showresults['Telephone_number']; ?></h4>
			
		<?php } ?>
		<?php } ?>
		</div>		
		<div class="row div col-md-7 col-sm-9 col-xs-12 top_bar_text">
			<ul> 
				<li> <a href="jobs.php">Jobs</a></li>			
				<li> <a href="teachers.php">Teachers</a></li>			
				<li> <a href="lawp.php">Learning Award Pictures</a></li>			
				<li> <a href="contact_us.php">Contact Us</a></li>			
			</ul>
		</div>
	</div>				
</section>

<section class="top_content" id="top"  >
	<div class="container">
		<div class="row div col-md-2 col-sm-2 col-xs-4">
		
		
		<?php								
				$query="SELECT * FROM site_info";
				$results=$db->select($query);
				$id=0; 
				if ($results){?>
				<?php
				while($show=$results->fetch_assoc()){
					$id++; 
			?>
		<div class="logo_wraper_1">
			<img src="admin/<?php echo $show['logo'];?>" alt="" class="img-responsive"/>
		</div>
		</div>		
		<div class="row div col-md-10 col-sm-10 col-xs-8 logo_content">
			<h1 style="font-weight:bold"><?php echo $show['site_titile'];?> </h1>
			<p > <?php echo $show['site_slogan'];?> </p>
		</div>
		
		<?php } ?>
		<?php } ?>
		
		
	</div>				
</section>
<nav class="navbar navbar-default" id="tf-menu" role="navigation">
	<div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">			
		<div class="logo">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		</div>
		<div class="collapse navbar-collapse navbar-right" id="myNavbar">
		  <ul class="nav navbar-nav">
			<li class=""><a  href="index.php"> Home</a></li>
			<li class=""><a  href="notice.php"> Notice Board</a></li>
			<li class="dropdown ">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
			  <ul class="dropdown-menu">
			  
			  
				<?php		
							$query="SELECT * FROM cat_about";
							$results=$db->select($query);
							$id=0; 
							if ($results){	
							?>
							
							<?php
							while($cat_about=$results->fetch_assoc()){
							$id++; 
							
							?>
                                <li><a href="about_us_menu.php?id='<?php echo $cat_about['id']; ?>'"><?php echo $cat_about['name']; ?></a>  </li>
							<?php }?>
							<?php }?>
				
				
			  </ul>
			</li> 
			<li class="dropdown ">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Information <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<?php		
				$query="SELECT * FROM cat_information";
				$results=$db->select($query);
				$id=0; 
				if ($results){	
				?>
				
				<?php
				while($cat_info=$results->fetch_assoc()){
				$id++; 
				
				?>
					<li><a href="information_menu.php?id='<?php echo $cat_info['id']; ?>'"><?php echo $cat_info['name']; ?></a>  </li>
				<?php }?>
				<?php }?>				
				<li><a href="fees_options.php">Fees & Options</a></li>		
				
			  </ul>
			</li> 
			<li class="dropdown ">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admission <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="apply_form.php">Apply</a></li>
				<li><a href="vacancies.php">Vacancies</a></li>				
			  </ul>
			</li>
			<li class="dropdown ">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<?php		
					$query="SELECT * FROM cat_gallery";
					$results=$db->select($query);
					$id=0; 
					if ($results){	
					?>
					
					<?php
					while($cat_gallery=$results->fetch_assoc()){
					$id++; 
					
					?>
				<li><a href="gallery_menu.php?id='<?php echo $cat_gallery['id']; ?>'"><?php echo $cat_gallery['name']; ?></a>  </li>
				<?php }?>
				<?php }?>				
			  </ul>
			</li>
		  </ul>
		</div>
	  </div>
  </div>
  
</nav>

<!-- End Navbar--> 
