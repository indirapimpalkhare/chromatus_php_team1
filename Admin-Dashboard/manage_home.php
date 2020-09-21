<?php
    require_once("lib/class/functions.php");
    $db = new functions();
    /*if(!isset($_SESSION['current_admin']))
    {
        header("Location:index.php");
    }*/
    $common_msg1 = "";
    if(isset($_GET['del_image_id']))
    {
      $delete_id = $_GET['del_image_id'];
      $db->soft_delete_image_by_id($delete_id);
      $common_msg1 =   "Image deleted successfully.";
    }

    if(isset($_GET['display_change_id']) && isset($_GET['display']))
    {
      $image_id = $_GET['display_change_id'];
      $display = $_GET['display'];
      $db->change_image_display($image_id, $display);
      $common_msg1 =   "Image hidden successfully.";
    }


    $image  =  "";
    $image_text  =  "";
    $common_msg  =  "";
    $target_dir = "img/uploads/carousel/";
    $flag = 0;

    if(isset($_POST['submit_btn']))
    {

        $image  =  $_FILES['image']['name'];
        $image_text  =  $_POST['image_text'];
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        if($flag==0)
        {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
              $db->add_image($image, $image_text);
              $common_msg =   "Image Added successfully.";
            } else {
              $common_msg = "Sorry, there was an error adding image.";
            }

        }
    }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Chromatus Consulting | Manage Blog Category</title>



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
                                            <h5 class="m-b-10">Manage Blog Category</h5>

                                        </div>
                                    </div>
                                    <div class="page-body">
                                        <div class="row">
                                          <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                    <h5>Add Blog Category</h5>
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
                                                                                <input type="file" name="image" placeholder="Choose Carousel Image" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <input type="text" name="image_text" placeholder="Enter Image Caption" required>
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
                                                        <h5> Blog Category</h5>
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
                                                                        <th style="width=30;text-align:center;" >Image</th>
                                                                        <th style="width=30;text-align:center;" >Caption</th>
                                                                        <th style="width=30;text-align:center;" >Display</th>
                                                                        <th style="width=30;text-align:center;">Edit</th>
																																				<th style="width=30;text-align:center;">Delete</th>

                                                                    </tr>

                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $get_image_details   =   $db->get_all_image_details();
                                                                            if(!empty($get_image_details))
                                                                            {
                                                                                $counter    =   0;

                                                                                foreach($get_image_details as $record)
                                                                                {

                                                                                    $image_id = $get_image_details[$counter][0];
                                                                                    $image  =  $get_image_details[$counter][1];
                                                                                    $image_text = $get_image_details[$counter][2];
                                                                                    $display  =  $get_image_details[$counter][3];




                                                                				echo "<tr>";
																																				$s = $counter + 1;
                                                                        echo "<td>".$s. "</td>";
                                                                        echo "<td><img src='img/uploads/carousel/".$image."'height='30%'></td>";
                                                                        echo "<td>".$image_text."</td>";
                                                                        if($display == 1){
                                                                          $ch = 0;
                                                                          echo "<td><a href='manage_home.php?display_change_id=".$image_id."&display=".$ch."' class='delete_option'><i class='fa fa-eye fa-2x'></i></a></td>";
                                                                        }
                                                                        else{
                                                                          $ch = 1;
                                                                          echo "<td><a href='manage_home.php?display_change_id=".$image_id."&display=".$ch."' class='delete_option'><i class='fa fa-eye-slash fa-2x'></i></a></td>";
                                                                        }
                                                                        echo "<td><a href='edit_home.php?category_id=".$image_id."' class='Edit_option'><i class='fa fa-pencil-square-o fa-2x'></i></a></td>";
																																				echo "<td><a href='manage_home.php?del_image_id=".$image_id."' class='delete_option'><i class='fa fa-trash-o fa-2x'></i></a></td>";
																																				echo "</tr>";

                                                                        $counter++;
                                                                        }

                                                                    }
                                                                    else
                                                                    {
                                                                   echo "<tr><td colspan='2'>No data to list</td></tr>";

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
