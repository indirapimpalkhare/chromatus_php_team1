<?php
	require_once("lib/class/functions.php");
	$db = new functions();
	/*if(!isset($_SESSION['current_admin']))
	{
		header("Location:index.php");
	}*/
	$common_msg ="";
	$common_msg1 ="";
	if(isset($_GET['del_image_id']) && isset($_GET['image']))
	{
		$image_id = $_GET['del_image_id'];
    $image = $_GET['image'];
    $image_full_dir = "img/uploads/carousel/".$image;
    if(unlink($image_full_dir)){
      $db->permanent_delete_image_by_id($image_id);
  		$common_msg1	=	"Image deleted successfully.";
    }


	}
	if(isset($_GET['restore_image_id']))
	{
		$restore_id = $_GET['restore_image_id'];

		$db->restore_image($restore_id);
		$common_msg	=	"Image restored successfully.";
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Admin | Blog Record </title>



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
                                            <h5 class="m-b-10"><i class="fa fa-trash-o"></i> Carousel Trash</h5>
                                            <p class="text-muted m-b-10">You can Access Deleted Carousel Records here!!</p>
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
                                                        <h5>Carousel Record Trash</h5>
                                                        <span>You Can Restore & Permanently Deleted Carousel Records From here..</span>
                                                    </div>

													 <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                                                              <thead>
                                                                  <tr>

                                                                      <th style="width=30;text-align:center;" >Sr. No</th>
                                                                      <th style="width=30;text-align:center;" >Image</th>
                                                                      <th style="width=30;text-align:center;" >Caption</th>
                                                                      <th style="width=30;text-align:center;">Restore</th>
                                                                      <th style="width=30;text-align:center;">Delete</th>

                                                                  </tr>

                                                              </thead>
                                                              <tbody>
                                                                  <?php
                                                                  $get_image_details   =   $db->get_all_trashed_image_details();
                                                                          if(!empty($get_image_details))
                                                                          {
                                                                              $counter    =   0;

                                                                              foreach($get_image_details as $record)
                                                                              {

                                                                                  $image_id = $get_image_details[$counter][0];
                                                                                  $image  =  $get_image_details[$counter][1];
                                                                                  $image_text = $get_image_details[$counter][2];
                                                                                  //$display  =  $get_image_details[$counter][3];




                                                                      echo "<tr>";
                                                                      $s = $counter + 1;
                                                                      echo "<td>".$s. "</td>";
                                                                      echo "<td><img src='img/uploads/carousel/".$image."'height='30%'></td>";
                                                                      echo "<td>".$image_text."</td>";
                                                                      echo "<td><a href='trash_home.php?restore_image_id=".$image_id."' class='Edit_option'><i class='fa fa-repeat fa-2x'></i></a></td>";
                                                                      echo "<td><a href='trash_home.php?del_image_id=".$image_id."&image=".$image."' class='delete_option'><i class='fa fa-trash-o fa-2x'></i></a></td>";
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
