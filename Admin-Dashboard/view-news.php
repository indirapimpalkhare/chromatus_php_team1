<?php
	require_once("lib/class/functions.php");
	$db = new functions();
	/*if(!isset($_SESSION['current_admin']))
	{	
		header("Location:index.php");
	}*/
	$common_msg ="";
	 if(isset($_GET['del_news_id']))
	 {
		$delete_id = $_GET['del_news_id'];		
		
		$db->delete_news_details_by_id($delete_id);
		$common_msg	=	"News record deleted successfully.";
	 }
	 

	 
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <title> Admin | News Record </title>

 

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
                                            <h5 class="m-b-10"> News Records</h5>
                                            <p class="text-muted m-b-10">You can edit your News Records</p>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5> News Records</h5>
                                                        <span>You Can Edit or Delete Record From here..</span>
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
																		<th style="width=30;text-align:center;" >News Title</th> 
																		<th style="width=30;text-align:center;" >News Category</th> 
																		<th style="width=30;text-align:center;" >News Meta Description</th> 
																		<th style="width=30;text-align:center;" >Permalink</th> 
																		<th style="width=30;text-align:center;" >Date</th> 						 
																		<th style="width=30;text-align:center;">Option</th>	
																		<th style="width=30;text-align:center;">Option</th>	
																																
																	</tr>
																	
                                                                </thead>
                                                                <tbody>
																 	<?php
																	$get_news	=	$db->fetch_news_records();
																			if(!empty($get_news))
																			{
																				$counter	=	0;
																				
																				foreach($get_news as $record)
																				{
																					
																					$got_id				=   $get_news[$counter][0];	
																					$got_news_title	    =	$get_news[$counter][1];
																					$got_news_category	=	$get_news[$counter][2];  
																					$got_news_metaDesc 	=	$get_news[$counter][3];
																					$got_news_desc	    =	$get_news[$counter][4]; 
																					$got_news_permalink =	$get_news[$counter][5];
																					$got_news_date   	=	$get_news[$counter][6]; 
														
																					  
																?>
                                                                    <tr>
                                                                    	<td><?php echo $counter + 1 ;?></td>
																		<td style="max-width: 400px;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $got_news_title ;?></td> 
																		<td><?php echo $got_news_category ;?></td> 
																		<td style="max-width: 400px;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $got_news_metaDesc ;?></td> 
																		<td><?php echo $got_news_permalink ;?></td> 	 	
																		<td><?php echo $got_news_date ;?></td> 
																		 
																		 
																		<td><a href="/edit-news-details.php?booksjournals-id=<?php echo $got_id; ?>" target="_blank" class="Edit_option"><i class="fa fa-pencil-square-o fa-2x"></i></a></td>
																			
																		<td><a href="view-news.php?del_news_id=<?php echo $got_id; ?>" class="delete_option"><i class="fa fa-trash-o fa-2x"></i></a></td>
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