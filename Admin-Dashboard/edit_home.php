<?php
require_once("lib/class/functions.php");
$db = new functions();
if(!isset($_SESSION['current_admin']))
{
  header("Location:index.php");
}

$common_msg	="";
$common_msg1="";

 if(isset($_GET['image_id']))
 {
  $id = $_GET['image_id'];
  $_SESSION['image_id'] = $id;
 }
 else if(isset($_SESSION['image_id']))
 {
   $id = $_SESSION['image_id'];
 }


$image_data		=	array();
$image_data		=	$db->get_all_image_details_by_id($id);


$image_og =  "";
$image = "";
$image_disp = "";
$image_text  =  "";
$target_dir = "assets/images/home/";



if(!empty($image_data))
{
  $image_og = $image_data[1];
  $image_text = $image_data[2];
  $image_disp = $target_dir. "/" . $image_og;
}

if(isset($_POST['edit']))
{

  $image_text= $_POST['image_text'];

  if($_FILES["image"]["error"] == 4) {
  //means there is no file uploaded
    $image = $image_og;

  }
  else{
    $image = $_FILES['image']['name'];
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
      unlink($image_disp);
      $common_msg = "File upload successful";
    }
  }
    if($db->edit_image($id, $image, $image_text))
    {
          $common_msg	=	"Image Updated Successfully.";
    }
    else
    {
        $common_msg1	= "Failed";

    }

  //echo $image_image;


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
                                            <h5 class="m-b-10">Edit Image Details</h5>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                          <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                    <h5>Blog Category</h5>
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
                                                                                <input type="file" name="image" placeholder="Choose Carousel Image" >
                                                                                <img src = "<?php echo $image_disp ?>" width="40%" alt="Current Image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <input type="text" name="image_text" value="<?php echo $image_text ?>" placeholder="Enter Image Caption" required>

                                                                            </div>
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
