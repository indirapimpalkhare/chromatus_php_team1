<?php
	require_once("lib/class/functions.php");
	$db = new functions();
	/*if(!isset($_SESSION['current_admin']))
	{
		header("Location:index.php");
	}*/
	$common_msg ="";
	$common_msg1 ="";
	if(isset($_GET['del_blog_id']))
	{
		$delete_id = $_GET['del_blog_id'];

		$db->permanent_delete_blog_details_by_id($delete_id);
		$common_msg1	=	"Blog record Deleted successfully.";
	}
	if(isset($_GET['restore_blog_id']))
	{
		$restore_id = $_GET['restore_blog_id'];

		$db->restore_deleted_blog_details_by_id($restore_id);
		$common_msg	=	"Blog record Restored successfully.";
	}
	if(isset($_GET['del_category_id']))
	{
		$delete_id = $_GET['del_category_id'];

		$db->permanent_delete_blog_category_by_id($delete_id);
		$common_msg1	="Category record Deleted successfully.";
	}
	if(isset($_GET['restore_category_id']))
	{
		$restore_id = $_GET['restore_category_id'];

		$db->restore_deleted_blog_category_by_id($restore_id);
		$common_msg	=	"Category record Restored successfully.";
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
                                            <h5 class="m-b-10"><i class="fa fa-trash-o"></i> Blog Record's & Categories Trash</h5>
                                            <p class="text-muted m-b-10">You can Access Deleted Blog Records here!!</p>
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
                                                        <h5>Blog Record Trash</h5>
                                                        <span>You Can Restore & Permanently Deleted Blog Records From here..</span>
                                                    </div>

													 <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
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
                                                                            <th>Restore</th>
                                                                            <th>Delete</th>
                                                                          </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                          <?php
                                                                          $get_blogs	=	$db->get_blog_deleted_records();
                                                                          if(!empty($get_blogs))
                                    																			{
                                    																				$counter	=	0;
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
                                                                        echo "<td>".$blog_image."</td>";
                                                                        echo "<td>".$blog_permalink."</td>";
                                                                        echo "<td class='text-center'><a href='trash_blog.php?restore_blog_id=".$blogID."' class='delete_option'><i class='fa fa-repeat fa-2x'></i></a></td>";
                                                                        echo "<td class='text-center'><a href='trash_blog.php?del_blog_id=".$blogID."' class='delete_option'><i class='fa fa-trash fa-2x'></i></a></td>";
                                                                        echo "</tr>";
                                                                        $counter++;
                                                                      }


                                                                    }
                                                                    else {
                                                                      echo "<tr>";
                                																			echo "<td colspan='6'>No data to list</td>";
                                																		  echo"</tr>";
                                                                    }

                                                                  ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5> Blog Category Trash</h5>
                                                        <span>You can Restore & Permanently Delete your Blog Category here...</span>
                                                    </div>

                                                     <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>

                                                                        <th style="width=30;text-align:center;" >Sr. No</th>
                                                                        <th style="width=30;text-align:center;" >Blog Category</th>
                                                                        <th style="width=30;text-align:center;">Restore</th>
                                                                        <th style="width=30;text-align:center;">Delete</th>


                                                                    </tr>

                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $get_blog_category   =   $db->get_blog_deleted_category();
                                                                    if(!empty($get_blog_category))
                                                                    {
                                                                        $counter    =   0;

                                                                        foreach($get_blog_category as $record)
                                                                        {

                                                                            $id = $get_blog_category[$counter][0];
                                                                            $category  =  $get_blog_category[$counter][1];




                                                                              echo "<tr>";
                                                                              $s = $counter + 1;
                                                                              echo "<td>".$s. "</td>";
                                                                              echo "<td>".$category."</td>";

                                                                              echo "<td class='text-center'><a href='trash_blog.php?restore_category_id=".$id."'class='delete_option'><i class='fa fa-repeat fa-2x m-auto'></i></a></td>";
                                                                              echo "<td class='text-center'><a href='trash_blog.php?del_category_id=".$id."'class='delete_option'><i class='fa fa-trash fa-2x m-auto'></i></a></td>";

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
