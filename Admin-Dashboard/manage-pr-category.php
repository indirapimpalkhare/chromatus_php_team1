<?php
    require_once("lib/class/functions.php");
    $db = new functions();
    if(!isset($_SESSION['current_admin']))
    {   
        header("Location:index.php");
    }
    
    $common_msg1 = "";
    if(isset($_GET['del_category_id']))
    {
    $delete_id = $_GET['del_category_id'];      
    
    $db->delete_pr_category_by_id($delete_id);
    $common_msg1 =   "Category deleted successfully.";
    }  
   
    $pr_category  =  "";
    $pr_category_image = "";
    $target_dir = "assets/images/pressRelease/category/";
    
    $common_msg  =  "";
    $flag = 0;
    
    if(isset($_POST['submit_btn']))
    { 
       
        $pr_category  =  $_POST['pr-category'];
        $target_file = $target_dir . basename($_FILES["pr_category_image"]["name"]);
        $pr_category_image = $_FILES['pr_category_image']['name'];
        if($flag==0)
        { 
            if (move_uploaded_file($_FILES['pr_category_image']['tmp_name'], $target_file))
            {
                 $db->add_pr_category($pr_category,$pr_category_image);    
                $common_msg =   "Category Added successfully.";
            }
            else 
            {
                $common_msg = "Sorry, there was an error adding PR.";
            }
            
           
        }
        
    }
    
    
    
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <title> Chromatus Consulting | Manage PR Category</title>

 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
                                            <h5 class="m-b-10">Manage PR Category</h5>
                                            <p class="text-muted m-b-10">You Can Manage PR Category here..</p>
                                        </div>
                                    </div>
                                    <div class="page-body">
                                        <div class="row">
                                          <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                    <h5>Add PR Category</h5>
                                                    <span>You can Add PR Category here...</span>
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

                                                                                <input type="text" name="pr-category" placeholder="Enter PR Category" required>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter PR Category</span> 
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <div style="margin-bottom:10px; font-size:2 0px;">Insert Image :  <input type="file" name="pr_category_image" placeholder="Select PR Category Image" required accept="image/*">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>

                                                                <div class="j-footer"> 
                                                                    <input type="submit" value="Submit" name="submit_btn" class="btn btn-primary" />        
                                                                    <button type="reset" class="btn btn-default m-r-20">Reset</button>
                                                                </div>

                                                            </form>
                                                        </div> 
                                                    </div>     
                                                </div>
                                            </div>    
                                        </div> 
                                        
                                        <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5> PR Category</h5>
                                                        <span>You can Update and Delete your PR Category here...</span>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-12"> 
                                                            <div class="common_msg" style="color:red;font-size:17px;margin-left: 340px;">
                                                                <?php
                                                                    echo $common_msg1;
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
                                                                        <th style="width=30;text-align:center;" >PR Category</th>         <th style="width=30;text-align:center;" >Image</th>  
                                                                        <th style="width=30;text-align:center;">Update</th> 
                                                                        <th style="width=30;text-align:center;">Send to Trash</th> 
                                                                                                                                
                                                                    </tr>
                                                                    
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $get_pr_category   =   $db->fetch_pr_category();
                                                                            if(!empty($get_pr_category))
                                                                            {
                                                                                $counter    =   0;
                                                                                
                                                                                foreach($get_pr_category as $record)
                                                                                {
                                                                                    
                                                                                    $got_id             =   $get_pr_category[$counter][0]; 
                                                                                    $got_pr_category  =   $get_pr_category[$counter][1];
                                                                                    $got_pr_category_image  =   $get_pr_category[$counter][2];
                                                                            
                                                        
                                                                                      
                                                                ?>
                                                                    <tr>
                                                                        <td style="text-align:center;"><?php echo $counter + 1 ;?></td>
                                                                        
                                                                        <td><?php echo $got_pr_category ;?></td> 
                                                                        <td><?php echo $got_pr_category_image ;?></td> 
                                                                        
                                                                        <td style="text-align:center;"><a href="edit-pr-category.php?category-id=<?php echo $got_id; ?>" class="Edit_option"><i class="fa fa-pencil-square-o fa-2x"></i></a></td>           
                                                                        
                                                                        <td style="text-align:center;"><a  href="manage-pr-category.php?del_category_id=<?php echo $got_id; ?>" class="delete_option"><i class="fa fa-trash-o fa-2x"></i></a></td>
                                                                            
                                                                        
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