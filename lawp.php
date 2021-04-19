<?php 

include("inc/header.php"); 

?> 

<!-- Start Main Content Area -->
<section class="section_wrapper main_wrapper">
	<div class="container">
		<div class="row">
			<div class="teachers_wrapper">
				<div class="col-md-12 col-sm-12 col-xs-12">
					
				
					<h2>AWARDS</h2>
					<p> you can change your own content. Demo Text you can change your own content. </p>
					<br>
					<br>
				</div>				
			</div>			
		</div>
		
		<div class="row">
					<?php		
						$query="SELECT * FROM header_lawp_page";
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>
						
						<?php
						while($results1=$results->fetch_assoc()){
						$id++; 
						
						?>		
						<div class="col-md-3 col-sm-4 col-xs-12">
							<div class="awd_wrapper">
								<img src="admin/<?php echo $results1['image']; ?>" alt="" class="img-responsive"/>
								<p><?php echo $results1['image_title']; ?> </p>
							</div>
						</div>
						<?php }?>
						<?php }?>
			
		</div>
	</div>
</section>


<!-- End Main Content Area -->


<?php 

include("inc/footer.php"); 

?> 