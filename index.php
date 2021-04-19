<?php 

include("inc/header.php"); 

?> 
<!-- Slider start -->

<!-- main slider start -->
<section id="slider" class="slider ">
	<div class="container-fluid">
		<div class="row">
			
				<div id="main-slide" class="carousel slide" >
					
					<!-- Carousel inner --->
					<div class="carousel-inner">
					
							
					<!-- Carousel inner --->
					<div class="carousel-inner">
					<?php 
					$query="SELECT * FROM home_slider_image";
					$results=$db->select($query);
					$id=0; 
					if ($results){	
					?>
					<?php
					$showresults=$results->fetch_assoc()
					?>
					
						<!--/ Carousel item end --->
						<div class="item active"> 
							<div class="col-md-12 text-center">
								<div class="slider-content ">
									<img src="admin/<?php echo $showresults ['image']; ?>" alt="" style="max-height:400px; width:100%;" />
								</div>
							</div>
						</div>
						<!--/ Carousel item end--> 

					<?php } ?>
					<?php 
					$query="SELECT * FROM home_slider_image";
					$results=$db->select($query);
					$id=0; 
					if ($results){	
					?>
					<?php
					while($showresults=$results->fetch_assoc()){
					$id++; 
					?>
					
						<!--/ Carousel item end --->
						<div class="item"> 
							<div class="col-md-12 text-center">
								<div class="slider-content ">
									<img src="admin/<?php echo $showresults ['image']; ?>" alt="" style="max-height:400px; width:100%;" />
								</div>
							</div>
						</div>
						<!--/ Carousel item end--> 

					<?php } ?>
					<?php } ?>
					
					
					</div>
					<!-- Carousel inner end-->
					<!-- Controllers --->
					 <ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>
					<a class="left carousel-control" href="#main-slide" data-slide="prev"> <span><i class="fa fa-angle-left"></i></span> </a>
					<a class="right carousel-control" href="#main-slide" data-slide="next"> <span><i class="fa fa-angle-right"></i></span> </a>
				</div>
				<!--/ Carousel end ----->
			
		</div>
	</div>
</section>
	<!-- main slider end -->
<!-- Slider end -->

<!--News ticker-->
<div style="background:#101541; color:#FFF; position:relative">
	<div class="ticker-badge" style="position:absolute; background-color: #101541; height:100%; z-index:1">
		<div style="transform-origin:0 100%; transform: skewX(-20deg); -web-kit-moz-transform-origin:0 100%; -webkit-moz-transform: skewX(-20deg); padding: 5px; border: 1px solid #101541;  margin-left: 58px; background:#fff; color:#000; font-family: 'Montserrat', sans-serif;">
		
		<b>News</b> 
		</div>
	</div>
	<marquee scrollamount="6" style="height:28px; padding-top:5px" onMouseOver="this.stop();" onmouseout="this.start();">
		
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
		<a target="_blank" href="notice_view.php?id=<?php echo $results1['id']; ?>" style="font-family: 'Montserrat', sans-serif; font-size:16px;font-weight: 500;letter-spacing: 1px; color:#FFF">
		<?php echo $results1['title']; ?>
		</a>||
		
		<?php }?>
		<?php }?>
						
	</marquee>
</div>
<!--End News ticker-->


<!-- Start Thamnail Area -->
<section class="section_wrapper main_wrapper">
	<div class="container">
		<div id="thumbnail-slider-edited">
			<div class="inner">
				<ul>
				
					<?php 
					$query="SELECT * FROM home_slider_video";
					$results=$db->select($query);
					$id=0; 
					if ($results){	
					?>
					<?php
					 while ($showresults=$results->fetch_assoc()) {
						 $id++; 

					?>
					
					<li>
						<a class="thumb" href="images/blog/background.jpg">
						<div class="col-lg-12 col-md-12 thumbnail-slider-text">
							<iframe width="110%" height="100%" src="<?php echo $showresults['video_link']; ?>?rel=0&amp;autoplay=0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						</a>						
					</li>
					
					<?php }?> 
					<?php }?> 
					
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- End Thamnail Area -->

<?php 

include("inc/footer.php"); 

?> 