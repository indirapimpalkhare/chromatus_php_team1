<?php

require_once("Admin-Dashboard/lib/class/functions.php");
$db = new functions();

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

          <title>Home - Chromatus Consulting</title>
      </head>
    <body>
        <!--Header Start-->
        <?php require_once('include/nav.php'); ?>
        <!--Header Ends-->
        <div class = "imgbox">
        <?php
              $counter=0;
              $get_carousel = $db->get_all_carousel_images();
              if(!empty($get_carousel))
              {
                ?>

                  <div id="carouselHomePage" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
              <?php
                        foreach($get_carousel as $image)
                        {
                            $img  =   $get_carousel[$counter][0];
                            $text = $get_carousel[$counter][1];
                            if($counter == 0){
                            echo "<div class='carousel-item active'>" ;
                            }
                            else{
                              echo "<div class='carousel-item'>" ;
                            }
                            echo "<img src='Admin-Dashboard/img/uploads/carousel/".$img."' class='center-fit' alt='".$text."'>";
                            echo "</div>";
                            $counter++;
                          }
                ?>

            <a class="carousel-control-prev" href="#carouselHomePage" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselHomePage" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      <?php } ?>

        <div class="our_services">
        <div class = "row m-4 pt-4 mt-4">
          <div class = "col-md-8 align-self-start">
            <div class="card">
              <div class="card-header">
                Latest Report
              </div>
              <?php
                $get_news		=	array();
                $get_news		=	$db->get_latest_news();
                if(!empty($get_news))
                {
                  $counter_n	=	0;

                  foreach($get_news as $record)
                  {

                    $got_id				=   $get_news[$counter_n][0];
                    $got_news_title	    =	$get_news[$counter_n][1];
                    $got_news_category	=	$get_news[$counter_n][2];
                    $got_news_metaDesc 	=	$get_news[$counter_n][3];
                    $got_news_desc	    =	$get_news[$counter_n][4];
                    $got_news_permalink =	$get_news[$counter_n][5];
                    $got_news_date   	=	$get_news[$counter_n][6];

               ?>
              <div class="card-body">
                <h5 class="card-title"><?php echo $got_news_title; ?></h5>
                <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $got_news_date; ?></small></p>
                <p class="card-text"><?php echo $got_news_metaDesc; ?></p>
                <a href="news-desc.php?news-id=<?php echo $got_id; ?>" class="btn btn-primary">Read More...</a>
                <hr>
              </div>
                <?php
                  $counter_n++;
                }
              }
            else{
              ?>
                  <div class="card-body">
                    <h5 class="card-title">No latest Press Release </h5>
                    <hr>
                  </div>
            <?php
            }

                ?>
              </div>
            </div>
          <div class = "col-md-4 align-self-end">
            <div class="card">
              <div class="card-header">
                Latest Press Release
              </div>
          <?php
            $get_pr		=	array();
            $get_pr		=	$db->get_latest_pr();
            if(!empty($get_pr))
            {
              $counter	=	0;

              foreach($get_pr as $record)
              {

                $got_id				=   $get_pr[$counter][0];
                $got_pr_title	    =	$get_pr[$counter][1];
                $got_pr_author	    =	$get_pr[$counter][2];
                $got_pr_category	=	$get_pr[$counter][3];
                $got_pr_metaDesc 	=	$get_pr[$counter][4];
                $got_pr_desc	    =	$get_pr[$counter][5];
                $pr_image	 		= 	$get_pr[$counter][6];
                $got_pr_permalink 	= 	$get_pr[$counter][7];
                $date_added 		= 	$get_pr[$counter][8];
                $date_modified		= 	$get_pr[$counter][9];
                $status 			= 	$get_pr[$counter][10];

           ?>


              <div class="card-body">
                <h5 class="card-title"><?php echo $got_pr_title ?> </h5>
                <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $got_pr_added; ?></small></p>
                <p class="card-text"><?php echo $got_pr_metaDesc?> </p>
                <a href="pr_read_more.php?pr_id=<?php echo $got_id ?>" class="btn btn-primary">Read More...</a>
                <hr>
              </div>
                <?php
                  $counter++;
                }
              }
            else{
              ?>
                  <div class="card-body">
                    <h5 class="card-title">No latest Press Release </h5>
                    <hr>
                  </div>
            <?php
            }

                ?>
              </div>
            </div>
          </div>
        </div>
         <br>
         <div class="services">
            <h1>Our Services</h1>
            <div class="cen">
              <div class="service">
                <i class="fa fa-newspaper-o" aria-hidden = "true"></i>
                <h2>Annual Subscription</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class="fa fa-balance-scale"></i>
                <h2>Competitive Benchmarking</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class="fa fa-user-circle-o"></i>
                <h2>CSR Consulting</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class="fa fa-smile-o"></i>
                <h2>Customer Satisfaction Surveys</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class="fa fa-globe"></i>
                <h2>Customized Consulting</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class="fa fa-line-chart"></i>
                <h2>Data Mining &amp; Analytics</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class="fa fa-bar-chart"></i>
                <h2>Field Survey</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class="fa fa-book"></i>
                <h2>Knowledge Warehouse</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class="fa fa-file-text-o"></i>
                <h2>Lead Generation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php require_once('include/footer.php'); ?>

  </body>
</html>
