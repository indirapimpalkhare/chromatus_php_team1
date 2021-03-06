<?php
    require_once("lib/class/functions.php");
    $db = new functions();
    if(!isset($_SESSION['current_admin']))
    {
        header("Location:index.php");
    }


    $blog_title     =  "";
    $blog_category  =  "";
    $blog_meta_desc  =  "";
    $blog_desc      =  "";
    $blog_image = "";
    $target_dir = "assets/images/blog/";
    $blog_permalink =  "";
    $common_msg  =  "";
    $common_msg1 =  "";
    $flag = 0;

    if(isset($_POST['submit_btn']))
    {
        $target_file = $target_dir . basename($_FILES["blog_image"]["name"]);
        $blog_title = $_POST['blog_title'];
        $blog_category = $_POST['blog_category'];
        $blog_meta_desc = $_POST['blog_meta_desc'];
        $blog_desc = $_POST['blog_desc'];
        $blog_image = $_FILES['blog_image']['name'];
        //echo $blog_image;
        $blog_permalink = $_POST['blog_permalink'];

        if($flag==0)
        {
            if (move_uploaded_file($_FILES['blog_image']['tmp_name'], $target_file)) {
              $db->add_blog($blog_title,$blog_category,$blog_meta_desc,$blog_desc, $blog_image, $blog_permalink);
              $common_msg =   "Blog Added successfully.";
            } else {
              $common_msg = "Sorry, there was an error adding blog.";
            }

        }

    }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Chromatus Consulting | Add Blog</title>



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
                                            <h5 class="m-b-10">Add Blog</h5>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                      <h5>Add Blog Details</h5>
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

                                                                                <input type="text" name="blog_title" placeholder="Enter Blog Title" required>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Blog Title</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <input type="file" name="blog_image" placeholder="Select Blog Image" required accept="image/*">
                                                                                <span class="j-tooltip j-tooltip-right-top">Select Blog Image</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="j-unit">
                                                                            <div class="j-input">

                                                                                <select class="custom-select custom-select-lg mb-3" name="blog_category">
                                                                                  <option selected value="">Select Blog Category</option>
                                                                                  <?php
                                                                                        $get_categories = $db->get_blog_categories();
                                                                                        if(!empty($get_categories))
                                                                                        {
                                                                                            $counter    =   0;

                                                                                            foreach($get_categories as $record)
                                                                                            {
                                                                                                $result_categories  =   $get_categories[$counter][1];



                                                                                  echo "<option value='" . $result_categories . "'>" . $result_categories. "</option>";
                                                                                        $counter++;
                                                                                        }

                                                                                    }
                                                                                    else
                                                                                    {

                                                                                  echo "<option value=''>Empty Cateogry</option>";

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
                                                                                <textarea name="blog_meta_desc"  placeholder="Enter Meta Description" required ></textarea>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Meta Description</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <textarea name="blog_desc" class="ckeditor" placeholder="Enter Description" ></textarea>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Description</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <select class="custom-select custom-select-lg mb-3" name="blog_permalink">
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
