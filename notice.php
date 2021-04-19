<?php 

include("inc/header.php"); 

?> 

<!-- Start Main Content Area -->
<section class="section_wrapper main_wrapper">
	<div class="container">
		<div class="row">
			<div class="teachers_wrapper text-center">
				<div class="col-md-12 col-sm-12 col-xs-12">
					
				
					<h2>Notice Board</h2>
					<div style="width:200px;height:4px; margin:0px auto; background:#9EC035;"></div>
					<br>				
				</div>				
			</div>			
		</div>
		
		<div class="row">
						
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="awd_wrapper well" style="width:100%; font-size:16px;">
							<ul>
								<?php		
								$query="SELECT * FROM notice_board";
								$results=$db->select($query);
								$id=0; 
								if ($results){	
								?>
								
								<?php
								while($results1=$results->fetch_assoc()){
								$id++; 
								
								?>	
								<li><a href="notice_view.php?id=<?php echo $results1['id']; ?>"> <?php echo $results1['title']; ?> </a></li>
								<?php }?>
								<?php }?>
							</ul>
								
							</div>
						</div>
					
			
		</div>
	</div>
</section>


<!-- End Main Content Area -->


<?php 

include("inc/footer.php"); 

?> 