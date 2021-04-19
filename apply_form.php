
<?php 

include("inc/header.php"); 

?> 

<!-- Start Main Content Area -->
<section class="section_wrapper main_wrapper">
	<div class="container">
		<div class="row">				
				<div class="col-md-7 col-sm-7 col-xs-12">						
					<p> 
					The application form is available upon request from the school office.
					Once you receive it, please return the completed form to the school along with the required documents. Get in touch via the form below.
					</p>
					
				<div class="text-center"> 
					<a href="admin/file/Application Form  2017-03-31.docx"> <img src="images/word.jpg" alt="Application Form" style="width:70px;"/></a>
					<br>
					<a href="admin/file/Application Form  2017-03-31.docx" >Download Application Form</a>  
					<br>
					<br>
				</div> 
				
				
				<?php 
							if(isset($_POST["submit"])){
							$name				        =$fm->validation($_POST['name']);
							$email			       		=$fm->validation($_POST['email']);
							$phone				        =$fm->validation($_POST['phone']);						
							$subject				    =$fm->validation($_POST['subject']);						
							$message			        =$fm->validation($_POST['message']);
							$date			        	=date("Y-m-d");
							

							$name				        =mysqli_real_escape_string($db->link,$name);
							$email						=mysqli_real_escape_string($db->link,$email);
							$phone				        =mysqli_real_escape_string($db->link,$phone);
							$subject			        =mysqli_real_escape_string($db->link,$subject);
							$message			        =mysqli_real_escape_string($db->link,$message);						

							$query="INSERT INTO admission_apply_page_two(Name,Email,Phone,Subject,Message) 
							values ('$name','$email','$phone','$subject','$message')";
							$results=$db->insert($query);
							if($results==true){
							echo" <h3 style='color:green;'>Your Message Succesfully Send </h3>";
							}else{
							echo"Checked Again";
							}
							}

						?>
				
					
				
				<form action="" method="post">
				  
				  <div class="form-group">
						<label for="text">Name (required)</label>
						<input type="text" class="form-control" id="title" name="name" required>
				  </div>
				  <div class="form-group">
						<label for="text">Email (required)</label>
						<input type="text" class="form-control" id="title" name="email" required>
				  </div>
				  <div class="form-group">
						<label for="text">Phone/Mobile (required)</label>
						<input type="text" class="form-control" id="title" name="phone" required>
				  </div>
				  <div class="form-group">
						<label for="text">Subject (required)</label>
						<input type="text" class="form-control" id="title" name="subject" required>
				  </div>
				  
				  <div class="form-group">
						<label for="text">Your Message (required)</label>
						<textarea class="form-control" name="message" required> </textarea>
				  </div>
				  <button type="submit"  name="submit" class="btn btn-primary btn-md">SEND</button>
				</form>
				
				</div>
				<div class="col-md-5 col-sm-5 col-xs-12 text-center">						
					<img src="images/applicationform.jpg" alt="" class="img-responsive"/>
				</div>				
		</div>
		
	</div>
</section>


<!-- End Main Content Area -->


<?php 

include("inc/footer.php"); 

?> 