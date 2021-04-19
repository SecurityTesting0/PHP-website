<?php 

include("inc/header.php"); 

?> 

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
			

<!-- Start Main Content Area -->
<section class="section_wrapper main_wrapper">
	<div class="container">
	
			<?php
				$query ="SELECT * FROM notice_board where id=$id";
				   
				$results = $db->select($query);

				if ($results){?>
				<?php while ($showpost = $results->fetch_assoc()) {

			?> 	
		
		<div class="row">
			<div class=" col-md-12 col-sm-12 col-xs-12">
				<div class="about_us_image text-justify">
					<div class="well"> 	
						<h3><?php echo $showpost['title'];?></h3>
						<h4>Publish Date:<?php echo $showpost['date'];?></h4>
						<p> <img src="admin/<?php echo $showpost['image'];?>" alt="" class="img-responsive"/> </p>
						<p> <?php echo $showpost['description'];?> </p>
					</div> 				
				</div>
			
			</div>
			
		</div>
		
		<?php }?>
		<?php }else {?>
			
			<h3 style="text-align:center; padding:100px; "> No Data Avalaible </h3> 
		<?php }?>
	</div>
</section>


<!-- End Main Content Area -->

<?php 

include("inc/footer.php"); 

?> 