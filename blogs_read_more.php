<?php
  require_once("Admin-Dashboard/lib/class/functions.php");
  $db = new functions();
  /*if(!isset($_SESSION['current_admin']))
  {
    header("Location:index.php");
  }*/
if(!isset($_SESSION)){
  session_start();
}

  $common_msg ="";
  $common_msg1="";

   if(isset($_GET['blog-id']))
   {
    $blog_id = $_GET['blog-id'];
    $_SESSION['blog_id'] = $blog_id;
   }
   else if(isset($_SESSION['blog_id']))
   {
     $blog_id = $_SESSION['blog_id'];
   }


   $blog_data		=	array();
   $blog_data		=	$db->fetch_blog_full_details_by_id($blog_id);


   $blog_title     =  "";
   $blog_category  =  "";
   $blog_meta_desc  =  "";
   $blog_desc      =  "";
   $blog_date = "";
   $blog_image = "";
   $target_dir = "Admin-Dashboard/assets/images/blog/";
   $blog_permalink =  "";



   if(!empty($blog_data))
   {
     $blog_title = $blog_data[1];
     $blog_category = $blog_data[2];
     $blog_meta_desc = $blog_data[3];
     $blog_desc = $blog_data[4];
     $blog_date = $blog_data[5];
     $blog_image_og = $blog_data[7];
     //echo $blog_image;
     $blog_permalink = $blog_data[8];
     $image_disp = "";
     $image_disp = $target_dir ."/". $blog_image_og;
   }



?>

<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

      <title>Blog - Chromatus Consulting</title>

    </head>
    <body>
      <header>
        <?php require_once('include/nav.php'); ?>

      </header>


      <div class="main-content">

        <!-- Blogs -->
        <br>
        <div class="contactus-wrapper">


            <div  class="container">
                <div class = "row mb-3 mt-5">
                  <div class="col-md-3 mt-5">
                   <div class="cat-box-wrapper">
                     <ul class="cat-box-list">
                        <li class="cat-box-heading">Category</li>
                        <a href="blog.php?blog-category=All" ><li class="cat-box-item <?php if($category == 'All'){ echo "cat-box-item-active"; } ?>"><i class="fa fa-angle-double-right cat-box-fa"></i> <span class="cat-box-item-text">All</span></li></a>
                        <?php
                              $get_category = $db->get_blog_categories();
                              if(!empty($get_category))
                              {
                                  $counter    =   0;

                                  foreach($get_category as $record)
                                  {
                                      $result_category  =   $get_category[$counter][1];


                        ?>
                        <a href="blog.php?blog-category=<?php echo $result_category ?>" ><li class="cat-box-item <?php if($category == $result_category){echo "cat-box-item-active"; }?>"><i class="fa fa-angle-double-right cat-box-fa"></i> <span class="cat-box-item-text"><?php echo $result_category ?></span></li></a>
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
                     </ul>
                    </div>
                  </div>
                  <div class="col-md-9" >
                    <h3 class="blog-title"><?php echo $blog_title; ?></h3>
                    <span class="text-muted"><i class="fa fa-calendar"></i> <?php echo $blog_date; ?>&nbsp;&nbsp;&nbsp;  <i class="fa fa-industry"></i> <?php echo $blog_category; ?></span>
                    <hr>
                    <img src="<?php echo $image_disp; ?>" class="rounded img-fluid">

                    <p><?php echo $blog_desc;?><p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php require_once('include/footer.php'); ?>
  </body>
</html>
