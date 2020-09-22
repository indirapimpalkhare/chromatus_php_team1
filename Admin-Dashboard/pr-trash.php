<?php
	require_once("lib/class/functions.php");
	$db = new functions();
	/*if(!isset($_SESSION['current_admin']))
	{	
		header("Location:index.php");
	}*/
	$common_msg ="";
	$common_msg1 ="";
	if(isset($_GET['del_pr_id']))
	{
		$delete_id = $_GET['del_pr_id'];		

		$db->permanent_delete_pr_details_by_id($delete_id);
		$common_msg1	=	"PR record Deleted successfully.";
	}
	if(isset($_GET['restore_pr_id']))
	{
		$restore_id = $_GET['restore_pr_id'];		

		$db->restore_deleted_pr_details_by_id($restore_id);
		$common_msg	=	"PR record Restored successfully.";
	}
	if(isset($_GET['del_category_id']))
	{
		$delete_id = $_GET['del_category_id'];		

		$db->permanent_delete_pr_category_by_id($delete_id);
		$common_msg1	="Category record Deleted successfully.";
	} 
	if(isset($_GET['restore_category_id']))
	{
		$restore_id = $_GET['restore_category_id'];		

		$db->restore_deleted_pr_category_by_id($restore_id);
		$common_msg	=	"Category record Restored successfully.";
	}
	 
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <title> Admin | PR Trash </title>

 

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
                                            <h5 class="m-b-10"><i class="fa fa-trash-o"></i> PR Record's & PR Categories Trash</h5>
                                            <p class="text-muted m-b-10">You can Access Deleted PR Records here!!</p>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12"> 
                                                <div class="common_msg" style="color:red;font-size:17px;margin-left: 340px;">
                                                    <?php
                                                        echo $common_msg1;
                                                    ?>
                                                </div>
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
                                        </div> 
                                    </div>
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>PR Record Trash</h5>
                                                        <span>You Can Restore & Permanently Deleted PR Records From here..</span>
                                                    </div>
													
													 <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                
																		<th style="width=30;text-align:center;" >Sr. No</th>
																		<th style="width=30;text-align:center;" >PR Title</th>
																		<th style="width=30;text-align:center;" >Author</th> 
																		<th style="width=30;text-align:center;" >PR Category</th> 
																		<th style="width=30;text-align:center;" >PR Meta Description</th> 
																		<th style="width=30;text-align:center;" >Image</th>
																		<th style="width=30;text-align:center;" >Permalink</th> 
																		<th style="width=30;text-align:center;" >Date added</th>
																		<th style="width=30;text-align:center;" >Date modified</th>
																		<th style="width=30;text-align:center;">Restore</th>
																		<th style="width=30;text-align:center;">Delete</th> 	
																		 	
																																
																	</tr>
																	
                                                                </thead>
                                                                <tbody>
																 	<?php
																	$get_pr	=	$db->fetch_pr_deleted_records();
																			if(!empty($get_pr))
																			{
																				$counter	=	0;
																				
																				foreach($get_pr as $record)
																				{
																					
																					$got_id				=   $get_pr[$counter][0];	
																					$got_pr_title	    =	$get_pr[$counter][1];
                                                                                    $got_pr_author	    =	$get_pr[$counter][2];        
																					$got_pr_category	=	$get_pr[$counter][3];  
																					$got_pr_metaDesc 	=	$get_pr[$counter][4];
																					$got_pr_desc	    =	$get_pr[$counter][5]; 
																					$pr_image	 		= 	$get_pr[$counter][6];
																					$got_pr_permalink 	= 	$get_pr[$counter][7];
																					$date_added 		= 	$get_pr[$counter][8];
																					$date_modified		= 	$get_pr[$counter][9];
																					$status 			= 	$get_pr[$counter][10];
														
																					  
																?>
                                                                    <tr>
                                                                    	<td><?php echo $counter + 1 ;?></td>
																		<td style="max-width: 250px;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $got_pr_title ;?></td> 
																		<td style="max-width: 250px;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $got_pr_author ;?></td> 
																		<td><?php echo $got_pr_category ;?></td> 
																		<td style="max-width: 400px;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $got_pr_metaDesc ;?></td> 
																		<td><?php echo $pr_image ;?></td>
																		<td><?php echo $got_pr_permalink ;?></td>
																		<td><?php echo $date_added ;?></td>
																		<td><?php echo $date_modified ;?></td> 
																		 
																		<td class="text-center"><a href="pr-trash.php?restore_pr_id=<?php echo $got_id; ?>" class="delete_option"><i class="fa fa-repeat fa-2x"></i></a></td>

																		<td class="text-center"><a href="pr-trash.php?del_pr_id=<?php echo $got_id; ?>" class="delete_option"><i class="fa fa-trash-o fa-2x"></i></a></td>
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
                                            <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5> PR Category Trash</h5>
                                                        <span>You can Restore & Permanently Delete your PR Category here...</span>
                                                    </div>
                                                    
                                                     <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                
                                                                        <th style="width=30;text-align:center;" >Sr. No</th>
                                                                        <th style="width=30;text-align:center;" >PR Category</th>                      
                                                                        <th style="width=30;text-align:center;">Restore</th>
                                                                        <th style="width=30;text-align:center;">Delete</th>  
                                                                        
                                                                                                                                
                                                                    </tr>
                                                                    
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $get_pr_category   =   $db->fetch_pr_deleted_category();
                                                                            if(!empty($get_pr_category))
                                                                            {
                                                                                $counter    =   0;
                                                                                
                                                                                foreach($get_pr_category as $record)
                                                                                {
                                                                                    
                                                                                    $got_id             =   $get_pr_category[$counter][0]; 
                                                                                    $got_pr_category  =   $get_pr_category[$counter][1];
                                                                            
                                                        
                                                                                      
                                                                ?>
                                                                    <tr>
                                                                        <td><?php echo $counter + 1 ;?></td>
                                                                        <td><?php echo $got_pr_category ;?></td> 
                      
                                                                        <td class="text-center"><a href="pr-trash.php?restore_category_id=<?php echo $got_id; ?>" class="delete_option"><i class="fa fa-repeat fa-2x m-auto"></i></a></td>    
                                                                        <td class="text-center"><a href="pr-trash.php?del_category_id=<?php echo $got_id; ?>" class="delete_option"><i class="fa fa-trash-o fa-2x m-auto"></i></a></td>
                                                                      </tr>
                                                                    <?php
                                                                        $counter++;
                                                                        }
                                                                        
                                                                    }
                                                                    else
                                                                    {
                                                                ?>      <tr>
                                                                            <td colspan="2">No data to list</td>
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