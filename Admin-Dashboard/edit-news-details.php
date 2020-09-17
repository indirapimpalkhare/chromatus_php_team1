<?php
	require_once("lib/class/functions.php");
	$db = new functions();
	/*if(!isset($_SESSION['current_admin']))
	{	
		header("Location:index.php");
	}*/
	session_start(); 
	$common_msg	="";
	$common_msg1="";
	
	 if(isset($_GET['news-id']))
	 {
		$news_id = $_GET['news-id'];		
		$_SESSION['news_id'] = $news_id;
	 }
	 else if(isset($_SESSION['news_id']))
	 {
		 $news_id = $_SESSION['news_id'];
	 }
	 
	 
	$news_data		=	array();
	$news_data		=	$db->fetch_news_full_details_by_id($news_id);
			
	
	$result_title	 	= "";
	$result_category 	= "";
	$result_metaDesc    = "";
	$result_description = "";
	$result_permalink 	= "";

	
	if(!empty($news_data))
	{	
		 
	$result_title				=	$news_data[1];
	$result_category			=	$news_data[2];
	$result_metaDesc 			=	$news_data[3];
	$result_description         =	$news_data[4];
	$result_permalink			=	$news_data[5];
	 
			
	}
	if(isset($_POST['edit']))
	{
		$news_title		=	$_POST['news-title'];  
		$news_category	=	$_POST['news-category'];  
		$news_metadesc	=	$_POST['news-metaDesc']; 
		$news_desc		=	$_POST['news-desc']; 
		$news_permalink	=	$_POST['news-permalink'];
			 
			if($db->update_news_full_details_by_id($news_title,$news_category,$news_metadesc,$news_desc,$news_permalink,$news_id))
			{
					  $common_msg	=	"News Updated Successfully.";
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
    <title> Chromatus Consulting | Update News</title>

 

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
                                            <h5 class="m-b-10">Update News</h5>
                                            <p class="text-muted m-b-10">You can update your News here..</p>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                    <h5>Update News Details</h5>
                                                    <span>Please fill the News Details..</span>
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

                                                                                <input type="text" value="<?php echo $result_title; ?>" name="news-title" placeholder="Enter News Title" required>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter News Title</span> 
                                                                            </div>
                                                                        </div>
                                                                    
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                
                                                                                <select class="custom-select custom-select-lg mb-3" name="news-category">
                                                                                  <option selected value="<?php echo $result_category; ?>"><?php echo $result_category; ?></option>	
                                                                                  <option value="">Select News Category</option>
                                                                                  <?php
                                                                                        $get_category = $db->fetch_news_category();
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
                                                                                <textarea  name="news-metaDesc"  placeholder="Enter Meta Description" required ><?php echo $result_metaDesc; ?></textarea>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Meta Description</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <textarea name="news-desc" class="ckeditor" placeholder="Enter Description" ><?php echo $result_description; ?></textarea>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Description</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <select class="custom-select custom-select-lg mb-3" name="news-permalink">
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
                                                                    <a href="view-news.php" class="btn btn-primary">Back</a>
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