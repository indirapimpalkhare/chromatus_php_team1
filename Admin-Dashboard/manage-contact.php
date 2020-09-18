<?php
	require_once("lib/class/functions.php");
	$db = new functions();
	$common_msg ="";
	/*if(!isset($_SESSION['current_admin']))
	{	
		header("Location:index.php");
	}*/
	 
	 $common_msg ="";
	 if(isset($_GET['del_mail_id']))
	 {
		$delete_id = $_GET['del_mail_id'];		
		
		$db->delete_mail_by_id($delete_id);
		$common_msg	=	"Contact record deleted successfully.";
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
                                            <p class="text-muted m-b-10">You can Manage your Contact Records</p>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5> Contact Records</h5>
                                                        <span>You Can Reply or Delete Record From here..</span>
                                                    </div>
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
                                                                
																		<th style="width=30;text-align:center;" >Sr. No</th>
																		<th style="width=30;text-align:center;" >Sender Name</th> 
																		<th style="width=30;text-align:center;" >Sender Email Id</th> 
																		<th style="width=30;text-align:center;" >Sender Mobile No.</th> 
																		<th style="width=30;text-align:center;" >Sender Company</th> 
																		<th style="width=30;text-align:center;" >Sender Country</th>
																		<th style="width=30;text-align:center;" >Sender Position</th>
																		<th style="width=30;text-align:center;" >Sender Message</th>
																		<th style="width=30;text-align:center;" >DateTime</th>					 
																		<th style="width=30;text-align:center;">Reply</th>	
																		<th style="width=30;text-align:center;">Delete</th>	
																																
																	</tr>
																	
                                                                </thead>
                                                                <tbody>
																 	<?php
																	$get_contacts	=	$db->fetch_contact_details();
																			if(!empty($get_contacts))
																			{
																				$counter	=	0;
																				
																				foreach($get_contacts as $record)
																				{
																					
																					$got_id			=   $get_contacts[$counter][0];	
																					$got_name	    =	$get_contacts[$counter][1];
																					$got_email		=	$get_contacts[$counter][2];  
																					$got_mobile 	=	$get_contacts[$counter][3];
																					$got_company	=	$get_contacts[$counter][4]; 
																					$got_country 	=	$get_contacts[$counter][5];
																					$got_position   =	$get_contacts[$counter][6];
																					$got_msg   		=	$get_contacts[$counter][7];
																					$got_date   	=	$get_contacts[$counter][8]; 
														
																					  
																?>
                                                                    <tr>
                                                                    	<td><?php echo $counter + 1 ;?></td>
																		<td><?php echo $got_name ;?></td> 
																		<td><?php echo $got_email ;?></td>
																		<td><?php echo $got_mobile ;?></td>
																		<td><?php echo $got_company ;?></td>
																		<td><?php echo $got_country ;?></td>
																		<td><?php echo $got_position ;?></td>  
																		<td style="max-width: 400px;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $got_msg ;?></td> 	 	
																		<td><?php echo $got_date ;?></td> 
																		 
																		 
																		<td><a href="edit-news-details.php?news-id=<?php echo $got_id; ?>" class="Edit_option"><i class="fa fa-pencil-square-o fa-2x"></i></a></td>
																			
																		<td><a href="manage-contact.php?del_mail_id=<?php echo $got_id; ?>" class="delete_option"><i class="fa fa-trash-o fa-2x"></i></a></td>
																	  </tr>
																	<?php
																		$counter++;
																		}
																		
																	}
																	else
																	{
																?>		<tr>
																			<td colspan="8" class="text-center">No data to list</td>
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

<!--     <script src="files/assets/pages/j-pro/js/custom/form-job.js"></script>  -->
    <script src="files/assets/js/pcoded.min.js"></script>
    <script src="files/assets/js/navbar-image/vertical-layout.min.js"></script>
    <script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="files/assets/js/script.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>