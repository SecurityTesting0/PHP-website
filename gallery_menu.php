
<?php 

include("inc/headergallery.php"); 

?> 
<!-- Start Main Content Area -->
<section class="section_wrapper main_wrapper gallery_wrapper">
	<div class="container">
		<div class="row">
        <div class="col-md-12 bg-light text-center mt-10 ptb-10" style="border:1px solid #DDD">
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
			<?php
				$query ="SELECT * FROM cat_gallery where id=$id";
				   
				$results = $db->select($query);

				if ($results){?>
				<?php while ($showpagetitle = $results->fetch_assoc()) {

			?> 	
		
		
            <h3 class="text-center"><?php echo $showpagetitle['name'];?></h3><br> 
			
			<?php }?>
			<?php }?>
			
        </div>
	    <div class="pt-60 pb-60 ">
				<ul class="list-unstyled row light-gallery" style="margin-left: 0px;margin-left: 0px;border: 1px solid #00000026;padding-left: 6px;padding-top: 4px;padding-bottom: 4px;">
				    
				<?php
					$query ="SELECT * FROM gallery_menu where page_id=$rid";
					   
					$results = $db->select($query);

					if ($results){?>
					<?php while ($showphoto = $results->fetch_assoc()) {

				?> 					
				    <li class="col-md-3 padding_gallery single_gallery " data-responsive="" data-src="admin/<?php echo $showphoto['image'];  ?>" data-sub-html="<?php echo $showphoto['title'];  ?>">
						<a href="#">
							<img light-gallery-target="light-gallery-item1" class="img-responsive" src="admin/<?php echo $showphoto['image'];  ?> " alt="<?php echo $showphoto['title'];  ?>">
						</a>
					</li>

			<?php }?>
			<?php } else{?>
					<h3 style="text-align:center; color:red;"> No photo available</h3>
			<?php }?>
			
				  </ul>
			</div>
	</div>
	</div>
</section>


<!-- End Main Content Area -->

<?php 

include("inc/footer.php"); 

?> 