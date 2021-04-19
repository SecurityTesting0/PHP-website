<?php
ob_start();
include("lib/session.php");
Session::checkSession();
?> 
<?php
 $userid	=Session::get('userID');
 $Status	=Session::get('Status');
?> 


<?php
include("lib/config.php");
include("lib/database.php");
include("lib/helper.php");
$db = new Database();
$fm = new Formate();
?> 
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>	Admin Panel| Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <link href="css/fancy-button/fancy-button.css" rel="stylesheet" type="text/css" />
    <!--Jquery UI CSS-->
    <link href="css/themes/base/jquery.ui.all.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <!--jQuery Date Picker-->
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.datepicker.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.progressbar.min.js" type="text/javascript"></script>
    <!-- jQuery dialog related-->
    <script src="js/jquery-ui/external/jquery.bgiframe-2.1.2.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.draggable.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.position.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.resizable.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.dialog.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.blind.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.explode.min.js" type="text/javascript"></script>
    <!-- jQuery dialog end here-->
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <!--Fancy Button-->
    <script src="js/fancy-button/fancy-button.js" type="text/javascript"></script>
    <script src="js/setup.js" type="text/javascript"></script>
    <!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
		
    </script>
		<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });		
	
    </script>
	
    <!-- /TinyMCE -->
    <style type="text/css">
		#tinymce{
			font-size:15px !important; 
			width:100%; min-height:500px;
			}
    </style>
</head>
<body><div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
				<?php								
						$query="SELECT * FROM site_info";
						$results=$db->select($query);
						$id=0; 
						if ($results){?>
						<?php
						while($show=$results->fetch_assoc()){
							$id++; 
					?>
			
                <div class="floatleft logo">
                    <img src="<?php echo $show['logo'];?>" alt="Logo" style="weight:150px; " />
				</div>
				<div class="floatleft middle">
				
					<h1><?php echo $show['site_titile'];?></h1>
					<p><?php echo $show['site_slogan'];?></p>
				</div>
				
				<?php } ?>
				<?php } ?>
				
				
                <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
						
						<?php								
									$query="SELECT * FROM admin_user where id='$userid' and status='$Status'";
									$results=$db->select($query);
									$id=0; 
									if ($results){?>
									<?php
									while($show=$results->fetch_assoc()){
										$id++; 
								?>
								
                            <li>Hello <a href=""> <?php echo $show['firstname']." ".$show['lastname'] ;?> </a> </li>
							
							<?php } ?>
							<?php } ?>
							
							<?php
								if(isset($_GET['action']) && $_GET['action'] == "logout"){
									Session::destory();
								}
							 ?>	
                            <li><a href="?action=logout">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="index.php"><span>Dashboard</span></a> </li>
                <li class="ic-notifications"><a href="notice.php"><span>Notice Board</span></a> </li>
                <li class="ic-form-style"><a href="Profile.php"><span>User Profile</span></a></li>
				<li class="ic-typography"><a href="changepassword.php"><span>Change Password</span></a></li>
				<li class="ic-grid-tables"><a href="inbox.php"><span>Inbox</span></a></li>
				<li class="ic-grid-tables"><a href="subscriber_list.php"><span>Subscriber List</span></a></li>
				<li class="ic-grid-tables"><a href="appliyed_student.php"><span>Applicant Student</span></a></li>
                <li class="ic-charts"><a href="../index.php"><span>Visit Website</span></a></li>
            </ul>
        </div>
        <div class="clear">
        </div>
        <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
					
						<li><a class="menuitem">Site Information</a>
                            <ul class="submenu">
                                <li><a href="update_site_info.php">Update Slogan & Title</a> </li>                                
                                <li><a href="site_info_header.php">Update Footer Info</a> </li>
                            </ul>
                        </li>
						<li><a class="menuitem">Add Pages/Catagory </a>
                            <ul class="submenu">
                                <li><a href="addcat_teachers.php">Teachers Page</a></li>
                                <li><a href="addcat_about_us.php">About Us</a></li>
                                <li><a href="addcat_information.php">Information</a></li>
                                <li><a href="addcat_gallery.php">Gallery</a></li>
                            </ul>
                        </li>
                       <li><a class="menuitem">Header Pages</a>
                            <ul class="submenu">
                                <li><a href="post_jobs.php">Jobs</a></li>                                
                                                             
                                <li><a href="update_lwap_head.php">Learning Awards Headtext</a></li>
								<li><a href="lwap.php">Learning Awards Photo</a></li>
                                <li><a href="contact_us.php">Contact Us</a></li>
                                
                            </ul>
                        </li>
						<li><a class="menuitem">Home Page</a>
                            <ul class="submenu">
                                <li><a href="home_slider.php">Photo Slider</a></li>
                                <li><a href="vedio_slider.php">Vedio Slider</a></li>
                            </ul>
                        </li>						
						 <li> <a class="menuitem">Teachers</a>
									<ul class="submenu">                                
										<li><a href="update_tea_head.php">Header info</a></li>                               
										<li><a href="add_teachers.php">Add Teacher</a></li>                               
										<li><a href="view_teachers.php">View Teacher</a></li>                           
										
									</ul>
						</li>  
						
                        <li><a class="menuitem">About Us Page</a>
                            <ul class="submenu">
							<?php		
							$query="SELECT * FROM cat_about";
							$results=$db->select($query);
							$id=0; 
							if ($results){	
							?>
							
							<?php
							while($cat_about=$results->fetch_assoc()){
							$id++; 
							
							?>
                                <li><a href="about_post.php?id='<?php echo $cat_about['id']; ?>'"><?php echo $cat_about['name']; ?></a>  </li>
							<?php }?>
							<?php }?>
								   
                            </ul>
                        </li>
						<li><a class="menuitem">Information</a>
                            <ul class="submenu">
                                <?php		
								$query="SELECT * FROM cat_information";
								$results=$db->select($query);
								$id=0; 
								if ($results){	
								?>
								
								<?php
								while($catshow=$results->fetch_assoc()){
								$id++; 
								
								?>
									<li><a href="information_page.php?id='<?php echo $catshow['id']; ?>'"><?php echo $catshow['name']; ?></a> </li>
								<?php }?>
								<?php }?>
                            </ul>
                        </li>
						<li><a class="menuitem">Admission</a>
                            <ul class="submenu">
                                <li><a href="apply_form.php">Update Apply Page</a></li>
								<li><a href="vacancies.php">Update Vacancies Page</a></li>				
                            </ul>
                        </li>
						<li><a class="menuitem">Gallery</a>
                            <ul class="submenu">
                                <?php		
									$query="SELECT * FROM cat_gallery";
									$results=$db->select($query);
									$id=0; 
									if ($results){	
									?>
									
									<?php
									while($cat_gallery=$results->fetch_assoc()){
									$id++; 
									
									?>
                                <li><a href="gallery.php?id='<?php echo $cat_gallery['id']; ?>'"><?php echo $cat_gallery['name']; ?></a>  </li>
								<?php }?>
								<?php }?>
                            </ul>
                        </li>						
                       
                    </ul>
                </div>
            </div>
        </div>