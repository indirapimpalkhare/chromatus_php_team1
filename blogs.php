<?php
  require_once("Admin-Dashboard/lib/class/functions.php");
  $db = new functions();

  $category = 'All';
  if(isset($_GET['blog-cat']))
  {
    $category = $_GET['blog-cat'];
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

    <title>Blogs - Chromatus Consulting</title>

  </head>
  <body>
    <header>
      <?php require_once('include/nav.php'); ?>

    </header>


    <div class="main-content ">

    <!-- Blogs -->
      <br>
      <div class="contactus-wrapper">
        <div class="topbanner">
          <div id="page-heading"><h2 class="text-center text-capitalize topbannerheading">Blogs</h2></div>
            <div class="linear-bottom">
              <div class="title-underline"></div>
            </div>
          </div>

          <div  class="container">
        <div class = "row mb-5">
              <div class="col-md-4 ">
                <div class="cat-box-wrapper">
                  <ul class="cat-box-list">
                    <li class="cat-box-heading">Category</li>
                    <a href="blogs.php?blog-cat=All" ><li class="cat-box-item <?php if($category == 'All'){ echo "cat-box-item-active"; } ?>"><i class="fa fa-angle-double-right cat-box-fa"></i> <span class="cat-box-item-text">All</span></li></a>
                    <?php
                      $get_category = $db->get_blog_categories();
                      if(!empty($get_category))
                      {
                        $counter    =   0;

                        foreach($get_category as $record)
                        {
                          $result_category  =   $get_category[$counter][1];


                    ?>
                          <a href="blogs.php?blog-cat=<?php echo $result_category ?>"  ><li class="cat-box-item <?php if($category == $result_category){echo "cat-box-item-active"; }?>"><i class="fa fa-angle-double-right cat-box-fa"></i> <span class="cat-box-item-text"><?php echo $result_category ?></span></li></a>
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
            <div class="col-md-8" >
              <div class="row">
                <div class="col">

                <?php
                  if($category == 'All')
                  {
                    $get_blogs=$db->get_blogs();
                  }
                  else
                  {
                    $get_blogs = $db->fetch_blog_records_by_category($category);
                  }
                  if(!empty($get_blogs))
                  {
                    $counter    =   0;

                    foreach($get_blogs as $record)
                    {
                      $blogID = $get_blogs[$counter][0];
                      $blog_title = $get_blogs[$counter][1];
                      $blog_category = $get_blogs[$counter][2];
                      $blog_meta_desc = $get_blogs[$counter][3];
                      $blog_desc = $get_blogs[$counter][4];
                      $datemod = $get_blogs[$counter][6];
                      $blog_image = $get_blogs[$counter][7];
                      $blog_permalink = $get_blogs[$counter][8];
                ?>

                      <div class="blog-card">
                        <h5 class="blog-card-title"><?php echo $blog_title ?></h5>
                        <div class="row blog-card-body">
                          <img class="blog-card-image col-8 col-md-8 col-lg-4" src="Admin-Dashboard/assets/images/blog/<?php echo $blog_image; ?>" alt="Blogs Image">
                          <p class="blog-card-text col-8 col-md-8 col-lg-8 "><?php echo $blog_meta_desc; ?></p>
                        </div>
                        <div class="row">
                          <div class="ml-auto mr-3"><a href="blogs_read_more.php?blog-id=<?php echo $blogID; ?>" class="blog-card-btn">Read More..</a></div>
                        </div>
                      </div>
                      <hr>
                  <?php
                      $counter++;
                    }
                  }
                  ?>
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
    <?php require_once('include/footer.php'); ?>
  </body>
</html>
