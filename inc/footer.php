<?php
$db = new Database();
?> 


<?php 
	if(isset($_POST["submit"])){
		$email=$_POST['email'];	
		$query="INSERT INTO subscriber_table(subscriber_email) values ('$email')";
		$results=$db->insert($query);
		
		if($results==true){
			?> 
		<script>alert('Your e-mail successfully add our subscribe list');</script>
					   			
		<?php
		}else{
			echo"You should be checked again";
			
		}
	}
?>

<!--  Footer Content Area --> 
<section class="footer text-center" id="footer">	
	<div class="container-fluid">
	
	
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
				
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			
			
				<div class="footer_wrapper text-justify"> 
					<h3> <?php echo $showresults['Madrasa_hours_title']; ?> </h3> 
					<div class="f_hr"> </div>
					<h4><?php echo $showresults['Madrasa_hours_time']; ?></h4>
					<div class="f_hr"> </div>
					<h3> <?php echo $showresults['Telephone_title']; ?></h3>	
					<div class="f_hr"> </div>					
					<h4><span class="fa fa-phone"> <?php echo $showresults['Telephone_number']; ?> </h4>					
				</div> 
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<div class="footer_wrapper"> 
				<h3> <?php echo $showresults['Madrasa_address_title']; ?>  </h3> 
				<div class="f_hr"> </div>
				<h4 style="width:100%;">
				<?php echo $showresults['Madrasa_address']; ?>
				</h4>
				
				<!-- Carousel inner
				<div id="footer-slide" class="carousel slide footer_slide" >
					
					<div class="carousel-inner">
						<div class="item active"> 
							<div class="col-md-12 text-center">
								<div class="slider-content active">
								<p> "I've had quite a pleasing experience with Tayyibun so far. They seem to have given children as well as parents a lot of support this year and handled queries very professionally."
								</p> 
								<p style="font-weight:bold;">Hussain</p>
								<p >Parent</p>
								</div>
							</div>
						</div>
						
						<div class="item"> 
							<div class="col-md-12 text-center">
								<div class="slider-content ">
								<p> "I've had quite a pleasing experience with Tayyibun so far. They seem to have given children as well as parents a lot of support this year and handled queries very professionally."
								</p> 
								<p style="font-weight:bold;">Hussain</p>
								<p >Parent</p>
								</div>
							</div>
						</div>
						
					</div>
					
					<a class="left carousel-control" href="#footer-slide" data-slide="prev"> <span><i class="fa fa-angle-left"></i></span> </a>
					<a class="right carousel-control" href="#footer-slide" data-slide="next"> <span><i class="fa fa-angle-right"></i></span> </a>
				</div>
				<!--/ Carousel end --> 				
				
					</p>					
				</div> 
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<div class="footer_wrapper"> 
					<h3> Subscribe</h3> 
					<div class="f_hr"> </div>
					
			
					<form action="" method="post">
					  <div class="form-group">					
						<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
					   </div>
					  <button type="submit" name="submit" class="btn btn-primary btn-md">Subscribe Now</button>
					</form>
					
					<br>
					<div class="f_hr"> </div>
					<h4 style="width:200px;">
					<?php echo $showresults['Madrasa_address']; ?>
					</h4>
				</div> 
				</div> 
		</div>	

		<?php } ?>
		<?php } ?>


		
		</div>	
		
		<!-- <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
				<a href="#top" class=" animated4 page-scroll"> <i class="fa fa-angle-double-up"></i></a>
		</div>-->
		
	</div>
 </section> 
 
 <section class="fotter_bg_1">	
 </section>
 
 <section class="text-center fotter_bg_2" >	
	<div class="container">			
		<div class="row ">		
			<div class="col-sm-12 col-md-12 col-xs-12 ">
				<p style="color:#fff;"> &copy 2019 Madrasatul Muslima || Design & devloped by: <a href="https://www.facebook.com/ibrahimaliwd">Ibrahim Ali</a> </p>
			</div>		
		</div>
		<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
				<a href="#top_bar" class=" animated4 page-scroll"> <i class="fa fa-angle-double-up"></i></a>
		</div>
		
	</div>
 </section>
 
 
 <!--  Footer Content Area --> 
 
</div> <!--End Main Area-->
 <!------------------------------------------------------------------------------------------------------------------------------------>
 
 
  <!-- Jquery min -->
 <script src="js/jquery.min.js"></script>
 <!-- Bootstrp-->
 <script src="js/bootstrap.min.js"></script>
 <!-- Wow Min for Effect-->
 <script src="js/wow.min.js"></script>
 
  <!-- Smooth Scroll-->
 <script src="js/jquery.malihu.PageScroll2id.min.js"></script>
 
 <!-- Page Scroll to id plugin-->
<script src="js/jquery.malihu.PageScroll2id.min.js"></script>
<script src="js/thumbnail-slider.js"></script>	
<!-- Light gallery starts-->        
<script src="js/lightgallery-all.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.light-gallery').lightGallery();
	});
	/*
		1. div class="hidden">div class="light-gallery">>>ul>li>a>img
		2. Add light-gallery-id and light-gallery-target attributes
	*/
</script>
<!-- Light gallery End-->  
		
<!-- jquery & JS active code -->	
<script src="js/custom.js"></script>

	
	
</body>
</html>
