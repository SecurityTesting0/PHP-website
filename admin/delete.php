<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '0');
?>
<?php include "inc/header.php" ?>
		
		<?php
		if(isset($_GET['delteach'])){
				$delteach =$_GET['delteach'];			
				
		}elseif (isset($_GET['id2'])){
			
			$id2 =$_GET['id2'];
				
		}elseif (isset($_GET['id3'])){
			
			$id3 =$_GET['id3'];
		}elseif (isset($_GET['slider'])){
			
			$slider =$_GET['slider'];
		}elseif (isset($_GET['lwap'])){
			
			$lwap =$_GET['lwap'];
		}elseif (isset($_GET['gid'])){
			
			$gid =$_GET['gid'];
		}elseif (isset($_GET['gcat'])){
			
			$gcat =$_GET['gcat'];
		}elseif (isset($_GET['abcat'])){
			
			$abcat =$_GET['abcat'];
		}elseif (isset($_GET['infocat'])){
			
			$infocat =$_GET['infocat'];
		}elseif (isset($_GET['tcat'])){
			
			$tcat =$_GET['tcat'];
		}elseif (isset($_GET['aplstudent'])){
			
			$aplstudent =$_GET['aplstudent'];
		}elseif (isset($_GET['sbcrber'])){
			
			$sbcrber =$_GET['sbcrber'];
		}elseif (isset($_GET['inboxid'])){
			
			$inboxid =$_GET['inboxid'];
		}elseif (isset($_GET['delnotice'])){
			
			$delnotice =$_GET['delnotice'];
		}elseif (isset($_GET['vidslider'])){
			
			$vidslider =$_GET['vidslider'];
		}else{
			echo"Wrong Command";
		}
		
		?>


		<?php
			if ($delteach==true){
						$query ="DELETE FROM header_teachers_page_info WHERE id=$delteach";
						$del =$db->delete($query);

						if($del){
							echo "<script> alert ('Teachers delete Successfully') </script>";
							echo "<script> window:location ='view_teachers.php'; </script>";
						} else {
							echo "Data not Delete";
						}
			} elseif ($id2==true){
						$query ="DELETE FROM catagory_02 WHERE id=$id2";
						$del = $db->delete($query);

						if($del){
							echo "<script> alert ('Data delete Successfully') </script>";
							echo "<script> window:location ='addcat-02.php'; </script>";
						} else {
							echo "Data not Delete";
						}
			}
			elseif ($slider==true){
				
				
						$imgselect	= "select * from home_slider_image where id ='$slider'"; 
						$getData= $db->select($imgselect);
						if ($getData){
							while ($delimg = $getData->fetch_assoc()){
								$dellink = $delimg['image'];
								unlink($dellink); 
							} 
						}
				
						$query ="DELETE FROM home_slider_image WHERE id=$slider";
						$del = $db->delete($query);

						if($del){
							echo "<script> alert ('Data delete Successfully') </script>";
							echo "<script> window:location ='home_slider.php'; </script>";
						} else {
							echo "Data not Delete";
						}
			}elseif ($lwap==true){
				
						$imgselect	= "select * from header_lawp_page where id ='$lwap'"; 
						$getData= $db->select($imgselect);
						if ($getData){
							while ($delimg = $getData->fetch_assoc()){
								$dellink = $delimg['image'];
								unlink($dellink); 
							} 
						}
						
						$query ="DELETE FROM header_lawp_page WHERE id=$lwap";
						$del = $db->delete($query);

						if($del){
							echo "<script> alert ('Data delete Successfully') </script>";
							echo "<script> window:location ='lwap.php'; </script>";
						} else {
							echo "Data not Delete";
						}
			}elseif ($gid==true){
				
						$imgselect	= "select * from gallery_menu where id ='$gid'"; 
						$getData= $db->select($imgselect);
						if ($getData){
							while ($delimg = $getData->fetch_assoc()){
								$dellink = $delimg['image'];
								unlink($dellink); 
							} 
						}
						
						$query ="DELETE FROM gallery_menu WHERE id=$gid";
						$del = $db->delete($query);

						if($del){
							echo "<script> alert ('Data delete Successfully') </script>";
							echo "<script> window:location ='gallery.php?id=$gid'; </script>";
						} else {
							echo "Data not Delete";
						}
			}elseif ($delnotice==true){
				
						$imgselect	= "select * from notice_board where id ='$delnotice'"; 
						$getData= $db->select($imgselect);
						if ($getData){
							while ($delimg = $getData->fetch_assoc()){
								$dellink = $delimg['image'];
								unlink($dellink); 
							} 
						}
						
						$query ="DELETE FROM notice_board WHERE id=$delnotice";
						$del = $db->delete($query);

						if($del){
							echo "<script> alert ('Notice delete Successfully') </script>";
							echo "<script> window:location ='notice_view.php'; </script>";
						} else {
							echo "Data not Delete";
						}
			}elseif ($aplstudent==true){
						$query ="DELETE FROM admission_apply_page_two WHERE id=$aplstudent";
						$del = $db->delete($query);

						if($del){
							echo "<script> alert ('Information delete Successfully') </script>";
							echo "<script> window:location ='appliyed_student.php'; </script>";
						} else {
							echo "Data not Delete";
						}
			}elseif ($gcat==true){
						$query ="DELETE FROM cat_gallery WHERE id=$gcat";
						$del = $db->delete($query);

						if($del){
							echo "<script> alert ('Category delete Successfully') </script>";
							echo "<script> window:location ='addcat_gallery.php'; </script>";
						} else {
							echo "Data not Delete";
						}
			}elseif ($abcat==true){
						$query ="DELETE FROM cat_about WHERE id=$abcat";
						$del = $db->delete($query);

						if($del){
							echo "<script> alert ('Category delete Successfully') </script>";
							echo "<script> window:location ='addcat_about_us.php'; </script>";
						} else {
							echo "Data not Delete";
						}
			}elseif ($infocat==true){
						$query ="DELETE FROM cat_information WHERE id=$infocat";
						$del = $db->delete($query);

						if($del){
							echo "<script> alert ('Category delete Successfully') </script>";
							echo "<script> window:location ='addcat_information.php'; </script>";
						} else {
							echo "Data not Delete";
						}
			}elseif ($tcat==true){
						$query ="DELETE FROM cat_teachers WHERE id=$tcat";
						$del = $db->delete($query);

						if($del){
							echo "<script> alert ('Category delete Successfully') </script>";
							echo "<script> window:location ='addcat_teachers.php'; </script>";
						} else {
							echo "Data not Delete";
						}
			}elseif ($sbcrber==true){
						$query ="DELETE FROM subscriber_table WHERE id=$sbcrber";
						$del = $db->delete($query);

						if($del){
							echo "<script> alert ('Subscriber delete Successfully') </script>";
							echo "<script> window:location ='subscriber_list.php'; </script>";
						} else {
							echo "Data not Delete";
						}
			}elseif ($inboxid==true){
						$query ="DELETE FROM header_contact_us_page WHERE id=$inboxid";
						$del = $db->delete($query);

						if($del){
							echo "<script> alert ('Message delete Successfully') </script>";
							echo "<script> window:location ='inbox.php'; </script>";
						} else {
							echo "Data not Delete";
						}
			}elseif ($vidslider==true){
						$query ="DELETE FROM home_slider_video WHERE id=$vidslider";
						$del = $db->delete($query);

						if($del){
							echo "<script> alert ('Vedion Slider delete Successfully') </script>";
							echo "<script> window:location ='vedio_slider.php'; </script>";
						} else {
							echo "Data not Delete";
						}
			}else{
						$query ="DELETE FROM catagory_03 WHERE id=$id3";
						$del = $db->delete($query);

						if($del){
							echo "<script> alert ('Data delete Successfully') </script>";
							echo "<script> window:location ='addcat-03.php'; </script>";
						} else {
							echo "Data not Delete";
						}
			}

		?>
