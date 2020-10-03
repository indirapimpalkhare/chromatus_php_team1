<?php
	require_once("lib/class/functions.php");
	$db = new functions();
	if(!isset($_SESSION['current_admin']))
	{	
		header("Location:index.php");
	}
	
     
	$common_msg	="";
	$common_msg1="";
	
	 if(isset($_GET['pr-id']))
	 {
		$pr_id = $_GET['pr-id'];		
		$_SESSION['pr_id'] = $pr_id;
	 }
	 else if(isset($_SESSION['pr_id']))
	 {
		 $pr_id = $_SESSION['pr_id'];
	 }
	 
	 
	$pr_data		=	array();
	$pr_data		=	$db->fetch_pr_full_details_by_id($pr_id);
			

	$result_title	 	= "";
    $result_author	 	= "";
	$result_category 	= "";
	$result_metaDesc    = "";
	$result_description = "";
	$result_permalink 	= "";
    $pr_image           = "";
    $target_dir         = "assets/images/pressRelease/";

	
	if(!empty($pr_data))
	{	
		 
	$result_title				=	$pr_data[1];
    $result_author				=	$pr_data[2];    
	$result_category			=	$pr_data[3];
	$result_metaDesc 			=	$pr_data[4];
	$result_description         =	$pr_data[5];
	$pr_image_og                =   $pr_data[6];
    $result_permalink			=	$pr_data[7];
    
    $image_disp = $target_dir ."/". $pr_image_og;
			
	}
	if(isset($_POST['edit']))
	{
		$pr_title		=	$_POST['pr-title'];
        $pr_author		=	$_POST['pr-author'];
		$pr_category	=	$_POST['pr-category'];  
		$pr_metadesc	=	$_POST['pr-metaDesc']; 
		$pr_desc		=	$_POST['pr-desc']; 
		$pr_permalink	=	$_POST['pr-permalink'];
        if($_FILES["pr_image"]["error"] == 4) 
        {
            //means there is no file uploaded
            $pr_image = $pr_image_og;
        }
        else
        {
            $pr_image = $_FILES['pr_image']['name'];

            $target_file = $target_dir . basename($_FILES["pr_image"]["name"]);
    
            if (move_uploaded_file($_FILES['pr_image']['tmp_name'], $target_file))
            {
                $common_msg = "File upload successful";
            }
        }
			 
        if($db->update_pr_full_details_by_id($pr_title,$pr_author,$pr_category,$pr_metadesc,$pr_desc,$pr_image,$pr_permalink,$pr_id))
        {
            $common_msg	=	"PR Updated Successfully.";
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
    <title> Chromatus Consulting | Update PR</title>

 

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
                                            <h5 class="m-b-10">Update PR</h5>
                                            <p class="text-muted m-b-10">You can update your PR here..</p>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    
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

                                                                                <input type="text" value="<?php echo $result_title; ?>" name="pr-title" placeholder="Enter PR Title" required>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter PR Title</span> 
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="j-unit">
                                                                            <div class="j-input">

                                                                                <input type="text" value="<?php echo $result_author; ?>" name="pr-author" placeholder="Enter PR Author" required>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter PR Author</span> 
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <input type="file" name="pr_image" placeholder="Select PR Image" accept="image/*" value = "<?php echo $pr_image?>">
                                                                                <span class="j-tooltip j-tooltip-right-top">Select PR Image</span>
                                                                                <img src = "<?php echo $image_disp ?>" width="40%" alt="Current Image">


                                                                            </div>
                                                                        </div>
                                                                    
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                
                                                                                <select class="custom-select custom-select-lg mb-3" name="pr-category">
                                                                                  <option selected value="<?php echo $result_category; ?>"><?php echo $result_category; ?></option>	
                                                                                  <option value="">Select PR Category</option>
                                                                                  <?php
                                                                                        $get_category = $db->fetch_pr_category();
                                                                                        if(!empty($get_category))
                                                                                        {
                                                                                            $counter    =   0;
                                                                                            
                                                                                            foreach($get_category as $record)
                                                                                            {
                                                                                                $result_cate  =   $get_category[$counter][1];
                                                                                            

                                                                                  ?>
                                                                                  <option value="<?php echo $result_cate; ?>"><?php echo $result_cate; ?></option>
                                                                                  <?php
                                                                                        $counter++;
                                                                                        }
                                                                                        
                                                                                    }
                                                                                    else
                                                                                    {
                                                                                  ?>  
                                                                                  <option value="">Empty Cateogry</option>
                                                                                  <?php
                                                                                    }               
                                                                                  ?>    

                                                                                </select>

                                                                                <span class="j-tooltip j-tooltip-right-top">Select Category</span> 
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="j-row">
                                                                        
                                                                         <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <textarea  name="pr-metaDesc"  placeholder="Enter Meta Description" required ><?php echo $result_metaDesc; ?></textarea>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Meta Description</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <textarea name="pr-desc" class="ckeditor" placeholder="Enter Description" ><?php echo $result_description; ?></textarea>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Description</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <select class="custom-select custom-select-lg mb-3" name="pr-permalink">
                                                                                  <option selected value="<?php echo $result_permalink; ?>"><?php echo $result_permalink; ?></option>
                                                                                  <option >Select Permalink</option>
                                                                                  <option value="">perma1</option>
                                                                                  <option value="">perma2</option>
                                                                                  <option value="">perma3</option>
                                                                                </select>
                                                                                <span class="j-tooltip j-tooltip-right-top">Select Permalink</span> 
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                    
                                                                <div class="j-response"></div>

                                                                </div>

                                                                <div class="j-footer"> 
                                                                    <input type="submit" value="Update" name="edit" class="btn btn-primary" />
                                                                    <a href="view-pr.php" class="btn btn-primary">Back</a>
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