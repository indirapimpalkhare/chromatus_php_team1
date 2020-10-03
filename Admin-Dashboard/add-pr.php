<?php
    require_once("lib/class/functions.php");
    $db = new functions();
    if(!isset($_SESSION['current_admin']))
    {
        header("Location:index.php");
    }


    $pr_title     =  "";
    $pr_author     =  "";
    $pr_category  =  "";
    $pr_metadesc  =  "";
    $pr_desc      =  "";
    $pr_permalink =  "";
    $pr_image = "";
    $target_dir = "assets/images/pressRelease/";
    $common_msg  =  "";
    $common_msg1 =  "";
    $flag = 0;

    if(isset($_POST['submit_btn']))
    {
        $pr_title     =  $_POST['pr-title'];
        $pr_author     =  $_POST['pr-author'];
        $pr_category  =  $_POST['pr-category'];
        $pr_metadesc  =  $_POST['pr-metaDesc'];
        $pr_desc      =  $_POST['pr-desc'];
        $pr_permalink =  $_POST['pr-permalink'];
        $target_file = $target_dir . basename($_FILES["pr_image"]["name"]);
        $pr_image = $_FILES['pr_image']['name'];
        
        
        if($flag==0)
        {
            if (move_uploaded_file($_FILES['pr_image']['tmp_name'], $target_file))
            {
                $db->add_pr($pr_title,$pr_author,$pr_category,$pr_metadesc,$pr_desc,$pr_image,$pr_permalink);
                $common_msg =   "PR Added successfully.";
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
    <title> Chromatus Consulting | Add PR</title>



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
                                            <h5 class="m-b-10">Add PR</h5>
                                            <p class="text-muted m-b-10">You can add your PR here..</p>
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

                                                                                <input type="text" name="pr-title" placeholder="Enter PR Title" required>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter PR Title</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">

                                                                                <input type="text" name="pr-author" placeholder="Enter author name" required>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Author Name</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <div style="margin-bottom:10px; font-size:2 0px;">Insert Image :  <input type="file" name="pr_image" placeholder="Select PR Image" required accept="image/*">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="j-unit">
                                                                            <div class="j-input">

                                                                                <select class="custom-select custom-select-lg mb-3" name="pr-category">
                                                                                  <option selected value="">Select PR Category</option>
                                                                                  <?php
                                                                                        $get_category = $db->fetch_pr_category();
                                                                                        if(!empty($get_category))
                                                                                        {
                                                                                            $counter    =   0;

                                                                                            foreach($get_category as $record)
                                                                                            {
                                                                                                $result_category  =   $get_category[$counter][1];


                                                                                  ?>
                                                                                  <option value="<?php echo $result_category ?>"><?php echo $result_category ?></option>
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
                                                                                <textarea name="pr-metaDesc"  placeholder="Enter Meta Description" required ></textarea>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Meta Description</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <textarea name="pr-desc" class="ckeditor" placeholder="Enter Description" ></textarea>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Description</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <select class="custom-select custom-select-lg mb-3" name="pr-permalink">
                                                                                  <option selected>Select Permalink</option>
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
                                                                    <input type="submit" value="Submit" name="submit_btn" class="btn btn-primary" />
                                                                    <button type="reset" class="btn btn-default m-r-20">Reset</button>
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
