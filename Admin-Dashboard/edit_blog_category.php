<?php
    require_once("lib/class/functions.php");
    $db = new functions();
    if(!isset($_SESSION['current_admin']))
    {
        header("Location:index.php");
    }
    
    $common_msg ="";
    $common_msg1="";

     if(isset($_GET['category_id']))
     {
        $category_id = $_GET['category_id'];
        $_SESSION['category_id'] = $category_id;
     }
     else if(isset($_SESSION['category_id']))
     {
         $category_id = $_SESSION['category_id'];
     }


    $category_data      =   array();
    $category_data      =   $db->fetch_blog_category_by_id($category_id);


   $result_category = "";


    if(!empty($category_data))
    {

    $result_category            =   $category_data[0];

    }
    if(isset($_POST['edit']))
    {

        $category_name  =   $_POST['blog_category'];
        $result_category = $category_name;


            if($db->update_blog_category_by_id($category_name,$category_id))
            {
                      $common_msg   =   "Category Updated Successfully.";
            }
            else
            {
                    $common_msg1    = "Failed";

            }

    }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Chromatus Consulting | Update News Category</title>



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
                                            <h5 class="m-b-10">Update News Category</h5>
                                            <p class="text-muted m-b-10">You Can Update News Category here..</p>
                                        </div>
                                    </div>
                                    <div class="page-body">
                                        <div class="row">
                                          <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                    <h5>Update News Category</h5>
                                                    <span>You can update News Category here...</span>
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
                                                                                <input type="text" name="blog_category" value="<?php echo $result_category; ?>" placeholder="Enter News Category" required>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter News Category</span>
                                                                            </div>
                                                                        </div>

                                                                <div class="j-footer">
                                                                    <input type="submit" value="Update" name="edit" class="btn btn-primary" />
                                                                     <a href="manage-blog-category.php" class="btn btn-primary">Back</a>
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
