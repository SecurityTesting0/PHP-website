
<?php 

include("inc/header.php"); 

?> 

<!-- Start Main Content Area -->


<section class="section_wrapper map">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">	
				<iframe src="https://www.google.com/maps/embed?pb=!4v1573558964437!6m8!1m7!1siYgHq1Y4VSOBoeEs_vHubA!2m2!1d35.74374893664472!2d139.8430580542723!3f317.61!4f0!5f0.4000000000000002" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>					
		</div>
		
	</div>
</section>

<section class="section_wrapper main_wrapper">
	<div class="container-fluid">
		<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">

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
					
					<div class="contact_address" > 
						<h2> GET IN TOUCH </h2> 
						<h4> <?php echo $showresults['Mobile_number']; ?> </h4> 
						<h3> <?php echo $showresults['Madrasa_address_title']; ?>  </h3> 
						<h4 style="width:200px;">
						<?php echo $showresults['Madrasa_address']; ?>
						</h4>
						<h4>E-mail:<?php echo $showresults['Madrasa_email_address']; ?></h4>
						<h4>Office: <?php echo $showresults['Telephone_number']; ?></h4>
					</div>
								
					<?php } ?>
					<?php } ?>

				</div>	
				<div class="col-md-4 col-sm-4 col-xs-12">
				<?php	
					$query="SELECT * FROM contact_us_default_content";
					$results=$db->select($query);
					$id=0; 
					if ($results){	
					?>
					<?php
					while($contactresults=$results->fetch_assoc()){
					$id++; 
					?>				
					<p> 
					<?php echo $contactresults['header']; ?>
					</p>
					
						<?php 
							if(isset($_POST["submit"])){
							$name				        =$fm->validation($_POST['name']);
							$email			       		=$fm->validation($_POST['email']);
							$phone				        =$fm->validation($_POST['phone']);						
							$message			        =$fm->validation($_POST['message']);
							$seen_id					=0; 

							$name				        =mysqli_real_escape_string($db->link,$name);
							$email						=mysqli_real_escape_string($db->link,$email);
							$phone				        =mysqli_real_escape_string($db->link,$phone);
							$message			        =mysqli_real_escape_string($db->link,$message);						

							$query="INSERT INTO header_contact_us_page(Name,Email,Mobile,Message,Seen_unseen_id) 
							values ('$name','$email','$phone','$message','$seen_id')";
							$results=$db->insert($query);
							if($results==true){
							echo"<div class='well'> <p style='color:green;'>Your Message Succesfully Send </p></div>";
							}else{
							echo"Checked Again";
							}
							}

						?>
				
						<form action="" method="post" enctype="multipart/form-data"  >
						  
						  <div class="form-group">
								<label for="text">Name (required)</label>
								<input type="text" class="form-control" id="name" name="name" required>
						  </div>
						  <div class="form-group">
								<label for="text">Email (required)</label>
								<input type="text" class="form-control" id="email" name="email" required>
						  </div>
						  <div class="form-group">
								<label for="text">Phone/Mobile (required)</label>
								<input type="text" class="form-control" id="phone" name="phone" required>
						  </div>
						  
						  <div class="form-group">
								<label for="text">Your Message (required)</label>
								<textarea class="form-control" name="message" required> </textarea>
						  </div>
						  <button type="submit" class="btn btn-primary btn-md" name="submit" >SEND</button>
						</form>
				
				</div>
				
				
				<div class="col-md-4 col-sm-4 col-xs-12 text-center">						
					<img src="images/<?php echo $contactresults['image']; ?>" alt="" class="img-responsive"/>
				</div>	

				<?php } ?>
				<?php } ?>				
		</div>
		
	</div>
</section>




<!-- End Main Content Area -->


<?php 

include("inc/footer.php"); 

?> 