<?php
session_start();
$user = $_SESSION['sess_user'];
$type = $_SESSION['sess_type'];
if(	is_null($user))
	{
		unset($_SESSION['sess_user']);
		session_unset(); 
		session_destroy();
	    header("Location: logout.php");
	    exit();
	 }
	//echo "$user empty";
	

?>


<?php
$user="";
	//session_start();
	$user = $_SESSION['sess_user'];
	$type = $_SESSION['sess_type'];
	require("conection/connect.php");

	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Welcome to C.M.S <?php echo $user;?> A/C type <?php echo $type; ?></title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery-1.11.0.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="css/home.css" />
</head>

<body>
        <div class="logout_btn"><p>Account type <?php echo $type;  ?></p><p>logged as <?php echo $user;  ?></p>
        <a href="index.php" class="btn btn-primary btn-large">Logout <i class="icon-white icon-check"></i>
        </a><!--?php $u ser="0";session_destroy();session_unset(); ?--></div>
    
    <div class="img_home_pos">
        <a href="everyone.php"><img src="images/img21.jpg" height="90" alt="-" /></a><span class="header_pos">..</span>
    </div><br>
                        
                        <div class="dropdownmenu_container">
                            <?php        
                            include './drop_down_menu.php';
                            ?>
                        </div>
		
		<div class="container_middle">		
			
			<div class="container_show_post">
				<?php
   						if($tag=="home" or $tag=="")
							include("home.php");
                        elseif($tag=="student_entry")
                            include("Students_Entry.php");
                        //elseif($tag="notice_view")
						//	include("notice.php");
                        //elseif($tag="att_view") 
						//	include("Users_Entry.php");
                        elseif($tag=="teachers_entry")
                            include("Teachers_Entry.php");
                        elseif($tag=="score_entry")
                            include("Score_Entry.php");	
                        elseif($tag=="subject_entry")
                            include("Subject_Entry.php");
                        elseif($tag=="faculties_entry")
                            include("Faculties_Entry.php");
                        elseif($tag=="susers_entry")
                            include("Users_Entry.php");	
                        elseif($tag=="view_students")
                            include("View_Students.php");
						elseif($tag=="view_teachers")
							include("View_Teachers.php");
						elseif($tag=="view_subjects")
							include("View_Subjects.php");
						elseif($tag=="view_scores")
							include("View_Scores.php");
						elseif($tag=="view_users")
							include("View_Users.php");
						elseif($tag=="view_faculties")
							include("View_Faculties.php");
						elseif($tag=="location_entry")
							include("Location_Entry.php");
						elseif($tag=="artical_entry")
							include("Artical_Entry.php");
						elseif($tag=="test_score")
							include("test_Scores.php");
						elseif($tag=="view_location")
							include("View_location.php");
						elseif($tag="view_artical")
							include("View_Articaly.php");
						elseif($tag="attendance_entry")
							include("attendance_entry.php");
						elseif($tag="notice_view")
							include("notice.php");
							
							/*$tag= $_REQUEST['tag'];
							
							/*if(empty($tag)){
								include ("Students_Entry.php");
							}
							else{
								include $tag;
							}*/
									
                        ?>
                    </div>
		</div>                
	</div>
        
        <div class="bottom_pos">
            <a href="AboutManagement.php" style="text-decoration: none;">About management</a> &copy; <?php echo date("Y") ; echo" ODGICSE MIT licensed"; ?> 
        </div>
</body>
</html>

<SCRIPT TYPE="text/javascript"> 
  function popup(mylink, windowname) 
  { 
    if (! window.focus)return true; 
    var href; 
    if (typeof(mylink) == 'string') href=mylink; 
    else href=mylink.href; 
    window.open(href, windowname, 'width=700,height=800,scrollbars=yes'); 
    return false; 
  }
   </SCRIPT>