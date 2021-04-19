<?php 

include("inc/header.php"); 

?> 
<!-- Start Main Content Area -->
<section class="section_wrapper main_wrapper">
	<div class="container">
		<div class="row">
			<div class="teachers_wrapper">
				<div class="col-md-12 col-sm-12 col-xs-12 text-center">				
						<?php		
						$query="SELECT * FROM header_teachers_page_one;";
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>

						<?php
						while($infoshow1=$results->fetch_assoc()){
						$id++; 

						?>				
					<h2>  <?php echo $infoshow1['Title']; ?></h2>
					<h3><?php echo $infoshow1['Tagline']; ?></h3>
					<p> <?php echo $infoshow1['Tagline2']; ?> </p>
					
					<?php }?>
					<?php }?>
					
					
				</div>
			</div>
			
		</div>
		
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="teachers_wrapper">
					<div class="head_area">
						<h4>Female Teachers</h4>
					</div>
					
					<?php		
					$query="SELECT * FROM header_teachers_page_info where teachers_cat_id=2;";
					$results=$db->select($query);
					$id=0; 
					if ($results){	
					?>
					
					<?php
					while($infoshow=$results->fetch_assoc()){
					$id++; 
					
					?>
					<div class="info_teacher">
				
						<h4><?php echo $infoshow['name']." (".$infoshow['desigination'].")" ?></h4>
						<?php echo $infoshow['about']; ?>
					</div>
					
					<?php }?>
					<?php }?>
					
					
					
				
				</div>
			</div>
			
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="teachers_wrapper">
					<div class="head_area">
						<h4>Male Teachers</h4>
					</div>
					
					<?php		
					$query="SELECT * FROM header_teachers_page_info where teachers_cat_id=1;";
					$results=$db->select($query);
					$id=0; 
					if ($results){	
					?>
					
					<?php
					while($infoshow=$results->fetch_assoc()){
					$id++; 
					
					?>
					<div class="info_teacher">
				
						<h4><?php echo $infoshow['name']." (".$infoshow['desigination'].")" ?></h4>
						<?php echo $infoshow['about']; ?>
					</div>
					
					<?php }?>
					<?php }?>
				
				</div>
			</div>
			
		</div>
		
	</div>
</section>


<!-- End Main Content Area -->

<?php 

include("inc/footer.php"); 

?> 