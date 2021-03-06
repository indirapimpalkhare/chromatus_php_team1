<?php
	require_once("lib/class/functions.php");
	$db = new functions();
	if(!isset($_SESSION['current_admin']))
	{	
		header("Location:index.php");
	}
	
	$common_msg	="";
	$common_msg1="";
	
	 if(isset($_GET['faq-id']))
	 {
		$faq_id = $_GET['faq-id'];		
		$_SESSION['faq_id'] = $faq_id;
	 }
	 else if(isset($_SESSION['faq_id']))
	 {
		 $faq_id = $_SESSION['faq_id'];
	 }
	 
	 
	$faq_data		=	array();
	$faq_data		=	$db->fetch_faq_full_details_by_id($faq_id);
			
	
	$question	 	= "";
	$asnwer     	= "";
	
	if(!empty($faq_data))
	{	
		 
	$question		=	$faq_data[1];
	$answer			=	$faq_data[2];

	 
			
	}
	if(isset($_POST['edit']))
	{
		$question		=	$_POST['question'];  
		$answer       	=	$_POST['answer'];  
			 
			if($db->update_faq_full_details_by_id($question,$answer,$faq_id))
			{
					  $common_msg	=	"FAQ Updated Successfully.";
			}
			else
			{
					$common_msg1	= "Failed";
					 
			}
		
	}   
	
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <title> Chromatus Consulting | Update FAQ</title>

 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="files/assets/icon/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="files/assets/pages/j-pro/css/demo.css">
    <link rel="stylesheet" type="text/css" href="files/assets/pages/j-pro/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="files/assets/pages/j-pro/css/j-pro-modern.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/jquery.mCustomScrollbar.css">
	<script src="assets/ckeditor/ckeditor.js" type="text/javascript"></script>
</head>

<body>

    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
				<?php require_once('include/navigation.php'); ?>	
					
				<div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    
					<?php require_once('include/dashboard-left-part.php'); ?>
				
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-header card">
                                        <div class="card-block">
                                            <h5 class="m-b-10">Update FAQ</h5>
                                            <p class="text-muted m-b-10">You can update your FAQ here..</p>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                    <h5>Update FAQ Details</h5>
                                                    <span>Please fill the FAQ Details..</span>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-12"> 
                                                        <div class="common_msg" style="color:green;font-size:17px;margin-left: 340px;">
                                                            <?php
                                                                echo $common_msg;
                                                            ?>                                                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-640">
                                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" >

                                                                <div class="j-content">

                                                                    <div class="j-row">
                                                                        
                                                                        <div class="j-unit">
                                                                            <div class="j-input">

                                                                                <input type="text" value="<?php echo $question; ?>" name="question" placeholder="Enter Question" required>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Question Here</span> 
                                                                            </div>
                                                                        </div>
                                                                        
                                                                         <div class="j-unit">
                                                                            <div class="j-input">

                                                                                <input type="text" value="<?php echo $answer; ?>" name="answer" placeholder="Enter Answer" required>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Answer Here</span> 
                                                                            </div>
                                                                        </div>
                                                                    
                                                                    </div>
                                                                    
                                                    
                                                                <div class="j-response"></div>

                                                                </div>

                                                                <div class="j-footer"> 
                                                                    <input type="submit" value="Update" name="edit" class="btn btn-primary" />
                                                                    <a href="view-faq.php" class="btn btn-primary">Back</a>
                                                                </div>

                                                            </form>
                                                        </div> 
                                                    </div>     
                                                </div>
                                            </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

     
    <script src="files/bower_components/jquery/js/jquery.min.js"></script>
    <script src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script src="files/bower_components/popper.js/js/popper.min.js"></script>
    <script src="files/bower_components/bootstrap/js/bootstrap.min.js"></script> 
    <script src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <script src="files/assets/js/SmoothScroll.js"></script>
    <script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="files/assets/js/pcoded.min.js"></script>
    <script src="files/assets/js/navbar-image/vertical-layout.min.js"></script>
    <script src="files/assets/pages/dashboard/custom-dashboard.js"></script>
    <script src="files/assets/js/script.js"></script>
    
</body>
</html>