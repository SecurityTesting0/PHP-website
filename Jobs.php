
<?php 

include("inc/header.php"); 

?> 
<!-- Start Main Content Area -->
<section class="section_wrapper main_wrapper">

<?php 
				
$query= "SELECT * From header_jobs_page where id=1;"; 
$results=$db->select($query);
$id=0; 
if ($results){	
?>

<?php
while($showresults=$results->fetch_assoc()){
$id++; 

?>
	<div class="container">
		<div class="row">
			<div class="jobs_wrapper">
				<div class="col-md-12 col-sm-12 col-xs-12 text-center">						
					<h2> <?php echo $showresults['Title'];?></h2>
					<h3>  <?php echo $showresults['Tagline'];?> </h3>
				</div>
			</div>
			
		</div>
		
		<div class="row">
			<div class="col-md-9 col-sm-9 col-xs-12">
				<div class="jobs_wrapper">
					 <?php echo $showresults['Description'];?>
				
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">						
				<img src="images/jobs_image.png" alt="" class="img-responsive" />
				<div class="Jobs_note">
					 <?php echo $showresults['Vacancy'];?>
					
				</div>
			</div>
		</div>
		
	</div>
	
	<?php }?> 
	<?php }?> 
</section>


<!-- End Main Content Area -->
<?php 

include("inc/footer.php"); 

?> 