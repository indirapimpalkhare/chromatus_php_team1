<?php
	require_once("lib/class/functions.php");
	$db = new functions();
	/*if(!isset($_SESSION['current_admin']))
	{
		header("Location:index.php");
	}*/
	$common_msg ="";
	 if(isset($_GET['blog_id']))
	 {
		$delete_id = $_GET['blog_id'];

		$db->delete_blog_details_by_id($delete_id);
		$common_msg	=	"News record deleted successfully.";
	 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Chromatus Consulting | Add</title>

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

                                    <!-- Side Bar Code -->

                                        <?php

      																	$get_blogs	=	$db->get_blogs();
      																			if(!empty($get_blogs))
      																			{
      																				$counter	=	0;
                                              ?>
                                              <div class = "table-responsive">
                                              <table class="table table-hover table-sm">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Sr. No.</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Summary</th>
                                                    <th scope="col">Created Date</th>
                                                    <th scope="col">Last Modified</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Meta Description</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Permalink</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <?php
      																				foreach($get_blogs as $data)
      																				{

                                                 $blogID = $get_blogs[$counter][0];
                                    						 $blog_title = $get_blogs[$counter][1];
                                    						 $blog_category = $get_blogs[$counter][2];
                                    						 $blog_meta_desc = $get_blogs[$counter][3];
                                    						 $blog_desc = $get_blogs[$counter][4];
                                    						 $date_added = $get_blogs[$counter][5];
                                    						 $datemod = $get_blogs[$counter][6];
                                    						 $blog_image = $get_blogs[$counter][7];
                                    						 $blog_permalink = $get_blogs[$counter][8];
                                                 $status = $get_blogs[$counter][9];

                                                echo "<tr>";
                                                $c = $counter + 1;
                                                echo "<td>".$c."</td>";
                                                echo "<td>".$blog_title."</td>";
                                                echo "<td>".$blog_desc."</td>";
                                                echo "<td>".$date_added."</td>";
                                                echo "<td>".$datemod."</td>";
                                                echo "<td>".$blog_category."</td>";
                                                echo "<td>".$blog_meta_desc."</td>";
                                                echo "<td><img src='img/uploads/".$blog_image."' height='20%'></td>";
                                                echo "<td>".$blog_permalink."</td>";
                                                echo "<td><a href='edit_blog.php?blog_id=".$blogID."'><i class='fa fa-edit fa-2x'></i></a></td>";
                                                echo "<td><a href='view_blogs.php?blog_id=".$blogID."'><i class='fa fa-trash fa-2x'></i></a></td>";
                                                echo "</tr>";
                                                $counter++;
                                              }

                                            }
                                            else {
                                              echo "No blogs";
                                            }

                                          ?>

                                      </tbody>
                                  </table>

                                  </div>
                                  <br>
                                  <br>
                                  <a href='add_blog.php' style="font-size:20px;"><i class='fa fa-plus fa-2x'></i> Add Blog</a>
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


    <!--script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'decription' );
    </script-->
</body>
</html>
