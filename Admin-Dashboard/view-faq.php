<?php
	require_once("lib/class/functions.php");
	$db = new functions();
	if(!isset($_SESSION['current_admin']))
	{	
		header("Location:index.php");
	}
	
	$common_msg ="";
	 if(isset($_GET['del_faq_id']))
	 {
		$delete_id = $_GET['del_faq_id'];		
		
		$db->delete_faq_details_by_id($delete_id);
		$common_msg	=	"FAQ record deleted successfully.";
	 }
	 

	 
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <title> Chromatus Consulting | View FAQ's </title>

 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#" />
    <meta name="keywords" content="#" />
    <meta name="author" content="#" />
 
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
                                            <h5 class="m-b-10">FAQ Records</h5>
                                            <p class="text-muted m-b-10">You can edit your FAQ Records</p>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="card">
                                                    
													<div class="form-group row">
														<div class="col-md-12"> 
															<div class="common_msg" style="color:red;font-size:17px;margin-left: 340px;">
																<?php
																	echo $common_msg;
																?>
															</div>
														</div>
													</div> 
													 <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
																		<th style="width=30;text-align:center;">Sr. No</th>
																		<th style="width=30;text-align:center;">Question</th>
																        <th style="width=30;text-align:center;">Answer</th>
																		<th style="width=30;text-align:center;">Update</th>
																		<th style="width=30;text-align:center;">Delete</th> 
                                                                        	
																																
																	</tr>
																	
                                                                </thead>
                                                                <tbody>
																 	<?php
																	       $get_faq	=	$db->fetch_faq_records();
																			if(!empty($get_faq))
																			{
																				$counter	=	0;
																				
																				foreach($get_faq as $record)
																				{
																					
																					$got_id				=   $get_faq[$counter][0];	
																					$question	        =	$get_faq[$counter][1];
                                                                                    $answer 	        =	$get_faq[$counter][2];
																					$status 			= 	$get_faq[$counter][3]; 
														                            
																					  
																?>
                                                                    <tr>
                                                                    	<td><?php echo $counter + 1 ;?></td>
																		
																		<td style="max-width: 250px;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $question;?></td>
																		
																		<td style="max-width: 400px;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $answer;?></td>  
																		 
																		<td><a href="edit-faq-details.php?faq-id=<?php echo $got_id; ?>" class="Edit_option"><i class="fa fa-pencil-square-o fa-2x"></i></a></td>
																			
																		<td><a href="view-faq.php?del_faq_id=<?php echo $got_id; ?>" class="delete_option"><i class="fa fa-trash-o fa-2x"></i></a></td>
																	  </tr>
																	<?php
																		$counter++;
																		}
																		
																	}
																	else
																	{
																?>		<tr>
																			<td colspan="6">No data to list</td>
																		</tr>
																<?php
																	}				
																?>	
                                                                </tbody>
                                                            </table>
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

    <!--<script src="files/assets/pages/j-pro/js/custom/form-job.js"></script> -->
    <script src="files/assets/js/pcoded.min.js"></script>
    <script src="files/assets/js/navbar-image/vertical-layout.min.js"></script>
    <script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="files/assets/js/script.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>