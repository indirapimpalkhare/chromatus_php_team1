<?php

require_once("lib/class/functions.php");
$db = new functions();
if(!isset($_SESSION['current_admin']))
{
  header("Location:index.php");
}


$common_msg	="";
$common_msg1="";

 if(isset($_GET['blog_id']))
 {
  $id = $_GET['blog_id'];
  $_SESSION['blog_id'] = $id;
 }
 else if(isset($_SESSION['blog_id']))
 {
   $id = $_SESSION['blog_id'];
 }


$blog_data		=	array();
$blog_data		=	$db->fetch_blog_full_details_by_id($id);


$blog_title     =  "";
$blog_category  =  "";
$blog_meta_desc  =  "";
$blog_desc      =  "";
$blog_image = "";
$target_dir = "assets/images/blog/";
$blog_permalink =  "";



if(!empty($blog_data))
{
  $blog_title = $blog_data[1];
  $blog_category = $blog_data[2];
  $blog_meta_desc = $blog_data[3];
  $blog_desc = $blog_data[4];
  $blog_image_og = $blog_data[7];
  //echo $blog_image;
  $blog_permalink = $blog_data[8];
  $image_disp = "";
  $image_disp = $target_dir ."/". $blog_image_og;
}

if(isset($_POST['edit']))
{

  $blog_title = $_POST['blog_title'];

  $blog_category = $_POST['blog_category'];
  $blog_meta_desc = $_POST['blog_meta_desc'];
  $blog_desc = $_POST['blog_desc'];
  $blog_permalink = $_POST['blog_permalink'];

  if($_FILES["blog_image"]["error"] == 4) {
  //means there is no file uploaded
    $blog_image = $blog_image_og;
  }
  else{
    $blog_image = $_FILES['blog_image']['name'];

    $target_file = $target_dir . basename($_FILES["blog_image"]["name"]);

    if (move_uploaded_file($_FILES['blog_image']['tmp_name'], $target_file)){
      $common_msg = "File upload successful";
    }
  }

    if($db->update_blog_full_details_by_id($id,$blog_title,$blog_category,$blog_meta_desc,$blog_desc, $blog_image, $blog_permalink))
    {
          $common_msg	=	"Blog Updated Successfully.";
    }
    else
    {
        $common_msg1	= "Failed";

    }

  //echo $blog_image;


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

                                                                                <input type="text" name="blog_title" placeholder="Enter Blog Title" value = "<?php echo $blog_title?>" required>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Blog Title</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <input type="file" name="blog_image" placeholder="Select Blog Image" accept="image/*" value = "<?php echo $blog_image?>">
                                                                                <span class="j-tooltip j-tooltip-right-top">Select Blog Image</span>
                                                                                <img src = "<?php echo $image_disp ?>" width="40%" alt="Current Image">


                                                                            </div>
                                                                        </div>

                                                                        <div class="j-unit">
                                                                            <div class="j-input">

                                                                                <select class="custom-select custom-select-lg mb-3" name="blog_category">
                                                                                  <option value="">Select Blog Category</option>
                                                                                  <option selected value="<?php echo $blog_category ?>"><?php echo $blog_category ?></option>
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
                                                                                <textarea name="blog_meta_desc"  placeholder="Enter Meta Description" required><?php echo $blog_meta_desc ?>
                                                                                </textarea>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Meta Description</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <textarea name="blog_desc" class="ckeditor" placeholder="Enter Description"><?php echo $blog_desc ?>
                                                                                </textarea>
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Description</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <select class="custom-select custom-select-lg mb-3" name="blog_permalink">
                                                                                  <option selected>Select Permalink</option>
                                                                                  <option selected value="<?php echo $blog_permalink ?>"><?php echo $blog_permalink ?></option>
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
                                                                    <input type="submit" value="Submit" name="edit" class="btn btn-primary" />
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
