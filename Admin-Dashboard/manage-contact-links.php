<?php
	require_once("lib/class/functions.php");
	$db = new functions();
	if(!isset($_SESSION['current_admin']))
	{	
		header("Location:index.php");
	}
	
	$error		= ""; 
	$common_msg ="";
	$flag = 0;
	
	$linkedIn 	= "";
	$fb 		= "";
	$twitter 	= "";
	$mobno 		= "";
	$email 		= "";

	
	$contact_data = array();
	$contact_data = $db->get_contact_links();

	$result_linkedIn 	= "";
	$result_fb 			= "";
	$result_twitter 	= "";
	$result_mobno 		= "";
	$result_email_link 	= "";

	if(!empty($contact_data))
	{	
		
		$result_linkedIn	=	$contact_data[1];
		$result_fb			=	$contact_data[2];
		$result_twitter		=	$contact_data[3];
		$result_mobno		=	$contact_data[4];
		$result_email_link	=	$contact_data[5];
		
		
	}

	if(isset($_POST['l_submit_btn']))
	{
		$linkedIn  =  $_POST['linkedIn'];

		if($linkedIn == "")
		{
			$flag = 1;
			$error = "Please Add Link!!!";
		}	
		if($flag == 0)
		{
			$db->update_linkedIn($linkedIn);
			$common_msg = "LinkedIn Link Updated";
		}
	}

	if(isset($_POST['fb_submit_btn']))
	{
		$fb  =  $_POST['fb'];

		if($fb == "")
		{
			$flag = 1;
			$error = "Please Add Link!!!";
		}	
		if($flag == 0)
		{
			$db->update_fb($fb);
			$common_msg = "Facebook Link Updated";
		}
	} 

	if(isset($_POST['twi_submit_btn']))
	{
		$twitter  =  $_POST['twitter'];

		if($twitter == "")
		{
			$flag = 1;
			$error = "Please Add Link!!!";
		}	
		if($flag == 0)
		{
			$db->update_twitter($twitter);
			$common_msg = "Twitter Link Updated";
		}
	}

	if(isset($_POST['mobno_submit_btn']))
	{
		$mobno  =  $_POST['mobno'];

		if($mobno == "")
		{
			$flag = 1;
			$error = "Please Add Link!!!";
		}	
		if($flag == 0)
		{
			$db->update_mobno($mobno);
			$common_msg = "Contact No. Updated";
		}
	}

	if(isset($_POST['email_submit_btn']))
	{
		$email  =  $_POST['email'];

		if($email == "")
		{
			$flag = 1;
			$error = "Please Add Link!!!";
		}	
		if($flag == 0)
		{
			$db->update_email($email);
			$common_msg = "Email Link Updated";
		}
	}  

	 
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <title> Admin | Contact Us Record </title>

 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#" />
    <meta name="keywords" content="#" />
    <meta name="author" content="#" />

    <link rel="icon" href="http://html.codedthemes.com/gradient-able/files/assets/images/favicon.ico" type="image/x-icon">
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
	<!--Ck Editor -->
	<script src="https://cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>    
	
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
                                            <h5 class="m-b-10">Contact Us!!</h5>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5> Contact Links</h5>
                                                        <span>You Can Add or Delete Links From here..</span>
                                                    </div>
													 <div class="card-block">
                                                        <div class="j-wrapper">
                                                            
                                                        	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" >

                                                                <div class="j-content">
                                                                    <div class="j-row"> 													  
																		
																		<div class="j-span3 j-unit">
                                                                            <label class="text-center mt-3">LinkedIn:</label>
																		</div>
                                                                        <div class="j-span6 j-unit">
                                                                            <label><?php echo $result_linkedIn; ?></label>
                                                                        </div>
																		 
                                                                    </div>
                                                                    
                                                                </div> 

                                                            </form>

                                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" >

                                                                <div class="j-content">
                                                                    <div class="j-row"> 													  
																		
																		<div class="j-span3 j-unit">
                                                                            <label class="text-center mt-3">Facebook:</label>
																		</div>
                                                                        <div class="j-span6 j-unit">
                                                                             <label><?php echo $result_fb; ?></label>
                                                                        </div>
																		
                                                                    </div>
                                                                    
                                                                </div> 

                                                            </form>

                                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" >

                                                                <div class="j-content">
                                                                    <div class="j-row"> 													  
																		
																		<div class="j-span3 j-unit">
                                                                            <label class="text-center mt-3" >Twitter:</label>
																		</div>
                                                                        <div class="j-span6 j-unit">
                                                                           <label><?php echo $result_twitter; ?></label>
                                                                        </div>
																		
                                                                    </div>
                                                                    
                                                                </div> 

                                                            </form>
                                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" >

                                                                <div class="j-content">
                                                                    <div class="j-row"> 													  
																		
																		<div class="j-span3 j-unit">
                                                                            <label class="text-center mt-3" >Contact No.:</label>
																		</div>
                                                                        <div class="j-span6 j-unit">
                                                                             <label><?php echo $result_mobno; ?></label>
                                                                        </div>
																		
                                                                    </div>
                                                                    
                                                                </div> 

                                                            </form>
                                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" >

                                                                <div class="j-content">
                                                                    <div class="j-row"> 													  
																		
																		<div class="j-span3 j-unit">
                                                                            <label class="text-center mt-3">Email Id:</label>
																		</div>
                                                                        <div class="j-span6 j-unit">
                                                                             <label><?php echo $result_email_link; ?></label>
                                                                        </div>
																		
                                                                    </div>
                                                                    
                                                                </div> 

                                                            </form>
                                                        </div> 
                                                    </div>
                                                    
  												 
                                                </div>

                                            </div>

                                            <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Update Contact Links</h5>
                                                        <span>You Can Update Links From here..</span>
                                                    </div>
													<div class="form-group row">
														<div class="col-md-12"> 
															<div class="common_msg" style="color:green;font-size:20px;margin-left: 340px;">
																<?php
																	echo $common_msg;
																?>
															</div>
															<div class="common_msg" style="color:red;font-size:20px;margin-left: 340px;">
																<?php
																	echo $error;
																?>
															</div>
														</div>
													</div>
													 <div class="card-block">
                                                        <div class="j-wrapper">
                                                            
                                                        	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" >

                                                                <div class="j-content">
                                                                    <div class="j-row"> 													  
																		
																		<div class="j-span3 j-unit">
                                                                            <label class="text-center mt-3" for="linkedIn">LinkedIn:</label>
																		</div>
                                                                        <div class="j-span6 j-unit">
                                                                            <input type="text" name="linkedIn" id="linkedIn">
                                                                        </div>
																		<div class="j-span2 j-unit">
                                                                            <button class="btn btn-light" type="submit" name="l_submit_btn"><i class='fa fa-plus-square fa-2x text-success'></i></button>       
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div> 

                                                            </form>

                                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" >

                                                                <div class="j-content">
                                                                    <div class="j-row"> 													  
																		
																		<div class="j-span3 j-unit">
                                                                            <label class="text-center mt-3" for="fb">Facebook:</label>
																		</div>
                                                                        <div class="j-span6 j-unit">
                                                                            <input type="text" name="fb" id="fb" required>
                                                                        </div>
																		<div class="j-span2 j-unit">
                                                                            <button class="btn btn-light" type="submit" name="fb_submit_btn"><i class='fa fa-plus-square fa-2x text-success'></i></button>       
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div> 

                                                            </form>

                                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" >

                                                                <div class="j-content">
                                                                    <div class="j-row"> 													  
																		
																		<div class="j-span3 j-unit">
                                                                            <label class="text-center mt-3" for="twitter">Twitter:</label>
																		</div>
                                                                        <div class="j-span6 j-unit">
                                                                            <input type="text" name="twitter" id="twitter" required>
                                                                        </div>
																		<div class="j-span2 j-unit">
                                                                            <button class="btn btn-light" type="submit" name="twi_submit_btn"><i class='fa fa-plus-square fa-2x text-success'></i></button>       
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div> 

                                                            </form>
                                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" >

                                                                <div class="j-content">
                                                                    <div class="j-row"> 													  
																		
																		<div class="j-span3 j-unit">
                                                                            <label class="text-center mt-3" >Contact No.:</label>
																		</div>
                                                                        <div class="j-span6 j-unit">
                                                                            <input type="text" name="mobno" required>
                                                                        </div>
																		<div class="j-span2 j-unit">
                                                                            <button class="btn btn-light" type="submit" name="mobno_submit_btn"><i class='fa fa-plus-square fa-2x text-success'></i></button>       
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div> 

                                                            </form>
                                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" >

                                                                <div class="j-content">
                                                                    <div class="j-row"> 													  
																		
																		<div class="j-span3 j-unit">
                                                                            <label class="text-center mt-3">Email Id:</label>
																		</div>
                                                                        <div class="j-span6 j-unit">
                                                                            <input type="text" name="email" required>
                                                                        </div>
																		<div class="j-span2 j-unit">
                                                                            <button class="btn btn-light" type="submit" name="email_submit_btn"><i class='fa fa-plus-square fa-2x text-success'></i></button>       
                                                                        </div>
                                                                    </div>
                                                                    
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

    <script src="files/assets/pages/j-pro/js/jquery.ui.min.js"></script>
    <script src="files/assets/pages/j-pro/js/jquery.maskedinput.min.js"></script>
    <script src="files/assets/pages/j-pro/js/jquery.j-pro.js"></script>

    <script src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

    <script src="files/bower_components/modernizr/js/modernizr.js"></script>
    <script src="files/bower_components/modernizr/js/css-scrollbars.js"></script>

<!--     <script src="files/assets/pages/j-pro/js/custom/form-job.js"></script>  -->
    <script src="files/assets/js/pcoded.min.js"></script>
    <script src="files/assets/js/navbar-image/vertical-layout.min.js"></script>
    <script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="files/assets/js/script.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>